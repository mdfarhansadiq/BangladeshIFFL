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

<div class="page-header" id="complain-cell">
    <div class="container">
        <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3 class="m-2 p-5 text-uppercase">{{ $project->title }}</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container">
    
    
     @if($project->overview)
    <div class="row pt-4 pb-4">
        <h4 class="m-2">OVERVIEW OF THE PROJECT</h4>
        <div class="project_overview">{!! $project->overview !!}</div>
    </div>
    @endif
    
    
    @if($project->video_1_link)
    <div class="row pt-4 pb-4">
        <div class="col-md-12 p-0">
            <h4 class="m-2">{{ $project->video_1_title }}</h4>
            <div class="project_video">
                <iframe width="100%" height="500" src="{{ $project->video_1_link }}"></iframe>
            </div>
        </div>
    </div>
    @endif
    
    
    
    @if($project->video_2_link)
    <div class="row pt-4 pb-4">
        <div class="col-md-12 p-0">
            <h4 class="m-2">{{ $project->video_2_title }}</h4>
            <div class="project_video">
                <iframe width="100%" height="500" src="{{ $project->video_2_link }}"></iframe>
            </div>
        </div>
    </div>
    @endif
    
    
    @if($project->product_1_document)
    <div class="row pt-4 pb-4">
        <h4 class="m-2">{{ $project->product_1_title }}</h4>
        <embed src="{{ '/uploads/images/project/'.$project->product_1_document }}" type="application/pdf" width="100%" height="500">
    </div>
    @endif
    
    
    @if($project->product_2_document)
    <div class="row pt-4 pb-4">
        <h4 class="m-2">{{ $project->product_2_title }}</h4>
        <embed src="{{ '/uploads/images/project/'.$project->product_2_document }}" type="application/pdf" width="100%" height="500">
    </div>
    @endif
    
    @if($project->product_3_document)
    <div class="row pt-4 pb-4">
        <h4 class="m-2">{{ $project->product_3_title }}</h4>
        <embed src="{{ '/uploads/images/project/'.$project->product_3_document }}" type="application/pdf" width="100%" height="500">
    </div>
    @endif
    
    @if($project->product_4_link)
    <div class="row pt-4 pb-4">
        <h4 class="m-2">{{ $project->product_4_title }}</h4>
        <embed src="{{ '/uploads/images/project/'.$project->product_4_link }}" type="application/pdf" width="100%" height="500">
    </div>
    @endif
    
    
</div>




 

 @include('layouts.default.footer')
