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

<!-- link href="https://static.myrealestatesite.co/css/toolkit-light.css" rel="stylesheet"-->
<!-- link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" -->
<link href="https://static.myrealestatesite.co/css/component.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/91cc4ee1af.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<link href="https://static.myrealestatesite.co/css/wysiwyg-style.css" rel="stylesheet" />
<link href="https://static.myrealestatesite.co/css/style.css" rel="stylesheet" />
<link href="https://static.myrealestatesite.co/css/components.css" rel="stylesheet" />
<link href="https://static.myrealestatesite.co/css/compositor.css" rel="stylesheet" />
<link href="https://static.myrealestatesite.co/css/jquery-te-1.4.0.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script src="https://static.myrealestatesite.co/js/jquery-te-1.4.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://static.myrealestatesite.co/js/acc.js"></script>
<script type="text/javascript" src="https://static.myrealestatesite.co/js/compositor.js"></script>


<script>
document.domain = "myrealestatesite.co";
Interface.prototype.RefreshComplete = function(el,sel,markup){ var r=$(sel).find(".richTextEdit").jqte(); console.log(r); };

$(document).ready(function() 
{
//	$("[data-sort=table]").tablesorter({sortList: [[1,0]]});
    $(".addComponentBtn").click(addComponent);
    $(".ComponentBtns").click(ComponentAdded);
    $(".deleteRow").click(remRow);	
    Interface.prototype.getSelectedStage = function(support){ return $(ActiveStage).find(".addComponentBtn").last();    };
    Interface.prototype.selectedComponent = function(support) { return $(ActiveLayoutComponent) };
	$("#PreviewLayout").click(PreviewLayout);
	$("#SaveLayout").click(SaveLayout);
	$(".rowSettingsSave").click(RowSettings);
 	$(".editRow").click(EditRow);
    $(".Interface").each(function(instance, Markup){ Markup.Interface=new Interface(Markup);	});
    $("#layoutCanvas").sortable({stop:onSort, handle: ".moveRow"});
});
</script>
';


/*
 *  ENVIRONMENT PREPARED
 *  LAYOUT ELEMENTS BEGIN
 */

$body = new renderable('body');
$body->classes=['sheer','col-sm-12'];
    
$html->children[] = $head;   
$html->children[] = $body;

$body -> children[] = 
    $Layout = new renderable([  'tag'=>'ul',
                                //'attributes'=>['style'=>'height: 100%; position: absolute; top: 0; left: 0; z-index: 1;'],
                                'classes'=>['nav','col-sm-12','content','row']
    ]);
    $Layout->children[]= $ContentHeader = new renderable([  'tag'=>'li',
                                                            'PageID'=>'ContentHeader',
                                                            'attributes'=>['style'=>'height: 3em; vertical-align: middle; margin-bottom: 32px;']
    ]);
    $Layout->children[]=                  new renderable([  'tag'=>'li',    'content'=>'<hr />'    ]);
    $Layout->children[]= $CanvasWrapper = new renderable([  'tag'=>'li']);
        $CanvasWrapper->children[]=
            $LayoutCanvas = new renderable([                'tag'=>'ul',
                                                            'PageID'=>'layoutCanvas',
                                                            'attributes'=>['style'=>'min-height: 38em;']
        ]);


$body -> children[] = 
    $modal_container = new renderable([ 'tag'=>'div',
                                        'PageID'=>'ModalStack',
                                        'classes'=>['col-sm-9'],
                                        'template'=>$StaticMarkupPath.'/pagebuild_modal.htm'
    ]);

/*
 *  LAYOUT STRUCTURE COMPLETE
 */


?>
