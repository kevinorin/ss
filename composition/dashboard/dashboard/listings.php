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

$contentHeader->content='
<a href="listings/new" style="float: right;padding-bottom: 4px;" >
    <button type="button" style="background-color: #aae; color: black;">New Listing</button>
</a>
<span style="float: left;"><h1>'.Composition::$Active->Context['data']['title'].'</h1></span>';

$AdminMain->children[]=new renderable(['classes'=>['col-sm-2']]);
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

$AdminContent = new renderable('li');
$AdminContent->classes=['col-sm-10', 'row','container-fluid'];
$AdminContent->children[]=$AdminTable = new renderable('table');
$AdminTable->children[]=$TheList;

$AdminMain->children[]=$AdminContent;
?>