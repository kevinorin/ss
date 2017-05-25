<?php 
require_once(__DIR__.'/../../core.php');
class cp_posts extends Dataset
{
	public static $profile= array(
		'target' =>'cp_posts',
		'Accessor'=>array( 'Primary' => 'ID'),
		'header'=>array( 
			'ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'ID', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'post_author' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_author', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'post_date' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_date', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0000-00-00 00:00:00', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'datetime',),
			'post_date_gmt' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_date_gmt', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0000-00-00 00:00:00', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'datetime',),
			'post_content' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_content', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'longtext',),
			'post_title' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_title', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'text',),
			'post_excerpt' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_excerpt', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'text',),
			'post_status' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_status', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => 'publish', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'comment_status' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'comment_status', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => 'open', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'ping_status' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'ping_status', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => 'open', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'post_password' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_password', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'post_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_name', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'to_ping' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'to_ping', 'ORDINAL_POSITION' => '13', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'text',),
			'pinged' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'pinged', 'ORDINAL_POSITION' => '14', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'text',),
			'post_modified' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_modified', 'ORDINAL_POSITION' => '15', 'COLUMN_DEFAULT' => '0000-00-00 00:00:00', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'datetime',),
			'post_modified_gmt' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_modified_gmt', 'ORDINAL_POSITION' => '16', 'COLUMN_DEFAULT' => '0000-00-00 00:00:00', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'datetime',),
			'post_content_filtered' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_content_filtered', 'ORDINAL_POSITION' => '17', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'longtext',),
			'post_parent' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_parent', 'ORDINAL_POSITION' => '18', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'guid' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'guid', 'ORDINAL_POSITION' => '19', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'menu_order' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'menu_order', 'ORDINAL_POSITION' => '20', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'post_type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_type', 'ORDINAL_POSITION' => '21', 'COLUMN_DEFAULT' => 'post', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'post_mime_type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'post_mime_type', 'ORDINAL_POSITION' => '22', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'comment_count' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_wp', 'TABLE_NAME' => 'cp_posts', 'COLUMN_NAME' => 'comment_count', 'ORDINAL_POSITION' => '23', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>