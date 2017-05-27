<?php 
require_once(__DIR__.'/../../../../core.php');
class ss_sg_popup_settings extends Dataset
{
	public static $profile= array(
		'target' =>'ss_sg_popup_settings',
		'Accessor'=>array( 'Primary' => 'id'),
		'header'=>array( 
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_sg_popup_settings', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'options' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_sg_popup_settings', 'COLUMN_NAME' => 'options', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'longtext',),
		)
	);
	public $data;
}
?>