<?php
/**
 * Created by PhpStorm.
 * User: XUANTUNG
 * Date: 13/04/2017
 * Time: 15:17
 */
class Tungdx_Feedbacks_Adminhtml_Feedback extends Mage_Adminhtml_Block_Widget_Grid_Container {
    protected function _construct() {

        $this->_blockGroup = 'tungdx_feedbacks_adminhtml';

        $this->_controller = 'feedback';

        $this->_headerText = Mage::helper('tungdx_feedbacks')->__('Feedback');

        parent ::_construct();
    }
}