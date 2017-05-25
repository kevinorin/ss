<?php 
require_once(__DIR__.'/../../../../core.php');
class INNODB_CMP_PER_INDEX_RESET extends Dataset
{
	public static $profile= array(
		'target' =>'INNODB_CMP_PER_INDEX_RESET',
		'header'=>array( 
			'database_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_CMP_PER_INDEX_RESET', 'COLUMN_NAME' => 'database_name', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'table_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_CMP_PER_INDEX_RESET', 'COLUMN_NAME' => 'table_name', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'index_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_CMP_PER_INDEX_RESET', 'COLUMN_NAME' => 'index_name', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'compress_ops' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_CMP_PER_INDEX_RESET', 'COLUMN_NAME' => 'compress_ops', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'compress_ops_ok' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_CMP_PER_INDEX_RESET', 'COLUMN_NAME' => 'compress_ops_ok', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'compress_time' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_CMP_PER_INDEX_RESET', 'COLUMN_NAME' => 'compress_time', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'uncompress_ops' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_CMP_PER_INDEX_RESET', 'COLUMN_NAME' => 'uncompress_ops', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'uncompress_time' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_CMP_PER_INDEX_RESET', 'COLUMN_NAME' => 'uncompress_time', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
		)
	);
	public $data;
}
?>