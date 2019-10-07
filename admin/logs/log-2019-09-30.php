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
ERROR - 2019-09-30 08:36:00 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 380
ERROR - 2019-09-30 08:36:00 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 405
ERROR - 2019-09-30 08:36:00 --> Severity: Notice --> Undefined variable: Branch C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 557
ERROR - 2019-09-30 08:36:00 --> Severity: Notice --> Undefined variable: Bankname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 564
ERROR - 2019-09-30 08:36:00 --> Severity: Notice --> Undefined variable: Accountnumber C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 571
ERROR - 2019-09-30 08:36:00 --> Severity: Notice --> Undefined variable: Ibannumber C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 578
ERROR - 2019-09-30 08:36:00 --> Severity: Notice --> Undefined variable: Swiftcode C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 585
ERROR - 2019-09-30 08:36:07 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 380
ERROR - 2019-09-30 08:36:07 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 405
ERROR - 2019-09-30 08:36:07 --> Severity: Notice --> Undefined variable: Branch C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 557
ERROR - 2019-09-30 08:36:07 --> Severity: Notice --> Undefined variable: Bankname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 564
ERROR - 2019-09-30 08:36:07 --> Severity: Notice --> Undefined variable: Accountnumber C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 571
ERROR - 2019-09-30 08:36:07 --> Severity: Notice --> Undefined variable: Ibannumber C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 578
ERROR - 2019-09-30 08:36:07 --> Severity: Notice --> Undefined variable: Swiftcode C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 585
ERROR - 2019-09-30 08:36:24 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 380
ERROR - 2019-09-30 08:36:24 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 405
ERROR - 2019-09-30 08:36:24 --> Severity: Notice --> Undefined variable: Branch C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 557
ERROR - 2019-09-30 08:36:24 --> Severity: Notice --> Undefined variable: Bankname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 564
ERROR - 2019-09-30 08:36:24 --> Severity: Notice --> Undefined variable: Accountnumber C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 571
ERROR - 2019-09-30 08:36:24 --> Severity: Notice --> Undefined variable: Ibannumber C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 578
ERROR - 2019-09-30 08:36:24 --> Severity: Notice --> Undefined variable: Swiftcode C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 585
ERROR - 2019-09-30 08:37:46 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 354
ERROR - 2019-09-30 08:37:46 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 379
ERROR - 2019-09-30 08:37:46 --> Severity: Notice --> Undefined variable: Branch C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 531
ERROR - 2019-09-30 08:37:46 --> Severity: Notice --> Undefined variable: Bankname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 538
ERROR - 2019-09-30 08:37:46 --> Severity: Notice --> Undefined variable: Accountnumber C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 545
ERROR - 2019-09-30 08:37:46 --> Severity: Notice --> Undefined variable: Ibannumber C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 552
ERROR - 2019-09-30 08:37:46 --> Severity: Notice --> Undefined variable: Swiftcode C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 559
ERROR - 2019-09-30 08:38:09 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 355
ERROR - 2019-09-30 08:38:09 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 380
ERROR - 2019-09-30 08:38:09 --> Severity: Notice --> Undefined variable: Branch C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 532
ERROR - 2019-09-30 08:38:09 --> Severity: Notice --> Undefined variable: Bankname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 539
ERROR - 2019-09-30 08:38:09 --> Severity: Notice --> Undefined variable: Accountnumber C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 546
ERROR - 2019-09-30 08:38:09 --> Severity: Notice --> Undefined variable: Ibannumber C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 553
ERROR - 2019-09-30 08:38:09 --> Severity: Notice --> Undefined variable: Swiftcode C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 560
ERROR - 2019-09-30 08:39:39 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 355
ERROR - 2019-09-30 08:39:39 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 380
ERROR - 2019-09-30 08:39:39 --> Severity: Notice --> Undefined variable: Branch C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 532
ERROR - 2019-09-30 08:39:39 --> Severity: Notice --> Undefined variable: Bankname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 539
ERROR - 2019-09-30 08:39:39 --> Severity: Notice --> Undefined variable: Accountnumber C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 546
ERROR - 2019-09-30 08:39:39 --> Severity: Notice --> Undefined variable: Ibannumber C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 553
ERROR - 2019-09-30 08:39:39 --> Severity: Notice --> Undefined variable: Swiftcode C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 560
ERROR - 2019-09-30 08:41:19 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 355
ERROR - 2019-09-30 08:41:19 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 380
ERROR - 2019-09-30 08:42:37 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 355
ERROR - 2019-09-30 08:42:37 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 380
ERROR - 2019-09-30 08:43:17 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 355
ERROR - 2019-09-30 08:43:17 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 380
ERROR - 2019-09-30 08:44:42 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 355
ERROR - 2019-09-30 08:44:42 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 380
ERROR - 2019-09-30 08:45:38 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 355
ERROR - 2019-09-30 08:45:38 --> Severity: Notice --> Undefined variable: Shiftname C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 380
ERROR - 2019-09-30 09:12:20 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 489
ERROR - 2019-09-30 09:12:20 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 495
ERROR - 2019-09-30 09:12:20 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 495
ERROR - 2019-09-30 09:12:20 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:12:20 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:12:20 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 510
ERROR - 2019-09-30 09:12:20 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 510
ERROR - 2019-09-30 09:14:57 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 938
ERROR - 2019-09-30 09:15:43 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:15:43 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:15:43 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:15:43 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:15:43 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:15:43 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:15:43 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:18:08 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:18:08 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:18:08 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:18:08 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:18:08 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:18:08 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:18:08 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:19:06 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:19:06 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:19:06 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:19:06 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:19:06 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:19:07 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:19:07 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:20:10 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:20:10 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:20:10 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:20:10 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:20:10 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:20:10 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:20:10 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:21:34 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:21:34 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:21:34 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:21:34 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:21:34 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:21:34 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:21:34 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:24:40 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:24:40 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:24:40 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:24:40 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:24:40 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:24:40 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:24:40 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:24:42 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:24:42 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:24:42 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:24:42 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:24:42 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:24:42 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:24:42 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:26:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 624
ERROR - 2019-09-30 09:27:03 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:27:03 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:27:03 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:27:03 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:27:03 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:27:03 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:27:03 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:28:10 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 624
ERROR - 2019-09-30 09:29:07 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:29:07 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:29:07 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:29:07 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:29:07 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:29:07 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:29:07 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:29:08 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:29:08 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:29:08 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:29:08 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:29:08 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:29:08 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:29:08 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:29:14 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:29:14 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:29:14 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:29:14 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:29:14 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:29:14 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:29:14 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:29:15 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:29:15 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:29:15 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:29:15 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:29:15 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:29:15 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:29:15 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:29:38 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:29:38 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:29:38 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:29:38 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:29:38 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:29:38 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:29:38 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:29:40 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:29:40 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:29:40 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:29:40 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:29:40 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:29:40 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:29:40 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:33:23 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:33:23 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:33:23 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:33:23 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:33:23 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:33:23 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:33:23 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:38:39 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:38:39 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:38:39 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:38:39 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:38:39 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:38:39 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:38:39 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:38:40 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:38:40 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:38:40 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:38:40 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:38:40 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:38:40 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:38:40 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:38:49 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:38:49 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:38:49 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:38:49 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:38:49 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:38:49 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:38:49 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:40:49 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:40:49 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:40:49 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:40:49 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:40:49 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:40:49 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:40:49 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:40:55 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:40:55 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:40:55 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:40:55 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:40:55 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:40:55 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:40:55 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:43:37 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:43:37 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:43:37 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:43:37 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:43:37 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:43:37 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:43:37 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:44:11 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:44:11 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:44:11 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:44:11 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:44:11 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:44:11 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:44:11 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:49:13 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 09:49:13 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:49:13 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 09:49:13 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:49:13 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 09:49:13 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 09:49:13 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 10:16:41 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 10:16:41 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 10:16:41 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 10:16:41 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 10:16:41 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 10:16:41 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 10:16:41 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 10:17:05 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 10:17:05 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 10:17:05 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 10:17:05 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 10:17:05 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 10:17:05 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 10:17:05 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 10:18:28 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 10:18:28 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 10:18:28 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 10:18:28 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 10:18:28 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 10:18:28 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 10:18:28 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 10:18:28 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 10:18:28 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 10:18:29 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 10:18:29 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 10:18:29 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 10:18:29 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 10:18:29 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 10:18:35 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 496
ERROR - 2019-09-30 10:18:35 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 10:18:35 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 502
ERROR - 2019-09-30 10:18:35 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 10:18:35 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 509
ERROR - 2019-09-30 10:18:35 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 10:18:35 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 517
ERROR - 2019-09-30 10:22:33 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 425
ERROR - 2019-09-30 10:22:33 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:22:33 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:22:33 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:22:33 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:22:33 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:22:33 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:22:34 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 425
ERROR - 2019-09-30 10:22:34 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:22:34 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:22:34 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:22:34 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:22:34 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:22:34 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:23:11 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 425
ERROR - 2019-09-30 10:23:11 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:23:11 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:23:11 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:23:11 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:23:11 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:23:11 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:23:41 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 425
ERROR - 2019-09-30 10:23:41 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:23:41 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:23:41 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:23:41 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:23:41 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:23:41 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:23:59 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 425
ERROR - 2019-09-30 10:23:59 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:23:59 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:23:59 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:23:59 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:23:59 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:23:59 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:24:11 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 425
ERROR - 2019-09-30 10:24:11 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:24:12 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:24:12 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:24:12 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:24:12 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:24:12 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:26:25 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 425
ERROR - 2019-09-30 10:26:25 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:26:25 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:26:25 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:26:25 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:26:25 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:26:25 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:28:25 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 425
ERROR - 2019-09-30 10:28:25 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:28:25 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:28:25 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:28:25 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:28:25 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:28:25 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:29:01 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 425
ERROR - 2019-09-30 10:29:01 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:29:01 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 431
ERROR - 2019-09-30 10:29:01 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:29:01 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 438
ERROR - 2019-09-30 10:29:01 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:29:01 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 446
ERROR - 2019-09-30 10:33:34 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 424
ERROR - 2019-09-30 10:33:34 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 430
ERROR - 2019-09-30 10:33:34 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 430
ERROR - 2019-09-30 10:33:34 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 437
ERROR - 2019-09-30 10:33:34 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 437
ERROR - 2019-09-30 10:33:34 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 445
ERROR - 2019-09-30 10:33:34 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 445
ERROR - 2019-09-30 10:35:49 --> Severity: Notice --> Undefined variable: i C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 424
ERROR - 2019-09-30 10:35:49 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 430
ERROR - 2019-09-30 10:35:49 --> Severity: Notice --> Trying to get property 'Shiftname' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 430
ERROR - 2019-09-30 10:35:49 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 437
ERROR - 2019-09-30 10:35:49 --> Severity: Notice --> Trying to get property 'Shiftintime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 437
ERROR - 2019-09-30 10:35:49 --> Severity: Notice --> Undefined variable: shift C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 445
ERROR - 2019-09-30 10:35:49 --> Severity: Notice --> Trying to get property 'Shiftouttime' of non-object C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 445
ERROR - 2019-09-30 11:01:11 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_query_builder.php 2442
ERROR - 2019-09-30 11:01:11 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: UPDATE `tblcompanyshift` SET `companyid` = '2', `Shifthours` = '16', `Shiftname` = 'first', `Shiftintime` = '12:59', `Shiftouttime` = '12:59'
WHERE `Companyshiftid` = Array
ERROR - 2019-09-30 11:01:43 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 876
ERROR - 2019-09-30 11:12:27 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 991
ERROR - 2019-09-30 11:12:27 --> Severity: Notice --> Undefined offset: 3 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 991
ERROR - 2019-09-30 11:13:16 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_query_builder.php 2442
ERROR - 2019-09-30 11:13:16 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: UPDATE `tblcompanyshift` SET `Companyshiftid` = '4', `companyid` = '2', `Shifthours` = '16', `Shiftname` = 'first', `Shiftintime` = '12:59', `Shiftouttime` = '12:59'
WHERE `Companyshiftid` = Array
ERROR - 2019-09-30 11:13:37 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 991
ERROR - 2019-09-30 11:13:37 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 999
ERROR - 2019-09-30 11:13:37 --> Severity: Notice --> Undefined offset: 3 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 991
ERROR - 2019-09-30 11:13:37 --> Severity: Notice --> Undefined offset: 3 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 999
ERROR - 2019-09-30 11:14:04 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 991
ERROR - 2019-09-30 11:14:04 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 999
ERROR - 2019-09-30 11:14:04 --> Severity: Notice --> Undefined offset: 3 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 991
ERROR - 2019-09-30 11:14:04 --> Severity: Notice --> Undefined offset: 3 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 999
ERROR - 2019-09-30 11:15:22 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 999
ERROR - 2019-09-30 11:15:22 --> Severity: Notice --> Undefined offset: 3 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 999
ERROR - 2019-09-30 11:16:39 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:16:39 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: UPDATE `tblcompanyshift` SET `Companyshiftid` = Array, `companyid` = '2', `Shifthours` = '16', `Shiftname` = 'first', `Shiftintime` = '12:59', `Shiftouttime` = '12:59'
WHERE `Companyshiftid` = '4'
ERROR - 2019-09-30 11:17:02 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:17:02 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:17:02 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:17:02 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:17:02 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: UPDATE `tblcompanyshift` SET `Companyshiftid` = Array, `companyid` = '2', `Shifthours` = '16', `Shiftname` = Array, `Shiftintime` = Array, `Shiftouttime` = Array
WHERE `Companyshiftid` = '4'
ERROR - 2019-09-30 11:18:04 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:18:04 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:18:04 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:18:04 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:18:04 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_query_builder.php 2442
ERROR - 2019-09-30 11:18:04 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: UPDATE `tblcompanyshift` SET `Companyshiftid` = Array, `companyid` = '2', `Shifthours` = '16', `Shiftname` = Array, `Shiftintime` = Array, `Shiftouttime` = Array
WHERE `Companyshiftid` = Array
ERROR - 2019-09-30 11:18:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\payroll\admin\system\core\Exceptions.php:271) C:\xampp\htdocs\payroll\admin\system\core\Common.php 570
ERROR - 2019-09-30 11:20:46 --> Severity: Notice --> Undefined variable: Companyshiftid C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 980
ERROR - 2019-09-30 11:22:19 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 1001
ERROR - 2019-09-30 11:22:19 --> Severity: Notice --> Undefined offset: 3 C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 1001
ERROR - 2019-09-30 11:34:46 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 987
ERROR - 2019-09-30 11:34:46 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 988
ERROR - 2019-09-30 11:34:46 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 989
ERROR - 2019-09-30 11:34:46 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 987
ERROR - 2019-09-30 11:34:46 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 988
ERROR - 2019-09-30 11:34:46 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 989
ERROR - 2019-09-30 11:34:46 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 987
ERROR - 2019-09-30 11:34:46 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 988
ERROR - 2019-09-30 11:34:46 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 989
ERROR - 2019-09-30 11:34:46 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 987
ERROR - 2019-09-30 11:34:46 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 988
ERROR - 2019-09-30 11:34:46 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 989
ERROR - 2019-09-30 11:36:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 987
ERROR - 2019-09-30 11:36:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 988
ERROR - 2019-09-30 11:36:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 989
ERROR - 2019-09-30 11:36:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 987
ERROR - 2019-09-30 11:36:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 988
ERROR - 2019-09-30 11:36:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 989
ERROR - 2019-09-30 11:36:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 987
ERROR - 2019-09-30 11:36:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 988
ERROR - 2019-09-30 11:36:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 989
ERROR - 2019-09-30 11:36:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 987
ERROR - 2019-09-30 11:36:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 988
ERROR - 2019-09-30 11:36:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 989
ERROR - 2019-09-30 11:38:12 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 876
ERROR - 2019-09-30 11:40:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 421
ERROR - 2019-09-30 11:40:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 421
ERROR - 2019-09-30 11:41:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 421
ERROR - 2019-09-30 11:41:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 421
ERROR - 2019-09-30 11:41:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 421
ERROR - 2019-09-30 11:41:29 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 421
ERROR - 2019-09-30 11:42:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 422
ERROR - 2019-09-30 11:42:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 422
ERROR - 2019-09-30 11:43:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 422
ERROR - 2019-09-30 11:43:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\payroll\admin\application\views\Company\companyadd.php 422
ERROR - 2019-09-30 11:52:20 --> Severity: error --> Exception: syntax error, unexpected end of file, expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 1066
ERROR - 2019-09-30 11:53:15 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:53:15 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: UPDATE `tblcompanyshift` SET `Companyshiftid` = Array, `companyid` = '2', `Shifthours` = '16', `Shiftname` = 'first1', `Shiftintime` = '12:59', `Shiftouttime` = '12:59'
WHERE `Companyshiftid` = '4'
ERROR - 2019-09-30 11:53:50 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:53:50 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_query_builder.php 2442
ERROR - 2019-09-30 11:53:50 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: UPDATE `tblcompanyshift` SET `Companyshiftid` = Array, `companyid` = '2', `Shifthours` = '16', `Shiftname` = 'first1', `Shiftintime` = '12:59', `Shiftouttime` = '12:59'
WHERE `Companyshiftid` = Array
ERROR - 2019-09-30 11:54:05 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:54:05 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_query_builder.php 2442
ERROR - 2019-09-30 11:54:05 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: UPDATE `tblcompanyshift` SET `Companyshiftid` = Array, `companyid` = '2', `Shifthours` = '16', `Shiftname` = 'first1', `Shiftintime` = '12:59', `Shiftouttime` = '12:59'
WHERE `Companyshiftid` = Array
ERROR - 2019-09-30 11:54:44 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:54:44 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_query_builder.php 2442
ERROR - 2019-09-30 11:54:44 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: UPDATE `tblcompanyshift` SET `Companyshiftid` = Array, `companyid` = '2', `Shifthours` = '16', `Shiftname` = 'first', `Shiftintime` = '12:59', `Shiftouttime` = '12:59'
WHERE `Companyshiftid` = Array
ERROR - 2019-09-30 11:55:54 --> Severity: 4096 --> Object of class CI_DB_mysqli_driver could not be converted to string C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 998
ERROR - 2019-09-30 11:55:54 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\payroll\admin\system\database\DB_driver.php 1519
ERROR - 2019-09-30 11:55:54 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: UPDATE `tblcompanyshift` SET `Companyshiftid` = Array, `companyid` = '2', `Shifthours` = '16', `Shiftname` = 'first', `Shiftintime` = '12:59', `Shiftouttime` = '12:59'
WHERE `Companyshiftid` = '4'
ERROR - 2019-09-30 11:56:53 --> Severity: 4096 --> Object of class CI_DB_mysqli_driver could not be converted to string C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 998
ERROR - 2019-09-30 11:56:53 --> Severity: 4096 --> Object of class CI_DB_mysqli_driver could not be converted to string C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 998
ERROR - 2019-09-30 13:02:10 --> Severity: Notice --> Undefined variable: companyid C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 12
ERROR - 2019-09-30 13:02:50 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\payroll\admin\application\controllers\Company.php 14
ERROR - 2019-09-30 13:02:50 --> Severity: Notice --> Undefined variable: companyData C:\xampp\htdocs\payroll\admin\application\views\Company\sendnotification.php 48
ERROR - 2019-09-30 13:06:46 --> Severity: Notice --> Undefined variable: atch C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 176
ERROR - 2019-09-30 13:11:37 --> 404 Page Not Found: Upload/company
ERROR - 2019-09-30 13:11:37 --> 404 Page Not Found: Upload/company
ERROR - 2019-09-30 13:22:23 --> Severity: Notice --> Undefined variable: comemailaddress C:\xampp\htdocs\payroll\admin\application\models\Company_model.php 38
ERROR - 2019-09-30 13:29:41 --> Query error: Unknown column 't1.tblcompany' in 'where clause' - Invalid query: SELECT `t1`.*, `t2`.*, `t3`.*
FROM `tblcompany` as `t1`
LEFT JOIN `tblcompanynotification` as `t2` ON `t1`.`companyid` = `t2`.`companyid`
LEFT JOIN `tblcomnotdocument` as `t3` ON `t2`.`Companynotificationid` = `t3`.`Companynotificationid`
WHERE `t1`.`tblcompany` = 1
ERROR - 2019-09-30 13:40:51 --> Severity: Notice --> Undefined variable: documentData C:\xampp\htdocs\payroll\admin\application\views\Company\profile.php 81
ERROR - 2019-09-30 13:58:13 --> Severity: Notice --> Undefined variable: redirect_page C:\xampp\htdocs\payroll\admin\application\views\dashboard\adminlist.php 122
ERROR - 2019-09-30 13:58:33 --> 404 Page Not Found: Assets/img
