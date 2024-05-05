-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 04:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `financial`
--

-- --------------------------------------------------------

--
-- Table structure for table `insurance_info`
--

CREATE TABLE `insurance_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(250) NOT NULL,
  `issue_date` date NOT NULL,
  `inception_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `year_model` varchar(250) NOT NULL,
  `make_description` varchar(250) NOT NULL,
  `chassis_number` varchar(250) NOT NULL,
  `unit_type` varchar(250) NOT NULL,
  `engine_number` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `plate_number` int(55) NOT NULL,
  `unit_price` decimal(55,0) NOT NULL,
  `mortgagee_financing` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insurance_info`
--

INSERT INTO `insurance_info` (`id`, `name`, `address`, `issue_date`, `inception_date`, `expiry_date`, `year_model`, `make_description`, `chassis_number`, `unit_type`, `engine_number`, `color`, `plate_number`, `unit_price`, `mortgagee_financing`) VALUES
(5, 'gdgdg', 'gdgd', '0000-00-00', '0000-00-00', '0000-00-00', 'gdgdg', 'dgdg', 'gdgdg', 'gdg', 'dgd', 'gdg', 0, 5353, 'dgdg'),
(6, 'wasie', 'gdgd', '0000-00-00', '0000-00-00', '0000-00-00', 'gdgdg', 'dgdg', 'gdgdg', 'gdg', 'dgd', 'gdg', 0, 5353, 'dgdg'),
(7, 'wasie', 'titersfs', '0000-00-00', '0000-00-00', '0000-00-00', 'fsfsf', 'sfs', 'sfsfs', 'fsfs', 'fsfs', 'fsfs', 0, 0, 'sffs'),
(8, 'gsdgsdgsd', 'gdgd', '0000-00-00', '0000-00-00', '0000-00-00', 'gdgsd', 'dgdsg', 'gdgd', 'sgdsgd', 'gdgd', 'gdgdg', 0, 0, 'dgsd'),
(9, 'xvx', 'xvzvxzv', '0000-00-00', '0000-00-00', '0000-00-00', 'xvxv', 'xvxv', 'vxv', 'xvxvx', 'xvxvx', 'xvxvxv', 0, 0, 'xvx'),
(10, 'wasie', 'bcxbcx', '0000-00-00', '0000-00-00', '0000-00-00', 'bcb', 'cbc', 'xcbc', 'cxbxcb', 'cxbccxb', 'bcxb', 0, 0, 'xbcxb'),
(11, 'cbcb', 'titersfs', '0000-00-00', '0000-00-00', '0000-00-00', 'bcxbxc', 'cxbxcb', 'cbcxb', 'bcxbxcb', 'cxbcxb', 'cxbxcb', 0, 0, 'cxb'),
(12, 'cbcb', 'titersfs', '0000-00-00', '0000-00-00', '0000-00-00', 'bcxbxc', 'cxbxcb', 'cbcxb', 'bcxbxcb', 'cxbcxb', 'cxbxcb', 0, 0, 'cxb'),
(13, 'wasie', 'gdgd', '0000-00-00', '0000-00-00', '0000-00-00', 'gdgdg', 'dgdg', 'gdgd', 'sgdsgd', 'dgd', 'xzvxzvxzv', 0, 5353, 'xvxzv'),
(14, 'wasie', 'gdgd', '0000-00-00', '0000-00-00', '0000-00-00', 'gdgdg', 'dgdg', 'gdgd', 'sgdsgd', 'dgd', 'xzvxzvxzv', 0, 5353, 'xvxzv'),
(15, 'wasie', 'gdgd', '0000-00-00', '0000-00-00', '0000-00-00', 'gdgsd', 'dgdg', 'vxv', 'xvxvx', 'dgd', 'xvxvxv', 0, 0, 'dgsd'),
(16, 'wasie', 'titersfs', '0000-00-00', '0000-00-00', '0000-00-00', 'gdgdg', 'dgdgg', 'xvxv', 'gdgdgd', 'xvxzv', 'fsfs', 0, 999, 'sffs'),
(17, 'dsgsdg', 'gdsgsd', '0000-00-00', '0000-00-00', '0000-00-00', 'sdgdsg', 'sdgdsg', 'dsgdsg', 'dgsgdsg', 'dsgdsg', 'gdsg', 999, 999, 'dgdsgsd'),
(18, 'dgfdg', 'sgsdg', '0000-00-00', '0000-00-00', '0000-00-00', 'gdsgdsgd', 'gdsgsdg', 'dsgdsg', 's', 'gsdgsd', 'dsgsdg', 0, 0, 'dsgsdg'),
(19, 'dgdsgdsg', 'dgsdgsd', '0000-00-00', '0000-00-00', '0000-00-00', 'gdsg', 'gsdgsd', 'dsgds', 'dsgsd', 'dsgdsg', 'dgds', 0, 0, 'sdgsdgds'),
(20, 'dgdsgdsg', 'dgsdgsd', '0000-00-00', '0000-00-00', '0000-00-00', 'gdsg', 'gsdgsd', 'dsgds', 'dsgsd', 'dsgdsg', 'dgds', 0, 0, 'sdgsdgds'),
(21, 'fdcbcxb', 'bcxbcxb', '0000-00-00', '0000-00-00', '0000-00-00', 'cxbcxb', 'bcxbcxb', 'cxbcx', 'cxb', 'cxbcxb', 'cxbcx', 0, 0, 'cbcx');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_policies`
--

CREATE TABLE `insurance_policies` (
  `id` int(11) NOT NULL,
  `policy_no` varchar(255) NOT NULL,
  `assured_name` varchar(250) NOT NULL,
  `address` varchar(259) NOT NULL,
  `tpl` int(11) NOT NULL,
  `loss_and_damage` int(11) NOT NULL,
  `bodily_injury` int(11) NOT NULL,
  `appa` int(11) NOT NULL,
  `aog` int(11) NOT NULL,
  `deductible` int(11) NOT NULL,
  `towing` int(11) NOT NULL,
  `rep_lim` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `vat` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insurance_policies`
--

INSERT INTO `insurance_policies` (`id`, `policy_no`, `assured_name`, `address`, `tpl`, `loss_and_damage`, `bodily_injury`, `appa`, `aog`, `deductible`, `towing`, `rep_lim`, `total`, `vat`) VALUES
(1, 'safsaf', 'sfsafsa', 'sfsaf', 436, 4643, 464, 6464646, 46464, 646, 644, 4646, 46464.00, 6464.00),
(2, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0.00, 0.00),
(3, 'PC0000000', '', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(4, 'PC0000000', '', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(5, 'PC0000000', '', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(6, 'PC0000000', '', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(7, 'PC0000000', '', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(8, 'PC0000000', 'fdhfdh', 'fdhfd', 100000, 75757, 2147483647, 7575, 0, 46346, 46436, 46436, 0.00, 0.00),
(9, 'PC0000000', '', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(10, 'PC0000000', '', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(11, 'PC0000000', '', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(12, 'PC0000000', '', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(13, 'PC0000000', 'sffsfs', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(14, 'PC0000000', 'sffsfsfgfdgf', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(15, 'PC0000000', 'tite', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(16, 'PC0000000', 'tae', 'jsajfas', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(17, 'PC0000000', 'mga gago', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(18, 'PC0000000', 'gg', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(19, 'PC0000000', 'ggsss', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(20, 'PC0000000', 'ss', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(21, 'PC0000000', 'ds', 'gdsgdsg', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(22, 'PC0000000', 'ds', 'gdsgdsg', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00),
(23, 'PC0000000', '', '', 100000, 75757, 2147483647, 7575, 0, 0, 0, 0, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(250) NOT NULL,
  `con_password` varchar(259) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `email`, `password`, `con_password`, `type`) VALUES
(1, 'wasie.com', 'tite', 'tite', 'user'),
(2, 'rasieacuna@gmail.com', 'tite123.com', 'tite123.com', 'admin1'),
(3, 'rasieacuna@gmail.com', 'tite.com', 'tite.com', 'admin2'),
(4, 'rasieacuna@gmail.com', 'tite2.com', 'tite2.com', 'backup'),
(5, 'rasieacuna@gmail.com', 'backup.com', 'backup.com', 'user'),
(6, '', '', '', 'user'),
(7, 'cc@gamil.com', 'dd', 'dd', 'user'),
(8, 'rasieacuna@gmail.com', 'gg', 'gg', 'user'),
(9, 'rasieacuna@gmail.com', 'tt', 'tt', 'user'),
(10, 'cc@gamil.com', 'cc', 'cc', 'user'),
(11, 'cc@gamil.com', 'tt', 'tt', 'user'),
(12, 'cc@gamil.com', 'ww', 'ww', 'user'),
(13, 'cc@gamil.com', 'cc', 'cc', 'user'),
(14, 'dsgdsg@gmail.com', 'ttt', 'ttt', 'user'),
(15, 'rasieacuna@gmail.com', 'ddd', 'ddd', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `con_password` varchar(259) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `email`, `password`, `con_password`, `type`) VALUES
(1, 'admin@gmail.com', 'admin123', 'admin123', 'admin1'),
(2, 'admin1@gmail.com', 'admin1', 'admin1', 'admin2'),
(3, 'admin2@gmail.com', 'admin3', 'admin3', 'admin2'),
(4, 'backup@gmail.com', 'backup', 'admin3', 'backup'),
(5, 'wasieacuna@gmail.com', 'wasie123', 'wasie123', ''),
(6, '', '', '', 'user'),
(8, 'anajane1127@gmail.com', 'tttt', 'tttt', 'user'),
(9, 'cc@gamil.com', 'adobo', 'adobo', 'user'),
(10, 'anajane1127@gmail.com', 'wwww', 'wwww', 'user'),
(11, 'rasieacuna@gmail.com', 'tttt', 'tttt', 'user'),
(12, 'rasieacuna@gmail.com', 'wwww', 'wwww', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insurance_info`
--
ALTER TABLE `insurance_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_policies`
--
ALTER TABLE `insurance_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insurance_info`
--
ALTER TABLE `insurance_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `insurance_policies`
--
ALTER TABLE `insurance_policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
