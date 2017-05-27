<?php 
require_once(__DIR__.'/../../../../core.php');
class ss_pps_usage_stat extends Dataset
{
	public static $profile= array(
		'target' =>'ss_pps_usage_stat',
		'Accessor'=>array( 
			'Primary' => 'id',
			'Reference'=>array(  array('','',''),)),
		'header'=>array( 
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_usage_stat', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'code' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_usage_stat', 'COLUMN_NAME' => 'code', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'visits' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_usage_stat', 'COLUMN_NAME' => 'visits', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'spent_time' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_usage_stat', 'COLUMN_NAME' => 'spent_time', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'modify_timestamp' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_usage_stat', 'COLUMN_NAME' => 'modify_timestamp', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => 'CURRENT_TIMESTAMP', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'timestamp',),
		)
	);
	public $data;
}
?>