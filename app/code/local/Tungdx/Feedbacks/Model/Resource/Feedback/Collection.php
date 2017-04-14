<?php

/**
 * Created by PhpStorm.
 * User: XUANTUNG
 * Date: 13/04/2017
 * Time: 16:01
 */
class Tungdx_Feedbacks_Model_Resource_Feedback_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {
    protected function _construct() {
        parent ::_construct();

        $this->_init('tungdx_feedbacks/feedback', 'tungdx_feedbacks/feedback');
    }
}