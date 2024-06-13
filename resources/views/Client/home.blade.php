@extends('Client.layouts.layout')
@section('content')

<div class="gallery">
    <div class="content text-center">
        <h1 id="sLider-title" class="my-2 animate__animated  animate__shakeY">{{ $Sliders->first()->title() }}</h1>
        <span id="sLider-desc">{{ $Sliders->first()->desc() }}</span>
        <form class="hero-form animate__animated  animate__shakeY" action="{{ route('client.subscribe') }}" method="post">
            @csrf
            @method('POST')
            <div class="hero-form-input">
                <input class="hero-email-input" type="email" name="email" , placeholder="@lang('trans.type_your_email')" required>
                <input class="hero-form-submit" type="submit" , value="@lang('trans.Submit')">
            </div>
        </form>
    </div>
    <div class="swiper-container gallery-slider">
        <div class="swiper-wrapper">
            @foreach ($Sliders as $Slider)
            <div class="swiper-slide" data-title="{{ $Slider->title() }}" data-desc="{{ $Slider->desc() }}">
                <img src="{{ asset($Slider->image) }}" alt="{{ $Slider->title() }}" @if ($Slider->link) onclick="location.href='{{ $Slider->link }}'" @endif>
            </div>
            @endforeach
        </div>
    </div>
    <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
            @foreach ($Sliders as $Slider)
            <div class="swiper-slide">
                <img src="{{ asset($Slider->image) }}" alt="{{ $Slider->title() }}">
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
</div>

<div class="position-relative  my-5 overflow-hidden"  >
    <div class="container" id="about">
        <div class="row px-2    ">
            <div class="col-md-6">
                <div>
                    <p style="font-size: 30px;">@lang('trans.about_us')</p>
                    <h1 style="font-size: 70px;">{!! setting('about_title_'.lang()) !!}</h1>
                </div>
                <?php
                // Get the about description
                $aboutDesc = setting('about_desc_'.lang());

                // Truncate after 100 words and add ellipsis
                $truncatedDesc = implode(' ', array_slice(str_word_count($aboutDesc, 1), 0, 70));
                $truncatedDesc .= (str_word_count($aboutDesc) > 100) ? '...' : ''; // Add ellipsis if the description is longer

                // Replace \r with <br> and then convert new lines to <br>
                $truncatedDesc = nl2br(str_replace("\r", "<br>", $truncatedDesc));
                ?>
                {!! $truncatedDesc !!} <!-- Ensure HTML tags are not escaped -->
{{--                {!! str_replace("\r", "<br>", setting('about_desc_'.lang())) !!}--}}
                <p class="my-5">
                    <a href="{{ route('client.about') }}" class="main_link point">@lang('trans.readMore')<i class="fa-solid fa-angles-{{ lang('en') ? 'right' : 'left' }} mx-3"></i></a>
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset(setting('about_image')) }}" alt="about" style="max-width: 100%">
            </div>
        </div>
    </div>
    {{--
    <div style="top: 44%;position: absolute;top: 50%;  left: 50%; transform: translate(-200%, -30%);">
        <p id="CHARCOALITY">
            CHARCOALITY
        </p>
    </div>
    --}}
</div>

<div id="video">
    <iframe src="https://www.youtube.com/embed/{{ explode("=",setting('video'))[1] }}"  allowfullscreen class="w-100" style="min-height:500px"></iframe>
</div>



<div class="position-relative  my-5 overflow-hidden"  >
    <div class="container" id="Charcoal">
        <h4 class="text-center main_color my-4">@lang('trans.Why Choose Us')</h4>
        <h2 style="font-size: 35px" class="text-center my-4">{{ setting('why_choose_us_title_'.lang()) }}</h2>
        <p class="text-center">{!! str_replace("\r", "<br>", setting('why_choose_us_desc_'.lang())) !!}</p>
        <div class="row px-2">
            @foreach ($Services as $Service)
            <div class="col-12 col-md-4 col-lg-3 mx-auto">
                <div class="card  mx-auto my-2" style="width: 18rem;">
                    <div class="card-body point" @if ($Service->link) onclick="location.href='{{ $Service->link }}'" @endif>
                        <h1 class="ServiceNumber">{{ $loop->iteration }}.</h1>
                        <h5 class="card-title">{{ $Service->title() }}</h5>
                        <p class="card-text">{!! str_replace("\r", "<br>",$Service->desc())  !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="position-relative  my-5 overflow-hidden">
    <div class="container">
        <div class="row px-2    ">
            <div class="col-md-6">
                <div style="border-{{ lang('ar') ? 'right' : 'left' }}: 7px solid red !important;padding: 10px">
                    <p style="font-size: 30px;">@lang('trans.what_we_have')</p>
                    <h1 style="font-size: 70px;">{!! str_replace("\r", "<br>", setting('what_we_have_title_'.lang())) !!}</h1>
                </div>
                <div class="my-3">
                    {!! str_replace("\r", "<br>", setting('what_we_have_desc_'.lang())) !!}
                </div>
                <main>
                    <section class="faq">                  
                      <div class="faq-container">
                        @foreach ($FAQ as $item)         
                            <details class="faq-box">
                                <summary class="faq-header">
                                    {{ $item['question_'.lang()] }}
                                </summary>
                                <div class="faq-content">
                                    <p>
                                        {{ $item['answer_'.lang()] }}
                                    </p>
                                </div>
                            </details>
                        @endforeach
                      </div>
                    </section>
                 </main>
            </div>
            <div class="col-md-6">
                <img src="{{ asset(setting('faq_image')) }}" alt="faq" style="max-width: 100%">
            </div>
            <div class="position-absolute d-none d-md-block" style="    top: 62%;{{ lang('en') ? 'right' : 'left' }}: -30%;">
                <div class="card  mx-auto my-2" style="width: 18rem;">
                    <div class="card-body point" style="    background: red;border-radius: 5px;border: none;">
                        <h1 class="ServiceNumber">05.</h1>
                        <h5 class="card-title" style="font-size: 40px;">@lang('trans.Years_Experience')</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .nav-tabs .nav-link{
        border-bottom: 2px solid black !important;
    }
    .nav-tabs .active{
        color: var(--main--color) !important;
        background: transparent !important;
    }
</style>
<div class="container" style="margin-top: 10px;">
    <ul class="nav nav-tabs d-flex justify-content-center align-items-center p-0 border-0 my-3" style="font-size: 32px;">
        @foreach ($Media as $Item)    
            <li>
                <a class="nav-link border-bottom border-light {{ $loop->first ? 'active' : '' }} px-5 py-2 border-0" data-bs-toggle="tab" href="#{{ $Item->id }}" style="border-radius: 0px !important;">{{ $Item->title() }}</a>
            </li>
        @endforeach
    </ul>

    <div class="tab-content container my-3">
        @foreach ($Media as $ItemMedia)      
            <div class="tab-pane  {{ $loop->first ? 'active' : '' }}" id="{{ $ItemMedia->id }}">
                <div class="row">    
                    @foreach ($ItemMedia->Gallery->take(4) as $Item)
                        <div class="col-xl-3 col-md-4 col-12 mb-5 mb-xl-0">
                            <div class="media media-projects point" onclick="location.href='{{ route('client.gallery_details',['id'=>$Item]) }}'">
                                <div class="media-img">
                                    @if(IsImage($Item->image))
                                    <img src="{{ asset($Item->image) }}" alt="Generic placeholder image" style="max-width: 100%">
                                    @elseif(IsVideo($Item->image))
                                        <iframe src="https://www.youtube.com/embed/{{ explode("=",$Item->image)[1] }}"  allowfullscreen class="w-100" style="min-height:500px"></iframe>
                                        <h5 class="mt-0 sep">{{ $Item->title() }}</h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 text-center h3 my-3">
                        <p>
                            <a href="{{ route('client.gallery',$ItemMedia) }}" class="main_link point">@lang('trans.readMore')<i class="fa-solid fa-angles-{{ lang('en') ? 'right' : 'left' }} mx-3"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{--
<div class="container my-4">
    <div class="text-center py-3">
        <h2>
            @lang('trans.Our Clients')
        </h2>
    </div>
    <div id="clients" class="carousel slide" data-bs-ride="carousel">
        @if ($Clients->chunk(4)->count() > 1)
        <div class="carousel-indicators">
            @foreach ($Clients->chunk(4) as $Items)
            <button type="button" data-bs-target="#clients" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="true" aria-label="Slide"></button>
            @endforeach
        </div>
        @endif
        <div class="carousel-inner">
            @foreach ($Clients->chunk(4) as $Items)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <div class="row">
                    @foreach ($Items as $Client)
                    <div class="col-12 col-md-6 col-lg-3">
                        <img src="{{ asset($Client->image) }}" class="d-block w-100" alt="..." @if ($Client->link) onclick="location.href='{{ $Client->link }}'" @endif>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        @if ($Clients->chunk(4)->count() > 1)
        <button class="carousel-control-prev" type="button" data-bs-target="#clients" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#clients" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
        @endif
    </div>
</div>

--}}
@endsection

@push('js')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var slider = new Swiper(".gallery-slider", {
        slidesPerView: 1
        , loop: true
        , loopedSlides: 6
        , noSwiping: true
        , noSwipingClass: "swiper-slide"
        , pagination: {
            el: ".swiper-pagination"
            , clickable: true
        , }
    , });

    var thumbs = new Swiper(".gallery-thumbs", {
        slidesPerView: "auto"
        , spaceBetween: 10
        , loop: "infinite"
        , centeredSlides: true
        , autoplay: {
            delay: 2500
            , disableOnInteraction: false
        , }
        , navigation: {
            nextEl: ".swiper-button-next"
            , prevEl: ".swiper-button-prev"
        }
        , slideToClickedSlide: true
    , });

    slider.controller.control = thumbs;
    thumbs.controller.control = slider;

    slider.on('slideChange', function(e) {
        console.log($('.swiper-slide-active').attr('data-title'));
        $('#sLider-title').html($('.swiper-slide-active').attr('data-title'));
        $('#sLider-desc').html($('.swiper-slide-active').attr('data-desc'));
    });

</script>

@include('sweetalert::alert')
@endpush
@push('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    #CHARCOALITY {
        font-size: 70px;
        transform: rotate(-90deg);
        font-weight: 700;
        text-align: center;
        color: rgb(68 68 68);

    }

    #CHARCOALITY::after {
        content: '';
        border-bottom: 7px solid red !important;
        width: 300px;
        display: block;
        margin: 0 {{ lang('ar') ? '-50%': '80%' }};
    }

    .card{
        background: #383838;
        color: white;
        min-height: 250px;
    }

    .ServiceNumber{
        font-size: 50px;
    }
    .ServiceNumber:after{
        content: '';
        border-bottom: 3px solid red !important;
        width: 20px;
        display: block;
        margin: 0 0;
    }

</style>
@endpush
