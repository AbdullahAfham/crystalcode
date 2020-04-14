-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 06:11 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `water`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(100) NOT NULL,
  `amail` varchar(100) NOT NULL,
  `apassword` varchar(100) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `amail`, `apassword`, `aname`, `img`) VALUES
(1, 'afhamrazik@gmail.com', '123', 'AFHAM', 'pro.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `eid` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `post` varchar(100) NOT NULL,
  `division` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` int(15) NOT NULL,
  `fax` int(15) NOT NULL,
  `office` int(15) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`eid`, `name`, `nic`, `post`, `division`, `email`, `tel`, `fax`, `office`, `addr`, `about`, `img`) VALUES
('', 'sadsad', '324324', 'wefewf', 'wefwef', 'afhamrazik@gmail.com', 234234, 324234, 324234, 'fewef', 'fwefwef', '256x256bb.jpg'),
('EMP0001', 'sadsad', '324324', 'wefewf', 'wefwef', 'afhamrazik@gmail.com', 234234, 324234, 324234, 'fewef', 'fwefwef', '256x256bb.jpg'),
('EMP0002', 'sadsad', '324324', 'wefewf', 'wefwef', 'afhamrazik@gmail.com', 234234, 324234, 324234, 'fewef', 'fwefwef', '256x256bb.jpg'),
('EMP0003', 'sadsad', '324324', 'wefewf', 'wefwef', 'afhamrazik@gmail.com', 234234, 324234, 324234, 'fewef', 'fwefwef', '256x256bb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
