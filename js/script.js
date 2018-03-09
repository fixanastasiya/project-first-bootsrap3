/**
 *add class for header
 */


/**
 * to top buton
 */

var limit     = $(window).height()/3,
    $backToTop = $('#back-to-top');

$(window).scroll(function () {
    if ( $(this).scrollTop() > limit ) {
        $backToTop.fadeIn();
    } else {
        $backToTop.fadeOut();
    }
});

// scroll body to 0px on click
$backToTop.click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 1500);
    return false;
});

//chat code
$(function(){
    $("#chat").click(function () {
        $('#qnimate').addClass('popup-box-on');
    });

    $("#removeClass").click(function () {
        $('#qnimate').removeClass('popup-box-on');
    });
});

//gallery

$(document).ready(function() {
    $("a.fancyimage").fancybox();
});

//accordeon
var $myGroup = $('#acordion-bl');
$myGroup.on('show.bs.collapse','.collapse', function() {
    $myGroup.find('.collapse.in').collapse('hide');
});
//add class


$(".shadow").click(function(e) {

    $(this).find('.btn.details').addClass("opens");
});
