<?php

/*
 *  PREPARE ENVIRONMENT
 */

require_once __DIR__.'/../core.php';

global $RuntimePath;
global $StaticPath;
global $DeployPath;
global $RemoteBase;
global $SecureBase;
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

<link href="https://static.myrealestatesite.co/css/component.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/91cc4ee1af.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<link href="https://static.myrealestatesite.co/css/jquery-te-1.4.0.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<link href="https://static.myrealestatesite.co/css/dashboard.css" rel="stylesheet" />

<link href="../static/css/admin.css" rel="stylesheet" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://static.myrealestatesite.co/js/jquery-te-1.4.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.min.js"></script>
<script type="text/javascript" src="https://static.myrealestatesite.co/js/acc.js"></script>
<title>Visual Realty</title>
<script>
Interface.prototype.RefreshComplete = function(el,sel,markup){ var r=$(sel).find(".richTextEdit").jqte(); console.log(r); };
$(document).ready(function() {
	$(".Interface").each(function(instance, Markup){ Markup.Interface=new Interface(Markup); });
    $("#settingsTabs a").click(function(e) {  e.preventDefault();  $(this).tab("show");} );
});
</script>
';


/*
 *  ENVIRONMENT PREPARED
 *  LAYOUT ELEMENTS BEGIN
 */

$body = new renderable('body');
//$body->classes=['sheer','fit'];



$body->children[]=

$AdminNav = new renderable('ul');
$AdminNav->classes=['nav col-sm-2 navbar navbar-default'];
$AdminNav->pageID='nav';
$AdminNav->classes[]='header-inner';
$AdminNav->content='
<li class="navbar-header">
    <a class="navbar-brand" href="#"><img src="'.$StaticPath.'/img/ss_logo_alpha.png" alt=""></a><br/>
    <button type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar">A</span>
        <span class="icon-bar">B</span>
        <span class="icon-bar">C</span>
    </button>
</li>
<!-- Nav Start -->
<li>
    <nav id="nav">
    <ul class="nav navbar-nav navbar-collapse">
      <li><a data-toggle="listings" href="'.$SecureBase.'/dashboard/listings">Listings</a></li>
      <li><a data-toggle="leads" href="'.$SecureBase.'/dashboard/leads">Leads</a></li>
      <li><a data-toggle="pages" href="'.$SecureBase.'/dashboard/pages">Pages</a></li>
      <li><a data-toggle="posts" href="'.$SecureBase.'/dashboard/posts">Posts</a></li>
      <li><a data-toggle="settings" href="'.$SecureBase.'/dashboard/settings">Settings</a></li>
      <li><a data-toggle="support" href="'.$SecureBase.'/dashboard/support">Support</a></li>
    </ul>
    <ul class="nav-icons clearfix">
        <li><a href="#">View Site</a></li>
        <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
    </ul>
    </nav>
</li>
';


//$wrapper->children[]=
$body->children[]=

$AdminMain = new renderable('ul');
$AdminMain->pageID='content';
$AdminMain->classes=['nav','col-sm-10', 'content', 'row'];

$AdminMain->children[]=
$contentHeader=new renderable('li','ContentHeader');
$contentHeader->classes[]='Interface';
$contentHeader->classes[]='container-fluid';
$contentHeader->content='<span style="float: left;"><h1>'.Composition::$Active->Context['data']['title'].'</h1></span>';

$contentHeader->children[]=new renderable(['tag'=>'hr','selfContained'=>'true']);






/*
 *  LAYOUT ELEMENT DEFINITIONS COMPLETE
 *  LAYOUT STRUCTURE BEGINS
 */
    
$html->children[] = $head;   
$html->children[] = $body;
//$body -> children[] = $Stage;
$body->children[]=
    $modal_container = new renderable('ul');
    $modal_container->classes = ['col-sm-12'];
$modal_container->children[]=
$AdminModal  = new renderable([
    'tag'=>'li','pageID'=>'AdminModal',
    'classes'=>['modal', 'col-sm-6', 'Interface'],
    'attributes'=>['tabindex'=>'-1', 'role'=>'dialog','aria-labelledby'=>'AdminModal','aria-hidden'=>'true','data-persist'=>'data-persist,id,class']
    //'template'=>$StaticMarkupPath.'/admin_modal.htm']);
]);
$AdminModal->content='<div id="componentSettingsStage" data-persist=\'[&quot;data-persist&quot;,&quot;id&quot;,&quot;data-instance&quot;,&quot;class&quot;]\' class="Interface InterfaceContent"></div>';


/*
 *  LAYOUT STRUCTURE COMPLETE
 */


?>
