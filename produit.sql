-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2024 at 09:42 AM
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
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `libelle` varchar(256) NOT NULL,
  `prix` float NOT NULL,
  `qta` int(11) NOT NULL,
  `descreption` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `promo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `libelle`, `prix`, `qta`, `descreption`, `image`, `promo`) VALUES
(1, 'Asus i7 1T ', 2500, 20, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque reprehenderit qui aut nesciunt officia! Officia laudantium facilis magni est illo!', 'https://picsum.photos/200/200', 0),
(2, 'Asus i5 512GB ', 2500, 20, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque reprehenderit qui aut nesciunt officia! Officia laudantium facilis magni est illo!', 'https://picsum.photos/200/200', 0),
(3, 'Cable HDMI 2 metre ', 20, 120, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque reprehenderit qui aut nesciunt officia! Officia laudantium facilis magni est illo!', 'https://picsum.photos/200/200', 0),
(4, 'Imprimante ', 500, 10, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque reprehenderit qui aut nesciunt officia! Officia laudantium facilis magni est illo!', 'https://picsum.photos/200/200', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
