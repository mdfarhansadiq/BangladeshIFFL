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
								<p>Outsiders often have an event that an insider doesn't quite have. It’s as basic as this, If you need to be altogether educated about all that is making news and all that is not in the nation, read up!<p>

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
    <div class="row">
        <div class="col-md-1">
            <div class="calender mt-4">
                <span class="date">{{date('d', strtotime($news->date_time))}}</span><br>
                <span class="month">{{strToUpper(date('M', strtotime($news->date_time)))}}</span>
            </div>
        </div>
        <div class="col-md-11 media_main">
            <div class="media">
                <img src="{{ asset('uploads/images/'.$news->thumbnail) }}"  class="mr-3" style="width:100%;">
                <div class="media-body">
                    <h4>{{$news->name}}</h4>
                    <p>{!! $news->details !!}</p>
                </div>
            </div>
{{--            <p class="text-right"><a class="view_details" href="javascript:void(0);">View Details >></a></p>--}}
            <div class="mt-5">{!! $news->details !!}</div>
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
    //
    // jQuery(document).on('click','.view_details',function(){
    //     jQuery(this).closest('.media_main').find('.details_news').toggle();
    // });
</script>
