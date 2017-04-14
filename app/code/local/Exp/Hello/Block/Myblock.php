<?php

class Exp_Hello_Block_Myblock extends Mage_Core_Block_Template {

	public function helloBlock() {
		$result = '';
		$collection = Mage::getModel('exp_hello/waystosayhello')->getCollection()->setOrder('id', 'asc');

		foreach($collection as $data) {
		    $result .= $data->getData('content').'<br>';
        }

        Mage::getSingleton('adminhtml/session')->addSuccess('Success!');

		return $result;
	}

}

/* End of file Myblock.php */
/* Location: .//C/xampp/htdocs/magento/app/code/local/Exp/Hello/Block/Myblock.php */