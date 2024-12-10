-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 07:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OID` int(10) UNSIGNED NOT NULL,
  `ORDER_NO` varchar(45) NOT NULL DEFAULT '',
  `ORDER_DATE` date NOT NULL DEFAULT '0000-00-00',
  `UID` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `TOTAL_AMT` double(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OID`, `ORDER_NO`, `ORDER_DATE`, `UID`, `TOTAL_AMT`) VALUES
(1, '87781', '2024-04-27', 1, 200.00),
(2, '21125', '2024-04-27', 2, 750000.00),
(3, '93393', '2024-04-28', 3, 285000.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `ID` int(10) UNSIGNED NOT NULL,
  `OID` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `PID` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `PNAME` varchar(45) NOT NULL DEFAULT '',
  `PRICE` double(10,2) NOT NULL DEFAULT 0.00,
  `QTY` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `TOTAL` double(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PID` int(10) UNSIGNED NOT NULL,
  `PRODUCT` varchar(45) NOT NULL DEFAULT '',
  `PRICE` double(10,2) NOT NULL DEFAULT 0.00,
  `IMAGE` varchar(45) NOT NULL DEFAULT '',
  `DESCRIPTION` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PID`, `PRODUCT`, `PRICE`, `IMAGE`, `DESCRIPTION`) VALUES
(2, 'IPhone 7', 11732.00, 'ip7.jfif', 'The Apple iPhone 7\'s camera system caters to amateur and seasoned photographers alike. Whether you\'re capturing everyday moments or shooting professional-grade video, the iPhone 7 delivers exceptional performance and image quality.\r\n\r\nThe iPhone 7 features a faster 12MP (f/1.8) rear camera and optical image stabilization (OIS), which work to enhance low-light photography and reduce motion blur in images. These upgrades from the iPhone 6 significantly improve the quality of everyday shots, ensuring clearer and more vibrant photos, even in challenging lighting conditions.\r\n\r\nAdditionally, the main camera\'s new image signal processor (ISP) delivers subtle improvements that may be more noticeable to photography enthusiasts. The four-color True Tone flash also contributes to better-lit photos.'),
(3, 'IPhone 8', 13647.00, 'ip8.jfif', 'The Apple iPhone 8 boasts a 4.7-inch IPS LCD with a resolution of 1334 x 750 pixels. This offers sharp and vivid visuals. It features a wide color gamut, HDR10, and True Tone that further enhance the display quality. This helps to render colors to be livelier and generate sharper images. This makes it a delight for movie-watching or gaming. Also, the Night Shift feature reduces blue light for more comfortable nighttime viewing.\r\n\r\nBesides that, the iPhone 8\'s Retina display stands out with its superb viewing angles and high brightness level of 625 nits. It also has an oleophobic coating that is added to resist fingerprints and smudges.'),
(4, 'IPhone XR', 29081.00, 'ipxr.jfif', 'The iPhone XR, a marvel of Apple\'s technological innovation, boasts an elegant and contemporary aesthetic. Its architecture is a blend of a robust aluminum frame and a glossy glass front and back, offering not just visual appeal but also a pleasant tactile experience.\r\n\r\nThe highlight of this device, however, is the expansive 6.1-inch Liquid Retina display, which delivers vibrant colors and sharp visuals that breathe life into any content you view. This feature is tucked neatly within the body of the device, which measures 150.9 x 75.7 x 8.3 mm - a size that strikes the perfect balance between screen real estate and comfortable one-handed usage.'),
(5, 'IPhone XS Max', 38764.00, 'xsmax.jfif', 'The Apple iPhone Xs Max flaunts an impressive display that\'s hard to beat. With a sizeable 6.5-inch OLED screen, it delivers a resolution of 2688 x 1242. This guarantees a sharp, vibrant visual experience from any angle. It stands out for its high color accuracy, ensuring lifelike visuals. This is enhanced further with HDR10 and Dolby Vision compatibility. So, it can handle high dynamic range content seamlessly.\r\n\r\nWhat sets the iPhone Xs Max apart is Apple\'s True Tone technology. This nifty feature adapts the screen\'s color temperature and intensity to match your environment, making for a more natural and easy-on-the-eyes viewing experience. To put it simply, the iPhone Xs Max packs a top-tier display that shines in every respect, ensuring a pleasant user experience no matter where you are.');

-- --------------------------------------------------------

--
-- Table structure for table `updaterecords`
--

CREATE TABLE `updaterecords` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `updaterecords`
--

INSERT INTO `updaterecords` (`id`, `username`, `email`, `password`) VALUES
(1, 'andreashanesuelo', 'shanesuelo925@gmail.com', '623d5099d3157937d42657bf24c12269'),
(2, 'kate', 'katesuelo@gmail.com', '0dead1dcb2d3ffccb45b53ec126967ed'),
(3, 'acuesta', 'acuesta@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL DEFAULT '',
  `CONTACT` varchar(150) NOT NULL DEFAULT '',
  `ADDRESS` text DEFAULT NULL,
  `CITY` varchar(45) NOT NULL DEFAULT '',
  `PINCODE` varchar(45) NOT NULL DEFAULT '',
  `EMAIL` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `NAME`, `CONTACT`, `ADDRESS`, `CITY`, `PINCODE`, `EMAIL`) VALUES
(1, 'shane', '09630528721', 'Leganes', 'Iloilo', '1234', 'shane@gmail.com'),
(2, 'Andrea Shane Suelo', '09630528721', 'Brgy. San Vicente Leganes ', 'Iloilo', '5003', 'shanesuelo@gmail.com'),
(3, 'RODITHA', '09202446098', 'Muntinlupa, Manila', 'MuntinLupa', '12543', 'roditha@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `updaterecords`
--
ALTER TABLE `updaterecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `PID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `updaterecords`
--
ALTER TABLE `updaterecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
