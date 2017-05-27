<?php 
require_once(__DIR__.'/../../../../core.php');
class layouts extends Dataset
{
	public static $profile= array(
		'target' =>'layouts',
		'Accessor'=>array( 
			'Primary' => 'id',
			'Reference'=>array(  array('','',''), array('','',''), array('','',''),)),
		'header'=>array( 
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'layouts', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'composition' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'layouts', 'COLUMN_NAME' => 'composition', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'owner' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'layouts', 'COLUMN_NAME' => 'owner', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'row' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'layouts', 'COLUMN_NAME' => 'row', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'columnize' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'layouts', 'COLUMN_NAME' => 'columnize', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinytext',),
			'type_col0' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'layouts', 'COLUMN_NAME' => 'type_col0', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinytext',),
			'type_col1' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'layouts', 'COLUMN_NAME' => 'type_col1', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'tinytext',),
			'type_col2' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'layouts', 'COLUMN_NAME' => 'type_col2', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'tinytext',),
			'type_col3' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'layouts', 'COLUMN_NAME' => 'type_col3', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'tinytext',),
			'args_col0' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'layouts', 'COLUMN_NAME' => 'args_col0', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'text',),
			'args_col1' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'layouts', 'COLUMN_NAME' => 'args_col1', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'text',),
			'args_col2' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'layouts', 'COLUMN_NAME' => 'args_col2', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'text',),
			'args_col3' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'layouts', 'COLUMN_NAME' => 'args_col3', 'ORDINAL_POSITION' => '13', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'text',),
		)
	);
	public $data;
}
?>