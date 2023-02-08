@extends('layout.contactLayout')
@section('content')
        <main class="pt-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="content-inner">
                            <div class="head-page">
                                <h2> @lang('website.contact_us')</h2>
                            </div>
                            <div class="sec-contact">
                                <form action="{{ route('contactUs') }}" method="post" role="form" class="form-contact" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>@lang('website.Name*')</label>
                                        <input type="text" class="form-control" name="name" placeholder="@lang('website.Name*')" />
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('website.Email Address*')</label>
                                        <input type="email" class="form-control" name="email" placeholder="@lang('website.Email Address*')" />
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('website.Phone Number*')</label>
                                        <input type="number" class="form-control"name="phone" placeholder="@lang('website.Phone Number*')" />
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('website.Title')</label>
                                        <input type="text" class="form-control"name="title" placeholder="@lang('website.Title')" />
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('website.Message')</label>
                                        <textarea class="form-control" name="message" placeholder="@lang('website.Message')"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn-site"><span>Submit</span></button>
                                    </div>
                                </form>
                                <div class="list-contact">
                                    <div class="item-contact">
                                        <figure><i class="fa-solid fa-phone"></i></figure>
                                        <p>@lang('website.Phone')</p>
                                        <strong>{{ $setting->mobile }}</strong>
                                    </div>
                                    <div class="item-contact">
                                        <figure><i class="fa-solid fa-envelope"></i></figure>
                                        <p>@lang('website.Email Address*')</p>
                                        <strong>{{ $setting->info_email }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside class="col-lg-4">
                        <div class="cont-ad">
                            <a href=""><img src={{$setting->ad  }} alt="" /></a>
                        </div>
                    </aside>
                </div>
            </div>
        </main>
        @endsection
       
        


</body>

</html>