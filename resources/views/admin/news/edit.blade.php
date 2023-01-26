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
                        <h3>{{__('cp.edit_new')}}</h3>
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
                    <form method="post" action="{{url(app()->getLocale().'/admin/news/'.$item->id)}}"
                          enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}
                        <div class="card-header">
                            <h3 class="card-title">{{__('cp.main_info')}}</h3>
                        </div>
                        <div class="row col-sm-12">
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> {{__('cp.categories')}} </label>
                                            <select class="form-control form-control-solid select2" id="categories" name="categories[]"
                                                multiple="multiple" required>

                                                @foreach($categories as $one)
                                                    <option value="{{$one->id}}" {{in_array($one->id,old('categories',$item->categories->pluck('category_id')->toArray())) ? "selected":"" }}>{{$one->name}}</option>
        
                                                @endforeach
                                            </select>
                                              @if ($errors->has('categories'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('categories') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    

                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('cp.is_post')}}</label>
                                            <select   class="form-control form-control-solid"
                                                      name="is_post" required>
                                                <option
                                                    value="yes" {{$item->status == 'yes'?'selected':''}}>
                                                    {{__('cp.yes')}}
                                                </option>
                                                <option
                                                    value="no" {{$item->status == 'no'?'selected':''}}>
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
                                                       name="title_{{$locale->lang}}"
                                                       {{($locale->lang == 'ar') ? 'dir=rtl' :'' }} value="{{old('title_'.$locale->lang,@$item->translate($locale->lang)->title)}}"
                                                       required/>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                                <div class="row">
                                    @foreach($locales as $locale)
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{__('cp.detail_'.$locale->lang)}}</label>
                                                <input type="text" class="form-control form-control-solid"
                                                       name="detail_{{$locale->lang}}"
                                                       {{($locale->lang == 'ar') ? 'dir=rtl' :'' }} value="{{old('detail_'.$locale->lang,@$item->translate($locale->lang)->detail)}}"
                                                       required/>
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
                                                    <img src="{{$item->image}}" id="editImage" alt="">
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
                                        <legend>{{__('cp.images')}}</legend>
                                        <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                            <div class="col-md-12 col-md-offset-0">
                                                @if ($errors->has('image'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                                @endif
                                                <div class="imageupload" style="display:flex;flex-wrap:wrap">
                                                    @foreach($item->images as $image)
                                                        <div class="imageBox text-center"
                                                             style="width:150px;height:190px;margin:5px">
                                                            <img src="{{$image->image}}"
                                                                 style="width:150px;height:150px">
                                                            <button class="btn btn-danger deleteImage"
                                                                    type="button">{{__("cp.remove")}}</button>
                                                            <input class="attachedValues" type="hidden" name="oldImages[]"
                                                                   value="{{$image->id}}">
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="input-group control-group increment">
                                                    <div class="input-group-btn"
                                                         onclick="document.getElementById('all_images').click()">
                                                        <button class="btn btn-success" type="button"><i
                                                                class="glyphicon glyphicon-plus"></i>{{__("cp.addImages")}}
                                                        </button>
                                                    </div>
                                                    <input type="file" class="form-control hidden" accept="image/*"
                                                           id="all_images" multiple/>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
    
                                
                        </div>


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
        $('#edit_image1').on('change', function (e) {
            readURL(this, $('#editImage1'));
        });
        $(document).on('click', '#submitButton', function () {
            // $('#submitButton').addClass('spinner spinner-white spinner-left');
            $('#submitForm').click();
        });
    </script>


@endsection

@section('script')
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
