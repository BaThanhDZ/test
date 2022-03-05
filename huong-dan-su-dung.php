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
    <link href="css/huong-dan-su-dung.css" rel="stylesheet" />
</head>
<body>
    <!-- BEGIN HEADER -->
    <?php include('header.php'); ?>
    <!-- END HEADER -->

    <div class="s-banner-2">
        <div class="container">
            <h1 class="s_title">Hướng dẫn sử dụng</h1>
            <form class="b-search-1" action="" method="get" accept-charset="utf-8">
                <input type="text" name="keysearch" placeholder="Tìm kiếm ..." value="">
                <button type="submit" class="c-btn--secondary">Tìm kiếm</button>
            </form>
        </div>
    </div>

    <div class="s-list-1">
        <div class="container">
            <div class="s_box">
                <h3 class="s_title">Nhóm Phân hệ 1</h3>
                <div class="row row-flex">
                <?php for ($i = 1; $i <= 3; $i++){ ?>
                    <div class="col-6 col-md-4">
                        <a href="huong-dan-su-dung-chi-tiet.php" class="b-card-45">
                            <div class="b_thumb">
                                <img src="images/icon/icon-7.png" alt="">
                            </div>
                            <div class="b_content">
                                <h3>Phân hệ 1</h3>
                                <p>Hướng dẫn cách xây dựng văn hóa doanh nghiệp</p>
                            </div>
                        </a>
                    </div>
                <?php } ?>

                </div>
            </div>
            <div class="s_box">
                <h3 class="s_title">Nhóm Phân hệ 2</h3>
                <div class="row row-flex">
                <?php for ($i = 1; $i <= 3; $i++){ ?>
                    <div class="col-6 col-md-4">
                        <a href="huong-dan-su-dung-chi-tiet.php" class="b-card-45">
                            <div class="b_thumb">
                                <img src="images/icon/icon-7.png" alt="">
                            </div>
                            <div class="b_content">
                                <h3>Phân hệ 1</h3>
                                <p>Hướng dẫn cách xây dựng văn hóa doanh nghiệp</p>
                            </div>
                        </a>
                    </div>
                <?php } ?>

                </div>
            </div>
            <div class="s_box">
                <h3 class="s_title">Nhóm Phân hệ 3</h3>
                <div class="row row-flex">
                <?php for ($i = 1; $i <= 3; $i++){ ?>
                    <div class="col-6 col-md-4">
                        <a href="huong-dan-su-dung-chi-tiet.php" class="b-card-45">
                            <div class="b_thumb">
                                <img src="images/icon/icon-9.png" alt="">
                            </div>
                            <div class="b_content">
                                <h3>Phân hệ 1</h3>
                                <p>Hướng dẫn cách xây dựng văn hóa doanh nghiệp</p>
                            </div>
                        </a>
                    </div>
                <?php } ?>

                </div>
            </div>

        </div>
    </div>
    <!-- BEGIN FOOTER -->
    <?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>