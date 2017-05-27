<?php 
require_once(__DIR__.'/../../../../core.php');
class ss_doifd_lab_subscribers extends Dataset
{
	public static $profile= array(
		'target' =>'ss_doifd_lab_subscribers',
		'Accessor'=>array( ,
			'Reference'=>array(   array('','',''),) )
		'header'=>array( 
			'doifd_subscriber_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_doifd_lab_subscribers', 'COLUMN_NAME' => 'doifd_subscriber_id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'doifd_name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_doifd_lab_subscribers', 'COLUMN_NAME' => 'doifd_name', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'doifd_email' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_doifd_lab_subscribers', 'COLUMN_NAME' => 'doifd_email', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'doifd_email_verified' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_doifd_lab_subscribers', 'COLUMN_NAME' => 'doifd_email_verified', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'doifd_verification_number' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_doifd_lab_subscribers', 'COLUMN_NAME' => 'doifd_verification_number', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'doifd_download_id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_doifd_lab_subscribers', 'COLUMN_NAME' => 'doifd_download_id', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'doifd_subscriber_ip' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_doifd_lab_subscribers', 'COLUMN_NAME' => 'doifd_subscriber_ip', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'doifd_downloads_allowed' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_doifd_lab_subscribers', 'COLUMN_NAME' => 'doifd_downloads_allowed', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'tinyint',),
			'time' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SuiteSpaceWP', 'TABLE_NAME' => 'ss_doifd_lab_subscribers', 'COLUMN_NAME' => 'time', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '0000-00-00 00:00:00', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'datetime',),
		)
	);
	public $data;
}
?>