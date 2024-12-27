@extends('admin.layouts.master')
@section('title','Service Providers')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Service Providers</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h5 class="card-title mb-0 flex-grow-1">Service Providers List</h5>
                    <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
{{--                            <a href="{{ route('admin.service-provider.create') }}"--}}
{{--                               class="btn btn-primary btn-sm">Add New</a>--}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered dt-responsive nowrap table-striped align-middle"
                           id="basic-1" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
    <script>
        let datatable_url = '/get-service-provider-list'
        let redirect_url = '/service-provider'
        let form_url = '/service-provider'
        const sweetalert_delete_title = 'Delete Service Provider ?'
        const sweetalert_delete_text = 'Are you sure want to delete this record ?'

        $.extend(true, $.fn.dataTable.defaults, {
            columns: [
                {data: 'id', name: 'users.id'},
                {data: 'name', name: 'users.name'},
                {data: 'email', name: 'users.email'},
                {data: 'status', name: 'users.status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            order: [0, 'desc']
        })
    </script>
    <script src="{{ asset('assets/custom-js/custom/datatable.js') }}?v={{time()}}"></script>
@endsection
