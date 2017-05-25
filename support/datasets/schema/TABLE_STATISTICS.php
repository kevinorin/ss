<?php 
require_once(__DIR__.'/../../core.php');
class TABLE_STATISTICS extends Dataset
{
	public static $profile= array(
		'target' =>'TABLE_STATISTICS',
		'header'=>array( 
			'TABLE_SCHEMA' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'TABLE_STATISTICS', 'COLUMN_NAME' => 'TABLE_SCHEMA', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'TABLE_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'TABLE_STATISTICS', 'COLUMN_NAME' => 'TABLE_NAME', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'ROWS_READ' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'TABLE_STATISTICS', 'COLUMN_NAME' => 'ROWS_READ', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'ROWS_CHANGED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'TABLE_STATISTICS', 'COLUMN_NAME' => 'ROWS_CHANGED', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'ROWS_CHANGED_X_INDEXES' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'TABLE_STATISTICS', 'COLUMN_NAME' => 'ROWS_CHANGED_X_INDEXES', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>