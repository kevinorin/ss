<?php 
require_once(__DIR__.'/../../core.php');
class INNODB_TABLE_STATS extends Dataset
{
	public static $profile= array(
		'target' =>'INNODB_TABLE_STATS',
		'header'=>array( 
			'table_schema' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLE_STATS', 'COLUMN_NAME' => 'table_schema', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'table_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLE_STATS', 'COLUMN_NAME' => 'table_name', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'rows' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLE_STATS', 'COLUMN_NAME' => 'rows', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'clust_size' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLE_STATS', 'COLUMN_NAME' => 'clust_size', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'other_size' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLE_STATS', 'COLUMN_NAME' => 'other_size', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'modified' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLE_STATS', 'COLUMN_NAME' => 'modified', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>