<?php 
require_once(__DIR__.'/../../../../core.php');
class INNODB_TABLESPACES_SCRUBBING extends Dataset
{
	public static $profile= array(
		'target' =>'INNODB_TABLESPACES_SCRUBBING',
		'header'=>array( 
			'SPACE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_SCRUBBING', 'COLUMN_NAME' => 'SPACE', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_SCRUBBING', 'COLUMN_NAME' => 'NAME', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'COMPRESSED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_SCRUBBING', 'COLUMN_NAME' => 'COMPRESSED', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'LAST_SCRUB_COMPLETED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_SCRUBBING', 'COLUMN_NAME' => 'LAST_SCRUB_COMPLETED', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'datetime',),
			'CURRENT_SCRUB_STARTED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_SCRUBBING', 'COLUMN_NAME' => 'CURRENT_SCRUB_STARTED', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'datetime',),
			'CURRENT_SCRUB_ACTIVE_THREADS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_SCRUBBING', 'COLUMN_NAME' => 'CURRENT_SCRUB_ACTIVE_THREADS', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'int',),
			'CURRENT_SCRUB_PAGE_NUMBER' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_SCRUBBING', 'COLUMN_NAME' => 'CURRENT_SCRUB_PAGE_NUMBER', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'CURRENT_SCRUB_MAX_PAGE_NUMBER' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_TABLESPACES_SCRUBBING', 'COLUMN_NAME' => 'CURRENT_SCRUB_MAX_PAGE_NUMBER', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>