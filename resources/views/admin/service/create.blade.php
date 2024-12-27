@extends('admin.layouts.master')
@section('title','Add Service')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Services</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Add Service</h5>
                </div>

                <div class="card-body">
                    <form method="POST" data-parsley-validate="" id="addEditForm" role="form">
                        @csrf
                        <input type="hidden" id="edit_value" value="0" name="edit_value">
                        <div class="row mb-3">
                            <div class="col-lg-6 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="service_name" name="service_name"
                                           placeholder="Service Name">
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="slug" name="slug"
                                           placeholder="Slug">
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="service_image" class="form-label">Image</label>
                                <div class="form-group">
                                    <input type="file" class="form-control dropify"
                                           id="service_image" name="service_image"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="service_description" class="form-label">Description</label>
                                <textarea class="summernote form-control"
                                          name="service_description"
                                          id="service_description">
                                            </textarea>
                            </div>
                        </div>


                        <div class="text-end">
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            <a href="{{ route('admin.service.index') }}"
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
        let form_url = '/service';
        let redirect_url = '/service';
    </script>
    <script type="text/javascript">
        $("#service_name").keyup(function () {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/ /g, "-")
                .replace(/[^\w-]+/g, "");
            $("#slug").val(Text);
        });
    </script>
    <script src="{{ asset('assets/custom-js/custom/form.js') }}"></script>
@endsection
