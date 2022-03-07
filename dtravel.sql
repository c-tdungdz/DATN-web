-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 08:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `id_khachsan` int(11) NOT NULL,
  `ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `id_khachsan`, `ten`, `noidung`) VALUES
(58, 1, 'Dũng', 'sssss'),
(59, 1, 'Dũng', 'aaaaaaaaaaaaa'),
(60, 1, 'Dũng', 'đẹp lắm'),
(61, 3, 'Dũng', 'đẹp'),
(62, 2, 'Dũng', 'asss');

-- --------------------------------------------------------

--
-- Table structure for table `binhluantour`
--

CREATE TABLE `binhluantour` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tour` int(2) NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binhluantour`
--

INSERT INTO `binhluantour` (`id`, `ten`, `id_tour`, `noidung`) VALUES
(40, 'Nguyễn Văn Nam', 2, 'hay lắm'),
(41, 'Dũng', 3, 'abcbbc'),
(42, 'Dũng', 3, 'abcbbcrrewrewr');

-- --------------------------------------------------------

--
-- Table structure for table `camnang`
--

CREATE TABLE `camnang` (
  `id` int(5) NOT NULL,
  `tieude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tacgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(5) NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdatphong`
--

CREATE TABLE `chitietdatphong` (
  `id` int(11) NOT NULL,
  `id_khachsan` int(11) NOT NULL,
  `sophong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietdatphong`
--

INSERT INTO `chitietdatphong` (`id`, `id_khachsan`, `sophong`) VALUES
(1, 1, 4),
(2, 1, 4),
(3, 1, 3),
(4, 1, 1),
(5, 1, 3),
(6, 1, 4),
(7, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chitietdattour`
--

CREATE TABLE `chitietdattour` (
  `id` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `songuoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietdattour`
--

INSERT INTO `chitietdattour` (`id`, `id_tour`, `songuoi`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 4),
(4, 1, 7),
(5, 1, 6),
(6, 1, 5),
(7, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `diemdenphobien`
--

CREATE TABLE `diemdenphobien` (
  `id` int(5) NOT NULL,
  `tendiadiem` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dondat`
--

CREATE TABLE `dondat` (
  `id` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` double NOT NULL,
  `id_ctdtour` int(11) DEFAULT NULL,
  `id_ctdphong` int(11) DEFAULT NULL,
  `daxacnhan` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dondat`
--

INSERT INTO `dondat` (`id`, `id_user`, `ngaydat`, `tongtien`, `id_ctdtour`, `id_ctdphong`, `daxacnhan`) VALUES
(1, 1, '2021-01-12', 5000000, 1, NULL, 'on'),
(2, 1, '2021-01-12', 5000000, 2, NULL, 'on'),
(3, 1, '2021-01-12', 5000000, 3, NULL, 'on'),
(4, 1, '2021-01-12', 5000000, 4, NULL, 'off'),
(5, 1, '2021-01-12', 5000000, 5, NULL, NULL),
(7, 1, '2021-01-12', 5000000, NULL, 1, 'on'),
(8, 1, '2021-01-12', 5000000, NULL, 2, NULL),
(9, 1, '2021-01-12', 5000000, NULL, 3, NULL),
(10, 1, '2021-01-12', 5000000, NULL, 4, NULL),
(11, 1, '2021-01-12', 5000000, NULL, 5, NULL),
(12, 1, '2021-01-12', 5000000, NULL, 6, NULL),
(13, 1, '2021-01-12', 5000000, NULL, 7, NULL),
(14, 1, '2021-01-12', 5000000, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `khachsan`
--

CREATE TABLE `khachsan` (
  `id` int(5) NOT NULL,
  `tenkhachsan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(10) NOT NULL,
  `gioithieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhgia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachsan`
--

INSERT INTO `khachsan` (`id`, `tenkhachsan`, `hinhanh`, `gia`, `gioithieu`, `danhgia`, `diachi`, `sdt`) VALUES
(1, 'Vinpearl Resort & Spa Đà Nẵng', 'vinpear.png', 5000000, 'Vinpearl Resort & Spa Đà Nẵng là quần thể khách sạn- ẩm thực- mua sắm- sự kiện- giải trí công nghệ cao đa tiện ích được thiết kế để nâng tầm trải nghiệm cho du khách. Được ví như một ốc đảo ngập tràn cảm hứng, VinOasis – một điểm đến đáp ứng vạn nhu cầu – với quy mô 1,378 phòng nghỉ tiện nghi bậc nhất, thế giới ẩm thực quốc tế phong phú và các hoạt động giải trí đỉnh cao, sôi động ngày đêm.', 'Khách sạn 5 sao hạng sang', 'Quận Ngũ Hành Sơn, Đà Nẵng', 83966888),
(2, 'Victory Sapa Resort', 'victory_sapa_resort.png', 6000000, 'Victory Sapa Resort Đà Nẵng gồm 20 phòng nghỉ. Hãy trải nghiệm qua thiết bị phòng chất lượng cao cấp, bao gồm góc ngồi nghỉ, tủ đồ ăn uống nhẹ, ban công, truy cập internet không dây, vòi hoa sen, giúp cho bạn phục hồi sức khỏe sau một ngày dài. Khách sạn mang lại phương tiện giải trí đa dạng, bao gồm vườn. Khách Sạn Chu Đà Nẵng là một sự lựa chọn thông minh cho du khách khi đến Đà Nẵng, nơi mang lại cho họ một kì nghỉ thư giãn và thoải mái.', '5', 'Xuân Viên, TT. Sa Pa, Street, Lào Cai', 214387522),
(3, 'Vinpear & Resort Phú Quốc', 'vinpear-resort-gold-phuquoc.png', 9000000, 'VinOasis là quần thể khách sạn- ẩm thực- mua sắm- sự kiện- giải trí công nghệ cao đa tiện ích được thiết kế để nâng tầm trải nghiệm cho du khách. Được ví như một ốc đảo ngập tràn cảm hứng, VinOasis – một điểm đến đáp ứng vạn nhu cầu – với quy mô 1,378 phòng nghỉ tiện nghi bậc nhất, thế giới ẩm thực quốc tế phong phú và các hoạt động giải trí đỉnh cao, sôi động ngày đêm.', '5', 'Trần Duy Hưng - Phú Quốc', 321122222),
(4, 'Vinpearl Condotel Đà Nẵng', 'vinpearl_condotel_riverfront_da_nang.webp', 4400000, 'Vinpearl Condotel Riverfront Khiêm tốn nằm trong trung tâm của Bãi biển Bắc Mỹ An, là điểm lý tưởng cho du khách muốn khám phá Đà Nẵng. Chỉ cách trung tâm thành phố khoảng 4.00 Km và bạn có thể đến sân bay trong vòng 10 phút. Một số nơi cho bạn khám phá, Bãi biển Bắc Mỹ An, Bảo tàng Điêu khắc Chăm, Bảo tàng Chăm là một trong những điểm du lịch thích hợp cho khách du lịch.\r\n\r\nKhácb sạn mang lại dịch vụ hoàn hảo, làm hài lòng cả những vị khách khó tính nhất với những tiện nghi sang trọng tuyệt vời. Khách sạn cung cấp dịch vụ du lịch, quán cà phê, nhà hàng, cho thuê xe đạp, dịch vụ Internet để đảm bảo khách của họ được thoải mái nhất. \r\n\r\n', '5', '69, Nguyễn Văn Linh - Đà Nẵng', 321122222);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `image`, `link`) VALUES
(1, 'slider', 'slider', 'slider.jpg'),
(2, 'slider', 'slider', 'slider2.jpg'),
(3, 'slider', 'slider', 'slider3.jpg'),
(4, 'slider4', 'slider4', 'slider4.jpg'),
(5, 'slider5', 'slider5', 'slider5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(5) NOT NULL,
  `tentour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioithieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(10) NOT NULL,
  `ngaydi` date NOT NULL,
  `noikhoihanh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socho` int(2) NOT NULL,
  `songaydi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `tentour`, `gioithieu`, `hinhanh`, `gia`, `ngaydi`, `noikhoihanh`, `socho`, `songaydi`) VALUES
(1, 'Du lịch tết Nguyên Đán', 'Miền Bắc là nơi khởi nguồn văn hóa ngàn năm văn hiến của dân tộc Việt Nam. Du lịch miền Bắc du khách sẽ được khám phá những thắng cảnh thiên nhiên đẹp mê hồn cùng nhiều công trình kiến trúc ấn tượng được tạo nên bởi bàn tay khéo léo của con người. Điểm du lịch Tràng An là nơi du khách sẽ được khám phá một trong những địa điểm du lịch đẹp nhất Ninh Bình. Tạo hóa đã vô cùng ưu ái ban tặng cho nơi đây một cảnh quan thiên nhiên tuyệt đẹp với các dãy núi uốn lượn bao quanh các dòng Suối nước tự nhiên, tạo nên vô vàn các hang động kỳ ảo, huyền bí....', 'du-lich-tet-nguyen-dan.jpg', 5000000, '2021-08-22', 'Đà Nẵng', 20, 3),
(2, 'Sapa - Yên Tử - Hạ Long', 'Du lịch Đông Bắc - Không một bức tranh nào có thể lột tả hết được vẻ đẹp của núi rừng Hà Giang, một vẻ đẹp được kết hợp hoàn mĩ bởi sắc hoa và tình người. Đến với tour du lịch đông bắc, là du khách đến với mảnh đất Hà Giang, mảnh đất mang một nét đẹp đằm thắm, tinh khiết như một cô sơn nữ với những con đường uốn lượn quanh co dài bất tận, với cột cờ Lũng Cú đứng sừng sững hiên ngang cùng lá cờ Tổ quốc tung bay phấp phới trên rải cao nguyên đá hùng vĩ. Sự hòa hợp giữa thiên nhiên, con người và muôn màu văn hoá của các dân tộc khiến mỗi du khách khi đặt chân tới sẽ như được chìm đắm trong mê cung mà thỏa lòng khám phá.', 'hanoi-sapa-halong.jpg', 7000000, '2020-12-31', 'Đà Nẵng', 20, 3),
(3, 'Hà Nội - Sapa - Yên Tử', 'Du lịch Đông Bắc 6 ngày 5 đêm của Du Lịch Việt, du khách sẽ được khám phá vẻ đẹp kỳ ảo của thác Bản Giốc, nơi những khối nước lớn đổ xuống qua nhiều bậc đá vôi tạo nên một khung cảnh thiên nhiên kỳ vĩ. Dưới chân thác Bản Giốc là mặt sông rộng, phẳng như gương, hai bên bờ là những thảm cỏ, vạt rừng xanh ngắt… đến với động Ngườm Ngao, một là thế giới của nhũ đá với nhiều tuyệt tác của thiên nhiên. Nhiệt độ trong động luôn tạo cảm giác dễ chịu, mùa hè mát mẻ còn mùa đông ấm áp. Theo thời gian, nhũ đá và măng đá nơi đây đã tạo nên khung cảnh sinh động, kì thú làm say lòng tất cả những ai một lần đặt chân tới đây.', 'yentu.jpg', 4000000, '2020-12-25', 'Hà Nội', 10, 4),
(4, 'Bản Cát- Fansipan', 'Du lịch Miền Bắc vẫn luôn là một lựa chọn ưu tiên dành cho các khách du lịch muốn trải nghiệm không khí núi rừng tại miền Bắc. Phong cảnh hữu tình, thiên nhiên và con người như hòa chung vào làm một chắc chắn sẽ là hành trình lý tưởng phải đến trong dịp đầu năm. Hãy cùng Du Lịch Việt tham khảo những điểm du lịch \"nhất định\" phải đi trong tour du lịch miền Bắc này với hành trình Hà Nội - Lào Cai - Sapa - Bản Cát Cát - chinh phục đỉnh Fansipan du khách nhé.', 'fansipan.jpg', 3900000, '2020-12-25', 'Đà Nẵng', 15, 4),
(5, 'Mù Cang Chải - Sapa', 'Du lịch Đông Bắc 6 ngày 5 đêm của Du Lịch Việt, du khách sẽ được khám phá vẻ đẹp kỳ ảo của thác Bản Giốc, nơi những khối nước lớn đổ xuống qua nhiều bậc đá vôi tạo nên một khung cảnh thiên nhiên kỳ vĩ. Dưới chân thác Bản Giốc là mặt sông rộng, phẳng như gương, hai bên bờ là những thảm cỏ, vạt rừng xanh ngắt… đến với động Ngườm Ngao, một là thế giới của nhũ đá với nhiều tuyệt tác của thiên nhiên. Nhiệt độ trong động luôn tạo cảm giác dễ chịu, mùa hè mát mẻ còn mùa đông ấm áp. Theo thời gian, nhũ đá và măng đá nơi đây đã tạo nên khung cảnh sinh động, kì thú làm say lòng tất cả những ai một lần đặt chân tới đây.', 'mucangchai.jpg', 8700000, '2020-12-25', 'Hà Nội', 20, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `username`, `email`, `sdt`, `diachi`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$J/fgzNnEHoIdN8m2gLRxGOt7Crn2nmOW7drUEhqv8uM3yRqUpMnaK', 'Dũng', 'db_task7@gmail.com', 2222222, 'United States', '2020-12-28 16:49:40', '2020-12-28 16:49:40'),
(4, 'dung', '$2y$10$pxrmSL1f5qJA8wBTJo5uquc1d4Odv1TF0QTvZgsKRIbK1YdXjvnZa', 'Cao Tiến Dũng', 'ctd@gmail.com', 931355347, 'Đà Nẵng', '2020-12-31 12:23:22', '2020-12-31 12:23:22'),
(9, 'dung123', '$2y$10$QS/AiMmUU.G6QNvoHRQSeuOlOSN/GKwVjffDpY11qFEYUBb.44Qw.', 'Nguyễn Văn Nam', 'anccccassafaf@gmail.com', 931355347, 'Đà Nẵng', '2021-01-11 13:46:22', '2021-01-11 13:46:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khachsan` (`id_khachsan`);

--
-- Indexes for table `binhluantour`
--
ALTER TABLE `binhluantour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour` (`id_tour`);

--
-- Indexes for table `camnang`
--
ALTER TABLE `camnang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietdatphong`
--
ALTER TABLE `chitietdatphong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khachsan` (`id_khachsan`);

--
-- Indexes for table `chitietdattour`
--
ALTER TABLE `chitietdattour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour` (`id_tour`);

--
-- Indexes for table `diemdenphobien`
--
ALTER TABLE `diemdenphobien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dondat`
--
ALTER TABLE `dondat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ctdtour` (`id_ctdtour`),
  ADD KEY `id_ctdphong` (`id_ctdphong`);

--
-- Indexes for table `khachsan`
--
ALTER TABLE `khachsan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_password_unique` (`password`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `binhluantour`
--
ALTER TABLE `binhluantour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `camnang`
--
ALTER TABLE `camnang`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietdatphong`
--
ALTER TABLE `chitietdatphong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chitietdattour`
--
ALTER TABLE `chitietdattour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `diemdenphobien`
--
ALTER TABLE `diemdenphobien`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dondat`
--
ALTER TABLE `dondat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `khachsan`
--
ALTER TABLE `khachsan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_khachsan`) REFERENCES `khachsan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `binhluantour`
--
ALTER TABLE `binhluantour`
  ADD CONSTRAINT `binhluantour_ibfk_1` FOREIGN KEY (`id_tour`) REFERENCES `tour` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietdatphong`
--
ALTER TABLE `chitietdatphong`
  ADD CONSTRAINT `chitietdatphong_ibfk_1` FOREIGN KEY (`id_khachsan`) REFERENCES `khachsan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietdattour`
--
ALTER TABLE `chitietdattour`
  ADD CONSTRAINT `chitietdattour_ibfk_1` FOREIGN KEY (`id_tour`) REFERENCES `tour` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dondat`
--
ALTER TABLE `dondat`
  ADD CONSTRAINT `dondat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `dondat_ibfk_2` FOREIGN KEY (`id_ctdtour`) REFERENCES `chitietdattour` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dondat_ibfk_3` FOREIGN KEY (`id_ctdphong`) REFERENCES `chitietdatphong` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
