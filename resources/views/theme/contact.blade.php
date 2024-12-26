@extends('theme.master')
@section('title', 'Contact')

@section('content')
    <!-- Main Section-->
    <section class="container py-3 " data-scroll-section>
        <!-- Page Content Goes Here -->

        <div class="position-relative ps-xl-7">
            <div class="tracking-wide text-vertical mt-4 small d-none d-xl-block"><a class="text-vertical-link me-3"
                    href="#">Facebook</a>
                &middot; <a class="text-vertical-link mx-3" href="#">Twitter</a> &middot; <a
                    class="text-vertical-link ms-3" href="#">Github</a></div>

            <h1 class="display-3 col-xxl-8 mb-8">Let's work together on your next project</h1>

            <h4 class="subtitle-sm mb-3">Email me</h4>
            <a class="link-body" href="mailto:mahdi2info@gmail.com">mahdi2info@gmail.com</a>


            <h4 class="subtitle-sm mb-3 mt-8">Call me</h4>
            <a class="link-body" href="tel:+9647832437906">+964 7832437906</a>

            <h4 class="subtitle-sm mt-8 mb-4">Send Me A Message</h4>
            @if (session('status-message'))
                <div class="alert alert-success">
                    {{ session('status-message') }}
                </div>
            @endif
            <!-- Contact Form-->
            <form id="submit_form" action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="row g-5">
                    <div class="col-12">
                        <div class="row g-5">
                            <!-- Name-->
                            <div class="col-12">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control w-100" name="name" placeholder="Ali Read"
                                    value="{{ old('name') }}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            </div>
                            <!-- / Name-->

                            <!-- Email-->
                            <div class="col-12">
                                <label class="form-label">Your Email Address</label>
                                <input type="email" class="form-control w-100" name="email"
                                    placeholder="info@example.com" value="{{ old('email') }}">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>
                            <!-- / Email-->

                            <!-- Telephone-->
                            <div class="col-12">
                                <label class="form-label">Your Telephone</label>
                                <input type="text" class="form-control w-100" name="phone"
                                    placeholder="+964 7711100010" value="{{ old('phone') }}">
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                            </div>
                            <!-- / Telephone-->



                            <!-- Project Information-->
                            <div class="col-12">
                                <label class="form-label">Tell Me About Your Project</label>
                                <textarea name="message" class="form-control w-100" cols="30" rows="12"
                                    placeholder="Hi Mahdi, I would like to talk about the design and creation of medical advertisements, focusing on visual content that effectively promotes healthcare services and workshops . . .">{{ old('message') }}</textarea>
                                <x-input-error :messages="$errors->get('message')" class="mt-2" />

                            </div>
                            <!-- / Project Information-->

                            <!-- Submit btn-->
                            <div class="col-12">
                                <button type="submit"
                                    class="btn btn-dark w-100 d-flex align-items-center justify-content-center"><i
                                        class="ri-arrow-right-fill ri-lg me-2"></i>
                                    Login
                                </button>
                            </div>
                            <!-- / Submit Btn-->
                        </div>
                    </div>
                </div>
            </form>


            <!-- / Contact Form-->
        </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->
@endsection
