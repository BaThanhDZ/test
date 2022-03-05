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
    <div class="p-list-7">
        <div class="p_link">
            <div class="container">
                <div class="align-items">
                    <ul>
                        <li><a href="blog.php">Trang chủ</a></li>
                        <li class="is-active"><a href="chuyen-muc.php">Chuyên mục 1</a></li>
                        <li><a href="chuyen-muc.php">Chuyên mục 2</a></li>
                        <li><a href="chuyen-muc.php">Chuyên mục 3</a></li>
                    </ul>
                    <form class="b-search-1" action="" method="get" accept-charset="utf-8">
                        <input type="text" name="keysearch" placeholder="Tìm kiếm ..." value="">
                        <button type="submit" class="c-btn--secondary"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="s-banner-1">
        <div class="container">
            <div class="s_content">
                <h1 class="title">Chuyên mục 1</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
    <div class="p-list-7">
        <div class="ht-page">
            <div class="container">
                <div class="ht-page__main">
                    <a href="blog-chi-tiet.php" class="b-card-43">
                        <div class="b_thumb ht-ratio--75"><img src="images/news/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
                        <span class="b_date"><i class="fa fa-calendar" aria-hidden="true"></i> 20/05/2021</span>
                        <h3 class="b_title">Tiêu đề bài viết của doanh nghiệp</h3>
                        <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp.</h4>
                    </a>
                    <div class="row row-flex">
                        <?php for ($i = 1; $i <= 8; $i++){ ?>
                            <div class="col-6">
                                <a href="blog-chi-tiet.php" class="b-card-43">
                                    <div class="b_thumb ht-ratio--75"><img src="images/news/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img"></div>
                                    <span class="b_date"><i class="fa fa-calendar" aria-hidden="true"></i> 20/05/2021</span>
                                    <h3 class="b_title">Tiêu đề bài viết của doanh nghiệp</h3>
                                    <h4 class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp. Mô tả tóm tắt bài viết của doanh nghiệp.</h4>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <ul class="s-pagination-1 text-center">
                        <li><a href="javascript:;">«</a></li>
                        <li><a href="javascript:;">1</a></li>
                        <li><a href="javascript:;">2</a></li>
                        <li class="active"><a href="javascript:;">3</a></li>
                        <li><a href="javascript:;">4</a></li>
                        <li><a href="javascript:;">5</a></li>
                        <li><a href="javascript:;">»</a></li>
                    </ul>
                </div>
                <div class="ht-page__sidebar"><?php include('sidebar.php'); ?></div>


            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <style type="text/css">
        .p-list-7 .p_link{
            margin: 0;
        }
        .s-banner-1{
            margin-bottom: 30px;
        }
    </style>
    <!-- BEGIN FOOTER -->
    <?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>