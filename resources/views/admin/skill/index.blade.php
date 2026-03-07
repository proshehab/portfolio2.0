@extends('admin.layouts.master')
@section('content')

<div class="container-xxl">

    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Skill</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                <li class="breadcrumb-item active">Skill</li>
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
                        <div class="col-lg-8">
                            <form method="POST" action="{{ route('admin.home.skill.update') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Subtitle</label>
                                    <input type="text" id="simpleinput" class="form-control" name="skill_subtitle"
                                        value="{{ old('skill_subtitle', $homePageItem->skill_subtitle ?? '') }}">
                                    @error('skill_subtitle')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Title</label>
                                    <input type="text" id="simpleinput" class="form-control" name="skill_title"
                                        value="{{ old('skill_title', $homePageItem->skill_title ?? '') }}">
                                    @error('skill_title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label class="form-label mt-2">Status</label>
                                    <select name="about_status"
                                        class="form-control @error('about_status') is-invalid @enderror">
                                        <option value="1" {{ old('about_status', $about->
                                            about_status ?? '') == '1' ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ old('about_status', $about->about_status ?? '') == '0'
                                            ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    @error('about_status')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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