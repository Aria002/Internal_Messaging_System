-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 05:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `Id` int(11) NOT NULL,
  `userId` int(10) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `status` enum('active','inActive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(4, 'Nilima Behura', '2021-06-01', 'nilima@gmail.com', '6291182272', 'nilima'),
(5, 'Alekhya Acharjee', '1999-08-08', 'alex007@gmail.com', '56372382', 'alex');

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
(2, 'subhojoydhar2000@gmail.com', 'indra@gmail.com', 'test1', 'test content1', '2021-06-24 21:42:16', 'unread', 'false', 'false'),
(3, 'nilima@gmail.com', 'indra@gmail.com', 'test', 'test', '0000-00-00 00:00:00', 'unread', 'false', 'false'),
(4, 'nilima@gmail.com', 'indra@gmail.com', 'test1', 'test1', '0000-00-00 00:00:00', 'unread', 'false', 'false'),
(5, 'nilima@gmail.com', 'indra@gmail.com', 'test2', 'test2', '0000-00-00 00:00:00', 'unread', 'false', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `senderId` varchar(10) NOT NULL,
  `receiverId` varchar(10) NOT NULL,
  `text` longtext NOT NULL,
  `createdAt` datetime NOT NULL,
  `readStatus` enum('send','read','unread') NOT NULL,
  `deleteStatusSender` enum('true','false') NOT NULL,
  `deleteStatusReceiver` enum('true','false') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ims`
--
ALTER TABLE `ims`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
