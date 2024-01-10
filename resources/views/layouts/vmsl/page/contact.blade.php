@include('layouts.default.header')

<section id="banner">
    <div class="banner_overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center banner_text">
                
            </div>
        </div>
    </div>
    </div>
</section>



<section class="container mt-5">
   <div class="row">
        <!--Grid column-->
        <div class="col-sm-12 col-md-7">
         <!--Google map-->
         <div class="mb-4">
            <div class="map_parent">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8686.370396599503!2d90.4033940522522!3d23.741356981500807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32d47e7b3d398460!2sBangladesh%20Infrastructure%20Finance%20Fund%20Limited%20(BIFFL)!5e0!3m2!1sen!2sbd!4v1661324189961!5m2!1sen!2sbd" width="100%" height="635" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="not_map_child"></div>
            </div>
         </div>

        </div>
        <!--Grid column-->


        <div class="col-sm-12 mb-4 col-md-5">
            <div class="card border_site rounded-0">
                <div class="card-header p-0">
                    <div class="site_bg text-white text-center py-2">
                        <h3><i class="fa fa-envelope"></i> Write A Message </h3>
                    </div>
                </div>

                <form id="contact-form2">
                <div class="card-body p-3">
                    <div class="form-group">
                        <label> Full Name <span style="color:#f00">*</span> </label>
                        <div class="input-group">
                            <input value="" type="text" name="name" class="form-control" id="name" :placeholder="Full Name">
                        </div>
                        <div class="validation_error validation_name" style="color:#f00;" /></div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Phone <span style="color:#f00">*</span></label>
                        <div class="input-group mb-2 mb-sm-0">
                            <input type="text" name="phone" class="form-control" id="phone" :placeholder="Phone">
                        </div>
                        <div class="validation_error validation_phone" style="color:#f00;" /></div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <input type="email" name="email" class="form-control" id="email" :placeholder="Email">
                        </div>
                        <div class="validation_error validation_email" style="color:#f00;" /></div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label> Subject </label>
                        <div class="input-group mb-2 mb-sm-0">
                            <input type="text" name="subject" class="form-control" id="subject" :placeholder="Subject">
                        </div>
                        <div class="validation_error validation_subject" style="color:#f00;" /></div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Messages <span style="color:#f00">*</span></label>
                        <div class="input-group mb-2 mb-sm-0">
                            <textarea type="text" class="form-control" name="message" id="message" :placeholder="Write your message" rows="3" cols=""></textarea>
                        </div>
                        <div class="validation_error validation_message" style="color:#f00;" /></div>
                    </div>
                    <div class="success_message" style="color:green;" /></div>
                    
                    <div class="text-center">
                        <div name="submit" :value="SEND" id="submitbtn" class="btn btn-primary btn-block rounded-0 py-2 mt-2">SEND</div>
                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
</section>






<div class="container">
    <div class="row text-center">
        <div class="col-md-3">
            <a class="site_bg px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
            <p style="color:#000;">{{ $website_setting->address }}</p>
        </div>
        <div class="col-md-9">
            <div class="row text-center">
                <div class="col-md-3">
                    <a href="tel:{{ $website_setting->phone }}" class="site_bg px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                    <a style="color:#000;" href="tel:{{ $website_setting->phone }}"><p>{{ $website_setting->phone }}</p></a>
                </div>
                
                <div class="col-md-3">
                    <a href="fax:{{ $website_setting->pinterest }}" class="site_bg px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-fax" aria-hidden="true"></i></a>
                    <a href="fax:{{ $website_setting->pinterest }}" target="__blank" style="color:#000;"><p>{{ $website_setting->pinterest }}</p> </a>
                </div>
                
                <div class="col-md-3">
                    <a href="mailto:{{ $website_setting->email }}" class="site_bg px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                    <a style="color:#000;" href="mailto:{{ $website_setting->email }}"><p>{{ $website_setting->email }}</p></a>
                </div>
                <div class="col-md-3">
                    <a class="site_bg px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-globe" aria-hidden="true"></i></a>
                    <a href="{{ $website_setting->map }}" target="__blank" style="color:#000;"><p>{{ $website_setting->map }}</p> </a>
                </div>

            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
    
$(document).on('click', '#submitbtn', function(){
    
    let name = $('#name').val();
    let phone = $('#phone').val();
    let email = $('#email').val();
    let subject = $('#subject').val();
    let message = $('#message').val();

    $.ajax({
        url: "/contact/message",
        type: "post",
        data:{name:name, phone:phone, email:email, subject:subject, message:message},
        success: function(response) {
            if(response.status == 0){
                $('.success_message').hide();
                if(response.message.name){$('.validation_name').text(response.message.name[0]);}else{ $('.validation_name').text('');}
                if(response.message.phone){$('.validation_phone').text(response.message.phone[0]);}else{ $('.validation_phone').text('');}
                if(response.message.email){$('.validation_email').text(response.message.email[0]);}else{ $('.validation_email').text('');}
                if(response.message.subject){$('.validation_subject').text(response.message.subject[0]);}else{ $('.validation_subject').text('');}
                if(response.message.message){$('.validation_message').text(response.message.message[0]);}else{ $('.validation_message').text('');}
               
            }else{
                $('.validation_error').text('');
                $('.success_message').show();
                $('.success_message').text('Message sent successfully !');
                $('#contact-form2').trigger("reset");
            }
        }
    });

});

    
</script>









@include('layouts.default.footer')