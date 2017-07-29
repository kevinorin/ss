<?php 
require_once(__DIR__.'/../../../../core.php');
class session_account_connect_attrs extends Dataset
{
	public static $profile= array(
		'target' =>'session_account_connect_attrs',
		'header'=>array( 
			'PROCESSLIST_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'session_account_connect_attrs', 'COLUMN_NAME' => 'PROCESSLIST_ID', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'ATTR_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'session_account_connect_attrs', 'COLUMN_NAME' => 'ATTR_NAME', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'ATTR_VALUE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'session_account_connect_attrs', 'COLUMN_NAME' => 'ATTR_VALUE', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'ORDINAL_POSITION' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'session_account_connect_attrs', 'COLUMN_NAME' => 'ORDINAL_POSITION', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'int',),
		)
	);
	public $data;
}
?>