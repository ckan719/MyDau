-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 01, 2020 lúc 07:33 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datadau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `user` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pass` text NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`user`, `name`, `pass`, `level`) VALUES
('admin', 'admin', 'admin', 1),
('user1', 'nhat', '123456', 0),
('user2', 'thanh', '123', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioithieu`
--

CREATE TABLE `gioithieu` (
  `id` int(11) NOT NULL,
  `img` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gioithieu`
--

INSERT INTO `gioithieu` (`id`, `img`) VALUES
(1, 'image1.jpg'),
(2, 'image2.jpg'),
(3, 'image3.jpg'),
(4, 'image4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `tieude` text NOT NULL,
  `thoigian` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sukien`
--

INSERT INTO `sukien` (`id`, `img`, `tieude`, `thoigian`, `noidung`) VALUES
(1, 'image1.jpg', 'tieude', '1111-11-11', '111111'),
(2, 'image2.jpg', 'tieu de 2', '2020-05-22', 'This is value'),
(3, 'image3.jpg', 'Tieu de 3', '2020-05-26', 'This is value'),
(4, 'image1.jpg', 'tieu de 4', '2020-05-23', 'This is value'),
(5, 'image1.jpg', 'tieu de', '2020-05-12', 'This is value'),
(6, 'image4.jpg', 'tieude new', '2020-06-11', 'this is noi dung'),
(7, '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `username` text NOT NULL,
  `img` text NOT NULL,
  `ten` text NOT NULL,
  `mssv` varchar(10) NOT NULL,
  `ngaysinh` date NOT NULL,
  `cmnd` text NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `diachi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`username`, `img`, `ten`, `mssv`, `ngaysinh`, `cmnd`, `gioitinh`, `diachi`) VALUES
('user1', 'Kawai.jpg', 'nhat', '1751220075', '1999-08-21', '241861***', 'Nam', 'Đắc lắc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `img` varchar(30) NOT NULL,
  `tieude` text NOT NULL,
  `nguon` text NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `img`, `tieude`, `nguon`, `noidung`) VALUES
(1, 'image4.jpg', 'SINH VIÊN DAU ĐẠT 03 GIẢI TẠI GIẢI THƯỞNG LOA THÀNH 2019', 'Admin', 'Ngày 14/12 vừa qua, các sinh viên Nguyễn Hoài Nam, Nguyễn Đình Phước và Lưu Tấn Chí, trường Đại học Kiến trúc Đà Nẵng (DAU) đã xuất sắc giành được 03 giải thưởng tại Lễ trao giải giải thưởng Loa Thành 2019.'),
(2, 'image4.jpg', 'SINH VIÊN DAU VỚI WORKSHOP CÔNG TRÌNH XANH', 'Admin', 'Chiều ngày 12/11/2019 Công ty Insee Việt Nam phối hợp với Trường Đại học Kiến trúc Đà Nẵng đã tổ chức Workshop công trình xanh'),
(3, 'image4.jpg', 'NGÀY HỘI SINH VIÊN KIẾN TRÚC ĐÀ NẴNG - HỘI TỤ 2019', 'Admin', 'Hoà trong không khí sôi nổi của năm học mới, ngày 17/11/2019 vừa qua, trường Đại học Kiến trúc Đà Nẵng đã tổ chức chương trình Ngày hội sinh viên Kiến trúc Đà Nẵng - Hội tụ 2019. Đến với buổi lễ lần này, các bạn sinh viên đã có cơ hội gặp gỡ, giao lưu với lãnh đạo của khoa cũng như các anh chị khoá trên'),
(4, 'image4.jpg', 'SINH VIÊN DAU ĐẠT 03 GIẢI TẠI GIẢI THƯỞNG LOA THÀNH 2019', 'dau', 'Ngày 14/12 vừa qua, các sinh viên Nguyễn Hoài Nam, Nguyễn Đình Phước và Lưu Tấn Chí, trường Đại học Kiến trúc Đà Nẵng (DAU) đã xuất sắc giành được 03 giải thưởng tại Lễ trao giải giải thưởng Loa Thành 2019.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`mssv`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sukien`
--
ALTER TABLE `sukien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
