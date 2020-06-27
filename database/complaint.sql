-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 12:52 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `complaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_phone` varchar(11) NOT NULL,
  `admin_priority` varchar(5) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_name` (`admin_name`),
  UNIQUE KEY `admin_phone` (`admin_phone`),
  UNIQUE KEY `admin_email` (`admin_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_email`, `admin_phone`, `admin_priority`) VALUES
(1, 'MD. Asiful Hoque Prodhan', '1234', 'asif@yahoo.com', '01777116666', '1'),
(2, 'Tanjilal Hossain Mugdho', '1234', 'mugdho@yahoo.com', '01777115555', '0'),
(3, 'Toufiq Ahmed ', '1234', 'toufiq@yahoo.com', '01777114444', '0'),
(4, 'Nouf Awal ', '1234', 'nouf@yahoo.com', '01777113333', '0');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `complain_id` int(11) NOT NULL AUTO_INCREMENT,
  `problem_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `thana_id` int(11) NOT NULL,
  `memarea_id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `complain_des` varchar(500) NOT NULL,
  `complain_video` varchar(500) NOT NULL,
  `complain_status` varchar(15) NOT NULL,
  `current_date` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`complain_id`),
  KEY `probcat_id` (`problem_id`),
  KEY `division_id` (`division_id`),
  KEY `district_id` (`district_id`),
  KEY `thana_id` (`thana_id`),
  KEY `user_id` (`user_id`),
  KEY `memarea_id` (`memarea_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`complain_id`, `problem_id`, `division_id`, `district_id`, `thana_id`, `memarea_id`, `location`, `complain_des`, `complain_video`, `complain_status`, `current_date`, `user_id`) VALUES
(1, 10, 1, 1, 1, 1, 'Niketan Society, Gulshan-1, Dhaka', 'Roads of Niketan Society are broken. As a result, there has been an alarming rise in road accidents here. Please take necessary steps as soon as possible.', 'https://www.youtube.com/watch?v=RWnFowWtT78', 'Public', '2017-05-03', 2),
(2, 18, 1, 1, 1, 1, 'Kalabagan, Dhanmandi, Dhaka', 'There are serious power problems on Kalabagan area of Dhanmandi. Please take necessary steps to solve this issue.', 'https://www.youtube.com/watch?v=RWnFowWtT78', 'Private', '2017-05-03', 2),
(3, 21, 7, 2, 3, 1, 'Dhap, Rangpur', 'There are serious gas problems on Dhap, Rangpur. Please take necessary steps to solve this issue.', 'https://www.youtube.com/watch?v=RWnFowWtT78', 'Private', '2017-05-03', 1),
(4, 11, 1, 3, 1, 2, 'Dhap, Rangpur', 'There are serious water supply problems on Dhap, Rangpur. Please take necessary steps to solve this issue.', 'https://www.youtube.com/watch?v=RWnFowWtT78', 'Private', '2017-05-03', 1),
(5, 13, 2, 3, 4, 1, 'Eid Ghah Road, Khulna', 'I have been forced to pay Bribe in Passport Office of Khulna. Please take necessary measures as soon as possible.', 'https://www.youtube.com/watch?v=RWnFowWtT78', 'Public', '2017-05-03', 6),
(6, 6, 1, 2, 2, 6, 'Jatrabari, Dhaka', 'My neighbour has decided to give child marriage of his daughter who is only 13 years old. Her name is Salma. Her address is Khan Villa, House No-15, Road No-5, Jatrabari, Dhaka. Please take necessary steps.', 'https://www.youtube.com/watch?v=RWnFowWtT78', 'Public', '2017-05-03', 4),
(7, 5, 1, 1, 2, 1, 'House No- 17, Road No-10, Khilgaon,Dhaka', 'I am teased by some groups of boys of this area every day. Please take necessary measures to solve this issue.', 'https://www.youtube.com/watch?v=RWnFowWtT78', 'Public', '2017-05-03', 5),
(8, 36, 1, 2, 2, 1, 'Tejgaon Industrial Area, Dhaka', 'I have traveled by a bus ', 'https://www.youtube.com/watch?v=RWnFowWtT78', 'Private', '2017-05-03', 3),
(9, 36, 1, 5, 1, 3, 'Niketan Society, Gulshan-1, Dhaka', 'I have traveled by a bus "Akik Poribahan" which is unlicensed Vehicle. Even the bus driver has no valid driving licence. Please take quick measures to solve this issue.', 'https://www.youtube.com/watch?v=RWnFowWtT78', 'Public', '2017-05-03', 2),
(10, 5, 1, 1, 1, 5, 'gulshan, dhaka', 'demo', 'https://www.youtube.com/watch?v=RWnFowWtT78', 'Private', '2017-05-04', 2),
(11, 3, 1, 2, 7, 1, 'Dhap, Rangpur', 'demo', 'https://www.youtube.com/watch?v=RWnFowWtT78', 'Public', '2017-05-10', 2),
(12, 1, 1, 4, 1, 4, 'Dhap, Rangpur', 'demo', 'youtube.com/bsasbhajbsjas', 'Private', '2017-05-10', 2),
(13, 10, 1, 4, 8, 1, 'Dhap, Rangpur', 'demo', 'youtube.com/bsasbhajbsjas', 'Public', '2017-05-10', 2),
(14, 1, 1, 1, 1, 1, 'dhaka', 'demo', 'demo', 'Public', '2017-05-16', 2),
(18, 1, 1, 1, 1, 1, 'Niketan Society, Gulshan-1, Dhaka', 'Roads of Niketan Society are broken. As a result, there has been an alarming rise in road accidents here. Please take necessary steps as soon as possible.', 'demo', 'Public', '2017-11-08', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `contact_msg` varchar(500) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_msg`) VALUES
(1, 'asif', 'asif@yahoo.com', '01777116666', 'Can I use this website from my mobile?'),
(2, 'asif', 'asif@yahoo.com', '01777116666', 'Can I use this website from my mobile?'),
(3, 'asif', 'asif@yahoo.com', '01777116666', 'Can I use this website from my mobile?'),
(4, 'asif', 'asif@yahoo.com', '01777116666', 'Can I use this website from my mobile?'),
(5, 'asifaaaa', 'asifaaa@yahoo.com', '01777111111', 'Can I use this website without giving my mobile number?'),
(6, 'asif', 'asifaaa@yahoo.com', '1777116666', 'Can I use this website from my mobile?'),
(7, 'asifqqqq', 'asifqqq@yahoo.com', '01777115555', 'Who runs this website?'),
(8, 'asifqqqq', 'asifqqq@yahoo.com', '01777115555', 'Who runs this website?'),
(9, 'asifqqqq', 'asifqqq@yahoo.com', '01777115555', 'Who runs this website?'),
(10, 'asifqqqq', 'asifqqq@yahoo.com', '01777115555', 'Who runs this website?'),
(11, 'aaaa', 'aaaa@yahoo.com', '01777112222', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(100) NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`dept_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_name`, `admin_id`) VALUES
(1, 'Police', 1),
(2, 'Roads & Highways Department', 1),
(3, 'Water Supply & Sewerage Authority (WASA)', 1),
(4, 'Ministry of Civil Aviation and Tourism', 1),
(5, 'Anti-Corruption Commission', 1),
(6, 'Ministry of Health', 1),
(7, 'Bangladesh Bank', 1),
(8, 'Ministry of Information', 1),
(9, 'Ministry of Labor and Employment', 1),
(10, 'Power Development Board (PDB)', 1),
(11, 'Department of Narcotics Control', 1),
(12, 'Ministry of Land', 1),
(13, 'Ministry of Power, Energy and Mineral Resources', 1),
(14, 'Directorate of National Consumer Rights Protection', 1),
(15, 'National Board of Revenue (NBR)', 1),
(16, 'Customs, Excise & VAT Commissionerate', 1),
(17, 'Bangladesh Telecommunications Company Limited (BTCL)', 1),
(18, 'Ministry of Food', 1),
(19, 'Ministry of Environment & Forests', 1),
(20, 'Ministry of Fisheries And Livestock', 1),
(21, 'Ministry of Railways', 1),
(22, 'Bangladesh Inland Water Transport Authority', 1),
(23, 'Department of Immigration and Passports', 1),
(24, 'Ministry of Education', 1),
(25, 'Ministry of Chittagong Hill Tracts Affairs', 1),
(26, 'Ministry of Agriculture', 1),
(27, 'Ministry of Local Government and Rural Development and Co-operative', 1),
(28, 'Bangladesh Road Transport Authority (BRTA)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `deptemp`
--

CREATE TABLE IF NOT EXISTS `deptemp` (
  `deptemp_id` int(11) NOT NULL AUTO_INCREMENT,
  `deptemp_name` varchar(50) NOT NULL,
  `deptemp_address` varchar(100) NOT NULL,
  `deptemp_email` varchar(50) NOT NULL,
  `deptemp_phone` varchar(11) NOT NULL,
  `deptemp_des` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `thana_id` int(11) NOT NULL,
  `deptemp_username` varchar(50) NOT NULL,
  `deptemp_password` varchar(50) NOT NULL,
  PRIMARY KEY (`deptemp_id`),
  UNIQUE KEY `deptemp_phone` (`deptemp_phone`),
  UNIQUE KEY `deptemp_email` (`deptemp_email`),
  UNIQUE KEY `deptemp_username` (`deptemp_username`),
  KEY `deptcat_id` (`dept_id`),
  KEY `division_id` (`division_id`),
  KEY `district_id` (`district_id`),
  KEY `thana_id` (`thana_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `deptemp`
--

INSERT INTO `deptemp` (`deptemp_id`, `deptemp_name`, `deptemp_address`, `deptemp_email`, `deptemp_phone`, `deptemp_des`, `dept_id`, `division_id`, `district_id`, `thana_id`, `deptemp_username`, `deptemp_password`) VALUES
(1, 'Abul Kalam', 'WAPDA Bhaban (1st Floor), Motijheel, Dhaka-1000', 'member.admin@bpdb.gov.bd', '9564669 ', 'Member', 10, 1, 1, 1, 'kalam', '1234'),
(2, 'Mr. Subrata Kumar Debnath', 'Gulshan , Dhaka, Bangladesh', 'subrata@yahoo.com', '01777116622', 'Sub-inspector', 1, 1, 1, 1, 'subrata', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `depthead`
--

CREATE TABLE IF NOT EXISTS `depthead` (
  `depthead_id` int(11) NOT NULL AUTO_INCREMENT,
  `depthead_name` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `depthead_address` varchar(500) NOT NULL,
  `depthead_email` varchar(50) NOT NULL,
  `depthead_phone` varchar(11) NOT NULL,
  `depthead_username` varchar(50) NOT NULL,
  `depthead_password` varchar(50) NOT NULL,
  PRIMARY KEY (`depthead_id`),
  UNIQUE KEY `depthead_phone` (`depthead_phone`),
  UNIQUE KEY `depthead_email` (`depthead_email`),
  UNIQUE KEY `depthead_username` (`depthead_username`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `depthead`
--

INSERT INTO `depthead` (`depthead_id`, `depthead_name`, `dept_id`, `depthead_address`, `depthead_email`, `depthead_phone`, `depthead_username`, `depthead_password`) VALUES
(1, 'Md. Moshiar Rahman', 28, 'Tejgaon, Dhaka', 'info@brta.gov.bd', '01966622000', 'rahman', '1234'),
(2, 'Khaled Mahmood', 10, 'WAPDA Bhaban (1st Floor), Motijheel, Dhaka-1000', 'chairman@bpdb.gov.bd', '9562154', 'Khaled', '1234'),
(3, 'Mr. Sahidul Haque', 1, ' Minto Rd, Dhaka 1000, Bangladesh', 'sahidul@yahoo.com', '01777234980', 'sahidul', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`district_id`),
  UNIQUE KEY `district_name` (`district_name`),
  KEY `admin_id` (`admin_id`),
  KEY `division_id` (`division_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `division_id`, `district_name`, `admin_id`) VALUES
(1, 1, 'Dhaka', 1),
(2, 1, 'Faridpur', 1),
(3, 1, 'Jamalpur', 1),
(4, 7, 'Rangpur', 1),
(5, 7, 'Dinajpur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `division_id` int(11) NOT NULL AUTO_INCREMENT,
  `division_name` varchar(50) NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`division_id`),
  UNIQUE KEY `division_name` (`division_name`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`division_id`, `division_name`, `admin_id`) VALUES
(1, 'Dhaka', 1),
(2, 'Khulna', 1),
(3, 'Barishal', 1),
(4, 'Chittagong', 1),
(5, 'Rajshahi', 1),
(6, 'Sylhet', 1),
(7, 'Rangpur', 1),
(8, 'Mymensingh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `memarea`
--

CREATE TABLE IF NOT EXISTS `memarea` (
  `memarea_id` int(11) NOT NULL AUTO_INCREMENT,
  `memarea_name` varchar(50) NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`memarea_id`),
  UNIQUE KEY `memarea_name` (`memarea_name`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `memarea`
--

INSERT INTO `memarea` (`memarea_id`, `memarea_name`, `admin_id`) VALUES
(1, 'Dhaka-1', 1),
(2, 'Dhaka-2', 1),
(3, 'Dhaka-3', 1),
(4, 'Dhaka-4', 1),
(5, 'Dhaka-5', 1),
(6, 'Dhaka-6', 1),
(7, 'Rangpur-1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(50) NOT NULL,
  `memarea_id` int(11) NOT NULL,
  `member_email` varchar(50) NOT NULL,
  `member_phone` varchar(11) NOT NULL,
  `member_username` varchar(50) NOT NULL,
  `member_password` varchar(50) NOT NULL,
  PRIMARY KEY (`member_id`),
  UNIQUE KEY `member_phone` (`member_phone`),
  UNIQUE KEY `member_email` (`member_email`),
  UNIQUE KEY `member_username` (`member_username`),
  KEY `memarea_id` (`memarea_id`),
  KEY `memarea_id_2` (`memarea_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `memarea_id`, `member_email`, `member_phone`, `member_username`, `member_password`) VALUES
(1, 'Salma Islam', 1, 'salma@yahoo.com', '01777112222', 'salma', '1234'),
(2, 'Advocate Qamrul Islam', 2, 'qamrul@yahoo.com', '01777112233', 'qamrul', '1234'),
(3, 'Nasrul Hamid', 3, 'hamid@yahoo.com', '01777112244', 'hamid', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE IF NOT EXISTS `problem` (
  `problem_id` int(11) NOT NULL AUTO_INCREMENT,
  `problem_name` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`problem_id`),
  UNIQUE KEY `probcat_name` (`problem_name`),
  KEY `admin_id` (`admin_id`),
  KEY `dept_id` (`dept_id`),
  KEY `dept_id_2` (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`problem_id`, `problem_name`, `dept_id`, `admin_id`) VALUES
(1, 'Terrorism', 1, 1),
(2, 'Extremism', 1, 1),
(3, 'Traffic Accident', 1, 1),
(4, 'Cyber Crime', 1, 1),
(5, 'Eve Teasing', 1, 1),
(6, 'Child Marriage', 1, 1),
(7, 'Hijack', 1, 1),
(8, 'Religious Harassment', 1, 1),
(9, 'Sexual Assault', 1, 1),
(10, 'Unusable Roads', 2, 1),
(11, 'Water Supply Problems', 3, 1),
(12, 'Tourism Related Problems', 4, 1),
(13, 'Corruption', 5, 1),
(14, 'Hospital Service Related Problems', 6, 1),
(15, 'Banking Related Problems', 7, 1),
(16, 'Deprivation of Information Right', 8, 1),
(17, 'Child Labor', 9, 1),
(18, 'Electricity/Power Problems', 10, 1),
(19, 'Narcotics/Drug Dealing', 11, 1),
(20, 'Land-related complications', 12, 1),
(21, 'Gas Supply Problems', 13, 1),
(22, 'Deprivation of Consumer Right', 14, 1),
(23, 'Tax Evasion', 15, 1),
(24, 'VAT Evasion', 16, 1),
(25, 'Telecommunications Related Problems', 17, 1),
(26, 'Food Adulteration', 18, 1),
(27, 'Bonfire', 19, 1),
(28, 'Illegal, unreported and unregulated fishing', 20, 1),
(29, 'Broken Railway Line', 21, 1),
(30, 'Over Crowded Launch', 22, 1),
(31, 'Passport Related Problems', 23, 1),
(32, 'Leaked Questions', 24, 1),
(33, 'Displacement and Rehabilitation', 25, 1),
(34, 'Agriculture Related Problems', 26, 1),
(35, 'Rural and Urban Problems', 27, 1),
(36, 'Unlicensed Vehicle', 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE IF NOT EXISTS `progress` (
  `progress_id` int(11) NOT NULL AUTO_INCREMENT,
  `complain_id` int(11) NOT NULL,
  `complaint_num` varchar(500) NOT NULL,
  `progress_status` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`progress_id`),
  KEY `complain_id` (`complain_id`),
  KEY `complaint_num` (`complaint_num`(255)),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`progress_id`, `complain_id`, `complaint_num`, `progress_status`, `user_id`) VALUES
(1, 1, '201705032030191', 'Complaint is received', 2),
(2, 2, '201705032033412', 'Complaint is sent to concerned authority for investigation', 2),
(3, 3, '201705032037553', 'Complaint is being solved by concerned authority', 1),
(4, 4, '201705032039224', 'Complaint is solved', 1),
(5, 5, '201705032054065', 'Complaint is solved', 6),
(6, 6, '201705032101226', 'Complaint is rejected', 4),
(7, 7, '201705032104567', 'Complaint is sent to concerned authority for investigation', 5),
(8, 8, '201705032111278', 'Complaint is received', 3),
(9, 9, '201705032243399', 'Complaint is being solved by concerned authority', 2),
(10, 10, '2017050416095510', 'Complaint is sent to concerned authority for investigation', 2),
(11, 11, '2017051015285011', 'Complaint is solved', 2),
(12, 12, '2017051016230112', 'Complaint is being solved by concerned authority', 2),
(13, 13, '2017051017012913', 'Complaint is rejected', 2),
(14, 14, '2017051613091814', 'Complaint is received', 2),
(15, 18, '2017110819431118', 'Complaint is received', 2);

-- --------------------------------------------------------

--
-- Table structure for table `thana`
--

CREATE TABLE IF NOT EXISTS `thana` (
  `thana_id` int(11) NOT NULL AUTO_INCREMENT,
  `district_id` int(11) NOT NULL,
  `thana_name` varchar(50) NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`thana_id`),
  UNIQUE KEY `thana_name` (`thana_name`),
  KEY `admin_id` (`admin_id`),
  KEY `district_id` (`district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `thana`
--

INSERT INTO `thana` (`thana_id`, `district_id`, `thana_name`, `admin_id`) VALUES
(1, 1, 'Savar', 1),
(2, 2, 'Demra', 1),
(3, 3, 'Dhanmondi', 4),
(4, 4, 'Rangpur Sadar', 2),
(7, 2, 'Uttara', 1),
(8, 2, 'Mirpur', 1),
(9, 1, 'Tejgaon', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `verification_status` varchar(5) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_phone` (`user_phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_email`, `user_phone`, `verification_status`) VALUES
(1, 'Md. Rahim Chowdhury', '1234', 'rahim@yahoo.com', '01777111222', '0'),
(2, 'Md. Karim Rahman', '1234', 'karim@yahoo.com', '01777111333', '1'),
(3, 'Shagor Hasan', '123456', 'shagor@yahoo.com', '01777111444', '0'),
(4, 'Mishal Islam', '123456', 'mishal@yahoo.com', '01777111555', '1'),
(5, 'Smita Nitol', '123456', 'nitol@yahoo.com', '01777111666', '1'),
(6, 'Al Noman', '123456', 'noman@yahoo.com', '01777111777', '1'),
(7, 'mahi', 'wwwewe', 'mahi@yahoo.com', '01777123654', '1'),
(8, 'abcd', 'asasas', 'abcd@gmail.com', '01777166215', '0'),
(10, 'mahin', 'q222w2', 'mahi@yahoo.comn', '01777123688', '1'),
(11, 'mahina', '12121', 'mahina@yahoo.com', '01777123611', '1'),
(12, 'ovi', '1234', 'ovi@yahoo.com', '01682324328', '0'),
(13, 'ww', 'ww', 'w@s.com', '01712843022', '0'),
(14, 'abcdef', '123456', 'abcdef@gmail.com', '01777123627', '0'),
(15, 'xyz', '123456', 'xyz@gmail.com', '01777123609', '0'),
(16, 'wqwqqw', '1234', 'wqwqwqw@asa.com', '01777123626', '0'),
(17, 'ppp', '1234', 'ppp@gmail.com', '01777123238', '0'),
(18, 'aab', '123456', 'aab@gmall.com', '01682324311', '0'),
(19, 'abcdefg', '123456', 'abcdefg@gmail.com', '01777135340', '0'),
(20, 'abcdefgh', '123456', 'abcdefgh@gmail.com', '01777124512', '0'),
(21, 'abcdd', '1234', 'abcdd@gmail.com', '01777123109', '0'),
(23, 'asif', '1234', 'asif@yahoo.com', '01777116666', '0'),
(24, 'mugdho', '1234', 'mugdho@gmail.com', '01682324327', '0'),
(25, 'mamun', '1234', 'mamun@gmail.com', '01682324329', '0'),
(26, 'Waishy Hojor', '1234', 'hojor@gmail.com', '01676656579', '0'),
(27, 'Smita Batpar', '1234', 'smitabatpar@gmail.com', '01685250569', '0'),
(41, 'nouf', '1234', 'nouf@gmail.com', '01789681720', '0'),
(50, 'dwbdqd', '1234', 'dwbdqd@gmail.com', '01777112912', '0'),
(51, 'adminaaa', '1234', 'adminaaa@gmail.com', '01675963682', '1'),
(53, 'asiful', '1234', 'asiful@gmail.com', '01582324327', '0'),
(54, 'mr.asif', '1234', 'hoqf@yahoo.com', '01742528511', '0'),
(55, 'asifaaaa', '1234', 'asifaaaaa@yahoo.com', '01777116611', '0'),
(56, 'mahiya', '1234', 'mahiya@yahoo.com', '01635700819', '0'),
(57, 'sigma', '1234', 'sigma@yahoo.com', '01777119291', '0'),
(58, 'mnb', '1234', 'mnb@yahoo.com', '01742528512', '0'),
(59, 'mapi', '1234', 'mapi@yahoo.com', '01777118613', '0'),
(60, 'maui', '1234', 'maui@gmail.com', '01777112121', '0'),
(61, 'asifqqqqqqqq', '1234', 'asif@yahooaaaa.com', '01777111245', '0'),
(62, 'aaa', '1111', 'asif@yahooaaaaa.com', '01777112113', '0'),
(64, 'sasaa', '2121', 'asif@yahotrta.com', '01777178113', '0'),
(65, 'asas', '1234', 'md.aqaaawq@gmail.com', '01777921833', '0'),
(66, 'asmasmassa', '1234', 'md.asif@gmail.com', '01777116111', '0'),
(67, 'abcdasasq', '1234', 'md.aqwq@gmail.com', '01777121221', '0'),
(68, 'wqwq', '1234', 'wqwwq21qw@asa.com', '017772142466', '0'),
(69, 'asifwqwqwqw', '1234', 'qwqwq@qw.com', '017771313131', '0'),
(70, 'asifasaaassasasa', '1234', 'md.asif22wn@gmail.com', '0177133131331', '0'),
(71, 'sasasasasa', '1234', 'sasas@asas.com', '017771162121', '0'),
(72, 'asif121', '1234', 'asi2212121f@yahoo.com', '0177711621212', '0'),
(73, 'asaas', '1234', 'asasa11asasif@yahoo.com', '017771162133', '0'),
(74, 'abcdasasasa', '1234', 'md.asifsasasn@gmail.com', '01777112019', '0'),
(75, 'asifqwqwqq', '1234', 'md.asiful2odhan@gmail.com', '017771101201', '0'),
(76, 'hihw1i9u1', '1234', '2102u1@sbaa.com', '8201820181', '0'),
(77, 'asaijasa', '1234', 'asaijasa@gmail.com', '01777110192', '0'),
(78, 'saasasasas', '1234', 'saasasasas@ksaos.com', '201201281080', '0'),
(79, 'mqqqqqqahi@sjasasa.com', '212111', '212u1@sbaa.com', '01777121212', '0'),
(80, 'asifqqqqqqqqqqqqqqq', '1234', 'asifqqqqqqqqqqqqqqq@gmail.com', '017771179721', '0'),
(81, 'asasa', '1234', 'adas@saasa.com', '017771166662134', '0'),
(82, 'boss', '21212', 'boss@boss.com', '01777921811', '0'),
(83, 'abc', '12345', 'abc@abc.com', '01781218612', '0'),
(84, 'defef', '121212', 'dede@sds.com', '121921298192121', '0'),
(85, 'mr', '211', 'mr@mr.com', '01777721812', '0'),
(86, 'spqwpq', '1212', 'spqwpq@sas.com', '01771121121212', '0'),
(87, 'qsqbwsa', 'wqwqw', 'asoasoqjsoaj@assa.comif@yahoo.com', '01721211192', '0'),
(88, 'hazardsif', '1234', 'hazardif@yahoo.com', '01728182312', '0');

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE IF NOT EXISTS `verification` (
  `verification_id` int(11) NOT NULL AUTO_INCREMENT,
  `verification_code` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`verification_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`verification_id`, `verification_code`, `user_id`) VALUES
(1, '427090', 14),
(2, '445767', 15),
(3, '751818', 16),
(4, '982778', 17),
(5, '290118', 18),
(6, '341397', 19),
(7, '489080', 20),
(8, '914498', 21),
(9, '885028', 23),
(10, '241478', 24),
(11, '259240', 25),
(12, '262798', 26),
(13, '278229', 27),
(14, '012864', 1),
(15, '028348', 2),
(16, '038172', 3),
(17, '048261', 4),
(18, '059371', 5),
(19, '068274', 6),
(20, '071863', 7),
(21, '087281', 8),
(22, '108362', 10),
(23, '118363', 11),
(24, '127391', 12),
(25, '138291', 13),
(26, '415645', 41),
(27, '506687', 50),
(28, '514049', 51),
(29, '534506', 53),
(30, '549654', 54),
(31, '558519', 55),
(32, '564870', 56),
(33, '577754', 57),
(34, '581375', 58),
(35, '592035', 59),
(36, '605193', 60),
(37, '613438', 61),
(38, '621492', 62),
(39, '645808', 64),
(40, '654782', 65),
(41, '662020', 66),
(42, '675978', 67),
(43, '682029', 68),
(44, '693093', 69),
(45, '709996', 70),
(46, '716067', 71),
(47, '723214', 72),
(48, '734799', 73),
(49, '749213', 74),
(50, '753975', 75),
(51, '766294', 76),
(52, '772913', 77),
(53, '781063', 78),
(54, '799196', 79),
(55, '808847', 80),
(56, '813508', 81),
(57, '822051', 82),
(58, '832532', 83),
(59, '847937', 84),
(60, '859901', 85),
(61, '864694', 86),
(62, '873152', 87),
(63, '886781', 88);

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE IF NOT EXISTS `voting` (
  `voting_id` int(11) NOT NULL AUTO_INCREMENT,
  `complain_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`voting_id`),
  KEY `complain_id` (`complain_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`voting_id`, `complain_id`, `user_id`) VALUES
(1, 6, 13),
(3, 5, 2),
(4, 7, 2),
(5, 5, 23),
(6, 6, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `complain_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `division` (`division_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `complain_ibfk_2` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `complain_ibfk_3` FOREIGN KEY (`thana_id`) REFERENCES `thana` (`thana_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `complain_ibfk_4` FOREIGN KEY (`problem_id`) REFERENCES `problem` (`problem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `complain_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `complain_ibfk_6` FOREIGN KEY (`memarea_id`) REFERENCES `memarea` (`memarea_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dept`
--
ALTER TABLE `dept`
  ADD CONSTRAINT `dept_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `deptemp`
--
ALTER TABLE `deptemp`
  ADD CONSTRAINT `deptemp_ibfk_2` FOREIGN KEY (`division_id`) REFERENCES `division` (`division_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `deptemp_ibfk_5` FOREIGN KEY (`dept_id`) REFERENCES `dept` (`dept_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `deptemp_ibfk_6` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `deptemp_ibfk_7` FOREIGN KEY (`thana_id`) REFERENCES `thana` (`thana_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `depthead`
--
ALTER TABLE `depthead`
  ADD CONSTRAINT `depthead_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `dept` (`dept_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `division` (`division_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `district_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `division`
--
ALTER TABLE `division`
  ADD CONSTRAINT `division_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `memarea`
--
ALTER TABLE `memarea`
  ADD CONSTRAINT `memarea_ibfk_3` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`memarea_id`) REFERENCES `memarea` (`memarea_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `problem`
--
ALTER TABLE `problem`
  ADD CONSTRAINT `problem_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `problem_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `dept` (`dept_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `progress`
--
ALTER TABLE `progress`
  ADD CONSTRAINT `progress_ibfk_1` FOREIGN KEY (`complain_id`) REFERENCES `complain` (`complain_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `progress_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `thana`
--
ALTER TABLE `thana`
  ADD CONSTRAINT `thana_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `thana_ibfk_2` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `verification`
--
ALTER TABLE `verification`
  ADD CONSTRAINT `verification_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `voting`
--
ALTER TABLE `voting`
  ADD CONSTRAINT `voting_ibfk_1` FOREIGN KEY (`complain_id`) REFERENCES `complain` (`complain_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `voting_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
