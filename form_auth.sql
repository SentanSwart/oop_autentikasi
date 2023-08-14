-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 05:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_auth`
--

CREATE TABLE `form_auth` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_auth`
--

INSERT INTO `form_auth` (`id`, `username`, `email`, `password`) VALUES
(1, 'salman', 'salman@email.com', '$2y$10$3T.X/vkKuI.vx23wTthaveCW1nhq3T75aMQ8kaEwZDaMIialfOtfe'),
(2, 'ajojing', 'ajojing@email.com', '$2y$10$wMUsnrBljMsOXMxzevjTVeu7rmjqHwFLm554794BaB1t6Zv4IhPJy'),
(3, 'sekali', 'sekali@gmail.com', '$2y$10$hWD7KmaF3vuyeFGhWIc4xu9Wii5TcR7ChsjFpN89xqvwZedL/5rPi'),
(4, 'dua', 'dua@email', '$2y$10$s4d14gnzcMrJtVOwAOjpFubzKjuI7Cko9SaLW6.TrL7805w6ca.H6'),
(5, 'tiga', 'tiga@email.com', '$2y$10$wOfXSY7bKzLpGlCUaN8oQuqViLXYpMyPladX7i/o1ePrsvqZbZdY2'),
(6, '23', '23@gmail.co', '$2y$10$mb82du/WPd6p6PgnYSBKK.U//uYouD6XayEeMJwUTuJ1OfXnxwFcy'),
(7, '321', '321@mail.com', '$2y$10$VWL2o6P3nm997m5f70GSwOB9Xe1jMZcMm4WmrVn1rhm8ZHSHb0tmC'),
(8, 'kitacoba', 'kitacoba@c', '$2y$10$s0ET6pGPa.KHLYKfSVNjzeYuZMVmBfJvAReyfd4nYfLj1JA3abtz.'),
(9, 'dada', 'dada@dada', '$2y$10$0jOzIdzRstawLT4m2m8D8euxWajlRumnFr.WCY4uk25RBlCyAMcxC'),
(10, 'dodo', 'dodo@dodo', '$2y$10$/EZWmE7GdW0ayl/Qr7QpdeiFH9bbiguvVSuLXWthNn.xpBENMbk02'),
(11, 'jojo', 'jojo@mail', '$2y$10$ET9idj1zmwAFfKabb5kOg.bg2kYPCbSLO8qBeNT8jlYy9dC.XSDUi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_auth`
--
ALTER TABLE `form_auth`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_auth`
--
ALTER TABLE `form_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
