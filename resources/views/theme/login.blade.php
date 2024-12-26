@extends('theme.master')
@section('title', 'Login')
@section('content')
    <!-- Main Section-->
    <section class="container py-3 " data-scroll-section>
        <!-- Page Login -->
        <div class="position-relative ps-xl-7">
            <h1 class="display-3 col-xxl-8 mb-8">Wellcom Back</h1>
            <!-- Login Form-->
            <form method="POST" action="{{ route('login') }}" id="submit_form">
                @csrf
                <div class="row g-5">
                    <div class="col-12">
                        <div class="row g-5">

                            <!-- Email-->
                            <div class="col-12">
                                <label class="form-label">Your Email Address</label>
                                <input type="email" class="form-control w-100" name="email"
                                    placeholder="info@example.com">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>
                            <!-- / Email-->

                            <!-- Password-->
                            <div class="col-12">
                                <label class="form-label">Your Password</label>
                                <input type="password" class="form-control w-100" name="password" placeholder="*****">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                            </div>

                            <!-- / Password-->

                            <!-- Submit btn-->
                            <div class="col-12">
                                <button type="submit"
                                    class="btn btn-dark w-100 d-flex align-items-center justify-content-center"><i
                                        class="ri-arrow-right-fill ri-lg me-2"></i>
                                    Login
                                </button>
                            </div>
                            <p class="d-flex flex-wrap align-items-center justify-content-center">
                                <span class="me-1">Don’t have an account?</span>
                                <a class="btn px-0 btn-link fw-bold" href="{{ route('register') }}">register</a>
                            </p>
                            <!-- / Submit Btn-->
                        </div>
                    </div>
                </div>
            </form>


            <!-- / Contact Form-->
        </div>

        <!-- /Page Login -->
    </section>
    <!-- / Main Section-->

@endsection
