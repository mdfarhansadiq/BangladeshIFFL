@include('layouts.default.header')

<section id="download">
    <div class="banner_overlay">
        <div class="container">
            
        </div>
    </div>
</section>

<section id="etender_table">
    <div class="banner_overlay">
    <div class="container">
        
        @if(count($green_office) > 0)
        <div class="row mb-5">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-uppercase mt-3"> 
             <h3>Green Office</h3>
        </div>
        @foreach($green_office as $data)
         <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <h5 class="title disclosure_title">{{ $data->title }}</h5>
            <embed src="{{ '/uploads/files/'.$data->document }}" type="application/pdf" width="100%" height="600px">
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-right"> 
             <a href="/uploads/files/{{$data->document}}" download class="edit btn btn-primary downlaod_btn">Download</a>
        </div>
        @endforeach
        </div>
        @endif
        
    </div>
    </div>
</section>




@include('layouts.default.footer')