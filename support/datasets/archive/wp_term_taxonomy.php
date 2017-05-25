<?php 
require_once(__DIR__.'/../../core.php');
class wp_term_taxonomy extends Dataset
{
	public static $profile= array(
		'target' =>'wp_term_taxonomy',
		'Accessor'=>array( 
			'Primary' => 'term_taxonomy_id',
			'Reference'=>array(  array('','',''), array('','',''), array('','',''), array('','',''),)),
		'header'=>array( 
			'term_taxonomy_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_term_taxonomy', 'COLUMN_NAME' => 'term_taxonomy_id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'term_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_term_taxonomy', 'COLUMN_NAME' => 'term_id', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'taxonomy' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_term_taxonomy', 'COLUMN_NAME' => 'taxonomy', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'description' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_term_taxonomy', 'COLUMN_NAME' => 'description', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'longtext',),
			'parent' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_term_taxonomy', 'COLUMN_NAME' => 'parent', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'count' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_term_taxonomy', 'COLUMN_NAME' => 'count', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>