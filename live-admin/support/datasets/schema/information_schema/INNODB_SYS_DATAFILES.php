<?php 
require_once(__DIR__.'/../../../../core.php');
class INNODB_SYS_DATAFILES extends Dataset
{
	public static $profile= array(
		'target' =>'INNODB_SYS_DATAFILES',
		'header'=>array( 
			'SPACE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_DATAFILES', 'COLUMN_NAME' => 'SPACE', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'PATH' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_DATAFILES', 'COLUMN_NAME' => 'PATH', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>