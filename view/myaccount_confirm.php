<?php

if (isset($_SESSION['s_user']) && ($_SESSION['s_user'] > 0)) {
    extract($_SESSION['s_user']);
    $userinfor = get_user($id);
    $_SESSION['s_user'] = $userinfor;
    extract($userinfor);
}

?>
<link rel="stylesheet" href="./view/layout/asset/css/my_account.css">
<main>
    <div class="wrapper-content-product">
        <!-- tráiiiiiiiiiiiiiiiiiiiiii  -->
        <div class="content-product-left">
            <div class="wrapper_left">
                <ul>
                    <li data-li="dasboard" class="active">
                        <i class="fa-solid fa-gauge-high"></i>
                        <p> DASHBOARD</p>
                    </li>
                    <li data-li="order">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <p> ORDERS</p>
                    </li>
                    <li data-li="dowload">
                        <i class="fa-solid fa-download"></i>
                        <p>DOWNLOAD</p>
                    </li>
                    <li data-li="payment">
                        <i class="fa-solid fa-money-check-dollar"></i>
                        <p>PAYMENT METHOD</p>
                    </li>

                    <li data-li="address">
                        <i class="fa-solid fa-location-dot"></i>
                        <p> ADDRESS</p>
                    </li>
                    <li data-li="account">
                        <i class="fa-regular fa-user"></i>
                        <p>ACCOUNT DETAILS</p>
                    </li>
                    <li data-li="logout">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <p>LOGOUT</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- phảiiiiiiiiiiiiiiiiiiii-->
        <div class="content-product-right">
            <div class="wrapper_right">

                <!-- một -->
                <div class="item dasboard">
                    <p>Dashboard</p>
                    <p><?= $thongbao ?></p>
                    <hr>
                    <form action="index.php?pg=update_user" method="post">
                        <!-- 1-->
                        <div class="information_submit">
                            <label for>Họ tên*:</label> <br>
                            <input type="text" name="hoten" placeholder="Nhập họ và tên" value="<?= $hoten ?>">
                        </div>
                        <!-- 2 -->
                        <div class="information_submit">
                            <label for>Tên đăng nhập*:</label> <br>
                            <input type="text" name="username" value="<?= $username ?>" placeholder="họ và tên">
                        </div>
                        <!-- 3 -->
                        <div class="information_submit">
                            <label for>Mật khẩu*:</label> <br>
                            <input type="password" name="password" value="<?= $password ?>" placeholder="họ và tên">
                        </div>
                        <!-- 4 -->
                        <div class="information_submit">
                            <label for>Email*:</label> <br>
                            <input type="text" name="email" placeholder="họ và tên" value="<?= $email ?>">
                        </div>
                        <!-- 5 -->
                        <div class="information_submit">
                            <label for>Địa chỉ*:</label> <br>
                            <input type="text" name="diachi" placeholder="Nhập địa chỉ" value="<?= $diachi ?>">
                        </div>
                        <!-- 6 -->
                        <div class="information_submit">
                            <label for>Số điện thoại*:</label> <br>
                            <input type="text" name="dienthoai" placeholder="Nhập số điện thoại"
                                value="<?= $dienthoai ?>">
                        </div>
                        <!-- 7,8 -->
                        <div class="information_submit">
                            <label for>Hình ảnh*:</label> <br>
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input style="padding-top: 10px;" type="file" name="hinh" value="<?= $hinh ?>">

                        </div>
                        <input type="submit" name="capnhat" value="Cập nhật">
                    </form>
                </div>

                <!-- hai -->
                <div class="item order" style="display: none;">
                    <p>Order</p>
                    <hr>
                    <table>
                        <thead>
                            <tr>
                                <th>Hình</th>
                                <th>Tên SP</th>
                                <th>Ngày mua</th>
                                <th>Trạng thái</th>
                                <th>Giá</th>
                                <th>Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="./view/layout/img/tshirt-white.jpg" alt></td>
                                <td>T shirt red</td>
                                <td>23-05-2023</td>
                                <td>Đãng thanh toán</td>
                                <td>100$</td>
                                <td style="text-align: end;"><input type="submit" value="Xem"></td>
                            </tr>
                            <tr>
                                <td><img src="./view/layout/img/tshirt-green.jpg" alt></td>
                                <td>T shirt black</td>
                                <td>23-05-2023</td>
                                <td>Đãng thanh toán</td>
                                <td>100$</td>
                                <td style="text-align: end;"><input type="submit" value="Xem"></td>
                            </tr>
                            <tr>
                                <td><img src="./view/layout/img/Tshirt.png" alt></td>
                                <td>T shirt black</td>
                                <td>23-05-2023</td>
                                <td>Đãng thanh toán</td>
                                <td>100$</td>
                                <td style="text-align: end;"><input type="submit" value="Xem"></td>
                            </tr>

                        </tbody>

                    </table>
                </div>

                <!-- 666666666666 -->
                <div class="item account" style="display: none;">
                    <p>Account detail</p>
                    <hr>
                    <form action>
                        <!-- 1 -->
                        <div class="information_submit submit_account">
                            <label for>Tên*:</label> <br>
                            <input type="text" placeholder="Tên">
                        </div>
                        <!-- 2 -->
                        <div class="information_submit  submit_account">
                            <label for>Họ*:</label> <br>
                            <input type="text" placeholder="họ">
                        </div>
                        <!-- 3 -->
                        <div class="information_submit  submit_account">
                            <label for>Email*:</label> <br>
                            <input type="text" placeholder="họ và tên">
                        </div>
                        <!-- 4 -->
                        <div class="information_submit  submit_account">
                            <label for>Địa chỉ*:</label> <br>
                            <input type="text" placeholder="họ và tên">
                        </div>
                        <!-- 5 -->
                        <div class="information_submit  submit_account">
                            <label for>Sộ điện thoại*:</label> <br>
                            <input type="text" placeholder="họ và tên">
                        </div>
                        <br>
                        <div class="input_submit_account">
                            <input type="submit" value="Sữa thay đổi">
                        </div>
                    </form>
                </div>

                <!-- tư -->
                <div class="item payment" style="display: none;">
                    <form action>
                        <!-- 1 -->
                        <div class="information_submit">
                            <label for>Thứ t4*:</label> <br>
                            <input type="text" placeholder="họ và tên">
                        </div>
                        <!-- 2 -->
                        <div class="information_submit">
                            <label for>Email*:</label> <br>
                            <input type="text" placeholder="họ và tên">
                        </div>
                        <!-- 3 -->
                        <div class="information_submit">
                            <label for>Số điện thoại*:</label> <br>
                            <input type="text" placeholder="họ và tên">
                        </div>
                        <!-- 4 -->
                        <div class="information_submit">
                            <label for>Địa chỉ*:</label> <br>
                            <input type="text" placeholder="họ và tên">
                        </div>
                        <input type="submit" value="Lưu">
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>
<script src="./view/layout/asset/css/js/my_account.js"></script>