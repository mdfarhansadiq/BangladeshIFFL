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
</style>

<div class="page-header" id="complain-cell">
    <div class="container">
        <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3 class="m-0 p-5 text-uppercase">COMPLAIN CELL</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<div class="container">
    @foreach($category as $d)
    <div class="row single_category_row">
        <div class="col-md-12">
            <div class="title_heading">
                <h3 class="mb-2"> {{ $d->title }}  </h3>
                <p> {{ $d->description }} </p>
            </div>
        </div>
        
        @php
            $members = \DB::table('vmsl_complain_cell')->where('category', $d->id)->where('status', 1)->orderBy('id', 'DESC')->get();
        @endphp
        @foreach($members as $data)
            <div class="col-md-6">
                <div class="single_category">
                    <ul>
                        @if($data->designation) <li> <h5> {{ $data->designation }}</h5> </li> @endif
                        @if($data->branch) <li> <b>Branch: </b> {{ $data->branch }} </li> @endif
                       @if($data->name) <li> <b>Name: </b> {{ $data->name }} </li> @endif
                       @if($data->address) <li> <b>Address: </b> {{ $data->address }} </li> @endif
                       @if($data->phone) <li> <b>Phone: </b> {{ $data->phone }} </li> @endif
                       @if($data->email) <li> <b>Email: </b> {{ $data->email }} </li> @endif
                       
                       
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
    @endforeach
    
    
</div>




 

 @include('layouts.default.footer')
