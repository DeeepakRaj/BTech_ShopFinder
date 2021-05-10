-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2021 at 10:08 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmintable`
--

DROP TABLE IF EXISTS `tbladmintable`;
CREATE TABLE IF NOT EXISTS `tbladmintable` (
  `SysId` int(11) NOT NULL AUTO_INCREMENT,
  `CreatedDate` date NOT NULL,
  `CreatedUserID` int(50) DEFAULT NULL,
  `ModifiedDate` date NOT NULL,
  `ModifiedUserID` int(50) DEFAULT NULL,
  `RecStatus` varchar(1) DEFAULT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `AEmail` varchar(15) NOT NULL,
  `PassWord` varchar(15) NOT NULL,
  PRIMARY KEY (`SysId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategorytable`
--

DROP TABLE IF EXISTS `tblcategorytable`;
CREATE TABLE IF NOT EXISTS `tblcategorytable` (
  `SysId` int(11) NOT NULL AUTO_INCREMENT,
  `CreatedDate` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  `CreatedUserID` int(50) DEFAULT NULL,
  `ModifiedDate` varchar(20) DEFAULT NULL,
  `ModifiedUserID` int(50) DEFAULT NULL,
  `RecStatus` varchar(1) DEFAULT '1',
  `CatName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`SysId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategorytable`
--

INSERT INTO `tblcategorytable` (`SysId`, `CreatedDate`, `CreatedUserID`, `ModifiedDate`, `ModifiedUserID`, `RecStatus`, `CatName`) VALUES
(1, NULL, NULL, NULL, NULL, '1', 'Electronics'),
(2, NULL, NULL, NULL, NULL, '1', 'Grocery'),
(3, NULL, NULL, NULL, NULL, '1', 'Mobile Shop'),
(4, NULL, NULL, NULL, NULL, '1', 'Medical Store');

-- --------------------------------------------------------

--
-- Table structure for table `tblreportshop`
--

DROP TABLE IF EXISTS `tblreportshop`;
CREATE TABLE IF NOT EXISTS `tblreportshop` (
  `SysId` int(11) NOT NULL AUTO_INCREMENT,
  `CreatedDate` date DEFAULT NULL,
  `CreatedUserID` int(50) DEFAULT NULL,
  `ModifiedDate` date DEFAULT NULL,
  `ModifiedUserID` int(50) DEFAULT NULL,
  `RecStatus` varchar(1) DEFAULT NULL,
  `UId` int(11) NOT NULL,
  `SrId` int(11) NOT NULL,
  `RepDetail` varchar(250) NOT NULL,
  `RepCount` int(25) NOT NULL,
  PRIMARY KEY (`SysId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblsaveshop`
--

DROP TABLE IF EXISTS `tblsaveshop`;
CREATE TABLE IF NOT EXISTS `tblsaveshop` (
  `SysId` int(11) NOT NULL AUTO_INCREMENT,
  `CreatedDate` date DEFAULT NULL,
  `CreatedUserID` int(50) DEFAULT NULL,
  `ModifiedDate` date DEFAULT NULL,
  `ModifiedUserID` int(50) DEFAULT NULL,
  `RecStatus` varchar(1) DEFAULT NULL,
  `UId` int(11) NOT NULL,
  `SrId` int(11) NOT NULL,
  PRIMARY KEY (`SysId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblshopimage`
--

DROP TABLE IF EXISTS `tblshopimage`;
CREATE TABLE IF NOT EXISTS `tblshopimage` (
  `SysId` int(11) NOT NULL AUTO_INCREMENT,
  `CreatedDate` date DEFAULT NULL,
  `CreatedUserID` int(50) DEFAULT NULL,
  `ModifiedDate` date DEFAULT NULL,
  `ModifiedUserID` int(50) DEFAULT NULL,
  `RecStatus` varchar(1) DEFAULT NULL,
  `SrId` int(11) DEFAULT NULL,
  `ImgName` varchar(100) DEFAULT NULL,
  `ImgUrl` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`SysId`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblshopimage`
--

INSERT INTO `tblshopimage` (`SysId`, `CreatedDate`, `CreatedUserID`, `ModifiedDate`, `ModifiedUserID`, `RecStatus`, `SrId`, `ImgName`, `ImgUrl`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 1, 'firstimg', 'images/registerShopImages/forza_horizon_3_4k-3840x2160.jpg'),
(2, NULL, NULL, NULL, NULL, NULL, 24, 'bubbles_colorful_gionee_a1_stock-2560x1440.jpg', 'images/registerShopImages/bubbles_colorful_gionee_a1_stock-2560x1440.jpg'),
(3, NULL, NULL, NULL, NULL, NULL, 24, 'colorful_gamut_hd_5k-3840x2160.jpg', 'images/registerShopImages/colorful_gamut_hd_5k-3840x2160.jpg'),
(4, NULL, NULL, NULL, NULL, NULL, 24, 'colorful_mi_stock_hd-2560x1440.jpg', 'images/registerShopImages/colorful_mi_stock_hd-2560x1440.jpg'),
(5, NULL, NULL, NULL, NULL, NULL, 25, 'colorful_gamut_hd_5k-3840x2160-', 'images/registerShopImages/colorful_gamut_hd_5k-3840x2160-1619801849.jpg'),
(6, NULL, NULL, NULL, NULL, NULL, 25, 'colorful_mi_stock_hd-2560x1440-', 'images/registerShopImages/colorful_mi_stock_hd-2560x1440-1619801849.jpg'),
(7, NULL, NULL, NULL, NULL, NULL, 31, 'bubbles_colorful_gionee_a1_stock-2560x1440.jpg', 'images/registerShopImages/bubbles_colorful_gionee_a1_stock-2560x1440.jpg'),
(8, NULL, NULL, NULL, NULL, NULL, 31, 'colorful_gamut_hd_5k-3840x2160.jpg', 'images/registerShopImages/colorful_gamut_hd_5k-3840x2160.jpg'),
(9, NULL, NULL, NULL, NULL, NULL, 31, 'colorful_mi_stock_hd-2560x1440.jpg', 'images/registerShopImages/colorful_mi_stock_hd-2560x1440.jpg'),
(10, NULL, NULL, NULL, NULL, NULL, 32, 'colorful_gamut_hd_5k-3840x2160-', 'images/registerShopImages/colorful_gamut_hd_5k-3840x2160-1619812421.jpg'),
(11, NULL, NULL, NULL, NULL, NULL, 32, 'colorful_mi_stock_hd-2560x1440-', 'images/registerShopImages/colorful_mi_stock_hd-2560x1440-1619812421.jpg'),
(12, NULL, NULL, NULL, NULL, NULL, 32, '3d_dark_traingles-2560x1440.jpg', 'images/registerShopImages/3d_dark_traingles-2560x1440.jpg'),
(13, NULL, NULL, NULL, NULL, NULL, 32, '2018_mclaren_720s_4k_8k-7680x4320.jpg', 'images/registerShopImages/2018_mclaren_720s_4k_8k-7680x4320.jpg'),
(14, NULL, NULL, NULL, NULL, NULL, 33, '3d_dark_traingles-2560x1440-', 'images/registerShopImages/3d_dark_traingles-2560x1440-1619815112.jpg'),
(15, NULL, NULL, NULL, NULL, NULL, 33, '2018_mclaren_720s_4k_8k-7680x4320.jpg', 'images/registerShopImages/2018_mclaren_720s_4k_8k-7680x4320.jpg'),
(16, NULL, NULL, NULL, NULL, NULL, 33, 'bubbles_colorful_gionee_a1_stock-2560x1440-', 'images/registerShopImages/bubbles_colorful_gionee_a1_stock-2560x1440-1619815112.jpg'),
(17, NULL, NULL, NULL, NULL, NULL, 34, '3d_dark_traingles-2560x1440-', 'images/registerShopImages/3d_dark_traingles-2560x1440-1619815341.jpg'),
(18, NULL, NULL, NULL, NULL, NULL, 34, '2018_mclaren_720s_4k_8k-7680x4320.jpg', 'images/registerShopImages/2018_mclaren_720s_4k_8k-7680x4320.jpg'),
(19, NULL, NULL, NULL, NULL, NULL, 34, 'bubbles_colorful_gionee_a1_stock-2560x1440-', 'images/registerShopImages/bubbles_colorful_gionee_a1_stock-2560x1440-1619815341.jpg'),
(20, NULL, NULL, NULL, NULL, NULL, 35, 'Varieties_7680x4320 (2).jpg', 'images/registerShopImages/Varieties_7680x4320 (2).jpg'),
(21, NULL, NULL, NULL, NULL, NULL, 36, 'Varieties_7680x4320 (2).jpg', 'images/registerShopImages/Varieties_7680x4320 (2).jpg'),
(22, NULL, NULL, NULL, NULL, NULL, 37, 'Varieties_7680x4320 (2).jpg', 'images/registerShopImages/Varieties_7680x4320 (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblshoprating`
--

DROP TABLE IF EXISTS `tblshoprating`;
CREATE TABLE IF NOT EXISTS `tblshoprating` (
  `SysId` int(11) NOT NULL AUTO_INCREMENT,
  `SrId` int(11) NOT NULL,
  `UId` int(11) NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `comment` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock',
  PRIMARY KEY (`SysId`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblshoprating`
--

INSERT INTO `tblshoprating` (`SysId`, `SrId`, `UId`, `ratingNumber`, `comment`, `created`, `modified`, `status`) VALUES
(14, 12345678, 1, 2, 'its awesome', '2018-08-19 09:13:01', '2018-08-19 09:13:01', 1),
(15, 12345678, 2, 5, 'Nice product', '2018-08-19 09:13:37', '2018-08-19 09:13:37', 1),
(16, 12345678, 3, 1, 'best buy', '2018-08-19 09:14:19', '2018-08-19 09:14:19', 1),
(17, 12345678, 4, 1, 'super awesome ', '2018-08-19 09:18:00', '2018-08-19 09:18:00', 1),
(22, 12345679, 5, 1, 'adada', '2019-01-20 17:00:58', '2019-01-20 17:00:58', 1),
(23, 12345678, 5, 5, 'Nice product', '2019-01-20 17:01:37', '2019-01-20 17:01:37', 1),
(24, 12345679, 3, 1, 'really nice', '2019-01-20 21:06:48', '2019-01-20 21:06:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblshopregistration`
--

DROP TABLE IF EXISTS `tblshopregistration`;
CREATE TABLE IF NOT EXISTS `tblshopregistration` (
  `SysId` int(11) NOT NULL AUTO_INCREMENT,
  `CreatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `CreatedUserID` int(50) DEFAULT NULL,
  `ModifiedDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `ModifiedUserID` int(50) DEFAULT NULL,
  `RecStatus` varchar(1) DEFAULT '1',
  `UId` int(15) DEFAULT NULL,
  `ShopRegiTime` date DEFAULT NULL,
  `ShopImg1` varchar(500) DEFAULT NULL,
  `ShopName` varchar(50) DEFAULT NULL,
  `ShopDescription` varchar(500) DEFAULT NULL,
  `ShopPhone` varchar(50) DEFAULT NULL,
  `ShopOctime` varchar(100) DEFAULT NULL,
  `ShopCategory` varchar(50) DEFAULT NULL,
  `ShopTemp` varchar(50) DEFAULT NULL,
  `ShopLocation` varchar(500) DEFAULT NULL,
  `ShopPincode` varchar(50) DEFAULT NULL,
  `ShopAddress` varchar(500) DEFAULT NULL,
  `ShopTranding` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`SysId`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblshopregistration`
--

INSERT INTO `tblshopregistration` (`SysId`, `CreatedDate`, `CreatedUserID`, `ModifiedDate`, `ModifiedUserID`, `RecStatus`, `UId`, `ShopRegiTime`, `ShopImg1`, `ShopName`, `ShopDescription`, `ShopPhone`, `ShopOctime`, `ShopCategory`, `ShopTemp`, `ShopLocation`, `ShopPincode`, `ShopAddress`, `ShopTranding`) VALUES
(1, NULL, NULL, '2021-04-30 21:53:41', NULL, NULL, 1, '2021-03-17', 'images/registerShopImages/colorful_blurred_4k-3840x2160-1618068286.jpg', 'Sivam mobile', '       It is an all in one mobile shop. also we are authorised dealer in mobile accessories       ', '4245755200', 'From 9 A.M to 6 P.M.', '2', 'Permanent', 'Nadiad', '387630', 'near hanuman mandir, College Road, Nadiad', 1),
(2, NULL, NULL, '2021-04-30 21:53:51', NULL, '0', 2, NULL, '../images/registerShopImages/forza_horizon_3_4k-3840x2160.jpg', 'ramanlal sweets', '  ', '', '', '3', 'Select a Duration', '', '', '', 1),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'ratilal sabu', NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, 0),
(4, NULL, NULL, '2021-04-30 21:53:47', NULL, NULL, 1, NULL, 'images/registerShopImages/forza_horizon_3_4k-3840x2160.jpg', 'jamnal motors', NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, 1),
(5, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'shopphotos/colorful_mi_stock_hd-2560x1440.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'shopphotos/forza_horizon_3_4k-3840x2160.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, NULL, NULL, '2021-04-30 21:53:54', NULL, NULL, NULL, NULL, 'shopphotos/colorful_mi_stock_hd-2560x1440-1618068164.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'shopphotos/colorful_blurred_4k-3840x2160.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '../images/registerShopImages/colorful_blurred_4k-3840x2160.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '../images/registerShopImages/colorful_blurred_4k-3840x2160-1618068286.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(11, NULL, NULL, NULL, NULL, '0', NULL, NULL, '../images/registerShopImages/colorful_gamut_hd_5k-3840x2160.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '../images/registerShopImages/colorful_mi_stock_hd-2560x1440.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, NULL, NULL, '2021-04-30 21:55:42', NULL, '0', NULL, NULL, '$ShopImg1', '$ShopName', '$ShopDescription', '$ShopPhoneNumber', '$ShopTiming', 'NA', '$ShopDuration', '$ShopLocation', '$ShopPinCode', '$ShopAddress', 1),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/registerShopImages/shopMainImg/3d_dark_traingles-2560x1440.jpg', 'gfbfgb', 'gbffgbfgb', '2345672356', '', '', 'Event', 'fgbfbggfb', '237689', 'gbfgbgfb', 0),
(15, '2021-04-30 14:25:33', 2, NULL, NULL, NULL, 2, NULL, 'images/registerShopImages/shopMainImg/1.PNG', 'gjmhm', 'gbfgbfgb', '3434445595', '8:00 am to 11:00 pm', '4', 'Permanent', 'hmhjm', '454545', 'hjmhjm', 0),
(16, '2021-04-30 14:35:17', 2, '2021-04-30 21:55:45', NULL, '0', 2, NULL, 'images/registerShopImages/shopMainImg/forza_horizon_3_4k-3840x2160.jpg', 'dfvdvf', 'gfbgfbgfb', '343434', '8:00 am to 11:00 pm', '2', 'Temporary', 'fbggfbgf', '34529', 'fgbgfb', 1),
(17, '2021-04-30 14:38:58', 2, '2021-04-30 21:47:26', NULL, '0', 2, NULL, 'images/registerShopImages/shopMainImg/cqueue.PNG', 'v fv f ', 'fgbgfbgfbbgf', '34545', ' 8:00 am to 11:00 pm', '4', 'Temporary', 'gbfbfgb', '453541', 'gbfgbgf', 0),
(18, '2021-04-30 15:19:01', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/3d_dark_traingles-2560x1440.jpg', 'vsvdsdv', 'dvfdfvdfv', '3434343434', '8:00 am to 11:00 pm', '3', 'Temporary', 'gfbgfbgf', '347887', 'bgfgbfgb', 0),
(19, '2021-04-30 16:26:57', 2, '2021-04-30 21:55:47', NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/3d_dark_traingles-2560x1440.jpg', ' fh gbfgb', 'sdfvdfvdfvdfvdfdfv', '3454675242', ' 8:00 am to 11:00 pm', '1', 'Event', 'gfbgfbgfb', '234574', 'grbfbggfb', 1),
(20, '2021-04-30 16:31:45', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/black_panther_2018_4k-7680x4320.jpg', 'dvdfvdfv', 'xvdfvdfv', '344534545', '8:00 am to 11:00 pm', '1', 'Event', 'dvdfvdfv', '341272', 'dvfdfvdfvf', 0),
(21, '2021-04-30 16:32:55', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/colorful_mi_stock_hd-2560x1440.jpg', 'defgdfgfdv', 'dvfdfvdvf', '343434', '8:00 am to 11:00 pm', '1', 'Permanent', 'vddfv', '233454', 'dfvdfvd', 0),
(22, '2021-04-30 16:34:03', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/colorful_mi_stock_hd-2560x1440.jpg', 'defgdfgfdv', 'dvfdfvdvf', '343434', '8:00 am to 11:00 pm', '1', 'Permanent', 'vddfv', '233454', 'dfvdfvd', 0),
(23, '2021-04-30 16:38:49', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/3d_dark_traingles-2560x1440.jpg', 'fgbfgb', 'dfvdfvdfv', '2354679812', '8:00 am to 11:00 pm', '3', 'Temporary', 'dfvdfv', '344565', 'fbgfbgfb', 0),
(24, '2021-04-30 16:41:22', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/inser.PNG', 'dfvdfvd', 'dvfdfvdfv', '4365789012', ' 8:00 am to 11:00 pm', '1', 'Temporary', 'dfvdfvvdf', '236789', 'dfvdfv', 0),
(25, '2021-04-30 16:57:01', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/3d_dark_traingles-2560x1440.jpg', 'dfvdvfdvf', 'dfvdfvdfvdvf', '3434556786', ' 8:00 am to 11:00 pm', '3', 'Temporary', 'fbfgb', '213465', 'dfvdfvdfv', 0),
(26, '2021-04-30 17:00:26', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/STAR_WARS_FORCE_AWAKENS_sci_fi_futuristic_disney_1star_wars_force_awakens_action_adventure_warrior_8000x4440.jpg', 'mayank', 'it is an all in one electronics shop', '9876543210', '8:00 am to 11:00 pm Mon -Sat', '3', 'Permanent', 'kathlal', '387630', '23 amarnath complex', 0),
(27, '2021-04-30 17:04:29', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/forza_horizon_3_4k-3840x2160.jpg', 'mayank shop', 'nsdcshjidcbnsdhvbjh', '3434344565', '8:00 am to 11:00 pm', '1', 'Permanent', 'scdcmksdc', '782387', 'mdcksdmckmdskmcdc', 0),
(28, '2021-04-30 17:05:21', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/bubbles_colorful_gionee_a1_stock-2560x1440.jpg', 'fvfvgfv', 'dfvdfvdfvdfvdfvdfvdfvdfvdfvdfvdfvdfv', '34344334', '8:00 am to 11:00 pm', '1', 'Temporary', 'dfbbd', '242231', 'dfvdfv', 0),
(29, '2021-04-30 17:07:09', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/2018_mclaren_720s_4k_8k-7680x4320.jpg', 'fvdfv', 'dvdfvdfvd', '2345672356', '8:00 am to 11:00 pm', '2', 'Event', 'vfdvfdfv', '122345', 'sdfvdfv', 0),
(30, '2021-04-30 17:09:11', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/3d_dark_traingles-2560x1440.jpg', 'mayank shop', 'dvdvbhtb', '2354687954', '8:00 am to 11:00 pm', '2', 'Temporary', 'sdsdcvss', '234555', 'msamsakms', 0),
(31, '2021-04-30 19:49:46', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/colorful_blurred_4k-3840x2160.jpg', '', '', '', '', '1', 'Select a Duration', '', '', '', 0),
(32, '2021-04-30 19:51:21', 2, '2021-04-30 21:12:07', NULL, '0', 2, NULL, 'images/registerShopImages/shopMainImg/bubbles_colorful_gionee_a1_stock-2560x1440.jpg', 'sdfefedgv', 'vdfvdfv', '232323', 'dfvfdvdfv', '2', 'Permanent', 'fdvdfv', '232320', 'dfvdfv', 0),
(33, '2021-04-30 20:37:08', 2, '2021-04-30 20:39:49', NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/Varieties_7680x4320(2).jpg', 'A1', 'it is an all in one electronics shop', '23423434', '8:00 am to 11:00 pm Mon -Sat', '3', 'Permanent', 'nadiad', '387001', 'sk complex nadiad', 0),
(34, '2021-04-30 20:41:51', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/3d_dark_traingles-2560x1440.jpg', '', '', '', '', '1', 'Select a Duration', '', '', '', 0),
(35, '2021-04-30 20:46:39', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/3d_dark_traingles-2560x1440-1619815599.jpg', '', '', '', '', '1', 'Select a Duration', '', '', '', 0),
(36, '2021-04-30 20:48:46', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/2018_mclaren_720s_4k_8k-7680x4320.jpg', '', '', '', '', '1', 'Select a Duration', '', '', '', 0),
(37, '2021-04-30 20:51:06', 2, NULL, NULL, '1', 2, NULL, 'images/registerShopImages/shopMainImg/2018_mclaren_720s_4k_8k-7680x4320.jpg', '', '', '', '', '1', 'Select a Duration', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblusertable`
--

DROP TABLE IF EXISTS `tblusertable`;
CREATE TABLE IF NOT EXISTS `tblusertable` (
  `SysId` int(11) NOT NULL AUTO_INCREMENT,
  `CreatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `CreatedUserID` int(50) DEFAULT NULL,
  `ModifiedDate` date DEFAULT NULL,
  `ModifiedUserID` int(50) DEFAULT NULL,
  `RecStatus` varchar(1) DEFAULT NULL,
  `FirstName` text,
  `LocationId` varchar(500) DEFAULT NULL,
  `LastName` text,
  `Gender` text,
  `DOB` date DEFAULT NULL,
  `PhoneNumber` varchar(15) DEFAULT NULL,
  `UEmail` varchar(50) DEFAULT NULL,
  `PassWord` varchar(15) DEFAULT NULL,
  `Otp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`SysId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusertable`
--

INSERT INTO `tblusertable` (`SysId`, `CreatedDate`, `CreatedUserID`, `ModifiedDate`, `ModifiedUserID`, `RecStatus`, `FirstName`, `LocationId`, `LastName`, `Gender`, `DOB`, `PhoneNumber`, `UEmail`, `PassWord`, `Otp`) VALUES
(1, '2021-04-22 14:43:01', NULL, NULL, NULL, NULL, 'Mayank', NULL, 'Patel', NULL, NULL, '9898989898', NULL, 'Patel123', NULL),
(2, '2021-04-22 14:46:27', NULL, NULL, NULL, NULL, 'mayank', 'kathlal', 'patel', 'M', '1999-12-28', '1234567890', 'patelmayankb73@gmail.com', 'Mayank12345', ''),
(3, '2021-04-23 08:13:40', NULL, NULL, NULL, NULL, 'mayank', 'kathlal', 'patel', 'M', '2021-05-10', '1234567890', 'patelmayankb73@gmail.com', 'Mayank123456789', NULL),
(4, '2021-04-30 22:01:47', NULL, NULL, NULL, NULL, 'meet', 'surat', 'patel', NULL, NULL, '1234567891', NULL, 'Meet12345', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
