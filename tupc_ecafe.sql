-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 03:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tupc_ecafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons_table`
--

CREATE TABLE `addons_table` (
  `item_num` int(6) UNSIGNED NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `display` varchar(100) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addons_table`
--

INSERT INTO `addons_table` (`item_num`, `item_name`, `display`, `item_quantity`, `item_price`) VALUES
(4, 'fries', '16196944751619688861Fries.jpg', 50, 20),
(5, 'siomai', '1619694516siomai.jpg', 50, 25),
(6, 'turon', '1619694657turon.jpg', 50, 10),
(7, 'maruya', '1619694725maruya.jpg', 50, 7),
(8, 'banana', '1619694876banana.jpg', 50, 12),
(9, 'ice cream cup', '1619695049ice.jpg', 50, 25),
(10, 'saging', '1619695159sag.jpg', 50, 10),
(11, 'camote cue', '1619695236camote.jpg', 50, 15);

-- --------------------------------------------------------

--
-- Table structure for table `beveragedrinks_table`
--

CREATE TABLE `beveragedrinks_table` (
  `item_num` int(6) UNSIGNED NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `display` varchar(100) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beveragedrinks_table`
--

INSERT INTO `beveragedrinks_table` (`item_num`, `item_name`, `display`, `item_quantity`, `item_price`) VALUES
(4, 'sting', 'sting.jpg', 12, 10),
(5, 'coke', '1619692987Coke.jpg', 50, 15),
(7, 'coffee', '1619693342kope.jpg', 50, 22),
(8, 'bottled water', '1619693421water.jpg', 50, 15),
(9, 'sprite', '1619693556sprite2.jpg', 50, 15),
(10, 'vitamilk', '1619693704vitamilk.jpg', 50, 35),
(11, 'sterilized milk', '1619693812milk.jpg', 50, 22),
(12, 'orange juice', '1619694027oj.jpg', 50, 15);

-- --------------------------------------------------------

--
-- Table structure for table `breakfast_table`
--

CREATE TABLE `breakfast_table` (
  `item_num` int(6) UNSIGNED NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `display` varchar(100) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfast_table`
--

INSERT INTO `breakfast_table` (`item_num`, `item_name`, `display`, `item_quantity`, `item_price`) VALUES
(5, 'hotdog', '16196888241611309522Hotdog.jpg', 50, 10),
(7, 'toasted bread', '1619688785toasted.jpg', 50, 10),
(8, 'pancake', '1619688902pancake.jpg', 50, 12),
(9, 'champorado', '1619688958champorado.jpg', 50, 15),
(10, 'arroz caldo', '1619689002arooz.jpg', 50, 15),
(11, 'bacon', '1619689054bacon.jpg', 50, 20),
(12, 'scrambled egg', '1619689263Srambled egg.jpg', 50, 10),
(13, 'chao fan', '1619689299chao fan.jpg', 50, 15);

-- --------------------------------------------------------

--
-- Table structure for table `lunchmeal_table`
--

CREATE TABLE `lunchmeal_table` (
  `item_num` int(6) UNSIGNED NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `display` varchar(100) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunchmeal_table`
--

INSERT INTO `lunchmeal_table` (`item_num`, `item_name`, `display`, `item_quantity`, `item_price`) VALUES
(5, 'chicken adobo', '1619692026Chicken adobo.jpg', 50, 25),
(6, 'menudo', '1619692062Menudo.jpg', 50, 25),
(7, 'igado', '1619692110Igado.jpg', 50, 25),
(8, 'porkchop', '1619692146porkchop.jpg', 50, 30),
(9, 'longganisa', '1619692282Longganisa.jpg', 50, 12),
(10, 'caldereta', '1619692811caldereta.jpg', 50, 20),
(11, 'sinigang', '1619692876sinigang.jpg', 50, 25),
(12, 'sisig', '16196929071619692329sisig.jpg', 50, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons_table`
--
ALTER TABLE `addons_table`
  ADD PRIMARY KEY (`item_num`);

--
-- Indexes for table `beveragedrinks_table`
--
ALTER TABLE `beveragedrinks_table`
  ADD PRIMARY KEY (`item_num`);

--
-- Indexes for table `breakfast_table`
--
ALTER TABLE `breakfast_table`
  ADD PRIMARY KEY (`item_num`);

--
-- Indexes for table `lunchmeal_table`
--
ALTER TABLE `lunchmeal_table`
  ADD PRIMARY KEY (`item_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons_table`
--
ALTER TABLE `addons_table`
  MODIFY `item_num` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `beveragedrinks_table`
--
ALTER TABLE `beveragedrinks_table`
  MODIFY `item_num` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `breakfast_table`
--
ALTER TABLE `breakfast_table`
  MODIFY `item_num` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lunchmeal_table`
--
ALTER TABLE `lunchmeal_table`
  MODIFY `item_num` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
