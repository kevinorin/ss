<?php 
require_once(__DIR__.'/../../../../core.php');
class components extends Dataset
{
	public static $profile= array(
		'target' =>'components',
		'Accessor'=>array( 
			'Primary' => 'id',
			'Reference'=>array(  array('SellerSumo','components','id'), array('SellerSumo','components','id'), array('SellerSumo','components','id'), array('SellerSumo','components','id'), array('SellerSumo','types','id'),)),
		'header'=>array( 
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'components', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'components', 'COLUMN_NAME' => 'type', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'inside' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'components', 'COLUMN_NAME' => 'inside', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'contains' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'components', 'COLUMN_NAME' => 'contains', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'continued' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'components', 'COLUMN_NAME' => 'continued', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'owner' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'components', 'COLUMN_NAME' => 'owner', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>