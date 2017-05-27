<?php
require_once __DIR__.'/../../../admin_layout.php';

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
                        <button type="button" style="background-color: #aae; color: black;">Save</button>
</div>
<span style="float: left;"><h1>'.Composition::$Active->Context['data']['title'].'</h1></span>';


$AdminContent = new renderable('li','AdminContent');
$AdminContent->classes=['col-sm-12', 'row','Interface','InterfaceContent'];
$AdminContent->content=PHP_EOL.'<form data-action="dataset://compositions">';

$options=[];
$options = [
    'select'=>' * ',
    'method'=>'WHERE `owner` = '.$UserID.' ',
    'target'=>'compositions',
    'condition'=>' ORDER BY `id` ASC LIMIT 20 ',
    'new_query'=>true,    //re-using previous product object from save step by re-initializing the query. else LoadObjects is confused
    //'debug'=>true
];

$CompsByAgent=[];
$CompTree=[];
$tmp = LoadObjects('compositions',$options);
$UserRoot = 0;
foreach($tmp as $comp){
    if($comp->data['parent']==0) $UserRoot = $comp->data['id'];
    
    $CompsByAgent[ $comp->data['id'] ] = $comp->data;
    if( isset($CompTree[ $comp->data['parent'] ]) )
        $CompTree[ $comp->data['parent'] ]['children'][]=$comp->data['id'];
    else $CompTree[ $comp->data['parent'] ]['children'] = [ $comp->data['id'] ];
}
//$CompsByAgent[0]=['alias'=>''];
//foreach($CompsByAgent as $k => $v){

$AdminContent->content.='
<div> Create new page under.. <br />';
foreach($CompTree as $branch => $nodes){
    foreach($nodes['children'] as $node)
    {
        if($branch != 0 && $branch != $UserRoot)
            $AdminContent->content .= '<label><input type="radio" name="_belongs" value="'.$node.'" /> /'.$CompsByAgent[$branch]['alias'].'/'.$CompsByAgent[$node]['alias'].'/</label><br />';
        else if ($branch == $UserRoot)
            $AdminContent->content .= '<label><input type="radio" name="_belongs" value="'.$node.'" /> '.'/'.$CompsByAgent[$node]['alias'].'</label><br />';
        else 
            $AdminContent->content .= '<label><input type="radio" name="_belongs" value="'.$UserRoot.'" />'. $CompsByAgent[$node]['alias'].'</label><br />';
        //else
            //$AdminContent->content .= '<label><input type="radio" name="_belongs" value="'.$node.'" />'. $CompsByAgent[$node]['alias'].'</label>';
    }
}
$AdminContent->content.='
</div>

<div class="Content modal-body">
  <!-- input name="__self_id" type="hidden" value="" / -->  
  <input type="hidden" name="_agent" value="'.$UserID.'" />'.
  
  //TODO: Replace 2411 with project environment variable "DynamicLayoutTypeID" which should be set via SELECT `id` FROM `types` WHERE `name` = "DynamicLayout" AND `parent` = 7
  //Optionally parent can be set to another envorinment variable looking for the type id of 'Composition' with parent of 0
  '<input type="hidden" name="_kind" value="2411" />
  <input type="hidden" name="_styler" value=\'[{"children":[{"children":[{"children":[],"nid":2,"isComponent":true,"self":{"type":"Youtube","instance":0,"self":null}}],"colindex":0,"self":{"type":"col"},"nid":1}],"nid":0,"self":{"type":"row","col-schema":12}},{"children":[{"children":[],"colindex":0,"self":{"type":"col"},"nid":19}],"nid":18,"self":{"type":"row","col-schema":"12"}}]\' />
  
  <label class="control-label">Nice URL<br/>
  <input name="_title" value="" placeholder="URL_Alias" /><br/></label>
<br/>
  <label class="control-label">Page Titlebar<br/>
  <input name="_heading" value="" placeholder="Title" /><br/></label>
<br/>
  <label class="control-label">Notes<br/>
  <input name="_about" value="" placeholder="Notes" /><br/></label>
</div>

<ul class="modal-footer controls" style="display: inline-block; float:right;">
    <li class="control" data-context=\'{"_self_id":"null"}\' data-role="autoform" data-intent=\'{"REFRESH":{"PagesList":"Save"}}\'>
      <button type="button" class="btn btn-primary btn-default">Save</button>
    </li>
</ul>
</form>

';
$AdminMain->children[]=$AdminContent;
?>