-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 10:47 AM
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
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `fname`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(1, 'saim', 'asif', 'Saim885@gmail.com', '03081808805', 'Depalpur road okara', 'lahore', 2, '2023-09-08', '2023-09-09'),
(2, 'saim', 'asif', 'Saim885@gmail.com', '03081808805', 'Depalpur road okara', 'lahore', 2, '2023-09-10', '2023-09-12'),
(3, 'saim', 'asif', 'Saim885@gmail.com', '03081808805', 'Depalpur road okara', 'fsd', 11, '2023-09-30', '2023-10-07'),
(4, 'saim', 'asif', 'Admin885@gmail.com', '03081808805', 'Depalpur road okara', 'lahore', 10, '2023-09-12', '2023-09-15'),
(5, 'saim', 'asif', 'Admin885@gmail.com', '03081808805', 'Depalpur road okara', 'lahore', 11, '2023-09-18', '2023-09-22'),
(6, 'saim', 'asif', 'Admin885@gmail.com', '03081808805', 'Depalpur road okara', 'SAHIWAL', 1, '2023-09-14', '2023-09-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
