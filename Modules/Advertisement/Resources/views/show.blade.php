@extends('Admin.layout')
@section('pagetitle', __('trans.advertisements'))
@section('content')

<table class="table">
    <tr>
        <td colspan="2" class="text-center">
            <a target="_blank" href="{{asset($Model->image)}}"><img src="/video.svg" class="img-fluid" alt="image" style="height: 80px;"></a>
        </td>
    </tr>
    <tr>
        <td class="text-center">
            {{ $Model['title_en'] }}
        </td>
        <td class="text-center">
            {{ $Model['title_ar'] }}
        </td>
    </tr>
    <tr>
        <td class="text-center">
            {{ $Model['desc_en'] }}
        </td>
        <td class="text-center">
            {{ $Model['desc_ar'] }}
        </td>
    </tr>
</table>

@endsection
