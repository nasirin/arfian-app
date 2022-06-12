-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 03:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arfian`
--

-- --------------------------------------------------------

--
-- Table structure for table `all`
--

CREATE TABLE `all` (
  `id_all` int(5) UNSIGNED NOT NULL,
  `id_olt` int(5) NOT NULL,
  `id_ftm` int(5) NOT NULL,
  `id_spliter` int(5) NOT NULL,
  `id_feeder` int(5) NOT NULL,
  `id_dist` int(5) NOT NULL,
  `id_odc` int(5) NOT NULL,
  `id_odp` int(5) NOT NULL,
  `id_lokasi` int(5) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `distribusi`
--

CREATE TABLE `distribusi` (
  `id_dist` int(5) UNSIGNED NOT NULL,
  `nama_dist` varchar(255) NOT NULL,
  `kap_dist` varchar(255) NOT NULL,
  `core_dist` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feeder`
--

CREATE TABLE `feeder` (
  `id_feeder` int(5) UNSIGNED NOT NULL,
  `nama_feeder` varchar(255) NOT NULL,
  `kap_feeder` varchar(255) NOT NULL,
  `core_feeder` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ftm`
--

CREATE TABLE `ftm` (
  `id_ftm` int(5) UNSIGNED NOT NULL,
  `frame_count_ftm_1` varchar(255) NOT NULL,
  `panel_ftm_1` varchar(255) NOT NULL,
  `port_ftm_1` varchar(255) NOT NULL,
  `frame_count_ftm_2` varchar(255) NOT NULL,
  `panel_ftm_2` varchar(255) NOT NULL,
  `frame_count_ftm_3` varchar(255) NOT NULL,
  `panel_ftm_3` varchar(255) NOT NULL,
  `port_ftm_3` varchar(255) NOT NULL,
  `frame_count_ftm_4` varchar(255) NOT NULL,
  `panel_ftm_4` varchar(255) NOT NULL,
  `port_ftm_4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(5) UNSIGNED NOT NULL,
  `id_user` int(5) NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `slug_lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `id_user`, `nama_lokasi`, `slug_lokasi`) VALUES
(1, 2, 'Semarang', 'semarang');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) UNSIGNED NOT NULL,
  `id_odc` int(5) NOT NULL,
  `id_olt` int(5) NOT NULL,
  `id_lokasi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-06-12-121259', 'App\\Database\\Migrations\\All', 'default', 'App', 1655036355, 1),
(2, '2022-06-12-122005', 'App\\Database\\Migrations\\Distribusi', 'default', 'App', 1655036530, 2),
(3, '2022-06-12-122226', 'App\\Database\\Migrations\\Feeder', 'default', 'App', 1655036664, 3),
(4, '2022-06-12-122511', 'App\\Database\\Migrations\\Ftm', 'default', 'App', 1655036851, 4),
(5, '2022-06-12-122742', 'App\\Database\\Migrations\\Lokasi', 'default', 'App', 1655037400, 5),
(6, '2022-06-12-123723', 'App\\Database\\Migrations\\Menu', 'default', 'App', 1655037701, 6),
(7, '2022-06-12-123952', 'App\\Database\\Migrations\\Odc', 'default', 'App', 1655037701, 6),
(8, '2022-06-12-124154', 'App\\Database\\Migrations\\Odp', 'default', 'App', 1655038120, 7),
(9, '2022-06-12-124307', 'App\\Database\\Migrations\\Olt', 'default', 'App', 1655038120, 7),
(10, '2022-06-12-124422', 'App\\Database\\Migrations\\Spliter', 'default', 'App', 1655038120, 7),
(11, '2022-06-12-124552', 'App\\Database\\Migrations\\User', 'default', 'App', 1655038120, 7);

-- --------------------------------------------------------

--
-- Table structure for table `odc`
--

CREATE TABLE `odc` (
  `id_odc` int(5) UNSIGNED NOT NULL,
  `nama_odc` varchar(255) NOT NULL,
  `kap_odc` varchar(255) NOT NULL,
  `panel_in` varchar(255) NOT NULL,
  `port_odc_1` varchar(255) NOT NULL,
  `spliter_odc` varchar(255) NOT NULL,
  `out_odc` varchar(255) NOT NULL,
  `panel_out` varchar(255) NOT NULL,
  `port_odc_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `odp`
--

CREATE TABLE `odp` (
  `id_odp` int(5) UNSIGNED NOT NULL,
  `odp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `olt`
--

CREATE TABLE `olt` (
  `id_olt` int(5) UNSIGNED NOT NULL,
  `olt` varchar(255) NOT NULL,
  `modul` varchar(255) NOT NULL,
  `port_olt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `spliter`
--

CREATE TABLE `spliter` (
  `id_spliter` int(5) UNSIGNED NOT NULL,
  `frame_count_spliter_1` varchar(255) NOT NULL,
  `panel_spliter_1` varchar(255) NOT NULL,
  `core_1` varchar(255) NOT NULL,
  `nama_spliter` varchar(255) NOT NULL,
  `out_spliter` varchar(255) NOT NULL,
  `frame_count_spliter_2` varchar(255) NOT NULL,
  `panel_spliter_2` varchar(255) NOT NULL,
  `core_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) UNSIGNED NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `notelp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `notelp`, `password`) VALUES
(2, 'admin', '12345678', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all`
--
ALTER TABLE `all`
  ADD PRIMARY KEY (`id_all`);

--
-- Indexes for table `distribusi`
--
ALTER TABLE `distribusi`
  ADD PRIMARY KEY (`id_dist`);

--
-- Indexes for table `feeder`
--
ALTER TABLE `feeder`
  ADD PRIMARY KEY (`id_feeder`);

--
-- Indexes for table `ftm`
--
ALTER TABLE `ftm`
  ADD PRIMARY KEY (`id_ftm`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `odc`
--
ALTER TABLE `odc`
  ADD PRIMARY KEY (`id_odc`);

--
-- Indexes for table `odp`
--
ALTER TABLE `odp`
  ADD PRIMARY KEY (`id_odp`);

--
-- Indexes for table `olt`
--
ALTER TABLE `olt`
  ADD PRIMARY KEY (`id_olt`);

--
-- Indexes for table `spliter`
--
ALTER TABLE `spliter`
  ADD PRIMARY KEY (`id_spliter`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all`
--
ALTER TABLE `all`
  MODIFY `id_all` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distribusi`
--
ALTER TABLE `distribusi`
  MODIFY `id_dist` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feeder`
--
ALTER TABLE `feeder`
  MODIFY `id_feeder` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ftm`
--
ALTER TABLE `ftm`
  MODIFY `id_ftm` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `odc`
--
ALTER TABLE `odc`
  MODIFY `id_odc` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `odp`
--
ALTER TABLE `odp`
  MODIFY `id_odp` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `olt`
--
ALTER TABLE `olt`
  MODIFY `id_olt` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spliter`
--
ALTER TABLE `spliter`
  MODIFY `id_spliter` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
