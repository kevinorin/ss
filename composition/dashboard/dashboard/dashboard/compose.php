<?php
require_once __DIR__.'/../../../admin_layout.php';


$traversed = Composition::$Active->Context['traversed'];
$action_domain = $traversed[ count($traversed) - 2 ]['alias'];

$command = $alias = Composition::$Active->Context['data']['alias'];

if($command=='new')
switch($action_domain){
    case 'leads': require_once 'leads.php'; break;
    case 'support': require_once 'support.php'; break;
    case 'settings': require_once 'settings.php'; break;
    case 'pages': require_once 'pages.php'; break;
    case 'posts': require_once 'posts.php'; break;
    case 'listings': require_once 'listings.php'; break;
    default: break;
}





?>