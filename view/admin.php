<link rel="stylesheet" href="./layout/asset/css/admin.css">
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="./layout/img/logo.jpg">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <link rel="stylesheet" href="./asset/css/admin.css">
        <title>ADMIN</title>
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-left">
                    <a href="../index.html"><img src="./layout/img/logoOnly.jpg" alt></a>
                    <i> Admin </i>
                </div>
                <div class="nav-mid">
                    <form action="#" class="search_box">
                        <button>
                            <i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>
                        </button>   
                        <input type="search" placeholder="Tìm kiếm">
                    </form>
                    <div class= "btn_right">
                        <span>Open fouder</span>
                        <img src="./layout/img/button2.jpg" alt="">
                    </div>
                </div>


                <div class="nav-right">
                    <div class="nav-right-btn-search">
                        <i class="fa-regular fa-bell" style="color: #000000;"></i>
                        <img src="./layout/img/admin.jpg" alt>
                        <span>Nguyen Thanh Toan</span>
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
                        <li><a class="nav-mobile-link" href="../index.html">Home</a></li>
                        <li><a class="nav-mobile-link" href="./products.html">Product</a></li>
                        <li><a class="nav-mobile-link" href="./service.html">Service</a></li>
                        <li><a class="nav-mobile-link" href="./aboutUS.html">About US</a></li>
                        <li><a class="nav-mobile-link" href="./News.html">News</a></li>
                        <li><a class="nav-mobile-link" href="./contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- mainnnnnnnn  -->
        <main>
            
            <div class="wrapper-content-product">
                <!-- tráiiiiiiiiiiiiiiiiii  -->
                <div class="content-product-left">
                    <div class="wrapper_left">
                        <ul>
                            <li data-li="dasboard" class="active">
                                <i class="fa-solid fa-gauge-high"></i>
                                <p> Bảng điều khiển</p>
                            </li>
                            <li data-li="order">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <p> Quản lí sản phẩm</p>
                            </li>
                            <li data-li="dowload">
                                <i class="fa-solid fa-list-check"></i>
                                <p>Hàng tồn kho</p>
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
                            <p>Dashboard</p> <hr>
                            <form action>
                                <!-- 1 -->
                                <div class="information_submit">
                                    <label for>Họ và tên*:</label> <br>
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

                        <!-- hai -->
                        <div class="item order" style="display: none;">
                            <p>Order</p>
                            <hr>
                            <table>
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Hình</th>
                                        <th>Tên SP</th>
                                        <th>Số lượng</th>
                                        <th>Trạng thái</th>
                                        <th>Giá</th>
                                        <th>Chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#34234</td>
                                        <td><img src="./layout/img/tshirt-green.jpg" alt></td>
                                        <td>T shirt red</td>
                                        <td>6</td>
                                        <td>Đãng thanh toán</td>
                                        <td>100$</td>
                                        <td><input type="submit"
                                                value="Xem"></td>
                                    </tr>
                                    <tr>
                                        <td>#34234</td>
                                        <td><img src="./layout/img/tshirt-green.jpg" alt></td>
                                        <td>T shirt black</td>
                                        <td>88</td>
                                        <td>Đãng thanh toán</td>
                                        <td>100$</td>
                                        <td><input type="submit"
                                                value="Xem"></td>
                                    </tr>
                                    <tr>
                                        <td>#34234</td>
                                        <td><img src="./layout/img/Tshirt.png" alt></td>
                                        <td>T shirt black</td>
                                        <td>21</td>
                                        <td>Đãng thanh toán</td>
                                        <td>100$</td>
                                        <td><input type="submit"
                                                value="Xem"></td>
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

        <!-- footerrrrrrrrrrrrrrrrrrrrr  -->
        <footer>
            <div class="wrapper-footer1">
                <div class="content-footer">
                    <!-- 1 -->
                    <div class="detail-content-footer footer1">
                        <h3>About Us</h3>
                        <p>Mauris vitae ultricies leo integer
                            malesuada.
                            Odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus
                            euismod.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod
                            tempor incididunt.</p>
                    </div>
                    <!-- 2 -->
                    <div class="detail-content-footer">
                        <h3>Account</h3>
                        <p>My Account</p>
                        <p>My Wishlist</p>
                        <p>My Cart</p>
                        <p>Sign in</p>
                        <p>Check out</p>
                    </div>
                    <!-- 3 -->
                    <div class="detail-content-footer">
                        <h3>Shipping</h3>
                        <p>New Products</p>
                        <p>Best Sellers</p>
                        <p>Manufacturers</p>
                        <p>Suppliers</p>
                        <p>Specials</p>
                    </div>
                    <!-- 4 -->
                    <div class="detail-content-footer">
                        <h3>Contact Us</h3>
                        <p>Phone: (+63) 555 1212</p>
                        <p>Fax: (+63) 555 0100</p>
                        <p>New York,96th Street, NY 10129</p>
                    </div>

                </div>
            </div>
            <!-- 2 -->
            <div class="wrapper-footer2">
                <div class="logo-footer">
                    <img src="./layout/img/./logoOnly.jpg">
                    <span>NOAT Store</span>
                </div>
                <div class="license">
                    <p>2023 - coder by NTT</p>
                </div>
            </div>
        </footer>

        <script src="./layout/asset/css/js/admin.js"></script>

    </body>
</html>