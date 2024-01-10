@include('layouts.default.header')

<section id="blog" class="section">
      <!-- Container Starts -->
      @if(count($loans) > 0)
      <div class="container"> 
        <!-- Row Starts -->
        <div class="row">
          <div class="col-lg-12">
            <div class="sec-title text-center mb-40 mt-40">
                <h2 class="title mb-14">{{ $categoryTitle??'' }}</h2>
            </div>
          </div>
        </div>


        <div class="row">
          @foreach($loans as $data)
          <div class="col-md-4 col-lg-4 mb-4">
            <div class="full_box">
                <img src="{{ asset('loan/'.$data->icon) }}" alt="loan image" class="full_box_image">
                <div class="middle_box">
                    <a href="{{ route('loan.single.page', $data->id) }}"> <div class="middle_text">Apply Now</div></a>
                </div>
                <div class="event_details loan_details">
                    <ul>
                        <li>  <i class="fa fa-caret-right" aria-hidden="true"></i>  <span>  {{ $categoryTitle??'' }}</span></li>
                    </ul>
                    <b> {{ \Illuminate\Support\Str::limit($data->name, 40, $end='..') }}</b>
                </div>
            </div>
          </div>
          @endforeach
        </div>
        
        <div class="row text-center">
        {!!  $loans->links() !!}
        </div>

      </div>
      
      
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
        
      
      
      
</section>
@include('layouts.default.footer')