<?php

/**
 * Created by PhpStorm.
 * User: XUANTUNG
 * Date: 13/04/2017
 * Time: 10:01
 */
class Exp_Hello_Model_Observer extends Varien_Event_Observer {
    public function __construct() {

    }

    public function saveCmsPageObserver($observer) {
        $event = $observer->getEvent();
        $model = $event->getPage();
        /*echo "<pre>";
        print_r($model->getData());
        die('test');*/
    }
}

