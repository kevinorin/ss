<?php 
require_once(__DIR__.'/../../../../core.php');
class GLOBAL_VARIABLES extends Dataset
{
	public static $profile= array(
		'target' =>'GLOBAL_VARIABLES',
		'header'=>array( 
			'VARIABLE_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GLOBAL_VARIABLES', 'COLUMN_NAME' => 'VARIABLE_NAME', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'VARIABLE_VALUE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'GLOBAL_VARIABLES', 'COLUMN_NAME' => 'VARIABLE_VALUE', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>