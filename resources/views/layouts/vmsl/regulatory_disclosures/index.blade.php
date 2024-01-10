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
                            <li class="active">Regulatory Disclosures</li>
                        </ol>
                    </div>
                </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-4">
                                <h1 class="page-title">Regulatory Disclosures</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <ul class="downloads_item">
            @foreach ($allData as $data)
            <li><i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;<a target="_blank" href="/uploads/files/{{$data->pdf_link}}">{{$data->name}}<a></li>
            @endforeach
        </ul>
    </div>
 @include('layouts.default.footer')