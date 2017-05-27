<?php 
require_once(__DIR__.'/../../../../core.php');
class innodb_index_stats extends Dataset
{
	public static $profile= array(
		'target' =>'innodb_index_stats',
		'Accessor'=>array( 'Primary' => 'stat_name'),
		'header'=>array( 
			'database_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_index_stats', 'COLUMN_NAME' => 'database_name', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'table_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_index_stats', 'COLUMN_NAME' => 'table_name', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'index_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_index_stats', 'COLUMN_NAME' => 'index_name', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'last_update' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_index_stats', 'COLUMN_NAME' => 'last_update', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => 'CURRENT_TIMESTAMP', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'timestamp',),
			'stat_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_index_stats', 'COLUMN_NAME' => 'stat_name', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'stat_value' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_index_stats', 'COLUMN_NAME' => 'stat_value', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'sample_size' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_index_stats', 'COLUMN_NAME' => 'sample_size', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'stat_description' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_index_stats', 'COLUMN_NAME' => 'stat_description', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>