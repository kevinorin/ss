<?php 
require_once(__DIR__.'/../../../../core.php');
class setup_actors extends Dataset
{
	public static $profile= array(
		'target' =>'setup_actors',
		'header'=>array( 
			'HOST' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'setup_actors', 'COLUMN_NAME' => 'HOST', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '%', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'char',),
			'USER' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'setup_actors', 'COLUMN_NAME' => 'USER', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '%', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'char',),
			'ROLE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'setup_actors', 'COLUMN_NAME' => 'ROLE', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '%', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'char',),
		)
	);
	public $data;
}
?>