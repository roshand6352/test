<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\AdminDataTableButtonHelper;
use Yajra\DataTables\Facades\DataTables;

class ServiceProviderController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:service-provider-read|service-provider-create|service-provider-update|service-provider-delete|service-provider-status|service-provider-detail', ['only' => ['index']]);
        $this->middleware('permission:service-provider-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:service-provider-update', ['only' => ['edit', 'update', 'store']]);
        $this->middleware('permission:service-provider-delete', ['only' => ['destroy', 'hardDelete', 'multipleVehicleDelete']]);
        $this->middleware('permission:service-provider-status', ['only' => ['changeStatus']]);
        $this->middleware('permission:service-provider-detail', ['only' => ['show']]);
    }
    public function index()
    {
        return view('admin.service-provider.index');
    }

    public function destroy($id): JsonResponse
    {
        User::where('id', $id)->delete();
        return response()->json([
            'message' => 'Record Delete Successfully'
        ]);
    }

    public function getCustomerList(Request $request)
    {
        if ($request->ajax()) {
            $users = DB::table('users')
                ->where('users.user_type', 'service_provider')
                ->orderBy('id', 'desc')
                ->select('users.*');
            if (!empty($request->status) && $request->status !== 'all') {
                $users->where('users.status', $request->status);
            }
            return Datatables::of($users)
                ->addColumn('action', function ($users) {
                    $actions['delete'] = $users->id;
                    $actions['view-page'] = route('admin.service-provider.show', [$users->id]);
                    $array = [
                        'id' => $users->id,
                        'actions' => $actions
                    ];
                    return AdminDataTableButtonHelper::actionButtonDropdown2($array);
                })
                ->addColumn('status', function ($users) {
                    return AdminDataTableButtonHelper::userStatusBadge($users);
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
    }

    public function changeStatus($id, $status): JsonResponse
    {
        User::where('id', $id)->update(['status' => $status]);
        return response()->json([
            'message' => 'Status Change Successfully',
        ]);
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.service-provider.show', [
            'user' => $user
        ]);
    }
}
