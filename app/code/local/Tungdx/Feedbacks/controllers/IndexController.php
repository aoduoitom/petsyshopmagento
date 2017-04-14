<?php

/**
 * Created by PhpStorm.
 * User: XUANTUNG
 * Date: 13/04/2017
 * Time: 14:41
 */
class Tungdx_Feedbacks_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        $this->loadLayout();
        $block = $this->getLayout()->createBlock(
          'Mage_Core_Block_Template', 'tungdx_feedbacks.feedback', array(
              'template' => 'tungdx_feedbacks/feedbacks.phtml'
            )
        );
        $this->getLayout()->getBlock('content')->append($block);
        $this->_initLayoutMessages('core/session');
        $this->renderLayout();
        /*echo '<pre>';
        echo debug_print_backtrace();*/
    }

    public function postAction() {

        $data = $this->getRequest()->getPost();
        if ($data) {
            $model = Mage::getModel('tungdx_feedbacks/feedback');
            /*print_r($data);
            die();*/
            $model->setData($data);
            try {
                if ($model->getCreateTime() == NULL || $model->getUpdateTime() == NULL) {
                    $model->setCreateTime(now())
                        ->setUpdateTime(now());
                } else {
                    $model->setUpdateTime(now());
                }
                $model->setCustomerName($data['customer_name'])
                        ->setCustomerEmail($data['customer_email'])
                        ->setCustomerFeedback($data['customer_feedback'])
                        ->save();
                $model->unsetData();
                Mage::getSingleton('core/session')->addSuccess(Mage::helper('tungdx_feedbacks')->__('Item was successfully saved!'));
                Mage::getSingleton('core/session')->setFormData(false);
                if($this->getRequest()->getParam('back')) {
                    $this->_redirect('*/*/edit', array('id' => $model->getFeedbackId()));
                    return;
                }
                $this->_redirect('*/*/', array('_query' => 'post=success'));
                return;
            } catch(Exception $e) {
                Mage::getSingleton('core/session')->addError(Mage::helper('feedback')->__('Unable to find item to save!'));
                $this->_redirect('*/*/');
            }
        }
    }
}