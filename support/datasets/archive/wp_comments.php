<?php 
require_once(__DIR__.'/../../core.php');
class wp_comments extends Dataset
{
	public static $profile= array(
		'target' =>'wp_comments',
		'Accessor'=>array( 'Primary' => 'comment_ID'),
		'header'=>array( 
			'comment_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_ID', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'comment_post_ID' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_post_ID', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'comment_author' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_author', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinytext',),
			'comment_author_email' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_author_email', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'comment_author_url' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_author_url', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'comment_author_IP' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_author_IP', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'comment_date' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_date', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '0000-00-00 00:00:00', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'datetime',),
			'comment_date_gmt' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_date_gmt', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '0000-00-00 00:00:00', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'datetime',),
			'comment_content' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_content', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'text',),
			'comment_karma' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_karma', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'comment_approved' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_approved', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '1', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'comment_agent' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_agent', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'comment_type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_type', 'ORDINAL_POSITION' => '13', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'comment_parent' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'comment_parent', 'ORDINAL_POSITION' => '14', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'user_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'croptender_2', 'TABLE_NAME' => 'wp_comments', 'COLUMN_NAME' => 'user_id', 'ORDINAL_POSITION' => '15', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
		)
	);
	public $data;
}
?>