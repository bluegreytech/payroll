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
ERROR - 2019-10-01 12:17:02 --> Query error: Unknown column 't1.isdelete' in 'where clause' - Invalid query: SELECT `t1`.*
FROM `tblhr` as `t1`
WHERE `t1`.`isdelete` = '0'
AND `t1`.`hr_type` = '1'
ERROR - 2019-10-01 12:19:09 --> Query error: Unknown column 't1.Is_delete' in 'where clause' - Invalid query: SELECT `t1`.*
FROM `tblhr` as `t1`
WHERE `t1`.`Is_delete` = '0'
AND `t1`.`hr_type` = '1'
ERROR - 2019-10-01 12:20:08 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 105
ERROR - 2019-10-01 12:21:09 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 105
ERROR - 2019-10-01 12:22:50 --> Severity: Notice --> Undefined variable: paymentopt C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 90
ERROR - 2019-10-01 12:22:50 --> Severity: Notice --> Undefined variable: paymentopt C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 105
ERROR - 2019-10-01 12:22:50 --> Severity: Notice --> Undefined variable: amount C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 169
ERROR - 2019-10-01 12:22:50 --> Severity: Notice --> Undefined variable: addtax C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 183
ERROR - 2019-10-01 12:22:50 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 105
ERROR - 2019-10-01 12:23:45 --> Severity: Notice --> Undefined variable: paymentopt C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 90
ERROR - 2019-10-01 12:23:45 --> Severity: Notice --> Undefined variable: paymentopt C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 105
ERROR - 2019-10-01 12:23:45 --> Severity: Notice --> Undefined variable: amount C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 169
ERROR - 2019-10-01 12:23:45 --> Severity: Notice --> Undefined variable: addtax C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 183
ERROR - 2019-10-01 12:23:45 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 105
ERROR - 2019-10-01 12:24:59 --> Severity: Notice --> Undefined variable: amount C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 169
ERROR - 2019-10-01 12:24:59 --> Severity: Notice --> Undefined variable: addtax C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 183
ERROR - 2019-10-01 12:24:59 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 107
ERROR - 2019-10-01 12:25:35 --> Severity: Notice --> Undefined variable: addtax C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 183
ERROR - 2019-10-01 12:25:35 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 109
ERROR - 2019-10-01 12:26:15 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 111
ERROR - 2019-10-01 12:27:24 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:27:39 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:28:22 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:28:31 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:30:41 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:30:54 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:31:13 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:31:24 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:32:05 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:32:32 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:32:41 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:33:38 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:33:44 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:33:55 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:34:42 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:35:56 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:36:05 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:36:38 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:36:59 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:37:31 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:37:33 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:37:42 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:38:24 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:39:13 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:39:18 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:39:31 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:39:45 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:40:37 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:41:48 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:41:57 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:43:17 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:44:03 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:45:41 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:45:43 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:46:07 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:48:21 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:48:47 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:49:47 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:50:47 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:51:27 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:51:33 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:52:11 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:52:47 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:53:35 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:53:37 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:53:41 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:54:16 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:55:26 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:55:38 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:55:48 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:56:04 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:56:06 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:56:17 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:56:55 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:56:58 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:57:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 47
ERROR - 2019-10-01 12:57:01 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:57:01 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:57:01 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:57:01 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:57:32 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:57:33 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:57:33 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:57:33 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:58:01 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:58:01 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:58:01 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:58:01 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:58:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 47
ERROR - 2019-10-01 12:58:05 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:58:05 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:58:05 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:58:05 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 12:58:21 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:58:44 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:58:46 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:59:06 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 12:59:27 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 108
ERROR - 2019-10-01 13:02:13 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 13:02:13 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 13:02:13 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 13:02:13 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 13:09:12 --> Query error: Unknown table 'payrolldb.t1' - Invalid query: SELECT `t1`.*
FROM `tblcompanyinvoice`
WHERE 0 = ''
ERROR - 2019-10-01 13:14:18 --> Query error: Unknown table 'payrolldb.t1' - Invalid query: SELECT `t1`.*
FROM `tblcompanyinvoice`
WHERE 0 = ''
ERROR - 2019-10-01 13:14:33 --> Severity: Notice --> Undefined variable: invoiceData C:\xampp\htdocs\payroll\admin\application\views\Invoice\invoice-reports.php 169
ERROR - 2019-10-01 13:15:23 --> Severity: Notice --> Undefined variable: invoiceData C:\xampp\htdocs\payroll\admin\application\views\Invoice\invoice-reports.php 169
ERROR - 2019-10-01 13:16:05 --> Severity: Notice --> Undefined variable: invoiceData C:\xampp\htdocs\payroll\admin\application\views\Invoice\invoice-reports.php 169
ERROR - 2019-10-01 13:16:42 --> Query error: Unknown table 'payrolldb.t1' - Invalid query: SELECT `t1`.*
FROM `tblcompanyinvoice`
WHERE 0 = ''
ERROR - 2019-10-01 13:17:51 --> Query error: Unknown table 'payrolldb.t1' - Invalid query: SELECT `t1`.*
FROM `tblcompanyinvoice`
WHERE `t1`.`isdelete` = '0'
ERROR - 2019-10-01 13:18:33 --> Severity: Notice --> Undefined variable: invoiceData C:\xampp\htdocs\payroll\admin\application\views\Invoice\invoice-reports.php 169
ERROR - 2019-10-01 13:29:16 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 13:29:20 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 47
ERROR - 2019-10-01 13:29:20 --> Severity: Notice --> Undefined variable: session C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 105
ERROR - 2019-10-01 13:29:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 47
ERROR - 2019-10-01 13:29:28 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 13:29:28 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 13:29:28 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 13:29:28 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 13:38:16 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 121
ERROR - 2019-10-01 13:39:55 --> Query error: Column 'hr_id' cannot be null - Invalid query: INSERT INTO `tblcompanyinvoice` (`companyid`, `hr_id`, `invoicedate`, `duedate`, `totalamount`, `taxamount`, `netamount`, `status`, `Isactive`) VALUES ('10', NULL, '2018/03/07', '1970/01/01', '1800', '180', '1980', 'Pending', 'Aactive')
ERROR - 2019-10-01 13:57:58 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 121
ERROR - 2019-10-01 14:02:00 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 14:02:00 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 14:02:00 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 14:02:00 --> 404 Page Not Found: Assets/img
ERROR - 2019-10-01 14:28:34 --> Severity: error --> Exception: Too few arguments to function Invoice::getedithr(), 0 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 121
ERROR - 2019-10-01 14:28:46 --> Query error: Column 'hr_id' cannot be null - Invalid query: INSERT INTO `tblcompanyinvoice` (`companyid`, `hr_id`, `invoicedate`, `duedate`, `totalamount`, `taxamount`, `netamount`, `status`, `Isactive`) VALUES ('10', NULL, '1970/01/01', '1970/01/01', '200', '40', '240', 'Pending', 'Aactive')
