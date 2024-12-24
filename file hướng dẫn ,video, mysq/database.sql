-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2024 at 12:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 6, '2024-11-29 01:06:41', '2024-11-29 01:06:41'),
(7, 7, '2024-11-29 17:33:21', '2024-11-29 17:33:21'),
(8, 8, '2024-11-29 18:39:04', '2024-11-29 18:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `soLuongDungTichNho` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `giaTienLon` decimal(15,2) DEFAULT NULL,
  `giaTienNho` decimal(15,2) DEFAULT NULL,
  `dungTichNho` varchar(255) NOT NULL,
  `dungTich` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `cart_id`, `name`, `product_id`, `quantity`, `soLuongDungTichNho`, `image`, `giaTienLon`, `giaTienNho`, `dungTichNho`, `dungTich`, `created_at`, `updated_at`) VALUES
(15, 5, 'Armaf Club De Nuit Women', 16, 1, 0, 'club-woman.jpg', 1250000.00, 200000.00, '10ml', '80ml', '2024-11-19 22:13:46', '2024-11-19 22:13:46'),
(16, 5, 'Armaf Club de Nuit Intense Man Limited Edition Parfum', 14, 6, 0, 'webb-0000-9-0016-2.png', 2100000.00, 150000.00, '10ml', '105ml', '2024-11-19 22:28:07', '2024-11-19 22:28:07'),
(17, 10, 'Afnan 9PM EDP', 3, 1, 0, 'webb-0000-9-0000-18.jpg', 1250000.00, 100000.00, '10ml', '100ml', '2024-11-29 01:06:41', '2024-11-29 01:06:41'),
(22, 11, 'Afnan Supermacy Gold', 2, 1, 0, 'webb-0000-9-9afd02df.jpg', 1950000.00, 200000.00, '10ml', '100ml', '2024-11-29 17:33:21', '2024-11-29 17:33:21'),
(28, 12, 'Afnan 9PM EDP', 3, 1, 0, 'webb-0000-9-0000-18.jpg', 1250000.00, 100000.00, '10ml', '100ml', '2024-11-29 18:39:04', '2024-11-29 18:39:04'),
(57, 7, 'Gritti Tangerina', 38, 1, 0, 'Frame-140.png', 5500000.00, 450000.00, '10ml', '80ml', '2024-12-23 00:32:33', '2024-12-23 00:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `danh_gia`
--

CREATE TABLE `danh_gia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `don_hang_id` bigint(20) UNSIGNED NOT NULL,
  `nuoc_hoa_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danh_gia`
--

INSERT INTO `danh_gia` (`id`, `user_id`, `don_hang_id`, `nuoc_hoa_id`, `rating`, `comment`, `image`, `video`, `created_at`, `updated_at`) VALUES
(8, 7, 11, 77, 4, 'sản phẩm tốt chất lượng cao', 'images/danhgia/bbkU0Ys1MAS5jUrrfUoyqty69HjKcX7YauEtrs8a.webp', NULL, '2024-12-20 15:31:03', '2024-12-20 15:31:03'),
(9, 6, 24, 13, 5, 'abcxyzzzzzz', 'images/danhgia/492OvVj6imLlz3ue2Knb6NwcQu3ZHDQbGxMtmry7.webp', 'videos/danhgia/AIGFeSUySBaZnIhLsxel23n2DCpLXt7uPB2H6vdM.mp4', '2024-12-23 19:23:10', '2024-12-23 19:23:10'),
(10, 6, 25, 1, 5, 'tôi rất thích sản phẩm này', 'images/danhgia/6fk4W8eFvXR6cmbODeboiSMfvBg9r19BQOHshHm0.webp', 'videos/danhgia/4GH1SLCBJy4gNXOCK4AhKi403iFI0ADV6ACQ1dng.mp4', '2024-12-24 04:41:05', '2024-12-24 04:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `maDonHang` varchar(255) NOT NULL,
  `tenKhachHang` varchar(255) NOT NULL,
  `thuongHieu` varchar(255) NOT NULL,
  `tenDonHang` varchar(255) NOT NULL,
  `hinhThucMua` varchar(50) NOT NULL,
  `ngayDatHang` datetime NOT NULL,
  `tongTien` decimal(15,2) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `soLuongDungTichNho` int(11) NOT NULL DEFAULT 0,
  `trangThai` tinyint(4) NOT NULL DEFAULT 1,
  `is_reviewed` tinyint(1) NOT NULL DEFAULT 0,
  `ghiChu` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `diaChi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id`, `user_id`, `order_id`, `maDonHang`, `tenKhachHang`, `thuongHieu`, `tenDonHang`, `hinhThucMua`, `ngayDatHang`, `tongTien`, `soLuong`, `soLuongDungTichNho`, `trangThai`, `is_reviewed`, `ghiChu`, `image`, `diaChi`, `created_at`, `updated_at`) VALUES
(3, 7, 4, 'DH6754fc0a6d405', 'Nguyễn Thị Thu Hằng', 'Al Haramain', 'Al Haramain Amber Oud Gold Edition', 'Trả tiền mặt', '2024-10-08 01:53:14', 730000.00, 3, 3, 1, 0, 'Thank', 'untitled-12.jpg', 'Hồ Chí Minh', '2024-12-07 11:53:14', '2024-12-07 11:53:14'),
(4, 7, 4, 'DH6754fc0a6fce1', 'Nguyễn Thị Thu Hằng', 'Al Haramain', 'Al Haramain Amber Oud Gold Edition', 'Trả tiền mặt', '2024-12-08 01:53:14', 730000.00, 3, 3, 1, 0, 'Thank', 'untitled-12.jpg', 'Hồ Chí Minh', '2024-12-07 11:53:14', '2024-12-07 11:53:14'),
(6, 7, 15, 'DH675c25125717b', 'Nguyễn Thị Thu Hằng', 'Armaf', 'Armaf Club De Nuit Blue Iconic EDP', 'Trả tiền mặt', '2024-12-13 12:14:10', 4500000.00, 3, 0, 1, 0, 'Xin cảm ơn', 'iconic.png', 'Quảng Nam', '2024-12-12 22:14:10', '2024-12-12 22:14:10'),
(7, 7, 12, 'DH675c256eb3362', 'Diệp Mạnh Tuấn', 'Argos Fragrances', 'Argos Pour Femme EDP', 'Trả tiền mặt', '2024-12-13 12:15:42', 680000.00, 2, 2, 1, 0, 'Giao cẩn thận', 'untitled-1-0006-argos-pour.png', 'Quảng Nam', '2024-12-12 22:15:42', '2024-12-12 22:15:42'),
(8, 8, 2, 'DH67630c56aee42', 'Diệp Mạnh Tuấn', 'Afnan', 'Afnan Supermacy Gold', 'Trả tiền mặt', '2024-12-18 17:54:30', 3900000.00, 2, 0, 1, 0, 'cảm ơn', 'webb-0000-9-9afd02df.jpg', 'Quảng nam', '2024-12-18 03:54:30', '2024-12-18 03:54:30'),
(9, 8, 45, 'DH67630ccb2f2a8', 'Diệp Mạnh Tuấn', 'Jean Paul Gaultier', 'Jean Paul Gaultier So Scandal!', 'Trả tiền mặt', '2024-12-18 17:56:27', 8360000.00, 8, 6, 1, 0, 'Thank', 'jean-paul-gaultier-so-scandal.jpg', 'quảng nam', '2024-12-18 03:56:27', '2024-12-18 03:56:27'),
(10, 8, 45, 'DH67630ccb30181', 'Diệp Mạnh Tuấn', 'Jean Paul Gaultier', 'Jean Paul Gaultier So Scandal!', 'Trả tiền mặt', '2024-12-18 17:56:27', 8360000.00, 8, 6, 1, 0, 'Thank', 'jean-paul-gaultier-so-scandal.jpg', 'quảng nam', '2024-12-18 03:56:27', '2024-12-18 03:56:27'),
(11, 7, 77, 'DH67664d1b35c85', 'Nguyễn Hoàng Anh', 'Creed', 'Creed Carmina EDP', 'Trả tiền mặt', '2024-12-21 05:07:39', 1900000.00, 2, 2, 5, 1, 'Giao tại công ty', 'Frame-357.jpg', 'Quảng nam', '2024-12-20 15:07:39', '2024-12-20 15:31:03'),
(12, 7, 75, 'DH67665022a744c', 'Diệp Hồng Hoa', 'Liis Fragrances', 'Liis Fragrances Bo EDP', 'Trả tiền mặt', '2024-12-22 05:20:34', 3000000.00, 3, 3, 5, 0, 'Giao tại nhà', 'spct-liis-bo-edp-1-1.jpg', 'Đà Nẵng', '2024-12-20 15:20:34', '2024-12-20 15:21:24'),
(13, 7, 40, 'DH67697ec52842b', 'Nguyễn Minh Huy', 'Chanel', 'Chanel Bleu De Chanel EDP', 'Trả tiền mặt', '2024-12-23 15:16:21', 5400000.00, 12, 12, 1, 0, 'Ủng hộ shop lần 2', 'bleu_de_chanel.png', '232 Nguyễn Thái Bình', '2024-12-23 01:16:21', '2024-12-23 01:16:21'),
(14, 7, 41, 'DH67697f07ed2c0', 'Diệp Hồng Hoa', 'Chanel', 'Chanel Coco Mademoiselle', 'Chuyển khoảng', '2024-12-22 15:17:27', 32850000.00, 9, 0, 1, 0, 'Cảm ơn shop hàng chất lượng quá', 'coco_chanel.jpg', 'Quảng Nam', '2024-12-23 01:17:27', '2024-12-23 01:17:27'),
(15, 7, 42, 'DH67697f9141691', 'Nguyễn Hoàng Anh', 'Giorgio Armani', 'Giorgio Armani Acqua Di Giò', 'Trả tiền mặt', '2024-12-19 15:19:45', 2070000.00, 9, 9, 1, 0, 'thank', 'gio.jpg', 'Quảng Nam', '2024-12-23 01:19:45', '2024-12-23 01:19:45'),
(16, 7, 44, 'DH67697fdfa4d5f', 'Diệp Mạnh Tuấn', 'Roja Parfums', 'Roja Haute Luxe Parfums EDP', 'Trả tiền mặt', '2024-11-11 15:21:03', 732600000.00, 9, 0, 1, 0, 'Giao tại công ty', 'roja.jpg', 'quảng nam', '2024-12-23 01:21:03', '2024-12-23 01:21:03'),
(17, 7, 39, 'DH676980112e3ff', 'Nguyễn Minh Huy', 'Anna Sui', 'Anna Sui Fantasia Mermaid', 'Trả tiền mặt', '2024-12-22 15:21:53', 2000000.00, 10, 10, 1, 0, 'Giao cẩn thận nhé', 'Anna-Sui-Fantasia-Mermaid-4.webp', 'Đà Nẵng', '2024-12-23 01:21:53', '2024-12-23 01:21:53'),
(18, 7, 43, 'DH6769804d6f3be', 'Nguyễn Minh Huy', 'Maison Francis Kurkdjian', 'Maison Francis Kurkdjian A La Rose', 'Trả tiền mặt', '2024-12-23 15:22:53', 35550000.00, 9, 0, 1, 0, 'giao nhanh nhé', 'mfk-ala-rose-femme.webp', 'Đà Nẵng', '2024-12-23 01:22:53', '2024-12-23 01:22:53'),
(19, 6, 22, 'DH676a081522bc4', 'Nguyễn Thị Thu Hằng', 'Attar Collection', 'Attar Collection The Queen Of Sheba', 'Trả tiền mặt', '2024-12-24 01:02:13', 350000.00, 1, 1, 5, 0, 'fbgf', 'webb-0000-9-0020-3.jpg', 'Hồ Chí Minh', '2024-12-23 11:02:13', '2024-12-23 11:03:38'),
(20, 6, 20, 'DH676a0def06c8c', 'Diệp Mạnh Tuấn', 'Atelier Materi ', 'Atelier Materi Rose Ardoise EDP', 'Trả tiền mặt', '2024-12-24 01:27:11', 6500000.00, 1, 0, 1, 0, 'f', 'Untitled-1_0012_Atelier-Materi.png', 'Quảng nam', '2024-12-23 11:27:11', '2024-12-23 11:27:11'),
(21, 6, 62, 'DH676a0f444c150', 'Diệp Mạnh Tuấn', 'Missoni', 'Missoni Wave Pour Homme EDT', 'Chuyển khoảng', '2024-12-24 01:32:52', 15950000.00, 11, 0, 1, 0, 'fsfd', 'Untitled-1_0001_miss.png', 'Hồ Chí Minh', '2024-12-23 11:32:52', '2024-12-23 11:32:52'),
(22, 6, 62, 'DH676a0fb84d307', 'Diệp Mạnh Tuấn', 'Missoni', 'Missoni Wave Pour Homme EDT', 'Trả tiền mặt', '2024-12-24 01:34:48', 18850000.00, 13, 0, 5, 0, 'dvdsv', 'Untitled-1_0001_miss.png', 'quảng nam', '2024-12-23 11:34:48', '2024-12-23 11:35:29'),
(23, 6, 13, 'DH676a7cd93ed48', 'Diệp Mạnh Tuấn', 'Argos Fragrances', 'Argos Fall Of Phaeton', 'cash_on_delivery', '2024-12-24 09:20:25', 15000000.00, 2, 0, 1, 0, 'abc', 'untitled-1-0009-argos-fall-of.png', 'Quảng nam', '2024-12-23 19:20:25', '2024-12-23 19:20:25'),
(24, 6, 13, 'DH676a7d17d9344', 'Diệp Mạnh Tuấn', 'Argos Fragrances', 'Argos Fall Of Phaeton', 'Chuyển khoảng', '2024-12-24 09:21:27', 1200000.00, 3, 3, 5, 1, 'abc', 'untitled-1-0009-argos-fall-of.png', 'quảng nam', '2024-12-23 19:21:27', '2024-12-23 19:23:10'),
(25, 6, 1, 'DH676a9d29732d5', 'Phan Mạnh', 'Afnan', 'Afnan Supremacy Silver', 'Trả tiền mặt', '2024-12-24 11:38:17', 1450000.00, 1, 0, 5, 1, 'ABC', 'webbb02-26-scaled.jpg', 'Quảng Nam', '2024-12-24 04:38:17', '2024-12-24 04:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khach_da_mua`
--

CREATE TABLE `khach_da_mua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `khachHangID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `ghiChu` text DEFAULT NULL,
  `hinhThuc` varchar(255) DEFAULT NULL,
  `tongTien` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khach_da_mua`
--

INSERT INTO `khach_da_mua` (`id`, `khachHangID`, `name`, `ghiChu`, `hinhThuc`, `tongTien`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nguyễn Công Vũ', 'cảm ơn', 'Thanh toán chuyển khoản', 1450000.00, '2024-12-22 21:26:45', '2024-12-22 21:26:45'),
(3, 3, 'Nguyễn Minh Huy', 'Thank', 'Thanh toán chuyển khoản', 3900000.00, '2024-12-22 21:29:40', '2024-12-22 21:29:40'),
(4, 2, 'Lê Văn Quý', 'cảm ơn', 'Thanh toán chuyển khoản', 3750000.00, '2024-12-22 21:33:37', '2024-12-22 21:33:37'),
(5, 1, 'Nguyễn Công Vũ', 'dà', 'Thanh toán chuyển khoản', 5265000.00, '2024-12-23 11:37:19', '2024-12-23 11:37:19'),
(6, 1, 'Nguyễn Công Vũ', 'abc', 'Trả tiền mặt tại quầy', 72270000.00, '2024-12-23 19:31:10', '2024-12-23 19:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `diaChi` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  `ngaySinh` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `name`, `diaChi`, `email`, `phoneNumber`, `ngaySinh`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Công Vũ', 'Thừa Thiên Huế', 'congvu@gmail.com', '09872232143', '2005-06-22', '2024-12-22 20:23:55', '2024-12-22 20:23:55'),
(2, 'Lê Văn Quý', 'Sài Gòn', 'quyle@gamil.com', '0954678212', '2004-06-15', '2024-12-22 20:42:25', '2024-12-22 20:42:25'),
(3, 'Nguyễn Minh Huy', 'Đà Nẵng', 'minhhuy2312@gamil.com', '0985321232', '2000-09-11', '2024-12-22 20:43:10', '2024-12-22 20:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_11_11_124814_create_users_table', 1),
(3, '2024_11_11_124822_create_nuoc_hoa_table', 1),
(4, '2024_11_11_124833_create_carts_table', 1),
(5, '2024_11_11_124915_create_cart_items_table', 1),
(6, '2024_11_11_125955_create_cart_items_table', 2),
(7, '2024_11_11_140616_create_wishlist_table', 3),
(8, '2024_11_11_143824_create_wishlist_table', 4),
(9, '2024_11_13_160334_create_users_table', 5),
(10, '2024_11_15_030911_create_users_table', 6),
(11, '2024_11_16_022338_create_cart_items_table', 7),
(12, '2024_11_16_101502_create_don_hang_table', 8),
(13, '2024_11_16_103140_create_don_hang_table', 9),
(14, '2024_11_16_105449_create_don_hang_table', 10),
(15, '2024_11_17_162022_create_tin_tuc_table', 11),
(16, '2024_11_18_074930_create_contacts_table', 12),
(17, '2024_11_18_090743_create_mo_ta_table', 13),
(18, '2024_11_20_124405_create_don_hang_table', 14),
(19, '2024_11_22_151414_create_danh_gia_table', 15),
(20, '2024_12_07_071749_create_don_hang_table', 16),
(21, '2024_12_19_094755_create_events_table', 17),
(22, '2024_12_23_100449_create_khach_hang_table', 18),
(23, '2024_12_23_100526_create_khach_da_mua_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `mo_ta`
--

CREATE TABLE `mo_ta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nuoc_hoa_id` bigint(20) UNSIGNED NOT NULL,
  `noi_dung` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mo_ta`
--

INSERT INTO `mo_ta` (`id`, `nuoc_hoa_id`, `noi_dung`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ra mắt: năm 2013\nQuốc gia: Ả Rập\nNhóm hương: Quả thơm, Quả Mâm xôi, Hương gỗ\nTính cách mùi hương: Nam tính, Mạnh mẽ, Quyến rũ\nTầng hương:\nHương đầu : Quả lý chua, Hương dứa, Hương Táo và Cam Bergamot\nHương giữa : Cây bạch dương, Hoắc hương, Hoa nhài, Hoa hồng\nHương cuối : Rêu sồi, Xạ hương, Long diên hương, Vanilla\nAfnan Silver là chai nước hoa Afnan nam có cho mình vẻ ngoài vô cùng gai góc và bản lĩnh – biểu tượng bình rượu thời chiến khiến ai nhìn thấy cũng dễ “say”. Khi sử dụng Afnan Silver bạn sẽ cảm nhận được sự mạnh mẽ của một chàng trai Ả Rập đang phiêu lưu trong xứ sở đầy nắng và gió. \nHương đầu tiên từ trái cây ngọt mát: quả lý chua, dứa, táo và cam Bergamot giúp bạn đánh thức mọi giác quan, mang đến một làn gió vô cùng tươi mới. Tiếp theo sẽ là hương nốt nhẹ nhàng, trầm lắng hơn với cây bạch dương, hoắc hương và hoa hồng kết hợp với mùi nhài thoang thoảng. Afnan Silver sẽ khiến bạn “khó quên” bởi sự ngọt ngào nhưng vô cùng ấm áp với hương cuối là sự kết hợp của Rêu sồi, thêm chút Xạ hương khiêu khích cùng Vanilla ngọt dịu.\nAFNAN SILVER có cho mình đủ sự tinh tế từ mùi hương đến kiểu dáng, khiến ai cũng dễ dàng mê mẩn khi lần đầu tiếp xúc. Còn bạn thì sao? Đã sẵn sàng để trải nghiệm chưa? \nTUANHALAN cam kết mang đến cho bạn những chai nước hoa cao cấp với mức giá phù hợp. Liên hệ ngay hotline 0917 513 519 hoặc đến trực tiếp cửa hàng để được tư vấn cụ thể nhé!', NULL, NULL),
(2, 74, 'Hương đầu: Oải hương, Bạc hà\r\nHương giữa: Vanilla, Benzoin\r\nHương cuối: Mật ong, Đậu tonka, Thuốc lá\r\nHương đầu bắt đầu với sự tươi mát từ hoa oải hương thanh lịch và bạc hà mát lạnh, mang lại cảm giác sảng khoái, tràn đầy năng lượng nhưng vẫn toát lên vẻ tinh tế, cuốn hút ngay từ lần gặp đầu tiên.\r\nHương giữa tiếp tục chuyển sang sự ngọt ngào, ấm áp với hương vanilla mịn màng kết hợp cùng benzoin ấm áp, tạo nên một tầng hương giữa đầy cảm xúc, vừa gợi cảm vừa mạnh mẽ.\r\nHương cuối khép lại bằng sự quyến rũ khó cưỡng từ mật ong ngọt dịu, thuốc lá ấm nồng và đậu tonka béo ngậy. Tầng hương cuối không chỉ để lại cảm giác ấm áp và bền lâu, mà còn gợi lên sự trưởng thành, nam tính và đầy bí ẩn.', '2024-12-15 20:49:02', '2024-12-15 20:49:02'),
(3, 75, 'Hương đầu: Nhựa Elemi, thuốc lá\r\n\r\nHương giữa: Cây Sequoia, Hương trầm kyara\r\n\r\nHương cuối: cây tuyết tùng, Gỗ Guaiac, Hương Vani\r\n\r\nHương đầu mở ra với sự độc đáo từ nhựa Elemi tươi sáng pha chút cay nồng, kết hợp cùng nét ấm áp, mạnh mẽ của thuốc lá. Sự kết hợp này mang lại một khởi đầu đầy ấn tượng và cuốn hút.\r\n\r\nHương giữa đưa bạn vào chiều sâu bí ẩn với cây Sequoia cổ kính và hương trầm Kyara cao quý. Tầng hương này tạo nên một cảm giác ấm áp, sâu lắng và đầy nội lực, như một cánh rừng trầm mặc trong ánh hoàng hôn.\r\n\r\nHương cuối khép lại với sự hòa quyện hoàn hảo của cây tuyết tùng thanh lịch, gỗ Guaiac mịn màng và hương vani ngọt ngào. Lớp hương này lưu lại cảm giác ấm áp, gợi cảm và bền lâu, để lại một dấu ấn mạnh mẽ và khó quên.', '2024-12-15 21:33:49', '2024-12-15 21:33:49'),
(4, 76, 'Hương chính: Gỗ trầm hương, Hoa Oải Hương, Nghệ tây, Hoắc hương, Xạ hương.\r\n\r\nHương thơm này mang đến một trải nghiệm đầy chiều sâu và lôi cuốn, được xây dựng quanh các nốt gỗ trầm hương sang trọng và bí ẩn. Sự ấm áp của trầm hương là trái tim của mùi hương, tạo nên cảm giác mạnh mẽ, quyến rũ và đầy quyền lực.\r\n\r\nHoa oải hương thêm vào chút nhẹ nhàng, thanh lịch, mang lại sự cân bằng giữa sự ấm áp của gỗ và nét tươi mát của thảo mộc. Nghệ tây, với đặc trưng cay nhẹ và độc đáo, bổ sung một tầng hương tinh tế và quyến rũ, làm tăng thêm chiều sâu của tổng thể.\r\n\r\nHoắc hương mang lại sự trầm ấm và cảm giác đất đai, tạo nền vững chắc, trong khi xạ hương gợi cảm làm nổi bật lên nét mềm mại và mượt mà, lưu lại một dấu ấn dài lâu trên làn da. Tất cả hòa quyện để tạo nên một mùi hương vừa thanh thoát, vừa bí ẩn, thích hợp cho những ai yêu thích sự sang trọng và cá tính.', '2024-12-15 21:36:34', '2024-12-15 21:36:34'),
(5, 77, 'Hương đầu: Hạt tiêu hồng, Quả anh đào đen, Nghệ tây.\r\nHương giữa: Hoa hồng, hoa tím, Hoa mẫu đơn, Gỗ Cashmere.\r\nHương cuối: Nhựa thơm Myrrh, Trầm hương Ambroxan, Xạ hương.\r\n\r\nHương đầu mở ra với sự kết hợp cay nồng, ấm áp của hạt tiêu hồng và sự ngọt ngào gợi cảm từ quả anh đào đen, tạo nên một khởi đầu vừa sôi động vừa bí ẩn. Sự góp mặt của nghệ tây thêm vào chút cay nhẹ, tinh tế, tạo chiều sâu và độ độc đáo cho tầng hương đầu, cuốn hút ngay từ lần chạm ngõ.\r\n\r\nHương giữa là sự hài hòa và lãng mạn của hoa hồng, hoa tím và hoa mẫu đơn. Những nốt hương này mang lại cảm giác mềm mại, nữ tính và thanh tao, trong khi gỗ Cashmere bổ sung sự ấm áp, mềm mượt, khiến tầng hương giữa trở nên mịn màng và quyến rũ hơn.\r\n\r\nHương cuối đọng lại với sự sang trọng của nhựa thơm Myrrh, trầm hương Ambroxan và xạ hương. Sự kết hợp này mang đến cảm giác ấm áp, sâu lắng và gợi cảm, để lại dấu ấn mạnh mẽ, kéo dài và đầy bí ẩn.', '2024-12-15 21:40:17', '2024-12-15 21:40:17'),
(6, 78, 'Hương đầu: quả anh đào, hạt tiêu hồng và cam Bergamot;\r\n\r\nHương giữa: vỏ trấu vani đen, hoa vòi voi và hoa cam;\r\n\r\nHương cuối: Đậu Tonka, Gỗ Cashmere, Xạ hương trắng, Ambroxan, Labdanum và Violet.', '2024-12-15 21:45:08', '2024-12-15 21:45:08'),
(7, 79, 'Hương đầu: Davana, Lá ngải cứu, Lá bách xù.\r\nHương giữa: Da thuộc, Cỏ khô, Tiêu hồng.\r\nHương cuối: Nhựa bạch dương, Gỗ Gaiac, Nhũ hương.\r\n\r\nMùi hương này mở đầu với sự tươi mát và phức tạp của davana, lá ngải cứu và lá bách xù. Davana mang lại cảm giác thảo mộc và hơi ngọt, lá ngải cứu thêm vào sự thanh khiết và xanh tươi, trong khi lá bách xù mang đến hương thơm gỗ nhẹ và sảng khoái. Sự kết hợp này tạo ra một ấn tượng đầu tiên đầy tươi mới và quyến rũ.\r\n\r\nHương giữa tiếp tục với sự mạnh mẽ và quyến rũ của da thuộc, cỏ khô và tiêu hồng. Da thuộc mang lại hương thơm mạnh mẽ và nam tính, cỏ khô thêm vào sự ấm áp và tự nhiên, trong khi tiêu hồng tạo ra một chút cay nồng và sôi nổi. Sự kết hợp này tạo nên một tầng hương giữa phong phú và lôi cuốn.\r\n\r\nHương cuối kết thúc với sự sâu lắng và gợi cảm của nhựa bạch dương, gỗ Gaiac và nhũ hương. Nhựa bạch dương mang lại hương khói nhẹ và gỗ, gỗ Gaiac thêm vào sự ấm áp và mạnh mẽ, trong khi nhũ hương tạo ra sự sâu lắng và bí ẩn.', '2024-12-15 21:51:18', '2024-12-15 21:51:18'),
(8, 80, 'nước hoa chính hãng', '2024-12-23 19:29:37', '2024-12-23 19:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `nuoc_hoa`
--

CREATE TABLE `nuoc_hoa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thuongHieu` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gioiTinh` varchar(255) NOT NULL,
  `nongDo` varchar(255) NOT NULL,
  `dungTich` varchar(255) NOT NULL,
  `doLuuHuong` varchar(255) NOT NULL,
  `doToaHuong` varchar(255) NOT NULL,
  `giaTienLon` decimal(15,2) DEFAULT NULL,
  `giaTienNho` decimal(15,2) DEFAULT NULL,
  `dungTichNho` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tinh_trang` tinyint(4) NOT NULL DEFAULT 1,
  `so_luong` int(11) DEFAULT NULL,
  `giaVon` decimal(15,2) DEFAULT NULL,
  `giaVonNho` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nuoc_hoa`
--

INSERT INTO `nuoc_hoa` (`id`, `thuongHieu`, `name`, `gioiTinh`, `nongDo`, `dungTich`, `doLuuHuong`, `doToaHuong`, `giaTienLon`, `giaTienNho`, `dungTichNho`, `image`, `created_at`, `updated_at`, `tinh_trang`, `so_luong`, `giaVon`, `giaVonNho`) VALUES
(1, 'Afnan', 'Afnan Supremacy Silver', 'Nam', ' Extrait de Parfum', '100ml', '6-8h', 'Gần', 1450000.00, 100000.00, '10ml', 'webbb02-26-scaled.jpg', '2024-11-23 08:33:13', '2024-11-23 08:33:21', 1, 54, 1000000.00, 50000.00),
(2, 'Afnan', 'Afnan Supermacy Gold', 'Unisex', 'Eau De Parfum', '100ml', ' 6-8h', 'Xa', 1950000.00, 200000.00, '10ml', 'webb-0000-9-9afd02df.jpg', '2024-10-23 08:33:24', '2024-10-23 08:33:27', 1, 54, 1550000.00, 100000.00),
(3, 'Afnan', 'Afnan 9PM EDP', 'Nam', ' Eau De Parfum', '100ml', '6-8h', 'Xa', 1250000.00, 100000.00, '10ml', 'webb-0000-9-0000-18.jpg', '2024-10-23 08:33:37', '2024-10-23 08:33:40', 1, 54, 825000.00, 50000.00),
(4, 'Al Haramain', 'Al Haramain Amber Oud Gold Edition', 'Unisex', 'Eau De Parfum', '100ml', '10-12h', 'Xa', 2650000.00, 240000.00, '10ml', 'untitled-12.jpg', '2024-10-23 08:33:44', '2024-10-23 08:33:42', 1, 54, 2250000.00, 190000.00),
(5, 'Al Haramain', 'Al Haramain Amber Oud Tobacco Edition', 'Unisex', 'Eau De Parfum', '100ml', '4-6h', 'Xa', 1950000.00, 100000.00, '10ml', 'untitled-1-recovered8.png', '2024-10-23 08:33:46', '2024-10-23 08:33:48', 1, 54, 1550000.00, 50000.00),
(6, 'Alaia', 'Alaia Blanche EDP', 'Nữ', 'Eau De Parfum', '100ml', '6-8h', 'Vừa phải', 2350000.00, 200000.00, '10ml', '1.png', '2024-09-23 08:34:00', '2024-09-23 08:34:02', 1, 54, 1950000.00, 100000.00),
(7, 'Alexandria Fragrances', 'Alexandria Fragrances Sparkling Bergamot', 'Unisex', 'Eau De Parfum', '100ml', '6-8h', ' Vừa phải', 2850000.00, 250000.00, '10ml', 'Untitled-1_0004_Alexandria-Fragrances.png', '2024-09-23 08:34:05', '2024-09-23 08:34:08', 1, 54, 2450000.00, 200000.00),
(8, ' Amouage', 'Amouage Overture', 'Nam', 'Eau De Parfum', '100ml', ' 6-8h', 'Xa', 4950000.00, 340000.00, '10ml', 'untitled-1-0008-1234-c35e263d.jpg', '2024-09-23 08:34:11', '2024-09-23 08:34:14', 1, 54, 4550000.00, 290000.00),
(9, ' Amouage', 'Amouage Meander', 'Unisex', 'Eau De Parfum', '100ml', ' 6-8h', 'Xa', 4950000.00, 340000.00, '10ml', 'meander.png', '2024-09-23 08:34:17', '2024-09-23 08:34:19', 1, 54, 4550000.00, 290000.00),
(10, 'Amouage', 'Amouage Interlude Black Iris Man', 'Nam', ' Eau De Parfum', '100ml', ' 6-8h', 'Xa', 4950000.00, 340000.00, '10ml', 'untitled-1-0010-amouage.png', '2024-08-23 08:34:41', '2024-08-23 08:34:44', 1, 54, 4550000.00, 290000.00),
(11, ' Argos Fragrances', 'Argos Pour Homme EDP', 'Nam', 'Eau De Parfum', '100ml', '6-8h', 'Vừa phải', 4250000.00, 340000.00, '10ml', 'untitled-1-0005-argos-pour.png', '2024-08-23 08:34:46', '2024-08-23 08:34:48', 1, 54, 3850000.00, 280000.00),
(12, 'Argos Fragrances', 'Argos Pour Femme EDP', 'Nữ', ' Eau De Parfum', '80ml', '6-8h', 'Vừa phải', 4250000.00, 340000.00, '10ml', 'untitled-1-0006-argos-pour.png', '2024-08-23 08:34:51', '2024-08-23 08:34:53', 1, 54, 3850000.00, 290000.00),
(13, 'Argos Fragrances', 'Argos Fall Of Phaeton', 'Unisex', 'Eau De Parfum', '60ml', '6-8h', 'Xa', 7500000.00, 400000.00, '10ml', 'untitled-1-0009-argos-fall-of.png', '2024-08-23 08:34:56', '2024-08-23 08:35:02', 1, 54, 3900000.00, 350000.00),
(14, 'Armaf', 'Armaf Club de Nuit Intense Man Limited Edition Parfum', 'Nam', 'Eau De Parfum', '105ml', ' 6-8h', 'Xa', 2100000.00, 150000.00, '10ml', 'webb-0000-9-0016-2.png', '2024-08-23 08:34:56', '2024-08-23 08:35:07', 1, 54, 1700000.00, 100000.00),
(15, 'Armaf', 'Armaf Club De Nuit Blue Iconic EDP', 'Nam', 'Eau De Parfum', '105ml', ' 6-8h', 'Xa', 1500000.00, 100000.00, '10ml', 'iconic.png', '2024-08-23 08:35:11', '2024-08-23 08:35:13', 1, 54, 1100000.00, 50000.00),
(16, 'Armaf', 'Armaf Club De Nuit Women', 'Nữ', 'Eau De Parfum', '80ml', '4-6h', ' Vừa phải', 1250000.00, 200000.00, '10ml', 'club-woman.jpg', '2024-07-23 08:35:17', '2024-07-23 08:35:20', 1, 54, 800000.00, 100000.00),
(17, 'Astrophil Stella', 'Astrophil Stella Amberlievable', 'Unisex', ' Extrait de Parfum', '50ml', '10-12h', 'Xa', 4250000.00, 350000.00, '10ml', 'webb-0036-8.jpg', '2024-07-23 08:35:22', '2024-07-23 08:35:26', 1, 54, 3500000.00, 250000.00),
(18, 'Astrophil Stella', 'Astrophil Stella Nabati', 'Unisex', 'Extrait de Parfum', '50ml', '10-12h', 'Xa', 5300000.00, 450000.00, '10ml', 'webb-0038-6.jpg', '2024-07-23 08:35:25', '2024-07-23 08:35:35', 1, 54, 4500000.00, 350000.00),
(19, 'Atelier Cologne', 'Atelier Cologne Musc Imperial', 'Unisex', ' Eau De Parfum', '60ml', ' 4-6h', 'Vừa phải', 2350000.00, 300000.00, '10ml', 'y2f0ywxvzy9jlzmvni9ml2m.png', '2024-10-23 08:35:51', '2024-10-23 08:35:58', 1, 54, 1600000.00, 150000.00),
(20, 'Atelier Materi ', 'Atelier Materi Rose Ardoise EDP', 'Unisex', 'Eau De Parfum', '100ml', '6-8h', 'Vừa phải', 6500000.00, 500000.00, '10ml', 'Untitled-1_0012_Atelier-Materi.png', '2024-11-23 08:36:00', '2024-11-23 08:36:02', 1, 0, 5500000.00, 300000.00),
(21, 'Attar Collection', 'Attar Collection Musk Kashmir', 'Unisex', ' Eau De Parfum', '100ml', '6-8h', 'Vừa phải', 2450000.00, 350000.00, '10ml', 'untitled-1456546.png', '2024-11-23 08:36:03', '2024-11-23 08:36:04', 1, 54, 1800000.00, 200000.00),
(22, 'Attar Collection', 'Attar Collection The Queen Of Sheba', 'Unisex', 'Eau De Parfum', '80ml', '6-8h', 'Xa', 2450000.00, 350000.00, '10ml', 'webb-0000-9-0020-3.jpg', '2024-11-23 08:36:06', '2024-11-23 08:36:07', 1, 54, 1600000.00, 250000.00),
(23, ' Azzaro', 'Azzaro Chrome Extreme For Men', 'Nam', 'Eau De Parfum', '100ml', '6-8h', 'Xa', 1500000.00, 200000.00, '10ml', 'azzaro-chrome-extreme.png', '2024-11-23 08:36:08', '2024-11-23 08:36:10', 1, 54, 900000.00, 100000.00),
(24, 'BDK Parfums', 'BDK Parfums - Pas Сe Soir', 'Nữ', 'Eau De Parfum', '100ml', '6-8h', ' Vừa phải', 3950000.00, 400000.00, '10ml', 'untitled-123-0000-layer-1.png', '2024-10-23 08:36:30', '2024-10-23 08:36:32', 1, 54, 3400000.00, 200000.00),
(25, 'BDK Parfums', 'Eau De Parfum', 'Unisex', 'Eau De Parfum', '100ml', ' 4-6h', ' Vừa phải ', 3950000.00, 400000.00, '10ml', 'untitled-1-0032-6-9.png', '2024-10-23 08:36:35', '2024-10-23 08:36:34', 1, 54, 3000000.00, 200000.00),
(26, 'BORNTOSTANDOUT', 'BTSO Mary Jane EDP', 'Unisex', 'Eau De Parfum', '50ml', '6-8h', ' Vừa phải', 5300000.00, 600000.00, '10ml', 'Untitled-1_0000_btso.png', '2024-10-23 08:36:36', '2024-10-23 08:36:38', 1, 54, 4900000.00, 450000.00),
(27, 'Burberry', 'Burberry Her EDP', 'Nữ', 'Eau De Parfum', '100ml', '6-8h', 'Vừa phải', 2750000.00, 320000.00, '10ml', 'Untitled-1_0003_mt-43.png', '2024-10-23 08:36:40', '2024-10-23 08:36:41', 1, 54, 1900000.00, 200000.00),
(28, ' Butterfly Thai Perfume', 'Butterfly Thai Perfume Mango Sticky Rice', 'Unisex', 'Eau De Parfum', '60ml', '6-8h', 'Gần', 1550000.00, 320000.00, '10ml', 'webb-0000-9-0001-17.jpg', '2024-10-23 08:36:43', '2024-10-23 08:36:48', 1, 54, 900000.00, 200000.00),
(29, 'Byredo', 'Byredo Inflorescence EDP', 'Nữ', 'Eau De Parfum', '100ml', '4-6h', 'Gần', 5950000.00, 500000.00, '10ml', 'Untitled-1_0002_byredo.png', '2024-10-23 08:36:45', '2024-10-23 08:36:46', 1, 54, 5000000.00, 350000.00),
(30, 'Calvin Klein', 'Calvin Klein CK Defy EDP', 'Nam', 'Eau De Parfum', '100ml', '8-12h', 'Xa', 2150000.00, 300000.00, '10ml', 'Untitled-1_0014_defy.png', '2024-12-13 08:35:04', '2024-11-15 13:30:22', 1, 44, 1500000.00, 200000.00),
(35, 'Carner Barcelona', 'Carner Barcelona Bo-Bo EDP', 'Unisex', 'Eau De Parfum', '100ml', '6-8h', 'Xa', 3950000.00, 200000.00, '10ml', 'Untitled-1_0000.png', '2024-11-14 23:27:14', '2024-11-14 23:27:14', 1, 66, 3000000.00, 100000.00),
(36, 'Carolina Herrera', 'Carolina Herrera Good Girl EDP', 'Unisex', 'Eau De Parfum', '80ml', '8-12h', 'Xa', 3250000.00, 380000.00, '10ml', 'Untitled-1_0000_carolina-herrera.png', '2024-11-15 03:11:45', '2024-11-15 03:11:45', 1, 33, 2000000.00, 250000.00),
(37, 'Ex Nihilo', 'Ex Nihilo Santal Calling EDP', 'Unisex', 'Eau De Parfum', '100ml', '4-6h', 'Vừa phải', 8500000.00, 500000.00, '10ml', 'Untitled-1_0003_Nuoc-hoa.png', '2024-10-23 08:36:51', '2024-10-23 08:36:52', 1, 67, 7900000.00, 350000.00),
(38, 'Gritti', 'Gritti Tangerina', 'Unisex', ' Eau De Parfum', '80ml', '6-5h', ' Vừa phải', 5500000.00, 450000.00, '10ml', 'Frame-140.png', '2024-10-23 08:36:54', '2024-10-23 08:36:55', 1, 40, 5000000.00, 200000.00),
(39, 'Anna Sui', 'Anna Sui Fantasia Mermaid', 'Nữ', 'Eau de Toilette ', '75ml', '6-8h', 'Xa', 1850000.00, 200000.00, '10ml', 'Anna-Sui-Fantasia-Mermaid-4.webp', '2024-10-23 08:36:57', '2024-10-23 08:36:58', 1, 55, 1450000.00, 150000.00),
(40, 'Chanel', 'Chanel Bleu De Chanel EDP', 'Nam', 'Eau De Parfum', '100ml', '6-8h', 'Vừa phải', 3650000.00, 450000.00, '10ml', 'bleu_de_chanel.png', '2024-12-23 08:37:07', '2024-12-23 08:37:08', 1, 53, 3250000.00, 400000.00),
(41, 'Chanel', 'Chanel Coco Mademoiselle', 'Nữ', 'Eau de Parfum', '100ml', '6-8h', 'Xa', 3650000.00, 450000.00, '10ml', 'coco_chanel.jpg', '2024-12-23 08:37:08', '2024-12-23 08:37:09', 1, 70, 3250000.00, 400000.00),
(42, 'Giorgio Armani', 'Giorgio Armani Acqua Di Giò', 'Nam', 'Eau De Parfum', '80ml', '6-8h', 'Xa', 2450000.00, 230000.00, '10ml', 'gio.jpg', '2024-12-23 08:37:12', '2024-12-23 08:37:11', 1, 56, 2050000.00, 180000.00),
(43, 'Maison Francis Kurkdjian', 'Maison Francis Kurkdjian A La Rose', 'Nữ', 'Eau De Parfum', '35ml', ' 6-8h', 'Xa', 3950000.00, 750000.00, '10ml', 'mfk-ala-rose-femme.webp', '2024-12-23 08:37:10', '2024-12-23 08:37:11', 1, 56, 3550000.00, 700000.00),
(44, 'Roja Parfums', 'Roja Haute Luxe Parfums EDP', 'Unisex', 'Eau De Parfum', '100ml', '10-12h', 'Xa', 81400000.00, 8200000.00, '10ml', 'roja.jpg', '2024-12-23 08:37:19', '2024-12-23 08:37:20', 1, 70, 77500000.00, 7500000.00),
(45, 'Jean Paul Gaultier', 'Jean Paul Gaultier So Scandal!', 'Nữ', ' Eau De Parfum', '80ml', ' 4-6h', 'Vừa phải', 2980000.00, 400000.00, '10ml', 'jean-paul-gaultier-so-scandal.jpg', '2024-12-23 08:37:20', '2024-12-23 08:37:21', 1, 56, 2580000.00, 350000.00),
(46, ' Roja Parfums', 'Roja Parfum Isola Blu Parfum', 'Unisex', 'Eau De Parfum', '50ml', '8-12h', 'Xa', 13400000.00, 2500000.00, '10ml', 'Untitled-1.png', '2024-12-23 08:37:22', '2024-12-23 08:37:22', 1, 43, 11000000.00, 1800000.00),
(47, 'ATELIER MATERI', 'Atelier Materi Santal Blond EDP', 'Unisex', 'Eau De Parfum', '100ml', '6-8h', 'Vừa phải', 6500000.00, 550000.00, '10ml', 'Untitled-1_0013_atelier-materi-santal.png', '2024-12-23 08:37:25', '2024-12-23 08:37:24', 1, 56, 5900000.00, 350000.00),
(48, 'BORNTOSTANDOUT', 'BTSO Dirty Rice EDP', 'Unisex', 'Eau De Parfum', '100ml', '4-6h', 'Gần', 5300000.00, 450000.00, '10ml', 'Untitled-1_0006_borntostandout.png', '2024-12-23 08:37:23', '2024-12-23 08:37:24', 1, 67, 4600000.00, 250000.00),
(49, 'Carner Barcelona', 'Carner Barcelona Latin Lover EDP', 'Unisex', 'Eau De Parfum', '100ml', '6-8h', 'Vừa phải', 3950000.00, 250000.00, '10ml', 'Untitled-1_0004_Carner-Barcelona-Latin.png', '2024-11-23 08:37:25', '2024-11-23 08:37:27', 1, 65, 3000000.00, 150000.00),
(50, 'Clive Christian', 'Clive Christian E Cashmere Musk', 'Unisex', 'Parfum', '50ml', '8-12h', 'Xa', 12000000.00, 3500000.00, '10ml', 'Frame-1108-1.png', '2024-08-23 08:37:30', '2024-08-23 08:37:33', 1, 54, 10000000.00, 2500000.00),
(51, 'Gritti', 'Gritti Neroli Extreme', 'Unisex', 'Eau De Parfum', '100ml', '6-8h', 'Vừa phải', 5500000.00, 550000.00, '10ml', 'Frame-137.png', '2024-08-23 08:37:40', '2024-08-23 08:37:42', 1, 78, 4900000.00, 350000.00),
(52, 'Meo Fusciuni', 'Meo Fusciuni Little Song', 'Unisex', 'Parfum', '100ml', '8-12h', 'Xa', 6900000.00, 700000.00, '10ml', 'Frame-1108-4.png', '2024-08-23 08:37:44', '2024-08-23 08:37:47', 1, 65, 5900000.00, 500000.00),
(53, 'BORNTOSTANDOUT', 'BTSO Mary Jane EDP', 'Unisex', 'Eau De Parfum', '50ml', ' 6-8h', ' Vừa phải', 5330000.00, 600000.00, '10ml', 'Untitled-1_0007_5b53be67-671.png', '2024-08-23 08:37:49', '2024-08-23 08:37:51', 1, 45, 4500000.00, 350000.00),
(54, 'Creed', 'Creed Absolu Aventus', 'Nam', 'Eau De Parfum', '75ml', ' 8-10h', 'Xa', 8800000.00, 550000.00, '10ml', 'Untitled-1_0004_s-l1200-Photoroom.png', '2024-08-23 08:37:58', '2024-08-23 08:37:52', 1, 67, 7800000.00, 350000.00),
(55, 'Xerjoff', 'Xerjoff Torino 21', 'Nam', 'Eau De Parfum', '100ml', '8-12h', 'Xa', 7500000.00, 800000.00, '10ml', 'Frame-1108-9.png', '2024-08-23 08:38:03', '2024-08-23 08:38:01', 1, 56, 6000000.00, 400000.00),
(56, 'Jean Paul Gaultier', 'Jean Paul Gaultier Le Beau Paradise Garden EDP', 'Nam', 'Eau De Parfum', '125ml', '6-8h', 'Vừa phải', 3350000.00, 350000.00, '10ml', 'Untitled-1_0018_20240305-100436-Photoroom.png', '2024-08-23 08:38:05', '2024-08-23 08:38:07', 1, 68, 2900000.00, 250000.00),
(57, 'Parfums de Marly', 'Parfums de Marly Galloway', 'Nam', ' Eau De Parfum', '125ml', ' 6-8h', 'Gần', 5450000.00, 450000.00, '10ml', 'Untitled-1_0000_untitled-design.png', '2024-12-23 08:38:17', '2024-12-23 08:38:18', 1, 46, 4900000.00, 350000.00),
(58, 'Parfums MDCI', 'Parfums MDCI Bleu Satin EDP', 'Nam', 'Eau De Parfum', '75ml', '6-8h', ' Vừa phải', 6950000.00, 560000.00, '10ml', 'Untitled-1_0002_bleu-satin-Photoroom.png', '2024-11-23 08:38:19', '2024-11-23 08:38:21', 1, 89, 5000000.00, 450000.00),
(59, 'Prada', 'Prada Black Luna Rossa', 'Nam', 'Eau De Parfum', '100ml', '4-6h', 'Vừa phải', 2750000.00, 300000.00, '10ml', 'Untitled-1_0005_prada_luna_rossa.png', '2024-09-23 08:38:22', '2024-09-23 08:38:26', 1, 55, 2000000.00, 150000.00),
(60, 'Parfums de Marly', 'Parfums De Marly Sedley', 'Nam', 'Eau De Parfum', '125ml', ' 6-8h', ' Vừa phải', 5480000.00, 600000.00, '10ml', 'Untitled-1_0000_PDM.png', '2024-10-23 08:38:29', '2024-10-23 08:38:33', 1, 67, 4700000.00, 350000.00),
(61, ' Roja Parfums', 'Roja Parfums Burlington 1819', 'Unisex', 'Eau De Parfum', '100ml', '6-8h', 'Vừa phải', 11500000.00, 1600000.00, '10ml', 'Untitled-1_0013_untitled_design.png', '2024-07-23 08:38:35', '2024-07-23 08:38:38', 1, 34, 9000000.00, 1000000.00),
(62, 'Missoni', 'Missoni Wave Pour Homme EDT', 'Nam', 'Eau de Toilette', '100ml', '4-6h', 'Vừa phải', 1450000.00, 150000.00, '10ml', 'Untitled-1_0001_miss.png', '2024-12-23 08:38:41', '2024-12-23 11:34:21', 1, 12, 1000000.00, 50000.00),
(63, 'Roja Parfums', 'Roja Parfums Diaghilev Parfum', 'Nam', 'Parfum', '100ml', '8-12h', 'Xa', 29500000.00, 3000000.00, '10ml', 'Untitled-1_0016_roja-diaghilev-parfum.png', '2024-10-23 08:38:43', '2024-10-23 08:38:47', 1, 55, 25000000.00, 2300000.00),
(64, ' Ex Nihilo', 'Ex Nihilo Fleur Narcotique 10 Years Limited', 'Nữ', 'Eau De Parfum', '100ml', ' 6-8h', 'Gần', 8500000.00, 870000.00, '10ml', 'Untitled-1_0006_FLEUR_NARCOTIQUE.png', '2024-11-23 08:38:50', '2024-11-23 08:38:52', 1, 66, 7500000.00, 500000.00),
(65, 'Argos Fragrances', 'Argos Pour Femme EDP', 'Nữ', 'Eau De Parfum', '100ml', ' 6-8h', 'Vừa phải', 4350000.00, 460000.00, '10ml', 'untitled-1-0006-argos-pour-femme.png', '2024-10-23 08:38:54', '2024-10-23 08:38:55', 1, 66, 3500000.00, 200000.00),
(66, 'Gritti', 'Gritti TuTù', 'Nữ', 'Extrait de Parfum', '100ml', '8-12h', 'Xa', 7250000.00, 750000.00, '10ml', 'Frame-148.png', '2024-09-23 08:38:59', '2024-09-23 08:39:02', 1, 55, 5000000.00, 350000.00),
(67, 'maginary Authors', 'Imaginary Authors Fox In The Flowerbed', 'Nữ', 'Eau De Parfum', '50ml', '4-6h', 'Vừa phải', 3200000.00, 340000.00, '10ml', 'Untitled-1_0009_IMG_2281_2048x-Photoroom.png', '2024-08-23 08:39:04', '2024-08-23 08:39:06', 1, 55, 2400000.00, 230000.00),
(68, 'Parfums MDCI', 'Parfums MDCI Cio Cio San EDP', 'Nữ', ' Eau De Parfum', '75ml', '6-8h', ' Vừa phải', 6950000.00, 700000.00, '10ml', 'Untitled-1_0005_MDCI-PARFUMS.png', '2024-07-23 08:39:08', '2024-07-23 08:39:11', 1, 77, 6000000.00, 450000.00),
(69, ' Gritti', 'Gritti Adèle', 'Nữ', 'Eau De Parfum', '100ml', ' 6-8h', 'Vừa phải', 5500000.00, 600000.00, '10ml', 'Frame-141.png', '2024-06-23 08:39:14', '2024-06-23 08:39:18', 1, 55, 4600000.00, 350000.00),
(70, 'Parfums MDCI', 'Parfums MDCI Paris Peche Cardinal EDP', 'Nữ', 'Eau De Parfum', '75ml', '6-8h', 'Vừa phải', 6950000.00, 700000.00, '10ml', 'MDCI-Peche-Cardinal.png', '2024-12-23 08:39:28', '2024-12-23 08:39:28', 1, 44, 6000000.00, 350000.00),
(71, 'Prada', 'Prada Paradoxe EDP', 'Nữ', 'Eau De Parfum', '80ml', '6-8h', ' Vừa phải', 2650000.00, 270000.00, '10ml', 'Untitled-1_0001_prada-paraboxe.png', '2024-12-23 08:39:29', '2024-12-23 08:39:30', 1, 55, 1700000.00, 200000.00),
(72, 'Ex Nihilo', 'Ex Nihilo My Sweetest Morphine', 'Nữ', 'Parfum', '100ml', ' 8-12h', 'Xa', 8800000.00, 900000.00, '10ml', 'Frame-1108-8.png', '2024-12-23 08:39:31', '2024-12-23 08:39:31', 1, 55, 7500000.00, 600000.00),
(74, 'Jean Paul Gaultier', 'Jean Paul Gaultier Le Male Elixir Parfum', 'Nam', 'Parfum', '125ml', '8-12h', 'Xa', 3850000.00, 245000.00, '10ml', 'Frame-1426-2-1.png', '2024-12-15 20:49:02', '2024-12-15 20:49:02', 1, 45, 3000000.00, 200000.00),
(75, 'Liis Fragrances', 'Liis Fragrances Bo EDP', 'Unisex', 'Eau De Parfum', '100ml', '6-8h', 'Xa', 5100000.00, 1000000.00, '10ml', 'spct-liis-bo-edp-1-1.jpg', '2024-12-15 21:33:49', '2024-12-15 21:33:49', 1, 55, 4200000.00, 500000.00),
(76, 'Memoire Des Sens', 'Mémoire Des Sens Oudessens EDP', 'Unisex', 'Eau De Parfum', '100ml', '6-8h', 'Vừa', 2850000.00, 280000.00, '10ml', 'Frame-1426.png', '2024-12-15 21:36:34', '2024-12-15 21:36:34', 1, 66, 2400000.00, 100000.00),
(77, 'Creed', 'Creed Carmina EDP', 'Nữ', 'Eau De Parfum', '75ml', '6-8h', 'Vừa phải', 6950000.00, 950000.00, '10ml', 'Frame-357.jpg', '2024-12-15 21:40:17', '2024-12-15 21:40:17', 1, 55, 6300000.00, 500000.00),
(78, 'BDK Parfums', 'BDK Parfums Rouge Smoking', 'Unisex', 'Eau De Parfum', '100ml', '6-8h', 'Vừa phải', 4850000.00, 450000.00, '10ml', 'Parfums-RougeSmoking_1-Packshot-Nom.webp', '2024-12-15 21:45:08', '2024-12-15 21:45:08', 1, 45, 4400000.00, 300000.00),
(79, 'Gritti', 'Gritti Kill The Lights', 'Unisex', 'Extrait de Parfum', '100ml', '8-12h', 'Xa', 7350000.00, 750000.00, '10ml', 'Frame-145.png', '2024-12-15 21:51:18', '2024-12-15 21:51:18', 1, 45, 6500000.00, 400000.00),
(80, 'abc', 'abc', 'Nam', 'Eau De Parfum', '100ml', '6-8h', 'Vừa phải', 3000000.00, 200000.00, '10ml', 'giao-hang.webp', '2024-12-23 19:29:37', '2024-12-23 19:29:37', 1, 56, 2500000.00, 50000.00);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tinh_trang` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `birthDay` date DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `tinh_trang`, `created_at`, `updated_at`, `role`, `birthDay`, `phoneNumber`, `name`) VALUES
(6, 'manhtuan23022005@gmail.com', '$2y$12$qepcJUdtc2yl1C..fEPHOOk2o3r0b/4NTZoBCFbTEwsTDPytmtGCC', 1, '2024-11-29 01:03:00', '2024-12-23 19:26:05', 1, '2009-06-09', '0332933892', 'Diệp Mạnh Khang'),
(7, 'diepquoctinh0@gmail.com', '$2y$12$VrQMW64yIYNpFD5TNYNSt.zLElWBxNFUXr2UVV5yBgFDNuxm/oqbC', 1, '2024-11-29 01:08:27', '2024-11-29 01:09:44', 0, '1975-03-26', '0905727997', 'Diệp Quốc Tịnh'),
(8, 'thanhtoan2325@gmail.com', '$2y$12$rN5KCtgqaqgLjKCF0JFHKeKAovOT9fFd62YCh2pXU/Kwmst8wzMyi', 1, '2024-11-29 18:38:53', '2024-12-23 10:48:24', 0, '2005-06-15', '0339439567', 'Nguyễn Thanh Toàn');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `giaTienLon` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `name`, `image`, `giaTienLon`, `created_at`, `updated_at`) VALUES
(10, 7, 37, 'Ex Nihilo Santal Calling EDP', 'Untitled-1_0003_Nuoc-hoa.png', 8500000.00, '2024-12-23 00:11:16', '2024-12-23 00:11:16'),
(11, 7, 38, 'Gritti Tangerina', 'Frame-140.png', 5500000.00, '2024-12-23 00:11:31', '2024-12-23 00:11:31'),
(12, 6, 7, 'Alexandria Fragrances Sparkling Bergamot', 'Untitled-1_0004_Alexandria-Fragrances.png', 2850000.00, '2024-12-23 19:21:50', '2024-12-23 19:21:50'),
(13, 6, 1, 'Afnan Supremacy Silver', 'webbb02-26-scaled.jpg', 1450000.00, '2024-12-24 04:37:16', '2024-12-24 04:37:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danh_gia_user_id_foreign` (`user_id`),
  ADD KEY `danh_gia_don_hang_id_foreign` (`don_hang_id`),
  ADD KEY `danh_gia_nuoc_hoa_id_foreign` (`nuoc_hoa_id`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `don_hang_madonhang_unique` (`maDonHang`),
  ADD KEY `don_hang_user_id_foreign` (`user_id`),
  ADD KEY `don_hang_order_id_foreign` (`order_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khach_da_mua`
--
ALTER TABLE `khach_da_mua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khach_da_mua_khachhangid_foreign` (`khachHangID`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mo_ta`
--
ALTER TABLE `mo_ta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mo_ta_nuoc_hoa_id_foreign` (`nuoc_hoa_id`);

--
-- Indexes for table `nuoc_hoa`
--
ALTER TABLE `nuoc_hoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlist_user_id_foreign` (`user_id`),
  ADD KEY `wishlist_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `danh_gia`
--
ALTER TABLE `danh_gia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `khach_da_mua`
--
ALTER TABLE `khach_da_mua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mo_ta`
--
ALTER TABLE `mo_ta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nuoc_hoa`
--
ALTER TABLE `nuoc_hoa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD CONSTRAINT `danh_gia_don_hang_id_foreign` FOREIGN KEY (`don_hang_id`) REFERENCES `don_hang` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `danh_gia_nuoc_hoa_id_foreign` FOREIGN KEY (`nuoc_hoa_id`) REFERENCES `nuoc_hoa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `danh_gia_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `nuoc_hoa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `don_hang_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `khach_da_mua`
--
ALTER TABLE `khach_da_mua`
  ADD CONSTRAINT `khach_da_mua_khachhangid_foreign` FOREIGN KEY (`khachHangID`) REFERENCES `khach_hang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mo_ta`
--
ALTER TABLE `mo_ta`
  ADD CONSTRAINT `mo_ta_nuoc_hoa_id_foreign` FOREIGN KEY (`nuoc_hoa_id`) REFERENCES `nuoc_hoa` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `nuoc_hoa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlist_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
