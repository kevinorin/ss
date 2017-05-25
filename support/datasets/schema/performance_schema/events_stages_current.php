<?php 
require_once(__DIR__.'/../../../../core.php');
class events_stages_current extends Dataset
{
	public static $profile= array(
		'target' =>'events_stages_current',
		'header'=>array( 
			'THREAD_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_stages_current', 'COLUMN_NAME' => 'THREAD_ID', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'EVENT_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_stages_current', 'COLUMN_NAME' => 'EVENT_ID', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'END_EVENT_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_stages_current', 'COLUMN_NAME' => 'END_EVENT_ID', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'EVENT_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_stages_current', 'COLUMN_NAME' => 'EVENT_NAME', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'SOURCE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_stages_current', 'COLUMN_NAME' => 'SOURCE', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'TIMER_START' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_stages_current', 'COLUMN_NAME' => 'TIMER_START', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'TIMER_END' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_stages_current', 'COLUMN_NAME' => 'TIMER_END', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'TIMER_WAIT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_stages_current', 'COLUMN_NAME' => 'TIMER_WAIT', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'NESTING_EVENT_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_stages_current', 'COLUMN_NAME' => 'NESTING_EVENT_ID', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'bigint',),
			'NESTING_EVENT_TYPE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'performance_schema', 'TABLE_NAME' => 'events_stages_current', 'COLUMN_NAME' => 'NESTING_EVENT_TYPE', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'enum',),
		)
	);
	public $data;
}
?>