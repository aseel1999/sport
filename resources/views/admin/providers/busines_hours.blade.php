@extends('admin.providers.sideMenu')
@section('companyContent')
    <div class="flex-row-fluid ml-lg-8">
        <div class="card card-custom gutter-b example example-compact">

            <div class="card-header">
                <h3 class="card-title">{{__('cp.businessHours')}}</h3>
            </div>

            <form method="post" action="{{url(app()->getLocale().'/admin/providers/'.$item->id.'/updateBusinessHours')}}"
                  enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                {{ csrf_field() }}
{{--                {{ method_field('PATCH')}}--}}


                <div class="col-sm-12">


                        <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">{{__('cp.day')}}</label>
                                <select class="form-control form-control-solid"  name="days[]" required>
                                    <option value="6" selected>@lang('cp.Saturday')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.from')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('from[]',$items->where('day','6')->first() ? $items->where('day','6')->first()->from : '')}}"
                                       name="from[]"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.to')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('to[]',$items->where('day','6')->first()? $items->where('day','6')->first()->to:'')}}" name="to[]"
                                />
                            </div>
                        </div>
                        <div class="col-md-1 delete">
                            <div class="form-group">
                                <i class="fa fa-trash" style="margin-top: 40px"></i>
                            </div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">{{__('cp.day')}}</label>
                                <select class="form-control form-control-solid"  name="days[]" required>
                                    <option value="0" selected>@lang('cp.Sunday')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.from')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('from[]',$items->where('day','0')->first() ? $items->where('day','0')->first()->from:'')}}"
                                       name="from[]"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.to')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('to[]',$items->where('day','0')->first() ? $items->where('day','0')->first()->to:'')}}" name="to[]"
                                />
                            </div>
                        </div>
                        <div class="col-md-1 delete">
                            <div class="form-group">
                                <i class="fa fa-trash" style="margin-top: 40px"></i>
                            </div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">{{__('cp.day')}}</label>
                                <select class="form-control form-control-solid"  name="days[]" required>
                                    <option value="1" selected>@lang('cp.Monday')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.from')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('from[]',$items->where('day','1')->first()? $items->where('day','1')->first()->from:'')}}"
                                       name="from[]"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.to')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('to[]',$items->where('day','1')->first()? $items->where('day','1')->first()->to:'')}}" name="to[]"
                                />
                            </div>
                        </div>
                        <div class="col-md-1 delete">
                            <div class="form-group">
                                <i class="fa fa-trash" style="margin-top: 40px"></i>
                            </div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">{{__('cp.day')}}</label>
                                <select class="form-control form-control-solid"  name="days[]" required>
                                    <option value="2" selected>@lang('cp.Tuesday')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.from')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('from[]',$items->where('day','2')->first()? $items->where('day','2')->first()->from:'')}}"
                                       name="from[]"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.to')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('to[]',$items->where('day','2')->first()? $items->where('day','2')->first()->to:'')}}" name="to[]"
                                />
                            </div>
                        </div>
                        <div class="col-md-1 delete">
                            <div class="form-group">
                                <i class="fa fa-trash" style="margin-top: 40px"></i>
                            </div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">{{__('cp.day')}}</label>
                                <select class="form-control form-control-solid"  name="days[]" required>
                                    <option value="3" selected>@lang('cp.Wednesday')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.from')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('from[]',$items->where('day','3')->first()? $items->where('day','3')->first()->from:'')}}"
                                       name="from[]"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.to')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('to[]',$items->where('day','3')->first()? $items->where('day','3')->first()->to:'')}}" name="to[]"
                                />
                            </div>
                        </div>
                        <div class="col-md-1 delete">
                            <div class="form-group">
                                <i class="fa fa-trash" style="margin-top: 40px"></i>
                            </div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">{{__('cp.day')}}</label>
                                <select class="form-control form-control-solid"  name="days[]" required>
                                    <option value="4" selected>@lang('cp.Thursday')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.from')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('from[]',$items->where('day','4')->first()? $items->where('day','4')->first()->from:'')}}"
                                       name="from[]"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.to')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('to[]',$items->where('day','4')->first()? $items->where('day','4')->first()->to:'')}}" name="to[]"
                                />
                            </div>
                        </div>
                        <div class="col-md-1 delete">
                            <div class="form-group">
                                <i class="fa fa-trash" style="margin-top: 40px"></i>
                            </div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">{{__('cp.day')}}</label>
                                <select class="form-control form-control-solid"  name="days[]" required>
                                    <option value="5" selected>@lang('cp.Friday')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.from')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('from[]',$items->where('day','5')->first()? $items->where('day','5')->first()->from:'')}}"
                                       name="from[]"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{__('cp.to')}}</label>
                                <input type="time" class="form-control form-control-solid"
                                       value="{{old('to[]',$items->where('day','5')->first()? $items->where('day','5')->first()->to:'')}}" name="to[]"
                                />
                            </div>
                        </div>
                        <div class="col-md-1 delete">
                            <div class="form-group">
                                <i class="fa fa-trash" style="margin-top: 40px"></i>
                            </div>
                        </div>
                        </div>

                </div>

                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <a href="{{url(getLocal().'/admin/providers')}}"
                       class="btn btn-secondary  mr-2">{{__('cp.cancel')}}</a>
                    <button id="submitButton" class="btn btn-success ">{{__('cp.save')}}</button>
                </div>
                <!--end::Toolbar-->
                <button type="submit" id="submitForm" style="display:none"></button>
            </form>

        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).on('click','.delete',function (){
            $(this).parent().find('input').val('');
        });
    </script>
@endsection
