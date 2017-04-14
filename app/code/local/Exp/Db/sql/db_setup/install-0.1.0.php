<?php
/**
 * Created by PhpStorm.
 * User: XUANTUNG
 * Date: 12/04/2017
 * Time: 16:51
 */

$installer = $this;
$installer->startSetup();

$table = $installer->getConnection()->newTable($installer->getTable('articles'))
    ->addColumn('article_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'unsigned' => 'true',
        'nullable' => 'false',
        'primary'  => 'true',
        'identity' => 'true'
        ), 'Article ID')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => 'false',
        'default'  => ''
        ), 'Article Title')
    ->addColumn('content', Varien_Db_Ddl_Table::TYPE_TEXT, NULL, array(
        'nullable' => 'false',
        'default'  => ''
        ), 'Article Content')
    ->setComment('Article Table');
$installer->getConnection()->createTable($table);
$installer->endSetup();