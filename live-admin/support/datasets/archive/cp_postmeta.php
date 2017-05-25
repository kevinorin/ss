<?php 
require_once(__DIR__.'/../../core.php');
class cp_postmeta extends Dataset
{
	public static $profile= array(
		'target' =>'cp_postmeta',
		'Accessor'=>array( 'Primary' => 'meta_id'),
		'header'=>array( 
			'meta_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_postmeta', 'COLUMN_NAME' => 'meta_id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'post_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_postmeta', 'COLUMN_NAME' => 'post_id', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'meta_key' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_postmeta', 'COLUMN_NAME' => 'meta_key', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'meta_value' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_postmeta', 'COLUMN_NAME' => 'meta_value', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'longtext',),
		)
	);
	public $data;
}
?>