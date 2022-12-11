-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 04:02 PM
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
(1, 'Asam Lambung', 'Pengertian Asam Lambung', 'Penyakit asam lambung atau gastroesophageal reflux disease (GERD) adalah kondisi ketika asam lambung naik ke esofagus atau kerongkongan. Kondisi ini dapat menimbulkan nyeri pada ulu hati, heartburn, serta berbagai gejala lainnya pada area dada bagian bawah dan perut.', 'Gejala Asam Lambung', 'Batuk kering secara terus-menerus di malam hari\n</br>\nSakit pada bagian dada\n</br>\nKesulitan pernapasan\n</br>\nTenggorokan serak\n</br>\nBau mulut'),
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
(3, 'ardhan', 'maag', 'tegal'),
(4, 'Templeton', 'batuk', 'bogor'),
(5, 'ringo', 'asma', 'bandung'),
(7, 'Tom Morello', 'batuk', 'jakarta'),
(8, 'anda', 'maag', 'depok'),
(9, 'Malin', 'durhaka', 'padang\r\n'),
(10, 'Paul', 'maag', 'bogor'),
(12, 'danu', 'diare', 'bekasi'),
(13, 'zidan', 'asma', 'jakarta'),
(16, 'cd', 'lambung', 'Jakarta'),
(17, 'ef', 'migrain', 'Tegal'),
(18, 'ab', 'amandel', 'Bandung'),
(19, 'cd', 'lambung', 'Jakarta'),
(20, 'ef', 'migrain', 'Tegal'),
(21, 'Andani', 'Flu', 'Malang'),
(22, 'Amelia', 'Demam', 'Surabaya'),
(23, 'Desta', 'Batuk', 'Bogor'),
(24, 'sd', 'sda', 'as'),
(25, 'fds', 'fad', 'ads'),
(26, 'Denis', 'Batuk', 'Bandung'),
(27, 'Thomas', 'Batuk', 'Jakarta'),
(28, 'Ardhan', 'Maag', 'Tegal'),
(29, 'Templeton', 'Batuk', 'Bogor'),
(30, 'Ringo', 'Asma', 'Bandung'),
(31, 'Tom Morello', 'Batuk', 'Jakarta'),
(32, 'Anda', 'Maag', 'Depok'),
(33, 'Malin', 'Durhaka', 'Padang\n'),
(34, 'Paul', 'Maag', 'Bogor'),
(35, 'Danu', 'Diare', 'Bekasi'),
(36, 'Zidan', 'Asma', 'Jakarta'),
(37, 'Bowo', 'Usus Buntu', 'Cirebon'),
(38, 'Ab', 'Amandel', 'Bandung'),
(39, 'Cd', 'Lambung', 'Jakarta'),
(40, 'Ef', 'Migrain', 'Tegal'),
(41, 'sd', 'sda', 'as'),
(42, 'fds', 'fad', 'ads'),
(43, 'sd', 'sda', 'as'),
(44, 'fds', 'fad', 'ads');

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
(3, 'Timothy Ardhaneswara', 'timothy.ardhanes@gmail.com', 'WhatsApp_Image_2022-07-03_at_00_52_20.jpeg', '$2y$10$z59Ow7h5KHJcKKfpVI9mu.ax429DQejSU3fykup9xMRIIews7a5VG', 2, 1, 1668609596),
(4, 'Timothy Ardhaneswara', 'admin@gmail.com', 'tes.jpeg', '$2y$10$BqXB0Q/4Pg8nEk7cRshaIuQxrtya2/mtQ4WciMdYJfwDRZzz7gSga', 1, 1, 1668609995),
(5, 'Timothy Ardhaneswara', 'tardhaneswara@gmail.com', 'default.png', '$2y$10$zHkdkoxpcNTozbeyAfueUeVRGU8DWMmUMUPWx4RhmBT9leqphcwxm', 2, 1, 1668640664),
(6, 'Timothy Ardhaneswara', 'ardhatimothy@gmail.com', 'default.png', '$2y$10$KDvpMLFlHV473f42kLAXWe58PB0l9JjCXsDTAlYfmM541B4cnpHPm', 2, 1, 1669015268),
(7, 'Timothy Ardhaneswara', 'ardhatimothy@apps.ipb.ac.id', 'default.png', '$2y$10$3Wnd1ZD3eUrT64qcG4PR4OJiMdiVK.sQCr6FVBLOKc.tkUrppdKTW', 2, 1, 1669015545),
(8, 'Ardhanes Timothy', 'atom@gmail.com', 'default.png', '$2y$10$XM6hKgHjDRwjt..WpcQkhOLUEyy5/d8iB/rg7eFBxbxWmbsKpEME.', 2, 1, 1669742079),
(12, 'Muhammad Abdullah Alwahdi', 'abdullah@gmail.com', 'abdullah.jpeg', '$2y$10$VcbaaKShBsTNCbw0c/j/GeGKc6xBf/jSnRhHe9k5cxtj4hYIzvvSS', 3, 1, 1669794877),
(13, 'Subkhan Avina Dewanto', 'subkhan@gmail.com', 'subkhan.jpg', '$2y$10$qVbtyLURdSqsskcIZUykVOGs7eEyctZfYzJp8pJdOtnfmIlInFPAK', 3, 1, 1669794897),
(14, 'Timothy Ardhaneswara', 'timothy@gmail.com', 'timothy.jpeg', '$2y$10$T/56HA3xwgTGf5JnH.Oowe4NPlOUrgs7syW8fQA3eVdC2pp1cQ2U.', 3, 1, 1669794917),
(15, 'abdullah', 'abdul@gmail.com', 'default.png', '$2y$10$VTMWLFWrNLdk69LvZ2o9meVWm4MEWHP0fTzQSZ6S1NgG4OmvbSl2G', 2, 1, 1670293602),
(16, 'Timothy Ardhaneswara', 't@gmail.co', 'default.png', '$2y$10$k6syQeK6w55YCAWRY5XtZOXcAGVJE68Q/9BEMccI.n1Yjrm.fG5JC', 2, 1, 1670596920),
(17, 'Timothy Ardhaneswara', 'ardhanes@gmail.com', 'default.png', '$2y$10$xNLMIwvGYnUT6RwuwXDEGuH7gEiLN07plp2Tf68VyHXUkMGnNjxhe', 2, 1, 1670596972);

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
(6, 1, 2),
(8, 3, 2);

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
(2, 'Member\r\n'),
(3, 'Dokter');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
