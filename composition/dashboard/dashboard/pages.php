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

$contentHeader->classes[]='controls';
$contentHeader->content='
<div class="control" style="float: right;padding-bottom: 4px;" data-context=\'{"dataset://compositions":{"__self_id":null, "_response_target":"#componentSettingsStage"}}\' data-intent=\'{"REFRESH":{"PagesList":"New"}}\' >
                        <button data-toggle="modal" href="#AdminModal" type="button" style="background-color: #aae; color: black;">New Page</button>
</div>';

$AdminMain->children[] = $ListStage = new renderable(['tag'=>'li', 'classes'=>['col-sm-10']]);
//$AdminMain->children[]=

//$opt['tag']='table';
//$opt['Component']['DashTable']['condition'] = 'WHERE `agent` = '.$UserID;

$options=[];
$options['tag']='tbody';
$options['pageID']='PagesLibrary';
$options['classes']=[];
$options['template']=$SupportPath .'/templates/PagesList.xml';
$options['PagesList']['compositions'] = [
    'select'=>' * ',
    'method'=>'WHERE `owner` = '.$UserID.' ',
    //'target'=>'pages',
    'condition'=>' ORDER BY `id` ASC LIMIT 20 ',
    'new_query'=>true,    //re-using previous product object from save step by re-initializing the query. else LoadObjects is confused
    //'debug'=>true
];
$TheList=new Smart('tbody','PagesList',$options);
$options=[];
$AdminContent = new renderable('table');
$AdminContent->classes=['col-sm-12', 'row'];

$AdminContent->children[]=$TheList;
$ListStage->children[]=$AdminContent;
//$items = LoadObjects( 'pages',array( 'method' => ' WHERE `agent` = '.$UserID.' ') );
//var_dump($items);
//$AdminMain->children[]= $TheList; //new renderable(['classes'=>['col-sm-2']]);

?>