<?php 
require_once(__DIR__.'/../../../../core.php');
class INNODB_TABLESPACES_ENCRYPTION extends Dataset
{
	public static $profile= array(
		'target' =>'INNODB_TABLESPACES_ENCRYPTION',
		'header'=>array( 
			'SPACE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_ENCRYPTION', 'COLUMN_NAME' => 'SPACE', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_ENCRYPTION', 'COLUMN_NAME' => 'NAME', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'ENCRYPTION_SCHEME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_ENCRYPTION', 'COLUMN_NAME' => 'ENCRYPTION_SCHEME', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'KEYSERVER_REQUESTS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_ENCRYPTION', 'COLUMN_NAME' => 'KEYSERVER_REQUESTS', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'MIN_KEY_VERSION' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_ENCRYPTION', 'COLUMN_NAME' => 'MIN_KEY_VERSION', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'CURRENT_KEY_VERSION' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_ENCRYPTION', 'COLUMN_NAME' => 'CURRENT_KEY_VERSION', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'KEY_ROTATION_PAGE_NUMBER' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_ENCRYPTION', 'COLUMN_NAME' => 'KEY_ROTATION_PAGE_NUMBER', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'KEY_ROTATION_MAX_PAGE_NUMBER' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_ENCRYPTION', 'COLUMN_NAME' => 'KEY_ROTATION_MAX_PAGE_NUMBER', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'CURRENT_KEY_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_ENCRYPTION', 'COLUMN_NAME' => 'CURRENT_KEY_ID', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
		)
	);
	public $data;
}
?>