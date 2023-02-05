@extends('layout.contactLayout')
@section('content')
        
        <section class="section_infografic">
            <div class="container">
                <div class="hd-page-art">
                    <h2>@lang('website.videoes')</h2>
                </div>
                <div class="row">
                    @foreach($videoes as $one)
                    <div class="col-lg-4">
                        <div class="item-video">
                            <a data-fancybox-plyr href="{{ $one->url }}"><img src="{{asset($one->image)}}" alt="" /></a>
                            <div class="txt-video">
                                <p>{{ $one->name_video }}</p>
                            </div>
                            <a data-fancybox-plyr href="{{ $one->url }}" class="btn-play"><i class="fa-solid fa-circle-play"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </section>
@endsection
        