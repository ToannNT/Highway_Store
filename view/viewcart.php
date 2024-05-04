<link rel="stylesheet" href="./view/layout/asset/css/cart.css">
<?php
$html_show_cart = '';
$i = 0;
if (isset($_SESSION['giohang'])) {
    foreach ($_SESSION['giohang'] as $sp) {
        extract($sp);
        $total = (int)$price * (int)$quantity;
        $html_show_cart .= '
                                <tr>
                                    <td>
                                        <a href="index.php?pg=viewcart&del=' . $i . '">
                                            <i class="fa-solid fa-trash-can" style="color: #000000;"></i>
                                        </a>
                                    </td>
                                    <td><img src="./view/layout/img/' . $img . '"></td>
                                    <td class="mycart__name_product">' . $name . '</td>
                                    <td>' . $price . '.000đ</td>
                                    <td>' . $quantity . '</td>
                                    <td>' . $total . '.000đ</td>
                                </tr>';
        $i++;
    }
}


?>
<!-- bannerrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->
<section class="banner">
    <div class="title-product-main">
        <!-- <p>Home / <span>Products</span></p> -->
        <p>Home / <span>Cart</span></p>
        <h1>Cart</h1>
    </div>
</section>

<main>
    <div class="wrapper-content-product">
        <div class="content-product-right">

            <div class="boxtrai mr">
                <h2>Your cart</h2>
                <div class="row mb">
                    <table>
                        <tr>
                            <th>Remove</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Tocal ($)</th>
                        </tr>
                        <tbody id="mycart">
                            <?= $html_show_cart ?>
                            <!-- <tr>
                                <td>
                                    <a href="#">
                                        <i class="fa-solid fa-trash-can" style="color: #000000;"></i>
                                    </a>
                                </td>
                                <td><img src="./view/layout/img/product_2.jpeg"></td>
                                <td>Quần baggy</td>
                                <td>250.000đ</td>
                                <td>2</td>
                                <td>500.00đ</td>
                            </tr> -->
                        </tbody>
                        <a href="index.php?pg=viewcart&del=-1">Xóa tất cả</a>

                    </table>
                </div>


                <div class="row mb_checkout">
                    <div class="cart_totals1">
                        <div class="note-prodcut">
                            <label for>Ghi chú đơn hàng</label>
                            <textarea></textarea>
                        </div>

                    </div>
                    <div class="cart_totals2">
                        <div class="checkout">
                            <h3>Discount Code</h3>
                            <form action="index.php?pg=viewcart&voucher=1" method="post">
                                <input type="hidden" name="tongdonhang" value="<?= $tongdonhang ?>">
                                <input type="text" name="mavoucher" placeholder="Add discount code">
                                <input type="submit" value="Apply">
                            </form>

                            <p><span>New customer?</span>
                                <a href="./SignUp.html">Sigh up</a>
                                to get better offer
                            </p>
                            <!-- <hr> -->
                            <div class="subtotal number_one">
                                <p>Subtotal</p>
                                <span class="total_detail"><?= $tongdonhang ?>.000đ</span>
                            </div>
                            <div class="subtotal">
                                <p>Discont</p>
                                <span>-<?= $giatrivoucher ?>$</span>
                            </div>
                            <div class="subtotal">
                                <p>Shipment cost</p>
                                <span>
                                    <tien>+0</tien>$
                                </span>
                            </div>
                            <div class="subtotal">
                                <span class="total_main">Grand total</span>
                                <span class="total_detail">
                                    <tien><?= $thanhtoan ?>.000đ</tien>
                                </span>
                            </div>
                            <div class="btn_submit">
                                <div class="button_one">
                                    <a href="index.php?pg=bill"><input type="submit" class="button_one" value="Checkout"></a>
                                </div>
                                <div class="button_two">
                                    <a href="#"><input type="submit" class="button_one" value="Checkout"></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</main>