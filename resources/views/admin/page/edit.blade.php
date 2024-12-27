@extends('admin.layouts.master')
@section('title','Edit Page')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Pages</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Edit Page</h5>
                </div>

                <div class="card-body">
                    <form method="POST" data-parsley-validate="" id="addEditForm" role="form">
                        @csrf
                        <input type="hidden" id="edit_value" value="{{$page->page_id_no}}" name="edit_value">
                        <div class="row mb-3">
                            <div class="col-lg-6 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" value="{{$page->name}}"
                                           placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="slug" name="slug"
                                           placeholder="Slug" value="{{$page->slug}}">
                                </div>
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-12 mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="summernote form-control"
                                          name="description"
                                          id="description">{!! $page->description !!}
                                            </textarea>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            <a href="{{ route('admin.page.index') }}"
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
        var form_url = '/page'
        var redirect_url = '/page'
    </script>
    <script type="text/javascript">

        $("#name").keyup(function () {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/ /g, "-")
                .replace(/[^\w-]+/g, "");
            $("#slug").val(Text);
        });
    </script>

    <script src="{{URL::asset('assets/admin/custom/page/page.js')}}?v={{ time() }}"></script>
@endsection
