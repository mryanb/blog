window.$ = window.jQuery = require('jquery');

$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > ($('#makeStickyAfter').offset().top - 50)){
            if(!$('#stickyHeader').hasClass('sticky-top')){
                $('#stickyHeader').addClass('sticky-top');
                $('#stickyHeader').css("display", "block");
            }
        }else{
            if($('#stickyHeader').hasClass('sticky-top')){
                $('#stickyHeader').removeClass('sticky-top');
                $('#stickyHeader').css("display", "none");
            }
        }
    }).trigger('scroll');
});