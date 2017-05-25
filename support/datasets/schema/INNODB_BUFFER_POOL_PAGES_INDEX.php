<?php 
require_once(__DIR__.'/../../core.php');
class INNODB_BUFFER_POOL_PAGES_INDEX extends Dataset
{
	public static $profile= array(
		'target' =>'INNODB_BUFFER_POOL_PAGES_INDEX',
		'header'=>array( 
			'index_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES_INDEX', 'COLUMN_NAME' => 'index_id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'space_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES_INDEX', 'COLUMN_NAME' => 'space_id', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'page_no' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES_INDEX', 'COLUMN_NAME' => 'page_no', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'n_recs' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES_INDEX', 'COLUMN_NAME' => 'n_recs', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'data_size' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES_INDEX', 'COLUMN_NAME' => 'data_size', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'hashed' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES_INDEX', 'COLUMN_NAME' => 'hashed', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'access_time' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES_INDEX', 'COLUMN_NAME' => 'access_time', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'modified' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES_INDEX', 'COLUMN_NAME' => 'modified', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'dirty' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES_INDEX', 'COLUMN_NAME' => 'dirty', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'old' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES_INDEX', 'COLUMN_NAME' => 'old', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'lru_position' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES_INDEX', 'COLUMN_NAME' => 'lru_position', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'fix_count' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES_INDEX', 'COLUMN_NAME' => 'fix_count', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'flush_type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_BUFFER_POOL_PAGES_INDEX', 'COLUMN_NAME' => 'flush_type', 'ORDINAL_POSITION' => '13', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>