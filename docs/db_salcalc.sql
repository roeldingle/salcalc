-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2013 at 01:59 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_salcalc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_philhealth`
--

CREATE TABLE IF NOT EXISTS `tb_philhealth` (
  `tp_idx` int(11) NOT NULL AUTO_INCREMENT,
  `tp_range_from` double NOT NULL,
  `tp_range_to` double NOT NULL,
  `tp_ded_er` double NOT NULL,
  `tp_ded_ee` double NOT NULL,
  PRIMARY KEY (`tp_idx`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tb_philhealth`
--

INSERT INTO `tb_philhealth` (`tp_idx`, `tp_range_from`, `tp_range_to`, `tp_ded_er`, `tp_ded_ee`) VALUES
(1, 0, 7999.99, 87.5, 87.5),
(2, 8000, 8999.99, 100, 100),
(3, 9000, 9999.99, 112.5, 112.5),
(4, 10000, 10999.99, 125, 125),
(5, 11000, 11999.99, 137.5, 137.5),
(6, 12000, 12999.99, 150, 150),
(7, 13000, 13999.99, 162.5, 162.5),
(8, 14000, 14999.99, 175, 175),
(9, 15000, 15999.99, 187.5, 187.5),
(10, 16000, 16999.99, 200, 200),
(11, 17000, 17999.99, 212.5, 212.5),
(12, 18000, 18999.99, 225, 225),
(13, 19000, 19999.99, 237.5, 237.5),
(14, 20000, 20999.99, 250, 250),
(15, 21000, 21999.99, 262.5, 262.5),
(16, 22000, 22999.99, 275, 275),
(17, 23000, 23999.99, 287.5, 287.5),
(18, 24000, 24999.99, 300, 300),
(19, 25000, 25999.99, 312.5, 312.5),
(20, 26000, 26999.99, 325, 325),
(21, 27000, 27999.99, 337.5, 337.5),
(22, 28000, 28999.99, 350, 350),
(23, 29000, 29999.99, 362.5, 362.5),
(24, 30000, 30999.99, 375, 375),
(25, 31000, 31999.99, 387.5, 387.5),
(26, 32000, 32999.99, 400, 400),
(27, 33000, 33999.99, 412.5, 412.5),
(28, 34000, 34999.99, 425, 425),
(29, 35000, 999999.99, 437.5, 437.5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sss`
--

CREATE TABLE IF NOT EXISTS `tb_sss` (
  `ts_idx` int(11) NOT NULL AUTO_INCREMENT,
  `ts_range_from` double NOT NULL,
  `ts_range_to` double NOT NULL,
  `ts_ded_er` double NOT NULL,
  `ts_ded_ee` double NOT NULL,
  PRIMARY KEY (`ts_idx`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tb_sss`
--

INSERT INTO `tb_sss` (`ts_idx`, `ts_range_from`, `ts_range_to`, `ts_ded_er`, `ts_ded_ee`) VALUES
(1, 1000, 1249.99, 80.7, 33.3),
(2, 1250, 1749.99, 116, 50),
(3, 1750, 2249.99, 151.3, 66.7),
(4, 2250, 2749.99, 186.7, 83.3),
(5, 2750, 3249.99, 222, 100),
(6, 3250, 3749.99, 257.3, 116.7),
(7, 3750, 4249.99, 292.7, 133.3),
(8, 4250, 4749.99, 328, 150),
(9, 4750, 5249.99, 363.3, 166.7),
(10, 5250, 5749.99, 398.7, 183.3),
(11, 5750, 6249.99, 434, 200),
(12, 6250, 6749.99, 469.3, 216.7),
(13, 6750, 7249.99, 504.7, 233.3),
(14, 7250, 7749.99, 540, 250),
(15, 7750, 8249.99, 575.3, 266.7),
(16, 8250, 8749.99, 610.7, 283.3),
(17, 8750, 9249.99, 646, 300),
(18, 9250, 9749.99, 681.3, 316.7),
(19, 9750, 10249.99, 716.7, 333.3),
(20, 10250, 10749.99, 752, 350),
(21, 10750, 11249.99, 787.3, 366.7),
(22, 11250, 11749.99, 822.7, 383.3),
(23, 11750, 12249.99, 858, 400),
(24, 12250, 12749.99, 893.3, 416.7),
(25, 12750, 13249.99, 928.7, 433.3),
(26, 13250, 13749.99, 964, 450),
(27, 13750, 14249.99, 999.3, 466.7),
(28, 14250, 14749.99, 1034.7, 483.3),
(29, 14750, 999999.99, 1090, 500);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tax_category`
--

CREATE TABLE IF NOT EXISTS `tb_tax_category` (
  `ttc_idx` int(11) NOT NULL AUTO_INCREMENT,
  `ttc_num_dependents` int(11) NOT NULL,
  `ttc_range_from` double NOT NULL,
  `ttc_range_to` double NOT NULL,
  `ttc_ttd_idx` int(11) NOT NULL,
  PRIMARY KEY (`ttc_idx`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tb_tax_category`
--

INSERT INTO `tb_tax_category` (`ttc_idx`, `ttc_num_dependents`, `ttc_range_from`, `ttc_range_to`, `ttc_ttd_idx`) VALUES
(1, 0, 0, 4166.99, 1),
(2, 0, 4167, 4999.99, 2),
(3, 0, 5000, 6666.99, 3),
(4, 0, 6667, 9999.99, 4),
(5, 0, 10000, 15832.99, 5),
(6, 0, 15833, 24000.99, 6),
(7, 0, 25000, 45832.99, 7),
(8, 0, 45833, 999999.99, 8),
(9, 1, 0, 6249.99, 1),
(10, 1, 6250, 7082.99, 2),
(11, 1, 7083, 8749.99, 3),
(12, 1, 8750, 12082.99, 4),
(13, 1, 12083, 17916.99, 5),
(14, 1, 17917, 27082.99, 6),
(15, 1, 27083, 47916.99, 7),
(16, 1, 47917, 999999.99, 8),
(17, 2, 0, 8332.99, 1),
(18, 2, 8333, 9166.99, 2),
(19, 2, 9167, 10832.99, 3),
(20, 2, 10833, 14166.99, 4),
(21, 2, 14167, 19999.99, 5),
(22, 2, 20000, 29166.99, 6),
(23, 2, 29167, 49999.99, 7),
(24, 2, 50000, 999999.99, 8),
(25, 3, 0, 10416.99, 1),
(26, 3, 10417, 11249.99, 2),
(27, 3, 11250, 12916.99, 3),
(28, 3, 12917, 16249.99, 4),
(29, 3, 16250, 22082.99, 5),
(30, 3, 22083, 31249.99, 6),
(31, 3, 31250, 52082.99, 7),
(32, 3, 52083, 999999.99, 8),
(33, 4, 0, 12499.99, 1),
(34, 4, 12500, 13332.99, 2),
(35, 4, 13333, 14999.99, 3),
(36, 4, 15000, 18332.99, 4),
(37, 4, 18333, 24166.99, 5),
(38, 4, 24167, 33332.99, 6),
(39, 4, 33333, 54166.99, 7),
(40, 4, 54167, 999999.99, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tax_deduction`
--

CREATE TABLE IF NOT EXISTS `tb_tax_deduction` (
  `ttd_idx` int(11) NOT NULL AUTO_INCREMENT,
  `ttd_percent` double NOT NULL,
  `ttd_deduction` double NOT NULL,
  PRIMARY KEY (`ttd_idx`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tb_tax_deduction`
--

INSERT INTO `tb_tax_deduction` (`ttd_idx`, `ttd_percent`, `ttd_deduction`) VALUES
(1, 0, 0),
(2, 0.5, 0),
(3, 0.1, 41.67),
(4, 0.15, 208.33),
(5, 0.2, 708.33),
(6, 0.25, 1875),
(7, 0.3, 4166.67),
(8, 32, 10416.67);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
