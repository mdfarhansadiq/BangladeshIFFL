@include('layouts.default.header')
<style>
.active{
    width:1148px !important;
}
.team-image img{
    height: 270px;
    width: 100%;
    object-fit: contain;
    background: #f3f3f3;    
}
.owl-nav{
    display:none !important;
}
.mymodal{
    display:none !important;
}
.modal-content p{
    margin-bottom:10px;
}
</style>


  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary mymodal" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <p> <b>	Institution:</b> <span class="institution"></span> </p>
            <p> <b>	Providoor:</b> <span class="providoor"></span> </p>
            <p> <b>	Date:</b> <span class="date"></span> </p>
            <p class="description"></p>
        </div>
      </div>
    </div>
  </div>


    <!-- Team Section Start -->
    <div class="rs-team slider1 pt-50 pb-92 md-pt-72 md-pb-50">
        

        
        @if(count($achievement) > 0)
        <div class="container" id="achivement_page">
            <div class="sec-title text-center mb-20 md-mb-42">
                <h2 class="title mb-14">{{ $type_title }}</h2>
            </div>
            <div class="rs-carousel dot-style1">
          
                <div class="row">
                @foreach($achievement as $data)
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-3">
                <div class="single_achievment zigzag">
                    <div class="achievement_image">
                        <img src="{{ asset('uploads/images/achievement/'.$data->thumbnail) }}" alt="achievement">
                    </div>
                    <div class="achievement_details getsingleAchievement" data-getsingleAchievement="{{$data->id}}">
                        Details
                    </div>
                </div>
                </div>
                @endforeach
                </div>

              
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
        
        
        
    </div>
    <!-- Team Section End -->
<script>
    $(document).on('click', '.getsingleAchievement', function(){
        var id = $(this).attr('data-getsingleAchievement');
        $.ajax({
            url: "/achievement-details/"+id,
            type: "get",
            success: function(response) {
                $('.mymodal').trigger('click');
                $('.modal-title').text(response.title);
                $('.providoor').text(response.providoor);
                $('.institution').text(response.institution);
                $('.description').text(response.description);
                //$('.date').text(new Date(response.date).toLocaleString());
                
                
            function dateToYMD(date) {
                var strArray=['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                var d = date.getDate();
                var m = strArray[date.getMonth()];
                var y = date.getFullYear();
                return '' + (d <= 9 ? '0' + d : d) + ' ' + m + ', ' + y;
            }
       
            var date = dateToYMD(new Date(response.date)); // Nov 5
                
            $('.date').text(date);  
                
            }
        });
    });
</script>
@include('layouts.default.footer')