-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 10, 2019 lúc 03:10 PM
-- Phiên bản máy phục vụ: 10.3.15-MariaDB
-- Phiên bản PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lulishop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baidang`
--

CREATE TABLE `baidang` (
  `idsp` int(11) NOT NULL,
  `idtv` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `ngDang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hinhAnh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baidang`
--

INSERT INTO `baidang` (`idsp`, `idtv`, `ngDang`, `hinhAnh`, `noiDung`) VALUES
(1, 'TV1', '10/7/2019', 'ao1.jpg', 'trắng, đen'),
(2, 'TV2', '15/7/2019', 'ao2.jpg', 'trắng, hồng'),
(3, 'TV4', '12/7/2019', 'ao3.jpg', 'đen, xanh'),
(4, 'TV3', '15/7/2019', 'ao4.jpg', 'đen, đỏ'),
(6, 'TV5', '17/7/2019', 'ao5.jpg', 'cam, hồng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bluandgia`
--

CREATE TABLE `bluandgia` (
  `idsp` int(7) NOT NULL,
  `idtv` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `bluan` text COLLATE utf8_unicode_ci NOT NULL,
  `dgiasao` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bluandgia`
--

INSERT INTO `bluandgia` (`idsp`, `idtv`, `bluan`, `dgiasao`, `email`) VALUES
(1, 'TV1', 'hàng đẹp', '5', 'Linh@email.com'),
(3, 'TV2', 'hàng vải khá tốt', '4', 'Ha@email.com'),
(4, 'TV4', 'chất lượng vải tốt đẹp', '5', 'My@email.com'),
(5, 'TV3', 'áo rất đẹp', '5', 'Nah@email.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dhanghdon`
--

CREATE TABLE `dhanghdon` (
  `idhd` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `tenKh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ngInhd` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tongTien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngDat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ttrangTt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `tenNgnhan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dhanghdon`
--

INSERT INTO `dhanghdon` (`idhd`, `tenKh`, `ngInhd`, `tongTien`, `ngDat`, `ttrangTt`, `SDT`, `tenNgnhan`, `diaChi`) VALUES
('HD1', 'Nguyễn Thị Lan Anh', '10/7/2019', '100.000VND', '5/7/2019', 'Đã thanh toán', 3653756, 'Nguyễn Thị Lan Anh', 'Hòa Khánh'),
('HD2', 'Lê Phương Thúy', '9/7/2019', '150.000VND', '7/7/2019', 'Đã thanh toán', 47568374, 'Nguyễn Thị Lan Mi', 'Khánh Hòa'),
('HD3', 'Lê Phương Khánh', '8/7/2019', '250.000VND', '8/7/2019', 'Chưa thanh toán', 474548374, 'Nguyễn Khánh Hùng', 'Bình Định'),
('HD4', 'Nguyễn Khánh Linh', '8/7/2019', '950.000VND', '5/7/2019', 'Chưa thanh toán', 3548374, 'Nguyễn Khánh ', 'Hà Nội'),
('HD5', 'Đặng Thanh Nghị', '15/7/2019', '325.000VND', '10/7/2019', 'Đã thanh toán', 475634, 'Đặng Thanh Nghị', 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dhanghdonspham`
--

CREATE TABLE `dhanghdonspham` (
  `iddhhdsp` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `tenDhhdsp` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `idsp` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `tongTien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dhanghdonspham`
--

INSERT INTO `dhanghdonspham` (`iddhhdsp`, `tenDhhdsp`, `idsp`, `soLuong`, `tongTien`, `diaChi`) VALUES
('DHHDS1', 'Đơn 1', 1, 2, '195.000VND', 'Hà Nội'),
('DHHDS2', 'Đơn 2', 5, 5, '595.000VND', 'Sài Gòn'),
('DHHDS3', 'Đơn 3', 4, 3, '195.000VND', 'Đà Nẵng'),
('DHHDS4', 'Đơn 4', 4, 3, '395.000VND', 'Quảng Nam'),
('DHHDS5', 'Đơn 5', 2, 5, '450.000VND', 'Quảng Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `iddh` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `idsp` int(11) NOT NULL,
  `ngaydat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`iddh`, `hoten`, `email`, `diachi`, `sdt`, `idsp`, `ngaydat`, `soluong`) VALUES
('DH1', 'hạ mi', '123@123.123', 'adada', '123145678', 1, '1/8/2019', 1),
('DH10', 'hạ linh', 'linh@gmail.com', 'hải Châu', '131234', 1, '4/8/2019', 1),
('DH2', 'Đặng Hòa Nhi', 'nhi0911@gmail.com', 'abc', '123414', 1, '1/8/2019', 1),
('DH3', 'Nhi', 'abc@cba.bac', 'kasdh', '123', 1, '1/8/2019', 1),
('DH4', 'akhd', 'sakdj', 'ksjssahd', 'adskhalk', 4, '1/8/2019', 1),
('DH5', 'n', 'abc@abc.ac', 'dabk ads', '123', 7, '2/8/2019', 1),
('DH6', 'Ly', 'ly@gmail.com', 'Đà Nẵng', '123', 2, '2/8/2019', 1),
('DH7', 'rt', 'dr@df', 'dgd', '35345', 3, '2/8/2019', 1),
('DH8', 'shdg', 'Shindy241099@gmail.com', 'sdjheu', '132435', 1, '2/8/2019', 1),
('DH9', 'anh', 'anh@gmail', 'thanh sơn', '123343', 1, '2/8/2019', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idkh` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `hoten`, `email`, `sdt`, `diachi`, `Pass`) VALUES
('KH1', 'Nguyễn Hạ mây', 'May123@gmail.com', '635473', 'Quảng Trị', '123'),
('KH2', 'Trần Hoàng Phi', 'phi123@gmail.com', '54524', 'Đà lạt', '123'),
('KH3', 'Trần Phan Ngọc Hạ', 'ha@gmail.com', '3453', 'Sài Gòn', '123'),
('KH4', 'Nguyễn Trần Thùy My', 'thuymy@gmail.com', '346333', 'Thanh Sơn', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `tenkm` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `idkm` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `soLuong` int(11) NOT NULL,
  `ngBdau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngKthuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`tenkm`, `idkm`, `soLuong`, `ngBdau`, `ngKthuc`) VALUES
('Sale áo 30%', 'KM1', 10, '10/7/2019', '15/7/2019'),
('Sale quần 50%', 'KM2', 50, '9/7/2019', '31/7/2019'),
('Sale áo thun 10%', 'KM3', 15, '1/7/2019', '10/7/2019'),
('Sale áo sơ mi 20%', 'KM4', 20, '2/7/2019', '5/7/2019'),
('Sale áo sơ mi 70%', 'KM5', 25, '5/7/2019', '6/7/2019');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(100) NOT NULL,
  `tensp` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `mausac` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chatluong` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `hinhanh`, `soluong`, `mausac`, `chatluong`, `gia`) VALUES
(1, 'Ao so mi', 'ao1.jpg', 15, 'xanh, do, den', 'loại 1', '150000'),
(2, 'Ao so mi', 'ao2.jpg', 9, 'trang, đen', 'loại 2', '180000'),
(3, 'Ao thun nu', 'ao3.jpg', 5, 'xanh,hong, vang', 'loại 1', '180000'),
(4, 'Set the thao', 'ao4.jpg', 20, 'đen, xam', 'loại 3', '180000'),
(5, 'Ao nu', 'ao5.jpg', 20, 'trang, hong , xanh', 'loại 1', '180000'),
(6, 'Quan ong rong', 'ao6.jpg', 20, 'caro', 'loại 1', '180000'),
(7, 'Ao tay lo', 'ao7.jpg', 20, 'đen, xam', 'loại 2', '180000'),
(80, 'Ao thun nam', 'ao8.jpg', 7, 'đen, xam', 'loại 2', '180000'),
(90, 'Set do thun', 'ao9.jpg', 20, 'trang', 'loại 1', '180000'),
(100, 'Ao so mi', 'ao3.jpg', 20, 'Trang, Cam, Xanh', 'loại 1', '180000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sphamkmai`
--

CREATE TABLE `sphamkmai` (
  `idspkm` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `tenSpkm` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idsp` int(11) NOT NULL,
  `sLuong` int(11) NOT NULL,
  `gia` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sphamkmai`
--

INSERT INTO `sphamkmai` (`idspkm`, `tenSpkm`, `idsp`, `sLuong`, `gia`) VALUES
('SPKM1', 'Sale 30%', 1, 15, '55.000VND'),
('SPKM2', 'Sale 40%', 5, 10, '95.000VND'),
('SPKM3', 'Sale 50%', 20, 40, '195.000VND'),
('SPKM4', 'Sale 70%', 7, 400, '225.000VND'),
('SPKM5', 'Sale 50%', 4, 40, '295.000VND'),
('SPKM6', 'Sale 60%', 6, 100, '175.000VND'),
('SPKM7', 'Sale 10%', 3, 10, '75.000VND');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `idtv` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`idtv`, `hoten`, `username`, `pass`, `email`, `sdt`, `diachi`) VALUES
('', 'Nguyễn Huy', 'huy', '456', 'huy@gamil.com', '2435', 'Sài Gòn'),
('TV1', 'Đặng Hòa Nhi', 'hoanhi0911', '123', 'hoanhi@gmail.com', '0123456789', '48 cao thắng'),
('TV2', 'Phan Thị Ly', 'Ly', '123', 'ly@gmail.com', '23436455', '48 cao thắng'),
('TV3', 'nguyễn hạ mây', 'may', '123', 'may@gmail.com', '1343', 'Quảng nam'),
('TV4', 'na lê', 'na', '123', 'na@gmail.com', '12345678', 'Đà nẵng'),
('TV7', 'vang lê', 'vang', '123', 'vang123@gmail.com', '25436', 'sdgsfg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xemchitiet`
--

CREATE TABLE `xemchitiet` (
  `MaSP` int(100) NOT NULL,
  `TenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MauSac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xemchitiet`
--

INSERT INTO `xemchitiet` (`MaSP`, `TenSP`, `SoLuong`, `MauSac`, `HinhAnh`, `GiaTien`, `MoTa`) VALUES
(101, 'Ao thun', '20', 'đèn trắng vàng', 'ao1.jpg', '20.000', 'ao thun hot trend hang quang chau ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xemttbd`
--

CREATE TABLE `xemttbd` (
  `MaSP` int(100) NOT NULL,
  `TenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MauSac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xemttbd`
--

INSERT INTO `xemttbd` (`MaSP`, `TenSP`, `SoLuong`, `MauSac`, `HinhAnh`, `GiaTien`, `MoTa`) VALUES
(0, 'ao', '', '', 'ao2.jpg', '123', ''),
(102, 'Ao bull', '20', 'hong, xanh', 'ao2.jpg', '123000', 'Hang Quang Chau'),
(103, 'Ao thun', '43', 'xanh, hong', 'ao3.jpg', '123000', 'Hang Xin Xo'),
(104, 'Ao so mi', '15', 'xanh, den', 'ao4.jpg', '123000', 'Hang Quang Chau'),
(105, 'Ao thun', '50', 'trang, den', 'ao5.jpg', '123000', 'Hang Quang Chau'),
(106, 'Vay hoa', '25', 'Do, cam', 'ao6.jpg', '123000', 'Hang Quang Chau'),
(107, 'Vay Event', '20', 'cam, Den', 'ao7.jpg', '123000', 'Hang Quang Chau'),
(108, 'Vay Xoe', '19', 'Hong. Tim, Nau', 'ao8.jpg', '123000', 'Hang Quang Chau'),
(109, 'Vay xinh', '123', 'den', 'ao1.jpg', '123000', 'Hang Quang Chau');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`idsp`,`idtv`);

--
-- Chỉ mục cho bảng `bluandgia`
--
ALTER TABLE `bluandgia`
  ADD PRIMARY KEY (`idsp`);

--
-- Chỉ mục cho bảng `dhanghdon`
--
ALTER TABLE `dhanghdon`
  ADD PRIMARY KEY (`idhd`);

--
-- Chỉ mục cho bảng `dhanghdonspham`
--
ALTER TABLE `dhanghdonspham`
  ADD PRIMARY KEY (`iddhhdsp`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`iddh`),
  ADD KEY `idsp` (`idsp`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkh`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`idkm`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sphamkmai`
--
ALTER TABLE `sphamkmai`
  ADD PRIMARY KEY (`idspkm`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`idtv`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `xemchitiet`
--
ALTER TABLE `xemchitiet`
  ADD PRIMARY KEY (`MaSP`);

--
-- Chỉ mục cho bảng `xemttbd`
--
ALTER TABLE `xemttbd`
  ADD PRIMARY KEY (`MaSP`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
