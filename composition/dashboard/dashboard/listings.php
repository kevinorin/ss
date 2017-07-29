<?php
require_once __DIR__.'/../../admin_layout.php';

global $RuntimePath;
global $DeployPath;
global $SupportPath;
global $StaticFiles;

$StaticMarkupPath = $RuntimePath.'/support/templates/static/';
$TemplatePath = $RuntimePath.'/support/templates/';

$items = LoadObjects( 'compositions',array( 'method' => ' WHERE parent = '.Composition::$Active->Context['data']['id'] ));
$UserID = Composition::$Active->Context['authenticated_account']->data['id'];

$contentHeader->content='<div class="heading-title clearfix"><div class="heading-left"><h2>' . Composition::$Active->Context['data']['title'] . '</h2></div><div class="heading-right text-right"><a href="listings/new" class="btn btn-primary">New Listing</a></div></div>';
//$AdminMain->children[]=

$opt['tag']='table';
$opt['classes']=['table-large'];
$opt['Component']['DashTable']['condition'] = 'WHERE `agent` = '.$UserID;

$options=[];
$options['tag']='tbody';
$options['pageID']='ListingsLibrary';
$options['classes']=['Interface'];
$options['template']=$SupportPath .'/templates/ListingsList.xml';
$options['ListingsList']['listings'] = [  'select'=>' * ',    'new_query'=>true   ];
$TheList=new Smart($options);
$options=[];

$AdminContent = new renderable('div');
$AdminContent->classes=['row','content-body'];
$AdminContent->children[]=$AdminTable = new renderable('table');
$AdminTable->classes = ['table table-hover table-large'];
$AdminTable->children[]=$TheList;

$AdminMain->children[]=$AdminContent;
?>