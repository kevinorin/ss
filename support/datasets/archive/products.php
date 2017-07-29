<?php 
require_once(__DIR__.'/../../core.php');
class products extends Dataset
{
	public static $profile= array(
		'target' =>'products',
		'header'=>array( 
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'type', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '2', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'title' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'title', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinytext',),
			'markup' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'markup', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'text',),
			'manufacturer' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'manufacturer', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinytext',),
			'series' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'series', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinytext',),
			'series_info' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'series_info', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'text',),
			'nitro' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'nitro', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'tinyint',),
			'phosphor' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'phosphor', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'tinyint',),
			'potass' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'potass', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'tinyint',),
			'sulfur' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'sulfur', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'tags' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'tags', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varbinary',),
		)
	);
	public $data;
}
?>