-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 11:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `highwaystore3`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL COMMENT 'id hóa đơn',
  `id_user` int(10) NOT NULL COMMENT 'mã KH',
  `id_product` int(9) NOT NULL COMMENT 'Id sản phẩm',
  `ma_donhang` varchar(20) NOT NULL COMMENT 'Mã hóa đơn',
  `nguoinhan_ten` varchar(50) DEFAULT NULL COMMENT 'Tên người nhận',
  `nguoinhan_diachi` varchar(100) DEFAULT NULL COMMENT 'địa chỉ nhận',
  `nguoinhan_sdt` int(10) DEFAULT NULL COMMENT 'SĐT nhận',
  `nguoidat_ten` varchar(50) NOT NULL,
  `nguoidat_diachi` varchar(200) NOT NULL,
  `nguoidat_email` varchar(50) NOT NULL,
  `nguoidat_sdt` int(10) NOT NULL DEFAULT 0 COMMENT 'SĐT người đặt',
  `pt_thanhtoan` tinyint(1) DEFAULT 0 COMMENT '0:POD 1:OP ',
  `total` int(10) NOT NULL COMMENT 'Tổng tiền',
  `voucher` varchar(10) DEFAULT NULL,
  `ship` int(5) NOT NULL DEFAULT 0 COMMENT 'tiền giao hàng',
  `tong_thanhtoan` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `id_user`, `id_product`, `ma_donhang`, `nguoinhan_ten`, `nguoinhan_diachi`, `nguoinhan_sdt`, `nguoidat_ten`, `nguoidat_diachi`, `nguoidat_email`, `nguoidat_sdt`, `pt_thanhtoan`, `total`, `voucher`, `ship`, `tong_thanhtoan`) VALUES
(17, 30, 0, 'HW30-061720-13102023', '', '', 0, 'Tình', 'Hẻm 2805, Phường 7, Quận 8', 'tinh@gmail.com', 9812342, 0, 390, '0', 100, 490),
(20, 33, 0, 'HW33-092808-13102023', '', '', 0, 'Kieu', 'TMT', 'toan8@gmail.com', 123, 0, 395, '0', 150, 545),
(28, 46, 0, 'HW46-072752-18102023', '', '', 0, 'Tuấn', 'Nguyễn Ảnh Thủ,Quận 12', 'tt@gmail.com', 7992144, 0, 695, '0', 100, 795),
(29, 47, 0, 'HW47-072806-18102023', '', '', 0, 'Tùng', 'Quang Trung, Gò Vấp, TP.HCM', '321eqwqw', 123, 0, 300, '0', 100, 400),
(30, 48, 0, 'HW48-072825-18102023', '', '', 0, 'eqw', 'Xã Bà, Điểm Hóc Môn, TP.HCM', 'toan@gmail.com', 78231241, 0, 695, '0', 100, 795),
(36, 55, 0, 'HW55-052823-20102023', '', '', 0, 'Thanh Tuấn', 'ấp cây xanh xã thạnh phú châu thành tiền giang', 't@gmail.com', 2147483647, 0, 395, '0', 100, 495),
(37, 56, 0, 'HW56-052925-20102023', '', '', 0, 'Nguyễn Thành Trung', 'Bình Thạnh', 'thanh55@gmail.com', 2147483647, 0, 420, '0', 150, 570),
(58, 77, 0, 'HW77-055713-20102023', '', '', 0, 'Toàn', 'Bình Đức Mỹ Tho', 'ti@gmail.com', 79963213, 0, 395, '0', 150, 545),
(59, 78, 0, 'HW78-055842-20102023', '', '', 0, 'Toàn', 'Mỹ THO TIền Giang', 't@gmail.com', 2147483647, 0, 395, '0', 100, 495),
(60, 79, 0, 'HW79-060756-20102023', '', '', 0, 'Toàn', 'Mỹ THO TIền Giang', 't@gmail.com', 2147483647, 0, 395, '0', 100, 495),
(63, 82, 0, 'HW82-061252-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(64, 83, 0, 'HW83-061658-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(65, 84, 0, 'HW84-061659-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(66, 85, 0, 'HW85-061700-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(67, 86, 0, 'HW86-061704-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(68, 87, 0, 'HW87-061705-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(69, 88, 0, 'HW88-061718-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(70, 89, 0, 'HW89-061753-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(71, 90, 0, 'HW90-061754-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(72, 91, 0, 'HW91-061754-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(73, 92, 0, 'HW92-061754-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(74, 93, 0, 'HW93-061800-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(75, 94, 0, 'HW94-061801-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(76, 95, 0, 'HW95-061811-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(77, 96, 0, 'HW96-061812-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(78, 97, 0, 'HW97-061812-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(79, 98, 0, 'HW98-061812-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(80, 99, 0, 'HW99-061819-20102023', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(81, 100, 0, 'HW100-061830-2010202', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(82, 101, 0, 'HW101-061843-2010202', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(83, 102, 0, 'HW102-061850-2010202', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(84, 103, 0, 'HW103-061900-2010202', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520),
(85, 104, 0, 'HW104-061909-2010202', '', '', 0, 'Thành', 'Quận 6', 'th@gmail.com', 799526522, 0, 420, '0', 100, 520);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `id_product` int(10) NOT NULL COMMENT 'Mã sản phẩm',
  `id_user` int(10) NOT NULL COMMENT 'Mã khác hàng',
  `noi_dung` text NOT NULL COMMENT 'Nội dung',
  `ngay_bl` varchar(25) NOT NULL COMMENT 'Ngày bình luận',
  `ten` varchar(50) DEFAULT NULL,
  `hinh` varchar(50) DEFAULT NULL COMMENT 'hình'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `id_product`, `id_user`, `noi_dung`, `ngay_bl`, `ten`, `hinh`) VALUES
(36, 13, 39, 'Xịn\r\n', '13:06:57 16/10/2023', 'test', 'avatar_user.png'),
(37, 13, 39, 'kaka\r\n', '13:07:23 16/10/2023', 'test', 'product_3.jpeg'),
(38, 13, 39, 'e', '13:16:31 16/10/2023', 'test', 'product_3.jpeg'),
(39, 13, 39, 'xịnnnnn', '13:16:48 16/10/2023', 'test', 'designer.webp'),
(40, 13, 38, 'hello', '13:21:50 16/10/2023', 'toan1', 'avatar_user.png'),
(41, 13, 38, 'quàooo', '15:09:04 16/10/2023', 'toan1', 'avatar_user.png'),
(43, 11, 38, 'Xịn', '11:48:53 18/10/2023', 'toan1', 'avatar_user.png'),
(44, 21, 38, 'Xịn', '08:19:32 20/10/2023', 'toan1', 'avatar_user.png'),
(45, 6, 105, 'Xấu kk', '16:52:39 24/04/2024', '', 'avatar_user.png');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(4) NOT NULL COMMENT 'Mã loại hàng',
  `ten_loai` varchar(50) NOT NULL COMMENT 'Tên loại hàng',
  `stt` int(2) NOT NULL DEFAULT 0 COMMENT 'Sắp xếp danh mục',
  `sethome` bit(1) NOT NULL DEFAULT b'0' COMMENT 'Danh mục xuất hiện trang chủ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten_loai`, `stt`, `sethome`) VALUES
(101, 'ÁO KHOÁC', 1, b'0'),
(102, 'ĐỒ NAM', 2, b'0'),
(103, 'ĐỒ NỮ', 3, b'0'),
(104, 'ĐỒ UNISEX', 4, b'0'),
(106, 'PHỤ KIỆN', 0, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(10) NOT NULL COMMENT 'Mã giỏ hàng',
  `id_product` int(10) NOT NULL COMMENT 'id SP',
  `id_bill` int(10) NOT NULL COMMENT 'MÃ Hóa Đơn',
  `ten` varchar(100) NOT NULL COMMENT 'Tên sp',
  `hinh` varchar(200) NOT NULL COMMENT 'Hình',
  `gia` int(10) NOT NULL COMMENT 'Giá',
  `soluong` int(3) NOT NULL COMMENT 'Số lượng',
  `thanhtien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id`, `id_product`, `id_bill`, `ten`, `hinh`, `gia`, `soluong`, `thanhtien`) VALUES
(1, 7, 17, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_7.jpg', 390, 1, 390),
(4, 3, 20, 'ÁO HOODIE ALL WHITE', '101_aohoodie_3.jpg', 395, 1, 395),
(7, 11, 28, 'ÁO POLO NAM - TOTODAY - RAGLAN SLEEVE VER.02', '102_donam_3.jpg', 300, 1, 300),
(8, 11, 29, 'ÁO POLO NAM - TOTODAY - RAGLAN SLEEVE VER.02', '102_donam_3.jpg', 300, 1, 300),
(9, 11, 30, 'ÁO POLO NAM - TOTODAY - RAGLAN SLEEVE VER.02', '102_donam_3.jpg', 300, 1, 300),
(10, 8, 30, 'ÁO HOODIE U1AKH11101SONHT', '101_aohoodie_8.jpg', 395, 1, 395),
(13, 3, 36, 'ÁO HOODIE ALL WHITE', '101_aohoodie_3.jpg', 395, 1, 395),
(14, 5, 37, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(26, 8, 58, 'ÁO HOODIE U1AKH11101SONHT', '101_aohoodie_8.jpg', 395, 1, 395),
(27, 8, 59, 'ÁO HOODIE U1AKH11101SONHT', '101_aohoodie_8.jpg', 395, 1, 395),
(28, 8, 60, 'ÁO HOODIE U1AKH11101SONHT', '101_aohoodie_8.jpg', 395, 1, 395),
(31, 5, 63, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(32, 5, 64, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(33, 5, 65, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(34, 5, 66, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(35, 5, 67, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(36, 5, 68, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(37, 5, 69, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(38, 5, 70, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(39, 5, 71, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(40, 5, 72, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(41, 5, 73, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(42, 5, 74, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(43, 5, 75, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(44, 5, 76, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(45, 5, 77, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(46, 5, 78, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(47, 5, 79, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(48, 5, 80, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(49, 5, 81, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(50, 5, 82, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(51, 5, 83, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(52, 5, 84, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420),
(53, 5, 85, 'ÁO KHOÁC U1AKH12101BONHT', '101_aohoodie_5.jpg', 420, 1, 420);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(9) NOT NULL COMMENT 'Mã hàng hóa',
  `id_catalog` int(4) NOT NULL COMMENT 'Mã loại hàng',
  `ma_sp` varchar(10) DEFAULT NULL COMMENT 'Mã sản phẩm',
  `ten_sp` varchar(50) NOT NULL COMMENT 'Tên hàng hóa',
  `gia` int(10) NOT NULL COMMENT 'Giá chính',
  `giam_gia` int(10) DEFAULT NULL COMMENT 'Giá giảm',
  `hinh` varchar(50) NOT NULL COMMENT 'Hình ảnh',
  `hinh1` varchar(50) DEFAULT NULL COMMENT 'Hình phụ 1',
  `hinh2` varchar(50) DEFAULT NULL COMMENT 'Hình phụ 2',
  `hinh3` varchar(50) DEFAULT NULL COMMENT 'Hình phụ 3',
  `ngay_nhap` date NOT NULL COMMENT 'Ngày nhập hàng',
  `mo_ta` text DEFAULT NULL COMMENT 'Mô tả chi tiết hàng hóa',
  `dac_biet` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1: hot 2:new',
  `so_luot_xem` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `id_catalog`, `ma_sp`, `ten_sp`, `gia`, `giam_gia`, `hinh`, `hinh1`, `hinh2`, `hinh3`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`) VALUES
(2, 101, 'NTT2', 'ÁO HOODIE ZIP UNISEX - TOTODAY - SIMPLE HOODIE ZIP', 440, 399, '101_aohoodie_2.jpg', '101_aohoodie_2_1.jpg', '101_aohoodie_2_2.jpg', '101_aohoodie_2_3.jpg', '2023-10-03', 'Chất liệu: vải chân cua.\r\nCông nghệ in cao.\r\nForm: oversize.\r\nMàu sắc: trắng, đen, hồng, beige, xanh mint, nâu, xanh biển.\r\n\r\nKhuynh đảo thời trang street-style với áo hoodie \"basic\" không thể thiếu trong tủ đồ của bạn. Thiết kế sở hữu những gam màu hiện đại, dễ dàng linh hoạt với mọi phong cách, kết hợp cùng form dáng oversize trứ danh, hứa hẹn sẽ là món đồ mang đến cho bạn nhiều layout xuất sắc mùa Thu Đông này.', 1, 0),
(3, 101, 'NTT3', 'ÁO HOODIE ALL WHITE', 395, NULL, '101_aohoodie_3.jpg', '101_aohoodie_3_1.jpg', '101_aohoodie_3_2.jpg', '101_aohoodie_3_3.jpg', '2023-10-03', 'Chất liệu: vải chân cua. \r\n\r\nForm: oversize. \r\n\r\nMàu sắc: đen, beige, xanh biển, hồng. \r\n\r\nÁo hoodie có form dáng oversize thoải mái cho mọi vóc dáng, giúp bạn che \"nhẹ\" đi mọi khuyết điểm body. Thiết kế đơn giản với bảng màu trẻ trung, hiện đại dễ dàng lên đồ với mọi items, mang lại gu thời trang cá tính cho các bạn trẻ đam mê phong cách freestyle.', 1, 0),
(4, 101, 'NTT04', 'ÁO HOODIE UNISEX - TOTODAY - COLOR BLOCK', 420, 400, '101_aohoodie_4.jpg', '101_aohoodie_4_1.jpg', '101_aohoodie_4_2.jpg', '101_aohoodie_4_3.jpg', '2023-10-03', 'Chất liệu: vải da cá . \r\n\r\nForm: oversize. \r\n\r\nMàu sắc: Được xem như món đồ cơ bản nhất của mọi tín đồ thời trang gen Z, một chiếc áo hoodie với chất vải dày dặn, thiết kế đơn giản nhưng không đơn điệu, màu sắc đa dạng từ cá tính đến tươi trẻ chắc chắn sẽ là trợ thủ đắc lực của bạn theo vô vàn phong cách khác nhau. ', 0, 0),
(5, 101, 'NTT5', 'ÁO KHOÁC U1AKH12101BONHT', 420, NULL, '101_aohoodie_5.jpg', '101_aohoodie_5_1.jpg', '101_aohoodie_5_2.jpg', '101_aohoodie_5_3.jpg', '2023-10-03', 'Chất liệu: vải chân cua.\r\nKiểu dáng: oversize.\r\nThêu con giống.\r\nMàu sắc: đen, xám, xanh, kem.\r\n\r\nKhuynh đảo thời trang street-style với áo hoodie \"basic\" không thể thiếu trong tủ đồ của bạn. Thiết kế sở hữu những gam màu hiện đại, dễ dàng linh hoạt với mọi phong cách, kết hợp cùng kiểu dáng oversize trứ danh, hứa hẹn sẽ là món đồ mang đến cho bạn nhiều layout xuất sắc mùa Thu Đông này.', 0, 0),
(6, 101, 'NTT6', 'ÁO HOODIE U1AKH02201BONTR', 400, 349, '101_aohoodie_6.jpg', '101_aohoodie_6_1.jpg', '101_aohoodie_6_2.jpg', '101_aohoodie_6_3.jpg', '2023-10-03', 'Chất liệu: vải chân cua.\r\nKiểu dáng: oversize.\r\nThêu con giống.\r\nMàu sắc: đen, xám, xanh, kem.\r\n\r\nKhuynh đảo thời trang street-style với áo hoodie \"basic\" không thể thiếu trong tủ đồ của bạn. Thiết kế sở hữu những gam màu hiện đại, dễ dàng linh hoạt với mọi phong cách, kết hợp cùng kiểu dáng oversize trứ danh, hứa hẹn sẽ là món đồ mang đến cho bạn nhiều layout xuất sắc mùa Thu Đông này.', 0, 0),
(7, 101, 'NTT7', 'ÁO KHOÁC U1AKH12101BONHT', 390, NULL, '101_aohoodie_7.jpg', '101_aohoodie_7_1.jpg', '101_aohoodie_7_2.jpg', '101_aohoodie_7_3.jpg', '2023-10-03', 'Chất liệu: vải chân cua.\r\nKiểu dáng: oversize.\r\nThêu con giống.\r\nMàu sắc: đen, xám, xanh, kem.\r\n\r\nKhuynh đảo thời trang street-style với áo hoodie \"basic\" không thể thiếu trong tủ đồ của bạn. Thiết kế sở hữu những gam màu hiện đại, dễ dàng linh hoạt với mọi phong cách, kết hợp cùng kiểu dáng oversize trứ danh, hứa hẹn sẽ là món đồ mang đến cho bạn nhiều layout xuất sắc mùa Thu Đông này.', 1, 0),
(8, 101, 'NTT8', 'ÁO HOODIE U1AKH11101SONHT', 395, NULL, '101_aohoodie_8.jpg', '101_aohoodie_8_1.jpg', '101_aohoodie_8_2.jpg', '101_aohoodie_8_3.jpg', '2023-10-03', 'Chất liệu: vải chân cua.\r\nKiểu dáng: oversize.\r\nThêu con giống.\r\nMàu sắc: đen, xám, xanh, kem.\r\n\r\nKhuynh đảo thời trang street-style với áo hoodie \"basic\" không thể thiếu trong tủ đồ của bạn. Thiết kế sở hữu những gam màu hiện đại, dễ dàng linh hoạt với mọi phong cách, kết hợp cùng kiểu dáng oversize trứ danh, hứa hẹn sẽ là món đồ mang đến cho bạn nhiều layout xuất sắc mùa Thu Đông này.', 0, 0),
(9, 102, 'NTT9', 'ÁO SƠ MI NAM - TOTODAY - 09302', 315, NULL, '102_donam_1.jpg', '102_donam_1_1.jpg', '102_donam_1_2.jpg', '102_donam_1_3.jpg', '2023-10-04', 'ÁO SƠ MI NAM - TOTODAY - 09302\r\n\r\nItem giúp FRIENDs trở nên lịch lãm hơn trong outfits hằng ngày nhưng vẫn giữ được độ năng động thì em này chắc chắn đảm bảo được các yếu tố đó. \r\n\r\nVới chất vải kaki pha chút cotton giúp chiếc áo có độ co giãn hơn, tạo được cảm giác thoải mái cả ngày dài từ đi học đến đi chơi.\r\n\r\n- Được sản xuất bởi thương hiệu thời trang Việt Nam Totoday.\r\n- Form Regular thời thượng, cổ viền cứng cáp.\r\n- Chất lượng kaki cotton thoáng mát, thấm hút mồ hôi tốt.\r\n- Đường may tỉ mỉ, hoàn thiện tốt.\r\n- Đổi trả trong 30 ngày - Bảo hành lên đến 90 ngày.\r\n\r\n- Mã: M1SMD09302\r\n- Chất liệu: kaki cotton\r\n- Size: \r\n+ M: 1m61 - 1m70 - 56kg - 65kg\r\n+ L: 1m71 - 1m80, 66kg - 75kg\r\n+ XL: trên 1m80, 76kg - 85kg\r\n- Màu sắc: Trắng - Đen - Xám\r\n- Xuất xứ: Việt Nam\r\n- Thương hiệu: TOTODAY\r\n\r\nLưu ý:\r\n- Hình ảnh sản phẩm được chụp thực tế bởi TOTODAY.\r\n- Tỉ lệ và màu sắc thực tế sẽ có sự chênh lệnh nhưng không quá lớn do bố cục và ánh sáng khi chụp.\r\n- TOTODAY có chính sách đổi trả & bảo hành để đảm bảo quyền lợi cho khách hàng. Vì thế khi nhận hàng nếu có vấn đề phát sinh hay chưa hài lòng xin đừng vội đánh giá hãy liên hệ ngay với chúng tớ để được hỗ trợ giải quyết một cách nhanh nhất.\r\n- Đừng quên thêm mã giảm giá hay miễn phí vận chuyển trước khi thanh toán nhé!', 2, 0),
(10, 102, 'NTT10', 'ÁO POLO NAM - TOTODAY - MULTICOLOR RIB COLLAR', 320, NULL, '102_donam_2.jpg', '102_donam_2_1.jpg', '102_donam_2_2.jpg', '102_donam_2_3.jpg', '2023-10-04', 'ÁO POLO NAM - TOTODAY - MULTICOLOR RIB COLLAR\r\n\r\nÁo polo nam là items không thể không có trong tủ đồ của FRIENDs. Nó luôn là món trang phục lý tưởng cho những ngày hè oi bức nhưng bên cạnh đó chúng ta cũng có thể sử dụng áo polo linh hoạt vào bất cứ mùa nào trong năm. Chính vì vậy, áo polo nam hội tụ đủ những yếu tố mà FRIENDs cần: lịch sự, chỉn chu nhưng vẫn trẻ trung.\r\n\r\n- Được sản xuất bởi thương hiệu thời trang Việt Nam Totoday.\r\n- Form Regular thời thượng, cổ viền cứng cáp.\r\n- Chất lượng kaki cotton thoáng mát, thấm hút mồ hôi tốt.\r\n- Đường may tỉ mỉ, hoàn thiện tốt.\r\n- Đổi trả trong 30 ngày - Bảo hành lên đến 90 ngày.\r\n\r\n- Mã: M1ATP09302\r\n- Chất liệu: CVC \r\n- Size: \r\n+ M: 1m61 - 1m70 - 56kg - 65kg\r\n+ L: 1m71 - 1m80, 66kg - 75kg\r\n+ XL: trên 1m80, 76kg - 85kg\r\n- Màu sắc: Xanh Dương - Xanh Lá - Vàng \r\n- Xuất xứ: Việt Nam\r\n- Thương hiệu: TOTODAY\r\n\r\nLưu ý:\r\n- Hình ảnh sản phẩm được chụp thực tế bởi TOTODAY.\r\n- Tỉ lệ và màu sắc thực tế sẽ có sự chênh lệnh nhưng không quá lớn do bố cục và ánh sáng khi chụp.\r\n- TOTODAY có chính sách đổi trả & bảo hành để đảm bảo quyền lợi cho khách hàng. Vì thế khi nhận hàng nếu có vấn đề phát sinh hay chưa hài lòng xin đừng vội đánh giá hãy liên hệ ngay với chúng tớ để được hỗ trợ giải quyết một cách nhanh nhất.\r\n- Đừng quên thêm mã giảm giá hay miễn phí vận chuyển trước khi thanh toán nhé!', 0, 0),
(11, 102, 'NTT11', 'ÁO POLO NAM - TOTODAY - RAGLAN SLEEVE VER.02', 300, NULL, '102_donam_3.jpg', '102_donam_3_1.jpg', '102_donam_3_2.jpg', '102_donam_3_3.jpg', '2023-10-04', 'ÁO POLO NAM - TOTODAY - RAGLAN SLEEVE VER.02\r\n\r\nĐược may từ chất vải Cotton thoáng mát, thấm hút mồ hôi tốt, chống mùi phù hợp mội hoàn cảnh từ đi học đến đi chơi. Đặc biệt. áo thiết kế phối màu phá cách giữa phần thân và tay áo mạng lại sự trẻ trung, cá tính.\r\n\r\n- Được sản xuất bởi thương hiệu thời trang Việt Nam Totoday.\r\n- Form Regular thời thượng, cổ viền cứng cáp.\r\n- Chất lượng kaki cotton thoáng mát, thấm hút mồ hôi tốt.\r\n- Đường may tỉ mỉ, hoàn thiện tốt.\r\n- Đổi trả trong 30 ngày - Bảo hành lên đến 90 ngày.\r\n\r\n- Mã: M1ATP09301\r\n- Chất liệu: CVC \r\n- Size: \r\n+ M: 1m61 - 1m70 - 56kg - 65kg\r\n+ L: 1m71 - 1m80, 66kg - 75kg\r\n+ XL: trên 1m80, 76kg - 85kg\r\n- Màu sắc: Xanh Dương - Xanh Lá - Vàng \r\n- Xuất xứ: Việt Nam\r\n- Thương hiệu: TOTODAY', 0, 0),
(12, 102, 'NTT12', 'QUẦN JOGGER THUN UNISEX - TOTODAY - 09301', 250, NULL, '102_donam_4.jpg', '102_donam_4_1.jpg', '102_donam_4_2.jpg', '102_donam_4_2.jpg', '2023-10-04', 'QUẦN JOGGER THUN UNISEX - TOTODAY - 09301\r\n<br>\r\nVới chất liệu chân cua hiện đại, tạo được sự thoáng mát và sự co giãn của chiếc quần. Cùng với các gam màu basic dễ dàng phối với các items đi cùng mà không kén chọn. \r\n<br>\r\n- Được sản xuất bởi thương hiệu thời trang Việt Nam Totoday.<br>\r\n- Form Straight thời thượng, cổ viền cứng cáp.<br>\r\n- Chất lượng kaki cotton thoáng mát, thấm hút mồ hôi tốt.<br>\r\n- Đường may tỉ mỉ, hoàn thiện tốt.\r\n- Đổi trả trong 30 ngày - Bảo hành lên đến 90 ngày.\r\n\r\n- Mã: U1QJT09301\r\n- Chất liệu: Cotton \r\n- Size: \r\n+ M: 1m61 - 1m70 - 56kg - 65kg\r\n+ L: 1m71 - 1m80, 66kg - 75kg\r\n+ XL: trên 1m80, 76kg - 85kg\r\n- Màu sắc: Xám - Đen\r\n- Xuất xứ: Việt Nam\r\n- Thương hiệu: TOTODAY\r\n\r\nLưu ý:\r\n- Hình ảnh sản phẩm được chụp thực tế bởi TOTODAY.\r\n- Tỉ lệ và màu sắc thực tế sẽ có sự chênh lệnh nhưng không quá lớn do bố cục và ánh sáng khi chụp.\r\n- TOTODAY có chính sách đổi trả & bảo hành để đảm bảo quyền lợi cho khách hàng. Vì thế khi nhận hàng nếu có vấn đề phát sinh hay chưa hài lòng xin đừng vội đánh giá hãy liên hệ ngay với chúng tớ để được hỗ trợ giải quyết một cách nhanh nhất.\r\n- Đừng quên thêm mã giảm giá hay miễn phí vận chuyển trước khi thanh toán nhé!', 2, 0),
(13, 102, 'NTT13', 'QUẦN JEAN NAM - STRAIGHT - TOTODAY - 09303', 400, 350, '102_donam_5.jpg', '102_donam_5_1.jpg', '102_donam_5_2.jpg', '102_donam_5_3.jpg', '2023-10-04', 'QUẦN JEAN NAM - STRAIGHT - TOTODAY - 09302\r\n\r\nMẫu Jeans với form dáng Straight lên kệ chiều lòng mọi hình thể khó tính. TOTODAY vừa ra mắt thiết kế Jeans Wash 2 gam màu bạc - đen tạo sự khác biệt giữa những mẫu Jeans thông thường. Đây chắc chắn sẽ là items hot hit trong sắp tới dành cho FRIENDs\r\n\r\n- Được sản xuất bởi thương hiệu thời trang Việt Nam Totoday.\r\n- Form Straight thời thượng, cổ viền cứng cáp.\r\n- Chất lượng kaki cotton thoáng mát, thấm hút mồ hôi tốt.\r\n- Đường may tỉ mỉ, hoàn thiện tốt.\r\n- Đổi trả trong 30 ngày - Bảo hành lên đến 90 ngày.\r\n\r\n- Mã: M1QJN09303\r\n- Chất liệu: Jean\r\n- Size: \r\n+ M: 1m61 - 1m70 - 56kg - 65kg\r\n+ L: 1m71 - 1m80, 66kg - 75kg\r\n+ XL: trên 1m80, 76kg - 85kg\r\n- Màu sắc: Xanh Nhạt - Xanh Đậm\r\n- Xuất xứ: Việt Nam\r\n- Thương hiệu: HIGHWAY', 0, 0),
(19, 103, NULL, 'ÁO THUN NỮ - TOTODAY - LITTLE GIRL', 255, 200, '103_donu_1_1.jpeg', '103_donu_1_2.jpeg', '103_donu_1_3.jpeg', '103_donu_1_4.jpeg', '2023-10-20', 'ÁO THUN NỮ - TOTODAY - LITTLE GIRL\r\n\r\nNew Arrival từ nhà TOTODAY với kỹ thuật in decal không thể bỏ qua. Item giúp bạn có thể kết hợp với mọi loại phong cách, tự tin thể hiện cá tính của mình với thiết kế form dáng croptop tinh tế giúp tôn lên dáng của Friends.\r\n\r\n.\r\n- Được sản xuất bởi thương hiệu thời trang Việt Nam Totoday.\r\n- Form Croptop thời thượng, cổ viền cứng cáp.\r\n- Chất lượng cotton thoáng mát, thấm hút mồ hôi tốt.\r\n- Đường may tỉ mỉ, hoàn thiện tốt.\r\n- Đổi trả trong 30 ngày - Bảo hành lên đến 90 ngày.\r\n\r\n- Mã: W2ATB08304\r\n- Chất liệu: Cotton \r\n- Size: freesize \r\n- Màu sắc: Đen - Be - Trắng\r\n- Xuất xứ: Việt Nam\r\n- Thương hiệu: TOTODAY\r\n\r\nLưu ý:\r\n- Hình ảnh sản phẩm được chụp thực tế bởi TOTODAY.\r\n- Tỉ lệ và màu sắc thực tế sẽ có sự chênh lệnh nhưng không quá lớn do bố cục và ánh sáng khi chụp.\r\n- TOTODAY có chính sách đổi trả & bảo hành để đảm bảo quyền lợi cho khách hàng. Vì thế khi nhận hàng nếu có vấn đề phát sinh hay chưa hài lòng xin đừng vội đánh giá hãy liên hệ ngay với chúng tớ để được hỗ trợ giải quyết một cách nhanh nhất.\r\n- Đừng quên thêm mã giảm giá hay miễn phí vận chuyển trước khi thanh toán nhé!\"\r\n\r\nCÓ THỂ BẠN THÍCH', 1, 20),
(20, 103, NULL, 'ÁO THUN NỮ - TOTODAY - CROWNS', 150, 99, '103_donu_2.jpeg', '103_donu_2_1.jpeg', '103_donu_2_2.jpeg', '103_donu_2_3.jpeg', '2023-10-20', 'ÁO THUN NỮ - TOTODAY - CROWNS <br>\r\n\r\nCập nhật xu hướng mới nhất của FRIENDs GIRL với form áo croptop giúp tôn dáng và tạo được điểm nhấn cho outfits của bạn trở nên đặc biệt hơn.<br> <br>\r\n\r\n- Được sản xuất bởi thương hiệu thời trang Việt Nam Totoday. <br>\r\n- Form Croptop thời thượng, cổ viền cứng cáp. <br>\r\n- Chất lượng cotton thoáng mát, thấm hút mồ hôi tốt. <br>\r\n- Đường may tỉ mỉ, hoàn thiện tốt.\r\n- Đổi trả trong 30 ngày - Bảo hành lên đến 90 ngày. <br> <br>\r\n\r\n- Mã: W2ATB08303<br>\r\n- Chất liệu: Cotton <br>\r\n- Size: freesize <br>\r\n- Màu sắc: Đen - Be - Trắng<br>\r\n- Xuất xứ: Việt Nam<br>\r\n- Thương hiệu: TOTODAY<br><br>\r\n\r\nLưu ý:<br>\r\n- Hình ảnh sản phẩm được chụp thực tế bởi TOTODAY.<br>\r\n- Tỉ lệ và màu sắc thực tế sẽ có sự chênh lệnh nhưng không quá lớn do bố cục và ánh sáng khi chụp.<br>\r\n- TOTODAY có chính sách đổi trả & bảo hành để đảm bảo quyền lợi cho khách hàng. Vì thế khi nhận hàng nếu có vấn đề phát sinh hay chưa hài lòng xin đừng vội đánh giá hãy liên hệ ngay với chúng tớ để được hỗ trợ giải quyết một cách nhanh nhất.<br>\r\n- Đừng quên thêm mã giảm giá hay miễn phí vận chuyển trước khi thanh toán nhé!\"', 2, 50),
(21, 103, NULL, 'ÁO LEN NỮ - TOTODAY - VIBRANT FLOWER', 200, 150, '103_donu_3.jpeg', '103_donu_3_1.jpeg', '103_donu_3_2.jpeg', '103_donu_3_3.jpeg', '2023-10-20', 'ÁO LEN NỮ - TOTODAY - VIBRANT FLOWER <br>\r\n\r\nMuốn mặc áo khoác len nhưng sợ nóng thì đây chính là item có thể giải quyết được điều này cho FRIENDs. Với chất vải len cùng kiểu dáng sát nách thời thượng sẽ giúp FRIENDs nổi bật và thật ấn tượng giữa đám đông mà vẫn giữ được sự thoải mái khi mặc. <br> <br>\r\n\r\n- Được sản xuất bởi thương hiệu thời trang Việt Nam Totoday. <br>\r\n- Form straight thời thượng, cổ viền cứng cáp. <br>\r\n- Chất lượng cotton thoáng mát, thấm hút mồ hôi tốt. <br>\r\n- Đường may tỉ mỉ, hoàn thiện tốt.\r\n- Đổi trả trong 30 ngày - Bảo hành lên đến 90 ngày. <br> <br>\r\n\r\n- Mã: W2ALB08301 <br>\r\n- Chất liệu: Len <br>\r\n- Size: freesize  <br>\r\n- Màu sắc: Hồng - Trắng - Be <br>\r\n- Xuất xứ: Việt Nam  <br>\r\n- Thương hiệu: TOTODAY', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL COMMENT 'Mã khách hàng',
  `username` varchar(50) NOT NULL COMMENT 'Tên ĐN',
  `password` varchar(50) NOT NULL COMMENT 'Mật khẩu',
  `hoten` varchar(50) DEFAULT NULL COMMENT 'Họ và tên',
  `hinh` varchar(50) DEFAULT NULL COMMENT 'Tên hình ảnh',
  `email` varchar(50) NOT NULL COMMENT 'Đia chỉ Email',
  `role` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0:user 1:admin 2:block',
  `diachi` varchar(100) DEFAULT NULL COMMENT 'Địa chỉ',
  `dienthoai` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hoten`, `hinh`, `email`, `role`, `diachi`, `dienthoai`) VALUES
(30, 'random4447', '123', 'eqw', NULL, 'qwe', 0, 'qwe', 123),
(31, 'random6376', '123', 'Nguyễn Thanh Toàn', NULL, 'toan@gmail.com', 0, '35/8 Hưng Lân', 1235123),
(32, 'random142', '123', 'Nguyễn Thanh Toàn', NULL, 'toan@gmail.com', 0, '35/8 Hưng Lân', 1235123),
(33, 'random6027', '123', 'Kieu', NULL, 'toan70868@gmail.com', 0, 'TMT', 123),
(37, 'random6503', '123', '', NULL, '', 0, '', 0),
(38, 'toan1', '123', 'Toan1', '', 'toan22@gmail.com', 0, 'ấp cây xanh xã thạnh phú châu thành tiền giang', 3123),
(39, 'test', '123', 'TEst', 'designer.webp', 'toan70868@gmail.com', 0, '', 0),
(40, 'random4753', '123', 'tOÀN', NULL, 'tasasd@gmail.com', 0, 'HÓC MÔN', 9777712),
(41, 'random5467', '123', 'tOÀN', NULL, 'tasasd@gmail.com', 0, 'HÓC MÔN', 9777712),
(42, 'random1423', '123', '', NULL, '', 0, '', 0),
(43, 'random541', '123', '', NULL, '', 0, '', 0),
(44, 'random8146', '123', '', NULL, '', 0, '', 0),
(45, 'random9135', '123', 'das', NULL, 'asd', 0, 'dasd', 0),
(46, 'random8492', '123', 'eqwew', NULL, 'qew', 0, 'qweqw', 123),
(47, 'random6971', '123', '3123eqweq', NULL, '321eqwqw', 0, 'weqweqw', 123),
(48, 'random8755', '123', 'eqw', NULL, 'eqqw', 3, 'eqw', 123),
(51, 'toan72004', '123', 'Nguyễn Thanh Toàn', NULL, 'toan@gmail.com', 1, NULL, 79231231),
(52, 'random5028', '123', 'Thanh Tuấn', NULL, 'td@gmail.com', 0, 'Bình Chánh', 2147483647),
(53, 'random3933', '123', 'Thanh Tuấn', NULL, 'td@gmail.com', 0, 'Bình Chánh', 2147483647),
(54, 'random4222', '123', 'Thanh Tuấn', NULL, 'tn@gmail.com', 0, 'Bình Chánh, TP.HCM', 2147483647),
(55, 'random1804', '123', 'Thanh Tuấn', NULL, 't@gmail.com', 0, 'ấp cây xanh xã thạnh phú châu thành tiền giang', 2147483647),
(56, 'random3166', '123', 'Nguyễn Thành Trung', NULL, 'thanh55@gmail.com', 0, 'Bình Thạnh', 2147483647),
(57, 'random3743', '123', '', NULL, '', 0, '', 0),
(58, 'random4202', '123', 'e', NULL, 'eqwe', 0, 'wqeqw', 0),
(59, 'random4476', '123', 'e', NULL, 'eqwe', 0, 'wqeqw', 0),
(60, 'random867', '123', 'e', NULL, 'eqwe', 0, 'wqeqw', 0),
(61, 'random6702', '123', 'e', NULL, 'eqwe', 0, 'wqeqw', 12312),
(62, 'random6549', '123', 'tttttt', NULL, 'tttttt', 0, 'ttttttt', 123),
(63, 'random2159', '123', 'aaa', NULL, 'aa', 0, 'aaa', 444412),
(64, 'random6134', '123', 'ccc', NULL, 'ccc', 0, 'ccc', 55555),
(65, 'random4551', '123', 'cc', NULL, 'cccc', 0, 'ccc', 523),
(66, 'random5338', '123', 'kkkk', NULL, 'kkk', 0, 'kkkk', 6543),
(67, 'random404', '123', 'loi', NULL, 'loi', 0, 'loi', 4342342),
(68, 'random9020', '123', 'lllll', NULL, 'lllll', 0, 'lllll', 9999),
(69, 'random3900', '123', 'lỗi nè', NULL, 'lỗi nè', 0, 'lỗi nè', 879),
(70, 'random2224', '123', 'hhhh', NULL, 'hhh', 0, 'hhh', 123),
(71, 'random5085', '123', 'lỗi', NULL, 'lỗi', 0, 'lỗi', 66666),
(72, 'random8222', '123', 'klll', NULL, 'klll', 0, 'klll', 7996321),
(73, 'random8210', '123', 'fix', NULL, 'fix', 0, 'fix', 9999),
(74, 'random7069', '123', 'lỗi', NULL, 'lỗi', 0, 'lỗi', 666),
(75, 'random4535', '123', 'lỗi', NULL, 'lỗi', 0, 'lỗi', 666),
(76, 'random3785', '123', 'fix', NULL, 'fix', 0, 'fix', 8888),
(77, 'random374', '123', 'Toàn', NULL, 'ti@gmail.com', 0, 'Bình Đức Mỹ Tho', 79963213),
(78, 'random2929', '123', 'Toàn', NULL, 't@gmail.com', 0, 'Mỹ THO TIền Giang', 2147483647),
(79, 'random4594', '123', 'Toàn', NULL, 't@gmail.com', 0, 'Mỹ THO TIền Giang', 2147483647),
(80, 'random6999', '123', 'Tì', NULL, 'toan@gmail.com', 0, 'Campuchia', 99991223),
(81, 'random1359', '123', 'Leo', NULL, 'to@gmail.com', 0, 'Quận 1', 779321312),
(82, 'random7254', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(83, 'random2147', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(84, 'random337', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(85, 'random9288', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(86, 'random9934', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(87, 'random1025', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(88, 'random6843', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(89, 'random8923', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(90, 'random7032', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(91, 'random9412', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(92, 'random4204', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(93, 'random5456', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(94, 'random1244', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(95, 'random6861', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(96, 'random5326', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(97, 'random2761', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(98, 'random589', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(99, 'random1962', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(100, 'random6532', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(101, 'random4386', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(102, 'random8521', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(103, 'random8175', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(104, 'random419', '123', 'Thành', NULL, 'th@gmail.com', 0, 'Quận 6', 799526522),
(105, '', '', NULL, 'avatar_user.png', '', 0, NULL, NULL),
(106, '', '', NULL, 'avatar_user.png', '', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bill_user` (`id_user`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_binhluan_user` (`id_user`),
  ADD KEY `fk_binhluan_sanpham` (`id_product`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_giohang_bill` (`id_bill`),
  ADD KEY `fk_giohang_sanpham` (`id_product`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`id_catalog`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id hóa đơn', AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng', AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã giỏ hàng', AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT COMMENT 'Mã hàng hóa', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'Mã khách hàng', AUTO_INCREMENT=107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bill_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_binhluan_sanpham` FOREIGN KEY (`id_product`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `fk_binhluan_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_giohang_bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `fk_giohang_sanpham` FOREIGN KEY (`id_product`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`id_catalog`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
