-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 03:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Id_Doctor` char(15) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Name` char(30) NOT NULL,
  `Adress` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medical_records`
--

CREATE TABLE `medical_records` (
  `Id_MedicalRecords` char(15) NOT NULL,
  `Allergy_history` varchar(20) NOT NULL,
  `Blood_type` char(2) NOT NULL,
  `Date` date NOT NULL,
  `Complaint` varchar(20) NOT NULL,
  `Diagnosis` varchar(20) NOT NULL,
  `Check_up_result` varchar(20) NOT NULL,
  `Id_patient` char(15) NOT NULL,
  `Id_nurse` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `Id_Medicine` char(15) NOT NULL,
  `Name` char(30) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `Stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `Id_nurse` char(15) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Name` char(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Id_Patient` char(15) NOT NULL,
  `Id_Doctor` char(15) NOT NULL,
  `Id_Nurse` char(15) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Name` char(30) NOT NULL,
  `blood_type` char(2) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Id_Doctor`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD PRIMARY KEY (`Id_MedicalRecords`),
  ADD KEY `FK` (`Id_patient`),
  ADD KEY `Id_nurse` (`Id_nurse`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`Id_Medicine`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`Id_nurse`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Id_Patient`),
  ADD KEY `Id_Doctor` (`Id_Doctor`),
  ADD KEY `Id_Nurse` (`Id_Nurse`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
