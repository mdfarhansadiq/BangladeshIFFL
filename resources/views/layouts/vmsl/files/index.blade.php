@section('title','Downloads')
@include('layouts.default.header')
 <style>
    .page-header{
        background: url(/uploads/images/downloads.jpg) no-repeat center;
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
                            <li class="active">{{$allData['title']}}</li>
                        </ol>
                    </div>
                </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-4">
                                <h1 class="page-title">{{$allData['title']}}</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

	<?php if(count($allData['doc']) == 0){
		echo '<p class="container mt-5 mb-5 text-danger">No documents available now. We will update this soon.<p>';
	} ?>
    <div class="container mt-5">
        <ul class="downloads_item">
            @foreach ($allData['doc'] as $data)
            <li><i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;<a target="_blank" href="/uploads/files/{{$data->pdf_link}}">{{$data->name}}<a></li>
            @endforeach
        </ul>
    </div>

@if($allData['title'] == 'AGM')
    <div class="container my-5">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/IX29-7HIq08"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
@endif

 @include('layouts.default.footer')
