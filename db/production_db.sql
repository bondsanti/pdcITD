-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 01:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `production_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_blocksizer`
--

CREATE TABLE `tb_blocksizer` (
  `id` int(11) NOT NULL,
  `overSizerCR1` int(11) NOT NULL,
  `overSizerCR2` int(11) NOT NULL,
  `overSizerCR3` int(11) NOT NULL,
  `overSizerCR4` int(11) NOT NULL,
  `overSizerCR5` int(11) NOT NULL,
  `overSizerCR6` int(11) NOT NULL,
  `TotalOverSizer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `log_id` int(10) NOT NULL,
  `activity` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`log_id`, `activity`, `date`) VALUES
(1, 'Edid->tbSystem : {\"nameSystem\":\"Line-B\",\"tarGet\":\"3000\",\"crName1\":\"CR-A\",\"crName2\":\"CR-B\",\"crName3\":\"CR-C\",\"crName4\":\"CR-D\",\"crName5\":\"CR-E\",\"crName6\":\"CR-F\",\"cat785D\":\"60.09\",\"cat777D\":\"40.03\",\"dum12T\":\"13.24\",\"dum16T\":\"15.34\",\"dum25T\":\"23.54\",\"dum30T\":\"27.01\",\"EGAT\":\"36.5\"}', '2021-09-13 16:06:45'),
(2, 'Insert->tbProduction : {\"dateShift\":\"2021-09-14\",\"timeShift\":\"2021-09-14 00:00\",\"overSizerCR1\":\"1\",\"overSizerCR2\":\"1\",\"overSizerCR3\":\"1\",\"overSizerCR4\":\"1\",\"overSizerCR5\":\"1\",\"overSizerCR6\":\"1\",\"TotalOverSizer\":\"6\",\"companyName1\":\"ITD\",\"trip785D_CR1_1\":\"1\",\"trip785D_CR1_2\":\"1\",\"trip785D_CR1_3\":\"1\",\"trip785D_CR1_4\":\"1\",\"trip785D_CR1_5\":\"1\",\"trip785D_CR1_6\":\"1\",\"Totaltrip785D_CR1\":\"6\",\"subTotalbcm785D_CR1\":\"6.00\",\"Totalbcm785D_CR1\":\"360.54\",\"companyName2\":\"ITD\",\"trip777D_CR1_1\":\"1\",\"trip777D_CR1_2\":\"1\",\"trip777D_CR1_3\":\"1\",\"trip777D_CR1_4\":\"1\",\"trip777D_CR1_5\":\"1\",\"trip777D_CR1_6\":\"1\",\"Totaltrip777D_CR1\":\"6\",\"subTotalbcm777D_CR1\":\"4.00\",\"Totalbcm777D_CR1\":\"240.18\",\"companyName3\":\"EGAT\",\"tripEGAT_CR1_1\":\"1\",\"tripEGAT_CR1_2\":\"1\",\"tripEGAT_CR1_3\":\"1\",\"tripEGAT_CR1_4\":\"1\",\"tripEGAT_CR1_5\":\"1\",\"tripEGAT_CR1_6\":\"1\",\"TotaltripEGAT_CR1\":\"6\",\"subTotalbcmEGAT_CR1\":\"3.64\",\"TotalbcmEGAT_CR1\":\"219.00\",\"companyName4\":\"A1\",\"trip12T_CR1_1\":\"1\",\"trip12T_CR1_2\":\"1\",\"trip12T_CR1_3\":\"1\",\"trip12T_CR1_4\":\"1\",\"trip12T_CR1_5\":\"1\",\"trip12T_CR1_6\":\"1\",\"Totaltrip12T_CR1\":\"6\",\"subTotalbcm12T_CR1\":\"1.32\",\"Totalbcm12T_CR1\":\"79.44\",\"companyName5\":\"A2\",\"trip12T_CR2_1\":\"1\",\"trip12T_CR2_2\":\"1\",\"trip12T_CR2_3\":\"1\",\"trip12T_CR2_4\":\"1\",\"trip12T_CR2_5\":\"1\",\"trip12T_CR2_6\":\"1\",\"Totaltrip12T_CR2\":\"6\",\"subTotalbcm12T_CR2\":\"1.32\",\"Totalbcm12T_CR2\":\"79.44\",\"companyName6\":\"A3\",\"trip12T_CR3_1\":\"1\",\"trip12T_CR3_2\":\"1\",\"trip12T_CR3_3\":\"1\",\"trip12T_CR3_4\":\"1\",\"trip12T_CR3_5\":\"1\",\"trip12T_CR3_6\":\"1\",\"Totaltrip12T_CR3\":\"6\",\"subTotalbcm12T_CR3\":\"1.32\",\"Totalbcm12T_CR3\":\"79.44\",\"companyName7\":\"A4\",\"trip12T_CR4_1\":\"1\",\"trip12T_CR4_2\":\"1\",\"trip12T_CR4_3\":\"1\",\"trip12T_CR4_4\":\"1\",\"trip12T_CR4_5\":\"1\",\"trip12T_CR4_6\":\"1\",\"Totaltrip12T_CR4\":\"6\",\"subTotalbcm12T_CR4\":\"1.32\",\"Totalbcm12T_CR4\":\"79.44\",\"companyName8\":\"B1\",\"trip16T_CR1_1\":\"1\",\"trip16T_CR1_2\":\"1\",\"trip16T_CR1_3\":\"1\",\"trip16T_CR1_4\":\"1\",\"trip16T_CR1_5\":\"1\",\"trip16T_CR1_6\":\"1\",\"Totaltrip16T_CR1\":\"6\",\"subTotalbcm16T_CR1\":\"1.53\",\"Totalbcm16T_CR1\":\"92.04\",\"companyName9\":\"B2\",\"trip16T_CR2_1\":\"1\",\"trip16T_CR2_2\":\"1\",\"trip16T_CR2_3\":\"1\",\"trip16T_CR2_4\":\"1\",\"trip16T_CR2_5\":\"1\",\"trip16T_CR2_6\":\"1\",\"Totaltrip16T_CR2\":\"6\",\"subTotalbcm16T_CR2\":\"1.53\",\"Totalbcm16T_CR2\":\"92.04\",\"companyName10\":\"B3\",\"trip16T_CR3_1\":\"1\",\"trip16T_CR3_2\":\"1\",\"trip16T_CR3_3\":\"1\",\"trip16T_CR3_4\":\"1\",\"trip16T_CR3_5\":\"1\",\"trip16T_CR3_6\":\"1\",\"Totaltrip16T_CR3\":\"6\",\"subTotalbcm16T_CR3\":\"1.53\",\"Totalbcm16T_CR3\":\"92.04\",\"companyName11\":\"B4\",\"trip16T_CR4_1\":\"1\",\"trip16T_CR4_2\":\"1\",\"trip16T_CR4_3\":\"1\",\"trip16T_CR4_4\":\"1\",\"trip16T_CR4_5\":\"1\",\"trip16T_CR4_6\":\"1\",\"Totaltrip16T_CR4\":\"6\",\"subTotalbcm16T_CR4\":\"1.53\",\"Totalbcm16T_CR4\":\"92.04\",\"companyName12\":\"C1\",\"trip25T_CR1_1\":\"1\",\"trip25T_CR1_2\":\"1\",\"trip25T_CR1_3\":\"1\",\"trip25T_CR1_4\":\"1\",\"trip25T_CR1_5\":\"1\",\"trip25T_CR1_6\":\"1\",\"Totaltrip25T_CR1\":\"6\",\"subTotalbcm25T_CR1\":\"2.35\",\"Totalbcm25T_CR1\":\"141.24\",\"companyName13\":\"C2\",\"trip25T_CR2_1\":\"1\",\"trip25T_CR2_2\":\"1\",\"trip25T_CR2_3\":\"1\",\"trip25T_CR2_4\":\"1\",\"trip25T_CR2_5\":\"1\",\"trip25T_CR2_6\":\"1\",\"Totaltrip25T_CR2\":\"6\",\"subTotalbcm25T_CR2\":\"2.35\",\"Totalbcm25T_CR2\":\"141.24\",\"companyName14\":\"C3\",\"trip25T_CR3_1\":\"1\",\"trip25T_CR3_2\":\"1\",\"trip25T_CR3_3\":\"1\",\"trip25T_CR3_4\":\"1\",\"trip25T_CR3_5\":\"1\",\"trip25T_CR3_6\":\"1\",\"Totaltrip25T_CR3\":\"6\",\"subTotalbcm25T_CR3\":\"2.35\",\"Totalbcm25T_CR3\":\"141.24\",\"companyName15\":\"C4\",\"trip25T_CR4_1\":\"1\",\"trip25T_CR4_2\":\"1\",\"trip25T_CR4_3\":\"1\",\"trip25T_CR4_4\":\"1\",\"trip25T_CR4_5\":\"1\",\"trip25T_CR4_6\":\"1\",\"Totaltrip25T_CR4\":\"6\",\"subTotalbcm25T_CR4\":\"2.35\",\"Totalbcm25T_CR4\":\"141.24\",\"companyName16\":\"C5\",\"trip25T_CR5_1\":\"1\",\"trip25T_CR5_2\":\"1\",\"trip25T_CR5_3\":\"1\",\"trip25T_CR5_4\":\"1\",\"trip25T_CR5_5\":\"1\",\"trip25T_CR5_6\":\"1\",\"Totaltrip25T_CR5\":\"6\",\"subTotalbcm25T_CR5\":\"2.35\",\"Totalbcm25T_CR5\":\"141.24\",\"companyName17\":\"C6\",\"trip25T_CR6_1\":\"1\",\"trip25T_CR6_2\":\"1\",\"trip25T_CR6_3\":\"1\",\"trip25T_CR6_4\":\"1\",\"trip25T_CR6_5\":\"1\",\"trip25T_CR6_6\":\"1\",\"Totaltrip25T_CR6\":\"6\",\"subTotalbcm25T_CR6\":\"2.35\",\"Totalbcm25T_CR6\":\"141.24\",\"companyName18\":\"C7\",\"trip25T_CR7_1\":\"1\",\"trip25T_CR7_2\":\"1\",\"trip25T_CR7_3\":\"1\",\"trip25T_CR7_4\":\"1\",\"trip25T_CR7_5\":\"1\",\"trip25T_CR7_6\":\"1\",\"Totaltrip25T_CR7\":\"6\",\"subTotalbcm25T_CR7\":\"2.35\",\"Totalbcm25T_CR7\":\"141.24\",\"companyName19\":\"C8\",\"trip25T_CR8_1\":\"1\",\"trip25T_CR8_2\":\"1\",\"trip25T_CR8_3\":\"1\",\"trip25T_CR8_4\":\"1\",\"trip25T_CR8_5\":\"1\",\"trip25T_CR8_6\":\"1\",\"Totaltrip25T_CR8\":\"6\",\"subTotalbcm25T_CR8\":\"2.35\",\"Totalbcm25T_CR8\":\"141.24\",\"companyName191\":\"C9\",\"trip25T_CR9_1\":\"1\",\"trip25T_CR9_2\":\"1\",\"trip25T_CR9_3\":\"1\",\"trip25T_CR9_4\":\"1\",\"trip25T_CR9_5\":\"1\",\"trip25T_CR9_6\":\"1\",\"Totaltrip25T_CR9\":\"6\",\"subTotalbcm25T_CR9\":\"2.35\",\"Totalbcm25T_CR9\":\"141.24\",\"companyName192\":\"C10\",\"trip25T_CR10_1\":\"1\",\"trip25T_CR10_2\":\"1\",\"trip25T_CR10_3\":\"1\",\"trip25T_CR10_4\":\"1\",\"trip25T_CR10_5\":\"1\",\"trip25T_CR10_6\":\"1\",\"Totaltrip25T_CR10\":\"6\",\"subTotalbcm25T_CR10\":\"2.35\",\"Totalbcm25T_CR10\":\"141.24\",\"companyName193\":\"C11\",\"trip25T_CR11_1\":\"1\",\"trip25T_CR11_2\":\"1\",\"trip25T_CR11_3\":\"1\",\"trip25T_CR11_4\":\"1\",\"trip25T_CR11_5\":\"1\",\"trip25T_CR11_6\":\"1\",\"Totaltrip25T_CR11\":\"6\",\"subTotalbcm25T_CR11\":\"2.35\",\"Totalbcm25T_CR11\":\"141.24\",\"companyName194\":\"C12\",\"trip25T_CR12_1\":\"1\",\"trip25T_CR12_2\":\"1\",\"trip25T_CR12_3\":\"1\",\"trip25T_CR12_4\":\"1\",\"trip25T_CR12_5\":\"1\",\"trip25T_CR12_6\":\"1\",\"Totaltrip25T_CR12\":\"6\",\"subTotalbcm25T_CR12\":\"2.35\",\"Totalbcm25T_CR12\":\"141.24\",\"companyName195\":\"C13\",\"trip25T_CR13_1\":\"1\",\"trip25T_CR13_2\":\"1\",\"trip25T_CR13_3\":\"1\",\"trip25T_CR13_4\":\"1\",\"trip25T_CR13_5\":\"1\",\"trip25T_CR13_6\":\"1\",\"Totaltrip25T_CR13\":\"6\",\"subTotalbcm25T_CR13\":\"2.35\",\"Totalbcm25T_CR13\":\"141.24\",\"companyName196\":\"C14\",\"trip25T_CR14_1\":\"1\",\"trip25T_CR14_2\":\"1\",\"trip25T_CR14_3\":\"1\",\"trip25T_CR14_4\":\"1\",\"trip25T_CR14_5\":\"1\",\"trip25T_CR14_6\":\"1\",\"Totaltrip25T_CR14\":\"6\",\"subTotalbcm25T_CR14\":\"2.35\",\"Totalbcm25T_CR14\":\"141.24\",\"companyName20\":\"E1\",\"trip30T_CR1_1\":\"1\",\"trip30T_CR1_2\":\"1\",\"trip30T_CR1_3\":\"1\",\"trip30T_CR1_4\":\"1\",\"trip30T_CR1_5\":\"1\",\"trip30T_CR1_6\":\"1\",\"Totaltrip30T_CR1\":\"6\",\"subTotalbcm30T_CR1\":\"2.70\",\"Totalbcm30T_CR1\":\"162.06\",\"companyName21\":\"E2\",\"trip30T_CR2_1\":\"1\",\"trip30T_CR2_2\":\"1\",\"trip30T_CR2_3\":\"1\",\"trip30T_CR2_4\":\"1\",\"trip30T_CR2_5\":\"1\",\"trip30T_CR2_6\":\"1\",\"Totaltrip30T_CR2\":\"6\",\"subTotalbcm30T_CR2\":\"2.70\",\"Totalbcm30T_CR2\":\"162.06\",\"companyName22\":\"E3\",\"trip30T_CR3_1\":\"1\",\"trip30T_CR3_2\":\"1\",\"trip30T_CR3_3\":\"1\",\"trip30T_CR3_4\":\"1\",\"trip30T_CR3_5\":\"1\",\"trip30T_CR3_6\":\"1\",\"Totaltrip30T_CR3\":\"6\",\"subTotalbcm30T_CR3\":\"2.70\",\"Totalbcm30T_CR3\":\"162.06\",\"companyName23\":\"E4\",\"trip30T_CR4_1\":\"1\",\"trip30T_CR4_2\":\"1\",\"trip30T_CR4_3\":\"1\",\"trip30T_CR4_4\":\"1\",\"trip30T_CR4_5\":\"1\",\"trip30T_CR4_6\":\"1\",\"Totaltrip30T_CR4\":\"6\",\"subTotalbcm30T_CR4\":\"2.70\",\"Totalbcm30T_CR4\":\"162.06\",\"companyName24\":\"E5\",\"trip30T_CR5_1\":\"1\",\"trip30T_CR5_2\":\"1\",\"trip30T_CR5_3\":\"1\",\"trip30T_CR5_4\":\"1\",\"trip30T_CR5_5\":\"1\",\"trip30T_CR5_6\":\"1\",\"Totaltrip30T_CR5\":\"6\",\"subTotalbcm30T_CR5\":\"2.70\",\"Totalbcm30T_CR5\":\"162.06\",\"companyName25\":\"E6\",\"trip30T_CR6_1\":\"1\",\"trip30T_CR6_2\":\"1\",\"trip30T_CR6_3\":\"1\",\"trip30T_CR6_4\":\"1\",\"trip30T_CR6_5\":\"1\",\"trip30T_CR6_6\":\"1\",\"Totaltrip30T_CR6\":\"6\",\"subTotalbcm30T_CR6\":\"2.70\",\"Totalbcm30T_CR6\":\"162.06\",\"bcmBWE1\":\"100\",\"bcmBWE2\":\"100\",\"subTotalbcmBWE\":\"3.33\",\"TotalbcmBWE\":\"200.00\",\"TotalTripJob1\":\"180\",\"TotalBcmJob1\":\"73.83\",\"SumTotalBcmJob1\":\"4436.36\",\"TotalTripJob3\":\"6\",\"TotalBcmJob3\":\"3.64\",\"SumTotalBcmJob3\":\"219.00\",\"TotalTripJob1_3\":\"186\",\"TotalBcmJob1_3\":\"77.47\",\"SumTotalBcmJob1_3\":\"4655.36\",\"toptrip\":\"1\"}', '2021-09-13 17:10:54'),
(3, 'Insert->tbProduction : {\"dateShift\":\"2021-09-15\",\"timeShift\":\"2021-09-15 19:30\",\"overSizerCR1\":\"\",\"overSizerCR2\":\"\",\"overSizerCR3\":\"\",\"overSizerCR4\":\"\",\"overSizerCR5\":\"\",\"overSizerCR6\":\"\",\"TotalOverSizer\":\"0\",\"companyName1\":\"ITD\",\"trip785D_CR1_1\":\"1\",\"trip785D_CR1_2\":\"\",\"trip785D_CR1_3\":\"\",\"trip785D_CR1_4\":\"\",\"trip785D_CR1_5\":\"\",\"trip785D_CR1_6\":\"\",\"Totaltrip785D_CR1\":\"1\",\"subTotalbcm785D_CR1\":\"1.00\",\"Totalbcm785D_CR1\":\"60.09\",\"companyName2\":\"ITD\",\"trip777D_CR1_1\":\"\",\"trip777D_CR1_2\":\"\",\"trip777D_CR1_3\":\"\",\"trip777D_CR1_4\":\"\",\"trip777D_CR1_5\":\"\",\"trip777D_CR1_6\":\"\",\"Totaltrip777D_CR1\":\"0\",\"subTotalbcm777D_CR1\":\"0.00\",\"Totalbcm777D_CR1\":\"0.00\",\"companyName3\":\"EGAT\",\"tripEGAT_CR1_1\":\"\",\"tripEGAT_CR1_2\":\"\",\"tripEGAT_CR1_3\":\"\",\"tripEGAT_CR1_4\":\"\",\"tripEGAT_CR1_5\":\"\",\"tripEGAT_CR1_6\":\"\",\"TotaltripEGAT_CR1\":\"0\",\"subTotalbcmEGAT_CR1\":\"0.00\",\"TotalbcmEGAT_CR1\":\"0.00\",\"companyName4\":\"\",\"trip12T_CR1_1\":\"\",\"trip12T_CR1_2\":\"\",\"trip12T_CR1_3\":\"\",\"trip12T_CR1_4\":\"\",\"trip12T_CR1_5\":\"\",\"trip12T_CR1_6\":\"\",\"Totaltrip12T_CR1\":\"0\",\"subTotalbcm12T_CR1\":\"0.00\",\"Totalbcm12T_CR1\":\"0.00\",\"companyName5\":\"\",\"trip12T_CR2_1\":\"\",\"trip12T_CR2_2\":\"\",\"trip12T_CR2_3\":\"\",\"trip12T_CR2_4\":\"\",\"trip12T_CR2_5\":\"\",\"trip12T_CR2_6\":\"\",\"Totaltrip12T_CR2\":\"0\",\"subTotalbcm12T_CR2\":\"0.00\",\"Totalbcm12T_CR2\":\"0.00\",\"companyName6\":\"\",\"trip12T_CR3_1\":\"\",\"trip12T_CR3_2\":\"\",\"trip12T_CR3_3\":\"\",\"trip12T_CR3_4\":\"\",\"trip12T_CR3_5\":\"\",\"trip12T_CR3_6\":\"\",\"Totaltrip12T_CR3\":\"0\",\"subTotalbcm12T_CR3\":\"0.00\",\"Totalbcm12T_CR3\":\"0.00\",\"companyName7\":\"\",\"trip12T_CR4_1\":\"\",\"trip12T_CR4_2\":\"\",\"trip12T_CR4_3\":\"\",\"trip12T_CR4_4\":\"\",\"trip12T_CR4_5\":\"\",\"trip12T_CR4_6\":\"\",\"Totaltrip12T_CR4\":\"0\",\"subTotalbcm12T_CR4\":\"0.00\",\"Totalbcm12T_CR4\":\"0.00\",\"companyName8\":\"\",\"trip16T_CR1_1\":\"\",\"trip16T_CR1_2\":\"\",\"trip16T_CR1_3\":\"\",\"trip16T_CR1_4\":\"\",\"trip16T_CR1_5\":\"\",\"trip16T_CR1_6\":\"\",\"Totaltrip16T_CR1\":\"0\",\"subTotalbcm16T_CR1\":\"0.00\",\"Totalbcm16T_CR1\":\"0.00\",\"companyName9\":\"\",\"trip16T_CR2_1\":\"\",\"trip16T_CR2_2\":\"\",\"trip16T_CR2_3\":\"\",\"trip16T_CR2_4\":\"\",\"trip16T_CR2_5\":\"\",\"trip16T_CR2_6\":\"\",\"Totaltrip16T_CR2\":\"0\",\"subTotalbcm16T_CR2\":\"0.00\",\"Totalbcm16T_CR2\":\"0.00\",\"companyName10\":\"\",\"trip16T_CR3_1\":\"\",\"trip16T_CR3_2\":\"\",\"trip16T_CR3_3\":\"\",\"trip16T_CR3_4\":\"\",\"trip16T_CR3_5\":\"\",\"trip16T_CR3_6\":\"\",\"Totaltrip16T_CR3\":\"0\",\"subTotalbcm16T_CR3\":\"0.00\",\"Totalbcm16T_CR3\":\"0.00\",\"companyName11\":\"\",\"trip16T_CR4_1\":\"\",\"trip16T_CR4_2\":\"\",\"trip16T_CR4_3\":\"\",\"trip16T_CR4_4\":\"\",\"trip16T_CR4_5\":\"\",\"trip16T_CR4_6\":\"\",\"Totaltrip16T_CR4\":\"0\",\"subTotalbcm16T_CR4\":\"0.00\",\"Totalbcm16T_CR4\":\"0.00\",\"companyName12\":\"\",\"trip25T_CR1_1\":\"\",\"trip25T_CR1_2\":\"\",\"trip25T_CR1_3\":\"\",\"trip25T_CR1_4\":\"\",\"trip25T_CR1_5\":\"\",\"trip25T_CR1_6\":\"\",\"Totaltrip25T_CR1\":\"0\",\"subTotalbcm25T_CR1\":\"0.00\",\"Totalbcm25T_CR1\":\"0.00\",\"companyName13\":\"\",\"trip25T_CR2_1\":\"\",\"trip25T_CR2_2\":\"\",\"trip25T_CR2_3\":\"\",\"trip25T_CR2_4\":\"\",\"trip25T_CR2_5\":\"\",\"trip25T_CR2_6\":\"\",\"Totaltrip25T_CR2\":\"0\",\"subTotalbcm25T_CR2\":\"0.00\",\"Totalbcm25T_CR2\":\"0.00\",\"companyName14\":\"\",\"trip25T_CR3_1\":\"\",\"trip25T_CR3_2\":\"\",\"trip25T_CR3_3\":\"\",\"trip25T_CR3_4\":\"\",\"trip25T_CR3_5\":\"\",\"trip25T_CR3_6\":\"\",\"Totaltrip25T_CR3\":\"0\",\"subTotalbcm25T_CR3\":\"0.00\",\"Totalbcm25T_CR3\":\"0.00\",\"companyName15\":\"\",\"trip25T_CR4_1\":\"\",\"trip25T_CR4_2\":\"\",\"trip25T_CR4_3\":\"\",\"trip25T_CR4_4\":\"\",\"trip25T_CR4_5\":\"\",\"trip25T_CR4_6\":\"\",\"Totaltrip25T_CR4\":\"0\",\"subTotalbcm25T_CR4\":\"0.00\",\"Totalbcm25T_CR4\":\"0.00\",\"companyName16\":\"\",\"trip25T_CR5_1\":\"\",\"trip25T_CR5_2\":\"\",\"trip25T_CR5_3\":\"\",\"trip25T_CR5_4\":\"\",\"trip25T_CR5_5\":\"\",\"trip25T_CR5_6\":\"\",\"Totaltrip25T_CR5\":\"0\",\"subTotalbcm25T_CR5\":\"0.00\",\"Totalbcm25T_CR5\":\"0.00\",\"companyName17\":\"\",\"trip25T_CR6_1\":\"\",\"trip25T_CR6_2\":\"\",\"trip25T_CR6_3\":\"\",\"trip25T_CR6_4\":\"\",\"trip25T_CR6_5\":\"\",\"trip25T_CR6_6\":\"\",\"Totaltrip25T_CR6\":\"0\",\"subTotalbcm25T_CR6\":\"0.00\",\"Totalbcm25T_CR6\":\"0.00\",\"companyName18\":\"\",\"trip25T_CR7_1\":\"\",\"trip25T_CR7_2\":\"\",\"trip25T_CR7_3\":\"\",\"trip25T_CR7_4\":\"\",\"trip25T_CR7_5\":\"\",\"trip25T_CR7_6\":\"\",\"Totaltrip25T_CR7\":\"0\",\"subTotalbcm25T_CR7\":\"0.00\",\"Totalbcm25T_CR7\":\"0.00\",\"companyName19\":\"\",\"trip25T_CR8_1\":\"\",\"trip25T_CR8_2\":\"\",\"trip25T_CR8_3\":\"\",\"trip25T_CR8_4\":\"\",\"trip25T_CR8_5\":\"\",\"trip25T_CR8_6\":\"\",\"Totaltrip25T_CR8\":\"0\",\"subTotalbcm25T_CR8\":\"0.00\",\"Totalbcm25T_CR8\":\"0.00\",\"companyName191\":\"\",\"trip25T_CR9_1\":\"\",\"trip25T_CR9_2\":\"\",\"trip25T_CR9_3\":\"\",\"trip25T_CR9_4\":\"\",\"trip25T_CR9_5\":\"\",\"trip25T_CR9_6\":\"\",\"Totaltrip25T_CR9\":\"0\",\"subTotalbcm25T_CR9\":\"0.00\",\"Totalbcm25T_CR9\":\"0.00\",\"companyName192\":\"\",\"trip25T_CR10_1\":\"\",\"trip25T_CR10_2\":\"\",\"trip25T_CR10_3\":\"\",\"trip25T_CR10_4\":\"\",\"trip25T_CR10_5\":\"\",\"trip25T_CR10_6\":\"\",\"Totaltrip25T_CR10\":\"0\",\"subTotalbcm25T_CR10\":\"0.00\",\"Totalbcm25T_CR10\":\"0.00\",\"companyName193\":\"\",\"trip25T_CR11_1\":\"\",\"trip25T_CR11_2\":\"\",\"trip25T_CR11_3\":\"\",\"trip25T_CR11_4\":\"\",\"trip25T_CR11_5\":\"\",\"trip25T_CR11_6\":\"\",\"Totaltrip25T_CR11\":\"0\",\"subTotalbcm25T_CR11\":\"0.00\",\"Totalbcm25T_CR11\":\"0.00\",\"companyName194\":\"\",\"trip25T_CR12_1\":\"\",\"trip25T_CR12_2\":\"\",\"trip25T_CR12_3\":\"\",\"trip25T_CR12_4\":\"\",\"trip25T_CR12_5\":\"\",\"trip25T_CR12_6\":\"\",\"Totaltrip25T_CR12\":\"0\",\"subTotalbcm25T_CR12\":\"0.00\",\"Totalbcm25T_CR12\":\"0.00\",\"companyName195\":\"\",\"trip25T_CR13_1\":\"\",\"trip25T_CR13_2\":\"\",\"trip25T_CR13_3\":\"\",\"trip25T_CR13_4\":\"\",\"trip25T_CR13_5\":\"\",\"trip25T_CR13_6\":\"\",\"Totaltrip25T_CR13\":\"0\",\"subTotalbcm25T_CR13\":\"0.00\",\"Totalbcm25T_CR13\":\"0.00\",\"companyName196\":\"\",\"trip25T_CR14_1\":\"\",\"trip25T_CR14_2\":\"\",\"trip25T_CR14_3\":\"\",\"trip25T_CR14_4\":\"\",\"trip25T_CR14_5\":\"\",\"trip25T_CR14_6\":\"\",\"Totaltrip25T_CR14\":\"0\",\"subTotalbcm25T_CR14\":\"0.00\",\"Totalbcm25T_CR14\":\"0.00\",\"companyName20\":\"\",\"trip30T_CR1_1\":\"\",\"trip30T_CR1_2\":\"\",\"trip30T_CR1_3\":\"\",\"trip30T_CR1_4\":\"\",\"trip30T_CR1_5\":\"\",\"trip30T_CR1_6\":\"\",\"Totaltrip30T_CR1\":\"0\",\"subTotalbcm30T_CR1\":\"0.00\",\"Totalbcm30T_CR1\":\"0.00\",\"companyName21\":\"\",\"trip30T_CR2_1\":\"\",\"trip30T_CR2_2\":\"\",\"trip30T_CR2_3\":\"\",\"trip30T_CR2_4\":\"\",\"trip30T_CR2_5\":\"\",\"trip30T_CR2_6\":\"\",\"Totaltrip30T_CR2\":\"0\",\"subTotalbcm30T_CR2\":\"0.00\",\"Totalbcm30T_CR2\":\"0.00\",\"companyName22\":\"\",\"trip30T_CR3_1\":\"\",\"trip30T_CR3_2\":\"\",\"trip30T_CR3_3\":\"\",\"trip30T_CR3_4\":\"\",\"trip30T_CR3_5\":\"\",\"trip30T_CR3_6\":\"\",\"Totaltrip30T_CR3\":\"0\",\"subTotalbcm30T_CR3\":\"0.00\",\"Totalbcm30T_CR3\":\"0.00\",\"companyName23\":\"\",\"trip30T_CR4_1\":\"\",\"trip30T_CR4_2\":\"\",\"trip30T_CR4_3\":\"\",\"trip30T_CR4_4\":\"\",\"trip30T_CR4_5\":\"\",\"trip30T_CR4_6\":\"\",\"Totaltrip30T_CR4\":\"0\",\"subTotalbcm30T_CR4\":\"0.00\",\"Totalbcm30T_CR4\":\"0.00\",\"companyName24\":\"\",\"trip30T_CR5_1\":\"\",\"trip30T_CR5_2\":\"\",\"trip30T_CR5_3\":\"\",\"trip30T_CR5_4\":\"\",\"trip30T_CR5_5\":\"\",\"trip30T_CR5_6\":\"\",\"Totaltrip30T_CR5\":\"0\",\"subTotalbcm30T_CR5\":\"0.00\",\"Totalbcm30T_CR5\":\"0.00\",\"companyName25\":\"\",\"trip30T_CR6_1\":\"\",\"trip30T_CR6_2\":\"\",\"trip30T_CR6_3\":\"\",\"trip30T_CR6_4\":\"\",\"trip30T_CR6_5\":\"\",\"trip30T_CR6_6\":\"\",\"Totaltrip30T_CR6\":\"0\",\"subTotalbcm30T_CR6\":\"0.00\",\"Totalbcm30T_CR6\":\"0.00\",\"bcmBWE1\":\"\",\"bcmBWE2\":\"\",\"subTotalbcmBWE\":\"0.00\",\"TotalbcmBWE\":\"0.00\",\"TotalTripJob1\":\"1\",\"TotalBcmJob1\":\"1.00\",\"SumTotalBcmJob1\":\"60.09\",\"TotalTripJob3\":\"0\",\"TotalBcmJob3\":\"0.00\",\"SumTotalBcmJob3\":\"0.00\",\"TotalTripJob1_3\":\"1\",\"TotalBcmJob1_3\":\"1.00\",\"SumTotalBcmJob1_3\":\"60.09\",\"toptrip\":\"0\"}', '2021-09-15 16:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_production`
--

CREATE TABLE `tb_production` (
  `id` int(11) NOT NULL,
  `dateShift` varchar(10) NOT NULL,
  `timeShift` varchar(50) NOT NULL,
  `overSizerCR1` int(2) NOT NULL,
  `overSizerCR2` int(2) NOT NULL,
  `overSizerCR3` int(2) NOT NULL,
  `overSizerCR4` int(2) NOT NULL,
  `overSizerCR5` int(2) NOT NULL,
  `overSizerCR6` int(2) NOT NULL,
  `TotalOverSizer` int(2) NOT NULL,
  `companyName1` varchar(5) NOT NULL,
  `trip785D_CR1_1` int(2) NOT NULL,
  `trip785D_CR1_2` int(2) NOT NULL,
  `trip785D_CR1_3` int(2) NOT NULL,
  `trip785D_CR1_4` int(2) NOT NULL,
  `trip785D_CR1_5` int(2) NOT NULL,
  `trip785D_CR1_6` int(2) NOT NULL,
  `Totaltrip785D_CR1` varchar(10) NOT NULL,
  `subTotalbcm785D_CR1` varchar(10) NOT NULL,
  `Totalbcm785D_CR1` varchar(10) NOT NULL,
  `companyName2` varchar(5) NOT NULL,
  `trip777D_CR1_1` int(2) NOT NULL,
  `trip777D_CR1_2` int(2) NOT NULL,
  `trip777D_CR1_3` int(2) NOT NULL,
  `trip777D_CR1_4` int(2) NOT NULL,
  `trip777D_CR1_5` int(2) NOT NULL,
  `trip777D_CR1_6` int(2) NOT NULL,
  `Totaltrip777D_CR1` varchar(10) NOT NULL,
  `subTotalbcm777D_CR1` varchar(10) NOT NULL,
  `Totalbcm777D_CR1` varchar(10) NOT NULL,
  `companyName3` varchar(5) NOT NULL,
  `tripEGAT_CR1_1` int(2) NOT NULL,
  `tripEGAT_CR1_2` int(2) NOT NULL,
  `tripEGAT_CR1_3` int(2) NOT NULL,
  `tripEGAT_CR1_4` int(2) NOT NULL,
  `tripEGAT_CR1_5` int(2) NOT NULL,
  `tripEGAT_CR1_6` int(2) NOT NULL,
  `TotaltripEGAT_CR1` varchar(10) NOT NULL,
  `subTotalbcmEGAT_CR1` varchar(10) NOT NULL,
  `TotalbcmEGAT_CR1` varchar(10) NOT NULL,
  `companyName4` varchar(5) NOT NULL,
  `trip12T_CR1_1` int(2) NOT NULL,
  `trip12T_CR1_2` int(2) NOT NULL,
  `trip12T_CR1_3` int(2) NOT NULL,
  `trip12T_CR1_4` int(2) NOT NULL,
  `trip12T_CR1_5` int(2) NOT NULL,
  `trip12T_CR1_6` int(2) NOT NULL,
  `Totaltrip12T_CR1` varchar(10) NOT NULL,
  `subTotalbcm12T_CR1` varchar(10) NOT NULL,
  `Totalbcm12T_CR1` varchar(10) NOT NULL,
  `companyName5` varchar(5) NOT NULL,
  `trip12T_CR2_1` int(2) NOT NULL,
  `trip12T_CR2_2` int(2) NOT NULL,
  `trip12T_CR2_3` int(2) NOT NULL,
  `trip12T_CR2_4` int(2) NOT NULL,
  `trip12T_CR2_5` int(2) NOT NULL,
  `trip12T_CR2_6` int(2) NOT NULL,
  `Totaltrip12T_CR2` varchar(10) NOT NULL,
  `subTotalbcm12T_CR2` varchar(10) NOT NULL,
  `Totalbcm12T_CR2` varchar(10) NOT NULL,
  `companyName6` varchar(10) NOT NULL,
  `trip12T_CR3_1` int(2) NOT NULL,
  `trip12T_CR3_2` int(2) NOT NULL,
  `trip12T_CR3_3` int(2) NOT NULL,
  `trip12T_CR3_4` int(2) NOT NULL,
  `trip12T_CR3_5` int(2) NOT NULL,
  `trip12T_CR3_6` int(2) NOT NULL,
  `Totaltrip12T_CR3` varchar(10) NOT NULL,
  `subTotalbcm12T_CR3` varchar(10) NOT NULL,
  `Totalbcm12T_CR3` varchar(10) NOT NULL,
  `companyName7` varchar(5) NOT NULL,
  `trip12T_CR4_1` int(2) NOT NULL,
  `trip12T_CR4_2` int(2) NOT NULL,
  `trip12T_CR4_3` int(2) NOT NULL,
  `trip12T_CR4_4` int(2) NOT NULL,
  `trip12T_CR4_5` int(2) NOT NULL,
  `trip12T_CR4_6` int(2) NOT NULL,
  `Totaltrip12T_CR4` varchar(10) NOT NULL,
  `subTotalbcm12T_CR4` varchar(10) NOT NULL,
  `Totalbcm12T_CR4` varchar(10) NOT NULL,
  `companyName8` varchar(5) NOT NULL,
  `trip16T_CR1_1` int(2) NOT NULL,
  `trip16T_CR1_2` int(2) NOT NULL,
  `trip16T_CR1_3` int(2) NOT NULL,
  `trip16T_CR1_4` int(2) NOT NULL,
  `trip16T_CR1_5` int(2) NOT NULL,
  `trip16T_CR1_6` int(2) NOT NULL,
  `Totaltrip16T_CR1` varchar(10) NOT NULL,
  `subTotalbcm16T_CR1` varchar(10) NOT NULL,
  `Totalbcm16T_CR1` varchar(10) NOT NULL,
  `companyName9` varchar(5) NOT NULL,
  `trip16T_CR2_1` int(2) NOT NULL,
  `trip16T_CR2_2` int(2) NOT NULL,
  `trip16T_CR2_3` int(2) NOT NULL,
  `trip16T_CR2_4` int(2) NOT NULL,
  `trip16T_CR2_5` int(2) NOT NULL,
  `trip16T_CR2_6` int(2) NOT NULL,
  `Totaltrip16T_CR2` varchar(10) NOT NULL,
  `subTotalbcm16T_CR2` varchar(10) NOT NULL,
  `Totalbcm16T_CR2` varchar(10) NOT NULL,
  `companyName10` varchar(5) NOT NULL,
  `trip16T_CR3_1` int(2) NOT NULL,
  `trip16T_CR3_2` int(2) NOT NULL,
  `trip16T_CR3_3` int(2) NOT NULL,
  `trip16T_CR3_4` int(2) NOT NULL,
  `trip16T_CR3_5` int(2) NOT NULL,
  `trip16T_CR3_6` int(2) NOT NULL,
  `Totaltrip16T_CR3` varchar(10) NOT NULL,
  `subTotalbcm16T_CR3` varchar(10) NOT NULL,
  `Totalbcm16T_CR3` varchar(10) NOT NULL,
  `companyName11` varchar(5) NOT NULL,
  `trip16T_CR4_1` int(2) NOT NULL,
  `trip16T_CR4_2` int(2) NOT NULL,
  `trip16T_CR4_3` int(2) NOT NULL,
  `trip16T_CR4_4` int(2) NOT NULL,
  `trip16T_CR4_5` int(2) NOT NULL,
  `trip16T_CR4_6` int(2) NOT NULL,
  `Totaltrip16T_CR4` varchar(5) NOT NULL,
  `subTotalbcm16T_CR4` varchar(5) NOT NULL,
  `Totalbcm16T_CR4` varchar(5) NOT NULL,
  `companyName12` varchar(5) NOT NULL,
  `trip25T_CR1_1` int(2) NOT NULL,
  `trip25T_CR1_2` int(2) NOT NULL,
  `trip25T_CR1_3` int(2) NOT NULL,
  `trip25T_CR1_4` int(2) NOT NULL,
  `trip25T_CR1_5` int(2) NOT NULL,
  `trip25T_CR1_6` int(2) NOT NULL,
  `Totaltrip25T_CR1` varchar(5) NOT NULL,
  `subTotalbcm25T_CR1` varchar(5) NOT NULL,
  `Totalbcm25T_CR1` varchar(5) NOT NULL,
  `companyName13` varchar(5) NOT NULL,
  `trip25T_CR2_1` int(2) NOT NULL,
  `trip25T_CR2_2` int(2) NOT NULL,
  `trip25T_CR2_3` int(2) NOT NULL,
  `trip25T_CR2_4` int(2) NOT NULL,
  `trip25T_CR2_5` int(2) NOT NULL,
  `trip25T_CR2_6` int(2) NOT NULL,
  `Totaltrip25T_CR2` varchar(5) NOT NULL,
  `subTotalbcm25T_CR2` varchar(5) NOT NULL,
  `Totalbcm25T_CR2` varchar(5) NOT NULL,
  `companyName14` varchar(5) NOT NULL,
  `trip25T_CR3_1` int(2) NOT NULL,
  `trip25T_CR3_2` int(2) NOT NULL,
  `trip25T_CR3_3` int(2) NOT NULL,
  `trip25T_CR3_4` int(2) NOT NULL,
  `trip25T_CR3_5` int(2) NOT NULL,
  `trip25T_CR3_6` int(2) NOT NULL,
  `Totaltrip25T_CR3` varchar(5) NOT NULL,
  `subTotalbcm25T_CR3` varchar(5) NOT NULL,
  `Totalbcm25T_CR3` varchar(5) NOT NULL,
  `companyName15` varchar(5) NOT NULL,
  `trip25T_CR4_1` int(2) NOT NULL,
  `trip25T_CR4_2` int(2) NOT NULL,
  `trip25T_CR4_3` int(2) NOT NULL,
  `trip25T_CR4_4` int(2) NOT NULL,
  `trip25T_CR4_5` int(2) NOT NULL,
  `trip25T_CR4_6` int(2) NOT NULL,
  `Totaltrip25T_CR4` varchar(5) NOT NULL,
  `subTotalbcm25T_CR4` varchar(5) NOT NULL,
  `Totalbcm25T_CR4` varchar(5) NOT NULL,
  `companyName16` varchar(5) NOT NULL,
  `trip25T_CR5_1` int(2) NOT NULL,
  `trip25T_CR5_2` int(2) NOT NULL,
  `trip25T_CR5_3` int(2) NOT NULL,
  `trip25T_CR5_4` int(2) NOT NULL,
  `trip25T_CR5_5` int(2) NOT NULL,
  `trip25T_CR5_6` int(2) NOT NULL,
  `Totaltrip25T_CR5` varchar(5) NOT NULL,
  `subTotalbcm25T_CR5` varchar(5) NOT NULL,
  `Totalbcm25T_CR5` varchar(5) NOT NULL,
  `companyName17` varchar(5) NOT NULL,
  `trip25T_CR6_1` int(2) NOT NULL,
  `trip25T_CR6_2` int(2) NOT NULL,
  `trip25T_CR6_3` int(2) NOT NULL,
  `trip25T_CR6_4` int(2) NOT NULL,
  `trip25T_CR6_5` int(2) NOT NULL,
  `trip25T_CR6_6` int(2) NOT NULL,
  `Totaltrip25T_CR6` varchar(5) NOT NULL,
  `subTotalbcm25T_CR6` varchar(5) NOT NULL,
  `Totalbcm25T_CR6` varchar(5) NOT NULL,
  `companyName18` varchar(5) NOT NULL,
  `trip25T_CR7_1` int(2) NOT NULL,
  `trip25T_CR7_2` int(2) NOT NULL,
  `trip25T_CR7_3` int(2) NOT NULL,
  `trip25T_CR7_4` int(2) NOT NULL,
  `trip25T_CR7_5` int(2) NOT NULL,
  `trip25T_CR7_6` int(2) NOT NULL,
  `Totaltrip25T_CR7` varchar(5) NOT NULL,
  `subTotalbcm25T_CR7` varchar(5) NOT NULL,
  `Totalbcm25T_CR7` varchar(5) NOT NULL,
  `companyName19` varchar(5) NOT NULL,
  `trip25T_CR8_1` int(2) NOT NULL,
  `trip25T_CR8_2` int(2) NOT NULL,
  `trip25T_CR8_3` int(2) NOT NULL,
  `trip25T_CR8_4` int(2) NOT NULL,
  `trip25T_CR8_5` int(2) NOT NULL,
  `trip25T_CR8_6` int(2) DEFAULT NULL,
  `Totaltrip25T_CR8` varchar(5) NOT NULL,
  `subTotalbcm25T_CR8` varchar(5) NOT NULL,
  `Totalbcm25T_CR8` varchar(5) NOT NULL,
  `companyName191` varchar(5) NOT NULL,
  `trip25T_CR9_1` int(2) NOT NULL,
  `trip25T_CR9_2` int(2) NOT NULL,
  `trip25T_CR9_3` int(2) NOT NULL,
  `trip25T_CR9_4` int(2) NOT NULL,
  `trip25T_CR9_5` int(2) NOT NULL,
  `trip25T_CR9_6` int(2) NOT NULL,
  `Totaltrip25T_CR9` varchar(5) NOT NULL,
  `subTotalbcm25T_CR9` varchar(5) NOT NULL,
  `Totalbcm25T_CR9` varchar(5) NOT NULL,
  `companyName192` varchar(5) NOT NULL,
  `trip25T_CR10_1` int(2) NOT NULL,
  `trip25T_CR10_2` int(2) NOT NULL,
  `trip25T_CR10_3` int(2) NOT NULL,
  `trip25T_CR10_4` int(2) NOT NULL,
  `trip25T_CR10_5` int(2) NOT NULL,
  `trip25T_CR10_6` int(2) NOT NULL,
  `Totaltrip25T_CR10` varchar(5) NOT NULL,
  `subTotalbcm25T_CR10` varchar(5) NOT NULL,
  `Totalbcm25T_CR10` varchar(5) NOT NULL,
  `companyName193` varchar(5) NOT NULL,
  `trip25T_CR11_1` int(2) NOT NULL,
  `trip25T_CR11_2` int(2) NOT NULL,
  `trip25T_CR11_3` int(2) NOT NULL,
  `trip25T_CR11_4` int(2) NOT NULL,
  `trip25T_CR11_5` int(2) NOT NULL,
  `trip25T_CR11_6` int(2) NOT NULL,
  `Totaltrip25T_CR11` varchar(5) NOT NULL,
  `subTotalbcm25T_CR11` varchar(5) NOT NULL,
  `Totalbcm25T_CR11` varchar(5) NOT NULL,
  `companyName194` varchar(5) NOT NULL,
  `trip25T_CR12_1` int(2) NOT NULL,
  `trip25T_CR12_2` int(2) NOT NULL,
  `trip25T_CR12_3` int(2) NOT NULL,
  `trip25T_CR12_4` int(2) NOT NULL,
  `trip25T_CR12_5` int(2) NOT NULL,
  `trip25T_CR12_6` int(2) NOT NULL,
  `Totaltrip25T_CR12` varchar(5) NOT NULL,
  `subTotalbcm25T_CR12` varchar(5) NOT NULL,
  `Totalbcm25T_CR12` varchar(5) NOT NULL,
  `companyName195` varchar(5) NOT NULL,
  `trip25T_CR13_1` int(2) NOT NULL,
  `trip25T_CR13_2` int(2) NOT NULL,
  `trip25T_CR13_3` int(2) NOT NULL,
  `trip25T_CR13_4` int(2) NOT NULL,
  `trip25T_CR13_5` int(2) NOT NULL,
  `trip25T_CR13_6` int(2) NOT NULL,
  `Totaltrip25T_CR13` varchar(5) NOT NULL,
  `subTotalbcm25T_CR13` varchar(5) NOT NULL,
  `Totalbcm25T_CR13` varchar(5) NOT NULL,
  `companyName196` varchar(5) NOT NULL,
  `trip25T_CR14_1` int(2) NOT NULL,
  `trip25T_CR14_2` int(2) NOT NULL,
  `trip25T_CR14_3` int(2) NOT NULL,
  `trip25T_CR14_4` int(2) NOT NULL,
  `trip25T_CR14_5` int(2) NOT NULL,
  `trip25T_CR14_6` int(2) NOT NULL,
  `Totaltrip25T_CR14` varchar(5) NOT NULL,
  `subTotalbcm25T_CR14` varchar(5) NOT NULL,
  `Totalbcm25T_CR14` varchar(5) NOT NULL,
  `companyName20` varchar(5) NOT NULL,
  `trip30T_CR1_1` int(2) NOT NULL,
  `trip30T_CR1_2` int(2) NOT NULL,
  `trip30T_CR1_3` int(2) NOT NULL,
  `trip30T_CR1_4` int(2) NOT NULL,
  `trip30T_CR1_5` int(2) NOT NULL,
  `trip30T_CR1_6` int(2) NOT NULL,
  `Totaltrip30T_CR1` varchar(5) NOT NULL,
  `subTotalbcm30T_CR1` varchar(5) NOT NULL,
  `Totalbcm30T_CR1` varchar(5) NOT NULL,
  `companyName21` varchar(5) NOT NULL,
  `trip30T_CR2_1` int(2) NOT NULL,
  `trip30T_CR2_2` int(2) NOT NULL,
  `trip30T_CR2_3` int(2) NOT NULL,
  `trip30T_CR2_4` int(2) NOT NULL,
  `trip30T_CR2_5` int(2) NOT NULL,
  `trip30T_CR2_6` int(2) NOT NULL,
  `Totaltrip30T_CR2` varchar(5) NOT NULL,
  `subTotalbcm30T_CR2` varchar(5) NOT NULL,
  `Totalbcm30T_CR2` varchar(5) NOT NULL,
  `companyName22` varchar(5) NOT NULL,
  `trip30T_CR3_1` int(2) NOT NULL,
  `trip30T_CR3_2` int(2) NOT NULL,
  `trip30T_CR3_3` int(2) NOT NULL,
  `trip30T_CR3_4` int(2) NOT NULL,
  `trip30T_CR3_5` int(2) NOT NULL,
  `trip30T_CR3_6` int(2) NOT NULL,
  `Totaltrip30T_CR3` varchar(5) NOT NULL,
  `subTotalbcm30T_CR3` varchar(5) NOT NULL,
  `Totalbcm30T_CR3` varchar(5) NOT NULL,
  `companyName23` varchar(5) NOT NULL,
  `trip30T_CR4_1` int(2) NOT NULL,
  `trip30T_CR4_2` int(2) NOT NULL,
  `trip30T_CR4_3` int(2) NOT NULL,
  `trip30T_CR4_4` int(2) NOT NULL,
  `trip30T_CR4_5` int(2) NOT NULL,
  `trip30T_CR4_6` int(2) NOT NULL,
  `Totaltrip30T_CR4` varchar(5) NOT NULL,
  `subTotalbcm30T_CR4` varchar(5) NOT NULL,
  `Totalbcm30T_CR4` varchar(5) NOT NULL,
  `companyName24` varchar(5) NOT NULL,
  `trip30T_CR5_1` int(2) NOT NULL,
  `trip30T_CR5_2` int(2) NOT NULL,
  `trip30T_CR5_3` int(2) NOT NULL,
  `trip30T_CR5_4` int(2) NOT NULL,
  `trip30T_CR5_5` int(2) NOT NULL,
  `trip30T_CR5_6` int(2) NOT NULL,
  `Totaltrip30T_CR5` varchar(5) NOT NULL,
  `subTotalbcm30T_CR5` varchar(5) NOT NULL,
  `Totalbcm30T_CR5` varchar(5) NOT NULL,
  `companyName25` varchar(5) NOT NULL,
  `trip30T_CR6_1` int(2) NOT NULL,
  `trip30T_CR6_2` int(2) NOT NULL,
  `trip30T_CR6_3` int(2) NOT NULL,
  `trip30T_CR6_4` int(2) NOT NULL,
  `trip30T_CR6_5` int(2) NOT NULL,
  `trip30T_CR6_6` int(2) NOT NULL,
  `Totaltrip30T_CR6` varchar(5) NOT NULL,
  `subTotalbcm30T_CR6` varchar(5) NOT NULL,
  `Totalbcm30T_CR6` varchar(5) NOT NULL,
  `bcmBWE1` varchar(8) NOT NULL,
  `bcmBWE2` varchar(8) NOT NULL,
  `subTotalbcmBWE` varchar(10) NOT NULL,
  `TotalbcmBWE` varchar(10) NOT NULL,
  `TotalTripJob1` varchar(8) NOT NULL,
  `TotalBcmJob1` varchar(8) NOT NULL,
  `SumTotalBcmJob1` varchar(8) NOT NULL,
  `TotalTripJob3` varchar(8) NOT NULL,
  `TotalBcmJob3` varchar(8) NOT NULL,
  `SumTotalBcmJob3` varchar(8) NOT NULL,
  `TotalTripJob1_3` varchar(8) NOT NULL,
  `TotalBcmJob1_3` varchar(8) NOT NULL,
  `SumTotalBcmJob1_3` varchar(8) NOT NULL,
  `toptrip` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_system`
--

CREATE TABLE `tb_system` (
  `id` int(1) NOT NULL,
  `nameSystem` varchar(10) NOT NULL,
  `tarGet` int(11) NOT NULL,
  `crName1` varchar(5) NOT NULL,
  `crName2` varchar(5) NOT NULL,
  `crName3` varchar(5) NOT NULL,
  `crName4` varchar(5) NOT NULL,
  `crName5` varchar(5) NOT NULL,
  `crName6` varchar(5) NOT NULL,
  `cat785D` double DEFAULT NULL,
  `cat777D` double NOT NULL,
  `dum12T` double NOT NULL,
  `dum16T` double NOT NULL,
  `dum25T` double NOT NULL,
  `dum30T` double NOT NULL,
  `EGAT` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_system`
--

INSERT INTO `tb_system` (`id`, `nameSystem`, `tarGet`, `crName1`, `crName2`, `crName3`, `crName4`, `crName5`, `crName6`, `cat785D`, `cat777D`, `dum12T`, `dum16T`, `dum25T`, `dum30T`, `EGAT`) VALUES
(1, 'Line-B', 3000, 'CR-A', 'CR-B', 'CR-C', 'CR-D', 'CR-E', 'CR-F', 60.09, 40.03, 13.24, 15.34, 23.54, 27.01, 36.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_blocksizer`
--
ALTER TABLE `tb_blocksizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tb_production`
--
ALTER TABLE `tb_production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_system`
--
ALTER TABLE `tb_system`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_blocksizer`
--
ALTER TABLE `tb_blocksizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_production`
--
ALTER TABLE `tb_production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_system`
--
ALTER TABLE `tb_system`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
