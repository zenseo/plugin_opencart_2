<?php
/*
* ver. 3.0.0
* PayU Payment Modules
*
* @copyright  Copyright 2015 by PayU
* @license    http://opensource.org/licenses/GPL-3.0  Open Software License (GPL 3.0)
* http://www.payu.com
* http://twitter.com/openpayu
*/

class ModelPaymentPayu extends Model
{

    public function createDatabaseTables()
    {
        $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "payu_so` (
            `bind_id` int(11) NULL AUTO_INCREMENT PRIMARY KEY,
            `order_id` int(32) NOT NULL,
            `session_id` varchar(32) NOT NULL,
            `status` varchar(32)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
        $this->db->query($sql);
    }

    public function dropDatabaseTables()
    {
        $sql = "DROP TABLE IF EXISTS `" . DB_PREFIX . "payu_so`;";
        $this->db->query($sql);
    }
}