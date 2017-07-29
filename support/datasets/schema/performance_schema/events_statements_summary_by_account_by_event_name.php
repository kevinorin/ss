<?php 
require_once(__DIR__.'/../../../../core.php');
class events_statements_summary_by_account_by_event_name extends Dataset
{
	public static $profile= array(
		'target' =>'events_statements_summary_by_account_by_event_name',
		'header'=>array( 
			'USER' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'USER', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'char',),
			'HOST' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'HOST', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'char',),
			'EVENT_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'EVENT_NAME', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'COUNT_STAR' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'COUNT_STAR', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_TIMER_WAIT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_TIMER_WAIT', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MIN_TIMER_WAIT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'MIN_TIMER_WAIT', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'AVG_TIMER_WAIT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'AVG_TIMER_WAIT', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'MAX_TIMER_WAIT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'MAX_TIMER_WAIT', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_LOCK_TIME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_LOCK_TIME', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_ERRORS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_ERRORS', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_WARNINGS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_WARNINGS', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_ROWS_AFFECTED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_ROWS_AFFECTED', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_ROWS_SENT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_ROWS_SENT', 'ORDINAL_POSITION' => '13', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_ROWS_EXAMINED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_ROWS_EXAMINED', 'ORDINAL_POSITION' => '14', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_CREATED_TMP_DISK_TABLES' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_CREATED_TMP_DISK_TABLES', 'ORDINAL_POSITION' => '15', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_CREATED_TMP_TABLES' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_CREATED_TMP_TABLES', 'ORDINAL_POSITION' => '16', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_SELECT_FULL_JOIN' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_SELECT_FULL_JOIN', 'ORDINAL_POSITION' => '17', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_SELECT_FULL_RANGE_JOIN' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_SELECT_FULL_RANGE_JOIN', 'ORDINAL_POSITION' => '18', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_SELECT_RANGE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_SELECT_RANGE', 'ORDINAL_POSITION' => '19', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_SELECT_RANGE_CHECK' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_SELECT_RANGE_CHECK', 'ORDINAL_POSITION' => '20', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_SELECT_SCAN' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_SELECT_SCAN', 'ORDINAL_POSITION' => '21', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_SORT_MERGE_PASSES' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_SORT_MERGE_PASSES', 'ORDINAL_POSITION' => '22', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_SORT_RANGE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_SORT_RANGE', 'ORDINAL_POSITION' => '23', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_SORT_ROWS' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_SORT_ROWS', 'ORDINAL_POSITION' => '24', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_SORT_SCAN' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_SORT_SCAN', 'ORDINAL_POSITION' => '25', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_NO_INDEX_USED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_NO_INDEX_USED', 'ORDINAL_POSITION' => '26', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'SUM_NO_GOOD_INDEX_USED' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_statements_summary_by_account_by_event_name', 'COLUMN_NAME' => 'SUM_NO_GOOD_INDEX_USED', 'ORDINAL_POSITION' => '27', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>