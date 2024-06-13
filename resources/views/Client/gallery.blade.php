@extends('Client.layouts.layout')
@section('content')


@include('Client.layouts.breadcrumb',['Page'=>__('trans.gallery')])


<div class="position-relative  my-5 overflow-hidden">
    <div class="container">
        <div class="row px-2    ">
            <div class="col-md-12">
                <div style="border-{{ lang('ar') ? 'right' : 'left' }}: 7px solid red !important;padding: 10px">
                    <p style="font-size: 30px;">@lang('trans.gallery')?</p>
                    <h1 style="font-size: 70px;">{!! setting('gallery_title_'.lang()) !!}</h1>
                </div>
                <div class="my-3">
                    {!! setting('gallery_desc_'.lang()) !!}
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row my-5">    
        @foreach ($Media->Gallery as $Item)
            <div class="col-xl-3 col-md-4 col-12 mb-5 mb-xl-0">
                <div class="media media-projects point" onclick="location.href='{{ route('client.gallery_details',['id'=>$Item]) }}'">
                    <div class="media-img">
                        @if(IsImage($Item->image))
                        <img src="{{ asset($Item->image) }}" alt="Generic placeholder image" style="max-width: 100%">
                        @elseif(IsVideo($Item->image))
                            <iframe src="https://www.youtube.com/embed/{{ explode("=",$Item->image)[1] }}"  allowfullscreen class="w-100" style="min-height:500px"></iframe>
                            <h5 class="mt-0 sep">{{ $Item->title() }}</h5>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>





@endsection
