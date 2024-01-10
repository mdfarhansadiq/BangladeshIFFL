@section('title','Downloads')
@include('layouts.default.header')
 <style>
    .page-header{
        background: url(/uploads/images/corporate.jpg) no-repeat center;
        padding: 131px 0px 80px;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }
    .job_item {
		background: #eaeaea;
		padding: 15px 0 6px;
		margin-bottom: 15px;
	}
	.serial_text {
		background: #00652e;
		color: #fff;
		line-height: 40px;
		padding: 15px 25px;
		font-size: 30px;
		display: inline-block;
	}

	.job_item .button {
		background-color: #00652e;
		border: none;
		color: #FFFFFF;
		text-align: center;
		display: inline-block;
		font-size: 14px;
		text-transform: uppercase;
		padding: 11px;
		transition: all 0.5s;
		cursor: pointer;
		margin-top: 16px;
	}
	.date_item{
	    margin-bottom: 10px;
	}
	span{
	   color: #00652e !important;
	}
</style>

<div class="page-header" id="sitemap">
    <div class="container">
        <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3 class="m-0 p-5 text-uppercase">SITEMAP</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<div class="container">
    <div id="full_sitemap">
        <ul class="layer_1">
            <li><a href="/" class="animsition-link">Home</a></li>
            <li>
                <span class="animsition-link menu-has-children">Who we are</span>
                <ul class="layer_2 child_element">
                    <li><i class=""></i>&nbsp;<a href="/about-us">About BIFFL</a></li>
                    <li><i class=""></i>&nbsp;<a href="/milestones">Milestones</a></li>
                    
           
                    <li class="has_drop">
                        <i class=""></i>&nbsp;
                        <span>Leadership</span>
                        <ul class="layer_3 child_element">
                            <li style="text-transform: lowercase;"><a href="/corporate-governance/advisory-board" class="" >Advisory Board</a></li>
                            <li style="text-transform: lowercase;"><a href="/corporate-governance/board-of-directors" class="" >Board of Directors</a></li>
                            <li style="text-transform: lowercase;"><a href="/company-executives" class="" >Team BIFFL</a></li>
                        </ul>
                    </li>
                    
                    <li class="has_drop">
                        <i class=""></i>&nbsp;
                        <span>Committees</span>
                        <ul class="layer_3 child_element">
                            <li style="text-transform: lowercase;"><a href="/committees/executive-committee" class="" >Executive Committee</a></li>
                            <li style="text-transform: lowercase;"><a href="/corporate-governance/board-of-directors" class="" >Audit Committee</a></li>
                            <li style="text-transform: lowercase;"><a href="/committees/management-committee" class="" >Management Committee</a></li>
                        </ul>
                    </li>
                    
           
                    
           
                    <!--
           
                    <li class="has_drop">
                        <i class=""></i>&nbsp;
                        <span>Corporate Governance</span>
                        <ul class="layer_3 child_element">
                            @php
                                $types = DB::table('vmsl_team_type')->where('name', 'not like', "%Company Executives%")->where('name', 'not like', "%committee%")->orderBy('serial', 'asc')->where('status', 1)->get();
                            @endphp
                            @foreach($types as $type)
                                <li style="text-transform: lowercase;"><a class="" href="{{ route('corporate-governance', $type->image) }}">{{ $type->name }}</a></li>
                            @endforeach
                            @php
                                $executives = DB::table('vmsl_team_type')->where('name', 'LIKE', "%Company Executives%")->where('status', 1)->orderBy('serial', 'asc')->first();
                            @endphp
                            
                            <li style="text-transform: lowercase;"><a class="" href="{{ route('company.executives') }}">{{ $executives->name }}</a></li>
                            
                            
                            
                        </ul>
                    </li>
                    
                    <li class="has_drop">
                        <i class=""></i>&nbsp;
                        <span>Committees</span>
                        <ul  class="layer_3 child_element">
                            @php
                                $types = DB::table('vmsl_team_type')->where('name', 'LIKE', "%committee%")->where('status', 1)->orderBy('serial', 'asc')->get();
                            @endphp
                            @foreach($types as $type)
                                <li  style="text-transform: lowercase;"><a class="" href="{{ route('committees', $type->image) }}">{{ $type->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    -->
                    
                    
                </ul>
            </li>
            
            
            <li id="">
                <a href="/pages/what-we-do" class="animsition-link">What we do</a>
            </li>
            
            <li>
                <span>Projects</span>
                <ul class="layer_2 child_element">
                    
                    <li>
                        <a href="#">JICA</a>
                        <ul  class="layer_3 child_element">
                            <li><a href="/loans/eecphp-phase-II">EECPHP PHASE-II</a></li>
                            <li><a href="/loans/fvicp">FVCIP</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">ADB</a>
                        <ul  class="layer_3 child_element">
                            <li><a href="/projects/dbed">DBED (PPP)</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">AFD</a>
                        <ul  class="layer_3 child_element">
                            <li><a href="/loans/eerewef-loan">EEREWEF</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">KfW</a>
                        <ul  class="layer_3 child_element">
                            <li><a href="/loans/eei">EEI</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">OWN FUND</a>
                        <ul  class="layer_3 child_element">
                            <li><a href="/projects/fdee">FDEE (PPP)</a></li>
                        </ul>
                    </li>
       
                </ul>
            </li>
            
            
            
            <li> 
                <span>POLICY & GUIDELINES</span>
                <ul class="layer_2 child_element">
                    @php
                        $guidelines_category = DB::table('vsml_guidelines_category')->where('image', 0)->where('status', 1)->get();
                    @endphp
                    @foreach($guidelines_category as $category)
                        <li>
                            <span>{{ $category->title }} </span>
                            
                            <ul class="layer_3 child_element">
                                @php
                                    $guidelines = DB::table('vsml_guidelines_category')->where('image', $category->id)->get();
                                @endphp
                                @foreach($guidelines as $cat)
                                    <li><a style="text-transform: lowercase;" href="{{ route('category.wise.guidelines', $cat->description) }}">{{  $cat->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </li>  
            
            
            
            

           <li> 
                <span>Reports</span>
                
                <ul class="layer_2 child_element">
                    <li>
                        <span>Financial Statements</span>
                        <ul class="layer_3 child_element">
                            @php
                                $category = DB::table('vsml_report_category')->where('title', 'not like', "%Annual Report%")->where('status', 1)->first();
                            @endphp
                            <li><a style="text-transform: lowercase;" href="{{ route('category.wise.report', $category->image) }}">{{  $category->title }}</a></li>
                        </ul>
                    </li>
                    <li>
                        <span>Report</span>
                        <ul class="layer_3 child_element">
                            @php
                                $cat = DB::table('vsml_report_category')->where('title', 'not like', "%Audit Report%")->where('status', 1)->first();
                            @endphp
                          
                            <li><a style="text-transform: lowercase;" href="{{ route('category.wise.report', $cat->image) }}">{{  $cat->title }}</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </li>  





                                            

            <li><a href="/pages/project-gallery" class="animsition-link">Gallery</a></li>
            <li><a href="/careers" class="animsition-link">Career</a></li>
            
            
           <!--
        
            <li><a href="/posts" class="animsition-link">Blogs</a></li>
            <li><a href="/events" class="animsition-link">Events</a></li>
            
            <li><a href="/contact-us">Contact Us</a></li>
            <li><a href="/financial-calculator">Financial Calculator</a></li>
            
            <li><a href="/complain-cell">Complain Cell</a></li>
            <li><a href="/e-tender">E-Tender</a></li>
            <li><a href="/downloads">Downloads</a></li>
            -->
            @php
                $important_link	= \DB::table('important_link')->where('status', 1)->orderBy('serial_number','asc')->get();
                $important_link_count	= \DB::table('important_link')->where('status', 1)->where('category','internal')->orderBy('serial_number','asc')->get();
            @endphp

            <li class="menu-has-children text-black">
                <span>External Links</span>
                <ul  class="layer_2 child_element">
                    
                    @foreach($important_link as $data)
                        @if($data->category == 'external')
                            <li> <a href="{{ $data->link }}" target="__blank">{{ $data->title }}</a> </li>
                        @endif
                    @endforeach
                    
                    
                </ul>
            </li>
            
            <li class="menu-has-children text-black">
                <span>Internal Links</span>
                <ul  class="layer_2 child_element">
                @foreach($important_link as $data)
                    @if($data->category == 'internal')
                        <li> <a href="{{ $data->link }}" target="__blank">{{ $data->title }}</a> </li>
                    @endif
                @endforeach
                </ul>
            </li>
            
            
            
        </ul>
        
    </div>
</div>





 

 @include('layouts.default.footer')








