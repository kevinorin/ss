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
$UserData = Composition::$Active->Context['authenticated_account']->data;

$contentHeader->classes[]='controls';
$contentHeader->content='
<div    class="control" style="float: right;padding-bottom: 4px;"
        data-context=\'{"dataset://users":{"__self_id":'.$UserID.', "_response_target":"#NotificationRibbon"}}\'
        data-intent=\'{"REFRESH":{"Agent":"Save"}}\'
        data-role="autoform">
    <button type="button" style="background-color: #aae; color: black;">Save</button>
</div>';



$o=[];

//$AdminMain->children[]=$navWrap = new renderable(['tag'=>'li','classes'=>['col-sm-12']]);

$AdminMain->children[]=$tabWrap = new renderable(['tag'=>'li','classes'=>['col-sm-12']]);
$tabWrap->children[]= $Tabs = new renderable(['tag'=>'ul','classes'=>['nav','nav-tabs'],'pageID'=>'settingsTabs','attributes'=>['role'=>'tablist']]);
$tabWrap->children[]= $Panes = new renderable(['tag'=>'div','classes'=>['tab-content'],'pageID'=>'settingsTabPanes']);
$Tabs->content='
<li role="presentation" class="nav-item" ><a class="nav-link active" href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
<li role="presentation" class="nav-item"><a class="nav-link" href="#account" aria-controls="account" role="tab" data-toggle="tab">Account</a></li>
<li role="presentation" class="nav-item"><a class="nav-link" href="#appearance" aria-controls="appearance" role="tab" data-toggle="tab">Appearance</a></li>
<li role="presentation" class="nav-item"><a class="nav-link" href="#mls" aria-controls="mls" role="tab" data-toggle="tab">MLS</a></li>
';

$General=new renderable(['tag'=>'div','classes'=>['tab-pane','active'],'attributes'=>['role'=>'tabpanel'],  'pageID'=>'general']);
$Account=new renderable(['tag'=>'div','classes'=>['tab-pane'],'attributes'=>['role'=>'tabpanel'],           'pageID'=>'account']);
$Appearance=new renderable(['tag'=>'div','classes'=>['tab-pane'],'attributes'=>['role'=>'tabpanel'],        'pageID'=>'appearance']);
$MLS=new renderable(['tag'=>'div','classes'=>['tab-pane'],'attributes'=>['role'=>'tabpanel'],               'pageID'=>'mls']);

//$ContainerContent->children[] = (new BootstrapPanel('hello','mr','tseng'))->panel;

/****       SETTINGS        ***/
/*          General           */

$o['tag']='input';
$o['selfcontained']=true;
$o['attributes']=['name'=>'_setting_sitetitle', 'placeholder'=>'Site Title'];
$General->content='
 <div class="form-group form-inline">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail3" value="'.$UserData['email'].'" />
    <!-- label class="sr-only" for="exampleInputPassword3">Password</label>
    <input name="authcode" type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" / -->
  </div>
  <div class="input-group">
      <input type="text" class="form-control" name="account" value="'.$UserData['username'].'" />
      <div class="input-group-addon">.suitespace.co</div>
  </div>
';
$o=[];
/*          Account           */

/*
$o['attributes']=['name'=>'_setting_sitetitle', 'placeholder'=>'Site Title'];
$Account->children[] = new renderable($o);
*/
$Account->content='
  <div class="form-group form-inline">
    <input type="text" class="form-control" id="_fname" placeholder="First Name" value="'.$UserData['first_name'].'" />
    <input type="text" class="form-control" id="_lname" placeholder="Last Name" value="'.$UserData['last_name'].'" />
    <input type="text" class="form-control" id="_work" placeholder="What company do you work for?" value="'.$UserData['firm_name'].'" />
    <input type="text" class="form-control" id="_work" placeholder="What is your office address?" value="'.$UserData['firm_addr_01'].'"/>
    <input type="email" class="form-control" id="_work" placeholder="What is your work email?" value="'.$UserData['firm_email'].'"/>
    <input type="text" class="form-control" id="_fname" placeholder="What is your office number?" value="'.$UserData['firm_tele'].'"/>
    <input type="text" class="form-control" id="_lname" placeholder="What is your mobile number?" value="'.$UserData['tele'].'"/>
    <textarea class="form-control" id="_bio" value="'.$UserData['profile0'].'" rows="8">Agent Bio</textarea>
  </div>';

/*          Appearance        */

$Appearance->content = '
<fieldset class="form-group">
    <label for="exampleSelect1">How would you like the header to show?</label>
    <select name="headerOpts" class="form-control" id="exampleSelect1">
      <option value="1">White header</option>
      <option value="0">Flush background</option>
    </select>
  </fieldset>
  <div class="form-group" style="padding: 2em; background-color: #ccd;">
    <img style="min-height:8em; background-color: white; width:100%; " src=""/>
    <br /> Preview
  </div>
  <fieldset class="form-group">
  Upload your file
    <label class="file">
    <input type="file" name="file">
    <span class="file-custom"></span>
    </label>
<br />
For best results we recommend uploading your logo with
a transparent background (example .png .gif)
  </fieldset>

  <div class="form-group form-inline">
    If you do not have a logo, no worries, just type in the name you want to show.
    <input type="text" class="form-control" name="logoname" value="'.$UserData['textlogo'].'" />
  </div>

  <fieldset class="form-group">
    <label for="exampleSelect2">Choose the banner style you want on the front of your site.</label>
    <select class="form-control" name="bannerType">
      <option value="3">Banner image with text</option>
      <option value="2">Listing info</option>
      <option value="1">Agent info</option>
      <option value="0">No banner</option>
    </select>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleTextarea">Main text</label>
    <textarea class="form-control" name="mainText" rows="3">'.$UserData['profile0'].'</textarea>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleTextarea">Secondary text</label>
    <textarea class="form-control" name="secondText" rows="3">'.$UserData['profile1'].'</textarea>
  </fieldset>
  
  <a name="Body"></a>
  <h2>Body Text</h2>
  <fieldset class="form-group">
    <label for="exampleTextarea">Give the title text for your experience <a>Example</a></label>
    <textarea class="form-control" name="titleExp" rows="3">'.$UserData['profile2'].'</textarea>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleTextarea">Give your clients more detail about your experience <a>Example</a></label>
    <textarea class="form-control" name="infoExp" rows="3">'.$UserData['profile3'].'</textarea>
  </fieldset>
';
/*$o=[];
$o=['tag'=>'div','content'=>'How would you like the header to show?'];

//$o['attributes']=['name'=>'_setting_sitetitle', 'placeholder'=>'Site Title'];
$Appearance->children[]= new renderable($o);
$o['tag']='label';
$o['content']='<input type="radio" name="_setting_heading" value="255" /><img src="http://rockstartemplate.com/blogheaders/bannerdesign2.jpg" />';
$Appearance->children[] = new renderable($o);
$o['content']='<input type="radio" name="_setting_heading" value="0" /><img src="http://templatelite.com/uploads/2008/11/set5-header-original.jpg" />';
$Appearance->children[] = new renderable($o);
*/


/*          MLS/IDX           */


$MLS->content='
Only the IDX for Miami Realtor Association is currently available.
  <label>
      <input name="idxon" type="checkbox" value="'.($UserData['mls_choice'] > 0 ? 'true' : 'false').'" /> Enable MLS?
  </label>
    Agent License #
  <fieldset class="form-group">
    <input type="text" class="form-control" name="agent_license" value="'.$UserData['agent_license'].'" />
 </fieldset>
    Broker Name
  <div class="form-group form-inline">
    <input type="text" class="form-control" name="broker_fname" value="'.$UserData['broker_first_name'].'" />
    <input type="text" class="form-control" name="broker_lname" value="'.$UserData['broker_last_name'].'" />
  </div>
    Broker License #
  <fieldset class="form-group">
    <input type="text" class="form-control" name="broker_license" value="'.$UserData['broker_license'].'" />
 </fieldset>
';


$AdminMain->content='<form data-action="AGENT">' . $AdminMain->content;
$Panes->children[]=$General;
$Panes->children[]=$Account;
$Panes->children[]=$Appearance;
$Panes->children[]=$MLS;
$AdminMain->lastFilter.='</form>';
$AdminMain->classes[]='Interface InterfaceContent';
?>