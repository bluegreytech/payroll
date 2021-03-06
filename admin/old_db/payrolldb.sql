-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2019 at 10:42 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payrolldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `companyid` int(11) NOT NULL,
  `companytypeid` int(11) NOT NULL,
  `companyname` varchar(300) NOT NULL,
  `comemailaddress` varchar(50) NOT NULL,
  `comcontactnumber` varchar(13) NOT NULL,
  `gstnumber` varchar(20) NOT NULL,
  `digitalsignaturedate` date NOT NULL,
  `companylogo` varchar(200) DEFAULT NULL,
  `companyaddress` text NOT NULL,
  `stateid` int(11) NOT NULL,
  `companycity` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `verificationcode` varchar(50) DEFAULT NULL,
  `emailverifystatus` varchar(50) DEFAULT NULL,
  `isactive` int(1) DEFAULT NULL,
  `createdby` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedby` int(11) NOT NULL,
  `updatedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`companyid`, `companytypeid`, `companyname`, `comemailaddress`, `comcontactnumber`, `gstnumber`, `digitalsignaturedate`, `companylogo`, `companyaddress`, `stateid`, `companycity`, `pincode`, `verificationcode`, `emailverifystatus`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(1, 1, 'Nilay Infotech', 'bluegreyindia@gmail.com', '1234567888', '1111111111', '0000-00-00', NULL, 'anand', 82, 'anand', '123456', '', 'Verify', 1, 1, '2019-09-03 14:57:51', 0, '2019-09-03 08:57:51'),
(2, 4, 'Bluegrey Tech', 'rsharma@getaguru.net', '9974616445', '65164564', '0000-00-00', NULL, 'Vadodara', 82, 'Vadodra', '111111', '115617362', NULL, 1, 1, '2019-09-04 05:36:36', 0, '2019-09-04 11:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanycompliances`
--

CREATE TABLE `tblcompanycompliances` (
  `companycomplianceid` int(11) NOT NULL,
  `companyid` int(11) NOT NULL,
  `complianceid` varchar(200) NOT NULL,
  `isactive` int(11) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedby` int(11) NOT NULL,
  `updatedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompanycompliances`
--

INSERT INTO `tblcompanycompliances` (`companycomplianceid`, `companyid`, `complianceid`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(1, 1, '', 1, 1, '2019-09-03 16:41:25', 0, '2019-09-03 08:57:51'),
(2, 2, '3,4', 1, 1, '2019-09-04 05:36:36', 0, '2019-09-04 11:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanytype`
--

CREATE TABLE `tblcompanytype` (
  `companytypeid` int(11) NOT NULL,
  `companytype` varchar(100) NOT NULL,
  `isactive` int(1) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedby` int(11) NOT NULL,
  `updatedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompanytype`
--

INSERT INTO `tblcompanytype` (`companytypeid`, `companytype`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(1, 'Factory', 1, 1, '2019-08-30 11:33:27', 0, '2019-08-30 05:33:27'),
(2, 'Labour Contract', 1, 1, '2019-08-30 12:19:32', 0, '2019-08-30 06:19:32'),
(4, 'Commercial Establishment', 1, 1, '2019-09-05 11:02:49', 0, '2019-09-05 05:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompliances`
--

CREATE TABLE `tblcompliances` (
  `complianceid` int(11) NOT NULL,
  `compliancename` varchar(100) NOT NULL,
  `compliancepercentage` float(7,2) NOT NULL,
  `isactive` int(1) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedby` int(11) NOT NULL,
  `updatedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompliances`
--

INSERT INTO `tblcompliances` (`complianceid`, `compliancename`, `compliancepercentage`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(1, 'PF', 12.00, 1, 1, '2019-08-30 11:17:20', 0, '2019-08-30 05:17:20'),
(2, 'ESCI', 20.00, 1, 1, '2019-08-30 11:17:29', 0, '2019-08-30 05:17:29'),
(3, 'PT', 15.00, 1, 1, '2019-08-30 11:18:00', 0, '2019-08-30 05:18:00'),
(4, 'Bonus', 30.00, 1, 1, '2019-08-30 11:18:13', 0, '2019-08-30 05:18:13'),
(5, 'LWF', 5.00, 1, 1, '2019-08-30 11:18:33', 0, '2019-08-30 05:18:33'),
(6, 'test', 20.00, 1, 1, '2019-09-04 05:54:43', 0, '2019-09-04 11:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `tblcountry`
--

CREATE TABLE `tblcountry` (
  `CountryId` int(11) NOT NULL,
  `CountryName` varchar(100) DEFAULT NULL,
  `CountryAbbreviation` varchar(3) NOT NULL,
  `PhonePrefix` varchar(11) DEFAULT NULL,
  `IsActive` int(1) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedBy` int(11) NOT NULL,
  `UpdatedOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcountry`
--

INSERT INTO `tblcountry` (`CountryId`, `CountryName`, `CountryAbbreviation`, `PhonePrefix`, `IsActive`, `CreatedBy`, `CreatedOn`, `UpdatedBy`, `UpdatedOn`) VALUES
(1, 'Afghanistan', 'AF', '93', 1, 1, '2018-06-15 12:31:53', 1, '2019-03-29 18:27:04'),
(2, 'Albania', 'AL', '355', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(3, 'Algeria', 'DZ', '213', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(6, 'Angola', 'AO', '244', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(8, 'Antarctica', 'AQ', '0', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(10, 'Argentina', 'AR', '54', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(11, 'Armenia', 'AM', '374', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(13, 'Australia', 'AU', '61', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(14, 'Austria', 'AT', '43', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(15, 'Azerbaijan', 'AZ', '994', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(16, 'Bahamas The', 'BS', '1242', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(17, 'Bahrain', 'BH', '973', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(18, 'Bangladesh', 'BD', '880', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(20, 'Belarus', 'BY', '375', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(21, 'Belgium', 'BE', '32', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(22, 'Belize', 'BZ', '501', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(23, 'Benin', 'BJ', '229', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(25, 'Bhutan', 'BT', '975', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(26, 'Bolivia', 'BO', '591', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(27, 'Bosnia and Herzegovina', 'BA', '387', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(28, 'Botswana', 'BW', '267', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(30, 'Brazil', 'BR', '55', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(32, 'Brunei', 'BN', '673', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(33, 'Bulgaria', 'BG', '359', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(34, 'Burkina Faso', 'BF', '226', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(35, 'Burundi', 'BI', '257', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(36, 'Cambodia', 'KH', '855', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(37, 'Cameroon', 'CM', '237', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(38, 'Canada', 'CA', '1', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(39, 'Cape Verde', 'CV', '238', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(41, 'Central African Republic', 'CF', '236', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(42, 'Chad', 'TD', '235', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(43, 'Chile', 'CL', '56', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(44, 'China', 'CN', '86', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(47, 'Colombia', 'CO', '57', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(48, 'Comoros', 'KM', '269', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(49, 'Republic Of The Congo', 'CG', '242', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(50, 'Democratic Republic Of The Congo', 'CD', '242', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(52, 'Costa Rica', 'CR', '506', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(53, 'Cote D\'Ivoire (Ivory Coast)', 'CI', '225', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(54, 'Croatia (Hrvatska)', 'HR', '385', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(55, 'Cuba', 'CU', '53', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(56, 'Cyprus', 'CY', '357', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(57, 'Czech Republic', 'CZ', '420', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(58, 'Denmark', 'DK', '45', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(59, 'Djibouti', 'DJ', '253', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(61, 'Dominican Republic', 'DO', '1809', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(62, 'East Timor', 'TP', '670', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(63, 'Ecuador', 'EC', '593', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(64, 'Egypt', 'EG', '20', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(65, 'El Salvador', 'SV', '503', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(66, 'Equatorial Guinea', 'GQ', '240', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(67, 'Eritrea', 'ER', '291', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(68, 'Estonia', 'EE', '372', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(69, 'Ethiopia', 'ET', '251', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(73, 'Fiji Islands', 'FJ', '679', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(74, 'Finland', 'FI', '358', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(75, 'France', 'FR', '33', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(80, 'Gambia The', 'GM', '220', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(82, 'Germany', 'DE', '49', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(83, 'Ghana', 'GH', '233', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(85, 'Greece', 'GR', '30', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(90, 'Guatemala', 'GT', '502', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(93, 'Guinea-Bissau', 'GW', '245', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(94, 'Guyana', 'GY', '592', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(95, 'Haiti', 'HT', '509', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(97, 'Honduras', 'HN', '504', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(98, 'Hong Kong S.A.R.', 'HK', '852', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(99, 'Hungary', 'HU', '36', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(100, 'Iceland', 'IS', '354', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(101, 'India', 'IN', '91', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(102, 'Indonesia', 'ID', '62', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(103, 'Iran', 'IR', '98', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(104, 'Iraq', 'IQ', '964', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(105, 'Ireland', 'IE', '353', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(106, 'Israel', 'IL', '972', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(107, 'Italy', 'IT', '39', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(108, 'Jamaica', 'JM', '1876', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(109, 'Japan', 'JP', '81', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(111, 'Jordan', 'JO', '962', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(112, 'Kazakhstan', 'KZ', '7', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(113, 'Kenya', 'KE', '254', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(114, 'Kiribati', 'KI', '686', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(115, 'Korea North', 'KP', '850', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(116, 'Korea South', 'KR', '82', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(117, 'Kuwait', 'KW', '965', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(118, 'Kyrgyzstan', 'KG', '996', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(119, 'Laos', 'LA', '856', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(120, 'Latvia', 'LV', '371', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(121, 'Lebanon', 'LB', '961', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(122, 'Lesotho', 'LS', '266', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(123, 'Liberia', 'LR', '231', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(126, 'Lithuania', 'LT', '370', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(127, 'Luxembourg', 'LU', '352', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(130, 'Madagascar', 'MG', '261', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(131, 'Malawi', 'MW', '265', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(132, 'Malaysia', 'MY', '60', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(133, 'Maldives', 'MV', '960', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(134, 'Mali', 'ML', '223', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(137, 'Marshall Islands', 'MH', '692', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(139, 'Mauritania', 'MR', '222', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(140, 'Mauritius', 'MU', '230', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(142, 'Mexico', 'MX', '52', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(143, 'Micronesia', 'FM', '691', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(144, 'Moldova', 'MD', '373', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(146, 'Mongolia', 'MN', '976', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(148, 'Morocco', 'MA', '212', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(149, 'Mozambique', 'MZ', '258', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(150, 'Myanmar', 'MM', '95', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(151, 'Namibia', 'NA', '264', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(154, 'Netherlands Antilles', 'AN', '599', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(155, 'Netherlands The', 'NL', '31', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(157, 'New Zealand', 'NZ', '64', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(158, 'Nicaragua', 'NI', '505', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(159, 'Niger', 'NE', '227', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(160, 'Nigeria', 'NG', '234', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(164, 'Norway', 'NO', '47', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(165, 'Oman', 'OM', '968', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(166, 'Pakistan', 'PK', '92', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(168, 'Palestinian Territory Occupied', 'PS', '970', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(169, 'Panama', 'PA', '507', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(170, 'Papua new Guinea', 'PG', '675', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(171, 'Paraguay', 'PY', '595', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(172, 'Peru', 'PE', '51', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(173, 'Philippines', 'PH', '63', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(175, 'Poland', 'PL', '48', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(176, 'Portugal', 'PT', '351', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(178, 'Qatar', 'QA', '974', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(180, 'Romania', 'RO', '40', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(181, 'Russia', 'RU', '70', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(182, 'Rwanda', 'RW', '250', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(183, 'Saint Helena', 'SH', '290', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(188, 'Samoa', 'WS', '684', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(190, 'Sao Tome and Principe', 'ST', '239', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(191, 'Saudi Arabia', 'SA', '966', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(192, 'Senegal', 'SN', '221', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(193, 'Serbia', 'RS', '381', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(197, 'Slovakia', 'SK', '421', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(198, 'Slovenia', 'SI', '386', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(200, 'Solomon Islands', 'SB', '677', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(201, 'Somalia', 'SO', '252', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(202, 'South Africa', 'ZA', '27', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(205, 'Spain', 'ES', '34', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(206, 'Sri Lanka', 'LK', '94', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(207, 'Sudan', 'SD', '249', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(208, 'Suriname', 'SR', '597', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(210, 'Swaziland', 'SZ', '268', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(211, 'Sweden', 'SE', '46', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(212, 'Switzerland', 'CH', '41', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(213, 'Syria', 'SY', '963', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(214, 'Taiwan', 'TW', '886', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(215, 'Tajikistan', 'TJ', '992', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(216, 'Tanzania', 'TZ', '255', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(217, 'Thailand', 'TH', '66', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(218, 'Togo', 'TG', '228', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(221, 'Trinidad And Tobago', 'TT', '1868', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(222, 'Tunisia', 'TN', '216', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(223, 'Turkey', 'TR', '90', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(224, 'Turkmenistan', 'TM', '7370', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(227, 'Uganda', 'UG', '256', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(228, 'Ukraine', 'UA', '380', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(230, 'United Kingdom', 'GB', '44', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(231, 'United States', 'US', '1', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(232, 'United States Minor Outlying Islands', 'UM', '1', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(233, 'Uruguay', 'UY', '598', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(234, 'Uzbekistan', 'UZ', '998', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(235, 'Vanuatu', 'VU', '678', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(237, 'Venezuela', 'VE', '58', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(238, 'Vietnam', 'VN', '84', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(243, 'Yemen', 'YE', '967', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(245, 'Zambia', 'ZM', '260', 1, 1, '2018-06-15 12:31:53', 1, NULL),
(246, 'Zimbabwe', 'ZW', '263', 1, 1, '2018-06-15 12:31:53', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblemail_setting`
--

CREATE TABLE `tblemail_setting` (
  `email_setting_id` int(11) NOT NULL,
  `mailer` varchar(255) NOT NULL,
  `smtp_host` varchar(255) NOT NULL,
  `smtp_port` varchar(255) NOT NULL,
  `smtp_email` varchar(255) NOT NULL,
  `smtp_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemail_setting`
--

INSERT INTO `tblemail_setting` (`email_setting_id`, `mailer`, `smtp_host`, `smtp_port`, `smtp_email`, `smtp_password`) VALUES
(1, 'mail', 'smtp.sendgrid.net', '465', 'bluegreyindia@gmail.com', 'Test@123'),
(2, 'sendmail', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblemail_template`
--

CREATE TABLE `tblemail_template` (
  `email_template_id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `from_address` varchar(255) NOT NULL,
  `reply_address` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemail_template`
--

INSERT INTO `tblemail_template` (`email_template_id`, `task`, `from_address`, `reply_address`, `subject`, `message`) VALUES
(1, 'Admin registration', 'bluegreyindia@gmail.com', 'bluegreyindia@gmail.com', 'Admin registration', '<!DOCTYPE html>\r\n   <html>\r\n    <head>\r\n          <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n        <title>Welcome to {site_name}</title>\r\n       \r\n    </head>\r\n    <body>\r\n         <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 70px;\">\r\n            <tr>\r\n                <td style=\"background: #eee; border-bottom: 1px solid #f88120;\"><img src=\"http://nyalkaran.bluegreytech.co.in/admin/default/images/logo/logo.png\" alt=\"Nyalkaran Group Logo\" style=\"width: 121px;\"></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n\r\n      \r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 400px;background: #eee;\">\r\n            <tr>\r\n               <td><center><p>You are registered to Payroll System!</p></center></td>\r\n            </tr>\r\n            <tr>\r\n                <td>Hello {username},</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Email address: {EmailAddress}</td>\r\n                \r\n            </tr>\r\n            <tr>\r\n                <td>Your password: {Password}</td>\r\n                \r\n            </tr>\r\n           \r\n            <tr>\r\n               <td><p>Regard</p>\r\n               <p>Payroll System Team,</p></td>\r\n            </tr>\r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 50px;\">\r\n            <tr>\r\n                <td style=\"background: #283f82;\"><p style=\"color: #fff; text-align: center;\">Copyright © {year} Payroll System. All Rights Reserved</p></td>    \r\n            </tr> \r\n        </table>\r\n    </body>\r\n</html>'),
(2, 'Forgot Password by admin', 'bluegreyindia@gmail.com', 'bluegreyindia@gmail.com', 'Forgot Password by admin', '<!DOCTYPE html>\r\n   <html>\r\n    <head>\r\n          <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n        <title>Welcome to {site_name}</title>\r\n       \r\n    </head>\r\n    <body>\r\n         <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 70px;\">\r\n            <tr>\r\n                <td style=\"background: #eee; border-bottom: 1px solid #f88120;\"><img src=\"http://nyalkaran.bluegreytech.co.in/admin/default/images/logo/logo.png\" alt=\"Nyalkaran Group Logo\" style=\"width: 121px;\"></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n\r\n      \r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 400px;background: #eee;\">\r\n            <tr>\r\n               <td><center><p>You forgot password to Payroll System!</p></center></td>\r\n            </tr>\r\n            <tr>\r\n                <td>Hello {username},</td>\r\n            </tr>\r\n            <tr>\r\n               <td><p>We were told that you forgot your password on {EmailAddress}.</p>\r\n                \r\n                <p>To reset your password,please click this link: {forgot_link}</p>\r\n                \r\n               </td>\r\n            </tr>\r\n           \r\n            <tr>\r\n               <td><p>Regard</p>\r\n               <p>Payroll System Team,</p></td>\r\n            </tr>\r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 50px;\">\r\n            <tr>\r\n                <td style=\"background: #283f82;\"><p style=\"color: #fff; text-align: center;\">Copyright © {year} Payroll System. All Rights Reserved</p></td>    \r\n            </tr> \r\n        </table>\r\n    </body>\r\n</html>'),
(9, 'Reset Password to admin', 'bluegreyindia@gmail.com', 'bluegreyindia@gmail.com', 'Reset Password to admin', '<!DOCTYPE html>\r\n   <html>\r\n    <head>\r\n          <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n        <title>Welcome to {site_name}</title>\r\n       \r\n    </head>\r\n    <body>\r\n         <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 70px;\">\r\n            <tr>\r\n                <td style=\"background: #eee; border-bottom: 1px solid #f88120;\"><img src=\"http://nyalkaran.bluegreytech.co.in/admin/default/images/logo/logo.png\" alt=\"Nyalkaran Group Logo\" style=\"width: 121px;\"></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n\r\n      \r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 400px;background: #eee;\">\r\n            <tr>\r\n               <td><center><p>Your reset password success to Payroll System!</p></center></td>\r\n            </tr>\r\n            <tr>\r\n                <td>Hello {username},</td>\r\n            </tr>\r\n            <tr>\r\n               <td>Email Address: {EmailAddress}</td>\r\n            </tr>\r\n           \r\n            <tr>\r\n               <td><p>Regard</p>\r\n               <p>Payroll System Team,</p></td>\r\n            </tr>\r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 50px;\">\r\n            <tr>\r\n                <td style=\"background: #283f82;\"><p style=\"color: #fff; text-align: center;\">Copyright © {year} Payroll System. All Rights Reserved</p></td>    \r\n            </tr> \r\n        </table>\r\n    </body>\r\n</html>\r\n'),
(10, 'Change Password to admin', 'bluegreyindia@gmail.com', 'bluegreyindia@gmail.com', 'Change Password to admin', '<!DOCTYPE html>\r\n   <html>\r\n    <head>\r\n          <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n        <title>Welcome to {site_name}</title>\r\n       \r\n    </head>\r\n    <body>\r\n         <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 70px;\">\r\n            <tr>\r\n                <td style=\"background: #eee; border-bottom: 1px solid #f88120;\"><img src=\"http://nyalkaran.bluegreytech.co.in/admin/default/images/logo/logo.png\" alt=\"Nyalkaran Group Logo\" style=\"width: 121px;\"></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n\r\n      \r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 400px;background: #eee;\">\r\n            <tr>\r\n               <td><center><p>Your password change success to Payroll System!</p></center></td>\r\n            </tr>\r\n            <tr>\r\n                <td>Hello {username},</td>\r\n            </tr>\r\n            <tr>\r\n               <td>Email Address: {EmailAddress}</td>\r\n            </tr>\r\n           \r\n            <tr>\r\n               <td><p>Regard</p>\r\n               <p>Payroll System Team,</p></td>\r\n            </tr>\r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 50px;\">\r\n            <tr>\r\n                <td style=\"background: #283f82;\"><p style=\"color: #fff; text-align: center;\">Copyright © {year} Payroll System. All Rights Reserved</p></td>    \r\n            </tr> \r\n        </table>\r\n    </body>\r\n</html>\r\n'),
(11, 'Company verification', 'bluegreyindia@gmail.com', 'bluegreyindia@gmail.com', 'Company verification', '<!DOCTYPE html>\r\n   <html>\r\n    <head>\r\n          <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n        <title>Welcome to {site_name}</title>\r\n       \r\n    </head>\r\n    <body>\r\n         <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 70px;\">\r\n            <tr>\r\n                <td style=\"background: #eee; border-bottom: 1px solid #f88120;\"><img src=\"http://nyalkaran.bluegreytech.co.in/admin/default/images/logo/logo.png\" alt=\"Nyalkaran Group Logo\" style=\"width: 121px;\"></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n\r\n      \r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 400px;background: #eee;\">\r\n            <tr>\r\n               <td><center><p>Company verification to Payroll System</p></center></td>\r\n            </tr>\r\n            <tr>\r\n                <td>Hello,</td>\r\n            </tr>\r\n            <tr>\r\n               <td><p>We are send to company verification to this email: {comemailaddress}.</p>\r\n                \r\n                <p>To vrify your company  {companyname},please click this link: {verification_link}</p>\r\n                \r\n               </td>\r\n            </tr>\r\n           \r\n            <tr>\r\n               <td><p>Regard</p>\r\n               <p>Payroll System Team,</p></td>\r\n            </tr>\r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 50px;\">\r\n            <tr>\r\n                <td style=\"background: #283f82;\"><p style=\"color: #fff; text-align: center;\">Copyright © {year} Payroll System. All Rights Reserved</p></td>    \r\n            </tr> \r\n        </table>\r\n    </body>\r\n</html>'),
(12, 'Company verification complete', 'bluegreyindia@gmail.com', 'bluegreyindia@gmail.com', 'Company verification complete', '<!DOCTYPE html>\r\n   <html>\r\n    <head>\r\n          <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n        <title>Welcome to {site_name}</title>\r\n       \r\n    </head>\r\n    <body>\r\n         <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 70px;\">\r\n            <tr>\r\n                <td style=\"background: #eee; border-bottom: 1px solid #f88120;\"><img src=\"http://nyalkaran.bluegreytech.co.in/admin/default/images/logo/logo.png\" alt=\"Nyalkaran Group Logo\" style=\"width: 121px;\"></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n\r\n      \r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 400px;background: #eee;\">\r\n            <tr>\r\n               <td><center><p>Company verification complete to Payroll System</p></center></td>\r\n            </tr>\r\n            <tr>\r\n                <td>Hello {username},</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Your company verification to complete successfully.</td>\r\n            </tr>\r\n            \r\n            <tr>\r\n               <td><p>Regard</p>\r\n               <p>Payroll System Team,</p></td>\r\n            </tr>\r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 50px;\">\r\n            <tr>\r\n                <td style=\"background: #283f82;\"><p style=\"color: #fff; text-align: center;\">Copyright © {year} Payroll System. All Rights Reserved</p></td>    \r\n            </tr> \r\n        </table>\r\n    </body>\r\n</html>'),
(13, 'Hr registration complete', 'bluegreyindia@gmail.com', 'bluegreyindia@gmail.com', 'Hr registration complete', '<!DOCTYPE html>\r\n   <html>\r\n    <head>\r\n          <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n        <title>Welcome to {site_name}</title>\r\n       \r\n    </head>\r\n    <body>\r\n         <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 70px;\">\r\n            <tr>\r\n                <td style=\"background: #eee; border-bottom: 1px solid #f88120;\"><img src=\"http://nyalkaran.bluegreytech.co.in/admin/default/images/logo/logo.png\" alt=\"Nyalkaran Group Logo\" style=\"width: 121px;\"></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 400px;background: #eee;\">\r\n            <tr>\r\n               <td><center><p>You are registered complete to Payroll System!</p></center></td>\r\n            </tr>\r\n            <tr>\r\n                <td>Hello {username},</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Email address: {EmailAddress}</td>       \r\n            </tr>\r\n            <tr>\r\n                <td>Your password: {Password}</td>  \r\n            </tr>\r\n            <tr>\r\n                <td>Your regitered for this company {companyname}</td>  \r\n            </tr>	\r\n            <tr>\r\n                <td>Your company  email contact {comemailaddress}</td>  \r\n            </tr>\r\n            <tr>\r\n               <td>\r\n                    <p>Login with this Email address and Password.</p>\r\n                    <p>To login with this link,please click this link: {login_link}</p>   \r\n               </td>\r\n            </tr>\r\n            <tr>\r\n               <td><p>Regard</p>\r\n               <p>Payroll System Team,</p></td>\r\n            </tr>\r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 50px;\">\r\n            <tr>\r\n                <td style=\"background: #283f82;\"><p style=\"color: #fff; text-align: center;\">Copyright © {year} Payroll System. All Rights Reserved</p></td>    \r\n            </tr> \r\n        </table>\r\n    </body>\r\n</html>'),
(14, 'Company licence notification', 'bluegreyindia@gmail.com', 'bluegreyindia@gmail.com', 'Company licence notification', '<!DOCTYPE html>\r\n   <html>\r\n    <head>\r\n          <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n        <title>Welcome to {site_name}</title>\r\n       \r\n    </head>\r\n    <body>\r\n         <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 70px;\">\r\n            <tr>\r\n                <td style=\"background: #eee; border-bottom: 1px solid #f88120;\"><img src=\"http://nyalkaran.bluegreytech.co.in/admin/default/images/logo/logo.png\" alt=\"Nyalkaran Group Logo\" style=\"width: 121px;\"></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 400px;background: #eee;\">\r\n            <tr>\r\n               <td><center><p>Payroll System notify to your company licence will be expire!</p></center></td>\r\n            </tr>\r\n            <tr>\r\n                <td>Hello {companyname},</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Your company licence expire within 15 days<br>\r\n                <p>Your company licence expire date is: {digitalsignaturedate}</p>\r\n                </td>  \r\n            </tr>	\r\n            <tr>\r\n               <td><p>Regard</p>\r\n               <p>Payroll System Team,</p></td>\r\n            </tr>\r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 50px;\">\r\n            <tr>\r\n                <td style=\"background: #283f82;\"><p style=\"color: #fff; text-align: center;\">Copyright © {year} Payroll System. All Rights Reserved</p></td>    \r\n            </tr> \r\n        </table>\r\n    </body>\r\n</html>');

-- --------------------------------------------------------

--
-- Table structure for table `tblhr`
--

CREATE TABLE `tblhr` (
  `hrid` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `companyid` int(11) NOT NULL,
  `isactive` int(1) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedby` int(11) NOT NULL,
  `updatedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhr`
--

INSERT INTO `tblhr` (`hrid`, `UserId`, `companyid`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(4, 32, 1, 1, 1, '2019-09-02 12:26:27', 0, '2019-09-02 06:26:27'),
(6, 40, 1, 1, 1, '2019-09-03 15:47:33', 0, '2019-09-03 09:47:33'),
(7, 44, 2, 1, 1, '2019-09-04 05:39:09', 0, '2019-09-04 11:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `tblrights`
--

CREATE TABLE `tblrights` (
  `rightsid` int(11) NOT NULL,
  `rightsname` varchar(100) NOT NULL,
  `rightskey` varchar(100) NOT NULL,
  `add` int(1) NOT NULL,
  `view` int(1) NOT NULL,
  `update` int(1) NOT NULL,
  `delete` int(1) NOT NULL,
  `isactive` int(1) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedby` int(11) NOT NULL,
  `updatedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrights`
--

INSERT INTO `tblrights` (`rightsid`, `rightsname`, `rightskey`, `add`, `view`, `update`, `delete`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(1, 'Adminlist', 'Adminlist', 1, 1, 1, 1, 1, 1, '2019-09-04 06:16:28', 1, '2019-09-04 05:29:59'),
(2, 'Company', 'Companytype', 1, 1, 1, 1, 1, 1, '2019-09-04 05:29:59', 1, '2019-09-04 05:29:59'),
(3, 'Company', 'Companycompliance', 1, 1, 1, 1, 1, 1, '2019-09-04 05:29:59', 1, '2019-09-04 05:29:59'),
(4, 'Company', 'Company', 1, 1, 1, 1, 1, 1, '2019-09-04 05:29:59', 1, '2019-09-04 05:29:59'),
(8, 'Hr', 'Hr', 1, 1, 1, 1, 1, 1, '2019-09-04 05:29:59', 1, '2019-09-04 05:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `tblrightsuser`
--

CREATE TABLE `tblrightsuser` (
  `userrightsid` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `rightsid` int(11) NOT NULL,
  `views` enum('0','1') DEFAULT '0',
  `adds` enum('0','1') DEFAULT '0',
  `updates` enum('0','1') DEFAULT '0',
  `deletes` enum('0','1') DEFAULT '0',
  `isactive` int(1) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedby` int(11) NOT NULL,
  `updatedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrightsuser`
--

INSERT INTO `tblrightsuser` (`userrightsid`, `UserId`, `rightsid`, `views`, `adds`, `updates`, `deletes`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(3, 4, 1, '0', '0', '1', '1', 1, 1, '2019-09-04 04:00:00', 0, '2019-09-04 10:34:03'),
(4, 1, 2, '0', '0', '1', '1', 1, 1, '2019-09-04 04:00:00', 0, '2019-09-04 10:34:03'),
(5, 4, 8, '1', '1', '1', '0', 1, 1, '2019-09-04 04:00:00', 0, '2019-09-04 11:16:01'),
(6, 4, 1, '1', '1', '0', '0', 1, 1, '2019-09-04 04:00:00', 0, '2019-09-04 11:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

CREATE TABLE `tblstate` (
  `stateid` int(11) NOT NULL,
  `statename` varchar(100) DEFAULT NULL,
  `stateabbreviation` varchar(4) DEFAULT NULL,
  `CountryId` int(11) DEFAULT NULL,
  `isactive` int(11) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedby` int(11) NOT NULL,
  `updatedon` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`stateid`, `statename`, `stateabbreviation`, `CountryId`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(1, 'Alabama', 'AL', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2, 'Alaska', 'AK', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3, 'Arizona', 'AZ', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(4, 'Arkansas', 'AR', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(5, 'California', 'CA', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(6, 'Colorado', 'CO', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(7, 'Connecticut', 'CT', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(8, 'Delaware', 'DE', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(9, 'Florida', 'FL', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(10, 'Georgia', 'GA', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(11, 'Hawaii', 'HI', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(12, 'Idaho', 'ID', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(13, 'Illinois', 'IL', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(14, 'Indiana', 'IN', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(15, 'Iowa', 'IA', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(16, 'Kansas', 'KS', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(17, 'Kentucky', 'KY', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(18, 'Louisiana', 'LA', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(19, 'Maine', 'ME', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(20, 'Maryland', 'MD', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(21, 'Massachusetts', 'MA', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(22, 'Michigan', 'MI', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(23, 'Minnesota', 'MN', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(24, 'Mississippi', 'MS', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(25, 'Missouri', 'MO', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(26, 'Montana', 'MT', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(27, 'Nebraska', 'NE', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(28, 'Nevada', 'NV', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(29, 'New Hampshire', 'NH', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(30, 'New Jersey', 'NJ', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(31, 'New Mexico', 'NM', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(32, 'New York', 'NY', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(33, 'North Carolina', 'NC', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(34, 'North Dakota', 'ND', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(35, 'Ohio', 'OH', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(36, 'Oklahoma', 'OK', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(37, 'Oregon', 'OR', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(38, 'Pennsylvania', 'PA', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(39, 'Rhode Island', 'RI', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(40, 'South Carolina', 'SC', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(41, 'South Dakota', 'SD', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(42, 'Tennessee', 'TN', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(43, 'Texas', 'TX', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(44, 'Utah', 'UT', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(45, 'Vermont', 'VT', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(46, 'Virginia', 'VA', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(47, 'Washington', 'WA', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(48, 'West Virginia', 'WV', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(49, 'Wisconsin', 'WI', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(50, 'Wyoming', 'WY', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(51, 'District of Columbia', 'DC', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(52, 'American Samoa', 'AS', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(53, 'Guam', 'GU', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(54, 'Northern Mariana Islands', 'MP', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(55, 'Puerto Rico', 'PR', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(56, 'Virgin Islands', 'VI', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(57, 'United States Minor Outlying Islands', 'UM', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(58, 'Armed Forces Europe', 'AE', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(59, 'Armed Forces Americas', 'AA', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(60, 'Armed Forces Pacific', 'AP', 231, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(61, 'Alberta', 'AB', 38, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(62, 'British Columbia', 'BC', 38, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(63, 'Manitoba', 'MB', 38, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(64, 'New Brunswick', 'NB', 38, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(65, 'Newfoundland and Labrador', 'NL', 38, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(66, 'Northwest Territories', 'NT', 38, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(67, 'Nova Scotia', 'NS', 38, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(68, 'Nunavut', 'NU', 38, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(69, 'Ontario', 'ON', 38, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(70, 'Prince Edward Island', 'PE', 38, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(71, 'Quebec', 'QC', 38, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(72, 'Saskatchewan', 'SK', 38, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(73, 'Yukon Territory', 'YT', 38, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(74, 'Maharashtra', 'MM', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(75, 'Karnataka', 'KA', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(76, 'Andhra Pradesh', 'AP', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(77, 'Arunachal Pradesh', 'AR', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(78, 'Assam', 'AS', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(79, 'Bihar', 'BR', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(80, 'Chhattisgarh', 'CH', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(81, 'Goa', 'GA', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(82, 'Gujarat', 'GJ', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(83, 'Haryana', 'HR', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(84, 'Himachal Pradesh', 'HP', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(85, 'Jammu and Kashmir', 'JK', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(86, 'Jharkhand', 'JH', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(87, 'Kerala', 'KL', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(88, 'Madhya Pradesh', 'MP', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(89, 'Manipur', 'MN', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(90, 'Meghalaya', 'ML', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(91, 'Mizoram', 'MZ', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(92, 'Nagaland', 'NL', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(93, 'Orissa', 'OR', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(94, 'Punjab', 'PB', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(95, 'Rajasthan', 'RJ', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(96, 'Sikkim', 'SK', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(97, 'Tamil Nadu', 'TN', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(98, 'Tripura', 'TR', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(99, 'Uttaranchal', 'UL', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(100, 'Uttar Pradesh', 'UP', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(101, 'West Bengal', 'WB', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(102, 'Andaman and Nicobar Islands', 'AN', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(103, 'Dadra and Nagar Haveli', 'DN', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(104, 'Daman and Diu', 'DD', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(105, 'Delhi', 'DL', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(106, 'Lakshadweep', 'LD', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(107, 'Pondicherry', 'PY', 101, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(108, 'mazowieckie', 'MZ', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(109, 'pomorskie', 'PM', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(110, 'dolnośląskie', 'DS', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(111, 'kujawsko-pomorskie', 'KP', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(112, 'lubelskie', 'LU', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(113, 'lubuskie', 'LB', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(114, 'łódzkie', 'LD', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(115, 'małopolskie', 'MA', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(116, 'opolskie', 'OP', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(117, 'podkarpackie', 'PK', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(118, 'podlaskie', 'PD', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(119, 'śląskie', 'SL', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(120, 'świętokrzyskie', 'SK', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(121, 'warmińsko-mazurskie', 'WN', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(122, 'wielkopolskie', 'WP', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(123, 'zachodniopomorskie', 'ZP', 175, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(124, 'Abu Zaby', 'AZ', 1225, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(126, 'Al Fujayrah', 'FU', 1225, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(127, 'Ash Shariqah', 'SH', 1225, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(128, 'Dubayy', 'DU', 1225, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(129, 'Ra\'s al Khaymah', 'RK', 1225, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(130, 'Dac Lac', '33', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(131, 'Umm al Qaywayn', 'UQ', 1225, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(132, 'Badakhshan', 'BDS', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(133, 'Badghis', 'BDG', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(134, 'Baghlan', 'BGL', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(135, 'Balkh', 'BAL', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(136, 'Bamian', 'BAM', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(137, 'Farah', 'FRA', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(138, 'Faryab', 'FYB', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(139, 'Ghazni', 'GHA', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(140, 'Ghowr', 'GHO', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(141, 'Helmand', 'HEL', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(142, 'Herat', 'HER', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(143, 'Jowzjan', 'JOW', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(144, 'Kabul', 'KAB', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(145, 'Kandahar', 'KAN', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(146, 'Kapisa', 'KAP', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(147, 'Khowst', 'KHO', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(148, 'Konar', 'KNR', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(149, 'Kondoz', 'KDZ', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(150, 'Laghman', 'LAG', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(151, 'Lowgar', 'LOW', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(152, 'Nangrahar', 'NAN', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(153, 'Nimruz', 'NIM', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(154, 'Nurestan', 'NUR', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(155, 'Oruzgan', 'ORU', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(156, 'Paktia', 'PIA', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(157, 'Paktika', 'PKA', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(158, 'Parwan', 'PAR', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(159, 'Samangan', 'SAM', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(160, 'Sar-e Pol', 'SAR', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(161, 'Takhar', 'TAK', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(162, 'Wardak', 'WAR', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(163, 'Zabol', 'ZAB', 1, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(164, 'Berat', 'BR', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(165, 'Bulqizë', 'BU', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(166, 'Delvinë', 'DL', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(167, 'Devoll', 'DV', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(168, 'Dibër', 'DI', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(169, 'Durrsës', 'DR', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(170, 'Elbasan', 'EL', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(171, 'Fier', 'FR', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(172, 'Gramsh', 'GR', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(173, 'Gjirokastër', 'GJ', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(174, 'Has', 'HA', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(175, 'Kavajë', 'KA', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(176, 'Kolonjë', 'ER', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(177, 'Korcë', 'KO', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(178, 'Krujë', 'KR', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(179, 'Kuçovë', 'KC', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(180, 'Kukës', 'KU', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(181, 'Kurbin', 'KB', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(182, 'Lezhë', 'LE', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(183, 'Librazhd', 'LB', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(184, 'Lushnjë', 'LU', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(185, 'Malësi e Madhe', 'MM', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(186, 'Mallakastër', 'MK', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(187, 'Mat', 'MT', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(188, 'Mirditë', 'MR', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(189, 'Peqin', 'PQ', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(190, 'Përmet', 'PR', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(191, 'Pogradec', 'PG', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(192, 'Pukë', 'PU', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(193, 'Sarandë', 'SR', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(194, 'Skrapar', 'SK', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(195, 'Shkodër', 'SH', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(196, 'Tepelenë', 'TE', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(197, 'Tiranë', 'TR', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(198, 'Tropojë', 'TP', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(199, 'Vlorë', 'VL', 2, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(200, 'Erevan', 'ER', 11, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(201, 'Aragacotn', 'AG', 11, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(202, 'Ararat', 'AR', 11, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(203, 'Armavir', 'AV', 11, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(204, 'Gegarkunik\'', 'GR', 11, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(205, 'Kotayk\'', 'KT', 11, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(206, 'Lory', 'LO', 11, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(207, 'Sirak', 'SH', 11, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(208, 'Syunik\'', 'SU', 11, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(209, 'Tavus', 'TV', 11, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(210, 'Vayoc Jor', 'VD', 11, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(211, 'Bengo', 'BGO', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(212, 'Benguela', 'BGU', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(213, 'Bie', 'BIE', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(214, 'Cabinda', 'CAB', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(215, 'Cuando-Cubango', 'CCU', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(216, 'Cuanza Norte', 'CNO', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(217, 'Cuanza Sul', 'CUS', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(218, 'Cunene', 'CNN', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(219, 'Huambo', 'HUA', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(220, 'Huila', 'HUI', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(221, 'Luanda', 'LUA', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(222, 'Lunda Norte', 'LNO', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(223, 'Lunda Sul', 'LSU', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(224, 'Malange', 'MAL', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(225, 'Moxico', 'MOX', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(226, 'Namibe', 'NAM', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(227, 'Uige', 'UIG', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(228, 'Zaire', 'ZAI', 6, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(229, 'Capital federal', 'C', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(230, 'Buenos Aires', 'B', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(231, 'Catamarca', 'K', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(232, 'Cordoba', 'X', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(233, 'Corrientes', 'W', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(234, 'Chaco', 'H', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(235, 'Chubut', 'U', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(236, 'Entre Rios', 'E', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(237, 'Formosa', 'P', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(238, 'Jujuy', 'Y', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(239, 'La Pampa', 'L', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(240, 'Mendoza', 'M', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(241, 'Misiones', 'N', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(242, 'Neuquen', 'Q', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(243, 'Rio Negro', 'R', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(244, 'Salta', 'A', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(245, 'San Juan', 'J', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(246, 'San Luis', 'D', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(247, 'Santa Cruz', 'Z', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(248, 'Santa Fe', 'S', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(249, 'Santiago del Estero', 'G', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(250, 'Tierra del Fuego', 'V', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(251, 'Tucuman', 'T', 10, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(252, 'Burgenland', '1', 14, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(253, 'Kärnten', '2', 14, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(254, 'Niederosterreich', '3', 14, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(255, 'Oberosterreich', '4', 14, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(256, 'Salzburg', '5', 14, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(257, 'Steiermark', '6', 14, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(258, 'Tirol', '7', 14, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(259, 'Vorarlberg', '8', 14, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(260, 'Wien', '9', 14, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(261, 'Australian Antarctic Territory', 'AAT', 8, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(262, 'Australian Capital Territory', 'ACT', 13, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(263, 'Northern Territory', 'NT', 13, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(264, 'New South Wales', 'NSW', 13, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(265, 'Queensland', 'QLD', 13, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(266, 'South Australia', 'SA', 13, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(267, 'Tasmania', 'TAS', 13, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(268, 'Victoria', 'VIC', 13, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(269, 'Western Australia', 'WA', 13, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(270, 'Naxcivan', 'NX', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(271, 'Ali Bayramli', 'AB', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(272, 'Baki', 'BA', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(273, 'Ganca', 'GA', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(274, 'Lankaran', 'LA', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(275, 'Mingacevir', 'MI', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(276, 'Naftalan', 'NA', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(277, 'Saki', 'SA', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(278, 'Sumqayit', 'SM', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(279, 'Susa', 'SS', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(280, 'Xankandi', 'XA', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(281, 'Yevlax', 'YE', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(282, 'Abseron', 'ABS', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(283, 'Agcabadi', 'AGC', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(284, 'Agdam', 'AGM', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(285, 'Agdas', 'AGS', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(286, 'Agstafa', 'AGA', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(287, 'Agsu', 'AGU', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(288, 'Astara', 'AST', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(289, 'Babak', 'BAB', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(290, 'Balakan', 'BAL', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(291, 'Barda', 'BAR', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(292, 'Beylagan', 'BEY', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(293, 'Bilasuvar', 'BIL', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(294, 'Cabrayll', 'CAB', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(295, 'Calilabad', 'CAL', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(296, 'Culfa', 'CUL', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(297, 'Daskasan', 'DAS', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(298, 'Davaci', 'DAV', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(299, 'Fuzuli', 'FUZ', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(300, 'Gadabay', 'GAD', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(301, 'Goranboy', 'GOR', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(302, 'Goycay', 'GOY', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(303, 'Haciqabul', 'HAC', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(304, 'Imisli', 'IMI', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(305, 'Ismayilli', 'ISM', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(306, 'Kalbacar', 'KAL', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(307, 'Kurdamir', 'KUR', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(308, 'Lacin', 'LAC', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(309, 'Lerik', 'LER', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(310, 'Masalli', 'MAS', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(311, 'Neftcala', 'NEF', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(312, 'Oguz', 'OGU', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(313, 'Ordubad', 'ORD', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(314, 'Qabala', 'QAB', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(315, 'Qax', 'QAX', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(316, 'Qazax', 'QAZ', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(317, 'Qobustan', 'QOB', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(318, 'Quba', 'QBA', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(319, 'Qubadli', 'QBI', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(320, 'Qusar', 'QUS', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(321, 'Saatli', 'SAT', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(322, 'Sabirabad', 'SAB', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(323, 'Sadarak', 'SAD', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(324, 'Sahbuz', 'SAH', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(325, 'Salyan', 'SAL', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(326, 'Samaxi', 'SMI', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(327, 'Samkir', 'SKR', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(328, 'Samux', 'SMX', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(329, 'Sarur', 'SAR', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(330, 'Siyazan', 'SIY', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(331, 'Tartar', 'TAR', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(332, 'Tovuz', 'TOV', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(333, 'Ucar', 'UCA', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(334, 'Xacmaz', 'XAC', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(335, 'Xanlar', 'XAN', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(336, 'Xizi', 'XIZ', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(337, 'Xocali', 'XCI', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(338, 'Xocavand', 'XVD', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(339, 'Yardimli', 'YAR', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(340, 'Zangilan', 'ZAN', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(341, 'Zaqatala', 'ZAQ', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(342, 'Zardab', 'ZAR', 15, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(343, 'Federacija Bosna i Hercegovina', 'BIH', 27, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(344, 'Republika Srpska', 'SRP', 27, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(345, 'Bagerhat zila', '5', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(346, 'Bandarban zila', '1', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(347, 'Barguna zila', '2', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(348, 'Barisal zila', '6', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(349, 'Bhola zila', '7', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(350, 'Bogra zila', '3', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(351, 'Brahmanbaria zila', '4', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(352, 'Chandpur zila', '9', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(353, 'Chittagong zila', '10', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(354, 'Chuadanga zila', '12', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(355, 'Comilla zila', '8', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(356, 'Cox\'s Bazar zila', '11', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(357, 'Dhaka zila', '13', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(358, 'Dinajpur zila', '14', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(359, 'Faridpur zila', '15', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(360, 'Feni zila', '16', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(361, 'Gaibandha zila', '19', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(362, 'Gazipur zila', '18', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(363, 'Gopalganj zila', '17', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(364, 'Habiganj zila', '20', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(365, 'Jaipurhat zila', '24', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(366, 'Jamalpur zila', '21', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(367, 'Jessore zila', '22', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(368, 'Jhalakati zila', '25', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(369, 'Jhenaidah zila', '23', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(370, 'Khagrachari zila', '29', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(371, 'Khulna zila', '27', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(372, 'Kishorganj zila', '26', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(373, 'Kurigram zila', '28', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(374, 'Kushtia zila', '30', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(375, 'Lakshmipur zila', '31', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(376, 'Lalmonirhat zila', '32', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(377, 'Madaripur zila', '36', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(378, 'Magura zila', '37', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(379, 'Manikganj zila', '33', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(380, 'Meherpur zila', '39', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(381, 'Moulvibazar zila', '38', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(382, 'Munshiganj zila', '35', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(383, 'Mymensingh zila', '34', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(384, 'Naogaon zila', '48', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(385, 'Narail zila', '43', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(386, 'Narayanganj zila', '40', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(387, 'Narsingdi zila', '42', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(388, 'Natore zila', '44', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(389, 'Nawabganj zila', '45', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(390, 'Netrakona zila', '41', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(391, 'Nilphamari zila', '46', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(392, 'Noakhali zila', '47', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(393, 'Pabna zila', '50', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(394, 'Panchagarh zila', '52', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(395, 'Patuakhali zila', '51', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(396, 'Pirojpur zila', '50', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(397, 'Rajbari zila', '53', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(398, 'Rajshahi zila', '54', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(399, 'Rangamati zila', '56', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(400, 'Rangpur zila', '55', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(401, 'Satkhira zila', '58', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(402, 'Shariatpur zila', '62', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(403, 'Sherpur zila', '57', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(404, 'Sirajganj zila', '59', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(405, 'Sunamganj zila', '61', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(406, 'Sylhet zila', '60', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(407, 'Tangail zila', '63', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(408, 'Thakurgaon zila', '64', 18, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(409, 'Antwerpen', 'VAN', 21, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(410, 'Brabant Wallon', 'WBR', 21, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(411, 'Hainaut', 'WHT', 21, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(412, 'Liege', 'WLG', 21, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(413, 'Limburg', 'VLI', 21, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(414, 'Luxembourg', 'WLX', 21, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(415, 'Namur', 'WNA', 21, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(416, 'Oost-Vlaanderen', 'VOV', 21, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(417, 'Vlaams-Brabant', 'VBR', 21, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(418, 'West-Vlaanderen', 'VWV', 21, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(419, 'Bale', 'BAL', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(420, 'Bam', 'BAM', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(421, 'Banwa', 'BAN', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(422, 'Bazega', 'BAZ', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(423, 'Bougouriba', 'BGR', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(424, 'Boulgou', 'BLG', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(425, 'Boulkiemde', 'BLK', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(426, 'Comoe', 'COM', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(427, 'Ganzourgou', 'GAN', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(428, 'Gnagna', 'GNA', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(429, 'Gourma', 'GOU', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(430, 'Houet', 'HOU', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(431, 'Ioba', 'IOB', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(432, 'Kadiogo', 'KAD', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(433, 'Kenedougou', 'KEN', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(434, 'Komondjari', 'KMD', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(435, 'Kompienga', 'KMP', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(436, 'Kossi', 'KOS', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(437, 'Koulpulogo', 'KOP', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(438, 'Kouritenga', 'KOT', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(439, 'Kourweogo', 'KOW', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(440, 'Leraba', 'LER', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(441, 'Loroum', 'LOR', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(442, 'Mouhoun', 'MOU', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(443, 'Nahouri', 'NAO', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(444, 'Namentenga', 'NAM', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(445, 'Nayala', 'NAY', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(446, 'Noumbiel', 'NOU', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(447, 'Oubritenga', 'OUB', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(448, 'Oudalan', 'OUD', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(449, 'Passore', 'PAS', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(450, 'Poni', 'PON', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(451, 'Sanguie', 'SNG', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(452, 'Sanmatenga', 'SMT', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(453, 'Seno', 'SEN', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(454, 'Siasili', 'SIS', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(455, 'Soum', 'SOM', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(456, 'Sourou', 'SOR', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(457, 'Tapoa', 'TAP', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(458, 'Tui', 'TUI', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(459, 'Yagha', 'YAG', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(460, 'Yatenga', 'YAT', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(461, 'Ziro', 'ZIR', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(462, 'Zondoma', 'ZON', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(463, 'Zoundweogo', 'ZOU', 34, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(464, 'Blagoevgrad', '1', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(465, 'Burgas', '2', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(466, 'Dobric', '8', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(467, 'Gabrovo', '7', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(468, 'Haskovo', '26', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(469, 'Jambol', '28', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(470, 'Kardzali', '9', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(471, 'Kjstendil', '10', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(472, 'Lovec', '11', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(473, 'Montana', '12', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(474, 'Pazardzik', '13', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(475, 'Pernik', '14', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(476, 'Pleven', '15', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(477, 'Plovdiv', '16', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(478, 'Razgrad', '17', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(479, 'Ruse', '18', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(480, 'Silistra', '19', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(481, 'Sliven', '20', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(482, 'Smoljan', '21', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(483, 'Sofia', '23', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(484, 'Stara Zagora', '24', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(485, 'Sumen', '27', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(486, 'Targoviste', '25', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(487, 'Varna', '3', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(488, 'Veliko Tarnovo', '4', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(489, 'Vidin', '5', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(490, 'Vraca', '6', 33, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(491, 'Al Hadd', '1', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(492, 'Al Manamah', '3', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(493, 'Al Mintaqah al Gharbiyah', '10', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(494, 'Al Mintagah al Wusta', '7', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(495, 'Al Mintaqah ash Shamaliyah', '5', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(496, 'Al Muharraq', '2', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(497, 'Ar Rifa', '9', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(498, 'Jidd Hafs', '4', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(499, 'Madluat Jamad', '12', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(500, 'Madluat Isa', '8', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(501, 'Mintaqat Juzur tawar', '11', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(502, 'Sitrah', '6', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(503, 'Bubanza', 'BB', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(504, 'Bujumbura', 'BJ', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(505, 'Bururi', 'BR', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(506, 'Cankuzo', 'CA', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(507, 'Cibitoke', 'CI', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(508, 'Gitega', 'GI', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(509, 'Karuzi', 'KR', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(510, 'Kayanza', 'KY', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(511, 'Makamba', 'MA', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(512, 'Muramvya', 'MU', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(513, 'Mwaro', 'MW', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(514, 'Ngozi', 'NG', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(515, 'Rutana', 'RT', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(516, 'Ruyigi', 'RY', 35, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(517, 'Alibori', 'AL', 23, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(518, 'Atakora', 'AK', 23, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(519, 'Atlantique', 'AQ', 23, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(520, 'Borgou', 'BO', 23, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(521, 'Collines', 'CO', 23, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(522, 'Donga', 'DO', 23, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(523, 'Kouffo', 'KO', 23, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(524, 'Littoral', 'LI', 23, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(525, 'Mono', 'MO', 23, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(526, 'Oueme', 'OU', 23, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(527, 'Plateau', 'PL', 23, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(528, 'Zou', 'ZO', 23, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(529, 'Belait', 'BE', 32, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(530, 'Brunei-Muara', 'BM', 32, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(531, 'Temburong', 'TE', 32, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(532, 'Tutong', 'TU', 32, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(533, 'Cochabamba', 'C', 26, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(534, 'Chuquisaca', 'H', 26, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(535, 'El Beni', 'B', 26, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(536, 'La Paz', 'L', 26, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(537, 'Oruro', 'O', 26, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(538, 'Pando', 'N', 26, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(539, 'Potosi', 'P', 26, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(540, 'Tarija', 'T', 26, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(541, 'Acre', 'AC', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(542, 'Alagoas', 'AL', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(543, 'Amazonas', 'AM', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(544, 'Amapa', 'AP', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(545, 'Baia', 'BA', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(546, 'Ceara', 'CE', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(547, 'Distrito Federal', 'DF', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(548, 'Espirito Santo', 'ES', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(549, 'Fernando de Noronha', 'FN', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(550, 'Goias', 'GO', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(551, 'Maranhao', 'MA', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(552, 'Minas Gerais', 'MG', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(553, 'Mato Grosso do Sul', 'MS', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(554, 'Mato Grosso', 'MT', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(555, 'Para', 'PA', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(556, 'Paraiba', 'PB', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(557, 'Pernambuco', 'PE', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(558, 'Piaui', 'PI', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(559, 'Parana', 'PR', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(560, 'Rio de Janeiro', 'RJ', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(561, 'Rio Grande do Norte', 'RN', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(562, 'Rondonia', 'RO', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(563, 'Roraima', 'RR', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(564, 'Rio Grande do Sul', 'RS', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(565, 'Santa Catarina', 'SC', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(566, 'Sergipe', 'SE', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(567, 'Sao Paulo', 'SP', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(568, 'Tocatins', 'TO', 30, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(569, 'Acklins and Crooked Islands', 'AC', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(570, 'Bimini', 'BI', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(571, 'Cat Island', 'CI', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(572, 'Exuma', 'EX', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(573, 'Freeport', 'FP', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(574, 'Fresh Creek', 'FC', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(575, 'Governor\'s Harbour', 'GH', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(576, 'Green Turtle Cay', 'GT', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(577, 'Harbour Island', 'HI', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(578, 'High Rock', 'HR', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(579, 'Inagua', 'IN', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(580, 'Kemps Bay', 'KB', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(581, 'Long Island', 'LI', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(582, 'Marsh Harbour', 'MH', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(583, 'Mayaguana', 'MG', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(584, 'New Providence', 'NP', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(585, 'Nicholls Town and Berry Islands', 'NB', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(586, 'Ragged Island', 'RI', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(587, 'Rock Sound', 'RS', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(588, 'Sandy Point', 'SP', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(589, 'San Salvador and Rum Cay', 'SR', 16, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(590, 'Bumthang', '33', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(591, 'Chhukha', '12', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(592, 'Dagana', '22', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(593, 'Gasa', 'GA', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(594, 'Ha', '13', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(595, 'Lhuentse', '44', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(596, 'Monggar', '42', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(597, 'Paro', '11', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(598, 'Pemagatshel', '43', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(599, 'Punakha', '23', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24');
INSERT INTO `tblstate` (`stateid`, `statename`, `stateabbreviation`, `CountryId`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(600, 'Samdrup Jongkha', '45', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(601, 'Samtee', '14', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(602, 'Sarpang', '31', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(603, 'Thimphu', '15', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(604, 'Trashigang', '41', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(605, 'Trashi Yangtse', 'TY', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(606, 'Trongsa', '32', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(607, 'Tsirang', '21', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(608, 'Wangdue Phodrang', '24', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(609, 'Zhemgang', '34', 25, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(610, 'Central', 'CE', 28, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(611, 'Ghanzi', 'GH', 28, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(612, 'Kgalagadi', 'KG', 28, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(613, 'Kgatleng', 'KL', 28, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(614, 'Kweneng', 'KW', 28, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(615, 'Ngamiland', 'NG', 28, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(616, 'North-East', 'NE', 28, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(617, 'North-West', 'NW', 28, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(618, 'South-East', 'SE', 28, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(619, 'Southern', 'SO', 28, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(620, 'Brèsckaja voblasc\'', 'BR', 20, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(621, 'Homel\'skaja voblasc\'', 'HO', 20, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(622, 'Hrodzenskaja voblasc\'', 'HR', 20, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(623, 'Mahilëuskaja voblasc\'', 'MA', 20, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(624, 'Minskaja voblasc\'', 'MI', 20, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(625, 'Vicebskaja voblasc\'', 'VI', 20, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(626, 'Belize', 'BZ', 22, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(627, 'Cayo', 'CY', 22, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(628, 'Corozal', 'CZL', 22, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(629, 'Orange Walk', 'OW', 22, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(630, 'Stann Creek', 'SC', 22, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(631, 'Toledo', 'TOL', 22, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(632, 'Kinshasa', 'KN', 49, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(633, 'Bandundu', 'BN', 49, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(634, 'Bas-Congo', 'BC', 49, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(635, 'Equateur', 'EQ', 49, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(636, 'Haut-Congo', 'HC', 49, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(637, 'Kasai-Occidental', 'KW', 49, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(638, 'Kasai-Oriental', 'KE', 49, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(639, 'Katanga', 'KA', 49, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(640, 'Maniema', 'MA', 49, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(641, 'Nord-Kivu', 'NK', 49, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(642, 'Orientale', 'OR', 49, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(643, 'Sud-Kivu', 'SK', 49, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(644, 'Bangui', 'BGF', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(645, 'Bamingui-Bangoran', 'BB', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(646, 'Basse-Kotto', 'BK', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(647, 'Haute-Kotto', 'HK', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(648, 'Haut-Mbomou', 'HM', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(649, 'Kemo', 'KG', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(650, 'Lobaye', 'LB', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(651, 'Mambere-Kadei', 'HS', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(652, 'Mbomou', 'MB', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(653, 'Nana-Grebizi', 'KB', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(654, 'Nana-Mambere', 'NM', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(655, 'Ombella-Mpoko', 'MP', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(656, 'Ouaka', 'UK', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(657, 'Ouham', 'AC', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(658, 'Ouham-Pende', 'OP', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(659, 'Sangha-Mbaere', 'SE', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(660, 'Vakaga', 'VR', 41, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(661, 'Brazzaville', 'BZV', 50, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(662, 'Bouenza', '11', 50, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(663, 'Cuvette', '8', 50, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(664, 'Cuvette-Ouest', '15', 50, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(665, 'Kouilou', '5', 50, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(666, 'Lekoumou', '2', 50, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(667, 'Likouala', '7', 50, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(668, 'Niari', '9', 50, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(669, 'Plateaux', '14', 50, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(670, 'Pool', '12', 50, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(671, 'Sangha', '13', 50, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(672, 'Aargau', 'AG', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(673, 'Appenzell Innerrhoden', 'AI', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(674, 'Appenzell Ausserrhoden', 'AR', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(675, 'Bern', 'BE', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(676, 'Basel-Landschaft', 'BL', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(677, 'Basel-Stadt', 'BS', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(678, 'Fribourg', 'FR', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(679, 'Geneva', 'GE', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(680, 'Glarus', 'GL', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(681, 'Graubunden', 'GR', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(682, 'Jura', 'JU', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(683, 'Luzern', 'LU', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(684, 'Neuchatel', 'NE', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(685, 'Nidwalden', 'NW', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(686, 'Obwalden', 'OW', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(687, 'Sankt Gallen', 'SG', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(688, 'Schaffhausen', 'SH', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(689, 'Solothurn', 'SO', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(690, 'Schwyz', 'SZ', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(691, 'Thurgau', 'TG', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(692, 'Ticino', 'TI', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(693, 'Uri', 'UR', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(694, 'Vaud', 'VD', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(695, 'Valais', 'VS', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(696, 'Zug', 'ZG', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(697, 'Zurich', 'ZH', 212, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(698, 'Montagnes', 'MT', 53, 1, 1, '2018-06-29 14:11:24', 297, '2018-11-16 15:59:28'),
(699, 'Agnebi', '16', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(700, 'Bas-Sassandra', '9', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(701, 'Denguele', '10', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(702, 'Haut-Sassandra', '2', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(703, 'Lacs', '7', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(704, 'Lagunes', '1', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(705, 'Marahoue', '12', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(706, 'Moyen-Comoe', '5', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(707, 'Nzi-Comoe', '11', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(708, 'Savanes', '3', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(709, 'Sud-Bandama', '15', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(710, 'Sud-Comoe', '13', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(711, 'Vallee du Bandama', '4', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(712, 'Worodouqou', '14', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(713, 'Zanzan', '8', 53, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(714, 'Aisen del General Carlos Ibanez del Campo', 'AI', 43, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(715, 'Antofagasta', 'AN', 43, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(716, 'Araucania', 'AR', 43, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(717, 'Atacama', 'AT', 43, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(718, 'Bio-Bio', 'BI', 43, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(719, 'Coquimbo', 'CO', 43, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(720, 'Libertador General Bernardo O\'Higgins', 'LI', 43, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(721, 'Los Lagos', 'LL', 43, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(722, 'Magallanes', 'MA', 43, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(723, 'Maule', 'ML', 43, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(724, 'Region Metropolitana de Santiago', 'RM', 43, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(725, 'Tarapaca', 'TA', 43, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(726, 'Valparaiso', 'VS', 43, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(727, 'Adamaoua', 'AD', 37, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(728, 'Centre', 'CE', 37, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(729, 'East', 'ES', 37, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(730, 'Far North', 'EN', 37, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(731, 'North', 'NO', 37, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(732, 'South', 'SW', 37, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(733, 'South-West', 'SW', 37, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(734, 'West', 'OU', 37, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(735, 'Beijing', '11', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(736, 'Chongqing', '50', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(737, 'Shanghai', '31', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(738, 'Tianjin', '12', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(739, 'Anhui', '34', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(740, 'Fujian', '35', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(741, 'Gansu', '62', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(742, 'Guangdong', '44', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(743, 'Guizhou', '52', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(744, 'Hainan', '46', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(745, 'Hebei', '13', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(746, 'Heilongjiang', '23', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(747, 'Henan', '41', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(748, 'Hubei', '42', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(749, 'Hunan', '43', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(750, 'Jiangsu', '32', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(751, 'Jiangxi', '36', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(752, 'Jilin', '22', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(753, 'Liaoning', '21', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(754, 'Qinghai', '63', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(755, 'Shaanxi', '61', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(756, 'Shandong', '37', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(757, 'Shanxi', '14', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(758, 'Sichuan', '51', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(759, 'Taiwan', '71', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(760, 'Yunnan', '53', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(761, 'Zhejiang', '33', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(762, 'Guangxi', '45', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(763, 'Neia Mongol (mn)', '15', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(764, 'Xinjiang', '65', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(765, 'Xizang', '54', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(766, 'Hong Kong', '91', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(767, 'Macau', '92', 44, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(768, 'Distrito Capital de Bogotá', 'DC', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(769, 'Amazonea', 'AMA', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(770, 'Antioquia', 'ANT', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(771, 'Arauca', 'ARA', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(772, 'Atlántico', 'ATL', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(773, 'Bolívar', 'BOL', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(774, 'Boyacá', 'BOY', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(775, 'Caldea', 'CAL', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(776, 'Caquetá', 'CAQ', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(777, 'Casanare', 'CAS', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(778, 'Cauca', 'CAU', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(779, 'Cesar', 'CES', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(780, 'Córdoba', 'COR', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(781, 'Cundinamarca', 'CUN', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(782, 'Chocó', 'CHO', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(783, 'Guainía', 'GUA', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(784, 'Guaviare', 'GUV', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(785, 'La Guajira', 'LAG', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(786, 'Magdalena', 'MAG', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(787, 'Meta', 'MET', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(788, 'Nariño', 'NAR', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(789, 'Norte de Santander', 'NSA', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(790, 'Putumayo', 'PUT', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(791, 'Quindio', 'QUI', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(792, 'Risaralda', 'RIS', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(793, 'San Andrés, Providencia y Santa Catalina', 'SAP', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(794, 'Santander', 'SAN', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(795, 'Sucre', 'SUC', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(796, 'Tolima', 'TOL', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(797, 'Valle del Cauca', 'VAC', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(798, 'Vaupés', 'VAU', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(799, 'Vichada', 'VID', 47, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(800, 'Alajuela', 'A', 52, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(801, 'Cartago', 'C', 52, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(802, 'Guanacaste', 'G', 52, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(803, 'Heredia', 'H', 52, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(804, 'Limon', 'L', 52, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(805, 'Puntarenas', 'P', 52, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(806, 'San Jose', 'SJ', 52, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(807, 'Camagey', '9', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(808, 'Ciego de `vila', '8', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(809, 'Cienfuegos', '6', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(810, 'Ciudad de La Habana', '3', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(811, 'Granma', '12', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(812, 'Guantanamo', '14', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(813, 'Holquin', '11', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(814, 'La Habana', '2', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(815, 'Las Tunas', '10', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(816, 'Matanzas', '4', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(817, 'Pinar del Rio', '1', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(818, 'Sancti Spiritus', '7', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(819, 'Santiago de Cuba', '13', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(820, 'Villa Clara', '5', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(821, 'Isla de la Juventud', '99', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(822, 'Pinar del Roo', 'PR', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(823, 'Ciego de Avila', 'CA', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(824, 'Camagoey', 'CG', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(825, 'Holgun', 'HO', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(826, 'Sancti Spritus', 'SS', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(827, 'Municipio Especial Isla de la Juventud', 'IJ', 55, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(828, 'Boa Vista', 'BV', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(829, 'Brava', 'BR', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(830, 'Calheta de Sao Miguel', 'CS', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(831, 'Fogo', 'FO', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(832, 'Maio', 'MA', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(833, 'Mosteiros', 'MO', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(834, 'Paul', 'PA', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(835, 'Porto Novo', 'PN', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(836, 'Praia', 'PR', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(837, 'Ribeira Grande', 'RG', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(838, 'Sal', 'SL', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(839, 'Sao Domingos', 'SD', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(840, 'Sao Filipe', 'SF', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(841, 'Sao Nicolau', 'SN', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(842, 'Sao Vicente', 'SV', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(843, 'Tarrafal', 'TA', 39, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(844, 'Ammochostos Magusa', '4', 56, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(845, 'Keryneia', '6', 56, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(846, 'Larnaka', '3', 56, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(847, 'Lefkosia', '1', 56, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(848, 'Lemesos', '2', 56, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(849, 'Pafos', '5', 56, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(850, 'Jihočeský kraj', 'JC', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(851, 'Jihomoravský kraj', 'JM', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(852, 'Karlovarský kraj', 'KA', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(853, 'Královéhradecký kraj', 'KR', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(854, 'Liberecký kraj', 'LI', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(855, 'Moravskoslezský kraj', 'MO', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(856, 'Olomoucký kraj', 'OL', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(857, 'Pardubický kraj', 'PA', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(858, 'Plzeňský kraj', 'PL', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(859, 'Praha, hlavní město', 'PR', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(860, 'Středočeský kraj', 'ST', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(861, 'Ústecký kraj', 'US', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(862, 'Vysočina', 'VY', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(863, 'Zlínský kraj', 'ZL', 57, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(864, 'Baden-Wuerttemberg', 'BW', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(865, 'Bayern', 'BY', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(866, 'Bremen', 'HB', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(867, 'Hamburg', 'HH', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(868, 'Hessen', 'HE', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(869, 'Niedersachsen', 'NI', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(870, 'Nordrhein-Westfalen', 'NW', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(871, 'Rheinland-Pfalz', 'RP', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(872, 'Saarland', 'SL', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(873, 'Schleswig-Holstein', 'SH', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(874, 'Berlin', 'BR', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(875, 'Brandenburg', 'BB', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(876, 'Mecklenburg-Vorpommern', 'MV', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(877, 'Sachsen', 'SN', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(878, 'Sachsen-Anhalt', 'ST', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(879, 'Thueringen', 'TH', 82, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(880, 'Ali Sabiah', 'AS', 59, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(881, 'Dikhil', 'DI', 59, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(882, 'Djibouti', 'DJ', 59, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(883, 'Obock', 'OB', 59, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(884, 'Tadjoura', 'TA', 59, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(885, 'Frederiksberg', '147', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(886, 'Copenhagen City', '101', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(887, 'Copenhagen', '15', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(888, 'Frederiksborg', '20', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(889, 'Roskilde', '25', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(890, 'Vestsjælland', '30', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(891, 'Storstrøm', '35', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(892, 'Bornholm', '40', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(893, 'Fyn', '42', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(894, 'South Jutland', '50', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(895, 'Ribe', '55', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(896, 'Vejle', '60', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(897, 'Ringkjøbing', '65', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(898, 'Århus', '70', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(899, 'Viborg', '76', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(900, 'North Jutland', '80', 58, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(901, 'Distrito Nacional (Santo Domingo)', '1', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(902, 'Azua', '2', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(903, 'Bahoruco', '3', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(904, 'Barahona', '4', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(905, 'Dajabón', '5', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(906, 'Duarte', '6', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(907, 'El Seybo [El Seibo]', '8', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(908, 'Espaillat', '9', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(909, 'Hato Mayor', '30', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(910, 'Independencia', '10', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(911, 'La Altagracia', '11', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(912, 'La Estrelleta [Elias Pina]', '7', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(913, 'La Romana', '12', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(914, 'La Vega', '13', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(915, 'Maroia Trinidad Sánchez', '14', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(916, 'Monseñor Nouel', '28', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(917, 'Monte Cristi', '15', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(918, 'Monte Plata', '29', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(919, 'Pedernales', '16', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(920, 'Peravia', '17', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(921, 'Puerto Plata', '18', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(922, 'Salcedo', '19', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(923, 'Samaná', '20', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(924, 'San Cristóbal', '21', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(925, 'San Pedro de Macorís', '23', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(926, 'Sánchez Ramírez', '24', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(927, 'Santiago', '25', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(928, 'Santiago Rodríguez', '26', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(929, 'Valverde', '27', 61, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(930, 'Adrar', '1', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(931, 'Ain Defla', '44', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(932, 'Ain Tmouchent', '46', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(933, 'Alger', '16', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(934, 'Annaba', '23', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(935, 'Batna', '5', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(936, 'Bechar', '8', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(937, 'Bejaia', '6', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(938, 'Biskra', '7', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(939, 'Blida', '9', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(940, 'Bordj Bou Arreridj', '34', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(941, 'Bouira', '10', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(942, 'Boumerdes', '35', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(943, 'Chlef', '2', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(944, 'Constantine', '25', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(945, 'Djelfa', '17', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(946, 'El Bayadh', '32', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(947, 'El Oued', '39', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(948, 'El Tarf', '36', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(949, 'Ghardaia', '47', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(950, 'Guelma', '24', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(951, 'Illizi', '33', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(952, 'Jijel', '18', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(953, 'Khenchela', '40', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(954, 'Laghouat', '3', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(955, 'Mascara', '29', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(956, 'Medea', '26', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(957, 'Mila', '43', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(958, 'Mostaganem', '27', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(959, 'Msila', '28', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(960, 'Naama', '45', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(961, 'Oran', '31', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(962, 'Ouargla', '30', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(963, 'Oum el Bouaghi', '4', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(964, 'Relizane', '48', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(965, 'Saida', '20', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(966, 'Setif', '19', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(967, 'Sidi Bel Abbes', '22', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(968, 'Skikda', '21', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(969, 'Souk Ahras', '41', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(970, 'Tamanghasset', '11', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(971, 'Tebessa', '12', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(972, 'Tiaret', '14', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(973, 'Tindouf', '37', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(974, 'Tipaza', '42', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(975, 'Tissemsilt', '38', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(976, 'Tizi Ouzou', '15', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(977, 'Tlemcen', '13', 3, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(978, 'Azuay', 'A', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(979, 'Bolivar', 'B', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(980, 'Canar', 'F', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(981, 'Carchi', 'C', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(982, 'Cotopaxi', 'X', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(983, 'Chimborazo', 'H', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(984, 'El Oro', 'O', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(985, 'Esmeraldas', 'E', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(986, 'Galapagos', 'W', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(987, 'Guayas', 'G', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(988, 'Imbabura', 'I', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(989, 'Loja', 'L', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(990, 'Los Rios', 'R', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(991, 'Manabi', 'M', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(992, 'Morona-Santiago', 'S', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(993, 'Napo', 'N', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(994, 'Orellana', 'D', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(995, 'Pastaza', 'Y', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(996, 'Pichincha', 'P', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(997, 'Sucumbios', 'U', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(998, 'Tungurahua', 'T', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(999, 'Zamora-Chinchipe', 'Z', 63, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1000, 'Harjumsa', '37', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1001, 'Hitumea', '39', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1002, 'Ida-Virumsa', '44', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1003, 'Jogevamsa', '50', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1004, 'Jarvamsa', '51', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1005, 'Lasnemsa', '57', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1006, 'Laane-Virumaa', '59', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1007, 'Polvamea', '65', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1008, 'Parnumsa', '67', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1009, 'Raplamsa', '70', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1010, 'Saaremsa', '74', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1011, 'Tartumsa', '7B', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1012, 'Valgamaa', '82', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1013, 'Viljandimsa', '84', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1014, 'Vorumaa', '86', 68, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1015, 'Ad Daqahllyah', 'DK', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1016, 'Al Bahr al Ahmar', 'BA', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1017, 'Al Buhayrah', 'BH', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1018, 'Al Fayym', 'FYM', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1019, 'Al Gharbiyah', 'GH', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1020, 'Al Iskandarlyah', 'ALX', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1021, 'Al Isma illyah', 'IS', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1022, 'Al Jizah', 'GZ', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1023, 'Al Minuflyah', 'MNF', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1024, 'Al Minya', 'MN', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1025, 'Al Qahirah', 'C', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1026, 'Al Qalyublyah', 'KB', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1027, 'Al Wadi al Jadid', 'WAD', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1028, 'Ash Sharqiyah', 'SHR', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1029, 'As Suways', 'SUZ', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1030, 'Aswan', 'ASN', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1031, 'Asyut', 'AST', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1032, 'Bani Suwayf', 'BNS', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1033, 'Bur Sa\'id', 'PTS', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1034, 'Dumyat', 'DT', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1035, 'Janub Sina\'', 'JS', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1036, 'Kafr ash Shaykh', 'KFS', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1037, 'Matruh', 'MT', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1038, 'Qina', 'KN', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1039, 'Shamal Sina\'', 'SIN', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1040, 'Suhaj', 'SHG', 64, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1041, 'Anseba', 'AN', 67, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1042, 'Debub', 'DU', 67, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1043, 'Debubawi Keyih Bahri [Debub-Keih-Bahri]', 'DK', 67, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1044, 'Gash-Barka', 'GB', 67, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1045, 'Maakel [Maekel]', 'MA', 67, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1046, 'Semenawi Keyih Bahri [Semien-Keih-Bahri]', 'SK', 67, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1047, 'Álava', 'VI', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1048, 'Albacete', 'AB', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1049, 'Alicante', 'A', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1050, 'Almería', 'AL', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1051, 'Asturias', 'O', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1052, 'Ávila', 'AV', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1053, 'Badajoz', 'BA', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1054, 'Baleares', 'PM', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1055, 'Barcelona', 'B', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1056, 'Burgos', 'BU', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1057, 'Cáceres', 'CC', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1058, 'Cádiz', 'CA', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1059, 'Cantabria', 'S', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1060, 'Castellón', 'CS', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1061, 'Ciudad Real', 'CR', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1062, 'Cuenca', 'CU', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1063, 'Girona [Gerona]', 'GE', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1064, 'Granada', 'GR', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1065, 'Guadalajara', 'GU', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1066, 'Guipúzcoa', 'SS', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1067, 'Huelva', 'H', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1068, 'Huesca', 'HU', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1069, 'Jaén', 'J', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1070, 'La Coruña', 'C', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1071, 'La Rioja', 'LO', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1072, 'Las Palmas', 'GC', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1073, 'León', 'LE', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1074, 'Lleida [Lérida]', 'L', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1075, 'Lugo', 'LU', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1076, 'Madrid', 'M', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1077, 'Málaga', 'MA', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1078, 'Murcia', 'MU', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1079, 'Navarra', 'NA', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1080, 'Ourense', 'OR', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1081, 'Palencia', 'P', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1082, 'Pontevedra', 'PO', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1083, 'Salamanca', 'SA', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1084, 'Santa Cruz de Tenerife', 'TF', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1085, 'Segovia', 'SG', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1086, 'Sevilla', 'SE', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1087, 'Soria', 'SO', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1088, 'Tarragona', 'T', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1089, 'Teruel', 'TE', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1090, 'Valencia', 'V', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1091, 'Valladolid', 'VA', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1092, 'Vizcaya', 'BI', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1093, 'Zamora', 'ZA', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1094, 'Zaragoza', 'Z', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1095, 'Ceuta', 'CE', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1096, 'Melilla', 'ML', 205, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1097, 'Addis Ababa', 'AA', 69, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1098, 'Dire Dawa', 'DD', 69, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1099, 'Afar', 'AF', 69, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1100, 'Amara', 'AM', 69, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1101, 'Benshangul-Gumaz', 'BE', 69, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1102, 'Gambela Peoples', 'GA', 69, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1103, 'Harari People', 'HA', 69, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1104, 'Oromia', 'OR', 69, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1105, 'Somali', 'SO', 69, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1106, 'Southern Nations, Nationalities and Peoples', 'SN', 69, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1107, 'Tigrai', 'TI', 69, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1108, 'Eastern', 'E', 73, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1109, 'Northern', 'N', 73, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1110, 'Western', 'W', 73, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1111, 'Rotuma', 'R', 73, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1112, 'Chuuk', 'TRK', 143, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1113, 'Kosrae', 'KSA', 143, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1114, 'Pohnpei', 'PNI', 143, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1115, 'Yap', 'YAP', 143, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1116, 'Ain', '1', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1117, 'Aisne', '2', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1118, 'Allier', '3', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1119, 'Alpes-de-Haute-Provence', '4', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1120, 'Alpes-Maritimes', '6', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1121, 'Ardèche', '7', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1122, 'Ardennes', '8', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1123, 'Ariège', '9', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1124, 'Aube', '10', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1125, 'Aude', '11', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1126, 'Aveyron', '12', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1127, 'Bas-Rhin', '67', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1128, 'Bouches-du-Rhône', '13', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1129, 'Calvados', '14', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1130, 'Cantal', '15', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1131, 'Charente', '16', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1132, 'Charente-Maritime', '17', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1133, 'Cher', '18', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1134, 'Corrèze', '19', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1135, 'Corse-du-Sud', '20A', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1136, 'Côte-d\'Or', '21', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1137, 'Côtes-d\'Armor', '22', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1138, 'Creuse', '23', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1139, 'Deux-Sèvres', '79', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1140, 'Dordogne', '24', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1141, 'Doubs', '25', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1142, 'Drôme', '26', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1143, 'Essonne', '91', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1144, 'Eure', '27', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1145, 'Eure-et-Loir', '28', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1146, 'Finistère', '29', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1147, 'Gard', '30', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1148, 'Gers', '32', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1149, 'Gironde', '33', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1150, 'Haut-Rhin', '68', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1151, 'Haute-Corse', '20B', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1152, 'Haute-Garonne', '31', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1153, 'Haute-Loire', '43', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1154, 'Haute-Saône', '70', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1155, 'Haute-Savoie', '74', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1156, 'Haute-Vienne', '87', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1157, 'Hautes-Alpes', '5', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1158, 'Hautes-Pyrénées', '65', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1159, 'Hauts-de-Seine', '92', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1160, 'Hérault', '34', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1161, 'Indre', '36', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1162, 'Ille-et-Vilaine', '35', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1163, 'Indre-et-Loire', '37', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1164, 'Isère', '38', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1165, 'Landes', '40', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1166, 'Loir-et-Cher', '41', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1167, 'Loire', '42', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1168, 'Loire-Atlantique', '44', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1169, 'Loiret', '45', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1170, 'Lot', '46', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1171, 'Lot-et-Garonne', '47', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1172, 'Lozère', '48', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1173, 'Maine-et-Loire', '50', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1174, 'Manche', '50', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1175, 'Marne', '51', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1176, 'Mayenne', '53', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1177, 'Meurthe-et-Moselle', '54', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1178, 'Meuse', '55', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1179, 'Morbihan', '56', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1180, 'Moselle', '57', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1181, 'Nièvre', '58', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1182, 'Nord', '59', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1183, 'Oise', '60', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1184, 'Orne', '61', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1185, 'Paris', '75', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1186, 'Pas-de-Calais', '62', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1187, 'Puy-de-Dôme', '63', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1188, 'Pyrénées-Atlantiques', '64', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1189, 'Pyrénées-Orientales', '66', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1190, 'Rhône', '69', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1191, 'Saône-et-Loire', '71', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1192, 'Sarthe', '72', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1193, 'Savoie', '73', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24');
INSERT INTO `tblstate` (`stateid`, `statename`, `stateabbreviation`, `CountryId`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(1194, 'Seine-et-Marne', '77', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1195, 'Seine-Maritime', '76', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1196, 'Seine-Saint-Denis', '93', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1197, 'Somme', '80', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1198, 'Tarn', '81', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1199, 'Tarn-et-Garonne', '82', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1200, 'Val d\'Oise', '95', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1201, 'Territoire de Belfort', '90', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1202, 'Val-de-Marne', '94', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1203, 'Var', '83', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1204, 'Vaucluse', '84', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1205, 'Vendée', '85', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1206, 'Vienne', '86', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1207, 'Vosges', '88', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1208, 'Yonne', '89', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1209, 'Yvelines', '78', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1210, 'Aberdeen City', 'ABE', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1211, 'Aberdeenshire', 'ABD', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1212, 'Angus', 'ANS', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1213, 'Co Antrim', 'ANT', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1214, 'Argyll and Bute', 'AGB', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1215, 'Co Armagh', 'ARM', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1216, 'Bedfordshire', 'BDF', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1217, 'Gwent', 'BGW', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1218, 'Bristol, City of', 'BST', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1219, 'Buckinghamshire', 'BKM', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1220, 'Cambridgeshire', 'CAM', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1221, 'Cheshire', 'CHS', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1222, 'Clackmannanshire', 'CLK', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1223, 'Cornwall', 'CON', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1224, 'Cumbria', 'CMA', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1225, 'Derbyshire', 'DBY', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1226, 'Co Londonderry', 'DRY', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1227, 'Devon', 'DEV', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1228, 'Dorset', 'DOR', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1229, 'Co Down', 'DOW', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1230, 'Dumfries and Galloway', 'DGY', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1231, 'Dundee City', 'DND', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1232, 'County Durham', 'DUR', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1233, 'East Ayrshire', 'EAY', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1234, 'East Dunbartonshire', 'EDU', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1235, 'East Lothian', 'ELN', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1236, 'East Renfrewshire', 'ERW', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1237, 'East Riding of Yorkshire', 'ERY', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1238, 'East Sussex', 'ESX', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1239, 'Edinburgh, City of', 'EDH', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1240, 'Na h-Eileanan Siar', 'ELS', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1241, 'Essex', 'ESS', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1242, 'Falkirk', 'FAL', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1243, 'Co Fermanagh', 'FER', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1244, 'Fife', 'FIF', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1245, 'Glasgow City', 'GLG', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1246, 'Gloucestershire', 'GLS', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1247, 'Gwynedd', 'GWN', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1248, 'Hampshire', 'HAM', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1249, 'Herefordshire', 'HEF', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1250, 'Hertfordshire', 'HRT', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1251, 'Highland', 'HED', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1252, 'Inverclyde', 'IVC', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1253, 'Isle of Wight', 'IOW', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1254, 'Kent', 'KEN', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1255, 'Lancashire', 'LAN', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1256, 'Leicestershire', 'LEC', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1257, 'Midlothian', 'MLN', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1258, 'Moray', 'MRY', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1259, 'Norfolk', 'NFK', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1260, 'North Ayrshire', 'NAY', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1261, 'North Lanarkshire', 'NLK', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1262, 'North Yorkshire', 'NYK', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1263, 'Northamptonshire', 'NTH', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1264, 'Northumberland', 'NBL', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1265, 'Nottinghamshire', 'NTT', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1266, 'Oldham', 'OLD', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1267, 'Omagh', 'OMH', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1268, 'Orkney Islands', 'ORR', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1269, 'Oxfordshire', 'OXF', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1270, 'Perth and Kinross', 'PKN', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1271, 'Powys', 'POW', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1272, 'Renfrewshire', 'RFW', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1273, 'Rutland', 'RUT', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1274, 'Scottish Borders', 'SCB', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1275, 'Shetland Islands', 'ZET', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1276, 'Shropshire', 'SHR', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1277, 'Somerset', 'SOM', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1278, 'South Ayrshire', 'SAY', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1279, 'South Gloucestershire', 'SGC', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1280, 'South Lanarkshire', 'SLK', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1281, 'Staffordshire', 'STS', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1282, 'Stirling', 'STG', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1283, 'Suffolk', 'SFK', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1284, 'Surrey', 'SRY', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1285, 'Mid Glamorgan', 'VGL', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1286, 'Warwickshire', 'WAR', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1287, 'West Dunbartonshire', 'WDU', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1288, 'West Lothian', 'WLN', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1289, 'West Sussex', 'WSX', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1290, 'Wiltshire', 'WIL', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1291, 'Worcestershire', 'WOR', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1292, 'Ashanti', 'AH', 83, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1293, 'Brong-Ahafo', 'BA', 83, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1294, 'Greater Accra', 'AA', 83, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1295, 'Upper East', 'UE', 83, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1296, 'Upper West', 'UW', 83, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1297, 'Volta', 'TV', 83, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1298, 'Banjul', 'B', 80, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1299, 'Lower River', 'L', 80, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1300, 'MacCarthy Island', 'M', 80, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1301, 'North Bank', 'N', 80, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1302, 'Upper River', 'U', 80, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1303, 'Beyla', 'BE', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1304, 'Boffa', 'BF', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1305, 'Boke', 'BK', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1306, 'Coyah', 'CO', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1307, 'Dabola', 'DB', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1308, 'Dalaba', 'DL', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1309, 'Dinguiraye', 'DI', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1310, 'Dubreka', 'DU', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1311, 'Faranah', 'FA', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1312, 'Forecariah', 'FO', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1313, 'Fria', 'FR', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1314, 'Gaoual', 'GA', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1315, 'Guekedou', 'GU', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1316, 'Kankan', 'KA', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1317, 'Kerouane', 'KE', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1318, 'Kindia', 'KD', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1319, 'Kissidougou', 'KS', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1320, 'Koubia', 'KB', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1321, 'Koundara', 'KN', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1322, 'Kouroussa', 'KO', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1323, 'Labe', 'LA', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1324, 'Lelouma', 'LE', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1325, 'Lola', 'LO', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1326, 'Macenta', 'MC', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1327, 'Mali', 'ML', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1328, 'Mamou', 'MM', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1329, 'Mandiana', 'MD', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1330, 'Nzerekore', 'NZ', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1331, 'Pita', 'PI', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1332, 'Siguiri', 'SI', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1333, 'Telimele', 'TE', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1334, 'Tougue', 'TO', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1335, 'Yomou', 'YO', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1336, 'Region Continental', 'C', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1337, 'Region Insular', 'I', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1338, 'Annobon', 'AN', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1339, 'Bioko Norte', 'BN', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1340, 'Bioko Sur', 'BS', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1341, 'Centro Sur', 'CS', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1342, 'Kie-Ntem', 'KN', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1343, 'Litoral', 'LI', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1344, 'Wele-Nzas', 'WN', 66, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1345, 'Achaïa', '13', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1346, 'Aitolia-Akarnania', '1', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1347, 'Argolis', '11', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1348, 'Arkadia', '12', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1349, 'Arta', '31', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1350, 'Attiki', 'A1', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1351, 'Chalkidiki', '64', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1352, 'Chania', '94', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1353, 'Chios', '85', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1354, 'Dodekanisos', '81', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1355, 'Drama', '52', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1356, 'Evros', '71', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1357, 'Evrytania', '5', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1358, 'Evvoia', '4', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1359, 'Florina', '63', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1360, 'Fokis', '7', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1361, 'Fthiotis', '6', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1362, 'Grevena', '51', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1363, 'Ileia', '14', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1364, 'Imathia', '53', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1365, 'Ioannina', '33', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1366, 'Irakleion', '91', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1367, 'Karditsa', '41', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1368, 'Kastoria', '56', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1369, 'Kavalla', '55', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1370, 'Kefallinia', '23', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1371, 'Kerkyra', '22', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1372, 'Kilkis', '57', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1373, 'Korinthia', '15', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1374, 'Kozani', '58', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1375, 'Kyklades', '82', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1376, 'Lakonia', '16', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1377, 'Larisa', '42', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1378, 'Lasithion', '92', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1379, 'Lefkas', '24', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1380, 'Lesvos', '83', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1381, 'Magnisia', '43', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1382, 'Messinia', '17', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1383, 'Pella', '59', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1384, 'Preveza', '34', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1385, 'Rethymnon', '93', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1386, 'Rodopi', '73', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1387, 'Samos', '84', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1388, 'Serrai', '62', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1389, 'Thesprotia', '32', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1390, 'Thessaloniki', '54', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1391, 'Trikala', '44', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1392, 'Voiotia', '3', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1393, 'Xanthi', '72', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1394, 'Zakynthos', '21', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1395, 'Agio Oros', '69', 85, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1396, 'Alta Verapez', 'AV', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1397, 'Baja Verapez', 'BV', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1398, 'Chimaltenango', 'CM', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1399, 'Chiquimula', 'CQ', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1400, 'El Progreso', 'PR', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1401, 'Escuintla', 'ES', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1402, 'Guatemala', 'GU', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1403, 'Huehuetenango', 'HU', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1404, 'Izabal', 'IZ', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1405, 'Jalapa', 'JA', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1406, 'Jutiapa', 'JU', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1407, 'Peten', 'PE', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1408, 'Quetzaltenango', 'QZ', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1409, 'Quiche', 'QC', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1410, 'Reta.thuleu', 'RE', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1411, 'Sacatepequez', 'SA', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1412, 'San Marcos', 'SM', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1413, 'Santa Rosa', 'SR', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1414, 'Solol6', 'SO', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1415, 'Suchitepequez', 'SU', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1416, 'Totonicapan', 'TO', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1417, 'Zacapa', 'ZA', 90, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1418, 'Bissau', 'BS', 93, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1419, 'Bafata', 'BA', 93, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1420, 'Biombo', 'BM', 93, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1421, 'Bolama', 'BL', 93, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1422, 'Cacheu', 'CA', 93, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1423, 'Gabu', 'GA', 93, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1424, 'Oio', 'OI', 93, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1425, 'Quloara', 'QU', 93, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1426, 'Tombali S', 'TO', 93, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1427, 'Barima-Waini', 'BA', 94, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1428, 'Cuyuni-Mazaruni', 'CU', 94, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1429, 'Demerara-Mahaica', 'DE', 94, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1430, 'East Berbice-Corentyne', 'EB', 94, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1431, 'Essequibo Islands-West Demerara', 'ES', 94, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1432, 'Mahaica-Berbice', 'MA', 94, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1433, 'Pomeroon-Supenaam', 'PM', 94, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1434, 'Potaro-Siparuni', 'PT', 94, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1435, 'Upper Demerara-Berbice', 'UD', 94, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1436, 'Upper Takutu-Upper Essequibo', 'UT', 94, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1437, 'Atlantida', 'AT', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1438, 'Colon', 'CL', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1439, 'Comayagua', 'CM', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1440, 'Copan', 'CP', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1441, 'Cortes', 'CR', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1442, 'Choluteca', 'CH', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1443, 'El Paraiso', 'EP', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1444, 'Francisco Morazan', 'FM', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1445, 'Gracias a Dios', 'GD', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1446, 'Intibuca', 'IN', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1447, 'Islas de la Bahia', 'IB', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1448, 'Lempira', 'LE', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1449, 'Ocotepeque', 'OC', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1450, 'Olancho', 'OL', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1451, 'Santa Barbara', 'SB', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1452, 'Valle', 'VA', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1453, 'Yoro', 'YO', 97, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1454, 'Bjelovarsko-bilogorska zupanija', '7', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1455, 'Brodsko-posavska zupanija', '12', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1456, 'Dubrovacko-neretvanska zupanija', '19', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1457, 'Istarska zupanija', '18', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1458, 'Karlovacka zupanija', '4', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1459, 'Koprivnickco-krizevacka zupanija', '6', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1460, 'Krapinako-zagorska zupanija', '2', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1461, 'Licko-senjska zupanija', '9', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1462, 'Medimurska zupanija', '20', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1463, 'Osjecko-baranjska zupanija', '14', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1464, 'Pozesko-slavonska zupanija', '11', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1465, 'Primorsko-goranska zupanija', '8', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1466, 'Sisacko-moelavacka Iupanija', '3', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1467, 'Splitako-dalmatinska zupanija', '17', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1468, 'Sibenako-kninska zupanija', '15', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1469, 'Varaidinska zupanija', '5', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1470, 'VirovitiEko-podravska zupanija', '10', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1471, 'VuRovarako-srijemska zupanija', '16', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1472, 'Zadaraka', '13', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1473, 'Zagrebacka zupanija', '1', 54, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1474, 'Grande-Anse', 'GA', 95, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1475, 'Nord-Est', 'NE', 95, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1476, 'Nord-Ouest', 'NO', 95, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1477, 'Ouest', 'OU', 95, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1478, 'Sud', 'SD', 95, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1479, 'Sud-Est', 'SE', 95, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1480, 'Budapest', 'BU', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1481, 'Bács-Kiskun', 'BK', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1482, 'Bar2018-06-15 05:11:06a', 'BA', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1483, 'Békés', 'BE', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1484, 'Borsod-Abaúj-Zemplén', 'BZ', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1485, 'Csongrád', 'CS', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1486, 'Fejér', 'FE', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1487, 'Győr-Moson-Sopron', 'GS', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1488, 'Hajdu-Bihar', 'HB', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1489, 'Heves', 'HE', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1490, 'Jász-Nagykun-Szolnok', 'JN', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1491, 'Komárom-Esztergom', 'KE', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1492, 'Nográd', 'NO', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1493, 'Pest', 'PE', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1494, 'Somogy', 'SO', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1495, 'Szabolcs-Szatmár-Bereg', 'SZ', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1496, 'Tolna', 'TO', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1497, 'Vas', 'VA', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1498, 'Veszprém', 'VE', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1499, 'Zala', 'ZA', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1500, 'Békéscsaba', 'BC', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1501, 'Debrecen', 'DE', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1502, 'Dunaújváros', 'DU', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1503, 'Eger', 'EG', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1504, 'Győr', 'GY', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1505, 'Hódmezővásárhely', 'HV', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1506, 'Kaposvár', 'KV', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1507, 'Kecskemét', 'KM', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1508, 'Miskolc', 'MI', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1509, 'Nagykanizsa', 'NK', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1510, 'Nyiregyháza', 'NY', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1511, 'Pécs', 'PS', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1512, 'Salgótarján', 'ST', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1513, 'Sopron', 'SN', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1514, 'Szeged', 'SD', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1515, 'Székesfehérvár', 'SF', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1516, 'Szekszárd', 'SS', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1517, 'Szolnok', 'SK', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1518, 'Szombathely', 'SH', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1519, 'Tatabánya', 'TB', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1520, 'Zalaegerszeg', 'ZE', 99, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1521, 'Bali', 'BA', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1522, 'Bangka Belitung', 'BB', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1523, 'Banten', 'BT', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1524, 'Bengkulu', 'BE', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1525, 'Gorontalo', 'GO', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1526, 'Irian Jaya', 'IJ', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1527, 'Jambi', 'JA', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1528, 'Jawa Barat', 'JB', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1529, 'Jawa Tengah', 'JT', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1530, 'Jawa Timur', 'JI', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1531, 'Kalimantan Barat', 'KB', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1532, 'Kalimantan Timur', 'KT', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1533, 'Kalimantan Selatan', 'KS', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1534, 'Kepulauan Riau', 'KR', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1535, 'Lampung', 'LA', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1536, 'Maluku', 'MA', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1537, 'Maluku Utara', 'MU', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1538, 'Nusa Tenggara Barat', 'NB', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1539, 'Nusa Tenggara Timur', 'NT', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1540, 'Papua', 'PA', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1541, 'Riau', 'RI', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1542, 'Sulawesi Selatan', 'SN', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1543, 'Sulawesi Tengah', 'ST', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1544, 'Sulawesi Tenggara', 'SG', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1545, 'Sulawesi Utara', 'SA', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1546, 'Sumatra Barat', 'SB', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1547, 'Sumatra Selatan', 'SS', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1548, 'Sumatera Utara', 'SU', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1549, 'Jakarta Raya', 'JK', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1550, 'Aceh', 'AC', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1551, 'Yogyakarta', 'YO', 102, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1552, 'Cork', 'C', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1553, 'Clare', 'CE', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1554, 'Cavan', 'CN', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1555, 'Carlow', 'CW', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1556, 'Dublin', 'D', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1557, 'Donegal', 'DL', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1558, 'Galway', 'G', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1559, 'Kildare', 'KE', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1560, 'Kilkenny', 'KK', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1561, 'Kerry', 'KY', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1562, 'Longford', 'LD', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1563, 'Louth', 'LH', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1564, 'Limerick', 'LK', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1565, 'Leitrim', 'LM', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1566, 'Laois', 'LS', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1567, 'Meath', 'MH', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1568, 'Monaghan', 'MN', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1569, 'Mayo', 'MO', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1570, 'Offaly', 'OY', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1571, 'Roscommon', 'RN', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1572, 'Sligo', 'SO', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1573, 'Tipperary', 'TA', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1574, 'Waterford', 'WD', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1575, 'Westmeath', 'WH', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1576, 'Wicklow', 'WW', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1577, 'Wexford', 'WX', 105, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1578, 'HaDarom', 'D', 106, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1579, 'HaMerkaz', 'M', 106, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1580, 'HaZafon', 'Z', 106, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1581, 'Haifa', 'HA', 106, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1582, 'Tel-Aviv', 'TA', 106, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1583, 'Jerusalem', 'JM', 106, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1584, 'Al Anbar', 'AN', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1585, 'Al Ba,rah', 'BA', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1586, 'Al Muthanna', 'MU', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1587, 'Al Qadisiyah', 'QA', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1588, 'An Najef', 'NA', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1589, 'Arbil', 'AR', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1590, 'As Sulaymaniyah', 'SW', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1591, 'At Ta\'mim', 'TS', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1592, 'Babil', 'BB', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1593, 'Baghdad', 'BG', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1594, 'Dahuk', 'DA', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1595, 'Dhi Qar', 'DQ', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1596, 'Diyala', 'DI', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1597, 'Karbala\'', 'KA', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1598, 'Maysan', 'MA', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1599, 'Ninawa', 'NI', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1600, 'Salah ad Din', 'SD', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1601, 'Wasit', 'WA', 104, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1602, 'Ardabil', '3', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1603, 'Azarbayjan-e Gharbi', '2', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1604, 'Azarbayjan-e Sharqi', '1', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1605, 'Bushehr', '6', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1606, 'Chahar Mahall va Bakhtiari', '8', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1607, 'Esfahan', '4', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1608, 'Fars', '14', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1609, 'Gilan', '19', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1610, 'Golestan', '27', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1611, 'Hamadan', '24', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1612, 'Hormozgan', '23', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1613, 'Iiam', '5', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1614, 'Kerman', '15', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1615, 'Kermanshah', '17', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1616, 'Khorasan', '9', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1617, 'Khuzestan', '10', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1618, 'Kohjiluyeh va Buyer Ahmad', '18', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1619, 'Kordestan', '16', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1620, 'Lorestan', '20', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1621, 'Markazi', '22', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1622, 'Mazandaran', '21', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1623, 'Qazvin', '28', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1624, 'Qom', '26', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1625, 'Semnan', '12', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1626, 'Sistan va Baluchestan', '13', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1627, 'Tehran', '7', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1628, 'Yazd', '25', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1629, 'Zanjan', '11', 103, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1630, 'Austurland', '7', 100, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1631, 'Hofuoborgarsvaeoi utan Reykjavikur', '1', 100, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1632, 'Norourland eystra', '6', 100, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1633, 'Norourland vestra', '5', 100, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1634, 'Reykjavik', '0', 100, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1635, 'Suourland', '8', 100, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1636, 'Suournes', '2', 100, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1637, 'Vestfirolr', '4', 100, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1638, 'Vesturland', '3', 100, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1639, 'Agrigento', 'AG', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1640, 'Alessandria', 'AL', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1641, 'Ancona', 'AN', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1642, 'Aosta', 'AO', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1643, 'Arezzo', 'AR', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1644, 'Ascoli Piceno', 'AP', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1645, 'Asti', 'AT', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1646, 'Avellino', 'AV', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1647, 'Bari', 'BA', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1648, 'Belluno', 'BL', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1649, 'Benevento', 'BN', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1650, 'Bergamo', 'BG', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1651, 'Biella', 'BI', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1652, 'Bologna', 'BO', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1653, 'Bolzano', 'BZ', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1654, 'Brescia', 'BS', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1655, 'Brindisi', 'BR', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1656, 'Cagliari', 'CA', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1657, 'Caltanissetta', 'CL', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1658, 'Campobasso', 'CB', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1659, 'Caserta', 'CE', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1660, 'Catania', 'CT', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1661, 'Catanzaro', 'CZ', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1662, 'Chieti', 'CH', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1663, 'Como', 'CO', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1664, 'Cosenza', 'CS', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1665, 'Cremona', 'CR', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1666, 'Crotone', 'KR', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1667, 'Cuneo', 'CN', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1668, 'Enna', 'EN', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1669, 'Ferrara', 'FE', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1670, 'Firenze', 'FI', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1671, 'Foggia', 'FG', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1672, 'Forlì-Cesena', 'FC', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1673, 'Frosinone', 'FR', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1674, 'Genova', 'GE', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1675, 'Gorizia', 'GO', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1676, 'Grosseto', 'GR', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1677, 'Imperia', 'IM', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1678, 'Isernia', 'IS', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1679, 'L\'Aquila', 'AQ', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1680, 'La Spezia', 'SP', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1681, 'Latina', 'LT', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1682, 'Lecce', 'LE', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1683, 'Lecco', 'LC', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1684, 'Livorno', 'LI', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1685, 'Lodi', 'LO', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1686, 'Lucca', 'LU', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1687, 'Macerata', 'MC', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1688, 'Mantova', 'MN', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1689, 'Massa-Carrara', 'MS', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1690, 'Matera', 'MT', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1691, 'Messina', 'ME', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1692, 'Milano', 'MI', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1693, 'Modena', 'MO', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1694, 'Napoli', 'NA', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1695, 'Novara', 'NO', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1696, 'Nuoro', 'NU', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1697, 'Oristano', 'OR', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1698, 'Padova', 'PD', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1699, 'Palermo', 'PA', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1700, 'Parma', 'PR', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1701, 'Pavia', 'PV', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1702, 'Perugia', 'PG', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1703, 'Pesaro e Urbino', 'PU', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1704, 'Pescara', 'PE', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1705, 'Piacenza', 'PC', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1706, 'Pisa', 'PI', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1707, 'Pistoia', 'PT', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1708, 'Pordenone', 'PN', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1709, 'Potenza', 'PZ', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1710, 'Prato', 'PO', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1711, 'Ragusa', 'RG', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1712, 'Ravenna', 'RA', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1713, 'Reggio Calabria', 'RC', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1714, 'Reggio Emilia', 'RE', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1715, 'Rieti', 'RI', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1716, 'Rimini', 'RN', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1717, 'Roma', 'RM', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1718, 'Rovigo', 'RO', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1719, 'Salerno', 'SA', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1720, 'Sassari', 'SS', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1721, 'Savona', 'SV', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1722, 'Siena', 'SI', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1723, 'Siracusa', 'SR', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1724, 'Sondrio', 'SO', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1725, 'Taranto', 'TA', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1726, 'Teramo', 'TE', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1727, 'Terni', 'TR', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1728, 'Torino', 'TO', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1729, 'Trapani', 'TP', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1730, 'Trento', 'TN', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1731, 'Treviso', 'TV', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1732, 'Trieste', 'TS', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1733, 'Udine', 'UD', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1734, 'Varese', 'VA', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1735, 'Venezia', 'VE', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1736, 'Verbano-Cusio-Ossola', 'VB', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1737, 'Vercelli', 'VC', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1738, 'Verona', 'VR', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1739, 'Vibo Valentia', 'VV', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1740, 'Vicenza', 'VI', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1741, 'Viterbo', 'VT', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1742, 'Aichi', '23', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1743, 'Akita', '5', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1744, 'Aomori', '2', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1745, 'Chiba', '12', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1746, 'Ehime', '38', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1747, 'Fukui', '18', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1748, 'Fukuoka', '40', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1749, 'Fukusima', '7', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1750, 'Gifu', '21', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1751, 'Gunma', '10', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1752, 'Hiroshima', '34', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1753, 'Hokkaido', '1', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1754, 'Hyogo', '28', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1755, 'Ibaraki', '8', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1756, 'Ishikawa', '17', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1757, 'Iwate', '3', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1758, 'Kagawa', '37', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1759, 'Kagoshima', '46', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1760, 'Kanagawa', '14', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1761, 'Kochi', '39', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1762, 'Kumamoto', '43', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1763, 'Kyoto', '26', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1764, 'Mie', '24', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1765, 'Miyagi', '4', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1766, 'Miyazaki', '45', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1767, 'Nagano', '20', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1768, 'Nagasaki', '42', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1769, 'Nara', '29', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1770, 'Niigata', '15', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1771, 'Oita', '44', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1772, 'Okayama', '33', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1773, 'Okinawa', '47', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1774, 'Osaka', '27', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1775, 'Saga', '41', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1776, 'Saitama', '11', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1777, 'Shiga', '25', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1778, 'Shimane', '32', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24');
INSERT INTO `tblstate` (`stateid`, `statename`, `stateabbreviation`, `CountryId`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(1779, 'Shizuoka', '22', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1780, 'Tochigi', '9', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1781, 'Tokushima', '36', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1782, 'Tokyo', '13', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1783, 'Tottori', '31', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1784, 'Toyama', '16', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1785, 'Wakayama', '30', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1786, 'Yamagata', '6', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1787, 'Yamaguchi', '35', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1788, 'Yamanashi', '19', 109, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1789, 'Clarendon', 'CN', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1790, 'Hanover', 'HR', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1791, 'Kingston', 'KN', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1792, 'Portland', 'PD', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1793, 'Saint Andrew', 'AW', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1794, 'Saint Ann', 'AN', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1795, 'Saint Catherine', 'CE', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1796, 'Saint Elizabeth', 'EH', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1797, 'Saint James', 'JS', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1798, 'Saint Mary', 'MY', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1799, 'Saint Thomas', 'TS', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1800, 'Trelawny', 'TY', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1801, 'Westmoreland', 'WD', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1802, 'Ajln', 'AJ', 111, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1803, 'Al \'Aqaba', 'AQ', 111, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1804, 'Al Balqa\'', 'BA', 111, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1805, 'Al Karak', 'KA', 111, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1806, 'Al Mafraq', 'MA', 111, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1807, 'Amman', 'AM', 111, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1808, 'At Tafilah', 'AT', 111, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1809, 'Az Zarga', 'AZ', 111, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1810, 'Irbid', 'JR', 111, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1811, 'Jarash', 'JA', 111, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1812, 'Ma\'an', 'MN', 111, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1813, 'Madaba', 'MD', 111, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1814, 'Nairobi Municipality', '110', 113, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1815, 'Coast', '300', 113, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1816, 'North-Eastern Kaskazini Mashariki', '500', 113, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1817, 'Rift Valley', '700', 113, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1818, 'Western Magharibi', '900', 113, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1819, 'Bishkek', 'GB', 118, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1820, 'Batken', 'B', 118, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1821, 'Chu', 'C', 118, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1822, 'Jalal-Abad', 'J', 118, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1823, 'Naryn', 'N', 118, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1824, 'Osh', 'O', 118, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1825, 'Talas', 'T', 118, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1826, 'Ysyk-Kol', 'Y', 118, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1827, 'Krong Kaeb', '23', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1828, 'Krong Pailin', '24', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1829, 'Xrong Preah Sihanouk', '18', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1830, 'Phnom Penh', '12', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1831, 'Baat Dambang', '2', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1832, 'Banteay Mean Chey', '1', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1833, 'Rampong Chaam', '3', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1834, 'Kampong Chhnang', '4', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1835, 'Kampong Spueu', '5', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1836, 'Kampong Thum', '6', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1837, 'Kampot', '7', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1838, 'Kandaal', '8', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1839, 'Kach Kong', '9', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1840, 'Krachoh', '10', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1841, 'Mondol Kiri', '11', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1842, 'Otdar Mean Chey', '22', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1843, 'Pousaat', '15', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1844, 'Preah Vihear', '13', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1845, 'Prey Veaeng', '14', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1846, 'Rotanak Kiri', '16', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1847, 'Siem Reab', '17', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1848, 'Stueng Traeng', '19', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1849, 'Svaay Rieng', '20', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1850, 'Taakaev', '21', 36, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1851, 'Gilbert Islands', 'G', 114, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1852, 'Line Islands', 'L', 114, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1853, 'Phoenix Islands', 'P', 114, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1854, 'Anjouan Ndzouani', 'A', 48, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1855, 'Grande Comore Ngazidja', 'G', 48, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1856, 'Moheli Moili', 'M', 48, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1857, 'Kaesong-si', 'KAE', 115, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1858, 'Nampo-si', 'NAM', 115, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1859, 'Pyongyang-ai', 'PYO', 115, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1860, 'Chagang-do', 'CHA', 115, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1861, 'Hamgyongbuk-do', 'HAB', 115, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1862, 'Hamgyongnam-do', 'HAN', 115, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1863, 'Hwanghaebuk-do', 'HWB', 115, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1864, 'Hwanghaenam-do', 'HWN', 115, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1865, 'Kangwon-do', 'KAN', 115, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1866, 'Pyonganbuk-do', 'PYB', 115, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1867, 'Pyongannam-do', 'PYN', 115, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1868, 'Yanggang-do', 'YAN', 115, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1869, 'Najin Sonbong-si', 'NAJ', 115, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1870, 'Seoul Teugbyeolsi', '11', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1871, 'Busan Gwang\'yeogsi', '26', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1872, 'Daegu Gwang\'yeogsi', '27', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1873, 'Daejeon Gwang\'yeogsi', '30', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1874, 'Gwangju Gwang\'yeogsi', '29', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1875, 'Incheon Gwang\'yeogsi', '28', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1876, 'Ulsan Gwang\'yeogsi', '31', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1877, 'Chungcheongbugdo', '43', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1878, 'Chungcheongnamdo', '44', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1879, 'Gang\'weondo', '42', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1880, 'Gyeonggido', '41', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1881, 'Gyeongsangbugdo', '47', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1882, 'Gyeongsangnamdo', '48', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1883, 'Jejudo', '50', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1884, 'Jeonrabugdo', '45', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1885, 'Jeonranamdo', '46', 116, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1886, 'Al Ahmadi', 'AH', 117, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1887, 'Al Farwanlyah', 'FA', 117, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1888, 'Al Jahrah', 'JA', 117, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1889, 'Al Kuwayt', 'KU', 117, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1890, 'Hawalli', 'HA', 117, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1891, 'Almaty', 'ALA', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1892, 'Astana', 'AST', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1893, 'Almaty oblysy', 'ALM', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1894, 'Aqmola oblysy', 'AKM', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1895, 'Aqtobe oblysy', 'AKT', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1896, 'Atyrau oblyfiy', 'ATY', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1897, 'Batys Quzaqstan oblysy', 'ZAP', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1898, 'Mangghystau oblysy', 'MAN', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1899, 'Ongtustik Quzaqstan oblysy', 'YUZ', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1900, 'Pavlodar oblysy', 'PAV', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1901, 'Qaraghandy oblysy', 'KAR', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1902, 'Qostanay oblysy', 'KUS', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1903, 'Qyzylorda oblysy', 'KZY', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1904, 'Shyghys Quzaqstan oblysy', 'VOS', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1905, 'Soltustik Quzaqstan oblysy', 'SEV', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1906, 'Zhambyl oblysy Zhambylskaya oblast\'', 'ZHA', 112, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1907, 'Vientiane', 'VT', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1908, 'Attapu', 'AT', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1909, 'Bokeo', 'BK', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1910, 'Bolikhamxai', 'BL', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1911, 'Champasak', 'CH', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1912, 'Houaphan', 'HO', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1913, 'Khammouan', 'KH', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1914, 'Louang Namtha', 'LM', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1915, 'Louangphabang', 'LP', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1916, 'Oudomxai', 'OU', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1917, 'Phongsali', 'PH', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1918, 'Salavan', 'SL', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1919, 'Savannakhet', 'SV', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1920, 'Xaignabouli', 'XA', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1921, 'Xiasomboun', 'XN', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1922, 'Xekong', 'XE', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1923, 'Xiangkhoang', 'XI', 119, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1924, 'Beirout', 'BA', 121, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1925, 'El Begsa', 'BI', 121, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1926, 'Jabal Loubnane', 'JL', 121, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1927, 'Loubnane ech Chemali', 'AS', 121, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1928, 'Loubnane ej Jnoubi', 'JA', 121, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1929, 'Nabatiye', 'NA', 121, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1930, 'Ampara', '52', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1931, 'Anuradhapura', '71', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1932, 'Badulla', '81', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1933, 'Batticaloa', '51', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1934, 'Colombo', '11', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1935, 'Galle', '31', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1936, 'Gampaha', '12', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1937, 'Hambantota', '33', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1938, 'Jaffna', '41', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1939, 'Kalutara', '13', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1940, 'Kandy', '21', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1941, 'Kegalla', '92', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1942, 'Kilinochchi', '42', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1943, 'Kurunegala', '61', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1944, 'Mannar', '43', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1945, 'Matale', '22', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1946, 'Matara', '32', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1947, 'Monaragala', '82', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1948, 'Mullaittivu', '45', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1949, 'Nuwara Eliya', '23', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1950, 'Polonnaruwa', '72', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1951, 'Puttalum', '62', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1952, 'Ratnapura', '91', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1953, 'Trincomalee', '53', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1954, 'VavunLya', '44', 206, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1955, 'Bomi', 'BM', 123, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1956, 'Bong', 'BG', 123, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1957, 'Grand Basaa', 'GB', 123, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1958, 'Grand Cape Mount', 'CM', 123, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1959, 'Grand Gedeh', 'GG', 123, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1960, 'Grand Kru', 'GK', 123, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1961, 'Lofa', 'LO', 123, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1962, 'Margibi', 'MG', 123, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1963, 'Maryland', 'MY', 123, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1964, 'Montserrado', 'MO', 123, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1965, 'Nimba', 'NI', 123, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1966, 'Rivercess', 'RI', 123, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1967, 'Sinoe', 'SI', 123, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1968, 'Berea', 'D', 122, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1969, 'Butha-Buthe', 'B', 122, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1970, 'Leribe', 'C', 122, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1971, 'Mafeteng', 'E', 122, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1972, 'Maseru', 'A', 122, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1973, 'Mohale\'s Hoek', 'F', 122, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1974, 'Mokhotlong', 'J', 122, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1975, 'Qacha\'s Nek', 'H', 122, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1976, 'Quthing', 'G', 122, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1977, 'Thaba-Tseka', 'K', 122, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1978, 'Alytaus Apskritis', 'AL', 126, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1979, 'Kauno Apskritis', 'KU', 126, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1980, 'Klaipedos Apskritis', 'KL', 126, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1981, 'Marijampoles Apskritis', 'MR', 126, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1982, 'Panevezio Apskritis', 'PN', 126, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1983, 'Sisuliu Apskritis', 'SA', 126, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1984, 'Taurages Apskritis', 'TA', 126, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1985, 'Telsiu Apskritis', 'TE', 126, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1986, 'Utenos Apskritis', 'UT', 126, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1987, 'Vilniaus Apskritis', 'VL', 126, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1988, 'Diekirch', 'D', 127, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1989, 'GreveNmacher', 'G', 127, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1990, 'Aizkraukles Apripkis', 'AI', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1991, 'Alkanes Apripkis', 'AL', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1992, 'Balvu Apripkis', 'BL', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1993, 'Bauskas Apripkis', 'BU', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1994, 'Cesu Aprikis', 'CE', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1995, 'Daugavpile Apripkis', 'DA', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1996, 'Dobeles Apripkis', 'DO', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1997, 'Gulbenes Aprlpkis', 'GU', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1998, 'Jelgavas Apripkis', 'JL', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(1999, 'Jekabpils Apripkis', 'JK', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2000, 'Kraslavas Apripkis', 'KR', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2001, 'Kuldlgas Apripkis', 'KU', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2002, 'Limbazu Apripkis', 'LM', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2003, 'Liepajas Apripkis', 'LE', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2004, 'Ludzas Apripkis', 'LU', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2005, 'Madonas Apripkis', 'MA', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2006, 'Ogres Apripkis', 'OG', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2007, 'Preilu Apripkis', 'PR', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2008, 'Rezaknes Apripkis', 'RE', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2009, 'Rigas Apripkis', 'RI', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2010, 'Saldus Apripkis', 'SA', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2011, 'Talsu Apripkis', 'TA', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2012, 'Tukuma Apriplcis', 'TU', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2013, 'Valkas Apripkis', 'VK', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2014, 'Valmieras Apripkis', 'VM', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2015, 'Ventspils Apripkis', 'VE', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2016, 'Daugavpils', 'DGV', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2017, 'Jelgava', 'JEL', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2018, 'Jurmala', 'JUR', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2019, 'Liepaja', 'LPX', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2020, 'Rezekne', 'REZ', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2021, 'Riga', 'RIX', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2022, 'Ventspils', 'VEN', 120, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2023, 'Agadir', 'AGD', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2024, 'Aït Baha', 'BAH', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2025, 'Aït Melloul', 'MEL', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2026, 'Al Haouz', 'HAO', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2027, 'Al Hoceïma', 'HOC', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2028, 'Assa-Zag', 'ASZ', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2029, 'Azilal', 'AZI', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2030, 'Beni Mellal', 'BEM', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2031, 'Ben Sllmane', 'BES', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2032, 'Berkane', 'BER', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2033, 'Boujdour', 'BOD', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2034, 'Boulemane', 'BOM', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2035, 'Casablanca [Dar el Beïda]', 'CAS', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2036, 'Chefchaouene', 'CHE', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2037, 'Chichaoua', 'CHI', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2038, 'El Hajeb', 'HAJ', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2039, 'El Jadida', 'JDI', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2040, 'Errachidia', 'ERR', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2041, 'Essaouira', 'ESI', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2042, 'Es Smara', 'ESM', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2043, 'Fès', 'FES', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2044, 'Figuig', 'FIG', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2045, 'Guelmim', 'GUE', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2046, 'Ifrane', 'IFR', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2047, 'Jerada', 'JRA', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2048, 'Kelaat Sraghna', 'KES', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2049, 'Kénitra', 'KEN', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2050, 'Khemisaet', 'KHE', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2051, 'Khenifra', 'KHN', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2052, 'Khouribga', 'KHO', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2053, 'Laâyoune (EH)', 'LAA', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2054, 'Larache', 'LAP', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2055, 'Marrakech', 'MAR', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2056, 'Meknsès', 'MEK', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2057, 'Nador', 'NAD', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2058, 'Ouarzazate', 'OUA', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2059, 'Oued ed Dahab (EH)', 'OUD', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2060, 'Oujda', 'OUJ', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2061, 'Rabat-Salé', 'RBA', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2062, 'Safi', 'SAF', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2063, 'Sefrou', 'SEF', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2064, 'Settat', 'SET', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2065, 'Sidl Kacem', 'SIK', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2066, 'Tanger', 'TNG', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2067, 'Tan-Tan', 'TNT', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2068, 'Taounate', 'TAO', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2069, 'Taroudannt', 'TAR', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2070, 'Tata', 'TAT', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2071, 'Taza', 'TAZ', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2072, 'Tétouan', 'TET', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2073, 'Tiznit', 'TIZ', 148, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2074, 'Gagauzia, Unitate Teritoriala Autonoma', 'GA', 144, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2075, 'Chisinau', 'CU', 144, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2076, 'Stinga Nistrului, unitatea teritoriala din', 'SN', 144, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2077, 'Balti', 'BA', 144, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2078, 'Cahul', 'CA', 144, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2079, 'Edinet', 'ED', 144, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2080, 'Lapusna', 'LA', 144, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2081, 'Orhei', 'OR', 144, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2082, 'Soroca', 'SO', 144, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2083, 'Taraclia', 'TA', 144, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2084, 'Tighina [Bender]', 'TI', 144, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2085, 'Ungheni', 'UN', 144, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2086, 'Antananarivo', 'T', 130, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2087, 'Antsiranana', 'D', 130, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2088, 'Fianarantsoa', 'F', 130, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2089, 'Mahajanga', 'M', 130, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2090, 'Toamasina', 'A', 130, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2091, 'Toliara', 'U', 130, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2092, 'Ailinglapalap', 'ALL', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2093, 'Ailuk', 'ALK', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2094, 'Arno', 'ARN', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2095, 'Aur', 'AUR', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2096, 'Ebon', 'EBO', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2097, 'Eniwetok', 'ENI', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2098, 'Jaluit', 'JAL', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2099, 'Kili', 'KIL', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2100, 'Kwajalein', 'KWA', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2101, 'Lae', 'LAE', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2102, 'Lib', 'LIB', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2103, 'Likiep', 'LIK', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2104, 'Majuro', 'MAJ', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2105, 'Maloelap', 'MAL', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2106, 'Mejit', 'MEJ', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2107, 'Mili', 'MIL', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2108, 'Namorik', 'NMK', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2109, 'Namu', 'NMU', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2110, 'Rongelap', 'RON', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2111, 'Ujae', 'UJA', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2112, 'Ujelang', 'UJL', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2113, 'Utirik', 'UTI', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2114, 'Wotho', 'WTN', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2115, 'Wotje', 'WTJ', 137, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2116, 'Bamako', 'BK0', 134, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2117, 'Gao', '7', 134, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2118, 'Kayes', '1', 134, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2119, 'Kidal', '8', 134, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2120, 'Xoulikoro', '2', 134, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2121, 'Mopti', '5', 134, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2122, 'S69ou', '4', 134, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2123, 'Sikasso', '3', 134, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2124, 'Tombouctou', '6', 134, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2125, 'Ayeyarwady', '7', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2126, 'Bago', '2', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2127, 'Magway', '3', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2128, 'Mandalay', '4', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2129, 'Sagaing', '1', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2130, 'Tanintharyi', '5', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2131, 'Yangon', '6', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2132, 'Chin', '14', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2133, 'Kachin', '11', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2134, 'Kayah', '12', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2135, 'Kayin', '13', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2136, 'Mon', '15', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2137, 'Rakhine', '16', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2138, 'Shan', '17', 150, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2139, 'Ulaanbaatar', '1', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2140, 'Arhangay', '73', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2141, 'Bayanhongor', '69', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2142, 'Bayan-Olgiy', '71', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2143, 'Bulgan', '67', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2144, 'Darhan uul', '37', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2145, 'Dornod', '61', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2146, 'Dornogov,', '63', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2147, 'DundgovL', '59', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2148, 'Dzavhan', '57', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2149, 'Govi-Altay', '65', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2150, 'Govi-Smber', '64', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2151, 'Hentiy', '39', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2152, 'Hovd', '43', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2153, 'Hovsgol', '41', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2154, 'Omnogovi', '53', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2155, 'Orhon', '35', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2156, 'Ovorhangay', '55', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2157, 'Selenge', '49', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2158, 'Shbaatar', '51', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2159, 'Tov', '47', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2160, 'Uvs', '46', 146, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2161, 'Nouakchott', 'NKC', 139, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2162, 'Assaba', '3', 139, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2163, 'Brakna', '5', 139, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2164, 'Dakhlet Nouadhibou', '8', 139, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2165, 'Gorgol', '4', 139, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2166, 'Guidimaka', '10', 139, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2167, 'Hodh ech Chargui', '1', 139, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2168, 'Hodh el Charbi', '2', 139, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2169, 'Inchiri', '12', 139, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2170, 'Tagant', '9', 139, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2171, 'Tiris Zemmour', '11', 139, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2172, 'Trarza', '6', 139, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2173, 'Beau Bassin-Rose Hill', 'BR', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2174, 'Curepipe', 'CU', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2175, 'Port Louis', 'PU', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2176, 'Quatre Bornes', 'QB', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2177, 'Vacosa-Phoenix', 'VP', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2178, 'Black River', 'BL', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2179, 'Flacq', 'FL', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2180, 'Grand Port', 'GP', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2181, 'Moka', 'MO', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2182, 'Pamplemousses', 'PA', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2183, 'Plaines Wilhems', 'PW', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2184, 'Riviere du Rempart', 'RP', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2185, 'Savanne', 'SA', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2186, 'Agalega Islands', 'AG', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2187, 'Cargados Carajos Shoals', 'CC', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2188, 'Rodrigues Island', 'RO', 140, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2189, 'Male', 'MLE', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2190, 'Alif', '2', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2191, 'Baa', '20', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2192, 'Dhaalu', '17', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2193, 'Faafu', '14', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2194, 'Gaaf Alif', '27', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2195, 'Gaefu Dhaalu', '28', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2196, 'Gnaviyani', '29', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2197, 'Haa Alif', '7', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2198, 'Haa Dhaalu', '23', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2199, 'Kaafu', '26', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2200, 'Laamu', '5', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2201, 'Lhaviyani', '3', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2202, 'Meemu', '12', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2203, 'Noonu', '25', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2204, 'Raa', '13', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2205, 'Seenu', '1', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2206, 'Shaviyani', '24', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2207, 'Thaa', '8', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2208, 'Vaavu', '4', 133, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2209, 'Balaka', 'BA', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2210, 'Blantyre', 'BL', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2211, 'Chikwawa', 'CK', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2212, 'Chiradzulu', 'CR', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2213, 'Chitipa', 'CT', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2214, 'Dedza', 'DE', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2215, 'Dowa', 'DO', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2216, 'Karonga', 'KR', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2217, 'Kasungu', 'KS', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2218, 'Likoma Island', 'LK', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2219, 'Lilongwe', 'LI', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2220, 'Machinga', 'MH', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2221, 'Mangochi', 'MG', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2222, 'Mchinji', 'MC', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2223, 'Mulanje', 'MU', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2224, 'Mwanza', 'MW', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2225, 'Mzimba', 'MZ', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2226, 'Nkhata Bay', 'NB', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2227, 'Nkhotakota', 'NK', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2228, 'Nsanje', 'NS', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2229, 'Ntcheu', 'NU', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2230, 'Ntchisi', 'NI', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2231, 'Phalomba', 'PH', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2232, 'Rumphi', 'RU', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2233, 'Salima', 'SA', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2234, 'Thyolo', 'TH', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2235, 'Zomba', 'ZO', 131, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2236, 'Aguascalientes', 'AGU', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2237, 'Baja California', 'BCN', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2238, 'Baja California Sur', 'BCS', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2239, 'Campeche', 'CAM', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2240, 'Coahuila', 'COA', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2241, 'Colima', 'COL', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2242, 'Chiapas', 'CHP', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2243, 'Chihuahua', 'CHH', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2244, 'Durango', 'DUR', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2245, 'Guanajuato', 'GUA', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2246, 'Guerrero', 'GRO', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2247, 'Hidalgo', 'HID', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2248, 'Jalisco', 'JAL', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2249, 'Mexico', 'MEX', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2250, 'Michoacin', 'MIC', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2251, 'Morelos', 'MOR', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2252, 'Nayarit', 'NAY', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2253, 'Nuevo Leon', 'NLE', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2254, 'Oaxaca', 'OAX', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2255, 'Puebla', 'PUE', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2256, 'Queretaro', 'QUE', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2257, 'Quintana Roo', 'ROO', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2258, 'San Luis Potosi', 'SLP', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2259, 'Sinaloa', 'SIN', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2260, 'Sonora', 'SON', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2261, 'Tabasco', 'TAB', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2262, 'Tamaulipas', 'TAM', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2263, 'Tlaxcala', 'TLA', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2264, 'Veracruz', 'VER', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2265, 'Yucatan', 'YUC', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2266, 'Zacatecas', 'ZAC', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2267, 'Wilayah Persekutuan Kuala Lumpur', '14', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2268, 'Wilayah Persekutuan Labuan', '15', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2269, 'Wilayah Persekutuan Putrajaya', '16', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2270, 'Johor', '1', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2271, 'Kedah', '2', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2272, 'Kelantan', '3', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2273, 'Melaka', '4', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2274, 'Negeri Sembilan', '5', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2275, 'Pahang', '6', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2276, 'Perak', '8', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2277, 'Perlis', '9', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2278, 'Pulau Pinang', '7', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2279, 'Sabah', '12', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2280, 'Sarawak', '13', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2281, 'Selangor', '10', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2282, 'Terengganu', '11', 132, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2283, 'Maputo', 'MPM', 149, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2284, 'Cabo Delgado', 'P', 149, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2285, 'Gaza', 'G', 149, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2286, 'Inhambane', 'I', 149, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2287, 'Manica', 'B', 149, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2288, 'Numpula', 'N', 149, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2289, 'Niaaea', 'A', 149, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2290, 'Sofala', 'S', 149, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2291, 'Tete', 'T', 149, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2292, 'Zambezia', 'Q', 149, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2293, 'Caprivi', 'CA', 151, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2294, 'Erongo', 'ER', 151, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2295, 'Hardap', 'HA', 151, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2296, 'Karas', 'KA', 151, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2297, 'Khomae', 'KH', 151, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2298, 'Kunene', 'KU', 151, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2299, 'Ohangwena', 'OW', 151, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2300, 'Okavango', 'OK', 151, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2301, 'Omaheke', 'OH', 151, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2302, 'Omusati', 'OS', 151, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2303, 'Oshana', 'ON', 151, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2304, 'Oshikoto', 'OT', 151, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2305, 'Otjozondjupa', 'OD', 151, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2306, 'Niamey', '8', 159, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2307, 'Agadez', '1', 159, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2308, 'Diffa', '2', 159, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2309, 'Dosso', '3', 159, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2310, 'Maradi', '4', 159, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2311, 'Tahoua', 'S', 159, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2312, 'Tillaberi', '6', 159, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2313, 'Zinder', '7', 159, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2314, 'Abuja Capital Territory', 'FC', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2315, 'Abia', 'AB', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2316, 'Adamawa', 'AD', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2317, 'Akwa Ibom', 'AK', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2318, 'Anambra', 'AN', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2319, 'Bauchi', 'BA', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2320, 'Bayelsa', 'BY', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2321, 'Benue', 'BE', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2322, 'Borno', 'BO', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2323, 'Cross River', 'CR', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2324, 'Delta', 'DE', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2325, 'Ebonyi', 'EB', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2326, 'Edo', 'ED', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2327, 'Ekiti', 'EK', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2328, 'Enugu', 'EN', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2329, 'Gombe', 'GO', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2330, 'Imo', 'IM', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2331, 'Jigawa', 'JI', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2332, 'Kaduna', 'KD', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2333, 'Kano', 'KN', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2334, 'Katsina', 'KT', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2335, 'Kebbi', 'KE', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2336, 'Kogi', 'KO', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2337, 'Kwara', 'KW', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2338, 'Lagos', 'LA', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2339, 'Nassarawa', 'NA', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2340, 'Niger', 'NI', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2341, 'Ogun', 'OG', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2342, 'Ondo', 'ON', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2343, 'Osun', 'OS', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2344, 'Oyo', 'OY', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2345, 'Rivers', 'RI', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2346, 'Sokoto', 'SO', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2347, 'Taraba', 'TA', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2348, 'Yobe', 'YO', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2349, 'Zamfara', 'ZA', 160, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2350, 'Boaco', 'BO', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2351, 'Carazo', 'CA', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2352, 'Chinandega', 'CI', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2353, 'Chontales', 'CO', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2354, 'Esteli', 'ES', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2355, 'Jinotega', 'JI', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2356, 'Leon', 'LE', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2357, 'Madriz', 'MD', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2358, 'Managua', 'MN', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2359, 'Masaya', 'MS', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2360, 'Matagalpa', 'MT', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24');
INSERT INTO `tblstate` (`stateid`, `statename`, `stateabbreviation`, `CountryId`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(2361, 'Nueva Segovia', 'NS', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2362, 'Rio San Juan', 'SJ', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2363, 'Rivas', 'RI', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2364, 'Atlantico Norte', 'AN', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2365, 'Atlantico Sur', 'AS', 158, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2366, 'Drente', 'DR', 155, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2367, 'Flevoland', 'FL', 155, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2368, 'Friesland', 'FR', 155, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2369, 'Gelderland', 'GL', 155, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2370, 'Groningen', 'GR', 155, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2371, 'Noord-Brabant', 'NB', 155, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2372, 'Noord-Holland', 'NH', 155, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2373, 'Overijssel', 'OV', 155, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2374, 'Utrecht', 'UT', 155, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2375, 'Zuid-Holland', 'ZH', 155, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2376, 'Zeeland', 'ZL', 155, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2377, 'Akershus', '2', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2378, 'Aust-Agder', '9', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2379, 'Buskerud', '6', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2380, 'Finumark', '20', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2381, 'Hedmark', '4', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2382, 'Hordaland', '12', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2383, 'Mire og Romsdal', '15', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2384, 'Nordland', '18', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2385, 'Nord-Trindelag', '17', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2386, 'Oppland', '5', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2387, 'Oslo', '3', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2388, 'Rogaland', '11', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2389, 'Sogn og Fjordane', '14', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2390, 'Sir-Trindelag', '16', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2391, 'Telemark', '6', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2392, 'Troms', '19', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2393, 'Vest-Agder', '10', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2394, 'Vestfold', '7', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2395, 'Ostfold', '1', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2396, 'Jan Mayen', '22', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2397, 'Svalbard', '21', 164, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2398, 'Auckland', 'AUK', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2399, 'Bay of Plenty', 'BOP', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2400, 'Canterbury', 'CAN', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2401, 'Gisborne', 'GIS', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2402, 'Hawkes Bay', 'HKB', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2403, 'Manawatu-Wanganui', 'MWT', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2404, 'Marlborough', 'MBH', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2405, 'Nelson', 'NSN', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2406, 'Northland', 'NTL', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2407, 'Otago', 'OTA', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2408, 'Southland', 'STL', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2409, 'Taranaki', 'TKI', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2410, 'Tasman', 'TAS', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2411, 'waikato', 'WKO', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2412, 'Wellington', 'WGN', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2413, 'West Coast', 'WTC', 157, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2414, 'Ad Dakhillyah', 'DA', 165, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2415, 'Al Batinah', 'BA', 165, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2416, 'Al Janblyah', 'JA', 165, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2417, 'Al Wusta', 'WU', 165, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2418, 'Ash Sharqlyah', 'SH', 165, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2419, 'Az Zahirah', 'ZA', 165, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2420, 'Masqat', 'MA', 165, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2421, 'Musandam', 'MU', 165, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2422, 'Bocas del Toro', '1', 169, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2423, 'Cocle', '2', 169, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2424, 'Chiriqui', '4', 169, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2425, 'Darien', '5', 169, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2426, 'Herrera', '6', 169, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2427, 'Loa Santoa', '7', 169, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2428, 'Panama', '8', 169, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2429, 'Veraguas', '9', 169, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2430, 'Comarca de San Blas', 'Q', 169, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2431, 'El Callao', 'CAL', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2432, 'Ancash', 'ANC', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2433, 'Apurimac', 'APU', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2434, 'Arequipa', 'ARE', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2435, 'Ayacucho', 'AYA', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2436, 'Cajamarca', 'CAJ', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2437, 'Cuzco', 'CUS', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2438, 'Huancavelica', 'HUV', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2439, 'Huanuco', 'HUC', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2440, 'Ica', 'ICA', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2441, 'Junin', 'JUN', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2442, 'La Libertad', 'LAL', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2443, 'Lambayeque', 'LAM', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2444, 'Lima', 'LIM', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2445, 'Loreto', 'LOR', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2446, 'Madre de Dios', 'MDD', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2447, 'Moquegua', 'MOQ', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2448, 'Pasco', 'PAS', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2449, 'Piura', 'PIU', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2450, 'Puno', 'PUN', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2451, 'San Martin', 'SAM', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2452, 'Tacna', 'TAC', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2453, 'Tumbes', 'TUM', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2454, 'Ucayali', 'UCA', 172, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2455, 'National Capital District (Port Moresby)', 'NCD', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2456, 'Chimbu', 'CPK', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2457, 'Eastern Highlands', 'EHG', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2458, 'East New Britain', 'EBR', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2459, 'East Sepik', 'ESW', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2460, 'Enga', 'EPW', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2461, 'Gulf', 'GPK', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2462, 'Madang', 'MPM', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2463, 'Manus', 'MRL', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2464, 'Milne Bay', 'MBA', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2465, 'Morobe', 'MPL', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2466, 'New Ireland', 'NIK', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2467, 'North Solomons', 'NSA', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2468, 'Santaun', 'SAN', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2469, 'Southern Highlands', 'SHM', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2470, 'Western Highlands', 'WHM', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2471, 'West New Britain', 'WBK', 170, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2472, 'Abra', 'ABR', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2473, 'Agusan del Norte', 'AGN', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2474, 'Agusan del Sur', 'AGS', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2475, 'Aklan', 'AKL', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2476, 'Albay', 'ALB', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2477, 'Antique', 'ANT', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2478, 'Apayao', 'APA', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2479, 'Aurora', 'AUR', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2480, 'Basilan', 'BAS', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2481, 'Batasn', 'BAN', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2482, 'Batanes', 'BTN', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2483, 'Batangas', 'BTG', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2484, 'Benguet', 'BEN', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2485, 'Biliran', 'BIL', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2486, 'Bohol', 'BOH', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2487, 'Bukidnon', 'BUK', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2488, 'Bulacan', 'BUL', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2489, 'Cagayan', 'CAG', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2490, 'Camarines Norte', 'CAN', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2491, 'Camarines Sur', 'CAS', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2492, 'Camiguin', 'CAM', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2493, 'Capiz', 'CAP', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2494, 'Catanduanes', 'CAT', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2495, 'Cavite', 'CAV', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2496, 'Cebu', 'CEB', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2497, 'Compostela Valley', 'COM', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2498, 'Davao', 'DAV', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2499, 'Davao del Sur', 'DAS', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2500, 'Davao Oriental', 'DAO', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2501, 'Eastern Samar', 'EAS', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2502, 'Guimaras', 'GUI', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2503, 'Ifugao', 'IFU', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2504, 'Ilocos Norte', 'ILN', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2505, 'Ilocos Sur', 'ILS', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2506, 'Iloilo', 'ILI', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2507, 'Isabela', 'ISA', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2508, 'Kalinga-Apayso', 'KAL', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2509, 'Laguna', 'LAG', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2510, 'Lanao del Norte', 'LAN', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2511, 'Lanao del Sur', 'LAS', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2512, 'La Union', 'LUN', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2513, 'Leyte', 'LEY', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2514, 'Maguindanao', 'MAG', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2515, 'Marinduque', 'MAD', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2516, 'Masbate', 'MAS', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2517, 'Mindoro Occidental', 'MDC', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2518, 'Mindoro Oriental', 'MDR', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2519, 'Misamis Occidental', 'MSC', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2520, 'Misamis Oriental', 'MSR', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2521, 'Mountain Province', 'MOU', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2522, 'Negroe Occidental', 'NEC', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2523, 'Negros Oriental', 'NER', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2524, 'North Cotabato', 'NCO', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2525, 'Northern Samar', 'NSA', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2526, 'Nueva Ecija', 'NUE', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2527, 'Nueva Vizcaya', 'NUV', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2528, 'Palawan', 'PLW', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2529, 'Pampanga', 'PAM', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2530, 'Pangasinan', 'PAN', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2531, 'Quezon', 'QUE', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2532, 'Quirino', 'QUI', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2533, 'Rizal', 'RIZ', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2534, 'Romblon', 'ROM', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2535, 'Sarangani', 'SAR', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2536, 'Siquijor', 'SIG', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2537, 'Sorsogon', 'SOR', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2538, 'South Cotabato', 'SCO', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2539, 'Southern Leyte', 'SLE', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2540, 'Sultan Kudarat', 'SUK', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2541, 'Sulu', 'SLU', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2542, 'Surigao del Norte', 'SUN', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2543, 'Surigao del Sur', 'SUR', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2544, 'Tarlac', 'TAR', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2545, 'Tawi-Tawi', 'TAW', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2546, 'Western Samar', 'WSA', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2547, 'Zambales', 'ZMB', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2548, 'Zamboanga del Norte', 'ZAN', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2549, 'Zamboanga del Sur', 'ZAS', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2550, 'Zamboanga Sibiguey', 'ZSI', 173, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2551, 'Islamabad', 'IS', 166, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2552, 'Baluchistan (en)', 'BA', 166, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2553, 'North-West Frontier', 'NW', 166, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2554, 'Sind (en)', 'SD', 166, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2555, 'Federally Administered Tribal Aresa', 'TA', 166, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2556, 'Azad Rashmir', 'JK', 166, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2557, 'Northern Areas', 'NA', 166, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2558, 'Aveiro', '1', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2559, 'Beja', '2', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2560, 'Braga', '3', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2561, 'Braganca', '4', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2562, 'Castelo Branco', '5', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2563, 'Colmbra', '6', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2564, 'Ovora', '7', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2565, 'Faro', '8', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2566, 'Guarda', '9', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2567, 'Leiria', '10', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2568, 'Lisboa', '11', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2569, 'Portalegre', '12', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2570, 'Porto', '13', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2571, 'Santarem', '14', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2572, 'Setubal', '15', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2573, 'Viana do Castelo', '16', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2574, 'Vila Real', '17', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2575, 'Viseu', '18', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2576, 'Regiao Autonoma dos Acores', '20', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2577, 'Regiao Autonoma da Madeira', '30', 176, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2578, 'Asuncion', 'ASU', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2579, 'Alto Paraguay', '16', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2580, 'Alto Parana', '10', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2581, 'Amambay', '13', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2582, 'Boqueron', '19', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2583, 'Caeguazu', '5', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2584, 'Caazapl', '6', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2585, 'Canindeyu', '14', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2586, 'Concepcion', '1', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2587, 'Cordillera', '3', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2588, 'Guaira', '4', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2589, 'Itapua', '7', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2590, 'Miaiones', '8', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2591, 'Neembucu', '12', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2592, 'Paraguari', '9', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2593, 'Presidente Hayes', '15', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2594, 'San Pedro', '2', 171, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2595, 'Ad Dawhah', 'DA', 178, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2596, 'Al Ghuwayriyah', 'GH', 178, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2597, 'Al Jumayliyah', 'JU', 178, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2598, 'Al Khawr', 'KH', 178, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2599, 'Al Wakrah', 'WA', 178, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2600, 'Ar Rayyan', 'RA', 178, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2601, 'Jariyan al Batnah', 'JB', 178, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2602, 'Madinat ash Shamal', 'MS', 178, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2603, 'Umm Salal', 'US', 178, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2604, 'Bucuresti', 'B', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2605, 'Alba', 'AB', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2606, 'Arad', 'AR', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2607, 'Arges', 'AG', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2608, 'Bacau', 'BC', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2609, 'Bihor', 'BH', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2610, 'Bistrita-Nasaud', 'BN', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2611, 'Boto\'ani', 'BT', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2612, 'Bra\'ov', 'BV', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2613, 'Braila', 'BR', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2614, 'Buzau', 'BZ', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2615, 'Caras-Severin', 'CS', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2616, 'Ca la ras\'i', 'CL', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2617, 'Cluj', 'CJ', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2618, 'Constant\'a', 'CT', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2619, 'Covasna', 'CV', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2620, 'Dambovit\'a', 'DB', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2621, 'Dolj', 'DJ', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2622, 'Galat\'i', 'GL', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2623, 'Giurgiu', 'GR', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2624, 'Gorj', 'GJ', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2625, 'Harghita', 'HR', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2626, 'Hunedoara', 'HD', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2627, 'Ialomit\'a', 'IL', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2628, 'Ias\'i', 'IS', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2629, 'Ilfov', 'IF', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2630, 'Maramures', 'MM', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2631, 'Mehedint\'i', 'MH', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2632, 'Mures', 'MS', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2633, 'Neamt', 'NT', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2634, 'Olt', 'OT', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2635, 'Prahova', 'PH', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2636, 'Satu Mare', 'SM', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2637, 'Sa laj', 'SJ', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2638, 'Sibiu', 'SB', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2639, 'Suceava', 'SV', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2640, 'Teleorman', 'TR', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2641, 'Timis', 'TM', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2642, 'Tulcea', 'TL', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2643, 'Vaslui', 'VS', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2644, 'Valcea', 'VL', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2645, 'Vrancea', 'VN', 180, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2646, 'Adygeya, Respublika', 'AD', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2647, 'Altay, Respublika', 'AL', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2648, 'Bashkortostan, Respublika', 'BA', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2649, 'Buryatiya, Respublika', 'BU', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2650, 'Chechenskaya Respublika', 'CE', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2651, 'Chuvashskaya Respublika', 'CU', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2652, 'Dagestan, Respublika', 'DA', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2653, 'Ingushskaya Respublika', 'IN', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2654, 'Kabardino-Balkarskaya', 'KB', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2655, 'Kalmykiya, Respublika', 'KL', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2656, 'Karachayevo-Cherkesskaya Respublika', 'KC', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2657, 'Kareliya, Respublika', 'KR', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2658, 'Khakasiya, Respublika', 'KK', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2659, 'Komi, Respublika', 'KO', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2660, 'Mariy El, Respublika', 'ME', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2661, 'Mordoviya, Respublika', 'MO', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2662, 'Sakha, Respublika [Yakutiya]', 'SA', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2663, 'Severnaya Osetiya, Respublika', 'SE', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2664, 'Tatarstan, Respublika', 'TA', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2665, 'Tyva, Respublika [Tuva]', 'TY', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2666, 'Udmurtskaya Respublika', 'UD', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2667, 'Altayskiy kray', 'ALT', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2668, 'Khabarovskiy kray', 'KHA', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2669, 'Krasnodarskiy kray', 'KDA', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2670, 'Krasnoyarskiy kray', 'KYA', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2671, 'Primorskiy kray', 'PRI', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2672, 'Stavropol\'skiy kray', 'STA', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2673, 'Amurskaya oblast\'', 'AMU', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2674, 'Arkhangel\'skaya oblast\'', 'ARK', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2675, 'Astrakhanskaya oblast\'', 'AST', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2676, 'Belgorodskaya oblast\'', 'BEL', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2677, 'Bryanskaya oblast\'', 'BRY', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2678, 'Chelyabinskaya oblast\'', 'CHE', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2679, 'Chitinskaya oblast\'', 'CHI', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2680, 'Irkutskaya oblast\'', 'IRK', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2681, 'Ivanovskaya oblast\'', 'IVA', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2682, 'Kaliningradskaya oblast\'', 'KGD', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2683, 'Kaluzhskaya oblast\'', 'KLU', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2684, 'Kamchatskaya oblast\'', 'KAM', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2685, 'Kemerovskaya oblast\'', 'KEM', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2686, 'Kirovskaya oblast\'', 'KIR', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2687, 'Kostromskaya oblast\'', 'KOS', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2688, 'Kurganskaya oblast\'', 'KGN', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2689, 'Kurskaya oblast\'', 'KRS', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2690, 'Leningradskaya oblast\'', 'LEN', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2691, 'Lipetskaya oblast\'', 'LIP', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2692, 'Magadanskaya oblast\'', 'MAG', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2693, 'Moskovskaya oblast\'', 'MOS', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2694, 'Murmanskaya oblast\'', 'MUR', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2695, 'Nizhegorodskaya oblast\'', 'NIZ', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2696, 'Novgorodskaya oblast\'', 'NGR', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2697, 'Novosibirskaya oblast\'', 'NVS', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2698, 'Omskaya oblast\'', 'OMS', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2699, 'Orenburgskaya oblast\'', 'ORE', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2700, 'Orlovskaya oblast\'', 'ORL', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2701, 'Penzenskaya oblast\'', 'PNZ', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2702, 'Permskaya oblast\'', 'PER', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2703, 'Pskovskaya oblast\'', 'PSK', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2704, 'Rostovskaya oblast\'', 'ROS', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2705, 'Ryazanskaya oblast\'', 'RYA', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2706, 'Sakhalinskaya oblast\'', 'SAK', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2707, 'Samarskaya oblast\'', 'SAM', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2708, 'Saratovskaya oblast\'', 'SAR', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2709, 'Smolenskaya oblast\'', 'SMO', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2710, 'Sverdlovskaya oblast\'', 'SVE', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2711, 'Tambovskaya oblast\'', 'TAM', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2712, 'Tomskaya oblast\'', 'TOM', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2713, 'Tul\'skaya oblast\'', 'TUL', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2714, 'Tverskaya oblast\'', 'TVE', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2715, 'Tyumenskaya oblast\'', 'TYU', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2716, 'Ul\'yanovskaya oblast\'', 'ULY', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2717, 'Vladimirskaya oblast\'', 'VLA', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2718, 'Volgogradskaya oblast\'', 'VGG', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2719, 'Vologodskaya oblast\'', 'VLG', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2720, 'Voronezhskaya oblast\'', 'VOR', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2721, 'Yaroslavskaya oblast\'', 'YAR', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2722, 'Moskva', 'MOW', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2723, 'Sankt-Peterburg', 'SPE', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2724, 'Yevreyskaya avtonomnaya oblast\'', 'YEV', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2725, 'Aginskiy Buryatskiy avtonomnyy', 'AGB', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2726, 'Chukotskiy avtonomnyy okrug', 'CHU', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2727, 'Evenkiyskiy avtonomnyy okrug', 'EVE', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2728, 'Khanty-Mansiyskiy avtonomnyy okrug', 'KHM', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2729, 'Komi-Permyatskiy avtonomnyy okrug', 'KOP', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2730, 'Koryakskiy avtonomnyy okrug', 'KOR', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2731, 'Nenetskiy avtonomnyy okrug', 'NEN', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2732, 'Taymyrskiy (Dolgano-Nenetskiy)', 'TAY', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2733, 'Ust\'-Ordynskiy Buryatskiy', 'UOB', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2734, 'Yamalo-Nenetskiy avtonomnyy okrug', 'YAN', 181, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2735, 'Butare', 'C', 182, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2736, 'Byumba', 'I', 182, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2737, 'Cyangugu', 'E', 182, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2738, 'Gikongoro', 'D', 182, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2739, 'Gisenyi', 'G', 182, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2740, 'Gitarama', 'B', 182, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2741, 'Kibungo', 'J', 182, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2742, 'Kibuye', 'F', 182, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2743, 'Kigali-Rural Kigali y\' Icyaro', 'K', 182, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2744, 'Kigali-Ville Kigali Ngari', 'L', 182, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2745, 'Mutara', 'M', 182, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2746, 'Ruhengeri', 'H', 182, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2747, 'Al Batah', '11', 191, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2748, 'Al H,udd ash Shamallyah', '8', 191, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2749, 'Al Jawf', '12', 191, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2750, 'Al Madinah', '3', 191, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2751, 'Al Qasim', '5', 191, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2752, 'Ar Riyad', '1', 191, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2753, 'Asir', '14', 191, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2754, 'Ha\'il', '6', 191, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2755, 'Jlzan', '9', 191, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2756, 'Makkah', '2', 191, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2757, 'Najran', '10', 191, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2758, 'Tabuk', '7', 191, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2759, 'Capital Territory (Honiara)', 'CT', 200, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2760, 'Guadalcanal', 'GU', 200, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2761, 'Isabel', 'IS', 200, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2762, 'Makira', 'MK', 200, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2763, 'Malaita', 'ML', 200, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2764, 'Temotu', 'TE', 200, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2765, 'Aali an Nil', 'AN', 207, 1, 1, '2018-06-29 14:11:24', 297, '2018-11-16 15:59:59'),
(2766, 'Al Bah al Ahmar', '26', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2767, 'Al Buhayrat', '18', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2768, 'Al Jazirah', '7', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2769, 'Al Khartum', '3', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2770, 'Al Qadarif', '6', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2771, 'Al Wahdah', '22', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2772, 'An Nil', '4', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2773, 'An Nil al Abyaq', '8', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2774, 'An Nil al Azraq', '24', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2775, 'Ash Shamallyah', '1', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2776, 'Bahr al Jabal', '17', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2777, 'Gharb al Istiwa\'iyah', '16', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2778, 'Gharb Ba~r al Ghazal', '14', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2779, 'Gharb Darfur', '12', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2780, 'Gharb Kurdufan', '10', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2781, 'Janub Darfur', '11', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2782, 'Janub Rurdufan', '13', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2783, 'Jnqall', '20', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2784, 'Kassala', '5', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2785, 'Shamal Batr al Ghazal', '15', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2786, 'Shamal Darfur', '2', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2787, 'Shamal Kurdufan', '9', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2788, 'Sharq al Istiwa\'iyah', '19', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2789, 'Sinnar', '25', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2790, 'Warab', '21', 207, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2791, 'Blekinge lan', 'K', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2792, 'Dalarnas lan', 'W', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2793, 'Gotlands lan', 'I', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2794, 'Gavleborge lan', 'X', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2795, 'Hallands lan', 'N', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2796, 'Jamtlande lan', 'Z', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2797, 'Jonkopings lan', 'F', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2798, 'Kalmar lan', 'H', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2799, 'Kronoberge lan', 'G', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2800, 'Norrbottena lan', 'BD', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2801, 'Skane lan', 'M', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2802, 'Stockholms lan', 'AB', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2803, 'Sodermanlands lan', 'D', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2804, 'Uppsala lan', 'C', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2805, 'Varmlanda lan', 'S', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2806, 'Vasterbottens lan', 'AC', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2807, 'Vasternorrlands lan', 'Y', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2808, 'Vastmanlanda lan', 'U', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2809, 'Vastra Gotalands lan', 'Q', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2810, 'Orebro lan', 'T', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2811, 'Ostergotlands lan', 'E', 211, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2812, 'Saint Helena', 'SH', 183, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2813, 'Ascension', 'AC', 183, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2814, 'Tristan da Cunha', 'TA', 183, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2815, 'Ajdovscina', '1', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2816, 'Beltinci', '2', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2817, 'Benedikt', '148', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2818, 'Bistrica ob Sotli', '149', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2819, 'Bled', '3', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2820, 'Bloke', '150', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2821, 'Bohinj', '4', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2822, 'Borovnica', '5', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2823, 'Bovec', '6', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2824, 'Braslovce', '151', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2825, 'Brda', '7', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2826, 'Brezovica', '8', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2827, 'Brezica', '9', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2828, 'Cankova', '152', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2829, 'Celje', '11', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2830, 'Cerklje na Gorenjskem', '12', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2831, 'Cerknica', '13', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2832, 'Cerkno', '14', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2833, 'Cerkvenjak', '153', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2834, 'Crensovci', '15', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2835, 'Crna na Koroskem', '16', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2836, 'Crnomelj', '17', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2837, 'Destrnik', '18', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2838, 'Divaca', '19', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2839, 'Dobje', '154', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2840, 'Dobrepolje', '20', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2841, 'Dobrna', '155', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2842, 'Dobrova-Polhov Gradec', '21', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2843, 'Dobrovnik', '156', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2844, 'Dol pri Ljubljani', '22', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2845, 'Dolenjske Toplice', '157', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2846, 'Domzale', '23', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2847, 'Dornava', '24', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2848, 'Dravograd', '25', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2849, 'Duplek', '26', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2850, 'Gorenja vas-Poljane', '27', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2851, 'Gorsnica', '28', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2852, 'Gornja Radgona', '29', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2853, 'Gornji Grad', '30', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2854, 'Gornji Petrovci', '31', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2855, 'Grad', '158', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2856, 'Grosuplje', '32', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2857, 'Hajdina', '159', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2858, 'Hoce-Slivnica', '160', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2859, 'Hodos', '161', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2860, 'Jorjul', '162', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2861, 'Hrastnik', '34', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2862, 'Hrpelje-Kozina', '35', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2863, 'Idrija', '36', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2864, 'Ig', '37', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2865, 'IIrska Bistrica', '38', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2866, 'Ivancna Gorica', '39', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2867, 'Izola', '40', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2868, 'Jesenice', '41', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2869, 'Jezersko', '163', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2870, 'Jursinci', '42', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2871, 'Kamnik', '43', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2872, 'Kanal', '44', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2873, 'Kidricevo', '45', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2874, 'Kobarid', '46', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2875, 'Kobilje', '47', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2876, 'Jovevje', '48', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2877, 'Komen', '49', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2878, 'Komenda', '164', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2879, 'Koper', '50', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2880, 'Kostel', '165', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2881, 'Kozje', '51', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2882, 'Kranj', '52', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2883, 'Kranjska Gora', '53', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2884, 'Krizevci', '166', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2885, 'Krsko', '54', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2886, 'Kungota', '55', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2887, 'Kuzma', '56', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2888, 'Lasko', '57', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2889, 'Lenart', '58', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2890, 'Lendava', '59', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2891, 'Litija', '60', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2892, 'Ljubljana', '61', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2893, 'Ljubno', '62', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2894, 'Ljutomer', '63', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2895, 'Logatec', '64', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2896, 'Loska dolina', '65', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2897, 'Loski Potok', '66', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2898, 'Lovrenc na Pohorju', '167', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2899, 'Luce', '67', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2900, 'Lukovica', '68', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2901, 'Majsperk', '69', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2902, 'Maribor', '70', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2903, 'Markovci', '168', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2904, 'Medvode', '71', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2905, 'Menges', '72', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2906, 'Metlika', '73', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2907, 'Mezica', '74', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2908, 'Miklavz na Dravskern polju', '169', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2909, 'Miren-Kostanjevica', '75', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2910, 'Mirna Pec', '170', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2911, 'Mislinja', '76', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2912, 'Moravce', '77', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2913, 'Moravske Toplice', '78', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2914, 'Mozirje', '79', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2915, 'Murska Sobota', '80', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2916, 'Muta', '81', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2917, 'Naklo', '82', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2918, 'Nazarje', '83', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2919, 'Nova Gorica', '84', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2920, 'Nova mesto', '85', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2921, 'Sveta Ana', '181', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2922, 'Sveti Andraz v Slovenskih goricah', '182', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2923, 'Sveti Jurij', '116', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2924, 'Salovci', '33', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2925, 'Sempeter-Vrtojba', '183', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2926, 'Sencur', '117', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2927, 'Sentilj', '118', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24');
INSERT INTO `tblstate` (`stateid`, `statename`, `stateabbreviation`, `CountryId`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(2928, 'Sentjernej', '119', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2929, 'Sentjur pri Celju', '120', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2930, 'Skocjan', '121', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2931, 'Skofja Loka', '122', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2932, 'Skoftjica', '123', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2933, 'Smarje pri Jelsah', '124', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2934, 'Smartno ob Paki', '125', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2935, 'Smartno pri Litiji', '194', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2936, 'Sostanj', '126', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2937, 'Store', '127', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2938, 'Tabor', '184', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2939, 'Tisina', '10', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2940, 'Tolmin', '128', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2941, 'Trbovje', '129', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2942, 'Trebnje', '130', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2943, 'Trnovska vas', '185', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2944, 'Trzic', '131', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2945, 'Trzin', '186', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2946, 'Turnisce', '132', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2947, 'Velenje', '133', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2948, 'Velika Polana', '187', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2949, 'Velika Lasce', '134', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2950, 'Verzej', '188', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2951, 'Videm', '135', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2952, 'Vipava', '136', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2953, 'Vitanje', '137', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2954, 'Vojnik', '138', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2955, 'Vransko', '189', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2956, 'Vrhnika', '140', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2957, 'Vuzenica', '141', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2958, 'Zagorje ob Savi', '142', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2959, 'Zavrc', '143', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2960, 'Zrece', '144', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2961, 'Zalec', '190', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2962, 'Zelezniki', '146', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2963, 'Zetale', '191', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2964, 'Ziri', '147', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2965, 'Zirovnica', '192', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2966, 'Zuzemberk', '193', 198, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2967, 'Banskobystrický kraj', 'BC', 197, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2968, 'Bratislavský kraj', 'BL', 197, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2969, 'Košický kraj', 'KI', 197, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2970, 'Nitriansky kraj', 'NJ', 197, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2971, 'Prešovský kraj', 'PV', 197, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2972, 'Trenčiansky kraj', 'TC', 197, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2973, 'Trnavský kraj', 'TA', 197, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2974, 'Žilinský kraj', 'ZI', 197, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2975, 'Dakar', 'DK', 192, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2976, 'Diourbel', 'DB', 192, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2977, 'Fatick', 'FK', 192, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2978, 'Kaolack', 'KL', 192, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2979, 'Kolda', 'KD', 192, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2980, 'Louga', 'LG', 192, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2981, 'Matam', 'MT', 192, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2982, 'Saint-Louis', 'SL', 192, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2983, 'Tambacounda', 'TC', 192, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2984, 'Thies', 'TH', 192, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2985, 'Ziguinchor', 'ZG', 192, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2986, 'Awdal', 'AW', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2987, 'Bakool', 'BK', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2988, 'Banaadir', 'BN', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2989, 'Bay', 'BY', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2990, 'Galguduud', 'GA', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2991, 'Gedo', 'GE', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2992, 'Hiirsan', 'HI', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2993, 'Jubbada Dhexe', 'JD', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2994, 'Jubbada Hoose', 'JH', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2995, 'Mudug', 'MU', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2996, 'Nugaal', 'NU', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2997, 'Saneag', 'SA', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2998, 'Shabeellaha Dhexe', 'SD', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(2999, 'Shabeellaha Hoose', 'SH', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3000, 'Sool', 'SO', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3001, 'Togdheer', 'TO', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3002, 'Woqooyi Galbeed', 'WO', 201, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3003, 'Brokopondo', 'BR', 208, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3004, 'Commewijne', 'CM', 208, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3005, 'Coronie', 'CR', 208, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3006, 'Marowijne', 'MA', 208, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3007, 'Nickerie', 'NI', 208, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3008, 'Paramaribo', 'PM', 208, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3009, 'Saramacca', 'SA', 208, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3010, 'Sipaliwini', 'SI', 208, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3011, 'Wanica', 'WA', 208, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3012, 'Principe', 'P', 190, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3013, 'Sao Tome', 'S', 190, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3014, 'Ahuachapan', 'AH', 65, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3015, 'Cabanas', 'CA', 65, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3016, 'Cuscatlan', 'CU', 65, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3017, 'Chalatenango', 'CH', 65, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3018, 'Morazan', 'MO', 65, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3019, 'San Miguel', 'SM', 65, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3020, 'San Salvador', 'SS', 65, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3021, 'Santa Ana', 'SA', 65, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3022, 'San Vicente', 'SV', 65, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3023, 'Sonsonate', 'SO', 65, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3024, 'Usulutan', 'US', 65, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3025, 'Al Hasakah', 'HA', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3026, 'Al Ladhiqiyah', 'LA', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3027, 'Al Qunaytirah', 'QU', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3028, 'Ar Raqqah', 'RA', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3029, 'As Suwayda\'', 'SU', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3030, 'Dar\'a', 'DR', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3031, 'Dayr az Zawr', 'DY', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3032, 'Dimashq', 'DI', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3033, 'Halab', 'HL', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3034, 'Hamah', 'HM', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3035, 'Jim\'', 'HI', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3036, 'Idlib', 'ID', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3037, 'Rif Dimashq', 'RD', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3038, 'Tarts', 'TA', 213, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3039, 'Hhohho', 'HH', 210, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3040, 'Lubombo', 'LU', 210, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3041, 'Manzini', 'MA', 210, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3042, 'Shiselweni', 'SH', 210, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3043, 'Batha', 'BA', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3044, 'Biltine', 'BI', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3045, 'Borkou-Ennedi-Tibesti', 'BET', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3046, 'Chari-Baguirmi', 'CB', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3047, 'Guera', 'GR', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3048, 'Kanem', 'KA', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3049, 'Lac', 'LC', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3050, 'Logone-Occidental', 'LO', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3051, 'Logone-Oriental', 'LR', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3052, 'Mayo-Kebbi', 'MK', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3053, 'Moyen-Chari', 'MC', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3054, 'Ouaddai', 'OD', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3055, 'Salamat', 'SA', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3056, 'Tandjile', 'TA', 42, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3057, 'Kara', 'K', 218, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3058, 'Maritime (Region)', 'M', 218, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3059, 'Savannes', 'S', 218, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3060, 'Krung Thep Maha Nakhon Bangkok', '10', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3061, 'Phatthaya', 'S', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3062, 'Amnat Charoen', '37', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3063, 'Ang Thong', '15', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3064, 'Buri Ram', '31', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3065, 'Chachoengsao', '24', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3066, 'Chai Nat', '18', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3067, 'Chaiyaphum', '36', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3068, 'Chanthaburi', '22', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3069, 'Chiang Mai', '50', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3070, 'Chiang Rai', '57', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3071, 'Chon Buri', '20', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3072, 'Chumphon', '86', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3073, 'Kalasin', '46', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3074, 'Kamphasng Phet', '62', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3075, 'Kanchanaburi', '71', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3076, 'Khon Kaen', '40', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3077, 'Krabi', '81', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3078, 'Lampang', '52', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3079, 'Lamphun', '51', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3080, 'Loei', '42', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3081, 'Lop Buri', '16', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3082, 'Mae Hong Son', '58', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3083, 'Maha Sarakham', '44', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3084, 'Mukdahan', '50', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3085, 'Nakhon Nayok', '26', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3086, 'Nakhon Pathom', '73', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3087, 'Nakhon Phanom', '48', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3088, 'Nakhon Ratchasima', '30', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3089, 'Nakhon Sawan', '60', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3090, 'Nakhon Si Thammarat', '80', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3091, 'Nan', '55', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3092, 'Narathiwat', '96', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3093, 'Nong Bua Lam Phu', '39', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3094, 'Nong Khai', '43', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3095, 'Nonthaburi', '12', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3096, 'Pathum Thani', '13', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3097, 'Pattani', '94', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3098, 'Phangnga', '82', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3099, 'Phatthalung', '93', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3100, 'Phayao', '56', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3101, 'Phetchabun', '67', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3102, 'Phetchaburi', '76', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3103, 'Phichit', '66', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3104, 'Phitsanulok', '65', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3105, 'Phrae', '54', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3106, 'Phra Nakhon Si Ayutthaya', '14', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3107, 'Phaket', '83', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3108, 'Prachin Buri', '25', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3109, 'Prachuap Khiri Khan', '77', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3110, 'Ranong', '85', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3111, 'Ratchaburi', '70', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3112, 'Rayong', '21', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3113, 'Roi Et', '45', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3114, 'Sa Kaeo', '27', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3115, 'Sakon Nakhon', '47', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3116, 'Samut Prakan', '11', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3117, 'Samut Sakhon', '74', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3118, 'Samut Songkhram', '75', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3119, 'Saraburi', '19', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3120, 'Satun', '91', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3121, 'Sing Buri', '17', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3122, 'Si Sa Ket', '33', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3123, 'Songkhla', '90', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3124, 'Sukhothai', '64', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3125, 'Suphan Buri', '72', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3126, 'Surat Thani', '84', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3127, 'Surin', '32', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3128, 'Tak', '63', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3129, 'Trang', '92', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3130, 'Trat', '23', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3131, 'Ubon Ratchathani', '34', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3132, 'Udon Thani', '41', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3133, 'Uthai Thani', '61', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3134, 'Uttaradit', '53', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3135, 'Yala', '95', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3136, 'Yasothon', '35', 217, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3137, 'Sughd', 'SU', 215, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3138, 'Khatlon', 'KT', 215, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3139, 'Gorno-Badakhshan', 'GB', 215, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3140, 'Ahal', 'A', 224, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3141, 'Balkan', 'B', 224, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3142, 'Dasoguz', 'D', 224, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3143, 'Lebap', 'L', 224, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3144, 'Mary', 'M', 224, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3145, 'Béja', '31', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3146, 'Ben Arous', '13', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3147, 'Bizerte', '23', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3148, 'Gabès', '81', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3149, 'Gafsa', '71', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3150, 'Jendouba', '32', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3151, 'Kairouan', '41', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3152, 'Rasserine', '42', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3153, 'Kebili', '73', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3154, 'L\'Ariana', '12', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3155, 'Le Ref', '33', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3156, 'Mahdia', '53', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3157, 'La Manouba', '14', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3158, 'Medenine', '82', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3159, 'Moneatir', '52', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3160, 'Naboul', '21', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3161, 'Sfax', '61', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3162, 'Sidi Bouxid', '43', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3163, 'Siliana', '34', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3164, 'Sousse', '51', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3165, 'Tataouine', '83', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3166, 'Tozeur', '72', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3167, 'Tunis', '11', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3168, 'Zaghouan', '22', 222, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3169, 'Adana', '1', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3170, 'Ad yaman', '2', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3171, 'Afyon', '3', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3172, 'Ag r', '4', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3173, 'Aksaray', '68', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3174, 'Amasya', '5', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3175, 'Ankara', '6', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3176, 'Antalya', '7', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3177, 'Ardahan', '75', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3178, 'Artvin', '8', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3179, 'Aydin', '9', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3180, 'Bal kesir', '10', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3181, 'Bartin', '74', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3182, 'Batman', '72', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3183, 'Bayburt', '69', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3184, 'Bilecik', '11', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3185, 'Bingol', '12', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3186, 'Bitlis', '13', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3187, 'Bolu', '14', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3188, 'Burdur', '15', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3189, 'Bursa', '16', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3190, 'Canakkale', '17', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3191, 'Cankir', '18', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3192, 'Corum', '19', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3193, 'Denizli', '20', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3194, 'Diyarbakir', '21', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3195, 'Duzce', '81', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3196, 'Edirne', '22', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3197, 'Elazig', '23', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3198, 'Erzincan', '24', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3199, 'Erzurum', '25', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3200, 'Eskis\'ehir', '26', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3201, 'Gaziantep', '27', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3202, 'Giresun', '28', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3203, 'Gms\'hane', '29', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3204, 'Hakkari', '30', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3205, 'Hatay', '31', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3206, 'Igidir', '76', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3207, 'Isparta', '32', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3208, 'Icel', '33', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3209, 'Istanbul', '34', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3210, 'Izmir', '35', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3211, 'Kahramanmaras', '46', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3212, 'Karabk', '78', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3213, 'Karaman', '70', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3214, 'Kars', '36', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3215, 'Kastamonu', '37', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3216, 'Kayseri', '38', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3217, 'Kirikkale', '71', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3218, 'Kirklareli', '39', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3219, 'Kirs\'ehir', '40', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3220, 'Kilis', '79', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3221, 'Kocaeli', '41', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3222, 'Konya', '42', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3223, 'Ktahya', '43', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3224, 'Malatya', '44', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3225, 'Manisa', '45', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3226, 'Mardin', '47', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3227, 'Mugila', '48', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3228, 'Mus', '50', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3229, 'Nevs\'ehir', '50', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3230, 'Nigide', '51', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3231, 'Ordu', '52', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3232, 'Osmaniye', '80', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3233, 'Rize', '53', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3234, 'Sakarya', '54', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3235, 'Samsun', '55', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3236, 'Siirt', '56', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3237, 'Sinop', '57', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3238, 'Sivas', '58', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3239, 'S\'anliurfa', '63', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3240, 'S\'rnak', '73', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3241, 'Tekirdag', '59', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3242, 'Tokat', '60', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3243, 'Trabzon', '61', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3244, 'Tunceli', '62', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3245, 'Us\'ak', '64', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3246, 'Van', '65', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3247, 'Yalova', '77', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3248, 'Yozgat', '66', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3249, 'Zonguldak', '67', 223, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3250, 'Couva-Tabaquite-Talparo', 'CTT', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3251, 'Diego Martin', 'DMN', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3252, 'Eastern Tobago', 'ETO', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3253, 'Penal-Debe', 'PED', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3254, 'Princes Town', 'PRT', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3255, 'Rio Claro-Mayaro', 'RCM', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3256, 'Sangre Grande', 'SGE', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3257, 'San Juan-Laventille', 'SJL', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3258, 'Siparia', 'SIP', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3259, 'Tunapuna-Piarco', 'TUP', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3260, 'Western Tobago', 'WTO', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3261, 'Arima', 'ARI', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3262, 'Chaguanas', 'CHA', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3263, 'Point Fortin', 'PTF', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3264, 'Port of Spain', 'POS', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3265, 'San Fernando', 'SFO', 221, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3266, 'Aileu', 'AL', 62, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3267, 'Ainaro', 'AN', 62, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3268, 'Bacucau', 'BA', 62, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3269, 'Bobonaro', 'BO', 62, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3270, 'Cova Lima', 'CO', 62, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3271, 'Dili', 'DI', 62, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3272, 'Ermera', 'ER', 62, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3273, 'Laulem', 'LA', 62, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3274, 'Liquica', 'LI', 62, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3275, 'Manatuto', 'MT', 62, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3276, 'Manafahi', 'MF', 62, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3277, 'Oecussi', 'OE', 62, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3278, 'Viqueque', 'VI', 62, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3279, 'Changhua', 'CHA', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3280, 'Chiayi', 'CYQ', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3281, 'Hsinchu', 'HSQ', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3282, 'Hualien', 'HUA', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3283, 'Ilan', 'ILA', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3284, 'Kaohsiung', 'KHQ', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3285, 'Miaoli', 'MIA', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3286, 'Nantou', 'NAN', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3287, 'Penghu', 'PEN', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3288, 'Pingtung', 'PIF', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3289, 'Taichung', 'TXQ', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3290, 'Tainan', 'TNQ', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3291, 'Taipei', 'TPQ', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3292, 'Taitung', 'TTT', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3293, 'Taoyuan', 'TAO', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3294, 'Yunlin', 'YUN', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3295, 'Keelung', 'KEE', 214, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3296, 'Arusha', '1', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3297, 'Dar-es-Salaam', '2', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3298, 'Dodoma', '3', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3299, 'Iringa', '4', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3300, 'Kagera', '5', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3301, 'Kaskazini Pemba', '6', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3302, 'Kaskazini Unguja', '7', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3303, 'Xigoma', '8', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3304, 'Kilimanjaro', '9', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3305, 'Rusini Pemba', '10', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3306, 'Kusini Unguja', '11', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3307, 'Lindi', '12', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3308, 'M2018-06-15 05:11:06ara', '26', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3309, 'Mara', '13', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3310, 'Mbeya', '14', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3311, 'Mjini Magharibi', '15', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3312, 'Morogoro', '16', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3313, 'Mtwara', '17', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3314, 'Pwani', '19', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3315, 'Rukwa', '20', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3316, 'Ruvuma', '21', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3317, 'Shinyanga', '22', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3318, 'Singida', '23', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3319, 'Tabora', '24', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3320, 'Tanga', '25', 216, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3321, 'Cherkas\'ka Oblast\'', '71', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3322, 'Chernihivs\'ka Oblast\'', '74', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3323, 'Chernivets\'ka Oblast\'', '77', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3324, 'Dnipropetrovs\'ka Oblast\'', '12', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3325, 'Donets\'ka Oblast\'', '14', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3326, 'Ivano-Frankivs\'ka Oblast\'', '26', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3327, 'Kharkivs\'ka Oblast\'', '63', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3328, 'Khersons\'ka Oblast\'', '65', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3329, 'Khmel\'nyts\'ka Oblast\'', '68', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3330, 'Kirovohrads\'ka Oblast\'', '35', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3331, 'Kyivs\'ka Oblast\'', '32', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3332, 'Luhans\'ka Oblast\'', '9', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3333, 'L\'vivs\'ka Oblast\'', '46', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3334, 'Mykolaivs\'ka Oblast\'', '48', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3335, 'Odes \'ka Oblast\'', '51', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3336, 'Poltavs\'ka Oblast\'', '53', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3337, 'Rivnens\'ka Oblast\'', '56', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3338, 'Sums \'ka Oblast\'', '59', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3339, 'Ternopil\'s\'ka Oblast\'', '61', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3340, 'Vinnyts\'ka Oblast\'', '5', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3341, 'Volyos\'ka Oblast\'', '7', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3342, 'Zakarpats\'ka Oblast\'', '21', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3343, 'Zaporiz\'ka Oblast\'', '23', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3344, 'Zhytomyrs\'ka Oblast\'', '18', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3345, 'Respublika Krym', '43', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3346, 'Kyiv', '30', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3347, 'Sevastopol', '40', 228, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3348, 'Adjumani', '301', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3349, 'Apac', '302', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3350, 'Arua', '303', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3351, 'Bugiri', '201', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3352, 'Bundibugyo', '401', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3353, 'Bushenyi', '402', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3354, 'Busia', '202', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3355, 'Gulu', '304', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3356, 'Hoima', '403', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3357, 'Iganga', '203', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3358, 'Jinja', '204', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3359, 'Kabale', '404', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3360, 'Kabarole', '405', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3361, 'Kaberamaido', '213', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3362, 'Kalangala', '101', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3363, 'Kampala', '102', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3364, 'Kamuli', '205', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3365, 'Kamwenge', '413', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3366, 'Kanungu', '414', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3367, 'Kapchorwa', '206', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3368, 'Kasese', '406', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3369, 'Katakwi', '207', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3370, 'Kayunga', '112', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3371, 'Kibaale', '407', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3372, 'Kiboga', '103', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3373, 'Kisoro', '408', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3374, 'Kitgum', '305', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3375, 'Kotido', '306', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3376, 'Kumi', '208', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3377, 'Kyenjojo', '415', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3378, 'Lira', '307', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3379, 'Luwero', '104', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3380, 'Masaka', '105', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3381, 'Masindi', '409', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3382, 'Mayuge', '214', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3383, 'Mbale', '209', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3384, 'Mbarara', '410', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3385, 'Moroto', '308', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3386, 'Moyo', '309', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3387, 'Mpigi', '106', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3388, 'Mubende', '107', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3389, 'Mukono', '108', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3390, 'Nakapiripirit', '311', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3391, 'Nakasongola', '109', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3392, 'Nebbi', '310', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3393, 'Ntungamo', '411', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3394, 'Pader', '312', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3395, 'Pallisa', '210', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3396, 'Rakai', '110', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3397, 'Rukungiri', '412', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3398, 'Sembabule', '111', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3399, 'Sironko', '215', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3400, 'Soroti', '211', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3401, 'Tororo', '212', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3402, 'Wakiso', '113', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3403, 'Yumbe', '313', 227, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3404, 'Baker Island', '81', 232, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3405, 'Howland Island', '84', 232, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3406, 'Jarvis Island', '86', 232, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3407, 'Johnston Atoll', '67', 232, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3408, 'Kingman Reef', '89', 232, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3409, 'Midway Islands', '71', 232, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3410, 'Navassa Island', '76', 232, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3411, 'Palmyra Atoll', '95', 232, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3412, 'Wake Ialand', '79', 232, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3413, 'Artigsa', 'AR', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3414, 'Canelones', 'CA', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3415, 'Cerro Largo', 'CL', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3416, 'Colonia', 'CO', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3417, 'Durazno', 'DU', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3418, 'Flores', 'FS', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3419, 'Lavalleja', 'LA', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3420, 'Maldonado', 'MA', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3421, 'Montevideo', 'MO', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3422, 'Paysandu', 'PA', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3423, 'Rivera', 'RV', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3424, 'Rocha', 'RO', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3425, 'Salto', 'SA', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3426, 'Soriano', 'SO', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3427, 'Tacuarembo', 'TA', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3428, 'Treinta y Tres', 'TT', 233, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3429, 'Toshkent (city)', 'TK', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3430, 'Qoraqalpogiston Respublikasi', 'QR', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3431, 'Andijon', 'AN', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3432, 'Buxoro', 'BU', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3433, 'Farg\'ona', 'FA', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3434, 'Jizzax', 'JI', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3435, 'Khorazm', 'KH', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3436, 'Namangan', 'NG', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3437, 'Navoiy', 'NW', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3438, 'Qashqadaryo', 'QA', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3439, 'Samarqand', 'SA', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3440, 'Sirdaryo', 'SI', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3441, 'Surxondaryo', 'SU', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3442, 'Toshkent', 'TO', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3443, 'Xorazm', 'XO', 234, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3444, 'Diatrito Federal', 'A', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3445, 'Anzoategui', 'B', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3446, 'Apure', 'C', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3447, 'Aragua', 'D', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3448, 'Barinas', 'E', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3449, 'Carabobo', 'G', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3450, 'Cojedes', 'H', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3451, 'Falcon', 'I', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3452, 'Guarico', 'J', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3453, 'Lara', 'K', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3454, 'Merida', 'L', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3455, 'Miranda', 'M', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3456, 'Monagas', 'N', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3457, 'Nueva Esparta', 'O', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3458, 'Portuguesa', 'P', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3459, 'Tachira', 'S', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3460, 'Trujillo', 'T', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3461, 'Vargas', 'X', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3462, 'Yaracuy', 'U', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3463, 'Zulia', 'V', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3464, 'Delta Amacuro', 'Y', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3465, 'Dependencias Federales', 'W', 237, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3466, 'An Giang', '44', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3467, 'Ba Ria - Vung Tau', '43', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3468, 'Bac Can', '53', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3469, 'Bac Giang', '54', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3470, 'Bac Lieu', '55', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3471, 'Bac Ninh', '56', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3472, 'Ben Tre', '50', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3473, 'Binh Dinh', '31', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3474, 'Binh Duong', '57', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3475, 'Binh Phuoc', '58', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3476, 'Binh Thuan', '40', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3477, 'Ca Mau', '59', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3478, 'Can Tho', '48', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3479, 'Cao Bang', '4', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3480, 'Da Nang, thanh pho', '60', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3481, 'Dong Nai', '39', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3482, 'Dong Thap', '45', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3483, 'Gia Lai', '30', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3484, 'Ha Giang', '3', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3485, 'Ha Nam', '63', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3486, 'Ha Noi, thu do', '64', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3487, 'Ha Tay', '15', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3488, 'Ha Tinh', '23', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3489, 'Hai Duong', '61', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3490, 'Hai Phong, thanh pho', '62', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3491, 'Hoa Binh', '14', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3492, 'Ho Chi Minh, thanh pho [Sai Gon]', '65', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3493, 'Hung Yen', '66', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3494, 'Khanh Hoa', '34', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3495, 'Kien Giang', '47', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3496, 'Kon Tum', '28', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3497, 'Lai Chau', '1', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3498, 'Lam Dong', '35', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3499, 'Lang Son', '9', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3500, 'Lao Cai', '2', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3501, 'Long An', '41', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3502, 'Nam Dinh', '67', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3503, 'Nghe An', '22', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3504, 'Ninh Binh', '18', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3505, 'Ninh Thuan', '36', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3506, 'Phu Tho', '68', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3507, 'Phu Yen', '32', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3508, 'Quang Binh', '24', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3509, 'Quang Nam', '27', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3510, 'Quang Ngai', '29', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3511, 'Quang Ninh', '13', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3512, 'Quang Tri', '25', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3513, 'Soc Trang', '52', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24');
INSERT INTO `tblstate` (`stateid`, `statename`, `stateabbreviation`, `CountryId`, `isactive`, `createdby`, `createdon`, `updatedby`, `updatedon`) VALUES
(3514, 'Son La', '5', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3515, 'Tay Ninh', '37', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3516, 'Thai Binh', '20', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3517, 'Thai Nguyen', '69', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3518, 'Thanh Hoa', '21', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3519, 'Thua Thien-Hue', '26', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3520, 'Tien Giang', '46', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3521, 'Tra Vinh', '51', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3522, 'Tuyen Quang', '7', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3523, 'Vinh Long', '50', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3524, 'Vinh Phuc', '70', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3525, 'Yen Bai', '6', 238, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3526, 'Malampa', 'MAP', 235, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3527, 'Penama', 'PAM', 235, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3528, 'Sanma', 'SAM', 235, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3529, 'Shefa', 'SEE', 235, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3530, 'Tafea', 'TAE', 235, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3531, 'Torba', 'TOB', 235, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3532, 'A\'ana', 'AA', 188, 1, 1, '2018-06-29 14:11:24', 1, '2018-11-16 16:46:31'),
(3533, 'Aiga-i-le-Tai', 'AL', 188, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3534, 'Atua', 'AT', 188, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3535, 'Fa\'aaaleleaga', 'FA', 188, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3536, 'Gaga\'emauga', 'GE', 188, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3537, 'Gagaifomauga', 'GI', 188, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3538, 'Palauli', 'PA', 188, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3539, 'Satupa\'itea', 'SA', 188, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3540, 'Tuamasaga', 'TU', 188, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3541, 'Va\'a-o-Fonoti', 'VF', 188, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3542, 'Vaisigano', 'VS', 188, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3543, 'Crna Gora', 'CG', 193, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3544, 'Srbija', 'SR', 193, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3545, 'Kosovo-Metohija', 'KM', 193, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3546, 'Vojvodina', 'VO', 193, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3547, 'Abyan', 'AB', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3548, 'Adan', 'AD', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3549, 'Ad Dali', 'DA', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3550, 'Al Bayda\'', 'BA', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3551, 'Al Hudaydah', 'MU', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3552, 'Al Mahrah', 'MR', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3553, 'Al Mahwit', 'MW', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3554, 'Amran', 'AM', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3555, 'Dhamar', 'DH', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3556, 'Hadramawt', 'HD', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3557, 'Hajjah', 'HJ', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3558, 'Ibb', 'IB', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3559, 'Lahij', 'LA', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3560, 'Ma\'rib', 'MA', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3561, 'Sa\'dah', 'SD', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3562, 'San\'a\'', 'SN', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3563, 'Shabwah', 'SH', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3564, 'Ta\'izz', 'TA', 243, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3565, 'Eastern Cape', 'EC', 202, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3566, 'Free State', 'FS', 202, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3567, 'Gauteng', 'GT', 202, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3568, 'Kwazulu-Natal', 'NL', 202, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3569, 'Mpumalanga', 'MP', 202, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3570, 'Northern Cape', 'NC', 202, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3571, 'Limpopo', 'NP', 202, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3572, 'Western Cape', 'WC', 202, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3573, 'Copperbelt', '8', 245, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3574, 'Luapula', '4', 245, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3575, 'Lusaka', '9', 245, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3576, 'North-Western', '6', 245, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3577, 'Bulawayo', 'BU', 246, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3578, 'Harare', 'HA', 246, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3579, 'Manicaland', 'MA', 246, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3580, 'Mashonaland Central', 'MC', 246, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3581, 'Mashonaland East', 'ME', 246, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3582, 'Mashonaland West', 'MW', 246, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3583, 'Masvingo', 'MV', 246, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3584, 'Matabeleland North', 'MN', 246, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3585, 'Matabeleland South', 'MS', 246, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3586, 'Midlands', 'MI', 246, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3587, 'South Karelia', 'SK', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3588, 'South Ostrobothnia', 'SO', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3589, 'Etelä-Savo', 'ES', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3590, 'Häme', 'HH', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3591, 'Itä-Uusimaa', 'IU', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3592, 'Kainuu', 'KA', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3593, 'Central Ostrobothnia', 'CO', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3594, 'Central Finland', 'CF', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3595, 'Kymenlaakso', 'KY', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3596, 'Lapland', 'LA', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3597, 'Tampere Region', 'TR', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3598, 'Ostrobothnia', 'OB', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3599, 'North Karelia', 'NK', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3600, 'Nothern Ostrobothnia', 'NO', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3601, 'Northern Savo', 'NS', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3602, 'Päijät-Häme', 'PH', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3603, 'Satakunta', 'SK', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3604, 'Uusimaa', 'UM', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3605, 'South-West Finland', 'SW', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3606, 'Åland', 'AL', 74, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3607, 'Limburg', 'LI', 155, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3608, 'Central and Western', 'CW', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3609, 'Eastern', 'EA', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3610, 'Southern', 'SO', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3611, 'Wan Chai', 'WC', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3612, 'Kowloon City', 'KC', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3613, 'Kwun Tong', 'KU', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3614, 'Sham Shui Po', 'SS', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3615, 'Wong Tai Sin', 'WT', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3616, 'Yau Tsim Mong', 'YT', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3617, 'Islands', 'IS', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3618, 'Kwai Tsing', 'KI', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3619, 'North', 'NO', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3620, 'Sai Kung', 'SK', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3621, 'Sha Tin', 'ST', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3622, 'Tai Po', 'TP', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3623, 'Tsuen Wan', 'TW', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3624, 'Tuen Mun', 'TM', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3625, 'Yuen Long', 'YL', 98, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3626, 'Manchester', 'MR', 108, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3627, 'Al Manāmah (Al ‘Āşimah)', '13', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3628, 'Al Janūbīyah', '14', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3629, 'Al Wusţá', '16', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3630, 'Ash Shamālīyah', '17', 17, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3631, 'Jenin', '_A', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3632, 'Tubas', '_B', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3633, 'Tulkarm', '_C', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3634, 'Nablus', '_D', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3635, 'Qalqilya', '_E', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3636, 'Salfit', '_F', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3637, 'Ramallah and Al-Bireh', '_G', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3638, 'Jericho', '_H', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3639, 'Jerusalem', '_I', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3641, 'Hebron', '_K', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3642, 'North Gaza', '_L', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3643, 'Gaza', '_M', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3644, 'Deir el-Balah', '_N', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3645, 'Khan Yunis', '_O', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3646, 'Rafah', '_P', 168, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3647, 'Brussels', 'BRU', 21, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3648, 'Distrito Federal', 'DIF', 142, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3649, 'North West', 'NW', 202, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3650, 'Tyne and Wear', 'TWR', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3651, 'Greater Manchester', 'GTM', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3652, 'Co Tyrone', 'TYR', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3653, 'West Yorkshire', 'WYK', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3654, 'South Yorkshire', 'SYK', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3655, 'Merseyside', 'MSY', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3656, 'Berkshire', 'BRK', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3657, 'West Midlands', 'WMD', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3658, 'West Glamorgan', 'WGM', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3659, 'Greater London', 'LON', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3660, 'Carbonia-Iglesias', 'CI', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3661, 'Olbia-Tempio', 'OT', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3662, 'Medio Campidano', 'VS', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3663, 'Ogliastra', 'OG', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3664, 'Bonaire', 'BON', 154, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3665, 'Curaçao', 'CUR', 154, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3666, 'Saba', 'SAB', 154, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3667, 'St. Eustatius', 'EUA', 154, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3668, 'St. Maarten', 'SXM', 154, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3669, 'Jura', '39', 75, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3670, 'Barletta-Andria-Trani', 'Bar', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3671, 'Fermo', 'Fer', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3672, 'Monza e Brianza', 'Mon', 107, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3673, 'Clwyd', 'CWD', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3674, 'Dyfed', 'DFD', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3675, 'South Glamorgan', 'SGM', 230, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3676, 'Artibonite', 'AR', 95, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3677, 'Centre', 'CE', 95, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3678, 'Nippes', 'NI', 95, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3679, 'Nord', 'ND', 95, 1, 1, '2018-06-29 14:11:24', 0, '2018-06-29 14:11:24'),
(3683, 'MMMM', 'MM', 14, 0, 0, '2019-05-07 11:39:37', 0, NULL),
(3684, 'KKKKK', 'kk', 2, 1, 0, '2019-05-08 04:26:22', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UserId` int(11) NOT NULL,
  `RoleId` int(1) DEFAULT NULL COMMENT 'MasterAdmin="1",Admin="2",Hr="3",User="4"',
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `DateofBirth` date DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `PhoneNumber` varchar(13) NOT NULL,
  `ProfileImage` varchar(100) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `PinCode` varchar(6) DEFAULT NULL,
  `CountryId` int(11) DEFAULT NULL,
  `StateId` int(11) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `ResetPasswordCode` varchar(20) DEFAULT NULL,
  `IsActive` int(1) NOT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `CreatedOn` timestamp NULL DEFAULT NULL,
  `UpdatedBy` int(11) NOT NULL,
  `UpdatedOn` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UserId`, `RoleId`, `FirstName`, `LastName`, `EmailAddress`, `DateofBirth`, `Password`, `PhoneNumber`, `ProfileImage`, `Gender`, `Address`, `PinCode`, `CountryId`, `StateId`, `City`, `ResetPasswordCode`, `IsActive`, `CreatedBy`, `CreatedOn`, `UpdatedBy`, `UpdatedOn`) VALUES
(1, 1, 'Super', 'Admin', 'bluegreyindia@gmail.combb', '2019-09-17', '25d55ad283aa400af464c76d713c07ad', '1234567890', '', 'Female', 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(32, 3, 'Hr', 'rai', 'bluegreyindia@gmail.comyy', '2019-09-30', '25d55ad283aa400af464c76d713c07ad', '9974616445', NULL, 'Male', 'Vadodara', '111111', NULL, NULL, 'Vadodra', NULL, 1, NULL, '2019-09-02 04:00:00', 0, NULL),
(41, 2, 'Admin', 'Patel', 'mitnp16@gmail.com', '2019-09-17', '25d55ad283aa400af464c76d713c07ad', '1234567890', '', 'Female', 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(42, 1, 'MMM', 'Patel', 'siya@yopmail.com', '0000-00-00', 'fde5b4fd6c49c45ccdc53635c56d607e', '1234567890', NULL, NULL, 'Anand', '123456', NULL, NULL, 'nnnnn', NULL, 1, NULL, '2019-09-04 04:00:00', 0, NULL),
(43, 1, 'hfcghfgh', 'Patel', 'bluegreyindia@gmail.com', '2019-09-11', '25d55ad283aa400af464c76d713c07ad', '1234567890', NULL, 'Female', '', '123456', NULL, NULL, 'anand', '', 1, NULL, '2019-09-04 04:00:00', 0, NULL),
(44, 3, 'Ritesh', 'Sharma', 'rsharma@techguru.net', '2019-09-11', '4f889a74c79e2113ccc99904f9fd016d', '8888888888', NULL, 'Male', '122334sdfsfsdsfsdsf', '434343', NULL, NULL, 'sdssds', NULL, 1, NULL, '2019-09-04 04:00:00', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`companyid`);

--
-- Indexes for table `tblcompanycompliances`
--
ALTER TABLE `tblcompanycompliances`
  ADD PRIMARY KEY (`companycomplianceid`);

--
-- Indexes for table `tblcompanytype`
--
ALTER TABLE `tblcompanytype`
  ADD PRIMARY KEY (`companytypeid`);

--
-- Indexes for table `tblcompliances`
--
ALTER TABLE `tblcompliances`
  ADD PRIMARY KEY (`complianceid`);

--
-- Indexes for table `tblcountry`
--
ALTER TABLE `tblcountry`
  ADD PRIMARY KEY (`CountryId`);

--
-- Indexes for table `tblemail_template`
--
ALTER TABLE `tblemail_template`
  ADD PRIMARY KEY (`email_template_id`);

--
-- Indexes for table `tblhr`
--
ALTER TABLE `tblhr`
  ADD PRIMARY KEY (`hrid`);

--
-- Indexes for table `tblrights`
--
ALTER TABLE `tblrights`
  ADD PRIMARY KEY (`rightsid`);

--
-- Indexes for table `tblrightsuser`
--
ALTER TABLE `tblrightsuser`
  ADD PRIMARY KEY (`userrightsid`);

--
-- Indexes for table `tblstate`
--
ALTER TABLE `tblstate`
  ADD PRIMARY KEY (`stateid`),
  ADD KEY `CountryId` (`CountryId`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `companyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblcompanycompliances`
--
ALTER TABLE `tblcompanycompliances`
  MODIFY `companycomplianceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblcompanytype`
--
ALTER TABLE `tblcompanytype`
  MODIFY `companytypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblcompliances`
--
ALTER TABLE `tblcompliances`
  MODIFY `complianceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblcountry`
--
ALTER TABLE `tblcountry`
  MODIFY `CountryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT for table `tblemail_template`
--
ALTER TABLE `tblemail_template`
  MODIFY `email_template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tblhr`
--
ALTER TABLE `tblhr`
  MODIFY `hrid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblrights`
--
ALTER TABLE `tblrights`
  MODIFY `rightsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblrightsuser`
--
ALTER TABLE `tblrightsuser`
  MODIFY `userrightsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblstate`
--
ALTER TABLE `tblstate`
  MODIFY `stateid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
