 <!-- Footer Start -->

 @php
     $is_active = DB::table('website_design')->where('title', 'LIKE', '%newsletter%')->first();
     $vertical_social = DB::table('website_design')->where('title', 'LIKE', '%Vertical Right Social Icon%')->first();
     $footer_social = DB::table('website_design')->where('title', 'LIKE', '%Footer Social Icon%')->first();
 @endphp
 @if ($is_active->status == 1)
     <section id="rs-footer" class="rs-footer newslatter_section">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="footer-newsletter" style="width: 100%;">
                         <div class="row y-middle">
                             <div class="col-md-6 sm-mb-26">
                                 <h3 class="title white-color mb-0">Newsletter Subscribe</h3>
                             </div>
                             <div class="col-md-6 text-left">
                                 <form class="newsletter-form" action="{{ route('newsletter') }}" method="post">

                                     <input type="email" name="email" placeholder="Your email address"
                                         required="">
                                     @if (session()->has('success2'))
                                         <div class="alert alert-success mt-2">
                                             {{ session()->get('success2') }}
                                         </div>
                                     @endif
                                     @if (session()->has('error2'))
                                         <div class="alert alert-danger mt-2">
                                             {{ session()->get('error2') }}
                                         </div>
                                     @endif
                                     <small style="color:#f00;">{{ $errors->first('email') }}</small>
                                     <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 @endif

 <footer id="rs-footer" class="rs-footer">

     @php
         $important_link = \DB::table('important_link')->where('status', 1)->orderBy('serial_number', 'asc')->get();
     @endphp

     @if ($vertical_social->status == 1)
         <ul class="footer_social vertical_social">
             @if ($website_setting->facebook)
                 <li><a href="{{ $website_setting->facebook }}"><i class="fa fa-facebook"></i></a></li>
             @endif
             @if ($website_setting->twitter)
                 <li><a href="{{ $website_setting->twitter }}"><i class="fa fa-twitter"></i></a></li>
             @endif
             @if ($website_setting->linkedin)
                 <li><a href="{{ $website_setting->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
             @endif
             @if ($website_setting->instagram)
                 <li><a href="{{ $website_setting->instagram }}"><i class="fa fa-instagram"></i></a></li>
             @endif
             <!--@if ($website_setting->pinterest)
<li><a href="{{ $website_setting->pinterest }}"><i class="fa fa-pinterest-p"></i></a></li>
@endif-->
             @if ($website_setting->youtube)
                 <li><a href="{{ $website_setting->youtube }}"><i class="fa fa-youtube"></i></a></li>
             @endif
         </ul>
     @endif




     <div class="container">
         <div class="footer-content md-pb-64 sm-pt-48" id="internal_link">
             <div class="row">
                 <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-widget">
                     <h4 class="widget-title">External Links</h4>
                     <div class="about-widget pr-15">
                         <div class="important_link">

                             <ul>
                                 @foreach ($important_link as $data)
                                     @if ($data->category == 'external')
                                         <li> <a href="{{ $data->link }}" target="__blank">{{ $data->title }}</a>
                                         </li>
                                     @endif
                                 @endforeach
                             </ul>
                         </div>
                         <div class="logo-part">
                             <!--<a href="/"><img src="{{ asset('/uploads/images/' . $website_setting->footer_logo) }}" alt="Footer Logo"></a>-->
                         </div>
                     </div>
                 </div>


                 <div class="col-12 col-sm-12 col-md-5 col-lg-5 footer-widget" id="internal_link_border">
                     <div class="col-12 col-sm-12 col-lg-12 col-md-12 internal_liink_title">
                         <h4 class="widget-title">Internal Links</h4>
                     </div>

                     @php
                         $important_link_count = \DB::table('important_link')->where('status', 1)->where('category', 'internal')->get();
                         $count = ceil(count($important_link_count) / 2);
                     @endphp

                     <div class="row border_link">
                         <div class="col-12 col-sm-12 col-lg-6 col-md-6">
                             <ul class="address-widget">
                                 <li>
                                     @php
                                         $x = 0;
                                     @endphp
                                     @foreach ($important_link as $data)
                                         @if ($data->category == 'internal' && $x < $count)
                                             <div class="desc"> <a
                                                     href="{{ $data->link }}">{{ $data->title }}</a> </div>
                                             @php
                                                 $x += 1;
                                             @endphp
                                         @endif
                                     @endforeach
                                 </li>
                             </ul>
                         </div>
                         <div class="col-12 col-sm-12 col-lg-6 col-md-6">
                             <ul class="address-widget border_link_second_tab">
                                 <li>
                                     @php
                                         $y = 0;
                                         $count2 = $count - 1;
                                     @endphp
                                     @foreach ($important_link as $data)
                                         @if ($data->category == 'internal')
                                             @if ($y > $count2)
                                                 <div class="desc"> <a
                                                         href="{{ $data->link }}">{{ $data->title }}</a> </div>
                                             @endif
                                             @php
                                                 $y += 1;
                                             @endphp
                                         @endif
                                     @endforeach
                                 </li>
                             </ul>
                         </div>


                     </div>
                 </div>




                 <div class="col-12 col-sm-12 col-md-4 col-lg-4 footer-widget text-right">
                     <h4 class="widget-title">Contact Info</h4>
                     <ul class="address-widget">
                         <li>
                             <!-- <i class="flaticon-location"></i> -->
                             <div class="desc">{{ $website_setting->address }}</div>
                         </li>
                         <li>
                             <!-- <i class="flaticon-call"></i> -->
                             <div class="desc">
                                 Phone: <a href="tel:{{ $website_setting->phone }}">{{ $website_setting->phone }}</a>
                             </div>
                         </li>
                         <li>
                             <!-- <i class="flaticon-email"></i> -->
                             <div class="desc">
                                 Fax: <a
                                     href="fax:{{ $website_setting->pinterest }}">{{ $website_setting->pinterest }}</a>
                             </div>
                         </li>


                         <li>
                             <!-- <i class="flaticon-email"></i> -->
                             <div class="desc">
                                 E-mail: <a
                                     href="mailto:{{ $website_setting->email }}">{{ $website_setting->email }}</a>
                             </div>
                         </li>


                         <li>
                             <!-- <i class="flaticon-call"></i> -->
                             <div class="desc">
                                 Bangladesh Bank Hotline: <a
                                     href="tel:{{ $website_setting->updated_at }}">{{ $website_setting->updated_at }}</a>
                             </div>
                         </li>
                     </ul>
                     @if ($footer_social->status == 1)
                         <ul class="footer_social mobile_social mt-2">
                             @if ($website_setting->facebook)
                                 <li><a href="{{ $website_setting->facebook }}"><i class="fa fa-facebook"></i></a></li>
                             @endif
                             @if ($website_setting->twitter)
                                 <li><a href="{{ $website_setting->twitter }}"><i class="fa fa-twitter"></i></a></li>
                             @endif
                             @if ($website_setting->linkedin)
                                 <li><a href="{{ $website_setting->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                             @endif
                             @if ($website_setting->instagram)
                                 <li><a href="{{ $website_setting->instagram }}"><i class="fa fa-instagram"></i></a>
                                 </li>
                             @endif
                             <!--@if ($website_setting->pinterest)
<li><a href="{{ $website_setting->pinterest }}"><i class="fa fa-pinterest-p"></i></a></li>
@endif-->
                             @if ($website_setting->youtube)
                                 <li><a href="{{ $website_setting->youtube }}"><i class="fa fa-youtube"></i></a></li>
                             @endif
                         </ul>
                     @endif
                 </div>

             </div>
         </div>
     </div>
 </footer>
 <div class="copywrite">
     © 2021 Bangladesh Infrastructure Finance Fund Limited (BIFFL). All Rights Reserved. Designed by <a
         href="https://www.vmsl.com.bd">VMSL</a>
 </div>





 <!-- Footer End -->

 <!-- start scrollUp  -->
 <div id="scrollUp">
     <i class="fa fa-angle-up"></i>
 </div>
 <!-- End scrollUp  -->

 <!-- Search Modal Start -->
 <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span class="flaticon-cross"></span>
     </button>
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="search-block clearfix">
                 <form>
                     <div class="form-group">
                         <input class="form-control" placeholder="Search Here..." type="text" required="">
                         <button type="submit"><i class="fa fa-search"></i></button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- Search Modal End -->

 <!-- modernizr js -->
 <script src="{{ asset('frontend') }}/js/modernizr-2.8.3.min.js"></script>
 <!-- jquery latest version -->

 <!-- Bootstrap v4.4.1 js -->
 <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
 <!-- Menu js -->
 <script src="{{ asset('frontend') }}/js/rsmenu-main.js"></script>
 <!-- op nav js -->
 <script src="{{ asset('frontend') }}/js/jquery.nav.js"></script>
 <!-- owl.carousel js -->
 <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
 <!-- Slick js -->
 <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
 <!-- isotope.pkgd.min js -->
 <script src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script>
 <!-- imagesloaded.pkgd.min js -->
 <script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
 <!-- wow js -->
 <script src="{{ asset('frontend') }}/js/wow.min.js"></script>
 <!-- aos js -->
 <script src="{{ asset('frontend') }}/js/aos.js"></script>
 <!-- Skill bar js -->
 <script src="{{ asset('frontend') }}/js/skill.bars.jquery.js"></script>
 <script src="{{ asset('frontend') }}/js/jquery.counterup.min.js"></script>
 <!-- counter top js -->
 <script src="{{ asset('frontend') }}/js/waypoints.min.js"></script>
 <!-- video js -->
 <script src="{{ asset('frontend') }}/js/jquery.mb.YTPlayer.min.js"></script>
 <!-- magnific popup js -->
 <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
 <!-- Nivo slider js -->
 <script src="{{ asset('frontend') }}/inc/custom-slider/js/jquery.nivo.slider.js"></script>
 <!-- plugins js -->
 <script src="{{ asset('frontend') }}/js/plugins.js"></script>
 <!-- contact form js -->
 {{-- <script src="{{ asset('frontend') }}/js/contact.form.js"></script> --}}
 <!-- main js -->
 <script src="{{ asset('frontend') }}/js/main.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
 <script>
     $(document).ready(function() {
        //  $("#nivoSlider img").each(function(i) {
        //      alert(i);
        //  });
         //  $("img").each(function() {
         //      var originalSrc = $(this).attr("src");
         //      $(this).attr("data-original", originalSrc).removeAttr("src");
         //  });

         //  // Apply lazy loading to all images
         //  $("img").lazyload();

         $("img:not(#nivoSlider img)").each(function() {
             var originalSrc = $(this).attr("src");
             $(this).attr("data-original", originalSrc).removeAttr("src");
         });

         // Exclude all images within .nivo-slice elements from lazy loading
         $("#nivoSlider img").each(function() {
             $(this).removeAttr("data-original");
         });

         // Apply lazy loading to all images
         $("img:not(#nivoSlider img)").lazyload();
     });
 </script>
 </body>

 <!-- Mirrored from rstheme.com/products/html/reobiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 07:36:45 GMT -->

 </html>
