
@include('layouts.default.header')

<section id="search_page_section">
    <div class="container">
        
        @if($haveData > 0)
        @if(count($loans) > 0)
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-12 text-center"><h3>Our Loans</h3></div>
            @foreach($loans as $loan)
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-4">
                <div class="full_box">
                    <img src="/loan/{{ $loan->icon }}" alt="loan image" class="full_box_image">
                    <div class="middle_box">
                        <a href="/loans/{{ $loan->interest_rate }}"> <div class="middle_text">Read More</div></a>
                    </div>
                    <div class="event_details loan_details">
                        <ul>
                            <li>  <i class="fa fa-caret-right" aria-hidden="true"></i><span>{{ $loan->category_title }}</span></li>
                        </ul>
                        <b> {{ $loan->name }}</b>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        
        @if(count($services) > 0)
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-12 text-center"><h3>Our Services</h3></div>
            @foreach($services as $data)
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-4">
                <div class="full_box">
                    <img src="/uploads/images/services/{{ $data->image }}" alt="loan image" class="full_box_image">
                    <div class="middle_box">
                        <a href="/service/{{ $data->add_info1 }}"> <div class="middle_text">Read More</div></a>
                    </div>
                    <div class="event_details loan_details">
                        <b> {{ $data->title }}</b>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        
        @if(count($careers) > 0)
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-12 text-center"><h3>Careers</h3></div>
            @foreach($careers as $c)
                <div class="job_item" id="search_jobitem">
				    <div class="row">
						<div class="col-3 col-sm-2 col-md-2 col-lg-2">
							<p class="text-center"><span class="serial_text">{{($key+1)}}</span></p>
						</div>
						<div class="col-9 col-sm-6 col-md-6 col-lg-6">
							<p class="post_title text-uppercase"> <b>{{ strtoupper($c->title) }}</b></p>
							<ul class="career_date">
								<li> <b>Post Date:</b> {{ date('d M, Y', strtotime($c->post_date)) }} </li>
								<li> <b>End Date:</b> {{ date('d M, Y', strtotime($c->end_date))}}</li>
							</ul>
							
						</div>
						<div class="col-6 col-sm-2 col-md-2 col-lg-2 text-right pr-0">
							<a class="apply_button button" href="{{asset('uploads/files/'.$c->circular_file) }}"><span>View circular</span></a>
						</div>
						<div class="col-6 col-sm-2 col-md-2 col-lg-2">
						<a target="__blank" class="apply_button button" href="{{ $c->add_info2 }}"><span>apply now</span></a>
						</div>
					</div>
			   </div>
            @endforeach
        </div>
        @endif
        
        
        
        
        @if(count($events) > 0)
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-12 text-center"><h3>News and Events</h3></div>
            @foreach($events as $data)
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-4">
                    <div class="full_box">
                        <img src="/uploads/images/event/{{$data->image}}" alt="loan image" class="full_box_image">
                        <div class="middle_box">
                            <a href="/event/single/{{$data->add_info}}"> <div class="middle_text">Read More</div></a>
                        </div>
                        <div class="event_details loan_details">
                            <ul>
                                <li>  <i class="fa fa-caret-right" aria-hidden="true"></i><span>{{$data->location}}</span></li>
                            </ul>
                            <b> {{\Illuminate\Support\Str::limit($data->title, 30, $end='..')}} </b>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif
        
        
        @if(count($projects) > 0)
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-12 text-center"><h3>Our Projects</h3></div>
            @foreach($projects as $data)
            @php $category = \DB::table('vsml_project_category')->where('id', $data->category)->select('image')->first(); @endphp
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4 search_page_link">
                <a href="/projects/{{$category->image}}">{{$data->title}}</a>
            </div>
            @endforeach
        </div>
        @endif
        
        
        @if(count($reports) > 0)
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-12 text-center"><h3>Our Reports</h3></div>
            @foreach($reports as $data)
            @php $category = \DB::table('vsml_report_category')->where('id', $data->category)->select('image')->first(); @endphp
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-4 search_page_link">
                <a href="/reports/{{$category->image}}">{{$data->title}}</a>
            </div>
            @endforeach
        </div>
        @endif
        
        
        @if(count($guidelines) > 0)
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-12 text-center"><h3>Policy and Guideline</h3></div>
            @foreach($guidelines as $data)
            @php $category = \DB::table('vsml_guidelines_category')->where('id', $data->category)->select('description')->first(); @endphp
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-4 search_page_link">
                <a href="/policy-and-guidelines/{{$category->description}}">{{$data->title}}</a>
            </div>
            @endforeach
        </div>
        @endif
        
    
        @if(count($leadership) > 0)
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-12 text-center"><h3>Leadership and Committees</h3></div>
            @foreach($leadership as $leader)
                 @if($leader->image == 'advisory-board' || $leader->image == 'board-of-directors')
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-4 search_page_link">
                        <a href="/corporate-governance/{{$leader->image}}">{{$leader->name}}</a>
                    </div>
                @else
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-4 search_page_link">
                        <a href="/committees/{{$leader->image}}">{{$leader->name}}</a>
                    </div>
                @endif
            @endforeach
        </div>
        @endif
        
        @else
        <div class="row">
            <div class="col-md-12 data_not_found">
                 <img src="{{ asset('frontend/images/no_result.gif') }}" alt="data-not-found" >
                 <h3>Data Not Found</h3>
            </div>
        </div>
        @endif
        
    </div>
</section>
@include('layouts.default.footer')