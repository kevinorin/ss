<?php

/*
 *  PREPARE ENVIRONMENT
 */

require_once __DIR__.'/../core.php';

global $RuntimePath;
global $StaticPath;
global $DeployPath;
global $RemoteBase;
global $ApproachDebugConsole;
global $Content;

foreach(Composition::$Active->Context['traversed'] as $node){ $DeployPath.= '/'.$node['alias'];}

$TemplatePath = $RuntimePath.'/support/templates';
$StaticMarkupPath = $TemplatePath.'/static';

Composition::$Active->DOM = new renderable('html');
$html = &Composition::$Active->DOM;

$head = new renderable( ['tag'=>'head']);
$head->content.='

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>'.Composition::$Active->Context['data']['title'].'</title>

<link href="http://static.myrealestatesite.co/css/component.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/91cc4ee1af.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<link href="http://static.myrealestatesite.co/css/style.css" rel="stylesheet" />
<link href="http://static.myrealestatesite.co/css/components.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://static.myrealestatesite.co/js/acc.js"></script>

<script>
$(document).ready(function() {
	$(\'.Interface\').each(function(instance, Markup){ Markup.Interface=new Interface(Markup);	});
});
</script>
';


/*
 *  ENVIRONMENT PREPARED
 *  LAYOUT ELEMENTS BEGIN
 */

$body = new renderable('body');
$body->classes=['sheer','col-sm-12'];

$body->children[]=
$Main = new renderable('ul');
$Main->classes=['nav','col-sm-12', 'content', 'row'];
$Main->children[]=$contentHeader=new renderable('li','ContentHeader');
$contentHeader->classes[]='col-sm-12';
//$contentHeader->attributes['style']='height: 3em; vertical-align: middle; margin-bottom: 28px; ';
$contentHeader->content='<h1 style="display: inline-block; float: left;">'.Composition::$Active->Context['data']['title'].'</h1>';
$Main->children[]=new renderable(['tag'=>'li','content'=>'<hr />']);

/*
 *  LAYOUT ELEMENT DEFINITIONS COMPLETE
 *  LAYOUT STRUCTURE BEGINS
 */
    
$html->children[] = $head;   
$html->children[] = $body;
//$body -> children[] = $Stage;


$body -> children[] = //$PopupModal; //$Stage -> children[] =
    $modal_container = new renderable('ul');
    $modal_container->classes = ['col-sm-6'];
    //$modal_container->attributes['style']='top: 20%; left: 20%; position: absolute; width: 60%; height: 22em;';
$modal_container->children[]=
$Modal  = new renderable([
    'tag'=>'li','pageID'=>'Modal',
    'classes'=>['modal', 'col-sm-12', 'Interface'],
    'attributes'=>['tabindex'=>'-1', 'role'=>'dialog','aria-labelledby'=>'Modal','aria-hidden'=>'true']
    //'template'=>$StaticMarkupPath.'/admin_modal.htm']);
]);
//$Modal->attributes['style']='top: 0px; left: 0px; position: absolute; width: 100%; height: 100%; ';
$Modal->content='<div id="modalStage"></div>';


/*
 *  LAYOUT STRUCTURE COMPLETE
 */


?>
