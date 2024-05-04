<link rel="stylesheet" href="./view/layout/asset/css/User.css">
<main>
    <div class="img-left">
        <img src="./view/layout/img/img-login.jpg" alt>
    </div>
    <div class="wrapper-login_right">
        <form action="index.php?pg=addlogin" method="post" class="content_login">
            <div class="title_login">
                <h1>ĐĂNG NHẬP</h1>
                <p>Vui lòng nhập thông tin đăng nhập!</p>
            </div>
            <div class="detail-login">
                <label>Tên đăng nhập</label>
                <input id="username" name="username" type="text" placeholder="Tên đăng nhập">
                <label> Mật khẩu</label>
                <input id="password" name="password" type="password" placeholder="Mật khẩu">
            </div>
            <span style="color: red; margin-bottom: 20px;">
                <?php
                // $tbb = "";
                // if (isset($tb)) {
                //     $tbb = $tb;
                //     echo $tbb;
                //     unset($_SESSION['tblogin']);
                // } else {
                //     echo $tbb;
                // }
                if (isset($_SESSION['tblogin']) && ($_SESSION['tblogin'] != "")) {
                    echo $_SESSION['tblogin'];
                    unset($_SESSION['tblogin']);
                }
                ?>
            </span>
            <!-- <div class="remember_login">
                <input type="checkbox">
                <label>Remember for 30 days</label>
                <p><a href="#">Forgot password</a></p>
            </div> -->
            <div class="btn_login">
                <!-- <input type="submit" value="im Log in"> -->
                <input type="submit" name="login" class="btn-mot" value="Đăng nhập">
                <!-- <button class="btn-hai"> <img src="./view/layout/img/icon-google.png"> Sigh in with
                    Google</button> -->
                <!-- <p>Don't have an account? <a href="./SignUp.html">Sign up for free</a></p> -->
            </div>
        </form>
    </div>
</main>
<!-- <script src="./view/layout/asset/css/js/loginAndsignin.js"></script> -->