@include('layouts.default.header')


@if($page->category == 1)
<sectio id="my_cms_page">
  @if($page->slider == 1)
    <div id="rs-slider" class="rs-slider slider1 custom_page_slider">
        <div class="bend niceties">
            <div id="nivoSlider" class="slides">
                @foreach($page->sliders as $data)
                    <img src="{{ asset('/uploads/images/slider/'.$data->image) }}" alt="" title="#slide-{{$loop->iteration}}" />
                @endforeach

            </div>
        </div>
    </div>
    @endif
    <div class="container">	
    	<div class="row default_page_content">
    		<?php echo PostHelpers::formatContent($page->description) ;?>
    	</div>
    </div>	
</section>
 @endif

@if($page->category == 2)
    <div class="page-header" style="background-image: url('/uploads/images/slider/{{$page->add_info1}}');padding: 131px 0px 80px;background-size: cover;">
        <div class="container">
            <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h1 class="page-title">{{$page->title}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="withbanner">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="wrapper-content bg-white">
                        @if($page->description)
                        <div class="section-scroll nav_description1" id="description">
                            <div class="bgli pinside60">
                                {!! $page->description !!}
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endif



@if($page->category == 3)
<sectio id="my_cms_page">
    <div class="container">	
    	<div class="row default_page_content">
    		<?php echo PostHelpers::formatContent($page->description) ;?>
    	</div>
    </div>	
</section>
 @endif
 
 
 
 

@include('layouts.default.footer')