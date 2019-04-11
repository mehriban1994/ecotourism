-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 06:26 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecotourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `order_no` int(11) DEFAULT NULL,
  `header_image` varchar(200) DEFAULT NULL,
  `slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `order_no`, `header_image`, `slug`) VALUES
(1, 'Deserts', 1, 'desert.jpg', 'deserts'),
(2, 'Forests', 2, 'forest.jpg', 'forests'),
(5, 'Waters', 3, 'water.jpg', 'waters'),
(6, 'Mountains', 4, 'mountain.jpg', 'mountains');

-- --------------------------------------------------------

--
-- Table structure for table `image_types`
--

CREATE TABLE `image_types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image_types`
--

INSERT INTO `image_types` (`type_id`, `type_name`) VALUES
(1, 'thumb'),
(2, 'simple'),
(3, 'header');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1541649847),
('m130524_201442_init', 1541649891);

-- --------------------------------------------------------

--
-- Table structure for table `object`
--

CREATE TABLE `object` (
  `object_id` int(11) NOT NULL,
  `object_name` varchar(400) NOT NULL,
  `category_id` int(11) NOT NULL,
  `location` varchar(1000) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `short_info` text,
  `full_info` text,
  `slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `object`
--

INSERT INTO `object` (`object_id`, `object_name`, `category_id`, `location`, `address`, `short_info`, `full_info`, `slug`) VALUES
(5, 'Kyzyl-Kum desert', 1, '40.834424,65.083356', '', 'The desert is the largest desert in Uzbekistan. The name of the Kyzyl-Kum desert is translated as “Red Sands”. The sands have a red colour, because these sands were formed by the way of weathering and blowing of basic sandy sedimentations.', '<p>The desert is the largest desert in Uzbekistan. The name of the Kyzyl-Kum desert is translated as &ldquo;Red Sands&rdquo;. The sands have a red colour, because these sands were formed by the way of weathering and blowing of basic sandy sedimentations.</p>\r\n\r\n<p>The Kyzyl-Kum desert in the North-West is bounded by the Aral Sea, in the North-East &ndash; the Syrdarya River, in the East &ndash; the Tien-Shan and Pamir-Alay mountain spurs, in the South-West &ndash; the Amudarya River. The area of the desert is approximately 300 thousand of square kilometers. The Kyzyl-Kum desert is a prairie with relict mountains and folded rocks of the paleozoic era. The mass of the desert is take up by sandy hills, the height of which reaches 75 meters.</p>\r\n\r\n<p>The plain part of the Kyzyl-Kum consists of clays and sandstones. In the North-West and North there are riverine sedimentations of ancient channels of the Syrdarya and Amudarya rivers, once fell into the Aral Sea. The largest desert in Uzbekistan &ndash; Kyzyl-Kum is rich with scantily explored historical sites. So, one of such sites are the ruins of the castles of ancient Khorezm, the culture of which is comparable with other developed nations of the world ancient, yet poorly researched. The main part of the ruins is situated in the Kyzyl-Kum desert. Hypothetically, there are about 300 fortresses, which are had not been dug yet. The most significant fortresses are Ayaz-Kala, Toprak-Kala and Kyzyl-Kala.</p>\r\n', 'kyzyl-kum-desert');

-- --------------------------------------------------------

--
-- Table structure for table `object_images`
--

CREATE TABLE `object_images` (
  `object_image_id` int(11) NOT NULL,
  `object_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `object_images`
--

INSERT INTO `object_images` (`object_image_id`, `object_id`, `image`, `type_id`) VALUES
(8, 5, 'kyzylkum.jpg', 1),
(9, 5, 'kyzylkum-header.jpg', 3),
(10, 5, 'k1.jpg', 2),
(11, 5, 'k2.jpg', 2),
(12, 5, 'k3.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'ZiDUk7Ky5gpVJn1qRlQdLHsxyVg28SDG', '$2y$13$ynSudBnC2Ver2LS2Dl71UuhFwM3UVu.CWbv7eLGz1nbaeNZRXiDpS', NULL, 'oteeva@gmail.com', 10, 1554264531, 1554264531);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `image_types`
--
ALTER TABLE `image_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `object`
--
ALTER TABLE `object`
  ADD PRIMARY KEY (`object_id`),
  ADD KEY `category_id` (`category_id`) USING BTREE,
  ADD KEY `category_id_2` (`category_id`);

--
-- Indexes for table `object_images`
--
ALTER TABLE `object_images`
  ADD PRIMARY KEY (`object_image_id`),
  ADD KEY `ofk` (`object_id`),
  ADD KEY `tfk` (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `image_types`
--
ALTER TABLE `image_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `object`
--
ALTER TABLE `object`
  MODIFY `object_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `object_images`
--
ALTER TABLE `object_images`
  MODIFY `object_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `object`
--
ALTER TABLE `object`
  ADD CONSTRAINT `cfk` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `object_images`
--
ALTER TABLE `object_images`
  ADD CONSTRAINT `ofk` FOREIGN KEY (`object_id`) REFERENCES `object` (`object_id`),
  ADD CONSTRAINT `tfk` FOREIGN KEY (`type_id`) REFERENCES `image_types` (`type_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
