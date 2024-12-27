<?php

namespace App\Http\Controllers\Admin;


use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceStoreRequest;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Helpers\AdminDataTableButtonHelper;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:service-read|service-create|service-update|service-delete|service-status|service-detail', ['only' => ['index']]);
        $this->middleware('permission:service-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:service-update', ['only' => ['edit', 'update', 'store']]);
        $this->middleware('permission:service-delete', ['only' => ['destroy', 'hardDelete', 'multipleVehicleDelete']]);
        $this->middleware('permission:service-status', ['only' => ['changeStatus']]);
        $this->middleware('permission:service-detail', ['only' => ['show']]);
    }

    public function index()
    {
        return view('admin.service.index');
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(ServiceStoreRequest $request): JsonResponse
    {
        $validated = $request->validated();
        if ((int)$validated['edit_value'] === 0) {
            $service = new Service();
            $service->service_name = $request->service_name;
            $service->slug = $request->slug;
            if ($request->hasfile('service_image')) {
                $service_image = ImageUploadHelper::imageUpload($request->file('service_image'), 'service-image');
                $service->service_image = $service_image;
            }
            $service->service_description = $request->service_description;
            $service->save();
            return response()->json([
                'message' => 'Record Add Successfully'
            ]);

        } else {
            $service = Service::where('service_id_no', $validated['edit_value'])->first();
            $service_image = $service->service_image;
            if ($request->hasfile('service_image')) {
                $service_image = ImageUploadHelper::imageUpload($request->file('service_image'), 'service-image');
                $service->service_image = $service_image;
            }
            Service::where('service_id_no', $validated['edit_value'])->update([
                'service_name' => $request->service_name,
                'service_image' => $service_image,
                'service_description' => $request->service_description,
                'slug' => $request->slug,
            ]);

            return response()->json([
                'message' => 'Record Update Successfully'
            ]);
        }
    }

    public function edit($id)
    {
        $service = Service::where('service_id_no', $id)->first();
        return view('admin.service.edit', [
            'service' => $service,
        ]);
    }

    public function destroy($id): JsonResponse
    {
        Service::where('service_id_no', $id)->delete();
        return response()->json([
            'message' => 'Record Delete Successfully'
        ]);
    }

    public function getServiceList(Request $request)
    {
        if ($request->ajax()) {
            $services = DB::table('services')
                ->orderBy('service_id_no', 'desc')
                ->select('services.*');
            if (!empty($request->status) && $request->status !== 'all') {
                $services->where('services.status', $request->status);
            }
            return Datatables::of($services)
                ->addColumn('action', function ($services) {
                    $actions['edit'] = route('admin.service.edit', [$services->service_id_no]);
                    $actions['delete'] = $services->service_id_no;
                    $array = [
                        'id' => $services->service_id_no,
                        'actions' => $actions
                    ];
                    return AdminDataTableButtonHelper::actionButtonDropdown2($array);
                })
                ->addColumn('status', function ($services) {
                    return AdminDataTableButtonHelper::serviceStatusBadge($services);
                })
                ->addColumn('service_image', function ($services) {
                    $service_image = '<a href="' . asset($services->service_image) . '" target="_blank"><img src="' . asset($services->service_image) . '" style="width: 70px"></img></a>';
                    return $service_image;
                })
                ->rawColumns(['action', 'status', 'service_image'])
                ->make(true);
        }
    }

    public function changeStatus($id, $status): JsonResponse
    {
        Service::where('service_id_no', $id)->update(['status' => $status]);
        return response()->json([
            'message' => 'Status Change Successfully',
        ]);
    }
}
