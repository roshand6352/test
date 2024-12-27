<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\AdminDataTableButtonHelper;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:customer-read|customer-create|customer-update|customer-delete|customer-status|customer-detail', ['only' => ['index']]);
        $this->middleware('permission:customer-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:customer-update', ['only' => ['edit', 'update', 'store']]);
        $this->middleware('permission:customer-delete', ['only' => ['destroy', 'hardDelete', 'multipleVehicleDelete']]);
        $this->middleware('permission:customer-status', ['only' => ['changeStatus']]);
        $this->middleware('permission:customer-detail', ['only' => ['show']]);
    }
    public function index()
    {
        return view('admin.customer.index');
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
                ->where('users.user_type', 'customer')
                ->orderBy('id', 'desc')
                ->select('users.*');
            if (!empty($request->status) && $request->status !== 'all') {
                $users->where('users.status', $request->status);
            }
            return Datatables::of($users)
                ->addColumn('action', function ($users) {
                    $actions['delete'] = $users->id;
                    $actions['view-page'] = route('admin.customer.show', [$users->id]);
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
        return view('admin.customer.show', [
            'user' => $user
        ]);
    }
}
