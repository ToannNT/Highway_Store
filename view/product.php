<?php
$show_dsdm = '';

foreach ($dsdm as $item) {
    extract($item);
    $link = 'index.php?pg=product&idcatalog=' . $id;
    $show_dsdm .= '
        <li class="sidebar_list"><a href="' . $link . '">' . $ten_loai . '</a>
            <span>(' . get_count_sp($id) . ')</span>
        </li>';
}

$show_dssp_all = show_SP($dssp);
if ($keyword != "") $result_keyword = "Kết quả tìm kiếm của: <b> " . $keyword . "</b>";
else $result_keyword = "";


if ($follow_trang != "") $result_follow = " <b> " . $follow_trang . "</b>";
else $result_follow = "TẤT CẢ SẢN PHẨM";





?>

<link rel="stylesheet" href="./view/layout/asset/css/Products.css">
<!-- bannerrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->
<section class="banner">
    <div class="title-product-main">
        <p>Trang chủ / <span>Sản phẩm</span></p>
        <h1>Sản phẩm</h1>
        <?= $result_keyword ?>

    </div>
</section>

<!-- end  -->

<main>
    <div class="wrapper-content-product">
        <!-- left  -->
        <div class="detail-product-left">
            <div class="Top-rated-products">
                <h4 style="margin: 15px 0px 0px 10px; font-weight: bold;">DANH MỤC</h4>
                <?= $show_dsdm; ?>
                <!-- <ul class="sidebar_menu"> -->
                <!-- <li class="sidebar_list"><a href="#">ALL ÁO KHOÁC</a>
                    <span>(5)</span>
                </li>
                <li class="sidebar_list"><a href="#">ÁO KHOÁC THUN</a>
                    <span>(5)</span>
                </li> -->
                <!-- </ul> -->
            </div>

            <!-- <section class="more-Top-rated">
                <div class="content-more-Top">
                    <h2>New Cloth Technologies</h2>
                    <p>Mauris vitae ultricies leo integer malesuada. Odio tempor orci
                        dapibus ultrices in.</p>
                    <p>Egestas diam in arcu cursus euismod dictum purus viverra accumsan in
                        nisl.</p>
                    <p>Alice Autumn, CEO</p>
                </div>
            </section> -->
        </div>


        <!-- right  -->
        <div class="content-product-right">
            <!-- BOX SẢN PHẨM  -->
            <div class="products-wrapper">
                <!-- product_1111  -->
                <h4 style="text-align:center; margin: 15px 0px 0px 0px; font-weight: bold;"><?= $result_follow ?></h4>

                <div class="container-product d-flex">
                    <?= $show_dssp_all ?>
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
                        <div class="products-box__btn_submit">
                            <input type="submit" class="products-box__btn__buy" value="Mua">
                            <input type="submit" class="products-box__btn__add" value="Thêm">
                        </div>

                    </div> -->

                    <!-- product_1118 -->
                    <!-- <div class="products-box">
                        <a href="#">
                            <img class="products-box__images" src="./view/layout/img/product_5.jpeg" alt="images">
                        </a>
                        <p class="products-box__name">ÁO THUN UNISEX - TOTODAY - TOTODAY DẬP NỔI</p>
                        <p class="products-box__price">199.000đ <sup><strike> 285.000đ</strike></sup> </p>
                        <div class="products-box__btn_submit">
                            <input type="submit" class="products-box__btn__buy" value="Mua">
                            <input type="submit" class="products-box__btn__add" value="Thêm">
                        </div>
                    </div> -->
                    </d>






                </div>
            </div>
</main>