@extends('Admin.layout')

@section('pagetitle', $Country->title())
@section('content')

<div class="row">
    <div class="my-2 col-12 col-md-6 text-center">
        <a href="{{ route('admin.country.regions.create',$Country) }}" class="btn btn-primary mx-auto">@lang('trans.add_new')</a>
    </div>
    <div class="my-2 col-12 col-md-6 text-center">
        <a class="btn link-primary" data-bs-toggle="modal" data-bs-target="#delivery_cost">
            @lang('trans.delivery_cost_for_all_regions')
        </a>
    </div>
</div>
<table class="table dataTable  data-table">
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('trans.title_ar')</th>
            <th>@lang('trans.title_en')</th>
            <th>@lang('trans.delivery_cost')</th>
            {{-- 
            <th>@lang('trans.cod')</th>
             --}}
            <th>@lang('trans.visibility')</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Country->Regions as $Region)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $Region->title_ar }}</td>
            <td>{{ $Region->title_en }}</td>
            <td>{{ $Region->delivery_cost }}</td>
            {{-- 
            <td>{{ $Region->cod }}</td>
             --}}
            <td>
                @if ($Region->status)
                <label data-id="{{ $Region->id }}" onclick="toggleswitch({{ $Region->id }},'regions','status','status-checkbox')" class="switch toggleswitch bg-dark"><input id="status-checkbox{{ $Region->id }}" type="checkbox" checked><span class="slider"></span></label>
                @else
                <label data-id="{{ $Region->id }}" onclick="toggleswitch({{ $Region->id }},'regions','status','status-checkbox')" class="switch toggleswitch bg-dark"><input id="status-checkbox{{ $Region->id }}" type="checkbox"><span class="slider"></span></label>
                @endif
            </td>
            <td>
                <a href="{{ route('admin.country.regions.edit', ['country'=>$Country,'region'=>$Region,]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                <form class="formDelete" method="POST" action="{{ route('admin.country.regions.destroy', ['country'=>$Country,'region'=>$Region,]) }}">
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

<div class="modal fade" id="delivery_cost" tabindex="-1" aria-labelledby="delivery_costLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="modal-body" method="GET" action="{{ route('admin.countries.show',$Country->id) }}" id="delivery_cost_form">
                <label for="delivery_cost" class="form-label">@lang('trans.delivery_cost')</label>
                <input name="delivery_cost" class="form-control" id="delivery_cost">
                <label for="cod" class="form-label">@lang('trans.cod')</label>
                <input name="cod" class="form-control" id="cod">
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('trans.close')</button>
                <button type="submit" form="delivery_cost_form" class="btn btn-primary">@lang('trans.save')</button>
            </div>
        </div>
    </div>
</div>
@endsection
