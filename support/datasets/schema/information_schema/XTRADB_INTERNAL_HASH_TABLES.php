<?php 
require_once(__DIR__.'/../../../../core.php');
class XTRADB_INTERNAL_HASH_TABLES extends Dataset
{
	public static $profile= array(
		'target' =>'XTRADB_INTERNAL_HASH_TABLES',
		'header'=>array( 
			'INTERNAL_HASH_TABLE_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_INTERNAL_HASH_TABLES', 'COLUMN_NAME' => 'INTERNAL_HASH_TABLE_NAME', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'TOTAL_MEMORY' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_INTERNAL_HASH_TABLES', 'COLUMN_NAME' => 'TOTAL_MEMORY', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'CONSTANT_MEMORY' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_INTERNAL_HASH_TABLES', 'COLUMN_NAME' => 'CONSTANT_MEMORY', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'VARIABLE_MEMORY' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_INTERNAL_HASH_TABLES', 'COLUMN_NAME' => 'VARIABLE_MEMORY', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>