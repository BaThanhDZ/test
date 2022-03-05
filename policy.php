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
    <div class="p-detail-3">
        <div class="container">
            <div class="p_box">
                <h1 class="p_title">Private Policy</h1>
                <h3 class="p_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</h3>
                <div class="ht-format-detail">
                    <p style="text-align:center"><img src="images/news/news-1.png" alt="" /></p>
                    <p>Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp.</p>
                    <p>Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp.</p>
                    <p style="text-align:center"><img src="images/news/news-2.png" alt="" /></p>
                    <p>Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp.</p>
                    <p>Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp. Nội dung chi tiết bài viết của doanh nghiệp.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <style type="text/css">
        .p-detail-3 .p_box {
            padding: 80px;
            margin: 30px 0;
        }
        .p-detail-3 .p_title{
            text-align: center;
        }
        @media (max-width: 991px) {
            .p-detail-3 .p_box{
                padding: 20px;
            }
        }
    </style>
    <!-- BEGIN FOOTER -->
    <?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>