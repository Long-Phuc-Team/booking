-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2019 lúc 11:44 AM
-- Phiên bản máy phục vụ: 10.1.33-MariaDB
-- Phiên bản PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `booking`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangxe`
--

CREATE TABLE `hangxe` (
  `IDHangXe` int(11) NOT NULL,
  `TenHangXe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hangxe`
--

INSERT INTO `hangxe` (`IDHangXe`, `TenHangXe`, `DienThoai`, `MoTa`, `created_at`, `updated_at`) VALUES
(1, 'Phương Trang', '0332544565', NULL, '2019-12-01 00:00:00', '2019-12-01 00:00:00'),
(2, 'Thành Bưởi', '0335244666', NULL, '2019-12-01 00:00:00', '2019-12-01 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `IDKhachHang` int(11) NOT NULL,
  `TenKhachHang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DiemDon` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `GhiChu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`IDKhachHang`, `TenKhachHang`, `DienThoai`, `Email`, `DiemDon`, `GhiChu`) VALUES
(1, 'Nguyễn Ngọc Thảo', '0331456456', 'blablahotthao@gmail.com', 'Đại Học TĐT', 'Mãi iu Fúc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichtrinh`
--

CREATE TABLE `lichtrinh` (
  `IDLichTrinh` int(11) NOT NULL,
  `IDTuyen` int(11) NOT NULL,
  `SoXe` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `GioDi` time NOT NULL,
  `GioDen` time NOT NULL,
  `NgayDi` date NOT NULL,
  `GiaVe` int(11) NOT NULL,
  `MoTa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichtrinh`
--

INSERT INTO `lichtrinh` (`IDLichTrinh`, `IDTuyen`, `SoXe`, `GioDi`, `GioDen`, `NgayDi`, `GiaVe`, `MoTa`, `created_at`, `updated_at`) VALUES
(1, 1, '67G151413', '06:00:00', '10:00:00', '2019-12-01', 120000, NULL, '2019-12-01 00:00:00', '2019-12-01 00:00:00'),
(2, 2, '67G123067', '17:00:00', '23:00:00', '2019-12-02', 100000, NULL, '2019-12-01 00:00:00', '2019-12-01 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaixe`
--

CREATE TABLE `loaixe` (
  `IDLoaiXe` int(11) NOT NULL,
  `TenLoaiXe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SoGhe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaixe`
--

INSERT INTO `loaixe` (`IDLoaiXe`, `TenLoaiXe`, `SoGhe`) VALUES
(1, 'Xe Giường Nằm', 25),
(2, 'Xe Thường', 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthaidatve`
--

CREATE TABLE `trangthaidatve` (
  `IDTTDV` int(11) NOT NULL,
  `IDLichTrinh` int(11) NOT NULL,
  `Ghe` int(11) NOT NULL,
  `TrangThai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthaidatve`
--

INSERT INTO `trangthaidatve` (`IDTTDV`, `IDLichTrinh`, `Ghe`, `TrangThai`) VALUES
(1, 1, 23, 1),
(2, 2, 6, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyen`
--

CREATE TABLE `tuyen` (
  `IDTuyen` int(11) NOT NULL,
  `TenTuyen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DiemDi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DiemDen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DoDai` int(11) NOT NULL,
  `ThoiGian` int(11) NOT NULL,
  `MoTa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tuyen`
--

INSERT INTO `tuyen` (`IDTuyen`, `TenTuyen`, `DiemDi`, `DiemDen`, `DoDai`, `ThoiGian`, `MoTa`, `created_at`, `updated_at`) VALUES
(1, 'An Giang - Cần Thơ', 'An Giang', 'Cần Thơ', 130, 4, NULL, '2019-12-01 00:00:00', '2019-12-01 00:00:00'),
(2, 'Cà Mau - HCM', 'Cà Mau', 'HCM', 150, 6, NULL, '2019-12-01 00:00:00', '2019-12-01 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Role` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Username`, `Password`, `Role`) VALUES
('admin', '123', 'root');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vexe`
--

CREATE TABLE `vexe` (
  `IDVeXe` int(11) NOT NULL,
  `IDTuyen` int(11) NOT NULL,
  `IDLichTrinh` int(11) NOT NULL,
  `IDKhachHang` int(11) NOT NULL,
  `Ghe` int(11) NOT NULL,
  `GiaVe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vexe`
--

INSERT INTO `vexe` (`IDVeXe`, `IDTuyen`, `IDLichTrinh`, `IDKhachHang`, `Ghe`, `GiaVe`, `MoTa`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 23, '100000', NULL, '2019-12-01 00:00:00', '2019-12-01 00:00:00'),
(2, 2, 2, 1, 6, '110000', NULL, '2019-12-01 00:00:00', '2019-12-01 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `SoXe` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `IDHangXe` int(11) NOT NULL,
  `IDLoaiXe` int(11) NOT NULL,
  `MoTa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`SoXe`, `IDHangXe`, `IDLoaiXe`, `MoTa`, `created_at`, `updated_at`) VALUES
('67G123067', 2, 1, NULL, '2019-12-01 00:00:00', '2019-12-01 00:00:00'),
('67G151413', 1, 2, NULL, '2019-12-01 00:00:00', '2019-12-01 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hangxe`
--
ALTER TABLE `hangxe`
  ADD PRIMARY KEY (`IDHangXe`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`IDKhachHang`);

--
-- Chỉ mục cho bảng `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD PRIMARY KEY (`IDLichTrinh`);

--
-- Chỉ mục cho bảng `loaixe`
--
ALTER TABLE `loaixe`
  ADD PRIMARY KEY (`IDLoaiXe`);

--
-- Chỉ mục cho bảng `trangthaidatve`
--
ALTER TABLE `trangthaidatve`
  ADD PRIMARY KEY (`IDTTDV`);

--
-- Chỉ mục cho bảng `tuyen`
--
ALTER TABLE `tuyen`
  ADD PRIMARY KEY (`IDTuyen`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- Chỉ mục cho bảng `vexe`
--
ALTER TABLE `vexe`
  ADD PRIMARY KEY (`IDVeXe`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`SoXe`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hangxe`
--
ALTER TABLE `hangxe`
  MODIFY `IDHangXe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `IDKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lichtrinh`
--
ALTER TABLE `lichtrinh`
  MODIFY `IDLichTrinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaixe`
--
ALTER TABLE `loaixe`
  MODIFY `IDLoaiXe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `trangthaidatve`
--
ALTER TABLE `trangthaidatve`
  MODIFY `IDTTDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tuyen`
--
ALTER TABLE `tuyen`
  MODIFY `IDTuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `vexe`
--
ALTER TABLE `vexe`
  MODIFY `IDVeXe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
