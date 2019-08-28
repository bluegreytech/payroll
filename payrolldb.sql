-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 02:16 PM
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
(1, 'User registration', 'bluegreyindia@gmail.com', 'bluegreyindia@gmail.com', 'User registration', '\r\n   <html>\r\n    <head>\r\n        <title>Welcome to {site_name}</title>\r\n       \r\n    </head>\r\n    <body>\r\n         <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 70px;\">\r\n            <tr>\r\n                <td style=\"background: #49ab48;\"><img src=\"{image_url}/images/logo-wide.png\" alt=\"Chem Sam Logo\"></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n      \r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 400px;\">\r\n            <tr>\r\n                <td>Hello {username},</td>\r\n                \r\n            </tr>\r\n            <tr >\r\n               <td><p>Thanks you for joining with us!</p></td>\r\n            </tr>\r\n            <tr>\r\n               <td><p>Regard</p>\r\n               <p>Chem Sam Team,</p></td>\r\n            </tr>\r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 50px;\">\r\n            <tr>\r\n                <td style=\"background: #000;\"><p style=\"color: #fff; text-align: center;\">Copyright © {year} Chemshem Virtual Classes. All Rights Reserved</p></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n        \r\n    </body>\r\n</html>'),
(2, 'Forgot Password by admin', 'bluegreyindia@gmail.com', 'bluegreyindia@gmail.com', 'Forgot Password by admin', '\r\n   <html>\r\n    <head>\r\n        <title>Welcome to {site_name}</title>\r\n       \r\n    </head>\r\n    <body>\r\n         <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 70px;\">\r\n            <tr>\r\n                <td style=\"background: #bb342f;\"><img src=\"{image_url}/images/logo-wide.png\" alt=\"Chem Sam Logo\"></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n      \r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 400px;\">\r\n            <tr>\r\n                <td>Hello {username},</td>\r\n            </tr>\r\n            <tr >\r\n               <td><p>We were told that you forgot your password on {username}.</p>\r\n                \r\n                <p>To reeset your password,please click this link: <a>{reset_link}</a></p>\r\n                \r\n               </td>\r\n            </tr>\r\n            <tr>\r\n               <td><p>Regard,</p>\r\n               <p>Chem Sam Team,</p></td>\r\n            </tr>\r\n        </table>\r\n        <table cellspacing=\"0\" style=\"border: 2px; width: 500px; height: 50px;\">\r\n            <tr>\r\n                <td style=\"background: #000;\"><p style=\"color: #fff; text-align: center;\">Copyright © {year} Chem sam Virtual Classes. All Rights Reserved</p></td>\r\n              \r\n            </tr>\r\n           \r\n        </table>\r\n        \r\n    </body>\r\n</html>');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UserId` int(11) NOT NULL,
  `RoleId` int(1) DEFAULT NULL COMMENT 'Admin="1",User="2"',
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
(1, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(23, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(24, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(25, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(26, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(27, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(28, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(29, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(30, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(31, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(32, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(33, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(34, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(35, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(36, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(37, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57'),
(38, 1, 'Mitesh', 'Patel', 'bluegreyindia@gmail.com', '2019-08-15', '25d55ad283aa400af464c76d713c07ad', '1234567890', '7.jpg', NULL, 'Anand', '123456', NULL, NULL, 'anand', 'dZ3eU', 1, 1, '2019-06-13 08:27:57', 1, '2019-06-13 08:27:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
