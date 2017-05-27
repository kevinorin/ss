<?php 
require_once(__DIR__.'/../../../../core.php');
class ss_pps_statistics extends Dataset
{
	public static $profile= array(
		'target' =>'ss_pps_statistics',
		'Accessor'=>array( 'Primary' => 'id'),
		'header'=>array( 
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_statistics', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'popup_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_statistics', 'COLUMN_NAME' => 'popup_id', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_statistics', 'COLUMN_NAME' => 'type', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'sm_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_statistics', 'COLUMN_NAME' => 'sm_id', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'is_unique' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_statistics', 'COLUMN_NAME' => 'is_unique', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'date_created' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_statistics', 'COLUMN_NAME' => 'date_created', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => 'CURRENT_TIMESTAMP', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'timestamp',),
		)
	);
	public $data;
}
?>