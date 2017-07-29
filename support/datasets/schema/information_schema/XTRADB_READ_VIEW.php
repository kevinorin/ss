<?php 
require_once(__DIR__.'/../../../../core.php');
class XTRADB_READ_VIEW extends Dataset
{
	public static $profile= array(
		'target' =>'XTRADB_READ_VIEW',
		'header'=>array( 
			'READ_VIEW_UNDO_NUMBER' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_READ_VIEW', 'COLUMN_NAME' => 'READ_VIEW_UNDO_NUMBER', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'READ_VIEW_LOW_LIMIT_TRX_NUMBER' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_READ_VIEW', 'COLUMN_NAME' => 'READ_VIEW_LOW_LIMIT_TRX_NUMBER', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'READ_VIEW_UPPER_LIMIT_TRX_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_READ_VIEW', 'COLUMN_NAME' => 'READ_VIEW_UPPER_LIMIT_TRX_ID', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'READ_VIEW_LOW_LIMIT_TRX_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_READ_VIEW', 'COLUMN_NAME' => 'READ_VIEW_LOW_LIMIT_TRX_ID', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>