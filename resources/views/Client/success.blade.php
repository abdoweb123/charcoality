@extends('Client.layouts.layout')
@section('content')
<div class="page-wrapper">
    <div class="circle-wrapper">
        <div class="success circle"></div>
        <div class="icon">
            <i class="fa fa-check"></i>
        </div>
    </div>
</div>
<h2 class="text-center w-100">
    @lang('trans.successProcess')
</h2>
<div class="text-center my-5">
    <a class="main_btn" href="{{ route('client.home') }}"> @lang('trans.Home') </a>
</div>
@endsection

@push('js')
<style>
    .circle-wrapper {
        position: relative;
        width: 100px;
        height: 100px;
        float: left;
        margin: 10px;
    }

    .icon {
        position: absolute;
        color: #fff;
        font-size: 55px;
        top: 55px;
        left: 50px;
        transform: translate(-50%, -50%);
    }

    .circle {
        display: block;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        padding: 2.5px;
        background-clip: content-box;
        animation: spin 10s linear infinite;
    }

    .circle-wrapper:active .circle {
        animation: spin 2s linear infinite;
    }

    .success {
        background-color: #4BB543;
        border: 2.5px dashed #4BB543;
    }

    @keyframes spin {
        100% {
            transform: rotateZ(360deg);
        }
    }

    .page-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
@endpush
