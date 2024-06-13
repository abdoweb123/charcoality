@extends('Admin.layout')

@section('pagetitle', $Media->title())
@section('content')

<div class="row">
    <div class="my-2 col-6 text-sm-start">
        <a href="{{ route('admin.media.gallery.create',$Media) }}" class="btn btn-primary">@lang('trans.add_new')</a>
    </div>
    <div class="my-2 col-6 text-sm-end">
        <button type="button" id="DeleteSelected" onclick="DeleteSelected('gallery')" class="btn btn-danger" disabled>@lang('trans.Delete_Selected')</button>
    </div>
</div>
<table class="table table-bordered data-table">
    <thead>
        <tr>
            <th><input type="checkbox" id="ToggleSelectAll" class="btn btn-primary"></th>
            <th>#</th>

            {{--
            <th>@lang('trans.title_ar')</th>
            <th>@lang('trans.title_en')</th>
             --}}
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Media->Gallery as $Model)
        <tr>
            <td>
                <input type="checkbox" class="DTcheckbox" value="{{ $Model->id }}">
            </td>
            <td>{{ $loop->iteration }}</td>

            {{--
            <td><a href="{{ route('admin.media.gallery.edit',['medium'=>$Media,'gallery'=>$Model]) }}">{{ $Model->title_ar }}</a></td>
            <td><a href="{{ route('admin.media.gallery.edit',['medium'=>$Media,'gallery'=>$Model]) }}">{{ $Model->title_en }}</a></td>
            --}}
            <td class="text-center">
                @if (IsVideo($Model->image))
                    <a target="_blank" href="{{asset($Model->image)}}"><img src="/video.svg" class="img-fluid" alt="image" style="height: 80px;"></a>
                @else
                    <img src="{{ asset($Model->image ?? setting('logo')) }}" class="rounded mx-auto text-center" id="file"  height="200px">
                @endif
            </td>
            <td>
                <a href="{{ route('admin.media.gallery.edit',['medium'=>$Media,'gallery'=>$Model]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                <form class="formDelete" method="POST" action="{{ route('admin.media.gallery.destroy',['medium'=>$Media,'gallery'=>$Model]) }}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="button" class="btn btn-flat edit_confirm" data-toggle="tooltip" title="Delete">
                        <i class="fa-solid fa-eraser"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
