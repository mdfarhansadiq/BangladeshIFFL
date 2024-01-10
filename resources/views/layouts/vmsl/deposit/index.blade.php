@section('title', 'Deposits')
@include('layouts.default.header')

      <div class="page-header">
        <div class="container">
            <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Deposit Schemes</li>
                        </ol>
                    </div>
                </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="bg-white pinside30">
                        <div class="row">
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h1 class="page-title">Deposit Schemes</h1>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>  

@if(count($allData) == 0)
	<h2 class="no_content">No Content Available!</h2>
@else

    <div class="deposit">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="row">
						@foreach( $allData as $data)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="post-block mb30">
                                    <div class="post-img">
                                        <a href="/deposit-schemes/{{$data->id}}" class="imghover"><img src="/uploads/images/{{$data->thumbnail}}" alt="Deposit Image" class="img-fluid"></a>
                                    </div>
                                    <div class="bg-white pinside40 outline">
                                        <h2><a href="/deposit-schemes/{{$data->id}}" class="title">{{$data->name}}</a></h2>
                                        <p>{{$data->short_description}}</p>
                                        <a href="/deposit-schemes/{{$data->id}}" class="btn-link">Read More</a> </div>
                                </div>
                            </div>
							@endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@include('layouts.default.footer')