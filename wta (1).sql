-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 05:59 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wta`
--

-- --------------------------------------------------------

--
-- Table structure for table `clregistration`
--

CREATE TABLE `clregistration` (
  `name` varchar(20) NOT NULL,
  `gmail` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clregistration`
--

INSERT INTO `clregistration` (`name`, `gmail`, `password`) VALUES
('kit', 'kit@gmail.com', '9743181901'),
('rajeev', 'rajeev@gmail.com', '9743181901'),
('skl', 'skl@kl.com', 'skl'),
('venketes', 'venketes@gmail.com', '9743181901');

-- --------------------------------------------------------

--
-- Table structure for table `cmregistration`
--

CREATE TABLE `cmregistration` (
  `name` varchar(20) NOT NULL,
  `gmail` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Company_offical_website` varchar(50) NOT NULL,
  `Phone_Number` int(10) NOT NULL,
  `No_of_employes` int(30) NOT NULL,
  `Domain` varchar(30) NOT NULL,
  `Clients` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmregistration`
--

INSERT INTO `cmregistration` (`name`, `gmail`, `password`, `Company_offical_website`, `Phone_Number`, `No_of_employes`, `Domain`, `Clients`) VALUES
('Google', 'google@gmail.com', 'google', '', 0, 0, '', ''),
('infosis', 'infosis@gmail.com', '9743181901', 'https://www.infosys.com', 80, 14, 'bussiness solution', 'Air National Guard , American '),
('wipro', 'wipro@gmail.com', '9743181901', '', 0, 0, '', ''),
('youetube', 'youtube@gmail.com', '9743181901', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `job_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company`, `gmail`, `link`, `job_description`) VALUES
(1, 'infosis', 'infosis@gmail.com', 'http://www.infosys.com', 'We are looking for backend developer. any body intrested please register using\nusing above link....\n'),
(2, 'Google', 'google@gmail.com', 'https://careers.google.com/students/', 'we are looking for front end developer interested candate.please register for interview using below link\r\n\r\n'),
(3, 'youtube', 'youtube@gmail.com', 'http://www.youtube.com', 'we are looking for AI developer. Intersted candiditates please register for an interview using above link....thanku ');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(225) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `name` varchar(40) NOT NULL,
  `c_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `gmail`, `link`, `name`, `c_name`) VALUES
(1, 'ashok@gmail.com', 'http://www.infosys.com', 'ashok', ' infosis'),
(2, 'ashok@gmail.com', 'gboxz.in', 'ashok', ' infosis'),
(3, 'puneethn038@gmail.com', 'gboxz.in', 'puneeth', ' infosis'),
(4, 'sahana@gmail.com', 'gboxz.in', 'sahana', ' infosis'),
(5, 'satish@gmail.com', 'gboxz.in', 'satish', ' infosis'),
(6, 'ashok@gmail.com', 'https://www.google.com', 'ashok', ' Google'),
(7, 'naveen@gmail.com', 'https://www.google.com', 'naveen', ' Google'),
(8, 'puneethn038@gmail.com', 'https://www.google.com', 'puneeth', ' Google'),
(9, 'sahana@gmail.com', 'https://www.google.com', 'sahana', ' Google'),
(10, 'satish@gmail.com', 'https://www.google.com', 'satish', ' Google');

-- --------------------------------------------------------

--
-- Table structure for table `sregistration`
--

CREATE TABLE `sregistration` (
  `name` varchar(20) NOT NULL,
  `gmail` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `last` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dateofbirth` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `school` varchar(50) NOT NULL,
  `tenth_percentage` float NOT NULL,
  `puc_percentage` float NOT NULL,
  `eng_agregrate` float NOT NULL,
  `extra_skill` varchar(50) NOT NULL,
  `college_code` varchar(5) NOT NULL,
  `college_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sregistration`
--

INSERT INTO `sregistration` (`name`, `gmail`, `password`, `last`, `city`, `contact_no`, `address`, `dateofbirth`, `age`, `school`, `tenth_percentage`, `puc_percentage`, `eng_agregrate`, `extra_skill`, `college_code`, `college_name`) VALUES
('ambi', 'ambi@gmail.com', '9743', '', '', 0, '', '', 0, '', 0, 0, 0, '', '', ''),
('ashok', 'ashok@gmail.com', '98777', 'vv', 'Tumkur', 2147483647, 'shettyhalli gate ,devanure main road ,tumkur, shet', '14-03-1998', 12, 'GMAEC', 60, 60, 90, 'python', '1cg', 'basava'),
('naveen', 'naveen@gmail.com', '9743', 'n', 'Tumkur', 0, 'shettyhalli gate ,devanure main road ,tumkur', '14-03-1998', 12, 'www', 90, 90, 90, 'c', '1cg', 'kalpathru central college'),
('puneeth', 'puneethn038@gmail.com', '9743181901', 'n', 'tumkur', 2147483647, 'shettyhalli gate ,devanur main road ,tumkur-572102', '14-03-1998', 20, 'GMAEC', 60, 60, 60, 'c,c++,java,python', '1cg', 'Cit'),
('sahana', 'sahana@gmail.com', '7892952673', 'N', 'Tumkur', 2147483647, 'shettyhalli gate ,devanure main road ,tumkur, shet', '14-03-1974', 15, 'sugnana english high school', 60, 80, 60, 'c', '1cg', 'kalpathru central college'),
('satish', 'satish@gmail.com', '9743181901', 'ffff', 'ffff', 0, 'shettyhalli gate ,devanure main road ,tumkur, shet', '14-03-1998', 12, 'gmaec', 90, 90, 60, 'c,c++,java', '1cg', 'dssss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clregistration`
--
ALTER TABLE `clregistration`
  ADD PRIMARY KEY (`gmail`);

--
-- Indexes for table `cmregistration`
--
ALTER TABLE `cmregistration`
  ADD PRIMARY KEY (`gmail`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sregistration`
--
ALTER TABLE `sregistration`
  ADD PRIMARY KEY (`gmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
