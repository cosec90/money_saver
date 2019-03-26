-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 03:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `money_saver`
--

-- --------------------------------------------------------

--
-- Table structure for table `pick_money`
--

CREATE TABLE `pick_money` (
  `money_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `main_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pick_money`
--

INSERT INTO `pick_money` (`money_id`, `id`, `main_amount`) VALUES
(3, 1, 1000),
(4, 4, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `save`
--

CREATE TABLE `save` (
  `sa_id` int(11) NOT NULL,
  `sr_money` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `email`, `username`, `password`) VALUES
(1, 'test@gmail.com', 'test', 'password'),
(2, 'ad@gmail.com', 'jaja', 'lol1234'),
(3, 'lambda@gmail.com', 'test1', 'qwer'),
(4, 'virttualbattles@gmail.com', 'virtual', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `user_transaction`
--

CREATE TABLE `user_transaction` (
  `trans_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date_trans` date DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_transaction`
--

INSERT INTO `user_transaction` (`trans_id`, `id`, `amount`, `date_trans`, `note`) VALUES
(6, 1, 123, '2019-03-08', NULL),
(7, 1, 234, '2019-03-20', NULL),
(8, 1, 334, '2019-03-06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pick_money`
--
ALTER TABLE `pick_money`
  ADD PRIMARY KEY (`money_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `save`
--
ALTER TABLE `save`
  ADD PRIMARY KEY (`sa_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_transaction`
--
ALTER TABLE `user_transaction`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pick_money`
--
ALTER TABLE `pick_money`
  MODIFY `money_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `save`
--
ALTER TABLE `save`
  MODIFY `sa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_transaction`
--
ALTER TABLE `user_transaction`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pick_money`
--
ALTER TABLE `pick_money`
  ADD CONSTRAINT `pick_money_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_login` (`id`);

--
-- Constraints for table `save`
--
ALTER TABLE `save`
  ADD CONSTRAINT `save_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_login` (`id`);

--
-- Constraints for table `user_transaction`
--
ALTER TABLE `user_transaction`
  ADD CONSTRAINT `user_transaction_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_login` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
