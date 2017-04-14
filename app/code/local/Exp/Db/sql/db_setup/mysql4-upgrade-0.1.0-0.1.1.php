<?php
/**
 * Created by PhpStorm.
 * User: XUANTUNG
 * Date: 13/04/2017
 * Time: 09:22
 */

$installer = $this;
$installer->startSetup();
$installer->getConnection()
    ->addColumn($installer->getTable('articles'), 'content', array(
       'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
        'nullable' => 'false'
    ));
$installer->endSetup();