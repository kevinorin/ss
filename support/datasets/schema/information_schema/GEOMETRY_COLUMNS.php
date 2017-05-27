<?php 
require_once(__DIR__.'/../../../../core.php');
class GEOMETRY_COLUMNS extends Dataset
{
	public static $profile= array(
		'target' =>'GEOMETRY_COLUMNS',
		'header'=>array( 
			'F_TABLE_CATALOG' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GEOMETRY_COLUMNS', 'COLUMN_NAME' => 'F_TABLE_CATALOG', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'F_TABLE_SCHEMA' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GEOMETRY_COLUMNS', 'COLUMN_NAME' => 'F_TABLE_SCHEMA', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'F_TABLE_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GEOMETRY_COLUMNS', 'COLUMN_NAME' => 'F_TABLE_NAME', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'F_GEOMETRY_COLUMN' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GEOMETRY_COLUMNS', 'COLUMN_NAME' => 'F_GEOMETRY_COLUMN', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'G_TABLE_CATALOG' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GEOMETRY_COLUMNS', 'COLUMN_NAME' => 'G_TABLE_CATALOG', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'G_TABLE_SCHEMA' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GEOMETRY_COLUMNS', 'COLUMN_NAME' => 'G_TABLE_SCHEMA', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'G_TABLE_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GEOMETRY_COLUMNS', 'COLUMN_NAME' => 'G_TABLE_NAME', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'G_GEOMETRY_COLUMN' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GEOMETRY_COLUMNS', 'COLUMN_NAME' => 'G_GEOMETRY_COLUMN', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'STORAGE_TYPE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GEOMETRY_COLUMNS', 'COLUMN_NAME' => 'STORAGE_TYPE', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'GEOMETRY_TYPE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GEOMETRY_COLUMNS', 'COLUMN_NAME' => 'GEOMETRY_TYPE', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'COORD_DIMENSION' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GEOMETRY_COLUMNS', 'COLUMN_NAME' => 'COORD_DIMENSION', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'MAX_PPR' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GEOMETRY_COLUMNS', 'COLUMN_NAME' => 'MAX_PPR', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'SRID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GEOMETRY_COLUMNS', 'COLUMN_NAME' => 'SRID', 'ORDINAL_POSITION' => '13', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'smallint',),
		)
	);
	public $data;
}
?>