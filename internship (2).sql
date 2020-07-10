-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 06:33 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `key` varchar(50) NOT NULL,
  `value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`key`, `value`) VALUES
('Email', 'pddharaiya@gmail.com'),
('Customer Care Number', '5656565656'),
('Contact Us', 'DHARAIYA LIMITED, SETH RAYCHAND MARG,MUMBAI-432234,MAHARASHTRA'),
('poojan_d', 'poojan@12345'),
('smit_dharaiya', 'smit@12345');

-- --------------------------------------------------------

--
-- Table structure for table `by_space`
--

CREATE TABLE `by_space` (
  `Id` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(150) NOT NULL,
  `Tile_Type` varchar(40) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Finish` varchar(100) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `by_space`
--

INSERT INTO `by_space` (`Id`, `Name`, `Image`, `Tile_Type`, `Category`, `Finish`, `Size`, `Price`) VALUES
(12, 'ALCOR 25', 'uploads/Alcor 25.jpg', 'WALL TILES', 'CERAMIC FLOOR', 'GLOSSY TILES', '800 * 800', 20),
(13, 'ALCOR 26', 'uploads/Alcor 26.jpg', 'WALL TILES', 'CERAMIC FLOOR TILES', 'GLOSSY TILES', '800 * 800', 22),
(15, 'ALLURA BLUE DECOR', 'uploads/Allura Blue Decor.jpg', 'WALL TILES', 'CERAMIC WALL TILES', 'GLOSSY TILES', '800 * 800', 25),
(16, 'ALLURA BLUE LT', 'uploads/Allura Blue LT.jpg', 'WALL TILES', 'GLAZED VITRIFIED TILES', 'MATTE TILES', '600 * 600', 20),
(17, 'AUSTEN GRIS', 'uploads/Austen Gris.jpg', 'WALL TILES', 'VITRIFIED DCH TILES', 'MATTE TILES', '600 * 600', 18),
(18, 'ALCOR 27', 'uploads/Alcor 27.jpg', 'WALL TILES', 'VITRIFIED HEAVY DUTY', 'MATTE TILES', '600 * 600', 22),
(19, 'AUSTEN  TAN', 'uploads/Austen Tan.jpg', 'WALL TILES', 'VITRIFIED DCH TILES', 'SATIN MATTE TILES', '600 * 600', 15),
(20, 'BLEND BROWN DECOR', 'uploads/Blend Brown Decor.jpg', 'WALL TILES', 'VITRIFIED DCH TILES', 'SATIN MATTE TILES', '600 * 600', 22),
(21, 'BOTANIQUE LT', 'uploads/Botanique LT.jpg', 'WALL TILES', 'CERAMIC WALL TILES', 'SATIN MATTE TILES', '600 * 600', 22),
(22, 'AUSTEN GRIS', 'uploads/Austen Gris.jpg', 'OutDoor Tiles', 'CERAMIC WALL TILES', 'LAPATO TILES', '800 * 800', 20),
(23, 'AUSTEN NATURA', 'uploads/Austen Natura.jpg', 'OutDoor Tiles', 'CERAMIC FLOOR TILES', 'LAPATO TILES', '600 * 600', 18),
(24, 'AUSTEN TAN', 'uploads/Austen Tan.jpg', 'OutDoor Tiles', 'CERAMIC FLOOR TILES', 'LAPATO TILES', '600 * 600', 20),
(25, 'DOLMA GRIS', 'uploads/Dolma Gris.jpg', 'OutDoor Tiles', 'GLAZED VITRIFIED TILES', 'LAPATO TILES', '600 * 600', 22),
(26, 'DOLMA NATURA', 'uploads/Dolma Natura.jpg', 'OutDoor Tiles', 'GLAZED VITRIFIED TILES', 'RUSTIC TILES', '800 * 800', 22),
(27, 'MAKALU BEIGE', 'uploads/Makalu.jpg', 'OutDoor Tiles', 'VITRIFIED ELEVATION TILES', 'RUSTIC TILES', '600 * 600', 22),
(28, 'LOBUCHE BEIGE', 'uploads/Lobuche Beige.jpg', 'OutDoor Tiles', 'VITRIFIED ELEVATION TILES', 'RUSTIC TILES', '800 * 800', 22),
(30, 'PUMORI NATURA', 'uploads/Pumori Natura.jpg', 'OutDoor Tiles', 'VITRIFIED HEAVY DUTY TILES', 'RUSTIC TILES', '800 * 800', 24),
(31, 'LHOTSE GRIS', 'uploads/Lhotse Gris.jpg', 'OutDoor Tiles', 'VITRIFIED HEAVY DUTY TILES', 'ECLAT TILES', '800 * 800', 24),
(32, 'BRETON STONE AVANA', 'uploads/Breton Stone Avana.jpg', 'Ceramic Tiles', 'CERAMIC FLOOR TILES', 'ECLAT TILES', '800 * 800', 18),
(33, 'BRETON STONE CAPTIVA', 'uploads/Breton Stone Captiva.jpg', 'Ceramic Tiles', 'CERAMIC WALL TILES', 'ECLAT TILES', '800 * 800', 18),
(34, 'BRETON STONE MOCASSIN', 'uploads/Breton Stone Mocassin.jpg', 'Ceramic Tiles', 'CERAMIC WALL TILES', 'ECLAT TILES', '800 * 800', 18),
(35, 'CADORE HICKORY', 'uploads/Cadore Hickory.jpg', 'Ceramic Tiles', 'CERAMIC FLOOR TILES', 'GLOSSY TILES', '800 * 800', 16),
(36, 'COTTO BRONZE', 'uploads/Cotto Bronze.jpg', 'Ceramic Tiles', 'VITRIFIED DCH TILES', 'MATTE TILES', '800 * 800', 18),
(37, 'COTTO CREME DECOR', 'uploads/Cotto Creme Decor.jpg', 'Ceramic Tiles', 'VITRIFIED DCH TILES', 'SATIN MATTE TILES', '800 * 800', 18),
(38, 'COTTO CREME', 'uploads/Cotto Creme.jpg', 'Ceramic Tiles', 'VITRIFIED DCH TILES', 'LAPATO TILES', '600 * 600', 21),
(39, 'COTTO ROUGE DECOR', 'uploads/Cotto Rouge Decor.jpg', 'Ceramic Tiles', 'VITRIFIED HEAVY DUTY TILES', 'RUSTIC TILES', '600 * 800', 18),
(40, 'COTTO ROUGE', 'uploads/Cotto Rouge.jpg', 'Ceramic Tiles', 'VITRIFIED ELEVATION TILES', 'ECLAT TILES', '600 * 800', 20),
(41, 'COTTO ROUGE DECOR', 'uploads/Cotto Rouge Decor.jpg', 'Ceramic Tiles', 'VITRIFIED ELEVATION TILES', 'GLOSSY TILES', '600 * 600', 18),
(42, 'COTTO ROUGE', 'uploads/Cotto Rouge.jpg', 'Ceramic Tiles', 'VITRIFIED ELEVATION TILES', 'GLOSSY TILES', '600 * 600', 20),
(43, 'BRECCIA AVORIO', 'uploads/Breccia Avorio.jpg', 'Floor Tiles', 'VITRIFIED ELEVATION TILES', 'MATTE TILES', '600 * 600', 18),
(49, 'DESSERT ASH GREY', 'uploads/Dessert Ash Grey.jpg', 'Floor Tiles', 'VITRIFIED DCH TILES', 'MATTE TILES', ' 600 * 600', 18),
(50, 'DESSERT FROST', 'uploads/Dessert Frost.jpg', 'Floor Tiles', 'VITRIFIED SST TILES', 'SATIN MATTE TILES', '800 * 800', 18),
(51, 'DESSERT GOLD', 'uploads/Dessert Gold.jpg', 'Floor Tiles', 'GLAZED VITRIFIED TILES', 'SATIN MATTE TILES', '600 * 600', 18),
(52, 'ENDURANCE GRIS', 'uploads/Endurance Gris.jpg', 'Floor Tiles', 'GLAZED VITRIFIED TILES', 'LAPATO TILES', '600 * 600', 18),
(53, 'ENDURANCE NERO', 'uploads/Endurance Nero.jpg', 'Floor Tiles', 'GLAZED VITRIFIED TILES', 'LAPATO TILES', '600 * 600', 20),
(54, 'STATUARIO', 'uploads/Statuario.jpg', 'Floor Tiles', 'GLAZED VITRIFIED TILES', 'RUSTIC TILES', '800 * 800', 15),
(55, 'MAGNUM EBONY', 'uploads/Magnum Ebony.jpg', 'Floor Tiles', 'GLAZED VITRIFIED TILES', 'RUSTIC TILES', '800 * 800', 20),
(56, 'SILEX GRIS', 'uploads/Silex Gris.jpg', 'Floor Tiles', 'GLAZED VITRIFIED TILES', 'ECLAT TILES', '800 * 800', 20),
(57, 'AMAZON CULTURA', 'uploads/images (9).jpg', 'WALL TILES', 'CERAMIC FLOOR', 'GLOSSY', '', 20),
(59, 'AMAZON CULTURA 4', 'uploads/carousel32.jpg', 'OutDoor Tiles', 'GLAZED VITRIFIED TILES', 'LAPATO TILES', '800 * 800', 20),
(64, 'LEON WHITE', 'uploads/Leon White.jpg', 'Living Room Tiles', 'VITRIFIED DCH TILES', 'GLOSSY TILES', '800 * 800', 20),
(65, 'MAGNUM PEARL', 'uploads/Magnum Pearl.jpg', 'Living Room Tiles', 'VITRIFIED DCH TILES', 'GLOSSY TILES', '800 * 800', 22),
(66, 'AMAZON BEIGE', 'uploads/Amazone Beige.jpg', 'Living Room Tiles', 'VITRIFIED HEAVY DUTY TILES', 'MATTE TILES', '800 * 800', 21),
(67, 'AMAZON SMOKE', 'uploads/Amazone Smoke.jpg', 'Living Room Tiles', 'VITRIFIED SST TILES', 'RUSTIC TILES', '800 * 800', 20),
(68, 'BIANCO LUCEE', 'uploads/Bianco Lucee.jpg', 'Living Room Tiles', 'VITRIFIED ELEVATION TILES', 'SATIN MATTE TILES', '800 * 800', 20),
(69, 'CROSSWOOD CHESTNUT', 'uploads/Crosswood Chestnut.jpg', 'Living Room Tiles', 'VITRIFIED ELEVATION TILES', 'RUSTIC TILES', '600 * 600', 19),
(70, 'SUPREME WHITE', 'uploads/Supreme White.jpg', 'Kitchen Tiles', 'CERAMIC FLOOR TILES', 'SATIN MATTE TILES', '800 * 800', 20),
(71, 'HERCULES FAWN', 'uploads/Hercules Fawn.jpg', 'Kitchen Tiles', 'GLAZED VITRIFIED TILES', 'RUSTIC TILES', '800 * 800', 20),
(72, 'HERCULES FROST', 'uploads/Hercules Frost.jpg', 'Kitchen Tiles', 'VITRIFIED SST TILES', 'SATIN MATTE TILES', '800 * 800', 20),
(73, 'ETERNO SAND', 'uploads/Eterno Sand.jpg', 'Kitchen Tiles', 'VITRIFIED ELEVATION TILES', 'LAPATO TILES', '600 * 600', 21),
(74, 'TROPICANA ASH', 'uploads/Tropicana Ash.jpg', 'Kitchen Tiles', 'CERAMIC FLOOR TILES', 'MATTE TILES', '600 * 600', 21),
(75, 'TROPICANA CHARCOAL', 'uploads/Tropicana Charcoal.jpg', 'Kitchen Tiles', 'CERAMIC FLOOR TILES', 'SATIN MATTE TILES', '600 * 600', 24),
(76, 'AEON AMANI-IG', 'uploads/Aeon Amani-IG.jpg', 'Kitchen Tiles', 'GLAZED VITRIFIED TILES', 'GLOSSY TILES', '600 * 600', 24),
(77, 'AEON AMANI-IM', 'uploads/Aeon Amani-IM.jpg', 'Kitchen Tiles', 'VITRIFIED DCH TILES', 'SATIN MATTE TILES', '600 * 600', 22),
(78, 'FILETTO ROSSO-GL', 'uploads/Filetto Rosso-GL.jpg', 'Bedroom Tiles', 'CERAMIC WALL TILES', 'SATIN MATTE TILES', '800 * 800', 20),
(79, 'AURISINA FIORITA', 'uploads/Aurisina Fiorita.jpg', 'Bedroom Tiles', 'CERAMIC WALL TILES', 'LAPATO TILES', '800 * 800', 20),
(80, 'AURISINA FIORITA', 'uploads/Avellino.jpg', 'Bedroom Tiles', 'GLAZED VITRIFIED TILES', 'SATIN MATTE TILES', '600 * 600', 21),
(81, 'BLUE STONE GREY', 'uploads/Blue Stone Grey.jpg', 'Bedroom Tiles', 'CERAMIC WALL TILES', 'RUSTIC TILES', '600 * 600', 20),
(82, 'COLUMBIA NERO', 'uploads/Columbia Nero.jpg', 'Bedroom Tiles', 'GLAZED VITRIFIED TILES', 'RUSTIC TILES', '600 * 600', 19),
(83, 'BRUNO', 'uploads/Bruno.jpg', 'Bedroom Tiles', 'CERAMIC WALL TILES', 'RUSTIC TILES', '600 * 600', 18),
(84, 'VINTAGE PEARL', 'uploads/Vintage Pearl.jpg', 'Bathroom Tiles', 'CERAMIC WALL TILES', 'SATIN MATTE TILES', '800 * 800', 22),
(85, 'AREZZO', 'uploads/Arezzo.jpg', 'Bathroom Tiles', 'VITRIFIED DCH TILES', 'MATTE TILES', '800 * 800', 21),
(86, 'BELGIUM SUCREBLANCO', 'uploads/Belgium Sucreblanco.jpg', 'Bathroom Tiles', 'GLAZED VITRIFIED TILES', 'SATIN MATTE TILES', '600 * 600', 20),
(87, 'BLUE STONE BLACK', 'uploads/Blue Stone Black.jpg', 'Bathroom Tiles', 'CERAMIC WALL TILES', 'LAPATO TILES', '800 * 800', 21),
(88, 'BOTTOCHINO ROYALE', 'uploads/Bottochino Royale.jpg', 'Bathroom Tiles', 'VITRIFIED HEAVY DUTY TILES', 'MATTE TILES', '600 * 600', 20),
(89, 'COTTO ROUGEE', 'uploads/Cotto RougeE.jpg', 'Bathroom Tiles', 'VITRIFIED ELEVATION TILES', 'LAPATO TILES', '600 * 600', 22),
(90, 'CREMA BELLO', 'uploads/Crema Bello.jpg', 'Commercial Tiles', 'GLAZED VITRIFIED TILES', 'GLOSSY TILES', '800 * 800', 20),
(91, 'DEKORE BRONCE', 'uploads/Dekore Bronce.jpg', 'Commercial Tiles', 'VITRIFIED DCH TILES', 'MATTE TILES', '800 * 800', 21),
(92, 'DEKORE BMONETA', 'uploads/Dekore Moneta.jpg', 'Commercial Tiles', 'VITRIFIED HEAVY DUTY TILES', 'GLOSSY TILES', '800 * 800', 21),
(93, 'DIANA PEARL', 'uploads/Diana Pearl.jpg', 'Commercial Tiles', 'VITRIFIED DCH TILES', 'RUSTIC TILES', '800 * 800', 20),
(94, 'DUNKEL BRAUN', 'uploads/Dunkel Braun.jpg', 'Commercial Tiles', 'VITRIFIED HEAVY DUTY TILES', 'MATTE TILES', '800 * 800', 19),
(95, 'FREGIO GRISEO DECOR', 'uploads/Fregio Griseo Decor.jpg', 'Commercial Tiles', 'VITRIFIED DCH TILES', 'GLOSSY TILES', '800 * 800', 25),
(96, 'FUSION LAPIS', 'uploads/Fusion Lapis.jpg', 'Commercial Tiles', 'VITRIFIED ELEVATION TILES', 'SATIN MATTE TILES', '800 * 800', 24),
(97, 'FUSION LNARANJA', 'uploads/Fusion Naranja.jpg', 'Commercial Tiles', 'GLAZED VITRIFIED TILES', 'RUSTIC TILES', '600 * 600', 24),
(98, 'ESPRESSO GREY', 'uploads/Espresso Grey.jpg', 'Commercial Tiles', 'CERAMIC WALL TILES', 'MATTE TILES', '600 * 600', 21),
(99, 'ENDURANCE MELODY', 'uploads/Endurance Melody.jpg', 'Commercial Tiles', 'GLAZED VITRIFIED TILES', 'LAPATO TILES', '600 * 600', 20),
(100, 'poojan', 'uploads/apartment-bathroom-bathtub-1457847.jpg', 'Floor Tiles', 'VITRIFIED ELEVATION TILES', 'MATTE TILES', '800 * 800', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Category`) VALUES
('CERAMIC FLOOR TILES'),
('CERAMIC WALL TILES'),
('GLAZED VITRIFIED TILES'),
('VITRIFIED ELEVATION TILES'),
('VITRIFIED DCH TILES'),
('VITRIFIED HEAVY DUTY TILES'),
('VITRIFIED SST TILES');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(50) NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` mediumint(10) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `First Name`, `Last Name`, `Email`, `Contact`, `Message`) VALUES
(1, 'poojanj', 'sjqs', 'jbdwudsb@gmail.com', 8388607, 'JWBDSJWNDK JD J W WJDBBJ JD'),
(2, 'poojan', 'dharaiya', 'poojandharaiya@gmail.com', 8388607, 'Do have Some Queries Regarding Some of the Tiles and need Suggestion.'),
(3, 'poojan', 'dharaiya', 'poojandharaiya@gmail.com', 8388607, 'Do have Some Queries Regarding Some of the Tiles and need Suggestion.');

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id` int(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `State` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Contact` bigint(50) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` (`id`, `Name`, `State`, `City`, `Address`, `Contact`, `Email`) VALUES
(1, 'BHARATH AGENCIES', 'GUJARAT', 'RAJKOT', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bharat@gmail.com'),
(2, 'PERFECTO', 'MAHARASHTRA', 'MUMBAI', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bharat@gmail.com'),
(3, 'KRISHNA AGENCIES', 'GUJARAT', 'SURAT', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bharat@gmail.com'),
(4, 'NIRMA AGENCIES', 'GUJARAT', 'RAJKOT', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'NirmaCo@gmail.com'),
(5, 'KRIPTO AGENCIES', 'GUJARAT', 'SURAT', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Kripto10@gmail.com'),
(6, 'BHANUSHALI AGENCIES', 'GUJARAT', 'AHMEDABAD', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bhanushali@gmail.com'),
(7, 'KARTHIK AGENCIES', 'GUJARAT', 'AHMEDABAD', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'BKarthik119@gmail.com'),
(8, 'SANIYA AGENCIES', 'GUJARAT', 'AHMEDABAD', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Saniya1109@gmail.com'),
(9, 'LAKHOTA AGENCIES', 'GUJARAT', 'SURAT', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Lakhota1109@gmail.com'),
(10, 'BHARATIYA AGENCIES', 'MAHARASHTRA', 'MUMBAI', 'KASHIMIRA ROAD,360007', 121520254142, 'Bhartiya@gmail.com'),
(11, 'PERFECTION', 'MAHARASHTRA', 'MUMBAI', 'BORIVALI EAST,360007', 121520254142, 'PerfectionTextTiles@gmail.com'),
(12, 'KISHAN AGENCIES', 'MAHARASHTRA', 'MUMBAI', 'BORIVALI WEST,360090', 121520254142, 'kishankumar@gmail.com'),
(13, 'NIRMAL AGENCIES', 'MAHARASHTRA', 'MUMBAI', 'DAHISAR,360080', 121520254142, 'NirmaLCo@gmail.com'),
(14, 'KRIPTAN AGENCIES', 'MAHARASHTRA', 'PUNE', 'JISHNAK ROAD,360007', 121520254142, 'KriptAN10@gmail.com'),
(15, 'BHANUSHALI AGENCIES', 'GUJARAT', 'AHMEDABAD', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bhanushali@gmail.com'),
(16, 'KARTHIKI AGENCIES', 'GUJARAT', 'RAJKOT', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'BKarthik119@gmail.com'),
(17, 'SANITA AGENCIES', 'RAJASTHAN', 'JAIPUR', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Saniya1109@gmail.com'),
(18, 'LAKHOTIYA AGENCIES', 'RAJASTHAN', 'JAIPUR', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Lakhota1109@gmail.com'),
(19, 'BHARATH AGENCIES', 'ANDHRA PRADESH', 'AMRAVATI', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bharat@gmail.com'),
(20, 'PERFECTO', 'ARUNACHAL PRADESH', 'ITANAGAR', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bharat@gmail.com'),
(22, 'NIRMA AGENCIES', 'ASAM', 'DISPUR', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'NirmaCo@gmail.com'),
(23, 'KRIPTO AGENCIES', 'ARUNACHAL PRADESH', 'ITANAGAR', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Kripto10@gmail.com'),
(24, 'BHANUSHALI AGENCIES', 'ANDHRA PRADESH', 'AMRAVATI', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bhanushali@gmail.com'),
(25, 'KARTHIK AGENCIES', 'BIHAR', 'PATNA', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'BKarthik119@gmail.com'),
(26, 'SANIYA AGENCIES', 'BIHAR', 'PATNA', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Saniya1109@gmail.com'),
(27, 'LAKHOTA AGENCIES', 'GOA', 'PANJI', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Lakhota1109@gmail.com'),
(28, 'BHARATIYA AGENCIES', 'GOA', 'PANJI', 'KASHIMIRA ROAD,360007', 121520254142, 'Bhartiya@gmail.com'),
(29, 'PERFECTION', 'CHHATTISGARH', 'RAIPUR', 'BORIVALI EAST,360007', 121520254142, 'PerfectionTextTiles@gmail.com'),
(30, 'KISHAN AGENCIES', 'CHHATTISGARH', 'RAIPUR', 'BORIVALI WEST,360090', 121520254142, 'kishankumar@gmail.com'),
(31, 'NIRMAL AGENCIES', 'HARIYANA', 'CHANDIGARH', 'DAHISAR,360080', 121520254142, 'NirmaLCo@gmail.com'),
(32, 'KRIPTAN AGENCIES', 'HARIYANA', 'CHANDIGARH', 'JISHNAK ROAD,360007', 121520254142, 'KriptAN10@gmail.com'),
(33, 'BHANUSHALI AGENCIES', 'GUJARAT', 'GANDHINAGAR', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bhanushali@gmail.com'),
(34, 'KARTHIKI AGENCIES', 'GUJARAT', 'GANDHINAGAR', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'BKarthik119@gmail.com'),
(35, 'SANITA AGENCIES', 'HIMACHAL PRADESH', 'SIMLA', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Saniya1109@gmail.com'),
(36, 'LAKHOTIYA AGENCIES', 'HIMACHAL PRADESH', 'SIMLA', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Lakhota1109@gmail.com'),
(37, 'BHARATH AGENCIES', 'JHARKHAND', 'RANCHI', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bharat@gmail.com'),
(38, 'PERFECTO', 'JHARKHAND', 'RANCHI', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bharat@gmail.com'),
(39, 'KRISHNA AGENCIES', 'GUJARAT', 'SURAT', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bharat@gmail.com'),
(40, 'NIRMA AGENCIES', 'KERALA', 'TRIVANDRUM', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'NirmaCo@gmail.com'),
(41, 'KRIPTO AGENCIES', 'ODISHA', 'BHUBANESHWAR', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Kripto10@gmail.com'),
(42, 'BHANUSHALI AGENCIES', 'ODISHA', 'BHUBANESHWAR', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bhanushali@gmail.com'),
(43, 'KARTHIK AGENCIES', 'PUNJAB', 'CHANDIGARH', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'BKarthik119@gmail.com'),
(44, 'SANIYA AGENCIES', 'PUNJAB', 'CHANDIGARH', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Saniya1109@gmail.com'),
(45, 'LAKHOTA AGENCIES', 'TAMIL NADU', 'CHENNAI', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Lakhota1109@gmail.com'),
(46, 'BHARATIYA AGENCIES', 'TAMIL NADU', 'CHENNAI', 'KASHIMIRA ROAD,360007', 121520254142, 'Bhartiya@gmail.com'),
(47, 'PERFECTION', 'TAMIL NADU', 'CHENNAI', 'BORIVALI EAST,360007', 121520254142, 'PerfectionTextTiles@gmail.com'),
(48, 'KISHAN AGENCIES', 'MAHARASHTRA', 'MUMBAI', 'BORIVALI WEST,360090', 121520254142, 'kishankumar@gmail.com'),
(49, 'NIRMAL AGENCIES', 'UTTAR PRADESH', 'LUCKNOW', 'DAHISAR,360080', 121520254142, 'NirmaLCo@gmail.com'),
(50, 'KRIPTAN AGENCIES', 'UTTAR PRADESH ', 'LUCKNOW', 'JISHNAK ROAD,360007', 121520254142, 'KriptAN10@gmail.com'),
(51, 'BHANUSHALI AGENCIES', 'WEST BENGAL', 'KOLKATA', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bhanushali@gmail.com'),
(52, 'KARTHIKI AGENCIES', 'WEST BENGAL', 'KOLKATA', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'BKarthik119@gmail.com'),
(53, 'SANITA AGENCIES', 'WEST BENGAL', 'KOLKATA', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Saniya1109@gmail.com'),
(54, 'LAKHOTIYA AGENCIES', 'RAJASTHAN', 'JAIPUR', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Lakhota1109@gmail.com'),
(55, 'BHARATH AGENCIES', 'WEST BENGAL', 'KOLKATA', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bharat@gmail.com'),
(56, 'PERFECTO', 'UTTARAKHAND', 'DEHRADUN', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bharat@gmail.com'),
(57, 'KRISHNA AGENCIES', 'UTTARAKHAND', 'DEHRADUN', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bharat@gmail.com'),
(58, 'NIRMA AGENCIES', 'UTTARAKHAND', 'DEHRADUN', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'NirmaCo@gmail.com'),
(59, 'KRIPTO AGENCIES', 'ARUNACHAL PRADESH', 'ITANAGAR', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Kripto10@gmail.com'),
(60, 'BHANUSHALI AGENCIES', 'ANDHRA PRADESH', 'AMRAVATI', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'Bhanushali@gmail.com'),
(61, 'KARTHIK AGENCIES', 'BIHAR', 'PATNA', '150 FEET RING ROAD,RAIYA CIRCLE,360007', 121520254142, 'BKarthik119@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(100) NOT NULL,
  `First Name` varchar(100) NOT NULL,
  `Last Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` mediumint(15) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `First Name`, `Last Name`, `Email`, `Contact`, `Occupation`, `Comment`) VALUES
(1, 'poojan', 'dharaiya', 'poojandharaiya@gmail.com', 8388607, 'Home Improvement Dealer', 'website is totally love'),
(2, 'smit', 'dharaiya', 'poojandharaiya@gmail.com', 8388607, 'Student Of Architecture', 'This Website Really Helped Me Finding best Tiles for My House. Even The Featured Are  really helpfull. '),
(3, 'poojan', 'dharaiya', 'smitdharaiya@gmail.com', 8388607, 'Home Improvement Dealer', 'Very Helpfull Website and Good services. keep ii up.'),
(4, 'poojan', 'dharaiya', 'smitdharaiya@gmail.com', 8388607, 'Home Improvement Dealer', 'Very Helpfull Website and Good services. keep ii up.'),
(5, 'poojan', 'dharaiya', 'poojandharaiya@gmail.com', 8388607, 'Home Improvement Dealer', 'hwbdhqwbdx  wdj d '),
(6, 'smit', 'dharaiya', 'poojandharaiya@gmail.com', 8388607, 'Home Improvement Dealer', 'very nice website'),
(7, 'smit', 'dharaiya', 'poojandharaiya@gmail.com', 8388607, 'Home Improvement Dealer', 'perfect website for tiles information'),
(8, 'yashvi', 'raythatha', 'poojandharaiya@gmail.com', 8388607, 'Interior Designer', 'awesome tiles !!!'),
(9, 'poojan', 'dharaiya', 'poojandharaiya@gmail.com', 8388607, 'Home Improvement Dealer', 'cool '),
(10, 'poojan', 'dharaiya', 'poojandharaiya@gmail.com', 8388607, 'Vendor', 'knwdsnlk');

-- --------------------------------------------------------

--
-- Table structure for table `finish`
--

CREATE TABLE `finish` (
  `Finish` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finish`
--

INSERT INTO `finish` (`Finish`) VALUES
('MATTE TILES'),
('SATIN MATTE TILES'),
('RUSTIC TILES'),
('LAPATO TILES'),
('ECLAT TILES'),
('GLOSSY TILES');

-- --------------------------------------------------------

--
-- Table structure for table `poojan_d`
--

CREATE TABLE `poojan_d` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` int(50) NOT NULL,
  `Quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poojan_d`
--

INSERT INTO `poojan_d` (`Id`, `Name`, `Price`, `Quantity`) VALUES
(1, 'DOLMA NATURA', 22, 8),
(2, 'DOLMA NATURA', 22, 10),
(3, 'DOLMA NATURA', 22, 5),
(4, 'MAGNUM EBONY', 20, 10),
(5, 'MAGNUM EBONY', 20, 15),
(6, 'MAGNUM EBONY', 20, 5),
(7, 'MAGNUM EBONY', 20, 20),
(8, 'BRETON STONE CAPTIVA', 18, 20),
(9, 'BLUE STONE GREY', 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(50) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Password`) VALUES
(1, 'Poojan_dharaiya', 'pd12345'),
(2, 'poojan_d', 'poojan12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `by_space`
--
ALTER TABLE `by_space`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `poojan_d`
--
ALTER TABLE `poojan_d`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `by_space`
--
ALTER TABLE `by_space`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `poojan_d`
--
ALTER TABLE `poojan_d`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
