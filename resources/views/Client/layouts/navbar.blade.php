<nav class="navbar navbar-expand-md d-none d-md-block forth_bg" style="z-index: 9;">
    <div class="container-xl">
        <div class="d-flex justify-content-between w-100 py-3" id="main_nav">
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item animate__animated animate__swing mx-md-1 mx-lg-3 {{ Route::currentRouteName() == 'client.home' ? 'active' : ''  }}">
                    <a class="navbar-brand me-0" href="{{ route('client.home') }}">
                        <img src="{{ asset(setting('logo')) }}" alt="logo" style="max-width: 82px" width="82px" height="42px" class="img-fluid animate__animated animate__rotateIn">
                        <img src="{{ asset('assets/img/logo-text-'.lang().'.png') }}" alt="logo" style="max-width: 129px" width="129px" height="42px" class="animate__animated animate__rollIn">
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav mx-end d-flex align-items-center">
                <li class="nav-item animate__animated animate__swing mx-md-1 mx-lg-3 {{ Route::currentRouteName() == 'client.home' ? 'active' : ''  }}"> <a class="nav-link" href="{{ route('client.home') }}">@lang('trans.Home')</a></li>
                <li class="nav-item animate__animated animate__swing mx-md-1 mx-lg-3 {{ Route::currentRouteName() == 'client.about' ? 'active' : ''  }}"> <a class="nav-link" href="{{ route('client.about') }}">@lang('trans.about')</a></li>
                <li class="nav-item animate__animated animate__swing mx-md-1 mx-lg-3 {{ Route::currentRouteName() == 'client.gallery' ? 'active' : ''  }} dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @lang('trans.gallery')
                    </a>
                    <ul class="dropdown-menu">
                        @foreach(Media() as $Item)
                        <li><a class="dropdown-item" href="{{ route('client.gallery',$Item) }}">{{ $Item->title() }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item animate__animated animate__swing mx-md-1 mx-lg-3 {{ Route::currentRouteName() == 'client.blog' ? 'active' : ''  }}"> <a class="nav-link" href="{{ route('client.blog') }}">@lang('trans.blog')</a></li>
                <li class="nav-item animate__animated animate__swing mx-md-1 mx-lg-3 {{ Route::currentRouteName() == 'client.contact' ? 'active' : ''  }} cntactLi"><a class="nav-link" href="{{ route('client.contact') }}"> @lang('trans.contact') </a></li>
                <li class="nav-item animate__animated animate__swing mx-md-1 mx-lg-3"><a class="nav-link" href="{{ route('lang', lang('ar') ? 'en' : 'ar') }}"><i class="fa-solid mx-1 fa-globe"></i>{{ lang('ar') ? 'English' : 'العربية' }}</a></li>
            </ul>
        </div>
    </div>
</nav>
<nav class="d-md d-block d-md-none w-100 bg-white " style="z-index: 9;">
    <div class="container py-2">
        <div class="row">
            <div class="col-4 h1 d-flex align-items-center align-items-center">
                <a href="#" class="main_link">
                    <i class="fa-solid fa-sliders point d-md-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"></i>
                </a>
            </div>
            <div class="col">
                <img src="{{ asset(setting('logo')) }}" alt="logo" style="max-width: 82px" width="82px" height="42px" class="img-fluid animate__animated animate__rotateIn">
            </div>
        </div>
    </div>
</nav>
<nav class="navbar fixed-top">
    <div class="container-fluid">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    <a class="navbar-brand me-0" href="{{ route('client.home') }}">
                        <img src="{{ asset(setting('logo')) }}" alt="logo" style="max-width: 82px" width="82px" height="42px" class="img-fluid animate__animated animate__rotateIn">
                        <img src="{{ asset('assets/img/logo-text-'.lang().'.png') }}" alt="logo" style="max-width: 129px" width="129px" height="42px" class="animate__animated animate__rollIn">
                    </a>
                </h5>
                <i class="fa-solid fa-x btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></i>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item"> <a class="nav-link" style="font-size: 30px;" href="{{ route('client.home') }}">@lang('trans.Home')</a></li>
                    <li class="nav-item"><a class="nav-link" style="font-size: 30px;" href="{{ route('client.about') }}"> @lang('trans.about') </a></li>
                    <li class="nav-item"><a class="nav-link" style="font-size: 30px;" href="{{ route('client.gallery') }}"> @lang('trans.gallery') </a></li>
                    <li class="nav-item"><a class="nav-link" style="font-size: 30px;" href="{{ route('client.contact') }}"> @lang('trans.contact') </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
