@extends('Client.layouts.layout')
@section('content')

@include('Client.layouts.breadcrumb',['Page'=>__('trans.privacy')])



<div class="container my-2" id="privacy">
    <div class="row ">
        <div class="col-md-12 h5 my-4">
            {!! setting('privacy_'.lang()) !!}
        </div>
        <div class="col-md-12">
            <img src="{{ asset(setting('privacy_image')) }}" alt="privacy" style="max-width: 100%">
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