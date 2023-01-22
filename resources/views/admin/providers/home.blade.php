@extends('layout.adminLayout')
@section('title') {{ucwords(__('cp.providers'))}}
@endsection
@section('css')

    <style>

        a:link {
            text-decoration: none;
        }
    </style>

@endsection
@section('content')



    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline mr-5">
                        <h3>{{ucwords(__('cp.providers'))}}</h3>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->


                <div>
                    <div class="btn-group mb-2 m-md-3 mt-md-0 ml-2 ">
                        <a  class="btn btn-secondary" href="{{url(getLocal().'/admin/pdfProviders')}}">
                            <i class="icon-xl la la-file-pdf"></i>
                            <span>PDF</span>
                        </a>

                        <a  class="btn btn-secondary" href="{{url(getLocal().'/admin/exportProviders')}}">
                            <i class="icon-xl la la-file-excel"></i>
                            <span>{{__('cp.excel')}}</span>
                        </a>

                        <button type="button" class="btn btn-secondary" href="#activation" role="button"  data-toggle="modal">
                            <i class="icon-xl la la-check"></i>
                            <span>{{__('cp.activation')}}</span>
                        </button>
                        <button type="button" class="btn btn-secondary" href="#cancel_activation" role="button"  data-toggle="modal">
                            <i class="icon-xl la la-ban"></i>
                            <span>{{__('cp.cancel_activation')}}</span>
                        </button>
                        <button type="button" class="btn btn-secondary" href="#deleteAll" role="button" data-toggle="modal">
                            <i class="flaticon-delete"></i>
                            <span>{{__('cp.delete')}}</span>
                        </button>
                    </div>
                    <a href="{{url(getLocal().'/admin/providers/create')}}" class="btn btn-secondary  mr-2 btn-success">
                        <i class="icon-xl la la-plus"></i>
                        <span>{{__('cp.add')}}</span>
                    </a>
                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="gutter-b example example-compact">

                    <div class="contentTabel">
                        <button  type="button" class="btn btn-secondar btn--filter mr-2"><i class="icon-xl la la-sliders-h"></i>{{__('cp.filter')}}</button>
                        <div class="container box-filter-collapse" >
                            <div class="card" >
                                <form class="form-horizontal" method="get" action="{{url(getLocal().'/admin/providers')}}">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">ID</label>
                                                <input type="number" value="{{request('id')?request('id'):''}}" class="form-control" name="id" placeholder="ID">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">{{__('cp.name')}}</label>
                                                <input type="text" value="{{request('name')?request('name'):''}}" class="form-control" name="name" placeholder="{{__('cp.name')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">{{__('cp.email')}}</label>
                                                <input type="text" class="form-control" value="{{request('email')?request('email'):''}}" name="email" placeholder="{{__('cp.email')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">{{__('cp.mobile')}}</label>
                                                <input value="{{request('mobile')?request('mobile'):''}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"  type="text" class="form-control" name="mobile" placeholder="{{__('cp.mobile')}}">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">{{__('cp.status')}}</label>
                                                <select id="multiple2" class="form-control  "
                                                        name="status">
                                                    <option value="">{{__('cp.all')}}</option>
                                                    <option
                                                        value="active" {{request('status') == 'active'?'selected':''}}>
                                                        {{__('cp.active')}}
                                                    </option>
                                                    <option
                                                        value="not_active" {{request('status') == 'not_active'?'selected':''}}>
                                                        {{__('cp.not_active')}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>{{__('cp.type')}}</label>
                                                <select class="form-control"
                                                        name="type">
                                                    <option
                                                        value="">
                                                        {{__('cp.all')}}
                                                    </option>
                                                    <option
                                                        value="2" {{request('type') == '2'?'selected':''}}>
                                                        {{__('cp.restaurant')}}
                                                    </option>
                                                    <option
                                                        value="3" {{request('type') == '3'?'selected':''}}>
                                                        {{__('cp.food_truck')}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>{{__('cp.cuisines')}}</label>
                                                <select class="form-control form-control-solid select2"
                                                        name="cuisines[]" multiple>
                                                    @foreach($cuisines as $cuisine)
                                                        <option value="{{$cuisine->id}}" @if(request('cuisines')){{in_array($cuisine->id,request('cuisines'))? "selected": ""}}@endif>{{$cuisine->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <button type="submit" class="btn sbold btn-default btnSearch">{{__('cp.search')}}
                                                <i class="fa fa-search"></i>
                                            </button>

                                            <a href="{{url(app()->getLocale().'/admin/providers')}}" type="submit" class="btn sbold btn-default btnRest">{{__('cp.reset')}}
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-header d-flex flex-column flex-sm-row align-items-sm-start justify-content-sm-between">
                            <div>


                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover tableWithSearch" id="tableWithSearch">
                                <thead>
                                <tr>
                                    <th class="wd-1p no-sort">
                                        <div class="checkbox-inline">
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkAll" />
                                                <span></span></label>
                                        </div>
                                    </th>

                                    <th class="wd-5p"> ID</th>
                                    <th class="wd-5p"> {{ucwords(__('cp.image'))}}</th>
                                    <th class="wd-25p"> {{ucwords(__('cp.name'))}}</th>
                                    <th class="wd-25p"> {{ucwords(__('cp.email'))}}</th>
                                    <th class="wd-25p"> {{ucwords(__('cp.mobile'))}}</th>
                                    <th class="wd-25p"> {{ucwords(__('cp.type'))}}</th>
                                    <th class="wd-25p"> {{ucwords(__('cp.branch_name'))}}</th>
                                    <th class="wd-25p"> {{ucwords(__('cp.number_of_meals'))}}</th>
                                    <th class="wd-25p"> {{ucwords(__('cp.total_sales'))}}</th>
                                    <th class="wd-25p"> {{ucwords(__('cp.total_orders'))}}</th>
                                    <th class="wd-25p"> {{ucwords(__('cp.avg'))}}</th>
                                    <th class="wd-25p"> {{ucwords(__('cp.accept_pick_up'))}}</th>
                                    <th class="wd-10p"> {{ucwords(__('cp.status'))}}</th>
                                    <th class="wd-10p"> {{ucwords(__('cp.created_date'))}}</th>
                                    <th class="wd-15p"> {{ucwords(__('cp.action'))}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($items as $one)
                                    <tr class="odd gradeX" id="tr-{{$one->id}}">
                                        <td class="v-align-middle wd-5p">
                                            <div class="checkbox-inline">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="{{$one->id}}" class="checkboxes" name="chkBox" />
                                                    <span></span></label>
                                            </div>
                                        </td>

                                        <td class="v-align-middle wd-5p">{{$one->id}}</td>
                                        <td class="v-align-middle wd-5p"><img src="{{$one->image}}" width="50px" height="50px"></td>

                                        <td class="v-align-middle wd-25p">{{$one->name}}</td>
                                        <td class="v-align-middle wd-25p">{{$one->email}}</td>
                                        <td class="v-align-middle wd-25p">{{$one->mobile}}</td>
                                        <td class="v-align-middle wd-25p">@if($one->type=='2') @lang('cp.restaurant')@elseif($one->type=='3')  @lang('cp.food_truck')  @endif</td>
                                        <td class="v-align-middle wd-25p">{{$one->branch_name}}</td>
                                        <td class="v-align-middle wd-25p">{{count($one->meals)}}</td>
                                        <td class="v-align-middle wd-25p">{{$one->total_sales}}</td>
                                        <td class="v-align-middle wd-25p">{{$one->total_orders}}</td>
                                        <td class="v-align-middle wd-25p">{{$one->avg_orders}}</td>
                                        <td data-field="Status" aria-label="6" class="datatable-cell"><span
                                                style="width: 108px;"><span
                                                    class="label font-weight-bold label-lg  label-light-{{$one->accept_pick_up==1?'success':'danger'}} label-inline">{{$one->accept_pick_up==1?__('cp.accept'):__('cp.not_accept')}}</span></span>
                                        </td>

                                        <td class="v-align-middle wd-10p" > <span id="label-{{$one->id}}" class="badge badge-pill badge-{{($one->status == "active")
                                            ? "info" : "danger"}}" id="label-{{$one->id}}">

                                            {{__('cp.'.$one->status)}}
                                        </span>
                                        </td>

                                        <td class="v-align-middle wd-10p">{{$one->created_at->format('Y-m-d')}}</td>

                                        <td class="v-align-middle wd-15p optionAddHours">
                                            <a href="{{url(getLocal().'/admin/providers/'.$one->id.'/edit')}}"
                                               class="btn btn-sm btn-clean btn-icon" title="{{__('cp.show')}}">
                                                <i class="la la-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty

                                @endforelse


                                </tbody>
                            </table>
                            {{$items->appends($_GET)->links("pagination::bootstrap-4") }}
                        </div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>

@endsection
@section('js')

@endsection

@section('script')

@endsection
