@include('layouts.default.header')
<style>
.fa-chevron-up{display: none;}
</style>

<?php $teamType = $allData['teamType']; $team = $allData['team']; ?>
<div class="container">
	<div class="row banner">
		 <img src="{{ url('/')}}/slider/teambanner.jpg" alt="Los Angeles" style="width:100%;object-fit:fil">
	</div>
</div>


{{--<section id="team_section">--}}
{{--	<div class="container"> --}}
{{--		<div class="row">--}}
{{--			<div class="col-2 col-sm-2 col-md-2 col-lg-2"></div>--}}
{{--			<div class="col-12 col-sm-8 col-md-8 col-lg-8 team" id="apply_section">--}}
{{--				<h1>OUR MANAGEMENT TEAM</h1>--}}
{{--				<p>Leading NHFIL is a pool of talented and experienced professionals, who have tested their expertise and proven their leadership in various industries.</p>--}}
{{--			</div>--}}
{{--			<div class="col-2 col-sm-2 col-md-2 col-lg-2"></div>--}}
{{--		</div>--}}
{{--	</div>--}}
{{--</section>--}}

<section id="team_nav_section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
			<div class="col-12 col-sm-11 col-md-11 col-lg-11 team_nav">
				<ul>
				    @foreach($teamType as $tt)
					<li id="{{$tt->id}}"><a href="javascript:void(0)">{{$tt->name}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</section>

<section id="member">
@foreach($team as $t)

	<div class="container single_member {{$t->type}}">
		<div class="row member">
			<div class="col-12 col-sm-2 col-md-2 col-lg-2">
				@if($t->image)
				<img src="{{ url('/')}}/uploads/images/{{$t->image}}" alt="member photo">
				@else
				<img src="/public/theme/images/default-avatar.gif" alt="member photo">
				@endif
			</div>
			<div class="col-10 col-sm-9 col-md-9 col-lg-9 team_diagnation_parent">
				<h3 class="member_name">{{$t->name}}</h3>
				<p class="diagnation team_diagnation"> <strong>{{$t->designation}}</strong> </p>
				<div class="member_divider mb-2"></div>

                <div class="member_dialuge_preview">
                    <h5>{{$t->representing}}</h5>
                    @php
                        $message = strip_tags(html_entity_decode($t->message));
                    @endphp
                    <div class="message">{{ \Illuminate\Support\Str::limit($message, 300, ' . . . ') }}</div>
                </div>

				<div class="member_dialuge">
					<h5>{{$t->representing}}</h5>
					<div class="message">{!! $t->message !!}</div>
				</div>
			</div>
			<div class="col-2">
				<i class="fa fa-chevron-down"></i>
				<i class="fa fa-chevron-up"></i>
			</div>
		</div>
	</div>
@endforeach

</section>



@include('layouts.default.footer')
<script>

	jQuery(document).on('click','.fa-chevron-down',function(){

        var section = jQuery(this).closest('.single_member');
        var preview = section.find('.member_dialuge_preview');
        var message = section.find('.member_dialuge');

        preview.hide();
        message.show();
        jQuery('.fa-chevron-up').show();
        jQuery('.fa-chevron-down').hide();
;
	});

	jQuery(document).on('click','.fa-chevron-up',function(){

        var section = jQuery(this).closest('.single_member');
        var preview = section.find('.member_dialuge_preview');
        var message = section.find('.member_dialuge');

        preview.show();
        message.hide();
        jQuery('.fa-chevron-up').hide();
        jQuery('.fa-chevron-down').show();
	});




	jQuery(document).on('click','#team_nav_section li',function(){
		jQuery('.single_member').hide();
		jQuery('#team_nav_section a').removeClass('active');
		jQuery('.'+jQuery(this).attr('id')).show();
		jQuery('#team_nav_section #'+jQuery(this).attr('id')+' a').addClass('active');
	});

</script>
<?php  if(isset($_GET['nav'])){
    echo '<script> jQuery(document).ready(function(){';
$tab = $_GET['nav'];
if($tab =='ec'){
    echo "jQuery('#2').trigger('click');jQuery('.2').show();";
}elseif($tab =='bod'){ echo "jQuery('#1').trigger('click');jQuery('.1').show();";}
elseif($tab =='ac'){ echo "jQuery('#4').trigger('click');jQuery('.4').show();";}
elseif($tab =='mc'){ echo "jQuery('#3').trigger('click');jQuery('.3').show();";}
elseif($tab =='exe'){ echo "jQuery('#5').trigger('click');jQuery('.5').show();";}
echo '})</script>';
}

?>
