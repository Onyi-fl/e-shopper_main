-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 04:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_sytem`
--

CREATE TABLE `sign_up_sytem` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password_` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up_sytem`
--

INSERT INTO `sign_up_sytem` (`id`, `full_name`, `email`, `password_`, `date`) VALUES
(1, 'Dominique Carrington', 'dominique@gmail.com', 'dom0000', '2023-06-02 13:23:35'),
(3, 'fallon carrington', 'fallon@gmail.com', 'fallon0000', '2023-06-02 13:25:08'),
(4, 'Idinma Nebo', 'bettysshelf@gmail.co', 'nma0000', '2023-06-02 13:26:05'),
(5, 'Tom Hardin', 'hardin@gmail.com', 'tom0909', '2023-06-02 13:27:19'),
(6, 'gift smith', 'giftsmith@gmail.com', 'gift0000', '2023-06-02 13:32:20'),
(7, 'betty wade', 'betty@gmail.com', 'betty0000', '2023-06-02 13:35:10'),
(8, 'James', 'james@gmail.com', 'james0000', '2023-06-02 13:55:02'),
(9, 'peter', 'peter@gmail.com', 'peter0000', '2023-06-02 13:59:11'),
(10, 'Rita', 'rita@gmail.com', 'rita0000', '2023-06-02 14:10:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_up_sytem`
--
ALTER TABLE `sign_up_sytem`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up_sytem`
--
ALTER TABLE `sign_up_sytem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
