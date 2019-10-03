ERROR - 2019-10-02 08:58:41 --> Severity: error --> Exception: Unable to locate the model you have specified: Attendance_model C:\xampp\htdocs\payroll\admin\system\core\Loader.php 348
ERROR - 2019-10-02 08:58:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-02 08:58:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-02 08:58:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-02 08:58:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-02 08:58:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-02 08:58:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-02 08:58:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-02 08:58:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-02 08:58:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-02 09:33:25 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 09:33:26 --> 404 Page Not Found: Default/plugins
ERROR - 2019-10-02 09:33:26 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 09:33:26 --> 404 Page Not Found: Default/css
ERROR - 2019-10-02 09:35:35 --> Query error: FUNCTION c.companyidSUM does not exist - Invalid query: SELECT  C.companyname, C.companyidSUM(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS 'abc1',SUM(IF(DATE(att.attendance_date) ='2019-09-02',att.attendance_id,0)) AS 'abc2',SUM(IF(DATE(att.attendance_date) ='2019-09-03',att.attendance_id,0)) AS 'abc3',SUM(IF(DATE(att.attendance_date) ='2019-09-04',att.attendance_id,0)) AS 'abc4',SUM(IF(DATE(att.attendance_date) ='2019-09-05',att.attendance_id,0)) AS 'abc5',SUM(IF(DATE(att.attendance_date) ='2019-09-06',att.attendance_id,0)) AS 'abc6',SUM(IF(DATE(att.attendance_date) ='2019-09-07',att.attendance_id,0)) AS 'abc7',SUM(IF(DATE(att.attendance_date) ='2019-09-08',att.attendance_id,0)) AS 'abc8',SUM(IF(DATE(att.attendance_date) ='2019-09-09',att.attendance_id,0)) AS 'abc9',SUM(IF(DATE(att.attendance_date) ='2019-09-10',att.attendance_id,0)) AS 'abc10',SUM(IF(DATE(att.attendance_date) ='2019-09-11',att.attendance_id,0)) AS 'abc11',SUM(IF(DATE(att.attendance_date) ='2019-09-12',att.attendance_id,0)) AS 'abc12',SUM(IF(DATE(att.attendance_date) ='2019-09-13',att.attendance_id,0)) AS 'abc13',SUM(IF(DATE(att.attendance_date) ='2019-09-14',att.attendance_id,0)) AS 'abc14',SUM(IF(DATE(att.attendance_date) ='2019-09-15',att.attendance_id,0)) AS 'abc15',SUM(IF(DATE(att.attendance_date) ='2019-09-16',att.attendance_id,0)) AS 'abc16',SUM(IF(DATE(att.attendance_date) ='2019-09-17',att.attendance_id,0)) AS 'abc17',SUM(IF(DATE(att.attendance_date) ='2019-09-18',att.attendance_id,0)) AS 'abc18',SUM(IF(DATE(att.attendance_date) ='2019-09-19',att.attendance_id,0)) AS 'abc19',SUM(IF(DATE(att.attendance_date) ='2019-09-20',att.attendance_id,0)) AS 'abc20',SUM(IF(DATE(att.attendance_date) ='2019-09-21',att.attendance_id,0)) AS 'abc21',SUM(IF(DATE(att.attendance_date) ='2019-09-22',att.attendance_id,0)) AS 'abc22',SUM(IF(DATE(att.attendance_date) ='2019-09-23',att.attendance_id,0)) AS 'abc23',SUM(IF(DATE(att.attendance_date) ='2019-09-24',att.attendance_id,0)) AS 'abc24',SUM(IF(DATE(att.attendance_date) ='2019-09-25',att.attendance_id,0)) AS 'abc25',SUM(IF(DATE(att.attendance_date) ='2019-09-26',att.attendance_id,0)) AS 'abc26',SUM(IF(DATE(att.attendance_date) ='2019-09-27',att.attendance_id,0)) AS 'abc27',SUM(IF(DATE(att.attendance_date) ='2019-09-28',att.attendance_id,0)) AS 'abc28',SUM(IF(DATE(att.attendance_date) ='2019-09-29',att.attendance_id,0)) AS 'abc29',SUM(IF(DATE(att.attendance_date) ='2019-09-30',att.attendance_id,0)) AS 'abc30'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id LEFT JOIN tblcompany C  ON C.companyid = att.company_id      WHERE YEAR(attendance_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(attendance_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) GROUP BY C.companyname ORDER BY  att.attendance_id DESC
ERROR - 2019-10-02 09:37:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'att  LEFT JOIN tblcompany C  ON C.companyid = att.company_id      GROUP BY C.com' at line 1 - Invalid query: SELECT  C.companyname, C.companyidFROM tblattendance att  LEFT JOIN tblcompany C  ON C.companyid = att.company_id      GROUP BY C.companyname ORDER BY  att.attendance_id DESC
ERROR - 2019-10-02 09:38:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'C  LEFT JOIN tblattendance att  ON C.companyid = att.company_id      GROUP BY C.' at line 1 - Invalid query: SELECT  C.companyname, C.companyidFROM tblcompany C  LEFT JOIN tblattendance att  ON C.companyid = att.company_id      GROUP BY C.companyname ORDER BY  att.attendance_id DESC
ERROR - 2019-10-02 10:53:38 --> 404 Page Not Found: Attance/attandance_list
ERROR - 2019-10-02 11:04:16 --> 404 Page Not Found: Attance/attandance_list
ERROR - 2019-10-02 11:04:51 --> 404 Page Not Found: Attance/attandance_list
ERROR - 2019-10-02 11:04:56 --> 404 Page Not Found: Attance/attandance_list
ERROR - 2019-10-02 11:05:14 --> 404 Page Not Found: Attance/attandance_list
ERROR - 2019-10-02 11:05:15 --> 404 Page Not Found: Attance/attandance_list
ERROR - 2019-10-02 11:05:16 --> 404 Page Not Found: Attance/attandance_list
ERROR - 2019-10-02 11:05:16 --> 404 Page Not Found: Attance/attandance_list
ERROR - 2019-10-02 11:05:20 --> 404 Page Not Found: Attance/attandance_list
ERROR - 2019-10-02 11:05:44 --> 404 Page Not Found: Attance/attandance_list
ERROR - 2019-10-02 11:05:47 --> 404 Page Not Found: Attance/attandance_list
ERROR - 2019-10-02 11:06:15 --> 404 Page Not Found: Attance/attandance_list
ERROR - 2019-10-02 11:07:21 --> Severity: Notice --> Undefined variable: empname C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 39
ERROR - 2019-10-02 11:07:21 --> Severity: error --> Exception: Call to undefined function checkattedancestatus() C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 153
ERROR - 2019-10-02 11:07:21 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:08:46 --> Severity: Notice --> Undefined variable: empname C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 39
ERROR - 2019-10-02 11:08:57 --> Severity: Notice --> Undefined variable: empname C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 39
ERROR - 2019-10-02 11:11:00 --> Severity: error --> Exception: Call to undefined function checkattedancestatus() C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 154
ERROR - 2019-10-02 11:11:00 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:20:00 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:20:18 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:22:04 --> Severity: error --> Exception: Call to undefined function checkattedancestatus() C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 155
ERROR - 2019-10-02 11:22:04 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:25:48 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:25:50 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:26:02 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:26:02 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 11:26:02 --> 404 Page Not Found: Default/plugins
ERROR - 2019-10-02 11:26:02 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 11:26:02 --> 404 Page Not Found: Default/css
ERROR - 2019-10-02 11:26:12 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:26:52 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:26:52 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:27:44 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:27:44 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:31:40 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:31:41 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:31:57 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:31:57 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:32:06 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:32:06 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:32:41 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:32:42 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:32:45 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:32:45 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:33:01 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:33:01 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 11:33:01 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 11:33:01 --> 404 Page Not Found: Default/css
ERROR - 2019-10-02 11:33:01 --> 404 Page Not Found: Default/plugins
ERROR - 2019-10-02 11:34:07 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:08 --> 404 Page Not Found: Default/css
ERROR - 2019-10-02 11:34:08 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 11:34:08 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 11:34:08 --> 404 Page Not Found: Default/plugins
ERROR - 2019-10-02 11:34:08 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:10 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:12 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:13 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:17 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:17 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:20 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:21 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:27 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:27 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:54 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:55 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:58 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:34:58 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:46:40 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:46:40 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:46:58 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:46:58 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:47:04 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:47:04 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:47:12 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 11:47:12 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 13:11:00 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 13:11:00 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 13:17:41 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 13:17:41 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 13:17:41 --> 404 Page Not Found: Default/css
ERROR - 2019-10-02 13:23:41 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file C:\xampp\htdocs\payroll\admin\application\models\attendance_model.php 58
ERROR - 2019-10-02 13:24:02 --> Severity: Notice --> Undefined variable: attmonth C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance.php 46
ERROR - 2019-10-02 13:24:14 --> Severity: Notice --> Undefined variable: attmonth C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance.php 46
ERROR - 2019-10-02 13:24:19 --> Severity: Notice --> Undefined variable: attmonth C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance.php 46
ERROR - 2019-10-02 13:24:24 --> Severity: Notice --> Undefined variable: attmonth C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance.php 46
ERROR - 2019-10-02 13:24:39 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 13:24:40 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 13:25:19 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 13:25:19 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 13:30:15 --> Severity: Notice --> Undefined variable: attmonth C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance.php 46
ERROR - 2019-10-02 13:38:55 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 13:38:55 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 13:42:56 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 13:42:57 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 13:42:57 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 13:43:21 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 13:43:22 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 13:43:22 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:00:54 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 14:00:54 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:00:54 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:02:57 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 14:02:58 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:02:58 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:03:39 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 14:03:40 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:03:40 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:04:45 --> Severity: Notice --> Undefined variable: sid C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 14:04:46 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:04:46 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:04:56 --> Severity: Notice --> Undefined variable: sid C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 14:04:56 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:04:57 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:05:17 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:05:17 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:05:22 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:05:22 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 14:05:22 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 14:05:22 --> 404 Page Not Found: Default/plugins
ERROR - 2019-10-02 14:05:22 --> 404 Page Not Found: Default/css
ERROR - 2019-10-02 14:05:46 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:05:49 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:05:49 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 14:05:49 --> 404 Page Not Found: Default/js
ERROR - 2019-10-02 14:05:49 --> 404 Page Not Found: Default/css
ERROR - 2019-10-02 14:05:49 --> 404 Page Not Found: Default/plugins
ERROR - 2019-10-02 14:06:04 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:06:46 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:06:46 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:06:50 --> Severity: Notice --> Undefined variable: sid C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 14:07:56 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:07:56 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:07:59 --> Severity: Notice --> Undefined variable: sid C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 14:08:22 --> Severity: Notice --> Undefined variable: attmonth C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance.php 46
ERROR - 2019-10-02 14:08:28 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:08:29 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:12:30 --> Severity: Notice --> Undefined variable: sid C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 14:12:42 --> Severity: Notice --> Undefined variable: sid C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 14:12:50 --> Severity: Notice --> Undefined variable: sid C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 14:13:46 --> Severity: Notice --> Undefined variable: sid C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 14:14:20 --> Severity: Notice --> Undefined variable: sid C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 14:16:02 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:16:02 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:24:02 --> Severity: Notice --> Undefined variable: sid C:\xampp\htdocs\payroll\admin\application\views\Attendance\attendance_list.php 34
ERROR - 2019-10-02 14:24:02 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:24:03 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:24:39 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:24:39 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:24:46 --> 404 Page Not Found: Attendance/attandance_list2
ERROR - 2019-10-02 14:24:52 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:24:52 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:25:24 --> Severity: error --> Exception: syntax error, unexpected '.' C:\xampp\htdocs\payroll\admin\application\controllers\Attendance.php 104
ERROR - 2019-10-02 14:25:37 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:25:38 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:25:42 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:25:42 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:29:40 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:29:40 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:29:47 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:29:47 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:29:54 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:29:55 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:30:01 --> 404 Page Not Found: Upload/no_image
ERROR - 2019-10-02 14:30:01 --> 404 Page Not Found: Upload/no_image
