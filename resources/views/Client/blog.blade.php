@extends('Client.layouts.layout')
@section('content')


@include('Client.layouts.breadcrumb',['Page'=>__('trans.blog')])




<div class="position-relative  my-5 overflow-hidden">
    <div class="container" id="Charcoal">
        <div class="row px-2">
            @foreach ($Blogs as $Blog)
            <div class="col-12 col-md-6 mx-auto">
                <div class="main_border  text-center">
                    <div class="card-body point" @if ($Blog->link) onclick="location.href='{{ $Blog->link }}'" @endif>
                        <img class="my-2" src="{{ asset($Blog->image) }}" alt="message" style="max-width: 100%">
                        <h5 class="card-title my-2">{{ $Blog->title() }}</h5>
                        <p class="card-text">{!! $Blog->desc() !!}</p>
                        <p>
                            <a href="{{ route('client.blog_details',$Blog) }}" class="main_link point">@lang('trans.readMore')<i class="fa-solid fa-angles-{{ lang('en') ? 'right' : 'left' }} mx-3"></i></a>
                        </p>
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