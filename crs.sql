-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 11:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crs`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_fst`
--

CREATE TABLE `add_fst` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` int(255) NOT NULL,
  `sem` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_fst`
--

INSERT INTO `add_fst` (`id`, `sub_name`, `sub_code`, `credits`, `sem`) VALUES
(3, 'Kannada', '19KA4KATK', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `add_s1`
--

CREATE TABLE `add_s1` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s1`
--

INSERT INTO `add_s1` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(10, 'Applied Science', '19CS2PCAPS', 4),
(12, 'Kannada', '19KA4KATK', 2);

-- --------------------------------------------------------

--
-- Table structure for table `add_s2`
--

CREATE TABLE `add_s2` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s2`
--

INSERT INTO `add_s2` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(7, 'OOJ', '19CS4PCOOJ', 4),
(8, 'DBMS', '19CS4PCDBM', 4);

-- --------------------------------------------------------

--
-- Table structure for table `add_s3`
--

CREATE TABLE `add_s3` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s3`
--

INSERT INTO `add_s3` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(2, 'MP', '19CS4PCMP', 4),
(3, 'OO Java Programming', '19CS4PCOOJ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `add_s4`
--

CREATE TABLE `add_s4` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s4`
--

INSERT INTO `add_s4` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(4, 'Linear Algerba', '19MA4BSLIA', 4),
(5, 'TFCS', '19CS4PCTFC', 4),
(6, 'DBMS', '19CS4PCDBM', 4),
(7, 'ADA', '19CS4PCADA', 4),
(8, 'Operating Systems', '19CS4PCOPS', 4),
(9, 'EVS', '19HS4PCEVS', 2),
(10, 'PW-2', '19CS4PCPW2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `add_s5`
--

CREATE TABLE `add_s5` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s5`
--

INSERT INTO `add_s5` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(2, 'AI', '19CS2PCAPS', 4);

-- --------------------------------------------------------

--
-- Table structure for table `add_s6`
--

CREATE TABLE `add_s6` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s6`
--

INSERT INTO `add_s6` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(2, 'Machine Learning', '19CS7PCML', 4);

-- --------------------------------------------------------

--
-- Table structure for table `add_s7`
--

CREATE TABLE `add_s7` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s7`
--

INSERT INTO `add_s7` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(2, 'Artificial Intelligence', '19CS4PCAI', 4);

-- --------------------------------------------------------

--
-- Table structure for table `add_s8`
--

CREATE TABLE `add_s8` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s8`
--

INSERT INTO `add_s8` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(3, 'ML', '19CS4ML4PC', 4);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`) VALUES
('hodCSE@bmsce.ac.in', 'hodcs');

-- --------------------------------------------------------

--
-- Table structure for table `fst_reg`
--

CREATE TABLE `fst_reg` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `usn` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `sem` int(1) NOT NULL,
  `gender` char(1) NOT NULL,
  `phno` bigint(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fst_reg`
--

INSERT INTO `fst_reg` (`id`, `fname`, `lname`, `bdate`, `usn`, `email`, `dept`, `sem`, `gender`, `phno`, `image`, `password`) VALUES
(2, 'Md Yaseen ', 'Ahmed', '2020-03-27', '1BM19CS404', 'yaseenmd.cs19@bmsce.ac.in', 'Computer Science & Engineering', 4, 'M', 9108735020, 'Desert.jpg', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `usn` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `sem` int(1) NOT NULL,
  `gender` char(1) NOT NULL,
  `phno` bigint(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `bdate`, `usn`, `email`, `dept`, `sem`, `gender`, `phno`, `image`, `password`) VALUES
(24, 'Arbaz', 'Ahmed', '1999-01-06', '1BM19CS401', 'arbazahmed.cs19@bmsce.ac.in', 'Computer Science & Engineering', 4, 'M', 6361389410, 'WhatsApp Image 2020-03-26 at 9.31.12 PM.jpeg', '25f9e794323b453885f5181f1b624d0b'),
(27, 'Md Yaseen', 'Ahmed', '2001-04-23', '1BM19CS404', 'yaseenmd.cs19@bmsce.ac.in', 'Computer Science & Engineering', 4, 'M', 9108735020, 'md_yaseen.jpeg', '25f9e794323b453885f5181f1b624d0b'),
(30, 'Md', 'Yaseen', '1999-03-12', '1BM19CS400', 'yaseenmd.cs19@bmsce.ac.in', 'Computer Science & Engineering', 4, 'M', 9108735020, 'yaseen.jpeg', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `sub_reg`
--

CREATE TABLE `sub_reg` (
  `usn` varchar(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_reg`
--

INSERT INTO `sub_reg` (`usn`, `sub_name`, `sub_code`, `credits`) VALUES
('1BM19CS404', 'Linear Algerba', '19MA4BSLIA', 4),
('1BM19CS404', 'TFCS', '19CS4PCTFC', 4),
('1BM19CS404', 'DBMS', '19CS4PCDBM', 4),
('1BM19CS404', 'ADA', '19CS4PCADA', 4),
('1BM19CS404', 'PW-2', '19CS4PCPW2', 2),
('1BM19CS401', 'Linear Algerba', '19MA4BSLIA', 4),
('1BM19CS401', 'TFCS', '19CS4PCTFC', 4),
('1BM19CS401', 'DBMS', '19CS4PCDBM', 4);

--
-- Indexes for dumped tables
--
--
-- Table structure for table `examform`
--

CREATE TABLE `examform` (
  `exam_year` varchar(10) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mother_name` varchar(20) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_num` varchar(15) DEFAULT NULL,
  `adrress` varchar(200) DEFAULT NULL,
  `caste` varchar(10) DEFAULT NULL,
  `exam_name` varchar(30) DEFAULT NULL,
  `seat_num` varchar(10) DEFAULT NULL,
  `month_year` varchar(20) DEFAULT NULL,
  `college` varchar(40) DEFAULT NULL,
  `board` varchar(10) DEFAULT NULL,
  `result` varchar(5) DEFAULT NULL,
  `course` varchar(5) DEFAULT NULL,
  `sel_year` varchar(20) DEFAULT NULL,
  `sem` varchar(5) DEFAULT NULL,
  `sub` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examform`
--

INSERT INTO `examform` (`exam_year`, `fname`, `mname`, `lname`, `mother_name`, `dob`, `gender`, `email`, `phone_num`, `adrress`, `caste`, `exam_name`, `seat_num`, `month_year`, `college`, `board`, `result`, `course`, `sel_year`, `sem`, `sub`) VALUES
('2022', 'Lucky', 'S', 'Panchal', 'Kalpana', '2001-11-15', 'option2', 'shrikantpanchal0001@gmai.com', '8308255309', 'shiv parvati nagar , nanded', 'option7', 'Summer Examination', 'ZI1489', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '1st Year', 'I', ''),
('2022', 'Balaji', 'Ramesh', 'Chavan', 'Mirabai', '2001-12-12', 'option2', 'balaji@gmail.com', '7775919225', 'gurunagar Nanded', 'option9', 'Summer Examination', 'ZI1489', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '1st Year', 'I', ''),
('2022', 'Balaji', 'Ramesh', 'Chavan', 'Mirabai', '2001-12-12', 'option2', 'balaji@gmail.com', '7775919225', 'gurunagar Nanded', 'option9', 'Summer Examination', 'ZI1489', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '1st Year', 'I', ''),
('2022', 'Balaji', 'Ramesh', 'Chavan', 'Mirabai', '2001-12-12', 'option2', 'balaji@gmail.com', '7775919225', 'gurunagar Nanded', 'option9', 'Summer Examination', 'ZI1489', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '1st Year', 'I', ''),
('2022', 'Balaji', 'Ramesh', 'Chavan', 'Mirabai', '2001-12-12', 'option2', 'balaji@gmail.com', '7775919225', 'gurunagar Nanded', 'option9', 'Summer Examination', 'ZI1489', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '1st Year', 'I', ''),
('2022', 'Balaji', 'Ramesh', 'Chavan', 'Mirabai', '2001-12-12', 'option2', 'balaji@gmail.com', '7775919225', 'gurunagar Nanded', 'option9', 'Summer Examination', 'ZI1489', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '1st Year', 'I', ''),
('2022', 'Balaji', 'Ramesh', 'Chavan', 'Mirabai', '2001-12-12', 'option2', 'balaji@gmail.com', '7775919225', 'gurunagar Nanded', 'option9', 'Summer Examination', 'ZI1489', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '1st Year', 'I', ''),
('2022', 'Balaji', 'Ramesh', 'Chavan', 'Mirabai', '2001-12-23', 'option2', 'balaji@gmail.com', '1234567890', 'asdfghkhfgfdertyv cfghjkjytrdfghjk,m', 'option9', 'Summer Examination', 'ZI1489', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '1st Year', 'I', ''),
('2022', 'Balaji', 'Ramesh', 'Chavan', 'Mirabai', '2001-12-23', 'option2', 'balaji@gmail.com', '1234567890', 'asdfghkhfgfdertyv cfghjkjytrdfghjk,m', 'option9', 'Summer Examination', 'ZI1489', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '1st Year', 'I', ''),
('tyr', 'ry56', 'fgr', 'fgr', 'gyer', '2022-05-19', 'option3', 'balaji@gmail.com', '132456787', 'safsdghjuku', 'option6', 'Summer Examination', 'csdf', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'FAIL', 'BCA', '1st Year', 'I', ''),
('tyr', 'ry56', 'fgr', 'fgr', 'gyer', '2022-05-19', 'option3', 'balaji@gmail.com', '132456787', 'safsdghjuku', 'option6', 'Summer Examination', 'csdf', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'FAIL', 'BCA', '1st Year', 'I', ''),
('2022', 'b', 'Ramesh', 'c', 'Mirabai', '4522-03-12', 'option2', 'xyz789@gmail.com', '1234567', 'asdm,oiugf', 'option4', 'Winter Examination', 'ZI1489', '2022-11', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '1st Year', 'I', '<script>document.writeln(sub1);</script>'),
('2022', 'b', 'Ramesh', 'c', 'Mirabai', '4522-03-12', 'option2', 'xyz789@gmail.com', '1234567', 'asdm,oiugf', 'option4', 'Winter Examination', 'ZI1489', '2022-11', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '1st Year', 'I', '<script>document.writeln(sub1);</script>'),
('2022', 'uhjikopl', 'dftghjklrtyui', 'ghjk', 'tyu', '5777-09-08', 'option3', 'balaji@gmail.com', '4578898876', 'dnfvgbhnjmiko,pl.;[/vb7n8m9,kltbnm,.l;6ghji;', 'option9', 'Summer Examination', 'ZI1489', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'FAIL', 'BCA', '1st Year', 'I', ''),
('2022', 'uhjikopl', 'dftghjklrtyui', 'ghjk', 'tyu', '5777-09-08', 'option3', 'balaji@gmail.com', '4578898876', 'dnfvgbhnjmiko,pl.;[/vb7n8m9,kltbnm,.l;6ghji;', 'option9', 'Summer Examination', 'ZI1489', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'FAIL', 'BCA', '1st Year', 'I', ''),
('2022', 'Balaji', 'Ramesh', 'Chavan', 'Mirabai', '2022-06-01', 'option2', 'balaji@gmail.com', '3432551154', 'dgfdh', 'option9', 'Winter Examination', 'ZI1489', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '1st Year', 'I', ''),
('2022', 'Balaji', 'Ramesh', 'Chavan', 'Mirabai', '2022-06-01', 'option2', 'balaji@gmail.com', '3432551154', 'dgfdh', 'option9', 'Winter Examination', 'ZI1489', '2022-06', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '1st Year', 'I', ''),
('2022', 'rohan', 'dsfa', 'thorat', 'mahiti nahi', '2022-06-15', 'option2', 'xyz789@gmail.com', '2432454522', 'ghar', 'option3', 'Winter Examination', 'ZI1489', '2022-05', 'MGM College of CS and IT', 'SRTMUN', 'FAIL', 'BCA', '1st Year', 'I', ''),
('2022', 'rohan', 'dsfa', 'thorat', 'mahiti nahi', '2022-06-15', 'option2', 'xyz789@gmail.com', '2432454522', 'ghar', 'option3', 'Winter Examination', 'ZI1489', '2022-05', 'MGM College of CS and IT', 'SRTMUN', 'FAIL', 'BCA', '1st Year', 'I', ''),
('2022', 'rohan', 'Vijaykumar', 'thorat', 'name', '2022-05-11', 'option2', 'xyz789@gmail.com', '2123456765', 'mahiti nahi', 'option3', 'Winter Examination', 'ZI1489', '2022-05', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '2nd Year', 'IV', ''),
('2022', 'rohan', 'Vijaykumar', 'thorat', 'name', '2022-05-11', 'option2', 'xyz789@gmail.com', '2123456765', 'mahiti nahi', 'option3', 'Winter Examination', 'ZI1489', '2022-05', 'MGM College of CS and IT', 'SRTMUN', 'PASS', 'BCA', '2nd Year', 'IV', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Indexes for table `add_fst`
--
ALTER TABLE `add_fst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s1`
--
ALTER TABLE `add_s1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s2`
--
ALTER TABLE `add_s2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s3`
--
ALTER TABLE `add_s3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s4`
--
ALTER TABLE `add_s4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s5`
--
ALTER TABLE `add_s5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s6`
--
ALTER TABLE `add_s6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s7`
--
ALTER TABLE `add_s7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s8`
--
ALTER TABLE `add_s8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fst_reg`
--
ALTER TABLE `fst_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_fst`
--
ALTER TABLE `add_fst`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_s1`
--
ALTER TABLE `add_s1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `add_s2`
--
ALTER TABLE `add_s2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `add_s3`
--
ALTER TABLE `add_s3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `add_s4`
--
ALTER TABLE `add_s4`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `add_s5`
--
ALTER TABLE `add_s5`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_s6`
--
ALTER TABLE `add_s6`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_s7`
--
ALTER TABLE `add_s7`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_s8`
--
ALTER TABLE `add_s8`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fst_reg`
--
ALTER TABLE `fst_reg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
