<?php 
require_once(__DIR__.'/../../../../core.php');
class APPLICABLE_ROLES extends Dataset
{
	public static $profile= array(
		'target' =>'APPLICABLE_ROLES',
		'header'=>array( 
			'GRANTEE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'APPLICABLE_ROLES', 'COLUMN_NAME' => 'GRANTEE', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'ROLE_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'APPLICABLE_ROLES', 'COLUMN_NAME' => 'ROLE_NAME', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'IS_GRANTABLE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'APPLICABLE_ROLES', 'COLUMN_NAME' => 'IS_GRANTABLE', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'IS_DEFAULT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'APPLICABLE_ROLES', 'COLUMN_NAME' => 'IS_DEFAULT', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>