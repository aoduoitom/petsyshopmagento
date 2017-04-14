<?php

class Exp_Hello_IndexController extends Mage_Core_Controller_Front_Action {

	public function indexAction() {
		$this->loadLayout();
		$this->renderLayout();
	}

	public function saveAction(){
	    $content = ''.$this->getRequest()->getPost('content');

	    if (isset($content) && $content!='') {
	        $data = Mage::getModel('exp_hello/waystosayhello');
	        $data->setContent($content);
	        $data->save();
        }
        $this->_redirect('waystosayhello');
    }

}

/* End of file IndexController.php */
/* Location: .//C/xampp/htdocs/magento/app/code/local/Exp/Hello/controllers/IndexController.php */