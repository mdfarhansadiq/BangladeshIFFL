
 
 @if($single_post->id)
  <!--
<div class="container">   
    
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item " ><a href="{{ url('') }}"> Home </a></li>
         <li class="breadcrumb-item " ><a href="{{ url('posts') }}"> Posts </a></li>
         <li class="breadcrumb-item " ><a href="{{ url('posts/category/'.$single_post->category_alias ) }}"> {{ $single_post->name }} </a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{ $single_post->title }}</li>
      </ol>
    </nav>
    
  </div>  
-->
<section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">         
        <!-- Row Starts -->
        <div class="row">  
            <div class="col-md-8" id="blog_left_section">
                <div class="blog_big_image">
                  @if(file_exists('uploads/images/posts/'.$single_post->image) )
                  <img src="{{ asset('uploads/images/posts/'.$single_post->image) }}" alt="" class="img-responisve">
                  @else
                  <img src="{{ asset('uploads/images/no-image.png') }}" alt="" class="img-responisve">
                  @endif
                </div>   
                <h4> {{ $single_post->title }}</h4>
                <div class="" style="margin: 0px 0 20px;">   
                <!--
                  <div class="section-tool text-left ">
                      <i class="fa fa-eye "></i>  <span>  Views (<b> {{ $single_post->views }} </b>)  </span>   
                      <i class="fa fa-user "></i>  <span>  {{ ucwords($single_post->username) }}  </span> 
                      <i class="fa fa-comment-o "></i>   <span>  {{ $single_post->comments }} comment(s)  </span> 
                      <i class="fa fa-clock-o" aria-hidden="true"></i> <span> {{ date("M j, Y " , strtotime($single_post->created)) }} </span> 
                  </div>
                  -->
                  {!! PostHelpers::formatContent($single_post->description) !!}  
                </div> 

                
                <!--
                @if($single_post->allow_guest == 1)
                <h4 class="blog-item-comment-title"><i class="icon-comment"></i> Comments </h4>
                @foreach($comments as $comm)
                <div class="blog-item-comments">
                   
                    <div class="box-avatar">
                    <?php if( file_exists( './uploads/users/'.$comm->avatar) && $comm->avatar !='') { ?>
                        <img src="{{ asset('uploads/users').'/'.$comm->avatar }} " border="0" width="60" class="avatar" />
                    <?php  } else { ?> 
                        <img alt="" src="http://www.gravatar.com/avatar/{{ md5($comm->email) }}" width="60" class="avatar" />
                    <?php } ?> 
                    </div>
                    <div class="content">
                         <div class="info" >
                            {{ ucwords($comm->username) }} | 
                            {{ date("M j, Y " , strtotime($comm->posted)) }}
                        </div>
                        {!!$comm->comments !!}
                        <div class="tools">
                            @if(Session::get('gid') == '1' OR $comm->userID == Session::get('uid')) 
                            <a href="{{ url('posts/remove/'.$single_post->pageID.'/'. $single_post->alias.'/'.$comm->commentID) }}" class="text-danger remove"><i class="fa fa-minus-circle"></i> Remove  </a>
                            @endif
                        </div>
                    </div> 
                </div>
                @endforeach
                <div class="blog-item-comments">                   
                    <div class="box-avatar">
                        {!! SiteHelpers::avatar('60') !!}    
                    </div>
                    <div class="content">
                        <h4> Leave Comment </h4>
                         <form method="post"  action="{{ url('posts/comment') }}" parsley-validate novalidate class="form">
                        {{ csrf_field() }}
                            <textarea rows="5" placeholder="Leave comments here ...." class="form-control " required name="comments"></textarea><br />
                            <button type="submit" class="readon banner-style site_color_1 mb-3"> Submit Comment </button>    
                            <input type="hidden" name="pageID" value="{{ $single_post->pageID }}" />    
                            <input type="hidden" name="alias" value="{{ $single_post->alias }}" />                      
                        </form>
                    </div> 
                </div>
                @endif
                
                -->
                
            </div>
            
            
            @php
    			$csr_id = \DB::table('blog_category')->where('status', 1)->where('title', 'LIKE', "%csr%")->first();
            @endphp
            
            
            @if($single_post->category == $csr_id->id)
            
            @php
        		$posts = \DB::table('blog')->where('status', 1)->where('category', $csr_id->id)->orderBy('id', 'DESC')->paginate(6);
        		foreach ($posts as $data) {
        			$data->category = Helper::get_blog_category_by_id($data->category);
        			$data->user = Helper::get_user_by_id($data->add_info);
        		}
            @endphp
            
            
            <div class="col-md-4"  id="blog_right_section">
                <div class="widget" id="blog_widget">
                    <div class="widget-title">
                        <h4 class="title">Latest CSR</h4>
                    </div>
                    <div class="w-lists">
                      @foreach($posts as $pop)
                        <div class="row mb-4">
                            <div class="col-md-3 image-thumb p-0">
                              <a href="{{ url('posts/read/'.$pop->updated_at) }}">
                                  {{-- <img src="{{ $pop->image }}" alt=""  > --}}
                                  @if(file_exists('uploads/images/posts/'.$pop->image) )
                                  <img src="{{ asset('uploads/images/posts/'.$pop->image) }}" alt="" class="img-responisve">
                                  @else
                                  <img src="{{ asset('uploads/images/no-image.png') }}" alt="" class="img-responisve">
                                  @endif
                                </a>
                            </div>
                            <div class="col-md-8">
                                <a href="{{ url('posts/read/'.$pop->updated_at) }}"> <h6> {{ \Illuminate\Support\Str::limit($pop->title, 60, $end='..') }} </h6> </a>      
                                <!--
                                <div class="info ">
                                      <i class="fa fa-eye "></i>  <span>  Views (<b> {{ $pop->views }} </b>)  </span> 
                                      <br>
                                      <i class="fa fa-comment-o "></i>   <span> comment({{ $pop->comments??0 }})  </span> 
                                      <br>
                                      <i class="icon-calendar3"></i>  <span> {{ date("M j, Y " , strtotime($pop->date)) }} </span> 
                                  </div>
                                 -->
                            </div>
                        </div> 
                      @endforeach
                    </div>
                </div>    
            </div>
            @else
            <div class="col-md-4"  id="blog_right_section">
                @include('layouts.default.blog.widget')
            </div>
            @endif
     
         </div> 
          

        </div><!-- Row Ends -->

      </div><!-- Container Ends -->
    </section>




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








    <script type="text/javascript">
        $(function(){
            $('.remove').on('click',function(){
                if(confirm('Remove comment ?'))
                {
                    return true;
                }
                return false;
            })
        })
    </script>