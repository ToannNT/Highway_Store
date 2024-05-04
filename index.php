<?php
session_start();
ob_start();
if (!isset($_SESSION["giohang"])) {
    $_SESSION["giohang"] = [];
}
// ob_start();
// session_start();
require_once "dao/pdo.php";
require_once "dao/sanpham.php";
require_once "dao/danhmuc.php";
require_once "dao/giohang.php";
require_once "dao/user.php";
require_once "dao/bill.php";






// connectdb();
// echo var_dump($dssp);

//header
require_once "view/header.php";

if (isset($_GET['pg']) && ($_GET['pg'] != "")) {
    //vào các trang con
    $pg = $_GET['pg'];
    switch ($pg) {
            // 1111111111111111111111111
        case 'product':
            // $count = get_count_sp($id);
            $dsdm = danhmuc_all();
            if (isset($_GET['idcatalog'])) {
                $idcatalog = $_GET['idcatalog'];
                $follow_trang = get_follow_page($idcatalog);
            } else {
                $idcatalog = 0;
                $follow_trang = "";
            }

            //kiem tra from
            if (isset($_POST['timkiem'])) {
                $keyword = $_POST["keyword"];
            } else {
                $keyword = "";
            }
            $dssp = get_dssp_All($keyword, $idcatalog, 12);

            require_once "view/product.php";
            break;
            // 2222222222222222222222222221
        case 'productdetail':
            $dsdm = danhmuc_all();
            if (isset($_GET['idpro'])) {
                $id = $_GET['idpro'];
                $sp_chitiet = get_sp_Detail($id);
                $idcatalog = $sp_chitiet['id_catalog'];
                $sp_lienquan = get_dssp_related($idcatalog, $id, 4);
                require_once "view/productdetail.php";
            } else {
                require_once "view/home.php";
            }

            break;
            // 333333333333333333333333
        case 'addcart':
            if (isset($_POST['addcart']) && ($_POST['addcart'])) {
                $idpro = $_POST['idpro'];
                $ten_sp = $_POST['name'];
                $hinh = $_POST['img'];
                $gia_sp = $_POST['price'];
                $soluong = $_POST['quantity'];
                $thanhtien = (int)$soluong * (int)$gia_sp;
                $sp = array('idpro' => $idpro, 'name' => $ten_sp, 'img' => $hinh, 'price' => $gia_sp, 'quantity' => $soluong, 'thanhtien' => $thanhtien);
                array_push($_SESSION['giohang'], $sp);
                echo var_dump($_SESSION['giohang']);
                header('location: index.php?pg=viewcart');
            }
            break;
            // 444444444444444444444444
        case 'viewcart':
            if (isset($_GET['del']) && ($_GET['del'] >= 0)) {
                array_splice($_SESSION['giohang'], $_GET['del'], 1);
                header('location: index.php?pg=viewcart');
            } else if (isset($_GET['del']) && ($_GET['del']) == -1) {
                // xóa luôn giỏ hàng session
                unset($_SESSION['giohang']);
            } else {
                if (isset($_SESSION['giohang'])) {
                    $tongdonhang = get_tongdonhang();
                }
                $giatrivoucher = 0;
                if (isset($_GET['voucher']) && ($_GET['voucher'] == 1)) {
                    $tongdonhang = $_POST['tongdonhang'];
                    $mavoucher = $_POST['mavoucher'];
                    //so sánh database
                    $giatrivoucher = 10;
                }
                $thanhtoan = (int)$tongdonhang - (int)$giatrivoucher;
            }
            require_once "view/viewcart.php";
            break;
            // 555555555555555555555555
        case 'addlogin':
            //xd
            if (isset($_POST['login']) && ($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                //xử lý
                $kq = checkuser($username, $password);
                if (is_array($kq) && (count($kq))) {
                    $_SESSION['s_user'] = $kq;
                    header('location: index.php');
                } else {
                    $tb = "Tài khoảng không tồn tại hoặc đăng nhập sai!";
                    $_SESSION['tblogin'] = $tb;
                    header('location: index.php?pg=login');
                }
            }
            //out
            // header('location: index.php');
            break;
            // 666666666666666666666666
        case 'login':
            // if (isset($_SESSION['tblogin']) && ($_SESSION['tblogin'] != "")) {
            //     $tb = $_SESSION['tblogin'];
            // }
            // unset($_SESSION['tblogin']);
            require_once "view/login.php";
            break;
            // 77777777777777777777777
        case 'logout':
            if (isset($_SESSION['s_user']) && ($_SESSION['s_user'] > 0)) {
                unset($_SESSION['s_user']);
            }
            header('location: index.php');
            break;
            // 8888888888888888888888888

        case 'adduser':
            if (isset($_POST['signup']) && ($_POST['signup'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $hinh = $_POST['hinh'];

                //xử lý
                user_insert($username, $password, $email, $hinh);
            }
            header('location: index.php?pg=login');
            break;
            // 99999999999999999999999999999
        case 'signup':
            require_once "view/signup.php";
            break;
            // 100000000000000000000000000
        case 'my_account':
            if (isset($_SESSION['s_user']) && ($_SESSION['s_user'] > 0)) {

                require_once "view/my_account.php";
            }
            break;
            // 1111111111111111111
        case 'update_user':
            $thongbao = "";
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $dienthoai = $_POST['dienthoai'];
                $hinh = $_POST['hinh'];
                $id = $_POST['id'];
                $role = 0;
                //xử lý
                update_user($username, $password, $hoten, $email, $diachi, $dienthoai, $hinh, $role, $id);
                $thongbao = "Cập nhật thành công";
            } else {
                $thongbao = "Cập nhật thất bại";
            }

            // header('location: index.php?pg=myaccount_confirm');
            // header('location: index.php?pg=my_account');
            require_once "view/my_account.php";
            break;
            // 8
        case 'bill':
            if (isset($_POST['bill']) && ($_POST['bill'])) {
                $hoten = $_POST['hoten'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $dienthoai = $_POST['dienthoai'];
                $nguoinhan_ten = $_POST['hoten_nguoinhan'];
                $nguoinhan_diachi = $_POST['diachi_nguoinhan'];
                $nguoinhan_sdt = $_POST['dienthoai_nguoinhan'];
                $pt_thanhtoan = $_POST['pttt'];
                //insert usernew
                $username = "random" . rand(1, 9999);
                $password = "123";
                $iduser = user_insert_id($username, $password, $hoten, $diachi, $email, $dienthoai);
                //tạo đơn hàng
                $ma_donhang = "HW" . $iduser . "-" . date("His-dmY");
                $total = get_tongdonhang();
                $ship = $_POST['ship'];
                if (isset($_SESSION['giatrivoucher'])) {
                    $voucher = $_SESSION['giatrivoucher'];
                } else {
                    $voucher = 0;
                }
                $tong_thanhtoan = ((int)$total - (int)$voucher) + (int)$ship;


                $idbill = bill_insert_id($ma_donhang, $iduser, $hoten, $email, $dienthoai, $diachi, $nguoinhan_ten, $nguoinhan_sdt, $nguoinhan_diachi, $total, $ship, $voucher, $tong_thanhtoan, $pt_thanhtoan);
                // insert giỏ hàng từ session vào table cart 
                foreach ($_SESSION['giohang'] as $sp) {
                    extract($sp);
                    cart_insert($idpro, $idbill, $name, $img, $price, $quantity, $thanhtien);

                    # code...
                }
                require_once "view/bill_confirm.php";
            } else {
                require_once "view/bill.php";
            }

            break;
            // 8
        case 'news':
            require_once "view/news.php";
            break;
        case 'contact':
            require_once "view/contact.php";
            break;
            // 5 
        case 'delcart':
            break;
            // 6
        case 'service':
            require_once "view/service.php";
            break;
            // 7
        case 'aboutus':
            require_once "view/aboutus.php";
            break;

        default:
            $dssp_hot = get_dssp_hot(4);
            $dssp_new = get_dssp_new(4);
            require_once "view/home.php";
            break;
    }
} else {
    $dssp_hot = get_dssp_hot(4);
    $dssp_new = get_dssp_new(4);
    require_once "view/home.php";
}

require_once "view/footer.php";
