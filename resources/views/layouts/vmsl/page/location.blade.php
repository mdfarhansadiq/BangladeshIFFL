@section('title', 'Loans')
@include('layouts.default.header')
<style>
.pageinside{
    padding: 50px;
}
.back_ground_white{
    background: #fff;
    padding: 20px;
    margin-bottom: 10px;
}
</style>
<section class="location_head">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="420" id="gmap_canvas" src="https://maps.google.com/maps?q=nhfil&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com">whatismyip-address.com</a></div><style>.mapouter{position:relative;text-align:right;height:420px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:420px;width:100%;}</style></div>
            </div>
            <div class="col-md-6">
                <div class="pageinside">
                    <h2>Corporate Head Office</h2>
                    <h3>Concord Baksh Tower (7th floor)</h3>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Plot: 11-A, Road No.- 48, Block- CWN (A)<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;Gulshan- 2, Dhaka- 1212<br>
                        <i style="color:inherit" class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;Phone : +88 09609 200555<br>
                        <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;email: info@nationalhousingbd.com</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 mb-5">
        @foreach( $allData as $data)
        <div class="back_ground_white">
            <div class="row">
                <div class="col-md-6">
                    {!! $data->name !!}
                    {!! $data->details !!}
                </div>
                <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-right">
                                    @if($data->manager_image)
                                    <img style="width: 170px; margin-top: 15px;" src="/uploads/images/{{$data->manager_image}}"/>
                                    @else
                                    <img style="width: 170px; margin-top: 15px;" src="/public/theme/images/default-avatar.gif"/>
                                    @endif

                                </p>
                            </div>
                            <div class="col-md-6">
                                {!! $data->manager_details !!}
                            </div>
                        </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>

</section>

@include('layouts.default.footer')
