<?php 
require_once(__DIR__.'/../../../../core.php');
class users extends Dataset
{
	public static $profile= array(
		'target' =>'users',
		'Accessor'=>array( 
			'Primary' => 'id',
			'Reference'=>array(  array('','',''), array('','',''), array('','',''),)),
		'header'=>array( 
			'USER' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'users', 'COLUMN_NAME' => 'USER', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'char',),
			'CURRENT_CONNECTIONS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'users', 'COLUMN_NAME' => 'CURRENT_CONNECTIONS', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'TOTAL_CONNECTIONS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'users', 'COLUMN_NAME' => 'TOTAL_CONNECTIONS', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>