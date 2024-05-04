<?php
$show_dssp_hot = show_SP($dssp_hot);
$show_dssp_new = show_SP($dssp_new);


?>

<!-- container  -->
<div class="container_all">

    <!-- Banner -->
    <section class="banner_naa">
        <!-- endddd  -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./view/layout/img/slide_2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="index.php?pg=product">
                            <input class="carousel-inner__btn" type="submit" value="Mua ngay">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./view/layout/img/slide_1.png" class="d-block w-100" alt="...">

                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./view/layout/img/slide_4.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>


    <!-- setion 1 -->
    <section class="section-1">
        <div class="wrapprt_section1">
            <div class="section1-detail">
                <span class="section-1_icon"><i class="fa-solid fa-credit-card"></i></span>
                <h3 class="section-1_title">Secure Payment</h3>
                <p class="section-1_content">100% secure payment</p>
            </div>
            <div class="section1-detail">
                <span class="section-1_icon"><i class="fa-solid fa-file-invoice-dollar"></i></span>
                <h3 class="section-1_title">30 Days Return</h3>
                <p class="section-1_content">If goods have problems</p>
            </div>
            <div class="section1-detail">
                <span class="section-1_icon"><i class="fa-solid fa-phone-volume"></i></span>
                <h3 class="section-1_title">24/7 Support</h3>
                <p class="section-1_content">Dedicated support</p>
            </div>
            <div class="section1-detail">
                <span class="section-1_icon"><i class="fa-solid fa-truck"></i></span>
                <h3 class="section-1_title">Free Delivery</h3>
                <p class="section-1_content">For all order over 80$</p>
            </div>
        </div>
    </section>
    <!--end setion 1 -->

    <!-- New Arrivalsssssssssssss -->
    <section class="search-category">
        <div class="search-category__img d-flex justify-content-evenly">
            <img src="./view/layout/img/search_category.jpg" alt="Erro mages">
        </div>
        <div class="search-category__chose d-flex justify-content-between">
            <a href="index.php?pg=product&idcatalog=101">
                <img src="./view/layout/img/category_1.jpg" alt="Erro Images">
            </a>
            <a href="index.php?pg=product&idcatalog=102">
                <img src="./view/layout/img/category_2.png" alt="Erro Images">
            </a>
            <a href="index.php?pg=product&idcatalog=103">
                <img src="./view/layout/img/category_3.jpg" alt="Erro Images">

            </a>
            <a href="index.php?pg=product&idcatalog=104">
                <img src="./view/layout/img/category_4.jpg" alt="Erro Images">
            </a>
            <a href="index.php?pg=product&idcatalog=106">
                <img src="./view/layout/img/category_5.jpg" alt="Erro Images">
            </a>

        </div>
    </section>
    <!-- end New Arrivalssssssssssssssssss -->



    <!-- TREND proeducttttttttt  -->
    <section class="trend-products">
        <div class="products-title flex-wrap  d-flex justify-content-center">
            <img class="title__images" src="./view/layout/img/img_trend_product.jpg" alt="images">
        </div>
        <div class="products-wrapper d-flex justify-content-between">
            <?= $show_dssp_hot ?>
            <!-- product_1111  -->
            <!-- <div class="products-box">
                <div class="products-box__view">
                    <img src="./view/layout/img/icon_product_new.png" alt="">

                </div>
                <div class="products-box__hot">
                    <img src="./view/layout/img/icon_product_hot.png" alt="">
                </div>
                <a href="#">
                    <img class="products-box__images" src="./view/layout/img/product_2.jpeg" alt="images">
                </a>
                <p class="products-box__name">QUẦN JEAN NỮ - STRAIGHT TOTODAY.</p>
                <p class="products-box__price">350.000đ <sup><strike> 400.000đ</strike></sup> </p>
                <div class="products-box__btn">
                    <input type="button" value="thêm">
                </div>
            </div> -->


        </div>
    </section>
    <!-- End TRENDING-proeducttttttttt  -->

    <!-- Start TRENDING CATEGORYYYYYYYYYYYYYYYY -->
    <section class="trend-category">
        <div class="trend-category-title d-flex justify-content-center">
            <img src="./view/layout/img/img_trend_category.jpg" alt="Erro Images">
        </div>
        <div class="trend-category-content d-flex justify-content-between">
            <div class="category-content-left">
                <a href="index.php?pg=product&idcatalog=104">
                    <input class="category-content-left__btn" type="button" value="ĐỒ UNISEX">
                    <img src="./view/layout/img/img_trend_category_aothun.webp" alt="">
                </a>
            </div>
            <div class="category-content-right ">
                <div class="content-right__1images">
                    <a href="index.php?pg=product&idcatalog=101">
                        <input class="category-content-left__btn" type="button" value="ÁO KHOÁC">
                        <img src="./view/layout/img/img_trend_category_aokhoac.webp" alt="">
                    </a>
                </div>
                <div class="content-right__2images">
                    <a href="index.php?pg=product&idcatalog=103">
                        <input class="category-content-left__btn" type="button" value="ĐỒ NỮ">
                        <img src="./view/layout/img/img_trend_category_somi.webp" alt="">
                    </a>
                    <a href="index.php?pg=product&idcatalog=106">
                        <input class="category-content-left__btn" type="button" value="PHỤ KIỆN">
                        <img src="./view/layout/img/img_trend_category_phukien.webp" alt="">
                    </a>
                </div>


            </div>

        </div>

    </section>
    <!-- end TRENDING CATEGORYYYYYYYYYYYYYYYY-->

    <article>
        <!-- TREND MÙA THUUU proeducttttttttt  -->
        <section class="trend-products trend-products--FAll">
            <div class="products-title flex-wrap  d-flex justify-content-center">
                <img class="title__images__fall title__images " src="./view/layout/img/img_trend_fall.jpg" alt="images">
            </div>
            <div class="products-wrapper d-flex justify-content-between">
                <!-- product_1111  -->
                <?= $show_dssp_new ?>
                <!-- <div class="products-box">
                    <a href="#">
                        <img class="products-box__images" src="./view/layout/img/product_2.jpeg" alt="images">
                    </a>
                    <p class="products-box__name">QUẦN JEAN NỮ - STRAIGHT TOTODAY.</p>
                    <p class="products-box__price">350.000đ <sup><strike> 400.000đ</strike></sup> </p>
                    <div class="products-box__btn">
                        <input type="button" value="thêm">
                    </div>
                </div> -->
                <!-- product_1112  -->


            </div>
        </section>




        <section class="Popular-Post">
            <div class="title-Popular-Post">
                <img src="./view/layout/img/img_trend_news.jpg" alt="Erro images">
            </div>
            <div class="view-Popular-Post">
                <div class="content-Popular-Post">
                    <div class="content-Popular-img">
                        <a href><img src="./view/layout/img/news_1.png" alt></a>
                    </div>
                    <a href="#">
                        <h4>💥 MUA SẮM THẢ GA - EXTRA HOÀNH TRÁNG 💥</h4>
                    </a>
                    <p class="content-Popular-img__note">💥 DEAL THẢ PHANH - MỪNG trung thu <br>
                        👉🏻 FRIENDs đã sẵn sàng cùng Highway <br>
                        🔥 Cơ hội sở hữu các items thời trang siêu HOT với mức giá cực nhẹ tú</p>
                    <p>IN LIFESTY / ON LEONDECEMBER 24, 2021</p>
                </div>
                <div class="content-Popular-Post">
                    <div class="content-Popular-img">
                        <a href><img src="./view/layout/img/news_2.png" alt></a>
                    </div>
                    <a href="#">
                        <h4>MỪNG TRUNG THU - DEAL THẢ PHANH</h4>
                    </a>
                    <p class="content-Popular-img__note">💥 MUA SẮM THẢ GA - EXTRA HOÀNH TRÁNG 💥 <br>👉🏻 Chào mừng
                        tháng 9 tựu trường, vui mừng mua sắm thả ga không lo về giá TOTODAY giảm ngay
                        50.000đ dành cho FRIENDs với các sản phẩm đồng giá từ 79k.</p>
                    <p>IN LIFESTY / ON LEONDECEMBER 24, 2021</p>
                </div>
                <div class="content-Popular-Post">
                    <div class="content-Popular-img">
                        <a href><img src="./view/layout/img/news_3.jpg" alt></a>
                    </div>
                    <a href="#">
                        <h4>ĐA PHONG CÁCH HƠN VỚI CÁC KIỂU ÁO SƠ MI TRENDY NHÀ TOTODAY</h4>
                    </a>
                    <p class="content-Popular-img__note">Áo sơ mi được xem như biểu tượng đầy lịch lãm và trang nhã
                        không thể thiếu của cánh mày râu. Item không chỉ được sử dụng cho môi trường công sở mà
                        còn là trang phục để dành cho các dịp đi chơi cực kỳ thời trang. Vẫn là chiếc áo sơ mi với
                        kiểu dáng truyền thống, nhưng giờ đây với sự phá c</p>
                    <p>IN LIFESTY / ON LEONDECEMBER 24, 2021</p>
                </div>
            </div>
        </section>

        <!-- 3 -->
        <section class="Newsletter-updates">
            <img src="./view/layout/img/banner_subscribe.png" alt="">
            <div class="wrapper-Newsletter">
                <div class="content-Newsletter">
                    <div class="content-Newsletter row1">
                        <h1>Newsletter Updates</h1>
                    </div>
                    <div class="content-Newsletter row2">
                        <p>Subscribe to receive emails on new product arrivals & special offers</p>
                    </div>
                    <div class="content-Newsletter row3">
                        <div class="btn-Newsletter">
                            <input class="btn-Newsletter1" type="email" placeholder="Email address">
                            <input class="btn-Newsletter2" type="button" value="Subscribe">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>