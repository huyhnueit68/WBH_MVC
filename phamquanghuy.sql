-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 16, 2021 lúc 03:07 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phamquanghuy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgd`
--

CREATE TABLE `chitietgd` (
  `magd` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietgd`
--

INSERT INTO `chitietgd` (`magd`, `masp`, `soluong`) VALUES
(18, 5, 1),
(19, 5, 1),
(20, 5, 1),
(20, 9, 1),
(20, 10, 1),
(21, 39, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `madm` int(11) NOT NULL,
  `tendm` varchar(255) NOT NULL,
  `xuatsu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`madm`, `tendm`, `xuatsu`) VALUES
(1, 'Rolex', 'Thụy Sỹ'),
(2, 'Cartier', 'Pháp'),
(3, 'Omega', 'Thụy Sỹ'),
(4, 'Patek Philippe', 'Thụy Sỹ'),
(5, 'Piaget', 'Thụy Sỹ'),
(6, 'Montblanc', 'Đức'),
(7, 'Apple', 'Mỹ'),
(8, 'Samsung', 'Hàn Quốc'),
(9, 'Xiaomi', 'Trung Quốc'),
(10, 'Sport', 'Nhiều quốc gia'),
(11, 'Couple', 'Nhiều quốc gia'),
(13, 'huy', 'huy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaodich`
--

CREATE TABLE `giaodich` (
  `magd` int(11) NOT NULL,
  `tinhtrang` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_dst` varchar(20) NOT NULL,
  `user_addr` text NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `tongtien` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `giaodich`
--

INSERT INTO `giaodich` (`magd`, `tinhtrang`, `user_id`, `user_name`, `user_dst`, `user_addr`, `user_phone`, `tongtien`, `date`) VALUES
(18, 2, 2, 'KKKK', 'Bạc Liêu', 'OOOOOOOOO', '5555', '1500000', '2021-04-04 17:00:00'),
(19, 0, 2, 'Huy Pham Quang', 'Tp.Hà Nội', '217 Mai Dịch, Cầu Giấy', '0352479890', '1500000', '2021-12-13 17:00:00'),
(20, 2, 3, 'huy pham 123', 'Tp.Hà Nội', 'dasdasdf', '4554', '3140000', '2021-04-05 17:00:00'),
(21, 0, 2, 'huy', 'An Giang', 'HUY', '0123456', '1500000', '2021-04-09 11:28:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `user_id` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` varchar(20) NOT NULL,
  `baohanh` tinyint(2) NOT NULL,
  `trongluong` int(4) NOT NULL,
  `chatlieu` varchar(100) NOT NULL,
  `chongnuoc` tinyint(1) NOT NULL,
  `nangluong` varchar(100) NOT NULL,
  `loaibh` varchar(100) NOT NULL,
  `kichthuoc` varchar(100) NOT NULL,
  `mau` varchar(100) NOT NULL,
  `danhcho` varchar(20) NOT NULL,
  `phukien` varchar(255) NOT NULL,
  `khuyenmai` varchar(100) NOT NULL,
  `tinhtrang` varchar(100) NOT NULL,
  `madm` int(11) NOT NULL,
  `anhchinh` varchar(255) NOT NULL,
  `luotmua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `ngay_nhap` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `baohanh`, `trongluong`, `chatlieu`, `chongnuoc`, `nangluong`, `loaibh`, `kichthuoc`, `mau`, `danhcho`, `phukien`, `khuyenmai`, `tinhtrang`, `madm`, `anhchinh`, `luotmua`, `luotxem`, `ngay_nhap`) VALUES
(1, 'Đồng hồ Rolex Datejust 179384-0002', '1 280 000', 24, 200, 'Inox, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Bạc', 'Nam', 'Không', '', 'new', 1, 'images/rolex/Rolex-Datejust-179384-0002.png', 119, 2100, '2017-10-30 04:14:16'),
(2, 'Đồng hồ Rolex Datejust 179174-0031', '1 580 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Bạc', 'Nam', 'Không', '', 'new', 1, 'images/rolex/Rolex-Datejust-179174-0031.png', 2, 133, '2017-10-30 04:14:16'),
(3, 'Đồng hồ ROLEX DAYJUST 126300', '2 280 000', 36, 150, 'bạc, kính cường lực g4', 1, 'pin, điện', 'Tại nhà máy', '21 x 2 x 0.2', 'Bạc', 'Nam', '1 dây sạc', '', 'new', 1, 'images/rolex/ROLEX-DAYJUST-126300.png', 321, 781, '2017-10-31 10:26:26'),
(4, 'Đồng hồ Rolex Datejust 179174-0094', '980 000', 24, 210, 'Inox cao cấp, kính cường lực', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Bạc', 'Nam', 'Không', '', 'new', 1, 'images/rolex/Rolex-Datejust-179174-0094.png', 1230, 3101, '0000-00-00 00:00:00'),
(5, 'Đồng hồ Piaget 444', '450 000', 12, 300, 'Nhôm, kính', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Vàng kim', 'Nam, nữ', 'Không', '', 'new', 5, 'images/piaget/piaget-444.png', 1231, 4321, '0000-00-00 00:00:00'),
(6, 'Đồng hồ Patek Philippe 778', '1 580 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam và Nữ', 'Không', '', 'new', 4, 'images/patek-philippe/Patek-Philippe-778.png', 21, 134, '0000-00-00 00:00:00'),
(7, 'Đồng hồ Omega 102', '4 280 000', 36, 150, 'Đồng, kính cường lực g4', 1, 'pin', 'Tại nhà máy', '21 x 2 x 0.2', 'Đồng', 'Nam', 'Không', '', 'new', 3, 'images/omega/omega-102.png', 123, 2432, '2017-11-14 00:00:00'),
(8, 'Đồng hồ montblanc e112', '380000', 6, 213, 'da', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam và Nữ', 'Không', '5', 'new', 6, 'images/montblanc/montblanc-e112.png', 1232, 2314, '2017-11-17 00:00:00'),
(9, 'Đồng hồ Cartier 503', '410 000', 6, 213, 'da', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam và Nữ', 'Không', '5', 'new', 2, 'images/cartier/Cartier-503.png', 1231, 6344, '2017-11-10 11:33:00'),
(10, 'Đồng hồ Omega 307', '1 280 000', 12, 200, 'da, kính cao cấp', 1, 'Pin', 'Tại nơi sản xuất', '20 x 2 x 0.2', 'Xanh đen', 'Nam và Nữ', 'Không', '', 'Còn hàng', 3, 'images/omega/Omega 307.png', 1231, 1290, '2017-11-06 16:54:01'),
(11, 'Đồng hồ Omega CO', '2 280 000', 12, 200, 'da, kính cao cấp', 1, 'Pin', 'Tại nơi sản xuất', '20 x 2 x 0.2', 'Xanh đen', 'Nam và Nữ', 'Không', '', 'Còn hàng', 3, 'images/omega/omega CO.png', 123, 2290, '2017-11-06 16:54:01'),
(12, 'Đồng hồ Omega Xial', '2910000', 24, 100, 'Bạc, kính cường lực ', 1, 'Pin ', 'Tại nơi sản xuất ', '20 x 2 x 0.2 ', 'Bạc ', 'Nam ', 'Không ', '', 'Còn hàng ', 3, 'images/omega/omega Xial.png ', 335, 2561, '0000-00-00 00:00:00'),
(13, 'Đồng hồ Cartier 604', '1 280 000', 24, 200, 'Inox, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '10', 'new', 2, 'images/cartier/cartier 604.png', 119, 2100, '2017-11-06 04:14:16'),
(14, 'Đồng hồ Cartier 705', '1 580 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '10', 'new', 2, 'images/cartier/cartier 705.png', 2, 133, '2017-10-30 04:14:16'),
(15, 'Đồng hồ Cartier 806', '2 280 000', 36, 150, 'bạc, kính cường lực g4', 1, 'pin, điện', 'Tại nhà máy', '21 x 2 x 0.2', 'Nâu', 'Nam', '1 dây sạc', '20', 'new', 2, 'images/cartier/cartier 806.png', 321, 781, '2017-11-06 10:26:26'),
(16, 'Đồng hồ Cartier 907', '980 000', 24, 210, 'Inox cao cấp, kính cường lực', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Nâu', 'Nam', 'Không', '10', 'new', 2, 'images/cartier/cartier 907.png', 1230, 3101, '2017-11-06 05:16:15'),
(17, 'Đồng hồ Montblanc 1', '1 280 000', 24, 200, 'Inox, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '10', 'new', 6, 'images/montblanc/montblanc 1.png', 119, 2100, '2017-11-06 04:14:16'),
(18, 'Đồng hồ Montblanc 2', '1 580 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '10', 'new', 6, 'images/montblanc/montblanc 2.png', 2, 133, '2017-10-30 04:14:16'),
(19, 'Đồng hồ Montblanc 3', '2 280 000', 36, 150, 'bạc, kính cường lực g4', 1, 'pin, điện', 'Tại nhà máy', '21 x 2 x 0.2', 'Đen', 'Nam', '1 dây sạc', '20', 'new', 6, 'images/montblanc/montblanc 3.png', 321, 781, '2017-11-06 10:26:26'),
(20, 'Đồng hồ Montblanc 4', '980 000', 24, 210, 'Inox cao cấp, kính cường lực', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '', 'new', 6, 'images/montblanc/montblanc 4.png', 1230, 3101, '2017-11-06 05:16:15'),
(21, 'Đồng hồ Piaget Z1', '1 280 000', 24, 200, 'Inox, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '10', 'new', 5, 'images/piaget/piaget z1.png', 119, 2100, '2017-11-06 04:14:16'),
(22, 'Đồng hồ Piaget Z2', '1 580 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Nâu', 'Nam', 'Không', '10', 'new', 5, 'images/piaget/piaget z2.png', 2, 133, '2017-10-30 04:14:16'),
(23, 'Đồng hồ Piaget Z3', '2 280 000', 36, 150, 'bạc, kính cường lực g4', 1, 'pin, điện', 'Tại nhà máy', '21 x 2 x 0.2', 'Bạc, xanh dương', 'Nam', '1 dây sạc', '20', 'new', 5, 'images/piaget/piaget z3.png', 321, 781, '2017-11-06 10:26:26'),
(24, 'Đồng hồ Piaget Z4', '980 000', 24, 210, 'Inox cao cấp, kính cường lực', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '10', 'new', 5, 'images/piaget/piaget z4.png', 1230, 3101, '2017-11-06 05:16:15'),
(26, 'Đồng hồ Apple Watch S5 44mm', '10 392 000', 24, 200, 'Inox, kính cường lực', 1, 'pin', 'Tại cửa hàng', '22 x 2 x 0.2', 'Đen', 'Nam và Nữ', 'Không', '10', 'new', 7, 'images/apple/apple-watch-s5-44mm-vien-nhom-day-cao-su-10-600x600.png', 119, 2100, '2021-03-23 04:14:16'),
(27, 'Đồng hồ Apple Watch S6 40mm viền nhôm', '10 580 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đỏ', 'Nam và Nữ', 'Không', '10', 'new', 7, 'images/apple/apple-watch-s6-40mm-vien-nhom-day-cao-su-red-ava-600x600.png', 2, 133, '2021-03-23 04:14:16'),
(28, 'Đồng hồ Apple Watch SE 40mm viền nhôm dây cao su hồng', '8 280 000', 36, 150, 'bạc, kính cường lực g4', 1, 'pin, điện', 'Tại nhà máy', '21 x 2 x 0.2', 'Hồng', 'Nữ', '1 dây sạc', '20', 'new', 7, 'images/apple/1-600x600.png', 321, 781, '2021-03-23 04:14:16'),
(29, 'Đồng hồ Apple Watch SE 40mm viền nhôm dây cao su đen', '8 980 000', 24, 210, 'Inox cao cấp, kính cường lực', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '10', 'new', 7, 'images/apple/apple-watch-se-40mm-vien-nhom-day-cao-su12-600x600.png', 1230, 3101, '2021-03-23 04:14:16'),
(30, 'Đồng hồ Apple Watch SE LTE 40mm viền nhôm dây cao su đen', '10 450 000', 12, 300, 'Nhôm, kính', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam, nữ', 'Không', '10', 'new', 7, 'images/apple/ava-600x600.png', 1231, 4321, '0000-00-00 00:00:00'),
(31, 'Đồng hồ Apple Watch S6 LTE 40mm viền thép', '17 580 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam và Nữ', 'Không', '15', 'new', 7, 'images/apple/1-600x600 (1).png', 21, 134, '2021-03-23 04:14:16'),
(32, 'Đồng hồ Apple Watch S6 LTE 44mm viền nhôm dây cao su', '14 280 000', 36, 150, 'cao su, kính cường lực g4', 1, 'pin', 'Tại nhà máy', '21 x 2 x 0.2', 'Xanh Dương', 'Nam', 'Không', '20', 'new', 7, 'images/apple/2-600x600.png', 123, 2432, '2021-03-23 04:14:16'),
(33, 'Đồng hồ Apple Watch S6 44mm viền nhôm dây cao su', '11 380 000', 6, 213, 'cao su', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam và Nữ', 'Không', '5', 'new', 7, 'images/apple/s6-44mm-vien-nhom-day-cao-su-den-thumb-600x600.png', 1232, 2314, '2021-03-23 04:14:16'),
(34, 'Đồng hồ Apple Watch S5 LTE 44mm viền nhôm dây cao su hồng', '10 410 000', 6, 213, 'cao su', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Hồng', 'Nữ', 'Không', '5', 'new', 7, 'images/apple/apple-watch-s5-lte-104520-104549-600x600.png', 1231, 6344, '2021-03-23 04:14:16'),
(35, 'Đồng hồ Apple Watch SE LTE 42mm viền nhôm', '11 280 000', 12, 200, 'cao su, kính cao cấp', 1, 'Pin', 'Tại nơi sản xuất', '20 x 2 x 0.2', 'Hồng', 'Nữ', 'Không', '10%', 'Còn hàng', 7, 'images/apple/ava-600x600 (1).png', 1231, 1290, '2021-03-23 04:14:16'),
(36, 'Đồng hồ Apple Watch S6 40mm viền nhôm dây cao su xanh', '12 280 000', 12, 200, 'cao su, kính cao cấp', 1, 'Pin', 'Tại nơi sản xuất', '20 x 2 x 0.2', 'Xanh đen', 'Nam và Nữ', 'Không', '10%', 'Còn hàng', 7, 'images/apple/2-600x600.png', 123, 2290, '2021-03-23 04:14:16'),
(37, 'Đồng hồ Apple Watch S6 LTE 40mm viền thép dây thép vàng', '18 910 000', 24, 100, 'Thép, kính cường lực ', 1, 'Pin ', 'Tại nơi sản xuất ', '20 x 2 x 0.2 ', 'Vàng kim ', 'Nam ', 'Không ', '20% ', 'Còn hàng ', 7, 'images/apple/apple-watch-s6-lte-40mm-vien-thep-day-thep-ava-600x600.png ', 335, 2561, '2021-03-23 04:14:16'),
(38, 'Đồng hồ Vòng tay thông minh Samsung Galaxy Fit2 đỏ', '750 000', 24, 200, 'Inox, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đỏ', 'Nam', 'Không', '10', 'new', 8, 'images/samsung/samsung-galaxy-fit2-do-1-400x400.png', 119, 2100, '2021-03-24 03:12:26'),
(39, 'Đồng hồ Vòng tay thông minh Samsung Galaxy Fit2 đen', '750 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '10', 'new', 8, 'images/samsung/samsung-galaxy-fit2-den-400x400.png', 2, 133, '2021-03-24 03:12:26'),
(40, 'Đồng hồ Samsung Galaxy Watch 3 45mm titanium', '12 280 000', 36, 150, 'bạc, kính cường lực g4', 1, 'pin, điện', 'Tại nhà máy', '21 x 2 x 0.2', 'Đen', 'Nam', '1 dây sạc', '20', 'new', 8, 'images/samsung/samsung-galaxy-watch-3-45mm-titanium-263520-043508-400x400.png', 321, 781, '2021-03-24 03:12:26'),
(41, 'Đồng hồ Samsung Galaxy Watch 3 41mm viền thép bạc', '4 980 000', 24, 210, 'Inox cao cấp, kính cường lực', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '10', 'new', 8, 'images/samsung/samsung-galaxy-watch-3-41mm-bac-054220-104255-400x400.png', 1230, 3101, '2021-03-24 03:12:26'),
(42, 'Đồng hồ Samsung Galaxy Watch 3 LTE 41mm viền thép dây da', '5 280 000', 24, 200, 'Inox, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '10', 'new', 8, 'images/samsung/samsung-galaxy-watch-3-lte-41mm-ava-400x400.png', 119, 2100, '2021-03-24 03:12:26'),
(43, 'Đồng hồ Samsung Galaxy Watch 3 LTE 45mm viền thép dây da', '7 580 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '10', 'new', 8, 'images/samsung/samsung-galaxy-watch-3-lte-45mm-ava-1-400x400.png', 2, 133, '2021-03-24 03:12:26'),
(44, 'Đồng hồ Samsung Galaxy Watch Active 2 40mm viền nhôm dây silicone hồng', '4 280 000', 36, 150, 'bạc, kính cường lực g4', 1, 'pin, điện', 'Tại nhà máy', '21 x 2 x 0.2', 'Hồng', 'Nữ', '1 dây sạc', '20', 'new', 8, 'images/samsung/samsung-galaxy-watch-active-2-40-mm--thum-400x400.png', 321, 781, '2021-03-24 03:12:26'),
(45, 'Đồng hồ Samsung Galaxy Watch Active 2 40mm viền thép dây da', '7 380 000', 24, 210, 'Inox cao cấp, kính cường lực', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Hồng', 'Nữ', 'Không', '10', 'new', 8, 'images/samsung/samsung-galaxy-watch-3-41mm-thum-400x400.png', 1230, 3101, '2021-03-24 03:12:26'),
(46, 'Đồng hồ thông minh Mi Watch', '2 280 000', 24, 200, 'Inox, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '10', 'new', 9, 'images/xiaomi/mi-watch-255520-015535-400x400.png', 119, 2100, '2021-03-06 04:14:16'),
(47, 'Đồng hồ Mi Band 5', '680 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Nâu', 'Nam và Nữ', 'Không', '10', 'new', 9, 'images/xiaomi/mi-band-5-thum-400x400.png', 2, 133, '2021-03-06 04:14:16'),
(48, 'Đồng hồ đôi Citizen EW1580-50E/BM6770-51E', '9 280 000', 36, 150, 'bạc, kính cường lực g4', 1, 'pin, điện', 'Tại nhà máy', '21 x 2 x 0.2', 'Bạc', 'Nam và Nữ', '1 dây sạc', '20', 'new', 11, 'images/couple/citizen-eu6090-54h-bi5070-57h-nam-nu-avatar-1-1-400x400.png', 321, 781, '2017-11-06 10:26:26'),
(49, 'Đồng hồ đôi Casio LTP-V004GL-7AUDF/MTP-V004GL-7AUDF', '1 980 000', 24, 210, 'Inox cao cấp, kính cường lực', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Nâu', 'Nam và Nữ', 'Không', '10', 'new', 11, 'images/couple/casio-ltp-v004gl-7audf-mtp-v004gl-7audf-nam-nuthumb-400x400.png', 1230, 3101, '2017-11-06 05:16:15'),
(50, 'Đồng hồ đôi Elio EL067-01/EL067-02', '1 880 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam và Nữ', 'Không', '10', 'new', 11, 'images/couple/elio-el067-01-el067-02-nam-nu-400x400.png', 1230, 3101, '2017-11-06 05:16:15'),
(51, 'Đồng hồ đôi Elio EL061-01/EL061-02', '1 580 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam và Nữ', 'Không', '10', 'new', 11, 'images/couple/elio-el061-01-el061-02-nam-nu-400x400.png', 1230, 3101, '2017-11-06 05:16:15'),
(52, 'Đồng hồ đôi Elio EL063-01/EL063-02', '1 280 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Nâu', 'Nam và Nữ', 'Không', '10', 'new', 11, 'images/couple/elio-el063-01-el063-02-nam-nu-600x600.png', 1230, 3101, '2017-11-06 05:16:15'),
(53, 'Đồng hồ đôi Q&Q S399J202Y/S398J202Y', '1 080 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Bạc', 'Nam và Nữ', 'Không', '10', 'new', 11, 'images/couple/qq-s399j202y-s398j202y-nam-nu-1-400x400.png', 1230, 3101, '2017-11-06 05:16:15'),
(54, 'Đồng hồ đôi Citizen EU6090-54H/BI5070-57H', ' 1 380 000', 24, 210, 'Inox cao cấp, kính cường lực', 1, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Nâu', 'Nam và Nữ', 'Không', '10', 'new', 11, 'images/couple/citizen-eu6090-54h-bi5070-57h-nam-nu-avatar-1-1-400x400.png', 1230, 3101, '2017-11-06 05:16:15'),
(55, 'Đồng hồ Casio G-Shock Nữ GMD-B800SU-3 - Mới', '980 000', 24, 210, 'Inox cao cấp, kính cường lực', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Xanh', 'Nữ', 'Không', '10', 'new', 10, 'images/sport/2.png', 1230, 3101, '2017-11-06 05:16:15'),
(56, 'Đồng hồ Casio STANDARD AEQ-110W-1BV', '750 000', 24, 210, 'Inox cao cấp, kính cường lực', 0, 'pin', 'Tại cửa hàng', '20 x 2 x 0.2', 'Đen', 'Nam', 'Không', '10', 'new', 10, 'images/sport/1.png', 1230, 3101, '2017-11-06 05:16:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamyeuthich`
--

CREATE TABLE `sanphamyeuthich` (
  `user_id` int(11) NOT NULL,
  `masp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanphamyeuthich`
--

INSERT INTO `sanphamyeuthich` (`user_id`, `masp`) VALUES
(1, 1),
(1, 4),
(1, 5),
(1, 7),
(2, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `tentaikhoan` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sodt` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `quyen` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `ten`, `tentaikhoan`, `matkhau`, `diachi`, `sodt`, `email`, `date`, `quyen`) VALUES
(1, 'Thằng tester', 'tester', '123', 'No info', 'Không cho', 'ccne@cc.cc', '2017-10-30 20:50:48', 0),
(2, 'Admin bá đạo', 'admin', '123', 'sao biết dc', '1234566', 'adf@afd.com', '2017-11-04 14:40:53', 1),
(3, 'change1', 'tester2', '123', '123', 'sdt1', 'asf@a.oads', '2017-11-04 11:59:21', 0),
(4, 'test\'s %/\\', 'tester3', '123', '123', '12', 'adf@afd.com', '0000-00-00 00:00:00', 0),
(5, 'Lê A', 'tester4', '123', '10', '0935714733', 'nvduong15@gmail.com', '0000-00-00 00:00:00', 0),
(6, 'Lê A', 'tester5', '123', '10', '0935714733', 'nvduong15@gmail.com', '0000-00-00 00:00:00', 0),
(7, 'David Villa', 'tester6', '123', 'Anabella', '0935777888', 'adf@afd.com', '2017-10-31 06:46:17', 0),
(8, 'Lê A', 'tester7', '123', '10', '0935714733', 'nvduong15@gmail.com', '2017-11-01 12:47:55', 0),
(9, 'tester11', 'tester11', 'tester11', 'tester11', '', 'tester11', '2021-04-09 22:56:22', 0),
(21, 'tester11', 'tester11d', 'tester11', 'tester11', '58', 'tester11', '2021-04-16 00:04:03', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietgd`
--
ALTER TABLE `chitietgd`
  ADD PRIMARY KEY (`magd`,`masp`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`madm`);

--
-- Chỉ mục cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  ADD PRIMARY KEY (`magd`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`user_id`,`masp`),
  ADD KEY `fk_gh_sp` (`masp`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `fk_sp_dmsp` (`madm`);

--
-- Chỉ mục cho bảng `sanphamyeuthich`
--
ALTER TABLE `sanphamyeuthich`
  ADD PRIMARY KEY (`user_id`,`masp`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `madm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  MODIFY `magd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietgd`
--
ALTER TABLE `chitietgd`
  ADD CONSTRAINT `chitietgd_ibfk_1` FOREIGN KEY (`magd`) REFERENCES `giaodich` (`magd`),
  ADD CONSTRAINT `chitietgd_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_gh_sp` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`),
  ADD CONSTRAINT `fk_gh_tv` FOREIGN KEY (`user_id`) REFERENCES `thanhvien` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sp_dmsp` FOREIGN KEY (`madm`) REFERENCES `danhmucsp` (`madm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
