-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 03:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estateagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `surface` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date_annonce` date DEFAULT curdate(),
  `type_annonce` enum('rent','vente') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `annonce`
--

INSERT INTO `annonce` (`id`, `title`, `image_path`, `description`, `surface`, `address`, `amount`, `date_annonce`, `type_annonce`) VALUES
(59, 'ard lilbay3 nawahi tiznit', 'images/francesca-tosolini-tHkJAMcO3QE-unsplash (1).jpg', 'ard lilbay3 nawahi tiznit tasilo lilmazid mina lma3lomat', 580, 'molay lhsn sidi driss tiznit', '200000.00', '2023-02-12', 'rent'),
(63, 'Recusandae Tempor o', 'images/francesca-tosolini-tHkJAMcO3QE-unsplash (1).jpg', 'Facilis et sed quos ', 30, 'Ad et aut quia non f', '39.00', '2023-02-12', 'vente'),
(64, 'Ducimus quae eius q', 'images/jason-goodman-Oalh2MojUuk-unsplash.jpg', 'Nobis labore et auteNobis labore et auteNobis labore et auteNobis labore et auteNobis labore et auteNobis labore et auteNobis labore et auteNobis labore et auteNobis labore et auteNobis labore et auteNobis labore et auteNobis labore et auteNobis labore et', 42, 'Sed explicabo Place', '88.00', '2023-02-12', 'rent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
