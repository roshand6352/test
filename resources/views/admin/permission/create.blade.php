@extends('admin.layouts.master')
@section('title','Add Permission')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Permissions</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Add Permission</h5>
                </div>

                <div class="card-body">
                    <form method="POST" data-parsley-validate="" id="addEditForm" role="form">
                        @csrf
                        <input type="hidden" id="edit_value" value="0" name="edit_value">
                        <div class="row mb-3">
                            <div class="col-lg-6 mb-3">
                                <label for="module_name" class="form-label">Module Name</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="module_name" name="module_name"
                                           placeholder="Module Name" data-parsley-pattern="/^[A-Za-z ]+$/">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group form-control-solid">
                                <label for="module_name" class="form-label">Choose Permission</label><br>

                                <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                                    <input class="form-check-input" id="all" name="all" type="checkbox">
                                    <label class="form-check-label"
                                           for="all">Select All</label>
                                </div>
                                @foreach($array as $value)
                                    <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                                        <input class="form-check-input" id="{{$value}}" name="{{$value}}"
                                               value="1"
                                               type="checkbox">
                                        <label class="form-check-label"
                                               for="{{$value}}">{{ $value }}</label>
                                    </div>
                                @endforeach
                                <div class="help-block with-errors error"></div>
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
        var form_url = '/permission'
        var redirect_url = '/permission/create'

        $('#all').click(function () {
            if ($(this).is(':checked')) {
                $("#create").attr('checked', true);
                $("#update").attr('checked', true);
                $("#read").attr('checked', true);
                $("#delete").attr('checked', true);
                $("#restore").attr('checked', true);
                $("#status").attr('checked', true);
                $("#detail").attr('checked', true);
            } else {
                $("#create").attr('checked', false);
                $("#update").attr('checked', false);
                $("#read").attr('checked', false);
                $("#delete").attr('checked', false);
                $("#restore").attr('checked', false);
                $("#status").attr('checked', false);
                $("#detail").attr('checked', false);
            }
        });
    </script>
    <script src="{{URL::asset('assets/custom-js/custom/form.js')}}?v={{ time() }}"></script>
@endsection
