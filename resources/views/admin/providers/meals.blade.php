@extends('admin.providers.sideMenu')
@section('companyContent')
    <div class="container">
        <div class="card card-custom gutter-b example example-compact" style="padding: 30px">
            <div class="table-responsive">
                <table class="table table-hover tableWithSearch" id="tableWithSearch">
                    <thead>
                    <tr>
                        <th class="wd-1p no-sort">
                            <div class="checkbox-inline">
                                <label class="checkbox">
                                    <input type="checkbox" name="checkAll"/>
                                    <span></span></label>
                            </div>
                        </th>
                        <th class="wd-5p">ID</th>
                        <th class="wd-5p"> {{ucwords(__('cp.image'))}}</th>
                        <th class="wd-25p"> {{ucwords(__('cp.title'))}}</th>
                        <th class="wd-5p"> {{ucwords(__('cp.category'))}}</th>
                        <th class="wd-5p"> {{ucwords(__('cp.price'))}}</th>
                        <th class="wd-10p"> {{ucwords(__('cp.status'))}}</th>
                        <th class="wd-10p"> {{ucwords(__('cp.created'))}}</th>

                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $one)
                        <tr class="odd gradeX" id="tr-{{$one->id}}">
                            <td class="v-align-middle wd-5p">
                                @if($one->category_id != '0')
                                    <div class="checkbox-inline">
                                        <label class="checkbox">
                                            <input type="checkbox" value="{{$one->id}}" class="checkboxes"
                                                   name="chkBox"/>
                                            <span></span></label>
                                    </div>
                                @endif
                            </td>
                            <td class="v-align-middle wd-5p">{{$one->id}}</td>

                            <td class="v-align-middle wd-5p"><img src="{{$one->image}}" width="50px"
                                                                  height="50px"></td>

                            <td class="v-align-middle wd-25p">{{$one->title}}</td>
                            <td class="v-align-middle wd-25p">{{@$one->category? @$one->category->name : __('cp.un_assigned')}}</td>
                            <td class="v-align-middle wd-25p">{{@$one->price}}</td>
                            <td class="v-align-middle wd-10p"> <span id="label-{{$one->id}}"
                                                                     class="badge badge-pill badge-{{($one->status == "active")
                                            ? "info" : "danger"}}" id="label-{{$one->id}}">
                                            {{__('cp.'.$one->status)}}
                                        </span>
                            </td>

                            <td class="v-align-middle wd-10p">{{$one->created_at->format('Y-m-d')}}</td>

                        </tr>
                    @empty

                    @endforelse


                    </tbody>
                </table>
{{--                {{$items->appends($_GET)->links("pagination::bootstrap-4") }}--}}
            </div>

        </div>
    </div>
@endsection
