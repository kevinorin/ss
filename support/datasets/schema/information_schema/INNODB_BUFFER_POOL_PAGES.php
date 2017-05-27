<?php 
require_once(__DIR__.'/../../../../core.php');
class INNODB_BUFFER_POOL_PAGES extends Dataset
{
	public static $profile= array(
		'target' =>'INNODB_BUFFER_POOL_PAGES',
		'header'=>array( 
			'page_type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES', 'COLUMN_NAME' => 'page_type', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'space_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES', 'COLUMN_NAME' => 'space_id', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'page_no' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES', 'COLUMN_NAME' => 'page_no', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'lru_position' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES', 'COLUMN_NAME' => 'lru_position', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'fix_count' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES', 'COLUMN_NAME' => 'fix_count', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'flush_type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES', 'COLUMN_NAME' => 'flush_type', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>