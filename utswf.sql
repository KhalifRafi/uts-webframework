-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 08:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utswf`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `graphics` varchar(255) NOT NULL,
  `professional` varchar(255) NOT NULL,
  `server` varchar(255) NOT NULL,
  `processorswithgp` varchar(255) NOT NULL,
  `chipsets` varchar(255) NOT NULL,
  `processors` varchar(255) NOT NULL,
  `desktop` varchar(255) NOT NULL,
  `embedded` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `graphics`, `professional`, `server`, `processorswithgp`, `chipsets`, `processors`, `desktop`, `embedded`) VALUES
(1, 'AMD Radeon RX 6000', 'AMD Radeon Pro', 'AMD Instinct', 'AMD Ryzen Processors', 'Laptop Chipset', 'AMD Epyc', 'AMD 4700S', 'AMD Embedded Radeon'),
(2, 'AMD Radeon RX 7000', 'AMD Radeon Pro1', 'AMD Instinct1', 'AMD Ryzen Processors1', 'Laptop Chipset1', 'AMD Epyc1', 'AMD 4800S', 'AMD Embedded Radeon1'),
(3, 'AMD Radeon 5700', 'FirePro', 'AMD Instinc2', 'AMD FX', 'AMD 666Z', 'AMD Pro Firebase', 'AMD ProHengkerWibu', 'AMD SuperStar'),
(4, 'AMD Radeon 5900', 'FirePro1', 'FirePro2', 'FirePr03', 'FirePro4', 'FirePro5', 'FirePro6', 'FirePro7'),
(5, 'AMD Radeon 5000', 'AMD Instinc3', 'AMD Instinc4', 'AMD Instinc5', 'AMD Instinc6', 'AMD Instinc7', 'AMD Instinc8', 'AMD Instinc29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `desk` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama`, `desk`, `image`) VALUES
(1, 'AMD Ryzen™ PRO Mobile Processors for Business', 'Multi-core performance and battery life + manageability and additional security features.', 'promobile'),
(2, 'AMD Ryzen™ Mobile Processors for Business', 'Responsive, multi-core performance with superb efficiency and battery life.', 'mobileprocessor'),
(3, 'AMD Powered Laptops for Students and Teachers', 'AMD processors with Radeon™ Graphics deliver fast web browsing performance and smooth video streaming to support online learning environments.', 'poweredlaptop'),
(4, 'AMD Ryzen™ Mobile Processors', 'The most cores available, with the highest performance you can get in a mobile processor.1', 'mobileprocessors'),
(5, 'AMD Athlon™ Mobile Processors', 'Real performance and modern features for mainstream laptops.', 'athlon'),
(6, 'AMD Ryzen™ Threadripper™ PRO Processors', 'Professional workstation users 7nm process technology delivering an unmatched CPU core density for professional workloads and supporting 128 PCIe® 4.0 lanes.', 'threadripper'),
(7, 'AMD Ryzen™ PRO Processors', 'With up to 8 cores, delivers modern performance, security features, and seamless management for the most demanding business environments.', '8cores'),
(8, 'AMD Athlon™ PRO Processors', 'Professional security features, performance, and manageability with exceptional value.', 'athlon'),
(9, 'AMD Ryzen™ Threadripper Processors for High End Desktops', 'Up to 64 cores and 128 threads for lightning-fast creative workloads.', 'threadripper'),
(10, 'AMD Ryzen™ Processors', 'Game-changing performance with up to 16 cores, 32 threads, boost clocks of up to 4.9GHz, and up to 72MB of cache.1', '16cores'),
(11, 'AMD Ryzen™ Processors with Radeon™ Graphics', 'Enthusiast-class performance without the need for a discrete graphics card.', 'enthutias'),
(12, 'AMD Athlon™ Processors with Radeon™ Graphics', 'Fueled by up to 4 advanced “Zen +”2 processing cores and 4 processing threads, you’ll make short work of your everyday productivity, surfing, and multi-tasking.', 'athlon'),
(13, 'AMD Chipsets for Desktop PCs', 'AMD chipsets for desktops are designed to support cutting-edge platform technologies for home entertainment, gaming and business productivity.', 'amdchipset'),
(14, 'AMD Ryzen Master Utility for Overclocking Control', 'The simple and powerful overclocking utility for AMD Ryzen™ processors so you can personalize performance to your taste.3', 'master'),
(15, 'StoreMI Storage Expansion and Acceleration', 'A fast and easy way to expand and accelerate the storage in a desktop PC with an AMD Ryzen™ processor.', 'storemi'),
(16, 'AMD Desktop Kits', 'Bringing modern PC performance into a simple preconfigured kit that allows for smaller footprint and takes the guesswork out of matching the right components when building a system.', 'desktopkids');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
