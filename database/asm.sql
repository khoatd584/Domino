-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 12, 2022 lúc 11:27 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_ingredient` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_image`, `news_ingredient`, `news_price`, `news_quantity`) VALUES
(24, 'Pizza Bò & Tôm Nướng Kiểu Mỹ - Surf & Turf', 'sanpham1.png', 'Xốt Cà Chua, Xốt Phô Mai, Phô Mai Mozzarella, Tôm, Thịt Bò Mexico, Cà Chua, Hành Tây', '99,000', '100'),
(25, 'Pizza Bánh Xèo Nhật - Okonomiyaki', 'sanpham2.png', 'Xốt Mayonnaise, Xốt Teriyaki, Phô Mai Mozzarella, Bạch Tuộc, Tôm, Bắp Cải, Bột Rong Biển, Vẩy Cá Ngừ Bào', '99,000', '100'),
(26, 'Pizza Thập Cẩm Thượng Hạng - Extravaganza', 'sanpham3.png', 'Xốt Cà Chua, Phô Mai Mozzarella, Xúc Xích Pepperoni, Thịt Dăm Bông, Xúc Xich Ý, Thịt Bò Viên, Ớt Chuông Xanh, Nấm Mỡ, Hành Tây, Ô-liu', '99,000', '100'),
(27, 'Pizza Hải Sản Xốt Mayonnaise - Ocean Mania', 'sanpham4.png', 'Xốt Cà Chua, Phô Mai Mozzarella, Tôm, Mực, Thanh Cua, Hành Tây', '99,000', '100'),
(28, 'Pizza Hải Sản Nhiệt Đới  Xốt Tiêu - Pizzamin Sea', 'sanpham5.png', 'Xốt tiêu đen, Phô Mai Mozzarella, Phô Mai Cheddar, Thơm, Hành Tây, Tôm, Mực', '99,000', '100'),
(29, 'Half Half', 'sanpham6.png', 'Pizza là sự kết hợp topping của pizza Ocean Mania và pizza Cheesy Chicken Bacon', '99,000', '100'),
(30, 'Pizza 5 Loại Thịt Thượng Hạng - Meat Lovers', 'sanpham7.png', 'Xốt Cà Chua, Phô Mai Mozzarella, Xúc Xích Pepperoni, Thịt Dăm Bông, Xúc Xich Ý, Thịt Bò Viên, Thịt Heo Muối', '99,000', '100'),
(31, 'Pizza Xúc Xích Ý Truyền Thống - Pepperoni Feast', 'sanpham8.png', 'Xốt Cà Chua, Phô Mai Mozzarella, Xúc Xích Pepperoni', '99,000', '100'),
(32, 'Pizza Hải Sản Xốt Cà Chua - Seafood Delight', 'sanpham9.png', 'Xốt Cà Chua, Phô Mai Mozzarella, Tôm, Mực, Thanh Cua, Hành Tây', '99,000', '100'),
(33, 'Pizza Trứng Cút Xốt Phô Mai - Kid Mania ', 'sanpham10.png', 'Xốt Phô Mai, Phô Mai Mozzarella, Thịt Heo Muối, Bắp, Trứng Cút', '79,000', '100'),
(36, 'Pizza Gà Xốt Tương Kiểu Nhật - Teriyaki Chicken', 'sanpham12.png', 'Xốt Teriyaki, Phô Mai Mozzarella, Mayonnaise, Gà, Nấm Mỡ, Hành Tây', '79,000', '100'),
(37, 'Pizza Dăm Bông Dứa Kiểu Hawaii - Hawaiian', 'sanpham13.png', 'Xốt Cà Chua, Phô Mai Mozzarella, Thịt Dăm Bông, Thơm', '79,000', '100'),
(38, 'Pizza Phô Mai Hảo Hạng - Cheese Mania', 'sanpham14.png', 'Xốt Cà Chua, phô Mai Mozzarella', '79,000', '100'),
(39, 'Pizza Gà Phô Mai Thịt Heo Xông Khói - Cheesy Chicken Bacon', 'sanpham15.png', 'Xốt Phô Mai, Thịt Gà, Thịt Heo Muối, Phô Mai Mozzarella, Cà Chua', '79,000', '100'),
(40, 'Pizza Bò Mê-Hi-Cô Thượng Hạng - Prime Beef', 'sanpham16.png', 'Xốt phô mai, Xốt cà chua, bò viên kiểu Ý, thịt bò Mexico, hành tây, cà chua, phô mai Mozzarella', '249,000', '100'),
(41, 'Pizza Hải Sản Kiểu Singapore - Singapore Style Seafood', 'sanpham17.png', 'Xốt Singapore Cay, Phô Mai Mozzarella, Tôm, Thịt Cua, Hành Tây', '249,000', '100'),
(42, 'Pizza 4 Vị - Pizza Big 4', 'sanpham18.png', 'Pizza là sự kết hợp của 4 loại pizza HAWAIIAN – OCEAN MANIA – TERIYAKI CHICKEN – SURF & TURF', '329,000', '100');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Tong Dang Khoa', 'khoatdpc04409@fpt.edu.vn', '$2y$10$0HwhkT3cRT9T8Bo46XMwAO0d9nzvLd0AwFWO5zjv3I2dP/1ZhP67K');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_admin`
--

CREATE TABLE `users_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users_admin`
--

INSERT INTO `users_admin` (`id`, `username`, `password`) VALUES
(1, 'khoatdpc04409', '12345678');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `users_admin`
--
ALTER TABLE `users_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users_admin`
--
ALTER TABLE `users_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
