<?php

/**
 * Created by PhpStorm.
 * User: XUANTUNG
 * Date: 12/04/2017
 * Time: 15:26
 */
class Exp_Hello_Model_Hello extends Mage_Core_Model_Abstract {
    function _construct() {
        parent::_construct();
        $this->_init('exp_hello/waystosayhello');
    }
}