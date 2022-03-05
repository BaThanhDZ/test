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

    <div class="s-section-3">
        <div class="container">
            <div class="s_filter">
                <div>
                    <span>Lĩnh vực: </span>
                    <div class="c-select c-form-border">
                        <div class="c_input text--icon" ht-trigger="c-select">Xem tất cả lĩnh vực</div>
                        <span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        <div class="c_list">
                            <div class="c-radio">
                                <label><input type="radio" name="single"><span>Lĩnh vực 1</span></label>
                            </div>
                            <div class="c-radio">
                                <label><input type="radio" name="single"><span>Lĩnh vực 2</span></label>
                            </div>
                            <div class="c-radio">
                                <label><input type="radio" name="single"><span>Lĩnh vực 3</span></label>
                            </div>
                            <div class="c-radio">
                                <label><input type="radio" name="single"><span>Lĩnh vực 4</span></label>
                            </div>
                            <div class="c-radio">
                                <label><input type="radio" name="single"><span>Lĩnh vực 5</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-flex">
                <?php for ($i = 1; $i <= 8; $i++){ ?>
                    <div class="col-6">
                        <a href="case-study-chi-tiet.php" class="b-card-43">
                            <div class="b_thumb ht-ratio--75">
                                <img src="images/news/news-<?php echo $i ?>.png" alt="" class="ht-ratio__img">
                            </div>
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
    </div>

    <style type="text/css">
        .s-section-3{
            margin: 50px 0 30px;
        }
        .s-section-3 .s_filter{
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        .s-section-3 .s_filter > div{
            display: flex;
            align-items: center;
            margin: 0 10px;
        }
        .s-section-3 .c-select{
            width: 200px;
            border-radius: 30px;
            margin-left: 13px;
        }
        .s-section-3 .c-select .c_list{
            max-height: 225px;
            padding: 10px 15px;
        }
    </style>
    <!-- BEGIN FOOTER -->
    <?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>