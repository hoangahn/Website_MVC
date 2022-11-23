-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2022 lúc 04:11 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website_mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(150) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'Tuấn Cảnh', 'admin1@gmail.com', 'admin1', 'e10adc3949ba59abbe56e057f20f883e', 0),
(2, 'Hoàng Anh', 'admin@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(1, 'ASUS'),
(2, 'MSI'),
(3, 'LENOVO'),
(4, 'APPLE'),
(154, 'INTEL'),
(155, 'AMD');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `productId`, `sId`, `productName`, `price`, `quantity`, `image`) VALUES
(45, 70, '4n8fef822jshngh8qlegj1697a', 'Laptop Asus Z5', '888000', 1, '35ba5be04b.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(3, 'Laptop'),
(20, 'Màn Hình'),
(21, 'Card Màn Hình'),
(22, 'RAM'),
(23, 'Ổ Cứng'),
(24, 'Nguồn'),
(25, 'Mainboard'),
(26, 'CPU');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zipcode` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zipcode`, `phone`, `email`, `password`) VALUES
(6, 'Cao Hoàng Anh', 'kế cây xăng Thúy Liễu', 'Huyện Châu Thành', 'hcm', '123456', '0585537758', 'caoanh5539@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date_order` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `customer_id`, `quantity`, `price`, `image`, `status`, `date_order`) VALUES
(60, 70, 'Laptop Asus Z5', 6, 3, '2664000', '35ba5be04b.webp', 1, '2022-11-22 17:25:20'),
(61, 70, 'Laptop Asus Z5', 6, 1, '888000', '35ba5be04b.webp', 1, '2022-11-22 22:56:40'),
(62, 66, 'RAM U4', 6, 1, '888000', '0b9de95ed8.webp', 1, '2022-11-23 00:39:45'),
(63, 59, 'Ổ Cứng R5', 6, 1, '888000', '611d609355.webp', 1, '2022-11-23 00:39:45'),
(64, 70, 'Laptop Asus Z5', 6, 1, '888000', '35ba5be04b.webp', 1, '2022-11-23 00:42:49'),
(65, 59, 'Ổ Cứng R5', 6, 1, '888000', '611d609355.webp', 1, '2022-11-23 00:42:49'),
(66, 27, 'Laptop Asus Z3', 6, 1, '999000', 'b2e4fca9d7.webp', 1, '2022-11-23 01:01:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` tinytext NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `productQuantity` varchar(50) NOT NULL,
  `product_soldout` varchar(50) NOT NULL DEFAULT '0',
  `product_remain` varchar(50) NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `product_code`, `productQuantity`, `product_soldout`, `product_remain`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`) VALUES
(25, 'Laptop Asus Z1', '', '', '0', '', 3, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', '28d835447d.webp'),
(26, 'Laptop Asus Z2', '', '', '0', '', 3, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 1, '999000', '1a203e2ec1.webp'),
(27, 'Laptop Asus Z3', '', '', '0', '', 3, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 1, '999000', 'b2e4fca9d7.webp'),
(28, 'IMAC M1', '', '', '0', '', 3, 4, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', 'eb3e8a8e53.jpg'),
(29, 'Laptop Lenovo', '', '', '0', '', 3, 3, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', '278fb08691.webp'),
(30, 'Laptop Lenovo L2', '', '', '0', '', 3, 3, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 1, '999000', '8a96718285.webp'),
(31, 'Laptop Lenovo L3', '', '', '0', '', 3, 3, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 1, '999000', '75ac7e80f2.webp'),
(33, 'Mac Book M2', '', '', '0', '', 3, 4, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 1, '888000', '0e2569de8a.png'),
(34, 'Laptop MSI L1', '', '', '0', '', 3, 2, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 1, '199000', '4069379673.png'),
(35, 'Laptop MSI L2', '', '', '0', '', 3, 2, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 1, '999000', '97df23c6f8.png'),
(36, 'Laptop MSI L3', '', '', '0', '', 3, 2, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', 'cfca72b3a6.png'),
(37, 'Card Asus 1', '', '', '0', '', 21, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 1, '999000', 'bc0f94e980.png'),
(38, 'Card Asus 2', '', '', '0', '', 21, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 1, '999000', 'faac0ac49f.png'),
(39, 'Card Msi 1', '', '', '0', '', 21, 2, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 1, '999000', '6c6ae4d60f.webp'),
(40, 'Card Msi 2', '', '', '0', '', 21, 2, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 1, '999000', 'bed0731e4f.webp'),
(41, 'CPU Intel', '', '', '0', '', 26, 154, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', 'a61cc9cd37.png'),
(42, 'CPU Intel core i5', '', '', '0', '', 26, 154, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', 'c641783039.png'),
(43, 'CPU Intel core i7', '', '', '0', '', 26, 154, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', '47c6b731cc.png'),
(44, 'CPU Intel core i9', '', '', '0', '', 26, 154, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', '83fbe2a795.png'),
(45, 'Main Asus A1', '', '', '0', '', 25, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', '6b939c5bda.png'),
(46, 'Main Asus A2', '', '', '0', '', 25, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', 'dfb19f6ced.png'),
(47, 'Màn Hình Laptop Asus A1', '', '', '0', '', 20, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', 'da80a878ef.png'),
(48, 'Màn Hình Laptop Lenovo', '', '', '0', '', 20, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', 'ecd35e36a7.png'),
(49, 'Màn Hình Laptop MSI M1', '', '', '0', '', 20, 2, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', '952bc20a1d.png'),
(50, 'Màn Hình Laptop MSI M2', '', '', '0', '', 20, 2, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', 'a87a3520c9.png'),
(51, 'Nguồn Asus', '', '', '0', '', 24, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', '80bbe3c2bc.webp'),
(52, 'Nguồn MSI', '', '', '0', '', 24, 2, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', 'ab41fe3874.webp'),
(53, 'Nguồn Lenovo', '', '', '0', '', 24, 3, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', 'dab5ac4681.webp'),
(54, 'Nguồn MSI J2', '', '', '0', '', 24, 2, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', '21ecc39866.webp'),
(55, 'Nguồn Asus L3', '', '', '0', '', 24, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', '3546ca3126.webp'),
(56, 'Ô Cứng SSD', '', '', '0', '', 23, 154, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', '2ade5c0910.webp'),
(57, 'Ổ Cứng H2', '', '', '0', '', 23, 155, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '999000', '16b9c0c9ef.webp'),
(58, 'Ô Cứng R4', '', '', '0', '', 23, 3, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '888000', '1f8ed52480.webp'),
(59, 'Ổ Cứng R5', '', '', '0', '', 23, 2, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '888000', '611d609355.webp'),
(60, 'Ổ Cứng C3', '', '', '0', '', 23, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '888000', '5ed0065103.webp'),
(61, 'CPU RYZEN 3', '', '', '0', '', 26, 155, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '888000', 'a992045200.webp'),
(62, 'CPU RYZEN 5', '', '', '0', '', 26, 155, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '888000', '7349dc1379.webp'),
(63, 'CPU RYZEN 7', '', '', '0', '', 26, 155, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '888000', '8133f87b6d.webp'),
(64, 'CPU RYZEN 9', '', '', '0', '', 26, 155, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '888000', 'bebc8e3052.webp'),
(65, 'RAM L1', '', '', '0', '', 22, 154, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '888000', '2534f1074e.webp'),
(66, 'RAM U4', '', '', '0', '', 22, 3, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '888000', '0b9de95ed8.webp'),
(67, 'RAM E3', '', '', '0', '', 22, 0, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '888000', 'b14242186b.webp'),
(68, 'RAM T4', '', '', '0', '', 22, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '888000', '06cdf3a98b.webp'),
(69, 'RAM Y6', '', '', '0', '', 0, 0, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '888000', '0b0182d0f5.webp'),
(70, 'Laptop Asus Z5', '', '', '0', '', 3, 1, '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>', 0, '888000', '35ba5be04b.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `sliderId` int(11) NOT NULL,
  `sliderName` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`sliderId`, `sliderName`, `slider_image`, `type`) VALUES
(15, 'slider1', '986cb50cae.png', 1),
(16, 'slider2', '821fb454b1.jpg', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`sliderId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `sliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
