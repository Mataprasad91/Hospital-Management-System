-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2021 at 12:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalmangsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_doctor`
--

CREATE TABLE `add_doctor` (
  `d_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `dob` varchar(11) NOT NULL,
  `bloodgroup` varchar(11) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_doctor`
--

INSERT INTO `add_doctor` (`d_id`, `fname`, `lname`, `address`, `contact`, `dob`, `bloodgroup`, `specialization`, `email`, `password`) VALUES
(3, 'Anand', 'Maurya', '4, Mahalaxmi chawla hkalwa', '2147483647', '1997-09-10', 'O+ve', ' Checmist', 'anand.maurya@gmail.com', 'anand.maurya'),
(4, 'Akash', 'Pandey', 'Mumbai', '1234567', '1997-09-10', 'O+ve', ' Sexologist', 'akash.pandey1@gmail.com', 'akash.pandey'),
(5, 'Ashish', 'Singh', 'BBSR', '98013131431', '2021-12-10', 'AB+ve', ' Radiograpghy', 'ashish.singh@gmail.com', 'ashish.singh');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Admin_Password` varchar(255) NOT NULL,
  `contact` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `email`, `Admin_Password`, `contact`) VALUES
(1, 'Alok kumar', 'alok.kumar@gmail.com', 'alok.kumar', 9879879879);

-- --------------------------------------------------------

--
-- Table structure for table `appoitments`
--

CREATE TABLE `appoitments` (
  `appoitmentId` int(11) NOT NULL,
  `DoctorName` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `fkPatientId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoitments`
--

INSERT INTO `appoitments` (`appoitmentId`, `DoctorName`, `specialization`, `date`, `time`, `fkPatientId`) VALUES
(26, '', '', '1111-02-10', '11:11', 5),
(28, '', '', '1111-02-10', '11:11', 5),
(30, 'Anand Maurya', 'Biologist', '1111-11-11', '11:11', 5),
(31, 'Anand Maurya', 'Biologist', '1111-11-11', '11:11', 5),
(32, 'Anand Maurya', 'Biologist', '1111-11-11', '11:11', 5),
(33, 'Anand Maurya', 'Biologist', '1111-11-11', '11:11', 5),
(34, 'Anand Maurya', 'Biologist', '1111-11-11', '11:11', 5),
(35, 'Anand Maurya', 'Biologist', '1111-11-11', '11:11', 5),
(36, 'Anand Maurya', 'Biologist', '2020-12-12', '22:22', 5);

-- --------------------------------------------------------

--
-- Table structure for table `register_patient`
--

CREATE TABLE `register_patient` (
  `patientId` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cfpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_patient`
--

INSERT INTO `register_patient` (`patientId`, `firstname`, `lastname`, `Address`, `DOB`, `bloodgroup`, `phoneNumber`, `email`, `password`, `cfpass`) VALUES
(1, 'Rakesh', 'Shinde', 'Mumbai, Maharastra, 400001', '0000-00-00', 'O+ve', 0, 'rakesh.shinde@gmail.com', 'rakesh.shinde', ''),
(3, 'Nilesh', 'Singh', 'Thane 400605', '2021-10-21', 'o+ve', 1234567890, 'nilesh.singh@gmail.com', 'nilesh.singh', 'nilesh.sign'),
(4, 'Aman', 'Duney', 'Bihar', '1991-09-10', 'AB', 98701234, 'aman.duney@gmail.om', '', '14c52a2c379aad71db8110df3898dc0a'),
(5, 'AYUSH', 'KUMAR', 'U.P BanarAS', '1997-09-10', 'AB', 981230921, 'ayush.kumar@gmail.com', 'ayush.kumar', 'ayush.kumar');

-- --------------------------------------------------------

--
-- Table structure for table `viewcontacts`
--

CREATE TABLE `viewcontacts` (
  `contactId` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `viewcontacts`
--

INSERT INTO `viewcontacts` (`contactId`, `first_name`, `last_name`, `city`, `contact`, `email`, `subject`) VALUES
(1, 'Anand', 'Maurya', 'Appointment Not rescheduled', 'I haved raised query on 20 oct, but yet not resolved', '0000-00-00', ''),
(2, 'Anand', 'Maurya', 'Appointment Not rescheduled', 'I haved raised query on 20 oct, but yet not resolved', 'anand.maurya@high.com', 'All Good query');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_doctor`
--
ALTER TABLE `add_doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appoitments`
--
ALTER TABLE `appoitments`
  ADD PRIMARY KEY (`appoitmentId`),
  ADD KEY `fk_foreign_key_name` (`fkPatientId`);

--
-- Indexes for table `register_patient`
--
ALTER TABLE `register_patient`
  ADD PRIMARY KEY (`patientId`);

--
-- Indexes for table `viewcontacts`
--
ALTER TABLE `viewcontacts`
  ADD PRIMARY KEY (`contactId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_doctor`
--
ALTER TABLE `add_doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appoitments`
--
ALTER TABLE `appoitments`
  MODIFY `appoitmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `register_patient`
--
ALTER TABLE `register_patient`
  MODIFY `patientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `viewcontacts`
--
ALTER TABLE `viewcontacts`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoitments`
--
ALTER TABLE `appoitments`
  ADD CONSTRAINT `fk_foreign_key_name` FOREIGN KEY (`fkPatientId`) REFERENCES `register_patient` (`patientId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
