@extends('Admin.layout')
@section('pagetitle', __('trans.FAQ'))
@section('content')

<table class="table text-center">
    <tr>
        <td>
            {{ $Model['question_en'] }}
        </td>
        <td>
            {{ $Model['question_ar'] }}
        </td>
    </tr>
    <tr>
        <td>
            {!! $Model['answer_en'] !!}
        </td>
        <td>
            {!! $Model['answer_ar'] !!}
        </td>
    </tr>


</table>

@endsection

