<?php 
require_once(__DIR__.'/../../../../core.php');
class USER_STATISTICS extends Dataset
{
	public static $profile= array(
		'target' =>'USER_STATISTICS',
		'header'=>array( 
			'USER' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'USER', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'TOTAL_CONNECTIONS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'TOTAL_CONNECTIONS', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'CONCURRENT_CONNECTIONS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'CONCURRENT_CONNECTIONS', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'CONNECTED_TIME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'CONNECTED_TIME', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'BUSY_TIME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'BUSY_TIME', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'double',),
			'CPU_TIME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'CPU_TIME', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'double',),
			'BYTES_RECEIVED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'BYTES_RECEIVED', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'BYTES_SENT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'BYTES_SENT', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'BINLOG_BYTES_WRITTEN' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'BINLOG_BYTES_WRITTEN', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'ROWS_READ' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'ROWS_READ', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'ROWS_SENT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'ROWS_SENT', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'ROWS_DELETED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'ROWS_DELETED', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'ROWS_INSERTED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'ROWS_INSERTED', 'ORDINAL_POSITION' => '13', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'ROWS_UPDATED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'ROWS_UPDATED', 'ORDINAL_POSITION' => '14', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SELECT_COMMANDS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'SELECT_COMMANDS', 'ORDINAL_POSITION' => '15', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'UPDATE_COMMANDS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'UPDATE_COMMANDS', 'ORDINAL_POSITION' => '16', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'OTHER_COMMANDS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'OTHER_COMMANDS', 'ORDINAL_POSITION' => '17', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'COMMIT_TRANSACTIONS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'COMMIT_TRANSACTIONS', 'ORDINAL_POSITION' => '18', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'ROLLBACK_TRANSACTIONS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'ROLLBACK_TRANSACTIONS', 'ORDINAL_POSITION' => '19', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'DENIED_CONNECTIONS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'DENIED_CONNECTIONS', 'ORDINAL_POSITION' => '20', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'LOST_CONNECTIONS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'LOST_CONNECTIONS', 'ORDINAL_POSITION' => '21', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'ACCESS_DENIED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'ACCESS_DENIED', 'ORDINAL_POSITION' => '22', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'EMPTY_QUERIES' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'EMPTY_QUERIES', 'ORDINAL_POSITION' => '23', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'TOTAL_SSL_CONNECTIONS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'TOTAL_SSL_CONNECTIONS', 'ORDINAL_POSITION' => '24', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MAX_STATEMENT_TIME_EXCEEDED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'USER_STATISTICS', 'COLUMN_NAME' => 'MAX_STATEMENT_TIME_EXCEEDED', 'ORDINAL_POSITION' => '25', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>