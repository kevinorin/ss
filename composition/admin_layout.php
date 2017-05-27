<?php

/*
 *  PREPARE ENVIRONMENT
 */

require_once __DIR__ . '/../core.php';

global $RuntimePath;
global $StaticPath;
global $DeployPath;
global $RemoteBase;
global $SecureBase;
global $ApproachDebugConsole;
global $Content;

foreach (Composition::$Active->Context['traversed'] as $node) {
    $DeployPath.= '/' . $node['alias'];
}

$TemplatePath = $RuntimePath . '/support/templates';
$StaticMarkupPath = $TemplatePath . '/static';

Composition::$Active->DOM = new renderable('html');
$html = &Composition::$Active->DOM;

$head = new renderable(['tag' => 'head']);
$assetsPath = $StaticPath . "/prototype/admin/assets/";
$head->content.='<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <meta name = "format-detection" content = "telephone=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>:: VR Admin ::</title>
    <link href="' . $assetsPath . 'css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles-->
    <link href="' . $assetsPath . 'css/docs.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <link href="' . $assetsPath . 'css/ie8.css" rel="stylesheet">
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="' . $assetsPath . 'js/modernizr-3.3.1.min.js"></script>
        <!-- JavaScript files -->
    <script src="' . $assetsPath . 'js/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="' . $assetsPath . 'js/bootstrap.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="' . $assetsPath . 'js/cssua.js"></script>
    <script src="' . $assetsPath . 'js/custom.js"></script>';

/*
 *  ENVIRONMENT PREPARED
 *  LAYOUT ELEMENTS BEGIN
 */

$body = new renderable('body');

$body->children[] = $Page = new renderable('div');
$Page->pageID = "page";

$Page->children[] = $Wrapper = new renderable('div');
$Wrapper->pageID = "wrapper";

$Wrapper->children[] = $Header = new renderable('header');
$Header->pageID = 'header';
$Header->classes = ['navbar', 'navbar-default'];
$Header->content = '
  <div class="header-inner">
  <div class="navbar-header">
  <a class="navbar-brand" href="#"><img src="' . $StaticPath . '/img/ss_logo_alpha.png" alt=""></a>
  <button type="button" class="navbar-toggle">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  </div>
  <nav id="nav">
  <div class="navbar-collapse">
  <ul class="nav navbar-nav">
  <li><a data-toggle="listings" href="' . $SecureBase . '/dashboard/listings">Listings</a></li>
  <li><a data-toggle="leads" href="' . $SecureBase . '/dashboard/leads">Leads</a></li>
  <li><a data-toggle="pages" href="' . $SecureBase . '/dashboard/pages">Pages</a></li>
  <li><a data-toggle="posts" href="' . $SecureBase . '/dashboard/posts">Posts</a></li>
  <li><a data-toggle="settings" href="' . $SecureBase . '/dashboard/settings">Settings</a></li>
  <li><a data-toggle="support" href="' . $SecureBase . '/dashboard/support">Support</a></li>
  </ul>
  <ul class="nav-icons clearfix">
  <li><a href="#">View Site</a></li>
  <li><a href="#">Logout</a></li>
  </ul>
  </div>
  </nav>
  </div>';

$Wrapper->children[] = $AdminMain = new renderable('section');
$AdminMain->pageID = 'content';

$AdminMain->children[] = $contentHeader = new renderable('div');
$contentHeader->classes = ['container-fluid'];

/*
 *  LAYOUT ELEMENT DEFINITIONS COMPLETE
 *  LAYOUT STRUCTURE BEGINS
 */

$html->children[] = $head;
$html->children[] = $body;
//$body -> children[] = $Stage;
$body->children[] = $modal_container = new renderable('ul');
$modal_container->classes = ['col-sm-12'];
$modal_container->children[] = $AdminModal = new renderable([
    'tag' => 'li', 'pageID' => 'AdminModal',
    'classes' => ['modal', 'col-sm-6', 'Interface'],
    'attributes' => ['tabindex' => '-1', 'role' => 'dialog', 'aria-labelledby' => 'AdminModal', 'aria-hidden' => 'true', 'data-persist' => 'data-persist,id,class']
        //'template'=>$StaticMarkupPath.'/admin_modal.htm']);
        ]);
$AdminModal->content = '<div id="componentSettingsStage" data-persist=\'[&quot;data-persist&quot;,&quot;id&quot;,&quot;data-instance&quot;,&quot;class&quot;]\' class="Interface InterfaceContent"></div>';

/*
 *  LAYOUT STRUCTURE COMPLETE
 */
?>
