-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 06:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `ims`
--

CREATE TABLE `ims` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ims`
--

INSERT INTO `ims` (`id`, `Name`, `Birthday`, `Email`, `Phone`, `Password`) VALUES
(1, 'Sayantan Joydhar', '2021-06-03', 'subhojoydhar2000@gmail.com', '8777802744', 'sayan'),
(2, 'Shubhamoy Nath', '2021-06-05', 'suvomoysayantani@gmail.com', '123456789', 'sayantani'),
(3, 'Indrajit Mishra', '2021-06-10', 'indra@gmail.com', '12345678', 'shilpi'),
(4, 'Nilima Behura', '2021-06-01', 'nilima@gmail.com', '6291182272', 'nilima');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(11) NOT NULL,
  `senderId` varchar(255) NOT NULL,
  `receiverId` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `readStatus` enum('send','read','unread') NOT NULL,
  `deleteStatusSender` enum('true','false') NOT NULL,
  `deleteStatusReceiver` enum('true','false') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `senderId`, `receiverId`, `subject`, `content`, `created_at`, `readStatus`, `deleteStatusSender`, `deleteStatusReceiver`) VALUES
(1, 'subhojoydhar2000@gmail.com', 'indra@gmail.com', 'test', 'test content', '2021-06-24 21:42:16', 'unread', 'false', 'false'),
(2, 'subhojoydhar2000@gmail.com', 'indra@gmail.com', 'test1', 'test content1', '2021-06-24 21:42:16', 'unread', 'false', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ims`
--
ALTER TABLE `ims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ims`
--
ALTER TABLE `ims`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
