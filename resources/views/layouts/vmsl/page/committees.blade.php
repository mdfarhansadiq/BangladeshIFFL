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
	.table-bordered td, .table-bordered th {
        border: none !important;
    }
    .table tr{
            border-bottom: 1px solid #e3e3e3;
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
    <div class="container mt-3 mb-2">
        
      <h4>(Not in the order of seniority)</h4>
        
      <table class="table table-bordered table-responsive comitee_border" style="width:100%;">
        <thead>
          <tr>
            <!--<th style="width:10%;">No</th>-->
            <!--<th style="width:20%;">Position</th>-->
            <!--<th style="width:30%;">Name</th>-->
            <!--<th style="width:40%;">Designation</th>-->
          </tr>
        </thead>
        <tbody>
            
        @foreach($companyExecutives as $data)
          <tr>
            <!--<td>{{ $loop->iteration }}</td>-->
            <td>{{ $data->position }}</td>
            <td>   </td>
            <td>   </td>
            <td>   </td>
            <td>   </td>
            <td>   </td>
            <td>   </td>
            <td>   </td>
            <td>   </td>
            <td>
                <b>{{ $data->name }}</b>
                <br>
                {{ $data->designation }}
            </td>
            
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
