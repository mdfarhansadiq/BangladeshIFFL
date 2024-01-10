@section('title','Downloads')
@include('layouts.default.header')
 <style>
    .page-header{
        background: url(/uploads/images/financial.jpg) no-repeat center;
        padding: 131px 0px 80px;
    }
    .downloads_item li{list-style: none}
    .downloads_item {padding: 0;}
</style>

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Financial Reports</li>
                        </ol>
                    </div>
                </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-4">
                                <h1 class="page-title">Financial Reports</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


	
	<div class="container mb-5 mt-5">
		  <ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
			  <a class="nav-link active" data-toggle="tab" href="#home">Annual Financial Statements</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" data-toggle="tab" href="#menu1">Annual Reports</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" data-toggle="tab" href="#menu2">Half Yearly/Quarterly Reports</a>
			</li>
      </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
			<div id="home" class="container tab-pane active"><br>
        <ul class="downloads_item">
            @foreach ($allData['annualFinance'] as $data)
            <li><i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;<a target="_blank" href="/uploads/files/{{$data->pdf_link}}">{{$data->name}}<a></li>
            @endforeach
        </ul>
      </div>
      

      <div id="menu1" class="container tab-pane fade"><br>
        <ul class="downloads_item">
            @foreach ($allData['annualReport'] as $data)
            <li><i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;<a target="_blank" href="/uploads/files/{{$data->pdf_link}}">{{$data->name}}<a></li>
            @endforeach
        </ul>
      </div>
       
      <div id="menu2" class="container tab-pane fade"><br>
        <ul class="downloads_item">
            @foreach ($allData['halfQuater'] as $data)
            <li><i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;<a target="_blank" href="/uploads/files/{{$data->pdf_link}}">{{$data->name}}<a></li>
            @endforeach
        </ul>
      </div>
      
</div>
</div>
	
	
	
 @include('layouts.default.footer')