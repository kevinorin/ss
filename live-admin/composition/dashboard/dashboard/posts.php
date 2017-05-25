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

$options=[];
$options['tag']='tbody';
$options['pageID']='PostsLibrary';
$options['template']=$SupportPath .'/templates/PostsList.xml';
$options['classes'][]='col-sm-12';
$options['classes'][]='Interface';
$options['PostsList']['text_embeds'] = [  'select'=>' * ',    'new_query'=>true   ];
$TheList=new Smart($options);
$options=[];

$AdminContent = new renderable('table');
$AdminContent->classes=['col-sm-12', 'row'];
$AdminContent->children[]= $TheList;
$AdminMain->children[]=$AdminContent;
?>