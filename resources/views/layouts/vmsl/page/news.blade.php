@include('layouts.default.header')

<style>
.sta p{line-height: 3px;}
.c_red{color:#eb1d25}
.sta strong{color:#008ccd;}
  .page-header{
        background: url(/uploads/images/news_banner.jpg) no-repeat center;
        padding: 131px 0px 80px;
    }

</style>

    <div class="page-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">News and Events</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <h1 class="page-title">News and Events</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content start -->



<div class="container-fluid mt-5 mb-5 sta">
    <div class="breaking_news">
        <div class="row">
           <div class="col-md-2">
               <div class="titl">  <strong>LATEST</strong></div>
            </div>
           <div class="col-md-10">
            <div class="js-conveyor-brekingnews">
                <ul>

                  @foreach($allData->take(10) as $data)
                    <li>
                      <a href="/news/{{ $data->id }}">
                        <span>{{$data->name}}</span>
                      </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    </li>
                  @endforeach
                </ul>
            </div>
           </div>

       </div>
   </div>
</div>

<div class="container-fluid news_nav">
    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist">
      <li class="nav-item active">
        <a class="nav-link " data-toggle="pill" href="#2020">2020</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#2019">2019</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#Archive">Archive</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="2020" class=" tab-pane fade in active"><br>
        @foreach($allData as $data)
        @if(date('y', strtotime($data->date_time)) == 20)
      <div class="row">
          <div class="col-md-1">
              <div class="calender mt-4">
                  <span class="date">{{date('d', strtotime($data->date_time))}}</span><br>
                  <span class="month">{{strToUpper(date('M', strtotime($data->date_time)))}}</span>
              </div>
          </div>
          <div class="col-md-11 media_main">
              <div class="media">
                  <img src="{{ asset('uploads/images/'.$data->thumbnail) }}"  class="mr-3 news_image" style="width:200px;">
                  <div class="media-body">
                    <h4>{{$data->name}}</h4>
                    <p>{!! \Illuminate\Support\Str::limit(strip_tags($data->details), 200, ' . . . ') !!}</p>
                  </div>
              </div>
              <p class="text-right"><a class="view_details" href="javascript:void(0);">View Details >></a></p>
              <div class="details_news">{!! $data->details !!}</div>
          </div>
      </div>
      <hr class="dashed">
      @endif
      @endforeach
      </div>
      <div id="2019" class="tab-pane "><br>
        @foreach($allData as $data)
          @if(date('y', strtotime($data->date_time)) == 19)
        <div class="row">
            <div class="col-md-1">
                <div class="calender mt-4">
                    <span class="date">{{date('d', strtotime($data->date_time))}}</span><br>
                    <span class="month">{{strToUpper(date('M', strtotime($data->date_time)))}}</span>
                </div>
            </div>
            <div class="col-md-11 media_main">
                <div class="media">
                    <img src="{{ asset('uploads/images/'.$data->thumbnail) }}"  class="mr-3 news_image" style="width:200px;">
                    <div class="media-body">
                      <h4>{{$data->name}}</h4>
                        <p>{!! \Illuminate\Support\Str::limit(strip_tags($data->details), 200, ' . . . ') !!}</p>
                    </div>
                </div>
                <p class="text-right"><a class="view_details" href="javascript:void(0);">View Details >></a></p>
                <div class="details_news">{!! $data->details !!}</div>
            </div>
        </div>
        <hr class="dashed">
        @endif
        @endforeach
      </div>
      <div id="Archive" class=" tab-pane fade"><br>
        @foreach($allData as $data)

      <div class="row">
          <div class="col-md-1">
              <div class="calender mt-4">
                  <span class="date">{{date('d', strtotime($data->date_time))}}</span><br>
                  <span class="month">{{strToUpper(date('M', strtotime($data->date_time)))}}</span>
              </div>
          </div>
          <div class="col-md-11 media_main">
              <div class="media">
                  <img src="{{ asset('uploads/images/'.$data->thumbnail) }}"  class="mr-3 news_image" style="width:200px;">
                  <div class="media-body">
                    <h4>{{$data->name}}</h4>
                      <p>{!! \Illuminate\Support\Str::limit(strip_tags($data->details), 200, ' . . . ') !!}</p>
                  </div>
              </div>
              <p class="text-right"><a class="view_details" href="javascript:void(0);">View Details >></a></p>
              <div class="details_news">{!! $data->details !!}</div>
          </div>
      </div>
      <hr class="dashed">
      @endforeach
      </div>


    </div>
  </div>

  <br><br><br><br><br>


@include('layouts.default.footer')
<script type="text/javascript" src="{{ asset('theme') }}/js/jquery.jConveyorTicker.min.js"></script>
<script>
    jQuery(function() {
      jQuery('.js-conveyor-brekingnews').jConveyorTicker({reverse_elm: true});
    });

    jQuery('.nav-link').on('click', function () {
        jQuery('.nav-link').removeClass('active');
       jQuery(this).addClass('active');
    });

    jQuery(document).on('click','.view_details',function(){

        if (jQuery(this).closest('.media_main').find('.news_image').hasClass('active')) {
            jQuery(this).closest('.media_main').find('.news_image').width('200px');
            jQuery(this).closest('.media_main').find('.news_image').removeClass('active');
        } else {
            jQuery(this).closest('.media_main').find('.news_image').width('100%');
            jQuery(this).closest('.media_main').find('.news_image').addClass('active');
        }



        jQuery(this).closest('.media_main').find('.details_news').toggle();
    });
</script>
