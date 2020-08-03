-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 03, 2020 at 02:20 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giftstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `crockery`
--

DROP TABLE IF EXISTS `crockery`;
CREATE TABLE IF NOT EXISTS `crockery` (
  `id` int(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `img` varchar(30) DEFAULT NULL,
  `price` int(5) NOT NULL,
  `category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crockery`
--

INSERT INTO `crockery` (`id`, `name`, `img`, `price`, `category`) VALUES
(81, 'kitten mug', '81.jpg', 150, 'crockery'),
(82, 'kuksa', '82.jpg', 250, 'crockery'),
(83, '3D mug', '83.jpg', 300, 'crockery'),
(85, 'wooden mug', '85.jpg', 350, 'crockery'),
(86, 'Flamingo', '86.jpg', 300, 'crockery'),
(87, 'Dinnerware', '87.jpg', 700, 'crockery'),
(88, 'Casserole', '88.jpg', 999, 'crockery'),
(89, 'Glaze', '89.jpg', 1050, 'crockery'),
(90, 'Rubik Mug', '90.jpg', 399, 'crockery'),
(91, 'Pottery Mu', '91.jpg', 300, 'crockery'),
(92, 'Minion mug', '92.jpg', 450, 'crockery'),
(93, 'Bowl', '93.jpg', 500, 'crockery'),
(94, 'Dish set', '94.jpg', 699, 'crockery'),
(95, 'Asian Bowl', '95.jpg', 700, 'crockery'),
(96, 'Indigo Glaze', '96.jpg', 1500, 'crockery'),
(97, 'Snack Plate', '97.jpg', 400, 'crockery');

-- --------------------------------------------------------

--
-- Table structure for table `homedecor`
--

DROP TABLE IF EXISTS `homedecor`;
CREATE TABLE IF NOT EXISTS `homedecor` (
  `id` int(3) NOT NULL,
  `name` varchar(15) NOT NULL,
  `img` varchar(30) DEFAULT NULL,
  `price` int(5) NOT NULL,
  `category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homedecor`
--

INSERT INTO `homedecor` (`id`, `name`, `img`, `price`, `category`) VALUES
(1, 'Oval Lamp', 'lamp.jpg', 999, 'homedecor'),
(2, 'KeyHolder', 'keyholder.jpg', 699, 'homedecor'),
(3, 'Card', 'card.jpg', 699, 'homedecor'),
(4, 'Holder', 'candle.jpg', 399, 'homedecor'),
(5, 'Flowers', 'flowers.jpg', 499, 'homedecor'),
(6, 'Bonsai', 'bonsai.jpg', 899, 'homedecor'),
(7, 'Lamp', 'lamp1.jpg', 799, 'homedecor'),
(8, 'Cycle', 'cycle.jpg', 1999, 'homedecor'),
(9, 'ShowPiece', 'show.jpg', 699, 'homedecor'),
(10, 'PortRait', 'port.jpg', 599, 'homedecor'),
(11, 'Owl Holder', 'owl.jpg', 999, 'homedecor'),
(12, 'DinnerSet', 'dinner.jpg', 1499, 'homedecor'),
(13, 'BirdHouse', 'birdhouse.jpg', 499, 'homedecor'),
(14, 'Night Lamp', 'nightlamp.jpg', 399, 'homedecor'),
(15, 'PhotoFrame', 'photo.jpg', 499, 'homedecor'),
(16, 'Frame', 'frame.jpg', 699, 'homedecor');

-- --------------------------------------------------------

--
-- Table structure for table `jewellery`
--

DROP TABLE IF EXISTS `jewellery`;
CREATE TABLE IF NOT EXISTS `jewellery` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img` varchar(30) DEFAULT NULL,
  `price` int(5) NOT NULL,
  `category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jewellery`
--

INSERT INTO `jewellery` (`id`, `name`, `img`, `price`, `category`) VALUES
(53, 'bracelet', 'bracelet.jpg', 699, 'jewellery'),
(54, 'silver pearl earings', '2.jpg', 559, 'jewellery'),
(55, 'blue woolen earing', '3.jpg', 59, 'jewellery'),
(56, 'peacock necklace', '4.jpg', 499, 'jewellery'),
(57, 'butterfly pendant', '5.jpg', 399, 'jewellery'),
(58, 'nosering', '6.jpg', 99, 'jewellery'),
(59, 'golden bangles', '7.jpg', 1099, 'jewellery'),
(60, 'gold plated bangles', '8.jpg', 2099, 'jewellery'),
(61, 'infinity ring', '9.jpg', 550, 'jewellery'),
(62, 'diamond earing', '10.jpg', 3050, 'jewellery'),
(63, 'Infinity earing', '11.jpg', 650, 'jewellery'),
(64, 'Pearl ring', '12.jpg', 999, 'jewellery');

-- --------------------------------------------------------

--
-- Table structure for table `phonecasse`
--

DROP TABLE IF EXISTS `phonecasse`;
CREATE TABLE IF NOT EXISTS `phonecasse` (
  `id` int(3) NOT NULL,
  `name` varchar(15) NOT NULL,
  `img` varchar(15) NOT NULL,
  `price` int(5) NOT NULL,
  `category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonecasse`
--

INSERT INTO `phonecasse` (`id`, `name`, `img`, `price`, `category`) VALUES
(18, 'phonecase1', 'case1.jpg', 499, 'phonecase'),
(19, 'Wooden', 'case2.jpg', 499, 'phonecase'),
(20, 'Marble ', 'case3.jpg', 599, 'phonecase'),
(21, 'Black', 'case4.jpg', 299, 'phonecase'),
(22, 'Pink Case', 'case5.jpg', 555, 'phonecase'),
(23, 'Captain', 'case6.jpg', 599, 'phonecase');

-- --------------------------------------------------------

--
-- Table structure for table `product_kids`
--

DROP TABLE IF EXISTS `product_kids`;
CREATE TABLE IF NOT EXISTS `product_kids` (
  `id` int(3) NOT NULL,
  `name` varchar(15) NOT NULL,
  `img` varchar(15) NOT NULL,
  `price` int(5) NOT NULL,
  `category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_kids`
--

INSERT INTO `product_kids` (`id`, `name`, `img`, `price`, `category`) VALUES
(24, 'kidstable', 'table.jpg', 2000, 'kids'),
(25, 'barbie', 'princess.jpg', 1500, 'kids'),
(26, 'doctorset', 'doctor1.jpg', 1200, 'kids'),
(27, 'jwellarybox', 'jwelary.jpg', 1800, 'kids'),
(28, 'fruit basket', 'fruitbasket.jpg', 800, 'kids'),
(29, 'puzzle', 'puzzle.jpg', 400, 'kids'),
(30, 'spinner', 'spinner.jpg', 350, 'kids'),
(31, 'Toy Car', 'toycar.jpg', 900, 'kids'),
(32, 'Animal Plate', 'animal.jpg', 699, 'kids'),
(33, 'White Board', 'board.jpg', 899, 'kids'),
(34, 'Key Chain', 'keychain.jpg', 449, 'kids'),
(35, 'car', 'car.jpg', 1999, 'kids');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lname`, `phone`, `email`, `username`, `password`) VALUES
('namrata', 'bomble', 1234567890, 'sgg@d.xuch', 'namrata', 'namrata'),
('sayali', 'pawar', 1234567890, 'sayali@gmail.com', 'sayali', 'sayali');

-- --------------------------------------------------------

--
-- Table structure for table `softtoys`
--

DROP TABLE IF EXISTS `softtoys`;
CREATE TABLE IF NOT EXISTS `softtoys` (
  `id` int(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `img` varchar(30) DEFAULT NULL,
  `price` int(5) NOT NULL,
  `category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `softtoys`
--

INSERT INTO `softtoys` (`id`, `name`, `img`, `price`, `category`) VALUES
(64, 'Turtle', '64.jpg', 459, 'softtoys'),
(65, 'Peach plush', '65.jpg', 200, 'softtoys'),
(66, 'Rainbow cushion', '66.jpg', 349, 'softtoys'),
(67, 'Pokemon Toy', '67.jpg', 450, 'softtoys'),
(68, 'Cookie plush', '68.jpg', 199, 'softtoys'),
(69, 'ladybird pillow', '69.jpg', 449, 'softtoys'),
(70, 'Fluffy Cat', '70.jpg', 699, 'softtoys'),
(71, 'Dog', '71.jpg', 350, 'softtoys'),
(72, 'Elephant Toy', '72.jpg', 400, 'softtoys'),
(73, 'Red Dragon', '73.jpg', 250, 'softtoys'),
(74, 'Veggies set', '74.jpg', 499, 'softtoys'),
(75, 'Baby sheep', '75.jpg', 300, 'softtoys'),
(76, 'crocodile toy', '76.jpg', 250, 'softtoys'),
(77, 'AngryBird', '77.jpg', 99, 'softtoys'),
(78, 'Keyring', '78.jpg', 109, 'softtoys'),
(80, 'Fox Toy', '80.jpg', 89, 'softtoys');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

DROP TABLE IF EXISTS `wallet`;
CREATE TABLE IF NOT EXISTS `wallet` (
  `id` int(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `img` varchar(30) DEFAULT NULL,
  `price` int(5) NOT NULL,
  `category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `name`, `img`, `price`, `category`) VALUES
(98, 'Leather wallet', '98.jpg', 800, 'wallet'),
(99, 'Clutch wallet', '99.jpg', 600, 'wallet'),
(100, 'Reebok wallet', '100.jpg', 1200, 'wallet'),
(101, 'Continental wallet', '101.jpg', 2099, 'wallet'),
(102, 'Bonia wallet', '102.jpg', 900, 'wallet'),
(103, 'Pallas wallet', '103.jpg', 750, 'wallet'),
(104, 'Brahmin wallet', '104.jpg', 500, 'wallet'),
(105, 'Coach wallet', '105.jpg', 100, 'wallet'),
(106, 'calvin klein', '106.jpg', 2500, 'wallet'),
(107, 'Monogram wallet', '107.jpg', 850, 'wallet'),
(108, 'Checks wallet', '108.jpg', 900, 'wallet'),
(109, 'Louis vuitton', '109.jpg', 1200, 'wallet'),
(110, 'Red handbag', '110.jpg', 600, 'wallet'),
(111, 'Vegan wallet', '111.jpg', 400, 'wallet'),
(112, 'Leather handbag', '112.jpg', 550, 'wallet'),
(113, 'Coin purse', '113.jpg', 100, 'wallet');

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

DROP TABLE IF EXISTS `watch`;
CREATE TABLE IF NOT EXISTS `watch` (
  `id` int(3) NOT NULL,
  `name` varchar(15) NOT NULL,
  `img` varchar(15) NOT NULL,
  `price` int(5) NOT NULL,
  `category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`id`, `name`, `img`, `price`, `category`) VALUES
(36, 'Watch1', '1.jpg', 10500, 'watches'),
(37, 'watch2', '2.jpg', 8000, 'watches'),
(38, 'Watch3', '3.jpg', 1499, 'watches'),
(39, 'Watch  4', '4.jpg', 1999, 'watches'),
(40, 'Watch 5', '5.jpg', 2499, 'watches'),
(41, 'Watch 6', '6.jpg', 1299, 'watches'),
(42, 'Watch 7', '7.jpg', 6999, 'watches'),
(43, 'Watch 8', '8.jpg', 999, 'watches'),
(44, 'Watch 9', '9.jpg', 2999, 'watches'),
(45, 'Watch 10', '10.jpg', 3599, 'watches'),
(46, 'Watch 11', '11.jpg', 899, 'watches'),
(47, 'Watch 12', '12.jpg', 1899, 'watches'),
(48, 'Watch 13', '13.jpg', 1299, 'watches'),
(49, 'Watch 14', '14.jpg', 1399, 'watches'),
(50, 'Watch 15', '15.jpg', 1649, 'watches'),
(51, 'Watch 16', '16.jpg', 1700, 'watches');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
