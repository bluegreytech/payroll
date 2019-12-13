<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-10 10:02:02 --> Query error: Table 'payrolldb.tblactivitylog' doesn't exist - Invalid query: INSERT INTO `tblactivitylog` (`AdminId`, `Module`, `Activity`) VALUES ('1', 'Login', 'Admin login with record id: 1')
ERROR - 2019-12-10 11:54:50 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 38
ERROR - 2019-12-10 11:54:50 --> Query error: Table 'payrolldb.tblcompanyinvoice' doesn't exist - Invalid query: SELECT `t1`.*, `t2`.*, `t3`.*
FROM `tblcompanyinvoice` as `t1`
LEFT JOIN `tblcompany` as `t2` ON `t1`.`companyid` = `t2`.`companyid`
LEFT JOIN `tblhr` as `t3` ON `t1`.`hr_id` = `t3`.`hr_id`
WHERE `t1`.`isdelete` = '0'
ORDER BY `t1`.`Companyinvoiceid` DESC
 LIMIT 5
ERROR - 2019-12-10 11:55:28 --> Query error: Table 'payrolldb.tblquotation' doesn't exist - Invalid query: SELECT `t1`.*, `t2`.*
FROM `tblquotation` as `t1`
LEFT JOIN `tblcompanytype` as `t2` ON `t1`.`companytypeid` = `t2`.`companytypeid`
WHERE `t1`.`isdelete` = '0'
ORDER BY `t1`.`quotationid` DESC
 LIMIT 5
ERROR - 2019-12-10 11:57:16 --> Query error: Table 'payrolldb.tblsitesetting' doesn't exist - Invalid query: SELECT `quotation`.*, `adminbank`.*
FROM `tblquotation` as `quotation`
LEFT JOIN `tblsitesetting` as `adminbank` ON `RoleId`= `adminbank`.`RoleId`
WHERE `quotation`.`quotationid` = '2'
ERROR - 2019-12-10 11:58:09 --> Query error: Table 'payrolldb.tblquotationdetail' doesn't exist - Invalid query: SELECT `t1`.*
FROM `tblquotationdetail` as `t1`
WHERE `t1`.`quotationid` = '2'
ERROR - 2019-12-10 12:07:05 --> Severity: Notice --> Undefined variable: companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotation-view2.php 145
ERROR - 2019-12-10 12:07:05 --> Severity: Notice --> Undefined variable: companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotation-view2.php 145
ERROR - 2019-12-10 12:07:05 --> Severity: Notice --> Undefined variable: companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotation-view2.php 145
ERROR - 2019-12-10 12:07:07 --> Severity: Notice --> Trying to get property 'from_address' of non-object C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 368
ERROR - 2019-12-10 12:07:07 --> Severity: Notice --> Trying to get property 'reply_address' of non-object C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 369
ERROR - 2019-12-10 12:07:07 --> Severity: Notice --> Trying to get property 'subject' of non-object C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 370
ERROR - 2019-12-10 12:07:07 --> Severity: Notice --> Trying to get property 'message' of non-object C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 371
ERROR - 2019-12-10 12:07:08 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\payroll\admin\system\libraries\Email.php 3803
ERROR - 2019-12-10 12:07:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\payroll\admin\system\core\Exceptions.php:541) C:\xampp\htdocs\payroll\admin\system\helpers\url_helper.php 1127
ERROR - 2019-12-10 12:22:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 38
ERROR - 2019-12-10 12:23:15 --> Severity: Notice --> Undefined variable: companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotation-view2.php 145
ERROR - 2019-12-10 12:23:16 --> Severity: Notice --> Undefined variable: companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotation-view2.php 145
ERROR - 2019-12-10 12:23:16 --> Severity: Notice --> Undefined variable: companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotation-view2.php 145
ERROR - 2019-12-10 12:23:16 --> Severity: Notice --> Trying to get property 'from_address' of non-object C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 368
ERROR - 2019-12-10 12:23:16 --> Severity: Notice --> Trying to get property 'reply_address' of non-object C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 369
ERROR - 2019-12-10 12:23:16 --> Severity: Notice --> Trying to get property 'subject' of non-object C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 370
ERROR - 2019-12-10 12:23:16 --> Severity: Notice --> Trying to get property 'message' of non-object C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 371
ERROR - 2019-12-10 12:23:17 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\payroll\admin\system\libraries\Email.php 3803
ERROR - 2019-12-10 12:23:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\payroll\admin\system\core\Exceptions.php:541) C:\xampp\htdocs\payroll\admin\system\helpers\url_helper.php 1127
