<?php 
require_once(__DIR__.'/../../core.php');
class wp_terms extends Dataset
{
	public static $profile= array(
		'target' =>'wp_terms',
		'Accessor'=>array( 
			'Primary' => 'term_id',
			'Reference'=>array(  array('','',''), array('','',''),)),
		'header'=>array( 
			'term_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_terms', 'COLUMN_NAME' => 'term_id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_terms', 'COLUMN_NAME' => 'name', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'slug' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_terms', 'COLUMN_NAME' => 'slug', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'term_group' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_terms', 'COLUMN_NAME' => 'term_group', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>