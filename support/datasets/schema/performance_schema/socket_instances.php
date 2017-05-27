<?php 
require_once(__DIR__.'/../../../../core.php');
class socket_instances extends Dataset
{
	public static $profile= array(
		'target' =>'socket_instances',
		'header'=>array( 
			'EVENT_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'socket_instances', 'COLUMN_NAME' => 'EVENT_NAME', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'OBJECT_INSTANCE_BEGIN' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'socket_instances', 'COLUMN_NAME' => 'OBJECT_INSTANCE_BEGIN', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'THREAD_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'socket_instances', 'COLUMN_NAME' => 'THREAD_ID', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'SOCKET_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'socket_instances', 'COLUMN_NAME' => 'SOCKET_ID', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'IP' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'socket_instances', 'COLUMN_NAME' => 'IP', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'PORT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'socket_instances', 'COLUMN_NAME' => 'PORT', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'STATE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'socket_instances', 'COLUMN_NAME' => 'STATE', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'enum',),
		)
	);
	public $data;
}
?>