<?php 
require_once(__DIR__.'/../../../../core.php');
class ENABLED_ROLES extends Dataset
{
	public static $profile= array(
		'target' =>'ENABLED_ROLES',
		'header'=>array( 
			'ROLE_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'ENABLED_ROLES', 'COLUMN_NAME' => 'ROLE_NAME', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>