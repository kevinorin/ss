<?php

require_once __DIR__.'/../core.php';

global $RuntimePath;
global $StaticPath;
global $DeployPath;
global $RemoteBase;
global $ApproachDebugConsole;
global $Content;

$TemplatePath = $RuntimePath.'/support/templates';
$StaticMarkupPath = $TemplatePath.'/static';

$html = new renderable('html');

$theme_brightness = isset($_REQUEST['style']) ? $_REQUEST['style'] : 'light';
$theme_brightness_toggle = $theme_brightness == 'light' ? 'dark':'light';

$html->children[] = $head = new renderable( ['tag'=>'head']);
        $head->content.=PHP_EOL.'<meta http-equiv="X-UA-Compatible" content="IE=edge" />'.PHP_EOL;

    
$html->children[] = $body = new renderable( 'body' );

$arg["classes"] = ['container'];
$arg["tag"] = 'div';

    $body -> children[] = 
    $Container = new renderable($arg);

$arg["classes"] = ['row'];

    $body -> children[] =
    $ContainerRow = new renderable($arg);

$arg["classes"] = ["col-sm-3 sidebar"];

    $body -> children[] =
    $ContainerSidebar = new renderable($arg);
    
$arg["classes"] = ["col-sm-9 content"];
    
    $body -> children[] =
    $ContainerContent = new renderable($arg);

$arg["classes"] = ["modal fade"];
$arg['attributes']["tabindex"] = '-1';
$arg["PageID"] = 'docsModal';
$arg['attributes']["role"] = 'dialog';
$arg['attributes']["aria-labelledby"] = 'myModalLabel';

    $body -> children[] =
    $ContainerLabel = new renderable($arg);
    
    /*
    $arg['tag']='img';
    
    $taco = new renderable($arg);
    $taco->attributes['src'] = 'something';
    
    
    
    <img src="something">
    
    $arg['tag']='img';
    $arg['attributes']['src']='something';

    $taco = new renderable($arg);
    $taco->attributes['src'] = 'something';

    */
echo $html->render();
?>
