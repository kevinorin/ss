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

<!--link href="https://static.myrealestatesite.co/css/toolkit-light.css" rel="stylesheet"-->
<link href="https://static.myrealestatesite.co/css/component.css" rel="stylesheet" />
<link href="https://static.myrealestatesite.co/css/style.css" rel="stylesheet" />
<!-- link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/91cc4ee1af.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<!--script type="text/javascript" src="https://static.myrealestatesite.co/js/chart.js"></script-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

<!--script type="text/javascript" src="https://static.myrealestatesite.co/js/toolkit.js"></script>
<script type="text/javascript" src="https://static.myrealestatesite.co/js/tablesorter.min.js"></script>
<script type="text/javascript" src="https://static.myrealestatesite.co/js/application.js"></script>
<script type="text/javascript" src="https://static.myrealestatesite.co/js/optimal-select.min.js"></script-->
<script type="text/javascript" src="https://static.myrealestatesite.co/js/acc.js?v='.mt_rand().'"></script>
<title>Visual Realty</title>
';


/*
 *  ENVIRONMENT PREPARED
 *  LAYOUT ELEMENTS BEGIN
 */

$body = new renderable('body',NULL,['sheer']);
$body->children[]=
$AdminMain = new renderable('ul');
$AdminMain->classes=['nav','col-sm-12', 'content', 'row'];
$AdminMain->children[]=new renderable(['classes'=>['col-sm-2']]);
$AdminMain->children[]=$contentHeader=new renderable(['tag'=>'li','pageID'=>'ContentHeader','classes'=>['col-sm-8']]);
//$AdminMain->children[]=new renderable(['classes'=>['col-sm-2']]);
$contentHeader->attributes['style']='vertical-align: middle; ';
$contentHeader->content='<img src="//static.myrealestatesite.co/img/walkbanner.jpg" style="width: 100%" /><span style="float: left;"><h1>'.Composition::$Active->Context['data']['title'].'</h1></span>';
$AdminMain->children[]=new renderable(['tag'=>'li','content'=>'<hr />']);

/*
 *  aAYOUT ELEMENT DEFINITIONS COMPLETE
 *  LAYOUT STRUCTURE BEGINS
 */
    
$html->children[] = $head;   
$html->children[] = $body;
//$body -> children[] = $Stage;


//$body -> children[] = $PopupModal;
//$Stage -> children[] = $modal_container = new renderable('ul');
//$modal_container->attributes['style']='display: none;';
$modal_container->children[]=
$SigninModal  = new renderable([
    'tag'=>'li','pageID'=>'SigninModal',
    'classes'=>['modal','fade'],
    'attributes'=>['tabindex'=>'-1', 'role'=>'dialog','aria-labelledby'=>'SigninModal','aria-hidden'=>'true','style'=>'display: none;'],
    'template'=>$StaticMarkupPath.'/signin_modal.htm']);

/*
 *  LAYOUT STRUCTURE COMPLETE
 */


?>
