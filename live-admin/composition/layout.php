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

<link href="'.$StaticPath.'/css/toolkit-inverse.css" rel="stylesheet">
<link href="'.$StaticPath.'/css/component.css" rel="stylesheet" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="'.$StaticPath.'/js/chart.js"></script>
<script type="text/javascript" src="'.$StaticPath.'/js/tablesorter.min.js"></script>
<script type="text/javascript" src="'.$StaticPath.'/js/toolkit.js"></script>
<script type="text/javascript" src="'.$StaticPath.'/js/application.js"></script>
<script type="text/javascript" src="'.$StaticPath.'/js/acc.js"></script>
<title>Visual Realty</title>

<script>
$(document).ready(function() {  $("[data-sort=table]").tablesorter({sortList: [[1,0]]});     });
</script>
';


/*
 *  ENVIRONMENT PREPARED
 *  LAYOUT ELEMENTS BEGIN
 */


$body = new renderable( 'body' );

$arg['classes'] = ['container'];
$arg['tag'] = 'div';
$Stage = new renderable($arg);

$arg['classes'] = ['row'];
$Wrapper = new renderable($arg);

$arg['classes'] = ['nav','nav-bordered'];
$arg['tag']='ul';

$Sidebar = new renderable($arg);

$arg['classes'] = ['col-sm-12 content row'];
$Screen = new renderable($arg);

$arg['classes'] = ['modal fade'];
$arg['attributes']['tabindex'] = '-1';
$arg['PageID'] = 'docsModal';
$arg['attributes']['role'] = 'dialog';
$arg['attributes']['aria-labelledby'] = 'myModalLabel';

$PopupModal = new renderable($arg);


/*
 *  LAYOUT ELEMENT DEFINITIONS COMPLETE
 *  LAYOUT STRUCTURE BEGINS
 */
    
$html->children[] = $head;   
$html->children[] = $body;
$body -> children[] = $Stage;
//$Stage -> children[] = $Wrapper;

$Stage -> children[] = $Sidebar;
$Stage -> children[] = $Screen;

$nav_type='';
if(isset(Composition::$Active->Context['type'][1])) $nav_type = Composition::$Active->Context['type'][1];
$Sidebar->attributes['style'] = 'margin-bottom: 2em;';
$Sidebar->content.= ' <li'.($nav_type == 'main' ? ' class="active"' : '').'><a href="//'.$RemoteBase.'/main">Overview</a></li> '.
                    ' <li'.($nav_type == 'product' ? ' class="active"' : '').'><a href="//'.$RemoteBase.'/product_view">Products</a></li> '.
                    ' <li'.($nav_type == 'order' ? ' class="active"' : '').'><a href="//'.$RemoteBase.'/orders_view">Orders</a></li> '.
//                    ' <li'.($nav_type == 'customer' ? ' class="active"' : '').'><a href="//'.$RemoteBase.'/customer_view">Customers</a></li> '.
                    ' <li'.($nav_type == 'advert' ? ' class="active"' : '').'><a href="//'.$RemoteBase.'/advertising">Advertising</a></li> '.
                    ' <li'.($nav_type == 'settings' ? ' class="active"' : '').'><a href="//'.$RemoteBase.'/user_settings">My Account</a></li> '.
                    ' <li style="float: right;"><button type="button" class="btn btn-default-outline navbar-btn" data-toggle="modal" data-target="#SigninModal">Sign in</button></li>';
$body -> children[] = $PopupModal;

$Stage -> children[] = $modal_container = new renderable('ul');
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
