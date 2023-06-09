jQuery(document).ready(function ($) {

    let phanHoi = $('.phan-hoi-wrapper .col');
    phanHoi.removeClass('medium-4 small-12 large-4');

    $('.phan-hoi-wrapper').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplaySpeed: 5000,
        autoplay: true,
        infinite: true,
        dots: true,
        arrows: false,
        swipeToSlide: true,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    $('.related-post-360 .related-post').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed: 5000,
        autoplay: true,
        infinite: true,
        dots: false,
        arrows: false,
        swipeToSlide: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });

})