<?php 
require_once(__DIR__.'/../../core.php');
class wp_options extends Dataset
{
	public static $profile= array(
		'target' =>'wp_options',
		'Accessor'=>array( 
			'Primary' => 'option_id',
			'Reference'=>array(  array('','',''), array('','',''),)),
		'header'=>array( 
			'option_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_options', 'COLUMN_NAME' => 'option_id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'option_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_options', 'COLUMN_NAME' => 'option_name', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'option_value' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_options', 'COLUMN_NAME' => 'option_value', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'longtext',),
			'autoload' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_options', 'COLUMN_NAME' => 'autoload', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => 'yes', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>