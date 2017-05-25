<?php 
require_once(__DIR__.'/../../../../core.php');
class table_stats extends Dataset
{
	public static $profile= array(
		'target' =>'table_stats',
		'Accessor'=>array( 'Primary' => 'table_name'),
		'header'=>array( 
			'db_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'table_stats', 'COLUMN_NAME' => 'db_name', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'table_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'table_stats', 'COLUMN_NAME' => 'table_name', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'cardinality' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'table_stats', 'COLUMN_NAME' => 'cardinality', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>