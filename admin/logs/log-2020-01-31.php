<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-31 05:46:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 38
ERROR - 2020-01-31 05:55:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 38
ERROR - 2020-01-31 05:55:51 --> Severity: Warning --> Use of undefined constant NO_RIGHTS - assumed 'NO_RIGHTS' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\payroll\admin\application\views\common\noRights.php 31
ERROR - 2020-01-31 06:01:56 --> Query error: Table 'payrolldb.tblcomnotdocument' doesn't exist - Invalid query: SELECT `t1`.*, `t2`.*, `t3`.*, `t4`.*, `t5`.*, `t6`.*
FROM `tblcompany` as `t1`
LEFT JOIN `tblcompanytype` as `t2` ON `t1`.`companytypeid` = `t2`.`companytypeid`
LEFT JOIN `tblcompanycompliances` as `t3` ON `t1`.`companyid` = 25
LEFT JOIN `tblstate` as `t4` ON `t1`.`stateid` = `t4`.`stateid`
LEFT JOIN `tblcompanynotification` as `t5` ON `t1`.`companyid` = `t5`.`companyid`
LEFT JOIN `tblcomnotdocument` as `t6` ON `t5`.`Companynotificationid` = `t6`.`Companynotificationid`
WHERE `t1`.`companyid` = '25'
ERROR - 2020-01-31 06:32:19 --> Query error: Unknown column 'Documenttitle' in 'field list' - Invalid query: INSERT INTO `tblcompanynotification` (`companyid`, `Documenttitle`, `Notificationdescription`, `Enddate`, `Isactive`, `Createdby`, `Createdon`) VALUES ('25', 'test', '<p>test&nbsp;test&nbsp;test&nbsp;test</p>\r\n', '2020-01-31', 'Active', 1, '2020-01-31 06:32:19')
ERROR - 2020-01-31 06:34:31 --> Query error: Table 'payrolldb.tblcomnotdocument' doesn't exist - Invalid query: INSERT INTO `tblcomnotdocument` (`Companynotificationid`, `Documentfile`, `Isactive`, `Createdby`, `Createdon`) VALUES (1, '36751Document.jpg', 'Active', '1', '2020-01-31 06:34:31')
ERROR - 2020-01-31 06:37:52 --> Severity: Notice --> Trying to get property 'from_address' of non-object C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 379
ERROR - 2020-01-31 06:37:52 --> Severity: Notice --> Trying to get property 'reply_address' of non-object C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 380
ERROR - 2020-01-31 06:37:53 --> Severity: Notice --> Trying to get property 'subject' of non-object C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 381
ERROR - 2020-01-31 06:37:53 --> Severity: Notice --> Trying to get property 'message' of non-object C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 382
ERROR - 2020-01-31 06:37:54 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\payroll\admin\system\libraries\Email.php 3803
ERROR - 2020-01-31 06:37:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\payroll\admin\system\core\Exceptions.php:541) C:\xampp\htdocs\payroll\admin\system\helpers\url_helper.php 1127
ERROR - 2020-01-31 06:38:29 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 250
ERROR - 2020-01-31 06:38:29 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 253
ERROR - 2020-01-31 06:38:29 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 06:38:29 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 250
ERROR - 2020-01-31 06:38:29 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 253
ERROR - 2020-01-31 06:38:29 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 06:41:05 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 251
ERROR - 2020-01-31 06:41:05 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 06:41:05 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 251
ERROR - 2020-01-31 06:41:05 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 06:41:28 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 06:41:28 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 10:22:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 38
ERROR - 2020-01-31 10:23:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\controllers\Login.php 38
ERROR - 2020-01-31 10:39:35 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 10:39:35 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 10:41:00 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 10:41:00 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 10:41:09 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 10:41:09 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 10:41:23 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 10:41:23 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 10:41:24 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 10:41:25 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 10:41:28 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 263
ERROR - 2020-01-31 10:43:44 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 269
ERROR - 2020-01-31 12:27:19 --> Severity: Notice --> Undefined property: stdClass::$Status C:\xampp\htdocs\payroll\admin\application\views\Company\notificationlist.php 269
