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
    <link href="css/san-pham-chi-tiet.css" rel="stylesheet" />
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
                    <h2 class="title">Phân hệ 1</h2>
                </div>
                <div class="s_desc">Trong điều kiện kinh tế tăng trưởng nóng của Việt Nam hiện nay, ngành Dự án-Xây dựng đang là một ngành hot, với nhiều cơ hội phát triển, đi cùng với cơ hội, ngành dự án – xây dựng cũng phải đối mặt với nhiều đặc thù kinh doanh khác biệt, cùng nhiều thách thức trong công tác quản lý doanh nghiệp nói chung và quản trị dự án nói riêng. </div>
                <div class="s_btn">
                    <a href="javascript:;" ht-trigger="c-modal" ht-target="#formContact" class="c-button-4"><span class="fa fa-pencil-square-o">Yêu cầu tư vấn & Demo</span></a>
                    <a href="" class="c-button-4"><span class="fa fa-info-circle">Trải nghiệm ngay</span></a>
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
    <!-- END CONTENT -->
    <div class="s-why-1">
        <div class="container">
            <h2 class="s_title">Lợi ích của nhóm phân hệ với hoạt động cụ thể trong doanh nghiệp</h2>
            <div class="row">
                <div class="col-12 col-xs-4">
                    <div class="b-card-24">
                        <div class="b_thumb ht-ratio--100"><img src="images/svg/img-5.png" alt="" class="ht-ratio__img"></div>
                        <h3 class="b_title">Tiết kiệm 44,800 giờ làm việc</h3>
                        <h4 class="b_desc text-center">Là thời gian tiêu tốn mỗi năm của một doanh nghiệp quy mô 100 người dành cho việc xử lý các yêu cầu, đề xuất nội bộ</h4>
                    </div>
                </div>
                <div class="col-12 col-xs-4">
                    <div class="b-card-24">
                        <div class="b_thumb ht-ratio--100"><img src="images/svg/img-6.png" alt="" class="ht-ratio__img"></div>
                        <h3 class="b_title">Minh bạch hóa thông tin</h3>
                        <h4 class="b_desc text-center">Các yêu cầu, đề xuất được số hóa và đồng nhất theo các biểu mẫu chung giúp bạn dễ dàng tạo, xử lý và thống kê</h4>
                    </div>
                </div>
                <div class="col-12 col-xs-4">
                    <div class="b-card-24">
                        <div class="b_thumb ht-ratio--100"><img src="images/svg/img-7.png" alt="" class="ht-ratio__img"></div>
                        <h3 class="b_title">Ứng dụng mobile</h3>
                        <h4 class="b_desc text-center">Xử lý nhanh chóng mọi yêu cầu, đề xuất ngay trên smartphone của bạn, dù bạn đang ở đâu</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s-tab-5">
        <div class="container">
            <div class="s-headline-30">
                <h3>Tiện lợi. Minh bạch. Dễ dàng tổng hợp.</h3>
                <p>1BOSS được thiết kế để công việc của bạn trở thành niềm vui.</p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <ul class="s_menu">
                        <li class="is-active">
                            <a href="#tab-1">
                                <span>Số hóa quy trình xử lý</span>
                                <span>Xây dựng các biểu mẫu chuẩn cho toàn bộ quy trình xử lý Yêu cầu - Đề xuất nội bộ.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-2">
                                <span>Minh bạch thông tin & thẩm quyền ra quyết định</span>
                                <span>Công việc khó nhất đối với doanh nghiệp là xây dựng nhiệm vụ & trách nhiệm rõ ràng cho từng cá nhân trong công việc hàng ngày. Base Request sẽ giúp bạn làm việc này thực sự dễ dàng.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-3">
                                <span>Xử lý đề xuất & tương tác</span>
                                <span>Base Request giúp bạn xử lý các đề xuất nhanh chóng và linh hoạt trong mọi tình huống.</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <ul class="s_content">
                        <li id="tab-1"><div><img src="images/product/banner_1.png" alt=""></div></li>
                        <li id="tab-2"><div><img src="images/product/banner_2.png" alt=""></div></li>
                        <li id="tab-3"><div><img src="images/product/banner_3.png" alt=""></div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="s-feature-1">
        <div class="s_top">
            <div class="s-headline-30">
                <h3>Tính năng của phân hệ 1</h3>
                <p>Mạng truyền thông nội bộ dành cho doanh nghiệp</p>
            </div>
        </div>

        <div class="s_list">
            <div class="s_box">
                <div class="container">
                    <div class="s-headline-30">
                        <h3>Homepage của doanh nghiệp</h3>
                        <p>Một giao diện duy nhất để doanh nghiệp truyền tải những thông điệp quan trọng</p>
                    </div>
                    <div class="row row-flex">
                        <div class="col-12 col-md-7">
                            <div class="ht-ratio--60"><img src="images/product/features-1.png" alt="" class="ht-ratio__img"></div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="s_content">
                                <div class="s_block">
                                    <div class="icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
                                    <div class="content">
                                        <h3>Thông tin</h3>
                                        <p>Nhấn mạnh thông tin về Tầm nhìn, Sứ mệnh, Giá trị cốt lõi</p>
                                    </div>
                                </div>
                                <div class="s_block">
                                    <div class="icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
                                    <div class="content">
                                        <h3>Thông điệp chia sẻ</h3>
                                        <p>Mọi nhân viên đều nắm được thông điệp của doanh nghiệp</p>
                                    </div>
                                </div>
                                <div class="s_block">
                                    <div class="icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
                                    <div class="content">
                                        <h3>Tính nhất quán</h3>
                                        <p>Thông điệp của doanh nghiệp được nhất quán trong mọi giao diện trong Base Inside</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="s_box">
                <div class="container">
                    <div class="s-headline-30">
                        <h3>CEO Letter và Nguyên tắc làm việc</h3>
                        <p>Truyền thông nội bộ phải xuất phát từ phía lãnh đạo</p>
                    </div>
                    <div class="row row-flex">
                        <div class="col-12 col-md-7">
                            <div class="ht-ratio--60"><img src="images/product/features-2.png" alt="" class="ht-ratio__img"></div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="s_content">
                                <div class="s_block">
                                    <div class="icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
                                    <div class="content">
                                        <h3>Truyền thông điệp</h3>
                                        <p>Lãnh đạo công ty được định hướng để liên tục truyền thông điệp tới nhân viên</p>
                                    </div>
                                </div>
                                <div class="s_block">
                                    <div class="icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
                                    <div class="content">
                                        <h3>Thông báo tới nhân viên</h3>
                                        <p>Ngay lập tức gửi thông báo trên hệ thống và tới email cho nhân viên</p>
                                    </div>
                                </div>
                                <div class="s_block">
                                    <div class="icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
                                    <div class="content">
                                        <h3>Tính minh bạch</h3>
                                        <p>Minh bạch nguyên tắc làm việc trong doanh nghiệp</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="s_box">
                <div class="container">
                    <div class="s-headline-30">
                        <h3>Xây dựng trang tin nội bộ</h3>
                        <p>Tạo ra một trang VNExpress ngay trong chính doanh nghiệp của bạn</p>
                    </div>
                    <div class="row row-flex">
                        <div class="col-12 col-md-7">
                            <div class="ht-ratio--60"><img src="images/product/features-3.png" alt="" class="ht-ratio__img"></div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="s_content">
                                <div class="s_block">
                                    <div class="icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
                                    <div class="content">
                                        <h3>Dòng chảy thông tin</h3>
                                        <p>Tạo ra dòng chảy thông tin trong doanh nghiệp</p>
                                    </div>
                                </div>
                                <div class="s_block">
                                    <div class="icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
                                    <div class="content">
                                        <h3>Cập nhật tin tức</h3>
                                        <p>Cập nhật tin tức dễ dàng nhanh chóng</p>
                                    </div>
                                </div>
                                <div class="s_block">
                                    <div class="icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
                                    <div class="content">
                                        <h3>Khoa học</h3>
                                        <p>Lưu trữ và trình bày tin tức khoa học, rõ ràng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s-why-1">
        <div class="container">
            <h2 class="s_title">Điểm khác biệt của chúng tôi</h2>
            <div class="row">
                <div class="col-12 col-xs-4">
                    <div class="b-card-24">
                        <div class="b_thumb ht-ratio--75"><img src="images/svg/img-1.png" alt="" class="ht-ratio__img"></div>
                        <h3 class="b_title">Tiết kiệm 44,800 giờ làm việc</h3>
                        <h4 class="b_desc text-center">Là thời gian tiêu tốn mỗi năm của một doanh nghiệp quy mô 75 người dành cho việc xử lý các yêu cầu, đề xuất nội bộ</h4>
                    </div>
                </div>
                <div class="col-12 col-xs-4">
                    <div class="b-card-24">
                        <div class="b_thumb ht-ratio--75"><img src="images/svg/img-2.png" alt="" class="ht-ratio__img"></div>
                        <h3 class="b_title">Minh bạch hóa thông tin</h3>
                        <h4 class="b_desc text-center">Các yêu cầu, đề xuất được số hóa và đồng nhất theo các biểu mẫu chung giúp bạn dễ dàng tạo, xử lý và thống kê</h4>
                    </div>
                </div>
                <div class="col-12 col-xs-4">
                    <div class="b-card-24">
                        <div class="b_thumb ht-ratio--75"><img src="images/svg/img-3.png" alt="" class="ht-ratio__img"></div>
                        <h3 class="b_title">Ứng dụng mobile</h3>
                        <h4 class="b_desc text-center">Xử lý nhanh chóng mọi yêu cầu, đề xuất ngay trên smartphone của bạn, dù bạn đang ở đâu</h4>
                    </div>
                </div>
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


    <script>
        /* BEGIN s-home-6 */
        /* Thêm thư viện js/vendor/slick/ */
        $(document).ready(function() {
            $('.s-home-6 .slick-slider').slick();
        });
        /* END s-home-6 */
        /* BEGIN s-tab-5 */
        $(document).ready(function() {
            $('.s-tab-5 .s_menu a').click(function(event) {
                event.preventDefault();
                $(this).parent().addClass('is-active');
                $(this).parent().siblings().removeClass('is-active');
                var tab = $(this).attr('href');
                $(this).closest('.s-tab-5').find('.s_content li').not(tab).css('display', 'none');
                $(this).closest('.s-tab-5').find(tab).fadeIn();
            });
        });
        /* END s-tab-5 */
    </script>
    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>