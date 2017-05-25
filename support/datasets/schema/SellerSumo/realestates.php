<?php 
require_once(__DIR__.'/../../../../core.php');
class realestates extends Dataset
{
	public static $profile= array(
		'target' =>'realestates',
		'Accessor'=>array( 'Primary' => 'id'),
		'header'=>array( 
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'realestates', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'provider' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'realestates', 'COLUMN_NAME' => 'provider', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '1', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'smallint',),
			'embed' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'realestates', 'COLUMN_NAME' => 'embed', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>