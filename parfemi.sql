-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 02:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parfemi`
--
CREATE DATABASE IF NOT EXISTS `parfemi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `parfemi`;

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `korisnik_id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`korisnik_id`, `ime`, `prezime`, `username`, `password`) VALUES
(1, 'Jana', 'Stankovic', 'jana', '1');

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `korpa_id` int(11) NOT NULL,
  `korisnik_id` int(11) NOT NULL,
  `parfem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parfem`
--

CREATE TABLE `parfem` (
  `parfem_id` int(11) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `pol` varchar(50) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `zapremina` varchar(10) NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parfem`
--

INSERT INTO `parfem` (`parfem_id`, `naziv`, `pol`, `slika`, `zapremina`, `cena`) VALUES
(1, 'CAROLINA HERRERA Good Girl Gold ', 'Zenski', 'https://www.jasmin.rs/media/catalog/product/cache/c3885502dbfa89ce2d2028a3ae6c3079/3/3/3386460134422.jpg', '80ml', 15790),
(2, 'GUERLAIN Aqua Allegoria ', 'Zenski', 'https://www.jasmin.rs/media/catalog/product/cache/c3885502dbfa89ce2d2028a3ae6c3079/g/0/g014472_3346470144729_mandarine-basilic-forte-edp-75ml.jpg', '75ml', 11190),
(3, 'TRUSSARDI Uomo Levriero ', 'Muski', 'https://www.jasmin.rs/media/catalog/product/cache/c3885502dbfa89ce2d2028a3ae6c3079/t/r/tru_uomo_levriero_coll_le_edp_100_pack_front_1_1.jpg', '100ml', 15490);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`korisnik_id`);

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`korpa_id`),
  ADD KEY `korisnik_fk` (`korisnik_id`),
  ADD KEY `parfem_fk` (`parfem_id`);

--
-- Indexes for table `parfem`
--
ALTER TABLE `parfem`
  ADD PRIMARY KEY (`parfem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `korisnik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `korpa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `parfem`
--
ALTER TABLE `parfem`
  MODIFY `parfem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korpa`
--
ALTER TABLE `korpa`
  ADD CONSTRAINT `korisnik_fk` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnik` (`korisnik_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parfem_fk` FOREIGN KEY (`parfem_id`) REFERENCES `parfem` (`parfem_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
