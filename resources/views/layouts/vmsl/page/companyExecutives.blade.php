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
	.table-responsive td{
	    
        vertical-align: middle;
	}
	.table-responsive thead tr{
	    text-align: center;
	}
</style>
@if(count($companyExecutives) > 0)
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h3 class="m-0 p-5 text-uppercase"> {{ $category->name??'' }} </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
        $Phone = DB::table('website_design')->where('title', 'LIKE', "%Company Executives Phone Number%")->first();
        $PABX = DB::table('website_design')->where('title', 'LIKE', "%Company Executives PABX Number%")->first();
        $Email = DB::table('website_design')->where('title', 'LIKE', "%Company Executives Email%")->first();
        
    @endphp
    
   
    <div class="container mt-3 mb-2">
         <h4>(Not in the order of seniority)</h4>
      <table class="table table-bordered table-responsive" style="width: 100%">
        <thead>
          <tr>
            <!--<th>No</th>-->
            <th>Name</th>
            <th>Designation</th>
            @if($Email->status == 1)
                <th>Email</th>
            @endif
             
            @if($Phone->status == 1)
                <th>Mobile Number</th>
            @endif
            
            @if($PABX->status == 1)
                <th>PABX Number</th>
            @endif
            
          </tr>
        </thead>
        <tbody>
            
        @foreach($companyExecutives as $data)
          <tr>
            <!--<td>{{ $loop->iteration }}</td>-->
            <td><b>{{ $data->name }}</b></td>
            <td>{{ $data->designation }}</td>
            @if($Email->status == 1)
                <td> 
                    @php
    
                    
                    
                    
                        $text = $data->email;
                        $my_img = imagecreate(250, 80 );
                        $background = imagecolorallocate( $my_img, 255, 255, 255 );
                        $text_colour = imagecolorallocate( $my_img, 0, 0, 0 );
            
                        imagestring($my_img, 4, 30, 25, $text, $text_colour );
                        imagesetthickness ($my_img, 1);
                        
                        imageline($my_img, 30, 45, 165, 45);
                        
                        
                        header( "Content-type: image/png" );
                        
                        ob_start();
                        imagepng($my_img);
                        $imagedata = ob_get_contents();
                        ob_end_clean();
                        
                        $imagedata = base64_encode($imagedata);
                        
                        echo '<img class="texttoimage" src="data:image/png;base64,' . $imagedata . '" alt="Image" />';
    
    
                       
                    @endphp
                </td>
             @endif
             
            @if($Phone->status == 1)
                <td>@if($data->phone != 0) {{ $data->phone }} @endif</td>
            @endif
            
            @if($PABX->status == 1)
                <td class="pabx_no">@if($data->pabx_number != 0) {{ $data->pabx_number }} @endif</td>
            @endif
          </tr>
        @endforeach
        </tbody>
      </table>
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
    
 @include('layouts.default.footer')
