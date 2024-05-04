// Cai đặt mặt định 
document.getElementById("showcart").style.display = "none";
// mảng 
var giohang = new Array();

function themvaogiohang(x) {
    var boxsp = x.parentElement.children;
    var hinh = boxsp[0].children[0].src;
    var gia = boxsp[1].children[0].innerText;
    var tensp = boxsp[2].innerText;
    var soluong = parseInt(boxsp[3].value);
    var sp = new Array(hinh, gia, tensp, soluong);

    // kiểm tra giỏ hàng
    var kt = 0;
    for (let i = 0; i < giohang.length; i++) {
        if (giohang[i][2] == tensp) {
            kt = 1;
            soluong += giohang[i][3];
            giohang[i][3] = soluong;
            break;
        }
    }

    if (kt == 0) {
        // thêm mới - add to cart 
        giohang.push(sp);
    }



    // đếm số lượng
    showcountsp();

    // lưu giỏ hàng lên sectionstogare 
    sessionStorage.setItem("giohang", JSON.stringify(giohang));
}






function showcountsp() {
    document.getElementById("countsp").innerHTML = giohang.length;
}



//show my cartttttttttt
function showmycart() {
    var ttgh = "";
    var tong = 0;
    for (let i = 0; i < giohang.length; i++) {
        // thành tiền
        var thanhtien = parseInt(giohang[i][3]) * parseInt(giohang[i][1]);
        tong += thanhtien;
        ttgh += '<tr>' +
                    '<td>' + (i + 1) + '</td>' +
                    '<td><img src="' + giohang[i][0] + '" alt></td>' +
                    // tên sp 
                    '<td>' + giohang[i][2] + '</td>' +
                    // đơn giá  
                    '<td>' + giohang[i][1] + '</td>' +

                    '<td>' + giohang[i][3] + '</td>' +
                    '<td>' +
                    '<div>' + thanhtien + '</div>' +
                    '</td>' +
                    '<td>' +
                    '<button  style="width: 90%;' +
                    'padding: 10px;' +
                    'font-weight: bold;' +
                    'border: none;' +
                    'background-color: #e8363c;' +
                    'color: white;" onclick="xoasp(this)">Xóa</button>' +
                    '</td>' +
                ' </tr > ';
    }

    ttgh += '<tr>' +
        '<th colspan="6">Total payment</th>' +
        '<th>' +
        '<div>' + tong + '$' + '</div>' +
        '</th>' +
        '</tr>';


    document.getElementById("mycart").innerHTML = ttgh;

}








// xáo sản phẩmmmmm
function xoasp(x) {
    // xóa tr
    var tr = x.parentElement.parentElement;
    var tensp = tr.children[2].innerText;
    tr.remove();

    // xóa sp trong mảng
    for (let i = 0; i < giohang.length; i++) {
        if (giohang[i][2] == tensp) {
            giohang.splice(i, 1);
        }
    }

    showmycart();
    showcountsp();
}
function xoatatca() {
    giohang = [];
    showmycart();
    showcountsp();

}









// cho thanh toánttttttttttttttttttttttttttttttttttttttttttt
function showggiohang_trangthanhtoan() {
    var gh = sessionStorage.getItem("giohang");
    var giohang = JSON.parse(gh);
    // coppy xuống 

    var ttgh = "";
    var tong = 0;
    for (let i = 0; i < giohang.length; i++) {
        // thành tiền
        var thanhtien = parseInt(giohang[i][3]) * parseInt(giohang[i][1]);
        tong += thanhtien;
        ttgh += '<tr>' +
            '<td>' + (i + 1) + '</td>' +
            '<td><img src="' + giohang[i][0] + '" alt></td>' +
            // tên sp 
            '<td>' + giohang[i][2] + '</td>' +
            // đơn giá  
            '<td>' + giohang[i][1] + '</td>' +

            '<td>' + giohang[i][3] + '</td>' +
            '<td>' +
            '<div>' + thanhtien + '</div>' +
            '</td>' +
            ' </tr > ';
    }

    ttgh += '<tr>' +
        '<th colspan="5">Total payment</th>' +
        '<th>' +
        '<div>' + tong + '$' + '</div>' +
        '</th>' +
        '</tr>';


    document.getElementById("mycart").innerHTML = ttgh;
}

function dongydathang() {
    var ttnh = document.getElementById("thongtinnhanhang").children;
    var hoten = ttnh[0].children[1].children[0].value;
    var diachi = ttnh[1].children[1].children[0].value;
    var dienthoai = ttnh[2].children[1].children[0].value;
    var email = ttnh[3].children[1].children[0].value;


    var nguoinhan = new Array(hoten, diachi, dienthoai, email);
    console.log(nguoinhan);


    sessionStorage.setItem("nguoinhan", JSON.stringify(nguoinhan));

    window.location.assign("Order.html");
}
































function showthongtinnguoinhan() {
    var nguoinhan = sessionStorage.getItem("nguoinhan");
    var thongtin = JSON.parse(nguoinhan);

    var tt = ' <tr>' +
        '<td width="20%">Full name</td>' +
        '<td>' + thongtin[0] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Address</td>' +
        '<td>' + thongtin[1] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Phone number</td>' +
        '<td>' + thongtin[2] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Email</td>' +
        '<td>' + thongtin[3] + '</td>' +
        '</tr>';

    document.getElementById("thongtinnhanhang").innerHTML = tt;

}