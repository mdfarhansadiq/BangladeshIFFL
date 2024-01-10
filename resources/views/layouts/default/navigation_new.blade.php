    
@php
    use DB;
    $website_setting	= \DB::table('website_setting')->first();
@endphp

<style>
@media only screen and (max-width: 990px) {
.mobile_search_html{
    display:none !important;
}  
}



</style>

    <!--Full width header Start-->
    <div class="full-width-header">
        @php
            $is_active = DB::table('website_design')->where('title', 'LIKE', "%Top Bar%")->first();
            $office_time = DB::table('website_design')->where('title', 'LIKE', "%office time%")->first();
        @endphp
        
        @if($is_active->status == 1)
    
        <!-- Toolbar Start -->
        <div class="toolbar-area hidden-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="toolbar-contact">
                            <ul>
                                <li><i class="flaticon-email"></i><a href="mailto:{{ $website_setting->email }}">{{ $website_setting->email }}</a></li>
                                <li><i class="flaticon-call"></i><a href="tel:{{ $website_setting->phone }}">{{ $website_setting->phone }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="toolbar-sl-share">
                            <ul>
                                 @if($office_time->status == 1 && $website_setting->add_info2 != 0)
                                    <li class="opening"> <i class="flaticon-clock"></i> {{ $website_setting->add_info2 }} </li>
                                @endif
                                @if($website_setting->facebook) <li><a href="{{ $website_setting->facebook }}"><i class="fa fa-facebook"></i></a></li> @endif
                                @if($website_setting->twitter) <li><a href="{{ $website_setting->twitter }}"><i class="fa fa-twitter"></i></a></li> @endif
                                @if($website_setting->linkedin) <li><a href="{{ $website_setting->linkedin }}"><i class="fa fa-linkedin"></i></a></li> @endif
                                @if($website_setting->instagram) <li><a href="{{ $website_setting->instagram }}"><i class="fa fa-instagram"></i></a></li> @endif
                                @if($website_setting->pinterest) <li><a href="{{ $website_setting->pinterest }}"><i class="fa fa-pinterest-p"></i></a></li> @endif
                                @if($website_setting->youtube) <li><a href="{{ $website_setting->youtube }}"><i class="fa fa-youtube"></i></a></li> @endif
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- Toolbar End -->
        
    

        
        <!--Header Start-->
        
        <!--
        <header id="rs-header" class="rs-header">
            <div class="menu-area menu-sticky">
                <div class="menu_left_bg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                            <div class="logo-area">
                                <a href="/"><img src="{{ asset('/uploads/images/'.$website_setting->header_logo) }}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 text-right">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a class="rs-menu-toggle">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu">
                                        <ul class="nav-menu">
                                            <li class="menu-item @if($currentPath == '/')activemenu @endif"> <a class="" href="/">Home</a> </li>

                                            <li class="menu-item-has-children @if($currentPath == 'about-us')activemenu @elseif($RouteName == 'achievement.page')activemenu @elseif($RouteName == 'corporate-governance')activemenu @endif"> 
                                                <a class="menu-item" href="/about-us">About Us</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item @if($currentPath == 'about-us')activemenu @endif"><a class="" href="/about-us#background">Background</a></li>
                                                    <li class="menu-item"><a class="" href="/about-us#missionvission">Mission, Vission</a></li>
                                                    <li class="menu-item"><a class="" href="/about-us#strategicpriorities">Strategic Priorities</a></li>
                                                    
                                                    <li class="menu-item @if($RouteName == 'achievement.page')activemenu @endif"><a class="" href="/achievement">Achievement</a></li>
                                                    <li class="menu-item">
                                                        <a class="arrow_write">Corporate Governance</a>
                                                        <ul class="sub-menu">
                                                            @php
                                                                $types = DB::table('vmsl_team_type')->where('name', 'not like', "%Company Executives%")->where('name', 'not like', "%committee%")->orderBy('serial', 'asc')->where('status', 1)->get();
                                                            @endphp
                                                            @foreach($types as $type)
                                                                <li class="menu-item"><a class="" href="{{ route('corporate-governance', $type->image) }}">{{ $type->name }}</a></li>
                                                            @endforeach
                                                            @php
                                                                $executives = DB::table('vmsl_team_type')->where('name', 'LIKE', "%Company Executives%")->where('status', 1)->orderBy('serial', 'asc')->first();
                                                            @endphp
                                                            
                                                            <li class="menu-item"><a class="" href="{{ route('company.executives') }}">{{ $executives->name }}</a></li>
                                                            
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="arrow_write">Committees</a>
                                                        <ul class="sub-menu">
                                                            @php
                                                                $types = DB::table('vmsl_team_type')->where('name', 'LIKE', "%committee%")->where('status', 1)->orderBy('serial', 'asc')->get();
                                                            @endphp
                                                            @foreach($types as $type)
                                                                <li class="menu-item"><a class="" href="{{ route('committees', $type->image) }}">{{ $type->name }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>   
                                           
                                            
                                            <li class="menu-item-has-children @if($currentPath == 'loans')activemenu @endif">
                                                <a class="menu-item @if($RouteName == 'loan.category.page') activemenu @elseif($RouteName  == 'loan.single.page') activemenu @elseif($RouteName  == 'loan.page') @endif" href="{{ route('loan.page') }}">Loans</a>
                                                <ul class="sub-menu">
                                                    @php
                                                        $SME = DB::table('vmsl_loan_category')->where('name', 'LIKE', "%SME%")->first();
                                                        $loans = DB::table('vmsl_loan')->where('category', '!=', $SME->id)->where('status', 1)->orderBy('priority', 'asc')->get();
                                                      
                                                    @endphp
                                                    
                                                    
                                                    <li class="menu-item"><a class="" href="{{ route('loan.category.page', $SME->priority) }}">{{ $SME->name }} </a></li>
                                                    @foreach($loans as $loan)
                                                        <li class="menu-item"><a class="" href="{{ route('loan.single.page', $loan->interest_rate) }}">{{ $loan->name }} </a></li>
                                                    @endforeach
                                                </ul>
                                            
                                            </li>
                                           
                                 


                                            <li class="menu-item-has-children"> 
                                               
                                                <a class="menu-item @if($RouteName == 'category.wise.guidelines') activemenu @elseif($RouteName  == 'policy.and.guidelines') activemenu @elseif($RouteName  == 'guidelines.data') activemenu @endif" >POLICY & GUIDELINES</a>
                                                <ul class="sub-menu">
                                                    @php
                                                        $guidelines_category = DB::table('vsml_guidelines_category')->where('image', 0)->where('status', 1)->get();
                                                    @endphp
                                                    @foreach($guidelines_category as $category)
                                                        <li class="menu-item">
                                                            <a class="arrow_write">{{ $category->title }} </a>
                                                            
                                                            <ul class="sub-menu guidelines_submenu">
                                                                @php
                                                                    $guidelines = DB::table('vsml_guidelines_category')->where('image', $category->id)->get();
                                                                @endphp
                                                                @foreach($guidelines as $cat)
                                                                    <li class="menu-item">
                                                                        <a class="" href="{{ route('category.wise.guidelines', $cat->description) }}">{{ $cat->title }} </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>  


                                           <li class="menu-item-has-children"> 
                                               
                                                <a class="menu-item @if($RouteName == 'category.wise.report') activemenu @elseif($RouteName  == 'policy.and.report') activemenu @elseif($RouteName  == 'report.data') activemenu @endif" >Reports</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a class="arrow_write">Financial Statements</a>
                                                        <ul class="sub-menu guidelines_submenu">
                                                            @php
                                                                $category = DB::table('vsml_report_category')->where('title', 'not like', "%Annual Report%")->where('status', 1)->first();
                                                            @endphp
                                                    
                                                                <li class="menu-item"><a class="" href="{{ route('category.wise.report', $category->image) }}">{{ $category->title }} </a></li>
                                                         
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="arrow_write">Report</a>
                                                        <ul class="sub-menu guidelines_submenu">
                                                            @php
                                                                $cat = DB::table('vsml_report_category')->where('title', 'not like', "%Audit Report%")->where('status', 1)->first();
                                                            @endphp
                                                          
                                                                <li class="menu-item"><a class="" href="{{ route('category.wise.report', $cat->image) }}">{{ $cat->title }} </a></li>
                                                            
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>  
                                            
                                            
                                            
                                            <li class="menu-item-has-children @if($RouteName == 'project.page') activemenu @endif" >
                                                <a class="menu-item">Projects</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a class="arrow_write">PPP Projects</a>
                                                        <ul class="sub-menu">
                                                        @php
                                                            $category = DB::table('vsml_project_category')->where('status', 1)->get();
                                                        @endphp
                                                        @foreach($category as $cat)
                                                            <li class="menu-item"><a class="" href="{{ route('project.page', $cat->image) }}">{{ $cat->title }} </a></li>
                                                        @endforeach
                                                         
                                                        </ul>
                                                    </li>
                                       
                                                </ul>
                                            </li>

                                            <li class="menu-item @if($currentPath == 'events')activemenu @endif"><a class="" href="{{ route('events') }}">Events</a></li>  
                                            <li class="menu-item @if($currentPath == 'posts')activemenu @elseif($RouteName == 'single.blog')activemenu @endif"><a class="" href="/posts">Blogs</a></li>
                                            
                                            <li class="menu-item @if($currentPath == 'careers')activemenu @endif"><a class="" href="/careers">Career</a> </li>

                                        </ul> 
                                    </nav>
                                </div>
                                <div class="rs-mega-menu mega-rs full_navbar_search">
                                    <div class="search_bar">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control search_input" placeholder="Search..">
                                                <div class="input-group-append">
                                                <button class="btn btn-secondary navbar_search_btn" disabled>
                                                    <i class="fa fa-search"></i>
                                                </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
        </header>
        -->






 


        @php
        
            use Illuminate\Support\Facades\Route;
            $currentPath= Route::getFacadeRoot()->current()->uri();
            $RouteName = Route::currentRouteName();
        
     
            $currentPath = str_replace('/{category_slug}', '', $currentPath);
  
        
        
        
            $layer_1 = DB::table('tb_menu')->where('position', 'top')->where('parent_id', 0)->where('active', '1')->orderBy('ordering', 'ASC')->get();
 
    
        @endphp


        <header id="rs-header" class="rs-header">
            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="menu_left_bg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                            <div class="logo-area">
                                <a href="/"><img src="{{ asset('/uploads/images/'.$website_setting->header_logo) }}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 p-0">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a class="rs-menu-toggle">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu" id="mobile_meno">
                                        <ul class="nav-menu">
                                            <li class="mobile_search_parrent">
                                                <div class="full">
                                                    <div class="fullsearch_bar">
                                                        
                                                        <form method="post" action="{{ route('get-search-page') }}">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control mobileSearch" placeholder="Search..">
                                                                <div class="input-group-append">
                                                                <button type="submit" class="btn btn-secondary" disabled>
                                                                    <i class="fa fa-search"></i>
                                                                </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </li>
                                            
                                            <li id="mobile_search_html" class="mobile_search_html"></li>
                                            
                                            @php
                                                $serial=0;
                                            @endphp
                                            @foreach($layer_1 as $data1)
                                                    @php
                                                        $serial++;
                                                        $layer_2 = DB::table('tb_menu')->where('parent_id', $data1->menu_id)->where('active', '1')->orderBy('ordering', 'ASC')->get();
                                                    @endphp
                                                    @if(count($layer_2) > 0)
                                                        <li class="menu-item-has-children"> 
                                                            <a class="arrow_write @if($currentPath == str_replace('/', '', $data1->url)) activemenu @endif supper_parent_{{$data1->menu_id}} layer2" data-serial="{{$serial}}">{{ $data1->menu_name }} </a> 
                                                            <ul class="sub-menu"> 
                                                                 @foreach($layer_2 as $data2)
                                                                    @php
                                                                        $layer_3 = DB::table('tb_menu')->where('parent_id', $data2->menu_id)->where('active', '1')->orderBy('ordering', 'ASC')->get();
                                                                    @endphp
                                                                    @if(count($layer_3) > 0)
                                                                        <li class="menu-item-has-children"> 
                                                                            <a class="arrow_write @if($currentPath == str_replace('/', '', $data2->url)) activemenu @endif" data-serial="{{$serial}}" data-childid="{{$data1->menu_id}}">{{ $data2->menu_name }}</a> 
                                                                            <ul class="sub-menu">
                                                                                @foreach($layer_3 as $data3)
                                                                                    <li class="menu-item @if($currentPath == str_replace('/', '', $data3->url)) activemenu @endif layer3 layer3_{{$serial}}" data-serial="{{$serial}}" data-childid="{{$data1->menu_id}}">  <a href="{{ $data3->url }}">{{ $data3->menu_name }}</a> </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </li>
                                                                    @else
                                                                        <li class="menu-item @if($currentPath == str_replace('/', '', $data2->url)) activemenu @endif" data-childid="{{$data1->menu_id}} layer2" data-serial="{{$serial}}">  <a href="{{ $data2->url }}">{{ $data2->menu_name }}</a> </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @else
                                                        @if($currentPath == '/' && $data1->url  == '/')
                                                            <li class="menu-item activemenu layer1">  <a href="{{ $data1->url }}">{{ $data1->menu_name }} </a> </li>
                                                        @else
                                                            <li class="menu-item @if($currentPath == str_replace('/', '', $data1->url)) activemenu @endif supper_parent_{{$data1->menu_id}} layer1" data-childid="{{$data1->menu_id}}">  <a href="{{ $data1->url }}">{{ $data1->menu_name }} </a> </li>
                                                        @endif
                                                    @endif
                                            @endforeach
                                            
                                            <li class="search_open navbar_search_btn" id="navbar_search_btn"> <a class="nab_btn"> <i class="fa fa-search nab_btn_main"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="rs-mega-menu mega-rs full_navbar_search">
                                    <div class="search_bar">
                                        <form method="post" action="{{ route('get-search-page') }}">
                                            <div class="input-group">
                                                <input type="text" name="content" class="form-control search_input" placeholder="Search.."><div class="search_close_child">x</div>
                                            </div>
                                        </form>
                                        
                                        <div id="search_html">
                                            <div class="container"></div>
                                        </div>
                                        
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
        </header>
































        
        <!--Header End-->
    </div>
    

<div class="padding_for_fixed_menu"></div>   
    
    
    
<script type="text/javascript">
$('.search_input').keyup(function(){
    
   var content = $('.search_input').val();
   
   if(content.length > 2){
    $.ajax({
        url: '{{ url("/get-search-content") }}',
        type: "POST",
        data: {content:content},
        success: function(response){
            if(response.haveData > 0){
                $('#search_html').html(response.html);  
            }
        }
    });
   }else{
       $('.full_serach').hide();
       $('.close_search_modal').hide();
       
   }
   
});

$('.mobileSearch').keyup(function(){
    
   var content = $('.mobileSearch').val();
   
   if(content.length > 2){
    $.ajax({
        url: '{{ url("/get-search-content") }}',
        type: "POST",
        data: {content:content},
        success: function(response){
            if(response){
                $('#mobile_search_html').show();
                 $('.mobile_close_search').show();
                $('#mobile_search_html').html(response.html);
            }else{
               $('#mobile_search_html').hide();
               $('.mobile_close_search').hide();
               
               $('#mobile_search_html').html('');
           }
        }
    });
   }else{
       $('#mobile_search_html').hide();
        $('.mobile_close_search').hide();
       $('#mobile_search_html').html('');
   }
   
});

$(document).on('click', '.mobile_close_search', function(){
    $('#mobile_search_html').css({'display':'none !important;'});
     $('#mobile_search_html').html('');
     $('#mobile_search_html').hide();
     $('.mobileSearch').val('');
});     







$(document).ready(function(){
     $('#mobile_search_html').html('');
     $('#mobile_search_html').hide();
     $('.mobileSearch').val('');
     
    // setTimeout(function() { 
    //     $('.nivo-nextNav').trigger('click');
    // }, 2000);
    
    // setInterval(function() { 
    //     $('.nivo-nextNav').trigger('click');
    // }, 6000);
    
console.log('layer3 === '+$('.layer3:last-child').last().attr('data-serial'));
     
});     

if (window.screen.width < 1500) {
    $('.layer3_'+$('.layer3:last-child').last().attr('data-serial')).parent('.sub-menu').css({'left':'-100%','margin-left':'-18px'});
}


if (window.screen.width < 992) {
    setTimeout(function() { 
        $('.nivo-nextNav').trigger('click');
    }, 2000);
    
    setInterval(function() { 
        $('.nivo-nextNav').trigger('click');
    }, 6000);
}



            
</script>    
    
    
    
    
    
    
    
    
    
    
<!--Full width header End-->