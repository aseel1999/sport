<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{(app()->getLocale() == 'ar') ? 'rtl' : 'ltr'}}">
    @include('admin.layouts.head')
<body>
@php
           $newws =App\Models\Article::where('views','>=','5')->take(4)->get();
        $last_news=App\Models\Article::orderBy('id', 'desc')->take(5)->get();
        $video =App\Models\Video::orderBy('id', 'asc')->take(1)->first();
        $videoes=App\Models\Video::orderBy('id', 'desc')->take(2)->get();
        $opinions=App\Models\Opinion::orderBy('id','desc')->take(4)->get();
@endphp
<div class="main-wrapper">
    @include('admin.layouts.header')
    
    <!--header-->
    @php
           
        $video =App\Models\Video::orderBy('id', 'asc')->take(1)->first();
        $videoes=App\Models\Video::orderBy('id', 'desc')->take(2)->get();
        
@endphp
    <main>
        <div class="container">
            <div class="row">
            @yield('content')
            </div>
        </div>
    
   </main>
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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
        new WOW().init();

        Fancybox.bind("[data-fancybox-plyr]", {
  on: {
    reveal: (fancybox, slide) => {
      if (typeof Plyr === undefined) {
        return;
      }

      let $el;

      if (slide.type === "html5video") {
        $el = slide.$content.querySelector("video");
      } else if (slide.type === "video") {
        $el = document.createElement("div");
        $el.classList.add("plyr__video-embed");

        $el.appendChild(slide.$iframe);

        slide.$content.appendChild($el);
      }

      if ($el) {
        slide.player = new Plyr($el);
      }
    },
    "Carousel.unselectSlide": (fancybox, carousel, slide) => {
      if (slide.player) {
        slide.player.pause();
      }
    },
    "Carousel.selectSlide": (fancybox, carousel, slide) => {
      if (slide.player) {
        slide.player.play();
      }
    },
  },
});

    </script>
@yield('js')
@yield('script')

</body>
</html>
