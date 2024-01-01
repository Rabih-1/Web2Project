-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 08:03 PM
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
-- Database: `silvershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `silver`
--

CREATE TABLE `silver` (
  `sid` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `type` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `silver`
--

INSERT INTO `silver` (`sid`, `name`, `price`, `type`, `img`) VALUES
(3, 'Moonlit Elegance Ring', 16, 'ring', 'Images/Rings/rpic1.jpg'),
(4, 'Silver Serenity Band', 49, 'ring', 'Images/Rings/rpic2.jpg'),
(5, 'Celestial Gleam Ring', 88, 'ring', 'Images/Rings/rpic3.jpg'),
(6, 'Enchanting Silver Swirl', 34, 'ring', 'Images/Rings/rpic4.jpg'),
(7, 'Frosty Echo Band', 15, 'ring', 'Images/Rings/rpic5.jpg'),
(8, 'Twilight Sparkle Ring', 63, 'ring', 'Images/Rings/rpic6.jpg'),
(9, 'Shimmering Luna Band', 39, 'ring', 'Images/Rings/rpic7.jpg'),
(10, 'Silver Cascade Ring', 32, 'ring', 'Images/Rings/rpic8.jpg'),
(11, 'Radiant Silver Halo', 90, 'ring', 'Images/Rings/rpic9.jpg'),
(12, 'soon', 1, 'coming', 'ComingSoon/c1.jpg'),
(13, 'soon', 1, 'coming', 'ComingSoon/c2.jpg'),
(14, 'soon', 1, 'coming', 'ComingSoon/c3.jpg'),
(15, 'soon', 1, 'coming', 'ComingSoon/c4.jpg'),
(18, 'Sparkling Studs', 23, 'earring', 'Images/Earrings/pic1.jpg'),
(19, 'Pearl Drops', 23, 'earring', 'Images/Earrings/pic2.jpg'),
(20, 'Hoop Elegance', 14, 'earring', 'Images/Earrings/pic3.jpg'),
(21, 'Floral Bliss Earrings', 12, 'earring', 'Images/Earrings/pic4.jpg'),
(22, 'Crystal Teardrops', 6, 'earring', 'Images/Earrings/pic5.jpg'),
(23, 'Vintage Chandeliers', 56, 'earring', 'Images/Earrings/pic6.jpg'),
(24, 'Gold Tassel Earrings', 34, 'earring', 'Images/Earrings/pic7.jpg'),
(25, 'Diamond Halo Drops', 21, 'earring', 'Images/Earrings/pic8.jpg'),
(26, 'Gemstone Danglers', 52, 'earring', 'Images/Earrings/pic9.jpg'),
(27, 'Ethereal Elegance Necklace', 23, 'necklace', 'Images/Necklaces/pic1.jpg'),
(28, 'Serene Sapphire Strand', 32, 'necklace', 'Images/Necklaces/pic2.jpg'),
(29, 'Charm of the Orient Pendant', 21, 'necklace', 'Images/Necklaces/pic3.jpg'),
(44, 'Luminous Lariat Necklace', 45, 'necklace', 'Images/Necklaces/pic4.jpg'),
(45, 'Gilded Gardenia Collar', 42, 'necklace', 'Images/Necklaces/pic5.jpg'),
(46, 'Azure Twilight Choker', 21, 'necklace', 'Images/Necklaces/pic6.jpg'),
(47, 'Radiant Rose Quartz Necklace', 23, 'necklace', 'Images/Necklaces/pic7.jpg'),
(48, 'Enchanting Emerald Cascade', 34, 'necklace', 'Images/Necklaces/pic8.jpg'),
(49, 'Moonlit Marina Necklace', 67, 'necklace', 'Images/Necklaces/pic9.jpg'),
(50, 'Elegant Diamond Bracelet', 12, 'bracelet', 'Images/Bracelets/pic1.jpg'),
(51, 'Sterling Silver Cuff', 43, 'bracelet', 'Images/Bracelets/pic2.jpg'),
(52, 'Crystal Chain Bracelet', 13, 'bracelet', 'Images/Bracelets/pic3.jpg'),
(53, 'Charm Bangle Bracelet', 45, 'bracelet', 'Images/Bracelets/pic4.jpg'),
(54, 'Pearl Strand Bracelet', 87, 'bracelet', 'Images/Bracelets/pic5.jpg'),
(55, 'Leather Wrap Bracelet', 172, 'bracelet', 'Images/Bracelets/pic6.jpg'),
(56, 'Beaded Stretch Bracelet', 24, 'bracelet', 'Images/Bracelets/pic7.jpg'),
(57, 'Tennis Bracelet with Diamonds', 65, 'bracelet', 'Images/Bracelets/pic8.jpg'),
(58, 'Braided Leather Bracelet', 21, 'bracelet', 'Images/Bracelets/pic9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `silver`
--
ALTER TABLE `silver`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `silver`
--
ALTER TABLE `silver`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
