<?php 
require_once(__DIR__.'/../../../../core.php');
class INNODB_FT_DEFAULT_STOPWORD extends Dataset
{
	public static $profile= array(
		'target' =>'INNODB_FT_DEFAULT_STOPWORD',
		'header'=>array( 
			'value' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_FT_DEFAULT_STOPWORD', 'COLUMN_NAME' => 'value', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>