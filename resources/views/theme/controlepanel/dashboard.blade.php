@extends('theme.master')
@section('title', 'Dashboard')
@section('content')


    <style>
        .img-fixed {
            width: 100%;
            /* عرض الصورة بما يتناسب مع العنصر الحاوي */
            height: 200px;
            /* ارتفاع ثابت */
            object-fit: cover;
            /* قص الصورة مع الحفاظ على النسبة */
            border-radius: 8px;
            /* حواف مستديرة قليلاً (اختياري) */
        }
    </style>
    <!-- Main Section-->
    <section class="container py-3" data-scroll-section>
        <!-- Page Content Goes Here -->
        <h1 class="display-3 mb-5" data-scroll data-scroll-speed="6" data-scroll-position="top">My Work</h1>

        <div class="row g-4" data-scroll data-scroll-position="bottom">
            @foreach ($work as $item)
                <!-- Single Work-->
                <div data-scroll data-scroll-position="bottom" class="col-12 col-md-6 fade-in-left">
                    <div class="position-relative card shadow-sm">
                        <picture>
                            <!-- جعل الصور بقياس ثابت باستخدام CSS -->
                            <img class="img-fluid img-fixed" src="{{ asset('storage/work/' . $item->iamge) }}"
                                alt="{{ $item->title }}">
                        </picture>
                        <div class="card-body">
                            <p class="fw-bolder lead mb-3 mt-2">{{ $item->title }}</p>
                            <p class="small text-muted mb-2"> {{ $item->description }}</p>

                            <!-- أزرار التعديل والحذف -->
                            <div class="d-flex justify-content-between">
                                <!-- زر التعديل -->
                                <a href="{{ route('works.edit', $item->id) }}" class="btn btn-primary btn-sm">Update</a>
                                <!-- زر الحذف -->
                                <form action="{{ route('works.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('هل أنت متأكد من حذف هذا العمل؟')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
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
    <!-- / Main Section -->

@endsection
