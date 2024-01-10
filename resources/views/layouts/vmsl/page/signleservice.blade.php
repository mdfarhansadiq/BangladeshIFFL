@section('title','Downloads')
@include('layouts.default.header')
 <style>
    .page-header{
        padding: 131px 0px 80px;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }
    .job_item {
		background: #eaeaea;
		padding: 15px 0 6px;
		margin-bottom: 15px;
	}
	.serial_text {
		background: #00652e;
		color: #fff;
		line-height: 40px;
		padding: 15px 25px;
		font-size: 30px;
		display: inline-block;
	}

	.job_item .button {
		background-color: #00652e;
		border: none;
		color: #FFFFFF;
		text-align: center;
		display: inline-block;
		font-size: 14px;
		text-transform: uppercase;
		padding: 11px;
		transition: all 0.5s;
		cursor: pointer;
		margin-top: 16px;
	}
	.date_item{
	    margin-bottom: 10px;
	}
	
p,span,a, li {
    font-weight: 400 !important;
    margin-bottom: 0px !important;
}

.full_section ul{
    font-weight: 400 !important;
    margin-bottom: 15px !important;
}
.full_section ul li{
    list-style-type: disc !important;
}

</style>


<div class="page-header" style="background-image: url('/uploads/images/services/{{ $signleservice->banner }}');">
    <div class="container">
        <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3 class="m-0 p-5 text-uppercase">{{ $signleservice->title }}  </h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="container full_section">
    <div class="row">
        <div class="title_heading mt-3">
            <h3>{{ $signleservice->title }}</h3>
        </div>
    </div>
    
    <div class="row mb-3">
        <p>{{ $signleservice->short_description }}</p>
    </div>
    
    <div class="row">
        <h3>{!! $signleservice->description !!}</h3>
    </div>
</div>










 @include('layouts.default.footer')
