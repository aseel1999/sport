@extends('layout.contactLayout')


@section('content')

<section class="section_page_site">
    <div class="container">
        <div class="cont-not-found">
            <div class="thumb-not-found wow fadeInUp">
                <figure><img src="{{asset ('web/image/404.svg') }}" alt="Images 404" /></figure>
            </div>
            <div class="txt-not-found wow fadeInUp">
                <h5>@lang('website.Oops! That Page can’t be found.') </h5>
                <p>@lang('website.it seems we can’t find what you’re looking for. Perhaps searching can help.')</p>
                
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

