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
                    <h2 class="title">BẢNG GIÁ</h2>
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

    <div class="s-link-1" name="bang-gia">
        <div class="container">
            <ul>
                <li class="is-active"><a data-scroll="true" href="bang-gia.php#bang-gia">Bảng giá theo nghành</a></li>
                <li><a data-scroll="true" href="bang-gia-module.php#bang-gia-2">Bảng giá theo module</a></li>
            </ul>
        </div>
    </div>

    <div class="s-price-1">
        <div class="container">
            <div class="s_filter">
                <span>Chọn số user: </span>
                <div class="c-select c-form-border">
                    <div class="c_input text--icon" ht-trigger="c-select">Số user</div>
                    <span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                    <div class="c_list">
                        <div class="c-radio">
                            <label><input type="radio" name="single"><span>10 User</span></label>
                        </div>
                        <div class="c-radio">
                            <label><input type="radio" name="single"><span>20 User</span></label>
                        </div>
                        <div class="c-radio">
                            <label><input type="radio" name="single"><span>30 User</span></label>
                        </div>
                        <div class="c-radio">
                            <label><input type="radio" name="single"><span>40 User</span></label>
                        </div>
                        <div class="c-radio">
                            <label><input type="radio" name="single"><span>50 User</span></label>
                        </div>
                        <div class="c-radio">
                            <label><input type="radio" name="single"><span>60 User</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s_note">
                <div><span>Bạn thuộc nhóm nghành khác ?</span><span>Liên hệ Sales</span></div>
            </div>
            <div class="row row-flex">

                <div class="col-12 col-xs-6 col-md-3">
                    <div class="b-card-12">
                        <h2 class="b_name">Dịch vụ</h2>
                        <h3 class="b_price">69.000<small>đ/tháng</small></h3>
                        <h4 class="b_total">Tổng cộng <span>69.000</span>đ / tháng</h4>
                        <a href="javascript:;" ht-trigger="c-modal" ht-target="#formRegister2" class="b_button">Liên hệ Sales</a>
                        <div class="b_desc">For individuals looking to keep track of their work</div>
                        <div class="b_info">
                            <h4>Bao gồm các tính năng</h4> <!--Nhập headline theo từng gói-->
                            <ul class="b_list">
                                <?php for ($i = 1; $i <= 5; $i++){ ?>
                                    <li>Danh sách tính năng <svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xs-6 col-md-3">
                    <div class="b-card-12">
                        <h2 class="b_name">THƯƠNG MẠI</h2>
                        <h3 class="b_price">69.000<small>đ/tháng</small></h3>
                        <h4 class="b_total">Tổng cộng <span>69.000</span>đ / tháng</h4>
                        <a href="javascript:;" ht-trigger="c-modal" ht-target="#formRegister2" class="b_button">Liên hệ Sales</a>
                        <div class="b_desc">For individuals looking to keep track of their work</div>
                        <div class="b_info">
                            <h4>Bao gồm các tính năng</h4> <!--Nhập headline theo từng gói-->
                            <ul class="b_list">
                                <?php for ($i = 1; $i <= 7; $i++){ ?>
                                    <li>Danh sách tính năng <svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xs-6 col-md-3">
                    <div class="b-card-12">
                        <h2 class="b_name">XÂY DỰNG DỰ ÁN</h2>
                        <h3 class="b_price">69.000<small>đ/tháng</small></h3>
                        <h4 class="b_total">Tổng cộng <span>69.000</span>đ / tháng</h4>
                        <a href="javascript:;" ht-trigger="c-modal" ht-target="#formRegister2" class="b_button">Liên hệ Sales</a>
                        <div class="b_desc">For individuals looking to keep track of their work</div>
                        <div class="b_info">
                            <h4>Bao gồm các tính năng</h4> <!--Nhập headline theo từng gói-->
                            <ul class="b_list">
                                <?php for ($i = 1; $i <= 5; $i++){ ?>
                                    <li>Danh sách tính năng <svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xs-6 col-md-3">
                    <div class="b-card-12">
                        <h2 class="b_name">SẢN XUẤT</h2>
                        <h3 class="b_price">69.000<small>đ/tháng</small></h3>
                        <h4 class="b_total">Tổng cộng <span>69.000</span>đ / tháng</h4>
                        <a href="javascript:;" ht-trigger="c-modal" ht-target="#formRegister2" class="b_button">Liên hệ Sales</a>
                        <div class="b_desc">For individuals looking to keep track of their work</div>
                        <div class="b_info">
                            <h4>Bao gồm các tính năng</h4> <!--Nhập headline theo từng gói-->
                            <ul class="b_list">
                                <?php for ($i = 1; $i <= 6; $i++){ ?>
                                    <li>Danh sách tính năng <svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s-compare-1">
        <div class="container">
            <a href="javascript:;" class="s_more">Xem chi tiết bảng giá <i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
            <div class="s-table-2">
                <table>
                    <tbody>
                        <tr>
                            <td></td>
                            <td><div class="b-card-13"><h2 class="b_name">DỊCH VỤ</h2><a href="javascript:;" ht-trigger="c-modal" ht-target="#formRegister2" class="b_button">Liên hệ Sales</a></div></td>
                            <td><div class="b-card-13"><h2 class="b_name">THƯƠNG MẠI</h2><a href="javascript:;" ht-trigger="c-modal" ht-target="#formRegister2" class="b_button">Liên hệ Sales</a></div></td>
                            <td><div class="b-card-13"><h2 class="b_name">XÂY DỰNG DỰ ÁN</h2><a href="javascript:;" ht-trigger="c-modal" ht-target="#formRegister2" class="b_button">Liên hệ Sales</a></div></td>
                            <td><div class="b-card-13"><h2 class="b_name">SẢN XUẤT</h2><a href="javascript:;" ht-trigger="c-modal" ht-target="#formRegister2" class="b_button">Liên hệ Sales</a></div></td>
                        </tr>
                        <tr class="sub1">
                            <td>VĂN PHÒNG ĐIỆN TỬ (ASOFT-OO)</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="sub2">
                            <td>Mạng thông tin và lưu trữ nội bộ</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="flex"><span>Quản lý thông báo nội bộ</span> <svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td class="flex"><span>Quản lý email nhân viên</span><svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td class="flex"><span>Quản lý các trao đổi</span><svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                        </tr>
                        <tr class="sub2">
                            <td>Quản lý và giám sát công việc</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="flex"><span>Lập kế hoạch công việc</span><svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td class="flex"><span>Tự động cảnh báo, nhắc việc</span><svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td class="flex"><span>Quản lý tiến độ theo kanban </span><svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td class="flex"><span>Quản lý theo checklist</span><svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                        </tr>
                        <tr class="sub1">
                            <td>QUẢN LÝ QUAN HỆ KHÁCH HÀNG (ASOFT-CRM)</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="sub2">
                            <td>Trước bán hàng</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="flex"><span>Quản lý chiến dịch</span><svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td class="flex"><span>Quản lý chiến dịch email</span><svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td class="flex"><span>Thiết lập email mẫu/templates </span><svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                        </tr>
                        <tr class="sub2">
                            <td>Trong bán hàng</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="flex"><span>Quản lý đầu mối/lead </span><svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td class="flex"><span>Quản lý cơ hội/deal/opportunity </span><svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td class="flex"><span>Quản lý liên lạc/contact </span><svg ht-trigger="c-tooltip" ht-placement="top" ht-content="Quản lý tạm ứng/thanh quyết toán các loại chi phí (kết nối với phân hệ nghiệp vụ quản lý chi phí sẽ tối ưu hơn)" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.5-3.892c0 .251-.224.454-.5.454s-.5-.203-.5-.454V7.392c0-.251.224-.455.5-.455s.5.204.5.455v4.716zm-.469-6.483a.781.781 0 1 1 0-1.562.781.781 0 0 1 0 1.562zM8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" fill="#333" fill-rule="nonzero"></path></svg></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>Unlimited</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="s-faq-1">
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