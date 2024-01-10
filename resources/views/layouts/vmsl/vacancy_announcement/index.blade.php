@section('title','Downloads')
@include('layouts.default.header')
 <style>
    .page-header{
        background: url(/uploads/images/corporate.jpg) no-repeat center;
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
</style>

    <div class="page-header">
        <div class="container">
            <div class="row">
                {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">JOIN NHFIL FAMILY</li>
                        </ol>
                    </div>
                </div> --}}
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h3 class="m-0 p-5 text-uppercase">Join "Bangladesh Infrastructure Finance Fund Limited (BIFFL)"  </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

 
    <div class="container mt-5">
	      <div class="row">
	          <div class="col-md-12">
                <p class="post_title text-uppercase"> <b>A UNIQUE CAREER OPPORTUNITY</b></p>
	            <p>BIFFL, owned by the Government of Bangladesh, represented by the Finance Division, Ministry of Finance, and a leading Non-Bank Financial Institution in Bangladesh, is looking for competent and promising talents dedicated to engineering the growth of the country by being a part of its dynamic management team.</p>
	          </div>
	      </div>
			@foreach($circular as $key => $c)
			  <div class="job_item">
				<div class="row">
						<div class="col-3 col-sm-2 col-md-2 col-lg-2">
							<p class="text-center"><span class="serial_text">{{$key+1}}</span></p>
						</div>
						<div class="col-9 col-sm-6 col-md-6 col-lg-6">
							<p class="post_title text-uppercase"> <b>{{strtoupper($c->title)}}</b></p>
							<ul class="career_date">
								<li> <b>Post Date:</b> {{ date('d M, Y', strtotime($c->post_date)) }} </li>
								<li> <b>End Date:</b> {{ date('d M, Y', strtotime($c->end_date)) }} </li>
							</ul>
							
						</div>
						<div class="col-6 col-sm-2 col-md-2 col-lg-2 text-right pr-0">
							<a class="apply_button button" href="{{ asset('uploads/files/'.$c->circular_file) }}"><span>View circular</span></a>
						</div>
						<div class="col-6 col-sm-2 col-md-2 col-lg-2">
							<!--<a class="apply_button button" href="{{ route('career.with.us', $c->add_info1) }}"><span>apply now</span></a>-->
						@if($c->add_info2)	<a target="__blank" class="apply_button button" href="{{ $c->add_info2 }}"><span>apply now</span></a>@endif
						</div>
					</div>
			   </div>
			@endforeach

    </div><br><br>
 @include('layouts.default.footer')
