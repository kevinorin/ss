<?php 
require_once(__DIR__.'/../../../../core.php');
class INNODB_FT_BEING_DELETED extends Dataset
{
	public static $profile= array(
		'target' =>'INNODB_FT_BEING_DELETED',
		'header'=>array( 
			'DOC_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_FT_BEING_DELETED', 'COLUMN_NAME' => 'DOC_ID', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>