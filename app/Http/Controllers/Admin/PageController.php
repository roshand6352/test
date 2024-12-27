<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\Admin\PageStoreRequest;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\DB;
use App\Helpers\AdminDataTableButtonHelper;
use Yajra\DataTables\Facades\DataTables;

class PageController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:page-read|page-create|page-update|page-delete|page-status|page-detail', ['only' => ['index']]);
        $this->middleware('permission:page-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:page-update', ['only' => ['edit', 'update', 'store']]);
        $this->middleware('permission:page-delete', ['only' => ['destroy', 'hardDelete', 'multipleVehicleDelete']]);
        $this->middleware('permission:page-status', ['only' => ['changeStatus']]);
        $this->middleware('permission:page-detail', ['only' => ['show']]);
    }

    public function index()
    {
        return view('admin.page.index');
    }

    public function create()
    {
        return view('admin.page.create');
    }

    public function store(PageStoreRequest $request): JsonResponse
    {
        $validated = $request->validated();
        if ((int)$validated['edit_value'] === 0) {
            $page = new Page();
            $page->slug = $request->slug;
            $page->name = $request->name;
            $page->description = $request->description;
            $page->save();
            return response()->json([
                'message' => 'Record Add Successfully'
            ]);

        } else {
             DB::table('pages')->where('page_id_no',$validated['edit_value'])
                ->update([
                    'slug' => $request->slug,
                    'name' => $request->name,
                    'description' => $request->description,
                ]);

            return response()->json([
                'message' => 'Record Update Successfully'
            ]);
        }
    }

    public function edit($id)
    {
        $page = Page::where('page_id_no', $id)->first();
        return view('admin.page.edit', [
            'page' => $page,
        ]);
    }

    public function destroy($id): JsonResponse
    {
        Page::where('page_id_no', $id)->delete();
        return response()->json([
            'message' => 'Record Delete Successfully'
        ]);
    }

    public function getPageList(Request $request)
    {
        if ($request->ajax()) {
            $pages = DB::table('pages')
                ->orderBy('page_id_no', 'desc')
                ->select('pages.*');
            if (!empty($request->status) && $request->status !== 'all') {
                $pages->where('pages.status', $request->status);
            }
            return Datatables::of($pages)
                ->addColumn('action', function ($pages) {
                    $actions['edit'] = route('admin.page.edit', [$pages->page_id_no]);
                    $actions['delete'] = $pages->page_id_no;
                    $array = [
                        'id' => $pages->page_id_no,
                        'actions' => $actions
                    ];
                    return AdminDataTableButtonHelper::actionButtonDropdown2($array);
                })
                ->addColumn('status', function ($pages) {
                    return AdminDataTableButtonHelper::statusBadge($pages);
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
    }

    public function changeStatus($id, $status): JsonResponse
    {
        Page::where('page_id_no', $id)->update(['status' => $status]);
        return response()->json([
            'message' => 'Status Change Successfully',
        ]);
    }
}
