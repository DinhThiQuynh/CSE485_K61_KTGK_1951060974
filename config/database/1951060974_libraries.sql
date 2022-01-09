-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 03:57 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060974_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madg` int(11) NOT NULL,
  `hovaten` varchar(50) DEFAULT NULL,
  `gioitinh` varchar(50) DEFAULT NULL,
  `namsinh` varchar(50) DEFAULT NULL,
  `nghenghiep` varchar(50) DEFAULT NULL,
  `ngaycapthe` date DEFAULT NULL,
  `ngayhethan` date DEFAULT NULL,
  `diachi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
(1, 'Bernice Maso', 'Female', '1993', 'Design Engineer', '0000-00-00', '0000-00-00', '9 Mifflin Junction'),
(2, 'Brenn Keetch', 'Female', '2012', 'Geologist IV', '0000-00-00', '0000-00-00', '1839 Green Ridge Center'),
(3, 'Brittni Thorneloe', 'Male', '1992', 'GIS Technical Architect', '0000-00-00', '0000-00-00', '06 Veith Court'),
(4, 'Maxy Lawland', 'Female', '2005', 'Compensation Analyst', '0000-00-00', '0000-00-00', '8 Division Way'),
(5, 'Gleda Kinghorn', 'Male', '2003', 'Web Designer I', '0000-00-00', '0000-00-00', '40076 Hollow Ridge Crossing'),
(6, 'Karlie Bowles', 'Female', '1990', 'Statistician III', '0000-00-00', '0000-00-00', '11 Cardinal Park'),
(7, 'Marchelle Evemy', 'Male', '2009', 'Pharmacist', '0000-00-00', '0000-00-00', '5 Westend Lane'),
(8, 'Randolf Fabri', 'Male', '2001', 'Media Manager III', '0000-00-00', '0000-00-00', '4787 Independence Crossing'),
(9, 'Liuka Lawrance', 'Male', '2000', 'Environmental Specialist', '0000-00-00', '0000-00-00', '7681 Delaware Terrace'),
(10, 'Lari Gartin', 'Female', '1998', 'Statistician IV', '0000-00-00', '0000-00-00', '5423 Oak Valley Lane');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
