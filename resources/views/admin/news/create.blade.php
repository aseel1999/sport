@extends('layout.adminLayout')
@section('title') {{ucwords(__('cp.news'))}}
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
                        <h3>{{__('cp.add_new')}}</h3>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <a href="{{url(getLocal().'/admin/news')}}"
                       class="btn btn-secondary  mr-2">{{__('cp.cancel')}}</a>
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
                    <form method="post" action="{{url(app()->getLocale().'/admin/news')}}"
                          enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                        {{ csrf_field() }}

                        <div class="card-header">
                            <h3 class="card-title">{{__('cp.main_info')}}</h3>
                        </div>
                        <div class="row col-sm-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('cp.sport')}}</label>
                                            <select class="form-control form-control-solid"
                                                    name="sport_id" id="sport_id" required>
                                                <option value=""> @lang('cp.select')</option>
                                                @foreach($sports as $sport)
                                                    <option value="{{$sport->id}}"
                                                            data-id="{{$sport->id}}"> {{@$sport->sport_name}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('cp.category')}}</label>
                                            <select class="form-control form-control-solid"
                                                    name="category_id" id="category_id" required>
                                                <option value=""> @lang('cp.select')</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}"
                                                            data-id="{{$category->id}}"> {{$category->name}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                   
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('cp.is_post')}}</label>
                                            <select class="form-control form-control-solid"
                                                    name="is_post" required>
                                                <option
                                                    value="yes">
                                                    {{__('cp.yes')}}
                                                </option>
                                                <option
                                                    value="no">
                                                    {{__('cp.no')}}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    @foreach($locales as $locale)
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{__('cp.title_'.$locale->lang)}}</label>
                                                <input type="text" class="form-control form-control-solid"
                                                       {{($locale->lang == 'ar') ? 'dir=rtl' :'' }}  name="title_{{$locale->lang}}"
                                                       value="{{old('title_'.$locale->lang)}}" required/>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row">
                                    @foreach($locales as $locale)
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{__('cp.subtitle_'.$locale->lang)}}</label>
                                                <input type="text" class="form-control form-control-solid"
                                                       {{($locale->lang == 'ar') ? 'dir=rtl' :'' }}  name="subtitle_{{$locale->lang}}"
                                                       value="{{old('subtitle_'.$locale->lang)}}" required/>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                            <div class="row">
                                @foreach($locales as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('cp.detail_'.$locale->lang)}}</label>
                                                <textarea class="form-control kt-tinymce-4"
                                                       {{($locale->lang == 'ar') ? 'dir=rtl' :'' }}  name="detail_{{$locale->lang}}"
                                                        rows="8" required>{{old('detail_'.$locale->lang)}}</textarea>
                                            
                                        </div>
                                    </div>
                                @endforeach

                                
                            </div>
                            <div class="card-body col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('cp.image')}}</label>
                                            <div class="fileinput-new thumbnail"
                                                 onclick="document.getElementById('edit_image').click()"
                                                 style="cursor:pointer">
                                                <img src="{{choose()}}" id="editImage" alt="">
                                            </div>
                                            <div class="btn red"
                                                 onclick="document.getElementById('edit_image').click()">
                                                <i class="fa fa-pencil"></i>
                                            </div>
                                            <input type="file" class="form-control" name="image"
                                                   id="edit_image"
                                                   style="display:none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <fieldset>
                                    <legend>{{__('cp.more_images')}}</legend>
                                    <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                        <div class="col-md-12 col-md-offset-0">
                                            @if ($errors->has('image'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                            @endif
                                            <div class="imageupload" style="display:flex;flex-wrap:wrap">
        
                                            </div>
                                            <div class="input-group control-group increment">
                                                <div class="input-group-btn"
                                                     onclick="document.getElementById('all_images').click()">
                                                    <button class="btn btn-success" type="button"><i
                                                            class="glyphicon glyphicon-plus"></i>{{__("cp.addImages")}}
                                                    </button>
                                                </div>
                                                <input type="file" class="form-control hidden" accept="image/*"
                                                       id="all_images" name="all_images" multiple/>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <button type="submit" id="submitForm" style="display:none"></button>
                    </form>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>


@endsection

@section('js')
    <script>
        $('#edit_image').on('change', function (e) {
            readURL(this, $('#editImage'));
        });
        $(document).on('click', '#submitButtonNow', function () {
            // $('#submitButton').addClass('spinner spinner-white spinner-left');
            $('#submitFormNow').click();
        });
    </script>
<script src="{{asset('/admin_assets/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
<script src="{{asset('/admin_assets/js/pages/crud/forms/editors/tinymce.js')}}"></script>

@endsection

@section('script')
<script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/js/pages/crud/file-upload/image-input.js')}}"></script>

    <script>


        function readURLMultiple(input, target) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (var i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function (event) {
                        target.append('<div class="imageBox text-center" style="width:150px;height:190px;margin:5px"><img src="' + event.target.result + '" style="width:150px;height:150px"><button class="btn btn-danger deleteImage" type="button">{{__("cp.delete")}}</button><input class="attachedValues" type="hidden" name="filename[]" value="' + event.target.result + '"></div>');
                    };
                    reader.readAsDataURL(input.files[i]);
                }
            }
        }

        $(document).on("click", ".deleteImage", function () {
            $(this).parent().remove();
        });
        $('#all_images').on('change', function (e) {
            readURLMultiple(this, $('.imageupload'));
        });
    </script>
    @endsection
