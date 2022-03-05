<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Title</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <?php // Thư viện dùng chung toàn website -- KHÔNG ĐƯỢC SỬA ?>
    <link href="css/vendor/normalize.css" rel="stylesheet" />
    <link href="css/vendor/font-awesome.css" rel="stylesheet" />
    <link href="css/hitech/ht-base.css" rel="stylesheet" />
    <script src="js/vendor/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="js/hitech/ht-base.js" type="text/javascript"></script>

    <?php // Thư viện chỉ dùng cho trang này -- KHÔNG ĐƯỢC SỬA ?>
    <link rel="stylesheet" href="js/vendor/slick/slick.css">
    <script type="text/javascript" src="js/vendor/slick/slick.js"></script>

    <script type="text/javascript" src="js/vendor/simplescroll/simplescroll.js"></script>
    <link rel="stylesheet" href="js/vendor/simplescroll/simplescroll.css"type="text/css">
    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/style.js" type="text/javascript"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>
    <link href="css/danh-sach-khach-hang.css" rel="stylesheet" />
    <link href="css/tin-tuc.css" rel="stylesheet" />
</head>
<body>
    <!-- BEGIN HEADER -->
	<?php include('header.php'); ?>
    <!-- END HEADER -->

    <!-- BEGIN CONTENT -->
    <div class="s-banner-1">
        <div class="container">
            <div class="s_content">
                <h1 class="title">Danh sách khách hàng</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>

    <div class="s-home-27">
        <div class="container">
            <div class="row row-flex">
                <div class="col-12 col-md-3">
                    <div class="s_title"><h3>Những con số của</h3><h2>1BOSS</h2></div>
                </div>
                <div class="col-12 col-md-9 clearfix">
                    <div class="c-statistic-2">
                        <div class="c_content">
                            <div class="c_number"><span>5</span><span>+</span></div>
                            <h2 class="c_desc">Năm kinh nghiệm</h2>
                       </div>
                    </div>
                    <div class="c-statistic-2">
                        <div class="c_content">
                            <div class="c_number"><span>20</span><span>+</span></div>
                            <h2 class="c_desc">Nhân lực</h2>
                       </div>
                    </div>
                    <div class="c-statistic-2">
                        <div class="c_content">
                            <div class="c_number"><span>10</span><span>+</span></div>
                            <h2 class="c_desc">Kỹ sư IT</h2>
                        </div>
                    </div>
                    <div class="c-statistic-2">
                        <div class="c_content">
                            <div class="c_number"><span>100</span><span>+</span></div>
                            <h2 class="c_desc">Đối tác</h2>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s-section-6">
        <div class="container">
            <div class="c-headline-9">
                <h5 class="c_sub">1BOSS</h5>
                <h2 class="c_name">Khách hàng tiêu biểu</h2>
            </div>
            <ul class="scroller">
                <?php for ($i = 1; $i <= 8; $i++){ ?>
                <li>
                    <a href="" class="b-card-47">
                        <div class="b_thumb ht-ratio--55">
                            <img src="images/brand/brand-<?php echo $i ?>.png" alt="" class="ht-ratio__img">
                        </div>
                    </a>
                </li>
                <?php } ?>
            </ul>
            <ul class="scroller">
                <?php for ($i = 8; $i >= 1; $i--){ ?>
                <li>
                    <a href="" class="b-card-47">
                        <div class="b_thumb ht-ratio--55">
                            <img src="images/brand/brand-<?php echo $i ?>.png" alt="" class="ht-ratio__img">
                        </div>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <div class="s-tab-4">
        <div class="container">
            <ul class="s_menu">
                <li class="is-active"><a href="#tab-1">CNTT</a></li>
                <li><a href="#tab-2">Kế toán</a></li>
                <li><a href="#tab-3">Tài chính</a></li>
                <li><a href="#tab-4">Ngân hàng</a></li>
            </ul>
            <ul class="s_content">
                <li id="tab-1">
                    <?php for ($i = 1; $i <= 5; $i++){ ?>
                        <div class="col-6 col-xs-3 col-md-2-4">
                            <a href="" class="b-card-47">
                                <div class="b_thumb ht-ratio--55">
                                    <img src="images/brand/brand-<?php echo $i ?>.png" alt="" class="ht-ratio__img">
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </li>
                <li id="tab-2">
                    <?php for ($i = 4; $i <= 8; $i++){ ?>
                        <div class="col-6 col-xs-3 col-md-2-4">
                            <a href="" class="b-card-47">
                                <div class="b_thumb ht-ratio--55">
                                    <img src="images/brand/brand-<?php echo $i ?>.png" alt="" class="ht-ratio__img">
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </li>
                <li id="tab-3">
                    <?php for ($i = 1; $i <= 5; $i++){ ?>
                        <div class="col-6 col-xs-3 col-md-2-4">
                            <a href="" class="b-card-47">
                                <div class="b_thumb ht-ratio--55">
                                    <img src="images/brand/brand-<?php echo $i ?>.png" alt="" class="ht-ratio__img">
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </li>
                <li id="tab-4">
                    <?php for ($i = 4; $i <= 8; $i++){ ?>
                        <div class="col-6 col-xs-3 col-md-2-4">
                            <a href="" class="b-card-47">
                                <div class="b_thumb ht-ratio--55">
                                    <img src="images/brand/brand-<?php echo $i ?>.png" alt="" class="ht-ratio__img">
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </div>

    <div class="s-news-1">
        <div class="container">
            <div class="c-headline-9">
                <h5 class="c_sub">1BOSS</h5>
                <h2 class="c_name">CASE STUDY</h2>
            </div>
            <div class="row row-flex">
                <?php for ($i = 1; $i <= 3; $i++){ ?>
                    <div class="col-6 col-xs-4">
                        <a href="case-study-chi-tiet.php" class="b-card-43">
                            <div class="b_thumb ht-ratio--75">
                                <img src="images/news/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img">
                            </div>
                            <div class="b_content">
                                <span class="b_cate">Truyền thông</span>
                                <span class="b_date"><i class="fa fa-calendar" aria-hidden="true"></i> 20/05/2021</span>
                            </div>
                            <h3 class="b_title">Tiêu đề bài viết của doanh nghiệp</h3>
                            <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp.</h4>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="s-home-6">
        <div class="container">
            <div class="s_top">
                <h3 class="title">Khách hàng của chúng tôi</h3>
                <div class="desc">Chúng tôi hiểu mỗi đối tác đều có những mục tiêu và ưu tiên riêng. Bạn có thể chọn hợp tác với Base.vn theo cách bạn cảm thấy phù hợp. Chúng tôi có hai chương trình cho bạn chọn lựa:</div>
            </div>
            <div class="row">
                <div class="col-sm-11 center-block">
                    <div class="b-sslide-default">
                        <div class="slick-slider">
                        <?php for ($i = 1; $i <= 2; $i++){ ?>
                            <div class="b-card-10">
                                <div class="b_avatar">
                                    <span><img src="images/avatar/avatar-<?php echo $i ?>.png" alt=""></span>
                                    <h2>Saigon Hitech</h2>
                                    <h3>Nhân viên - Saigon Hitech</h3>
                                </div>
                                <div class="b_comment">
                                    <fieldset>
                                        <legend><i class="fa fa-comments-o" aria-hidden="true"></i></legend>
                                        <p>Các bạn có tinh thần làm việc tích cực, hỗ trợ khách hàng tốt, nhất là giai đoạn sau bán hàng. Tôi đánh giá cao tính chuyên nghiệp khi làm việc với đội ngũ của các bạn.</p>
                                    </fieldset>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <script>
        /* BEGIN s-tab-4 */
        $(document).ready(function() {
            $('.s-tab-4 .s_menu a').click(function(event) {
                event.preventDefault();
                $(this).parent().addClass('is-active');
                $(this).parent().siblings().removeClass('is-active');
                var tab = $(this).attr('href');
                $(this).closest('.s-tab-4').find('.s_content li').not(tab).css('display', 'none');
                $(this).closest('.s-tab-4').find(tab).fadeIn();
            });

        });
        /* END s-tab-4 */
        $(document).ready(function() {
            $('.s-home-6 .slick-slider').slick();

            $(".scroller").simplyScroll();
        });
    </script>
    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>