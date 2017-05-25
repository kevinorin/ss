<?php

require_once __DIR__.'/../../admin_layout.php';

global $RuntimePath;
global $DeployPath;
global $SupportPath;
global $StaticFiles;

$StaticMarkupPath = $RuntimePath.'/support/templates/static/';
$TemplatePath = $RuntimePath.'/support/templates/';

$items = LoadObjects( 'compositions',array( 'method' => ' WHERE parent = '.Composition::$Active->Context['data']['id'] ));
$UserID = Composition::$Active->Context['authenticated_account']->data['id'];

$AdminMain->children[]= $AdminContentWrap = new renderable(['tag'=>'li','classes'=>['col-sm-12']]);



$options=[];

//$AdminContent->attributes['style']='height: 90%; position: relative; top: 0px; left: 0px;';
//$ContainerContent->children[] = (new BootstrapPanel('hello','mr','tseng'))->panel;

$o['tag']='input';
$o['attributes']=['name'=>'_listing_title', 'placeholder'=>'Listing Title'];
$o['PageID']=null;
$o['classes']=[];
$AdminContentWrap->children[]= $ListingTitle = new renderable($o);

$o['tag']='select';
$o['attributes']=['name'=>'_listing_type'];
$AdminContentWrap->children[]= $ListingType= new renderable($o);

$o['attributes']=['name'=>'_listing_status'];
$AdminContentWrap->children[]= $ListingStatus= new renderable($o);

    $o['tag']='option';
    $o['attributes']=['value'=>'1', 'selected'=>'selected'];
    $o['content']='Regular';
    $ListingType->children[]= new renderable($o);
    $o['attributes']=['value'=>'2'];
    $o['content']='Featured';
    $ListingType->children[]= new renderable($o);

    

    $o['tag']='option';
    $o['attributes']=['value'=>'1', 'selected'=>'selected'];
    $o['content']='Active';
    $ListingType->children[]= new renderable($o);
    $o['attributes']=['value'=>'2'];
    $o['content']='Expired';
    $ListingType->children[]= new renderable($o);


$o['content']=null;
$o['tag']='input';
$o['attributes']=['name'=>'_listing_mls', 'placeholder'=>'MLS Number'];
$AdminContentWrap->children[]= $ListingTitle = new renderable($o);

$o['attributes']=['name'=>'_listing_price', 'placeholder'=>'Price'];
$AdminContentWrap->children[]= $ListingPrice = new renderable($o);
$o['attributes']=['name'=>'_listing_beds', 'placeholder'=>'Bedroom(s)'];
$AdminContentWrap->children[]= $ListingBeds = new renderable($o);
$o['attributes']=['name'=>'_listing_baths', 'placeholder'=>'Bathroom(s)'];
$AdminContentWrap->children[]= $ListingBaths = new renderable($o);
$o['attributes']=['name'=>'_listing_sqft', 'placeholder'=>'SQ FT.'];
$AdminContentWrap->children[]= $ListingArea = new renderable($o);

    

$o['tag']='textarea';
$o['attributes']=['rows'=>5,'name'=>'_listing_description'];
$o['classes']=['RichTextArea'];
$AdminContentWrap->children[]= $ListingDesc = new renderable($o);





/****       SETTINGS        ***/
/*          General           */

$o['tag']='input';
$o['attributes']=['name'=>'_setting_sitetitle', 'placeholder'=>'Site Title'];
$General->children[] = new renderable($o);

$o['attributes']=['name'=>'_setting_subdomain', 'placeholder'=>'yourname'];
$General->children[] = new renderable($o);

$o['attributes']=['name'=>'_setting_domain', 'placeholder'=>'Custom Domain'];
$General->children[] = new renderable($o);
    
$o['attributes']=['name'=>'_setting_ganalytics', 'placeholder'=>'Google Analytics ID'];
$General->children[] = new renderable($o);


/*          Account           */


$o['attributes']=['name'=>'_setting_sitetitle', 'placeholder'=>'Site Title'];
$General->children[] = new renderable($o);

/*          Appearance        */

//$o=[];
$o=['tag'=>'div','content'=>'How would you like the header to show?'];

//$o['attributes']=['name'=>'_setting_sitetitle', 'placeholder'=>'Site Title'];
$Appearance->children[]= new renderable($o);
$o=['tag'=>'label'];
$o['content']='<input type="radio" name="_setting_heading" value="255" /><img src="http://placehold.it/20x20/35d/fff&text=f" />';
$Appearance->children[] = new renderable($o);
$o['content']='<input type="radio" name="_setting_heading" value="0" /><img src="http://placehold.it/20x20/35d/fff&text=f" />';
$Appearance->children[] = new renderable($o);
  


/*          MLS/IDX           */


$o['tag']='';
$o['attributes']=[];
$o['PageID']='';
$o['classes']=[];
$r = new renderable($o);


?>