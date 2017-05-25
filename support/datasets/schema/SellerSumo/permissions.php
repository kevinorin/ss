<?php 
require_once(__DIR__.'/../../../../core.php');
class permissions extends Dataset
{
	public static $profile= array(
		'target' =>'permissions',
		'Accessor'=>array( 'Primary' => 'maingroup'),
		'header'=>array( 
			'maingroup' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'permissions', 'COLUMN_NAME' => 'maingroup', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'whitelist' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'permissions', 'COLUMN_NAME' => 'whitelist', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'text',),
		)
	);
	public $data;
}
?>