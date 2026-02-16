@extends('admin.layouts.master')

@section('content')

<div class="container-xxl">

    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">About Section</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">About Section</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">Update About Information</h5>
                </div>

                <div class="card-body">
                    <div class="row">

                        <form method="POST" action="{{ route('admin.home.about.update') }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <!-- LEFT SIDE -->
                                <div class="col-lg-6">

                                    {{-- Subtitle --}}
                                    <div class="mb-3">
                                        <label class="form-label">Subtitle</label>
                                        <input type="text" name="about_subtitle"
                                            class="form-control @error('about_subtitle') is-invalid @enderror"
                                            value="{{ old('about_subtitle', $about->about_subtitle ?? '') }}">
                                        @error('about_subtitle')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Title --}}
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" name="about_title"
                                            class="form-control @error('about_title') is-invalid @enderror"
                                            value="{{ old('about_title', $about->about_title ?? '') }}">
                                        @error('about_title')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Description --}}
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="about_description" rows="5"
                                            class="form-control @error('about_description') is-invalid @enderror">{{ old('about_description', $about->about_description ?? '') }}</textarea>
                                        @error('about_description')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- About Photo --}}
                                    <div class="mb-3">
                                        <label class="form-label">About Photo</label>
                                        <input type="file" name="about_photo" class="form-control">
                                    </div>

                                    {{-- Show Current Photo --}}
                                    @if(!empty($about->about_photo))
                                    <div class="mb-3">
                                        <p>Current Photo:</p>
                                        <img src="{{ asset($about->about_photo) }}" width="200" class="img-thumbnail">
                                    </div>
                                    @endif

                                </div>

                                <!-- RIGHT SIDE -->
                                <div class="col-lg-6">

                                    {{-- Person Name --}}
                                    <div class="mb-3">
                                        <label class="form-label">Person Name</label>
                                        <input type="text" name="about_person_name"
                                            class="form-control @error('about_person_name') is-invalid @enderror"
                                            value="{{ old('about_person_name', $about->about_person_name ?? '') }}">
                                        @error('about_person_name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Phone --}}
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input type="text" name="about_person_phone"
                                            class="form-control @error('about_person_phone') is-invalid @enderror"
                                            value="{{ old('about_person_phone', $about->about_person_phone ?? '') }}">
                                        @error('about_person_phone')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Email --}}
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="about_person_email"
                                            class="form-control @error('about_person_email') is-invalid @enderror"
                                            value="{{ old('about_person_email', $about->about_person_email ?? '') }}">
                                        @error('about_person_email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Social Icons --}}
                                    <hr>
                                    <h6>Social Icons</h6>

                                    @for($i = 1; $i <= 5; $i++) <div class="mb-2">
                                        <label>Icon {{ $i }} (Class)</label>
                                        <input type="text" name="about_icon{{ $i }}" class="form-control"
                                            value="{{ old('about_icon'.$i, $about->{'about_icon'.$i} ?? '') }}"
                                            placeholder="Example: fab fa-facebook-f">
                                </div>

                                <div class="mb-3">
                                    <label>Icon {{ $i }} URL</label>
                                    <input type="text" name="about_icon{{ $i }}_url" class="form-control"
                                        value="{{ old('about_icon'.$i.'_url', $about->{'about_icon'.$i.'_url'} ?? '') }}">
                                </div>
                                @endfor

                                {{-- Status --}}
                                <div class="form-check mt-3">
                                    <input type="checkbox" name="about_status" class="form-check-input" value="1" {{
                                        old('about_status', $about->about_status ?? '') == 'active' ? 'checked' : '' }}>
                                    <label class="form-check-label">Active</label>
                                </div>

                            </div>

                            {{-- Submit Button --}}
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                    </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</div>

@endsection