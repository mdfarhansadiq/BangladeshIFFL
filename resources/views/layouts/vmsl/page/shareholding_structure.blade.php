@include('layouts.default.header')

<style>
.sta p{line-height: 3px;}
.c_red{color:#eb1d25}
.sta strong{color:#008ccd;}
  .page-header{
        background: url(/uploads/images/shareb.jpg) no-repeat center;
        padding: 131px 0px 80px;
    }


.owl-theme  .custom-nav {
    position: absolute;
    top: 20%;
    left: 0;
    right: 0;
}

.owl-theme  .owl-prev, .owl-theme  .owl-next {
    position: absolute;
    height: 100px;
    color: inherit;
    background: none;
    border: none;
    z-index: 100;
}

.owl-theme i {
    font-size: 2.5rem;
    color: #cecece;
}

.owl-prev {
    left: 0;
    background: none;
}

.owl-next {
    right: 0;
    background: none;
}

.owl-pagination {
    display: block;
}

.owl-theme .owl-controls .owl-buttons div {
    background: none;
}


</style>

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Shareholding Structure</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-9 col-sm-12 col-12">
                                <h1 class="page-title">Shareholding Structure</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content start -->
	 <div class="container mt-5 mb-5 sta">
		<img src="/uploads/images/share.jpg">
		<h2 class="c_red mt-5">Our Corporate Promoters</h2><br>

         <div class="owl-carousel promoters-carousel owl-theme">
             @forelse(\App\Models\Promoter::all() as $promoter)
             <div class="item mr-5"><a href="{{ $promoter->url }}"><img style="height: 150px" src="/uploads/images/{{ $promoter->image }}" alt=""></a></div>
             @empty
             @endforelse
         </div>

	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>


<script>
    $('.promoters-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoPlay:true,
        autoPlayTimeout:1000,
        pagination: false,
        navigation:true,
        navigationText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>"
        ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>


@include('layouts.default.footer')
