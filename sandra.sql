-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2025 at 05:11 PM
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
-- Database: `sandra`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `password`, `created_at`) VALUES
(1, 'Sandra-Mukonde', 'sandramags1@gmail.com', 'Sandra', '$2y$10$Crppj7Ocg/F2t3w/rlaGM.5x9g2ILL2yaWM/.7lrawR39jJGf1z6S', '2025-10-14 12:23:17'),
(3, 'Sandra-Mukonde   ', 'sandramags1@gmail.com', 'Sandras', '$2y$10$X1eeEMLE.DWW783ZH1295uwwHxvgqlkBfC4oLoz0IjMM5KjnRciRu', '2025-10-14 12:25:22'),
(4, 'qwe', 'sandramqags1@gmail.com', 'qwe', '$2y$10$E.O2Dg0rk2TsAJOVBc8nWOWQ7wyILbPuCKfHBkmJp7U5P0/NyseDq', '2025-10-14 12:26:14'),
(6, 'Sandra Mukonde', 'sandramqags1@gmail.com', 'thankyou', '$2y$10$iDiq2MCepL6u0cvM96h5bu3PFIOJwNFwEU2pFr.ebLccbTHHMIt6y', '2025-10-14 12:45:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
