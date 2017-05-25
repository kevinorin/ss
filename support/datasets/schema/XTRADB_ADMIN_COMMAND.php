<?php 
require_once(__DIR__.'/../../core.php');
class XTRADB_ADMIN_COMMAND extends Dataset
{
	public static $profile= array(
		'target' =>'XTRADB_ADMIN_COMMAND',
		'header'=>array( 
			'result_message' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'XTRADB_ADMIN_COMMAND', 'COLUMN_NAME' => 'result_message', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>