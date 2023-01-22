@extends('layout.adminLayout')
@section('title') {{ucwords(__('cp.providers'))}}
@endsection
@section('css')

    <style>
        a:link {
            text-decoration: none;
        }

        #map-canvas {
            width: 100%;
            height: 320px;

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
                        <h3>{{__('cp.add')}}</h3>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <a href="{{url(getLocal().'/admin/providers')}}"
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
                    <form class="form" method="post" action="{{url(app()->getLocale().'/admin/providers')}}"
                          role="form" id="form" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title">{{__('cp.main_info')}}</h3>
                        </div>

                        <div class="card-body">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{__('cp.opening_status')}}</label>
                                        <select class="form-control form-control-solid"
                                                name="opening_status" required>
                                            <option
                                                value="1" {{old('opening_status')=='1'?'selected':''}}>
                                                {{__('cp.open')}}
                                            </option>

                                            <option
                                                value="2" {{old('opening_status')=='2'?'selected':''}}>
                                                {{__('cp.crowded')}}
                                            </option>

                                            <option
                                                value="3" {{old('opening_status')=='3'?'selected':''}}>
                                                {{__('cp.closed')}}
                                            </option>


                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                @foreach($locales as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('cp.name_'.$locale->lang)}}</label>
                                            <input type="text" class="form-control form-control-solid"
                                                   name="name_{{$locale->lang}}"
                                                   {{($locale->lang == 'ar') ? 'dir=rtl' :'' }} value="{{old('name_'.$locale->lang)}}"
                                                   required/>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">{{__('cp.mobile')}}</label>
                                        <input type="mobile" maxlength="8"
                                               onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                               class="form-control form-control-solid" name="mobile"
                                               value="{{ old('mobile') }}" id="mobile" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">{{__('cp.email')}}</label>
                                        <input type="email" class="form-control form-control-solid" name="email"
                                               value="{{ old('email') }}" id="email" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="branch_name">{{__('cp.branch_name')}}</label>
                                        <input type="text" class="form-control form-control-solid" name="branch_name"
                                               value="{{ old('branch_name') }}" id="branch_name" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.type')}}</label>
                                        <select class="form-control form-control-solid"
                                                name="type" required>
                                            <option
                                                value="2">
                                                {{__('cp.restaurant')}}
                                            </option>
                                            <option
                                                value="3">
                                                {{__('cp.food_truck')}}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">{{__('cp.password')}}</label>
                                        <input type="password" class="form-control form-control-solid" name="password"
                                               value="{{ old('password') }}" id="password" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="confirm_password">{{__('cp.confirm_password')}}</label>
                                        <input type="password" class="form-control form-control-solid"
                                               name="confirm_password"
                                               value="{{ old('confirm_password') }}" id="confirm_password" required/>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('cp.cuisines')}}</label>
                                            <select class="form-control form-control-solid select2 " id="cuisines"
                                                    name="cuisines[]" multiple required>
                                                @foreach($cuisines as $one)
                                                    <option
                                                        value="{{$one->id}}" {{old('cuisines.'.$loop->index)==$one->id?'selected':''}}>{{$one->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-6 col-form-label">{{__('cp.accept_pick_up')}}</label>
                                            <div class="col-3">
                                    <span class="switch">
                                        <label>
                                            <input type="checkbox" name="accept_pick_up"/>
                                            <span></span>
                                        </label>
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="row">
                                @foreach($locales as $locale)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__('cp.description_'.$locale->lang)}}</label>
                                            <textarea type="text" class="form-control form-control-solid"
                                                      rows="3" maxlength="150"
                                                      {{($locale->lang == 'ar') ? 'dir=rtl' :'' }}  name="description_{{$locale->lang}}"
                                                      required>{{old('description_'.$locale->lang)}}</textarea>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.status')}}</label>
                                        <select class="form-control form-control-solid"
                                                name="status" required>
                                            <option
                                                value="active">
                                                {{__('cp.active')}}
                                            </option>
                                            <option
                                                value="not_active">
                                                {{__('cp.not_active')}}
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">{{__('cp.supplier_code')}}</label>
                                        <input type="text" class="form-control form-control-solid" name="supplier_code"
                                               value="{{ old('supplier_code') }}" id="supplier_code" required/>
                                    </div>
                                </div>



                            </div>


                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.logo')}}</label>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{__('cp.location')}}</label>
                                        <div id="map-canvas"></div>
                                        <input type="hidden" class="form-control input-sm"
                                               data-id="21.515639" value="21.515639"
                                               name="latitude" id="latitude">

                                        <input type="hidden" class="form-control input-sm"
                                               data-id="39.174498" value="39.174498"
                                               name="longitude" id="longitude">
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
                                        <div class="input-group control-group increment" >
                                            <div class="input-group-btn"  onclick="document.getElementById('all_images').click()">
                                                <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>{{__("cp.addImages")}}</button>
                                            </div>
                                            <input type="file" class="form-control hidden"  accept="image/*" id="all_images"  multiple />
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
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

@endsection

@section('script')
    <script>
        $('#edit_image').on('change', function (e) {
            readURL(this, $('#editImage'));
        });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key={{env('APIGoogleKey')}}&libraries=places"
            type="text/javascript"></script>
    <script>
        var latitude = $('#latitude').data("id");
        var longitude = $('#longitude').data("id");
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            center: {
                lat: latitude,
                lng: longitude
            },
            zoom: 4
        });
        var marker = new google.maps.Marker({
            position: {
                lat: latitude,
                lng: longitude
            },
            map: map,
            draggable: true
        });
        var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
        google.maps.event.addListener(searchBox, 'places_changed', function () {
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;
            for (i = 0; place = places[i]; i++) {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location); //set marker position new...
            }
            map.fitBounds(bounds);
            map.setZoom(15);
        });
        google.maps.event.addListener(marker, 'position_changed', function () {
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();
            $('#latitude').val(lat);
            $('#longitude').val(lng);
        });
    </script>
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
        $('#cuisines').change(function (e) {
            if ($("#cuisines option:selected").length > 3) {
                swal('@lang('cp.cuisines_must_be_in_one_to_three')');
                $("#cuisines option:last").remove();
            }
        });
    </script>
@endsection
