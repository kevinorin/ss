<?php 
require_once(__DIR__.'/../../../../core.php');
class XTRADB_RSEG extends Dataset
{
	public static $profile= array(
		'target' =>'XTRADB_RSEG',
		'header'=>array( 
			'rseg_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_RSEG', 'COLUMN_NAME' => 'rseg_id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'space_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_RSEG', 'COLUMN_NAME' => 'space_id', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'zip_size' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_RSEG', 'COLUMN_NAME' => 'zip_size', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'page_no' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_RSEG', 'COLUMN_NAME' => 'page_no', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'max_size' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_RSEG', 'COLUMN_NAME' => 'max_size', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'curr_size' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_RSEG', 'COLUMN_NAME' => 'curr_size', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>