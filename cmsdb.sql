-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 04:21 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users8`
--

CREATE TABLE `users8` (
  `sno` int(50) NOT NULL,
  `club` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `udept` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `userpass` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users8`
--

INSERT INTO `users8` (`sno`, `club`, `fullname`, `email`, `uid`, `udept`, `gender`, `userpass`, `date`) VALUES
(1, 'IT Club', 'Md. Imran Nazir', 'imrannazir1.in@gmail.com', 248, 'CSE', 'male', '1234', '2022-11-05 13:30:13'),
(3, 'IT Club', 'Afsana Akter', '0189050afra@gmail.com', 295, 'CSE', 'female', '1234', '2022-11-05 20:35:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users8`
--
ALTER TABLE `users8`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users8`
--
ALTER TABLE `users8`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
