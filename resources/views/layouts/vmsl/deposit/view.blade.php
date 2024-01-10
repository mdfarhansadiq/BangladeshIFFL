@section('title', 'Deposit')
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
    <h2 class="no_content">No Content Available!</h2>
@else

    @foreach( $allData as $data)
        @if($data->image)
            <style>
                .page-header{
                    background: url(/uploads/images/{{$data->image}}) no-repeat;
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="/">Home</a></li>
                                <li>Deposit Product</li>
                                <li class="active">{{$data->name}}</li>

                            </ol>
                        </div>
                        @if(session()->has('msg'))
                            <h3 class="text-danger">{{ session()->get('msg') }}</h3>
                        @endif
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bg-white pinside30">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-4">
                                    <h1 class="page-title">{{$data->name}}</h1>
                                </div>
                                <div class="col-xl-7 col-lg-8 col-md-8 col-sm-8 col-8">
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
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav">
                            <ul class="nav nav-justified" style="display: flex">

                                <li class="nav-item"><a href="#section-feature" class="page-scroll nav-link">Product Features</a></li>
                                <li class="nav-item"><a href="#section-eleigiblity" class="page-scroll nav-link">Document Required</a></li>
                                <li class="nav-item"><a href="#section-typeloan" class="page-scroll nav-link">Deposit Term and Amount</a></li>
                                <li class="nav-item"><a data-toggle="modal" href="#" data-target="#myModal" class="page-scroll nav-link">Apply now</a></li>
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

                            <div class="section-scroll" id="section-feature" style="overflow-wrap: anywhere;">
                                <div class="pinside60">
                                    {!! $data->feature !!}
                                </div>
                            </div>

                            <div class="section-scroll" id="section-eleigiblity">
                                <div class=" bg-light pinside60">
                                    {!! $data->eligibility !!}
                                </div>
                            </div>
                            <div class="section-scroll" id="section-typeloan">
                                <div class="bg-light pinside60">
                                    {!! $data->types_deposit !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content end -->


    @endforeach
@endif












<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>


            <div class="modal-body">
                <h2 class="text-center">APPLY FOR DEPOSIT</h2>
                <p class="text-center">Please fill-in the required information, so that our team can get in touch with you. </p><br>

                <form action="/deposit-request" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="deposit_type">Please Choose your prefered deposit</label>
                        <select class="form-control" name="deposit_type">
                            @foreach( $allData as $data)
                                <?php foreach(Helper::getDepositCategory() as $d):?>
                                <option @if($data->id == $d->id) selected @endif>{{$d->name}}</option>
                                <?php endforeach; ?>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="address">Your Address </label>
                        <input type="text" class="form-control" name="address">
                    </div>


                    <div class="form-group">
                        <label for="email">Your Profession</label>
                        <select id="selectProfession" class="form-control" name="profession" onchange="changeFunc()">
                            <option selected value="business">Business</option>
                            <option value="service">Service Holder</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div id="business_fields">
                        <div class="form-group">
                            <label for="business_name">Your Business Name </label>
                            <input type="text" class="form-control" name="business_name">
                        </div>

                        <div class="form-group">
                            <label for="business_address">Your Business Address </label>
                            <input type="text" class="form-control" name="business_address">
                        </div>

                        <div class="form-group">
                            <label for="business_sector">Business Sector </label>
                            <input type="text" class="form-control" name="business_sector">
                        </div>


                        <div class="form-group">
                            <label for="business_experience">Business Experience </label>
                            <input type="text" class="form-control" name="business_experience">
                        </div>
                    </div>

                    <div id="service_fields" style="display: none">
                        <div class="form-group">
                            <label for="business_name">Your Company Name </label>
                            <input type="text" class="form-control" name="company_name">
                        </div>

                        <div class="form-group">
                            <label for="business_address">Your Company Address </label>
                            <input type="text" class="form-control" name="company_address">
                        </div>

                        <div class="form-group">
                            <label for="business_sector">Your Designation </label>
                            <input type="text" class="form-control" name="company_designation">
                        </div>

                    </div>

                    <div id="other_field" style="display: none">
                        <div class="form-group">
                            <label for="business_name">Other </label>
                            <input type="text" class="form-control" name="other">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Your District</label>
                        <select class="form-control" name="district">
                            <?php foreach(Helper::getDistrict() as $d):?>
                            <option>{{$d->name}}</option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="contact_number">Contact number</label>
                        <input type="text" class="form-control" name="contact_number">
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <p class="text-center"><button type="submit" class="btn btn-primary myButton">Submit</button></p>
                </form>


            </div>


        </div>
    </div>
</div>
</div>



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
