@extends('layout.subAdminLayout')
@section('title') {{ucwords(__('cp.options'))}}
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
                        <h3>{{ucwords(__('cp.options'))}}</h3>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->


                <div>
                    <a href="{{url(getLocal().'/provider/meals/'.$meal->id.'/createOption')}}" class="btn btn-secondary  mr-2 btn-success">
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
                                    <th class="wd-25p"> {{ucwords(__('cp.name'))}}</th>
                                    <th class="wd-10p"> {{ucwords(__('cp.created'))}}</th>
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
                                        {{--                                        <td class="v-align-middle wd-5p"><img src="{{$one->image}}" width="50px" height="50px"></td>--}}

                                        <td class="v-align-middle wd-25p">{{$one->name}}</td>
                                        <td class="v-align-middle wd-10p">{{$one->created_at->format('Y-m-d')}}</td>

                                        <td class="v-align-middle wd-15p optionAddHours">
                                            <a href="{{url(getLocal().'/admin/meals/'.$one->id.'/editOption')}}"
                                               class="btn btn-sm btn-clean btn-icon" title="{{__('cp.edit')}}">
                                                <i class="la la-edit"></i>
                                            </a>

                                            <a href="#myModal{{$one->id}}" role="button"  data-toggle="modal" class="btn btn-sm btn-clean btn-icon"><i class="la la-trash"></i></a>
                                        </td>
                                        <div id="myModal{{$one->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title">{{__('cp.delete')}}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{{__('cp.confirmDeleteAll')}} </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">{{__('cp.cancel')}}</button>
                                                        <a onclick="delete_adv('{{$one->id}}','{{$one->id}}',event)"><button class="btn btn-danger">{{__('cp.delete')}}</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </tr>
                                @empty

                                @endforelse


                                </tbody>
                            </table>
{{--                            {{$items->appends($_GET)->links("pagination::bootstrap-4") }}--}}
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
<script>
    function delete_adv(id, iss_id, e) {
        //alert(id);
        e.preventDefault();

        var url = '{{url(getLocal()."/admin/meals")}}/' + id+'/deleteOption';
        var csrf_token = '{{csrf_token()}}';
        $.ajax({
            type: 'delete',
            headers: {'X-CSRF-TOKEN': csrf_token},
            url: url,
            data: {_method: 'delete'},
            success: function (response) {
                console.log(response);
                if (response.trim() === 'success') {
                    $('#tr-' + id).hide(500);
                    $('#myModal' + id).modal('toggle');

                } else {
                    swal('Error', {icon: "error"});
                }
            },
            error: function (e) {

            }
        });

    }

</script>
@endsection
