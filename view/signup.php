<link rel="stylesheet" href="./view/layout/asset/css/SignUp.css">
<main>
    <div class="img-left">
        <img src="./view/layout/img/Background-SignUp.jpg" alt>
    </div>
    <div class="wrapper-login_right">
        <form action="index.php?pg=adduser" method="post" class="content_login">
            <div class="title_login">
                <h1>Creat your account</h1>
            </div>
            <div class="detail-login">
                <label>Tên đăng nhập</label>
                <input id="username" name="username" type="text" placeholder="Nhập tên của bạn">
                <label>Email</label>
                <input id="email" name="email" type="email" placeholder="Nhập email của bạn">
                <label>Mật khẩu</label>
                <input id="password" type="password" name="password" placeholder="Nhập mật khẩu">
                <label>Xác nhận mật khẩu</label>
                <input id="repassword" name="repassword" type="password" placeholder="Nhập lại mật khẩu">
                <input id="hinh" type="hidden" name="hinh" value="avatar_user.png">
            </div>
            <div class="btn_login">
                <!-- <input type="submit" value="im Log in"> -->
                <input type="submit" name="signup" class="btn-mot" value="Đăng kí">

                <p>Already have an account ?<a href="./User.html">Log in</a></p>
                <!-- <p>Creat account with
                            <a href="#"><img src="../img/icon-google.png"></a>
                        </p> -->
            </div>
        </form>
    </div>
</main>
<script src="./view/layout/asset/css/js/loginAndsignin.js"></script>