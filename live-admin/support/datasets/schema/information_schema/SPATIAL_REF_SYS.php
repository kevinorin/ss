<?php 
require_once(__DIR__.'/../../../../core.php');
class SPATIAL_REF_SYS extends Dataset
{
	public static $profile= array(
		'target' =>'SPATIAL_REF_SYS',
		'header'=>array( 
			'SRID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SPATIAL_REF_SYS', 'COLUMN_NAME' => 'SRID', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'smallint',),
			'AUTH_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SPATIAL_REF_SYS', 'COLUMN_NAME' => 'AUTH_NAME', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'AUTH_SRID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SPATIAL_REF_SYS', 'COLUMN_NAME' => 'AUTH_SRID', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'SRTEXT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SPATIAL_REF_SYS', 'COLUMN_NAME' => 'SRTEXT', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>