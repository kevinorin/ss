<?php 
require_once(__DIR__.'/../../core.php');
class relationship extends Dataset
{
	public static $profile= array(
		'target' =>'relationship',
		'header'=>array( 
			'source_type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'relationship', 'COLUMN_NAME' => 'source_type', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'source' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'relationship', 'COLUMN_NAME' => 'source', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'target' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'relationship', 'COLUMN_NAME' => 'target', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'target_type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'relationship', 'COLUMN_NAME' => 'target_type', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'weight' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'relationship', 'COLUMN_NAME' => 'weight', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'attachment' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'relationship', 'COLUMN_NAME' => 'attachment', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>