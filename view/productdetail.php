<?php
// echo "Lấy trước id catalog: ".$idcatalog;
// extract($detail);
// echo "Lấy sau id catalog: ".$idcatalog;

extract($sp_chitiet);
if ($giam_gia > 0) {
    $gia_sp =
        ' <span>' . $giam_gia . '.000đ</span> <sup><strike> ' . $gia . '.000đ</strike></sup>';
} else {
    $gia_sp = ' <span>' . $gia . '.000đ</span> <sup><strike> ' . $giam_gia . ' </strike></sup>';
}
//pridcut related
$show_product_related = show_SP($sp_lienquan);


?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="./view/layout/asset/css/DetailProducts.css">
<!-- bannerrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->
<section class="flow_web">
    <span class="span1">Home /dasdsa /</span> <span class="span2">Elengant bag</span>
</section>

<main>
    <div class="wrapper-content-product">

        <!-- right  -->
        <div class="content-product-right">
            <!-- top  -->
            <div class="wrapper-detail-product-top">
                <!-- 1 -->
                <div class="img_product_left_big">
                    <img src="./view/layout/img/<?= $hinh ?>" id="main_img">
                    <div class="img_product_left_small">
                        <img src="./view/layout/img/<?= $hinh ?>" alt>
                        <img src="./view/layout/img/<?= $hinh1 ?>" alt>
                        <img src="./view/layout/img/<?= $hinh2 ?>" alt>
                        <img src="./view/layout/img/<?= $hinh3 ?>" alt>
                    </div>

                </div>
                <div class="infomation_product_right_top">
                    <form action="index.php?pg=addcart" method="post">
                        <h2><?= $ten_sp ?></h2>
                        <img src="./view/layout/img/Star.png" alt> <br>
                        <?= $gia_sp ?>
                        <p class="p_122"></p>
                        <div class="product_right_top-quality">
                            <input type="hidden" name="name" value="<?= $ten_sp ?>">
                            <input type="hidden" name="img" value="<?= $hinh ?>">
                            <input type="hidden" name="price" value="<?= $gia ?>">
                            <input type="hidden" name="idpro" value="<?= $id ?>">
                            <p>Số lượng: <input type="number" name="quantity" min="1" max="50" value="1"></p>
                        </div>

                        <div class="btn-product_right_top">
                            <input type="button" name="addcart" value="Mua ngay">
                            <input type="submit" name="addcart" value="Thêm vào giỏ hàng">
                        </div>
                    </form>
                </div>
            </div>

            <!-- bottom 1 -->
            <div class="wrapper-detail-product-bot">
                <h1>Chi tiết sản phẩm </h1>
                <!-- 1 -->
                <p>
                    <?= $mo_ta ?>
                </p>
            </div>
            <p>
                <button style="border-radius: 0px;" class="py-2 px-3 btn btn-dark" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseExample_hai" aria-expanded="false"
                    aria-controls="collapseExample">
                    Bình luận
                </button>
            </p>
            <!-- 2s -->
            <div class="collapse" id="collapseExample_hai">
                <iframe src="./view/binhluan.php?idpro=<?= $id ?>" width="100%" height="300px" frameborder="0"></iframe>

            </div>











        </div>
        <!-- bottom 2 -->
        <div class="wrapper-detail-product-bot detail-product-bot__related ">
            <h1>Related Products</h1>
            <div action="" type="submit" class="d-flex justify-content-between">
                <!-- product_1111  -->
                <?= $show_product_related ?>
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


            </div>
        </div>
    </div>
</main>
<script>
$(() => {
    $('.img_product_left_small img').click(function() {
        let imgPath = $(this).attr('src');
        $('#main_img').attr('src', imgPath);
    })
})
</script>
<script src="./layout/asset/css/js/DetailProduct.js"></script>