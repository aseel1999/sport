<footer id="footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cont-ft wow fadeInUp">
                        <h5>@lang('website.about_us')</h5>
                        <p>{{ $setting->about }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="menu-ft">
                        <h5>@lang('website.FastUrls')</h5>
                        <ul class="li-ft wow fadeInUp">
                            <li><a href="index.html">@lang('website.basic')</a></li>
                            <li><a href="privacy.html">@lang('website.privacy_policy')</a></li>
                            <li><a href="about.html">@lang('website.about_us')</a></li>
                            <li><a href="contact.html"> @lang('website.contact_us')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="menu-ft">
                        <h5> @lang('website.contact_us')</h5>
                        <ul class="list-contact wow fadeInUp">
                            <li><a href="tel:+965 99887766"> {{ $settings->mobile }}</a></li>
                            <li><a href="mailto:info@almaseelah.com"> {{ $settings->info_email }}</a></li>
                        </ul>
                        <ul class="list-social">
                            <li><a href=""><i class="fa-brands fa-tiktok"></i></a></li>
                            <li><a href=""><i class="fa-solid fa-paper-plane"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-ft">
        <div class="container">
            <div class="cont-bt">
                <p>@lang('website.powered_by')<a href="https://hexacit.com/">  {{ 'Hexa' }}</a></p>
                <p class="copyRight wow fadeInUp">@lang('website.copyright') {{date('Y')}}</p
            </div>

        </div>
    </div>
</footer>