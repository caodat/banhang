-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2018 lúc 05:02 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `category_parent` int(11) DEFAULT NULL,
  `category_description` text,
  `category_in_menu` int(11) NOT NULL,
  `category_in_home` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_parent`, `category_description`, `category_in_menu`, `category_in_home`) VALUES
(2, 'Giầy thể thao', 4, 'Đây là mô tả giầy thể thao', 0, 0),
(3, 'Giầy da cao cấp', 4, 'Đây là giầy da cao cấp', 0, 0),
(4, 'Giầy cao cấp', 2, 'sdfs', 0, 0),
(5, 'Găng Tay Tattoo Baby', 4, 'Đây là mô tả', 0, 0),
(6, 'DÂY NỊT - THẮT LƯNG NAM', 0, '', 0, 0),
(7, 'Khăn Đa Năng', NULL, 'đsf', 0, 0),
(8, 'Bình Đầu Lâu - Ly Đầu Lâu', 0, '', 0, 0),
(9, 'Mũ - Nón', 0, '', 0, 0),
(10, 'Bóp Ví Nam', 0, '', 0, 0),
(11, 'Ví Card - Móc Khóa', 0, '', 0, 0),
(12, 'Balo - Túi Xách', 0, '', 0, 0),
(13, 'Túi Đeo Chéo', 12, '', 0, 0),
(14, 'Balo', 12, '', 0, 0),
(15, 'Găng Tay Chống Nắng Hàn Quốc', 0, '', 0, 0),
(16, 'Găng tay hình xăm', 0, '', 0, 0),
(17, 'Găng Tay Xe Máy', 0, '', 0, 0),
(18, 'Hình Xăm Dán', 0, '', 0, 0),
(19, 'Hình Xăm Dán Lớn', 18, '', 0, 0),
(20, 'Hình Xăm Dán Nhỏ', 18, '', 0, 0),
(21, 'GIÀY BOOT NAM', 0, '', 1, 1),
(22, 'GIÀY NAM', 0, '', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` float DEFAULT NULL,
  `product_description` mediumtext,
  `product_thumbnail` varchar(255) DEFAULT NULL,
  `product_gallery` mediumtext,
  `category_id` varchar(255) DEFAULT NULL,
  `product_content` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_description`, `product_thumbnail`, `product_gallery`, `category_id`, `product_content`) VALUES
(5, 'Giày Boot Nam GN139', 370, '<p>Chi Tiết Sản Phẩm: Loại Gi&agrave;y: đi chơi, dạo phố..... Bảo h&agrave;nh keo 12 th&aacute;ng Giao H&agrave;ng Tận Nơi To&agrave;n Quốc Nhận H&agrave;ng Trả Tiền Sản phẩm giống h&igrave;nh 100% C&oacute; thể...</p>', '8ace1790457e2f151d75974de9540aa4.jpg', 'b8ed0dea63cf3a4bc99d12feb4420324.jpg,8ae57478364270950c248959f30e9cb5.jpg,642bc78a8856a29cdc97114eaff5a4d4.jpg,', ',21,22,', '<p><span style=\"font-size: 18px;\"><em><strong>Chi Tiết Sản Phẩm:</strong></em>&nbsp;<br /> Loại Gi&agrave;y:&nbsp;đi chơi, dạo phố.....<br /> <strong>Bảo h&agrave;nh keo 12 th&aacute;ng</strong><br /> <strong>Giao H&agrave;ng Tận Nơi To&agrave;n Quốc&nbsp;Nhận H&agrave;ng Trả Tiền </strong><br /> Sản phẩm giống h&igrave;nh 100%<br /> C&oacute; thể đến shop xem gi&agrave;y v&agrave; mua trực tiếp tại:&nbsp;<br /> <strong>163/29 Th&agrave;nh Th&aacute;i P14 Q10 HCM</strong><br /> Hotline: <em><strong>0888.28.38.48 - 0868.28.38.48</strong></em></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 18px;\"><em><strong>Đặt H&agrave;ng Nhanh:</strong></em><br /> C&aacute;c bạn c&oacute; thể gọi trực tiệp hoặc&nbsp;nhắn tin theo c&uacute; ph&aacute;p sau:<br /> <span style=\"color: #0000ff;\"><strong>M&atilde; Sản Phẩm (Size) + Địa Chỉ + Họ T&ecirc;n</strong></span><br /> Gửi&nbsp;<em><strong><span style=\"color: #ff0000;\">0888.28.38.48 - 0868.28.38.48</span><br /> Shop sẽ li&ecirc;n hệ lại với bạn trong thời gian sớm nhất</strong></em></span></p>'),
(6, 'Giày Boot Nam GN140', 380, '<p>Chi Tiết Sản Phẩm: Loại Gi&agrave;y: đi chơi, dạo phố..... Bảo h&agrave;nh keo 12 th&aacute;ng Giao H&agrave;ng Tận Nơi To&agrave;n Quốc Nhận H&agrave;ng Trả Tiền Sản phẩm giống h&igrave;nh 100% C&oacute; thể...</p>', '5db67bfb0c189c0058c088d81c48a356.jpg', 'b81e93eafa06fdaa137d0e8aefa2a772.jpg,11795ce7848f7e70b7d8f051c24e3bb7.jpg,1718df8d5caec29477ea370540f42140.jpg,', ',21,', '<p><span style=\"font-size: 18px;\"><em><strong>Chi Tiết Sản Phẩm:</strong></em>&nbsp;<br /> Loại Gi&agrave;y:&nbsp;đi chơi, dạo phố.....<br /> <strong>Bảo h&agrave;nh keo 12 th&aacute;ng</strong><br /> <strong>Giao H&agrave;ng Tận Nơi To&agrave;n Quốc&nbsp;Nhận H&agrave;ng Trả Tiền </strong><br /> Sản phẩm giống h&igrave;nh 100%<br /> C&oacute; thể đến shop xem gi&agrave;y v&agrave; mua trực tiếp tại:&nbsp;<br /> <strong>163/29 Th&agrave;nh Th&aacute;i P14 Q10 HCM</strong><br /> Hotline: <em><strong>0888.28.38.48 - 0868.28.38.48</strong></em></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 18px;\"><em><strong>Đặt H&agrave;ng Nhanh:</strong></em><br /> C&aacute;c bạn c&oacute; thể gọi trực tiệp hoặc&nbsp;nhắn tin theo c&uacute; ph&aacute;p sau:<br /> <span style=\"color: #0000ff;\"><strong>M&atilde; Sản Phẩm (Size) + Địa Chỉ + Họ T&ecirc;n</strong></span><br /> Gửi&nbsp;<em><strong><span style=\"color: #ff0000;\">0888.28.38.48 - 0868.28.38.48</span><br /> Shop sẽ li&ecirc;n hệ lại với bạn trong thời gian sớm nhất</strong></em></span></p>'),
(7, 'Giày Boot Nam GN139', 370, '<p>Chi Tiết Sản Phẩm: Loại Gi&agrave;y: đi chơi, dạo phố..... Bảo h&agrave;nh keo 12 th&aacute;ng Giao H&agrave;ng Tận Nơi To&agrave;n Quốc Nhận H&agrave;ng Trả Tiền Sản phẩm giống h&igrave;nh 100% C&oacute; thể...</p>', 'f9f8a06ce9b8013ae5d9888a878bd0d5.jpg', 'a6c85fcf99aba7023c184c23f2054f6e.jpg,0252646abfe670ddc91b987a1a6a704e.jpg,', ',21,', '<p><span style=\"font-size: 18px;\"><em><strong>Chi Tiết Sản Phẩm:</strong></em>&nbsp;<br /> Loại Gi&agrave;y:&nbsp;đi chơi, dạo phố.....<br /> <strong>Bảo h&agrave;nh keo 12 th&aacute;ng</strong><br /> <strong>Giao H&agrave;ng Tận Nơi To&agrave;n Quốc&nbsp;Nhận H&agrave;ng Trả Tiền </strong><br /> Sản phẩm giống h&igrave;nh 100%<br /> C&oacute; thể đến shop xem gi&agrave;y v&agrave; mua trực tiếp tại:&nbsp;<br /> <strong>163/29 Th&agrave;nh Th&aacute;i P14 Q10 HCM</strong><br /> Hotline: <em><strong>0888.28.38.48 - 0868.28.38.48</strong></em></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 18px;\"><em><strong>Đặt H&agrave;ng Nhanh:</strong></em><br /> C&aacute;c bạn c&oacute; thể gọi trực tiệp hoặc&nbsp;nhắn tin theo c&uacute; ph&aacute;p sau:<br /> <span style=\"color: #0000ff;\"><strong>M&atilde; Sản Phẩm (Size) + Địa Chỉ + Họ T&ecirc;n</strong></span><br /> Gửi&nbsp;<em><strong><span style=\"color: #ff0000;\">0888.28.38.48 - 0868.28.38.48</span><br /> Shop sẽ li&ecirc;n hệ lại với bạn trong thời gian sớm nhất</strong></em></span></p>'),
(8, 'Giày Boot Nam GN134', 380, '<p>Chi Tiết Sản Phẩm: Loại Gi&agrave;y: đi chơi, dạo phố..... Bảo h&agrave;nh keo 12 th&aacute;ng Giao H&agrave;ng Tận Nơi To&agrave;n Quốc Nhận H&agrave;ng Trả Tiền Sản phẩm giống h&igrave;nh 100% C&oacute; thể...</p>', 'e7dccd25d2b8e3d670b30e50e7d1ba53.jpg', '3358bdf70f9e078f4725eb505baa978b.jpg,6a19ed0f2fa00108642a77fbca3e3585.jpg,e3ad4940c514767fa4c59da4aa469716.jpg,7cb793f6e2dd7e8c3bf68937e80b7e8c.jpg,', ',21,', '<p><span style=\"font-size: 18px;\"><em><strong>Chi Tiết Sản Phẩm:</strong></em>&nbsp;<br /> Loại Gi&agrave;y:&nbsp;đi chơi, dạo phố.....<br /> <strong>Bảo h&agrave;nh keo 12 th&aacute;ng</strong><br /> <strong>Giao H&agrave;ng Tận Nơi To&agrave;n Quốc&nbsp;Nhận H&agrave;ng Trả Tiền </strong><br /> Sản phẩm giống h&igrave;nh 100%<br /> C&oacute; thể đến shop xem gi&agrave;y v&agrave; mua trực tiếp tại:&nbsp;<br /> <strong>163/29 Th&agrave;nh Th&aacute;i P14 Q10 HCM</strong><br /> Hotline: <em><strong>0888.28.38.48 - 0868.28.38.48</strong></em></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 18px;\"><em><strong>Đặt H&agrave;ng Nhanh:</strong></em><br /> C&aacute;c bạn c&oacute; thể gọi trực tiệp hoặc&nbsp;nhắn tin theo c&uacute; ph&aacute;p sau:<br /> <span style=\"color: #0000ff;\"><strong>M&atilde; Sản Phẩm (Size) + Địa Chỉ + Họ T&ecirc;n</strong></span><br /> Gửi&nbsp;<em><strong><span style=\"color: #ff0000;\">0888.28.38.48 - 0868.28.38.48</span><br /> Shop sẽ li&ecirc;n hệ lại với bạn trong thời gian sớm nhất</strong></em></span></p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_pass` varchar(100) DEFAULT NULL,
  `user_fullname` varchar(100) DEFAULT NULL,
  `user_type` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_fullname`, `user_type`) VALUES
(1, 'admin', '3d9188577cc9bfe9291ac66b5cc872b7', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
