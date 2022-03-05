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
    <link href="css/thu-vien-quan-tri.css" rel="stylesheet" />
</head>
<body>
    <!-- BEGIN HEADER -->
    <?php include('header.php'); ?>
    <!-- END HEADER -->

    <!-- BEGIN CONTENT -->
    <div class="s-banner-1">
        <div class="container">
            <div class="s_content">
                <h1 class="title">Thư viện quản trị</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>

    <div class="s-tab-4">
        <div class="container">
            <ul class="s_menu">
                <li class="is-active"><a href="#tab-1">Nhóm phòng ban 1</a></li>
                <li><a href="#tab-2">Nhóm phòng ban 2</a></li>
                <li><a href="#tab-3">Nhóm phòng ban 3</a></li>
            </ul>
            <ul class="s_content">
                <li id="tab-1">
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
                    </div>
                </li>
                <li id="tab-2">
                    <div class="row row-flex">
                        <?php for ($i = 3; $i <= 8; $i++){ ?>
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
                </li>
                <li id="tab-3">
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
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- BEGIN FOOTER -->

    <script>
        /* BEGIN s-tab-4 */
        $(document).ready(function() {
            $('.s-tab-4 .s_menu a').click(function(event) {
                event.preventDefault();
                $(this).parent().addClass('is-active');
                $(this).parent().siblings().removeClass('is-active');
                var tab = $(this).attr('href');
                $(this).closest('.s-tab-4').find('.s_content li').not(tab).css('display', 'none');
                $(this).closest('.s-tab-4').find(tab).fadeIn();
            });
        });
        /* END s-tab-4 */
    </script>
    <?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>