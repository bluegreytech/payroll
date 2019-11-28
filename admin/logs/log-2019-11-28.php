<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-28 08:32:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 38
ERROR - 2019-11-28 08:58:16 --> Query error: Unknown column 't1.companytypeid' in 'on clause' - Invalid query: SELECT `t1`.*, `t2`.*
FROM `tblquotation` as `t1`
LEFT JOIN `tblcompanytype` as `t2` ON `t1`.`companytypeid` = `t2`.`companytypeid`
WHERE `t1`.`isdelete` = '0'
ORDER BY `t1`.`quotationid` DESC
ERROR - 2019-11-28 08:58:23 --> Query error: Unknown column 't1.companytypeid' in 'on clause' - Invalid query: SELECT `t1`.*, `t2`.*
FROM `tblquotation` as `t1`
LEFT JOIN `tblcompanytype` as `t2` ON `t1`.`companytypeid` = `t2`.`companytypeid`
WHERE `t1`.`isdelete` = '0'
ORDER BY `t1`.`quotationid` DESC
ERROR - 2019-11-28 08:59:48 --> Severity: Notice --> Undefined property: stdClass::$companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotationlist.php 179
ERROR - 2019-11-28 08:59:48 --> Severity: Notice --> Undefined property: stdClass::$companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotationlist.php 179
ERROR - 2019-11-28 08:59:48 --> Severity: Notice --> Undefined property: stdClass::$companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotationlist.php 179
ERROR - 2019-11-28 09:00:57 --> Severity: Notice --> Undefined property: stdClass::$companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotationlist.php 179
ERROR - 2019-11-28 09:00:57 --> Severity: Notice --> Undefined property: stdClass::$companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotationlist.php 179
ERROR - 2019-11-28 09:00:57 --> Severity: Notice --> Undefined property: stdClass::$companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotationlist.php 179
ERROR - 2019-11-28 09:04:14 --> Query error: Unknown column 't1.companytypeid' in 'on clause' - Invalid query: SELECT `t1`.*, `t2`.*
FROM `tblquotation` as `t1`
LEFT JOIN `tblcompanytype` as `t2` ON `t1`.`companytypeid` = `t2`.`companytypeid`
WHERE `t1`.`isdelete` = '0'
AND  `companyname` LIKE '%Bluegrey Techs%' ESCAPE '!'
ERROR - 2019-11-28 09:05:03 --> Query error: Unknown column 't1.companytypeid' in 'on clause' - Invalid query: SELECT `t1`.*, `t2`.*
FROM `tblquotation` as `t1`
LEFT JOIN `tblcompanytype` as `t2` ON `t1`.`companytypeid` = `t2`.`companytypeid`
WHERE `t1`.`isdelete` = '0'
AND  `companyemail` LIKE '%mitnp16@gmail.com%' ESCAPE '!'
ERROR - 2019-11-28 09:09:39 --> Query error: Unknown column 't1.companytypeid' in 'on clause' - Invalid query: SELECT `t1`.*, `t2`.*, `t3`.*
FROM `tblquotation` as `t1`
LEFT JOIN `tblcompanytype` as `t2` ON `t1`.`companytypeid` = `t2`.`companytypeid`
LEFT JOIN `tblquotationdetail` as `t3` ON 5= `t3`.`quotationid`
WHERE `t1`.`quotationid` = '5'
ERROR - 2019-11-28 09:13:21 --> Query error: Unknown column 'quotation.companytypeid' in 'on clause' - Invalid query: SELECT `quotation`.*, `comptype`.*, `adminbank`.*
FROM `tblquotation` as `quotation`
LEFT JOIN `tblcompanytype` as `comptype` ON `quotation`.`companytypeid` = `comptype`.`companytypeid`
LEFT JOIN `tblsitesetting` as `adminbank` ON `RoleId`= `adminbank`.`RoleId`
WHERE `quotation`.`quotationid` = '5'
ERROR - 2019-11-28 09:15:36 --> Query error: Unknown column 'quotation.companytypeid' in 'on clause' - Invalid query: SELECT `quotation`.*, `comptype`.*, `adminbank`.*
FROM `tblquotation` as `quotation`
LEFT JOIN `tblcompanytype` as `comptype` ON `quotation`.`companytypeid` = `comptype`.`companytypeid`
LEFT JOIN `tblsitesetting` as `adminbank` ON `RoleId`= `adminbank`.`RoleId`
WHERE `quotation`.`quotationid` = '5'
ERROR - 2019-11-28 09:16:40 --> Severity: Notice --> Undefined index: companytypeid C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 640
ERROR - 2019-11-28 09:16:40 --> Severity: Notice --> Undefined index: companytype C:\xampp\htdocs\payroll\admin\application\controllers\Invoice.php 641
ERROR - 2019-11-28 09:17:37 --> 404 Page Not Found: Default/js
ERROR - 2019-11-28 09:17:37 --> 404 Page Not Found: Default/js
ERROR - 2019-11-28 09:17:37 --> 404 Page Not Found: Default/js
ERROR - 2019-11-28 09:17:37 --> 404 Page Not Found: Default/js
ERROR - 2019-11-28 09:17:37 --> 404 Page Not Found: Default/plugins
ERROR - 2019-11-28 09:17:37 --> 404 Page Not Found: Default/js
ERROR - 2019-11-28 09:17:37 --> 404 Page Not Found: Default/css
ERROR - 2019-11-28 09:17:37 --> 404 Page Not Found: Default/css
ERROR - 2019-11-28 09:18:33 --> Severity: Notice --> Undefined variable: companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotation-view.php 128
ERROR - 2019-11-28 09:18:34 --> 404 Page Not Found: Default/css
ERROR - 2019-11-28 09:18:34 --> 404 Page Not Found: Default/css
ERROR - 2019-11-28 09:18:34 --> 404 Page Not Found: Default/js
ERROR - 2019-11-28 09:18:34 --> 404 Page Not Found: Default/plugins
ERROR - 2019-11-28 09:18:34 --> 404 Page Not Found: Default/js
ERROR - 2019-11-28 09:18:34 --> 404 Page Not Found: Default/js
ERROR - 2019-11-28 09:18:35 --> 404 Page Not Found: Default/js
ERROR - 2019-11-28 09:18:35 --> 404 Page Not Found: Default/js
ERROR - 2019-11-28 09:19:27 --> Severity: Notice --> Undefined variable: companytype C:\xampp\htdocs\payroll\admin\application\views\Quotation\quotation-view.php 128
