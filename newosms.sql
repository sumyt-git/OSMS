-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2021 at 04:48 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newosms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

DROP TABLE IF EXISTS `adminlogin_tb`;
CREATE TABLE IF NOT EXISTS `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_password` varchar(60) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`a_login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Admin', 'Admin@osms.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assets_tb`
--

DROP TABLE IF EXISTS `assets_tb`;
CREATE TABLE IF NOT EXISTS `assets_tb` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(60) COLLATE utf8_bin NOT NULL,
  `pdop` date NOT NULL,
  `pava` int(11) NOT NULL,
  `ptotal` int(11) NOT NULL,
  `poriginalcost` int(11) NOT NULL,
  `psellingcost` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assets_tb`
--

INSERT INTO `assets_tb` (`pid`, `pname`, `pdop`, `pava`, `ptotal`, `poriginalcost`, `psellingcost`) VALUES
(1, 'dell', '2021-04-16', 10, 21, 210, 300);

-- --------------------------------------------------------

--
-- Table structure for table `assignwork_tb`
--

DROP TABLE IF EXISTS `assignwork_tb`;
CREATE TABLE IF NOT EXISTS `assignwork_tb` (
  `rno` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` int(11) NOT NULL,
  `request_info` text COLLATE utf8_bin NOT NULL,
  `request_desc` text COLLATE utf8_bin NOT NULL,
  `requester_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_add1` text COLLATE utf8_bin NOT NULL,
  `requester_add2` text COLLATE utf8_bin NOT NULL,
  `requester_city` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_state` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_mobile` bigint(11) NOT NULL,
  `assign_tech` varchar(60) COLLATE utf8_bin NOT NULL,
  `assign_date` date NOT NULL,
  PRIMARY KEY (`rno`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assignwork_tb`
--

INSERT INTO `assignwork_tb` (`rno`, `request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `assign_tech`, `assign_date`) VALUES
(4, 3, 'request demo', 'dont know its working or not', 'raju', '233', '222', 'K city', 'hjh', 1998, 'papupelu@gmail.com', 123123, 'hero hira laal', '2021-04-21'),
(3, 12, 'new request', 'testing', 'saaaaa', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'shsi', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, 'zoro', '2021-04-14'),
(5, 37, 'keyboard', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'www', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, 'champu ram', '2021-04-23'),
(6, 38, 'laptop screen', 'not working', 'tony strak', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'asohk', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, 'rohit', '2021-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

DROP TABLE IF EXISTS `customer_tb`;
CREATE TABLE IF NOT EXISTS `customer_tb` (
  `custid` int(11) NOT NULL AUTO_INCREMENT,
  `custname` varchar(60) COLLATE utf8_bin NOT NULL,
  `custadd` varchar(60) COLLATE utf8_bin NOT NULL,
  `cpname` varchar(60) COLLATE utf8_bin NOT NULL,
  `cpquantity` int(11) NOT NULL,
  `cpeach` int(11) NOT NULL,
  `cptotal` int(11) NOT NULL,
  `cpdate` date NOT NULL,
  PRIMARY KEY (`custid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`custid`, `custname`, `custadd`, `cpname`, `cpquantity`, `cpeach`, `cptotal`, `cpdate`) VALUES
(1, 'sumit', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'dell', 2, 300, 32423, '2021-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `requesterlogin_tb`
--

DROP TABLE IF EXISTS `requesterlogin_tb`;
CREATE TABLE IF NOT EXISTS `requesterlogin_tb` (
  `r_login_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_password` varchar(60) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`r_login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `requesterlogin_tb`
--

INSERT INTO `requesterlogin_tb` (`r_login_id`, `r_name`, `r_email`, `r_password`) VALUES
(2, 'user', 'user@gmail.com', 'user'),
(3, 'rohan', 'rohan@gmail.com', '2345'),
(4, 'Zohan', 'Zohan@gmail.com', '123'),
(5, 'sumit', 'sumit@gmail.com', '1234455'),
(6, 'chacha choudary', 'chacha@gmail.com', 'chacha');

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest_tb`
--

DROP TABLE IF EXISTS `submitrequest_tb`;
CREATE TABLE IF NOT EXISTS `submitrequest_tb` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_info` text COLLATE utf8_bin NOT NULL,
  `request_desc` text COLLATE utf8_bin NOT NULL,
  `requester_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_add1` text COLLATE utf8_bin NOT NULL,
  `requester_add2` text COLLATE utf8_bin NOT NULL,
  `requester_city` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_state` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_mobile` bigint(20) NOT NULL,
  `request_date` date NOT NULL,
  `pic` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `submitrequest_tb`
--

INSERT INTO `submitrequest_tb` (`request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `request_date`, `pic`) VALUES
(1, 'keyboard', 'its broken', 'asdsa', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'afs', 'West Delhi', 'Delhi', 110059, 'user@gmail.com', 8178065789, '2021-04-13', ''),
(3, 'request demo', 'dont know its working or not', 'raju', '233', '222', 'K city', 'hjh', 1998, 'papupelu@gmail.com', 123123, '2021-04-13', ''),
(12, 'new request', 'testing', 'saaaaa', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'shsi', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-13', ''),
(13, 'mouse', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'a', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-13', ''),
(14, 'mouse', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'a', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-13', ''),
(15, 'mouse', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'a', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-13', ''),
(16, 'mouse', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'a', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-13', ''),
(17, 'mouse', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'a', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-13', ''),
(18, 'mouse', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'a', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-13', ''),
(19, 'mouse', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'a', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-13', ''),
(20, 'mouse', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'a', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-13', ''),
(21, 'mouse', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'a', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-13', ''),
(22, 'mouse', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'a', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-13', ''),
(23, 'mouse', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'a', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-13', ''),
(24, 'keyboard', 'dont know its working or not', 'ramu kaka', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'sfdf', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-14', ''),
(25, 'keyboard', 'dont know its working or not', 'ramu kaka', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'sfdf', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-14', ''),
(26, 'keyboard', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'aaa', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-21', '../upload/'),
(27, 'keyboard', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'aaa', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-21', '../upload/'),
(28, 'new request', 'not working', 'ramu kaka', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'aaaa', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-28', '../upload/'),
(29, 'request demo', 'dont know its working or not', 'ramu kaka', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'dsfsf', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-14', '../upload/'),
(30, 'checking', 'is picture working or not', 'sumit chauhan', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'kaku', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-21', '../upload/'),
(31, 'keyboard', 'now working', 'kaalia', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'aaa', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-21', '../upload/20210314_113225.jpg'),
(32, 'request demo', 'dont know its working or not', 'saaaaa', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'aaa', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-21', '../upload/'),
(33, 'keyboard', 'its broken', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', '1111', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-21', '../upload/'),
(34, 'keyboard', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'sss', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-21', '../upload/'),
(35, 'request demo', 'not working', 'sumit chauhan', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'sss', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-22', '../upload/20210314_115049 (2).jpg'),
(36, '36', 'testing', 'asdsa', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', '1111', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-21', '../upload/deed0l2-be6b79de-6bda-450c-8708-94efa1531a23.jpg'),
(37, 'keyboard', 'dont know its working or not', 'raju', 'a1/197a madu vihar dwarka sector-3 near durga mata mandir', 'www', 'West Delhi', 'Delhi', 110059, 'SUMITCHAUAHN42015@GMAIL.COM', 8178065789, '2021-04-22', '../upload/20210314_114409.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `technician_tb`
--

DROP TABLE IF EXISTS `technician_tb`;
CREATE TABLE IF NOT EXISTS `technician_tb` (
  `empid` int(11) NOT NULL AUTO_INCREMENT,
  `empName` varchar(60) COLLATE utf8_bin NOT NULL,
  `empCity` varchar(60) COLLATE utf8_bin NOT NULL,
  `empMobile` bigint(11) NOT NULL,
  `empEmail` varchar(60) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `technician_tb`
--

INSERT INTO `technician_tb` (`empid`, `empName`, `empCity`, `empMobile`, `empEmail`) VALUES
(3, 'ramukaka', 'Delhi', 8178065799, 'ramu@GMAIL.COM');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
