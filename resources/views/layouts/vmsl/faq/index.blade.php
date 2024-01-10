@include('layouts.default.header')

<style>
 body {
    background-color: #f4f6f8;
}    
</style>


<div class="page-header faq_image">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h1 class="page-title">Frequently Asked Questions</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        
        
        
        
<div class="content_start">
    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="wrapper-content bg-white pinside40 p-4">
                    <div class="full_accordian_section">
                        
                        
                       
                        @foreach($category as $d)
                        <div class="row pb-3">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="section-title mb30">
                                    <h4> {{ $d->title }} </h4>
                                </div>
                            </div>
                            
                            @php
                                $faqs = \DB::table('vmsl_faq')->where('category', $d->id)->where('status', 1)->orderBy('id', 'DESC')->get();
                            @endphp
                            
                            @foreach($faqs as $data)
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 st-accordion">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne{{$data->id}}">
                                            <h6 class="panel-title"> <a class="singleCollaps" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$data->id}}" aria-expanded="true" aria-controls="collapseOne"> {{ $data->title }} <i class="mychevronDown fa fa-chevron-down" aria-hidden="true"></i></a> </h6>
                                        </div>
                                        <div id="collapseOne{{$data->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne{{$data->id}}">
                                            <div class="panel-body">{{ $data->description }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     @include('layouts.default.footer')    