-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 09:04 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_info`
--

CREATE TABLE `chat_info` (
  `id` int(11) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `decrypt_key` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_info`
--

INSERT INTO `chat_info` (`id`, `receiver`, `sender`, `msg`, `decrypt_key`, `date`, `time`) VALUES
(11, '7', 'salati', 'hello bro, good morning sir.', '90387', '2020-11-18', '08:30:06'),
(8, '1', 'james', 'fuck you', '79625', '2020-11-17', '03:38:03'),
(9, '1', 'james', 'sdsksd', '79625', '2020-11-17', '03:38:03'),
(10, '1', 'james', 'hey man', '79625', '2020-11-18', '03:38:03'),
(12, '9', 'james', 'How far my guy!!! How you dey???', '35380', '2020-11-18', '08:31:56'),
(13, '9', 'james', 'How far my guy!!! How you dey???', '35380', '2020-11-18', '08:33:16'),
(14, '9', 'sanusi', 'My brother, where are you???', '35380', '2020-11-18', '08:44:57'),
(15, '9', 'sanusi', 'I dey go Ilorin ooooo', '35380', '2020-11-18', '08:45:36'),
(16, '9', 'sanusi', 'I dey with Mr Segun', '35380', '2020-11-18', '08:51:05'),
(17, '8', 'salati', 'how fsr?? i get your message', '35879', '2020-11-18', '08:52:09'),
(18, '9', 'sanusi', 'I dey with Mr Segun', '35380', '2020-11-18', '08:52:24'),
(19, '8', 'salati', 'hey man.. i got your message', '35879', '2020-11-18', '08:54:14'),
(20, '9', 'sanusi', 'hw far', '35380', '2020-11-18', '08:57:49'),
(21, '8', 'salati', 'hi', '35879', '2020-11-18', '08:59:22'),
(22, '9', 'sanusi', 'im fine', '35380', '2020-11-18', '09:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwrd` varchar(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `private_key` varchar(250) NOT NULL,
  `public_key` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `username`, `passwrd`, `name`, `sex`, `location`, `private_key`, `public_key`) VALUES
(1, 'jayz', 'jayz', 'samson', 'male', 'ilorin', '23917', '79625'),
(7, 'james', 'james', 'James bond', 'male', 'malete', '27512', '90387'),
(8, 'sanusi', 'sanusi', 'Sanusi Adebola', 'male', 'ilorin', '39807', '35879'),
(9, 'Salati', 'salati', 'FOLORUNSO SALATI', 'male', 'Ilorin, Kwara State', '12990', '35380');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_info`
--
ALTER TABLE `chat_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_info`
--
ALTER TABLE `chat_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
