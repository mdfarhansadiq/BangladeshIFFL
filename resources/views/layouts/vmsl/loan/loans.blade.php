@include('layouts.default.header')

<section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container"> 
        <!-- Row Starts -->

        <div class="row">
          <div class="col-lg-12">
            <div class="sec-title text-center mb-40 mt-40">
                <h2 class="title mb-14">Our Loans</h2>
                <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
            </div>
          </div>
        </div>


        <div class="row">
          @foreach($loans as $data)
          <div class="col-md-4 col-lg-4 mb-4">
            <div class="full_box loan_box">
                <img src="{{ asset('loan/'.$data->icon) }}" alt="loan image" class="full_box_image">
                <div class="middle_box">
                    <a href="{{ route('loan.single.page', $data->id) }}"> <div class="middle_text">Apply Now</div></a>
                </div>
                <div class="event_details loan_details">
                    <ul>
                        <li>  <i class="fa fa-caret-right" aria-hidden="true"></i>  <span>  {{ $data->category_title }}</span></li>
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
    </section>
@include('layouts.default.footer')