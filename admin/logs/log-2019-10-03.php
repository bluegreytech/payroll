ERROR - 2019-10-03 09:34:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 70
ERROR - 2019-10-03 09:34:39 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-03 09:34:40 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-03 09:34:40 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-03 09:34:40 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-03 09:42:08 --> Severity: Notice --> Undefined variable: joiningdate C:\xampp\htdocs\payroll\admin\application\views\hr\profile.php 385
ERROR - 2019-10-03 09:42:08 --> Severity: Notice --> Undefined variable: joiningdate C:\xampp\htdocs\payroll\admin\application\views\hr\profile.php 385
ERROR - 2019-10-03 09:42:19 --> Severity: Notice --> Undefined variable: joiningdate C:\xampp\htdocs\payroll\admin\application\views\hr\profile.php 385
ERROR - 2019-10-03 09:42:19 --> Severity: Notice --> Undefined variable: joiningdate C:\xampp\htdocs\payroll\admin\application\views\hr\profile.php 385
ERROR - 2019-10-03 09:42:22 --> 404 Page Not Found: Default/js
ERROR - 2019-10-03 09:42:22 --> 404 Page Not Found: Default/js
ERROR - 2019-10-03 09:42:22 --> 404 Page Not Found: Default/plugins
ERROR - 2019-10-03 09:42:22 --> 404 Page Not Found: Default/css
ERROR - 2019-10-03 10:19:59 --> Severity: error --> Exception: Call to undefined function checkattedancestatus() C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 155
ERROR - 2019-10-03 10:19:59 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:23:35 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:23:36 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:25:52 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:25:53 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:25:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'GROUP BY U.first_name' at line 1 - Invalid query: SELECT att.attendance_id as attendanceid,CONCAT(U.first_name, ' ', U.last_name) as firstlast,U.ProfileImage as ProfileImage,SUM(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS 'abc1',SUM(IF(DATE(att.attendance_date) ='2019-09-02',att.attendance_id,0)) AS 'abc2',SUM(IF(DATE(att.attendance_date) ='2019-09-03',att.attendance_id,0)) AS 'abc3',SUM(IF(DATE(att.attendance_date) ='2019-09-04',att.attendance_id,0)) AS 'abc4',SUM(IF(DATE(att.attendance_date) ='2019-09-05',att.attendance_id,0)) AS 'abc5',SUM(IF(DATE(att.attendance_date) ='2019-09-06',att.attendance_id,0)) AS 'abc6',SUM(IF(DATE(att.attendance_date) ='2019-09-07',att.attendance_id,0)) AS 'abc7',SUM(IF(DATE(att.attendance_date) ='2019-09-08',att.attendance_id,0)) AS 'abc8',SUM(IF(DATE(att.attendance_date) ='2019-09-09',att.attendance_id,0)) AS 'abc9',SUM(IF(DATE(att.attendance_date) ='2019-09-10',att.attendance_id,0)) AS 'abc10',SUM(IF(DATE(att.attendance_date) ='2019-09-11',att.attendance_id,0)) AS 'abc11',SUM(IF(DATE(att.attendance_date) ='2019-09-12',att.attendance_id,0)) AS 'abc12',SUM(IF(DATE(att.attendance_date) ='2019-09-13',att.attendance_id,0)) AS 'abc13',SUM(IF(DATE(att.attendance_date) ='2019-09-14',att.attendance_id,0)) AS 'abc14',SUM(IF(DATE(att.attendance_date) ='2019-09-15',att.attendance_id,0)) AS 'abc15',SUM(IF(DATE(att.attendance_date) ='2019-09-16',att.attendance_id,0)) AS 'abc16',SUM(IF(DATE(att.attendance_date) ='2019-09-17',att.attendance_id,0)) AS 'abc17',SUM(IF(DATE(att.attendance_date) ='2019-09-18',att.attendance_id,0)) AS 'abc18',SUM(IF(DATE(att.attendance_date) ='2019-09-19',att.attendance_id,0)) AS 'abc19',SUM(IF(DATE(att.attendance_date) ='2019-09-20',att.attendance_id,0)) AS 'abc20',SUM(IF(DATE(att.attendance_date) ='2019-09-21',att.attendance_id,0)) AS 'abc21',SUM(IF(DATE(att.attendance_date) ='2019-09-22',att.attendance_id,0)) AS 'abc22',SUM(IF(DATE(att.attendance_date) ='2019-09-23',att.attendance_id,0)) AS 'abc23',SUM(IF(DATE(att.attendance_date) ='2019-09-24',att.attendance_id,0)) AS 'abc24',SUM(IF(DATE(att.attendance_date) ='2019-09-25',att.attendance_id,0)) AS 'abc25',SUM(IF(DATE(att.attendance_date) ='2019-09-26',att.attendance_id,0)) AS 'abc26',SUM(IF(DATE(att.attendance_date) ='2019-09-27',att.attendance_id,0)) AS 'abc27',SUM(IF(DATE(att.attendance_date) ='2019-09-28',att.attendance_id,0)) AS 'abc28',SUM(IF(DATE(att.attendance_date) ='2019-09-29',att.attendance_id,0)) AS 'abc29',SUM(IF(DATE(att.attendance_date) ='2019-09-30',att.attendance_id,0)) AS 'abc30' FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id WHERE attendance_month LIKE '%2019-09%' and  GROUP BY U.first_name
ERROR - 2019-10-03 10:30:49 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:30:50 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:33:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'GROUP BY U.first_name' at line 1 - Invalid query: SELECT att.attendance_id as attendanceid,CONCAT(U.first_name, ' ', U.last_name) as firstlast,U.ProfileImage as ProfileImage,SUM(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS 'abc1',SUM(IF(DATE(att.attendance_date) ='2019-09-02',att.attendance_id,0)) AS 'abc2',SUM(IF(DATE(att.attendance_date) ='2019-09-03',att.attendance_id,0)) AS 'abc3',SUM(IF(DATE(att.attendance_date) ='2019-09-04',att.attendance_id,0)) AS 'abc4',SUM(IF(DATE(att.attendance_date) ='2019-09-05',att.attendance_id,0)) AS 'abc5',SUM(IF(DATE(att.attendance_date) ='2019-09-06',att.attendance_id,0)) AS 'abc6',SUM(IF(DATE(att.attendance_date) ='2019-09-07',att.attendance_id,0)) AS 'abc7',SUM(IF(DATE(att.attendance_date) ='2019-09-08',att.attendance_id,0)) AS 'abc8',SUM(IF(DATE(att.attendance_date) ='2019-09-09',att.attendance_id,0)) AS 'abc9',SUM(IF(DATE(att.attendance_date) ='2019-09-10',att.attendance_id,0)) AS 'abc10',SUM(IF(DATE(att.attendance_date) ='2019-09-11',att.attendance_id,0)) AS 'abc11',SUM(IF(DATE(att.attendance_date) ='2019-09-12',att.attendance_id,0)) AS 'abc12',SUM(IF(DATE(att.attendance_date) ='2019-09-13',att.attendance_id,0)) AS 'abc13',SUM(IF(DATE(att.attendance_date) ='2019-09-14',att.attendance_id,0)) AS 'abc14',SUM(IF(DATE(att.attendance_date) ='2019-09-15',att.attendance_id,0)) AS 'abc15',SUM(IF(DATE(att.attendance_date) ='2019-09-16',att.attendance_id,0)) AS 'abc16',SUM(IF(DATE(att.attendance_date) ='2019-09-17',att.attendance_id,0)) AS 'abc17',SUM(IF(DATE(att.attendance_date) ='2019-09-18',att.attendance_id,0)) AS 'abc18',SUM(IF(DATE(att.attendance_date) ='2019-09-19',att.attendance_id,0)) AS 'abc19',SUM(IF(DATE(att.attendance_date) ='2019-09-20',att.attendance_id,0)) AS 'abc20',SUM(IF(DATE(att.attendance_date) ='2019-09-21',att.attendance_id,0)) AS 'abc21',SUM(IF(DATE(att.attendance_date) ='2019-09-22',att.attendance_id,0)) AS 'abc22',SUM(IF(DATE(att.attendance_date) ='2019-09-23',att.attendance_id,0)) AS 'abc23',SUM(IF(DATE(att.attendance_date) ='2019-09-24',att.attendance_id,0)) AS 'abc24',SUM(IF(DATE(att.attendance_date) ='2019-09-25',att.attendance_id,0)) AS 'abc25',SUM(IF(DATE(att.attendance_date) ='2019-09-26',att.attendance_id,0)) AS 'abc26',SUM(IF(DATE(att.attendance_date) ='2019-09-27',att.attendance_id,0)) AS 'abc27',SUM(IF(DATE(att.attendance_date) ='2019-09-28',att.attendance_id,0)) AS 'abc28',SUM(IF(DATE(att.attendance_date) ='2019-09-29',att.attendance_id,0)) AS 'abc29',SUM(IF(DATE(att.attendance_date) ='2019-09-30',att.attendance_id,0)) AS 'abc30' FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id WHERE attendance_month LIKE '%2019-09%' and  GROUP BY U.first_name
ERROR - 2019-10-03 10:33:30 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:33:31 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:39:38 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:39:39 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:39:47 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:39:48 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:43:42 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:43:43 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:44:49 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:44:50 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:45:14 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:45:15 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:45:38 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:45:38 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:54:42 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:54:42 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:55:28 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 10:55:29 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 11:52:30 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 11:52:30 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 11:52:34 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 11:52:34 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 11:57:33 --> Query error: Unknown column 'att.companyid' in 'where clause' - Invalid query: SELECT att.attendance_id as attendanceid,CONCAT(U.first_name, ' ', U.last_name) as firstlast,U.ProfileImage as ProfileImage,SUM(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS 'abc1',SUM(IF(DATE(att.attendance_date) ='2019-09-02',att.attendance_id,0)) AS 'abc2',SUM(IF(DATE(att.attendance_date) ='2019-09-03',att.attendance_id,0)) AS 'abc3',SUM(IF(DATE(att.attendance_date) ='2019-09-04',att.attendance_id,0)) AS 'abc4',SUM(IF(DATE(att.attendance_date) ='2019-09-05',att.attendance_id,0)) AS 'abc5',SUM(IF(DATE(att.attendance_date) ='2019-09-06',att.attendance_id,0)) AS 'abc6',SUM(IF(DATE(att.attendance_date) ='2019-09-07',att.attendance_id,0)) AS 'abc7',SUM(IF(DATE(att.attendance_date) ='2019-09-08',att.attendance_id,0)) AS 'abc8',SUM(IF(DATE(att.attendance_date) ='2019-09-09',att.attendance_id,0)) AS 'abc9',SUM(IF(DATE(att.attendance_date) ='2019-09-10',att.attendance_id,0)) AS 'abc10',SUM(IF(DATE(att.attendance_date) ='2019-09-11',att.attendance_id,0)) AS 'abc11',SUM(IF(DATE(att.attendance_date) ='2019-09-12',att.attendance_id,0)) AS 'abc12',SUM(IF(DATE(att.attendance_date) ='2019-09-13',att.attendance_id,0)) AS 'abc13',SUM(IF(DATE(att.attendance_date) ='2019-09-14',att.attendance_id,0)) AS 'abc14',SUM(IF(DATE(att.attendance_date) ='2019-09-15',att.attendance_id,0)) AS 'abc15',SUM(IF(DATE(att.attendance_date) ='2019-09-16',att.attendance_id,0)) AS 'abc16',SUM(IF(DATE(att.attendance_date) ='2019-09-17',att.attendance_id,0)) AS 'abc17',SUM(IF(DATE(att.attendance_date) ='2019-09-18',att.attendance_id,0)) AS 'abc18',SUM(IF(DATE(att.attendance_date) ='2019-09-19',att.attendance_id,0)) AS 'abc19',SUM(IF(DATE(att.attendance_date) ='2019-09-20',att.attendance_id,0)) AS 'abc20',SUM(IF(DATE(att.attendance_date) ='2019-09-21',att.attendance_id,0)) AS 'abc21',SUM(IF(DATE(att.attendance_date) ='2019-09-22',att.attendance_id,0)) AS 'abc22',SUM(IF(DATE(att.attendance_date) ='2019-09-23',att.attendance_id,0)) AS 'abc23',SUM(IF(DATE(att.attendance_date) ='2019-09-24',att.attendance_id,0)) AS 'abc24',SUM(IF(DATE(att.attendance_date) ='2019-09-25',att.attendance_id,0)) AS 'abc25',SUM(IF(DATE(att.attendance_date) ='2019-09-26',att.attendance_id,0)) AS 'abc26',SUM(IF(DATE(att.attendance_date) ='2019-09-27',att.attendance_id,0)) AS 'abc27',SUM(IF(DATE(att.attendance_date) ='2019-09-28',att.attendance_id,0)) AS 'abc28',SUM(IF(DATE(att.attendance_date) ='2019-09-29',att.attendance_id,0)) AS 'abc29',SUM(IF(DATE(att.attendance_date) ='2019-09-30',att.attendance_id,0)) AS 'abc30' FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id LEFT JOIN tblcompany C ON C.companyid = att.company_id WHERE attendance_month LIKE '%2019-09%' and  att.companyid = 1 GROUP BY U.first_name
ERROR - 2019-10-03 11:57:54 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 11:57:55 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:06:28 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-03 12:06:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 70
ERROR - 2019-10-03 12:06:30 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-03 12:06:30 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-03 12:06:30 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-03 12:06:31 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-03 12:06:35 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:06:35 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:28:24 --> Severity: Warning --> Use of undefined constant ACTIVE - assumed 'ACTIVE' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\payroll\admin\application\controllers\Hr.php 431
ERROR - 2019-10-03 12:28:27 --> Severity: Warning --> Use of undefined constant ACTIVE - assumed 'ACTIVE' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\payroll\admin\application\controllers\Hr.php 447
ERROR - 2019-10-03 12:28:29 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 229
ERROR - 2019-10-03 12:28:29 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 249
ERROR - 2019-10-03 12:28:29 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 229
ERROR - 2019-10-03 12:28:29 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 249
ERROR - 2019-10-03 12:29:16 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 229
ERROR - 2019-10-03 12:29:16 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 249
ERROR - 2019-10-03 12:29:16 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 229
ERROR - 2019-10-03 12:29:16 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 249
ERROR - 2019-10-03 12:29:46 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:29:46 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:33:05 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:33:05 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:38:41 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:38:42 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:41:33 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:41:33 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:41:36 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:41:37 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:41:40 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:41:40 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:42:05 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:42:05 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:42:07 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:42:07 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 12:42:45 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 229
ERROR - 2019-10-03 12:42:45 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 249
ERROR - 2019-10-03 12:42:45 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 229
ERROR - 2019-10-03 12:42:45 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 249
ERROR - 2019-10-03 13:48:56 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 229
ERROR - 2019-10-03 13:48:56 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 249
ERROR - 2019-10-03 13:48:56 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 229
ERROR - 2019-10-03 13:48:56 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 249
ERROR - 2019-10-03 13:50:09 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 229
ERROR - 2019-10-03 13:50:09 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 249
ERROR - 2019-10-03 13:50:09 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 229
ERROR - 2019-10-03 13:50:09 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 249
ERROR - 2019-10-03 13:51:03 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 249
ERROR - 2019-10-03 13:51:03 --> Severity: Notice --> Undefined property: stdClass::$IsActive C:\xampp\htdocs\payroll\admin\application\views\Company\companytypelist.php 249
ERROR - 2019-10-03 13:53:39 --> Severity: Warning --> Use of undefined constant ACTIVE - assumed 'ACTIVE' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 1049
ERROR - 2019-10-03 13:53:41 --> Severity: Warning --> Use of undefined constant ACTIVE - assumed 'ACTIVE' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 1033
ERROR - 2019-10-03 13:59:49 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 13:59:54 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:00:01 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:00:06 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:00:48 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:00:50 --> 404 Page Not Found: Default/js
ERROR - 2019-10-03 14:00:50 --> 404 Page Not Found: Default/plugins
ERROR - 2019-10-03 14:00:50 --> 404 Page Not Found: Default/js
ERROR - 2019-10-03 14:00:51 --> 404 Page Not Found: Default/css
ERROR - 2019-10-03 14:03:51 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:04:50 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:04:55 --> Query error: Column 'isactive' cannot be null - Invalid query: INSERT INTO `tblcompanytype` (`companytype`, `isactive`, `createdby`, `createdon`) VALUES ('factory', NULL, 1, '2019-10-03 02:04:55')
ERROR - 2019-10-03 14:06:07 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:06:14 --> Query error: Column 'isactive' cannot be null - Invalid query: INSERT INTO `tblcompanytype` (`companytype`, `isactive`, `createdby`, `createdon`) VALUES ('factorysss', NULL, 1, '2019-10-03 02:06:14')
ERROR - 2019-10-03 14:07:13 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:07:28 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:07:33 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:07:40 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:07:45 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:07:52 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:14:58 --> 404 Page Not Found: Company/statusdata_type
ERROR - 2019-10-03 14:14:58 --> 404 Page Not Found: Company/statusdata_type
ERROR - 2019-10-03 14:29:48 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:29:56 --> Severity: Notice --> Undefined index: IsActive C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 953
ERROR - 2019-10-03 14:29:59 --> 404 Page Not Found: Default/js
ERROR - 2019-10-03 14:29:59 --> 404 Page Not Found: Default/js
ERROR - 2019-10-03 14:29:59 --> 404 Page Not Found: Default/css
ERROR - 2019-10-03 14:29:59 --> 404 Page Not Found: Default/plugins
ERROR - 2019-10-03 14:30:16 --> 404 Page Not Found: Company/statusdata_type
ERROR - 2019-10-03 14:31:48 --> Severity: Warning --> Use of undefined constant ACTIVE - assumed 'ACTIVE' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 1033
ERROR - 2019-10-03 14:31:48 --> Severity: Warning --> Use of undefined constant ACTIVE - assumed 'ACTIVE' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 1049
ERROR - 2019-10-03 14:31:48 --> Severity: Warning --> Use of undefined constant ACTIVE - assumed 'ACTIVE' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 1033
ERROR - 2019-10-03 14:31:48 --> Severity: Warning --> Use of undefined constant ACTIVE - assumed 'ACTIVE' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 1049
ERROR - 2019-10-03 14:31:51 --> Severity: Warning --> Use of undefined constant ACTIVE - assumed 'ACTIVE' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 1049
ERROR - 2019-10-03 14:32:00 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 14:32:00 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 14:32:12 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 14:32:13 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 14:35:43 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 14:35:44 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 14:38:44 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 14:38:44 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 14:38:46 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 14:38:47 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 14:42:14 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 14:42:15 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 14:49:34 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-03 14:49:34 --> 404 Page Not Found: Upload/no_image
