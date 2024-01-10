@include('layouts.default.header')
<style>
.active{
    width:1148px !important;
}
.team-image img{
    height: 350px;
    width: 100%;
    object-fit: contain;
    background: #f3f3f3;    
}
.owl-nav{
    display:none !important;
}
@media only screen and (max-width: 991px){
.sec-title {
    margin-top: 10px;
}
}

#TeamModal {
    top: 55px !important;
    height: 95% !important;

}

</style>

    <!-- Team Section Start -->
    <div class="rs-team slider1 pt-50 pb-92 md-pt-72 md-pb-50">
        

        
        @if(count($teams) > 0)
        <div class="container ourTeam">
            <div class="sec-title text-center mb-20 md-mb-42">
                <h2 class="title mb-14">{{ $type_title }}</h2>
            </div>
            <div class="rs-carousel dot-style1">
          
                
                @foreach($teams as $data)
                @if($data->priority == 1)
                <div class="row chair_man_responsive">
                    <div class="col-12 col-sm-12 col-md-4"></div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <div  class="team-wrap chairman" @if(strlen(strip_tags($data->message)) > 1) onclick="getSingleMemberDescription({{$data->id}})" @endif>
                            <div class="team-image">
                                <img src="{{ asset('uploads/images/team/'.$data->image) }}" alt="Team Image">
                            </div>
                            <div class="text-bottom">
                                <h4 class="person-name"><a>{{ $data->name }}</a></h4>
                                <span class="designation pb-2">{{ $data->designation }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4"></div>
                </div>
                @endif
                @endforeach
          
          
                <div class="row">
                @foreach($teams as $data)
                @if($data->priority > 1)
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="team-wrap team_diagnation_parent" @if(strlen(strip_tags($data->message)) > 1) onclick="getSingleMemberDescription({{$data->id}})" @endif>
                    <div class="team-image">
                        <img src="{{ asset('uploads/images/team/'.$data->image) }}" alt="Team Image">
                    </div>
                    <div class="text-bottom">
                        <h4 class="person-name"><a>{{ $data->name }}</a></h4>
                        <span class="designation team_diagnation pb-2">{{ $data->designation }}</span>
                        <!--<div class="social-links">-->
                        <!--    <ul>-->
                        <!--        @if($data->facebook) <li><a href="{{$data->facebook}}"><i class="fa fa-facebook"></i></a></li> @endif -->
                        <!--        @if($data->twitter) <li><a href="{{$data->twitter}}"><i class="fa fa-twitter"></i></a></li> @endif -->
                        <!--        @if($data->pinterest) <li><a href="{{$data->pinterest}}"><i class="fa fa-pinterest-p"></i></a></li> @endif -->
                        <!--        @if($data->linkedin) <li><a href="{{$data->linkedin}}"><i class="fa fa-linkedin"></i></a></li> @endif -->
                        <!--        @if($data->instagram) <li><a href="{{$data->instagram}}"><i class="fa fa-instagram"></i></a></li> @endif -->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                </div>
                </div>
                @endif
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
    
  <!-- Achievenent Modal start -->
  <button type="button" class="btn btn-primary TeamModal" data-toggle="modal" data-target="#TeamModal">
    Open modal
  </button>
  <div class="modal fade" id="TeamModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Description</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <p class="description"></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Achievenent Modal End -->
  

  
    
<script type="text/javascript">
    function getSingleMemberDescription(id) {





    $.ajax({
        type: "GET",
         url: "/member-details/"+id,
        success: function(data){
            if(data){
                $('.description').html(data.description);
                $('.TeamModal').trigger('click');
            }

        }
    });





    }
</script>
    

@include('layouts.default.footer')