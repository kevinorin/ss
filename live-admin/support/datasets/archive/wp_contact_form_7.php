<?php 
require_once(__DIR__.'/../../core.php');
class wp_contact_form_7 extends Dataset
{
	public static $profile= array(
		'target' =>'wp_contact_form_7',
		'Accessor'=>array( 'Primary' => 'cf7_unit_id'),
		'header'=>array( 
			'cf7_unit_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_contact_form_7', 'COLUMN_NAME' => 'cf7_unit_id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'title' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_contact_form_7', 'COLUMN_NAME' => 'title', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'form' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_contact_form_7', 'COLUMN_NAME' => 'form', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'text',),
			'mail' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_contact_form_7', 'COLUMN_NAME' => 'mail', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'text',),
			'mail_2' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_contact_form_7', 'COLUMN_NAME' => 'mail_2', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'text',),
			'messages' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_contact_form_7', 'COLUMN_NAME' => 'messages', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'text',),
			'additional_settings' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_contact_form_7', 'COLUMN_NAME' => 'additional_settings', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'text',),
		)
	);
	public $data;
}
?>