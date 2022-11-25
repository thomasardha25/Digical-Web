-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 09:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digical_pabweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala_penyakit`
--

CREATE TABLE `gejala_penyakit` (
  `id` int(11) NOT NULL,
  `nama_penyakit` varchar(128) NOT NULL,
  `sub_judul1` varchar(128) NOT NULL,
  `pengertian` text NOT NULL,
  `sub_judul2` varchar(128) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala_penyakit`
--

INSERT INTO `gejala_penyakit` (`id`, `nama_penyakit`, `sub_judul1`, `pengertian`, `sub_judul2`, `gejala`) VALUES
(1, 'Umpan Lambung', 'Pengertian Umpan Lambung', 'Penyakit umpan lambung atau gastroesophageal reflux disease (GERD) adalah kondisi ketika asam lambung naik ke esofagus atau kerongkongan. Kondisi ini dapat menimbulkan nyeri pada ulu hati, heartburn, serta berbagai gejala lainnya pada area dada bagian bawah dan perut.', 'Gejala Umpan Lambung', 'Batuk kering secara terus-menerus di malam hari\n</br>\nSakit pada bagian dada\n</br>\nKesulitan pernapasan\n</br>\nTenggorokan serak\n</br>\nBau mulut'),
(2, 'Asma', 'Pengertian Asma', 'Asma adalah salah satu masalah paru-paru yang membuat pengidapnya kesulitan bernapas akibat peradangan dan penyempitan pada saluran pernapasan.', 'Gejala Asma', 'Sesak dada\r\n<br>\r\nBatuk\r\n<br>\r\nSesak napas\r\n<br>\r\nMengi, yang menyebabkan suara siulan saat mengeluarkan napas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `penyakit` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id`, `nama`, `penyakit`, `alamat`) VALUES
(1, 'denis', 'asma', 'bandung'),
(2, 'thomas', 'batuk', 'jakarta'),
(3, 'ardhan', 'maag', 'tegal'),
(4, 'Templeton', 'batuk', 'bogor'),
(5, 'ringo', 'asma', 'bandung'),
(7, 'Tom Morello', 'batuk', 'jakarta'),
(8, 'anda', 'maag', 'depok'),
(9, 'Malin', 'durhaka', 'padang\r\n'),
(10, 'Paul', 'maag', 'bogor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Timothy Ardhaneswara', 'timothy.ardhanes@gmail.com', 'default.png', '$2y$10$z59Ow7h5KHJcKKfpVI9mu.ax429DQejSU3fykup9xMRIIews7a5VG', 2, 1, 1668609596),
(4, 'Timothy Ardhaneswara', 'thomas.ardhanes@gmail.com', 'default.png', '$2y$10$BqXB0Q/4Pg8nEk7cRshaIuQxrtya2/mtQ4WciMdYJfwDRZzz7gSga', 1, 1, 1668609995),
(5, 'Timothy Ardhaneswara', 'tardhaneswara@gmail.com', 'default.png', '$2y$10$zHkdkoxpcNTozbeyAfueUeVRGU8DWMmUMUPWx4RhmBT9leqphcwxm', 2, 1, 1668640664),
(6, 'Timothy Ardhaneswara', 'ardhatimothy@gmail.com', 'default.png', '$2y$10$KDvpMLFlHV473f42kLAXWe58PB0l9JjCXsDTAlYfmM541B4cnpHPm', 2, 1, 1669015268),
(7, 'Timothy Ardhaneswara', 'ardhatimothy@apps.ipb.ac.id', 'default.png', '$2y$10$3Wnd1ZD3eUrT64qcG4PR4OJiMdiVK.sQCr6FVBLOKc.tkUrppdKTW', 2, 1, 1669015545);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 1, 3),
(6, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Profil Saya', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Ubah Profil', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(9, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(10, 2, 'Ganti Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(12, 1, 'Pasien', 'pasien', 'fas fa-fw fa-folder', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
