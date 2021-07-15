-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 05:35 PM
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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `Id` int(11) NOT NULL,
  `ownUserId` int(11) NOT NULL,
  `userId` int(10) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `status` enum('active','inActive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`Id`, `ownUserId`, `userId`, `phoneNumber`, `status`) VALUES
(2, 1, 3, '12345678', 'inActive'),
(3, 3, 1, '8777802744', 'inActive');

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
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `senderId`, `receiverId`, `text`, `createdAt`, `readStatus`, `deleteStatusSender`, `deleteStatusReceiver`) VALUES
(1, '1', '3', 'hi', '0000-00-00 00:00:00', 'unread', 'false', 'false'),
(2, '3', '1', 'this is indrajit', '0000-00-00 00:00:00', 'unread', 'false', 'false'),
(3, '1', '3', 'hey man! how are you', '0000-00-00 00:00:00', 'unread', 'false', 'false'),
(4, '3', '1', 'ya i am fine bro', '0000-00-00 00:00:00', 'unread', 'false', 'false');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
