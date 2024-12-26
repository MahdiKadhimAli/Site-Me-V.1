@extends('theme.master')
@section('title', 'Work')
@section('content')

    <!-- Main Section-->
    <section class="container py-3 " data-scroll-section>
        <!-- Page Content Goes Here -->

        <h1 class="display-3 mb-5" data-scroll data-scroll-speed="6" data-scroll-position="top">My Work</h1>

        <div class="row g-8" data-scroll data-scroll-position="bottom">
            @foreach ($work as $item)
                <!-- Single Work-->
                <div data-scroll data-scroll-position="bottom" class="col-12 col-md-6 fade-in-left">
                    <div class="position-relative">
                        <picture>
                            <img class="img-fluid" src="{{ asset('storage/work/' . $item->iamge) }}" alt="">
                        </picture>
                        <p class="fw-bolder lead mb-3 mt-2">{{ $item->title }}</p>
                        <p class="small text-muted mb-2">{{ $item->description }}</p>
                    </div>
                </div>
                <!-- / Single Work -->
            @endforeach
            <!-- عرض روابط التنقل بين الصفحات -->
            <div class="mt-4">
                {{ $work->links() }}
            </div>
        </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->
@endsection
