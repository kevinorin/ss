<?php 
require_once(__DIR__.'/../../../../core.php');
class innodb_table_stats extends Dataset
{
	public static $profile= array(
		'target' =>'innodb_table_stats',
		'Accessor'=>array( 'Primary' => 'table_name'),
		'header'=>array( 
			'database_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_table_stats', 'COLUMN_NAME' => 'database_name', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'table_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_table_stats', 'COLUMN_NAME' => 'table_name', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'last_update' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_table_stats', 'COLUMN_NAME' => 'last_update', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => 'CURRENT_TIMESTAMP', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'timestamp',),
			'n_rows' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_table_stats', 'COLUMN_NAME' => 'n_rows', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'clustered_index_size' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_table_stats', 'COLUMN_NAME' => 'clustered_index_size', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'sum_of_other_index_sizes' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'innodb_table_stats', 'COLUMN_NAME' => 'sum_of_other_index_sizes', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>