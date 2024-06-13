@extends('Admin.layout')
@section('pagetitle',__('trans.admins'))

@section('content')
<form action="{{ route('admin.admins.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')

    <div class="text-center">
        <img src="{{ asset(setting('logo')) }}" class="rounded mx-auto text-center"  id="image"  height="200px">
    </div>
    <div class="row">
        <div class="col-md-6 ">
            <label for="name">{{ __('trans.name') }}</label>
            <input type="text" name="name" id="name" parsley-trigger="change" required value="" class="form-control">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="email">{{ __('trans.email') }}</label>
            <input type="email" name="email" parsley-trigger="change" value="" required class="form-control">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="phone">{{ __('trans.phone') }}</label>
            <input class="form-control @error('phone') is-invalid @enderror" type="tel" name="phone" id="phone_number" placeholder="{{ __('trans.Phone Number') }}" value="{{ old('phone') }}" required autocomplete="phone">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="client_password">{{ __('trans.password') }}</label>
            <input required type="password" name="password" parsley-trigger="change" class="form-control" data-parsley-id="10">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="client_password">{{ __('trans.confirmPassword') }}</label>
            <input required type="password" name="password_confirmation" parsley-trigger="change" class="form-control" data-parsley-id="10">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="image">{{ __('trans.image') }}</label>
            <input class="form-control w-100" id="image" type="file" name="image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
        </div>


       
        <div class="col-12 my-4">
            <div class="button-group my-4">
                <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                    {{ __('trans.Submit') }}
                </button>
            </div>
        </div>
    </div>
</form>
@endsection
