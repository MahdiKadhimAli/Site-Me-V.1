@extends('theme.master')
@section('title', 'About')
@section('content')
    <!-- Main Section-->
    <section class="container py-3 " data-scroll-section>
        <!-- Page Content Goes Here -->

        <h1 class="display-3 mb-5" data-scroll data-scroll-speed="6" data-scroll-position="top">About Me</h1>

        <div class="row g-8">
            <!-- Profile Image-->
            <div class="col-12 col-md-5" data-scroll data-scroll-speed="6" data-scroll-position="top">
                <picture>
                    <img class="img-fluid" src="{{ asset('assets') }}/images/avatar.jpg"
                        alt="HTML Bootstrap Template by Pixel Rocket">
                </picture>
            </div>
            <!-- / Profile Image-->

            <!-- / Bio & CV Link-->
            <div class="col-12 col-md-7">
                <div class="row g-5 g-xl-8">
                    <div class="col-12 col-xl-7" data-scroll data-scroll-speed="4" data-scroll-position="top">
                        <p class="lead">I'm Mahdi Kadhim, a freelance web developer and graphic designer based in
                            Babylon, Iraq.</p>

                        <p>I'm passionate about creating visually engaging and easy-to-navigate layouts, blending
                            clean lines, bold contrasts, and
                            sophisticated illustrations.

                        <p>My work centers on crafting unique and functional designs that bring a creative edge to
                            websites and graphic assets.
                            Whether it's web design, user interfaces, or graphic design, I strive to deliver
                            innovative solutions that enhance user
                            experience and bring brands to life.</p>
                    </div>
                    <div class="col-12 col-xl-5" data-scroll data-scroll-speed="2" data-scroll-position="top">
                        <a href="#" class="btn btn-dark w-100 d-flex align-items-center justify-content-center"><i
                                class="ri-file-download-line ri-lg me-2"></i> Download My CV</a>
                        <h5 class="fw-medium mt-6 mb-3">Find Me Online</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2"><i class="ri-github-line me-3 ri-lg"></i> <a
                                    class="link-body" href="#">Github</a></li>
                            <li class="d-flex align-items-center mb-2"><i class="ri-facebook-line me-3 ri-lg"></i>
                                <a class="link-body" href="#">Facebook</a>
                            </li>
                            <li class="d-flex align-items-center mb-2"><i class="ri-twitter-line me-3 ri-lg"></i> <a
                                    class="link-body" href="#">Twitter</a></li>
                            <li class="d-flex align-items-center mb-2"><i class="ri-codepen-line me-3 ri-lg"></i> <a
                                    class="link-body" href="#">Codepen</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- / Bio & CV Link-->
        </div>

        <!-- Experience-->
        <div class="py-lg-6" data-scroll>
            <h2 class="display-6 border-bottom pb-5 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">
                Experience
            </h2> <!-- Single Experience-->
            <div class="row gx-2 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">
                <div class="col-12 col-lg-4">
                    <p class="fw-bolder mb-1">ITCT (It Coder Team)</p>
                    <span class="text-muted small">(2021 - 2023)
                    </span>
                </div>
                <div class="col-12 col-lg-8">
                    <p class="fw-bolder">Design Manager
                    </p>
                    <p class="text-muted fw-light fs-6">I joined the ITCT tech team in 2021, a team focused on
                        creating
                        educational courses in programming and technology.
                        During my time with them, I managed all aspects of design and oversaw the advertising
                        accounts. I was
                        responsible for
                        developing visual ads promoting online courses, as well as designing educational materials.
                        I left the
                        team in 2023
                        after contributing significantly to creating engaging visual content that attracted
                        audiences.</p>
                    <a class="link-body" href="https://www.instagram.com/itct_iq?igsh=ZGx3bzVhd3Zzd3Fk">View account
                    </a>
                </div>
            </div>
            <!-- / Single Experience -->
            <!-- Single Experience-->
            <div class="row gx-2 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">
                <div class="col-12 col-lg-4">
                    <p class="fw-bolder mb-1">Alpha Medical Academy
                    </p>
                    <span class="text-muted small">(2023 - present)
                    </span>
                </div>
                <div class="col-12 col-lg-8">
                    <p class="fw-bolder">Design Manager
                    </p>
                    <p class="text-muted fw-light fs-6">In 2023, I joined Alpha Medical Academy as a Design Manager.
                        My role
                        included designing advertisements for workshops and
                        training courses, as well as writing the related ad copy. I also designed attendance
                        certificates, video
                        covers, and
                        edited workshop photos. This experience enhanced my skills in advertising design while
                        working with a
                        diverse medical
                        team.</p>
                    <a class="link-body"
                        href="https://www.instagram.com/alpha_medical_academy?igsh=MTR6aWR4ejI3OHBiZg==">View
                        account</a>
                </div>
            </div>
            <!-- / Single Experience -->
            <!-- Single Experience-->
            <div class="row gx-2 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">
                <div class="col-12 col-lg-4">
                    <p class="fw-bolder mb-1">Freelance Projects
                    </p>
                    <span class="text-muted small">(2023 - present)</span>
                </div>
                <div class="col-12 col-lg-8">
                    <p class="fw-bolder">Freelance Designer
                    </p>
                    <p class="text-muted fw-light fs-6">During the same year, I worked as a freelance designer for
                        various
                        clients, including competitors of Alpha Medical
                        Academy. I delivered innovative design solutions for workshop and course advertisements,
                        helping these
                        companies stand
                        out in a competitive market.</p>
                </div>
            </div>
            <!-- / Single Experience -->
            <!-- Single Experience-->
            <div class="row gx-2 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">
                <div class="col-12 col-lg-4">
                    <p class="fw-bolder mb-1">Creative Logos
                    </p>
                    <span class="text-muted small">(2024 - present)
                    </span>
                </div>
                <div class="col-12 col-lg-8">
                    <p class="fw-bolder">Logo Designer
                    </p>
                    <p class="text-muted fw-light fs-6">In 2024, I improved my logo design skills, creating a
                        collection of
                        creative logos for a variety of clients. This
                        experience allowed me to refine my ability to deliver unique designs that reflect the
                        client's brand
                        identity.</p>
                </div>
            </div>
            <!-- / Single Experience -->
        </div> <!-- / Experience-->

        <!-- / Skills-->
        <!-- Skills Section-->
        <div class="pt-2 pb-6 skills" data-scroll>
            <h2 class="display-6 border-bottom pb-5 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">
                Skills</h2>
            <div class="row gx-10 gy-5">
                <!-- Single Skill-->
                <div class="col-12 col-lg-6 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="mb-0 fw-bolder">85%</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0 small lh-1">Adobe Photoshop
                            </p>
                        </div>
                        <div class="col-8">
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Single Skill -->
                <!-- Single Skill-->
                <div class="col-12 col-lg-6 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="mb-0 fw-bolder">75%</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0 small lh-1">Adobe Illustrator
                            </p>
                        </div>
                        <div class="col-8">
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="95"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Single Skill -->
                <!-- Single Skill-->
                <div class="col-12 col-lg-6 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="mb-0 fw-bolder">95%</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0 small lh-1">Figma</p>
                        </div>
                        <div class="col-8">
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="65"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Single Skill -->
                <!-- Single Skill-->
                <div class="col-12 col-lg-6 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="mb-0 fw-bolder">55%</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0 small lh-1">Adobe InDesign
                            </p>
                        </div>
                        <div class="col-8">
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="35"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Single Skill -->
                <!-- Single Skill-->
                <div class="col-12 col-lg-6 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="mb-0 fw-bolder">70%</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0 small lh-1">Front-End Development</p>
                        </div>
                        <div class="col-8">
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="98"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Single Skill -->
                <!-- Single Skill-->
                <div class="col-12 col-lg-6 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="mb-0 fw-bolder">45%</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0 small lh-1">Back-End Development</p>
                        </div>
                        <div class="col-8">
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Single Skill -->
            </div>
        </div>
        <!-- /Skills Section--> <!-- / Skills-->

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

@endsection
