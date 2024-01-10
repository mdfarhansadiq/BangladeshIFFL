<?php  $menus = SiteHelpers::menus('top') ;?>

 <div id="navigation">
	<ul>
        <li class="animsition-link"><a href="{{ url('')}}"> Home </a></li>
        @foreach ($menus as $menu)
        @if($menu['module'] =='separator')
        <li class="divider"></li>        
        @else
            <li  @if(count($menu['childs']) > 0 ) class="animsition-link" @endif><!-- HOME -->
                <a 
                @if(count($menu['childs']) > 0 ) 
                    href="javascript:void(0);" 
                @elseif($menu['menu_type'] =='external')
                    href="{{ URL::to($menu['url'])}}" 
                @else
                    href="{{ URL::to($menu['module'])}}" 
                @endif >
                                  
                    @if(config('sximo.cnf_multilang') ==1 && isset($menu['menu_lang']['title'][session('lang')]) && $menu['menu_lang']['title'][session('lang')]!='')
                        {{ $menu['menu_lang']['title'][session('lang')] }}
                    @else
                        {{$menu['menu_name']}}
                    @endif             
                   
                </a> 
                @if(count($menu['childs']) > 0)
                <ul>
                @foreach ($menu['childs'] as $menu2)
                    @if($menu2['module'] =='separator')
                        <li class="divider"> </li>        
                    @else
                    <li class="
                       
                        @if(Request::is($menu2['module'])) active @endif">
                        <a 
                            @if($menu2['menu_type'] =='external')
                                href="{{ url($menu2['url'])}}" 
                            @else
                                href="{{ url($menu2['module'])}}" 
                            @endif
                                        
                        >
                            <i class="{{ $menu2['menu_icons'] }}"></i> 
                            @if(config('sximo.cnf_multilang') ==1 && isset($menu2['menu_lang']['title'][session('lang')]))
                                {{ $menu2['menu_lang']['title'][session('lang')] }}
                            @else
                                {{$menu2['menu_name']}}
                            @endif                        
                        </a>
						
						
						
			@if(count($menu2['childs']) > 0)
                <ul>
                @foreach ($menu2['childs'] as $menu3)
                    @if($menu3['module'] =='separator')
                        <li class="divider"> </li>        
                    @else
                    <li class="
                       
                        @if(Request::is($menu3['module'])) active @endif">
                        <a 
                            @if($menu3['menu_type'] =='external')
                                href="{{ url($menu3['url'])}}" 
                            @else
                                href="{{ url($menu3['module'])}}" 
                            @endif
                                        
                        >
                            <i class="{{ $menu3['menu_icons'] }}"></i> 
                            @if(config('sximo.cnf_multilang') ==1 && isset($menu3['menu_lang']['title'][session('lang')]))
                                {{ $menu3['menu_lang']['title'][session('lang')] }}
                            @else
                                {{$menu3['menu_name']}}
                            @endif                        
                        </a>
					</li>
						
                    @endif
                 @endforeach     
                </ul>
                @endif
						
						
						
						
						
						
						
						
						
						
					</li>
						
                    @endif
                 @endforeach     
                </ul>
                @endif
            </li>
        @endif
    @endforeach    
     @if(config('sximo.cnf_multilang') ==1)
            <li class="menu-has-children ">
              <?php 
              $flag ='en';
              $langname = 'English'; 
              foreach(SiteHelpers::langOption() as $lang):
                if($lang['folder'] == session('lang') or $lang['folder'] == config('sximo.cnf_lang')) {
                  $flag = $lang['folder'];
                  $langname = $lang['name']; 
                }
                
              endforeach;?>
              <a href="#" >
                <img class="flag-lang" src="{{ asset('sximo5/images/flags/'.$flag.'.png') }}" width="16" height="12" alt="lang" /> {{ strtoupper($flag) }}
                <span class="hidden-xs">
                
                </span>
              </a>

               <ul >
                @foreach(SiteHelpers::langOption() as $lang)
                  <li><a href="{{ url('home/lang/'.$lang['folder'])}}"><img class="flag-lang" src="{{ asset('sximo5/images/flags/'. $lang['folder'].'.png')}}" width="16" height="11" alt="lang"  /> {{  $lang['name'] }}</a></li>
                @endforeach 
              </ul>

            </li> 
            @endif 
			
		<!--<li class="animsition-link"><a href="#">Test</a>
			<ul><li class="animsition-link"><a href="#">Test</a>
				<ul><li class="animsition-link"><a href="#">Test</a></li></ul>
			</li></ul>
		</li> -->
  </ul>
</div>


    
       

