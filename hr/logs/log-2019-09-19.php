<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-19 06:51:47 --> 404 Page Not Found: Assets/img
ERROR - 2019-09-19 06:56:44 --> 404 Page Not Found: Home/assets
ERROR - 2019-09-19 06:56:44 --> 404 Page Not Found: Home/assets
ERROR - 2019-09-19 06:56:44 --> 404 Page Not Found: Home/assets
ERROR - 2019-09-19 06:56:44 --> 404 Page Not Found: Home/assets
ERROR - 2019-09-19 06:56:45 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 06:57:07 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 06:57:07 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 06:57:07 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 06:57:07 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 06:57:07 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 06:57:07 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 06:57:07 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 06:57:07 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 06:57:07 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:10:43 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:10:43 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:10:43 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:10:43 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:10:43 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:10:43 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:10:43 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:10:43 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:10:43 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:23:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:23:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:23:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:23:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:23:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:23:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:23:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:23:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:23:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:23:27 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 07:23:27 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 07:23:27 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 07:23:27 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 07:30:44 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:30:44 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:30:44 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:30:44 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:30:44 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:30:44 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:30:44 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:30:44 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:30:44 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:30:45 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 07:30:45 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 07:30:45 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 07:30:45 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 07:30:45 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 07:48:19 --> Severity: Notice --> Undefined property: Attendance::$employee_model C:\xampp\htdocs\payroll\hr\application\controllers\Attendance.php 18
ERROR - 2019-09-19 07:48:19 --> Severity: error --> Exception: Call to a member function attendancelist() on null C:\xampp\htdocs\payroll\hr\application\controllers\Attendance.php 18
ERROR - 2019-09-19 07:48:26 --> Query error: Unknown column 'U.user_id' in 'field list' - Invalid query: SELECT U.user_id as user_id,U.email as email ,U.full_name AS full_name, 
		SUM( CASE WHEN MONTH( att.attendance_month ) =1 THEN 1 ELSE 0 END ) AS january,
		SUM( CASE WHEN MONTH( att.attendance_month ) =2 THEN 1 ELSE 0 END ) AS february,
		SUM( CASE WHEN MONTH( att.attendance_month ) =3 THEN 1 ELSE 0 END ) AS march,
		SUM( CASE WHEN MONTH( att.attendance_month ) =4 THEN 1 ELSE 0 END ) AS april,
		SUM( CASE WHEN MONTH( att.attendance_month ) =5 THEN 1 ELSE 0 END ) AS may,
		SUM( CASE WHEN MONTH( att.attendance_month ) =6 THEN 1 ELSE 0 END ) AS june,
		SUM( CASE WHEN MONTH( att.attendance_month ) =7 THEN 1 ELSE 0 END ) AS july,
		SUM( CASE WHEN MONTH( att.attendance_month ) =8 THEN 1 ELSE 0 END ) AS august,
		SUM( CASE WHEN MONTH( att.attendance_month ) =9 THEN 1 ELSE 0 END ) AS september,
		SUM( CASE WHEN MONTH( att.attendance_month ) =10 THEN 1 ELSE 0 END ) AS october, 
		SUM( CASE WHEN MONTH( att.attendance_month ) =11 THEN 1 ELSE 0 END ) AS november,
		SUM( CASE WHEN MONTH( att.attendance_month ) =12 THEN 1 ELSE 0 END ) AS december
		FROM tblattendance att JOIN tblemp U ON U.emp_id = O.emp_id 
		WHERE att.attendance_month >= CURDATE( ) - INTERVAL 12 MONTH 
ERROR - 2019-09-19 07:51:54 --> Query error: Unknown column 'O.emp_id' in 'on clause' - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name, 
		SUM( CASE WHEN MONTH( att.attendance_month ) =1 THEN 1 ELSE 0 END ) AS '1',
		SUM( CASE WHEN MONTH( att.attendance_month ) =2 THEN 1 ELSE 0 END ) AS '2',
		SUM( CASE WHEN MONTH( att.attendance_month ) =3 THEN 1 ELSE 0 END ) AS '3',
		SUM( CASE WHEN MONTH( att.attendance_month ) =4 THEN 1 ELSE 0 END ) AS '4',
		SUM( CASE WHEN MONTH( att.attendance_month ) =5 THEN 1 ELSE 0 END ) AS '5',
		SUM( CASE WHEN MONTH( att.attendance_month ) =6 THEN 1 ELSE 0 END ) AS '6',
		SUM( CASE WHEN MONTH( att.attendance_month ) =7 THEN 1 ELSE 0 END ) AS '7',
		SUM( CASE WHEN MONTH( att.attendance_month ) =8 THEN 1 ELSE 0 END ) AS '8',
		SUM( CASE WHEN MONTH( att.attendance_month ) =9 THEN 1 ELSE 0 END ) AS '9',
		SUM( CASE WHEN MONTH( att.attendance_month ) =10 THEN 1 ELSE 0 END ) AS '10'		
		FROM tblattendance att JOIN tblemp U ON U.emp_id = O.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE())AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 07:52:54 --> Query error: Unknown column 'O.emp_id' in 'on clause' - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name, 
		SUM( CASE WHEN MONTH( att.attendance_date ) =1 THEN 1 ELSE 0 END ) AS '1',
		SUM( CASE WHEN MONTH( att.attendance_date ) =2 THEN 1 ELSE 0 END ) AS '2',
		SUM( CASE WHEN MONTH( att.attendance_date ) =3 THEN 1 ELSE 0 END ) AS '3',
		SUM( CASE WHEN MONTH( att.attendance_date ) =4 THEN 1 ELSE 0 END ) AS '4',
		SUM( CASE WHEN MONTH( att.attendance_date ) =5 THEN 1 ELSE 0 END ) AS '5',
		SUM( CASE WHEN MONTH( att.attendance_date ) =6 THEN 1 ELSE 0 END ) AS '6',
		SUM( CASE WHEN MONTH( att.attendance_date ) =7 THEN 1 ELSE 0 END ) AS '7',
		SUM( CASE WHEN MONTH( att.attendance_date ) =8 THEN 1 ELSE 0 END ) AS '8',
		SUM( CASE WHEN MONTH( att.attendance_date ) =9 THEN 1 ELSE 0 END ) AS '9',
		SUM( CASE WHEN MONTH( att.attendance_date ) =10 THEN 1 ELSE 0 END ) AS '10'		
		FROM tblattendance att JOIN tblemp U ON U.emp_id = O.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE())AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 07:54:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(at' at line 12 - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name, 
		SUM( CASE WHEN MONTH( att.attendance_date ) ='2019-09-01' THEN 1 ELSE 0 END ) AS '1',
		-- SUM( CASE WHEN MONTH( att.attendance_date ) =2 THEN 1 ELSE 0 END ) AS '2',
		-- SUM( CASE WHEN MONTH( att.attendance_date ) =3 THEN 1 ELSE 0 END ) AS '3',
		-- SUM( CASE WHEN MONTH( att.attendance_date ) =4 THEN 1 ELSE 0 END ) AS '4',
		-- SUM( CASE WHEN MONTH( att.attendance_date ) =5 THEN 1 ELSE 0 END ) AS '5',
		-- SUM( CASE WHEN MONTH( att.attendance_date ) =6 THEN 1 ELSE 0 END ) AS '6',
		-- SUM( CASE WHEN MONTH( att.attendance_date ) =7 THEN 1 ELSE 0 END ) AS '7',
		-- SUM( CASE WHEN MONTH( att.attendance_date ) =8 THEN 1 ELSE 0 END ) AS '8',
		-- SUM( CASE WHEN MONTH( att.attendance_date ) =9 THEN 1 ELSE 0 END ) AS '9',
		-- SUM( CASE WHEN MONTH( att.attendance_date ) =10 THEN 1 ELSE 0 END ) AS '10'		
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE())AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 07:56:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:56:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:56:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:56:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:56:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:56:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:56:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:56:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:56:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 07:56:10 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 08:02:55 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ',' or ';' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 23
ERROR - 2019-09-19 08:03:04 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ',' or ';' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 22
ERROR - 2019-09-19 08:04:39 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 23
ERROR - 2019-09-19 08:04:47 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 23
ERROR - 2019-09-19 08:13:30 --> Severity: error --> Exception: syntax error, unexpected '$monthdate' (T_VARIABLE), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 22
ERROR - 2019-09-19 08:13:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SUM(CASE WHEN MONTH(att.attendance_date) =2019-09-01 THEN 1 ELSE 0 END ) AS '1'' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as Email ,U.first_name AS firstname,att.attendance_status as attendancestatus 
		SUM(CASE WHEN MONTH(att.attendance_date) =2019-09-01 THEN 1 ELSE 0 END ) AS '1'
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE())AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 08:14:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SUM(CASE WHEN MONTH(att.attendance_date) =2019-09-01 THEN 1 ELSE 0 END ) AS '1'' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as Email ,U.first_name AS firstname,att.attendance_status as attendancestatus 
		SUM(CASE WHEN MONTH(att.attendance_date) =2019-09-01 THEN 1 ELSE 0 END ) AS '1'
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE())AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 08:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SUM(CASE WHEN MONTH(att.attendance_date) =$monthdate THEN 1 ELSE 0 END ) AS '1'' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as Email ,U.first_name AS firstname,att.attendance_status as attendancestatus 
		SUM(CASE WHEN MONTH(att.attendance_date) =$monthdate THEN 1 ELSE 0 END ) AS '1'
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE())AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 08:15:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SUM(CASE WHEN MONTH(att.attendance_date) =2019-09-01 THEN 1 ELSE 0 END ) AS '1'' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as Email ,U.first_name AS firstname,att.attendance_status as attendancestatus 
		SUM(CASE WHEN MONTH(att.attendance_date) =2019-09-01 THEN 1 ELSE 0 END ) AS '1'
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE())AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 08:15:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SUM(CASE WHEN MONTH(att.attendance_date) =2019-09-01 THEN 1 ELSE 0 END ) AS 1
	' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as Email ,U.first_name AS firstname,att.attendance_status as attendancestatus 
		SUM(CASE WHEN MONTH(att.attendance_date) =2019-09-01 THEN 1 ELSE 0 END ) AS 1
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE())AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 08:15:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '1
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHER' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as Email ,U.first_name AS firstname,att.attendance_status as attendancestatus, 
		SUM(CASE WHEN MONTH(att.attendance_date) =2019-09-01 THEN 1 ELSE 0 END ) AS 1
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE())AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 08:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') , 0 )  AS '1'
		
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = a' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name, 
		       IF(MONTH(att.attendance_date) =2019-09-01,1) , 0 )  AS '1'
		
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE()) AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 08:32:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(at' at line 5 - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name, 
		       IF(MONTH(att.attendance_date) =2019-09-01,1 , 0 )  AS '1',
	
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE()) AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 08:32:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IF(MONTH(att.attendance_date) =2019-09-01,1 , 0 )  AS '1',
	
			
		FROM tblat' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name 
		       IF(MONTH(att.attendance_date) =2019-09-01,1 , 0 )  AS '1',
	
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE()) AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 08:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IF(MONTH(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1',
	
			
		FROM tbl' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name 
		       IF(MONTH(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1',
	
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE()) AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 08:33:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1',
	
			
		FROM tbla' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name 
		       IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1',
	
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE()) AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 08:33:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1'
	
			
		FROM tblat' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name 
		       IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1'
	
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE()) AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 08:33:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1'
	
			
		FROM tblat' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name 
		       IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1'
	
			
		FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
		WHERE MONTH(att.attendance_month) = MONTH(CURRENT_DATE()) AND YEAR(att.attendance_month) = YEAR(CURRENT_DATE())
ERROR - 2019-09-19 08:39:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1'			
				FROM tblatten' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name 
		       IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1'			
				FROM tblattendance att JOIN tblemp U ON U.emp_id = att.emp_id 
				
ERROR - 2019-09-19 08:40:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1'			
				FROM tblatten' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name 
		       IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1'			
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id 
				
ERROR - 2019-09-19 08:40:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1',			
				FROM tblatte' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name 
		       IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 )  AS '1',			
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id 
				
ERROR - 2019-09-19 08:41:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 ) AS '1',			
				FROM tblatten' at line 2 - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name 
		       IF(DATE(att.attendance_date) ='2019-09-01',1 , 0 ) AS '1',			
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id
ERROR - 2019-09-19 08:43:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id' at line 3 - Invalid query: SELECT U.emp_id as emp_id,U.email as email ,U.first_name AS first_name, 
		       IF(DATE(att.attendance_date) ='2019-09-01',1,0) AS '1',			
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id
ERROR - 2019-09-19 08:48:25 --> Severity: error --> Exception: syntax error, unexpected 'WHERE' (T_STRING), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 24
ERROR - 2019-09-19 08:48:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'GROUP BY U.first_name' at line 4 - Invalid query: SELECT att.attendance_id as attendanceid,U.email as email ,U.first_name AS first_name, 
		       IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0) AS '1',
		        IF(DATE(att.attendance_date) ='2019-09-02',1,0) AS '2'			
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id WHERE GROUP BY U.first_name
ERROR - 2019-09-19 08:53:39 --> Severity: error --> Exception: syntax error, unexpected '$monthdate' (T_VARIABLE), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 15
ERROR - 2019-09-19 08:53:52 --> Severity: error --> Exception: syntax error, unexpected '$monthdate' (T_VARIABLE), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 15
ERROR - 2019-09-19 08:54:02 --> Severity: error --> Exception: syntax error, unexpected 'for' (T_FOR), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 16
ERROR - 2019-09-19 09:04:54 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 09:04:54 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 09:04:54 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 09:04:54 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 09:04:54 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 09:04:54 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 09:04:54 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 09:04:54 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 09:04:54 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 09:04:54 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 09:28:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.f' at line 6 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name, 
		       IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0) AS '1',
		       IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_status,0) AS 'status',
		       IF(DATE(att.attendance_date) ='2019-09-02',att.attendance_id,0) AS '2',
		       IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_status,0) AS 'status',			
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 10:25:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.f' at line 6 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name, 
		       SUM(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS '1',
		       IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_status,0) AS 'status',
		        SUM(IF(DATE(att.attendance_date) ='2019-09-02',att.attendance_id,0)) AS '2',
		        IF(DATE(att.attendance_date) ='2019-09-02',att.attendance_status,0) AS 'status',			
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 10:33:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.f' at line 6 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name, 
		       SUM(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS '1',
		    
		        SUM(IF(DATE(att.attendance_date) ='2019-09-02',att.attendance_id,0)) AS '2',
		       		
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 10:36:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.f' at line 6 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name, 
		       SUM(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS '1',
		    
		       
		       		
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 10:40:06 --> Severity: error --> Exception: syntax error, unexpected '$monthdate' (T_VARIABLE), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 15
ERROR - 2019-09-19 10:40:16 --> Severity: error --> Exception: syntax error, unexpected 'for' (T_FOR), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:40:27 --> Severity: error --> Exception: syntax error, unexpected 'for' (T_FOR) C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:40:55 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:40:55 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:40:55 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:40:55 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 18
ERROR - 2019-09-19 10:40:55 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 19
ERROR - 2019-09-19 10:40:55 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 19
ERROR - 2019-09-19 10:40:55 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 21
ERROR - 2019-09-19 10:40:55 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 21
ERROR - 2019-09-19 10:40:55 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 24
ERROR - 2019-09-19 10:40:55 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 24
ERROR - 2019-09-19 10:40:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'for(=1;<=2;++){
		       	if(<=9){
		       		 Array= date('Y-m-'.'0'.);
		  ' at line 4 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name, 
		
      
	        for(=1;<=2;++){
		       	if(<=9){
		       		 Array= date('Y-m-'.'0'.);
		       	}else{
		       		Array= date('Y-m-'.);
		       	}
		       
		       SUM(IF(DATE(att.attendance_date) ='Array',att.attendance_id,0)) AS ''
		    
		        
		       }
          FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 10:40:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\payroll\hr\system\core\Exceptions.php:271) C:\xampp\htdocs\payroll\hr\system\core\Common.php 570
ERROR - 2019-09-19 10:42:00 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 29
ERROR - 2019-09-19 10:42:08 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 29
ERROR - 2019-09-19 10:42:16 --> Severity: error --> Exception: syntax error, unexpected 'die' (T_EXIT), expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 31
ERROR - 2019-09-19 10:42:30 --> Severity: error --> Exception: syntax error, unexpected 'for' (T_FOR) C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:42:35 --> Severity: error --> Exception: syntax error, unexpected 'for' (T_FOR), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:43:07 --> Severity: error --> Exception: syntax error, unexpected 'for' (T_FOR), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:43:39 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:43:39 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:43:39 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:43:39 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 18
ERROR - 2019-09-19 10:43:39 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 19
ERROR - 2019-09-19 10:43:39 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 19
ERROR - 2019-09-19 10:43:39 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 21
ERROR - 2019-09-19 10:43:39 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 21
ERROR - 2019-09-19 10:43:39 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 25
ERROR - 2019-09-19 10:43:39 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 25
ERROR - 2019-09-19 10:43:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'for(=1;<=2;++){
		       	if(<=9){
		       		 Array= date('Y-m-'.'0'.);
		  ' at line 4 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name, 
		
      
	        for(=1;<=2;++){
		       	if(<=9){
		       		 Array= date('Y-m-'.'0'.);
		       	}else{
		       		Array= date('Y-m-'.);
		       	}
		     
		      
		       SUM(IF(DATE(att.attendance_date) ='Array',att.attendance_id,0)) AS ''
		    
		        
		       }
          FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 10:43:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\payroll\hr\system\core\Exceptions.php:271) C:\xampp\htdocs\payroll\hr\system\core\Common.php 570
ERROR - 2019-09-19 10:44:00 --> Severity: error --> Exception: syntax error, unexpected 'for' (T_FOR), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:44:13 --> Severity: error --> Exception: syntax error, unexpected 'for' (T_FOR), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:44:23 --> Severity: error --> Exception: syntax error, unexpected 'for' (T_FOR) C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 17
ERROR - 2019-09-19 10:46:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.f' at line 6 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name, 
		       SUM(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS '1',
		    
		       
		       		
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 10:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.f' at line 6 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name, 
		       SUM(IF(DATE(att.attendance_date) ='',att.attendance_id,0)) AS '1',
		    
		       
		       		
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 10:46:09 --> Severity: error --> Exception: syntax error, unexpected 'IF' (T_IF) C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 11
ERROR - 2019-09-19 10:46:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.f' at line 6 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name, 
		       SUM(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS '1',
		    
		       
		       		
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 10:47:36 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2019-09-19 10:47:53 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2019-09-19 10:52:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AS '1'
		    
		       		
				FROM tblattendance att LEFT JOIN tblemp U ON ' at line 2 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name, 
		       IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS '1'
		    
		       		
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 10:52:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AS '1'
		    
		       		
				FROM tblattendance att LEFT JOIN tblemp U ON ' at line 2 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name, 
		       IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS '1'
		    
		       		
				FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 10:53:43 --> Severity: error --> Exception: syntax error, unexpected 'SUM' (T_STRING), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 24
ERROR - 2019-09-19 10:57:09 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 10:57:09 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 10:57:09 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 10:57:09 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 10:57:09 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 10:57:09 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 10:57:09 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 10:57:09 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 10:57:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 10:57:10 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 10:58:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.f' at line 2 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name,
				 FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 11:15:35 --> Severity: Notice --> Undefined variable: res C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 44
ERROR - 2019-09-19 11:15:35 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:15:35 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:15:35 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:15:35 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:15:35 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:15:35 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:15:35 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:15:35 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:15:35 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:15:35 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:16:46 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 25
ERROR - 2019-09-19 11:19:13 --> Severity: error --> Exception: syntax error, unexpected 'foreach' (T_FOREACH), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 26
ERROR - 2019-09-19 11:25:22 --> Severity: error --> Exception: Too few arguments to function CI_DB_query_builder::join(), 1 passed in C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php on line 31 and at least 2 expected C:\xampp\htdocs\payroll\hr\system\database\DB_query_builder.php 526
ERROR - 2019-09-19 11:25:34 --> Severity: error --> Exception: Too few arguments to function CI_DB_query_builder::join(), 1 passed in C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php on line 31 and at least 2 expected C:\xampp\htdocs\payroll\hr\system\database\DB_query_builder.php 526
ERROR - 2019-09-19 11:25:41 --> Query error: Unknown column 'left' in 'from clause' - Invalid query: SELECT *
FROM `tblattendance` as `att`
JOIN `tblemp` as `em` USING (`left`)
WHERE `em`.`Is_deleted` = '0'
ERROR - 2019-09-19 11:32:44 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:32:45 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 11:37:15 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:37:17 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 11:38:47 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 123
ERROR - 2019-09-19 11:38:48 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 11:39:22 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 123
ERROR - 2019-09-19 11:39:22 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 11:39:36 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 124
ERROR - 2019-09-19 11:39:36 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 11:39:48 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:39:48 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 11:40:51 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:40:52 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 11:45:28 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:45:28 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 11:53:25 --> Severity: Notice --> Undefined variable: monthdate C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 22
ERROR - 2019-09-19 11:53:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where (date between  DATE_ADD(LAST_DAY(DATE_SUB(CURDATE(), interval 30 day), int' at line 3 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name,SUM(IF(DATE(att.attendance_date) ='',att.attendance_id,0)) AS '1'

				 FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name where (date between  DATE_ADD(LAST_DAY(DATE_SUB(CURDATE(), interval 30 day), interval 1 day) AND CURDATE() )
ERROR - 2019-09-19 11:53:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where (date between  DATE_ADD(LAST_DAY(DATE_SUB(CURDATE(), interval 30 day), int' at line 3 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name,SUM(IF(DATE(att.attendance_date) ='CURDATE()',att.attendance_id,0)) AS '1'

				 FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name where (date between  DATE_ADD(LAST_DAY(DATE_SUB(CURDATE(), interval 30 day), interval 1 day) AND CURDATE() )
ERROR - 2019-09-19 11:53:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where (date between  DATE_ADD(LAST_DAY(DATE_SUB(CURDATE(), interval 30 day), int' at line 3 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name,SUM(IF(DATE(att.attendance_date) =CURDATE(),att.attendance_id,0)) AS '1'

				 FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name where (date between  DATE_ADD(LAST_DAY(DATE_SUB(CURDATE(), interval 30 day), interval 1 day) AND CURDATE() )
ERROR - 2019-09-19 11:53:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '),att.attendance_id,0)) AS '1'

				 FROM tblattendance att LEFT JOIN tblemp U' at line 1 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name,SUM(IF(DATE(att.attendance_date) =date(),att.attendance_id,0)) AS '1'

				 FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name where (date between  DATE_ADD(LAST_DAY(DATE_SUB(CURDATE(), interval 30 day), interval 1 day) AND CURDATE() )
ERROR - 2019-09-19 11:56:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.f' at line 3 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name,

				 FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name  AND (working_date BETWEEN LAST_DAY(NOW() - INTERVAL 1 MONTH) 
    AND LAST_DAY(NOW()))
ERROR - 2019-09-19 11:56:26 --> Query error: Unknown column 'working_date' in 'group statement' - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name  AND (working_date BETWEEN LAST_DAY(NOW() - INTERVAL 1 MONTH) 
    AND LAST_DAY(NOW()))
ERROR - 2019-09-19 11:56:48 --> Query error: Unknown column 'working_date' in 'group statement' - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name  AND (working_date BETWEEN LAST_DAY(NOW() - INTERVAL 1 MONTH) AND LAST_DAY(NOW()))
ERROR - 2019-09-19 11:57:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 80
ERROR - 2019-09-19 11:57:01 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 11:59:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'MONTH(startdate) = MONTH(CURDATE()) GROUP BY U.first_name' at line 2 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name
		 		 FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id MONTH(startdate) = MONTH(CURDATE()) GROUP BY U.first_name
ERROR - 2019-09-19 12:00:25 --> Query error: Unknown column 'startdate' in 'where clause' - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name
		 		 FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  WHERE  MONTH(startdate) = MONTH(CURDATE()) GROUP BY U.first_name
ERROR - 2019-09-19 12:00:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 80
ERROR - 2019-09-19 12:00:36 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:02:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'attendance_date >= LAST_DAY(CURRENT_DATE) + INTERVAL 1 DAY - INTERVAL 1 MONTH
 ' at line 2 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name
		 		 FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id attendance_date >= LAST_DAY(CURRENT_DATE) + INTERVAL 1 DAY - INTERVAL 1 MONTH
  AND attendance_date < LAST_DAY(CURRENT_DATE) + INTERVAL 1 DAY GROUP BY U.first_name
ERROR - 2019-09-19 12:06:14 --> Severity: Notice --> Undefined variable: monthdate C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 22
ERROR - 2019-09-19 12:07:40 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:07:41 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:17:55 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:17:55 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:20:24 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:20:25 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:20:36 --> Severity: Notice --> Undefined variable: attendance_name C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 103
ERROR - 2019-09-19 12:20:36 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:20:37 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:21:00 --> Severity: Notice --> Undefined variable: attendance_name C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 103
ERROR - 2019-09-19 12:21:00 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:21:00 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:21:05 --> Severity: Notice --> Undefined variable: attendancename C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 103
ERROR - 2019-09-19 12:21:05 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:21:05 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:29:15 --> Severity: Notice --> Undefined variable: attendancename C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 103
ERROR - 2019-09-19 12:29:15 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:29:16 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:29:22 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:29:22 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:29:29 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:29:29 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:30:17 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:30:18 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:30:26 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:30:26 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:30:42 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:30:42 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:30:47 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:30:48 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:30:53 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:30:53 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:32:52 --> Query error: Unknown column 'company_id' in 'where clause' - Invalid query: SELECT *
FROM `tblemp`
WHERE `Is_deleted` = '0'
AND `company_id` = '1'
ERROR - 2019-09-19 12:36:32 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:36:32 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 12:39:32 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 32
ERROR - 2019-09-19 12:39:39 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 32
ERROR - 2019-09-19 12:39:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.f' at line 2 - Invalid query: SELECT att.attendance_id as attendanceid,U.first_name AS first_name,
				 FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 12:40:07 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 12:42:54 --> Severity: error --> Exception: syntax error, unexpected 'for' (T_FOR), expecting ')' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 29
ERROR - 2019-09-19 12:44:31 --> Severity: error --> Exception: syntax error, unexpected 'for' (T_FOR) C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 29
ERROR - 2019-09-19 12:44:49 --> Severity: error --> Exception: syntax error, unexpected 'for' (T_FOR) C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 30
ERROR - 2019-09-19 12:45:01 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:45:01 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:45:01 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:45:01 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 41
ERROR - 2019-09-19 12:47:01 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:47:01 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:47:01 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:47:01 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 40
ERROR - 2019-09-19 12:47:10 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:47:10 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:47:10 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:47:10 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 40
ERROR - 2019-09-19 12:47:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 29
ERROR - 2019-09-19 12:47:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 29
ERROR - 2019-09-19 12:47:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:47:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:47:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 40
ERROR - 2019-09-19 12:49:27 --> Severity: error --> Exception: syntax error, unexpected '$str2' (T_VARIABLE), expecting ',' or ';' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 41
ERROR - 2019-09-19 12:50:02 --> Severity: Notice --> Undefined variable: str2 C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:50:17 --> Severity: Notice --> Undefined variable: str2 C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:50:17 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:50:17 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:50:28 --> Severity: Notice --> Undefined variable: str2 C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:51:31 --> Severity: Notice --> Undefined variable: str2 C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:52:50 --> Severity: error --> Exception: syntax error, unexpected ',' C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 33
ERROR - 2019-09-19 12:58:04 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 38
ERROR - 2019-09-19 12:58:04 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 38
ERROR - 2019-09-19 13:17:41 --> Severity: error --> Exception: syntax error, unexpected '$str3' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\payroll\hr\application\models\Attendance_model.php 44
ERROR - 2019-09-19 13:20:28 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:21:38 --> Severity: Notice --> Undefined property: stdClass::$attendance_date C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 82
ERROR - 2019-09-19 13:21:38 --> Severity: Notice --> Undefined property: stdClass::$attendance_id C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 83
ERROR - 2019-09-19 13:21:38 --> Severity: Notice --> Undefined property: stdClass::$attendance_date C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 82
ERROR - 2019-09-19 13:21:38 --> Severity: Notice --> Undefined property: stdClass::$attendance_id C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 83
ERROR - 2019-09-19 13:21:38 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:21:39 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:22:29 --> Severity: Notice --> Undefined property: stdClass::$attendance_date C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 82
ERROR - 2019-09-19 13:22:29 --> Severity: Notice --> Undefined property: stdClass::$attendance_id C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 83
ERROR - 2019-09-19 13:22:29 --> Severity: Notice --> Undefined property: stdClass::$attendance_date C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 82
ERROR - 2019-09-19 13:22:29 --> Severity: Notice --> Undefined property: stdClass::$attendance_id C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 83
ERROR - 2019-09-19 13:22:29 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:25:13 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:25:13 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:28:12 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:28:13 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:32:40 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:32:40 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:32:51 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:32:51 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:33:16 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:33:16 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:34:54 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:34:54 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:34:54 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:34:54 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:35:56 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:35:56 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:35:57 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:35:57 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:35:57 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:35:57 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:41:14 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:41:15 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:41:15 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:41:15 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:41:15 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:41:15 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:41:46 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:41:47 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:41:47 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:41:47 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:41:47 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:41:47 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:42:07 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:42:08 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:42:08 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:42:08 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:42:08 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:42:08 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:43:43 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:43:44 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:43:44 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:43:44 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:43:44 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:43:44 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:43:57 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:43:58 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:43:58 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:43:58 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:43:58 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:43:58 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:45:01 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:45:01 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:45:01 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:45:01 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 13:45:01 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:45:02 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 13:46:49 --> Severity: error --> Exception: syntax error, unexpected ')', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 131
ERROR - 2019-09-19 13:46:59 --> Severity: error --> Exception: syntax error, unexpected '1' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 131
ERROR - 2019-09-19 13:47:04 --> Severity: error --> Exception: syntax error, unexpected ''1'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 131
ERROR - 2019-09-19 13:47:49 --> Severity: error --> Exception: syntax error, unexpected ''1'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 131
ERROR - 2019-09-19 13:47:59 --> Severity: error --> Exception: syntax error, unexpected '1' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 139
ERROR - 2019-09-19 13:48:05 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:48:05 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:50:44 --> Severity: error --> Exception: syntax error, unexpected '1' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 131
ERROR - 2019-09-19 13:51:04 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 131
ERROR - 2019-09-19 13:51:05 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:51:13 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 131
ERROR - 2019-09-19 13:51:14 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:51:34 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:51:35 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:52:04 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:52:04 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:53:29 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:53:29 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:54:20 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:54:20 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:54:29 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:54:30 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:56:23 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:56:23 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:57:13 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 13:57:13 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 13:58:45 --> Severity: error --> Exception: syntax error, unexpected '1' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 131
ERROR - 2019-09-19 14:00:32 --> Severity: error --> Exception: syntax error, unexpected '"1"' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 132
ERROR - 2019-09-19 14:00:37 --> Severity: error --> Exception: syntax error, unexpected ''1'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 132
ERROR - 2019-09-19 14:01:16 --> Severity: Notice --> Undefined property: stdClass::$1 C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 134
ERROR - 2019-09-19 14:01:16 --> Severity: Notice --> Undefined property: stdClass::$1 C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 134
ERROR - 2019-09-19 14:01:16 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:01:17 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:01:26 --> Severity: Notice --> Undefined property: stdClass::$str C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 134
ERROR - 2019-09-19 14:01:26 --> Severity: Notice --> Undefined property: stdClass::$str C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 134
ERROR - 2019-09-19 14:01:26 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:01:26 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:01:38 --> Severity: Notice --> Undefined property: stdClass::$one C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 134
ERROR - 2019-09-19 14:01:38 --> Severity: Notice --> Undefined property: stdClass::$one C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 134
ERROR - 2019-09-19 14:01:38 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:01:38 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:02:47 --> Severity: Notice --> Undefined property: stdClass::$one C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 134
ERROR - 2019-09-19 14:02:47 --> Severity: Notice --> Undefined property: stdClass::$one C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 134
ERROR - 2019-09-19 14:02:47 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:02:47 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:03:05 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:03:06 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:03:42 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:03:42 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:04:29 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:04:30 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:04:42 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:04:42 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:13:57 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:13:58 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:15:26 --> Severity: error --> Exception: syntax error, unexpected '1' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' C:\xampp\htdocs\payroll\hr\application\views\Attendance\attendancelist.php 135
ERROR - 2019-09-19 14:16:29 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:16:30 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:16:55 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:19:36 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:19:37 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:20:26 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:20:26 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:21:14 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:21:15 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:22:05 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:22:05 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:22:13 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:22:13 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:23:00 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:23:00 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:23:01 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:23:01 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:23:14 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:23:15 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:23:15 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:23:15 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:23:15 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:23:15 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:23:21 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:23:21 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:23:21 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:23:21 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:23:21 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:23:21 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:23:41 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:23:42 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:23:42 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:23:42 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:23:42 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:23:42 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:24:14 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:24:15 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:24:15 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:24:15 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:24:15 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:24:15 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:25:14 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:25:14 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:25:14 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:25:14 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:25:14 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:25:14 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:25:27 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:25:27 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:25:47 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:25:47 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:26:00 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:26:01 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:26:31 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:26:31 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:26:41 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:26:41 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:27:21 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:27:21 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:28:49 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:28:50 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:29:47 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:29:48 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:29:59 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:30:00 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:30:11 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:30:12 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:30:20 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:30:20 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:30:58 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:30:58 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:31:22 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:31:22 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:31:27 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:31:27 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:31:27 --> 404 Page Not Found: Default/plugins
ERROR - 2019-09-19 14:31:27 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:31:27 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:31:27 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:31:50 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:31:50 --> 404 Page Not Found: Default/plugins
ERROR - 2019-09-19 14:31:50 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:31:50 --> 404 Page Not Found: Default/js
ERROR - 2019-09-19 14:31:50 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:31:50 --> 404 Page Not Found: Default/css
ERROR - 2019-09-19 14:31:56 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:33:28 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:33:28 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:33:36 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:33:47 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:33:53 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:34:10 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:34:10 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:37:42 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:37:42 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:39:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS 'abc1',SUM(' at line 1 - Invalid query: SELECT att.attendance_id as attendanceid,CONCAT(U.first_name, ' ', U.last_name) as firstlast,U.ProfileImage as ProfileImageSUM(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS 'abc1',SUM(IF(DATE(att.attendance_date) ='2019-09-02',att.attendance_id,0)) AS 'abc2'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 14:39:19 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:39:19 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:42:05 --> 404 Page Not Found: Attendance/assets
ERROR - 2019-09-19 14:42:06 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:42:53 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:43:08 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:43:19 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:43:29 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:43:40 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:43:52 --> 404 Page Not Found: Attendance/profile.html
ERROR - 2019-09-19 14:44:15 --> 404 Page Not Found: Default/assets
ERROR - 2019-09-19 14:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SUM(IF(DATE(att.attendance_date) ='2019-09-03',att.attendance_id,0)) AS 'abc3'SU' at line 1 - Invalid query: SELECT att.attendance_id as attendanceid,CONCAT(U.first_name, ' ', U.last_name) as firstlast,U.ProfileImage as ProfileImage,SUM(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS 'abc1',SUM(IF(DATE(att.attendance_date) ='2019-09-02',att.attendance_id,0)) AS 'abc2'SUM(IF(DATE(att.attendance_date) ='2019-09-03',att.attendance_id,0)) AS 'abc3'SUM(IF(DATE(att.attendance_date) ='2019-09-04',att.attendance_id,0)) AS 'abc4'SUM(IF(DATE(att.attendance_date) ='2019-09-05',att.attendance_id,0)) AS 'abc5'SUM(IF(DATE(att.attendance_date) ='2019-09-06',att.attendance_id,0)) AS 'abc6'SUM(IF(DATE(att.attendance_date) ='2019-09-07',att.attendance_id,0)) AS 'abc7'SUM(IF(DATE(att.attendance_date) ='2019-09-08',att.attendance_id,0)) AS 'abc8'SUM(IF(DATE(att.attendance_date) ='2019-09-09',att.attendance_id,0)) AS 'abc9'SUM(IF(DATE(att.attendance_date) ='2019-09-10',att.attendance_id,0)) AS 'abc10'SUM(IF(DATE(att.attendance_date) ='2019-09-11',att.attendance_id,0)) AS 'abc11'SUM(IF(DATE(att.attendance_date) ='2019-09-12',att.attendance_id,0)) AS 'abc12'SUM(IF(DATE(att.attendance_date) ='2019-09-13',att.attendance_id,0)) AS 'abc13'SUM(IF(DATE(att.attendance_date) ='2019-09-14',att.attendance_id,0)) AS 'abc14'SUM(IF(DATE(att.attendance_date) ='2019-09-15',att.attendance_id,0)) AS 'abc15'SUM(IF(DATE(att.attendance_date) ='2019-09-16',att.attendance_id,0)) AS 'abc16'SUM(IF(DATE(att.attendance_date) ='2019-09-17',att.attendance_id,0)) AS 'abc17'SUM(IF(DATE(att.attendance_date) ='2019-09-18',att.attendance_id,0)) AS 'abc18'SUM(IF(DATE(att.attendance_date) ='2019-09-19',att.attendance_id,0)) AS 'abc19'SUM(IF(DATE(att.attendance_date) ='2019-09-20',att.attendance_id,0)) AS 'abc20'SUM(IF(DATE(att.attendance_date) ='2019-09-21',att.attendance_id,0)) AS 'abc21'SUM(IF(DATE(att.attendance_date) ='2019-09-22',att.attendance_id,0)) AS 'abc22'SUM(IF(DATE(att.attendance_date) ='2019-09-23',att.attendance_id,0)) AS 'abc23'SUM(IF(DATE(att.attendance_date) ='2019-09-24',att.attendance_id,0)) AS 'abc24'SUM(IF(DATE(att.attendance_date) ='2019-09-25',att.attendance_id,0)) AS 'abc25'SUM(IF(DATE(att.attendance_date) ='2019-09-26',att.attendance_id,0)) AS 'abc26'SUM(IF(DATE(att.attendance_date) ='2019-09-27',att.attendance_id,0)) AS 'abc27'SUM(IF(DATE(att.attendance_date) ='2019-09-28',att.attendance_id,0)) AS 'abc28'SUM(IF(DATE(att.attendance_date) ='2019-09-29',att.attendance_id,0)) AS 'abc29'SUM(IF(DATE(att.attendance_date) ='2019-09-30',att.attendance_id,0)) AS 'abc30'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 14:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SUM(IF(DATE(att.attendance_date) ='2019-09-03',att.attendance_id,0)) AS 'abc3'SU' at line 1 - Invalid query: SELECT att.attendance_id as attendanceid,CONCAT(U.first_name, ' ', U.last_name) as firstlast,U.ProfileImage as ProfileImage,SUM(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS 'abc1',SUM(IF(DATE(att.attendance_date) ='2019-09-02',att.attendance_id,0)) AS 'abc2'SUM(IF(DATE(att.attendance_date) ='2019-09-03',att.attendance_id,0)) AS 'abc3'SUM(IF(DATE(att.attendance_date) ='2019-09-04',att.attendance_id,0)) AS 'abc4'SUM(IF(DATE(att.attendance_date) ='2019-09-05',att.attendance_id,0)) AS 'abc5'SUM(IF(DATE(att.attendance_date) ='2019-09-06',att.attendance_id,0)) AS 'abc6'SUM(IF(DATE(att.attendance_date) ='2019-09-07',att.attendance_id,0)) AS 'abc7'SUM(IF(DATE(att.attendance_date) ='2019-09-08',att.attendance_id,0)) AS 'abc8'SUM(IF(DATE(att.attendance_date) ='2019-09-09',att.attendance_id,0)) AS 'abc9'SUM(IF(DATE(att.attendance_date) ='2019-09-10',att.attendance_id,0)) AS 'abc10'SUM(IF(DATE(att.attendance_date) ='2019-09-11',att.attendance_id,0)) AS 'abc11'SUM(IF(DATE(att.attendance_date) ='2019-09-12',att.attendance_id,0)) AS 'abc12'SUM(IF(DATE(att.attendance_date) ='2019-09-13',att.attendance_id,0)) AS 'abc13'SUM(IF(DATE(att.attendance_date) ='2019-09-14',att.attendance_id,0)) AS 'abc14'SUM(IF(DATE(att.attendance_date) ='2019-09-15',att.attendance_id,0)) AS 'abc15'SUM(IF(DATE(att.attendance_date) ='2019-09-16',att.attendance_id,0)) AS 'abc16'SUM(IF(DATE(att.attendance_date) ='2019-09-17',att.attendance_id,0)) AS 'abc17'SUM(IF(DATE(att.attendance_date) ='2019-09-18',att.attendance_id,0)) AS 'abc18'SUM(IF(DATE(att.attendance_date) ='2019-09-19',att.attendance_id,0)) AS 'abc19'SUM(IF(DATE(att.attendance_date) ='2019-09-20',att.attendance_id,0)) AS 'abc20'SUM(IF(DATE(att.attendance_date) ='2019-09-21',att.attendance_id,0)) AS 'abc21'SUM(IF(DATE(att.attendance_date) ='2019-09-22',att.attendance_id,0)) AS 'abc22'SUM(IF(DATE(att.attendance_date) ='2019-09-23',att.attendance_id,0)) AS 'abc23'SUM(IF(DATE(att.attendance_date) ='2019-09-24',att.attendance_id,0)) AS 'abc24'SUM(IF(DATE(att.attendance_date) ='2019-09-25',att.attendance_id,0)) AS 'abc25'SUM(IF(DATE(att.attendance_date) ='2019-09-26',att.attendance_id,0)) AS 'abc26'SUM(IF(DATE(att.attendance_date) ='2019-09-27',att.attendance_id,0)) AS 'abc27'SUM(IF(DATE(att.attendance_date) ='2019-09-28',att.attendance_id,0)) AS 'abc28'SUM(IF(DATE(att.attendance_date) ='2019-09-29',att.attendance_id,0)) AS 'abc29'SUM(IF(DATE(att.attendance_date) ='2019-09-30',att.attendance_id,0)) AS 'abc30'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 15:03:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SUM(IF(DATE(att.attendance_date) ='2019-09-03',att.attendance_id,0)) AS 'abc3'SU' at line 1 - Invalid query: SELECT att.attendance_id as attendanceid,CONCAT(U.first_name, ' ', U.last_name) as firstlast,U.ProfileImage as ProfileImage,SUM(IF(DATE(att.attendance_date) ='2019-09-01',att.attendance_id,0)) AS 'abc1',SUM(IF(DATE(att.attendance_date) ='2019-09-02',att.attendance_id,0)) AS 'abc2'SUM(IF(DATE(att.attendance_date) ='2019-09-03',att.attendance_id,0)) AS 'abc3'SUM(IF(DATE(att.attendance_date) ='2019-09-04',att.attendance_id,0)) AS 'abc4'SUM(IF(DATE(att.attendance_date) ='2019-09-05',att.attendance_id,0)) AS 'abc5'SUM(IF(DATE(att.attendance_date) ='2019-09-06',att.attendance_id,0)) AS 'abc6'SUM(IF(DATE(att.attendance_date) ='2019-09-07',att.attendance_id,0)) AS 'abc7'SUM(IF(DATE(att.attendance_date) ='2019-09-08',att.attendance_id,0)) AS 'abc8'SUM(IF(DATE(att.attendance_date) ='2019-09-09',att.attendance_id,0)) AS 'abc9'SUM(IF(DATE(att.attendance_date) ='2019-09-10',att.attendance_id,0)) AS 'abc10'SUM(IF(DATE(att.attendance_date) ='2019-09-11',att.attendance_id,0)) AS 'abc11'SUM(IF(DATE(att.attendance_date) ='2019-09-12',att.attendance_id,0)) AS 'abc12'SUM(IF(DATE(att.attendance_date) ='2019-09-13',att.attendance_id,0)) AS 'abc13'SUM(IF(DATE(att.attendance_date) ='2019-09-14',att.attendance_id,0)) AS 'abc14'SUM(IF(DATE(att.attendance_date) ='2019-09-15',att.attendance_id,0)) AS 'abc15'SUM(IF(DATE(att.attendance_date) ='2019-09-16',att.attendance_id,0)) AS 'abc16'SUM(IF(DATE(att.attendance_date) ='2019-09-17',att.attendance_id,0)) AS 'abc17'SUM(IF(DATE(att.attendance_date) ='2019-09-18',att.attendance_id,0)) AS 'abc18'SUM(IF(DATE(att.attendance_date) ='2019-09-19',att.attendance_id,0)) AS 'abc19'SUM(IF(DATE(att.attendance_date) ='2019-09-20',att.attendance_id,0)) AS 'abc20'SUM(IF(DATE(att.attendance_date) ='2019-09-21',att.attendance_id,0)) AS 'abc21'SUM(IF(DATE(att.attendance_date) ='2019-09-22',att.attendance_id,0)) AS 'abc22'SUM(IF(DATE(att.attendance_date) ='2019-09-23',att.attendance_id,0)) AS 'abc23'SUM(IF(DATE(att.attendance_date) ='2019-09-24',att.attendance_id,0)) AS 'abc24'SUM(IF(DATE(att.attendance_date) ='2019-09-25',att.attendance_id,0)) AS 'abc25'SUM(IF(DATE(att.attendance_date) ='2019-09-26',att.attendance_id,0)) AS 'abc26'SUM(IF(DATE(att.attendance_date) ='2019-09-27',att.attendance_id,0)) AS 'abc27'SUM(IF(DATE(att.attendance_date) ='2019-09-28',att.attendance_id,0)) AS 'abc28'SUM(IF(DATE(att.attendance_date) ='2019-09-29',att.attendance_id,0)) AS 'abc29'SUM(IF(DATE(att.attendance_date) ='2019-09-30',att.attendance_id,0)) AS 'abc30'FROM tblattendance att LEFT JOIN tblemp U ON U.emp_id = att.emp_id  GROUP BY U.first_name
ERROR - 2019-09-19 15:03:38 --> 404 Page Not Found: Default/assets
