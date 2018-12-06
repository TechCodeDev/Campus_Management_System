-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 11:08 AM
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
  `password` varchar(20) NOT NULL,
  `College_code` varchar(5) NOT NULL,
  `College_offical_website` varchar(200) NOT NULL,
  `Description_of_college` varchar(200) NOT NULL,
  `Phone_Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clregistration`
--

INSERT INTO `clregistration` (`name`, `gmail`, `password`, `College_code`, `College_offical_website`, `Description_of_college`, `Phone_Number`) VALUES
('cit', 'cit@gmail.com', '1cg', '1ci', 'https://cittumkur.org', 'super college', 7667261);

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
(3, 'youtube', 'youtube@gmail.com', 'http://www.youtube.com', 'we are looking for AI developer. Intersted candiditates please register for an interview using above link....thanku '),
(4, 'alibaba', 'wipro@gmail.com', 'alibaba.com', 'we are looking for front end developer..intersedted candate register using above link '),
(5, 'INFO', 'wipro@gmail.com', 'INFO', 'we are looking for front end developer..intersedted candate register using above link '),
(6, 'INFO', 'wipro@gmail.com', 'INFO', 'we are looking for front end developer..intersedted candate register using above link ');

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
(2, 'kavya@gmail.com', 'http:face.hi.lo', 'kavya', ' infosis'),
(4, 'sahana@gmail.com', 'http:face.hi.lo', 'sahana', ' infosis'),
(5, 'satish@gmail.com', 'http:face.hi.lo', 'satish', ' infosis'),
(7, 'kavya@gmail.com', 'https://www.google.com', 'kavya', ' Google'),
(8, 'puneethn038@gmail.com', 'https://www.google.com', 'puneeth', ' Google'),
(9, 'sahana@gmail.com', 'https://www.google.com', 'sahana', ' Google'),
(10, 'satish@gmail.com', 'https://www.google.com', 'satish', ' Google'),
(11, 'ashok@gmail.com', 'http://www.infosys.com', 'ashok', ' infosis'),
(12, 'kavya@gmail.com', 'http://www.infosys.com', 'kavya', ' infosis'),
(13, 'puneethn038@gmail.com', 'http://www.infosys.com', 'puneeth', ' infosis'),
(14, 'sahana@gmail.com', 'http://www.infosys.com', 'sahana', ' infosis'),
(15, 'satish@gmail.com', 'http://www.infosys.com', 'satish', ' infosis'),
(16, 'ashok@gmail.com', 'KKK', 'ashok', ' infosis'),
(17, 'kavya@gmail.com', 'KKK', 'kavya', ' infosis'),
(18, 'puneethn038@gmail.com', 'KKK', 'puneeth', ' infosis'),
(19, 'sahana@gmail.com', 'KKK', 'sahana', ' infosis'),
(20, 'satish@gmail.com', 'KKK', 'satish', ' infosis'),
(21, 'ashok@gmail.com', 'llll.com', 'ashok', ' infosis'),
(22, 'ashok@gmail.com', 'http://www.infosys.com', 'ashok', ' wipro'),
(23, 'ashok@gmail.com', 'jkdkjdskj', 'ashok', ' wipro'),
(24, 'kavya@gmail.com', 'jkdkjdskj', 'kavya', ' wipro'),
(25, 'puneethn038@gmail.com', 'jkdkjdskj', 'puneeth', ' wipro'),
(26, 'sahana@gmail.com', 'jkdkjdskj', 'sahana', ' wipro'),
(27, 'satish@gmail.com', 'jkdkjdskj', 'satish', ' wipro');

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
('ashok', 'ashok@gmail.com', '98777', 'vv', 'Tumkur', 2147483647, 'shettyhalli gate ,devanure main road ,tumkur, shet', '14-03-1998', 12, 'GMAEC', 60, 60, 90, 'python', '1ck', 'basava'),
('kavya', 'kavya@gmail.com', 'admin', 'N', 'Tumkur', 2147483647, 'shettyhalli gate ,devanure main road ,tumkur, shet', '14-03-1974', 28, 'tagor', 75, 54, 60, 'c,c++,java', '1ki', 'kit'),
('naveen', 'naveen@gmail.com', '9743', '', '', 0, '', '', 0, '', 0, 0, 0, '', '', ''),
('puneeth', 'puneethn038@gmail.com', '9743181901', 'n', 'tumkur', 2147483647, 'shettyhalli gate ,devanur main road ,tumkur-572102', '14-03-1998', 20, 'GMAEC', 60, 60, 60, 'c,c++,java,python', '1ci', 'Cit'),
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
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
