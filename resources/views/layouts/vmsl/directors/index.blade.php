@include('layouts.default.header')
<style>
.no_content{
    text-align: center;
    margin: 100px;
    color: #cc0606;
    text-transform: uppercase;
}
.title_bod{
    text-transform: uppercase;
    color: #cc0606;
    border-bottom: 2px solid #0087ca;
}
</style>
@if(count($allData) == 0)
	<h2 class="no_content">No Content Available!</h2>
@else

    @foreach( $allData as $data)
        <div class="container mb-5 mt-5">
                <h2 class="title_bod mb-3">{{$data->name}}</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img src="/uploads/images/{{$data->image}}" alt="" class="bod_img mb-3">
                        <p>{{$data->designation}}<br>{{$data->representing}}</p>
                    </div>
                    <div class="col-md-8">
                            {!! $data->message !!}
                    </div>
                </div>
        </div>
    @endforeach
        
@endif
@include('layouts.default.footer')