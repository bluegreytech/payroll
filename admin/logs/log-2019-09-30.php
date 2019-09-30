<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-30 06:05:09 --> 404 Page Not Found: Assets/img
ERROR - 2019-09-30 06:05:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 47
ERROR - 2019-09-30 06:05:40 --> Severity: Notice --> Undefined variable: session C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 105
ERROR - 2019-09-30 06:05:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 47
ERROR - 2019-09-30 06:05:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-09-30 06:05:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-09-30 06:05:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-09-30 06:05:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-09-30 06:13:33 --> 404 Page Not Found: Invoice/getedithr
ERROR - 2019-09-30 06:14:23 --> 404 Page Not Found: Invoice/getedithr
ERROR - 2019-09-30 06:19:59 --> Severity: Notice --> Undefined variable: amount C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 169
ERROR - 2019-09-30 06:19:59 --> Severity: Notice --> Undefined variable: addtax C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 183
ERROR - 2019-09-30 06:21:29 --> Severity: Notice --> Undefined variable: amount C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 169
ERROR - 2019-09-30 06:21:29 --> Severity: Notice --> Undefined variable: addtax C:\xampp\htdocs\payroll\admin\application\views\Invoice\add-invoice.php 183
ERROR - 2019-09-30 06:22:19 --> Severity: Notice --> Undefined index: amount C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 94
ERROR - 2019-09-30 06:22:19 --> Severity: Notice --> Undefined index: addtax C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 96
ERROR - 2019-09-30 06:22:28 --> 404 Page Not Found: Default/js
ERROR - 2019-09-30 06:22:28 --> 404 Page Not Found: Default/js
ERROR - 2019-09-30 06:22:28 --> 404 Page Not Found: Default/plugins
ERROR - 2019-09-30 06:22:28 --> 404 Page Not Found: Default/css
ERROR - 2019-09-30 06:27:07 --> Severity: Notice --> Undefined index: amount C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 94
ERROR - 2019-09-30 06:27:19 --> 404 Page Not Found: Default/js
ERROR - 2019-09-30 06:27:19 --> 404 Page Not Found: Default/js
ERROR - 2019-09-30 06:27:19 --> 404 Page Not Found: Default/plugins
ERROR - 2019-09-30 06:27:19 --> 404 Page Not Found: Default/css
ERROR - 2019-09-30 06:32:46 --> Severity: Notice --> Undefined index: discount C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 131
ERROR - 2019-09-30 06:36:53 --> Severity: Notice --> Undefined index: discount C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 131
ERROR - 2019-09-30 06:37:21 --> 404 Page Not Found: Default/js
ERROR - 2019-09-30 06:37:21 --> 404 Page Not Found: Default/js
ERROR - 2019-09-30 06:37:21 --> 404 Page Not Found: Default/plugins
ERROR - 2019-09-30 06:37:21 --> 404 Page Not Found: Default/css
ERROR - 2019-09-30 06:37:52 --> 404 Page Not Found: Default/css
ERROR - 2019-09-30 06:37:52 --> 404 Page Not Found: Default/js
ERROR - 2019-09-30 06:37:52 --> 404 Page Not Found: Default/js
ERROR - 2019-09-30 06:37:52 --> 404 Page Not Found: Default/plugins
ERROR - 2019-09-30 06:59:13 --> Severity: Notice --> Undefined variable: addtax C:\xampp\htdocs\payroll\admin\application\views\Invoice\invoice-view.php 106
ERROR - 2019-09-30 08:12:02 --> Query error: Unknown column 't2.AdminId' in 'on clause' - Invalid query: SELECT `t1`.*, `t2`.*, `t3`.*, `t4`.*, `t5`.*
FROM `tblcompanyinvoice` as `t1`
LEFT JOIN `tblcompany` as `t2` ON `t1`.`companyid` = `t2`.`companyid`
LEFT JOIN `tblhr` as `t3` ON `t1`.`hr_id` = `t3`.`hr_id`
LEFT JOIN `tblcompanybankdetail` as `t4` ON `t2`.`companyid` = `t4`.`companyid`
LEFT JOIN `tbladmin` as `t5` ON `t2`.`AdminId` = `t5`.`AdminId`
WHERE `t1`.`Companyinvoiceid` = '1'
ERROR - 2019-09-30 08:13:37 --> Severity: error --> Exception: Too few arguments to function Invoice::invoice_view(), 1 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 2 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 120
ERROR - 2019-09-30 08:14:55 --> Severity: error --> Exception: Too few arguments to function Invoice::invoice_view(), 1 passed in C:\xampp\htdocs\payroll\admin\system\core\CodeIgniter.php on line 532 and exactly 2 expected C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 120
ERROR - 2019-09-30 08:20:09 --> 404 Page Not Found: Upload/default
ERROR - 2019-09-30 08:21:01 --> 404 Page Not Found: Upload/default
