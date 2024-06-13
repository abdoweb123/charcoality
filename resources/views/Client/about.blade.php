@extends('Client.layouts.layout')
@section('content')

@include('Client.layouts.breadcrumb',['Page'=>__('trans.about')])



<div class="position-relative  my-5 overflow-hidden">
    <div class="container">
        <div class="row px-2">
            <div class="col-md-12">
                <div style="border-{{ lang('ar') ? 'right' : 'left' }}: 7px solid red !important;padding: 10px">
                    <p style="font-size: 30px;">@lang('trans.about_us')</p>
                    <h1 style="font-size: 70px;">{!! setting('about_title_'.lang()) !!}</h1>
                </div>
                <div class="my-3">
                    {!! setting('about_desc_'.lang()) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="position-relative  my-5 overflow-hidden">
    <div class="container">
        <div class="row px-2">
            <div class="col-md-12">
                <div style="border-{{ lang('ar') ? 'right' : 'left' }}: 7px solid red !important;padding: 10px">
                    <p style="font-size: 30px;">@lang('trans.what_we_have')?</p>
                    <h1 style="font-size: 70px;">{!! setting('what_we_have_title_'.lang()) !!}</h1>
                </div>
                <div class="my-3">
                    {!! setting('what_we_have_desc_'.lang()) !!}
                </div>
            </div>
        </div>
    </div>
</div>



<div id="video">
    <iframe src="https://www.youtube.com/embed/{{ explode("=",setting('video'))[1] }}"  allowfullscreen class="w-100" style="min-height:500px"></iframe>
</div>



<div class="position-relative  my-5 overflow-hidden">
    <div class="container" id="Charcoal">
        <h2 class="text-center main_color my-4">@lang('trans.Our Values')</h2>
        <h1 style="font-size: 60px" class="text-center">@lang('trans.Our Charcoal')</h1>
        <div class="row px-2 text-center">
            @foreach ($Values as $Value)
            <div class="col-12 col-md-4 col-lg-3 mx-auto my-2">
                <div class="main_border  text-center m-auto" style="width: 18rem;">
                    <div class="card-body point py-2" @if ($Value->link) onclick="location.href='{{ $Value->link }}'" @endif>
                        <img class="my-2" src="{{ asset($Value->image) }}" alt="message" style="max-width: 100%">
                        <h5 class="card-title my-2">{{ $Value->title() }}</h5>
                        <p class="card-text">{!! $Value->desc() !!}</p>
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
            <div class="col-md-12">
                <div style="border-{{ lang('ar') ? 'right' : 'left' }}: 7px solid red !important;padding: 10px">
                    <h1 style="font-size: 30px;">@lang('trans.our_products')</h1>
                </div>

                <div class="row my-3">
                    <div class="col-md-6 text-center m-auto"><img style="max-width: 100%;" src="{!! asset(setting('our_products_image')) !!}"></div>
                    <div class="col-md-6 m-auto">{!! setting('our_products_'.lang()) !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="position-relative  my-5 overflow-hidden">
    <div class="container">
        <div class="row px-2    ">
            <div class="col-md-12">
                <div style="border-{{ lang('ar') ? 'right' : 'left' }}: 7px solid red !important;padding: 10px">
                    <h1 style="font-size: 30px;">@lang('trans.mission')</h1>
                </div>
             
                <div class="row my-3">
                    <div class="col-md-6 text-center m-auto"><img style="max-width: 100%;" src="{!! asset(setting('mission_image')) !!}"></div>
                    <div class="col-md-6 m-auto">{!! setting('mission_'.lang()) !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="position-relative  my-5 overflow-hidden">
    <div class="container" id="Charcoal">
        <h2 class="text-center main_color my-4">@lang('trans.products')</h2>
        <div class="row px-2 text-center">
            @foreach ($Products as $Product)
            <div class="col-12 col-md-4 col-lg-3 mx-auto my-2">
                <div class="main_border  text-center m-auto" style="width: 18rem;">
                    <div class="card-body point" @if ($Product->link) onclick="location.href='{{ $Product->link }}'" @endif>
                        <img class="my-2" src="{{ asset($Product->image) }}" alt="message" style="max-width: 100%">
                        <h5 class="card-title my-2">{{ $Product->title() }}</h5>
                        <p class="card-text">{!! $Product->desc() !!}</p>
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
            <div class="col-md-12">
                <div style="border-{{ lang('ar') ? 'right' : 'left' }}: 7px solid red !important;padding: 10px">
                    <h1 style="font-size: 30px;">@lang('trans.vision')</h1>
                </div>
                <div class="row my-3">
                    <div class="col-md-6 text-center m-auto"><img style="max-width: 100%;" src="{!! asset(setting('vision_image')) !!}"></div>
                    <div class="col-md-6 m-auto">{!! setting('vision_'.lang()) !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="position-relative  my-5 overflow-hidden">
    <div class="container" id="Charcoal">
        <h2 class="text-center main_color my-4">@lang('trans.companies')</h2>
        <div class="row px-2 text-center">
            @foreach ($Companies as $Line)
            <div class="col-12 col-md-4 col-lg-3 mx-auto my-2">
                <div class="main_border  text-center m-auto" style="width: 18rem;">
                    <div class="card-body point" @if ($Line->link) onclick="location.href='{{ $Line->link }}'" @endif>
                        <img class="my-2" src="{{ asset($Line->image) }}" alt="message" style="max-width: 100%">
                        <h5 class="card-title my-2">{{ $Line->title() }}</h5>
                        <p class="card-text">{!! $Line->desc() !!}</p>
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
            <div class="col-md-12">
                <div style="border-{{ lang('ar') ? 'right' : 'left' }}: 7px solid red !important;padding: 10px">
                    <h1 style="font-size: 30px;">@lang('trans.sustainability')</h1>
                </div>

                <div class="row my-3">
                    <div class="col-md-6 text-center m-auto"><img style="max-width: 100%;" src="{!! asset(setting('sustainability_image')) !!}"></div>
                    <div class="col-md-6 m-auto">{!! setting('sustainability_'.lang()) !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="position-relative  my-5 overflow-hidden">
    <div class="container">
        <div class="row px-2    ">
            <div class="col-md-12">
                <div style="border-{{ lang('ar') ? 'right' : 'left' }}: 7px solid red !important;padding: 10px">
                    <h1 style="font-size: 30px;">@lang('trans.terms')</h1>
                </div>
                <div class="row my-3">
                    <div class="col-md-6 text-center m-auto"><img style="max-width: 100%;" src="{!! asset(setting('terms_image')) !!}"></div>
                    <div class="col-md-6 m-auto">{!! setting('terms_'.lang()) !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="position-relative  my-5 overflow-hidden">
    <div class="container">
        <div class="row px-2    ">
            <div class="col-md-12">
                <div style="border-{{ lang('ar') ? 'right' : 'left' }}: 7px solid red !important;padding: 10px">
                    <h1 style="font-size: 30px;">@lang('trans.join_us')</h1>
                </div>
                <div class="row my-3">
                    <div class="m-auto">{!! setting('join_us_'.lang()) !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="position-relative  my-5 overflow-hidden">
    <div class="container" id="Charcoal">
        <h2 class="text-center main_color my-4">@lang('trans.lines')</h2>
        <div class="row px-2 text-center">
            @foreach ($Lines as $Line)
            <div class="col-12 col-md-4 col-lg-3 mx-auto my-2">
                <div class="main_border  text-center m-auto" style="width: 18rem;">
                    <div class="card-body point" @if ($Line->link) onclick="location.href='{{ $Line->link }}'" @endif>
                        <img class="my-2" src="{{ asset($Line->image) }}" alt="message" style="max-width: 100%">
                        <h5 class="card-title my-2">{{ $Line->title() }}</h5>
                        <p class="card-text">{!! $Line->desc() !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection


@push('css')
    <style>
         .card{
            background: #383838;
            color: white;
            min-height: 250px;
        }
    </style>
@endpush