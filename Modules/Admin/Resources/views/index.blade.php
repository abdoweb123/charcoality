@extends('Admin.layout')

@section('pagetitle', __('trans.admins'))
@section('content')

<div class="row">
    <div class="my-2 col-6 text-center">
        <a href="{{ route('admin.admins.create') }}" class="btn btn-primary px-5" disabled>@lang('trans.add_new')</a>
    </div>
</div>
<table class="table table-bordered data-table text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('Name')</th>
            <th>@lang('Phone')</th>
            <th>@lang('Email')</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Models as $Model)
        <tr Role="row" class="odd">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $Model->name }}</td>
            <td>{{ $Model->phone }}</td>
            <td>{{ $Model->email }}</td>
            <td>
                <a href="{{ route('admin.admins.edit', $Model) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                <form class="formDelete" method="POST" action="{{ route('admin.admins.destroy', $Model) }}">
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
