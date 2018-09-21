-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 04:21 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waec`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(50) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Fname`, `Lname`, `username`, `Password`) VALUES
(1, 'Samuel', 'Aryeetey', 'sammyblack', 'P@ssw0rd1'),
(2, 'Akua', 'Djan', 'sistree', 'sistree@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `first_choice`
--

CREATE TABLE `first_choice` (
  `code` int(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `Choice_One` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fourth_choice`
--

CREATE TABLE `fourth_choice` (
  `code` int(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `Choice_four` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Action` varchar(50) NOT NULL,
  `Dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `Username`, `Action`, `Dates`) VALUES
(47, 'Samuel Aryeetey', 'User has Logged-in', '2018-05-13 19:57:22'),
(48, 'Samuel Aryeetey', 'User has Logged-in', '2018-05-13 22:13:35'),
(49, 'Samuel Aryeetey', 'User has Logged-in', '2018-05-14 12:11:57'),
(50, 'Samuel Aryeetey', 'User has Logged-in', '2018-05-14 16:16:25'),
(51, 'Akua Djan', 'User has Logged-in', '2018-05-14 20:22:33'),
(52, 'Samuel Aryeetey', 'User has Logged-in', '2018-05-15 07:22:07'),
(53, 'Samuel Aryeetey', 'User has Logged-out', '2018-05-15 07:22:37'),
(54, 'Samuel Aryeetey', 'User has Logged-in', '2018-05-15 09:36:28'),
(55, 'Samuel Aryeetey', 'User has Logged-in', '2018-05-21 20:54:55'),
(56, 'Akua Djan', 'User has Logged-in', '2018-05-22 13:42:42'),
(57, 'Samuel Aryeetey', 'User has Logged-in', '2018-05-22 14:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `prog_code` int(100) NOT NULL,
  `prog_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `region` varchar(100) NOT NULL,
  `sch_code` int(100) NOT NULL,
  `sch_name` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `ID` int(50) NOT NULL,
  `sch_code` int(50) NOT NULL,
  `sch_name` varchar(100) NOT NULL,
  `circuit` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`ID`, `sch_code`, `sch_name`, `circuit`, `Password`) VALUES
(1, 101399, 'St Andrews Basic School', '02', 'P@ssw0rd1'),
(2, 101352, 'Mataheko R/C School', '04', 'testpassword');

-- --------------------------------------------------------

--
-- Table structure for table `schoolselection_option1`
--

CREATE TABLE `schoolselection_option1` (
  `ID` int(11) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `District` varchar(50) NOT NULL,
  `School_Code` int(7) NOT NULL,
  `School_Name` varchar(225) NOT NULL,
  `Location` varchar(225) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Course_101` varchar(50) DEFAULT NULL,
  `Course_201` varchar(50) DEFAULT NULL,
  `Course_301` varchar(50) DEFAULT NULL,
  `Course_401` varchar(50) DEFAULT NULL,
  `Course_402` varchar(50) DEFAULT NULL,
  `Course_501` varchar(50) DEFAULT NULL,
  `Course_502` varchar(50) DEFAULT NULL,
  `No_Of_Programs` int(1) NOT NULL,
  `Status_Day` varchar(10) DEFAULT NULL,
  `Status_Boarding` varchar(10) DEFAULT NULL,
  `Status_Hostel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolselection_option1`
--

INSERT INTO `schoolselection_option1` (`ID`, `Region`, `District`, `School_Code`, `School_Name`, `Location`, `Gender`, `Course_101`, `Course_201`, `Course_301`, `Course_401`, `Course_402`, `Course_501`, `Course_502`, `No_Of_Programs`, `Status_Day`, `Status_Boarding`, `Status_Hostel`) VALUES
(1, 'G.Accra', 'Accra Metro', 10128, 'La presby Senior High', 'La Emmaus', 'Mixed', NULL, NULL, NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 4, 'Day', NULL, NULL),
(2, 'G.Accra', 'Ningo Prampram', 10403, 'Ningo Senior High', 'Old Ningo', 'Mixed', 'Agriculture', 'Business', NULL, NULL, NULL, 'General Arts', 'General Science', 4, 'Day', 'Boarding', NULL),
(3, 'Eastern', 'Kwahu East', 21006, 'Nkwatia Presby Senior High/Com', 'Nkwatia', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', NULL, 'General Arts', 'General Science', 5, 'Day', 'Boarding', NULL),
(4, 'Eastern', 'Lower Manya Krobo', 21504, 'Akuse Methodist Senior  High/Tech', 'Akuse', 'Mixed', 'Agriculture', 'Business', 'Technical', 'Home Economics', NULL, 'General Arts', NULL, 5, 'Day', 'Boarding', NULL),
(5, 'Central', 'Agona East', 30904, 'Kwanyako Senior High', 'Kwanyako', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', NULL, 'General Arts', 'General Science', 5, 'Day', 'Boarding', NULL),
(6, 'Central', 'Assin South', 31206, 'Assin Nsuta Senior High', 'Asssin Nsuta', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', NULL, 5, 'Day', NULL, 'Hostel'),
(7, 'Western', 'Bodi', 40801, 'Juaboso Senior High', 'Juaboso', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', NULL, 'General Arts', 'General Science', 5, 'Day', 'Boarding', NULL),
(8, 'Western', 'Suaman', 41002, 'Dadieso Senior High', 'Dadieso', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', NULL, 'General Arts', NULL, 4, 'Day', NULL, 'Hostel'),
(9, 'Ashanti', 'Amansie West', 50401, 'Mamsoman Senior High', 'Manso Atwere', 'Mixed', NULL, 'Business', NULL, NULL, '', 'General Arts', 'General Science', 3, 'Day', 'Boarding', NULL),
(10, 'Ashanti', 'Offinso North', 50802, 'Akumadan Senior High', 'Akumadan', 'Mixed', NULL, 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', NULL, 4, 'Day', 'Boarding', NULL),
(11, 'B. Ahafo', 'Pru', 60401, 'Yeji Senior High/Tech', 'Yeji', 'Mixed', NULL, 'Business', 'Technical', 'Home Economics', NULL, 'General Arts', NULL, 4, 'Day', 'Boarding', NULL),
(12, 'B.Ahafo', 'Tain', 60604, 'Nkoranman Senior High', 'Seikwa/Wenchi', 'Mixed', 'Agriculture', 'Business', NULL, NULL, NULL, 'General Arts', NULL, 3, 'Day', 'Boarding', NULL),
(13, 'Volta', 'Ho west', 70109, 'Dzolo Senior Hgh', 'Dzolo', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', NULL, 'General Arts', 'General Science', 5, 'Day', 'Boarding', NULL),
(14, 'Volta', 'Blakoye', 71103, 'Nkonya Senior Hgh', 'Nkonya-Ahenkro', 'Mixed', NULL, 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 5, 'Day', 'Boarding', NULL),
(15, 'Northern', 'Tolon', 81201, 'Tolon Senior High', 'Tolon', 'Mixed', NULL, 'Business', NULL, 'Home Economics', NULL, 'General Arts', 'General Science', 4, 'Day', NULL, 'Hostel'),
(16, 'Northern ', 'Karaga', 81401, 'Karaga Senior High', 'karaga', 'Mixed', NULL, 'Business', NULL, NULL, NULL, 'General Arts', NULL, 2, 'Day', NULL, NULL),
(17, 'U.East', 'Bongo', 90601, 'Bongo Senior High', 'Bongo', 'Mixed', NULL, 'Business', 'Technical', 'Home Economics', NULL, NULL, NULL, 3, NULL, 'Boarding', NULL),
(18, 'U.East ', 'Bongo', 90602, 'Gowrie Senior High/Tech', 'Gowrie', 'Mixed', 'Agriculture', NULL, 'Technical', 'Home Economics', NULL, 'General Arts', NULL, 4, NULL, 'Boarding', NULL),
(19, 'U.West', 'Jirapa', 100304, 'Jirapa Senior High', 'Pina', 'Mixed', '', 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 5, NULL, NULL, 'Hostel'),
(20, 'U.West', 'Nadowli', 100504, 'Takpo Senior High Sch.', 'Takpo ', 'Mixed', NULL, NULL, NULL, NULL, NULL, 'General Arts', NULL, 1, 'Day', NULL, 'Hostel');

-- --------------------------------------------------------

--
-- Table structure for table `schoolselection_option2`
--

CREATE TABLE `schoolselection_option2` (
  `ID` int(11) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `District` varchar(50) NOT NULL,
  `School_Code` int(7) NOT NULL,
  `School_Name` varchar(225) NOT NULL,
  `Location` varchar(225) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Course_101` varchar(50) DEFAULT NULL,
  `Course_201` varchar(50) DEFAULT NULL,
  `Course_301` varchar(50) DEFAULT NULL,
  `Course_401` varchar(50) DEFAULT NULL,
  `Course_402` varchar(50) DEFAULT NULL,
  `Course_501` varchar(50) DEFAULT NULL,
  `Course_502` varchar(50) DEFAULT NULL,
  `No.  Of  Programs` varchar(1) NOT NULL,
  `Status_Day` varchar(10) DEFAULT NULL,
  `Status_Boarding` varchar(10) DEFAULT NULL,
  `Status_Hostel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolselection_option2`
--

INSERT INTO `schoolselection_option2` (`ID`, `Region`, `District`, `School_Code`, `School_Name`, `Location`, `Gender`, `Course_101`, `Course_201`, `Course_301`, `Course_401`, `Course_402`, `Course_501`, `Course_502`, `No.  Of  Programs`, `Status_Day`, `Status_Boarding`, `Status_Hostel`) VALUES
(1, 'G.Accra', 'Accra Metro', 10101, 'Ebenezer Senior High School', 'Dansoman', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '6', 'Day', NULL, NULL),
(2, 'G.Accra', 'Accra Metro', 10103, 'Wesley Grammar Senior High', 'Dansoman', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '6', 'Day', 'Boarding', NULL),
(3, 'Eastern', 'Akwapim North', 20401, 'Nifa Senior High', 'Adukrom', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '6', 'Day', 'Boarding', NULL),
(4, 'Eastern', 'Akwapim North', 20403, 'Benkum Senior High', 'Larte-Akw', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', NULL, 'General Arts', 'General Science', '5', 'Day', 'Boarding', NULL),
(5, 'Central', 'Gomoa West', 30501, 'Apam Senior High', 'Apam', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '6', 'Day', 'Boarding', 'Hostel'),
(6, 'Central', 'Agona East', 30905, 'Swedru Senior High', 'Swedru', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '6', 'Day', 'Boarding', NULL),
(7, 'Western', 'Sekondi Takoradi Metro', 40102, 'Sekondi College', 'Sekondi', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '6', 'Day', 'Boarding', NULL),
(8, 'Western', 'Sekondi Takoradi Metro', 40101, 'Takoradi Senior High', 'Tanokrom', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '6', 'Day', NULL, NULL),
(9, 'Ashanti', 'Kumasi Metro', 50101, 'Asanteman Senior High', 'Bantama', 'Mixed', NULL, 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '5', 'Day', 'Boarding', NULL),
(10, 'Ashanti', 'Kumasi Metro', 50103, 'Kumasi Girls Senior High', 'Abrepo', 'Girls', NULL, 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '5', 'Day', 'Boarding', NULL),
(11, 'B. Ahafo', 'Jaman South', 60501, 'Drobo Senior High', 'Drobo ', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '6', 'Day', 'Boarding', NULL),
(12, 'B.Ahafo', 'Asutifi South', 61203, 'Hwediem Senior Hogh', 'Hwidiem', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '6', 'Day', 'Boarding', NULL),
(13, 'Volta', 'Hohoe Municipal', 71006, 'E.P Senior High', 'Hohoe', 'Mixed', NULL, 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '5', 'Day', 'Boarding', NULL),
(14, 'Volta', 'Akatsi', 70401, 'Akatsi Senior High/Tech', 'Akatsi', 'MIxed', 'Agriculture', 'Business', 'Technical', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '7', 'Day', 'Boarding', NULL),
(15, 'Northern', 'Tamale Metro', 80107, 'St. Charles Senior High', 'Tamale', 'Boys', 'Agriculture', 'Business', NULL, NULL, NULL, 'General Arts', 'General Science', '4', 'Day', 'Boarding', NULL),
(16, 'Northern', 'Sagnerigu', 80108, 'Islamic Science Senior High', 'Tamale', 'Mixed', 'Agriculture', NULL, NULL, 'Home Economics', NULL, NULL, 'General Science', '3', 'Day', 'Boarding', NULL),
(17, 'U. East', 'Bawku West', 90201, 'Zebilla Senior High/Tech', 'Zebilla', 'Mixed', NULL, NULL, 'Technical', 'Home Economics', NULL, 'General Arts', 'General Science', '4', 'Day', 'Boarding', NULL),
(18, 'U.East ', 'Builsa North', 90301, 'Sandema Senior High/Tech', 'Bilinsa/Sandema', 'Mixed', NULL, NULL, 'Technical', 'Home Economics', NULL, 'General Arts', 'General Science', '4', 'Day', 'Boarding', NULL),
(19, 'U.West', 'Sisala East', 100401, 'Kanton Senior High', 'Tumu', 'Mixed', NULL, 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', '5', 'Day', 'Boarding', NULL),
(20, 'U.West', 'Nadowli', 100503, 'Queen of Peace Senior High', 'Nadowli', 'Mixed', NULL, 'Business', NULL, NULL, NULL, 'General Arts', 'General Science', '3', 'Day', 'Boarding', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolselection_option3`
--

CREATE TABLE `schoolselection_option3` (
  `ID` int(11) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `District` varchar(50) NOT NULL,
  `School_Code` int(7) NOT NULL,
  `School_Name` varchar(225) NOT NULL,
  `Location` varchar(225) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Course_101` varchar(50) DEFAULT NULL,
  `Course_201` varchar(50) DEFAULT NULL,
  `Course_301` varchar(50) DEFAULT NULL,
  `Course_401` varchar(50) DEFAULT NULL,
  `Course_402` varchar(50) DEFAULT NULL,
  `Course_501` varchar(50) DEFAULT NULL,
  `Course_502` varchar(50) DEFAULT NULL,
  `No.  Of  Programs` int(1) NOT NULL,
  `Status_Day` varchar(10) DEFAULT NULL,
  `Status_Boarding` varchar(10) DEFAULT NULL,
  `Status_Hostel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolselection_option3`
--

INSERT INTO `schoolselection_option3` (`ID`, `Region`, `District`, `School_Code`, `School_Name`, `Location`, `Gender`, `Course_101`, `Course_201`, `Course_301`, `Course_401`, `Course_402`, `Course_501`, `Course_502`, `No.  Of  Programs`, `Status_Day`, `Status_Boarding`, `Status_Hostel`) VALUES
(1, 'G.Accra', 'Accra Metro', 10102, 'St.Mary Senior High', 'Korle Gonno', 'Girls', '', '', '', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 4, 'Day', 'Boarding', ''),
(2, 'G.Accra', 'Accra Metro', 10110, 'Achimota Senior High', 'Achimota', 'Mixed', 'Agriculture', '', 'Technical', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 5, 'Day', 'Boarding', ''),
(3, 'Eastern', 'Akwapim South', 20301, 'Aburi Girls Senior High', 'Aburi', 'Girls', '', 'Business', '', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 5, 'Day', 'Boarding', ''),
(4, 'Eastern', 'Akwapim North', 20402, 'Okuapeman Senior High', 'Akropong', 'Mixed', 'Agriculture', 'Business', '', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 6, '', 'Boarding', ''),
(5, 'Central', 'Cape Coast Metro', 30104, 'Mfantsipim Senior High ', 'Cape Coast', 'Boys', '', '', 'Technical', '', 'Visual Arts', 'General Arts', 'General Science', 4, '', 'Boarding', ''),
(6, 'Central', 'Cape Coast Metro', 30103, 'Holy Child School', 'Cape Coast', 'Girls', '', 'Business', '', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 5, '', 'Boarding', ''),
(7, 'Western', 'Sekondi Takoradi Metro', 40103, 'Archbishop Porter Girls Snr.High', 'Sekondi', 'Girls', '', 'Business', '', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 5, 'Day', 'Boarding', ''),
(8, 'Western', 'Sekondi Takoradi Metro', 40104, 'Ghana Senior High/Tech', 'Takoradi', 'Boys', '', '', 'Technical', '', '', 'General Arts', 'General Science', 3, 'Day', 'Boarding', ''),
(9, 'Ashanti', 'Kumasi Metro', 50108, 'Prempeh College', 'Sofoline-Kumasi', 'Boys', '', 'Business', '', '', 'Visual Arts', 'General Arts', 'General Science', 4, 'Day', 'Boarding', ''),
(10, 'Ashanti', 'Kumasi Metro', 50201, 'Yaa Asantewa Girls Senior High', 'Tanoso - Kumasi', 'Girls', 'Agriculture', 'Business', '', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 6, 'Day', 'Boarding', ''),
(11, 'B. Ahafo', 'Suyani Municipal', 60104, 'Suyani Senior High', 'Suyani', 'Mixed', 'Agriculture', 'Business', '', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 6, 'Day', 'Boarding', ''),
(12, 'B.Ahafo', 'Tano North', 60301, 'Serwaa Kesse Girls Senior High', 'Duayaw Nkwata', 'Girls', 'Agriculture', 'Business', '', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 6, 'Day', 'Boarding', ''),
(13, 'Volta', 'Ho Municipal', 70101, 'OLA Girls Senior High', 'Ho', 'Girls', '', 'Business', '', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 5, '', 'Boarding', ''),
(14, 'Volta', 'Keta', 70502, 'Keta Senior High', 'Keta', 'Mixed', 'Agriculture', 'Business', 'Technical', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 7, 'Day', 'Boarding', ''),
(15, 'Northern', 'Tamale Metro', 80102, 'Ghana Senior High', 'Tamale', 'Mixed', 'Agriculture', 'Business', '', 'Home Economics', '', 'General Arts', 'General Science', 5, 'Day', 'Boarding', ''),
(16, 'Northern', 'Tamale Metro', 80109, 'Tamale Girls Senior High', 'TAmale', 'Girls', '', 'Business', '', '', '', 'General Arts', 'General Science', 3, '', 'Boarding', ''),
(17, 'U.East ', 'Bolgatanga', 90401, 'Bolga Girls Senior High', 'Zaare-Bolgatanga', 'Girls', '', 'Business', '', 'Home Economics', '', 'General Arts', 'General Science', 4, '', 'Boarding', ''),
(18, 'U.East ', 'Bawku Municipal', 90101, 'Bawku Senior High', 'Bawku', 'Mixed', 'Agriculture', 'Business', '', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 6, '', 'Boarding', ''),
(19, 'U.West', 'Wa Municipal', 100102, 'Wa Senior High ', 'Wa', 'Mixed', 'Agriculture', 'Business', '', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 6, '', 'Boarding', ''),
(20, 'U.West', 'Lawra', 100202, 'Lawra Senior High', 'Lawra', 'Mixed', '', 'Business', '', 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', 5, '', 'Boarding', '');

-- --------------------------------------------------------

--
-- Table structure for table `schoolselection_option4`
--

CREATE TABLE `schoolselection_option4` (
  `ID` int(11) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Institute_Code` int(7) NOT NULL,
  `Institution` varchar(225) NOT NULL,
  `Location` varchar(225) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Course_601` varchar(100) DEFAULT NULL,
  `Course_602` varchar(100) DEFAULT NULL,
  `Course_603` varchar(100) DEFAULT NULL,
  `Course_604` varchar(100) DEFAULT NULL,
  `Course_605` varchar(100) DEFAULT NULL,
  `Course_606` varchar(100) DEFAULT NULL,
  `Course_607` varchar(100) DEFAULT NULL,
  `Course_608` varchar(100) DEFAULT NULL,
  `Course_609` varchar(100) DEFAULT NULL,
  `Course_610` varchar(100) DEFAULT NULL,
  `Course_611` varchar(100) DEFAULT NULL,
  `Course_612` varchar(100) DEFAULT NULL,
  `Course_613` varchar(100) DEFAULT NULL,
  `Course_614` varchar(100) DEFAULT NULL,
  `Course_701` varchar(100) DEFAULT NULL,
  `Course_702` varchar(100) DEFAULT NULL,
  `Course_703` varchar(100) DEFAULT NULL,
  `Course_704` varchar(100) DEFAULT NULL,
  `Course_705` varchar(100) DEFAULT NULL,
  `Course_706` varchar(100) DEFAULT NULL,
  `Course_707` varchar(100) DEFAULT NULL,
  `Course_801` varchar(100) DEFAULT NULL,
  `Course_802` varchar(100) DEFAULT NULL,
  `Course_803` varchar(100) DEFAULT NULL,
  `Course_804` varchar(100) DEFAULT NULL,
  `Course_805` varchar(100) DEFAULT NULL,
  `Course_901` varchar(100) DEFAULT NULL,
  `Course_902` varchar(100) DEFAULT NULL,
  `Course_903` varchar(100) DEFAULT NULL,
  `Course_904` varchar(100) DEFAULT NULL,
  `No.  Of  Programs` int(2) NOT NULL,
  `Status_Day` varchar(10) DEFAULT NULL,
  `Status_Boarding` varchar(10) DEFAULT NULL,
  `Status_Hostel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolselection_option4`
--

INSERT INTO `schoolselection_option4` (`ID`, `Region`, `District`, `Institute_Code`, `Institution`, `Location`, `Gender`, `Course_601`, `Course_602`, `Course_603`, `Course_604`, `Course_605`, `Course_606`, `Course_607`, `Course_608`, `Course_609`, `Course_610`, `Course_611`, `Course_612`, `Course_613`, `Course_614`, `Course_701`, `Course_702`, `Course_703`, `Course_704`, `Course_705`, `Course_706`, `Course_707`, `Course_801`, `Course_802`, `Course_803`, `Course_804`, `Course_805`, `Course_901`, `Course_902`, `Course_903`, `Course_904`, `No.  Of  Programs`, `Status_Day`, `Status_Boarding`, `Status_Hostel`) VALUES
(1, 'G.Accra', 'Accra', 9010101, 'Accra Tech. Trg Ceatre', 'Kokomlemle', 'Mixed', 'Autobody Works', 'Motor Vehicle Engineering', 'Welding Fabrication Technology ', NULL, NULL, 'Mechanic Engineering Technology', 'Small Engineering Repair', 'Electrical Engineering', NULL, NULL, 'Refrigeration & Air -Condition Technology', 'Electronic Engineering', NULL, 'Computer Technology', 'Creative Art Techology', 'Plumbing and Gas Fitting Technology', NULL, NULL, 'Wood Construction Technology', 'Building Construction Technology', 'Architectural Drafting', NULL, NULL, NULL, NULL, NULL, NULL, 'Accounting', NULL, NULL, 15, NULL, NULL, 'Hostel'),
(2, 'G.Accra', 'Ashiaman Municipal', 9011001, 'Doa Bosco Voc/Tech Institute', 'Ashiaman', 'Mixed', NULL, 'Motor Vehicle  Engineering', NULL, NULL, NULL, NULL, NULL, 'Electrical Engineering Technology', NULL, NULL, NULL, 'Electronic Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Secretarial', NULL, NULL, NULL, 4, 'Day', NULL, 'Hostel'),
(3, 'Northern', 'Bole', 9080703, 'St. Anthony of Pedaua Senior High And Technical', 'Bamboi', 'Mixed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fashion Designing Technology', 'Hospitality and Catering  management', NULL, NULL, 'Secretarial', 'Accounting', NULL, NULL, 4, 'Day', NULL, 'Hostel'),
(4, 'U.West', 'Lawra', 9000301, 'St. Johns Voc Tech High Institute', 'Nsadom', 'Mixed', NULL, 'Motor Vehicle Engineering', 'Welding Fabrication Technology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Plumbing and Gas Fitting Technology', NULL, NULL, 'Wood Construction Technology', 'Building Construction Technology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 'Day', NULL, 'Hostel'),
(6, 'Northern', 'West Mamprusi', 9080603, 'Walwale Tech / Voc', 'Walewale', 'Mixed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Technology', NULL, NULL, NULL, NULL, NULL, 'Building Construction Technology', NULL, NULL, 'Fashion Designing Technology', 'Hospitality and Catering Management', NULL, NULL, 'Secretarial', 'Accounting', NULL, NULL, 6, 'Day', NULL, NULL),
(7, 'Volta', 'Ho west', 9070101, 'Amesofi Technical Institute', 'Amesofi', 'Mixed', NULL, 'Motor Vehicle Engineering', NULL, NULL, NULL, NULL, NULL, 'Electrical Engineering Technology', NULL, 'Agricultural Mechanization Technology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Wood Construction Technology', 'Building Construction Technology', NULL, NULL, 'Fashion Designing Technology', NULL, NULL, NULL, NULL, 'Accounting', NULL, NULL, 7, 'Day', NULL, 'Hostel'),
(8, 'U.East ', 'Bawku East', 9090101, 'Bawku Techical  Institute', 'Bawku', 'Mixed', NULL, 'Motor Vehicle Engineering', NULL, NULL, NULL, 'Mechanical Engineering Technology', NULL, 'Electrical Engineering Technology', NULL, NULL, NULL, NULL, NULL, NULL, 'Creative Art Technology', 'Plumbing and Gas Fitting Technology', NULL, NULL, 'Wood Construction Technology', 'Building Construction Technology', NULL, NULL, 'Fashion Designing Technology', NULL, NULL, NULL, NULL, 'Accounting', NULL, NULL, 9, NULL, 'Boarding', NULL),
(9, 'Central', 'Ajumako', 9030801, 'Eayan_Abasa tecnical  Institute ', 'Eayan Abasa', 'Mixed', NULL, 'Motor Vehicle Engineering', NULL, NULL, NULL, NULL, NULL, 'Electrical Engineering Technology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Building Construction Technology', NULL, NULL, 'Fashion Designing Technology', 'Hospitality and Catering Management', NULL, NULL, NULL, 'Accounting', NULL, NULL, 6, 'Day', 'Boarding', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolselection_option5`
--

CREATE TABLE `schoolselection_option5` (
  `S/N` int(11) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Institute Code` int(7) NOT NULL,
  `Institution Name` varchar(225) NOT NULL,
  `Location` varchar(225) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Course 101` varchar(100) DEFAULT NULL,
  `Course 201` varchar(100) DEFAULT NULL,
  `Course 301` varchar(100) DEFAULT NULL,
  `Course 401` varchar(100) DEFAULT NULL,
  `Course 402` varchar(100) DEFAULT NULL,
  `Course 501` varchar(100) DEFAULT NULL,
  `Course 502` varchar(100) DEFAULT NULL,
  `Course 601` varchar(100) DEFAULT NULL,
  `Course 602` varchar(100) DEFAULT NULL,
  `Course 603` varchar(100) DEFAULT NULL,
  `Course 604` varchar(100) DEFAULT NULL,
  `Course 605` varchar(100) DEFAULT NULL,
  `Course 606` varchar(100) DEFAULT NULL,
  `Course 607` varchar(100) DEFAULT NULL,
  `Course 608` varchar(100) DEFAULT NULL,
  `Course 609` varchar(100) DEFAULT NULL,
  `Course 610` varchar(100) DEFAULT NULL,
  `Course 611` varchar(100) DEFAULT NULL,
  `Course 612` varchar(100) DEFAULT NULL,
  `Course 613` varchar(100) DEFAULT NULL,
  `Course 614` varchar(100) DEFAULT NULL,
  `Course 701` varchar(100) DEFAULT NULL,
  `Course 702` varchar(100) DEFAULT NULL,
  `Course 703` varchar(100) DEFAULT NULL,
  `Course 704` varchar(100) DEFAULT NULL,
  `Course 705` varchar(100) DEFAULT NULL,
  `Course 706` varchar(100) DEFAULT NULL,
  `Course 707` varchar(100) DEFAULT NULL,
  `Course 801` varchar(100) DEFAULT NULL,
  `Course 802` varchar(100) DEFAULT NULL,
  `Course 803` varchar(100) DEFAULT NULL,
  `Course 804` varchar(100) DEFAULT NULL,
  `Course 805` varchar(100) DEFAULT NULL,
  `Course 901` varchar(100) DEFAULT NULL,
  `Course 902` varchar(100) DEFAULT NULL,
  `Course 903` varchar(100) DEFAULT NULL,
  `Course 904` varchar(100) DEFAULT NULL,
  `No. Of Progams` int(2) NOT NULL,
  `Status Day` varchar(10) DEFAULT NULL,
  `Status Boarding` varchar(10) DEFAULT NULL,
  `Status Hostel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolselection_option5`
--

INSERT INTO `schoolselection_option5` (`S/N`, `Region`, `District`, `Institute Code`, `Institution Name`, `Location`, `Gender`, `Course 101`, `Course 201`, `Course 301`, `Course 401`, `Course 402`, `Course 501`, `Course 502`, `Course 601`, `Course 602`, `Course 603`, `Course 604`, `Course 605`, `Course 606`, `Course 607`, `Course 608`, `Course 609`, `Course 610`, `Course 611`, `Course 612`, `Course 613`, `Course 614`, `Course 701`, `Course 702`, `Course 703`, `Course 704`, `Course 705`, `Course 706`, `Course 707`, `Course 801`, `Course 802`, `Course 803`, `Course 804`, `Course 805`, `Course 901`, `Course 902`, `Course 903`, `Course 904`, `No. Of Progams`, `Status Day`, `Status Boarding`, `Status Hostel`) VALUES
(1, 'Greater Accra', 'Accra Metro', 10122, 'Mars Business Senior High', 'Mataheko-Mars', 'Mixed', NULL, 'Business', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Day', NULL, NULL),
(2, 'Gereater Accra', 'Accra Metro', 10123, 'Salem Senior high', 'KukuHill', 'Mixed', NULL, 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 'Day', NULL, 'Hostel'),
(3, 'Greater  Accra', 'Accra Metro', 10124, 'Harvard Senior High', 'Kokomele', 'Mixed', NULL, 'Business', NULL, 'Home Economics', NULL, 'General Arts', 'General Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 'Day', 'Boarding', NULL),
(4, 'Greater Accra', 'Accra Metro', 10125, 'City Business High/Business Coll ', 'Kpehe', 'Mixed', NULL, 'Business', NULL, NULL, 'Visual Arts', 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 'Day', 'Boarding', NULL),
(5, 'Eastern', 'New Juaben', 20107, 'New Juaben College Of Commerce', 'Koforidua', 'Mixed', NULL, 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 'Day', 'Boarding', NULL),
(6, 'Eastern', 'New Juaben', 20108, 'Pentecost Senior High', 'Koforidua', 'Mixed', NULL, 'Business', NULL, 'Home Economics', NULL, 'General Arts', 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 'Day', '', NULL),
(7, 'Eastern', 'Kwahu South', 21012, 'St. Anthony Senior High  School', 'Amanfro. OffNkawkaw Kumasi Rd', 'Mixed', 'Agriculture', 'Business', NULL, NULL, NULL, 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 'Day', 'Boarding', NULL),
(8, 'Central', 'Gomoa', 30622, 'Oxford Senior High School', 'Tufuhene Bromu', 'Mixed', NULL, 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 'Day', NULL, NULL),
(9, 'Central', 'Mfantisiman', 30306, 'St. Andrew''s Senior High', 'Assin Fosu', 'Mixed', 'Agriculture', 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 'Day', NULL, 'Hostel'),
(10, 'Central ', 'Agona Swedru', 30908, 'Pank Sec/ Business College', 'Winneba', 'Mixed', NULL, 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', 'General Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 'Day', 'Boarding', 'Hostel'),
(11, 'Central', 'Cape Coast Metro', 30116, 'Cape Coast International School', 'Kakumdo', 'Mixed', NULL, 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 'Day', NULL, NULL),
(12, 'Western', 'Shama', 40114, 'Golden Gate Senior High', 'Kumasi -Shama', 'Mixed', NULL, 'Business', NULL, 'Home Economics', 'Visual Arts', 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 'Day', 'Boarding', NULL),
(13, 'Western', 'Wasa East', 41103, 'Church of Christ Senior High', 'Atieku', 'Mixed', NULL, 'Business', NULL, 'Home Economics', NULL, 'General Arts', 'General Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 'Day', NULL, NULL),
(14, 'Ashanti', 'Kumasi Metro', 50117, 'Prince Of Peace Senior High', 'Suntreso', 'Mixed', NULL, 'Business', NULL, NULL, NULL, 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Day', 'Boarding', NULL),
(15, 'Ashanti', 'Kumasi Metro', 50126, 'Garden City Comm. College', 'Kumasi', 'Mixed', NULL, 'Business', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Day', NULL, 'Hostel'),
(16, 'Brong Ahafo', 'Sunyani Municipal ', 60118, 'Lawrence Senior High', 'Sunyani', 'Mixed', NULL, 'Business', NULL, NULL, NULL, 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Day', NULL, NULL),
(17, 'Brong Ahafo', 'Suyani Municipal', 60119, 'Abesim Senior High', 'Abesim', 'Mixed', NULL, 'Business', NULL, NULL, NULL, 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Day', NULL, NULL),
(18, 'Volta', 'Ho', 70116, 'St. Prosper college', 'Ho', 'Mixed', NULL, 'Busines', 'Technical', NULL, NULL, 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 'Day', NULL, NULL),
(19, 'Volta', 'Ho', 70807, 'FDS International Senior High Tech', 'Juapong', 'Mixed', NULL, 'Business', NULL, NULL, NULL, 'General Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Day', NULL, NULL),
(20, 'Northern', 'West Gonja', 80203, 'St. Anne''s Senior High', 'Damango', 'Girls', NULL, NULL, NULL, NULL, NULL, 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Day', NULL, NULL),
(21, 'Northern ', 'Sagnarigu', 80122, 'Gifam Training Centre', 'Tamale', 'Mixed', NULL, 'Business', NULL, NULL, NULL, 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Day', NULL, NULL),
(22, 'Upper East', 'Ausiga', 90503, 'Pusiga Senior High', 'Pusiga', 'Mixed', NULL, NULL, NULL, NULL, NULL, 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Day', NULL, NULL),
(23, 'Upper East', 'Garu-Tempane', 90105, 'Saniry Senior High ', 'Garu-Tempane', 'Mixed', NULL, 'Business', NULL, NULL, NULL, 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Day', NULL, NULL),
(24, 'Upper West', 'Nadowli', 100505, 'St. Augustine Senior High/Tech ', 'Saan,Charipong', 'Mixed', NULL, NULL, 'Home Economics', NULL, NULL, 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Day', NULL, 'Hostel'),
(25, 'Upper West', 'Wa Municipal', 100107, 'Tupaso Senior High', 'Wa', 'Mixed', NULL, 'Business', NULL, NULL, NULL, 'General Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Day', NULL, NULL),
(26, 'G.Accra', 'Accra Metro', 9010103, 'EMIT Electronics, Mateheko', 'Accra', 'Mixed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Motor Vehicle Eng', 'Welding and Fabrica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Electronics Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 'Day', NULL, NULL),
(27, 'G.Accra', 'Accra Metro', 9010104, 'National Tech. Engineering Coll', 'Kaneshi', 'Mixed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Motor Vehicle Engineering', NULL, NULL, NULL, NULL, NULL, 'Electrical Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Day', NULL, NULL),
(28, 'Eastern', 'Akwapim South', 9020301, 'Prince Boateng Memorial Voc', 'Nsawam', 'Mixed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fashion Design Technology', 'Habitability and Catering ', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Day', NULL, NULL),
(29, 'Eastern', 'Manya Krobo', 9021501, 'St. Anne Voc. Institution', 'Odumase- Krobo', 'Mixed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fashion Design Technology', 'Habitability and Catering', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Da', NULL, NULL),
(30, 'G.Accra', 'Accra Metro', 9010126, 'Caique Memorial School', 'Awoshie', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fashion Designing Technology', 'Habitability and Catering', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Day', NULL, NULL),
(31, 'Central', 'Cape Coast ', 9030102, 'Cape Coast Gratis', 'Elmina', 'Mixed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Welding and Fabrication', NULL, NULL, 'Mechanical Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Day', 'Boarding', NULL),
(32, 'Western', 'Sekondi Takoradi Metro', 9040103, 'Gladmore Voc. Institute', 'Sekondi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cosmetology', 'Fashion Design Technology', 'Hospitability and Catering', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'Day', 'Boarding', NULL),
(33, 'Ashanti', 'Kumasi Metro', 9050106, 'Opoku Ware Girls Voc', 'Kumasi', 'Girls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cosmetology', 'Fashion Designing Technology', 'Hospitability and Catering', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'Day', NULL, NULL),
(34, 'Ashanti', 'Kumasi Metro', 9050105, 'St. Peter''s Girls Voc. Institute', 'Kumasi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cosmetology', 'Fashion Designing Technology', 'Hospitality and Catering ', NULL, NULL, NULL, NULL, NULL, NULL, 3, 'Day', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `second_choice`
--

CREATE TABLE `second_choice` (
  `code` int(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `Choice_two` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(50) NOT NULL,
  `index_num` int(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `othername` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `title` varchar(5) NOT NULL,
  `surname1` varchar(20) NOT NULL,
  `other` varchar(20) NOT NULL,
  `relation` varchar(15) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `adds` varchar(30) NOT NULL,
  `first` text NOT NULL,
  `region` varchar(20) NOT NULL,
  `code` int(10) NOT NULL,
  `programme` varchar(25) NOT NULL,
  `accomodation` varchar(15) NOT NULL,
  `second` varchar(50) NOT NULL,
  `region_2` varchar(20) NOT NULL,
  `code_2` int(10) NOT NULL,
  `programme_2` varchar(25) NOT NULL,
  `accomodation_2` varchar(15) NOT NULL,
  `third` varchar(50) NOT NULL,
  `region_3` varchar(20) NOT NULL,
  `code_3` int(10) NOT NULL,
  `programme_3` varchar(25) NOT NULL,
  `accomodation_3` varchar(15) NOT NULL,
  `fourth` varchar(50) NOT NULL,
  `region_4` varchar(20) NOT NULL,
  `code_4` int(10) NOT NULL,
  `programme_4` varchar(25) NOT NULL,
  `accomodation_4` varchar(15) NOT NULL,
  `agree` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `index_num`, `image`, `surname`, `othername`, `gender`, `DOB`, `address`, `title`, `surname1`, `other`, `relation`, `occupation`, `phone`, `email`, `adds`, `first`, `region`, `code`, `programme`, `accomodation`, `second`, `region_2`, `code_2`, `programme_2`, `accomodation_2`, `third`, `region_3`, `code_3`, `programme_3`, `accomodation_3`, `fourth`, `region_4`, `code_4`, `programme_4`, `accomodation_4`, `agree`) VALUES
(13, 101399001, 'studentImages/1526249457390.jpg', 'Addae', 'Alister', 'Female', '2017-10-29', 'P.O box 12114 accra', 'Mr', 'Addae', 'Ismael', 'Father', 'Sales person', '0572177665', 'samuelaryeeteynii@gm', 'P.O.BOX 12114, Accra', 'Bongo Senior High School', 'U.West', 100304, 'Business', 'Hostel', 'Zebilla Senior High/Tech', 'U. East', 90201, 'Technical', 'Day', 'Tamale Senior High Girls', 'Northern', 80109, 'Business', 'Boarding', 'St Johns Voc Tech High Institute', 'U.West', 9000301, 'Motor Vehicle Engineering', 'Day', 'on'),
(17, 101399004, 'studentImages/1526250107738.jpg', 'Addo', 'Danquah', 'Male', '2003-05-03', 'Lily square one', 'Mr', 'Addo', 'Kwame', 'Father', 'Trader', '0233567890', 'addo45@gmail.com', 'Lily square one', 'La Presby senior high', 'G.Accra', 10128, 'Home Economics', 'Day', 'Nifa Senior high', 'Eastern', 20401, 'Agriculture', 'Day', 'Okuapeman Senior high', 'Eastern', 20402, 'Agriculture', 'Boarding', 'Accra Tech.trg Ceatre', 'G.Accra', 9010101, 'Autobody Works', 'Hostel', 'on'),
(18, 101399005, 'studentImages/1526250554297.jpg', 'Dodoo', 'Gideon', 'Male', '2018-05-18', 'Daliah Square Two', 'Mr', 'Dodoo', 'Emmanuel', 'Father', 'Accountant', '0245788976', 'adfsgdh@gmail.com', 'Daliah Square Two', 'La presby senior high', 'G.Accra', 10128, 'Home Economics', 'Day', 'Nifa Senior high', 'Eastern', 20401, 'Agriculture', 'Day', 'Ghana senior high/tech', 'Western', 40104, 'Technical', 'Day', 'Accra Tech trg Ceatre', 'G.Accra', 9010101, 'Autobody Works', 'Hostel', 'on'),
(19, 101399008, 'studentImages/1526250721976.jpg', 'Ofosu', 'Dennis', 'Male', '2003-05-11', 'Petersonanderson Street 564B', 'Mr', 'Ofosu', 'Debrah', 'Father', 'Business man', '0207654345', 'dertyou@gmail.com', 'Petersonanderson Street 564B', 'Yeji Senior High School', 'B. Ahafo', 60401, 'Business', 'Day', 'Hwediem Senior School', 'B.Ahafo', 61203, 'Agriculture', 'Day', 'Keta senior High school', 'Volta', 70502, 'Agriculture', 'Day', 'Bawku technical institute', 'U.East', 9090101, 'Motor Vehicle Engineering', 'Boarding', 'on'),
(20, 101399009, 'studentImages/1526250721976.jpg', 'Ofosu', 'Dennis', 'Male', '2003-05-11', 'Petersonanderson Street 564B', 'Mr', 'Ofosu', 'Debrah', 'Father', 'Business man', '0207654345', 'dertyou@gmail.com', 'Petersonanderson Street 564B', 'Yeji Senior high school', 'B. Ahafo', 60401, 'Business', 'Day', 'Hwediem Senior High', 'B.Ahafo', 61203, 'Agriculture', 'Day', 'Keta Senior High', 'Volta', 70502, 'Agriculture', 'Day', 'Bawku Technical Institute', 'U.East', 9090101, 'Motor Vehicle Engineering', 'Boarding', 'on'),
(21, 101399010, 'studentImages/1526250922212.jpg', 'Ntiamoah', 'Francisca', 'Female', '2003-01-30', 'AberdeenHouse 453CS', 'Miss', 'Agyei', 'Akosua', 'Grandmother', 'Farmer', '0234657878', 'nti@gmail.com', 'AberdeenHouse 453CS', 'Gowrie Senior High/Tech', 'U.East', 90602, 'Agriculture', 'Boarding', 'Kumasi Senior High School', 'Ashanti', 50103, 'Business', 'Day', 'Yaa Asantewaa Girls Seniro High', 'Ashanti', 50201, 'Agriculture', 'Day', 'St Johns Voc Tech High Institute', 'U.West', 9000301, 'Motor Vehicle Engineering', 'Day', 'on'),
(22, 101399011, 'studentImages/1526251055122.jpg', 'Akuoko', 'Bridget', 'Female', '2004-10-09', 'Emerald DeGolder 45G', 'Mr', 'Akuoko', 'Peter', 'Father', 'Tailor', '0544348789', 'petersower@gmail.com', 'Emerald DeGolder 45G', 'Juaboso Seniorhigh', 'Western', 40801, 'Agriculture', 'Boarding', 'Kumasi Girls Senior high', 'Ashanti', 50103, 'Business', 'Day', 'Aburi Girls Senior High', 'Eastern', 20301, 'Business', 'Day', 'Walwale Voc/Tech Institute', 'Northern', 9080603, 'Computer Technology', 'Day', 'on'),
(23, 101399021, 'studentImages/1526251252669.jpg', 'Boateng', 'Joseph', 'Male', '2003-03-07', 'Peridot Square Annex 08', 'Miss', 'Boateng', 'Gabriella', 'Mother', 'Programmer', '0545372828', 'bgabbyworks@gmail.co', 'Peridot Square Annex 08', 'Dadieso Senior High', 'Western', 41002, 'General Arts', 'Day', 'Apam Senior High', 'Central', 30501, 'General Science', 'Day', 'Achimota Senior High', 'G.Accra', 10110, 'General Science', 'Day', 'Walwale Voc/Tech Institute', 'Northern', 9080603, 'Hospitality and Catering ', 'Day', 'on'),
(24, 101399050, 'studentImages/1526251409737.jpg', 'Samson', 'Anthony', 'Male', '2003-03-07', 'Bergandy realsSurver', 'Mr', 'Samson', 'Pages', 'Uncle', 'Trader', '023435467883', 'pageskofi@gmail.com', 'Bergandy realsSurver', 'juaboso senior high', 'Western', 40801, 'General Arts', 'Day', 'Takoradi Senior High', 'Western', 40101, 'Business', 'Day', 'Prempeh College', 'Ashanti', 50108, 'General Science', 'Day', 'Sunyani Methodist Technical Institute', 'B.Ahafo', 9060101, 'Building Construction Tec', 'Day', 'on'),
(25, 101399017, 'studentImages/1526251574197.jpg', 'Faith', 'Lucky', 'Male', '2002-11-21', 'LaHoe doWonders 45St', 'Miss', 'Faith', 'Favour', 'Mother', 'Seamstress', '0245687678909', 'faith@yahoo.com', 'LaHoe doWonders 45St', 'Nkwatia Presby senior high school', 'Eastern', 21006, 'General Science', 'Day', 'Islamic Science Senior high ', 'U. East', 90201, 'General Arts', 'Day', 'Keta Senior High School', 'Northern', 80102, 'Business', 'Day', 'Doa Bosco Voc/Tech', 'G.Accra', 9011001, 'Electronic Engineering', 'Day', 'on'),
(26, 101352013, 'studentImages/1526251721708.jpg', 'Teye', 'Anita', 'Female', '2001-06-06', 'Brunaie Complex 45D', 'Mr', 'Teye', 'Clemence', 'Mother', 'Lecturer', '057536789876', 'teyClem@gmail.com', 'Brunaie Complex 45D', 'Nkoraman Senior High', 'Volta', 70109, 'Home Economics', 'Day', 'Wesley Grammar Senior High School', 'G.Accra', 10103, 'Home Economics', 'Day', 'Holy Child', 'Central', 30103, 'Home Economics', 'Boarding', 'St John Voc/Tech Institute', 'U.West', 9000301, 'Wood Construction Technol', 'Day', 'on'),
(27, 101352005, 'studentImages/1526251855782.jpg', 'Danso', 'George', 'Male', '2003-01-30', 'Silver DoshineBrighter 34C', 'Mr', 'Danso', 'Ntim', 'Father', 'Pastor', '027787647834', 'dansoNtim@gmail.com', 'Silver DoshineBrighter 34C', 'Bongo Senior High School', 'U.East', 90602, 'General Arts', 'Boarding', 'Sekondi College', 'Western', 40102, 'General Science', 'Day', 'Prempeh College', 'Ashanti', 50108, 'General Arts', 'Day', 'Doa Bosco Voc/Tech institute', 'G.Accra', 9011001, 'Secretarial', 'Day', 'on'),
(28, 101352009, 'studentImages/1526252009183.jpg', 'Opoku', 'Stephen', 'Male', '2003-07-12', 'Crest Haven13', 'Mr', 'Opoku', 'Mensah', 'Father', 'Engineer', '05765263748', 'inigmensah@gmail.com', 'Crest Haven13', 'Nkwatia Presby Senior High School', 'Eastern', 21006, 'General Arts', 'Day', 'E.P senior High', 'Volta', 71006, 'Business', 'Day', 'Serwaa Kesse Girls Senior High School', 'B.Ahafo', 60301, 'Visual Arts', 'Day', 'Amesofi Technical Institute', 'Volta', 9070101, 'Fashion Designing Technol', 'Day', 'on'),
(29, 101352020, 'studentImages/1526252157497.jpg', 'Akwetey', 'Mawupemo', 'Female', '2002-07-19', 'Iresco street 60J', 'Mr', 'Nicodemus', 'Bright', 'Uncle', 'Accountant', '050583765637', 'brighter45@gmail.com', 'Iresco street 60J', 'Mansoman Senior High School', 'Ashanti', 50401, 'Business', 'Day', 'Akatsi Senior High School', 'Volta', 70401, 'Visual Arts', 'Day', 'Ghana senior High school', 'Northern', 80102, 'Business', 'Day', 'Amesofi Technical', 'Volta', 9070101, 'Agricultural Mechanizatio', 'Day', 'on'),
(30, 101352012, 'studentImages/1526252360042.jpg', 'Yeboah', 'Daniel', 'Male', '2003-12-14', 'Magenta Huston Street 54K', 'Miss', 'Adei', 'Rachel', 'Aunt', 'Student', '0207635467', 'rachiebby7@gmail.com', 'Magenta Huston Street 54K', 'Karaga Senior High School', 'Northern', 81401, 'General Arts', 'Day', 'Sandema Senior High School', 'U.East', 90301, 'Technical', 'Day', 'Wa Senior High', 'U.West', 100102, 'Agriculture', 'Boarding', 'Doa Bosco Voc/Tech Institute', 'G.Accra', 9011001, 'Electronic Engineering', 'Day', 'on'),
(31, 101352020, 'studentImages/1526252556385.jpg', 'Williams', 'Stella', 'Female', '2002-10-05', 'Awurade Nay3 HS 4023', 'Mr', 'Williams', 'William', 'Father', 'Teacher', '02646575356', 'wwiam@gmail.com', 'Awurade Nay3 HS 4023', 'Juaboso Senior High School', 'Western', 40801, 'Agriculture', 'Day', 'Kumasi Girls Senior High', 'Ashanti', 50103, 'General Arts', 'Day', 'Holy Child', 'Central', 30103, 'General Science', 'Boarding', 'Doa Bosco Voc/Tech institute', 'G.Accra', 9011001, 'Motor Vehicle Engineering', 'Day', 'on'),
(32, 2147483647, 'studentImages/1526368751746.jpg', 'samuel', 'aryeetey', 'Male', '2020-04-06', 'ifhfihiighgieghi', 'Miss', 'Addo', 'Kwame', 'Father', 'ManagingDirector', '0572177665', 'samuelaryeeteynii@gm', 'kfdkfhdkifhdifdhhd', '1', 'G.Accra', 10128, 'Home Economics', 'Day', '12', 'B.Ahafo', 61203, 'Agriculture', 'Day', '5', 'Central', 30104, 'Visual Arts', 'Boarding', '4', 'U.West', 9000301, 'Motor Vehicle Engineering', 'Day', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `ID` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tmp` varchar(50) NOT NULL,
  `img_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`ID`, `name`, `tmp`, `img_path`) VALUES
(1, '', '', 'StudentImages/'),
(2, '', '', 'StudentImages/'),
(3, '', '', '/StudentImages/'),
(4, '', '', '/StudentImages/');

-- --------------------------------------------------------

--
-- Table structure for table `third_choice`
--

CREATE TABLE `third_choice` (
  `code` int(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `Choice_three` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `schoolselection_option1`
--
ALTER TABLE `schoolselection_option1`
  ADD PRIMARY KEY (`ID`,`School_Code`);

--
-- Indexes for table `schoolselection_option2`
--
ALTER TABLE `schoolselection_option2`
  ADD PRIMARY KEY (`ID`,`School_Code`);

--
-- Indexes for table `schoolselection_option3`
--
ALTER TABLE `schoolselection_option3`
  ADD PRIMARY KEY (`ID`,`School_Code`);

--
-- Indexes for table `schoolselection_option4`
--
ALTER TABLE `schoolselection_option4`
  ADD PRIMARY KEY (`ID`,`Institute_Code`);

--
-- Indexes for table `schoolselection_option5`
--
ALTER TABLE `schoolselection_option5`
  ADD PRIMARY KEY (`S/N`,`Institute Code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `schoolselection_option1`
--
ALTER TABLE `schoolselection_option1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `schoolselection_option2`
--
ALTER TABLE `schoolselection_option2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `schoolselection_option3`
--
ALTER TABLE `schoolselection_option3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `schoolselection_option4`
--
ALTER TABLE `schoolselection_option4`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `schoolselection_option5`
--
ALTER TABLE `schoolselection_option5`
  MODIFY `S/N` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
