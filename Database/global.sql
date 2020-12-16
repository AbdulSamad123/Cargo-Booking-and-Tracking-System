-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 11:48 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `global`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `Sen_name` varchar(25) NOT NULL,
  `Sen_num` varchar(25) NOT NULL,
  `Sen_Address` varchar(25) NOT NULL,
  `Sen_email` varchar(25) NOT NULL,
  `Rec_name` varchar(25) NOT NULL,
  `Rec_num` varchar(25) NOT NULL,
  `Rec_Address` varchar(25) NOT NULL,
  `Rec_email` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `packages` varchar(25) NOT NULL,
  `quantity` varchar(25) NOT NULL,
  `weight` varchar(25) NOT NULL,
  `product` varchar(25) NOT NULL,
  `origin` varchar(25) NOT NULL,
  `destination` varchar(25) NOT NULL,
  `vehicle` varchar(25) NOT NULL,
  `Date` date NOT NULL,
  `Deldate` date NOT NULL,
  `time` varchar(25) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `amtmet` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `Sen_name`, `Sen_num`, `Sen_Address`, `Sen_email`, `Rec_name`, `Rec_num`, `Rec_Address`, `Rec_email`, `name`, `type`, `packages`, `quantity`, `weight`, `product`, `origin`, `destination`, `vehicle`, `Date`, `Deldate`, `time`, `amount`, `amtmet`) VALUES
(34810991, 'Abdul Samad', '0321010202', 'Karachi', 'Samad0182@gmail.com', 'Danish', '0323939939', 'Lahore', 'Danish@gmail.com', 'Ayan Traders', 'By Sea', '23 ', 'kk', 'k', 'k', 'k', 'kki', 'o0900', '2020-06-13', '2020-06-27', '23:20', '0', 'Cheque'),
(45534633, 'Zafar', '03209291092', 'Mall Road lahore', 'Zafar@gmail.com', 'Areeb', '03209291092', 'Multan', 'Areeb@gmail.com', 'Cargo', 'By Air', '25 Plates', '12 Cartons', '25 kg', 'minerals', 'karachi', 'Lahore', 'Cma-woiiwi', '2020-04-28', '2020-04-30', '23:50 Pm', '900000', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `type` varchar(30) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `phone`, `type`, `quantity`, `destination`, `message`) VALUES
(1, 'Ali', 'Ali@gmail.com', '0320-2323922', 'Salt', '25 kg', 'Lahore', 'Hey Want transfer of Cargo'),
(2, 'Ali Akber', 'Ali@gmail.com', '0323-2020320', 'Tomato', '25 kg', 'Multan', 'Hey We need best freight'),
(3, 'Areeb', 'areeb@yahoo.com', '0320-2323922', 'Onion', '25 plates', 'lahore', 'Hey we need freight'),
(4, 'Noman', 'noman@yahoo.com', '0320-2323922', 'Tomato', '25 plates', 'Karachi', 'Hey ! how are you');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Areeb', 'areeb123@gmail.com', 'Shipment of Rock Salt', 'Hey We have a shipment of rock shipment kindly provide us best freight for shipment'),
(2, 'Ashir', 'Ashir12@gmail.com', 'Clearing of Shipment', 'hey We want clearing shipment for our best client'),
(3, 'Imtiaz', 'imtiaz@gmail.com', 'Shipment of Rock Salt', 'Hey'),
(4, 'Arham', 'Arham@yahoo.com', 'Shipment of Rock Salt', 'Hello i neeed best freight');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Name`, `email`, `password`) VALUES
(1, 'Abdul Samad', 'Samad123@gcs.com', '123'),
(2, 'Muhammad Danish', 'danish22@gcs.com', '123'),
(3, 'Muhammad imtiaz', 'imtiaz456@gcs.com', '666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341003216;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
