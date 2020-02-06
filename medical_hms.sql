-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2019 at 09:02 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passkey` varchar(255) NOT NULL,
  `log_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email_add` varchar(200) NOT NULL,
  `passkey` varchar(200) NOT NULL,
  `c_passkey` varchar(200) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `img` text NOT NULL,
  `log_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `fullname`, `email_add`, `passkey`, `c_passkey`, `mobile_no`, `img`, `log_status`) VALUES
(1, 'Damina Abel', 'abel@laurel.com', '1234', '1234', '07045349087', '', 'logged_in'),
(2, 'laura jones', 'abel@laurel.com', '4321', '4321', '07049933300', '', 'logged_in'),
(3, 'Tel Aviv', 'aviv@ymail.com', '0000', '0000', '08132246790', '', 'logged_in');

-- --------------------------------------------------------

--
-- Table structure for table `doc_report`
--

CREATE TABLE `doc_report` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `lab_investigation` varchar(255) NOT NULL,
  `drugs_told` varchar(255) NOT NULL,
  `doa` date NOT NULL,
  `toa` time NOT NULL,
  `card_no` varchar(100) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_report`
--

INSERT INTO `doc_report` (`id`, `user_id`, `doctor_id`, `lab_investigation`, `drugs_told`, `doa`, `toa`, `card_no`, `complaint`, `diagnosis`, `date_created`) VALUES
(1, 2, 2, '', 'amalar, flavoquine', '2019-08-24', '11:00:00', 'hus-19-A0000001', 'Backache, high body temperature, frequent stooling', 'dysentry', '2019-08-22 21:13:30'),
(2, 3, 2, 'Stomach ray', 'oral-b, Lumarthom', '2019-08-29', '14:00:00', 'hus-19-A0000002', 'stomach ache, yellow eyes, loss of Apetite', 'stomach ulcer', '2019-08-22 15:13:30'),
(3, 4, 1, '', 'paracetamol, flavoquine', '2019-10-18', '12:00:00', 'hus-19-A0000004', 'Sleepless nights, high body temperature, frequent stooling', 'Trynianiosin', '2019-08-20 23:00:30'),
(4, 1, 1, 'launcheorn', 'terrazone, Lumarthom', '2019-11-30', '17:30:00', 'hus-19-A0000005', 'Durupal, high body temperature, loss of Apetite', 'abdominal fever', '2019-08-20 14:12:30'),
(5, 5, 3, '', 'Chlorofecnol, nimartem', '2019-10-20', '08:30:00', 'hus-19-A0000003', 'Nausea, flapod, sleeping too often', 'Dauchin', '2019-08-20 23:00:30'),
(6, 6, 3, 'Niploleum', 'coartem, diaglobin', '2019-11-23', '12:30:00', 'hus-19-A0000006', 'Joint ache, frequent stooling, loss of Apetite', 'menstrual pain', '2019-08-22 03:00:30'),
(7, 7, 2, 'Go for eye test', '', '2019-09-28', '11:39:00', 'hus-19-A0000007', 'This is a complain', 'My diagnosis is to eat', '0000-00-00 00:00:00'),
(8, 2, 2, '', 'amalar, flavoquine', '2019-09-10', '11:00:00', 'hus-19-A0000001', 'Backache, high body temperature, frequent stooling', 'dysentry', '2019-08-30 16:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `cardNumber` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passkey` varchar(100) NOT NULL,
  `c_pass` varchar(100) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `cardNumber`, `email`, `passkey`, `c_pass`, `sex`, `dob`, `status`) VALUES
(1, 'Dave torrent', 'hus-19-A0000001', 'raymond@gmail.com', '200', '200', 'male', '23-06-1995', 'new'),
(2, 'Mouka foamy', 'hus-19-A0000002', 'marklaurel@gmail.com', '100', '100', 'female', '20-04-1961', 'new'),
(3, 'Damilolly bals', 'hus-19-A0000004', 'ahm@ymail.com', '0909', '0909', 'male', '2019-08-18', 'new'),
(4, 'Tami moore', 'hus-19-A0000003', 'dvtorr@gmail.com', '1234', '1234', 'female', '13-08-1999', 'new'),
(5, 'Lowe bussy', 'hus-19-A0000005', 'lowbus@gmail.com', '4321', '4321', 'female', '02-11-1990', 'new'),
(6, 'delly bin', 'hus-19-A0000006', 'dellyb@ymail.com', '9090', '9090', 'male', '2010-02-28', 'new');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_report`
--
ALTER TABLE `doc_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doc_report`
--
ALTER TABLE `doc_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
