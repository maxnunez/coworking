$(document).ready(function(){


new WOW().init();

$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 15,
    nav: false,
    responsive: {
        0: {
            itemsD: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 5,
        },
    },
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
});
$(".play").on("click", function () {
    owl.trigger("play.owl.autoplay", [1000]);
});
$(".stop").on("click", function () {
    owl.trigger("stop.owl.autoplay");
});

/* $("#scrollUp").on('click',function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
}); */

$('#scrollUp').on('click', function(){
    $('body, html').animate({
        scrollTop: '0px'
    }, 300);
});

$(window).on('click', function(){
    if( $(this).scrollTop() > 0 ){
        $('#scrollUp').slideDown(300);
    } else {
        $('#scrollUp').slideUp(300);
    }
});
});
