    <link href="{{ asset('frontend/default/js/owlcarousel/assets/owl.carousel.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('frontend/default/js/owlcarousel/owl.carousel.min.js') }}"></script>
<!--==========================
  Headline Section
============================-->

<!--
@if( $mode =='all')
<section id="headline" class="wow fadeInUp">
  
    <div class="owl-carousel headline-carousel">
      @foreach( $headline as $hl)     
        <div class="headline-item">         
           
          <img src="{{ $hl->image }}" alt="" lass="headline-img" >
          <div class="headline-info">
            <h3> {{ $hl->title }}</h3>
            <h4> {{ $hl->sinopsis }} </h4>
          </div>     
        </div>
      @endforeach
    </div>     
</section>
@else
  <div class="container">   
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item " ><a href="{{ url('') }}"> Home </a></li>
         <li class="breadcrumb-item " ><a href="{{ url('posts') }}"> Posts </a></li>
         <li class="breadcrumb-item " aria-current="page" > {{ $categoryDetail->name }} </li>
      </ol>
    </nav>

    <div class="section-header">
      <h2>  Category : {{ $categoryDetail->name }} </h2>
    </div>
  </div>
@endif 
-->

<section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container"> 
        <!-- Row Starts -->

        <div class="row">
          <div class="col-lg-12">
            <div class="sec-title text-center mb-40 mt-40">
                <h2 class="title mb-14">{{ $data->title }}</h2>
            </div>
          </div>
        </div>



        <div class="row rs-blog style1">
          @foreach($posts as $data)
          <div class="col-md-4 mb-4">
            <div class="blog-wrap">
                <div class="img-part">
                  <img src="{{ asset('uploads/images/posts/'.$data->image) }}" alt="">
                  <div class="fly-btn">
                      <a href="{{ url('posts/read/'.$data->updated_at) }}"><i class="flaticon-right-arrow"></i></a>
                  </div>
                </div>
                <div class="content-part">
                  <a class="categories">{{ $data->category }}</a>
                  <h3 class="title"><a>{{ \Illuminate\Support\Str::limit($data->title, 40, $end='..')  }}</a></h3>
                  <div class="blog-meta">
                      <div class="user-data">
                          <img src="{{ asset('uploads/users/'.$data->user->avatar) }}" alt="">
                          <span>{{ $data->user->first_name }}</span>
                      </div>
                      <div class="date">
                          <i class="fa fa-clock-o"></i> {{  date('d M Y', strtotime($data->date)) }}
                      </div>
                  </div>
                </div>
            </div>
          </div>
          @endforeach
        </div>
        
        <div class="row text-center" id="blog_pagination">
        {!!  $posts->links() !!}
        </div>
      </div><!-- Container Ends -->
    </section>



    <script type="text/javascript">
      $(function(){
        $("ul.pagination li a").addClass("page-link")

          // Testimonials carousel (uses the Owl Carousel library)
          $(".headline-carousel").owlCarousel({
            autoplay: true,
            dots: true,
            loop: true,
            responsive: { 0: { items: 1 }, 768: { items: 2 }, 900: { items: 3 } }
          });

      })
    </script>