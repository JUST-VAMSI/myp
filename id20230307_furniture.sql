-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2023 at 07:23 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20230307_furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `passw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `passw`) VALUES
('veeramallavamsi72@gmail.com', 'vamsi@2662'),
('veeramallavamsi72@gmail.com', 'vamsi@2662');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `useraddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`firstname`, `lastname`, `pass`, `email`, `gender`, `mobile`, `useraddress`) VALUES
('vamsi', 'veeramalla', 'vamsi@2662', 'veeramallavamsi72@gmail.com', 'male', 8247252286, 'D-NO.: 4-79, Pin code:533297, Gandepalli, Gandepalli mandal, kakinada district, A.P.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gname` varchar(255) NOT NULL,
  `gimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gname`, `gimg`) VALUES
('Gallery ID 1', 'gal1.jpg'),
('Gallery ID 2', 'gal2.jpg'),
('Gallery ID 3', 'gal3.jpg'),
('Gallery ID 4', 'gal4.jpg'),
('Gallery ID 5', 'gal5.jpg'),
('Gallery ID 6', 'gal6.jpg'),
('Gallery ID 7', 'gal7.jpg'),
('Gallery ID 8', 'gal8.jpg'),
('Gallery ID 9', 'gal9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `proid` int(11) NOT NULL,
  `proname` varchar(255) NOT NULL,
  `promrp` int(11) NOT NULL,
  `proprice` int(11) NOT NULL,
  `proqty` int(11) NOT NULL,
  `proimg` varchar(255) NOT NULL,
  `prosdes` varchar(255) NOT NULL,
  `prodes` varchar(255) NOT NULL,
  `promtitle` varchar(255) NOT NULL,
  `promdes` varchar(255) NOT NULL,
  `promkeywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`proid`, `proname`, `promrp`, `proprice`, `proqty`, `proimg`, `prosdes`, `prodes`, `promtitle`, `promdes`, `promkeywords`) VALUES
(7, '5.6 COT WITH POCKET', 70000, 65000, 1, 'c1.jpg', 'Black teak shade wood', 'Cot with rack for storing something files,etc.', 'Good looking cot', 'Teak wood and black shade polish cot', 'Teak wood cot, cot with storage rack, cot, 5.6 cot'),
(8, '4.5 COT WITH LOCKER', 50000, 46000, 1, 'c2.png', 'Teak wood with good shade polish', 'Cot with secret locker beside the cot', 'Two secret lockers cot', 'Teak wood and two secret lockers cot with rose wood polish', 'cots, 4.5 cot, secret locker cot'),
(9, 'BABY COT', 32000, 30000, 1, 'c3.jpg', 'Teak wood baby cot', 'Orange polish baby cot with teak wood and side protection', 'Protection baby cot', 'Giving good sleep to babies and protect baby from fell down on to the floor', 'protection cot, cots, baby cot'),
(10, 'SIMPLE PLAIN COT', 40000, 35000, 1, 'c4.jpg', 'Teak wood without design but storing cot', 'Five pillars cot with teak wood and neat and clean plain cot', '5.6 cot with teak wood', 'Good wood and plain cot for who do not like any design ', '5 pillars cot, plain cot, cots, 5.6 cot'),
(11, 'BLACK WOOD COT', 80000, 75000, 1, 'c5.jpg', '6.6 Black wood cot with premium design ', 'Good designed cot with small height mean near by floor', 'Premium designed cot', 'Black wood and heavy designed cot with lower height', '6.6 cot, cots, premium designed cot, Black wood cot'),
(12, 'SPONGE DESIGNED COT', 92000, 90000, 1, 'c8.jpg', 'Teak wood with black wood polish', 'Sponge sticky on head and tail with good design ', '6.6 cot with Black wood polish', 'Lower height near the floor cot', '6.6 cot, sponge sticky cot, high quality cot'),
(13, 'SOFA AND TEAPOY TABLE', 55000, 52000, 1, 'sofa1.jpg', 'Tea table and sofa', 'Sofa with two chairs and table also ', 'Sofa and Chairs', 'Good sponge sofa and chairs and table', 'Sofa with side chairs, sofa, chairs.'),
(14, 'SOFA AND CHAIRS', 89000, 80000, 1, 'sofa2.jpg', 'Chairs and sofa with table', 'Four members sitting sofa and three chairs and table', 'Sofa with three chairs', 'More members sittings sofa set and used good material', 'Sofa, Sofa set, sofa with table'),
(1, 'SIMPLE DOOR', 25000, 22000, 1, 'doorimg1.jpg', 'Teak wood with neat polish', 'Good and neat design door with different polish', 'Simple design door', 'Biscuit color door with border and neat design door', 'Doors, simple plain doors, polish doors.'),
(2, 'PREMIUM DOOR', 35000, 33000, 1, 'doorimg2.jpg', 'Glass and wood door', 'Door with glass and teak wood', 'Good glass door', 'Plain glass door with teak wood and high quality door', 'Doors, premium doors, high quality doors.'),
(3, 'DOOR WITH WINDOWS', 50000, 45000, 1, 'doorimg3.jpg', 'Big main door with teak wood ', 'Teak wood and side glass windows door', 'window and door', 'Glass side windows and door with teak wood', 'Doors, window and doors , glass doors.'),
(4, 'SIDE CUPBOARD DOOR', 55000, 53000, 1, 'doorimg4.jpg', 'Door with side cupboards', 'Teak wood cupboards and doors', 'Good corner door', 'Teak wood and methyl orange polish door and cupboards', 'Doors, cupboards and door, corner doors.'),
(5, 'GLASS DOOR', 60000, 58000, 1, 'doorimg5.jpg', 'Glass door with border wood', 'Teak wood border and total glass door', 'Door with round lock', 'Premium lock and glass door with teak wood.', 'Doors, round lock doors, glass doors.'),
(6, 'TEAK WOOD DOOR', 55000, 50000, 1, 'doorimg6.jpg', 'Door with teak wood and glass', 'Top two small glasses and teak wood door and big locker', 'Big locker door', 'Side glass windows and door with top two small glass door', 'Doors, glass doors, big locker doors, top two small glass doors.'),
(15, 'PLAIN SOFA', 56000, 52000, 1, 'sofamain.jpg', 'Teak wood with good shade polish', 'Teak wood sofa with two pillows and plain design ', 'plain sofa with Biscuit color cloth', 'Biscuit color cloth sofa with teak wood and polish', 'Sofa, Biscuit color sofa, plain sofa.'),
(16, 'WHITE CLOTH SOFA', 70000, 67000, 1, 'sofanet1.jpg', 'White cloth big sofa set', 'Sofa set with Good  design and big sofa set', 'Big sofa set', 'Premium white sofa for richness.', 'Sofa, white cloth sofa , big sofa set'),
(17, 'BLACK WOOD SOFA', 100000, 95000, 1, 'sofanet2.jpeg', 'Black wood sofa with black wood polish', 'Black wood sofa set with two chairs and cloth also premium', 'premium wood and cloth sofa set', 'Good sofa set with black wood and rose cloth', 'sofa, black wood sofa set, rose cloth sofa set.'),
(18, '4 SITTING SOFA', 50000, 46500, 1, 'sofaimg2.jpg', '4 members sitting sofa ', 'white cloth with 4 members sitting and black wood sofa set', 'Black wood and white cloth sofa', 'Good white cloth and black wood sofa set', 'sofa, black wood sofa, white cloth sofa, 4 members sitting sofa.'),
(19, 'DINING TABLE 8 SITTING', 70000, 67000, 1, 'Dining1.jpg', 'Teak wood 9 members sitting dining table', 'Teak wood dining table for two families sitting and methyl orange color polish', 'Dining table with teak wood', 'Model chairs 8 members sitting dining table', 'Dining tables, 8 members sitting dining table, teak wood dining table.'),
(20, 'DINING TABLE', 36000, 30000, 1, 'daining2.jpg', 'Dining table with 4 chairs', 'Teak wood dining table with rose wood polish', 'Four members sitting dining table', 'Spong and rose wood color polish dining table', 'Dining table , 4 members sitting dining table, rose wood polish dining table'),
(21, 'DINING FOR 2 FAMILY', 50000, 46000, 1, 'dainnet1.jpg', 'Simple dining table with green cloth', 'White matte table and 8 chairs with good look', 'Good looking while dining table', 'Greenish blue cloth chairs and white table', 'Dining tables, white matte table, greenish blue cloth chairs.'),
(22, 'DINING TABLE ROSEWOOD', 88000, 85000, 1, 'dainnet2.jpg', 'Black wood dining table', 'Dining table with black wood 8 members sitting ', 'Black wood chair for two families sitting ', 'Two families sitting black wood dining table', 'Black wood dining tables, dining tables, premium dining tables.'),
(23, 'PREMIUM DINING TABLE', 99000, 97000, 1, 'dainnet3-transformed.jpeg', 'Teak wood dining table', 'Rotating dining table with 6 members sitting', 'Premium rotating table', 'Heavy designed chairs and rotating table with high quality sponge cloth chairs', '6 members sitting dining table, premium dining tables, teak wood dining tables.'),
(24, 'COFFEE CLOTH TABLE', 78000, 76000, 1, 'diningimg1.jpg', 'Neat and clean dining table', 'Dining table with soft wood and good looking ', '8 sitting dining table', '8 members sitting dining table and shining table', 'Dining tables, shining table, good cloth dining tables.');

-- --------------------------------------------------------

--
-- Table structure for table `vamsi`
--

CREATE TABLE `vamsi` (
  `pname` varchar(255) DEFAULT NULL,
  `pimg` varchar(255) DEFAULT NULL,
  `psdes` varchar(255) DEFAULT NULL,
  `pmrp` int(11) DEFAULT NULL,
  `pprice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vamsi`
--

INSERT INTO `vamsi` (`pname`, `pimg`, `psdes`, `pmrp`, `pprice`) VALUES
('DINING TABLE 8 SITTING', 'Dining1.jpg', 'Teak wood 9 members sitting dining table', 70000, 67000);

-- --------------------------------------------------------

--
-- Table structure for table `vamsiord`
--

CREATE TABLE `vamsiord` (
  `oname` varchar(255) DEFAULT NULL,
  `oimg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vamsiord`
--

INSERT INTO `vamsiord` (`oname`, `oimg`) VALUES
('BLACK WOOD COT', 'c5.jpg'),
('5.6 COT WITH POCKET', 'c1.jpg'),
('5.6 COT WITH POCKET', 'c1.jpg'),
('BLACK WOOD COT', 'c5.jpg'),
('BLACK WOOD COT', 'c5.jpg'),
('5.6 COT WITH POCKET', 'c1.jpg'),
('SPONGE DESIGNED COT', 'c8.jpg'),
('SPONGE DESIGNED COT', 'c8.jpg'),
('SPONGE DESIGNED COT', 'c8.jpg'),
('SPONGE DESIGNED COT', 'c8.jpg'),
('SIMPLE PLAIN COT', 'c4.jpg'),
('5.6 COT WITH POCKET', 'c1.jpg'),
('SIMPLE PLAIN COT', 'c4.jpg'),
('SIMPLE PLAIN COT', 'c4.jpg'),
('5.6 COT WITH POCKET', 'c1.jpg'),
('SIMPLE PLAIN COT', 'c4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`pass`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
