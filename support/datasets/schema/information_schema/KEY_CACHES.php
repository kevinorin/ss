<?php 
require_once(__DIR__.'/../../../../core.php');
class KEY_CACHES extends Dataset
{
	public static $profile= array(
		'target' =>'KEY_CACHES',
		'header'=>array( 
			'KEY_CACHE_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'KEY_CACHES', 'COLUMN_NAME' => 'KEY_CACHE_NAME', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'SEGMENTS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'KEY_CACHES', 'COLUMN_NAME' => 'SEGMENTS', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'int',),
			'SEGMENT_NUMBER' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'KEY_CACHES', 'COLUMN_NAME' => 'SEGMENT_NUMBER', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'int',),
			'FULL_SIZE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'KEY_CACHES', 'COLUMN_NAME' => 'FULL_SIZE', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'BLOCK_SIZE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'KEY_CACHES', 'COLUMN_NAME' => 'BLOCK_SIZE', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'USED_BLOCKS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'KEY_CACHES', 'COLUMN_NAME' => 'USED_BLOCKS', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'UNUSED_BLOCKS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'KEY_CACHES', 'COLUMN_NAME' => 'UNUSED_BLOCKS', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'DIRTY_BLOCKS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'KEY_CACHES', 'COLUMN_NAME' => 'DIRTY_BLOCKS', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'READ_REQUESTS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'KEY_CACHES', 'COLUMN_NAME' => 'READ_REQUESTS', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'READS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'KEY_CACHES', 'COLUMN_NAME' => 'READS', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'WRITE_REQUESTS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'KEY_CACHES', 'COLUMN_NAME' => 'WRITE_REQUESTS', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'WRITES' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'KEY_CACHES', 'COLUMN_NAME' => 'WRITES', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>