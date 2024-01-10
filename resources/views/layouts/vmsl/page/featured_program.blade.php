@include('layouts.default.header')
<div class="container">
	<div class="row banner">
		 <img src="{{ url('/')}}/public/slider/teambanner.jpg" alt="Los Angeles" width="100%" height="400">
	</div>
</div>
<section id="team_section">
	<div class="container"> 
		<div class="row">
			<div class="col-2 col-sm-2 col-md-2 col-lg-2"></div>
			<div class="col-12 col-sm-8 col-md-8 col-lg-8 team" id="apply_section">
				<h1>FEATURED PROGRAMS</h1>
				<p>Find out what your future with us looks like</p>
			</div>
			<div class="col-2 col-sm-2 col-md-2 col-lg-2"></div>
		</div>
	</div>
</section>

<section id="team_nav_section">
	<div class="container"> 
		<div class="row">
			<div class="col-12 col-sm-2 col-md-2 col-lg-2"></div>
			<div class="col-12 col-sm-10 col-md-10 col-lg-10 team_nav">
				<ul>
					<li><a href="#">EXPERIENCED PROFESSIONALS</a></li>
					<li><a href="#">GRADUATE PROGRAMS</a></li>
					<li><a href="#">INTERNSHIP</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>


<section id="expertise"> 
	<div class="container" id="programs_section">
		<div class="row" id="program_img">
			<div class="col-12 col-sm-6 col-md-6 col-lg-6">
				<img src="{{ url('/') }}/public/frontend/pages/pro1.jpg" alt="">
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-6">
				<h4>Help us grow with your expertise</h4>
				<p>We are always looking for people with a drive to succeed, a need for excellence, and who understands the power of leadership, teamwork and integrity.
				Whether you are at a turning point of your career or looking to take the next step, we have a role for you. Regardless of your background, we have the people, training and culture to help you build on your expertise and create an impact.
				As an experienced professional, you will get a chance to learn from and work with some of the most experienced people in the industry and make meaningful contributions to the economy – for a company that values individual merit just as much as teamwork.</p>
				<button href="#" type="button" class="myapplybtn">APPLY NOW ></button>
			</div>
		</div>
	</div>
</section>

<section id="here_from_us">
	<div class="container">
		<div class="row">
			<div class="col-md-12"><h5>HEAR FROM US</h5></div>
		</div>
		<div class="row single_we">
			<div class="col-12 col-sm-4 col-md-4 col-lg-4">
				<img src="{{ url('/') }}/public/frontend/pages/pro2.jpg" alt="">
			</div>
			<div class="col-12 col-sm-8 col-md-8 col-lg-8 our_info">
				<p>“I have found IDLC as an employer that cares for employees and appreciate & does justice 	for every effort. And all the people in IDLC are awesome and incredibly supportive in each respect”
				</p>
				<span>Adnan Rashid, AGM, Credit-SEF, Credit Risk Management</span>
			</div>
		</div>
		<div class="row single_we">
			<div class="col-12 col-sm-4 col-md-4 col-lg-4">
				<img src="{{ url('/') }}/public/frontend/pages/pro3.jpg" alt="">
			</div>
			<div class="col-12 col-sm-8 col-md-8 col-lg-8 our_info">
				<p>“Exemplary corporate culture of IDLC that is reflected in mutual respect and cooperation among the colleagues, recognition and appreciation for efforts, open door policy which allows easy access to the senior management, has always created an enabling environment for me to take on exciting challenges and accomplish tasks effectively. I firmly believe, the culture that been instilled over the years will help IDLC grow stronger to be the most admired financial brand in the country”</p>
				<span>Sabbir Ahmad, Manager, Treasury</span>
			</div>
		</div>

	</div>
</section>


@include('layouts.default.footer') 