@extends('layout.contactLayout')
@section('content')
        
        <section class="section_infografic">
            <div class="container">
                <div class="hd-page-art">
                    <h2>@lang('website.Infographic')</h2>
                </div>
                
                <div class="row-info">
                    @foreach($infographics as $infographic)
                    <div class="item-info">
                        <figure><img src="{{asset( @$infographic->image) }}" alt="" /></figure>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </section>
@endsection
        
        
    <!--main-wrapper-->
    
