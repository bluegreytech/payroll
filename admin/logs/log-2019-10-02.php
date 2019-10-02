ERROR - 2019-10-02 08:20:27 --> Query error: Unknown column 't1.Companynotificationid' in 'where clause' - Invalid query: SELECT `t1`.*, `t2`.*, `t3`.*
FROM `tblcompany` as `t1`
LEFT JOIN `tblcompanynotification` as `t2` ON `t1`.`companyid` = `t2`.`companyid`
LEFT JOIN `tblcomnotdocument` as `t3` ON `t2`.`Companynotificationid` = `t3`.`Companynotificationid`
WHERE `t1`.`Companynotificationid` = 4
