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
                    <h5 class="card-title mb-0">Update Banner Information</h5>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="post" action="{{ route('admin.home.banner.update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Title *</label>
                                    <input type="text" class="form-control @error('banner_title') is-invalid @enderror"
                                        name="banner_title" value="{{ old('banner_title', $banner->banner_title) }}">
                                    @error('banner_title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Name *</label>
                                    <input type="text" id="simpleinput"
                                        class="form-control @error('banner_name')is-invalid @enderror"
                                        name="banner_name" value="{{ old('banner_name', $banner->banner_name) }}">
                                    @error('banner_name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Designation *</label>
                                    <input type="text" id="simpleinput"
                                        class="form-control @error('banner_designation')is-invalid @enderror"
                                        name="banner_designation"
                                        value="{{ old('banner_designation', $banner->banner_designation) }}">
                                    @error('banner_designation')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Description *</label>
                                    <textarea class="form-control @error('banner_description')is-invalid @enderror"
                                        id="example-textarea" rows="5" spellcheck="false"
                                        name="banner_description">{{ old('banner_description', $banner->banner_description) }}</textarea>
                                    @error('banner_description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Button Text *</label>
                                    <input type="text" id="simpleinput"
                                        class="form-control @error('banner_button_text')is-invalid @enderror"
                                        name="banner_button_text"
                                        value="{{ old('banner_button_text', $banner->banner_button_text) }}">
                                    @error('banner_button_text')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Button URL *</label>
                                    <input type="text" id="simpleinput"
                                        class="form-control @error('banner_button_url')is-invalid @enderror"
                                        name="banner_button_url"
                                        value="{{ old('banner_button_url', $banner->banner_button_url) }}">
                                    @error('banner_button_url')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image *</label>
                                <input class="form-control" type="file" id="formFile" name="banner_image">

                                @if($banner->banner_image)
                                <div class="mt-3">
                                    <p>Current Image:</p>
                                    <img src="{{ asset($banner->banner_image) }}" alt="Banner Image" width="200"
                                        class="img-thumbnail">
                                </div>
                                @endif
                            </div>
                        </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>






</div> <!-- container-fluid -->



@endsection