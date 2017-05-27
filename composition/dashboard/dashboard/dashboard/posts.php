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
$AdminContent->classes=['col-sm-12', 'row','Interface'];
$AdminContent->content='
<div class="modal-content InterfaceContent">
    <form method="post" action="dataset://text_embeds">
    <div class="modal-body">
        <!-- input type="hidden" name="__self_id" value="[@ _self_id @]" / -->
        <textarea name="_content" class="richTextEdit col-md-12"></textarea>
    </div>

    <div class="modal-footer">
        <ul class="controls" style="display: inline-block; float:right;">
            <li class="control" data-context=\'{"_self_id":"null"}\' data-role="autoform" data-intent=\'{"REFRESH":{"Post":"Save"}}\'>
            <button type="button" data-dismiss="modal" class="btn btn-primary btn-default">Save</button>
            </li>
        </ul>
    </div>  
    </form>
</div>';
$AdminMain->children[]=$AdminContent;
?>