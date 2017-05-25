<?php 
require_once(__DIR__.'/../../core.php');
class recipes extends Dataset
{
	public static $profile= array(
		'target' =>'recipes',
		'header'=>array( 
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'recipes', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'recipes', 'COLUMN_NAME' => 'type', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '2', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'rating' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'recipes', 'COLUMN_NAME' => 'rating', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '3', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'smallint',),
			'cycle' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'recipes', 'COLUMN_NAME' => 'cycle', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'smallint',),
			'title' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'recipes', 'COLUMN_NAME' => 'title', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinytext',),
			'markup' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'recipes', 'COLUMN_NAME' => 'markup', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'text',),
			'products' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_cloud', 'TABLE_NAME' => 'recipes', 'COLUMN_NAME' => 'products', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'text',),
		)
	);
	public $data;
}
?>