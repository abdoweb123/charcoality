@extends('Admin.layout')

@section('pagetitle', __('trans.countries'))
@section('content')

<table class="table dataTable  data-table" >
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('trans.title_ar')</th>
            <th>@lang('trans.title_en')</th>
            <th>@lang('trans.image')</th>
            <th>@lang('trans.status')</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Countries as $Country)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td><a href="{{ route('admin.countries.show', $Country) }}">{{ $Country->title_ar }}</a></td>
            <td><a href="{{ route('admin.countries.show', $Country) }}">{{ $Country->title_en }}</a></td>
            <td><img src="{{ asset($Country->image) }}" style="max-width: 80px"></td>
            <td>
                @if ($Country->status)
                <label data-id="{{ $Country->id }}" onclick="toggleswitch({{ $Country->id }},'countries','status','status-checkbox')" class="switch toggleswitch bg-dark"><input id="status-checkbox{{ $Country->id }}" type="checkbox" checked><span class="slider"></span></label>
                @else
                <label data-id="{{ $Country->id }}" onclick="toggleswitch({{ $Country->id }},'countries','status','status-checkbox')" class="switch toggleswitch bg-dark"><input id="status-checkbox{{ $Country->id }}" type="checkbox"><span class="slider"></span></label>
                @endif
            </td>
            <td>
                <a href="{{ route('admin.countries.edit', $Country) }}"><i class="fa-solid fa-pen-to-square"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
