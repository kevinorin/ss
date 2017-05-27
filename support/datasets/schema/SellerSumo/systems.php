<?php 
require_once(__DIR__.'/../../../../core.php');
class systems extends Dataset
{
	public static $profile= array(
		'target' =>'systems',
		'Accessor'=>array( 'Primary' => 'id'),
		'header'=>array( 
			'global_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'systems', 'COLUMN_NAME' => 'global_id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'branch_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'systems', 'COLUMN_NAME' => 'branch_id', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'systems', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'root' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'systems', 'COLUMN_NAME' => 'root', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'parent' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'systems', 'COLUMN_NAME' => 'parent', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'systems', 'COLUMN_NAME' => 'type', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '7', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'triggers' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'systems', 'COLUMN_NAME' => 'triggers', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'owner' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'systems', 'COLUMN_NAME' => 'owner', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'profile' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'systems', 'COLUMN_NAME' => 'profile', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>