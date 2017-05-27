<?php 
require_once(__DIR__.'/../../../../core.php');
class ss_pps_modules_type extends Dataset
{
	public static $profile= array(
		'target' =>'ss_pps_modules_type',
		'Accessor'=>array( 'Primary' => 'id'),
		'header'=>array( 
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_modules_type', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'smallint',),
			'label' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_modules_type', 'COLUMN_NAME' => 'label', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>