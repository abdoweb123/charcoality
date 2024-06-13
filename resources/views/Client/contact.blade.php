@extends('Client.layouts.layout')
@section('content')

<style>
    @media only screen and (min-width: 600px){
    	.lg-font{
	        font-size: 60px
    	}
    }
    @media only screen and (min-width: 1000px){
    	.lg-font{
	        font-size: 75px
    	}
    }
</style>

@include('Client.layouts.breadcrumb',['Page'=>__('trans.contact_us')])

<div class="contact my-5" id="Contact">
    <div class="container">

        <form action="{{ route('client.contact') }}" method="post">
            @csrf
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-8" style="padding: 70px;">
                    <div class="my-4" style="border-{{ lang('ar') ? 'right' : 'left' }}: 7px solid red !important;padding: 10px">
                        <p class="main_color">@lang('trans.contact_us')</p>
                        <h1 >@lang('trans.We want to hear from you')</h1>
                    </div>
                    <div class="row my-4" >
                        <img  class="col-2" style="height: fit-content;margin: auto;" src="{{ asset('/ahmed.png') }}">
                        <span class="col-10" style="border: 1px solid red !important;padding: 23px 20px;font-size: 21px;">
                            @lang('trans.contact_text',['email'=>  setting('email')])
                        </span>
                    </div>
                    <div class="my-4" height="300">
                        <div class="py-3">
                            <span class="py-1 fw-bold">@lang('trans.Name')</span>
                            <input required type="text" name="name" class="form-control rounded-0 text-white px-3">
                        </div>
                        <div class="py-3">
                            <span class="py-1 fw-bold">@lang('trans.Email')</span>
                            <input required type="email" name="email" class="form-control rounded-0 text-white px-3">
                        </div>
                        <div class="py-3">
                            <span class="py-1 fw-bold">@lang('trans.Phone Number')</span>
                            <input required type="text" name="phone" class="form-control rounded-0 text-white px-3">
                        </div>
                        <div class="py-3">
                            <span class="py-1 fw-bold">@lang('trans.subject')</span>
                            <input required type="text" name="subject" class="form-control rounded-0 text-white px-3">
                        </div>
                        <div class="py-3">
                            <span class="py-1 fw-bold">@lang('trans.message')</span>
                            <textarea required name="message" class="form-control rounded-0 text-white px-3" rows="4"></textarea>
                        </div>
                        <div class="py-3">
                            <button type="submit" class="main_btn border-0 w-100 rounded py-2 h5 mb-0">@lang('trans.Send Message')</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="my-4 main_border  p-4" height="300">
                        <h3>
                            <i class="fa-solid fa-chevron-right bg-white mx-1 text-danger px-2 py-1 rounded-circle" style="font-size: 18px;"></i>
                            CORPORATE OFFICE
                        </h3>
                        <p>
                            <h6 class="point"><i class="main_color fas mx-2 fa-map-marker me-3"></i>{{ setting('address_'.lang()) }}</h6>
                        </p>
                        <p>
                            <h6 onclick="window.open('mailto:{{ setting('email') }}')" class="point"><i class="main_color fas mx-2 fa-envelope me-3"></i>{{ setting('email') }}</h6>
                        </p>
                        <p>
                            <h6 onclick="window.open('tel:{{ setting('phone') }}')" class="point"><i class="main_color fas mx-2 fa-phone me-3"></i>{{ setting('phone') }}</h6>
                        </p>
                    </div>
                    <div class="my-4 main_border  p-4" height="300">
                        <h3>
                            <i class="fa-solid fa-chevron-right bg-white mx-1 text-danger px-2 py-1 rounded-circle" style="font-size: 18px;"></i>
                            MANUFACTURING UNIT
                        </h3>
                        <p>
                            <h6 class="point"><i class="main_color fas mx-2 fa-map-marker me-3"></i>{{ setting('address_'.lang()) }}</h6>
                        </p>
                        <p>
                            <h6 onclick="window.open('tel:{{ setting('phone') }}')" class="point"><i class="main_color fas mx-2 fa-phone me-3"></i>{{ setting('phone') }}</h6>
                        </p>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="py-4 h-100">
                <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14326.522784343051!2d50.4894898!3d26.1435817!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49b1af5653fedf%3A0xfc5af75770f3ada3!2sCHARCOALITY%20COAL%20TRADING!5e0!3m2!1sen!2sbh!4v1700907571197!5m2!1sen!2sbh" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
    @include('sweetalert::alert')
@endpush
@push('css')
    <style>
         .card{
            background: #383838;
            color: white;
            min-height: 250px;
        }
    </style>
@endpush