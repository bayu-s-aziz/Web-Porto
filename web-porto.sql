-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 10:16 PM
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
-- Database: `web-porto`
--

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill_name` varchar(100) NOT NULL,
  `rating` float NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `skill_name`, `rating`, `description`) VALUES
(1, 1, 'Graphic Design', 85, 'Kemampuan dalam menguasai keahlian desain grafis'),
(2, 1, 'Web Design', 80, 'Kemampuan dalam pengembangan sebuah web'),
(3, 1, 'PHP', 90, 'Keahlian dalam menguasai bahasa pemrograman PHP'),
(4, 1, '3D Modelling', 90, 'Keahlian dalam membuat model 3 Dimensi'),
(5, 2, '3D Animation', 85, 'Keahlian dalam menghidupkan model 3D menjadi sebuah animasi'),
(6, 1, '2D Animation', 80, 'Keahlian dalam membuat sebuah animasi 2 Dimensi'),
(13, 2, 'Web Design', 90, 'Kemampuan dalam menguasai keahlian Web Design'),
(15, 3, 'Public Speaking', 99, 'Kemampuan dalam menguasai bidang Public Speaking'),
(16, 4, 'Public Speaking', 85, 'Kemampuan dalam menguasai bidang Public Speaking'),
(17, 3, 'Leadership', 90, 'Kemampuan dalam menguasai bidang Leadership');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `job` varchar(100) NOT NULL,
  `expected_position` varchar(100) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `job`, `expected_position`, `photo`) VALUES
(1, 'Bayu Septiana Aziz', 'bayu.s.aziz@gmail.com', '123456', 'Mahasiswa', 'Senior Programmer', '/web-porto/img/users/bayu.jpg'),
(2, 'Jaka Musadad', 'jackmust@gmail.com', '123456', 'Pengajar', 'Wali Murid', '/web-porto/img/users/jack.jpg'),
(3, 'Joe Cowey', 'joecowey@gmail.com', '123456', 'Masih', 'Presiden ID', '/web-porto/img/users/joecowee.jpg'),
(4, 'Obama bin Laden', 'Obsama@gmail.com', '123456', 'Mantan', 'Presiden AS', '/web-porto/img/users/obsama.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
