-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 11:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` varchar(50) NOT NULL,
  `discount_price` varchar(50) NOT NULL,
  `item_color` varchar(50) NOT NULL,
  `item_size` enum('S','M','L','X','XL') NOT NULL,
  `Item_mockup` varbinary(1000) NOT NULL,
  `item_description` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `item_price`, `discount_price`, `item_color`, `item_size`, `Item_mockup`, `item_description`, `date`) VALUES
(1, 'Cropped sweatshirt mauve front', '$200', '$50', 'Pink', 'M', 0x776f6d656e732d63726f707065642d737765617473686972742d6d617576652d66726f6e742d363236366132616432363535382e706e67, '100% Polyester\r\nPull On closure\r\nMaterial: Polyester\r\nClassic round neck, stylish eyelet lace up long sleeve design, solid color pullovers, cropped top\r\nLoose fit, Cute and Casual; Great for casual wear,outdoor sports,school,travel,date or work\r\nComfortable and Breathable fabric. Season: spring/fall, easy to match with high waist leggings or jeans\r\nThis shirt may runs a bit small, recommend one size up.', '2023-06-13 09:07:18'),
(2, 'High Waist Baggy Cargo Jeans for Women', '$140', '$56', 'Beige', 'L', 0x3631664a4d466f6c35414c2e5f41435f53583532322e5f53582e5f55582e5f53592e5f55595f2e6a7067, '100% Cotton\r\nDrawstring closure\r\nMachine Wash\r\n【Material】The cargo pants women baggy, made of Cotton, breathable, skin-friendly, comfortable for all-day wear.Monystalia\r\n【Design】Casual loose cargo pants y2k women, simple but versatile, adding fashion to your overall dress. multiple practical and functional pockets, which are deep and big enough to store and secure your keys or phone and other essentials. Straight leg cargo pants, relaxed fit, elastic high waist, zipper and button closure.\r\n【Match】The streetwear pants for women, great to match with blouse, tank top, crop top, shirt, sweater, sweater vest, cardigan, high-heeled boots, sneakers, etc. for spring, summer, fall and winter.\r\n', '2023-06-13 09:09:23'),
(3, 'Milumia Women Floral Puff Sleeve Bustier Crop Top ', '$30.99', '$12.99', 'Pink', 'M', 0x383144495456774a7a464c2e5f41435f55593530305f2e6a7067, '90% Polyester, 10% Elastane\r\nImported\r\nPull On closure\r\nMaterial: 90% Polyester, 10% Elastane; Fabric has slight stretch and is comfy to wear\r\nFeature: Floral Embroidery, Puff Short Sleeve, Sweetheart Neck, Frill, Sheer, Crop, Slim Fit, Sexy\r\nOccasion: A Good Choice for Night Out, Club, Party, Dating, Vacation, Honeymoon, Travel, Picnic, Weekend\r\nMatch: The top is great to match with jeans, high waist pants, short skirts or denim shorts in summer\r\nPlease refer to the last image or the size measurement below before ordering', '2023-06-13 09:21:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
