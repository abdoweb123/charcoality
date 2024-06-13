<nav class="">
    <div class="container">
        <div class="row d-flex justify-content-between py-2">
            <div class="col-md-8 text-center text-md-{{ lang('ar') ? 'end' : 'start' }} px-0">
                <a class="main_link mx-2" href="http://wa.me/{{ setting('whatsapp') }}">
                    <i class="fa-brands fa-whatsapp"></i>
                    {{ setting('whatsapp') }}
                </a>
                <a class="main_link mx-2" href="tel:{{ setting('phone') }}">
                    <i class="fa-solid fa-phone"></i>
                    {{ setting('phone') }}
                </a>
                <a class="main_link mx-2" href="" class="mailto:{{ setting('email') }}">
                    <i class="fa-solid fa-envelope-open"></i>
                    {{ setting('email') }}
                </a>
            </div>
            <div class="col-md-4 text-center text-md-{{ lang('ar') ? 'start' : 'end' }} px-0">
                <a href="{{ setting('facebook') }}" class="main_link"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{ setting('instagram') }}" class="main_link"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ setting('snapchat') }}" class="main_link"><i class="fa-brands fa-snapchat"></i></a>
                <a href="{{ setting('youtube') }}" class="main_link"><i class="fa-brands fa-youtube"></i></a>
                @if ($_SERVER['REQUEST_METHOD'] == 'GET')   
                |<a href="{{ route('lang', lang('ar') ? 'en' : 'ar') }}" class="main_link"><i class="fa-solid fa-globe"></i> {{ lang('ar') ? 'English' : 'العربية' }}</a>
                @endif
                <a href="#" class="main_link"><i class="fa-solid fa-sliders point d-md-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"></i></a>
            </div>
        </div>
    </div>
</nav>
