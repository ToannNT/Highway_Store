<link rel="stylesheet" href="./view/layout/asset/css/payment.css">

<!-- bannerrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->
<section class="banner">
    <div class="title-product-main">
        <p>Trang trủ > giỏ hàng > <span>đơn hàng</span></p>

        <h1>ĐƠN HÀNG</h1>
    </div>
</section>

<main>
    <form action="index.php?pg=bill" method="post" class="wrapper-content-product">
        <div class="content-product-right">
            <!-- <p>Information customer</p> -->
            <div class="infomation">
                <div class="infomation_customer">
                    <h4 style="font-size: bold;">| THÔNG TIN NGƯỜI ĐẶT HÀNG</h4>
                    <div class="infomation_customer__form" action>
                        <input type="text" name="hoten" placeholder="Họ tên*">
                        <input type="text" name="diachi" placeholder="Địa chỉ*">
                        <input type="text" name="email" placeholder="Email*">
                        <input type="text" name="dienthoai" placeholder="Điện thoại*">
                        <!-- <input type="text" placeholder="Address 1*">
                        <input type="text" placeholder="Address 2*">
                        <input type="text" placeholder="Free day*">
                        <input type="text" placeholder="Zip Code*"> -->
                    </div>
                </div>
            </div>
            <!-- Thông tin nhận hàng khaccccccccccccccc  -->
            <div class="infor_nguoinhankhac">
                <a onclick="showttnhanhang()" style="cursor: pointer;">
                    &rArr; Thây đổi thông tin người nhận
                </a>
            </div>
            <div class="ttdathang" id="ttnhanhang">
                <h5>Thông tin người nhận hàng</h5>

                <label style="margin-top: 10px;" for="hoten"><b> Họ và tên</b></label> <br>
                <input type="text" placeholder="Nhận họ tên đầy đủ" name="hoten_nguoinhan" id="hoten_nguoinhan"> <br>

                <label for="diachi"><b>Địa chỉ</b></label> <br>
                <input type="text" placeholder="Nhập địa chỉ" name="diachi_nguoinhan" id="diachi_nguoinhan"> <br>

                <label for="dienthoai"><b>Điện thoại</b></label> <br>
                <input type="text" placeholder="Nhập số điện thoại" name="dienthoai_nguoinhan" id="dienthoai_nguoinhan">
            </div>

            <!-- 2 -->
            <div class="infomation_payment_method">
                <p>Choose your courier</p>
                <!-- 1 -->
                <div class="mothod">
                    <div class="mothod_detail">
                        <input type="radio" checked name="ship" value="100">
                        <span>DHL Express</span>
                    </div>
                    <img src="./view/layout/img/DHL-Logo-new.png" alt>
                </div>
                <!-- 2 -->
                <div class="mothod">
                    <div class="mothod_detail">
                        <input type="radio" name="ship" value="120">
                        <span>FedEx Express</span>
                    </div>
                    <img src="./view/layout/img/Fedex_shing.png" alt>
                </div>
                <!-- 3 -->
                <div class="mothod">
                    <div class="mothod_detail">
                        <input type="radio" name="ship" value="150">
                        <span>Dpb Parcel</span>
                    </div>
                    <img src="./view/layout/img/dpd_ship.jpg" alt>
                </div>

            </div>
        </div>

        <div class="content-product-left">

            <div class="wrapper_payment_mothod">
                <div class="your_payment_mothod">
                    <h4>Phương thức thanh toán</h4>
                    <div class="payment_mothod_detail">
                        <input type="radio" name="pttt" id="1" checked> Tiền mặt
                    </div>
                    <div class="payment_mothod_detail">
                        <input type="radio" name="pttt" id="2"> Ví điện tử
                    </div>
                    <div class="payment_mothod_detail">
                        <input type="radio" name="pttt" id="3"> Chuyển khoảng
                    </div>
                    <div class="payment_mothod_detail">
                        <input type="radio" name="pttt" id="4"> Thanh toán online
                    </div>
                </div>
            </div>

            <p>Đơn hàng của bạn</p>
            <div class="wrapper_order">
                <div class="your_order">
                    <!-- 1  -->
                    <div class="detail_order">
                        <h5 style="font-weight: bold;">Sản phẩm</h5>
                        <h5 style="font-weight: bold;">4</h5>
                    </div>
                    <!-- 1  -->
                    <div class="detail_order">
                        <span>x2 T-Shirt Grey </span>
                        <h6>$240</h6>
                    </div>
                    <!-- 1  -->
                    <div class="detail_order">
                        <span>x1 T-Shirt red </span>
                        <h6>$120</h6>
                    </div>
                    <!-- 1  -->
                    <div class="detail_order">
                        <span>x1 T-Shirt yellow</span>
                        <h6>$120</h6>
                    </div>

                    <!-- 5  -->
                    <div class="detail_order detail_infor_product">
                        <p>Sub Total</p>
                        <h6>$480</h6>
                    </div>
                    <!-- 6  -->
                    <div class="detail_order">
                        <p>Discount</p>
                        <h6>0$</h6>
                    </div>
                    <!-- 7  -->
                    <div class="detail_order">
                        <p>Shipping</p>
                        <h6>$20</h6>
                    </div>
                    <!-- 8  -->
                    <div class="detail_order detail_infor_total">
                        <h6>Total</h6>
                        <h6>$500</h6>
                    </div>

                </div>

                <a href="#">
                    <input type="submit" name="bill" value="Thanh toán">
                </a>
            </div>
        </div>
    </form>
</main>
<script>
    var ttnhanhang = document.getElementById("ttnhanhang");
    ttnhanhang.style.display = "none";

    function showttnhanhang() {
        if (ttnhanhang.style.display == "none") {
            ttnhanhang.style.display = "block";
        } else {
            ttnhanhang.style.display = "none";
        }
    }
</script>