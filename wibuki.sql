-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2021 lúc 03:11 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wibuki`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `ten` varchar(70) NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `ten`, `sdt`, `diachi`, `email`, `matkhau`) VALUES
(1, 'khang', 1234567890, 'hcm', 'khang@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `id` int(11) NOT NULL,
  `tensp` varchar(50) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `thongtin` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`id`, `tensp`, `gia`, `thongtin`) VALUES
(1, 'Cosplay Mirai chính hãng', 299000, '<li>Áo cosplay Mirai Wibu ki khá thích</li> \r\n<li>Loại: Quần áo</li> \r\n<li>Size: X M L</li> \r\n<li>Tình trạng: Hàng mới </li> \r\n<li>Thương hiệu : Chính hãng nhà WibuKi</li> '),
(2, 'Mô hình figure: Sagiri chính hãng', 599000, '<li>Loại: mô hình tĩnh</li>\r\n<li>Chiều cao: ~17cm</li>\r\n<li>Tình trạng: Hàng mới cứng 100%</li>\r\n<li>Dùng làm quà tặng hoặc trưng bày bàn làm việc,case máy tính</li>\r\n<li>Nhựa PVC không độc hại</li>'),
(3, 'Mô hình figure: Konjiki yami Yukata', 550000, '<li>Nhân vật: Golden Darkness</li>\r\n<li>Anime/Manga: To Love-Ru Darkness</li>\r\n<li>Cao khoảng 21cm</li>\r\n<li>Chất liệu:Nhựa PVC</li>\r\n<li>Kích thước hộp: 18.2×16.2×27.2cm</li>'),
(4, 'Mô hình figure: Rem chính hãng', 6999000, '<li>Mô hình Rem Phiên bản Sơ mi</li> \r\n<li>Loại: mô hình tĩnh</li> \r\n<li>Chiều cao: 22cm</li> \r\n<li>Tình trạng: Hàng mới </li> \r\n<li>Thương hiệu : Chính hãng </li>'),
(5, '[Mihoyo] Mô hình nhân vật Honkai Impact 3rd Rita', 3390000, '<li>Mô hình Rita Phiên bản Maid</li> \r\n<li>Loại: mô hình tĩnh</li> \r\n<li>Chiều cao: ~30cm</li> \r\n<li>Tình trạng: Hàng mới </li> \r\n<li>Thương hiệu : Chính hãng Mihoyo</li>'),
(6, 'Mô hình figure :Amano Hina', 900000, '<li>Kích thước: 17cm</li>\r\n<li>Đóng gói: Có Hộp</li>\r\n<li>Chủ đề: Anime phong hóa cùng bạn</li>\r\n<li>Chất liệu: PVC</li>'),
(7, 'Set đồ Ninja  Konoha', 479000, '<li>Phụ kiện phi tiêu để ném linh tinh>\r\n<li>Chất liệu: Nhựa PVC</li>\r\n<li>Đảm bảo an toàn khong gây nguy hiểm, nhưng cũng không nên ném vào mắt :v</li>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `id` int(11) NOT NULL,
  `tensp` varchar(70) DEFAULT NULL,
  `giagoc` int(11) DEFAULT NULL,
  `giagiam` int(11) DEFAULT NULL,
  `anh` varchar(250) DEFAULT NULL,
  `daban` int(11) DEFAULT NULL,
  `brand` varchar(40) DEFAULT NULL,
  `sanxuat` varchar(40) DEFAULT NULL,
  `loaihinh` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`id`, `tensp`, `giagoc`, `giagiam`, `anh`, `daban`, `brand`, `sanxuat`, `loaihinh`) VALUES
(1, 'Cosplay Mirai chính hãng', 315000, 299000, './assets/img/product/cos4.jfif', 100, 'Local brand', 'Nhật Bản', 'Cosplay'),
(2, 'Mô hình figure: Sagiri chính hãng', 715000, 599000, './assets/img/product/1.jfif', 100, 'Local brand', 'Nhật Bản', 'Figure'),
(3, 'Mô hình figure: Konjiki yami Yukata', 615000, 550000, './assets/img/product/2.jfif', 50, 'Local brand', 'Việt Nam', 'Figure'),
(4, 'Mô hình figure: Rem chính hãng', 6999000, 6999000, './assets/img/product/3.jfif', 123, 'Local brand', 'Nhật Bản', 'Figure'),
(5, '[Mihoyo] Mô hình nhân vật Honkai Impact 3rd Rita Rossweisse', 3390000, 3390000, './assets/img/product/RitaLmao.jpg', 103, 'Local brand', 'Nhật Bản', 'Figure'),
(6, 'Mô hình figure :Amano Hina', 1000000, 900000, './assets/img/product/hina1.jpg', 231, 'Local brand', 'Nhật Bản', 'Figure'),
(7, 'Set đồ Ninja  Konoha', 515000, 479000, './assets/img/product/item1.jfif', 123, 'Local brand', 'Nhật Bản', 'Accessory');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `hoten` varchar(70) DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `diachi` varchar(40) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `matkhau` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `hoten`, `sdt`, `diachi`, `email`, `matkhau`) VALUES
(1, 'khang', 1234567890, 'HCM', 'khang@gmail.com', '123456'),
(2, 'nghia', 11111111, 'simpworld', 'nghia@gmail.com', '123123'),
(3, 'koakoa', 1111111, '22333', 'khoa@gmail.com', '123123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
