

<section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container"> 
        <!-- Row Starts -->

        <div class="row">
          <div class="col-lg-12">
            <div class="sec-title text-center mb-40 mt-40">
                <h2 class="title mb-14">CSR</h2>
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
