@extends('Admin.layout')

@section('pagetitle', __('trans.subscribe'))
@section('content')

<div class="row">
    <div class="my-2 col-6 text-sm-end">
        <button type="button" id="DeleteSelected" onclick="DeleteSelected('subscriptions')" class="btn btn-danger" disabled>@lang('trans.Delete_Selected')</button>
    </div>
</div>
<table class="table table-bordered data-table" >
    <thead>
        <tr>
            <th><input type="checkbox" id="ToggleSelectAll" class="btn btn-primary"></th>
            <th>#</th>
            <th>@lang('trans.email')</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Subscriptions as $Model)
        <tr>
            <td>
                <input type="checkbox" class="DTcheckbox" value="{{ $Model->id }}">
            </td>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $Model->email }}</td>
          
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
