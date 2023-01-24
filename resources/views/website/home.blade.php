<!DOCTYPE html>
<html lang="ar" dir="rtl">

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
                                        <figure><img src="{{asset($new->image)}}" alt="" /></figure>
                                        <div class="txt-big-news">
                                            <h4><a href="details.html"> {{ $new->title }} </a></h4>
                                            <p>{{ $new->detail }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--section_home-->
                        @foreach($new_categories as $one)
                        <section class="section_sweeteners">
                            <div class="sec_head">
                                <h2>{{ $one->category->name }}</h2>
                            </div>
                            <div class="row">
                              
                                
                                <div class="col-lg-6">
                                    <div class="cont-ds-news">
                                        <div class="item-ds-news">
                                            <figure><img src="{{ $one->new->image }}" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">{{ $one->new->title }}   </a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> {{ $new->detail }}  </span>
                                                <p>{{ $one->new->detail }}.</p>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </section>
                        <!--section_sweeteners-->
                        @endforeach
                    </div>
                    <aside class="col-lg-4">
                        <div class="cont-video-aside">
                            <div class="top-video">
                                <div class="item-video">
                                    <figure><img src="{{ asset('/uploads/images/d.png')}}" alt="" /></figure>
                                    <div class="txt-video">
                                        <p>{{ $video->name_video }}</p>
                                    </div>
                                    <a href="" class="btn-play"><i class="fa-solid fa-circle-play"></i></a>
                                </div>
                            </div>
                           
                            <div class="d-flex">
                                @foreach($videoes as $one)
                                <div class="item-video">
                                    <figure><img src="{{ asset('web/image/v1.png') }}" alt="" /></figure>
                                    <div class="txt-video">
                                        <p>{{ $one->name_video }}</p>
                                        
                                    </div>
                                    <a href="" class="btn-play"><i class="fa-solid fa-circle-play"></i></a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="cont-ad">
                            <a href=""><img src="{{ ('web/image/ad.png')}}" alt="" /></a>
                        </div>
                        <div class="latest-news">
                            <div class="sec_head">
                                <h2>@lang('cp.lastNews')</h2>
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
                                <h2> {{ _('cp.MostRead') }}</h2>
                            </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="today-tab" data-bs-toggle="tab" data-bs-target="#today-tab-pane" type="button" role="tab" aria-controls="today-tab-pane" aria-selected="true">يومي</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="week-tab" data-bs-toggle="tab" data-bs-target="#week-tab-pane" type="button" role="tab" aria-controls="week-tab-pane" aria-selected="false">إسبوعي</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="today-tab-pane" role="tabpanel" aria-labelledby="today-tab" tabindex="0">
                                    <div class="cont-ds-news">
                                        <div class="item-ds-news">
                                            <figure><img src="images/n1.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="week-tab-pane" role="tabpanel" aria-labelledby="week-tab" tabindex="0">
                                    <div class="cont-ds-news">
                                        <div class="item-ds-news">
                                            <figure><img src="images/n1.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="latest-opinions">
                            <div class="sec_head">
                                <h2>آراء</h2>
                            </div>
                            <div class="cont-ds-news">
                                <div class="item-ds-news">
                                    <figure><img src="images/op.png" alt="" /></figure>
                                    <div class="txt-ds-news">
                                        <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                        <small>محمد حسن الجاسمي</small>
                                        <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                    </div>
                                </div>
                                <div class="item-ds-news">
                                    <figure><img src="images/op.png" alt="" /></figure>
                                    <div class="txt-ds-news">
                                        <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                        <small>محمد حسن الجاسمي</small>
                                        <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                    </div>
                                </div>
                                <div class="item-ds-news">
                                    <figure><img src="images/op.png" alt="" /></figure>
                                    <div class="txt-ds-news">
                                        <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                        <small>محمد حسن الجاسمي</small>
                                        <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                    </div>
                                </div>
                                <div class="item-ds-news">
                                    <figure><img src="images/op.png" alt="" /></figure>
                                    <div class="txt-ds-news">
                                        <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                        <small>محمد حسن الجاسمي</small>
                                        <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </main>
        
        <section class="section_infografic">
            <div class="container">
                <div class="sec_head">
                    <h2>{{ _('cp.Infographic') }}</h2>
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
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web/js/all.min.js') }}"></script>
    <script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('web/js/wow.js') }}"></script>
    <script src="{{ asset('web/js/jquery.easing.min.js') }}"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="{{ asset('web/js/script.js') }}"></script>
    <script>
        new WOW().init();
    </script>


</body>

</html>