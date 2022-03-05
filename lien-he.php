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
    <script src="js/hitech/HTValidate.js" type="text/javascript"></script>

    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/style.js" type="text/javascript"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>
    <link href="css/lien-he.css" rel="stylesheet" />
</head>
<body>
    <!-- BEGIN HEADER -->
	<?php include('header.php'); ?>
    <!-- END HEADER -->

    <!-- BEGIN CONTENT -->
    <div class="s-home-16">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="s_form">

                        <form id="form_form-1" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                            <div class="row row-flex">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group c-form-border c-form-border--icon">
                                        <span class="c_icon"><i class="fa fa-user text--icon" aria-hidden="true"></i></span>
                                        <input type="text" name="fullname" class="c_input" value="" placeholder="Họ tên">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group c-form-border c-form-border--icon">
                                        <span class="c_icon"><i class="fa fa-phone text--icon" aria-hidden="true"></i></span>
                                        <input type="text" name="phone" class="c_input" value="" placeholder="Điện thoại">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group c-form-border c-form-border--icon">
                                        <span class="c_icon"><i class="fa fa-envelope text--icon" aria-hidden="true"></i></span>
                                        <input type="email" name="email" class="c_input" value="" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group c-form-border c-form-border--icon">
                                        <span class="c_icon"><i class="fa fa-building text--icon" aria-hidden="true"></i></span>
                                        <input type="text" name="company" class="c_input" value="" placeholder="Công ty">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group c-form-border c-form-border--icon">
                                        <span class="c_icon"><i class="fa fa-user text--icon" aria-hidden="true"></i></span>
                                        <input type="email" name="email" class="c_input" value="" placeholder="Chức danh">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="c-select c-select-2 c-form-border c-form-border--icon">
                                        <span class="c_icon"><i class="fa fa-product-hunt text--icon" aria-hidden="true"></i></span>
                                        <div class="c_input text--icon" ht-trigger="c-select-2" ht-empty="Vui lòng chọn">Chọn sản phẩm / giải phảp</div>
                                        <span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        <div class="c_list">
                                            <h3>Sản phẩm</h3>
                                            <div class="c-checkbox">
                                                <label><input type="checkbox" name="chk[]" value="1" /><span>Phân hệ 1</span></label>
                                            </div>
                                            <div class="c-checkbox">
                                                <label><input type="checkbox" name="chk[]" value="2" /><span>Phân hệ 2</span></label>
                                            </div>
                                            <div class="c-checkbox">
                                                <label><input type="checkbox" name="chk[]" value="3" /><span>Phân hệ 3</span></label>
                                            </div>

                                            <h3>Giải pháp</h3>
                                            <div class="c-checkbox">
                                                <label><input type="checkbox" name="chk[]" value="5" /><span>Giải pháp 1</span></label>
                                            </div>
                                            <div class="c-checkbox">
                                                <label><input type="checkbox" name="chk[]" value="6" /><span>Giải pháp 2</span></label>
                                            </div>
                                            <div class="c-checkbox">
                                                <label><input type="checkbox" name="chk[]" value="7" /><span>Giải pháp 3</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group c-form-border c-form-border--icon">
                                <span class="c_icon c_icon--top"><i class="fa fa-info-circle text--icon" aria-hidden="true"></i></span>
                                <textarea name="content" class="c_input" rows="5" placeholder="Nội dung cần hỗ trợ"></textarea>
                            </div>
                            <div class="form-group text-center"><button type="submit" class="c-btn--primary">Đăng ký</button></div>
                        </form>
                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <div class="s_box">
                        <div class="s_contact">
                            <h2>Gửi liên hệ cho chúng tôi</h2>
                            <h1>CÔNG TY TNHH MTV 1BOSS</h1>
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Số 46, Đường số 05, KDC Cityland Center Hills, P.07, Q.Gò Vấp, TP.HCM</span></li>
                                <li class="line"><span><a href="tel:02862661155"><i class="fa fa-phone" aria-hidden="true"></i> <span>(028) 62661155</span></a></span> <span><a href="mailto:lienhe@saigonhiech.vn"><i class="fa fa-envelope" aria-hidden="true"></i> <span>lienhe@saigonhiech.vn</span></a></span></li>
                            </ul>
                        </div>
                        <div class="s_list">
                            <div class="b-card-19">
                                <div class="b_content"><span>+190</span> <span>Across countries</span></div>
                                <div class="b_desc">Meet with a product consultant to see how monday.com can fit your exact business</div>
                            </div>
                            <div class="b-card-19">
                                <div class="b_content"><span>125k+</span> <span>paying customers</span></div>
                                <div class="b_desc">Explore our tailored pricing plans based on your goals and priorities</div>
                            </div>
                            <div class="b-card-19">
                                <div class="b_content"><span>200+</span> <span>Serving industries</span></div>
                                <div class="b_desc">Boost productivity from day one by building your team's ideal workflow</div>
                            </div>
                        </div>
                        <div class="s_customer">
                            <h2 class="s_title">Khách hàng tiêu biểu</h2>
                            <div class="row">
                                <?php for ($i = 1; $i <= 5; $i++){ ?>
                                    <div class="col-4 col-md-2-4">
                                        <a href="" class="b-card-47">
                                            <div class="b_thumb ht-ratio--55">
                                                <img src="images/brand/brand-<?php echo $i ?>.png" alt="" class="ht-ratio__img">
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script>
        /* BEGIN s-home-15 */
        /* Thêm thư viện js/hitech/HTValidate.js */
        $(document).ready(function(){
            $("#form_form-1").HTValidate({
                rules: {
                    fullname: { required: 'Thông tin bắt buộc' },
                    phone: { required: 'Thông tin bắt buộc', number: 'Vui lòng nhập số' },
                    email: { required: 'Thông tin bắt buộc', email: 'Email không hợp lệ' }
                },
                setTemplate: {
                    notify: 'Bạn đã gửi thành công. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất!',
                    modal: 'notify_form-1',
                }
            });
        });
        /* END s-home-15 */
    </script>
    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>