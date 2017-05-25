<?php 
require_once(__DIR__.'/../../../../core.php');
class compositions extends Dataset
{
	public static $profile= array(
		'target' =>'compositions',
		'Accessor'=>array( 
			'Primary' => 'id',
			'Reference'=>array(  array('','',''), array('','',''), array('','',''), array('SellerSumo','permissions','maingroup'), array('SellerSumo','types','id'), array('SellerSumo','types','id'), array('SellerSumo','types','id'), array('SellerSumo','operator','id'), array('SellerSumo','users','id'),)),
		'header'=>array( 
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'parent' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'parent', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'type', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '1', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'owner' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'owner', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '1', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'operator' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'operator', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '1', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'content_type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'content_type', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'content' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'content', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'auth_needed' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'auth_needed', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'permissions' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'permissions', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '1', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'meta' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'meta', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'self' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'self', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'root' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'root', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '1', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'active' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'active', 'ORDINAL_POSITION' => '13', 'COLUMN_DEFAULT' => '1', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'title' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'title', 'ORDINAL_POSITION' => '14', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'alias' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'alias', 'ORDINAL_POSITION' => '15', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'mediapath' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'mediapath', 'ORDINAL_POSITION' => '16', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'descript' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'descript', 'ORDINAL_POSITION' => '17', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'layout_structure' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'compositions', 'COLUMN_NAME' => 'layout_structure', 'ORDINAL_POSITION' => '18', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'text',),
		)
	);
	public $data;
}
?>