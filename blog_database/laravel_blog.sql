-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 04:19 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_label` tinyint(4) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `access_label`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'nayan18rocks@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '2018-06-07 18:00:00', NULL),
(2, 'MANAGER', 'nayancse005@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, '2018-06-07 18:00:00', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_07_091035_create_tbl_category_table', 1),
(4, '2018_06_07_093514_create_categories_table', 2),
(5, '2018_06_07_100420_create_tbl_category_table', 3),
(6, '2018_06_07_101924_create_tbl_category_table', 4),
(7, '2018_06_07_195615_create_admin_login_table', 5),
(9, '2018_06_12_141710_create_tbl_blog_table', 6),
(10, '2018_06_25_055655_create_tbl_comment_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `blog_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `hit_counter` int(7) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `category_id`, `blog_title`, `author_name`, `blog_short_description`, `blog_long_description`, `publication_status`, `blog_image`, `hit_counter`, `created_at`, `updated_at`) VALUES
(1, 2, 'BBC', 'BBC', '===BDHHDF=== gggge3rerer', '==========SDHSGBJDFD===========', 0, 'public/adminImages/14200135963748_2179536102075060_4119747409305665536_n.jpg', 2, '2018-06-12 10:44:52', NULL),
(3, 2, 'এএফপি', 'এএফপি', 'প্রস্তুতির অনেকগুলো পর্ব সেরে রাশিয়ায় পৌঁছে গেছে ব্রাজিল দল। সোচিতে উষ্ণ অভ্যর্থনাই পেয়েছেন নেইমাররা', 'প্রিয় তারকাকে একনজর দেখা অথবা একটি অটোগ্রাফের আশায় ভক্তরা ঘিরে ধরবেন। ছোঁকছোঁক করবে খবরসন্ধানী সাংবাদিকের দল। একটি ছবির আশায় ক্যামেরা নিয়ে ওত পেতে বসে থাকবেন ফটোসাংবাদিক। কখনো কখনো হয়তো ড্রোন ছেড়ে দিয়ে ভিডিও ফুটেজ নেওয়ার চেষ্টা করবেন টেলিভিশনের কোনো ক্যামেরা ক্রু। ম্যাচের দিন বা অনুশীলনের বাইরে এসব থেকে খেলোয়াড়দের যতটা সম্ভব লুকিয়ে রাখার সর্বোচ্চ চেষ্টাটাই করবে ব্রাজিল ফুটবল কনফেডারেশন।', 1, 'public/adminImages/054229final.jpg', 7, '2018-06-12 11:46:18', NULL),
(4, 9, 'সুজয় মহাজন, ঢাকা.অনলাইন ডেস্ক', 'সুজয় মহাজন, ঢাকা', 'শেয়ারবাজারের কারসাজিকারীদের জন্য দুটোই বড় হাতিয়ার। সম্প্রতি বাজেটের জুজুর ভয়ে সূচক কমে ৫ হাজারের কাছাকাছি চলে আসে', 'বাজেটে শেয়ারবাজারের জন্য উল্লেখযোগ্য কোনো দাবিদাওয়া নেই। তবু বাজেট শেয়ারবাজারে বিনিয়োগকারীদের জন্য এখন বড় ভাবনা। কারণ বাজেটকে কেন্দ্র করে টানা দরপতনে বাজারের সূচক তলানিতে এসে ঠেকেছে। বাজেট ছাড়া বছরটি নির্বাচনেরও। এ কারণে আগেভাগে শেয়ারবাজার ছাড়ছে বিদেশি বিনিয়োগকারীরাও। আর নির্বাচনের বছর হওয়ায় বাজারে কারসাজির প্রবণতা বাড়তে পারে বলে মনে করছেন বাজারসংশ্লিষ্ট ব্যক্তিদের অনেকে। বিশেষজ্ঞরা বলছেন, বাজারে নিয়ন্ত্রক সংস্থার তদারকি দুর্বলতা রয়েছে।  সাম্প্রতিক সময়ে শুধু বাজেটের জুজুর ভয়ে সূচক কমতে কমতে ৫ হাজারের কাছাকাছি চলে এসেছে। অথচ এ সময়ে আর্থিক খাতে এমন কোনো অবস্থা তৈরি হয়নি, যাতে সূচকের টানা পতন ঘটতে পারে। শেয়ার-বাজারের টানা দরপতন নিয়ে গত কয়েক দিনে কথা হয় বাজারসংশ্লিষ্ট একাধিক ব্যক্তির সঙ্গে। তাঁদের কেউই এ দরপতনের যৌক্তিক কোনো কারণ জানাতে পারেননি।', 1, 'public/adminImages/141858economics-research-2.jpg', 20, '2018-06-12 11:51:01', NULL),
(5, 8, 'অনলাইন ডেস্ক', 'অনলাইন ডেস্ক', 'করমর্দন করছেন ডোনাল্ড ট্রাম্প ও কিম জং-উন। এই করমর্দনকে ঐতিহাসিক হিসেবে বিবেচনা করা হচ্ছে।', 'মার্কিন প্রেসিডেন্ট ডোনাল্ড ট্রাম্প ও উত্তর কোরিয়ার নেতা কিম জং-উন আজ মঙ্গলবার সিঙ্গাপুরে ঐতিহাসিক বৈঠক করেছেন। এ সময় তাঁরা হাসিমুখে করমর্দন করেছেন। তাঁদের এই বৈঠক বিশ্বের জন্য শান্তির বার্তা বয়ে আনতে পারে। দুই নেতার আলোচিত বৈঠকের নানা মুহূর্ত ধরা পড়েছে বার্তা সংস্থা রয়টার্সের ক্যামেরায়।', 1, 'public/adminImages/054315php.png', 11, '2018-06-12 11:52:50', NULL),
(7, 10, 'অনলাইন ডেস্ক', 'প্রথম আলো', 'ইংল্যান্ডকে ফাইনালে দেখছেন বেকহাম। ছবি: এএফপি ইংল্যান্ডকে ফাইনালে দেখছেন বেকহাম। ছবি: এএফপি', 'হ্যারি কেনরা প্রথম ম্যাচ জিততেই ডেভিড বেকহাম ইংল্যান্ডকে ফাইনালে দেখছেন!ইংরেজ ফুটবলার কিংবা ফুটবলপ্রেমীদের জন্য ব্যাপারটা মোটেও নতুন কিছু নয়। দেশটির সংবাদমাধ্যম তো এক কাঠি সরেস। প্রায় প্রতিটি বিশ্বকাপের অনেক আগে থেকেই ইংল্যান্ডকে চ্যাম্পিয়ন বানিয়ে দেয় ব্রিটিশ সংবাদমাধ্যম। যদিও এবার তাঁদের প্রচারণার ঢাকের আওয়াজ অনেক কম। রাশিয়া বিশ্বকাপে বেকহামই সম্ভবত প্রথম ইংল্যান্ডকে নিয়ে উচ্চাশা দেখালেন। ইংল্যান্ড খেলবে ফাইনাল! কিন্তু ফাইনালে তাঁরা কোন দলের মুখোমুখি হবে?  ইংলিশ ফুটবলের ইতিহাসে অন্যতম সেরা এই মিডফিল্ডার সেটিও বলে দিয়েছেন। সাবেক ম্যানচেস্টার ইউনাইটেড ও রিয়াল মাদ্রিদ তারকার মতে, ১৫ জুলাই লুঝনিকি স্টেডিয়ামের ফাইনালে ইংল্যান্ডের মুখোমুখি হবে আর্জেন্টিনা।  চীনের কলেজ ফুটবলের একটি বিজ্ঞাপনী প্রচারণা অনুষ্ঠানে এমন আশাবাদই জানিয়েছেন ৪৩ বছর বয়সী সাবেক এই তারকা।  তিউনিসিয়ার বিপক্ষে প্রথম ম্যাচে ২-১ গোলের জয়ে বিশ্বকাপে শুভ সূচনা করেছে ইংল্যান্ড। কেনদের এই শুভসূচনায় তো বটেই, দেশের প্রতি ভালোবাসাও কাজ করেছে এমন আশাবাদে, ‘ফাইনালে ইংল্যান্ড আর্জেন্টিনার মুখোমুখি হবে বলেই আমার বিশ্বাস। শিরোপা জয়ে আমার অবশ্যই পছন্দের দল ইংল্যান্ড। যদিও সেটা দেশের প্রতি ভালোবাসা থেকে পক্ষপাতদুষ্ট কথা।’ইংল্যান্ড সর্বশেষ বিশ্বকাপ ফাইনাল খেলেছে ৫২ বছর আগে। ২০০৬ সালে বেকহামের নেতৃত্বে জার্মানি বিশ্বকাপের কোয়ার্টার ফাইনালে উঠেছিল ইংল্যান্ড। তবে কেনের দলকে যে সামনে অনেক কঠিন পথ পাড়ি দিতে হবে, সেটি অবশ্য বলতে ভোলেননি ফুটবলের এই গ্ল্যামারবয়, ‘ইংল্যান্ডের এই দলটা তরুণ। তাঁদের তেমন কোনো অভিজ্ঞতাও নেই। তাই বিশ্বকাপে সামনে অনেক কঠিন পরীক্ষার সম্মুখীন হতে হবে।’', 1, 'public/adminImages/170715final.jpg', 13, '2018-06-21 11:07:15', NULL),
(8, 8, 'NAYAN', 'NAYAN', 'প্রস্তুতির অনেকগুলো পর্ব সেরে রাশিয়ায় পৌঁছে গেছে ব্রাজিল দল। সোচিতে উষ্ণ অভ্যর্থনাই পেয়েছেন নেইমাররা', 'fifa is grate', 1, 'public/adminImages/17433033827390_1621809657915968_8076790896114270208_n.jpg', 0, '2018-06-25 11:43:30', NULL),
(9, 9, 'NAYANE', 'NAYANE', '===BDHHDF===', 'হ্যারি কেনরা প্রথম ম্যাচ জিততেই ডেভিড বেকহাম ইংল্যান্ডকে ফাইনালে দেখছেন!', 1, 'public/adminImages/17442735972596_817152595137122_4508566039788781568_n.jpg', 1, '2018-06-25 11:44:27', NULL),
(10, 10, 'NAYANGAME', 'NAYANG', 'প্রস্তুতির অনেকগুলো পর্ব সেরে রাশিয়ায় পৌঁছে গেছে ব্রাজিল দল। সোচিতে উষ্ণ অভ্যর্থনাই পেয়েছেন নেইমাররা', 'প্রিয় তারকাকে একনজর দেখা অথবা একটি অটোগ্রাফের আশায় ভক্তরা ঘিরে ধরবেন। ছোঁকছোঁক করবে খবরসন্ধানী সাংবাদিকের দল। একটি ছবির আশায় ক্যামেরা নিয়ে ওত পেতে বসে থাকবেন ফটোসাংবাদিক। কখনো কখনো হয়তো ড্রোন ছেড়ে দিয়ে ভিডিও ফুটেজ নেওয়ার চেষ্টা করবেন টেলিভিশনের কোনো ক্যামেরা ক্রু। ম্যাচের দিন বা অনুশীলনের বাইরে এসব থেকে খেলোয়াড়দের যতটা সম্ভব লুকিয়ে রাখার সর্বোচ্চ চেষ্টাটাই করবে ব্রাজিল ফুটবল কনফেডারেশন।', 1, 'public/adminImages/174511final.jpg', 2, '2018-06-25 11:45:11', NULL),
(11, 10, 'যেখানে ঘাঁটি গেড়েছে ব্রাজিল দল', 'প্রথম আলো', '===BDHHDF===', '==========SDHSGBJDFD===========', 1, 'public/adminImages/13210635963748_2179536102075060_4119747409305665536_n.jpg', 4, '2018-06-26 07:21:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_slug`, `category_description`, `category_status`, `created_at`, `updated_at`) VALUES
(3, 'Glamour World UPDATE', 'glamour-world', '===========', 0, NULL, NULL),
(4, 'Entertainment', 'entertainment', '===========', 3, NULL, NULL),
(6, 'Glamour World', 'glamour-world', '=========', 3, '2018-06-07 09:38:47', NULL),
(7, 'NewsNAYAN', 'news', '======', 1, '2018-06-10 00:00:20', NULL),
(8, 'আন্তর্জাতিক', 'খবর বিডি নিউজ', 'যুক্তরাষ্ট্রের প্রেসিডেন্ট ডোনাল্ড ট্রাম্পের সঙ্গে ঐতিহাসিক বৈঠকের জন্য আজ রোববার সিঙ্গাপুর পৌঁছেছেন উত্তর কোরিয়ার নেতা কিম জং উন।', 1, '2018-06-10 18:00:00', NULL),
(9, 'অর্থনীতি', '', 'আসছে নতুন বাজেট\r\nবাজেট ছাড়া বছরটি নির্বাচনেরও', 1, '2018-06-12 11:49:39', NULL),
(10, 'খেলা', '', 'খেলা ডেস্ক\r\n২১ জুন ২০১৮, ২২:০২ \r\nআপডেট: ২১ জুন ২০১৮, ২২:০৪', 1, '2018-06-21 11:01:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `usre_id` int(11) NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'NAYAN PAL', 'nayan18rocks@gmail.com', '1234454', '01733556193', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

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
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
