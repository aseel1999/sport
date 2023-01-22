@extends('layout.exportPdfLayout')
@section('content')
    <tr>
        <th>ID</th>
        <th>@lang('cp.name')</th>
        <th>@lang('cp.email')</th>
        <th>@lang('cp.phone')</th>
        <th>@lang('cp.title')</th>
        <th>@lang('cp.message')</th>
        <th>@lang('cp.status')</th>
        <th>@lang('cp.created')</th>
    </tr>
    @foreach($items as $one)
        <tr>
            <td>{{$one->id}}</td>
            <td>{{$one->name}}</td>
            <td>{{$one->email}}</td>
            <td>{{$one->phone}}</td>
            <td>{{$one->title}}</td>
            <td>{{$one->message}}</td>
            <td>{{$one->is_read==1?__('cp.seen'):__('cp.pending')}}</td>
            <td>{{$one->created_at->format('Y-m-d')}}</td>

        </tr>
    @endforeach
@endsection
