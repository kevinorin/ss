<?php 
require_once(__DIR__.'/../../../../core.php');
class INNODB_SYS_SEMAPHORE_WAITS extends Dataset
{
	public static $profile= array(
		'target' =>'INNODB_SYS_SEMAPHORE_WAITS',
		'header'=>array( 
			'THREAD_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'THREAD_ID', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'OBJECT_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'OBJECT_NAME', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'FILE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'FILE', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'LINE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'LINE', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'WAIT_TIME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'WAIT_TIME', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'WAIT_OBJECT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'WAIT_OBJECT', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'WAIT_TYPE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'WAIT_TYPE', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'HOLDER_THREAD_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'HOLDER_THREAD_ID', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'HOLDER_FILE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'HOLDER_FILE', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'HOLDER_LINE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'HOLDER_LINE', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'CREATED_FILE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'CREATED_FILE', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'CREATED_LINE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'CREATED_LINE', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'WRITER_THREAD' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'WRITER_THREAD', 'ORDINAL_POSITION' => '13', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'RESERVATION_MODE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'RESERVATION_MODE', 'ORDINAL_POSITION' => '14', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'READERS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'READERS', 'ORDINAL_POSITION' => '15', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'WAITERS_FLAG' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'WAITERS_FLAG', 'ORDINAL_POSITION' => '16', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'LOCK_WORD' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'LOCK_WORD', 'ORDINAL_POSITION' => '17', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'LAST_READER_FILE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'LAST_READER_FILE', 'ORDINAL_POSITION' => '18', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'LAST_READER_LINE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'LAST_READER_LINE', 'ORDINAL_POSITION' => '19', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'LAST_WRITER_FILE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'LAST_WRITER_FILE', 'ORDINAL_POSITION' => '20', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'LAST_WRITER_LINE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'LAST_WRITER_LINE', 'ORDINAL_POSITION' => '21', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'OS_WAIT_COUNT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'INNODB_SYS_SEMAPHORE_WAITS', 'COLUMN_NAME' => 'OS_WAIT_COUNT', 'ORDINAL_POSITION' => '22', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
		)
	);
	public $data;
}
?>