<?php

/**
 * Created by PhpStorm.
 * User: XUANTUNG
 * Date: 13/04/2017
 * Time: 16:00
 */
class Tungdx_Feedbacks_Model_Resource_Feedback extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct() {
        $this->_init('tungdx_feedbacks/customer_feedbacks','feedback_id');
    }
}