@section('title','Downloads')
@include('layouts.default.header')
 <style>
    .page-header{
        background: url(/uploads/images/page-header.jpg) no-repeat center;
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


 @if($singleJob->id)
  
  
  
    <div class="page-header">
        <div class="container">
            <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h3 class="m-0 p-5 text-uppercase">Join As "{{ $singleJob->title }}"  </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

 
    <div class="container mt-5 mb-3" id="career_request_form">
        <div class="row">
            <div class="col-md-6 col-lg-6"> 
                {!! $singleJob->description  !!}
            
            </div>
            
            <div class="col-md-6 col-lg-6"> 
                <div class="rs-contact style1 join_form">
                    <div class="loan_request_form contact-form">
                        <form id="request_form" class="contact-form" method="post" action="{{ route('career.request.submit') }}" enctype="multipart/form-data">
                            @csrf
                            
                                <div class="col-md-12">
                                    <div class="common-control">
                                        <label for="">Name<span style="color:red">*</span></label>
                                        <input type="text" name="name" placeholder="Name"  required/>
                                        <input type="hidden" name="job" value="{{ $singleJob->id }}"  />
                                        
                                        <small style="color: #f00;">{{ $errors->first('name') }}</small>
                                    </div>
                                </div>
       
                                <div class="col-md-12">
                                    <div class="common-control">
                                        <label for="">Email<span style="color:red">*</span></label>
                                        <input type="email" name="email" placeholder="Email" required />
                                        <small style="color: #f00;">{{ $errors->first('email') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="common-control">
                                        <label for="">Mobile<span style="color:red">*</span></label>
                                        <input type="text" name="mobile" placeholder="Mobile" required />
                                        <small style="color: #f00;">{{ $errors->first('mobile') }}</small>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="common-control">
                                        <label for="">Cv<span style="color:red">*</span></label>
                                        <input type="file" name="cv"  required/>
                                        <small style="color: #f00;">{{ $errors->first('cv') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="common-control">
                                        <label for="">Photo<span style="color:red">*</span></label>
                                        <input type="file" name="photo" accept="image/*" onchange="loadFile(event)" required />
                                        <small style="color: #f00;">{{ $errors->first('photo') }}</small>
                                        <img id="output" style="width:110px; margin-top: 5px;">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="common-control">
                                        <label for="">Note</label>
                                        <textarea name="note" placeholder="Write a note here.." ></textarea>
                                        <small style="color: #f00;">{{ $errors->first('note') }}</small>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                    @endif @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                    @endif
                                    
                                  <div class="form-group m-0">
                                    <div class="captcha">
                                      <span>{!! app('captcha')->display() !!}</span>
                                      <!-- <button type="button" class="btn btn-success refresh-cpatcha"><i class="fa fa-refresh"></i></button> -->
                                    </div>
                                    @error('g-recaptcha-response')
                                        <small style="color:#f00;">{{ $message }}</small>
                                    @enderror
                                  </div>
                                                  
                                                  
                                    <div class="submit-btn mt-2">
                                        <button type="submit" class="readon">Join Now</button>
                                    </div>
                                </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
@else
<div class="container">
    <div class="row">
        <div class="col-md-12 data_not_found">
             <img src="{{ asset('frontend/images/no_result.gif') }}" alt="data-not-found" >
             <h3>Data Not Found</h3>
        </div>
    </div>
</div>
@endif







<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

 @include('layouts.default.footer')
