<?php 
require_once(__DIR__.'/../../../../core.php');
class INNODB_FT_CONFIG extends Dataset
{
	public static $profile= array(
		'target' =>'INNODB_FT_CONFIG',
		'header'=>array( 
			'KEY' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_FT_CONFIG', 'COLUMN_NAME' => 'KEY', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'VALUE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_FT_CONFIG', 'COLUMN_NAME' => 'VALUE', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>