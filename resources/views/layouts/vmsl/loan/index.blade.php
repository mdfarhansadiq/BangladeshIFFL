@section('title', 'Loans')
@include('layouts.default.header')
<style>
.no_content{
    text-align: center;
    margin: 100px;
    color: #cc0606;
    text-transform: uppercase;
}
.modal-header {
    border: none;
    padding: 9px 18px;
}
.form-control {
    height: 35px;
}
.modal-body {
    padding: 5px 50px;
}
.myButton {
    padding: 14px 25px;
    background: #007bc0;
    border-radius: 34px;
    margin-bottom: 25px;
}
.form-group label {
    color: #000;
    font-size: 14px;
}
input#newsletter {
    height: 52px;
}
</style>
@if(count($allData) == 0)
<div class="container">
    <div class="row">
        <div class="col-md-12 data_not_found">
             <img src="{{ asset('frontend/images/no_result.gif') }}" alt="data-not-found" >
             <h3>Data Not Found</h3>
        </div>
    </div>
</div>
@else

@foreach( $allData as $data)
@if($data->about)
<style>
    .page-header{
        background: url(/uploads/images/{{$data->about}}) no-repeat;
        padding: 131px 0px 80px;
        background-size: cover;
    }

</style>
@else
<style>
    .page-header{
        padding: 131px 0px 80px;
    }
</style>
@endif

    <div class="page-header">
        <div class="container">
            <div class="row">
                {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>Loan Product</li>
                            <li class="active">{{$data->name}}</li>

                        </ol>
                    </div>
                    @if(session()->has('msg'))
                    <h3 class="text-danger">{{ session()->get('msg') }}</h3>
                    @endif
                </div> --}}

                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h1 class="page-title">{{$data->name}}</h1>
                            </div>
                            {{-- <div class="col-xl-7 col-lg-8 col-md-8 col-sm-8 col-8">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4 col-4 d-none d-xl-block d-lg-block">
                                        @if(!empty($data->interest_rate) && $data->interest_rate != '.')
                                            <div class="rate-block">
                                                <h1 class="rate-number">{{$data->interest_rate}}</h1>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-8 col-8">
                                        <div class="btn-action"> <a href="/contact-us" class="btn btn-primary">Get a call back</a> <a href="/calculator" class="btn btn-default">Loan Calculator</a> </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="sub-nav" >
                        <ul class="nav nav-justified" style="display: flex">

                            <li class="nav-item" data-itemid="1"><a href="#description" class="page-scroll nav-link">Description</a></li>
                            <li class="nav-item" data-itemid="2"><a href="#section-feature" class="page-scroll nav-link">Features</a></li>
                            <li class="nav-item" data-itemid="3"><a href="#section-eleigiblity" class="page-scroll nav-link"> Document</a></li>
                            <li class="nav-item" data-itemid="4"><a href="#section-typeloan" class="page-scroll nav-link">Steps To Apply</a></li>
                            
                            
                            @php
                                $cats = DB::table('vmsl_loan_category')->where('name', 'LIKE', "%FEATURES%")->first();
                            @endphp 
                            
                            @if($cats->id != $data->category)
                            <li class="nav-item" data-itemid="5"><a href="#form" class="page-scroll nav-link">Apply now</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <div>
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="wrapper-content bg-white">

                        @if($data->short_description)
                        <div class="section-scroll nav_description1" id="description">
                            <div class="bgli pinside60">
                                    {!! $data->short_description !!}
                            </div>
                        </div>
                        @endif

                        @if($data->feature)
                        <div class="section-scroll nav_description2" id="section-feature">
                            <div class="bgli pinside60">
                                    {!! $data->feature !!}
                            </div>
                        </div>
                        @endif

                        @if($data->eligibility)
                        
                
                        <div class="section-scroll nav_description3" id="section-eleigiblity">
                            <div class="bgli pinside60">
                                <h6>Document</h6>
                                 <embed src="{{ '/uploads/files/'.$data->eligibility }}" type="application/pdf" width="100%" height="600px">
                            </div>
                        </div>
                        @endif

                        @if($data->types_loan)
                        <div class="section-scroll nav_description4" id="section-typeloan">
                            <div class="bgli pinside60">
                                <h6>Steps To Apply</h6>
                                {!! $data->types_loan !!}
                            </div>
                        </div>
                        @endif
                        @if($cats->id != $data->category)
                        <div class="section-scroll nav_description5" id="form" >
                            <div class="bgli pinside60 rs-contact style1">
                                <h6>Apply Now</h6>
                                <div class="loan_request_form contact-form">


                                    <form id="request_form" class="contact-form" method="post" action="{{ route('loan.request') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 mb-30">
                                                    <div class="common-control">
                                                        <input type="text" name="first_name" placeholder="First Name" required>
                                                        <input type="hidden" value="{{$data->id}}" name="loan_type">
                                                        <small style="color:#f00;">{{ $errors->first('first_name') }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-30">
                                                    <div class="common-control">
                                                        <input type="text" name="last_name" placeholder="Last Name" required>
                                                        <small style="color:#f00;">{{ $errors->first('last_name') }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-30">
                                                    <div class="common-control">
                                                        <input type="text" name="organization" placeholder="Organization" required>
                                                        <small style="color:#f00;">{{ $errors->first('organization') }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-30">
                                                    <div class="common-control">
                                                        <input type="text" name="designation" placeholder="Designation" required>
                                                        <small style="color:#f00;">{{ $errors->first('designation') }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-30">
                                                    <div class="common-control">
                                                        <input type="email" name="email" placeholder="Email" required>
                                                        <small style="color:#f00;">{{ $errors->first('email') }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-30">
                                                    <div class="common-control">
                                                        <input type="text" name="phone" placeholder="Phone Number" required>
                                                        <small style="color:#f00;">{{ $errors->first('phone') }}</small>
                                                    </div>
                                                </div>
                      
                                                <div class="col-md-12 mb-30">
                                                    <div class="common-control">
                                                        <textarea name="message" placeholder="Message" required></textarea>
                                                        <small style="color:#f00;">{{ $errors->first('message') }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    
                                                    @if(session()->has('success'))
                                                        <div class="alert alert-success">
                                                            {{ session()->get('success') }}
                                                        </div>
                                                    @endif
                                                    @if(session()->has('error'))
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
                                                        <button type="submit" class="readon">Submit Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content end -->


@endforeach
@endif












 <!-- Modal -->
<!--  <div class="modal fade" id="myModal" role="dialog">-->
<!--    <div class="modal-dialog modal-lg">-->
<!--      <div class="modal-content">-->
<!--        <div class="modal-header">-->
<!--          <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--        </div>-->


<!--        <div class="modal-body">-->
<!--          <h2 class="text-center"><img src="/uploads/images/backend-logo.png">APPLY FOR LOAN</h2>-->
<!--          <p class="text-center">Please fill-in the required information, so that our team can get in touch with you. </p><br>-->

<!--            <form action="/loan-request" method="POST">-->
<!--                @csrf-->
<!--                <div class="form-group">-->
<!--                  <label for="loan_type">What type of loan do you need?</label>-->
<!--                      <select class="form-control" name="loan_type">-->
<!--                        @foreach($allData as $data)-->
<!--                            <?php foreach(Helper::getLoanCategory() as $l):?>-->
<!--                            <option value="{{ $l->name }}" @if($data->id == $l->id) selected @endif>{{$l->name}}</option>-->
<!--                            <?php endforeach; ?>-->
<!--                        @endforeach-->
<!--                      </select>-->
<!--                </div>-->

<!--                <div class="form-group">-->
<!--                  <label for="name">Your Name</label>-->
<!--                  <input type="text" class="form-control" name="name">-->
<!--                </div>-->

<!--                <div class="form-group">-->
<!--                  <label for="address">Your Address </label>-->
<!--                  <input type="text" class="form-control" name="address">-->
<!--                </div>-->

<!--                <div class="form-group">-->
<!--                    <label for="email">Your Profession</label>-->
<!--                    <select id="selectProfession" class="form-control" name="profession" onchange="changeFunc()">-->
<!--                        <option selected value="business">Business</option>-->
<!--                        <option value="service">Service Holder</option>-->
<!--                        <option value="other">Other</option>-->
<!--                    </select>-->
<!--                </div>-->

<!--                <div id="business_fields">-->
<!--                    <div class="form-group">-->
<!--                        <label for="business_name">Your Business Name </label>-->
<!--                        <input type="text" class="form-control" name="business_name">-->
<!--                    </div>-->

<!--                    <div class="form-group">-->
<!--                        <label for="business_address">Your Business Address </label>-->
<!--                        <input type="text" class="form-control" name="business_address">-->
<!--                    </div>-->

<!--                    <div class="form-group">-->
<!--                        <label for="business_sector">Business Sector </label>-->
<!--                        <input type="text" class="form-control" name="business_sector">-->
<!--                    </div>-->


<!--                    <div class="form-group">-->
<!--                        <label for="business_experience">Business Experience </label>-->
<!--                        <input type="text" class="form-control" name="business_experience">-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div id="service_fields" style="display: none">-->
<!--                    <div class="form-group">-->
<!--                        <label for="business_name">Your Company Name </label>-->
<!--                        <input type="text" class="form-control" name="company_name">-->
<!--                    </div>-->

<!--                    <div class="form-group">-->
<!--                        <label for="business_address">Your Company Address </label>-->
<!--                        <input type="text" class="form-control" name="company_address">-->
<!--                    </div>-->

<!--                    <div class="form-group">-->
<!--                        <label for="business_sector">Your Designation </label>-->
<!--                        <input type="text" class="form-control" name="company_designation">-->
<!--                    </div>-->

<!--                </div>-->

<!--                <div id="other_field" style="display: none">-->
<!--                    <div class="form-group">-->
<!--                        <label for="business_name">Other </label>-->
<!--                        <input type="text" class="form-control" name="other">-->
<!--                    </div>-->
<!--                </div>-->



<!--                <div class="form-group">-->
<!--                      <label for="email">Your District</label>-->
<!--                      <select class="form-control" name="district">-->
<!--                         <?php foreach(Helper::getDistrict() as $l):?>-->
<!--                         <option value="{{ $l->name }}">{{$l->name}}</option>-->
<!--                         <?php endforeach; ?>-->
<!--                      </select>-->
<!--                </div>-->

<!--               <div class="form-group">-->
<!--                  <label for="contact_number">Contact number</label>-->
<!--                  <input type="text" class="form-control" name="contact_number">-->
<!--                </div>-->

<!--                <div class="form-group">-->
<!--                  <label for="email">Your Email</label>-->
<!--                  <input type="text" class="form-control" name="email">-->
<!--                </div>-->
<!--               <button type="submit" class="btn btn-primary myButton">Submit</button>-->
<!--             </form>-->


<!--        </div>-->


<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->



@include('layouts.default.footer')
<script>

$("a.page-scroll.nav-link").click(function() {
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top-100
    }, 500);
});

function changeFunc() {
    var selectProfession = document.getElementById("selectProfession");
    var selectedProfession = selectProfession.options[selectProfession.selectedIndex].value;
    if (selectedProfession=="business"){
        $('#business_fields').show();
        $('#service_fields').hide();
        $('#other_field').hide();
    }
    else if (selectedProfession=="service"){
        $('#service_fields').show();
        $('#business_fields').hide();
        $('#other_field').hide()
    } else if (selectedProfession=="other"){
        $('#other_field').show();
        $('#service_fields').hide();
        $('#business_fields').hide();
    }
}


</script>
