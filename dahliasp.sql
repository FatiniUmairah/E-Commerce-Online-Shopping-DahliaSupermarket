-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 12:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dahliasp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` varchar(15) NOT NULL,
  `AdminFName` varchar(20) NOT NULL,
  `AdminLName` varchar(20) NOT NULL,
  `AdminEmail` varchar(30) NOT NULL,
  `AdminContactNo` varchar(12) NOT NULL,
  `AdminPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AdminFName`, `AdminLName`, `AdminEmail`, `AdminContactNo`, `AdminPassword`) VALUES
('admin', 'Nurainun Fatihah', 'Samsudin', 'fatihah11@gmail.com', '01152627272', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cust_order`
--

CREATE TABLE `cust_order` (
  `OrderID` int(15) NOT NULL,
  `UserID` varchar(15) NOT NULL,
  `OrderDate` date NOT NULL DEFAULT current_timestamp(),
  `OrderTime` time NOT NULL DEFAULT current_timestamp(),
  `OrderStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_order`
--

INSERT INTO `cust_order` (`OrderID`, `UserID`, `OrderDate`, `OrderTime`, `OrderStatus`) VALUES
(68, 'Tini08', '2022-07-13', '13:38:56', 'Preparing'),
(69, 'zulaikha03', '2022-07-13', '13:45:53', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `ManufactureID` varchar(15) NOT NULL,
  `CompanyName` varchar(30) NOT NULL,
  `ManufactureAddress` varchar(60) NOT NULL,
  `ManufactureContactNo` varchar(12) NOT NULL,
  `ManufactureEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`ManufactureID`, `CompanyName`, `ManufactureAddress`, `ManufactureContactNo`, `ManufactureEmail`) VALUES
('M1002', 'Cadbury', 'Banting, Selangor', '052929292', 'cadbury@gmail.com'),
('M1003', 'Oriental Sdn Bhd', 'Taiping, Perak', '061127228', 'orientalComp@gmail.com'),
('M1004', 'SourPatch Co', 'Ipoh, Perak', '0582727228', 'sourpatch@gmail.com'),
('M1005', 'Mister Potato Snack Food', 'Ipoh, Perak', '0518182282', 'mpotato@gmail.com'),
('M1006', 'Mikuro Metal Sdn Bhd', 'Bangi, Selangor', '0573828282', 'mikuroM@gmail.com'),
('M1007', 'Breeze Cleaning Co Sdn Bh', 'Rawang, Selangor', '032311902', 'breeze@gmail.com'),
('M1008', 'Elianware Malaysia', 'Simpang Amnpat, Penang', '0826262727', 'elianware@gmail.com'),
('M1009', 'GL Marine', 'Australia', '0982727272', 'glmarine@gmail.com'),
('M1010', 'Ayamas Food Co Sdn Bhd', 'Ipoh, Perak', '05117182819', 'ayamas@gmail.com'),
('M1011', 'HARUMi Brands Sdn Bhd', 'Sitiawan, Perak', '0588272728', 'harumi@gmail.com'),
('M1012', 'Tishas Food Sdn Bhd', 'Kuala Lumpur', '0511282939', 'tishas@gmail.com'),
('M1013', 'Natural Fresh Enterprise', 'Ipoh, Perak', '0128282829', 'nfresh@gmail.com'),
('M1014', 'Nestle Malaysia Berhad', 'Petaling Jaya, Selangor', '0523178292', 'nestle@gmail.com'),
('M1017', 'Bliss Marketing Sdn Bhd', 'Cheras, Kuala Lumpur', '0517282292', 'blissM@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` varchar(15) NOT NULL,
  `ManufactureID` varchar(15) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductCategory` varchar(20) NOT NULL,
  `ProductPrice` decimal(5,2) NOT NULL,
  `ProductBrand` varchar(20) NOT NULL,
  `ProductInStock` int(4) NOT NULL,
  `ProductImg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ManufactureID`, `ProductName`, `ProductCategory`, `ProductPrice`, `ProductBrand`, `ProductInStock`, `ProductImg`) VALUES
('B1001', 'M1014', 'Milo', 'Baverage', '7.45', 'Nestle', 200, 'milo.jpg'),
('B1002', 'M1017', 'Yogurt', 'Baverage', '4.00', 'Bliss', 200, 'yogurt.jpg'),
('B1003', 'M1015', 'Laici', 'Baverage', '3.00', 'AAA', 100, 'laici.jpg'),
('B1004', 'M1016', 'OrangeJuice', 'Baverage', '3.99', 'Twister', 200, 'orange.jpg'),
('D1001', 'M1021', 'Susu', 'DairyEgg', '4.00', 'FarmFresh', 200, 'susu.jpg'),
('D1002', 'M1011', 'Telur', 'DairyEgg', '3.99', 'Local', 100, 'telur.jpg'),
('D1003', 'M1022', 'Cheese', 'DairyEgg', '7.00', 'Prochiz', 100, 'cheese.jpg'),
('D1004', 'M1023', 'Aiskrim', 'DairyEgg', '11.30', 'Walls', 100, 'aiskrim.jpg'),
('F1001', 'M1018', 'Tepung', 'FlourBakery', '2.89', 'CapSauh', 200, 'tepung.jpg'),
('F1002', 'M1019', 'Roti', 'FlourBakery', '2.99', 'Gardenia', 100, 'roti.jpg'),
('F1003', 'M1019', 'Twiggles', 'FlourBakery', '1.49', 'Gardenia', 200, 'twiggles.jpg'),
('F1004', 'M1020', 'Nutella', 'FlourBakery', '14.30', 'Nutella', 200, 'nutella.jpg'),
('H1001', 'M1006', 'Mop', 'HouseHold', '10.00', 'Mikuro', 50, 'mop.jpg'),
('H1002', 'M1006', 'Penyapu', 'HouseHold', '11.99', 'Mikuro', 50, 'penyapu.jpg'),
('H1003', 'M1007', 'Detergent', 'HouseHold', '14.90', 'Breeze', 100, 'detergent.jpg'),
('H1004', 'M1008', 'LaundryBasket', 'HouseHold', '16.30', 'Elianware', 50, 'laundry.jpg'),
('H1005', 'M1035', 'IronBoard', 'HouseHold', '99.99', 'Philips', 50, 'ironboard.jpg'),
('P1001', 'M1024', 'TomyamPaste', 'Pantry', '12.30', 'MadamPum', 150, 'tomyam.jpg'),
('P1002', 'M1025', 'Garam', 'Pantry', '1.50', 'Adabi', 300, 'garam.jpg'),
('P1003', 'M1026', 'Kicap', 'Pantry', '3.00', 'Kipas', 200, 'kicap.jpg'),
('P1004', 'M1027', 'SosCili', 'Pantry', '3.70', 'Life', 200, 'soscili.jpg'),
('P1005', 'M1025', 'Ketupat', 'Pantry', '8.50', 'Adabi', 100, 'ketupat.jpg'),
('P1006', 'M1010', 'Rendang', 'Pantry', '10.00', 'Ayamas', 200, 'rendang.jpg'),
('R1001', 'M1011', 'Ayam', 'RawFrozen', '10.00', 'Local', 100, 'ayam.jpg'),
('R1002', 'M1012', 'CurryPuff', 'RawFrozen', '6.00', 'Tishas', 100, 'karipap.jpg'),
('R1003', 'M1009', 'Daging', 'RawFrozen', '15.70', 'Import', 200, 'daging.jpg'),
('R1004', 'M1010', 'Sausage', 'RawFrozen', '5.00', 'Ayamas', 100, 'sausage.jpg'),
('R1005', 'M1012', 'Samosa', 'RawFrozen', '12.50', 'Tishas', 200, 'samosa.jpg'),
('S1001', 'M1002', 'Chocolate', 'Snack', '4.80', 'Cadburry', 100, 'cadburry.jpg'),
('S1002', 'M1003', 'SuperRing', 'Snack', '2.00', 'Oriental', 200, 'superring.jpg'),
('S1003', 'M1004', 'Candy', 'Snack', '3.10', 'SourPatch', 200, 'candy.jpg'),
('S1004', 'M1005', 'Chips', 'Snack', '2.00', 'MisterPotato', 100, 'misterpotato.jpg'),
('S1005', 'M1032', 'Samyang', 'Snack', '22.00', 'Samyang', 200, 'samyang.jpg'),
('V1001', 'M1013', 'Brokoli', 'FruitVege', '9.50', 'NaturalFresh', 180, 'brokoli.jpg'),
('V1002', 'M1013', 'Garlic', 'FruitVege', '6.80', 'NaturalFresh', 300, 'garlic.jpg'),
('V1003', 'M1013', 'Pisang', 'FruitVege', '9.10', 'NaturalFresh', 150, 'pisang.jpg'),
('V1004', 'M1013', 'Potato', 'FruitVege', '12.30', 'NaturalFresh', 200, 'potato.jpg'),
('V1005', 'M1013', 'Anggur', 'FruitVege', '5.00', 'NaturalFresh', 150, 'anggur.jpg'),
('Y1001', 'M1028', 'Toner', 'HealthBeauty', '45.99', 'cosrx', 150, 'cosrx.jpg'),
('Y1002', 'M1029', 'Cleanser', 'HealthBeauty', '29.00', 'tamagohada', 100, 'cleanser.jpg'),
('Y1003', 'M1030', 'Sunscreen', 'HealthBeauty', '12.89', 'Biore', 150, 'sunscreen.jpg'),
('Y1004', 'M1031', 'Moisturiser', 'HealthBeauty', '21.43', 'Safi', 150, 'moist.jpg'),
('Y1005', 'M1033', 'Scrub', 'HealthBeauty', '15.99', 'Pixy', 200, 'scrub.jpg'),
('Y1006', 'M1034', 'Essence', 'HealthBeauty', '30.10', 'Tatagaltier', 200, 'essence.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `OrderID` int(15) NOT NULL,
  `ProductID` varchar(15) NOT NULL,
  `QuantityOrder` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` varchar(15) NOT NULL,
  `UserFName` varchar(20) NOT NULL,
  `UserLName` varchar(20) NOT NULL,
  `UserEmail` varchar(30) NOT NULL,
  `UserContactNo` varchar(12) NOT NULL,
  `UserAddress` varchar(60) NOT NULL,
  `UserPassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserFName`, `UserLName`, `UserEmail`, `UserContactNo`, `UserAddress`, `UserPassword`) VALUES
('Nurainun0126', 'Ainun', 'Fatihah', 'ainunfati01@gmail.com', '01123446311', 'no 1, jalan baiduri 3, taman aman baiduri, perak', 'ainun01'),
('Tini08', 'Fatini', 'Umairah', 'tini09@gmail.com', '01152526262', 'No 9, jalan setia, 237372, Selangor', 'umai8'),
('zulaikha03', 'siti', 'zulaikha', 'sitizulaikha11@gmail.com', '01283738282', '20, Jalan Baiduri 8, Taman Baiduri, Selangor', 'ika03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `cust_order`
--
ALTER TABLE `cust_order`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`ManufactureID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD KEY `prod_fk` (`ProductID`),
  ADD KEY `order_fk` (`OrderID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cust_order`
--
ALTER TABLE `cust_order`
  MODIFY `OrderID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `order_fk` FOREIGN KEY (`OrderID`) REFERENCES `cust_order` (`OrderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prod_fk` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
