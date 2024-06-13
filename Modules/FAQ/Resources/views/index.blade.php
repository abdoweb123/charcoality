@extends('Admin.layout')

@section('pagetitle', __('trans.FAQ'))
@section('content')

<div class="row">
    <div class="my-2 col-6 text-center">
        <a href="{{ route('admin.faq.create') }}" class="btn btn-primary px-5" disabled>@lang('trans.add_new')</a>
    </div>
    <div class="my-2 col-6 text-sm-center">
        <button type="button" id="DeleteSelected" onclick="DeleteSelected('faq')" class="btn btn-danger" disabled>@lang('trans.Delete_Selected')</button>
    </div>
</div>
<table class="table table-bordered data-table">
    <thead>
        <tr>
            <th><input type="checkbox" id="ToggleSelectAll" class="btn btn-primary px-5"></th>
            <th>#</th>
            <th style="text-align:center;">@lang('trans.question_ar')</th>
            <th style="text-align:center;">@lang('trans.question_en')</th>
            <th style="text-align:center;">@lang('trans.visibility')</th>
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
            <td>{{ $Model->question_ar }}</td>
            <td>{{ $Model->question_en }}</td>
            <td>{{ $Model->email }}</td>
            <td>
                <a href="{{ route('admin.faq.show', $Model) }}"><i class="fa-solid fa-eye"></i></a>
                <a href="{{ route('admin.faq.edit', $Model) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                <form class="formDelete" method="POST" action="{{ route('admin.faq.destroy', $Model) }}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="button" class="btn btn-flat show_confirm" data-toggle="tooltip" title="Delete">
                        <i class="fa-solid fa-eraser"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
