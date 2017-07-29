<?php 
require_once(__DIR__.'/../../../../core.php');
class table_io_waits_summary_by_index_usage extends Dataset
{
	public static $profile= array(
		'target' =>'table_io_waits_summary_by_index_usage',
		'header'=>array( 
			'OBJECT_TYPE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'OBJECT_TYPE', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'OBJECT_SCHEMA' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'OBJECT_SCHEMA', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'OBJECT_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'OBJECT_NAME', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'INDEX_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'INDEX_NAME', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'COUNT_STAR' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'COUNT_STAR', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_TIMER_WAIT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'SUM_TIMER_WAIT', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MIN_TIMER_WAIT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MIN_TIMER_WAIT', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'AVG_TIMER_WAIT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'AVG_TIMER_WAIT', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MAX_TIMER_WAIT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MAX_TIMER_WAIT', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'COUNT_READ' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'COUNT_READ', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_TIMER_READ' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'SUM_TIMER_READ', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MIN_TIMER_READ' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MIN_TIMER_READ', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'AVG_TIMER_READ' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'AVG_TIMER_READ', 'ORDINAL_POSITION' => '13', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MAX_TIMER_READ' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MAX_TIMER_READ', 'ORDINAL_POSITION' => '14', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'COUNT_WRITE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'COUNT_WRITE', 'ORDINAL_POSITION' => '15', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_TIMER_WRITE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'SUM_TIMER_WRITE', 'ORDINAL_POSITION' => '16', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MIN_TIMER_WRITE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MIN_TIMER_WRITE', 'ORDINAL_POSITION' => '17', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'AVG_TIMER_WRITE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'AVG_TIMER_WRITE', 'ORDINAL_POSITION' => '18', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MAX_TIMER_WRITE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MAX_TIMER_WRITE', 'ORDINAL_POSITION' => '19', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'COUNT_FETCH' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'COUNT_FETCH', 'ORDINAL_POSITION' => '20', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_TIMER_FETCH' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'SUM_TIMER_FETCH', 'ORDINAL_POSITION' => '21', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MIN_TIMER_FETCH' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MIN_TIMER_FETCH', 'ORDINAL_POSITION' => '22', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'AVG_TIMER_FETCH' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'AVG_TIMER_FETCH', 'ORDINAL_POSITION' => '23', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MAX_TIMER_FETCH' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MAX_TIMER_FETCH', 'ORDINAL_POSITION' => '24', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'COUNT_INSERT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'COUNT_INSERT', 'ORDINAL_POSITION' => '25', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_TIMER_INSERT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'SUM_TIMER_INSERT', 'ORDINAL_POSITION' => '26', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MIN_TIMER_INSERT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MIN_TIMER_INSERT', 'ORDINAL_POSITION' => '27', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'AVG_TIMER_INSERT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'AVG_TIMER_INSERT', 'ORDINAL_POSITION' => '28', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MAX_TIMER_INSERT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MAX_TIMER_INSERT', 'ORDINAL_POSITION' => '29', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'COUNT_UPDATE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'COUNT_UPDATE', 'ORDINAL_POSITION' => '30', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_TIMER_UPDATE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'SUM_TIMER_UPDATE', 'ORDINAL_POSITION' => '31', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MIN_TIMER_UPDATE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MIN_TIMER_UPDATE', 'ORDINAL_POSITION' => '32', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'AVG_TIMER_UPDATE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'AVG_TIMER_UPDATE', 'ORDINAL_POSITION' => '33', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MAX_TIMER_UPDATE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MAX_TIMER_UPDATE', 'ORDINAL_POSITION' => '34', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'COUNT_DELETE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'COUNT_DELETE', 'ORDINAL_POSITION' => '35', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_TIMER_DELETE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'SUM_TIMER_DELETE', 'ORDINAL_POSITION' => '36', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MIN_TIMER_DELETE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MIN_TIMER_DELETE', 'ORDINAL_POSITION' => '37', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'AVG_TIMER_DELETE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'AVG_TIMER_DELETE', 'ORDINAL_POSITION' => '38', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MAX_TIMER_DELETE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'table_io_waits_summary_by_index_usage', 'COLUMN_NAME' => 'MAX_TIMER_DELETE', 'ORDINAL_POSITION' => '39', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>