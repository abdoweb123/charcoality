@extends('Admin.layout')
@section('pagetitle',$Model->title())
@section('content')
<form method="POST" action="{{ route('admin.media.gallery.update',['medium'=>$Media,'gallery'=>$Model]) }}" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
    @if($Model->media_id == 2)
        <div class="text-center">
            @if (IsVideo($Model->image))
                <video src="{{ asset($Model->image) }}" controls></video>
            @else
                <img src="{{ asset($Model->image ?? setting('logo')) }}" class="rounded mx-auto text-center" id="file"  height="200px">
            @endif
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <label for="title_ar">@lang('trans.title_ar')</label>
            <input id="title_ar" type="text" name="title_ar" placeholder="@lang('trans.title_ar')" class="form-control" value="{{ $Model['title_ar'] }}">
        </div>
        <div class="col-md-6">
            <label for="title_en">@lang('trans.title_en')</label>
            <input id="title_en" type="text" name="title_en" placeholder="@lang('trans.title_en')" class="form-control" value="{{ $Model['title_en'] }}">
        </div>
        @if($Model->media_id == 1)
            <div class="col-md-6 col-sm-12">
                <label for="file">{{ __('trans.file') }}</label>
                <input class="form-control w-100" id="file" type="file" name="image" onchange="document.getElementById('file').src = window.URL.createObjectURL(this.files[0])">
            </div>
        @elseif($Model->media_id == 2)
            <div class="col-md-6">
                <label for="image">@lang('trans.video')</label>
                <input id="image" type="text" name="image" placeholder="@lang('trans.image')" class="form-control" value="{{ $Model['image'] }}">
            </div>
        @endif
        <div class="col-md-6">
            
        </div>
        <div class="col-md-6 col-sm-12">
            <label class="my-1">@lang('trans.desc_ar')</label>
            <textarea name="desc_ar" placeholder="@lang('trans.desc_ar')" class="form-control mceNoEditor">{!! $Model['desc_ar'] !!}</textarea>
        </div>
        <div class="col-md-6 col-sm-12">
            <label class="my-1">@lang('trans.desc_en')</label>
            <textarea name="desc_en" placeholder="@lang('trans.desc_en')" class="form-control mceNoEditor">{!! $Model['desc_en'] !!}</textarea>
        </div>
        
        <div class="col-12">
            <div class="button-group my-4">
                <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                    {{ __('trans.Submit') }}
                </button>
            </div>
        </div>
    </div>
</form>
@endsection
