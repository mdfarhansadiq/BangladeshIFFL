
<div class="widget" id="blog_widget">
    <div class="widget-title">
        <h4 class="title">{{ $latest_title }}</h4>
    </div>
    <div class="w-lists">
      @foreach($popular as $pop)
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
  



{{-- <div class="widget">
    <div class="widget-title">
        <h4 class="title"> Categories </h4>
    </div>

    <ul class="w-list-categories">
      @foreach($categories as $category)
      <li class="">
        <a href="{{ url('posts/category/'.$category->updated_at ) }}"> {{ $category->name }} ( {{ $category->total }} ) </a>
      </li>
      @endforeach
    </ul> 
</div>
<div class="widget">
    <div class="widget-title">
        <h4 class="title"> Tags / Labels </h4>
    </div>

</div> --}}



</div>
