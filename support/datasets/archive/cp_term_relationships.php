<?php 
require_once(__DIR__.'/../../core.php');
class cp_term_relationships extends Dataset
{
	public static $profile= array(
		'target' =>'cp_term_relationships',
		'Accessor'=>array( 'Primary' => 'term_taxonomy_id'),
		'header'=>array( 
			'object_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_term_relationships', 'COLUMN_NAME' => 'object_id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'term_taxonomy_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_term_relationships', 'COLUMN_NAME' => 'term_taxonomy_id', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'term_order' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_term_relationships', 'COLUMN_NAME' => 'term_order', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
		)
	);
	public $data;
}
?>