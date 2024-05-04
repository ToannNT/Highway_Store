<?php
if (isset($_SESSION["s_user"]) && (count($_SESSION["s_user"]) > 0)) {
    extract($_SESSION["s_user"]);
    $html_account = '
                    <ul class="my_account">
                        <li><a href="index.php?pg=my_account">Hồ sơ</a></li>
                        <li><a href="index.php?pg=logout">Thoát</a></li>
                    </ul>
                    <span>' . $username . '</span>';
} else {
    $html_account = '
                    <ul class="my_account">
                        <li><a href="index.php?pg=login">Đăng nhập</a></li>
                        <li><a href="index.php?pg=signup">Đăng kí </a></li>
                    </ul>
                    <span>Đăng nhập</span>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="./view/layout/img/logo.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- OWL Carousel 2  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- bootstap5  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/layout/asset/css/style.css">
    <title>Home</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav-left">
                <a href="index.php"><img src="./view/layout/img/logo_highway.jpg" alt></a>
                <!-- <i> Highway Store </i> -->
            </div>
            <div class="nav-mid">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?pg=product">Sản phẩm</a></li>
                    <li><a href="index.php?pg=service">Dịch vụ</a></li>
                    <li><a href="index.php?pg=aboutus">Về chúng tôi</a></li>
                    <li><a href="index.php?pg=news">Bài viết</a></li>
                    <li><a href="index.php?pg=contact">Liên hệ</a></li>
                </ul>
            </div>
            <div class="nav-right">

                <form action="index.php?pg=product" method="post" class="nav-right-btn-search">
                    <input id="nav-right-btn-search__input" type="text" name="keyword" placeholder="Tên sản phẩm">
                    <button id="nav-right-btn-search__btn" type="submit" name="timkiem">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                    <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                </form>
                <div class="nav-right-btn">
                    <a href="index.php?pg=viewcart"><i class="fa-solid fa-cart-plus"></i></a>
                    <i class="fa-regular fa-circle-user">
                        <?= $html_account; ?>
                        <!-- <ul class="my_account">
                            <li><a href="index.php?pg=my_account">My Account</a></li>
                            <li><a href="index.php?pg=login">Login</a></li>
                            <li><a href="index.php?pg=signup">Signup</a></li>
                        </ul>
                        <span>Login</span> -->
                    </i>
                </div>

                <!-- barsssssssssssssss -->
                <label for="nav-mobile-input" class="nav-right-btn-bars">
                    <i class="fa-solid fa-bars"></i>
                </label>
            </div>

            <!-- check input  -->
            <input type="checkbox" class="nav-input-css" id="nav-mobile-input">

            <!-- over play  -->
            <label for="nav-mobile-input" class="nav-right-overlay"></label>

            <!-- nav mobileeeeeeeeeeeeee -->
            <div class="nav-mobile">
                <!-- closessss  -->
                <label for="nav-mobile-input" class="nav-mobile-close">
                    <i class="fa-solid fa-xmark"></i>
                </label>
                <ul class="nav-mobile-list">
                    <li><a class="nav-mobile-link" href="./index.html">Home</a></li>
                    <li><a class="nav-mobile-link" href="./page/Cart.html">Product</a></li>
                    <li><a class="nav-mobile-link" href="./page/service.html">Service</a></li>
                    <li><a class="nav-mobile-link" href="./page/aboutUS.html">About US</a></li>
                    <li><a class="nav-mobile-link" href>News</a></li>
                    <li><a class="nav-mobile-link" href>Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>