@extends('Client.layouts.layout')
@section('content')


@include('Client.layouts.breadcrumb',['Page'=>__('trans.blog')])



<div class="container">
    <div class="row my-3">    
        <div class="col-12 mb-5 mb-xl-0">
            <div class="media media-projects point">
                <div class="media-body p-3">
                    <h5 class="mt-0 sep">{{ $Blog->title() }}</h5>
                    <p class="mt-0 sep">{{ $Blog->desc() }}</p>
                </div>
                <div class="media-img m-auto text-center">
                    @if(IsImage($Blog->image))
                    <img src="{{ asset($Blog->image) }}" alt="Generic placeholder image" style="max-width: 100%">
                    @elseif(IsVideo($Blog->image))
                    <video src="{{ asset($Blog->image) }}" controls class="mx-auto"></video>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>

@if($Blogs->count())    
    <div class="container">
        <h2>@lang('trans.relatedItems')</h2>
        <div class="row my-5">    
            @foreach ($Blogs as $Item)
                <div class="col-xl-3 col-md-4 col-12 mb-5 mb-xl-0">
                    <div class="media media-projects point" onclick="location.href='{{ route('client.blog_details',['id'=>$Item]) }}'">
                        <div class="media-img">
                            @if(IsImage($Item->image))
                            <img src="{{ asset($Item->image) }}" alt="Generic placeholder image" style="max-width: 100%">
                            @elseif(IsVideo($Item->image))
                            <video src="{{ asset($Item->image) }}"></video>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif





@endsection
