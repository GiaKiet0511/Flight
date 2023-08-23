-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2023 at 04:24 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webvemaybay`
--

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_bookingticket`
--

CREATE TABLE `ntgk_bookingticket` (
  `id` int NOT NULL,
  `noiden` varchar(50) NOT NULL,
  `loaive` varchar(50) NOT NULL,
  `slve` int NOT NULL,
  `ngaydi` date NOT NULL,
  `ngayve` date NOT NULL,
  `thanhtoan` varchar(50) NOT NULL,
  `gia` float NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `dienthoai` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` tinyint DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_bookingticket`
--

INSERT INTO `ntgk_bookingticket` (`id`, `noiden`, `loaive`, `slve`, `ngaydi`, `ngayve`, `thanhtoan`, `gia`, `hoten`, `ngaysinh`, `dienthoai`, `email`, `status`) VALUES
(1, 'Hà Nội', 'Một chiều', 1, '2023-05-01', '2023-06-22', 'Tiền mặt', 3000000, 'GiaKiet', '2000-06-22', 645545545, 'nguyenkiet0049@gmail.com', 1),
(5, 'TP Hồ Chí Minh', 'Khứ hồi', 2, '2023-06-01', '2023-06-22', 'Tiền mặt', 3000000, 'GiaKiet', '2000-06-27', 645545545, 'nguyenky0049@gmail.com', 1),
(6, 'Hà Nội', 'Khứ hồi', 10, '2023-05-01', '2023-06-22', 'Tiền mặt', 3000000, 'GiaKiet', '2000-06-22', 645545545, 'nguyenkiet0049@gmail.com', 1),
(7, 'Đà Nẵng', 'Khứ hồi', 3, '2023-05-01', '2023-06-22', 'Tiền mặt', 3000000, 'Bảo Trọng', '2000-06-22', 645545545, 'nguyenky0049@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_customer`
--

CREATE TABLE `ntgk_customer` (
  `MaKH` int NOT NULL,
  `TenKH` varchar(100) NOT NULL,
  `GioiTinh` int NOT NULL,
  `SĐT` int NOT NULL,
  `Status` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_customer`
--

INSERT INTO `ntgk_customer` (`MaKH`, `TenKH`, `GioiTinh`, `SĐT`, `Status`) VALUES
(1, 'Văn Thắng', 1, 347561438, 1),
(2, 'Trúc Linh', 2, 754813647, 1),
(3, 'Mã Tiến Đạt', 1, 357854247, 1),
(4, 'Cao Mạnh Hùng', 1, 283346528, 1),
(5, 'Trần Bảo Vy', 2, 351284936, 1),
(6, 'Tạ Cao Bằng', 1, 372846943, 1),
(7, 'Thanh Ly', 2, 753576457, 1),
(8, 'Tống Hàn Thiên', 1, 479821468, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_flight`
--

CREATE TABLE `ntgk_flight` (
  `MaChuyenBay` int NOT NULL,
  `NgayBay` date NOT NULL,
  `ThoiGianBay` time NOT NULL,
  `SoGheH1` int NOT NULL,
  `SoGheH2` int NOT NULL,
  `Status` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_flight`
--

INSERT INTO `ntgk_flight` (`MaChuyenBay`, `NgayBay`, `ThoiGianBay`, `SoGheH1`, `SoGheH2`, `Status`) VALUES
(1, '2022-04-23', '07:30:00', 5, 10, 1),
(2, '2022-02-18', '23:00:00', 3, 13, 1),
(3, '2022-01-28', '16:17:00', 2, 20, 1),
(4, '2023-05-15', '17:50:00', 5, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_flightdetails`
--

CREATE TABLE `ntgk_flightdetails` (
  `MaCTChuyenBay` int NOT NULL,
  `ThoiGianDung` datetime NOT NULL,
  `Status` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_flightdetails`
--

INSERT INTO `ntgk_flightdetails` (`MaCTChuyenBay`, `ThoiGianDung`, `Status`) VALUES
(1, '2022-04-24 09:30:00', 1),
(2, '2022-01-21 01:00:00', 1),
(3, '2022-02-18 19:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_flightroute`
--

CREATE TABLE `ntgk_flightroute` (
  `MaTuyenBay` int NOT NULL,
  `NoiDi` varchar(100) NOT NULL,
  `NoiDen` varchar(100) NOT NULL,
  `Status` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_flightroute`
--

INSERT INTO `ntgk_flightroute` (`MaTuyenBay`, `NoiDi`, `NoiDen`, `Status`) VALUES
(1, 'Hà Nội', 'Phú Quốc', 1),
(2, 'TP.Hồ Chí Minh', 'Hà Nội', 1),
(3, 'Phú Quốc', 'Đà Nẵng', 1),
(4, 'TP.Hồ Chí Minh', 'Cần Thơ', 1),
(5, 'Cần Thơ ', 'TP.Hồ Chí Minh', 1),
(8, '1', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_invoice`
--

CREATE TABLE `ntgk_invoice` (
  `MaHoaDon` int NOT NULL,
  `NgayLap` date NOT NULL,
  `ThanhTien` float NOT NULL,
  `Status` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_invoice`
--

INSERT INTO `ntgk_invoice` (`MaHoaDon`, `NgayLap`, `ThanhTien`, `Status`) VALUES
(1, '2022-04-23', 2000000, 1),
(2, '2022-01-21', 2400000, 1),
(3, '2022-02-18', 4200000, 1),
(4, '2022-04-23', 3200000, 1),
(5, '2022-02-18', 2400000, 1),
(6, '2022-02-18', 2200000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_plane`
--

CREATE TABLE `ntgk_plane` (
  `MaMayBay` int NOT NULL,
  `TenMayBay` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Status` tinyint NOT NULL DEFAULT '1',
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_plane`
--

INSERT INTO `ntgk_plane` (`MaMayBay`, `TenMayBay`, `Status`, `img`) VALUES
(1, 'Vietnam Airlines', 1, 'img2.png'),
(2, 'Vietjet Air', 1, 'img.png'),
(3, ' Pacific Airlines', 1, 'img3.png'),
(4, 'Bamboo Airways', 1, 'img4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_planeticket`
--

CREATE TABLE `ntgk_planeticket` (
  `MaVe` int NOT NULL,
  `TinhTrangVe` varchar(50) NOT NULL,
  `SLVe` int NOT NULL,
  `Status` int NOT NULL DEFAULT '1',
  `NgayDat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_planeticket`
--

INSERT INTO `ntgk_planeticket` (`MaVe`, `TinhTrangVe`, `SLVe`, `Status`, `NgayDat`) VALUES
(1, 'Đã hủy', 5, 1, '2022-01-19'),
(2, 'Đã xuất vé', 20, 1, '2022-04-21'),
(3, 'Delay', 9, 1, '2022-01-19'),
(4, 'Đã hủy', 3, 1, '2022-01-19'),
(5, 'Delay', 14, 1, '2022-01-19'),
(6, 'Đã xuất vé', 25, 1, '2022-02-16'),
(7, 'Đã xuất vé', 17, 1, '2022-02-16'),
(8, 'Đã xuất vé', 8, 1, '2022-04-11'),
(9, 'Đã xuất vé', 10, 1, '2022-07-11'),
(10, 'Đã xuất vé', 14, 1, '2022-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_post`
--

CREATE TABLE `ntgk_post` (
  `Id` int NOT NULL,
  `Title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Status` tinyint NOT NULL DEFAULT '1',
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_post`
--

INSERT INTO `ntgk_post` (`Id`, `Title`, `img`, `Status`, `link`) VALUES
(1, 'Bí kíp \'săn\' vé máy bay ưu đãi dịp hè sắp đến', 'news7.jpg', 1, 'index.php?option=tintuc/content'),
(2, 'Săn vé máy bay đi Mỹ ở đâu rẻ và uy tín nhất', 'news6.jpg', 1, 'index.php?option=tintuc/content1'),
(3, 'Lưu ngay bí kíp đặt vé máy bay đi Côn Đảo giá tốt', 'news5.jpg', 1, 'index.php?option=tintuc/content2'),
(4, 'Ba thiên đường tuyệt đẹp ở Philippines đáng để thử 1 lần', 'news1.jpg', 1, 'index.php?option=tintuc/content3');

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_regulations`
--

CREATE TABLE `ntgk_regulations` (
  `Id` int NOT NULL,
  `Title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(50) NOT NULL,
  `Status` tinyint NOT NULL DEFAULT '1',
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_regulations`
--

INSERT INTO `ntgk_regulations` (`Id`, `Title`, `img`, `Status`, `link`) VALUES
(1, 'Coi chừng mất vui vì quá ký hành lý xách tay', 'QD1.jpg', 1, 'index.php?option=quydinh/quydinh'),
(2, 'Bamboo Airways khuyến nghị hành khách về hành lý ký gửi', 'QD2.jpg', 1, 'index.php?option=quydinh/quydinh1'),
(3, 'Bí quyết thảnh thơi khi đi du lịch mùa cao điểm', 'QD3.jpg', 1, 'index.php?option=quydinh/quydinh2'),
(4, 'Hướng dẫn xuất hóa đơn vé máy bay cho đại lý, phòng vé mới nhấtGiá vé máy bay được điều chỉnh phù hợp quy luật thị trường', 'QD5.jpg', 1, 'index.php?option=quydinh/quydinh3');

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_staff`
--

CREATE TABLE `ntgk_staff` (
  `MaNhanVien` int NOT NULL,
  `TenNhanVien` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `SĐT` varchar(100) NOT NULL,
  `Status` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_staff`
--

INSERT INTO `ntgk_staff` (`MaNhanVien`, `TenNhanVien`, `DiaChi`, `SĐT`, `Status`) VALUES
(1, 'Nguyễn Tuấn Bảo', '', '0754816497', 1),
(2, 'Nguyễn Hoàng Long', '', '0694816484', 1),
(3, 'Nguyễn Linh Nhi', '', '0973581647', 1),
(4, 'Trần Bảo Ngọc', '', '0697524896', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_ticketclass`
--

CREATE TABLE `ntgk_ticketclass` (
  `MaHangVe` int NOT NULL,
  `TenHangVe` varchar(100) NOT NULL,
  `Status` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_ticketclass`
--

INSERT INTO `ntgk_ticketclass` (`MaHangVe`, `TenHangVe`, `Status`) VALUES
(1, 'Hạng Phổ Thông', 1),
(2, 'Hạng Thương Gia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_ticketdetails`
--

CREATE TABLE `ntgk_ticketdetails` (
  `MaCTVe` int NOT NULL,
  `TenMayBay` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `GioDi` time NOT NULL,
  `GioDen` time NOT NULL,
  `DiemDi` varchar(255) NOT NULL,
  `DiemDen` varchar(255) NOT NULL,
  `NgayBay` date NOT NULL,
  `HangGhe` varchar(255) NOT NULL,
  `slve` int NOT NULL,
  `GiaTien` float NOT NULL,
  `Status` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_ticketdetails`
--

INSERT INTO `ntgk_ticketdetails` (`MaCTVe`, `TenMayBay`, `img`, `GioDi`, `GioDen`, `DiemDi`, `DiemDen`, `NgayBay`, `HangGhe`, `slve`, `GiaTien`, `Status`) VALUES
(1, 'Vietnam Airlines', 'img2.png', '07:30:00', '09:30:00', 'Hà Nội', 'Phú Quốc', '2022-04-23', 'Phổ Thông', 10, 2000000, 1),
(2, 'Vietjet Ait', 'img.png', '23:00:00', '01:00:00', 'Huế', 'Cần Thơ', '2023-01-05', 'Phổ Thông', 20, 2200000, 1),
(3, ' Pacific Airlines', 'img3.png', '17:50:00', '19:00:00', 'TP.Hồ Chí Minh', 'Hà Nội', '2022-04-21', 'Thương Gia', 5, 4200000, 1),
(4, 'Bamboo Airways', 'img4.jpg', '09:00:00', '12:00:00', 'Cần Thơ', 'Phú Quốc', '2022-01-19', 'Thương Gia', 15, 3200000, 1),
(5, 'Bamboo Airways', 'img4.jpg', '07:00:00', '10:00:00', 'Phú Quốc', 'Côn Đảo', '2022-01-19', 'Thương Gia', 15, 3000000, 1),
(6, 'Vietjet Ait', 'img.png', '23:00:00', '03:00:00', 'Vinh', 'Cà Mau', '2023-01-05', 'Phổ Thông', 20, 3300000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_unitprice`
--

CREATE TABLE `ntgk_unitprice` (
  `MaDonGia` int NOT NULL,
  `USD` int NOT NULL,
  `VND` int NOT NULL,
  `Status` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_unitprice`
--

INSERT INTO `ntgk_unitprice` (`MaDonGia`, `USD`, `VND`, `Status`) VALUES
(1, 94, 2200000, 1),
(2, 102, 2400000, 1),
(3, 179, 4200000, 1),
(4, 136, 3200000, 1),
(5, 102, 2400000, 1),
(6, 94, 2200000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ntgk_user`
--

CREATE TABLE `ntgk_user` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `roles` tinyint DEFAULT '2',
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Status` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ntgk_user`
--

INSERT INTO `ntgk_user` (`id`, `username`, `password`, `email`, `roles`, `phone`, `Status`) VALUES
(1, 'admin', 'admin0511', 'admin@gmail.com', 1, '0379846348', 1),
(2, 'poster', 'poster1806', 'poster@gmail.com', 2, '0314875294', 1),
(3, 'add', 'addname', 'nguyenkiet0049@gmail.com', 2, '0254554525', 1),
(6, 'khachhang', '12345678', 'nguyenkiet0049@gmail.com', 2, '0372548976', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ntgk_bookingticket`
--
ALTER TABLE `ntgk_bookingticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntgk_customer`
--
ALTER TABLE `ntgk_customer`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `ntgk_flight`
--
ALTER TABLE `ntgk_flight`
  ADD PRIMARY KEY (`MaChuyenBay`);

--
-- Indexes for table `ntgk_flightdetails`
--
ALTER TABLE `ntgk_flightdetails`
  ADD PRIMARY KEY (`MaCTChuyenBay`);

--
-- Indexes for table `ntgk_flightroute`
--
ALTER TABLE `ntgk_flightroute`
  ADD PRIMARY KEY (`MaTuyenBay`);

--
-- Indexes for table `ntgk_invoice`
--
ALTER TABLE `ntgk_invoice`
  ADD PRIMARY KEY (`MaHoaDon`);

--
-- Indexes for table `ntgk_plane`
--
ALTER TABLE `ntgk_plane`
  ADD PRIMARY KEY (`MaMayBay`);

--
-- Indexes for table `ntgk_planeticket`
--
ALTER TABLE `ntgk_planeticket`
  ADD PRIMARY KEY (`MaVe`);

--
-- Indexes for table `ntgk_post`
--
ALTER TABLE `ntgk_post`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ntgk_regulations`
--
ALTER TABLE `ntgk_regulations`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ntgk_staff`
--
ALTER TABLE `ntgk_staff`
  ADD PRIMARY KEY (`MaNhanVien`);

--
-- Indexes for table `ntgk_ticketclass`
--
ALTER TABLE `ntgk_ticketclass`
  ADD PRIMARY KEY (`MaHangVe`);

--
-- Indexes for table `ntgk_ticketdetails`
--
ALTER TABLE `ntgk_ticketdetails`
  ADD PRIMARY KEY (`MaCTVe`);

--
-- Indexes for table `ntgk_unitprice`
--
ALTER TABLE `ntgk_unitprice`
  ADD PRIMARY KEY (`MaDonGia`);

--
-- Indexes for table `ntgk_user`
--
ALTER TABLE `ntgk_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ntgk_bookingticket`
--
ALTER TABLE `ntgk_bookingticket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ntgk_ticketdetails`
--
ALTER TABLE `ntgk_ticketdetails`
  MODIFY `MaCTVe` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ntgk_user`
--
ALTER TABLE `ntgk_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
