<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('admin.layouts.head')

<body>

    <div class="main-wrapper">

        @include('admin.layouts.header')
        <!--header-->
        
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <section class="section_home">
                            <div class="owl-carousel" id="slider-home">
                                <div class="item">
                                    <div class="big-news">
                                        <figure><img src="{{ asset('web/image/ad.png')}}" alt="" /></figure>
                                        <div class="txt-big-news">
                                            <h4><a href="details.html">المنتخب السعودي يصدم التانجو الأرجنتيني</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="big-news">
                                        <figure><img src="{{ asset('web/image/ad.png')}}" alt="" /></figure>
                                        <div class="txt-big-news">
                                            <h4><a href="details.html">المنتخب السعودي يصدم التانجو الأرجنتيني</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="big-news">
                                        <figure><img src="{{asset ('web/image/ad.png')}}" alt="" /></figure>
                                        <div class="txt-big-news">
                                            <h4><a href="details.html">المنتخب السعودي يصدم التانجو الأرجنتيني</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--section_home-->
                        
                        <section class="section_sweeteners">
                            <div class="sec_head">
                                <h2>{{ $category1->name }}</h2>
                            </div>
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="big-news">
                                        <figure><img src="{{ asset($new1->new->image) }}" alt="77" /></figure>
                                        <div class="txt-big-news">
                                            <h4><a href="details.html">  {{ $new1->new->title }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="cont-ds-news">
                                        @foreach($news as $one)
                                        <div class="item-ds-news">
                                            <figure><img src="{{ $one->new->image }}" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html"> {{ $one->new->title }}</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> {{ $one->created_at->format('Y-m-d')}}</span>
                                                <p>{{ @$one->new->detail }}.</p>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--section_sweeteners-->
                        <section class="section_other_news">
                            <div class="sec_head">
                                <h2>{{ $category2->name }}</h2>
                            </div>
                            <div class="other-news">
                                <div class="big--other--news">
                                    <div class="item-ds-news">
                                        <figure><img src="{{ asset($new2->new->image) }}" alt="" /></figure>
                                        <div class="txt-ds-news">
                                            <h6><a href="details.html" >{{ $new2->new->title }}</a></h6>
                                            <span>{{ $new2->new->created_at->format('Y-m-d') }} </span>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        @foreach($news2 as $n2)
                                        <div class="item-ds-news">
                                            <figure><img src="{{ $n2->new->image }}" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html"></a>{{ $n2->new->title }}</h6>
                                                <span><i class="fa-solid fa-calendar-days"></i>{{ $n2->new->created_at->format('Y-m-d') }} </span>
                                                <p>{{ $n2->new->detail }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section_two_artic mt-sm-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="sec_head">
                                        <h2>{{ $category3->name }}</h2>
                                    </div>
                                    <div class="cont-two-atr">
                                        <div class="item-cont-art">
                                            <figure><img src="{{ @$new3->new->image }}" alt="" /></figure>
                                            <div class="txt--art">
                                                <h4><a href="">  {{ @$new3->new->title }}    </a></h4>
                                                <span> {{ @$new3->created_at->format('Y-m-d') }}  </span>
                                               <p></p>
                                            </div>
                                        </div>
                                        <div class="cont-ds-news">
                                            @foreach($news3 as $n3)
                                            <div class="item-ds-news">
                                                <figure><img src="{{ @$n3->new->image }}" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html"></a>{{ @$n3->new->title }}</h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> {{ $n3->created_at->format('Y-m-d') }}</span>
                                                    <p>{{@$n3->new->detail }}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sec_head">
                                        <h2>{{ $category4->name }}</h2>
                                    </div>
                                    <div class="cont-two-atr">
                                        <div class="item-cont-art">
                                            <figure><img src="{{ $new4->new->image }}" alt="" /></figure>
                                            <div class="txt--art">
                                                <h4><a href="">  {{ $new4->new->title }}    </a></h4>
                                                <span> {{ $new4->new->created_at->format('Y-m-d') }}  </span>
                                               <p></p>
                                            </div>
                                        </div>
                                        <div class="cont-ds-news">
                                            @foreach($news4 as $n4)
                                            <div class="item-ds-news">
                                                <figure><img src="{{ $n4->new->image }}" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html"></a>{{ $n4->new->title }}</h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> {{ @$n4->created_at->format('Y-m-d') }}</span>
                                                    <p>{{ $n4->new->detail }}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <aside class="col-lg-4">
                        <div class="cont-video-aside">
                            <div class="top-video">
                                <div class="item-video">
                                    <figure><img src="{{asset('uploads/images/settings/'.$settings->video_one)}}" alt="" /></figure>
                                    <div class="txt-video">
                                        <p>{{ $video->name_video }}</p>
                                    </div>
                                    <a href="" class="btn-play"><i class="fa-solid fa-circle-play"></i></a>
                                </div>
                            </div>
                           
                            <div class="d-flex">
                                @foreach($videoes as $one)
                                <div class="item-video">
                                    <figure><img src="{{asset('uploads/images/settings/'.$settings->video_two)}}" alt="" /></figure>
                                    <div class="txt-video">
                                        <p>{{ $one->name_video }}</p>
                                        
                                    </div>
                                    <a href="" class="btn-play"><i class="fa-solid fa-circle-play"></i></a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="cont-ad">
                            <a href=""><img src="{{asset('uploads/images/settings/'.$settings->ad)}}" alt="" /></a>
                        </div>
                        <div class="latest-news">
                            <div class="sec_head">
                                <h2>@lang('website.last_news')</h2>
                            </div>
                            <div class="cont-ds-news">
                              @foreach($last_news as $last_new)
                                <div class="item-ds-news">
                                    <figure><img src="{{$last_new->image}}" alt="" /></figure>
                                    <div class="txt-ds-news">
                                        <h6><a href="details.html"></a>{{ $last_new->title }}</h6>
                                        <span><i class="fa-solid fa-calendar-days"></i> {{$new->created_at->format('Y-m-d')}}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="aside-most-read">
                            <div class="sec_head">
                                <h2> @lang('website.most_read')</h2>
                            </div>
                            <div class="cont-ds-news">
                                @foreach($newws as $neww)
                                <div class="item-ds-news">
                                    <figure><img src="{{@$neww->image}}" alt="11" /></figure>
                                    <div class="txt-ds-news">
                                        <h6><a href="{{url(getLocal().'/news/'.@$neww->id.'/details')}}">{{ @$neww->title }}  </a></h6>
                                        <span><i class="fa-solid fa-calendar-days"></i>  {{ @$neww->created_at }}  </span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="latest-opinions">
                            <div class="sec_head">
                                <h2>@lang('website.opinions')</h2>
                            </div>
                            <div class="cont-ds-news">
                                @foreach($last_news as $last)
                                <div class="item-ds-news">
                                    <figure><img src="{{asset('uploads/images/settings/'.$settings->option_user)}}" alt="" /></figure>
                                    <div class="txt-ds-news">
                                        <h6><a href="details.html">{{ $last->title}}</a></h6>
                                        <small>محمد حسن الجاسمي</small>
                                        <span><i class="fa-solid fa-calendar-days"></i>  {{ $last->created_at->format('Y-m-d') }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </main>
        
        <section class="section_infografic">
            <div class="container">
                <div class="sec_head">
                    <h2>@lang('website.Infographic')</h2>
                </div>
                <div class="row-info">
                  @foreach($infographics as $infographic)
                    <div class="item-info">
                        <figure><img src="{{asset('/uploads/images/'.$infographic->image)}}" alt="77" /></figure>
                    </div>
                    @endforeach
                    
                </div>
                <div class="view-more">
                    <a href="">View All</a>
                </div>
            </div>
        </section>

        @include('admin.layouts.footer')
        
        <!--footer-->

    </div>
    <!--main-wrapper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="{{ url('web/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('web/js/all.min.js') }}"></script>
    <script src="{{ url('web/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('web/js/wow.js') }}"></script>
    <script src="{{ url('web/js/jquery.easing.min.js') }}"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="{{ url('web/js/script.js') }}"></script>
    <script>
        new WOW().init();
    </script>


</body>

</html>