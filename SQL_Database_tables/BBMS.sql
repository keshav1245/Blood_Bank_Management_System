-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2019 at 08:51 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BBMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`username`, `password`) VALUES
('kt1245', '81dc9bdb52d04dc20036dbd8313ed055'),
('zukayu', '051b7745828f1e3f9fecffade8325513');

-- --------------------------------------------------------

--
-- Table structure for table `appointmentdetails`
--

CREATE TABLE `appointmentdetails` (
  `name` text NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `booking` date NOT NULL,
  `venue` text NOT NULL,
  `slot` text NOT NULL,
  `donatedon` date DEFAULT NULL,
  `Entry Date and Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` text NOT NULL,
  `donated` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmentdetails`
--

INSERT INTO `appointmentdetails` (`name`, `bloodgroup`, `booking`, `venue`, `slot`, `donatedon`, `Entry Date and Time`, `email`, `donated`) VALUES
('Keshav Tangri', 'AB+', '2018-11-24', '', '', '2018-11-29', '2018-11-10 07:55:55', 'tangri57@gmail.com', 'YES'),
('Keshav Tangri', 'AB+', '2018-11-04', '', '', '2018-11-15', '2018-11-10 18:42:06', 'tangri57@gmail.com', 'YES'),
('Keshav Tangri', 'AB+', '2018-12-21', '', '', '2018-11-22', '2018-11-10 08:24:59', 'tangri57@gmail.com', 'YES'),
('Keshav Tangri', 'AB+', '2018-11-21', '', '', '2018-11-21', '2018-11-11 04:45:17', 'tangri57@gmail.com', 'YES'),
('Sagar', 'O+', '2018-11-13', '', '', '2018-11-13', '2018-11-12 04:50:07', 'sagardwevedi475@gmail.com', 'YES'),
('Keshav Tangri', 'AB+', '2018-11-14', '', '', NULL, '2018-11-12 10:49:06', 'tangri57@gmail.com', 'NO'),
('Keshav Tangri', 'AB+', '2018-10-18', '', '', '2018-11-13', '2018-11-13 06:59:24', 'tangri57@gmail.com', 'YES'),
('Keshav Tangri', 'AB+', '2018-12-14', '', '', NULL, '2018-11-13 07:54:59', 'tangri57@gmail.com', 'NO'),
('Keshav Tangri', 'AB+', '2018-11-23', '', '', '2018-11-29', '2018-11-20 10:24:58', 'tangri57@gmail.com', 'YES'),
('Keshav Tangri', 'AB+', '2018-11-25', '', '', '2018-11-26', '2018-11-21 16:11:46', 'tangri57@gmail.com', 'YES'),
('abhijeet', 'O+', '2018-12-05', '', '', '2018-12-06', '2018-12-03 07:00:02', 'abhibaruah4297@gmail.com', 'YES'),
('puru', 'A+', '2018-12-05', '', '', NULL, '2018-12-03 07:37:38', 'puruverma0001@gmail.com', 'NO'),
('Rajiv', 'AB+', '2018-12-21', 'PGIMER', 'afternoon', NULL, '2018-12-03 08:40:14', 'tangri57@gmail.com', 'NO'),
('Keshav Tangri', 'AB+', '2018-12-07', 'GMSH 32', 'morning', NULL, '2018-12-03 08:46:28', 'tangri57@gmail.com', 'NO'),
('Keshav Tangri', 'AB+', '2018-12-21', 'GMSH 16', 'morning', NULL, '2018-12-04 06:14:19', 'tangri57@gmail.com', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbottles`
--

CREATE TABLE `bloodbottles` (
  `bgroup` varchar(5) NOT NULL,
  `bottles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodbottles`
--

INSERT INTO `bloodbottles` (`bgroup`, `bottles`) VALUES
('A+', 22),
('A-', 20),
('AB+', 25),
('AB-', 4),
('B+', 20),
('B-', 20),
('O+', 24),
('O-', 20);

-- --------------------------------------------------------

--
-- Table structure for table `bloodgiventopatientrecord`
--

CREATE TABLE `bloodgiventopatientrecord` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `contact` int(11) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `no of bottles` int(11) NOT NULL,
  `hospital` text NOT NULL,
  `disease` text NOT NULL,
  `address proof` text NOT NULL,
  `aadhar number` int(15) NOT NULL,
  `hospital bill reciept number` text NOT NULL,
  `Date and Time of Giving blood` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgiventopatientrecord`
--

INSERT INTO `bloodgiventopatientrecord` (`name`, `email`, `address`, `contact`, `bloodgroup`, `no of bottles`, `hospital`, `disease`, `address proof`, `aadhar number`, `hospital bill reciept number`, `Date and Time of Giving blood`) VALUES
('sample', 'tangri57@gmail.com', 'House Number 1245, sector 15 B', 2147483647, 'AB+', 3, 'fortis mohali', 'Car Accident', 'submitted', 2147483647, 'FM432KT56CA', '2018-11-11 14:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `dataaccesedby`
--

CREATE TABLE `dataaccesedby` (
  `username` text NOT NULL,
  `tableaccessed` text NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataaccesedby`
--

INSERT INTO `dataaccesedby` (`username`, `tableaccessed`, `dateandtime`) VALUES
('zukayu', 'pending appointments', '2018-11-10 15:07:40'),
('zukayu', 'pending appointments', '2018-11-11 03:54:11'),
('zukayu', 'pending appointments', '2018-11-11 04:44:44'),
('kt1245', 'Equipments database checked', '2018-11-11 06:35:59'),
('kt1245', 'Equipments database checked', '2018-11-11 06:37:52'),
('kt1245', 'Equipments database checked', '2018-11-11 06:37:52'),
('kt1245', 'Equipments database checked', '2018-11-11 06:39:31'),
('kt1245', 'Equipments database checked', '2018-11-11 06:39:31'),
('kt1245', 'Equipments database checked', '2018-11-11 06:45:29'),
('kt1245', 'Equipments database checked', '2018-11-11 06:45:29'),
('kt1245', 'Equipments database checked', '2018-11-11 06:46:40'),
('kt1245', 'Equipments database checked', '2018-11-11 06:46:40'),
('zukayu', 'Equipments database checked', '2018-11-11 06:49:04'),
('zukayu', 'pending appointments', '2018-11-11 06:49:36'),
('zukayu', 'Equipments database checked', '2018-11-11 06:49:46'),
('zukayu', 'Equipments database checked', '2018-11-11 06:51:43'),
('kt1245', 'Equipments database checked', '2018-11-11 06:57:56'),
('kt1245', 'Equipments database checked', '2018-11-11 06:58:30'),
('kt1245', 'Equipments database checked', '2018-11-11 06:58:52'),
('zukayu', 'Blood Bottles Stock Checked ', '2018-11-11 07:01:31'),
('kt1245', 'All Appointment Details checked', '2018-11-11 07:11:05'),
('kt1245', 'Donor details accessed', '2018-11-11 07:22:21'),
('kt1245', 'Donor details accessed', '2018-11-11 07:22:47'),
('zukayu', 'Admin details accessed', '2018-11-11 07:28:02'),
('zukayu', 'Patient details accessed', '2018-11-11 09:20:33'),
('zukayu', 'Admin details accessed', '2018-11-11 09:24:24'),
('zukayu', 'Requests for blood database accessed', '2018-11-11 17:12:07'),
('zukayu', 'Requests for blood database accessed', '2018-11-11 17:13:04'),
('zukayu', 'Requests for blood database accessed', '2018-11-11 17:14:45'),
('zukayu', 'Requests for blood database accessed', '2018-11-11 17:16:23'),
('zukayu', 'All Appointment Details checked', '2018-11-12 04:53:28'),
('zukayu', 'pending appointments', '2018-11-12 10:51:21'),
('zuk', 'pending appointments', '2018-11-12 15:29:06'),
('zukayu', 'Equipments database checked', '2018-11-12 15:51:37'),
('zukayu', 'pending appointments', '2018-11-13 07:55:24'),
('zukayu', 'Blood Bottles Stock Checked ', '2018-11-13 09:48:04'),
('zukayu', 'pending appointments', '2018-11-13 11:10:29'),
('zukayu', 'pending appointments', '2018-11-13 11:16:18'),
('zukayu', 'pending appointments', '2018-11-13 11:17:14'),
('zukayu', 'pending appointments', '2018-11-13 11:18:26'),
('zukayu', 'pending appointments', '2018-11-13 11:19:09'),
('zukayu', 'pending appointments', '2018-11-13 11:22:11'),
('zukayu', 'Donor details accessed', '2018-11-13 11:23:57'),
('zukayu', 'Donor details accessed', '2018-11-13 11:25:23'),
('zukayu', 'pending appointments', '2018-11-13 16:13:04'),
('zukayu', 'pending appointments', '2018-11-13 16:14:19'),
('zukayu', 'pending appointments', '2018-11-13 16:14:35'),
('zukayu', 'pending appointments', '2018-11-13 16:14:35'),
('zukayu', 'pending appointments', '2018-11-13 16:15:05'),
('zukayu', 'Equipments database checked', '2018-11-13 16:16:10'),
('zukayu', 'pending appointments', '2018-11-14 09:57:16'),
('zukayu', 'pending appointments', '2018-11-14 11:04:00'),
('zukayu', 'pending appointments', '2018-11-14 11:29:09'),
('zukayu', 'pending appointments', '2018-11-20 10:25:39'),
('zukayu', 'Equipments database checked', '2018-11-20 10:30:37'),
('zukayu', 'Blood Bottles Stock Checked ', '2018-11-20 16:15:03'),
('zukayu', 'All Appointment Details checked', '2018-11-21 16:15:21'),
('zukayu', 'Patient details accessed', '2018-11-23 14:45:54'),
('zukayu', 'Donor details accessed', '2018-11-24 03:40:24'),
('zukayu', 'Donor details accessed', '2018-11-24 03:40:49'),
('zukayu', 'pending appointments', '2018-11-30 10:09:09'),
('zukayu', 'Blood Bottles Stock Checked ', '2018-12-03 02:11:39'),
('zukayu', 'Requests for blood database accessed', '2018-12-03 02:13:54'),
('zukayu', 'Patient details accessed', '2018-12-03 02:14:09'),
('zukayu', 'Equipments database checked', '2018-12-03 02:15:18'),
('zukayu', 'pending appointments', '2018-12-04 06:34:13'),
('zukayu', 'Equipments database checked', '2018-12-04 06:35:06'),
('zukayu', 'Donor details accessed', '2018-12-04 06:35:19'),
('zukayu', 'Donor details accessed', '2018-12-13 14:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `donor_details`
--

CREATE TABLE `donor_details` (
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `L_address` text NOT NULL,
  `P_address` text NOT NULL,
  `pincode` varchar(12) NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_details`
--

INSERT INTO `donor_details` (`name`, `email`, `password`, `L_address`, `P_address`, `pincode`, `bgroup`, `phone`, `country`, `state`) VALUES
('abhijeet', 'abhibaruah4297@gmail.com', '25d55ad283aa400af464c76d713c07ad', '258 sector 17 Panchkula', '258 sector 17 Panchkula', '134109', 'O+', '9646359637', 'India', 'Haryana'),
('Abhishek Kaushik', 'ak35288@gmail.com', '25d55ad283aa400af464c76d713c07ad', '#288 type 2 crpf campus hallomajra chd', '#288 type 2 crpf campus hallomajra chd', '160002', 'B-', '6239970681', 'India', 'Chandigarh'),
('amandeep', 'amandeep78371@gmail.com', '25d55ad283aa400af464c76d713c07ad', '# 355 Milk Colony,Dhanas', '# 355 Milk Colony,Dhanas Chandigarh', '160014', 'B+', '7837154709', 'India', 'Chandigarh'),
('Amit Kohli', 'amitkohli1972@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'House Number 1245 sector 15 B chandigarh first flo', 'House Number 1245 sector 15 B chandigarh first flo', '160015', 'B+', '9805088800', 'India', 'Chandigarh'),
('amandeep', 'anandaman06@gmail.com', '25d55ad283aa400af464c76d713c07ad', '#354 Power Colony Industrial Area Phase 2 Panchkula', '#354 Power Colony Industrial Area Phase 2 Panchkula', '134113', 'A+', '9915382566', 'India', 'Haryana'),
('Ashish upadhyay', 'ashu200899@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2253-A sector 42 C Chandigarh', '2253-A sector 42 C Chandigarh', '160036', 'B+', '9781032245', 'India', 'Chandigarh'),
('Deepanshu', 'deepanshugarg15@gmail.com', '25d55ad283aa400af464c76d713c07ad', '#441 New sunny enclave,sector 123, Mohali', '#441 New sunny enclave,sector 123, Mohali', '140301', 'B+', '9872340507', 'India', 'Punjab'),
('Puneet', 'Puneet3415@gmail.com', '25d55ad283aa400af464c76d713c07ad', '#3415, sector 22D, Chandigarh ', '#3415, sector 22D, Chandigarh ', '160022', 'A+', '9041469587', 'India', 'Chandigarh'),
('puru', 'puruverma0001@gmail.com', 'a8a4f576073d63300238c4b62d271a11', '#18-SF, Galaxy Green Apartments', 'Ms Enclave 2 , Zirakpur', '160104', 'A+', '9465671901', 'India', '-Select-'),
('rajiv', 'rajiv.tangri@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'House Number 1245 sector 15 B chandigarh first flo', 'House Number 1245 sector 15 B chandigarh first flo', '160015', 'A+', '7696012078', 'India', 'Chandigarh'),
('Sagar', 'sagardwevedi475@gmail.com', '090771f1488c6ae6d7c511bf2a57efea', '#2864 sector 47 B Chandigarh', 'apartment no. 2008 building no. A2 Gautam Buddha Nagar,greater Noida UP', '201306', 'O+', '7009797249', 'India', 'UP'),
('shubham', 'shubhamtayal13@outlook.com', '25d55ad283aa400af464c76d713c07ad', 'house no -1248, sector 15b chandigarh', 'house no -1248, sector 15b chandigarh', '160015', 'O+', '9994497833', 'INDIA', 'CHANDIGARH'),
('Mantash singh', 'singhmantash@gmail.com', '25d55ad283aa400af464c76d713c07ad', '#3878, sector 47 Chandigarh', '#3878, sector 47 Chandigarh', '160047', 'A+', '7988016778', 'India', 'Chandigarh'),
('swapan gupta', 'swapan.gupta45@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'house no. 4249 sector 125 mohali', 'house no. 4249 sector 125 mohali', '140308', 'O+', '9780783746', 'INDIA', 'PUNJAB'),
('Keshav Tangri', 'tangri57@gmail.com', '051b7745828f1e3f9fecffade8325513', 'House Number 1245, sector 15 B, chandigarh', 'House Number 1245, sector 15 B, chandigarh', '160015', 'AB+', '9041693272', 'India', '-Select-');

-- --------------------------------------------------------

--
-- Table structure for table `equiptmentrequest`
--

CREATE TABLE `equiptmentrequest` (
  `syringe` int(11) DEFAULT NULL,
  `cannuladrips` int(11) NOT NULL,
  `bandages` int(11) NOT NULL,
  `hematologyanalysers` int(11) NOT NULL,
  `bloodbankrefrigertors` int(11) NOT NULL,
  `microminicentrifuge` int(11) NOT NULL,
  `plateletshakers` int(11) NOT NULL,
  `aggregometer` int(11) NOT NULL,
  `plasmabloodfreezer` int(11) NOT NULL,
  `bloodbottles` int(11) NOT NULL,
  `dateandtimeofrequest` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equiptmentrequest`
--

INSERT INTO `equiptmentrequest` (`syringe`, `cannuladrips`, `bandages`, `hematologyanalysers`, `bloodbankrefrigertors`, `microminicentrifuge`, `plateletshakers`, `aggregometer`, `plasmabloodfreezer`, `bloodbottles`, `dateandtimeofrequest`) VALUES
(10, 5, 30, 3, 1, 10, 10, 40, 10, 0, '2018-11-10 16:53:26'),
(10, 5, 30, 3, 1, 10, 10, 40, 10, 20, '2018-11-20 10:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `equiptments`
--

CREATE TABLE `equiptments` (
  `syringe` int(11) NOT NULL,
  `cannula` int(11) NOT NULL,
  `bandages` int(11) NOT NULL,
  `hematology analyser` int(11) NOT NULL,
  `blood bank refrigerator` int(11) NOT NULL,
  `micro/mini centrifuge` int(11) NOT NULL,
  `platelet shaker` int(11) NOT NULL,
  `platelet aggregometer` int(11) NOT NULL,
  `plasma blood freezer` int(11) NOT NULL,
  `blood bottles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equiptments`
--

INSERT INTO `equiptments` (`syringe`, `cannula`, `bandages`, `hematology analyser`, `blood bank refrigerator`, `micro/mini centrifuge`, `platelet shaker`, `platelet aggregometer`, `plasma blood freezer`, `blood bottles`) VALUES
(20, 10, 60, 6, 2, 20, 20, 80, 20, 40);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` text NOT NULL,
  `feedback` text NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `country`, `feedback`, `dateandtime`) VALUES
('Keshav Tangri', 'zukayu.ccet@gmail.com', 'India', 'chah gaya ladke\r\n', '2018-11-13 16:20:25'),
('swapan gupta', 'swapan.gupta45@gmail.com', 'India', 'bahut galat hai bhai ', '2018-11-13 16:20:25'),
('shubham', 'SCS@gmail.com', 'India', 'Awesome work brother ', '2018-11-13 16:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `country` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `disease` text NOT NULL,
  `hospital` text NOT NULL,
  `room` text NOT NULL,
  `no of bottles` int(11) NOT NULL,
  `Date and Time of Request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`name`, `email`, `bgroup`, `country`, `phone`, `disease`, `hospital`, `room`, `no of bottles`, `Date and Time of Request`) VALUES
('sample', 'sample@sample.com', 'AB+', 'India', '123456', 'HB deficiency', 'fortis mohali', 'Emergency Ward', 0, '2018-11-11 08:45:10'),
('sample', 'sample@sample.com', 'AB+', 'India', '123456', 'HB deficiency', 'fortis mohali', 'Emergency Ward', 0, '2018-11-11 08:45:10'),
('sample', 'sample@sample.com', 'O+', 'India', '123456', 'HB deficiency', 'fortis mohali', 'Emergency Ward', 0, '2018-11-11 08:45:10'),
('sample', 'sample@sample.com', 'AB+', 'India', '123456', 'HB deficiency', 'f', 'Emergency Ward', 0, '2018-11-11 08:45:10'),
('sample', 'sample@sample.com', 'AB+', 'India', '123456', 'HB deficiency', 'fortis mohali', 'Emergency Ward', 0, '2018-11-11 08:45:10'),
('sample', 'sample@sample.com', 'AB+', 'India', '123456', 'HB deficiency', 'fortis mohali', 'Emergency Ward', 0, '2018-11-11 08:45:10'),
('sample', 'sample@sample.com', 'AB+', 'India', '123456', 'HB deficiency', 'fortis mohali', 'Emergency Ward', 0, '2018-11-11 08:45:10'),
('sample', 'zukayu.ccet@gmail.com', 'AB+', 'India', '123456', 'Car Accident', 'fortis mohali', 'ICU', 4, '2018-11-11 08:56:24'),
('sample', 'zukayu.ccet@gmail.com', 'AB-', 'India', '123456', 'Kidney Failure', 'GMSH 32', 'ICU', 3, '2018-11-11 08:58:53'),
('Keshav Tangri', 'tangri57@gmail.com', 'AB-', 'India', '123456', 'HB deficiency', 'House Number 1245', 'Emergency Ward', 3, '2018-11-14 16:38:41'),
('Keshav Tangri', 'tangri57@gmail.com', 'AB+', 'India', '9041693272', 'Car Accident', 'House Number 1245', 'ICU', 3, '2018-11-21 16:08:23'),
('Keshav Tangri', 'tangri57@gmail.com', 'AB+', 'India', '9041693272', 'Car Accident', 'fortis mohali', 'ward number 123456 floor 10th ', 3, '2018-12-04 06:20:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bloodbottles`
--
ALTER TABLE `bloodbottles`
  ADD PRIMARY KEY (`bgroup`);

--
-- Indexes for table `bloodgiventopatientrecord`
--
ALTER TABLE `bloodgiventopatientrecord`
  ADD PRIMARY KEY (`aadhar number`);

--
-- Indexes for table `donor_details`
--
ALTER TABLE `donor_details`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
