-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 11:50 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `by_space`
--

CREATE TABLE `by_space` (
  `Id` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(150) NOT NULL,
  `Tile_Type` varchar(40) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `by_space`
--

INSERT INTO `by_space` (`Id`, `Name`, `Image`, `Tile_Type`, `Size`, `Price`) VALUES
(12, 'ALCOR 25', 'Walls/Alcor 25.jpg', 'WALL TILES', '800 * 800', 20),
(13, 'ALCOR 26', 'Walls/Alcor 26.jpg', 'WALL TILES', '800 * 800', 22),
(15, 'ALLURA BLUE DECOR', 'Walls/Allura Blue Decor.jpg', 'WALL TILES', '800 * 800', 25),
(16, 'ALLURA BLUE LT', 'Walls/Allura Blue LT.jpg', 'WALL TILES', '600 * 600', 20),
(17, 'AUSTEN GRIS', 'Walls/Austen Gris.jpg', 'WALL TILES', '600 * 600', 18),
(18, 'ALCOR 27', 'Walls/Alcor 27.jpg', 'WALL TILES', '600 * 600', 22),
(19, 'AUSTEN  TAN', 'Walls/Austen Tan.jpg', 'WALL TILES', '600 * 600', 15),
(20, 'BLEND BROWN DECOR', 'Walls/Blend Brown Decor.jpg', 'WALL TILES', '600 * 600', 22),
(21, 'BOTANIQUE LT', 'Walls/Botanique LT.jpg', 'WALL TILES', '600 * 600', 22),
(22, 'AUSTEN GRIS', 'Outdoor/Austen Gris.jpg', 'OutDoor Tiles', '800 * 800', 20),
(23, 'AUSTEN NATURA', 'Outdoor/Austen Natura.jpg', 'OutDoor Tiles', '600 * 600', 18),
(24, 'AUSTEN TAN', 'Outdoor/Austen Tan.jpg', 'OutDoor Tiles', '600 * 600', 20),
(25, 'DOLMA GRIS', 'Outdoor/Dolma Gris.jpg', 'OutDoor Tiles', '600 * 600', 22),
(26, 'DOLMA NATURA', 'Outdoor/Dolma Natura.jpg', 'OutDoor Tiles', '800 * 800', 22),
(27, 'MAKALU BEIGE', 'Outdoor/Makalu.jpg', 'OutDoor Tiles', '600 * 600', 22),
(28, 'LOBUCHE BEIGE', 'Outdoor/Lobuche Beige.jpg', 'OutDoor Tiles', '800 * 800', 22),
(30, 'PUMORI NATURA', 'Outdoor/Pumori Natura.jpg', 'OutDoor Tiles', '800 * 800', 24),
(31, 'LHOTSE GRIS', 'Outdoor/Lhotse Gris.jpg', 'OutDoor Tiles', '800 * 800', 24),
(32, 'BRETON STONE AVANA', 'Ceramic/Breton Stone Avana.jpg', 'Ceramic Tiles', '800 * 800', 18),
(33, 'BRETON STONE CAPTIVA', 'Ceramic/Breton Stone Captiva.jpg', 'Ceramic Tiles', '800 * 800', 18),
(34, 'BRETON STONE MOCASSIN', 'Ceramic/Breton Stone Mocassin.jpg', 'Ceramic Tiles', '800 * 800', 18),
(35, 'CADORE HICKORY', 'Ceramic/Cadore Hickory.jpg', 'Ceramic Tiles', '800 * 800', 16),
(36, 'COTTO BRONZE', 'Ceramic/Cotto Bronze.jpg', 'Ceramic Tiles', '800 * 800', 18),
(37, 'COTTO CREME DECOR', 'Ceramic/Cotto Creme Decor.jpg', 'Ceramic Tiles', '800 * 800', 18),
(38, 'COTTO CREME', 'Ceramic/Cotto Creme.jpg', 'Ceramic Tiles', '600 * 600', 21),
(39, 'COTTO ROUGE DECOR', 'Ceramic/Cotto Rouge Decor.jpg', 'Ceramic Tiles', '600 * 800', 18),
(40, 'COTTO ROUGE', 'Ceramic/Cotto Rouge.jpg', 'Ceramic Tiles', '600 * 800', 20),
(41, 'COTTO ROUGE DECOR', 'Ceramic/Cotto Rouge Decor.jpg', 'Ceramic Tiles', '600 * 600', 18),
(42, 'COTTO ROUGE', 'Ceramic/Cotto Rouge.jpg', 'Ceramic Tiles', '600 * 600', 20),
(43, 'BRECCIA AVORIO', 'Floor/Breccia Avorio.jpg', 'Floor Tiles', '600 * 600', 18),
(49, 'DESSERT ASH GREY', 'Floor/Dessert Ash Grey.jpg', 'Floor Tiles', '600 * 600', 18),
(50, 'DESSERT FROST', 'Floor/Dessert Frost.jpg', 'Floor Tiles', '600 * 600', 18),
(51, 'DESSERT GOLD', 'Floor/Dessert Gold.jpg', 'Floor Tiles', '600 * 600', 18),
(52, 'ENDURANCE GRIS', 'Floor/Endurance Gris.jpg', 'Floor Tiles', '600 * 600', 18),
(53, 'ENDURANCE NERO', 'Floor/Endurance Nero.jpg', 'Floor Tiles', '600 * 600', 20),
(54, 'STATUARIO', 'Floor/Statuario.jpg', 'Floor Tiles', '800 * 800', 15),
(55, 'MAGNUM EBONY', 'Floor/Magnum Ebony.jpg', 'Floor Tiles', '800 * 800', 20),
(56, 'SILEX GRIS', 'Floor/Silex Gris.jpg', 'Floor Tiles', '800 * 800', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `by_space`
--
ALTER TABLE `by_space`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `by_space`
--
ALTER TABLE `by_space`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
