<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="./view/layout/asset/css/DetailProducts.css">
<!-- CSS  -->
<?php
session_start();
require_once "../dao/pdo.php";
require_once "../dao/binhluan.php";
require_once "../dao/user.php";


if (isset($_GET['idpro'])) {
    $idpro = $_GET['idpro'];
}

if (isset($_POST['guibinhluan'])) {
    $idpro = $_POST['idpro'];
    $noidung = $_POST['noidung'];
    $ngaybl = date('H:i:s d/m/Y');
    $iduser = $_SESSION['s_user']['id'];
    $username = $_SESSION['s_user']['username'];
    $hinh = $_SESSION['s_user']['hinh'];


    binhluan_insert($iduser, $username, $idpro, $noidung, $ngaybl, $hinh);
}
$dsbl = binhluan_select_byidproduct($idpro);
$html_bl = '';
foreach ($dsbl as $item) {
    extract($item);
    $html_bl .= '
            <div class="bg-white p-2">
            <div class="d-flex flex-row user-info">
            <div class="hinhla" style="width: 4%; margin-right: 5px;">
                <img style="object-fit: cover; width: 100%;" class="rounded-circle" src="../view/layout/img/' . $hinh . '" width="40">
            </div>
                <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">' . $ten . '</span><span class="date text-black-50">Chia sẻ công khai - ' . $ngay_bl . '</span>
                </div>
            </div>
            <div class="mt-2">
                <p class="comment-text">' . $noi_dung . '.</p>
            </div>
        </div>
    ';
}
?>





<div class="d-flex  w-100 row">
    <div class="col-md-12">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="d-flex flex-column comment-section">
            <!-- content__comment  -->
            <?= $html_bl ?>
            <!-- <div class="bg-white p-2">
                    <div class="d-flex flex-row user-info">
                        <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">Marry Andrews</span><span class="date text-black-50">Shared publicly - Jan 2020</span>
                        </div>
                    </div>
                    <div class="mt-2">
                        <p class="comment-text">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                    </div>
                </div> -->
            <!-- enddddddddd  -->
            <?php
            if (isset($_SESSION["s_user"]) && (count($_SESSION["s_user"]) > 0)) {
                extract($_SESSION['s_user']);
                $userinfor = get_user($id);
                $_SESSION['s_user'] = $userinfor;
                extract($userinfor);
            ?>



                <div class="bg-light p-2">
                    <div class="d-flex flex-row align-items-start">

                        <div class="hinhla" style="width: 4.5%; margin-right: 5px;">
                            <img style="object-fit: contain; width: 100%; " class="rounded-circle" src="../view/layout/img/<?= $hinh ?>">

                        </div>
                        <input type="hidden" name="idpro" value="<?= $idpro ?>">
                        <textarea name="noidung" class="form-control ml-1 shadow-none textarea"></textarea>
                    </div>
                    <div class="ms-5 mt-3 text-right">
                        <input type="submit" name="guibinhluan" class="btn btn-success btn-sm shadow-none" value="Bình luận">
                    </div>
                </div>
        </form>
    </div>
</div>

<!-- đóng dấu  -->
<?php
            }
?>
<!-- đóng dấu  -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./layout/asset/css/js/DetailProduct.js"></script>