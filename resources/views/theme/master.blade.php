<!doctype html>
<html lang="en">

<!-- Head -->
@include('theme.partial.head')
<!-- / Head -->

<body class="">
    <!-- Locomotive Scroll Container-->
    <div data-scroll-container>
        <!-- Navbar -->
        @include('theme.partial.navbar')
        <!-- / Navbar-->

        <!-- Main Section-->
        @yield('content')
        <!-- / Main Section-->

        <!-- Footer-->
        @include('theme.partial.footer')
        <!-- / Footer-->
    </div>
    <!-- Locomotive Scroll Container-->

    <!-- Theme JS -->
    @include('theme.partial.script')
    <!-- Theme JS -->
</body>

</html>
