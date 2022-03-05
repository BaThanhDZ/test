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
        <div class="ht-page">
            <div class="container">
                <div class="p_link">
                    <div class="align-items">
                        <ul>
                            <li class="is-active"><a href="blog.php">Trang chủ</a></li>
                            <li><a href="chuyen-muc.php">Chuyên mục 1</a></li>
                            <li><a href="chuyen-muc.php">Chuyên mục 2</a></li>
                            <li><a href="chuyen-muc.php">Chuyên mục 3</a></li>
                        </ul>
                        <form class="b-search-1" action="" method="get" accept-charset="utf-8">
                            <input type="text" name="keysearch" placeholder="Tìm kiếm ..." value="">
                            <button type="submit" class="c-btn--secondary"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
                <div class="p_box p_top">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="blog-chi-tiet.php" class="b-card-41">
                                <div class="b_thumb ht-ratio--75">
                                    <img src="images/news/news-2.png" alt="" class="ht-ratio__img" />
                                </div>
                                <div class="b_content">
                                    <h3 class="b_title">Nhân viên khốn khó vì dịch bệnh: Biện pháp nào để doanh nghiệp giải nguy kịp thời?</h3>
                                    <div class="b_desc">Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này. Mô tả tóm tắt bài viết của doanh nghiệp hiển thị tại vị trí này.</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <?php for ($i = 1; $i <= 3; $i++){ ?>
                            <a href="blog-chi-tiet.php" class="b-card-1">
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

                <div class="ht-page__main">
                    <div class="p_box p_bot">
                        <div class="c-headline-13">
                            <h2 class="c_name">BLOG</h2>
                        </div>
                        <div class="p_list">
                            <?php for ($i = 1; $i <= 6; $i++){ ?>
                            <a href="blog-chi-tiet.php" class="b-card-1">
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
                            <?php for ($i = 1; $i <= 4; $i++){ ?>
                            <a href="blog-chi-tiet.php" class="b-card-1">
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
                <div class="ht-page__sidebar"><?php include('sidebar.php'); ?></div>


            </div>
        </div>
    </div>
    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
    <?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>