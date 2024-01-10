<style>
::-webkit-scrollbar {
    width: 5px !important;
height: 8px;
}
 
::-webkit-scrollbar-track {
    background-color: #ffffff !important;
    -webkit-border-radius: 5px !important;
        height: 8px;
    border-radius: 5px !important !important;
}

::-webkit-scrollbar-thumb {
        height: 8px;
    -webkit-border-radius: 5px !important;
    border-radius: 5px !important;
    background: #00652e !important;
}
</style>




<!-- Main content Start -->
<div class="main-content">
  <!-- Slider Start -->
    <div id="rs-slider" class="rs-slider slider1">
        <div class="bend niceties">
            <div id="nivoSlider" class="slides">
                @foreach($slider as $data)
                    <img src="{{ asset('slider/'.$data->image) }}" alt="" title="#slide-{{$loop->iteration}}" />
                @endforeach

                
            </div>
            @foreach($slider as $data)
            <div id="slide-{{$loop->iteration}}" class="slider-direction">
                <div class="container">
                    @if($data->title == '0' && strip_tags($data->sub_title) == '0' && $data->button_link == '0')
                    <span></span>
                    @else
                    <div class="content-part">
                        <div class="slider-des">
                            @if($data->title != '0') <h1 class="sl-title site_color_2">{{ $data->title }}</h1> @endif
                            @if(strip_tags($data->sub_title) != '0') <div class="sl-desc site_color_1">{!! $data->sub_title !!}</div>@endif
                        </div>
                         @if($data->button_link != '0') 
                        <div class="slider-bottom">
                            <ul>
                                <li><a href="{{ $data->button_link }}" class="readon banner-style site_color_1">{{ $data->button_text }}</a></li>
                            </ul>
                        </div>
                        @endif
                    </div>
                    @endif
                  
                  
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    <!-- Slider End -->





    <!-- Partner Section Start -->
    
    @php
        $Headline_active = DB::table('website_design')->where('title', 'LIKE', "%Headline%")->first();
        $website_text = DB::table('website_text')->where('status', 1)->get();
    @endphp
    @if($Headline_active->status == 1)
    <div class="rs-partner modify deskto_heading" id="slider_box">
        <div class="container animated_headline_container" >
            <div class="animated_headline" data-aos="zoom-in">
            <div class="partner-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full_live">
                            <div class="headline_title">Headline</div>
                            <div class="full_headline"> 
                                
                                <div class="type-wrap"><!-- add static words/sentences here (i.e. text that you don't want to be removed)-->
                                  <span id="typed" style="white-space:pre;" class="typed"></span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            </div>
        </div>
    </div>
@php
    $headlines = DB::table('vmsl_headline')->where('status', 1)->get();
    $about_ceo='S M Anisuzzaman has joined as the Chief Executive Officer of Bangladesh Infrastructure Finance Fund Limited, one of the biggest Non Bank Financial Institutions in Bangladesh owned by the Government of Bangladesh and represented by Finance Division of Ministry of Finance. Prior to this appointment, he was the Deputy Managing Director of National Housing Finance and Investments Limited.';
@endphp
    
    <div class="rs-partner modify moblie_heading" id="slider_box">
        <div class="container animated_headline_container" >
            <div class="animated_headline" data-aos="zoom-in">
            <div class="partner-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full_live">
                            <div class="headline_title">Headline</div>
                            <div class="full_headline">
                                <div class="type-wrap">
                                    
                                    @foreach($headlines as $headline) 
                                        <a class="single_typing_item single_typing_item{{$loop->iteration}} @if($loop->iteration == 1)nowShow @endif" data-id="{{$loop->iteration}}" href='{{$headline->title}}' target='__blank'>
                                            <div class="mobile_typing">{{ $headline->description}}</div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            </div>
        </div>
    </div>
    
    @endif
    
    
    <!-- Partner Section End -->
    <!-- Slider End -->

    



    <!-- about us Start -->
    @php
        $is_active = DB::table('website_design')->where('title', 'LIKE', "%about_biffl%")->first();
    @endphp
    @if($is_active->status == 1)
    <section id="about_section">
        <div class="container pb-80 pt-5">
            <div class="title_heading">
                <h3>About BIFFL</h3>
            </div>
            
            <div class="row pb-3">
                <div class="col-md-12">
                    <b>Bangladesh Infrastructure Finance Fund Limited (BIFFL) is a Government-owned Non-Banking Financial Institution, operating since 2011. It is established by a resolution of the Cabinet of the Government of Bangladesh and owned by the Ministry of Finance, GOB</b>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"  style="text-align:justify">
                    <p> Bangladesh Infrastructure Finance Fund Limited (BIFFL) is the biggest Non-Banking Financial Institution in Bangladesh owned by Government having authorized capital and paid up capital of BDT 100 billion and BDT 23.08 billion respectively. Addressing the importance of infrastructure development vis-à-vis insufficient investment in that particular sector, with a view to promote an attractive environment for sustainable private investment.
                    </p>
                </div>
                 <div class="col-md-6" style="text-align:justify">
                     <p>
                     As a part of this, BIFFL was established in 2011 as a special purpose vehicle to mobilize the PPP budget through financing infrastructure projects building partnership with private sector investors.
Apart from that, to uphold sustainable development, BIFFL is also committed to protect environment and adopt eco-friendly measures in all aspects which are of its foremost priority while considering any investment transaction.
                    </p>
                </div>
            </div>
            
            
        </div>
    </section>
    @endif
    <!--  about us End -->




    <!--10 service Start -->
    
    @php
        $is_active = DB::table('website_design')->where('title', 'LIKE', "%Service 10 items%")->first();
    @endphp
    @if($is_active->status == 1)
    <section id="our_service_circle" class="our_service_circle_desktop">
        <div class="container">
            <div class="service_heading title_heading">
                @foreach($website_text as $data) @if(stripos($data->slug, 'our-services-title') !== FALSE) <h2 class="title mb-30">{{ $data->description }}</h2> @endif @endforeach
            </div>
        
            @php
                $loans = DB::table('vmsl_services')->where('status', 1)->get();
            @endphp
        
            <div class="row">
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center">
                    @if($loans[0])
                    
                    <a @if($loans[0]->add_info1 != '#') href="{{ route('service.signle.page', $loans[0]->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loans[0]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box float-right service_box_mt5">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[0]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[0]->title}}</div>
                            <div class="single_service_description"> @if($loans[0]->add_info1 && $loans[0]->add_info1 != '#')  {{ \Illuminate\Support\Str::limit($loans[0]->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                    
                    @endif
                    
                    @if($loans[1])
                    <a @if($loans[1]->add_info1 != '#') href="{{ route('service.signle.page', $loans[1]->add_info1) }}" @endif  style="color:#000;" title="Go to: {{ $loans[1]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box float-right service_box_mr5">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[1]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[1]->title}}</div>
                            <div class="single_service_description">@if($loans[1]->add_info1 && $loans[1]->add_info1 != '#') {{ \Illuminate\Support\Str::limit($loans[1]->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif
                    
                    @if($loans[2])
                    <a @if($loans[2]->add_info1 != '#') href="{{ route('service.signle.page', $loans[2]->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loans[2]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box float-right service_box_mr4">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[2]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[2]->title}}</div>
                            <div class="single_service_description">@if($loans[2]->add_info1 && $loans[2]->add_info1 != '#') {{ \Illuminate\Support\Str::limit($loans[2]->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif
                    @if($loans[3])
                    <a @if($loans[3]->add_info1 != '#') href="{{ route('service.signle.page', $loans[3]->add_info1) }}" @endif  style="color:#000;" title="Go to: {{ $loans[3]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box float-right">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[3]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[3]->title}}</div>
                            <div class="single_service_description"> @if($loans[3]->add_info1 && $loans[3]->add_info1 != '#') {{ \Illuminate\Support\Str::limit($loans[3]->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-3 text-center">
                    @if($loans[4])
                    <a @if($loans[4]->add_info1 != '#')  href="{{ route('service.signle.page', $loans[4]->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loans[4]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box float-right">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[4]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[4]->title}}</div>
                            <div class="single_service_description">@if($loans[4]->add_info1 && $loans[4]->add_info1 != '#') {{ \Illuminate\Support\Str::limit($loans[4]->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif
                    <div class="service_circle_big_image mb-5">
                        <!--<img src="{{ asset('frontend') }}/images/services/Mega-projects.jpg" alt="" width="100%">-->
                        @foreach($website_text as $data) @if(stripos($data->slug, 'circle-mage') !== FALSE) <img class="updated_circle_image" src="/uploads/images/team/{{$data->add_info1}}" alt="" width="100%"> @endif @endforeach
                    </div>
                    
                    @if($loans[5])
                    <a @if($loans[5]->add_info1 != '#')  href="{{ route('service.signle.page', $loans[5]->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loans[5]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box service_box_mt5 service_box_mt6">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[5]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[5]->title}}</div>
                            <div class="single_service_description"> @if($loans[5]->add_info1 && $loans[5]->add_info1 != '#') {{ \Illuminate\Support\Str::limit($loans[5]->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif

                </div>
                <div class="col-12 col-sm-4 col-md-5 col-lg-5 text-center">
                    

                    @if($loans[6])
                    <a @if($loans[6]->add_info1 != '#')  href="{{ route('service.signle.page', $loans[6]->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loans[6]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box service_box_ml5">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[6]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[6]->title}}</div>
                            <div class="single_service_description">@if($loans[6]->add_info1 && $loans[6]->add_info1 != '#') {{ \Illuminate\Support\Str::limit($loans[6]->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif
                    @if($loans[7])
                    <a @if($loans[7]->add_info1 != '#')  href="{{ route('service.signle.page', $loans[7]->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loans[7]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box service_box_ml4">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[7]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[7]->title}}</div>
                            <div class="single_service_description">@if($loans[7]->add_info1 && $loans[7]->add_info1 != '#') {{ \Illuminate\Support\Str::limit($loans[7]->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif
                    @if($loans[8])
                    <a @if($loans[8]->add_info1 != '#')  href="{{ route('service.signle.page', $loans[8]->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loans[8]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box service_box_mt5 service_box_mt9">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[8]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[8]->title}}</div>
                            <div class="single_service_description">@if($loans[8]->add_info1 && $loans[8]->add_info1 != '#') {{ \Illuminate\Support\Str::limit($loans[8]->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif
                    @if($loans[9])
                    <a @if($loans[9]->add_info1 != '#')  href="{{ route('service.signle.page', $loans[9]->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loans[9]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box service_box_mt5">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[9]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[9]->title}}</div>
                            <div class="single_service_description">@if($loans[9]->add_info1 && $loans[9]->add_info1 != '#')  {{ \Illuminate\Support\Str::limit($loans[9]->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif
                    
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--10 service End -->
    
    
    
    
    
    
    
    <!--6 service Start -->
    @php
        $is_active = DB::table('website_design')->where('title', 'LIKE', "%Service 6 items%")->first();
    @endphp
    @if($is_active->status == 1)
    <section id="our_service_circle" class="our_service_circle_desktop">
        <div class="container">
            <div class="service_heading title_heading">
                @foreach($website_text as $data) @if(stripos($data->slug, 'our-services-title') !== FALSE) <h2 class="title mb-30">{{ $data->description }}</h2> @endif @endforeach
            </div>
        
            @php
                $loans = DB::table('vmsl_services')->where('status', 1)->get();
            @endphp
        
            <div class="row">
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center">
                    @if($loans[0])
                    <a @if($loans[0]->add_info1 != '#')  href="{{ route('service.signle.page', $loans[0]->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loans[0]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box float-right six_set_1">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[0]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[0]->title}}</div>
                            <div class="single_service_description">@if($loans[0]->add_info1 && $loans[0]->add_info1 != '#')  {{ \Illuminate\Support\Str::limit($loans[0]->short_description, 50, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif
                    
                    @if($loans[1])
                    <a @if($loans[1]->add_info1 != '#')  href="{{ route('service.signle.page', $loans[1]->add_info1) }}" @endif  style="color:#000;" title="Go to: {{ $loans[1]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box float-right six_set_2">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[1]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[1]->title}}</div>
                            <div class="single_service_description">@if($loans[1]->add_info1 && $loans[1]->add_info1 != '#')  {{ \Illuminate\Support\Str::limit($loans[1]->short_description, 50, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif

                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-3 text-center">
                    @if($loans[2])
                    <a @if($loans[2]->add_info1 != '#')  href="{{ route('service.signle.page', $loans[2]->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loans[2]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box float-right six_set_3">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[2]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[2]->title}}</div>
                            <div class="single_service_description">@if($loans[2]->add_info1 && $loans[2]->add_info1 != '#')  {{ \Illuminate\Support\Str::limit($loans[2]->short_description, 50, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif
                    <div class="service_circle_big_image">
                        <!--<img src="{{ asset('frontend') }}/images/services/Mega-projects.jpg" alt="" width="100%">-->
                        @foreach($website_text as $data) @if(stripos($data->slug, 'circle-mage') !== FALSE) <img class="updated_circle_image" src="/uploads/images/team/{{$data->add_info1}}" alt="" width="100%"> @endif @endforeach
                    </div>
                    
                    @if($loans[3])
                    <a @if($loans[3]->add_info1 != '#')  href="{{ route('service.signle.page', $loans[3]->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loans[3]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box six_set_4">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[3]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[3]->title}}</div>
                            <div class="single_service_description">@if($loans[3]->add_info1 && $loans[3]->add_info1 != '#')  {{ \Illuminate\Support\Str::limit($loans[3]->short_description, 50, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif

                </div>
                <div class="col-12 col-sm-4 col-md-5 col-lg-5 text-center">
                    @if($loans[4])
                    <a @if($loans[4]->add_info1 != '#')  href="{{ route('service.signle.page', $loans[4]->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loans[4]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box six_set_5">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[4]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[4]->title}}</div>
                            <div class="single_service_description">@if($loans[4]->add_info1 && $loans[4]->add_info1 != '#')  {{ \Illuminate\Support\Str::limit($loans[4]->short_description, 50, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif
                    
                    @if($loans[5])
                    <a @if($loans[5]->add_info1 != '#')  href="{{ route('service.signle.page', $loans[5]->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loans[5]->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box six_set_6">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loans[5]->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loans[5]->title}}</div>
                            <div class="single_service_description">@if($loans[5]->add_info1 && $loans[5]->add_info1 != '#') {{ \Illuminate\Support\Str::limit($loans[5]->short_description, 50, $end='..')}} @endif </div>
                        </div>
                    </a>
                    @endif
                    
       

                    
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--6 service End -->

    
    
    
    <!--Mobile 10 itmes service Start -->
    @php
        $is_active = DB::table('website_design')->where('title', 'LIKE', "%Service 10 items%")->first();
    @endphp
    @if($is_active->status == 1)


    <section id="our_service_circle" class="our_service_circle_mobile">
        @php
            $allloans = DB::table('vmsl_services')->where('status', 1)->get();
        @endphp
        
        <div class="container">
            <div class="row">
                @foreach($allloans as $loan)
                @if($loop->iteration < 6)
                <div class="col-12 col-sm-6 col-sm-6 text-center">
                    <a @if($loan->add_info1 != '#')  href="{{ route('service.signle.page', $loan->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loan->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loan->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loan->title}}</div>
                            <div class="single_service_description">@if($loan->add_info1 && $loan->add_info1 != '#')  {{ \Illuminate\Support\Str::limit($loan->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="service_circle_big_image text-center mb-5">
                        <!--<img src="{{ asset('frontend') }}/images/services/Mega-projects.jpg" alt="" width="50%">-->
                        @foreach($website_text as $data) @if(stripos($data->slug, 'circle-mage') !== FALSE) <img class="updated_circle_image" src="/uploads/images/team/{{$data->add_info1}}" alt="" width="100%"> @endif @endforeach
                    </div>
                </div>
            </div>
            
            <div class="row">
                @foreach($allloans as $loan)
                @if($loop->iteration > 5)
                <div class="col-12 col-sm-6 col-sm-6 text-center">
                    <a @if($loan->add_info1 != '#')  href="{{ route('service.signle.page', $loan->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loan->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loan->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loan->title}}</div>
                            <div class="single_service_description">@if($loan->add_info1 && $loan->add_info1 != '#')   {{ \Illuminate\Support\Str::limit($loan->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
            
        </div>
    </section>
    @endif
    <!--Mobile 10 itmes service End -->
    
    <!--Mobile 6 itmes service Start -->
    @php
        $is_active = DB::table('website_design')->where('title', 'LIKE', "%Service 6 items%")->first();
    @endphp
    @if($is_active->status == 1)


    <section id="our_service_circle" class="our_service_circle_mobile">
        @php
            $allloans = DB::table('vmsl_services')->where('status', 1)->get();
        @endphp
        
        <div class="container">
            <div class="row">
                @foreach($allloans as $loan)
                @if($loop->iteration < 4)
                <div class="col-12 col-sm-6 col-sm-6 text-center">
                    <a @if($loan->add_info1 != '#')  href="{{ route('service.signle.page', $loan->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loan->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loan->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loan->title}}</div>
                            <div class="single_service_description">@if($loan->add_info1 && $loan->add_info1 != '#')  {{ \Illuminate\Support\Str::limit($loan->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="service_circle_big_image text-center mb-5">
                        <!--<img src="{{ asset('frontend') }}/images/services/Mega-projects.jpg" alt="" width="50%">-->
                        @foreach($website_text as $data) @if(stripos($data->slug, 'circle-mage') !== FALSE) <img class="updated_circle_image" src="/uploads/images/team/{{$data->add_info1}}" alt="" width="100%"> @endif @endforeach
                    </div>
                </div>
            </div>
            
            <div class="row">
                @foreach($allloans as $loan)
                @if($loop->iteration > 3 && $loop->iteration < 7 )
                <div class="col-12 col-sm-6 col-sm-6 text-center">
                    <a @if($loan->add_info1 != '#')  href="{{ route('service.signle.page', $loan->add_info1) }}" @endif style="color:#000;" title="Go to: {{ $loan->title }}"> 
                        <div data-aos="zoom-in" class="single_service_box">
                            <div class="single_service_icon"> <img src="{{ asset('/uploads/images/services') }}/{{ $loan->image}}" alt="img"> </div>
                            <div class="single_service_title">{{ $loan->title}}</div>
                            <div class="single_service_description">@if($loan->add_info1 && $loan->add_info1 != '#')   {{ \Illuminate\Support\Str::limit($loan->short_description, 25, $end='..')}} @endif </div>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
            
        </div>
    </section>
    @endif
    <!--Mobile 6 itmes service End -->


    
    
    
    
    
    
    
    
    
    
    
    <!-- Counter Section Start -->
    @php
        $is_active = DB::table('website_design')->where('title', 'counter')->first();
        $background = DB::table('website_text')->where('slug', 'LIKE', "%counter-background-image%")->where('status', 1)->first();
    @endphp
    @if($is_active->status == 1)
    
    @php
        $couter_options = DB::table('couter_option')->where('add_info1', 1)->orderBy('serial_number')->get();
    @endphp
    
    <div class="rs-counter style1 shape-bg1" style="background-image: url('{{ asset('/uploads/images/team')}}/{{$background->add_info1}}')">
        <div class="coutner_overlay  pt-10 md-pt-82 pb-97 pt-97 mb-5 mt-5">
        <div class="container">
            <div class="row">
                
                @foreach($couter_options as $data)
                <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                    <div class="couter-part plus">
                        <div class="rs-count">{{ $data->number }}</div>
                        <h5 class="title">{{ $data->title }}</h5>
                    </div>
                </div>
                @endforeach

                
            </div>
        </div>
        </div>
    </div>
    @endif
    <!-- Counter Section End -->



    @php
  
        //$about_ceo = DB::table('website_text')->where('slug', 'LIKE', "%about-ceo%")->where('status', 1)->first();
        //$about_chairman = DB::table('website_text')->where('slug', 'LIKE', "%about-chairman%")->where('status', 1)->first();
        
    @endphp


    <!-- About Section Start -->
    
    @foreach($website_text as $data) @if(stripos($data->slug, 'about-chairman') !== FALSE || stripos($data->slug, 'about-ceo') !== FALSE)
    
    <div id="chairman_ceo_section">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-md-12 pt-100 pb-5 about_ceo">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 about-content desktop_ceo">
                             @foreach($website_text as $data) @if(stripos($data->slug, 'about-chairman') !== FALSE) <h4 class="title mb-20 desktop_ceo">{{ $data->title }}</h4> @endif @endforeach
							<div class="longtextreadmore">
                              <span class="inject_without_text">@foreach($website_text as $data)@if(stripos($data->slug, 'about-chairman')!== FALSE) @php $all_text = \Illuminate\Support\Str::length($data->description); @endphp {{  \Illuminate\Support\Str::substr($data->description,0,1500)}}  @endif @endforeach</span>
                              <span class="full_text">@foreach($website_text as $data) @if(stripos($data->slug, 'about-chairman') !== FALSE) {{ $data->description }} @endif @endforeach</span>
							</div>
				            @if($all_text > 1500)
							<div class="custom_btn mt-2 readon readon2">Read More</div>
							@endif
                        </div>
                        
                        @foreach($website_text as $data) @if(stripos($data->slug, 'about-chairman') !== FALSE) <h4 class="title mb-20 mobile_ceo ml-3 mt-5">{{ $data->title }}</h4> @endif @endforeach
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 about_ceo_image">
                            <div data-aos="zoom-in">
                                @foreach($website_text as $data) @if(stripos($data->slug, 'about-chairman') !== FALSE) <img src="{{ asset('uploads') }}/images/team/{{$data->add_info1}}" alt=""> @endif @endforeach
                            </div>
                            @foreach($website_text as $data) @if(stripos($data->slug, 'about-chairman') !== FALSE) <b>{{$data->short_description}}</b> @endif @endforeach
                            @foreach($website_text as $data) @if(stripos($data->slug, 'about-chairman') !== FALSE)  <p>{{$data->add_info2}}</p> @endif @endforeach
                        </div>
                        
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 about-content mobile_ceo">
                             @foreach($website_text as $data) @if(stripos($data->slug, 'about-chairman')!== FALSE) <h4 class="title mb-20 desktop_ceo">{{$data->title}}</h4> @endif @endforeach
							<div class="longtextreadmore">
                             <span class="inject_without_text"> @foreach($website_text as $data) @if(stripos($data->slug, 'about-chairman')!== FALSE){{\Illuminate\Support\Str::substr($data->description,0,400)}} @endif @endforeach</span>
                             <span class="full_text">@foreach($website_text as $data) @if(stripos($data->slug, 'about-chairman') !== FALSE) {{ $data->description }} @endif @endforeach</span>
							 
							</div>
				            <div class="custom_btn mt-2 readon readon2">Read More</div>
                        </div>
                        
                        
                    </div>
                </div>
                
                
                
                
                
                <div class="col-lg-12 col-md-12 pb-5 about_ceo">
                    <div class="row">
                        
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 about_ceo_image desktop_ceo">
                            <div data-aos="zoom-in">
                                @foreach($website_text as $data) @if(stripos($data->slug, 'about-ceo') !== FALSE) <img src="{{ asset('uploads') }}/images/team/{{$data->add_info1}}" alt=""> @endif @endforeach
                                
                            </div>
                            @foreach($website_text as $data) @if(stripos($data->slug, 'about-ceo') !== FALSE) <b>{{$data->short_description}}</b> @endif @endforeach
                            @foreach($website_text as $data) @if(stripos($data->slug, 'about-ceo') !== FALSE)  <p>{{$data->add_info2}}</p> @endif @endforeach
                        </div>
                        
                        
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 about-content">
                            
                            @foreach($website_text as $data) @if(stripos($data->slug, 'about-ceo') !== FALSE) <h4 class="title mb-20">{{ $data->title }}</h4> @endif @endforeach
                            
                            
                            <span class="desktop_ceo">
    							<div class="longtextreadmore">
                                   <span class="inject_without_text">@foreach($website_text as $data) @if(stripos($data->slug, 'about-ceo') !== FALSE) @php $all_text = \Illuminate\Support\Str::length($data->description); @endphp {{ \Illuminate\Support\Str::substr($data->description,0,1500) }} @endif @endforeach</span>
                                   <span class="full_text">@foreach($website_text as $data) @if(stripos($data->slug, 'about-ceo') !== FALSE) {{ $data->description }} @endif @endforeach</span>
                                   <span class="inject_text"></span>
    							</div>
    							@if($all_text > 1500)
    						    <div class="custom_btn mt-2 readon readon2">Read More</div>
    						    @endif
                            </span>
                            
                            
                         
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 about_ceo_image mobile_ceo">
                                <div data-aos="zoom-in">
                                     @foreach($website_text as $data) @if(stripos($data->slug, 'about-ceo') !== FALSE) <img src="{{ asset('uploads') }}/images/team/{{$data->add_info1}}" alt=""> @endif @endforeach
                                </div>
                            </div>
							<div class="longtextreadmore mobile_ceo">
                               <span class="inject_without_text">@foreach($website_text as $data) @if(stripos($data->slug, 'about-ceo') !== FALSE) {{ \Illuminate\Support\Str::substr($data->description,0,400) }} @endif @endforeach</span>
                               <span class="full_text">@foreach($website_text as $data) @if(stripos($data->slug, 'about-ceo') !== FALSE) {{ $data->description }} @endif @endforeach</span>
                               <span class="inject_text"></span>
							</div>
						    <div class="mobile_ceo custom_btn mt-2 readon readon2">Read More</div>
					
						    
						   
                        </div>
                    </div>
                </div>
                
                

                
                
            </div>
        </div>
    </div>
    @endif @endforeach
    <!-- About Section End -->


    
    
    
    
    
    <!-- Achievement Section Start -->
    
    @php
        $is_active = DB::table('website_design')->where('title', 'achievement')->first();
        
    @endphp
    @if($is_active->status == 1)
    <div class="rs-team slider1 pt-100 pb-5 achivement_nav" data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            <div class="sec-title text-center mb-20 md-mb-42">
                @foreach($website_text as $data) @if(stripos($data->slug, 'our-achievement') !== FALSE) <h2 class="title mb-30">{{ $data->description }}</h2> @endif @endforeach
            </div>
            <div class="rs-carousel owl-carousel dot-style1" 
            data-loop="true" 
            data-items="4" 
            data-margin="30" 
            data-autoplay="true" 
            data-hoverpause="true" 
            data-autoplay-timeout="5000" 
            data-smart-speed="800" 
            data-dots="true" 
            data-nav="false" 
            data-nav-speed="false" 
            data-center-mode="false" 
            data-mobile-device="1" 
            data-mobile-device-nav="true" 
            data-mobile-device-dots="false" 
            data-ipad-device="2" 
            data-ipad-device-nav="true" 
            data-ipad-device-dots="false" 
            data-ipad-device2="2" 
            data-ipad-device-nav2="false" 
            data-ipad-device-dots2="false" 
            data-md-device="3" 
            data-lg-device="4" 
            data-md-device-nav="true" 
            data-md-device-dots="true">
          

                @foreach($achievements as $data)
                <div class="team-wrap home_achievement">
                    <div class="team-image">
                        <img src="{{ asset('uploads/images/achievement/'.$data->thumbnail) }}" alt="achievement">
                    </div>
                    
                    <div class="achievement_details getsingleAchievement" data-getsingleAchievement="{{$data->id}}">
                        Details
                    </div>
                </div>
                @endforeach

              
            </div>
        </div>
    </div>
    @endif
    <!-- Achievement Section End -->
    




    <!-- partner Start -->
    <div class="rs-team slider1 pt-100 pb-5 partner_section">
        <div class="container">
            <div class="sec-title text-center mb-20 md-mb-42">
                @foreach($website_text as $data) @if(stripos($data->slug, 'our-partner-title') !== FALSE) <h2 class="title mb-30">{{ $data->description }}</h2> @endif @endforeach
            </div>
            <div id="partner_carousel"  class="rs-carousel owl-carousel dot-style1" 
            data-loop="true" 
            data-items="4" 
            data-margin="30" 
            data-autoplay="true" 
            data-hoverpause="true" 
            data-autoplay-timeout="5000" 
            data-smart-speed="800" 
            data-dots="false" 
            data-nav="true" 
            data-nav-speed="false" 
            data-center-mode="false" 
            data-mobile-device="1" 
            data-mobile-device-nav="true" 
            data-mobile-device-dots="false" 
            data-ipad-device="2" 
            data-ipad-device-nav="true" 
            data-ipad-device-dots="false" 
            data-ipad-device2="2" 
            data-ipad-device-nav2="false" 
            data-ipad-device-dots2="false" 
            data-md-device="3" 
            data-lg-device="4" 
            data-md-device-nav="true" 
            data-md-device-dots="true">
          
               
                @foreach($our_partners as $data)
                <div class="home_achievement single_partner btn-4">
                    <span>
                    <div class="team-image">
                        <a target="__blank" href="{{$data->link}}"><div class="single_partner_readmore"> Read More </div></a>
                        <div class="single_partner_img"> <img src="{{ asset('uploads/images/partner/'.$data->image) }}" alt="achievement"></div>
                    </div>
                    
                    <div class="partner_details getsingleAchievement">
                        {{$data->title}}
                    </div>
                    </span>
                </div>
                @endforeach
             
              
            </div>
        </div>
    </div>
   
    <!-- partner End -->
    
    
    
    
    
    
    
    <!--mobile partner Section Start -->
    @php
        $is_active = DB::table('website_design')->where('title', 'achievement')->first();
        
    @endphp
    @if($is_active->status == 1)
    <div class="partner_section_mobile">
    <div class="rs-team slider1 pt-100 pb-5" data-aos="fade-up" data-aos-duration="3000">
        <div class="container partner_section_mobile">
            <div class="sec-title text-center mb-20 md-mb-42">
                @foreach($website_text as $data) @if(stripos($data->slug, 'our-partner-title') !== FALSE) <h2 class="title mb-30">{{ $data->description }}</h2> @endif @endforeach
            </div>
            <div class="rs-carousel owl-carousel dot-style1" 
            data-loop="true" data-items="4" 
            data-margin="30" 
            data-autoplay="true" 
            data-hoverpause="true" 
            data-autoplay-timeout="5000" 
            data-smart-speed="800" 
            data-dots="true" 
            data-nav="false" 
            data-nav-speed="false" 
            data-center-mode="false" 
            data-mobile-device="1" 
            data-mobile-device-nav="true" 
            data-mobile-device-dots="false" 
            data-ipad-device="2" 
            data-ipad-device-nav="true" 
            data-ipad-device-dots="false" 
            data-ipad-device2="2" 
            data-ipad-device-nav2="false" 
            data-ipad-device-dots2="false" 
            data-md-device="3" 
            data-lg-device="4" 
            data-md-device-nav="true" 
            data-md-device-dots="true">

                @foreach($our_partners as $data)
                <div class="team-wrap home_achievement">
                    <a target="__blank" href="{{$data->link}}">
                    <div class="single_partner_img team-image">
                        <img src="{{ asset('uploads/images/partner/'.$data->image) }}" alt="achievement">
                        <div class="second_partner_title">{{$data->title}}</div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    </div>
    <!-- mobile Section End -->







    <!-- Event Section Start -->
    @php
        $is_active = DB::table('website_design')->where('title', 'LIKE', "%event%")->first();
    @endphp
    @if($is_active->status == 1)
    <section id="portfolio_section"  data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    @foreach($website_text as $data) @if(stripos($data->slug, 'news-and-events') !== FALSE) <h2 class="title mb-30">{{ $data->description }}</h2> @endif @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="background_section" style="background-image: url('{{ asset('/uploads/images/event') }}/{{$eventCategory[0]->image}}')">
                    <div class="portfolio_overlay"></div>
                    <ul class="portfolio_category">
                        <!--<li class="show_all_portfolio" > <b>ALL</b> </li>-->
                        @foreach($eventCategory as $data)
                            <li class="single_portfolio_category" data-singlecategoryid="{{$data->id}}"> <b>{{ $data->title }}</b> </li>
                        @endforeach
                    </ul>
                    
                    <a class="event_view_all_btn" href="{{ route('events') }}"><b>View All</b></a>
                </div>
            </div>
        </div>
        <div id="rs-portfolio" class="rs-portfolio style1 category_wise_section_all">
            <div class="top-content">
                <div class="container-fluid">
                    <div id="carousel-example" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner row w-100 mx-auto portfolio_slider" role="listbox">
                            @foreach($events as $data)
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 @if($loop->iteration == 1) active @endif cat_id_{{$data->category}} carousel-item">
                                <div class="portfolio-item">
                                    <div class="thumb-text">
                                        <div class="event_date">{{ date('d', strtotime($data->date_time)) }}</div>
                                        <div class="event_month">{{ date('M', strtotime($data->date_time)) }}</div>
                                        <div class="event_year">{{ date('Y', strtotime($data->date_time)) }}</div>
                                    </div>
                                    <div class="img-part event_image">
                                        <img src="{{ asset('uploads/images/event/'.$data->image) }}" alt="">
                                    </div>
                                    <div class="content-part">
                                        <ul>
                                            <li><a class="categories">{{ $data->location }}</a> </li>
                                            {{-- <li><a class="date_time">{{ date('d M, Y', strtotime($data->date_time)) }}</a> </li> --}}
                                        </ul>
                                        
                
                                        <h4 class="title"><a href="{{ route('event.single', $data->add_info) }}">{{ \Illuminate\Support\Str::limit($data->title, 20, $end='..') }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div> 
        </div>
        
        @foreach($eventCategory as $category)
        <div id="rs-portfolio" class="rs-portfolio style1 category_wise_section_{{$category->id}}">
            <div class="top-content">
                <div class="container-fluid">
                    
                    
                    <div id="carousel-example" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner row w-100 mx-auto portfolio_slider" role="listbox">
                            @php
                                $event = DB::table('vmsl_news_events')->where('category', $category->id)->orderBy('date_time', 'DESC')->get();
                            @endphp
                            @foreach($event as $data)
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 @if($loop->iteration == 1) active @endif cat_id_{{$data->category}} carousel-item">
                                <div class="portfolio-item">
                                    <div class="thumb-text">
                                        <div class="event_date">{{ date('d', strtotime($data->date_time)) }}</div>
                                        <div class="event_month">{{ date('M', strtotime($data->date_time)) }}</div>
                                        <div class="event_year">{{ date('Y', strtotime($data->date_time)) }}</div>
                                    </div>
                                    <div class="img-part event_image">
                                        <img src="{{ asset('uploads/images/event/'.$data->image) }}" alt="">
                                    </div>
                                    <div class="content-part">
                                        <ul>
                                            <li><a class="categories">{{ $data->location }}</a> </li>
                                            {{-- <li><a class="date_time">{{ date('d M, Y', strtotime($data->date_time)) }}</a> </li> --}}
                                        </ul>
                                        
                
                                        <h4 class="title"><a href="{{ route('event.single', $data->add_info) }}">{{ \Illuminate\Support\Str::limit($data->title, 20, $end='..') }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div> 
        </div>
        @endforeach
        
        
        
        
        
    </section>
    @endif
    <!-- Event Section End -->
    

    <!-- Blog Section Start -->
    @php
        $is_active = DB::table('website_design')->where('title', 'news')->first();
    @endphp
    @if($is_active->status == 1)
    <div class="rs-blog style1 pt-91 md-pt-71 md-pb-72 sm-pb-75">
        <div class="container">
            <div class="row y-middle mb-53 md-mb-40 sm-mb-50">
                <div class="col-md-6 sm-mb-22">
                    <div class="sec-title">
                        <span class="sub-title primary right-line">LATEST NEWS</span>
                        <h2 class="title mb-0">Read Latest News</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-part text-right sm-text-left">
                        <a class="readon" href="/posts">View All</a>
                    </div>
                </div>
            </div>
            <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="true">
              
                @foreach($blogs as $data)
                @if($data->cid != '3')
                <div class="blog-wrap" data-aos="zoom-out-up">
                    <div class="img-part">
                        <img src="{{ asset('uploads/images/posts/'.$data->image) }}" alt="">
                        <div class="fly-btn">
                            <a href="{{ url('posts/read/'.$data->updated_at) }}"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="content-part">
                        <a class="categories">{{ $data->category }}</a>
                        <h3 class="title"><a>{{ \Illuminate\Support\Str::limit($data->title, 40, $end='..')  }}</a></h3>
                        <div class="blog-meta">
                            <div class="user-data">
                                <img src="{{ asset('uploads/users/'.$data->user->avatar) }}" alt="">
                                <span>{{ $data->user->first_name }}</span>
                            </div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i> {{  date('d M Y', strtotime($data->date)) }}
                            </div>
                        </div>
                    </div>
                </div>
                 @endif
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!-- Blog Section End -->
    

    <!-- Team Section Start -->
    
    @php
        $is_active = DB::table('website_design')->where('title', 'LIKE', "%board of directors%")->first();
    @endphp
    
    @if($is_active->status == 1)
    <div class="rs-team slider1 pt-50 pb-92 md-pt-72 md-pb-50">
        <div class="container">
            <div class="sec-title text-center mb-20 md-mb-42">
                <div class="sub-title primary">Expert People</div>
                <h2 class="title mb-30">Board Of Directors</h2>
                
            </div>
            <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="4" data-md-device-nav="false" data-md-device-dots="true">
                @foreach($teams as $data)
                <div class="team-wrap team_diagnation_parent" data-aos="flip-left"  data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="team-image">
                        <img src="{{ asset('uploads/images/team/'.$data->image) }}" alt="Team Image">
                    </div>
                    <div class="text-bottom hompage_team">
                        <h4 class="person-name"><a>{{ $data->name }}</a></h4>
                        <span class="designation team_diagnation pb-2">{{ $data->designation }}</span>
                        <div class="social-links">
                            
                            <!--<ul>-->
                            <!--    @if($data->facebook) <li><a href="{{$data->facebook}}"><i class="fa fa-facebook"></i></a></li> @endif -->
                            <!--    @if($data->twitter) <li><a href="{{$data->twitter}}"><i class="fa fa-twitter"></i></a></li> @endif -->
                            <!--    @if($data->pinterest) <li><a href="{{$data->pinterest}}"><i class="fa fa-pinterest-p"></i></a></li> @endif -->
                            <!--    @if($data->linkedin) <li><a href="{{$data->linkedin}}"><i class="fa fa-linkedin"></i></a></li> @endif -->
                            <!--    @if($data->instagram) <li><a href="{{$data->instagram}}"><i class="fa fa-instagram"></i></a></li> @endif -->
                            <!--</ul>-->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!-- Team Section End -->
    
    
    
    <br>
    
       <!-- CSR Section Start -->
    @php
        $is_active = DB::table('website_design')->where('title', 'LIKE', "%CSR%")->first();
    @endphp
    
    @if($is_active->status == 1)
    
    <div class="container csr">
        <div class="row text-center">
            <div class="col-md-12 text-center">
                <h2 class="mb-2">CSR</h2>
            </div>
        </div>
    </div>
  
  

  
    <div class="rs-blog style1 pt-5">
        <div class="container">
            <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="true">
                @foreach($csrs as $data)
                <div class="blog-wrap" data-aos="zoom-out-up">
                    <div class="img-part">
                        <img src="{{ asset('uploads/images/posts/'.$data->image) }}" alt="">
                        <div class="fly-btn">
                            <a href="{{ url('posts/read/'.$data->updated_at) }}"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="content-part">
                        <a class="categories">{{ $data->category }}</a>
                        <h3 class="title"><a>{{ \Illuminate\Support\Str::limit($data->title, 40, $end='..')  }}</a></h3>
                        <div class="blog-meta">
                            <div class="user-data">
                                <img src="{{ asset('uploads/users/'.$data->user->avatar) }}" alt="">
                                <span>{{ $data->user->first_name }}</span>
                            </div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i> {{  date('d M Y', strtotime($data->created)) }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!-- CSR Section End --> 
    
    
    
    
    

    <!-- Testimonial Section Start -->
    <div class="rs-testimonial style1 gray-bg" id="testimonial_full">
        
        <!--<div class="testimonial_left" style="background-image: url('{{ asset('frontend') }}/images/testimonialbg.jpg')"></div>-->
         <div class="testimonial_left"></div>
        
        <div class="container_fluid">
            <div class="rs-contact style1">
                <div class="row">
                    
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="map_parent">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8686.370396599503!2d90.4033940522522!3d23.741356981500807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32d47e7b3d398460!2sBangladesh%20Infrastructure%20Finance%20Fund%20Limited%20(BIFFL)!5e0!3m2!1sen!2sbd!4v1661324189961!5m2!1sen!2sbd" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <div class="not_map_child"></div>
                            </div>
            
                        <!--<p class="mb-2"> <b>Address: </b> Bangladesh Infrastructure Finance Fund Limited, (A Financial Institution owned by the Ministry of Finance, GOB) Borak Unique Heights, Level-3, 117 Kazi Nazrul Islam Avenue, Eskaton Garden, Dhaka-1217, Bangladesh </p>-->
                        <!--<p class="mb-2"> <b>Web: </b> https://www.biffl.org.bd </p>-->
                        <!--<p class="mb-2"> <b>IP Phone: </b> +880-963-8124335 </p>-->
                        <!--<p class="mb-2"> <b>Phone: </b>  +880-2-8333238-9 </p>-->
                        <!--<p class="mb-2"> <b>Fax: </b> +880-2-9348518 </p>-->
                        <!--
                        <div class="divider"></div>
                        <p class="mb-2"> <b>Chief Information Officer:</b> </p>
                        <p class="mb-2"> <b>Name: </b> Mohammad M. Khan, FCS </p>
                        <p class="mb-2"> <b>Designation: </b> Company Secretary and Focal Point, Integrity Committee </p>
                        <p class="mb-2"> <b>Phone: </b>  880-2-8333238-9</p>
                        <p class="mb-2"> <b>Ext: </b> 3302</p>
                        -->
                        
                        <!--<div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-lg-device="1" data-md-device-nav="false" data-md-device-dots="true">-->
                        <!--    @foreach($testimonials as $data)-->
                        <!--    <div class="testi-item">-->
                        <!--        <div class="content-part text-left">-->
                        <!--            <div class="icon-part">-->
                        <!--                <i class="fa fa-quote-left"></i>-->
                        <!--            </div>-->
                        <!--            <div class="desc">{!! $data->dialogue !!}</div>-->
                        <!--        </div>-->
                        <!--        <div class="posted-by text-left">-->
                        <!--            <div class="avatar">-->
                        <!--                <img src="{{ asset('uploads/images/testimonial/'.$data->image) }}" alt="">-->
                        <!--            </div>-->
                        <!--            <div class="fulldesignation">-->
                        <!--                <h5 class="dialuge_name">{{ $data->name }}</h5>-->
                        <!--                <span class="dialuge_designation">{{ $data->designation }}</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--   @endforeach-->
                        <!--</div>-->
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-40 pb-40 md-pt-72 form-part">
                        <div class="sec-title pt-3">
                            <div class="sub-title primary">CONTACT US</div>
                            @foreach($website_text as $data) @if(stripos($data->slug, 'get-in-touch') !== FALSE) <h2 class="title">{{ $data->description }}</h2> @endif @endforeach
                        </div>
                        {{-- <div id="form-messages"></div> --}}
                        <form id="contact-form" class="contact-form" method="POST">
                            @csrf
                            <div class="row homepage-contact-form">
                                <div class="col-md-6 mb-1">
                                    <div class="common-control">
                                        <input type="text" class="contact_msg_name" name="name" placeholder="Name" required>
                                         <!--<p style="color:#f00;">{{ $errors->first('name') }}</p>-->
                                         <p class="error_message1" style="color:red;"></p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <div class="common-control">
                                        <input type="email" class="contact_msg_email" name="email" placeholder="Email" required>
                                        <!--<p style="color:#f00;">{{ $errors->first('email') }}</p>-->
                                        <p class="error_message2" style="color:red;"></p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <div class="common-control">
                                        <input type="text" class="contact_msg_phone" name="phone" placeholder="Phone Number" required>
                                        <!--<p style="color:#f00;">{{ $errors->first('phone') }}</p>-->
                                          <p class="error_message3" style="color:red;"></p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <div class="common-control">
                                        <input type="text" class="contact_msg_subject" name="subject" placeholder="subject" required>
                                        <!--<p style="color:#f00;">{{ $errors->first('subject') }}</p>-->
                                         
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="common-control">
                                        <textarea class="contact_msg_message" name="message" placeholder="Your Message Here" required></textarea>
                                        <!--<p style="color:#f00;">{{ $errors->first('message') }}</p>-->
                                        <p class="error_message4" style="color:red;"></p>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                  <div class="form-group m-0">
                                    <div class="captcha">
                                      <span>{!! app('captcha')->display() !!}</span>
                                      <!-- <button type="button" class="btn btn-success refresh-cpatcha"><i class="fa fa-refresh"></i></button> -->
                                    </div>
                                    <!--@error('g-recaptcha-response')-->
                                    <!--    <p style="color:#f00;">{{ $message }}</p>-->
                                    <!--@enderror-->
                                    <p class="error_message5" style="color:red;"></p>
                                  </div>
                                </div>   
                                    
                                
                                <div class="col-md-12">
                                    <!--@if(session()->has('success'))-->
                                    <!--   <p style="color:#green;"> {{ session()->get('success') }}</p>-->
                                    <!--@endif-->
                                    <!--@if(session()->has('error'))-->
                                    <!--     <p style="color:#f00;">{{ session()->get('error') }}</p>-->
                                    <!--@endif-->
                                    
                                    <div class="successs_message" style="color:green;"></div>
                               
                                    <div class="submit-btn">
                                        <div class="readon readon5828">Submit Now</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <div class="testimonial_right"></div>
    </div>
    <!-- Testimonial Section End -->




    <!-- Contact Section Start -->
    <!--<div id="rs-contact" class="rs-contact inner mt-5">-->
    <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8686.370396599503!2d90.4033940522522!3d23.741356981500807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32d47e7b3d398460!2sBangladesh%20Infrastructure%20Finance%20Fund%20Limited%20(BIFFL)!5e0!3m2!1sen!2sbd!4v1661324189961!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
    <!--</div>-->
    <!-- Contact Section End -->

</div> 




  <!-- Achievenent Modal start -->
  <button type="button" class="btn btn-primary mymodal" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <p> <b>	Institution:</b> <span class="institution"></span> </p>
            <p> <b>	Provider:</b> <span class="providoor"></span> </p>
            <!--<p> <b>	Date:</b> <span class="date"></span> </p>-->
            <p class="description"></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Achievenent Modal End -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>

<script type="text/javascript">
AOS.init();


$('#carousel-example').on('slide.bs.carousel', function (e) {
    interval: 1000;
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});




  $("#typed").typed({
  	strings: [
  	    @foreach($headlines as $headline) 
  	        "<a href='{{$headline->title}}' target='__blank'>{{ $headline->description}}</a>", 
  	    @endforeach
  	    ],
  	typeSpeed: 10,
  	startDelay: 0,
  	backSpeed: 0,
  	backDelay:5000,
  	loop: true,
  	cursorChar: "|",
  	contentType: 'html'
  });






    $(document).on('click', '.getsingleAchievement', function(){
        var id = $(this).attr('data-getsingleAchievement');
        $.ajax({
            url: "/achievement-details/"+id,
            type: "get",
            success: function(response) {
                $('.mymodal').trigger('click');
                $('.modal-title').text(response.title);
                $('.providoor').text(response.providoor);
                
                
                
                if(response.institution){
                    $('.institution').text(response.institution);
                }else{
                    $('.institution').parent('p').hide();
                    $('.institution').parent('span').hide();
                    $('.institution').parent('span').hide();
                }
                
                $('.description').text(response.description);
                //$('.date').text(new Date(response.date).toLocaleString());
                
                
            function dateToYMD(date) {
                var strArray=['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                var d = date.getDate();
                var m = strArray[date.getMonth()];
                var y = date.getFullYear();
                return '' + (d <= 9 ? '0' + d : d) + ' ' + m + ', ' + y;
            }
       
            var date = dateToYMD(new Date(response.date)); // Nov 5
                
            $('.date').text(date);  
                
            }
        });
    });
    




    
    if(window.screen.width < 992) {
        $('.add_revers').addClass('order-2');
        $('.order-2').css({'margin-top':'50px'});
        
    }

setInterval(function(){
     if($('.nowShow').next().hasClass('single_typing_item')) { 
        $('.nowShow').next('.single_typing_item').addClass('nowShow').prev('.single_typing_item').removeClass('nowShow');
     }else{
         $('.single_typing_item:first').addClass('nowShow');
         $('.single_typing_item:last').removeClass('nowShow');
         
     }
     $(".full_headline").scrollTop(0);
     $(".full_headline").scroll(0);
      $(".full_headline").scrollLeft(0);
},10000);







$(document).on('click', '.submit-btn', function(e){
    var contact_msg_name = $(".contact_msg_name").val();
    var contact_msg_email = $(".contact_msg_email").val();
    var contact_msg_phone = $(".contact_msg_phone").val();
    var contact_msg_subject = $(".contact_msg_subject").val();
    var contact_msg_message = $(".contact_msg_message").val();
    var g_recaptcha_response = $("#g-recaptcha-response").val();
    

    $.ajax({
        type: "POST",
        
        url: "/contact/message",
        data: {name:contact_msg_name, email:contact_msg_email, phone:contact_msg_phone, subject:contact_msg_subject, message:contact_msg_message,g_recaptcha_response:g_recaptcha_response}, // serializes the form's elements.
        success: function(data){
            if(data == 1){
              $('.successs_message').show();
              $('.successs_message').text('Message sent successfully !.');
              $('p').text('');
              $('#contact-form').trigger("reset");
              
            }else{
                $('p').text('');
                 $('.error_message1').text(data.message['name']);
                 $('.error_message2').text(data.message['email']);
                 $('.error_message3').text(data.message['phone']);
                 $('.error_message4').text(data.message['message']);
                 $('.error_message5').text(data.message['g_recaptcha_response']);
                 $('.successs_message').hide();
                $('.rs-contact.style1 .contact-form .common-control textarea').css({'height':'80px'});
                $('.title').css({'margin':'0px !important'});
                $('.rs-contact.style1 .contact-form .common-control input').css({'height':'40px'});
                
            }

        }
    });
    
});









</script>

<!-- Main content End -->