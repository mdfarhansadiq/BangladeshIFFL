@section('title','Downloads')
@include('layouts.default.header')
 <style>
    .page-header{
        background: url(/uploads/images/corporate.jpg) no-repeat center;
        padding: 131px 0px 80px;
    }
    .media {
		background: #fff;
		padding: 20px;
		margin-bottom: 20px;
		box-shadow: 2px 5px 6px 1px #ececec;
	}
	.media img {
		width: 120px;
	}
</style>

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Strategic Partners</li>
                        </ol>
                    </div>
                </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-4">
                                <h1 class="page-title">Strategic Partners</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="">
            @foreach ($allData as $data)
				<div class="media">
				  <img class="mr-3" src="/uploads/images/{{$data->logo}}" alt="image">
				  <div class="media-body">
					<h5 class="mt-0">{{$data->name}}</h5>
					{!! $data->details !!}
				  </div>
				</div>
            @endforeach
        </div>
    </div>
 @include('layouts.default.footer')