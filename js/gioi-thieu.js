$(document).ready(function() {
    $('.s-certificate-1 .b-card-38')
        .attr('rel', 'gallery')
        .fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',
            loop: false
        });

});

/* BEGIN s-home-2 */
/* Thêm thư viện js/vendor/slick/ */
$(document).ready(function() {
    $('.s-certificate-1 .slick-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 992,
            settings: { slidesToShow: 2 }
        }, {
            breakpoint: 400,
            settings: { slidesToShow: 1 }
        }]
    });
});
/* END s-home-2 */