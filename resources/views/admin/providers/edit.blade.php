@extends('admin.providers.sideMenu')
@section('companyContent')
    <div class="flex-row-fluid ml-lg-8">
        <div class="card card-custom gutter-b example example-compact">

            <div class="card-header">
                <h3 class="card-title">{{__('cp.editInformation')}}</h3>
            </div>

            <form method="post" action="{{url(app()->getLocale().'/admin/providers/'.$item->id)}}"
                  enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                {{ csrf_field() }}
                {{ method_field('PATCH')}}


                <div class="col-sm-12">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('cp.opening_status')}}</label>
                                <select class="form-control form-control-solid"
                                        name="opening_status" required>
                                    <option
                                        value="1" {{$item->opening_status=='1'?'selected':''}}>
                                        {{__('cp.open')}}
                                    </option>

                                    <option
                                        value="2" {{$item->opening_status=='2'?'selected':''}}>
                                        {{__('cp.crowded')}}
                                    </option>

                                    <option
                                        value="3" {{$item->opening_status=='3'?'selected':''}}>
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
                                           {{($locale->lang == 'ar') ? 'dir=rtl' :'' }} value="{{old('name_'.$locale->lang,@$item->translate($locale->lang)->name)}}"
                                           required/>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('cp.mobile')}}</label>
                                <input type="text" class="form-control form-control-solid" name="mobile"
                                       onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                       value="{{$item->mobile}}" required/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile">{{__('cp.email')}}</label>
                                <input type="email" class="form-control form-control-solid" name="email"
                                       value="{{ old('email',$item->email) }}" id="email" required/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('cp.branch_name')}}</label>
                                <input type="text" class="form-control form-control-solid" name="branch_name"
                                       value="{{$item->branch_name}}" required/>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('cp.type')}}</label>
                                <select class="form-control form-control-solid"
                                        name="type" required>
                                    <option
                                        value="2" {{$item->type=='2'?'selected':''}}>
                                        {{__('cp.restaurant')}}
                                    </option>
                                    <option
                                        value="3" {{$item->type=='3'?'selected':''}}>
                                        {{__('cp.food_truck')}}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('cp.cuisines')}}</label>
                                <select class="form-control form-control-solid select2" id="cuisines"
                                        name="cuisines[]" multiple required>
                                    @foreach($cuisines as $one)
                                        <option
                                            value="{{$one->id}}" {{in_array($one->id,old('cuisines',$item->cuisines->pluck('cuisine_id')->toArray())) ? "selected":"" }}>{{$one->name}}</option>
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
                                            <input type="checkbox" name="accept_pick_up" {{$item->accept_pick_up?'checked':''}}/>
                                            <span></span>
                                        </label>
                                    </span>
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
                                              required>{{old('description_'.$locale->lang,@$item->translate($locale->lang)->description)}}</textarea>
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
                                        value="active" {{$item->status == 'active'?'selected':''}}>
                                        {{__('cp.active')}}
                                    </option>
                                    <option
                                        value="not_active" {{$item->status == 'not_active'?'selected':''}}>
                                        {{__('cp.not_active')}}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('cp.supplier_code')}}</label>
                                <input type="text" class="form-control form-control-solid" name="supplier_code"
                                       value="{{$item->supplier_code}}" required/>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row col-sm-12">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>{{__('cp.image')}}</label>
                            <div class="fileinput-new thumbnail"
                                 onclick="document.getElementById('edit_image').click()"
                                 style="cursor:pointer;height:200px">
                                <img src="{{$item->image}}" id="editImage" alt="{{$item->name}}">
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

                    <div class="col-md-8">
                        <div class="form-group">
                            <label>{{__('cp.location')}}</label>
                            <div id="map-canvas"></div>
                            <input type="hidden" class="form-control input-sm"
                                   data-id="{{$item->latitude}}" value="{{$item->latitude}}"
                                   name="latitude" id="latitude">

                            <input type="hidden" class="form-control input-sm"
                                   data-id="{{$item->longitude}}" value="{{$item->longitude}}"
                                   name="longitude" id="longitude">
                        </div>
                    </div>
                </div>

                <div class="row col-sm-12" style="margin-bottom: 20px">
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
                                        @foreach($item->images as $one)
                                            <div class="imageBox text-center"
                                                 style="width:150px;height:190px;margin:5px">
                                                <img src="{{$one->image}}"
                                                     style="width:150px;height:150px">
                                                <button class="btn btn-danger deleteImage"
                                                        type="button">{{__("cp.remove")}}</button>
                                                <input class="attachedValues" type="hidden" name="oldImages[]"
                                                       value="{{$one->id}}">
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
        $('#edit_image').on('change', function (e) {
            readURL(this, $('#editImage'));
        });
        $(document).on('click', '#submitButton', function () {
            $('#submitForm').click();
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
