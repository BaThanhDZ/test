/* BEGIN c-tooltip */
$(document).ready(function() {
    $('body').on({
        mouseenter: function () {
            var $this = $(this);
            var $content = $this.attr('ht-content'); // Lấy nội dung text.
            var $placement = $this.attr('ht-placement'); // nhận biết vị trí hiển thị (top, bottom, left, right).
            $('body').append('<div class="c-tooltip ' + $placement + '">' + $content + '</div>'); // thêm elements vào cuối body
            var $position = $this.offset(); // lấy vị trí tọa đồ của btn (top, left)
            var $widthBtn = $this.outerWidth(); // lấy chiều dài của btn
            var $heightBtn = $this.outerHeight(); //lấy chiều cai hộp thoại
            var $widthTooltop = $('.c-tooltip.' + $placement).outerWidth(); // chiều dài của tooltip
            var $heightTooltop = $('.c-tooltip.' + $placement).outerHeight(); // chiều dài của tooltip
            var $width = ($widthTooltop - $widthBtn) / 2;// tính toán canh giữa theo chiều dài
            var $height = ($heightTooltop - $heightBtn) / 2; // tính toán canh giữa theo chiều rộng
            // kiểm tra vị trí và gán vị trí chính xác
            if ($placement == 'top') {
                $height = $('.c-tooltip.' + $placement).outerHeight();
                $top = $position.top - $height - 10;
                $left = $position.left - $width;
            } else if ($placement == 'bottom') {
                $height = $this.outerHeight();
                $top = $position.top + $height + 10;
                $left = $position.left - $width;
            } else if ($placement == 'left') {
                $top = $position.top - $height;
                $left = $position.left - $widthTooltop - 10;
            } else if ($placement == 'right') {
                $top = $position.top - $height;
                $left = $position.left + $widthBtn + 10;
            }
            $('.c-tooltip.' + $placement).css({ top: $top, left: $left });
            setTimeout(function() { $('.c-tooltip').addClass('show'); }, 200);
        },
        mouseleave: function () { $('.c-tooltip').remove(); }
    }, '[ht-trigger="c-tooltip"]');

    $('.s-compare-1 .s_more').click(function() {
        $(this).toggleClass('is-active');
        $('.s-compare-1 .s-table-2').slideToggle(400);
    });
});
/* BEGIN c-tooltip */
/* BEGIN s-faq-1 */
$(document).ready(function() {
    // Hiển thì 1 nội dung
    $('.s-faq-1 .item-title').click(function() {
        var $this = $(this);
        if ($this.parent().hasClass('is-active')) {
            $this.parent().removeClass('is-active').find('.item-body').slideUp(400);
        } else {
            $this.parent().siblings().removeClass('is-active').find('.item-body').slideUp(400);
            $this.parent().addClass('is-active').find('.item-body').slideDown(400);
        }
    });

    $('.s-table-3 .s_tab li').click(function() {
        var id = $(this).attr('dataid');
        $(this).addClass('is-active');
         $(this).siblings().removeClass('is-active')
        $('.s-table-3 .s_table .col-9').not(id).css('display', 'none');
        $('.s-table-3 .s_table ' + id).fadeIn(300);
    });
});
/* END s-faq-1 */
$(document).ready(function() {
    $('.s-link-1 a[data-scroll]').click(function() {
        var from = $(this).attr('href').split('#')[1];
        var to = $("div[name='"+ from +"']");
        $('html, body').animate({
            scrollTop: to.offset().top - 50
        }, 500);
    });

    var url = decodeURIComponent($(location). attr("href")),
        from = url.split('#')[1],
        to = $("div[name='"+ from +"']");
    if(from) {
        $('html, body').animate({
            scrollTop: to.offset().top - 50
        }, 1000);
    }
});