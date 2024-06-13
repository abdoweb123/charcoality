@extends('Client.layouts.layout')
@section('content')

@include('Client.layouts.breadcrumb',['Page'=>__('trans.terms')])



<div class="container my-2" id="terms">
    <div class="row ">
        <div class="col-md-12 h5 my-4">
            {!! setting('terms_'.lang()) !!}
        </div>
        <div class="col-md-12">
            <img src="{{ asset(setting('terms_image')) }}" alt="terms" style="max-width: 100%">
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