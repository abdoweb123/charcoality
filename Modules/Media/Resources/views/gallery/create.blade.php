@extends('Admin.layout')
@section('pagetitle',$Model->title())
@section('content')
<form method="POST" action="{{ route('admin.media.gallery.store',$Media) }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="media_id" value="{{ $Media->id }}">
    <div class="text-center">
        <img src="{{ asset(setting('logo')) }}" class="rounded mx-auto text-center" id="file"  height="200px">
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="title_ar">@lang('trans.title_ar')</label>
            <input id="title_ar" type="text" name="title_ar" placeholder="@lang('trans.title_ar')" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="title_en">@lang('trans.title_en')</label>
            <input id="title_en" type="text" name="title_en" placeholder="@lang('trans.title_en')" class="form-control">
        </div>
        @if($Model->id == 1)
            <div class="col-md-6 col-sm-12">
                <label for="file">{{ __('trans.file') }}</label>
                <input class="form-control w-100" id="file" type="file" name="image" onchange="document.getElementById('file').src = window.URL.createObjectURL(this.files[0])">
            </div>
        @elseif($Model->id == 2)
            <div class="col-md-6">
                <label for="image">@lang('trans.video')</label>
                <input id="image" type="text" name="image" placeholder="@lang('trans.image')" class="form-control">
            </div>
        @endif
        <div class="col-md-6">
            
        </div>
        <div class="col-md-6 col-sm-12">
            <label class="my-1">@lang('trans.desc_ar')</label>
            <textarea name="desc_ar" placeholder="@lang('trans.desc_ar')" class="form-control mceNoEditor"></textarea>
        </div>
        <div class="col-md-6 col-sm-12">
            <label class="my-1">@lang('trans.desc_en')</label>
            <textarea name="desc_en" placeholder="@lang('trans.desc_en')" class="form-control mceNoEditor"></textarea>
        </div>
        
        <div class="row">
            <div class="col-sm-12 my-4">
                <div class="text-center p-20">
                    <button type="submit" class="btn btn-primary">{{ __('trans.add') }}</button>
                    <button type="reset" class="btn btn-secondary">{{ __('trans.cancel') }}</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
