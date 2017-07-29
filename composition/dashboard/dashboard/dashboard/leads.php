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

$opt['tag']='table';
$opt['Component']['DashTable']['condition'] = 'WHERE `agent` = '.$UserID;

$options=[];
$options['tag']='tbody';
$options['pageID']='LeadsLibrary';
$options['classes']=['Interface'];
$options['template']=$SupportPath .'/templates/LeadsList.xml';
$options['LeadsList']['leads'] = [  'select'=>' * ',
                                    'method'=>'WHERE `agent` = '.$UserID.' ',
                                    'condition'=>' ORDER BY `id` ASC LIMIT 20 ',
                                    'new_query'=>true
                                 ];
$TheList=new Smart($options);
$options=[];

$AdminContent = new renderable('table');
$AdminContent->classes=['col-sm-12', 'row'];
$AdminContent->children[]= $TheList;
$AdminMain->children[]=$AdminContent;
?>