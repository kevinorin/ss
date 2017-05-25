<?php 
require_once(__DIR__.'/../../core.php');
class cp_newsletter_stats extends Dataset
{
	public static $profile= array(
		'target' =>'cp_newsletter_stats',
		'Accessor'=>array( 'Primary' => 'id'),
		'header'=>array( 
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_newsletter_stats', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'user_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_newsletter_stats', 'COLUMN_NAME' => 'user_id', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'email_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_newsletter_stats', 'COLUMN_NAME' => 'email_id', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'link_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_newsletter_stats', 'COLUMN_NAME' => 'link_id', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'created' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_newsletter_stats', 'COLUMN_NAME' => 'created', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => 'CURRENT_TIMESTAMP', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'timestamp',),
			'url' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_newsletter_stats', 'COLUMN_NAME' => 'url', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'anchor' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_newsletter_stats', 'COLUMN_NAME' => 'anchor', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'ip' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_newsletter_stats', 'COLUMN_NAME' => 'ip', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'country' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_newsletter_stats', 'COLUMN_NAME' => 'country', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
		)
	);
	public $data;
}
?>