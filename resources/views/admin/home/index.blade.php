@extends('admin.layouts.master')
@section('content')


<!-- Start Content-->
<div class="container-xxl">

    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Banner Elements</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                <li class="breadcrumb-item active">Banner Elements</li>
            </ol>
        </div>
    </div>

    <!-- General Form -->
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">Input Type</h5>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form>
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Title</label>
                                    <input type="text" id="simpleinput" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Name *</label>
                                    <input type="text" id="simpleinput" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Designation</label>
                                    <input type="text" id="simpleinput" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Description</label>
                                    <textarea class="form-control" id="example-textarea" rows="5"
                                        spellcheck="false"></textarea>
                                </div>

                                 <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Button Text</label>
                                    <input type="text" id="simpleinput" class="form-control">
                                </div>

                                 <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Button URL</label>
                                    <input type="text" id="simpleinput" class="form-control">
                                </div>



                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>

                        <div class="col-lg-6">
                            <form>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input example</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>



                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>






</div> <!-- container-fluid -->



@endsection