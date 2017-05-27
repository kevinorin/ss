<?php 
require_once(__DIR__.'/../../../../core.php');
class ss_sg_image_popup extends Dataset
{
	public static $profile= array(
		'target' =>'ss_sg_image_popup',
		'header'=>array( 
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_sg_image_popup', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'url' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_sg_image_popup', 'COLUMN_NAME' => 'url', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>