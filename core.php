<?php

/*************************************************************************

 APPROACH 
 Organic, human driven software.
 
 garet@approachfoundation.org
 Feel free to contact me dev to dev!
 
 *************************************************************************/

global $RuntimePath;
global $InstallPath;
global $StaticFiles;
global $DeployPath;
global $SupportPath;
global $DataPath;
global $UserPath;
global $RemoteBase;
global $MultiEOL;
global $APROACH_SERVICE_CALL;


$MultiEOL =PHP_EOL.'<br />';

$RuntimePath	=__DIR__;
$InstallPath	=__DIR__.'/../Approach';
$SupportPath	=__DIR__.'/support';
$UserPath	=$SupportPath.'/components';
$DataPath	=$SupportPath.'/datasets/schema/SellerSumo';
$StaticPath	='//static.myrealestatesite.co';
$DeployPath	='//myrealestatesite.co';
$RemoteBase	='myrealestatesite.co';
$SecureBase = 'https://myrealestatesite.co';
$APROACH_SERVICE_CALL = false;

ini_set('session.cookie_domain', '.myrealestatesite.co');

require_once($RuntimePath.'/support/_config.php');
require_once($InstallPath.'/base/Renderables/DisplayUnits.php');
require_once($InstallPath.'/base/Dataset.php');
require_once($InstallPath.'/base/Smart.php');
require_once($InstallPath.'/base/ClientEvents.php');
require_once($InstallPath.'/core/Component.php');
require_once($InstallPath.'/core/Composition.php'); 
require_once($InstallPath.'/core/Service.php');

foreach (glob($DataPath .'/*.php') as $filename) require_once $filename;
foreach (glob($UserPath .'/*.php') as $filename) require_once $filename;

?>
