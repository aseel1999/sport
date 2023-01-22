@extends('layout.subAdminLayout')
@section('title') {{ucwords(__('cp.details'))}}
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
                        <h3>{{__('cp.edit_detail')}}</h3>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <a href="{{url(getLocal().'/provider/details')}}"
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
                    <form method="post" action="{{url(app()->getLocale().'/provider/details/'.$item->id)}}"
                          enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}
                        <div class="card-header">
                            <h3 class="card-title">{{__('cp.main_info')}}</h3>
                        </div>
                        <div class="row col-sm-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>{{__('cp.article')}}</label> <span
                                                style="color: #7b7878; font-size: 13px;">( @lang('cp.optional') )</span>
                                            <select class="form-control form-control-solid"
                                                    id="category_id"
                                                    name="category_id">
                                                <option value=""> @lang('cp.choose') </option>
                                                @foreach($articles as $article)
                                                    <option
                                                        value="{{$article->id}}" {{$item->article_id==$article->id ? 'selected':''}}> {{$article->title}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                


                                <div class="row">
                                    @foreach($locales as $locale)
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{__('cp.subtitle_'.$locale->lang)}}</label>
                                                <input type="text" class="form-control form-control-solid"
                                                       name="subtitle_{{$locale->lang}}"
                                                       {{($locale->lang == 'ar') ? 'dir=rtl' :'' }} value="{{old('subtitle_'.$locale->lang,@$item->translate($locale->lang)->subtitle)}}"
                                                       required/>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
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


    <script>
        var index = {{@$item->extras->count()}} + 1;
        $('#add-option').on('click', function () {
            $rows = `
                <div class="row new-item align-items-center">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>{{__('cp.name_en')}} <span
                                    class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control form-control-solid attachment_item "
                                   name="extras[${index}][name_en]"
                                   value="" required/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>{{__('cp.name_ar')}} <span
                                    class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control form-control-solid attachment_item "
                                   name="extras[${index}][name_ar]"
                                   value="" required/>
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="form-group">
                            <label>{{__('cp.price')}} <span
                                    class="text-danger">*</span></label>
                            <input type="number"
                                   class="form-control form-control-solid attachment_item "
                                   name="extras[${index}][price]"
                                   value="" required/>
                        </div>
                    </div>


                    <div class="col-md-1" style="display: inline;">
                        <a class="btn btn-outline-danger btn-icon btn-clean tooltips delete-new-item"
                           data-container="body"
                           data-placement="top"
                           data-parent-class="new-item"
                           data-original-title="{{__("cp.delete")}}"><i class="fa fa-trash"></i></a>

                    </div>


                </div>


           `;
            $('.task-list-item').append($rows);
            ++index;
        });

        $(document).on('click', '.delete-new-item', function () {
            // $(this).parents('.row_item').fadeOut(1000, () => $(this).remove()).remove();
            $(this).parents('.new-item').fadeOut(500, function () {
                $(this).remove();
            });
        });

        $(document).one('click', '#btn-has-choices', function () {
            $('.optionsDiv').show();
            // if (index === 0) {
            //     $('#add-option').click();
            // }
        });
    </script>

@endsection
