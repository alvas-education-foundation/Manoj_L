-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 09:53 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alvas_highschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_application`
--

CREATE TABLE `student_application` (
  `img` longblob NOT NULL,
  `Apnum` int(11) NOT NULL,
  `Adnum` int(11) NOT NULL,
  `Stsnum` int(11) NOT NULL,
  `Enttest` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `Section` varchar(10) NOT NULL,
  `Studentname` varchar(225) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `Dob` date NOT NULL,
  `Pob` varchar(225) NOT NULL,
  `Pdis` varchar(255) NOT NULL,
  `Pstate` varchar(225) NOT NULL,
  `Ppincode` int(11) NOT NULL,
  `Sadhaar` bigint(20) NOT NULL,
  `Bloodgroup` varchar(55) NOT NULL,
  `Mothertongue` varchar(55) NOT NULL,
  `Langknow` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `Caste` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Casteno` varchar(255) NOT NULL,
  `Incomeno` varchar(255) NOT NULL,
  `Fathername` varchar(225) NOT NULL,
  `Fatherphno` bigint(20) NOT NULL,
  `Fathereducation` varchar(255) NOT NULL,
  `Fatheroccupation` varchar(255) NOT NULL,
  `Fatheradhar` bigint(20) NOT NULL,
  `Mothername` varchar(225) NOT NULL,
  `Motherphno` bigint(20) NOT NULL,
  `Mothereducation` varchar(255) NOT NULL,
  `Motheroccupation` varchar(255) NOT NULL,
  `Motheradhar` bigint(20) NOT NULL,
  `Annualincome` int(11) NOT NULL,
  `Nodept` int(11) NOT NULL,
  `PerAddress` varchar(225) NOT NULL,
  `PerDistrict` varchar(255) NOT NULL,
  `PerState` varchar(255) NOT NULL,
  `Perpincode` int(11) NOT NULL,
  `PreAddress` varchar(255) NOT NULL,
  `PreDistrict` varchar(255) NOT NULL,
  `PreState` varchar(255) NOT NULL,
  `Prepincode` int(11) NOT NULL,
  `Guardenname` varchar(255) NOT NULL,
  `Guarphno` bigint(20) NOT NULL,
  `Guaradhar` bigint(20) NOT NULL,
  `Guaraddress` varchar(255) NOT NULL,
  `Pschool` varchar(225) NOT NULL,
  `Pclass` int(11) NOT NULL,
  `Promotion` varchar(255) NOT NULL,
  `Tc` varchar(255) NOT NULL,
  `Tcno` varchar(255) NOT NULL,
  `Tcdate` date NOT NULL,
  `Bankname` varchar(255) NOT NULL,
  `Bankbranch` varchar(255) NOT NULL,
  `Bankifsc` varchar(255) NOT NULL,
  `Lag1` varchar(255) NOT NULL,
  `Lag2` varchar(255) NOT NULL,
  `Lag3` varchar(255) NOT NULL,
  `Nob` int(11) NOT NULL,
  `Nos` int(11) NOT NULL,
  `Belder` int(11) NOT NULL,
  `Byoung` int(11) NOT NULL,
  `Selder` int(11) NOT NULL,
  `Syoung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_application`
--

INSERT INTO `student_application` (`img`, `Apnum`, `Adnum`, `Stsnum`, `Enttest`, `class`, `Section`, `Studentname`, `Gender`, `Dob`, `Pob`, `Pdis`, `Pstate`, `Ppincode`, `Sadhaar`, `Bloodgroup`, `Mothertongue`, `Langknow`, `Country`, `Religion`, `Caste`, `Category`, `Casteno`, `Incomeno`, `Fathername`, `Fatherphno`, `Fathereducation`, `Fatheroccupation`, `Fatheradhar`, `Mothername`, `Motherphno`, `Mothereducation`, `Motheroccupation`, `Motheradhar`, `Annualincome`, `Nodept`, `PerAddress`, `PerDistrict`, `PerState`, `Perpincode`, `PreAddress`, `PreDistrict`, `PreState`, `Prepincode`, `Guardenname`, `Guarphno`, `Guaradhar`, `Guaraddress`, `Pschool`, `Pclass`, `Promotion`, `Tc`, `Tcno`, `Tcdate`, `Bankname`, `Bankbranch`, `Bankifsc`, `Lag1`, `Lag2`, `Lag3`, `Nob`, `Nos`, `Belder`, `Byoung`, `Selder`, `Syoung`) VALUES
('', 2019001, 2019111, 987898898, 92, 9, 'g', 'Charan', 'Male', '2004-06-16', 'Moodbidra', 'Dakshna Kannada', 'Karnataka', 574225, 999999999999, 'B-', 'Kannada', 'Hindi', 'Indian', 'Hindu', 'Besta', '1A', 'RD5454545345', 'RD32534545', 'manoj', 7338471604, 'BE', 'Empolye', 214748364732, 'preethi', 2147483647, '12', 'house wife', 324334343434, 14000, 3, 'Moodbidra', 'Dk', 'Karnataka', 574225, 'Hennagara', 'Bangalore', 'Karnataka', 560105, 'None', 0, 0, 'none', 'Svrpuc', 8, 'yes', 'yes', '4646464', '2019-11-07', 'vijaya Bank', 'SSI', 'VIJB0002019', 'kannada', 'English', 'Hindi', 1, 1, 1, 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', '$2y$12$4ENfqUd8RsZjMLNY5tv37uXQ4z4M88Td0WENxIMuA34n.znTMYszO', 'phpgurukulofficial@gmail.com', 1, '2018-05-27 16:51:00', '0000-00-00 00:00:00'),
(2, 'manoj', '$2y$12$k2mjK7y6R8G4EwcZpy24gupSQyanSS1q1NgvF7yEZpoISEjoE1UGK', 'manojhennagara@gmail.com', 1, '2018-05-27 16:51:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tc`
--

CREATE TABLE `tc` (
  `promotohigh` varchar(225) NOT NULL,
  `readleave` varchar(225) NOT NULL,
  `medical` varchar(255) NOT NULL,
  `lastattend` date NOT NULL,
  `admisiondate` date NOT NULL,
  `apptc` date NOT NULL,
  `issuetc` date NOT NULL,
  `paidfee` varchar(225) NOT NULL,
  `feecoscession` varchar(225) NOT NULL,
  `noschoolhave` varchar(225) NOT NULL,
  `noschoolattend` varchar(225) NOT NULL,
  `character` varchar(225) NOT NULL,
  `schoolarship` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tc`
--

INSERT INTO `tc` (`promotohigh`, `readleave`, `medical`, `lastattend`, `admisiondate`, `apptc`, `issuetc`, `paidfee`, `feecoscession`, `noschoolhave`, `noschoolattend`, `character`, `schoolarship`) VALUES
('', '0', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', ''),
('Yes', '0', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', ''),
('Yes', '0', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', ''),
('Yes', '0', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', ''),
('Yes', '0', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', ''),
('Yes', '0', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', ''),
('Yes', '0', 'Yes', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', ''),
('No', '0', 'Yes', '2019-11-13', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', ''),
('No', '0', 'No', '2019-11-01', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', ''),
('No', '0', 'No', '2019-11-01', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', ''),
('No', '0', 'No', '2019-11-14', '2019-11-23', '2019-11-20', '2019-11-22', '0', '0', '0', '0', '', ''),
('No', '0', 'No', '2019-11-14', '2019-11-23', '2019-11-20', '2019-11-22', '0', '0', '0', '0', '', ''),
('No', '0', 'Yes', '2019-11-09', '2019-11-21', '2019-11-02', '2019-11-14', '0', '0', '0', '0', '', ''),
('No', '0', 'Yes', '2019-11-09', '2019-11-21', '2019-11-02', '2019-11-14', '0', '0', '0', '0', '', ''),
('', '0', 'Yes', '0000-00-00', '0000-00-00', '2019-11-28', '0000-00-00', '0', '0', '0', '0', '', ''),
('', '0', 'Yes', '0000-00-00', '0000-00-00', '2019-11-28', '0000-00-00', '0', '0', '0', '0', '', ''),
('Yes', '0', '', '0000-00-00', '2019-11-29', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', ''),
('', '0', 'No', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', ''),
('', '0', 'No', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', ''),
('No', '0', 'Yes', '2019-11-21', '2019-11-24', '2019-11-27', '2019-11-15', '0', '0', '0', '0', '', ''),
('Yes', '0', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', 'no', '', ''),
('Yes', '0', 'Yes', '2019-11-20', '2019-11-27', '2019-11-28', '2019-11-28', 'Yes', 'no', 'no', 'no', '', ''),
('Yes', '0', 'Yes', '2019-11-20', '2019-11-27', '2019-11-28', '2019-11-28', 'Yes', 'no', 'no', 'no', '', ''),
('No', '0', 'Yes', '2019-11-06', '2019-11-22', '2019-11-20', '2019-11-01', 'No', 'no', 'no', 'no', '', ''),
('Yes', 'Ninth', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
('Yes', 'Ninth', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
('No', 'Ninth', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
('No', 'Ninth', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', ''),
('Yes', 'Eighth', 'No', '2019-11-06', '2019-11-13', '2019-11-28', '2019-11-07', 'Yes', 'no', 'no', 'no', '', ''),
('Yes', 'Eighth', 'No', '2019-11-06', '2019-11-13', '2019-11-28', '2019-11-07', 'Yes', 'no', 'no', 'no', '', ''),
('No', 'Eighth', 'Yes', '2019-11-08', '2019-11-09', '2019-11-21', '2019-11-09', 'Yes', 'no', '11', '144', '', ''),
('', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_application`
--
ALTER TABLE `student_application`
  ADD PRIMARY KEY (`Adnum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
