<?php

/**
 * Created by PhpStorm.
 * User: XUANTUNG
 * Date: 13/04/2017
 * Time: 14:42
 */
class Tungdx_Feedbacks_Adminhtml_FeedbackController extends Mage_Adminhtml_Controller_Action {
    public function indexAction() {
        $feedbackBlock = $this->getLayout()->createBlock('tungdx_feedbacks_adminhtml/feedbacks');
        $this->loadLayout();
        $this->_setActiveMenu('tungdx_feedbacks');
        $this->_addContent($feedbackBlock);
        $this->renderLayout();
    }

    public function gridAction() {
        $this->loadLayout();
        $this->_removeButton('add');
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('tungdx_feedbacks/adminhtml_feedback_grid')->toHtml()
        );
    }
}