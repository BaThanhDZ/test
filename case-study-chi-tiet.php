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
                <h1 class="title">CASE STUDY</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
    <div class="p-detail-3">
        <div class="container">
            <div class="p_box">
                <h1 class="p_title">Tiêu đề bài viết case study chi tiết</h1>
                <ul class="p_source align-items">
                    <li>
                        <a href="" class="c-icon-border--fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="" class="c-icon-img c-icon-border--zalo" style="background-image: url('images/icons/zalo-b.png');"></a>
                    </li>
                    <li class="date"><span class="fa fa-calendar">03/09/2021</span></li>
                </ul>
                <h3 class="p_desc">Bật mí 4 biện pháp cấp thiết doanh nghiệp cần tiến hành để hỗ trợ nhân viên vượt qua giai đoạn dịch bệnh khó khăn, và cũng là tự giữ ổn định cho chính nội bộ tổ chức.</h3>
                <div class="ht-format-detail">
                    <p style="text-align:center"><img src="images/news/news-1.png" alt="" /></p>
                    <p>Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp.</p>
                    <p>Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp.</p>
                    <p style="text-align:center"><img src="images/news/news-2.png" alt="" /></p>
                    <p>Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp.</p>
                    <p>Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp.</p>
                </div>
                <div class="p_other">
                    <div class="c-headline-13">
                        <h2 class="c_name">Các case stydy khác</h2>
                    </div>
                    <div class="row row-flex">
                        <?php for ($i = 1; $i <= 8; $i++){ ?>
                            <div class="col-6">
                                <a href="case-study-chi-tiet.php" class="b-card-43">
                                    <div class="b_thumb ht-ratio--75"><img src="images/news/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
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
        </div>
    </div>
    <!-- END CONTENT -->
    <style type="text/css">
        .p-detail-3{
            background-color: #f5f5f5;
            margin-bottom: 0;
            border-bottom: 1px solid #ddd;
        }
        .p-detail-3 .p_box {
            padding: 50px;
            transform: translateY(-20px);
        }
        @media screen and (max-width: 767px) {
            .p-detail-3 .p_box{
                padding: 15px;
            }
        }
    </style>
    <!-- BEGIN FOOTER -->
    <?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>