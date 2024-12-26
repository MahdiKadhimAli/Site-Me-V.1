@extends('theme.master')
@section('title', 'Edit')
@section('content')
    <!-- Main Section-->
    <section class="container py-3 " data-scroll-section>


        {{-- image == iamge --}}

        <!-- Page Edit -->
        <div class="position-relative ps-xl-7">
            <h1 class="display-3 col-xxl-8 mb-8">Edit Post </h1>
            @if (session('WorkUpdateStatus'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('WorkUpdateStatus') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <!-- Create Form-->
            <form action="{{ route('works.update', ['work' => $work]) }}" method="POST" id="submit_form"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-5">
                    <div class="col-12">
                        <div class="row g-5">

                            <!-- title-->
                            <div class="col-12">
                                <label class="form-label">Your Title</label>
                                <input type="text" class="form-control w-100" name="title" value="{{ $work->title }}">
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />

                            </div>
                            <!-- / title-->
                            <!-- description-->
                            <div class="col-12">
                                <label class="form-label">Your Description</label>
                                <input type="text" class="form-control w-100" name="description"
                                    value="{{ $work->description }}">
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />

                            </div>
                            <!-- / description-->

                            <!-- Password-->
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control w-100" name="iamge">
                                <x-input-error :messages="$errors->get('iamge')" class="mt-2" />
                            </div>
                            <!-- / Password-->
                            <!-- Submit btn-->
                            <div class="col-12">

                                <button type="submit"
                                    class="btn btn-dark w-100 d-flex align-items-center justify-content-center"><i
                                        class="ri-arrow-right-fill ri-lg me-2"></i>
                                    Edit Post
                                </button>
                            </div>

                            <!-- / Submit Btn-->
                        </div>
                    </div>
                </div>
            </form>


            <!-- / Contact Form-->
        </div>

        <!-- /Page Create -->
    </section>
    <!-- / Main Section-->
@endsection
