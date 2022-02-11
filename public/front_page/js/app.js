new WOW().init();

$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 15,
    nav: false,
    responsive: {
        0: {
            items: 1,
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

$("#scrollUp").click(function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
});
