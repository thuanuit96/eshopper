-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 06, 2018 lúc 09:46 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `atshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`Id`, `Name`, `created_at`, `updated_at`) VALUES
(1, 'Thời trang nam', NULL, NULL),
(2, 'Thời trang nữ', NULL, NULL),
(3, 'Phụ kiện', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_06_21_181359_create_kryptonit3_counter_page_table', 1),
(4, '2015_06_21_193003_create_kryptonit3_counter_visitor_table', 1),
(5, '2015_06_21_193059_create_kryptonit3_counter_page_visitor_table', 1),
(6, '2017_12_11_061154_create_wishlists_table', 1),
(7, '2018_04_17_051123_categories', 1),
(8, '2018_04_17_052131_products', 1),
(9, '2018_04_17_052225_order', 1),
(10, '2018_04_17_052236_order_detail', 1),
(11, '2018_04_17_052330_slideshow', 1),
(12, '2018_04_17_052359_sub_category', 1),
(13, '2018_05_03_133928_promotion', 1),
(14, '2018_05_15_074558_news', 1),
(15, '2018_05_24_031558_product_sizes', 1),
(16, '2018_05_28_030421_staff', 1),
(17, '2018_06_02_155146_create_shoppingcart_table', 1),
(18, '2018_06_05_175909_product_colors', 1),
(19, '2018_06_15_151333_product_detail', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Intro` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Content` longtext COLLATE utf8mb4_unicode_ci,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `Images` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`Id`, `Title`, `Slug`, `Author`, `Intro`, `Content`, `Status`, `user_id`, `Images`, `created_at`, `updated_at`) VALUES
(1, 'Túi thủ công dáng tròn \'chiếm sóng\' xu hướng phụ kiện hè 2018', 'tui-thu-cong-dang-tron-chiem-song-xu-huong-phu-kien-he-2018', 'admin', '<p>T&uacute;i x&aacute;ch h&igrave;nh mặt nguyệt thiết kế tr&ecirc;n chất liệu thi&ecirc;n nhi&ecirc;n được c&aacute;c t&iacute;n đồ thời trang y&ecirc;u th&iacute;ch khi xuống phố.</p>', '<p>D&ugrave; những bức h&igrave;nh được c&ocirc; n&agrave;ng đăng tải tr&ecirc;n trang c&aacute; nh&acirc;n kh&aacute; &iacute;t ỏi nhưng mỗi lần đăng đều nhận được sự ủng hộ của người h&acirc;m mộ. Fan đ&atilde; c&oacute; những b&igrave;nh luận phấn kh&iacute;ch trước diện mạo v&agrave; thần th&aacute;i cuốn h&uacute;t của Đ&agrave;m Thu Trang. D&ugrave; những bức h&igrave;nh được c&ocirc; n&agrave;ng đăng tải tr&ecirc;n trang c&aacute; nh&acirc;n kh&aacute; &iacute;t ỏi nhưng mỗi lần đăng đều nhận được sự ủng hộ của người h&acirc;m mộ. Fan đ&atilde; c&oacute; những b&igrave;nh luận phấn kh&iacute;ch trước diện mạo v&agrave; thần th&aacute;i cuốn h&uacute;t của Đ&agrave;m Thu Trang. D&ugrave; những bức h&igrave;nh được c&ocirc; n&agrave;ng đăng tải tr&ecirc;n trang c&aacute; nh&acirc;n kh&aacute; &iacute;t ỏi nhưng mỗi lần đăng đều nhận được sự ủng hộ của người h&acirc;m mộ. Fan đ&atilde; c&oacute; những b&igrave;nh luận phấn kh&iacute;ch trước diện mạo v&agrave; thần th&aacute;i cuốn h&uacute;t của Đ&agrave;m Thu Trang. D&ugrave; những bức h&igrave;nh được c&ocirc; n&agrave;ng đăng tải tr&ecirc;n trang c&aacute; nh&acirc;n kh&aacute; &iacute;t ỏi nhưng mỗi lần đăng đều nhận được sự ủng hộ của người h&acirc;m mộ. Fan đ&atilde; c&oacute; những b&igrave;nh luận phấn kh&iacute;ch trước diện mạo v&agrave; thần th&aacute;i cuốn h&uacute;t của Đ&agrave;m Thu Trang. D&ugrave; những bức h&igrave;nh được c&ocirc; n&agrave;ng đăng tải tr&ecirc;n trang c&aacute; nh&acirc;n kh&aacute; &iacute;t ỏi nhưng mỗi lần đăng đều nhận được sự ủng hộ của người h&acirc;m mộ. Fan đ&atilde; c&oacute; những b&igrave;nh luận phấn kh&iacute;ch trước diện mạo v&agrave; thần th&aacute;i cuốn h&uacute;t của Đ&agrave;m Thu Trang. D&ugrave; những bức h&igrave;nh được c&ocirc; n&agrave;ng đăng tải tr&ecirc;n trang c&aacute; nh&acirc;n kh&aacute; &iacute;t ỏi nhưng mỗi lần đăng đều nhận được sự ủng hộ của người h&acirc;m mộ. Fan đ&atilde; c&oacute; những b&igrave;nh luận phấn kh&iacute;ch trước diện mạo v&agrave; thần th&aacute;i cuốn h&uacute;t của Đ&agrave;m Thu Trang. <strong> D&ugrave; những bức h&igrave;nh được c&ocirc; n&agrave;ng đăng tải tr&ecirc;n trang c&aacute; nh&acirc;n kh&aacute; &iacute;t ỏi nhưng mỗi lần đăng đều nhận được sự ủng hộ của người h&acirc;m mộ. Fan đ&atilde; c&oacute; những b&igrave;nh luận phấn kh&iacute;ch trước diện mạo v&agrave; thần th&aacute;i cuốn h&uacute;t của Đ&agrave;m Thu Trang.</strong>.</p>', 'Hiển thị', NULL, '1530556707_tintuc1_3.jpg', '2018-07-02 11:38:27', '2018-07-02 11:38:27'),
(2, 'Túi thủ công dáng tròn \'chiếm sóng\' xu hướng phụ k...', 'tui-thu-cong-dang-tron-chiem-song-xu-huong-phu-k', 'thuan thuân', NULL, '<p>T&uacute;i thủ c&ocirc;ng d&aacute;ng tr&ograve;n &#39;chiếm s&oacute;ng&#39; xu hướng phụ k...</p>', 'Hiển thị', NULL, '1530556775_tintuc1_1.jpg', '2018-07-02 11:39:35', '2018-07-02 11:39:35'),
(4, 'Túi thủ công dáng tròn \'chiếm sóng\' xu hướng phụ kiện hè 2018', 'tui-thu-cong-dang-tron-chiem-song-xu-huong-phu-kien-he-2018', 'Hoàng văn thuân', NULL, '<p>aa</p>', 'Hiển thị', NULL, '1530556230_1_2_10_1_09_001_118_01_10200002_02_thumb_294x441.jpg', '2018-07-02 11:37:57', '2018-07-02 11:37:57'),
(5, 'Túi thủ công dáng tròn \'chiếm sóng\' xu hướng phụ kiện hè 2018 1111', 'tui-thu-cong-dang-tron-chiem-song-xu-huong-phu-kien-he-2018-1111', 'thuan', NULL, NULL, 'Hiển thị', NULL, '1530556920_tintuc1_2.jpg', '2018-07-02 11:42:00', '2018-07-02 11:42:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `Id` int(10) UNSIGNED NOT NULL,
  `UserId` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PhoneNumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Order_date` date DEFAULT NULL,
  `Total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Confirm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Payment_Method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Payment_Status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`Id`, `UserId`, `Name`, `Email`, `Address`, `PhoneNumber`, `Order_date`, `Total`, `Note`, `Confirm`, `Payment_Method`, `Payment_Status`, `Status`, `created_at`, `updated_at`) VALUES
(22, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.cim', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '405,259.00', NULL, 'Đã xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 05:24:01', '2018-06-28 05:25:40'),
(23, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '810,518.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 05:24:46', '2018-06-28 05:24:46'),
(24, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '1,621,036.00', '116434 ngô quên tanh thoauas', 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 06:31:14', '2018-06-28 06:31:14'),
(25, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '1,621,036.00', '116434 ngô quên tanh thoauas', 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 06:31:19', '2018-06-28 06:31:19'),
(26, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '1,621,036.00', 'aaaaaaaa', 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 09:15:21', '2018-06-28 09:15:21'),
(27, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.cim', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '405,259.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 09:38:19', '2018-06-28 09:38:19'),
(28, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '405,259.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 09:40:23', '2018-06-28 09:40:23'),
(29, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '405,259.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 09:41:17', '2018-06-28 09:41:17'),
(30, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '405,259.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 09:47:12', '2018-06-28 09:47:12'),
(31, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '405,259.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 09:48:43', '2018-06-28 09:48:43'),
(32, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '1,045,900.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 10:01:01', '2018-06-28 10:01:01'),
(33, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '1,045,900.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 10:01:48', '2018-06-28 10:01:48'),
(34, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '1,045,900.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 10:01:53', '2018-06-28 10:01:53'),
(35, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Châu Thành-Tỉnh Sóc Trăng', '0973962984', '2018-06-28', '1,045,900.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 10:08:25', '2018-06-28 10:08:25'),
(36, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Châu Thành-Tỉnh Sóc Trăng', '0973962984', '2018-06-28', '1,045,900.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 10:08:49', '2018-06-28 10:08:49'),
(37, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Châu Thành-Tỉnh Sóc Trăng', '0973962984', '2018-06-28', '1,045,900.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 10:09:53', '2018-06-28 10:09:53'),
(38, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Châu Thành-Tỉnh Sóc Trăng', '0973962984', '2018-06-28', '1,045,900.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 10:10:14', '2018-06-28 10:10:14'),
(39, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Châu Thành-Tỉnh Sóc Trăng', '0973962984', '2018-06-28', '1,045,900.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 10:22:35', '2018-06-28 10:22:35'),
(40, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '1,045,900.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 10:25:00', '2018-06-28 10:25:00'),
(41, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '1,045,900.00', NULL, 'Chưa xác nhận', NULL, 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-28 10:29:22', '2018-06-28 10:29:22'),
(42, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-28', '1,045,900.00', NULL, 'Chưa xác nhận', 'COD', 'Chưa Thanh Toán', 'Đang giao hàng', '2018-06-28 10:33:34', '2018-06-30 03:46:40'),
(43, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.com', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-29', '1,000.00', NULL, 'Đã xác nhận', 'Ngân lượng', 'Chưa Thanh Toán', 'Đã giao hàng', '2018-06-29 01:23:17', '2018-06-30 03:44:40'),
(47, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.cim', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '0973962984', '2018-06-30', '2,000.00', NULL, 'Chưa xác nhận', 'COD', 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-06-30 12:58:08', '2018-06-30 12:58:08'),
(48, NULL, 'Hoàng văn thuân', 'thuanuit96@gmail.cim', '116434 ngô quên tanh thoauas-Huyện Thới Bình-Tỉnh Cà Mau', '973962984', '2018-07-02', '2,000.00', 'aaaa', 'Chưa xác nhận', 'Ngân lượng', 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-07-02 11:51:25', '2018-07-02 11:51:25'),
(49, NULL, 'thuanuit96123', 'thuanuit96123@gmail.com', 'Số 24 đường 16-Quận 3-Tỉnh TP Hồ Chí Minh', '0973962984', '2018-07-03', '2,000.00', 'giao vào thứ 7 nha', 'Đã xác nhận', 'Ngân lượng', 'Đã thanh toán', 'Đang giao hàng', '2018-07-03 10:17:04', '2018-07-04 02:08:18'),
(51, '14', 'thuanuit9696', 'thuan7181996@gmail.com', 'sđsad-Huyện Trần Đề-Tỉnh Sóc Trăng', '0973962984', '2018-07-04', '2,000.00', NULL, 'Đã xác nhận', 'COD', 'Chưa Thanh Toán', 'Đang giao hàng', '2018-07-04 02:01:42', '2018-07-04 02:02:48'),
(52, '21', 'Thuần', 'thuan7181996@gmail.com', 'Số 24 đường 16-Quận 1-Tỉnh TP Hồ Chí Minh', '0973962984', '2018-07-05', '2,000.00', 'giao nhanh', 'Chưa xác nhận', 'Ngân lượng', 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-07-05 01:11:10', '2018-07-05 01:11:10'),
(53, '23', 'thuanuit96', 'thuan7181996@gmail.com', '112 cự jut-Huyện Cư Jút-Tỉnh Đắk Nông', '0973962984', '2018-07-05', '2,000.00', 'aaa', 'Chưa xác nhận', 'Ngân lượng', 'Chưa Thanh Toán', 'Chưa giao hàng', '2018-07-05 01:38:44', '2018-07-05 01:38:44'),
(54, '24', 'Thuần', 'navynbk@gmail.com', '22-Huyện Thanh Bình-Tỉnh Đồng Tháp', '0973962984', '2018-07-05', '2,000.00', 'aaa', 'Chưa xác nhận', 'Ngân lượng', 'Đã thanh toán', 'Chưa giao hàng', '2018-07-05 01:48:09', '2018-07-05 01:49:02'),
(56, '28', 'Thuần', 'navynbk@gmail.com', 'Số 24 đường 16-Quận 1-Tỉnh TP Hồ Chí Minh', '0973962984', '2018-07-05', '2,000.00', 'giao nhanh', 'Đã xác nhận', 'Ngân lượng', 'Đã thanh toán', 'Đang giao hàng', '2018-07-05 02:26:37', '2018-07-05 02:29:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `Id` int(10) UNSIGNED NOT NULL,
  `OrderId` int(10) UNSIGNED NOT NULL,
  `pro_id` int(10) UNSIGNED NOT NULL,
  `Quantity` double(8,2) DEFAULT NULL,
  `Unit_Price` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`Id`, `OrderId`, `pro_id`, `Quantity`, `Unit_Price`, `created_at`, `updated_at`) VALUES
(63, 48, 7, 1.00, 2000.00, '2018-07-02 11:51:25', '2018-07-02 11:51:25'),
(64, 49, 7, 1.00, 2000.00, '2018-07-03 10:17:04', '2018-07-03 10:17:04'),
(66, 51, 7, 1.00, 2000.00, '2018-07-04 02:01:42', '2018-07-04 02:01:42'),
(67, 52, 8, 1.00, 2000.00, '2018-07-05 01:11:10', '2018-07-05 01:11:10'),
(68, 53, 7, 1.00, 2000.00, '2018-07-05 01:38:44', '2018-07-05 01:38:44'),
(69, 54, 7, 1.00, 2000.00, '2018-07-05 01:48:09', '2018-07-05 01:48:09'),
(71, 56, 7, 1.00, 2000.00, '2018-07-05 02:26:37', '2018-07-05 02:26:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('thuanuit96@gmail.com', '$2y$10$Yk97K2QXhwFfafW6STOYjOnkfbqhwRjllgzKozsCqKRO20vm1WAMq', '2018-06-20 10:38:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_color` int(10) UNSIGNED DEFAULT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Price` double(8,2) DEFAULT NULL,
  `Slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubCategoryId` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`Id`, `Name`, `Code`, `id_color`, `Description`, `Price`, `Slug`, `Image`, `SubCategoryId`, `created_at`, `updated_at`) VALUES
(1, 'ÁO THUN NGẮN TAY NAM DÁNG CƠ BẢN', 'SP821', 6, NULL, 2000.00, 'ao-thun-ngan-tay-nam-dang-co-ban', '1530554851_1_2_16_2_05_002_117_23_11300001_01_thumb_294x441.jpg', 2, NULL, '2018-07-02 11:07:31'),
(3, 'VÁY BABYDOLL HAI DÂY TRỄ VAI.', 'SP912', 5, NULL, 449000.00, 'vay-babydoll-hai-day-tre-vai', '1530554408_1_2_10_1_06_012_118_23_10100002_01_thumb_294x441.jpg', 10, NULL, '2018-07-02 11:00:08'),
(5, 'ÁO THUN NGẮN TAY NỮ DÁNG CƠ BẢN', 'SP557', 2, NULL, 399000.00, 'ao-thun-ngan-tay-nu-dang-co-ban', '1530552882_1530552466_1_2_02_1_02_077_118_01_10600003_04_thumb_294x440.jpg', 9, NULL, '2018-07-02 10:34:42'),
(6, 'THẮT LƯNG DÂY DÙ PHỐI DA DẬP NỔI', 'SP145', 6, NULL, 240438.00, 'that-lung-day-du-phoi-da-dap-noi', '1530024674_1_2_12_3_11_001_118_23_10200002_01_thumb_294x441.jpg', 13, NULL, '2018-06-26 07:51:14'),
(7, 'VÁY THUN NGẮN TAY BOSUA X', 'SP203', 4, NULL, 288632.00, 'vay-thun-ngan-tay-bosua-x', '1530553594_1_2_26_1_04_004_217_01_10200002_01_thumb_294x441.jpg', 10, NULL, '2018-07-02 10:46:34'),
(8, 'CHÂN VÁY XẾP LI NỮ KHÓA KÉO BÊN', 'SP518', 5, NULL, 269422.00, 'chan-vay-xep-li-nu-khoa-keo-ben', '1530024781_1_2_25_1_06_003_118_23_50300002_01_thumb_294x440.jpg', 10, NULL, '2018-06-26 07:53:01'),
(9, 'SƠ MI NGẮN TAY NỮ DÁNG CROP VẠT', 'SP863', 4, NULL, 116108.00, 'so-mi-ngan-tay-nu-dang-crop-vat', '1530553644_1_2_17_1_04_010_118_23_40800029_03_thumb_294x440.jpg', 8, NULL, '2018-07-02 10:47:24'),
(16, 'TÚI XÁCH VẢI DÙ IN TYPOGRAPHIC MÀU HỒNG', 'SP352', 7, NULL, 331596.00, 'tui-xach-vai-du-in-typographic-mau-hong', '1530553922_1_2_29_3_11_020_118_23_11200011_01_thumb_294x441.jpg', 15, NULL, '2018-07-02 10:52:02'),
(17, 'SƠ MI DÀI TAY NỮ DÁNG RỘNG VẠT', 'SP711', 2, NULL, 383762.00, 'so-mi-dai-tay-nu-dang-rong-vat', '1530554235_1_2_17_1_05_006_118_23_10600004_02_thumb_294x441.jpg', 8, NULL, '2018-07-02 10:58:22'),
(18, 'QUẦN KHAKI BÒ SỮA NAM. SỮA TƯƠI', 'SP255', 4, NULL, 447658.00, 'quan-khaki-bo-sua-nam-sua-tuoi', '1530554683_1_thumb_294x441.jpg', 1, NULL, '2018-07-02 11:04:43'),
(19, 'BALO MINI POM POM LÔNG BE', 'SP665', 7, NULL, 374213.00, 'balo-mini-pom-pom-long-be', '1530554755_1_2_29_3_11_003_118_23_10400011_01_thumb_294x441.jpg', 15, NULL, '2018-07-02 11:05:55'),
(20, 'Áo khoác mùa hè hà nội 56', 'SP863', NULL, NULL, 197760.00, 'ao-khoac-mua-he-ha-noi-56', '1529319872_1529319856_dsc_7670_thumb_294x441.jpg', 12, NULL, '2018-07-02 11:06:26'),
(21, 'ÁO THUN NGẮN TAY NAM DÁNG LOOSE', 'SP598', 6, NULL, 399.00, 'ao-thun-ngan-tay-nam-dang-loose', '1530552307_1529429898_1529319856_dsc_7670_thumb_294x441.jpg', 2, '2018-07-02 10:00:00', '2018-07-02 10:25:07'),
(23, 'ÁO PHÔNG NAM IN TYPOGRAPHIC', 'SP342', 5, NULL, 399.00, 'ao-phong-nam-in-typographic', '1530557780_1_2_02_2_02_025_118_01_1010000205_600x899_thumb_294x441.jpg', 2, '2018-07-02 11:56:20', '2018-07-02 11:56:20'),
(24, 'ÁO PHÔNG NGẮN TAY NAM IN GRAPHIC', 'SP760', 6, NULL, 3991.00, 'ao-phong-ngan-tay-nam-in-graphic', '1530781307_1_2_02_2_02_045_118_01_10200002_04_thumb_294x441.jpg', 2, '2018-07-02 11:57:36', '2018-07-05 02:01:47'),
(25, 'ÁO PHÔNG NGẮN TAY NAM IN GRAPHIC', 'SP357', 5, NULL, 399.00, 'ao-phong-ngan-tay-nam-in-graphic', '1530557895_1_2_02_2_02_041_118_01_10100002_03_thumb_294x441.jpg', 2, '2018-07-02 11:58:15', '2018-07-02 11:58:15'),
(26, 'áo thum nam 2018', 'SP591', 1, NULL, 200000.00, 'ao-thum-nam-2018', '1530781244_1_2_02_2_02_025_118_01_1010000205_600x899_thumb_294x441.jpg', 2, '2018-07-05 02:00:44', '2018-07-05 02:00:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_colors`
--

CREATE TABLE `product_colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `style` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_colors`
--

INSERT INTO `product_colors` (`id`, `name`, `title`, `style`, `created_at`, `updated_at`) VALUES
(1, 'Đỏ', 'Red', 'red', NULL, NULL),
(2, 'Xanh', 'blue', 'blue', NULL, NULL),
(3, 'vàng', 'yellow', 'yellow', NULL, NULL),
(4, 'Nâu', 'Nâu', '#777777', NULL, NULL),
(5, 'Trắng', 'Trắng', 'white', NULL, NULL),
(6, 'Đen', 'Đen', 'black', NULL, NULL),
(7, 'Hồng', 'Hồng', '#FF99FF	', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` double(8,2) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_detail`
--

INSERT INTO `product_detail` (`id`, `size`, `quantity`, `status`, `product_id`, `image1`, `image2`, `image3`, `created_at`, `updated_at`) VALUES
(7, 'S', 11.00, 'Sẵn hàng', 1, '1530551795_1529319872_1529319856_dsc_7670_thumb_294x441.jpg', NULL, NULL, '2018-07-02 10:16:35', '2018-07-02 10:16:35'),
(8, 'XL', 22.00, 'Sẵn hàng', 1, '1530551894_1529375418_1529325932_1529319872_1529319856_dsc_7670_thumb_294x441.jpg', NULL, NULL, '2018-07-02 10:18:14', '2018-07-02 10:18:14'),
(9, 'Free', 11.00, 'Sẵn hàng', 3, '1530551999_1529996697_1_2_30_3_11_030_118_23_10800020_01_thumb_294x440.jpg', NULL, NULL, '2018-07-02 10:19:59', '2018-07-02 10:19:59'),
(10, 'S', 11.00, 'Sẵn hàng', 5, '1530552466_1_2_02_1_02_077_118_01_10600003_04_thumb_294x440.jpg', NULL, NULL, '2018-07-02 10:27:46', '2018-07-02 10:27:46'),
(11, 'S', 11.00, 'Sẵn hàng', 26, '1530781271_1_2_02_2_02_041_118_01_10100002_03_thumb_294x441.jpg', NULL, NULL, '2018-07-05 02:01:11', '2018-07-05 02:01:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotion`
--

CREATE TABLE `promotion` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`id`, `name`, `code`, `email`, `password`, `phone`, `sex`, `birthday`, `address`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'NV', 'thuanuit96@gmail.com', '$2y$10$WKW9U7eN6g1zBXTZQqZW3.RTs6SdRDIJpF2Cpa447LP/JrVx5Jalq', '0973962984', 'Nam', '2018-07-07', 'Linh trung,thu duc,ho chi minh', 1, 'Kc3SvaPiXzhP75J08YEm2ws6MhbKdj8iJciKxGHc', NULL, '2018-07-05 10:09:29'),
(2, 'hoang van thuan', 'NV', '01654345733@gmail.com', '$2y$10$WiNpHOxNCj02agdETfa0wuTiDfaFNw2vblIQF1rPIXDFu3MK1bYTm', '0973962984', 'Nam', '2018-07-04', 'Số 24 đường 16', 3, '0fxQEtfEKCeH2eFQiUFcb9ekA9QZam5FUolxWFmf', '2018-07-05 02:05:10', '2018-07-05 02:05:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcategory`
--

CREATE TABLE `subcategory` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CategoryId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subcategory`
--

INSERT INTO `subcategory` (`Id`, `Name`, `CategoryId`, `created_at`, `updated_at`) VALUES
(1, 'Quần tây nam', 1, NULL, NULL),
(2, 'Áo thun nam', 1, NULL, NULL),
(8, 'Áo sơ mi nữ', 2, NULL, NULL),
(9, 'Áo thun áo kiểu', 2, NULL, NULL),
(10, 'Đầm quần', 2, NULL, NULL),
(11, 'Áo khoác nữ', 2, NULL, NULL),
(12, 'Đồ mặc nhà,áo ngủ', 2, NULL, NULL),
(13, 'Mũ', 3, NULL, NULL),
(14, 'Thắt lưng', 3, NULL, NULL),
(15, 'Túi xách', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `fullname`, `phone`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(26, 'thuanuit961234', 'thuanuit96123@gmail.com', '$2y$10$Iyu/dhvmGbq9zSqEy35/wuHmj/Zrctn25B4qCjyu/pqCHftUf4bZ6', 'hoang van thuan', '0973962984', 'null', 'null', 'JTtoxrTWENx4Rti8v493Wl7bc6BonKvAwJKG6wnoPzi6tZXqSc8ZfJv84Y87', '2018-07-05 01:54:38', '2018-07-05 01:54:38'),
(27, 'thuanuit96', 'thuan7181996@gmail.com', '$2y$10$hr1E.w06FtyTabmN6dUHIu39msYEw62fCoSPoED95P2gDslOHseDu', 'hoang van thuan', '0973962984', 'null', 'null', 'gOxxdpdzyvKZya0dAMfldeRMmZ3V7h53xqGJOsKihjzWaukF5Zzq7rEB7kN4', '2018-07-05 02:24:07', '2018-07-05 02:24:07'),
(28, 'Thuần', 'navynbk@gmail.com', 'EAACYKLF9iB8BAD0MgvL0yxurIAeZB91fzusbn9LPYksuksgTEn0CFC6R5bzFPA6IQCpYZBs5vFYdw14VQWn0tFqlZAZBy7WcVZA46rJZBJcd437ZA8vM7qas72NCMvakEsZAN4g9ZBeCKoV6i819IbXo0EvROfMHm39icbe7SvpUSbAZDZD', 'Thuần', NULL, 'facebook', '2018963728317256', 'kgc9v4E3o6AsGVz0wVpBKgKXRx7GYHaiXEgXfHw7sRKccG1UwYzS7iNwyPW8', '2018-07-05 02:24:25', '2018-07-05 02:24:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 8, 3, '2018-06-20 07:10:49', '2018-06-20 07:10:49'),
(4, 9, 4, '2018-06-20 19:39:21', '2018-06-20 19:39:21'),
(5, 9, 1, '2018-06-20 19:39:23', '2018-06-20 19:39:23'),
(6, 9, 2, '2018-06-20 19:40:29', '2018-06-20 19:40:29'),
(7, 10, 1, '2018-06-26 08:13:07', '2018-06-26 08:13:07'),
(8, 10, 2, '2018-06-26 08:13:09', '2018-06-26 08:13:09'),
(9, 10, 3, '2018-06-26 08:13:11', '2018-06-26 08:13:11'),
(10, 10, 7, '2018-06-26 08:13:13', '2018-06-26 08:13:13'),
(11, 18, 1, '2018-07-05 00:57:59', '2018-07-05 00:57:59'),
(12, 18, 3, '2018-07-05 00:58:02', '2018-07-05 00:58:02'),
(13, 18, 6, '2018-07-05 00:58:04', '2018-07-05 00:58:04'),
(14, 21, 1, '2018-07-05 01:09:25', '2018-07-05 01:09:25'),
(15, 21, 3, '2018-07-05 01:09:27', '2018-07-05 01:09:27'),
(16, 21, 6, '2018-07-05 01:27:13', '2018-07-05 01:27:13'),
(17, 21, 7, '2018-07-05 01:27:16', '2018-07-05 01:27:16'),
(18, 23, 18, '2018-07-05 01:37:23', '2018-07-05 01:37:23'),
(19, 23, 3, '2018-07-05 01:37:26', '2018-07-05 01:37:26'),
(20, 24, 1, '2018-07-05 01:46:27', '2018-07-05 01:46:27'),
(21, 24, 3, '2018-07-05 01:46:29', '2018-07-05 01:46:29'),
(24, 28, 1, '2018-07-05 02:25:18', '2018-07-05 02:25:18');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `order_detail_orderid_foreign` (`OrderId`),
  ADD KEY `order_detail_pro_id_foreign` (`pro_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `products_id_color_foreign` (`id_color`);

--
-- Chỉ mục cho bảng `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_detail_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_email_unique` (`email`);

--
-- Chỉ mục cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `subcategory_categoryid_foreign` (`CategoryId`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `promotion`
--
ALTER TABLE `promotion`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_orderid_foreign` FOREIGN KEY (`OrderId`) REFERENCES `order` (`Id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_detail_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `product_detail` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_color_foreign` FOREIGN KEY (`id_color`) REFERENCES `product_colors` (`id`);

--
-- Các ràng buộc cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`Id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_categoryid_foreign` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`Id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
