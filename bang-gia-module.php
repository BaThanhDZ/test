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
    <link href="css/bang-gia.css" rel="stylesheet" />
    <script src="js/bang-gia.js" type="text/javascript"></script>
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
                    <h2 class="title">BẢNG GIÁ MODULE</h2>
                </div>
                <div class="s_desc">Trong điều kiện kinh tế tăng trưởng nóng của Việt Nam hiện nay, ngành Dự án-Xây dựng đang là một ngành hot, với nhiều cơ hội phát triển, đi cùng với cơ hội, ngành dự án – xây dựng cũng phải đối mặt với nhiều đặc thù kinh doanh khác biệt, cùng nhiều thách thức trong công tác quản lý doanh nghiệp nói chung và quản trị dự án nói riêng. </div>
                <div class="s_btn">
                    <a href="javascript:;" ht-trigger="c-modal" ht-target="#formContact" class="c-button-4"><span class="fa fa-pencil-square-o">Yêu cầu tư vấn & Demo</span></a>
                    <a href="javascript:;" ht-trigger="c-modal" ht-target="#formRegister2" class="c-button-4"><span class="fa fa-info-circle">Liên hệ Sales</span></a>
                </div>
            </div>
            <div class="s_rbox">
                <div class="s_thumb">
                    <div class="ht-ratio--75">
                        <span class="ht-ratio__img"> <!--610x335-->
                            <img src="images/about-4.png" alt="">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s-link-1" name="bang-gia-2">
        <div class="container">
            <ul>
                <li><a data-scroll="true" href="bang-gia.php#bang-gia">Bảng giá theo nghành</a></li>
                <li class="is-active"><a data-scroll="true" href="bang-gia-module.php#bang-gia-2">Bảng giá theo module</a></li>
            </ul>
        </div>
    </div>


    <div class="s-table-3">
        <div class="container">
            <div class="s-headline-30">
                <h3>Bảng giá module</h3>
                <p>Bảng giá sử dụng bộ giải pháp E-Office - Xây dựng văn phòng điện tử</p>
            </div>
            <div class="s_filter">
                <span>Chọn nhóm module: </span>
                <div class="c-select c-form-border">
                    <div class="c_input text--icon" ht-trigger="c-select">Nhóm module 1</div>
                    <span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                    <div class="c_list">
                        <div class="c-radio is-selected">
                            <label><input type="radio" name="single"><span>Nhóm module 1</span></label>
                        </div>
                        <div class="c-radio">
                            <label><input type="radio" name="single"><span>Nhóm module 2</span></label>
                        </div>
                        <div class="c-radio">
                            <label><input type="radio" name="single"><span>Nhóm module 3</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s_tab">
                <ul>
                    <li dataid="#class1" class="is-active">Dưới 30 nhân sự</li>
                    <li dataid="#class2">Trên 30 nhân sự</li>
                </ul>
            </div>
            <div class="s_note">
                <div><span>Bạn có nhu cầu khác ? </span><span>Liên hệ Sales</span></div>
            </div>
            <div class="s_table">
                <div class="row">
                    <div class="col-3">
                        <div class="s_info">
                            <div class="s_title">Quy mô doanh nghiệp</div>
                            <div class="s_desc">Gói dịch vụ</div>
                            <div class="s_heading">Công việc & Nâng cao hiệu suất</div>
                            <div class="s_list">
                                <?php for ($i = 1; $i <= 3; $i++){ ?>
                                <div class="s_block">
                                    <div class="thumb">
                                        <img src="images/product/product-<?php echo $i ?>.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Base Wework</h3>
                                        <p>Quản lý Công việc & Dự án</p>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="s_heading">Tổ chức thông tin</div>
                            <div class="s_list">
                                <?php for ($i = 2; $i <= 4; $i++){ ?>
                                <div class="s_block">
                                    <div class="thumb">
                                        <img src="images/product/product-<?php echo $i ?>.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Base Wework</h3>
                                        <p>Quản lý Công việc & Dự án</p>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="s_heading"><strong>Chi phí hàng tháng của gói giải pháp</strong></div>
                            <div class="s_text">Chi phí hàng tháng khi mua lẻ ứng dụng</div>
                            <div class="s_text">Tiết kiệm khi mua theo gói giải pháp</div>
                            <div class="s_heading"><strong>Chính sách thanh toán</strong></div>
                        </div>
                    </div>
                    <div id="class1" class="col-9">
                        <div class="row row-flex">
                            <div class="col-4">
                                <div class="b-card-95">
                                    <div class="b_title">Dưới 10 nhân sự</div>
                                    <div class="b_info" style="background-color: #777">
                                        <div>Cơ bản</div>
                                        <div>Nâng cao</div>
                                    </div>
                                    <div class="b_blank"></div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_blank"></div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_info mrt" style="background-color: #777">
                                        <div>1,800,000 ₫</div>
                                        <div>2,700,000 ₫</div>
                                    </div>
                                    <div class="b_discount">
                                        <div>2,500,000 ₫</div>
                                        <div>4,150,000 ₫</div>
                                    </div>
                                    <div class="b_percent">
                                        <div>28%</div>
                                        <div>35%</div>
                                    </div>
                                    <div class="b_note">Thanh toán hàng năm</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="b-card-95">
                                    <div class="b_title">Từ 11 đến 20 nhân sự</div>
                                    <div class="b_info" style="background-color: #267cde">
                                        <div>Cơ bản</div>
                                        <div>Nâng cao</div>
                                    </div>
                                    <div class="b_blank"></div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_blank"></div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_info mrt" style="background-color: #267cde">
                                        <div>1,800,000 ₫</div>
                                        <div>2,700,000 ₫</div>
                                    </div>
                                    <div class="b_discount">
                                        <div>2,500,000 ₫</div>
                                        <div>4,150,000 ₫</div>
                                    </div>
                                    <div class="b_percent">
                                        <div>28%</div>
                                        <div>35%</div>
                                    </div>
                                    <div class="b_note">Thanh toán hàng năm</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="b-card-95">
                                    <div class="b_title">Từ 21 đến 30 nhân sự</div>
                                    <div class="b_info" style="background-color: #17C286">
                                        <div>Cơ bản</div>
                                        <div>Nâng cao</div>
                                    </div>
                                    <div class="b_blank"></div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_blank"></div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_info mrt" style="background-color: #17C286">
                                        <div>1,800,000 ₫</div>
                                        <div>2,700,000 ₫</div>
                                    </div>
                                    <div class="b_discount">
                                        <div>2,500,000 ₫</div>
                                        <div>4,150,000 ₫</div>
                                    </div>
                                    <div class="b_percent">
                                        <div>28%</div>
                                        <div>35%</div>
                                    </div>
                                    <div class="b_note">Thanh toán hàng năm</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="class2" class="col-9 display-none">
                        <div class="row row-flex">
                            <div class="col-4">
                                <div class="b-card-95">
                                    <div class="b_title">Từ 31 đến 50 nhân sự</div>
                                    <div class="b_info" style="background-color: #f60">
                                        <div>Cơ bản</div>
                                        <div>Nâng cao</div>
                                    </div>
                                    <div class="b_blank"></div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_blank"></div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_info mrt" style="background-color: #f60">
                                        <div>1,800,000 ₫</div>
                                        <div>2,700,000 ₫</div>
                                    </div>
                                    <div class="b_discount">
                                        <div>2,500,000 ₫</div>
                                        <div>4,150,000 ₫</div>
                                    </div>
                                    <div class="b_percent">
                                        <div>28%</div>
                                        <div>35%</div>
                                    </div>
                                    <div class="b_note">Thanh toán hàng năm</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="b-card-95">
                                    <div class="b_title">Từ 51 đến 70 nhân sự</div>
                                    <div class="b_info" style="background-color: #f00">
                                        <div>Cơ bản</div>
                                        <div>Nâng cao</div>
                                    </div>
                                    <div class="b_blank"></div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_blank"></div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_info mrt" style="background-color: #f00">
                                        <div>1,800,000 ₫</div>
                                        <div>2,700,000 ₫</div>
                                    </div>
                                    <div class="b_discount">
                                        <div>2,500,000 ₫</div>
                                        <div>4,150,000 ₫</div>
                                    </div>
                                    <div class="b_percent">
                                        <div>28%</div>
                                        <div>35%</div>
                                    </div>
                                    <div class="b_note">Thanh toán hàng năm</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="b-card-95">
                                    <div class="b_title">Từ 71 đến 100 nhân sự</div>
                                    <div class="b_info" style="background-color: #7226de">
                                        <div>Cơ bản</div>
                                        <div>Nâng cao</div>
                                    </div>
                                    <div class="b_blank"></div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_blank"></div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div></div>
                                    </div>
                                    <div class="b_check">
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                        <div><i class="fa fa-check" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="b_info mrt" style="background-color: #7226de">
                                        <div>1,800,000 ₫</div>
                                        <div>2,700,000 ₫</div>
                                    </div>
                                    <div class="b_discount">
                                        <div>2,500,000 ₫</div>
                                        <div>4,150,000 ₫</div>
                                    </div>
                                    <div class="b_percent">
                                        <div>28%</div>
                                        <div>35%</div>
                                    </div>
                                    <div class="b_note">Thanh toán hàng năm</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s-faq-1 ht-mrt45">
        <div class="container">
            <div class="s_box">
                 <h3 class="s_title">Câu hỏi thường gặp</h3>
                <?php for ($i = 1; $i <= 5; $i++){ ?>
                    <div class="item">
                        <div class="item-title">
                            <span>Tiêu đề câu hỏi của doanh nghiệp</span>
                            <i class="fa fa-angle-down fa-4" aria-hidden="true"></i>
                        </div>
                        <div class="item-body">Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp. Thông tin chi tiết bài viết của doanh nghiệp.</div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>