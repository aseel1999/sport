@extends('layout.exportPdfLayout')
@section('content')
    <tr>
        <th>ID</th>
        <th>@lang('cp.name')</th>
        <th>@lang('cp.email')</th>
        <th>@lang('cp.mobile')</th>
        <th>@lang('cp.type')</th>
        <th>@lang('cp.branch_name')</th>
        <th>@lang('cp.number_of_meals')</th>
        <th>@lang('cp.total_sales')</th>
        <th>@lang('cp.total_orders')</th>
        <th>@lang('cp.avg')</th>
        <th>@lang('cp.accept_pick_up')</th>
        <th>@lang('cp.status')</th>
        <th>@lang('cp.created')</th>
    </tr>
    @foreach($items as $one)
        <tr>
            <td>{{$one->id}}</td>
            <td>{{$one->name}}</td>
            <td>{{$one->email}}</td>
            <td>{{$one->mobile}}</td>
            <td>{{$one->type=='2'?__('cp.restaurant'):__('cp.food_truck')}}</td>
            <td>{{$one->branch_name}}</td>
            <td>{{count($one->meals)}}</td>
            <td>{{$one->total_sales}}</td>
            <td>{{$one->total_orders}}</td>
            <td>{{$one->avg_orders}}</td>
            <td>{{$one->accept_pick_up ? __('cp.accept') : __('cp.not_accept')}}</td>
            <td>{{$one->status=='active'?__('cp.active') : __('cp.not_active')}}</td>
            <td>{{$one->created_at->format('Y-m-d')}}</td>

        </tr>
    @endforeach
@endsection
