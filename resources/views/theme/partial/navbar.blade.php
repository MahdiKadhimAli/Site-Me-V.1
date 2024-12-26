 <nav data-scroll-section class="navbar navbar-expand-lg navbar-light bg-transparent mb-5 mb-lg-10">
     <div class="container-fluid">
         <a class="navbar-brand d-flex align-items-center fade-in" href="{{ route('theme.index') }}" data-scroll>
             <picture class="avatar me-3" data-scroll data-scroll-speed="10" data-scroll-direction="horizontal"
                 data-scroll-position="top">
                 <img class="img-fluid rounded-circle" src="{{ asset('assets') }}/images/avatar-small.jpg" alt="None">
             </picture>
             <span class="fw-bolder fs-6 d-flex justify-content-start" data-scroll-section>
                 <span class="fade-in" data-scroll data-scroll-speed="2" data-scroll-delay=".03"
                     data-scroll-position="top">Mahdi Kadhim</span>
             </span>
         </a>
         <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="collapse"
             data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
             aria-label="Toggle navigation">
             <i class="ri-menu-3-line"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent" data-scroll data-scroll-speed="4"
             data-scroll-delay=".6" data-scroll-position="top">
             <ul class="navbar-nav me-0 ms-auto mb-2 mb-lg-0 mt-4 mt-lg-0">
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('theme.index') }}">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('theme.about') }}">About</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('theme.work') }}">Work</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('theme.contact') }}">Contact</a>
                 </li>
                 @if (!Auth::check())
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('register') }}">Login / Register</a>
                     </li>
                 @else
                     <form action="{{ route('logout') }}" method="POST" id="logout_form">
                         @csrf
                         <li class="nav-item">
                             <a class="nav-link" href="#"
                                 onclick="document.getElementById('logout_form').submit();">Logout</a>
                         </li>
                     </form>
                     <li class="nav-item">
                         @if (Auth::check() && Auth::user()->usertype == 'admin')
                             <a class="nav-link" href="{{ route('works.my-work') }}">Dashboard</a>
                         @endif
                     </li>
                 @endif

                 <li class="nav-item d-lg-none">
                     <a class="nav-link btn-toggle-mode" href="#">Toggle Dark/Light Mode</a>
                 </li>
             </ul>
         </div>
         <button class="btn-icon btn-toggle-mode ms-7 fade-in d-none d-lg-flex" data-scroll data-scroll-speed="-10"
             data-scroll-direction="horizontal" data-scroll-position="top"><i class="ri-sun-line"></i></button>
     </div>
 </nav>
