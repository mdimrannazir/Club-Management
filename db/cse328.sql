-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 08:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse328`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `club_id` int(10) NOT NULL,
  `club_name` varchar(128) NOT NULL,
  `club_motto` varchar(1024) NOT NULL,
  `club_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`club_id`, `club_name`, `club_motto`, `club_created`) VALUES
(1, 'IT Club', 'The main purpose of IT CLUB is to coherently distribute knowledge among those who are eager to learn technology.', '2022-11-07 10:34:37'),
(2, 'Sports Club', 'BUBT Sports Club aims to providing a relevant and sustainable sports service to the students of BUBT. Our aim is to ensure sporting facilities through support and services. We believe that the structure, organization, and execution of BUBT Sports Club are primarily the responsibility of students, but BUBT provides supports with human, financial and dedicated resources. Though the club is unique in its purpose and operation, but it reflects positively as a part of sport and BUBT as a whole.', '2022-11-07 10:37:22'),
(3, 'Cultural Club', 'BUBTCC promotes students creativity and professionalism through a cultural framework by invigorating cultural diversity and awareness  in connection with beholding the ideology of an open mind to move beyond the boundaries of own self', '2022-11-20 05:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `common`
--

CREATE TABLE `common` (
  `club_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `common`
--

INSERT INTO `common` (`club_id`, `uid`) VALUES
(1, 286),
(2, 294);

-- --------------------------------------------------------

--
-- Table structure for table `commone`
--

CREATE TABLE `commone` (
  `evid` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commone`
--

INSERT INTO `commone` (`evid`, `uid`) VALUES
(0, 111),
(1, 111),
(1, 286),
(3, 111);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `evid` int(5) NOT NULL,
  `evname` varchar(100) NOT NULL,
  `evpurpose` varchar(255) NOT NULL,
  `evdetails` varchar(1000) NOT NULL,
  `evcreation` datetime NOT NULL DEFAULT current_timestamp(),
  `crecord` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`evid`, `evname`, `evpurpose`, `evdetails`, `evcreation`, `crecord`) VALUES
(1, 'Programming Contest by IT CLUB', 'ICPC programming contest that inspire students to solve problems', 'The International Collegiate Programming Contest is an algorithmic programming contest for college students. Teams of three, representing their university, work to solve the most real-world problems, fostering collaboration, creativity, innovation, and the', '2022-11-17 14:48:52', 1),
(2, 'Photo Walk to the Nature', 'Learning aspects of photography', 'BUBT Photography Club is a creative hub for the students of BUBT for photography and cinematography. The club has been active since its inception on 24th February, 2014. BUBT Photography Club is holding its position by making a difference by capturing mome', '2022-11-19 09:48:52', 2),
(3, 'Cultural Get-together', 'BUBTCC promotes students’creativity and professionalism through a cultural framework by invigorating the cultural diversity and awareness; in connection with beholding the ideology of open mind to move beyond boundaries of own self.', '', '2022-11-19 09:48:52', 3),
(45, 'programming', 'jfaldsjflkasdfj', '', '2022-11-20 13:11:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users7`
--

CREATE TABLE `users7` (
  `sno` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `udept` varchar(10) NOT NULL,
  `upassword` varchar(255) NOT NULL,
  `uclub` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users7`
--

INSERT INTO `users7` (`sno`, `username`, `uid`, `udept`, `upassword`, `uclub`, `date`) VALUES
(1, 'admin', 111, 'CSE', '$2y$10$B/dBLlt8VcevhdpuOnTBzuAEUXZG.S3tpeXLPlBEBqNOVvV.iK27q', 'IT', '2022-11-17 08:24:44'),
(2, 'Imran', 248, 'CSE', '$2y$10$M4xzD6elTIGXNG95CYOHIeEa3KcT2gCUdvRPxgzYEKkSMTNdMSg0q', 'Sports', '2022-11-17 08:25:05'),
(3, 'tanbir', 294, 'CSE', '$2y$10$432nWJiHHUAcRZvPIQOcEO9IdNjQltsrcnqXOEq.pN7fbmDSpXuKC', 'IT', '2022-11-17 08:22:58'),
(4, 'tasfia', 286, 'CSE', '$2y$10$J2jD70yf.WkxJGjeYaY4v.epMBxTTxQ7WtH.kB5rPjcRHMESJV4eW', 'IT', '2022-11-17 08:23:03'),
(13, 'afsana', 295, 'BBA', '$2y$10$NcjpA/vO1add525eNBJnau6A8xWgwdIriwrFkXOT0RgzxIDrWZWGC', 'IT Club', '2022-11-19 16:49:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `common`
--
ALTER TABLE `common`
  ADD PRIMARY KEY (`club_id`,`uid`);

--
-- Indexes for table `commone`
--
ALTER TABLE `commone`
  ADD PRIMARY KEY (`evid`,`uid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`evid`);

--
-- Indexes for table `users7`
--
ALTER TABLE `users7`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `club_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `evid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users7`
--
ALTER TABLE `users7`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
