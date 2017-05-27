<?php 
require_once(__DIR__.'/../../../../core.php');
class setup_objects extends Dataset
{
	public static $profile= array(
		'target' =>'setup_objects',
		'header'=>array( 
			'OBJECT_TYPE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'setup_objects', 'COLUMN_NAME' => 'OBJECT_TYPE', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => 'TABLE', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'enum',),
			'OBJECT_SCHEMA' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'setup_objects', 'COLUMN_NAME' => 'OBJECT_SCHEMA', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '%', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'OBJECT_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'setup_objects', 'COLUMN_NAME' => 'OBJECT_NAME', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '%', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'ENABLED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'setup_objects', 'COLUMN_NAME' => 'ENABLED', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => 'YES', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'enum',),
			'TIMED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'setup_objects', 'COLUMN_NAME' => 'TIMED', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => 'YES', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'enum',),
		)
	);
	public $data;
}
?>