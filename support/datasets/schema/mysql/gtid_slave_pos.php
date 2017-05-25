<?php 
require_once(__DIR__.'/../../../../core.php');
class gtid_slave_pos extends Dataset
{
	public static $profile= array(
		'target' =>'gtid_slave_pos',
		'Accessor'=>array( 'Primary' => 'sub_id'),
		'header'=>array( 
			'domain_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'gtid_slave_pos', 'COLUMN_NAME' => 'domain_id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'sub_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'gtid_slave_pos', 'COLUMN_NAME' => 'sub_id', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'server_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'gtid_slave_pos', 'COLUMN_NAME' => 'server_id', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'seq_no' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'gtid_slave_pos', 'COLUMN_NAME' => 'seq_no', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>