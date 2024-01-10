@include('layouts.default.header')

<style>
#la,#nm,#roi {
    display: block !important;
    border: none;
    padding: 5px 11px 5px 0;
    text-align: right;
    float: right;
    background: none;
    border-bottom: 1px dashed #a7a7a7;
    margin-bottom: 15px;
    {{-- margin-top: -50px; --}}
}
#la_value,#nm_value,#roi_value{
    display: none;
}
hr{clear: both;}
#loantable td{text-align: center;}
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/nh.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/simple-slider.css">
<script src="{{ asset('frontend') }}/js/simple-slider.js"></script>
<script src="{{ asset('frontend') }}/js/jquery-ui.js"></script>



<div class="page-header loan_image">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h1 class="page-title">Financial Calculator</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="wrapper-content bg-white pinside40">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="bg-light pinside40 outline">
                                        <span>Loan Amount is </span>
                                        <strong>
                                            <span class="pull-right" id="la_value">30000</span></strong>
                                        <input type="text" data-slider="true" value="30000" data-slider-range="100000,200000000" data-slider-step="100000" data-slider-snap="true" id="la">
                                        <hr>
                                        <span>No. of Month is <strong>
                                            <span class="pull-right"  id="nm_value">30</span> </strong>
                                        </span>
                                        <input type="text" data-slider="true" value="30" data-slider-range="12,240" data-slider-step="1" data-slider-snap="true" id="nm">
                                        <hr>
                                        <span>Rate of Interest [ROI] is <strong><span class="pull-right"  id="roi_value">10</span>
                                        </strong>
                                        </span>
                                        <input type="text" data-slider="true" value="10.2" data-slider-range="6,16" data-slider-step=".5" data-slider-snap="true" id="roi">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-light pinside30 outline">
                                                EMI
                                                <h2 id='emi' class="pull-right"></h2>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <table id="loantable" class='table table-striped table-bordered loantable table-responsive'></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 <script type="text/javascript">
     

        $(document).ready(function(){
            $("#la").bind(
                "slider:changed", function (event, data) {
                    $("#la_value").html(data.value.toFixed(0));
                    calculateEMI();
                    $(this).attr('disabled', false);
                }
            );

        $("input").change(function () {
            $("#"+$(this).attr('id')+"_value").html($(this).val());
            calculateEMI();
            //$("#la").slider("value",500000);
            alert('dddddd');

        });
        
   
        

            $("#nm").bind(
                "slider:changed", function (event, data) {
                    $("#nm_value").html(data.value.toFixed(0));
                    calculateEMI();
                }
            );

            $("#roi").bind(
                "slider:changed", function (event, data) {
                    $("#roi_value").html(data.value.toFixed(2));
                    calculateEMI();
                }
            );

            function calculateEMI(){
                var loanAmount = $("#la_value").html();
                var numberOfMonths = $("#nm_value").html();
                var rateOfInterest = $("#roi_value").html();
                var monthlyInterestRatio = (rateOfInterest/100)/12;

                var top = Math.pow((1+monthlyInterestRatio),numberOfMonths);
                var bottom = top -1;
                var sp = top / bottom;
                var emi = ((loanAmount * monthlyInterestRatio) * sp);
                var full = numberOfMonths * emi;
                var interest = full - loanAmount;
                var int_pge =  (interest / full) * 100;
                $("#tbl_int_pge").html(int_pge.toFixed(2)+" %");
                //$("#tbl_loan_pge").html((100-int_pge.toFixed(2))+" %");

                var emi_str = emi.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                var loanAmount_str = loanAmount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                var full_str = full.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                var int_str = interest.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                $("#emi").html(emi_str);
                $("#tbl_emi").html(emi_str);
                $("#tbl_la").html(loanAmount_str);
                $("#tbl_nm").html(numberOfMonths);
                $("#tbl_roi").html(rateOfInterest);
                $("#tbl_full").html(full_str);
                $("#tbl_int").html(int_str);
                var detailDesc = "<thead><tr class='table-head'><th>Payment No.</th><th>Begining Balance</th><th>EMI</th><th>Principal</th><th>Interest</th><th>Ending Balance</th></thead><tbody>";
                var bb=parseInt(loanAmount);
                var int_dd =0;var pre_dd=0;var end_dd=0;
                for (var j=1;j<=numberOfMonths;j++){
                    int_dd = bb * ((rateOfInterest/100)/12);
                    pre_dd = emi.toFixed(2) - int_dd.toFixed(2);
                    end_dd = bb - pre_dd.toFixed(2);
                    detailDesc += "<tr><td>"+j+"</td><td>"+bb.toFixed(2)+"</td><td>"+emi.toFixed(2)+"</td><td>"+pre_dd.toFixed(2)+"</td><td>"+int_dd.toFixed(2)+"</td><td>"+end_dd.toFixed(2)+"</td></tr>";
                    bb = bb - pre_dd.toFixed(2);
                }
                    detailDesc += "</tbody>";
                    $("#loantable").html(detailDesc);

            }
            calculateEMI();

        });


     
     
 </script>
    <script src="{{ asset('frontend') }}/js/jquery-min.js"></script>
 @include('layouts.default.footer')
 



