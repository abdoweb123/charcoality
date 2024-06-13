@extends('Admin.layout')

@section('pagetitle', __('trans.media'))
@section('content')


<table class="table table-bordered data-table" >
    <thead>
        <tr>
            <th><input type="checkbox" id="ToggleSelectAll" class="btn btn-primary"></th>
            <th>#</th>
            <th>@lang('trans.title_ar')</th>
            <th>@lang('trans.title_en')</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Models as $Model)
        <tr>
            <td>
                <input type="checkbox" class="DTcheckbox" value="{{ $Model->id }}">
            </td>
            <td>{{ $loop->iteration }}</td>
            <td><a href="{{ route('admin.media.show', $Model) }}">{{ $Model->title_ar }}</a></td>
            <td><a href="{{ route('admin.media.show', $Model) }}">{{ $Model->title_en }}</a></td>
            <td>
                <a href="{{ route('admin.media.edit', $Model) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                {{-- 
                <form class="formDelete" method="POST" action="{{ route('admin.media.destroy', $Model) }}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="button" class="btn btn-flat show_confirm" data-toggle="tooltip" title="Delete">
                        <i class="fa-solid fa-eraser"></i>
                    </button>
                </form>
             --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
