<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1, user-scalable=no, viewport-fit=cover">
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
    <link href="css/home.css" rel="stylesheet" />
    <script src="js/home.js" type="text/javascript"></script>
</head>
<body>
    <!-- BEGIN HEADER -->
	<?php include('header.php'); ?>
    <!-- END HEADER -->

    <!-- BEGIN CONTENT -->
    <div class="s-home-8">
        <div class="container">
            <div class="s_lbox">
                <div class="s_title">
                    <h5 class="sub">1BOSS</h5>
                    <h2 class="title">NỀN TẢNG QUẢN TRỊ DOANH NGHIỆP</h2>
                </div>
                <div class="s_desc">Trong điều kiện kinh tế tăng trưởng nóng của Việt Nam hiện nay, ngành Dự án-Xây dựng đang là một ngành hot, với nhiều cơ hội phát triển, đi cùng với cơ hội, ngành dự án – xây dựng cũng phải đối mặt với nhiều đặc thù kinh doanh khác biệt, cùng nhiều thách thức trong công tác quản lý doanh nghiệp nói chung và quản trị dự án nói riêng. </div>
                <div class="s_btn">
                    <a href="javascript:;" ht-trigger="c-modal" ht-target="#formRegister" class="c-button-4"><span class="fa fa-pencil-square-o">Đăng ký ngay</span></a>
                    <a href="lien-he.php" class="c-button-4"><span class="fa fa-info-circle">Liên hệ tư vấn</span></a>
                </div>
            </div>
            <div class="s_rbox">
                <div class="s_thumb">
                    <div class="ht-ratio--75">
                        <span class="ht-ratio__img"> <!--610x335-->
                            <img src="images/about.png" alt="">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s-product-1">
        <div class="container">
            <div class="c-headline-9">
                <h5 class="c_sub">Sản phẩm</h5>
                <h2 class="c_name">Tích hợp tất cả các ứng dụng doanh nghiệp của bạn đang cần trên cùng một nền tảng duy nhất</h2>
            </div>
            <div class="row row-flex">
            <?php for ($i = 1; $i <= 5; $i++){ ?>
                <div class="col-6 col-md-2-4">
                    <a href="san-pham.php" class="b-card-21">
                        <div class="b_thumb ht-ratio--75"><img src="images/svg/img-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
                        <h3 class="b_title">Nhóm phân hệ <?php echo $i ?></h3>
                        <h4 class="b_desc">Bộ giải pháp quản lý công việc, quy trình và nâng cao năng suất</h4>
                        <span class="b_more"><img src="images/product/product-2.png" alt=""> Xem thêm </span>
                    </a>
                </div>
            <?php } ?>

            </div>
             <div class="text-center ht-mrt15">
                <a href="san-pham.php" class="c-button-10">Xem thêm</a>
            </div>
        </div>
    </div>

    <div class="s-project-1">
        <div class="container">
            <div class="s_box">
                <div class="c-headline-9">
                    <h5 class="c_sub">Giải pháp</h5>
                    <h2 class="c_name">Tích hợp tất cả các ứng dụng doanh nghiệp của bạn đang cần trên cùng một nền tảng duy nhất</h2>
                </div>
                <div class="s_top">
                    <div class="s_title">
                        <h2>Đặc thù nghành</h2>
                    </div>
                </div>
                <div class="row row-flex">
                <?php for ($i = 1; $i <= 4; $i++){ ?>
                    <div class="col-12 col-xs-6 col-lg-3">
                        <a href="giai-phap-chi-tiet.php" class="b-card-33">
                            <div class="b_thumb ht-ratio--75"><img src="images/svg/img-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
                            <div class="b_content">
                                <h3 class="b_title">Tên giải pháp <?php echo $i ?></h3>
                                <h4 class="b_desc">Bộ giải pháp quản lý công việc, quy trình và nâng cao năng suất</h4>
                                <span class="b_more"><img src="images/product/product-2.png" alt=""> Xem thêm </span>
                            </div>
                        </a>
                    </div>
                <?php } ?>

                </div>
            </div>
            <div class="s_box">
                <div class="s_top">
                    <div class="s_title">
                        <h2>Công việc - phòng ban</h2>
                    </div>
                </div>
                <div class="row row-flex">
                    <?php for ($i = 1; $i <= 3; $i++){ ?>
                        <div class="col-12 col-xs-6 col-md-4">
                            <a href="giai-phap-chi-tiet.php" class="b-card-33">
                                <div class="b_thumb ht-ratio--75"><img src="images/svg/img-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
                                <div class="b_content">
                                    <h3 class="b_title">Tên giải pháp <?php echo $i ?></h3>
                                    <h4 class="b_desc">Bộ giải pháp quản lý công việc, quy trình và nâng cao năng suất</h4>
                                    <span class="b_more"><img src="images/product/product-2.png" alt=""> Xem thêm </span>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="s-special-1">
        <div class="container">
            <div class="c-headline-9">
                <h5 class="c_sub">Những điểm Khác biệt</h5>
            </div>
            <div class="row row-flex">
                <div class="col-md-4">
                    <div class="b-card-26">
                        <div class="b_stt">1</div>
                        <div class="b_thumb ht-ratio--100"><img src="images/icon/icon-1.png" alt="" class="ht-ratio__img"></div>
                        <h3 class="b_title">Tính năng</h3>
                        <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp.</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="b-card-26">
                        <div class="b_stt">2</div>
                        <div class="b_thumb ht-ratio--100"><img src="images/icon/icon-2.png" alt="" class="ht-ratio__img"></div>
                        <h3 class="b_title">Công nghệ</h3>
                        <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp.</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="b-card-26">
                        <div class="b_stt">3</div>
                        <div class="b_thumb ht-ratio--100"><img src="images/icon/icon-3.png" alt="" class="ht-ratio__img"></div>
                        <h3 class="b_title">Kinh nghiệm</h3>
                        <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s-section-1">
        <div class="container">
            <div class="c-headline-9">
                <h5 class="c_sub">Danh sách khách hàng</h5>
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

    <div class="s-section-2">
        <div class="container">
            <div class="c-headline-9">
                <h5 class="c_sub">Khách hàng đánh giá</h5>
            </div>
            <div class="s-home-6">
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
    </div>

     <div class="s-section-1">
        <div class="container">
            <div class="c-headline-9">
                <h5 class="c_sub">Case study</h5>
            </div>
            <div class="s-home-2">
                <div class="b-sslide-default">
                    <div class="slick-slider">
                    <?php for ($i = 1; $i <= 5; $i++){ ?>
                        <div class="item">
                            <a href="blog-chi-tiet.php" class="b-card-23">
                                <div class="b_thumb ht-ratio--75"><img src="images/news/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
                                <div class="b_content">
                                    <div class="b_date">
                                        <span>30/09/2021</span>
                                        <span>Case-study</span>
                                    </div>
                                    <h3 class="b_title">Giải pháp quản trị doanh nghiệp “không giấy tờ”</h3>
                                    <h4 class="b_desc">Được phát triển từ công nghệ điện toán đám mây và ứng dụng trí tuệ nhân tạo (AI), 1Office giúp các công ty quản lý, điều hành hoàn toàn trực tuyến.</h4>
                                </div>

                            </a>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
            <div class="text-center ht-mrt15 ht-mrb30">
                <a href="case-study.php" class="c-button-10">Xem thêm</a>
            </div>
        </div>
    </div>

    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>