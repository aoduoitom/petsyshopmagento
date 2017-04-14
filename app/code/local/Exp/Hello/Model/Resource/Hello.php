<?php

/**
 * Created by PhpStorm.
 * User: XUANTUNG
 * Date: 12/04/2017
 * Time: 15:16
 */
class Exp_Hello_Model_Resource_Hello extends Mage_Core_Model_Resource_Db_Abstract {
    public function _construct() {
        $this->_init('exp_hello/waystosayhello', 'id');
    }

}