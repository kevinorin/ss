<?php 
require_once(__DIR__.'/../../../../core.php');
class roles_mapping extends Dataset
{
	public static $profile= array(
		'target' =>'roles_mapping',
		'Accessor'=>array( ,
			'Reference'=>array(   array('','',''), array('','',''), array('','',''),) )
		'header'=>array( 
			'Host' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'roles_mapping', 'COLUMN_NAME' => 'Host', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'char',),
			'User' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'roles_mapping', 'COLUMN_NAME' => 'User', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'char',),
			'Role' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'roles_mapping', 'COLUMN_NAME' => 'Role', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'char',),
			'Admin_option' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'mysql', 'TABLE_NAME' => 'roles_mapping', 'COLUMN_NAME' => 'Admin_option', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => 'N', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'enum',),
		)
	);
	public $data;
}
?>