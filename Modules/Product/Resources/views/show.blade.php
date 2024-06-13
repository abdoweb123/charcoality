@extends('Admin.layout')
@section('pagetitle', __('trans.products'))
@section('content')

<table class="table">
    <tr>
        <td colspan="2" class="text-center">
            <img src="{{ asset($Model->image ?? setting('logo')) }}" class="rounded mx-auto text-center" id="image" height="200px">
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
