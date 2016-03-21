-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2016 at 03:39 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dheket`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` bigint(20) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_id` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category_name`, `category_id`) VALUES
(0, 'Dealer', NULL),
(1, 'Mart', NULL),
(2, 'ATM', NULL),
(3, 'Apotek', NULL),
(4, 'Restoran', NULL),
(5, 'Salon', NULL),
(6, 'Hotel', NULL),
(7, 'Rumah Sakit', NULL),
(8, 'Mall', NULL),
(9, 'Bengkel', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id_location` bigint(20) NOT NULL,
  `location_name` varchar(250) DEFAULT NULL,
  `location_address` varchar(500) DEFAULT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `isPromo` int(1) DEFAULT '0',
  `photo` blob
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id_location`, `location_name`, `location_address`, `latitude`, `longitude`, `category_id`, `phone`, `isPromo`, `photo`) VALUES
(99, 'Kantor BGS', 'Jl. Raya Kav Pemda IV', -6.212601, 106.617825, 1, '082XX', 1, NULL),
(1, 'Warteg Kavling', 'Pinggir Jalan Raya', -6.210855, 106.617914, 1, '082XX', 1, NULL),
(2, 'Rumah Sakit', 'Tangerang Kota', -6.211079, 106.619308, 2, '082XX', 1, NULL),
(3, 'Mall Karawaci', 'Jl. Karawaci Raya', -6.207509, 106.615078, 2, '082XX', 0, NULL),
(4, 'Bengkel Ajaib', 'Depan Hotel Olive', -6.215627, 106.615907, 3, '082XX', 1, NULL),
(5, 'F', 'F1', -6.211894, 106.610164, 3, '082XX', 0, NULL),
(6, 'G', 'G1', -6.221339, 106.611948, 4, '082XX', 0, NULL),
(7, 'H', 'H1', -6.202434, 106.620371, 4, '082XX', 0, NULL),
(8, 'I', 'I1', -6.211159, 106.60682, 5, '082XX', 1, NULL),
(9, 'J', 'J1', -6.21255, 106.61661, 5, '082XX', 1, NULL),
(10, 'K', 'K1', -6.210361, 106.616082, 1, '082XX', 1, NULL),
(11, 'L', 'L1', -6.214354, 106.618803, 1, '082XX', 0, NULL),
(12, 'M', 'M1', -6.210566, 106.613368, 1, '082XX', 0, NULL),
(13, 'N', 'N1', -6.208283, 106.617629, 1, '082XX', 0, NULL),
(14, 'O', 'O1', -6.217326, 106.618765, 1, '082XX', 0, NULL),
(15, 'P', 'P1', -6.219533, 106.615629, 1, '082XX', 0, NULL),
(16, 'Q', 'Q1', -6.212614, 106.625435, 1, '082XX', 0, NULL),
(17, 'R', 'R1', -6.206908, 106.607592, 1, '082XX', 1, NULL),
(18, 'S', 'S1', -6.219006, 106.610758, 1, '082XX', 1, NULL),
(19, 'T', 'T1', -6.212468, 106.61939, 4, '082XX', 1, NULL),
(20, 'U', 'U1', -6.214764, 106.622286, 4, '082XX', 1, NULL),
(21, 'V', 'V1', -6.206813, 106.616417, 4, '082XX', 1, NULL),
(22, 'W', 'W1', -6.205374, 106.6128, 4, '082XX', 1, NULL),
(23, 'X', 'X1', -6.211623, 106.61452, 4, '082XX', 1, NULL),
(24, 'Y', 'Y1', -6.22022, 106.622895, 4, '082XX', 1, NULL),
(25, 'Z', 'Z1', -6.202514, 106.615018, 4, '082XX', 1, NULL),
(26, 'AA', 'AA1', -6.201763, 106.608974, 4, '082XX', 0, NULL),
(27, 'AB', 'AB1', -6.214499, 106.612125, 4, '082XX', 0, NULL),
(28, 'AC', 'AC1', -6.213173, 106.612703, 2, '082XX', 0, NULL),
(29, 'AD', 'AD1', -6.210248, 106.62193, 5, '082XX', 1, NULL),
(30, 'AE', 'AE1', -6.21589, 106.611016, 5, '082XX', 0, NULL),
(31, 'AF', 'AF1', -6.216673, 106.618523, 5, '082XX', 1, NULL),
(32, 'AG', 'AG1', -6.216002, 106.622091, 4, '082XX', 1, NULL),
(33, 'A', 'A1', -6.24676, 106.762618, 1, '082XX', 1, NULL),
(34, 'B', 'B1', -6.245014, 106.762707, 1, '082XX', 1, NULL),
(35, 'C', 'C1', -6.245238, 106.764101, 2, '082XX', 1, NULL),
(36, 'D', 'D1', -6.241668, 106.759871, 2, '082XX', 0, NULL),
(37, 'E', 'E1', -6.249786, 106.7607, 3, '082XX', 1, NULL),
(38, 'F', 'F1', -6.246053, 106.754957, 3, '082XX', 0, NULL),
(39, 'G', 'G1', -6.255498, 106.756741, 4, '082XX', 0, NULL),
(40, 'H', 'H1', -6.236593, 106.765164, 4, '082XX', 0, NULL),
(41, 'I', 'I1', -6.245318, 106.751613, 5, '082XX', 1, NULL),
(42, 'J', 'J1', -6.246709, 106.761403, 5, '082XX', 1, NULL),
(43, 'K', 'K1', -6.24452, 106.760875, 1, '082XX', 1, NULL),
(44, 'L', 'L1', -6.248513, 106.763596, 1, '082XX', 0, NULL),
(45, 'M', 'M1', -6.244725, 106.758161, 1, '082XX', 0, NULL),
(46, 'N', 'N1', -6.242442, 106.762422, 1, '082XX', 0, NULL),
(47, 'O', 'O1', -6.251485, 106.763558, 1, '082XX', 0, NULL),
(48, 'P', 'P1', -6.253692, 106.760422, 1, '082XX', 0, NULL),
(49, 'Q', 'Q1', -6.246773, 106.770228, 1, '082XX', 0, NULL),
(50, 'R', 'R1', -6.241067, 106.752385, 1, '082XX', 1, NULL),
(51, 'S', 'S1', -6.253165, 106.755551, 1, '082XX', 1, NULL),
(52, 'T', 'T1', -6.246627, 106.764183, 4, '082XX', 1, NULL),
(53, 'U', 'U1', -6.248923, 106.767079, 4, '082XX', 1, NULL),
(54, 'V', 'V1', -6.240972, 106.76121, 4, '082XX', 1, NULL),
(55, 'W', 'W1', -6.239533, 106.757593, 4, '082XX', 1, NULL),
(56, 'X', 'X1', -6.245782, 106.759313, 4, '082XX', 1, NULL),
(57, 'Y', 'Y1', -6.254379, 106.767688, 4, '082XX', 1, NULL),
(58, 'Z', 'Z1', -6.236673, 106.759811, 4, '082XX', 1, NULL),
(59, 'AA', 'AA1', -6.235922, 106.753767, 4, '082XX', 0, NULL),
(60, 'AB', 'AB1', -6.248658, 106.756918, 4, '082XX', 0, NULL),
(61, 'AC', 'AC1', -6.247332, 106.757496, 2, '082XX', 0, NULL),
(62, 'AD', 'AD1', -6.244407, 106.766723, 5, '082XX', 1, NULL),
(63, 'AE', 'AE1', -6.250049, 106.755809, 5, '082XX', 0, NULL),
(64, 'AF', 'AF1', -6.250832, 106.763316, 5, '082XX', 1, NULL),
(65, 'AG', 'AG1', -6.250161, 106.766884, 5, '082XX', 1, NULL),
(66, 'A', 'A1', -6.391889, 106.824817, 1, '082XX', 1, NULL),
(67, 'B', 'B1', -6.390143, 106.824906, 1, '082XX', 1, NULL),
(68, 'C', 'C1', -6.390367, 106.8263, 2, '082XX', 1, NULL),
(69, 'D', 'D1', -6.386797, 106.82207, 2, '082XX', 0, NULL),
(70, 'E', 'E1', -6.394915, 106.822899, 3, '082XX', 1, NULL),
(71, 'F', 'F1', -6.391182, 106.817156, 3, '082XX', 0, NULL),
(72, 'G', 'G1', -6.400627, 106.81894, 4, '082XX', 0, NULL),
(73, 'H', 'H1', -6.381722, 106.827363, 4, '082XX', 0, NULL),
(74, 'I', 'I1', -6.390447, 106.813812, 5, '082XX', 1, NULL),
(75, 'J', 'J1', -6.391838, 106.823602, 5, '082XX', 1, NULL),
(76, 'K', 'K1', -6.389649, 106.823074, 1, '082XX', 1, NULL),
(77, 'L', 'L1', -6.393642, 106.825795, 1, '082XX', 0, NULL),
(78, 'M', 'M1', -6.389854, 106.82036, 1, '082XX', 0, NULL),
(79, 'N', 'N1', -6.387571, 106.824621, 1, '082XX', 0, NULL),
(80, 'O', 'O1', -6.396614, 106.825757, 1, '082XX', 0, NULL),
(81, 'P', 'P1', -6.398821, 106.822621, 1, '082XX', 0, NULL),
(82, 'Q', 'Q1', -6.391902, 106.832427, 1, '082XX', 0, NULL),
(83, 'R', 'R1', -6.386196, 106.814584, 1, '082XX', 1, NULL),
(84, 'S', 'S1', -6.398294, 106.81775, 1, '082XX', 1, NULL),
(85, 'T', 'T1', -6.391756, 106.826382, 4, '082XX', 1, NULL),
(86, 'U', 'U1', -6.394052, 106.829278, 4, '082XX', 1, NULL),
(87, 'V', 'V1', -6.386101, 106.823409, 4, '082XX', 1, NULL),
(88, 'W', 'W1', -6.384662, 106.819792, 4, '082XX', 1, NULL),
(89, 'X', 'X1', -6.390911, 106.821512, 4, '082XX', 1, NULL),
(90, 'Y', 'Y1', -6.399508, 106.829887, 4, '082XX', 1, NULL),
(91, 'Z', 'Z1', -6.381802, 106.82201, 4, '082XX', 1, NULL),
(92, 'AA', 'AA1', -6.381051, 106.815966, 4, '082XX', 0, NULL),
(93, 'AB', 'AB1', -6.393787, 106.819117, 4, '082XX', 0, NULL),
(94, 'AC', 'AC1', -6.392461, 106.819695, 2, '082XX', 0, NULL),
(95, 'AD', 'AD1', -6.389536, 106.828922, 5, '082XX', 1, NULL),
(96, 'AE', 'AE1', -6.395178, 106.818008, 5, '082XX', 0, NULL),
(97, 'AF', 'AF1', -6.395961, 106.825515, 5, '082XX', 1, NULL),
(98, 'AG', 'AG1', -6.39529, 106.829083, 5, '082XX', 1, NULL),
(124, '', '', 0, 0, 3, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `id_merchant` int(20) NOT NULL,
  `merchant_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id_merchant`, `merchant_name`) VALUES
(0, 'IndoMart'),
(1, 'Restoran');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1456443814);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(100) NOT NULL,
  `category_id` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `tag_name`, `category_id`) VALUES
(0, 'Hotel', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(2, 'backend', 'admin', 'admin', '9zWrlXRyjZykI6oefRYaln_IHlPGt4-n', '$2y$13$n658v4kGEB0cmrsJDOXs9eKd2pFVfXLXDt8XXmW2MyeXUPSf96l46', NULL, 'admin@gmail.com', 1, 1, 1457618181, 1457618181),
(3, 'burhan', 'muhammad', 'burhan', '23GBv5edX2HY2hGzdZIgMPgU1yEFCVx2', '$2y$13$wSNJw9mvSjNu5GW1ftoj6epbw9gC6pamQjs38wib0VIwptcm.XmnW', NULL, 'burhan@gmail.com', 2, 1, 1458548012, 1458548012),
(4, 'zein', 'muhammad', 'zein', 'vTG4UOGTyYH4OV9lSy9DL3s4Gbhsevit', '$2y$13$4dhcHT/dmF3KiYSP5wenCeXjtsTb3RwvdY7nMnb5Su0S2fuc8tUtW', NULL, 'zein@gmail.com', 2, 1, 1458548114, 1458548114),
(6, 'husna', 'amiratul', 'husna', 'C3SmDB5l97azQyB9LYdEh4osI_PEk8qG', '$2y$13$Py4pUTM7209LsbzSzpA9QO.SERBm1/1VFOqhRdIdjxof8OtTEe/RO', NULL, 'husna@gmail.com', 1, 1, 1458565044, 1458565044),
(7, 'dinar', 'mah dinar', 'dinar', 'm8ZDDt9nwMbQWjEZ8M5lN5d-xf0TPtcP', '$2y$13$4.94oDi9EUCnoLMP95wRYOL.S2p5WzPfSP2UYQwaoejsEOLkhIbPG', NULL, 'dinar@gmail.com', 2, 1, 1458565887, 1458565887);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id_location`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`id_merchant`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id_location` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `id_merchant` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
