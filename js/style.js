/* BEGIN s-header-4 */
$(document).ready(function() {
    // Tính toàn chiều dài của menu cấp con
    var li = $('.s-header-4 ul[ht-target="hd-menu"] li ul').parent();
    for (var i = 0; i < li.length; i++) {
        $(li[i].lastElementChild).css('width', $(li[i].lastElementChild).outerWidth());
    }
    // Thay đổi giá trị 992 nếu thay đổi kích thước responsive
    $(window).on('load resize', function() {
        li.removeClass('no-hover');
        li.children('a').unbind('click');
        if (window.innerWidth < 992) {
            li.addClass('no-hover');
            li.children('a').click(function(e) {
                e.preventDefault();
                li.not($(this).parent()).addClass('no-hover');
                $(this).parent().toggleClass('no-hover');
            });
        }
    });
    $('.s-header-4 .hd-menu>ul>li').click(function() {
        var id = $(this).attr('data-id');
        $('.s-header-4 .s-hover-1').not(id).css('display', 'none');
        $('.s-header-4 ' + id).fadeToggle();
    });
    $('.s-header-4 [ht-trigger="hd-menu"]').click(function() {
        $(this).parent().find('[ht-target="hd-menu"], .fa-transformation').toggleClass('is-active');
        if(!$('.s-header-4 .hd-menu > ul').hasClass('is-active')){
            $('.s-hover-1').css('display','none');
        }
    });
    if ($(window).width() < 992) {
        $('.s-header-4 .hd-menu  ul  li > .submenu').parent().append('<span class="icon"><i class="fa fa-angle-down"></i></span>');
    }
    $('.s-header-4 .hd-menu ul li > span > i').click(function() {
        var target = $(this).parent().siblings(".submenu");
        $('.s-header-4 .hd-menu  ul  li > .submenu').not(target).slideUp();
        $('.s-header-4 .hd-menu ul li > span > i').toggleClass('fa-angle-up');
        target.slideToggle();
    });

    $(document).mouseup(function(e) {
        var container = $(".s-header-4");

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".s-hover-1").fadeOut(400);
        }
    });

    $('.s-header-4 .hd-language > a').click(function() {
        $('.s-header-4 .hd-language ul').fadeToggle(200);
    });
    $(window).on('scroll', function() {
        if ($(window).scrollTop() >= 100) {
            $('.s-header-4').addClass('fixedTop');
        } else {
            $('.s-header-4').removeClass('fixedTop');
        }
    });
});

/* BEGIN c-select-single */
$(document).ready(function() {
    $('.c-select .c-radio').find('.c_tick').remove();
    $('body').on('click', '[ht-trigger="c-select"]', function() {
        var focused = $(this).parent().hasClass('is-focused');
        $('[ht-close="c-select"]').click();
        if (!focused) {
            $(this).parent().addClass('is-focused');
            $('body').append('<div class="overlay-transparent" ht-close="c-select"></div>');
        }
    });
    $('body').on('click', '.c-select .c-radio', function() {
        var el_select = $(this).closest('.c-select');
        el_select.find('div.c_input').text($(this).find('span').text());
        el_select.find('div.c_input').removeClass('text--icon');
        el_select.find('.c-radio').removeClass('is-selected');
        $(this).addClass('is-selected');
        $('[ht-close="c-select"]').click();
    });
    $('body').on('click', '[ht-close="c-select"]', function() {
        $('.c-select').removeClass('is-focused');
        $('.overlay-transparent').remove();
    });
});
/* END c-select-single */

/* BEGIN c-select-multi */
$(document).ready(function() {
    $('body').on('click', '[ht-trigger="c-select-2"]', function() {
        var focused = $(this).parent().hasClass('is-focused');
        $('[ht-close="c-select-2"]').click();
        if (!focused) {
            $(this).parent().addClass('is-focused');
            $('body').append('<div class="overlay-transparent" ht-close="c-select-2"></div>');
        }
    });
    $('body').on('click', '.c-select-2 input[type="checkbox"]', function() {
        var vl_input = '',
            el_select = $(this).closest('.c-select-2');
        el_select.find('input:checked').each(function() {
            vl_input += $(this).parent().find('span').text() + ', ';
        });
        vl_input = vl_input.slice(0, -2);
        if (vl_input !== '') {
            el_select.find('div.c_input').removeClass('text--icon');
            el_select.find('div.c_input').text(vl_input);
        } else {
            el_select.find('div.c_input').addClass('text--icon');
            el_select.find('div.c_input').text(el_select.find('div.c_input').attr('ht-empty'));
        }
    });
    $('body').on('click', '[ht-close="c-select-2"]', function() {
        $('.c-select-2').removeClass('is-focused');
        $('.overlay-transparent').remove();
    });
});
/* END c-select-multi */
$(function() {
    $('.data-scroll').click(function() {
        var target = $($(this).attr('href'));
        $('html, body').animate({
            scrollTop: target.offset().top - 75
        }, 600);
    });
});
/* BEGIN s-home-15 */
/* Thêm thư viện js/hitech/HTValidate.js */
$(document).ready(function(){
    $("#form_form-1").HTValidate({
        rules: {
            fullname: { required: 'Thông tin bắt buộc' },
            company: { required: 'Thông tin bắt buộc' },
            job: { required: 'Thông tin bắt buộc' },
            product: { required: 'Thông tin bắt buộc' },
            phone: { required: 'Thông tin bắt buộc', number: 'Vui lòng nhập số' },
            email: { required: 'Thông tin bắt buộc', email: 'Email không hợp lệ' }
        },
        setTemplate: {
            notify: 'Bạn đã gửi thành công. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất!',
            modal: 'notify_form-1',
        }
    });
});

$(document).ready(function(){
    $("#form_form-2").HTValidate({
        rules: {
            email: { required: 'Thông tin bắt buộc', email: 'Email không hợp lệ' }
        },
        setTemplate: {
            notify: 'Bạn đã gửi thành công. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất!',
            modal: 'notify_form-1',
        }
    });
});
/* END s-home-15 */