ERROR - 2019-10-01 10:50:35 --> Severity: Warning --> Use of undefined constant ACTIVE - assumed 'ACTIVE' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 533
ERROR - 2019-10-01 10:50:49 --> Query error: Table 'payrolldb.tblemployee' doesn't exist - Invalid query: SELECT *
FROM `tblemployee`
WHERE `isdelete` != '1'
ERROR - 2019-10-01 10:51:33 --> Query error: Unknown column 'isdelete' in 'where clause' - Invalid query: SELECT *
FROM `tblemp`
WHERE `isdelete` != '1'
ERROR - 2019-10-01 10:52:11 --> Query error: Table 'payrolldb.is_deleted' doesn't exist - Invalid query: SELECT *
FROM `Is_deleted`
WHERE `isdelete` != '1'
ERROR - 2019-10-01 10:52:37 --> Query error: Unknown column 'Is_deleted' in 'where clause' - Invalid query: SELECT *
FROM `tblhr`
WHERE `Is_deleted` = '0'
ERROR - 2019-10-01 10:53:42 --> Query error: Unknown column 'Is_deleted' in 'where clause' - Invalid query: SELECT *
FROM `tblhr`
WHERE `Is_deleted` = '0'
ERROR - 2019-10-01 10:53:43 --> Query error: Unknown column 'Is_deleted' in 'where clause' - Invalid query: SELECT *
FROM `tblhr`
WHERE `Is_deleted` = '0'
ERROR - 2019-10-01 10:54:51 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 10:54:51 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 10:54:51 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 10:54:52 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 11:21:24 --> Severity: error --> Exception: Too few arguments to function Leave::leavelist(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Leave.php 13
ERROR - 2019-10-01 11:22:05 --> Severity: error --> Exception: Too few arguments to function Leave::leavelist(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Leave.php 13
ERROR - 2019-10-01 11:22:39 --> Severity: error --> Exception: Too few arguments to function Leave::leavelist(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Leave.php 13
ERROR - 2019-10-01 11:22:41 --> Severity: error --> Exception: Too few arguments to function Leave::leavelist(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Leave.php 13
ERROR - 2019-10-01 11:31:29 --> Severity: Notice --> Undefined variable: result C:\xampp\htdocs\payroll\admin\application\views\Leave\leavelist.php 124
ERROR - 2019-10-01 11:46:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= t2.companyid
WHERE `t1`.`companyname` IS NULL' at line 3 - Invalid query: SELECT `t1`.*, `t2`.*
FROM `tblcompany` as `t1`
LEFT JOIN `tblcmpleave` as `t2` ON = t2.companyid
WHERE `t1`.`companyname` IS NULL
ERROR - 2019-10-01 11:47:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= t2.companyid
WHERE `t1`.`companyname` IS NULL' at line 3 - Invalid query: SELECT `t1`.*, `t2`.*
FROM `tblcompany` as `t1`
LEFT JOIN `tblcmpleave` as `t2` ON = t2.companyid
WHERE `t1`.`companyname` IS NULL
ERROR - 2019-10-01 11:47:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= t2.companyid
WHERE `t1`.`companyname` IS NULL' at line 3 - Invalid query: SELECT `t1`.*, `t2`.*
FROM `tblcompany` as `t1`
LEFT JOIN `tblcmpleave` as `t2` ON = t2.companyid
WHERE `t1`.`companyname` IS NULL
ERROR - 2019-10-01 11:47:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= t2.companyid' at line 3 - Invalid query: SELECT `t1`.*, `t2`.*
FROM `tblcompany` as `t1`
LEFT JOIN `tblcmpleave` as `t2` ON = t2.companyid
ERROR - 2019-10-01 11:50:36 --> Query error: Unknown column 't1.Is_deleted' in 'where clause' - Invalid query: SELECT `t1`.*, `t2`.*
FROM `tblcompany` as `t1`
LEFT JOIN `tblcmpleave` as `t2` ON `t1`.`companyid` = `t2`.`companyid`
WHERE 0 = 't1.companyid'
AND 1 IS NULL
AND `t1`.`Is_deleted` = '0'
ERROR - 2019-10-01 11:56:14 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 11:56:14 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 11:56:14 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 11:56:14 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 11:57:11 --> 404 Page Not Found: Default/js
ERROR - 2019-10-01 11:57:11 --> 404 Page Not Found: Default/js
ERROR - 2019-10-01 11:57:11 --> 404 Page Not Found: Default/plugins
ERROR - 2019-10-01 11:57:11 --> 404 Page Not Found: Default/css
