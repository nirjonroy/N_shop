-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 05:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_08_19_151004_create_posts_table', 1),
(2, '2020_08_22_082330_creeate_tbl_admin_table', 1),
(3, '2020_08_31_134506_create_tbl_slider_table', 1),
(4, '2020_09_10_061339_create_tbl_products_table', 1),
(5, '2020_10_03_144409_create_tbl_categories_table', 2),
(6, '2020_10_05_072312_create_tbl_manufactures_table', 3),
(7, '2020_10_05_125212_create_tbl_products_table', 4),
(8, '2020_10_15_040339_create_tbl_shopinfo_table', 5),
(9, '2020_10_16_161632_create_tbl_shopinfo_table', 6),
(10, '2020_10_16_162755_create_tbl_information_table', 7),
(12, '2020_11_19_151839_create_tbl_shopinfo_table', 9),
(13, '2020_10_16_163445_create_tbl_shopinformation_table', 10),
(14, '2021_01_19_120738_create_tbl_advertise_table', 11),
(15, '2021_01_19_133321_create_tbl_advertise_table', 12),
(16, '2021_01_21_143857_create_tbl_contactus_table', 13),
(17, '2021_01_22_025856_create_tbl_contactus_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'roynirjon18@gmail.com', 'developer', 'Nirjon Roy', '01774865115', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertise`
--

CREATE TABLE `tbl_advertise` (
  `advertise_id` int(10) UNSIGNED NOT NULL,
  `advertise_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `advirtise_long_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advirtise_short_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advirtise_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_advertise`
--

INSERT INTO `tbl_advertise` (`advertise_id`, `advertise_name`, `categories_id`, `manufacture_id`, `advirtise_long_description`, `advirtise_short_description`, `advirtise_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Blazer', 2, 1, 'a s d f', 'Blazer f', 'advirtise_image/205.jpg', 1, NULL, NULL),
(3, 'EarPhone', 1, 1, 'This is an EarPhone', 'This is an EarPhone', 'advirtise_image/261.jpg', 1, NULL, NULL),
(4, 'Mac_Book_Laptop', 1, 1, 'This expensive laptop', 'This is Apple Laptop', 'advirtise_image/558.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `categories_id` int(10) UNSIGNED NOT NULL,
  `categories_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`categories_id`, `categories_name`, `categories_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Electronic', 'this is electronic categoriessss', 1, NULL, NULL),
(2, 'Cloths', 'It\'s Cloths Categories', 1, NULL, NULL),
(3, 'Cosmetic', 'this is cosmetic categories', 1, NULL, NULL),
(4, 'Eye Glass', 'This is Eye Glass Categories', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE `tbl_contactus` (
  `client_id` int(10) UNSIGNED NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_contactus`
--

INSERT INTO `tbl_contactus` (`client_id`, `client_name`, `client_subject`, `client_email`, `client_phone`, `client_message`, `created_at`, `updated_at`) VALUES
(1, 'Shresto Roy', 'product price', 'shresto@email.com', '015574931', 'This is sample massage', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_information`
--

CREATE TABLE `tbl_information` (
  `shop_id` int(10) UNSIGNED NOT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_hotline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufactures`
--

CREATE TABLE `tbl_manufactures` (
  `manufacture_id` int(10) UNSIGNED NOT NULL,
  `manufacture_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacture_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_manufactures`
--

INSERT INTO `tbl_manufactures` (`manufacture_id`, `manufacture_name`, `manufacture_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'this is Apple Brand', 1, NULL, NULL),
(2, 'Hp', 'This is Hp Brand', 1, NULL, NULL),
(3, 'Zara', 'This is Zara Brand', 1, NULL, NULL),
(4, 'Symphony', 'This is Symphhony Brand', 1, NULL, NULL),
(5, 'Samsung', 'This is Samsung Brand', 1, NULL, NULL),
(6, 'Raymona', 'This is an Cloths Brand', 1, NULL, NULL),
(7, 'Ball', 'This Ball Brand for T-shirt, Shirt, paint', 1, NULL, NULL),
(8, 'Eseay', 'This is Eseay Brand for cloths', 1, NULL, NULL),
(9, 'Cannon', 'this is cannon Brand', 1, NULL, NULL),
(10, 'Philips', 'This is Philips Brand For Electronic', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `product_short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_colour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `categories_id`, `manufacture_id`, `product_short_description`, `product_long_description`, `product_price`, `product_image`, `product_size`, `product_colour`, `publication_status`, `created_at`, `updated_at`) VALUES
(7, 'Samsung note-8', 1, 5, 'Samsung note-7. pro Max. \r\nA Reflex Phone for reflex users, Slim Phone.........', 'RAM : 8GB, ROM: 256GB, Process :  Core i3,', 35000.00, 'product_image/556.jpg', '8\" 5\" Display', 'White, Black, purpel.', 1, NULL, NULL),
(8, 'Designer T-Shart', 2, 3, 'This  is a T-shart with  new Design, with Graphics.', '100% cotton Cloths, it\'s zara Brand T-Shirt', 800.00, 'product_image/103.jpg', 'M/S/XL/XXL', 'Black', 1, NULL, NULL),
(9, 'HP Laptop', 1, 2, 'This is a Brand new Laptop, for typical users, for coders, gamers etc', 'Configaration :\r\n1. RAM : 4 GB,\r\n2. HDD : 1TB,\r\n3. Processor : Intel Core i 5, 7th Genaration,\r\nSlim laptop, Comfortable for users. \r\nweaight : 1.5 Kilogram.', 56000.00, 'product_image/756.png', '14\" Display', 'White, Black, purpel.', 1, NULL, NULL),
(10, 'Smart Watch', 1, 5, 'This Smart watch for smart, watch lover\'s . can use girl\'s and boys', 'Bluetooth System, call System, Receive Call, Dial Calls, Music play, Stopwatch, Speed_meter, calculator,', 1000.00, 'product_image/713.jpg', 'S/M/XL/XXl', 'Black + Sky+Blue', 1, NULL, NULL),
(11, 'Samsung note-10', 1, 5, 'This is Samsung Note-10. for Smoth users.', 'About This Mobile Phone:\r\n1. RAM: 8GB\r\n2. ROM : 256 GB\r\n3. Processor: 3.20 GHz\r\n4. Android Version : 11.1', 45000.00, 'product_image/277.png', '8\" 5\" Display', 'White, Black, purpel.', 1, NULL, NULL),
(12, 'Blazer', 2, 6, 'This is Raymona Brand Blazer', '100% cotton Blazer, World Best Blazer', 5000.00, 'product_image/404.jpg', 'M/S/XL/XXL', 'Black', 1, NULL, NULL),
(13, 'Shirt', 2, 7, 'This is a Stylish Shirt...', 'Ball Brand T-shirt....', 3500.00, 'product_image/126.jpg', 'M/S/XL/XXL', 'Black+Red', 1, NULL, NULL),
(14, 'Samsung Smart TV', 1, 5, 'This is samsung.....', 'This is samsung Smart TV. you can use here every thing, HD display. you can net Browsing here', 32000.00, 'product_image/365.jpg', '32\"', 'Black', 1, NULL, NULL),
(15, 'Samsung_Smart Watch', 1, 5, 'This Samsung Smart Watch.', 'This is a Smart watch For Smart users. \r\nFeatures : \r\n1. Camera \r\n2. Call Receive , Dial Call. \r\n3. Stop watch, Speed_meter', 2500.00, 'product_image/419.jpg', 'M/S/XL/XXL', 'Brown, Black, skyblue', 1, NULL, NULL),
(16, 'Kettle', 1, 10, 'This is Electric Kettle', 'This is Philips Brand Electric Kettle', 1500.00, 'product_image/765.jpg', '5 Liter', 'Black, and Sliver', 1, NULL, NULL),
(17, 'Mouse', 1, 2, 'This a Computer Mouse', 'This HP Mouse. 3.20 Speed Mouse', 500.00, 'product_image/508.jpg', 'Big', 'Black', 1, NULL, NULL),
(18, 'Man\'s Blazer', 2, 6, 'This Zara Brand Mans Blazer', 'This is Zara Brand Mans Blazer', 8000.00, 'product_image/759.jpg', 'M/S/XL/XXL', 'Gray', 1, NULL, NULL),
(19, 'Black_Eye_Glass', 4, 6, 'This is Eye Glass', 'I Glass', 500.00, 'product_image/588.jpg', '1', 'Gray', 1, NULL, NULL),
(20, 'Kook\'s Rice Coker', 1, 10, 'rice cooker', 'This is Philips Brand Rice Coker', 50000.00, 'product_image/957.jpeg', '5 Liter', 'Red+ Sliver', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shopinformation`
--

CREATE TABLE `tbl_shopinformation` (
  `shop_id` int(10) UNSIGNED NOT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_hotline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shopinformation`
--

INSERT INTO `tbl_shopinformation` (`shop_id`, `shop_name`, `shop_location`, `shop_hotline`, `shop_email`, `shop_description`, `shop_logo`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'NirBazar', 'Bangladesh', '+8801774865115', 'nirbazar@gmail.com', 'ffv fgsd dsf', 'slider_image/842.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'slider/210.jpg', '0', NULL, NULL),
(2, 'slider/402.jpg', '0', NULL, NULL),
(3, 'slider/882.jpg', '0', NULL, NULL),
(4, 'slider/798.jpg', '0', NULL, NULL),
(5, 'slider/48.jpg', '0', NULL, NULL),
(6, 'slider/568.jpg', '1', NULL, NULL),
(7, 'slider/4.jpg', '1', NULL, NULL),
(8, 'slider/634.jpg', '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_advertise`
--
ALTER TABLE `tbl_advertise`
  ADD PRIMARY KEY (`advertise_id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_information`
--
ALTER TABLE `tbl_information`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `tbl_manufactures`
--
ALTER TABLE `tbl_manufactures`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shopinformation`
--
ALTER TABLE `tbl_shopinformation`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_advertise`
--
ALTER TABLE `tbl_advertise`
  MODIFY `advertise_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `categories_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  MODIFY `client_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_information`
--
ALTER TABLE `tbl_information`
  MODIFY `shop_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_manufactures`
--
ALTER TABLE `tbl_manufactures`
  MODIFY `manufacture_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_shopinformation`
--
ALTER TABLE `tbl_shopinformation`
  MODIFY `shop_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
