/* BEGIN s-home-2 */
/* Thêm thư viện js/vendor/slick/ */
$(document).ready(function() {
    $('.s-home-2 .slick-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 992,
            settings: { slidesToShow: 2 }
        }]
    });
});
$(document).ready(function() {
    $('.s-project-1 .slick-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 992,
            settings: { slidesToShow: 2 }
        }]
    });
});
/* BEGIN s-home-6 */
/* Thêm thư viện js/vendor/slick/ */
$(document).ready(function() {
    $('.s-home-6 .slick-slider').slick();

    $(".scroller").simplyScroll();

});
/* END s-home-6 */
