@include('layouts.default.header')
  
  
  @if($eventSingle)
  
  
  <div class="container">   
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item " ><a href="{{ url('') }}"> Home </a></li>
         <li class="breadcrumb-item " >News and Event</li>
        <li class="breadcrumb-item active" aria-current="page"> {{ $eventSingle->title }} </li>
      </ol>
    </nav>
  </div>  

<section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">         
        <!-- Row Starts -->
        <div class="row">  
            <div class="col-md-8" id="blog_left_section">
                <div class="blog_big_image">
                  @if(file_exists('uploads/images/event/'.$eventSingle->image) )
                  <img src="{{ asset('uploads/images/event/'.$eventSingle->image) }}" alt="" class="img-responisve">
                  @else
                  <img src="{{ asset('uploads/images/no-image.png') }}" alt="" class="img-responisve">
                  @endif
                </div>   
                <h4> {{ $eventSingle->title }}</h4>
                <div class="" style="margin: 0px 0 20px;">   
                  <div class="section-tool text-left ">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>  <span>  {{ $eventSingle->location }}  </span>  
                      <i class="fa fa-clock-o" aria-hidden="true"></i> <span> {{ date("M j, Y " , strtotime($eventSingle->date_time)) }} </span> 
                  </div>
                 {!! PostHelpers::formatContent($eventSingle->description) !!}  
                </div> 
             
            </div>
            <div class="col-md-4">
                <div class="widget" id="blog_widget">
                    <div class="widget-title">
                        <h4 class="title"> Latest Events</h4>
                    </div>
                    <div class="w-lists">
                    @foreach($latest as $data)
                        <div class="row mb-4">
                            <div class="col-md-3 image-thumb ">
                            <a href="{{ route('event.single', $data->add_info) }}">
                                {{-- <img src="{{ $data->image }}" alt=""  > --}}
                                @if(file_exists('uploads/images/event/'.$data->image) )
                                <img src="{{ asset('uploads/images/event/'.$data->image) }}" alt="" class="img-responisve">
                                @else
                                <img src="{{ asset('uploads/images/no-image.png') }}" alt="" class="img-responisve">
                                @endif
                            </a>
                            </div>
                            <div class="col-md-8 pl-0">
                                <a href="{{ route('event.single', $data->add_info) }}"> <h6> {{ \Illuminate\Support\Str::limit($data->title, 55, $end='..') }} </h6> </a>      
                                <div class="info ">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>  <span>  {{ $data->location }}  </span>  
                                    <br>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i> <span> {{ date("M j, Y " , strtotime($data->date_time)) }} </span> 
                                </div>
                            </div>
                        </div> 
                    @endforeach
                    </div>
                </div> 
            </div>
         </div> 
        </div><!-- Row Ends -->

      </div><!-- Container Ends -->
    </section>
    
    
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