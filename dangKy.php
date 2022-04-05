<?php
include_once('header.php');
?>
<section class="register-course">
    <div class="register-course--container grid wide">
        <h1 class="subpage__heading">
            Đăng Ký Khoá học
            <p class="subpage__heading--p"></p>
        </h1>
        <form action="" id="form-1" class="register-course--form">
            <div class="row">
                <div class="col l-6 m-6 c-12">
                    <div class="form-group">
                        <input type="text" id="ho" class="form-input" placeholder="Họ">
                        <p class="form-message"></p>
                    </div>
                </div>
                <div class="col l-6 m-6 c-12">
                    <div class="form-group">
                        <input type="text" id="ten" class="form-input" placeholder="Tên">
                        <p class="form-message"></p>
                    </div>
                </div>

                <div class="col l-6 m-6 c-12">
                    <div class="form-group">
                        <input type="email" class="form-input" id="email" placeholder="Email">
                        <p class="form-message"></p>
                    </div>
                </div>

                <div class="col l-6 m-6 c-12">
                    <div class="form-group">
                        <input type="text" id="phone" class="form-input" placeholder="Số điện thoại">
                        <p class="form-message"></p>
                    </div>
                </div>

                <div class="col l-6 m-6 c-12">
                    <div class="form-group">
                        <select name="" id="khoahoc" class="form-select">
                            <option value="" selected disabled>Chọn Khoá Học</option>
                            <option value="1">Khoá 1</option>
                            <option value="2">Khoá 2</option>
                            <option value="3">Khoá 3</option>
                        </select>
                        <p class="form-message"></p>
                    </div>
                </div>

                <div class="col l-6 m-6 c-12">
                    <div class="form-group">
                        <input type="text" class="form-input" placeholder="Tên phòng khám (Nếu có) ">
                    </div>
                </div>
            </div>
            <button class="form-btn">Đăng Ký</button>
        </form>
    </div>
</section>

<?php
include_once('footer.php');
?>

<script src="js/valide.js"></script>
<script>
validator({
    form: '#form-1',
    rules: [
        validator.isRequired("#email", "Email không được để trống!"),
        validator.isEmail("#email"),
        validator.isRequired("#ho", "Họ không được để trống!"),
        validator.isRequired("#ten", "Tên không được để trống!"),
        validator.isRequired("#phone", "Số điện thoại không được bỏ trống!"),
        validator.phone("#phone", "Số điện thoại nhập không chính xác!"),
        validator.isRequired("#khoahoc", "Khoá học không được bỏ trống!"),
    ]
});
</script>
</body>

</html>