<form id="form_form-1" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
    <div class="row row-flex">
        <div class="col-12 col-sm-6 col-md-6">
            <label class="label">Họ và tên <span>(*)</span></label>
            <div class="form-group c-form-border c-form-border--icon">
                <span class="c_icon"><i class="fa fa-user text--icon" aria-hidden="true"></i></span>
                <input type="text" name="fullname" class="c_input" value="" placeholder="Tên của bạn">
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6">
            <label class="label">Điện thoại <span>(*)</span></label>
            <div class="form-group c-form-border c-form-border--icon">
                <span class="c_icon"><i class="fa fa-phone text--icon" aria-hidden="true"></i></span>
                <input type="text" name="phone" class="c_input" value="" placeholder="Điện thoại của bạn">
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6">
            <label class="label">Email <span>(*)</span></label>
            <div class="form-group c-form-border c-form-border--icon">
                <span class="c_icon"><i class="fa fa-envelope text--icon" aria-hidden="true"></i></span>
                <input type="email" name="email" class="c_input" value="" placeholder="Email của bạn">
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6">
            <label class="label">Sản phẩm / giải pháp bạn quan tâm <span>(*)</span></label>
            <div class="form-group c-select c-select-2 c-form-border c-form-border--icon">
                <span class="c_icon"><i class="fa fa-product-hunt text--icon" aria-hidden="true"></i></span>
                <div class="c_input text--icon" ht-trigger="c-select-2" ht-empty="Vui lòng chọn">Chọn sản phẩm / giải phảp</div>
                <span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                <div class="c_list">
                    <h3>Sản phẩm</h3>
                    <div class="c-checkbox">
                        <label><input type="checkbox" name="product" value="1" /><span>Phân hệ 1</span></label>
                    </div>
                    <div class="c-checkbox">
                        <label><input type="checkbox" name="product" value="2" /><span>Phân hệ 2</span></label>
                    </div>
                    <div class="c-checkbox">
                        <label><input type="checkbox" name="product" value="3" /><span>Phân hệ 3</span></label>
                    </div>

                    <h3>Giải pháp</h3>
                    <div class="c-checkbox">
                        <label><input type="checkbox" name="product" value="5" /><span>Giải pháp 1</span></label>
                    </div>
                    <div class="c-checkbox">
                        <label><input type="checkbox" name="product" value="6" /><span>Giải pháp 2</span></label>
                    </div>
                    <div class="c-checkbox">
                        <label><input type="checkbox" name="product" value="7" /><span>Giải pháp 3</span></label>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-12 col-sm-6 col-md-6">
            <label class="label">Công ty <span>(*)</span></label>
            <div class="form-group c-form-border c-form-border--icon">
                <span class="c_icon"><i class="fa fa-building text--icon" aria-hidden="true"></i></span>
                <input type="text" name="company" class="c_input" value="" placeholder="Công ty bạn">
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6">
            <label class="label">Chức danh <span>(*)</span></label>
            <div class="form-group c-form-border c-form-border--icon">
                <span class="c_icon"><i class="fa fa-user text--icon" aria-hidden="true"></i></span>
                <input type="email" name="job" class="c_input" value="" placeholder="Chức danh của bạn">
            </div>
        </div>
    </div>


    <label>Nội dụng cần hỗ trợ</label>
    <div class="form-group c-form-border c-form-border--icon">
        <span class="c_icon c_icon--top"><i class="fa fa-info-circle text--icon" aria-hidden="true"></i></span>
        <textarea name="content" class="c_input" rows="3" placeholder="Nhập nội dung cần hỗ trợ"></textarea>
    </div>
    <div class="form-group text-center"><button type="submit" class="c-btn--primary">Gửi</button></div>
</form>