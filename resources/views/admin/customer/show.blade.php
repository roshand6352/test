@extends('admin.layouts.master')
@section('title', 'Customer Detail')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Customer Details</h4>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Customer Details</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th scope="row">Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">User Type</th>
                            <td>{{ str_replace('_',' ',ucfirst($user->user_type)) }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Status</th>
                            <td>
                                @if ((string)$user->status === 'active')
                                    <div
                                        class="badge bg-success">Active
                                    </div>
                                @else
                                    <div class="badge bg-danger">inActive</div>
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
@endsection
