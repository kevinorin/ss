<?php

global $RuntimePath;
global $DeployPath;
global $SupportPath;
global $StaticFiles;

require_once $RuntimePath .'/composition/admin_layout.php';


$StaticMarkupPath = $RuntimePath.'/support/templates/static/';
$TemplatePath = $RuntimePath.'/support/templates/';

$items = LoadObjects( 'compositions',array( 'method' => ' WHERE parent = '.Composition::$Active->Context['data']['id'] ));
$UserID = Composition::$Active->Context['authenticated_account']->data['id'];

$AdminMain->classes[]='Interface';
$AdminMain->children[]= $AdminContentWrap = new renderable(['tag'=>'li','classes'=>['col-sm-12','InterfaceContent'],'PageID'=>'AdminContentWrap']);

$options=$o=[];
$o['content']='<br />';
$AdminContentWrap->children[]=$AdminContentForm = new renderable(['tag'=>'form', 'attributes' => ['data-action' => 'dataset://listings'] ]);
//$AdminContent->attributes['style']='height: 90%; position: relative; top: 0px; left: 0px;';
//$ContainerContent->children[] = (new BootstrapPanel('hello','mr','tseng'))->panel;


$o['tag']='input';
$o['attributes']=['name'=>'_heading', 'placeholder'=>'Listing Title'];
$o['PageID']=null;
$o['classes']=[];
$AdminContentForm->children[]= $ListingTitle = new renderable($o);

$o['attributes']=['name'=>'_usr', 'value'=>$UserID, 'type'=>'hidden'];
$AdminContentForm->children[]= $ListingTitle = new renderable($o);


$o['tag']='select';
$o['attributes']=['name'=>'_kind'];
$AdminContentForm->children[]= $ListingType= new renderable($o);
$AdminContentForm->children[]=new renderable(['tag'=>'br','selfcontained'=>true]);

$o['attributes']=['name'=>'_state'];
$AdminContentForm->children[]= $ListingStatus= new renderable($o);

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
    $ListingStatus->children[]= new renderable($o);
    $o['attributes']=['value'=>'2'];
    $o['content']='Expired';
    $ListingStatus->children[]= new renderable($o);

//$o['content']=null;
$AdminContentForm->children[]=new renderable(['tag'=>'br','selfcontained'=>true]);
$o['content']='<br />';
$o['tag']='input';
$o['attributes']=['name'=>'_MLS', 'placeholder'=>'MLS Number'];
$AdminContentForm->children[]= $MLSNumber = new renderable($o);

$o['attributes']=['name'=>'_cost', 'placeholder'=>'Price'];
$AdminContentForm->children[]= $ListingPrice = new renderable($o);
$o['attributes']=['name'=>'_rooms', 'placeholder'=>'Bedroom(s)'];
$AdminContentForm->children[]= $ListingBeds = new renderable($o);
$o['attributes']=['name'=>'_restrooms', 'placeholder'=>'Bathroom(s)'];
$AdminContentForm->children[]= $ListingBaths = new renderable($o);
$o['attributes']=['name'=>'_size', 'placeholder'=>'SQ FT.'];
$AdminContentForm->children[]= $ListingArea = new renderable($o);

$o['content']=null;
$o['tag']='textarea';
$o['attributes']=['rows'=>5,'name'=>'_networkID'];
$o['classes']=['RichTextArea'];
$AdminContentForm->children[]= $ListingDesc = new renderable($o);


/*
 * "tags":"facts",
 * "features":"features",
 * "unparsed_addr":"address",
 */

$o=['tag'=>'div',
    'classes'=>'controls',
    'content'=>
    '<button    type="button"
                class="control"
                data-intent=\'{"REFRESH":{"Listing":"Save"}}\'
                data-role="autoform"
                data-context=\'{"_self_id":"null"}\'
                data-response="#AdminContentWrap"
    >Save</button>'
];
$AdminContentForm->children[]= $SaveBtn = new renderable($o);


/*
$StaticMarkupPath = $RuntimePath.'/support/templates/static/';
$TemplatePath = $RuntimePath.'/support/templates/';

$items = LoadObjects( 'compositions',array( 'method' => ' WHERE parent = '.Composition::$Active->Context['data']['id'] ));
$UserID = Composition::$Active->Context['authenticated_account']->data['id'];

$AdminMain->children[]=new renderable(['classes'=>['col-sm-2']]);
//$AdminMain->children[]=

$opt['tag']='table';
$opt['Component']['DashTable']['condition'] = 'WHERE `agent` = '.$UserID;

$options=[];
$options['tag']='tbody';
$options['pageID']='ListingsLibrary';
$options['classes']=[];
$options['template']=$SupportPath .'/templates/ListingsList.xml';
$options['ListingsList']['listings'] = [  'select'=>' * ',    'new_query'=>true   ];
$TheList=new Smart($options);
$options=[];

$AdminContent = new renderable('table');
$AdminContent->classes=['col-sm-8', 'row'];
$AdminContent->children[]= $TheList;
$AdminMain->children[]=$AdminContent;

*/

?>