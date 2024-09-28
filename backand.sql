-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2024 at 06:01 PM
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
-- Database: `backand`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Yusril Mubaroq', 'admin', '$2y$10$OVqzeRyWmxyvS/iXnqDnCeB9Y39aPfuTyOlAm/JFrqWG4D1rj2LLW', 'user', '2024-09-25 13:12:20', '2024-09-25 13:12:20'),
(2, 'Rizwan Septian', 'Rizwan21', '$2y$10$GQoSBeamodd5FMaxQiMBJuP90BRKSLshOqsq/.iACcH6TcYmV.KxW', 'user', '2024-09-25 13:21:03', '2024-09-25 13:21:03'),
(3, 'Aulia Fatahillah', 'admin', '$2y$10$gBDF0O8MuldWNMh8icrVVew6snEEaF6AG8yBgWUNLighG8jh3Bdqa', 'user', '2024-09-25 13:23:28', '2024-09-25 13:23:28'),
(4, 'Arista Aisyah ', 'admin', '$2y$10$VZEuN9zevDo7iovbqEqNlucJjuPL95tY4nQFWmtElci9Xh.5uKIKa', 'user', '2024-09-25 13:24:43', '2024-09-25 13:24:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
