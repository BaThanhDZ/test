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
                <h1 class="title">Tin ưu đãi</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
    <div class="p-list-7">
        <div class="ht-page">
            <div class="container">
                <div class="p_top ht-mrt30">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="bai-viet.php" class="b-card-43">
                                <div class="b_thumb ht-ratio--75"><img src="images/news/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
                                <span class="b_date"><i class="fa fa-calendar" aria-hidden="true"></i> 20/05/2021</span>
                                <h3 class="b_title">Tiêu đề bài viết của doanh nghiệp</h3>
                                <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp.</h4>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <?php for ($i = 1; $i <= 4; $i++){ ?>
                            <a href="bai-viet.php" class="b-card-1">
                                <div class="b_thumb ht-ratio--75">
                                    <img src="images/news/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img"> <!-- Image: 200 x 150 -->
                                </div>
                                <h3 class="b_title">Tiêu đề bài viết của doanh nghiệp</h3>
                                <ul class="b_source">
                                    <li><span class="fa fa-clock-o">14/05/2020</span></li>
                                </ul>
                                <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này.</h4>
                            </a>
                            <?php } ?>
                        </div>
                    </div>

                </div>

                <div class="p_bot">
                   <div class="row row-flex">
                        <?php for ($i = 1; $i <= 6; $i++){ ?>
                            <div class="col-6 col-md-4">
                                <a href="bai-viet.php" class="b-card-43">
                                    <div class="b_thumb ht-ratio--75"><img src="images/news/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
                                    <span class="b_date"><i class="fa fa-calendar" aria-hidden="true"></i> 20/05/2021</span>
                                    <h3 class="b_title">Tiêu đề bài viết của doanh nghiệp</h3>
                                    <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp.</h4>
                                </a>
                            </div>
                        <?php } ?>
                        <?php for ($i = 1; $i <= 6; $i++){ ?>
                            <div class="col-6 col-md-4">
                                <a href="bai-viet.php" class="b-card-43">
                                    <div class="b_thumb ht-ratio--75"><img src="images/news/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
                                    <span class="b_date"><i class="fa fa-calendar" aria-hidden="true"></i> 20/05/2021</span>
                                    <h3 class="b_title">Tiêu đề bài viết của doanh nghiệp</h3>
                                    <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp.</h4>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <ul class="s-pagination-2 text-center">
                        <li><a href="javascript:;">«</a></li>
                        <li><a href="javascript:;">1</a></li>
                        <li><a href="javascript:;">2</a></li>
                        <li class="active"><a href="javascript:;">3</a></li>
                        <li><a href="javascript:;">4</a></li>
                        <li><a href="javascript:;">5</a></li>
                        <li><a href="javascript:;">»</a></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <style type="text/css">
        .b-card-1:not(:last-child) {
            margin-bottom: 22px;
            padding-bottom: 22px;
        }
        @media screen and (max-width: 991px) {
            .p-list-7 .p_bot{
                margin-top: 30px;
            }
        }
    </style>
    <!-- BEGIN FOOTER -->
    <?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>