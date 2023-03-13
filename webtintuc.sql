-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 06:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtintuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `level`) VALUES
(1, 'khach', 'khach@gmail.com', '123', 0),
(2, 'admin', 'admin@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ban_tin`
--

CREATE TABLE `ban_tin` (
  `id` int(11) NOT NULL,
  `tieu_de` text NOT NULL,
  `noi_dung` text NOT NULL,
  `anh` text NOT NULL,
  `id_tac_gia` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 0,
  `thoi_gian_tao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ban_tin`
--

INSERT INTO `ban_tin` (`id`, `tieu_de`, `noi_dung`, `anh`, `id_tac_gia`, `trang_thai`, `thoi_gian_tao`) VALUES
(1, 'Sự trùng hợp kỳ lạ tàu có 16 người mất liên lạc với vụ chìm tàu năm 2014 ở Bình Thuận', 'Ngôi sao giành 5 “Quả bóng Vàng” thậm chí đã không đến Thái Lan cùng MU đấu Liverpool và hiện cũng chẳng góp mặt cùng đội bóng chủ quản bay tới Australia chuẩn bị đấu Melbourne Victory chiều mai (15/7), khi viện cớ bận việc gia đình. Giữa bối cảnh đó, báo chí quê nhà vừa đưa ra một thông tin nóng bỏng gây sốc liên quan đến Ronaldo và MU.  Theo hãng thông tấn CNN Bồ Đào Nha, một CLB giàu có ở Saudi Arabia (giấu tên) sẵn sàng chi ra 30 triệu euro cho MU để thuyết phục đội chủ sân Old Trafford bán CR7. Mức giá này cao gấp rưỡi số tiền 20 triệu euro mà “Quỷ đỏ” đồng ý chi ra để đưa Ronaldo từ Juventus trở lại “Nhà hát của những giấc mơ” hè năm ngoái.  Càng sốc hơn nữa khi theo CNN Bồ Đào Nha, nếu Ronaldo đồng ý sang Saudi Arabia chơi bóng theo bản hợp đồng 2 năm, anh có thể nhận mức lương siêu “khủng” 105 triệu bảng (hơn 124 triệu euro) mỗi năm. Ngôi sao sinh ra tại quần đảo Madeira có thể “vớ bẫm” đến 210 triệu bảng (gần 250 triệu euro) từ “đại gia” Tây Á nói trên.', '1678553251.jpg', 4, 1, '2023-03-13 04:39:32'),
(2, 'Bộ trưởng GTVT', 'Bộ trưởng Bộ GTVT yêu cầu Cục Đăng kiểm Việt Nam (Bộ GTVT), trước mắt tiếp tục huy động tối đa lực lượng đăng kiểm viên, kể cả đăng kiểm viên đã bị khởi tố nhưng tại ngoại, đăng kiểm viên đã nghỉ hưu còn sức khỏe.', 'https://images2.thanhnien.vn/thumb_w/640/528068263637045248/2023/3/11/z41730898951612cfb1584e9d8503747bcc7dbe0fb1ef0-1678509491290710868584.jpg', 4, 0, '2023-03-12 16:05:23'),
(3, 'Frenkie de Jong', 'cầu thủ bóng đá chuyên nghiệp người Hà Lan đang chơi ở vị trí tiền vệ cho câu lạc bộ Barcelona tại La Liga', '1678636265.jpeg', 4, 1, '2023-03-12 16:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ten`, `mat_khau`) VALUES
(1, 'Huyền', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tac_gia`
--

CREATE TABLE `tac_gia` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `mo_ta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tac_gia`
--

INSERT INTO `tac_gia` (`id`, `ten`, `mo_ta`) VALUES
(4, 'Lê Lựu', 'là một nhà văn Việt Nam, thành viên của Hội nhà văn Việt Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ban_tin`
--
ALTER TABLE `ban_tin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tac_gia` (`id_tac_gia`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tac_gia`
--
ALTER TABLE `tac_gia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ban_tin`
--
ALTER TABLE `ban_tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tac_gia`
--
ALTER TABLE `tac_gia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ban_tin`
--
ALTER TABLE `ban_tin`
  ADD CONSTRAINT `ban_tin_ibfk_1` FOREIGN KEY (`id_tac_gia`) REFERENCES `tac_gia` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
