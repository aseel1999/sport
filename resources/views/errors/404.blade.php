@extends('layout.siteLayout')
@section('css')

@endsection

@section('content')

    <section class="section_page_site">
        <div class="container">
            <div class="cont-not-found">
                <div class="thumb-not-found wow fadeInUp">
                    <figure><img src="{{url('website/images/404.svg')}}" alt="Images 404" /></figure>
                </div>
                <div class="txt-not-found wow fadeInUp">
                    <h5>@lang('website.page_not_found')</h5>
                    <a id="backLink"  class="btn-site-other"><span>@lang('website.go_back')</span></a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
<script>
    $("#backLink").click(function(event) {
        event.preventDefault();
        history.back(1);
    });
</script>
@endsection

