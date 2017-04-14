<?php

/**
 * Created by PhpStorm.
 * User: XUANTUNG
 * Date: 13/04/2017
 * Time: 16:00
 */
class Tungdx_Feedbacks_Model_Feedback extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent ::_construct();
        $this->_init('tungdx_feedbacks/feedback');
    }

    public function getAvailableVisiblities() {
        return array(
            self::VISIBILITY_HIDDEN => Mage::helper('tungdx_feedbacks')->__('Hidden'),
            self::VISIBILITY_DIRECTORY => Mage::helper('tungdx_feedbacks')->__('Visibility in directory')
        );
    }

    protected function _beforeSave() {
        parent ::_beforeSave();

        $this->_updateTimeStamps();
        $this->_prepareUrlKey();

        return $this;
    }

    protected function _updateTimeStamps() {
        $timestamp = now();

        $this->setUpdateAt($timestamp);

        if ($this->isObjectNew()) {
            $this->setCreatedAt($timestamp);
        }

        return $this;
    }

    protected function _prepareUrlKey() {

        return $this;
    }
}