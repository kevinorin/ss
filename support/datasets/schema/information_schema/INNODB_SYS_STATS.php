<?php 
require_once(__DIR__.'/../../../../core.php');
class INNODB_SYS_STATS extends Dataset
{
	public static $profile= array(
		'target' =>'INNODB_SYS_STATS',
		'header'=>array( 
			'INDEX_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_STATS', 'COLUMN_NAME' => 'INDEX_ID', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'KEY_COLS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_STATS', 'COLUMN_NAME' => 'KEY_COLS', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'DIFF_VALS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_STATS', 'COLUMN_NAME' => 'DIFF_VALS', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'NON_NULL_VALS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_STATS', 'COLUMN_NAME' => 'NON_NULL_VALS', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>