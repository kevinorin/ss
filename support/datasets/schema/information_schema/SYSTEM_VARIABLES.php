<?php 
require_once(__DIR__.'/../../../../core.php');
class SYSTEM_VARIABLES extends Dataset
{
	public static $profile= array(
		'target' =>'SYSTEM_VARIABLES',
		'header'=>array( 
			'VARIABLE_NAME' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'VARIABLE_NAME', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'SESSION_VALUE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'SESSION_VALUE', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'GLOBAL_VALUE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'GLOBAL_VALUE', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'GLOBAL_VALUE_ORIGIN' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'GLOBAL_VALUE_ORIGIN', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'DEFAULT_VALUE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'DEFAULT_VALUE', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'VARIABLE_SCOPE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'VARIABLE_SCOPE', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'VARIABLE_TYPE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'VARIABLE_TYPE', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'VARIABLE_COMMENT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'VARIABLE_COMMENT', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'NUMERIC_MIN_VALUE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'NUMERIC_MIN_VALUE', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'NUMERIC_MAX_VALUE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'NUMERIC_MAX_VALUE', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'NUMERIC_BLOCK_SIZE' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'NUMERIC_BLOCK_SIZE', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'ENUM_VALUE_LIST' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'ENUM_VALUE_LIST', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'longtext',),
			'READ_ONLY' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'READ_ONLY', 'ORDINAL_POSITION' => '13', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'COMMAND_LINE_ARGUMENT' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'information_schema', 'TABLE_NAME' => 'SYSTEM_VARIABLES', 'COLUMN_NAME' => 'COMMAND_LINE_ARGUMENT', 'ORDINAL_POSITION' => '14', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>