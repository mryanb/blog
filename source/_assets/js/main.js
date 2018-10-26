import hljs from 'highlight.js';
// import php from 'highlight.js/lib/languages/php';
// hljs.registerLanguage('php', php);
import 'highlight.js/styles/github.css'

window.$ = window.jQuery = require('jquery');

$(document).ready(function(){
    
    // Show sticky header when scrolling
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

    // Code highlighting
    $('pre code').each(function(i, block) {
        console.log("ta da!");
        hljs.highlightBlock(block);
    });
});