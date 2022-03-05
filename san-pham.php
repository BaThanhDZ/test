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

    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/style.js" type="text/javascript"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>
    <link href="css/san-pham.css" rel="stylesheet" />
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
                    <h5 class="sub">Phân hệ 1</h5>
                    <h2 class="title">NỀN TẢNG QUẢN TRỊ DOANH NGHIỆP</h2>
                </div>
                <div class="s_desc">Trong điều kiện kinh tế tăng trưởng nóng của Việt Nam hiện nay, ngành Dự án-Xây dựng đang là một ngành hot, với nhiều cơ hội phát triển, đi cùng với cơ hội, ngành dự án – xây dựng cũng phải đối mặt với nhiều đặc thù kinh doanh khác biệt, cùng nhiều thách thức trong công tác quản lý doanh nghiệp nói chung và quản trị dự án nói riêng. </div>
                <div class="s_btn">
                    <a href="javascript:;" ht-trigger="c-modal" ht-target="#formRegister" class="c-button-4"><span class="fa fa-pencil-square-o">Đăng ký</span></a>
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

    <div class="s-img-1">
        <div class="container">
            <div class="ht-ratio--35">
                <img src="images/slides/slide-1.jpg" alt="" class="ht-ratio__img">
            </div>
        </div>
    </div>


    <div class="s-product-1 ht-mrt45">
        <div class="container">
            <div class="s-headline-30">
                <h3>Danh sách sản phẩm</h3>
                <p>Kết nối tất cả các phòng ban, giúp công việc hoàn thành nhanh hơn</p>
            </div>
            <div class="row row-flex">
            <?php for ($i = 1; $i <= 4; $i++){ ?>
                <div class="col-6 col-md-3">
                    <a href="san-pham-chi-tiet.php" class="b-card-21">
                        <div class="b_thumb ht-ratio--75"><img src="images/svg/img-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
                        <h3 class="b_title">Phân hệ <?php echo $i ?></h3>
                        <h4 class="b_desc">Bộ giải pháp quản lý công việc, quy trình và nâng cao năng suất</h4>
                        <span class="b_more"><img src="images/product/product-2.png" alt=""> Xem thêm </span>
                    </a>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 4; $i++){ ?>
                <div class="col-6 col-md-3">
                    <a href="san-pham-chi-tiet.php" class="b-card-21">
                        <div class="b_thumb ht-ratio--75"><img src="images/svg/img-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
                        <h3 class="b_title">Phân hệ <?php echo $i ?></h3>
                        <h4 class="b_desc">Bộ giải pháp quản lý công việc, quy trình và nâng cao năng suất</h4>
                        <span class="b_more"><img src="images/product/product-2.png" alt=""> Xem thêm </span>
                    </a>
                </div>
            <?php } ?>

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
                <h3 class="s_title">Lợi ích của nhóm phân hệ</h3>
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

    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>