@extends('Admin.layout')
@section('pagetitle',__('trans.dashboardTitle'))

@section('content')
<div class="text-center">
    <h1>@lang('trans.Welcome')</h1>
    <img class="my-2" src="{{ asset(setting('logo')) }}">
</div>

@endsection

