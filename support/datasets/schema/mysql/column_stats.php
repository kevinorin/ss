<?php 
require_once(__DIR__.'/../../../../core.php');
class column_stats extends Dataset
{
	public static $profile= array(
		'target' =>'column_stats',
		'Accessor'=>array( 'Primary' => 'column_name'),
		'header'=>array( 
			'db_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'column_stats', 'COLUMN_NAME' => 'db_name', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'table_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'column_stats', 'COLUMN_NAME' => 'table_name', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'column_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'column_stats', 'COLUMN_NAME' => 'column_name', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'min_value' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'column_stats', 'COLUMN_NAME' => 'min_value', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varbinary',),
			'max_value' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'column_stats', 'COLUMN_NAME' => 'max_value', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varbinary',),
			'nulls_ratio' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'column_stats', 'COLUMN_NAME' => 'nulls_ratio', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'decimal',),
			'avg_length' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'column_stats', 'COLUMN_NAME' => 'avg_length', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'decimal',),
			'avg_frequency' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'column_stats', 'COLUMN_NAME' => 'avg_frequency', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'decimal',),
			'hist_size' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'column_stats', 'COLUMN_NAME' => 'hist_size', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'tinyint',),
			'hist_type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'column_stats', 'COLUMN_NAME' => 'hist_type', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'enum',),
			'histogram' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'column_stats', 'COLUMN_NAME' => 'histogram', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varbinary',),
		)
	);
	public $data;
}
?>