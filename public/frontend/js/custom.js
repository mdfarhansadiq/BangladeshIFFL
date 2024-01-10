$(document).on('click', '.single_portfolio_category', function(){
    $('.rs-portfolio').css({'display':'none'});
    var id = $(this).attr('data-singlecategoryid');
    $('.category_wise_section_'+id).css({'display':'block'});
    $.ajax({
        url: "/get-event-category-imgae/"+id,
        type: "get",
        success: function(response) {
            if(response){
                $('.background_section').attr('style', "background-image: url('https://biffl.techhut.com.bd/uploads/images/event/"+response+"')");
            }
        }
    });
});




$(document).on('click', '.carousel-control-next', function(){
    $(this).parent('.carousel').find('.active').next('.carousel-item').addClass('active');
    $(this).parent('.carousel').find('.active').eq(1).prev('.carousel-item').removeClass('active');
});


$(document).on('click', '.carousel-control-prev', function(){
    $(this).parent('.carousel').find('.active').prev('.carousel-item').addClass('active');
    $(this).parent('.carousel').find('.active').eq(1).removeClass('active');
});


$(document).on('click', '.show_all_portfolio', function(){
    $('.rs-portfolio').css({'display':'none'});
    $('.category_wise_section_all').css({'display':'block'});
});



$(document).on('click', '.nav-item', function(){
    $('.nav-item').css({'background':'#fff'});
    $('.bgli').removeClass('newbg');
    
    $(this).css({'background':'rgb(0 101 44 / 18%)','color':'#fff;'});
    var id = $(this).attr('data-itemid');
    $('.nav_description'+id).find('.bgli').addClass('newbg');
});




$(document).on('click', '.navbar_search_btn, .nab_btn_main', function(){
    $('.search_bar .search_input').css({'display':'block'});
    $('.search_bar .btn-secondary').css({'border':'1px solid #ffffff52'});
    $('.search_bar').show();
    
    
});

$(document).on('click', '#blog, .section, .main-content, .page-header, .banner_overlay, #guidelines, #my_cms_page, .loaded, #etender, .data_not_found, .toolbar-area', function(){
    $('.full_serach').hide();
    $('.search_input').hide();
    $('.search_bar').hide();
});


$(document).on('click', '#blog, .section, .main-content, .page-header, .banner_overlay, #guidelines, #my_cms_page, .loaded, #etender, .data_not_found, .toolbar-area', function(){
    $('.full_serach').hide();
    $('.search_input').hide();
    $('.search_bar').hide();
});

$(document).on('click', function (e) {
    if (!$(e.target).hasClass("full_serach") && !$(e.target).hasClass("search_input")  && !$(e.target).hasClass("navbar_search_btn")  && !$(e.target).hasClass("nab_btn_main")) {
        $(".full_serach").hide();
        $(".search_input").hide();
        $('.search_bar').hide();
    }
});









$(document).on('click', '.search_close, .search_close_child', function(){
    $('.full_serach').hide();
    $('.search_input').hide();
    $('.search_bar').hide();
});


$(document).on('click', '.menu-item', function(){
    $('.menu-item').removeClass('activemenu');
    $(this).addClass('activemenu');
});


$(document).on('click', '.menu-item', function(){
    var id = $(this).attr('data-childid');
    $('.supper_parent_'+id).addClass('activemenu');
    localStorage.setItem("supper_parent_id", id);
});

$(document).on('click', '.desc', function(){
    localStorage.setItem("supper_parent_id", 'undefined');
});


$(document).ready(function(){
    

    
    var id = localStorage.getItem("supper_parent_id", id);
    $('.supper_parent_'+id).addClass('activemenu');
    if(id == 'undefined'){
        $('.supper_parent_'+id).removeClass('activemenu');
        $('.arrow_write').removeClass('activemenu');
    }else{
       $('.supper_parent_'+id).addClass('activemenu'); 
    }
});


$(document).on('click', '.arrow_write', function(){
    
    if($(this).parent('.menu-item-has-children').find('.sub-menu:first').hasClass('Myvisible')){
        $(this).parent('.menu-item-has-children').find('.sub-menu:first').removeClass('Myvisible');
        if(screen.width < 992){
             $('.sub-menu').removeAttr('style');
             $('.sub-menu').css({'left':'0 !important', 'margin-left':'0 !important'});
        }
    }else{
        $(this).parent('.menu-item-has-children').find('.sub-menu:first').addClass('Myvisible');
        if(screen.width < 992){
            $('.sub-menu').removeAttr('style');
             $('.sub-menu').css({'left':'0 !important', 'margin-left':'0 !important'});
        }
    }
    
    
    
    //$(this).parent('.menu-item-has-children').find('.sub-menu:first').css({'display':'unset', 'position':'relative'});
    

});


// $(document).on('dblclick', '.arrow_write', function(){
//     $(this).parent('.menu-item').find('.sub-menu').removeClass('visible');
// });
$(document).on('click', '.sub-menu-close', function(){
    $(this).parent('.menu-item').find('.sub-menu').removeClass('visible');
});

$(document).on('blur', '.full_serach', function(){
    $('.full_serach').hide();
});



$(document).on('click', '.close_search_modal', function(){
    $('.full_serach').hide();
});

$(document).on('click', '.mobile_close_search', function(){
    $('#mobile_search_html').css({'display':'none !important;'});
});






document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 500) {
          $('#animation_headline_title').css({'max-width':'1200px !important', 'transition':'2s'});
        
      } else {
         $('#animation_headline_title').css({'max-width':'100% !important', 'transition':'2s'});
      } 
  });
}); 


$(document).on('click', '.singleCollaps', function(){
    if($(this).find('.mychevronDown').hasClass('fa-chevron-down')){
        $(this).find('.mychevronDown').removeClass('fa-chevron-down');
        $(this).find('.mychevronDown').addClass('fa-chevron-up');
    }else{
        $(this).find('.mychevronDown').removeClass('fa-chevron-up');
        $(this).find('.mychevronDown').addClass('fa-chevron-down');
    }
    
});

 

jQuery(document).on('click', '.custom_btn', function() {
    var elem = $(this).text();
    if (elem == "Read More") {
        $(this).text("Read Less");
        $(this).parent('.about-content').find('.inject_without_text').hide();
        $(this).parent('.about-content').find('.full_text').show();
        // $(this).parent('.about-content').find('.inject_text').show();
        // var text1 = $.trim($(this).parent('.about-content').find(".inject_without_text").text()); 
        // var text2 = text1+$.trim($(this).parent('.about-content').find(".hiddentext").text());
        // $(this).parent('.about-content').find(".inject_text").text(text2);
        // $(this).parent('.about-content').find(".hiddentext").slideDown();
        // $(this).parent('.about-content').find('.inject_without_text').hide();
        // $(this).parent('.about-content').find('.hiddentext').hide();
        //console.log('if if if');
    }else{
        $(this).text("Read More");
        $(this).parent('.about-content').find('.inject_without_text').show();
        $(this).parent('.about-content').find('.full_text').hide();
        // $(this).parent('.about-content').find('.inject_text').hide();
        // $(this).parent('.about-content').find('.inject_without_text').show();
        // $(this).parent('.about-content').find(".hiddentext").slideUp();
        //console.log('else else else');
    }
});


jQuery(document).on('focus', '#contact-form2 input, #contact-form2 textarea, #contact-form input, #contact-form textarea', function() {
   $('.not_map_child').addClass('map_child');
});

jQuery(document).on('blur', '#contact-form2 input, #contact-form2 textarea, #contact-form input, #contact-form textarea', function() {
   $('.not_map_child').removeClass('map_child');
});
















