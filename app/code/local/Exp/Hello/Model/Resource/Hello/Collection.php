<?php

/**
 * Created by PhpStorm.
 * User: XUANTUNG
 * Date: 12/04/2017
 * Time: 15:29
 */
class Exp_Hello_Model_Resource_Hello_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {
    public function _construct() {
        parent::_construct();
        $this->_init('exp_hello/waystosayhello');
    }
}