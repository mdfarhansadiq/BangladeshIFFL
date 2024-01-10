@include('layouts.default.header')

<section id="about_banner" style="background-image: url({{ asset('uploads') }}/images/aboutus/{{ $about_biffl->add_info1 }});">
    <div class="banner_overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center banner_text">
                
            </div>
        </div>
    </div>
    </div>
</section>

<!-- about us Start -->
<section class="about_section">
    <div class="container mt50">
        <div class="title_heading_about">
            <h3>About BIFFL</h3>
        </div>
        
        <div class="row">
            <div class="col-md-8">
                {!! $about_biffl->about_biffl !!}
            </div>
            <div class="col-md-4">
                <img src="{{ asset('uploads') }}/images/aboutus/{{ $about_biffl->about_image }}" alt="about">
            </div>
        </div>
    </div>
</section>

<section class="about_section" id="background" style="background-image: url({{ asset('uploads') }}/images/aboutus/{{ $about_biffl->background_image }});">
    <div class="background_child">
        <div class="container">
            <div class="row mt50">
                <div class="col-md-12">
                    <div class="title_heading_about">
                        <h3 style="text-align: center;margin-bottom:3px;margin-bottom: 25px;color: #fff;">BACKGROUND</h3>
                    </div>
                    <div class="background_item">
                        <p>{!! $about_biffl->background !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_section" id="missionvission">
    <div class="container">
        <div class="row mt50">
            <div class="col-md-5">
                <img src="{{ asset('uploads') }}/images/aboutus/{{ $about_biffl->vission_image }}" alt="about">
            </div>
            <div class="col-md-7">
                <div class="title_heading_about">
                    <h3 style="text-align: left;margin-bottom:3px">VISION</h3>
                </div>
                {!! $about_biffl->vission !!}
                <div class="title_heading_about">
                    <h3 style="text-align: left;margin-bottom:3px">MISSION</h3>
                </div>
                <div class="mission_item">
                   {!! $about_biffl->mission !!}
                </div>
            </div>
        </div>
    </div>
</section>

<section id="goal_section" style="background-image: url({{ asset('uploads') }}/images/aboutus/{{ $about_biffl->goal_image }});">
<div class="goal_child"> 
    <div class="container">
        <div class="row mt50">
            <div class="col-md-5">
                <div class="title_heading_about">
                    <h3 style="text-align: left;margin-bottom:3px;color: #fff;">GOAL</h3>
                </div>
                <div class="mission_item">
                    {!! $about_biffl->goal !!}
                </div>
            </div>
            <div class="col-md-7">
                <div class="title_heading_about">
                    <h3 style="text-align: left;margin-bottom:3px;color: #fff;">OBJECTIVES</h3>
                </div>
                <div class="mission_item">
                    {!! $about_biffl->objectives !!}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class="about_section" id="strategicpriorities">
    <div class="container">
        <div class="row mt50">
            <div class="col-md-7">
                <div class="title_heading_about">
                    <h3 style="text-align: left;margin-bottom:3px">STRATEGIC PRIORITIES</h3>
                </div>
                <div class="mission_item">
                    {!! $about_biffl->strategic !!}
                </div>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('uploads') }}/images/aboutus/{{ $about_biffl->strategic_image }}" alt="about">
            </div>
        </div>
    </div>
</section>
<!--  about us End -->


@include('layouts.default.footer')