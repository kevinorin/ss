<?php 
require_once(__DIR__.'/../../../../core.php');
class ss_pps_popup_show_pages extends Dataset
{
	public static $profile= array(
		'target' =>'ss_pps_popup_show_pages',
		'header'=>array( 
			'popup_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_popup_show_pages', 'COLUMN_NAME' => 'popup_id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'post_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_popup_show_pages', 'COLUMN_NAME' => 'post_id', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'not_show' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_pps_popup_show_pages', 'COLUMN_NAME' => 'not_show', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
		)
	);
	public $data;
}
?>