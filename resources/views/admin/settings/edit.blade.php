@extends('layout.adminLayout')
@section('title') {{ucwords(__('cp.settings'))}}
@endsection
@section('css')

    <style>
        a:link {
            text-decoration: none;

        }

        #map-canvas {
            width: 800px;
            height: 550px;

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
                        <h3>{{__('cp.edit')}}</h3>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <button id="submitButton" class="btn btn-success ">{{__('cp.save')}}</button>
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
                <div class="card card-custom gutter-b example example-compact">
                    <form class="form" method="post" action="{{url(app()->getLocale().'/admin/settings/')}}"
                          id="form" role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}



                        <div class="card-header">
                            <h3 class="card-title">{{__('cp.contact_info')}}</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.info_email')}}</label>
                                        <input type="email" class="form-control form-control-solid"
                                               name="info_email" value="{{$item->info_email}}" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.mobile')}}</label>
                                        <input type="number" class="form-control form-control-solid"
                                               name="mobile" value="{{$item->mobile}}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.tiktok')}}</label>
                                        <input type="url" class="form-control form-control-solid"
                                               name="tiktok" value="{{$item->tiktok}}" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.youtube')}}</label>
                                        <input type="url" class="form-control form-control-solid"
                                               name="youtube" value="{{$item->youtube}}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.linked')}}</label>
                                        <input type="url" class="form-control form-control-solid"
                                               name="linked" value="{{$item->linked}}" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.play')}}</label>
                                        <input type="url" class="form-control form-control-solid"
                                               name="play" value="{{$item->play}}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.paper')}}</label>
                                        <input type="url" class="form-control form-control-solid"
                                               name="paper" value="{{$item->paper}}" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.whatsapp')}}</label>
                                        <input type="text" class="form-control form-control-solid"
                                               name="whatsapp" value="{{$item->whatsapp}}" required/>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.twitter')}}</label>
                                        <input type="url" class="form-control form-control-solid"
                                               name="twitter" value="{{$item->twitter}}" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.instagram')}}</label>
                                        <input type="url" class="form-control form-control-solid"
                                               name="instagram" value="{{$item->instagram}}" required/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.paginateTotal')}}</label>
                                        <input type="number" class="form-control form-control-solid"
                                               name="paginateTotal" value="{{$item->paginateTotal}}" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.title')}}</label>
                                        <input type="text" class="form-control form-control-solid"
                                               name="title" value="{{$item->title}}" required/>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.about')}}</label>
                                        <textarea class="form-control kt-tinymce-4"
                                                rows="4"name="about" value={{ $item->about }} >{{$item->about}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.facebook')}}</label>
                                        <input type="url" class="form-control form-control-solid"
                                               name="facebook" value="{{$item->facebook}}" required/>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="fileinputForm">
                                        <label>{{__('cp.app_logo')}}</label>
                                        <div class="fileinput-new thumbnail"
                                             onclick="document.getElementById('edit_image3').click()"
                                             style="cursor:pointer">
                                            <img src="{{$item->app_logo}}" id="editImage3">
                                        </div>
                                        <div class="btn btn-change-img red"
                                             onclick="document.getElementById('edit_image3').click()">
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>
                                        <input type="file" class="form-control" name="app_logo"
                                               id="edit_image3"
                                               style="display:none">
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="fileinputForm">
                                        <label>{{__('cp.ad')}}</label>
                                        <div class="fileinput-new thumbnail"
                                             onclick="document.getElementById('edit_image4').click()"
                                             style="cursor:pointer">
                                            <img src="{{$item->ad}}" id="editImage4">
                                        </div>
                                        <div class="btn btn-change-img red"
                                             onclick="document.getElementById('edit_image4').click()">
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>
                                        <input type="file" class="form-control" name="ad"
                                               id="edit_image4"
                                               style="display:none">
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="fileinputForm">
                                        <label>{{__('cp.banner_header')}}</label>
                                        <div class="fileinput-new thumbnail"
                                             onclick="document.getElementById('edit_image5').click()"
                                             style="cursor:pointer">
                                            <img src="{{$item->banner_header}}" id="editImage5">
                                        </div>
                                        <div class="btn btn-change-img red"
                                             onclick="document.getElementById('edit_image5').click()">
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>
                                        <input type="file" class="form-control" name="banner_header"
                                               id="edit_image5"
                                               style="display:none">
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="fileinputForm">
                                        <label>{{__('cp.login_image')}}</label>
                                        <div class="fileinput-new thumbnail"
                                             onclick="document.getElementById('edit_image6').click()"
                                             style="cursor:pointer">
                                            <img src="{{$item->login_image}}" id="editImage6">
                                        </div>
                                        <div class="btn btn-change-img red"
                                             onclick="document.getElementById('edit_image6').click()">
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>
                                        <input type="file" class="form-control" name="login_image"
                                               id="edit_image6"
                                               style="display:none">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--end::Card-->
                        <button type="submit" id="submitForm" style="display:none"></button>
                    </form>

                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
        </div>
    </div>


@endsection
@section('js')
<script>
    $(document).on('click', '#submitButton', function () {
        $('#submitForm').click();
    });
</script>
    <script>
        $('#edit_image3').on('change', function (e) {
            readURL(this, $('#editImage3'));
        });
        $('#edit_image4').on('change', function (e) {
            readURL(this, $('#editImage4'));
        });
        $('#edit_image5').on('change', function (e) {
            readURL(this, $('#editImage5'));
        });
        $('#edit_image6').on('change', function (e) {
            readURL(this, $('#editImage6'));
        });
    </script>
    <script src="{{asset('/admin_assets/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
    <script src="{{asset('/admin_assets/js/pages/crud/forms/editors/tinymce.js')}}"></script>
@endsection

@section('script')

@endsection
