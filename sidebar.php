<div class="s-sidebar-1">
	<a href=""><img src="images/sidebar.png" alt=""></a>
</div>
<div class="s-fanpage-1">
	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsaigonhitech%2F&tabs=timeline&width=300&height=400&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="300" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
</div>

<div class="s-form-1">
    <h3>Đăng ký nhận thông tin</h3>
    <p>Để lại email của bạn chúng tôi sẽ gửi đến cho bạn các thông tin ưu đãi hấp dẫn</p>

    <form id="form_form-2" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="form-group c-form-border c-form-border--icon">
            <span class="c_icon"><i class="fa fa-envelope text--icon" aria-hidden="true"></i></span>
            <input type="email" name="email" class="c_input" value="" placeholder="Email">
        </div>

        <div class="c-select c-select-2 c-form-border c-form-border--icon">
            <span class="c_icon"><i class="fa fa-product-hunt text--icon" aria-hidden="true"></i></span>
            <div class="c_input text--icon" ht-trigger="c-select-2" ht-empty="Vui lòng chọn">Chọn chuyên mục</div>
            <span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            <div class="c_list">
                <div class="c-checkbox">
                    <label><input type="checkbox" name="chk[]" value="1" /><span>Tên chuyên mục 1</span></label>
                </div>
                <div class="c-checkbox">
                    <label><input type="checkbox" name="chk[]" value="2" /><span>Tên chuyên mục 2</span></label>
                </div>
                <div class="c-checkbox">
                    <label><input type="checkbox" name="chk[]" value="3" /><span>Tên chuyên mục 3</span></label>
                </div>
            </div>
        </div>

        <div class="form-group text-center"><button type="submit" class="c-btn--primary">Gửi ngay</button></div>
    </form>
</div>

<div class="s-sidebar-6">
    <div class="s_heading">Bài viết nổi bật</div>
    <ul>
    <?php for ($i = 1; $i <= 7; $i++){ ?>
    	<li>
        	<div>
        		<a href="1boss-guide.php">Hướng dẫn sử dụng</a>
        		<span>14/10/2021</span>
        	</div>
        	<a href="blog-chi-tiet.php">Hướng dẫn xây dựng chương trình Đào tạo tại chỗ (On-the-job training)</a>
		</li>
    <?php } ?>
    </ul>
</div>