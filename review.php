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
    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/style.js" type="text/javascript"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>
    <link href="css/review.css" rel="stylesheet" />
    <link href="css/tin-tuc.css" rel="stylesheet" />
</head>
<body>
    <!-- BEGIN HEADER -->
	<?php include('header.php'); ?>
    <!-- END HEADER -->

    <!-- BEGIN CONTENT -->

    <div class="s-video-1">
        <div class="container">
            <div class="s_top">
                <h3 class="title">Khách hàng nói về chúng tôi</h3>
                <div class="desc">Chia sẻ từ những khách hàng đã chuyển đổi số thành công với 1BOSS.vn</div>
            </div>
            <div class="row row-flex">
            <?php for ($i = 1; $i <= 3; $i++){ ?>
                <div class="col-md-4">
                    <div class="b-card-30">
                        <div class="b_thumb ht-ratio--55"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/zwKrd76eWeM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" class="ht-ratio__img"></iframe></div>
                        <h3 class="b_title">TWITTER BEANS COFFEE</h3>
                        <h4 class="b_desc">"Kể từ khi dùng 1BOSS, tôi và team quản trị đã thấy chất lượng công việc được cải thiện rõ ràng. Ngoài ra, 1BOSS còn giúp đảm bảo quyền lợi của nhân viên."</h4>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>


    <div class="s-home-6">
        <div class="container">
            <div class="b-sslide-default">
                <div class="slick-slider">
                    <?php for ($i = 1; $i <= 2; $i++){ ?>
                    <div class="item">
                        <div class="b-card-17">
                            <div class="row row-flex">
                                <div class="col-12 col-sm-6 col-md-5">
                                    <div class="b_avatar ht-ratio--100">
                                        <span><img src="images/avatar/avatar-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-7">
                                    <div class="b_content">
                                        <div class="b_box">
                                            <p class="desc">Các bạn có tinh thần làm việc tích cực, hỗ trợ khách hàng tốt, nhất là giai đoạn sau bán hàng. Tôi đánh giá cao tính chuyên nghiệp khi làm việc với đội ngũ của các bạn.</p>
                                            <div class="name"><span>Nguyễn Văn ABC //</span><span> Giám đốc công ty ABC</span></div>
                                            <a class="link" href="case-study-chi-tiet.php">Link case study <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>

    <div class="s-review-1">
        <div class="container">
            <div class="c-headline-9">
                <h5 class="c_sub">1BOSS</h5>
                <h2 class="c_name">Xem review của chúng tôi trên app</h2>
            </div>
            <div class="b-sslide-default">
                <div class="slick-slider">
                <?php for ($i = 1; $i <= 4; $i++){ ?>
                    <div class="item">
                        <div class="b-card-39">
                            <div class="b_thumb ht-ratio--150"><img src="images/review.jpg" alt="" class="ht-ratio__img"></div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <style type="text/css">
        .s-video-1 {
            margin: 30px 0 50px;
        }
        .s-review-1 .item{
            margin: 5px 10px;
        }
    </style>
     <script>
        /* BEGIN s-home-6 */
        /* Thêm thư viện js/vendor/slick/ */
        $(document).ready(function() {
            $('.s-home-6 .slick-slider').slick();
        });
        /* END s-home-6 */
        /* Thêm thư viện js/vendor/slick/ */
        $(document).ready(function() {
            $('.s-review-1 .slick-slider').slick({
                slidesToShow: 3,
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
    </script>
    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>