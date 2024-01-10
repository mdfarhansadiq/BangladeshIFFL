@include('layouts.default.header')

<section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container"> 
        <!-- Row Starts -->

        <div class="row">
          <div class="col-lg-12">
            <div class="sec-title text-center mb-40 mt-40">
                <h2 class="title mb-14">Bongobondhu Corner</h2>
                
            </div>
          </div>
        </div>



        <div class="row">
          @foreach($latest as $data)
          <div class="col-md-3 col-lg-3 mb-4">
           <a href="{{ route('event.single', $data->add_info) }}"> 
                <div class="event">
                    <div class="thumb-text2">
                        <div class="event_date">{{ date('d', strtotime($data->date_time)) }}</div>
                        <div class="event_month">{{ date('M', strtotime($data->date_time)) }}</div>
                    </div>
                    <div class="event_image event_image event_list_page">
                        <img src="{{ asset('uploads/images/event/'.$data->image) }}" alt="">
                    </div>
                    <div class="event_details">
                        <ul>
                            <li>  <i class="fa fa-map-marker" aria-hidden="true"></i>  <span>  {{ $data->location }}</span></li>
                            <li class="right_li">  <i class="fa fa-clock-o" aria-hidden="true"></i> <span> {{ date("M j, Y " , strtotime($data->date_time)) }}</span></li>
                        </ul>
                        <b> {{ \Illuminate\Support\Str::limit($data->title, 45, $end='..') }}</b>
                    </div>
                </div>
            </a> 
          </div>
          @endforeach
        </div>
        
        <div class="row text-center">
        {!!  $latest->links() !!}
        </div>

      </div>
    </section>
@include('layouts.default.footer')