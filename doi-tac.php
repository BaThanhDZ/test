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
    <link rel="stylesheet" href="js/vendor/fancybox/fancybox.css">
    <script type="text/javascript" src="js/vendor/fancybox/fancybox.js"></script>

    <link rel="stylesheet" href="js/vendor/slick/slick.css">
    <script type="text/javascript" src="js/vendor/slick/slick.js"></script>
    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/style.js" type="text/javascript"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>
    <link href="css/doi-tac.css" rel="stylesheet" />
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
                    <h2 class="title">CHƯƠNG TRÌNH ĐỐI TÁC CHIẾN LƯỢC</h2>
                </div>
                <div class="s_desc">Trong điều kiện kinh tế tăng trưởng nóng của Việt Nam hiện nay, ngành Dự án-Xây dựng đang là một ngành hot, với nhiều cơ hội phát triển, đi cùng với cơ hội, ngành dự án – xây dựng cũng phải đối mặt với nhiều đặc thù kinh doanh khác biệt, cùng nhiều thách thức trong công tác quản lý doanh nghiệp nói chung và quản trị dự án nói riêng. </div>
                <div class="s_btn">
                    <a href="#dangky" class="c-button-4 data-scroll"><span class="fa fa-pencil-square-o">Đăng ký</span></a>
                    <a href="gioi-thieu.php" class="c-button-4"><span class="fa fa-info-circle">Về 1BOSS</span></a>
                </div>
            </div>
            <div class="s_rbox">
                <div class="s_thumb">
                    <div class="ht-ratio--75">
                        <span class="ht-ratio__img"> <!--610x335-->
                            <img src="images/about-4.png" alt="">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s-special-1">
        <div class="container">
            <div class="c-headline-9">
                <h5 class="c_sub">1BOSS</h5>
                <h2 class="c_name">Lý do nên hợp tác với chúng tôi</h2>
            </div>
            <div class="row row-flex">
            <?php for ($i = 1; $i <= 3; $i++){ ?>
                <div class="col-md-4">
                    <div class="b-card-26">
                        <div class="b_stt"><?php echo $i ?></div>
                        <div class="b_thumb ht-ratio--100"><img src="images/icon/icon-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
                        <h3 class="b_title">Tiêu đề bài viết</h3>
                        <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp.</h4>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>

    <div class="s-register-1" id="dangky">
        <div class="container">
            <div class="s_top">
                <h3 class="title">Chương trình nào phù hợp với bạn?</h3>
                <div class="desc">Chúng tôi hiểu mỗi đối tác đều có những mục tiêu và ưu tiên riêng. Bạn có thể chọn hợp tác với Base.vn theo cách bạn cảm thấy phù hợp. Chúng tôi có hai chương trình cho bạn chọn lựa:</div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="s_box">
                        <h3 class="title">CTV</h3>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</div>
                        <a href="javascript:;" ht-trigger="c-modal" ht-target="#formCTV" class="c-button-8">Đăng ký CTV <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="s_customer">
                        <h2 class="s_title">CTV Tiêu Biểu</h2>
                        <div class="row">
                            <?php for ($i = 1; $i <= 4; $i++){ ?>
                                <div class="col-3">
                                    <a href="" class="b-card-47">
                                        <div class="b_thumb ht-ratio--55">
                                            <img src="images/brand/brand-<?php echo $i ?>.png" alt="" class="ht-ratio__img">
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="s_quote">
                        <div class="b-card-10">
                            <div class="b_avatar">
                                <span><img src="images/avatar/avatar-1.png" alt=""></span>
                                <h2>Saigon Hitech</h2>
                                <h3>Giám đốc</h3>
                            </div>
                            <div class="b_comment">
                                <fieldset>
                                    <legend><i class="fa fa-comments-o" aria-hidden="true"></i></legend>
                                    <p>Các bạn có tinh thần làm việc tích cực, hỗ trợ khách hàng tốt, nhất là giai đoạn sau bán hàng. Tôi đánh giá cao tính chuyên nghiệp khi làm việc với đội ngũ của các bạn.</p>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="s_box">
                        <h3 class="title">Đại lý</h3>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</div>
                        <a href="javascript:;" ht-trigger="c-modal" ht-target="#formDaily" class="c-button-8">Trở thành đại lý <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="s_customer">
                        <h2 class="s_title">Đại lý Tiêu Biểu</h2>
                        <div class="row">
                            <?php for ($i = 5; $i <= 8; $i++){ ?>
                                <div class="col-3">
                                    <a href="" class="b-card-47">
                                        <div class="b_thumb ht-ratio--55">
                                            <img src="images/brand/brand-<?php echo $i ?>.png" alt="" class="ht-ratio__img">
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="s_quote">
                        <div class="b-card-10">
                            <div class="b_avatar">
                                <span><img src="images/avatar/avatar-2.png" alt=""></span>
                                <h2>Saigon Hitech</h2>
                                <h3>Giám đốc</h3>
                            </div>
                            <div class="b_comment">
                                <fieldset>
                                    <legend><i class="fa fa-comments-o" aria-hidden="true"></i></legend>
                                    <p>Các bạn có tinh thần làm việc tích cực, hỗ trợ khách hàng tốt, nhất là giai đoạn sau bán hàng. Tôi đánh giá cao tính chuyên nghiệp khi làm việc với đội ngũ của các bạn.</p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s-why-2">
        <div class="container">
            <div class="col-md-6">
                <div class="ht-ratio--75">
                    <span class="ht-ratio__img">
                        <img src="images/about.png" alt="">
                    </span>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="s_title">Quyền lợi khi trở thành đối tác</h3>
                <div class="s_desc">
                    ASOFT được thành lập ngày 04 tháng 07 năm 2003, là công ty tư vấn quản lý và cung cấp giải pháp xây dựng hệ thống quản trị doanh nghiệp tự động hàng đầu tại Việt Nam.
                </div>
                <ul class="s_list">
                    <li>Giống như mạng xã hội, Workplace là nơi lãnh đạo có thể truyền tải thông điệp đến nhân viên qua tường công ty.</li>
                    <li>Thành viên có thể theo dõi thông tin cá nhân, đồng nghiệp, cấu trúc các phòng ban mà không cần phiền đến HR.</li>
                    <li>Tạo Group để nhóm, phòng ban dễ dàng trao đổi công việc. Mỗi thành viên đều có thể chia sẻ cảm xúc trên tường cá nhân của mình.</li>
                    <li>Tự động thông báo lịch sinh nhật của từng cá nhân đến mọi thành viên công ty để có kế hoạch bố trí tổ chức phù hợp.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="s-certificate-1" name="Chứng-chỉ-năng-lực-hoạt-động">
        <div class="container">
            <div class="c-headline-9">
                <h5 class="c_sub">1BOSS</h5>
                <h2 class="c_name">Thành tựu đạt được</h2>
            </div>
            <div class="s_desc">Trong suốt chặng đường phát triển, với đội ngũ nhân lực chuyên nghiệp, nhiệt tình đã không ngừng ra sức cải tiến sản phẩm, tự đổi mới chính mình. Và không phụ lòng mong đợi, ASOFT đã đạt được những thành công, củng cố vị thế của công ty trên thị trường</div>
            <div class="b-sslide-default">
                <div class="slick-slider wow fadeIn" data-wow-delay="0.2s">
                <?php for($i = 5; $i <= 8; $i++){ ?>
                    <div class="item">
                        <a class="b-card-38 s-shadow" href="images/nangluc/cn-<?php echo $i ?>.png" title="Chứng nhận năng lực xây dựng">
                            <div class="b_thumb ht-ratio--145"><img src="images/nangluc/cn-<?php echo $i ?>.png" alt="" class="ht-ratio__img" /></div>
                            <div class="b_title">Hình ảnh chúng tôi</div>
                            <div class="b_icon"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                        </a>
                    </div>
                <?php } ?>
                <?php for($i = 5; $i <= 8; $i++){ ?>
                    <div class="item">
                        <a class="b-card-38 s-shadow" href="images/nangluc/cn-<?php echo $i ?>.png" title="Chứng nhận năng lực xây dựng">
                            <div class="b_thumb ht-ratio--145"><img src="images/nangluc/cn-<?php echo $i ?>.png" alt="" class="ht-ratio__img" /></div>
                            <div class="b_title">Hình ảnh chúng tôi</div>
                            <div class="b_icon"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                        </a>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div id="formCTV" class="c-modal c-register" ht-close="c-modal"> <!-- Thay đổi tên id -->
        <div class="c-modal-box">
            <div class="c-modal-group" ht-skip="parent">
                <div class="c_close text--white" ht-close="c-modal"><i class="fa fa-times" aria-hidden="true"></i></div>
                <div class="c_body">
                    <div class="s-home-15">
                        <div class="s_contact">
                            <h2>Đăng ký CTV</h2>
                            <p>Vui lòng điền các thông tin dưới đây. Chúng tôi sẽ liên hệ lại trong 24h làm việc</p>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Hotline tư vấn và hỗ trợ: 0123456789 </li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ: Số 46, Đường số 5, phường 7, Quận Gò Vấp, TP.HCM </li>
                            </ul>
                        </div>

                        <?php include('form.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="formDaily" class="c-modal c-register" ht-close="c-modal"> <!-- Thay đổi tên id -->
        <div class="c-modal-box">
            <div class="c-modal-group" ht-skip="parent">
                <div class="c_close text--white" ht-close="c-modal"><i class="fa fa-times" aria-hidden="true"></i></div>
                <div class="c_body">
                    <div class="s-home-15">
                        <div class="s_contact">
                            <h2>Đăng ký đại lý</h2>
                            <p>Vui lòng điền các thông tin dưới đây. Chúng tôi sẽ liên hệ lại trong 24h làm việc</p>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Hotline tư vấn và hỗ trợ: 0123456789 </li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ: Số 46, Đường số 5, phường 7, Quận Gò Vấp, TP.HCM </li>
                            </ul>
                        </div>

                        <?php include('form.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="formlienhe" class="c-modal c-register" ht-close="c-modal"> <!-- Thay đổi tên id -->
        <div class="c-modal-box">
            <div class="c-modal-group" ht-skip="parent">
                <div class="c_close text--white" ht-close="c-modal"><i class="fa fa-times" aria-hidden="true"></i></div>
                <div class="c_body">
                    <div class="s-home-15">
                        <div class="s_contact">
                            <h2>Tìm hiểu thêm về chương trình cộng tác của 1BOSS</h2>
                            <p>Vui lòng điền các thông tin dưới đây. Chúng tôi sẽ liên hệ lại trong 24h làm việc</p>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Hotline tư vấn và hỗ trợ: 0123456789 </li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ: Số 46, Đường số 5, phường 7, Quận Gò Vấp, TP.HCM </li>
                            </ul>
                        </div>

                        <?php include('form.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s-pre-2">
        <div class="container">
            <div class="s_box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="s_content">
                            <h3 class="s_title">Sẵn sàng trở thành đối tác của 1BOSS.VN</h3>
                            <div class="s_button">
                                <a href="javascript:;" ht-trigger="c-modal" ht-target="#formCTV" class="c-btn c-button-9">Trở thành CTV của 1BOSS</a>
                                <a href="javascript:;" ht-trigger="c-modal" ht-target="#formDaily" class="c-btn c-button-9">Trở thành Đại lý của 1BOSS</a>
                            </div>
                            <div class="s_note">
                                <span>Vẫn cần tìm hiểu thêm?</span>
                                <a href="javascript:;" ht-trigger="c-modal" ht-target="#formlienhe">Liên hệ với chúng tôi</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="ht-ratio--75">
                            <span class="ht-ratio__img"> <!--610x335-->
                                <img src="images/about.png" alt="">
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END CONTENT -->
    <script>
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
    </script>
    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>