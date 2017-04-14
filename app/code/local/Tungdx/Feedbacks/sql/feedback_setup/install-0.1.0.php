<?php
/**
 * Created by PhpStorm.
 * User: XUANTUNG
 * Date: 13/04/2017
 * Time: 14:26
 */

$installer = $this;
$installer->startSetup();

$table = $installer->getConnection()->newTable($installer->getTable('customer_feedbacks'))
    ->addColumn('feedback_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'unsigned' => 'true',
        'nullable' => 'false',
        'primary'  => 'true',
        'identity' => 'true'
    ), 'Feedback ID')
    ->addColumn('customer_name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => 'false',
        'default'  => ''
    ), 'Customer Name')
    ->addColumn('customer_email', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => 'false',
        'default'  => ''
    ), 'Customer Email')
    ->addColumn('customer_feedback', Varien_Db_Ddl_Table::TYPE_TEXT, NULL, array(
        'nullable' => 'false',
        'default'  => ''
    ), 'Feedback Content')
    ->setComment('Customer Feedbacks Table');
$installer->getConnection()->createTable($table);
$installer->endSetup();