@extends('admin.layouts.master')
@section('title','Add Role')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Roles</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Add Role</h5>
                </div>

                <div class="card-body">
                    <form method="POST" data-parsley-validate="" id="addEditForm" role="form">
                        @csrf
                        <input type="hidden" id="edit_value" value="0" name="edit_value">
                        <div class="row mb-3">
                            <div class="col-lg-6 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Name">
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-12">
                            <div class="card mg-b-20">
                                <div class="card-header pb-0">
                                    <div class="d-flex justify-content-between"><h4 class="card-title mg-b-0">
                                            {{trans('admin_string.permission')}}</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table align-middle table-row-dashed fs-6 gy-5">

                                            @foreach($permissions as $permission)
                                                <tr>
                                                    <th scope="row"
                                                        class="fs-6 fw-bold mb-2">
                                                        @if(App::getLocale() == 'ar')
                                                            {{$permission->ar_module_name}}
                                                        @else
                                                            {{$permission->module_name}}
                                                        @endif
                                                    </th>
                                                        <?php
                                                        $pers = \Spatie\Permission\Models\Permission::where('module_name', $permission->module_name)->get();
                                                        ?>
                                                    @foreach($pers as $per)
                                                        <td>
                                                            <div
                                                                class="form-check form-check-inline checkbox checkbox-dark mb-0">
                                                                <label
                                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                    <input class="form-check-input"
                                                                           type="checkbox"
                                                                           id={{$per->id}} value="{{$per->id}}"
                                                                           name="permission[]"/>
                                                                    <span
                                                                        class="form-check-label">
                                                                                @if(App::getLocale() == 'ar')
                                                                            {{$per->ar_name}}
                                                                        @else
                                                                            {{$per->name}}
                                                                        @endif
                                                                            </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            <a href="{{ route('admin.role.index') }}"
                               class="btn btn-danger btn-sm">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('custom-script')
    <script>
        let form_url = '/role'
        let redirect_url = '/role'
    </script>
    <script src="{{ asset('assets/custom-js/custom/form.js') }}"></script>
    <script src="{{URL::asset('assets/admin/custom/role/role.js')}}?v={{ time() }}"></script>
@endsection
