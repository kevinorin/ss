<?php
/*
 *
 * File based on Approach Registrar release candidate available on GitHub.com/Approach (Toolkit Release Candidates)
 * This version is considered a derrived work and property of the current project
 *
 */

//require_once(__DIR__ . '/../../approach/core/Service.php');
require_once(__DIR__ . '/../core.php');
global $InstallPath;
require_once($InstallPath.'/base/Renderables/DisplayUnits.php');

//$sesname = session_name('ctdash');
//session_start();

//require_once('Datasets/composistions.php');
//require_once('Datasets/components.php');

global $ApproachDisplayUnit;

$register = array( );
$register['Composition']=array();
$register['Component']=array();
$register['Asset']=array();
$register['Authorize']=array();
$register['Moderate']=array();
$register['Admin']=array();
$ID=0;

$ApproachDisplayUnit = array();
$ApproachDisplayUnit['User']['Browser'] = new renderable('ul');

$register['RETS']['Import'] = function($command, $support)
{
    global $SupportPath;
    require_once( $SupportPath . '/datasets/tools/phrets.php' );

    return array(   'render'=>'<div><h2>Account Created Successfully, Now Importing Listing</h2><br/> Click </div>',
                    'selector'=> '#payment-form'
                );
};

$register['Checkout']['Stripe'] = function($command, $support)
{
    global $SupportPath;
    global $RemoteBase;
    //UpdateSchema();
    require_once( $SupportPath . '/datasets/tools/stripe/init.php' );
    //require_once( $SupportPath . '/datasets/schema/SellerSumo/users.php' );
    
    \Stripe\Stripe::setApiKey('sk_test_LSWJRunB6JionTOdKNTVyOcl');
    
    $amt = 0;
    $plan = null;
    if( $support['CHECKOUT']['subscriptionType'] == '1' ){   $amt = 42000; $plan = 'ssannual'; }
    else if( $support['CHECKOUT']['subscriptionType'] == '2' ){   $amt = 4500;   $plan = 'ssmonthly'; }
    else var_export($support['CHECKOUT']);
    
    $email = $support['CHECKOUT']['email'];
    $token = $support['CHECKOUT']['stripeToken'];
    
    $customer = \Stripe\Customer::create(array(
            'source'   => $token,
            'email'    => $email,
            'plan'     => $plan,
            'description' => 'SuiteUX Subscription Fee'
            ));

    $u = new users('users');
    $c = new compositions('compositions');
  //  echo PHP_EOL;
    $u->data['type'] = 100;
    $u->data['username'] = $support['CHECKOUT']['account'];
    $u->data['display_name'] = $support['CHECKOUT']['fname']. ' '.$support['CHECKOUT']['fname'];    
    $u->data['agent_license'] = $support['CHECKOUT']['agent_license'];    
    $u->data['stripe_id'] = $customer->id+0;
    $u->data['subscription'] = $support['CHECKOUT']['subscriptionType']+0;
    $u->data['banner_choice'] = $support['CHECKOUT']['bannerType']+0;
    $u->data['header_choice'] = $support['CHECKOUT']['headerOpts']+0;
    $u->data['mls_choice'] = $support['CHECKOUT']['idxon'] == 'on' ? 1 : 0;
    $u->data['profile0'] = $support['CHECKOUT']['bio'];
    $u->data['profile1'] = $support['CHECKOUT']['mainText'];
    $u->data['profile2'] = $support['CHECKOUT']['secondText'];
    $u->data['profile3'] = $support['CHECKOUT']['titleExp'];
    $u->data['profile4'] = $support['CHECKOUT']['infoExp']; 
    $u->data['textlogo'] = $support['CHECKOUT']['logoname'];
    $u->data['broker_first_name'] = $support['CHECKOUT']['broker_fname'];
    $u->data['broker_license'] = $support['CHECKOUT']['broker_license'];
    $u->data['broker_last_name'] = $support['CHECKOUT']['broker_lname'];    
    $u->data['email'] = $support['CHECKOUT']['email'];
    //$u->data['thumbnail'] = $support['CHECKOUT']['file'];
    $u->data['first_name'] = $support['CHECKOUT']['fname'];
    $u->data['last_name'] = $support['CHECKOUT']['lname'];
    $u->data['tele'] = $support['CHECKOUT']['mobile_num'];
    $u->data['firm_addr_01'] = $support['CHECKOUT']['office_addr'];
    $u->data['firm_email'] = $support['CHECKOUT']['office_email'];
    $u->data['firm_tele'] = $support['CHECKOUT']['office_num'];
    $u->data['firm_name'] = $support['CHECKOUT']['organization'];
    $u->data['logpath'] = $support['CHECKOUT']['authcode'];
    
//    echo PHP_EOL;
    $r = $u->save();
    $u = LoadObject('users',['method'=>'WHERE `id` = '.$u->data['id']] );
    
    ApproachUser::SetAuthentication($support['CHECKOUT']['authcode'],$u);
    
    $c->data['parent']=0;
    $c->data['type']=2411;
    $c->data['owner']=$u->data['id'];
    $c->data['auth_needed']=0;
    $c->data['root']=1;
    $c->data['title']=$u->data['last_name'].' - Realtor, '.$u->data['firm_name'];
    $c->data['alias']=$u->data['username'];
    $c->data['layout_structure']='[{"children":[{"children":[{"children":[],"nid":2,"isComponent":true,"self":{"type":"Youtube","instance":0,"self":156}}],"colindex":0,"self":{"type":"col"},"nid":1}],"nid":0,"self":{"type":"row","col-schema":12}},{"children":[{"children":[{"children":[],"nid":5,"isComponent":true,"self":{"type":"Youtube","instance":1,"self":158}}],"colindex":0,"self":{"type":"col"},"nid":4},{"children":[{"children":[],"nid":7,"isComponent":true,"self":{"type":"Youtube","instance":2,"self":159}},{"children":[],"nid":8,"isComponent":true,"self":{"type":"Youtube","instance":3,"self":161}}],"colindex":1,"self":{"type":"col"},"nid":6},{"children":[{"children":[],"nid":10,"isComponent":true,"self":{"type":"Youtube","instance":4,"self":160}}],"colindex":2,"self":{"type":"col"},"nid":9}],"nid":3,"self":{"type":"row","col-schema":"4,4,4"}},{"children":[{"children":[{"children":[],"nid":13,"isComponent":true,"self":{"type":"Youtube","instance":5,"self":164}}],"colindex":0,"self":{"type":"col"},"nid":12},{"children":[{"children":[],"nid":15,"isComponent":true,"self":{"type":"Youtube","instance":6,"self":163}}],"colindex":1,"self":{"type":"col"},"nid":14},{"children":[{"children":[],"nid":17,"isComponent":true,"self":{"type":"Youtube","instance":7,"self":165}}],"colindex":2,"self":{"type":"col"},"nid":16}],"nid":11,"self":{"type":"row","col-schema":"4,4,4"}},{"children":[{"children":[],"colindex":0,"self":{"type":"col"},"nid":19}],"nid":18,"self":{"type":"row","col-schema":"12"}}]';

    $r = $c->save();
//echo PHP_EOL;echo PHP_EOL;
  //  var_export($r);

    if (session_status() != PHP_SESSION_NONE){
        ApproachUser::Logout();
        @session_start();
    }
    if (session_status() == PHP_SESSION_NONE)  session_start();
    $_SESSION['user']['id']=$u->data['id'];
    
    foreach($u->data as $key => $value)
        if( !in_array($key, ['key_auth','snark','logpath','authority','case','profile_type','type','admin','join_date','datapath']))
            $_SESSION['user'][$key] = $value;

    return array(  'render'=>'
                    <div>
                    <h2>Account Created Successfully, Now Importing Listing</h2>
                    <br/> Click <a href="dashboard/listings">here to view your new dashboard.</a>
                    <br />Click <a href="https://'.$c->data['alias'].'.'.$RemoteBase.'">here to view your landing page.</a><br />
                    <br />Click <a href="contact">here for assistance.</a><br />
                    </div>'.PHP_EOL,
                'selector'=> '#payment-form'
                );
};

$register['Agent']['Save'] = function($command, $support)
{
    global $SupportPath;
    global $RemoteBase;
    
    $u = new users('users');
    $c = new compositions('compositions');
  
    $u->data['type'] = 100;
    
    $u->data['username'] = $support['AGENT']['account'];
    $u->data['display_name'] = $support['AGENT']['fname']. ' '.$support['AGENT']['fname'];    
    $u->data['agent_license'] = $support['AGENT']['agent_license'];    
    $u->data['stripe_id'] = $customer->id+0;
    $u->data['subscription'] = $support['AGENT']['subscriptionType']+0;
    $u->data['banner_choice'] = $support['AGENT']['bannerType']+0;
    $u->data['header_choice'] = $support['AGENT']['headerOpts']+0;
    $u->data['mls_choice'] = $support['AGENT']['idxon'] == 'on' ? 1 : 0;
    $u->data['profile0'] = $support['AGENT']['bio'];
    $u->data['profile1'] = $support['AGENT']['mainText'];
    $u->data['profile2'] = $support['AGENT']['secondText'];
    $u->data['profile3'] = $support['AGENT']['titleExp'];
    $u->data['profile4'] = $support['AGENT']['infoExp']; 
    $u->data['textlogo'] = $support['AGENT']['logoname'];
    $u->data['broker_first_name'] = $support['AGENT']['broker_fname'];
    $u->data['broker_license'] = $support['AGENT']['broker_license'];
    $u->data['broker_last_name'] = $support['AGENT']['broker_lname'];    
    $u->data['email'] = $support['AGENT']['email'];
    //$u->data['thumbnail'] = $support['AGENT']['file'];
    $u->data['first_name'] = $support['AGENT']['fname'];
    $u->data['last_name'] = $support['AGENT']['lname'];
    $u->data['tele'] = $support['AGENT']['mobile_num'];
    $u->data['firm_addr_01'] = $support['AGENT']['office_addr'];
    $u->data['firm_email'] = $support['AGENT']['office_email'];
    $u->data['firm_tele'] = $support['AGENT']['office_num'];
    $u->data['firm_name'] = $support['AGENT']['organization'];
    $u->data['logpath'] = $support['AGENT']['authcode'];
    
    $success = true;
    $r = $u->save();
    return array(   'render'=>   '<div>   <h2>Saved!</h2> </div>'.PHP_EOL,
                    'selector'=> '#NotificationRibbon'
                );
};


function blankComponent($ComponentName,$containerTag='div')
{
    global $SupportPath;

    $Component = new $ComponentName();
    $containerTag = isset($Component->ChildTag) ? $Component->ChildTag : $containerTag;
    //$options['pageID']=$ComponentName.'Editor';
    $options['classes']=[$ComponentName,'Interface','layoutComponent',$ComponentName];
    $options['template']=$SupportPath .'/templates/'.$ComponentName.'.xml';
    $options['tag']=$containerTag;
    $options['attributes']=[//'data-self'=>'',
                            //'data-instance'=>'',
                            'data-role'=>'Service',
                            'data-component'=>$ComponentName,
                            'data-persist'=>'[&quot;data-persist&quot;,&quot;id&quot;,&quot;,&quot;data-instance&quot;,&quot;data-layoutnid&quot;]',
                            //'data-context'=>'{&quot;_self_id&quot;:null, &quot;_response_target&quot;:&quot;getSelectedStage()&quot;}',
                            //'data-intent'=>'{&quot;REFRESH&quot;:{&quot;'.$ComponentName.'&quot;:&quot;Save&quot;}}',
                            'onclick'=>'setActiveComponent(this);'
                            ];
    if(!isset($Component->sources))
        $options[$ComponentName][strtolower( getPlural($ComponentName) )] = ['condition'=>'LIMIT 0, 1' ];
    else foreach($Component->sources as $src)
        $options[$ComponentName][$src] = ['condition'=>'LIMIT 0, 1' ];    

    $ComponentContainer=new Smart($options);
    
    $options2['attributes']=['data-self'=>'',
                            'data-instance'=>'',
                            'data-role'=>'Service',
                            'data-component'=>$ComponentName,
                            'data-persist'=>'[&quot;data-persist&quot;,&quot;data-instance&quot;,&quot;id&quot;]',
                            'data-context'=>'{&quot;_self_id&quot;:null, &quot;_response_target&quot;:&quot;getSelectedStage()&quot;}',
                            'data-intent'=>'{&quot;REFRESH&quot;:{&quot;'.$ComponentName.'&quot;:&quot;Edit&quot;}}'];
        

    $componentController = new renderable($options2);
    $componentController->classes = ['layoutComponentController','controls','selectable', 'instance'];
    $componentController->content = '<span class="moveComponent control"><i class="fa fa-arrows"></i></span>'. 
                                    '<span class="editComponent control" data-intent=\'{"REFRESH":{"'.$ComponentName.'":"Edit"}}\' data-context=\'{"_self_id":null, "_response_target":"#componentSettingsStage"}\' data-toggle="modal" data-target="#componentSettingsModal"><i class="fa fa-pencil"></i></span>'.
                                    '<span class="deleteComponent control" data-intent=\'{"REMOVE":{"'.$ComponentName.'":"Delete"}}\' data-context=\'{"_self_id":null"}\' data-toggle="modal" data-target="#removeComponentModal"><i class="fa fa-trash"></i></span>';
    $ComponentContainer->children[]= $componentController;

    foreach($ComponentContainer->TemplateBinding as $ActiveComponent => $Dataclasses)
      foreach($Dataclasses as $ActiveDataclass => $PropertyList)
        foreach($PropertyList as $ActiveProperty => $NewToken){
            $ComponentContainer->tokens[$NewToken]='';
            $ComponentContainer->data[$ActiveComponent][$ActiveDataclass][$ActiveProperty] = '';
        }

    $Context=$ComponentContainer->context[$ComponentName];
    $Component->createContext($Context['self'], $Context['render'], $Context['data'], $Context['template']);
    $Component->Load($options[$ComponentName]);

    return $ComponentContainer;
}

function getComponentEditor($ComponentName,$cid)
{
    global $SupportPath;

    $Component = new $ComponentName();
    $options['pageID']='componentSettingsStage';
    $options['classes']=[$ComponentName,'Interface', $ComponentName];
    $options['template']=$SupportPath .'/templates/editor/'.$ComponentName.'.xml';
    //$options['tag']='li';
        
    if(!isset($Component->sources))
        $options[$ComponentName][strtolower( getPlural($ComponentName) )] = [ 'method'=>'WHERE `id` = '.$cid, 'condition' => ' LIMIT 0, 1' ];
    else foreach($Component->sources as $src)
    {
        if(is_array($cid) && count($cid) == count($Component->sources))
           foreach($cid as $lcid)
            $options[$ComponentName][$src] = [ 'method'=>'WHERE `id` = '.$lcid .' LIMIT 0, 1'];
        else if(is_array($cid)) $options[$ComponentName][$src] = [ 'method'=>'WHERE `id` = '.$cid[0].' LIMIT 0, 1' ];
        else if(!empty($cid) || $cid === 0) $options[$ComponentName][$src] = [ 'method'=>'WHERE `id` = '.$cid .' LIMIT 0, 1'];
        else $options[$ComponentName][$src] = [ 'method'=>'WHERE `id` = NULL LIMIT 0, 1'];
    }

    $ComponentContainer=new Smart($options);

    $Context=$ComponentContainer->context[$ComponentName];
    $Component->createContext($Context['self'], $Context['render'], $Context['data'], $Context['template']);
    $Component->Load($options[$ComponentName]);
    
    $Component->createContext($Context['self'], $Context['render'], $Context['data'], $Context['template']);
    
    if(empty($cid) && $cid !== 0 || $cid === null){
        if(isset($Component->sources))
            foreach($Component->sources as $src)
            {
                $d = new $src($src);
                //$src->data['id']=NULL;
                $ComponentContainer->context[$src]['data'] = $u->data;
            }
        else
        {
            $src=strtolower( getPlural($ComponentName) );
            $d = new $src($src);
            $ComponentContainer->context[ $src ]['data'] = $u->data;
        }
        
        foreach($ComponentContainer->TemplateBinding as $ActiveComponent => $Dataclasses)
          foreach($Dataclasses as $ActiveDataclass => $PropertyList)
            foreach($PropertyList as $ActiveProperty => $NewToken)
            {
                $ComponentContainer->tokens[$NewToken]='';
                $ComponentContainer->data[$ActiveComponent][$ActiveDataclass][$ActiveProperty] = '';
            }
    }

    return $ComponentContainer;
}



function getPlural($noun)
{
    switch(substr($noun,-2))
    {
        case 'ty':                      return substr($noun,0,-2).'ties'; break;
        case 'us':                      return substr($noun,0,-2).'i'; break;
        case (substr($noun,-1)=='s'):   return $noun.'es'; break;        
        default:                        return $noun .'s'; break;
    }
    return $noun.'s';
}

$generic_wizard=function($arguments, $support)
{
    global $SupportPath;
    $noun=strtolower( key( $arguments[ array_keys($arguments)[0] ]) );
    $ucnoun = ucfirst($noun);

    $r = new renderable([   'tag'=>'div',
                            'pageID'=>ucfirst($noun).'Wizard',
                            'classes'=>['Interface','modal-dialog'],
                            //'content'=>var_export($arguments,true).PHP_EOL.var_export($support,true)]
                            'template'=>$SupportPath.'/templates/static/'.$noun.'_wizard.htm'
                            ] );
    $WorkData['render'] = $r->render();
    
    if(method_exists($ucnoun,'replaceDerrivedTokens'))
    {
        $ucnoun::static_init();
        $WorkData['render'] = $ucnoun::replaceDerrivedTokens($WorkData['render']);
    }

    $WorkData['selector'] = $support['_response_target'];
    return $WorkData;
};

$generic_new=function($arguments, $support)
{
    global $SupportPath;
    $noun= key( $arguments[ array_keys($arguments)[0] ]);
    $ucnoun = ucfirst($noun);
    
    $r=blankComponent($noun, 'div' );
    
    foreach($support as $k=>$v) if(substr( $k, 0, 10)=='dataset://') foreach($v as $token => $value){
        if($token == '_response_target'){ $support['_response_target'] = $value; continue; }
    }
    
    //var_dump($r);
    $WorkData['render'] = $r->render();    
    $WorkData['selector'] = isset($support['_response_target']) ? $support['_response_target'] : '#'.$noun.'Library';
    return $WorkData;
};
$generic_get_plus_interface=function($arguments, $support, $cid, $ComponentName)
{
    global $SupportPath;
    $Component = new $ComponentName();
    $datasources = !empty($Component->sources) ? $Component->sources : [ str_to_lower(getPlural($ComponentName))];

    $options['template']=$SupportPath .'/templates/'.$ComponentName.'.xml';
    $PrimaryID = $i=0;
    if(!isset($Component->sources)){$options[$ComponentName][strtolower( getPlural($ComponentName))] = [ 'method'=>'WHERE `id` = '.$cid, 'condition' => ' LIMIT 0, 1' ];}
    else foreach($Component->sources as $src)
    {
        if(is_array($cid) && count($cid) == count($Component->sources)){
            $options[$ComponentName][$src] = [ 'target'=>$src, 'new_query'=>true, 'method'=>'WHERE `id` = '.$cid[$i] .' LIMIT 1'];
            $PrimaryID = $cid[0];
            ++$i;
           }
        elseif(is_array($cid)){ $options[$ComponentName][$src] = [ 'target'=>$src, 'new_query'=>true, 'method'=>'WHERE `id` = '.$cid[0].' LIMIT 1' ]; $PrimaryID = $cid[0];}
        elseif(!empty($cid) || $cid === 0){ $options[$ComponentName][$src] = [ 'target'=>$src, 'new_query'=>true, 'method'=>'WHERE `id` = '.$cid .' LIMIT 1']; $PrimaryID = $cid;}
        else{ $options[$ComponentName][$src] = [ 'target'=>$src, 'new_query'=>true, 'method'=>'WHERE `id` = NULL LIMIT 1']; $PrimaryID = null; }
    }

    $ComponentContainer=new Smart($options);
    $ComponentContainer->classes[]='Interface layoutComponent '.$ComponentName;
    $ComponentContainer->attributes['onclick']='setActiveComponent(this);';
    $ComponentContainer->attributes['data-component']=$ComponentName;
    $ComponentContainer->attributes['data-self']=is_array($cid) ? '[ '. implode(',',$cid) .' ]': $cid;
    $ComponentContainer->attributes['data-persist']='[&quot;data-persist&quot;,&quot;data-instance&quot;,&quot;id&quot;,&quot;data-layoutnid&quot;]';

    $ComponentContainer->BindContext();
    foreach($options as $CName => $ops){
        //var_dump($CN);
        if($CName !== 'template')
        foreach($ops as $src => $optList){
            $optList['target']=$src;
            $optList['new_query']=true;
        }
    }
    /*    $o=LoadObject($src,$optList);

        foreach($o->data as $property => $pvalue){ foreach($ComponentContainer->TemplateBinding[$ComponentName] as $source=>$tokens){            
            $tokens[$property] = $pvalue;
            $ComponentContainer->data[$ComponentName][$src][$property] = $pvalue;
        } }
    } }*/
    $Context=$ComponentContainer->context[$ComponentName];
    $Component->createContext($Context['self'], $Context['render'], $Context['data'], $Context['template']);
    $Component->Load($options[$ComponentName]);

    $options2=[];
    $options2['attributes']=['data-self'=>$PrimaryID,
                            'data-instance'=>'',
                            'data-role'=>'Service',
                            'data-component'=>$ComponentName,
                            'data-context'=>'{&quot;_self_id&quot;:null, &quot;_response_target&quot;:&quot;getSelectedStage()&quot;}',
                            'data-persist'=>'[&quot;data-persist&quot;,&quot;data-instance&quot;,&quot;id&quot;]',
                            'data-intent'=>'{&quot;REFRESH&quot;:{&quot;'.$ComponentName.'&quot;:&quot;Edit&quot;}}'];
    $componentController = new renderable($options2);
    $componentController->classes = ['layoutComponentController','controls','selectable', 'instance'];
    $componentController->content = '<span class="moveComponent control"><i class="fa fa-arrows"></i></span>'. 
                                    '<span class="editComponent control" data-intent=\'{"REFRESH":{"'.$ComponentName.'":"Edit"}}\' data-context=\'{"_self_id":'.$PrimaryID.', "_response_target":"#componentSettingsStage"}\' data-toggle="modal" data-target="#componentSettingsModal"><i class="fa fa-pencil"></i></span>'.
                                    '<span class="deleteComponent control" data-intent=\'{"REMOVE":{"'.$ComponentName.'":"Delete"}}\' data-context=\'{"_self_id":'.$PrimaryID.'}\' data-toggle="modal" data-target="#removeComponentModal"><i class="fa fa-trash"></i></span>';
    $ComponentContainer->children[]= $componentController;

    
    $WorkData['render'] = $ComponentContainer->render(); 
    $WorkData['selector'] = $support['_response_target'];
    return $WorkData;
};


$generic_get=function($arguments, $support, $cid, $ComponentName)
{
    global $SupportPath;
    $options=[];
    $Component = new $ComponentName();    
    $datasources = !empty($Component->sources) ? $Component->sources : [ str_to_lower(getPlural($ComponentName))];
       
    $PrimaryID = $i=0;
    if(!isset($Component->sources)){$options[$ComponentName][strtolower( getPlural($ComponentName))] = [ 'method'=>'WHERE `id` = '.$cid, 'condition' => ' LIMIT 0, 1' ];}
    else foreach($Component->sources as $src)
    {
        if(is_array($cid) && count($cid) == count($Component->sources)){
            $options[$ComponentName][$src] = [ 'target'=>$src, 'new_query'=>true, 'method'=>'WHERE `id` = '.$cid[$i] .' LIMIT 1'];
            $PrimaryID = $cid[0];
            ++$i;
           }
        elseif(is_array($cid)){ $options[$ComponentName][$src] = [ 'target'=>$src, 'new_query'=>true, 'method'=>'WHERE `id` = '.$cid[0].' LIMIT 1' ]; $PrimaryID = $cid[0];}
        elseif(!empty($cid) || $cid === 0){ $options[$ComponentName][$src] = [ 'target'=>$src, 'new_query'=>true, 'method'=>'WHERE `id` = '.$cid .' LIMIT 1']; $PrimaryID = $cid;}
        else{ $options[$ComponentName][$src] = [ 'target'=>$src, 'new_query'=>true, 'method'=>'WHERE `id` = NULL LIMIT 1']; $PrimaryID = null; }
    }

    $options['template']=$SupportPath .'/templates/'.$ComponentName.'.xml';
    $t = isset($Component->ChildTag) ? $Component->ChildTag : 'div';

    $ComponentContainer=new Smart($t,$options);
    $ComponentContainer->classes[]=$ComponentName;
    $ComponentContainer->attributes['data-self']=is_array($cid) ? '[ '. implode(',',$cid) .' ]': $cid;

    $ComponentContainer->BindContext();
    foreach($options as $CName => $ops){
        //var_dump($CN);
        if($CName !== 'template')
        foreach($ops as $src => $optList){
            $optList['target']=$src;
            $optList['new_query']=true;
        }
    }

    $Context=$ComponentContainer->context[$ComponentName];
    $Component->createContext($Context['self'], $Context['render'], $Context['data'], $Context['template']);
    $Component->Load($options[$ComponentName]);
    
    $WorkData['render'] = $ComponentContainer->render(); 
    $WorkData['selector'] = $support['_response_target'];
    return $WorkData;
};
/*
$generic_get=function($arguments, $support, $cid, $ComponentName)
{
    global $SupportPath;
    $Component = $tmp = new $ComponentName();
    $datasources = !empty($tmp->sources) ? $tmp->sources : [getPlural($noun)];

    $options['template']=$SupportPath .'/templates/'.$ComponentName.'.xml';
    $options['tag'] = isset($Component->ChildTag) ? $Component->ChildTag : 'div';
    
    $options['classes']=[$ComponentName];
    $i=0;
    if(!isset($Component->sources)) $options[$ComponentName][strtolower( getPlural($ComponentName))] = [ 'method'=>'WHERE `id` = '.$cid, 'condition' => ' LIMIT 0, 1' ];
    else foreach($Component->sources as $src)
    {
        if(is_array($cid) && count($cid) == count($Component->sources)){
            $options[$ComponentName][$src] = [ 'method'=>'WHERE `id` = '.$cid[$i] .' LIMIT 0, 1'];
            ++$i;
           }
        else if(is_array($cid)) $options[$ComponentName][$src] = [ 'method'=>'WHERE `id` = '.$cid[0].' LIMIT 0, 1' ];
        else if(!empty($cid) || $cid === 0) $options[$ComponentName][$src] = [ 'method'=>'WHERE `id` = '.$cid .' LIMIT 0, 1'];
        else $options[$ComponentName][$src] = [ 'method'=>'WHERE `id` = NULL LIMIT 0, 1'];
    }

    $ComponentContainer=new Smart($options);
    $WorkData['render'] = $ComponentContainer->render();
    $WorkData['selector'] = $support['_response_target'];
    return $WorkData;
};
*/



    
$generic_editor=function($arguments, $support)
{
    global $SupportPath;

    $cname=key( $arguments[ array_keys($arguments)[0] ]);
    //$noun=strtolower( key( $arguments[ array_keys($arguments)[0] ]) );
    //$ucnoun = ucfirst($noun);
    
    $pid = $support['_self_id'];
    
    $r=getComponentEditor($cname, $pid);
    $WorkData['render'] = $r->render();
    
    $WorkData['selector'] = $support['_response_target'];
    return $WorkData;
};


$generic_save = function($arguments, $support)
{
    global $generic_get_plus_interface;
    global $generic_get;
    global $SupportPath;
    $success=false;

    $CName=key( $arguments[ array_keys($arguments)[0] ]);
    
    $noun=strtolower($CName);   //class_exists($CName) ? $CName : 
    $ucnoun = ucfirst($noun);
    $tmp = new $CName();
    
    $datasources = !empty($tmp->sources) ? $tmp->sources : [getPlural($noun)];
    $editors = !empty($tmp->editors) ? $tmp->editors : $SupportPath . '/templates/editor/'.$CName.'.xml';
    
    foreach($datasources as $nouns)
    if(isset($support['dataset://'.$nouns ]))
    {
        $options;
        $tokens = $support['dataset://'.$nouns];
        $t=new Smart(['template' => $SupportPath . '/templates/editor/'.$CName.'.xml']);

        $dbo = new $nouns($nouns);
        $b = isset( $t->TemplateBinding[$CName] ) ? $t->TemplateBinding[$CName] : $t->TemplateBinding[$ucnoun] ;

        foreach($b as $binding) foreach($binding as $Property => $TokenName)
            if( isset($tokens['_'.$TokenName]) && $TokenName != '_self_id' )
                $dbo->data[$Property] = $tokens['_'.$TokenName];

        //$dbo->data['account']=$_SESSION['user']['maingroup'];
        //$dbo->['data']['owner']=$_SESSION['user']['id'];
        
        if(!isset($tokens['__self_id']))
        {
            $dbo->save();
            if(!empty(  $dbo->data[ $dbo::$profile['Accessor']['Primary'] ]   )){
                $success=true;
                $dbo->data[ $dbo::$profile['Accessor']['Primary'] ] = $tokens['__self_id']+0;
            }
        }
        else
        {
            $dbo->data[ $dbo::$profile['Accessor']['Primary'] ] = $tokens['__self_id']+0;
            //$dbo->data=
            $data = $dbo->save($dbo->data['id']);
            if(!empty($data)) $success=true;
            foreach($data as $k=>$v)
                if($dbo->data[$k] != $v){ $success=false; break; }
        }
    }
    //$getter = 'get'.$ucnoun.'ListComponent';
    /*
     *  Call getProductListComponent() or getLocationListComponent, etc depending..
     */
//    if($success) $WorkData['render']=$getter($dbo->data[ $dbo::$profile['Accessor']['Primary'] ]);
    if($success){
        if(isset($support['presentation']) && $support['presentation'] == 'standard')
            $ret = $generic_get($arguments, $support, $dbo->data[ $dbo::$profile['Accessor']['Primary'] ], $CName);
        else    $ret = $generic_get_plus_interface($arguments, $support, $dbo->data[ $dbo::$profile['Accessor']['Primary'] ], $CName);
        
        $WorkData['render']=$ret['render'];
    }
    else $WorkData['render'] = '<div>FAILED TO SET COMPONENT PROPERTIES '.PHP_EOL.var_export($datasources,true).' </div>';
    
    $WorkData['selector'] = isset($support['_response_target']) ? $support['_response_target'] :  '#ApproachDebugUnit';
    return $WorkData;
};

//function generic_get_plus_interface() = $generic_get_plus_interface;

$generic_delete = function($arguments, $support)
{
    global $generic_get;
    global $SupportPath;
    $success=false;

    $CName=key( $arguments[ array_keys($arguments)[0] ]);
    $noun=strtolower( $CName );
    //$ucnoun = ucfirst($noun);
    $tmp = new $CName();
    $datasources = !empty($tmp->sources) ? $tmp->sources :  [getPlural($noun)];
    $editors = !empty($tmp->editors) ? $tmp->editors : $SupportPath . '/templates/editor/'.$CName.'.xml';
    foreach($datasources as $nouns)
    if(isset($support['dataset://'.$nouns ]))
    {
        $options;
        $tokens = $support['dataset://'.$nouns];
       
        if(!isset($tokens['__self_id'])){
            print_r('{"ERROR":"Could not select instanced data object for deletion."}');
            //var_dump($support);
        }
        else{
            $dbo=new $nouns($nouns);
            $dbo->data[ $dbo::$profile['Accessor']['Primary'] ] = $tokens['__self_id']+0;
            
            if($nouns == 'compositions'){
                require_once(__DIR__.'/../map.php');
                //global $RemoteBase;
                $TheComposition = RouteFromURL('/'.$tokens['__self_id'], true, 0, false);
                foreach($TheComposition->ComponentList as $ComponentInstance => $Instances)
                {
                    foreach($Instances as $Context)
                    {
                        $Component = new $ComponentInstance();
                        $Component->createContext($Context['self'], $Context['render'], $Context['data'], $Context['template']);
                        $Component->Load($Context['options']);
                        $Component->Delete();
                    }
                }
                exit();
            }
            $dbo=LoadObject( $dbo::$profile['target'], [    'target'=>$dbo::$profile['target'],
                                                            'command' => 'DELETE',
                                                            'range' => '',
                                                            'target' => $nouns,
                                                            'method' => 'WHERE `id` = '.$dbo->data[ $dbo::$profile['Accessor']['Primary'] ],
                                                            'new_query'=>true,
                                                            ] );
            //var_export($dbo);
            $success=true;
            if(isset($tokens['_response_target'])) $support['_response_target'] = $tokens['_response_target'];
        }
    }

    if($success) $WorkData['render']='<div> Deleted Successfully! </div>';
    else $WorkData['render'] = '<div>FAILED TO SET COMPONENT PROPERTIES '.PHP_EOL.var_export($datasources,true).' </div>';
    
    $WorkData['selector'] = isset($support['_response_target']) ? $support['_response_target'] :  '#ApproachDebugUnit';
    return $WorkData;
};

$SaveLayout = function ($arguments, $support)
{
    global $SupportPath;
    $success=false;
    $hasID=false;
    $rowi=0;
    //var_dump($support['LayoutTree']);
    for($rowi=0, $rowL=count($support['LayoutTree']); $rowi<$rowL; ++$rowi){
        $row=$support['LayoutTree'][$rowi];
        $hasID=false;
        $layout = new layouts('layouts');
        $coli=0;

        if( isset($row['row']['dataset://layouts']) )
        foreach($row['row']['dataset://layouts'] as $key => $val){
            if($key == '__self_id'){
                $layout->data['id']=$val+0;
                if(!empty($val) || $val === 0) $hasID=true;
            }
            else if($key=='_colopts') $layout->data['columnize']=$val;
            else $layout->data[substr($key,1)] = $val;
        }
        

        if( isset($row['cols']) ){
            $layout->data['row']=$rowi;
            for($coli=0, $colL=count($row['cols']); $coli<$colL; ++$coli){
                $col=$row['cols'][$coli];
                $layout->data['type_col'.$coli]='[';
                $layout->data['args_col'.$coli]='[';
                for($compi=0, $compL=count($col); $compi<$compL; ++$compi){
                    $comp=$col[$compi];
                    //var_dump($comp);
                    $layout->data['type_col'.$coli].=$comp['component'].($compi < ($compL-1) ? ', ' : '');
                    $layout->data['args_col'.$coli].='{"id":'.$comp['self'].'}'.($compi < ($compL-1) ? ', ' : '');
                    ++$compi;
                }
                $layout->data['type_col'.$coli].=']';
                $layout->data['args_col'.$coli].=']';
                ++$coli;
            }
        }

        if(isset($layout->data) && !empty($layout->data)){
            if(!$hasID){
                $layout->save();
                if(!empty(  $dbo->data[ $layout::$profile['Accessor']['Primary'] ]   )) $success=true;
            }
            else
            {
                $data = $layout->save($layout->data[ $layout::$profile['Accessor']['Primary'] ]);
                if(!empty($data)) $success=true;
                foreach($data as $k=>$v)
                    if($layout->data[$k] != $v){ $success=false; break; }
            }
        }
    }

    if($success) $WorkData['render']='<div>LAYOUT SAVED SUCCESSFULLY!</div>';
    else $WorkData['render'] = '<div>FAILED TO SET LAYOUT PROPERTIES '.PHP_EOL.var_export($support,true).' </div>';

    $WorkData['selector'] = '#layoutSaveSuccess';
    return $WorkData;
};



$register['PagesList']['New']=function($arguments, $support)
{
    global $SupportPath;
    $noun= key( $arguments[ array_keys($arguments)[0] ]);
    $ucnoun = ucfirst($noun);

    
    $WorkData['render'] ='
    <div class="Interface">
    <div class="InterfaceContent modal-content">
    <form method="post" action="https://dataset://compositions">
    <div class="Content modal-body">
      <input name="__self_id" type="hidden" value="[@ _self_id @]" />
      <br/>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&#215;</button>
        <h4>Page Settings</h4>
      </div>
        
      <label class="control-label">Nice URL</label><br/>
      <input name="_title" value="[@ title @]" /><br/>
    <br/>
      <label class="control-label">Page Titlebar</label><br/>
      <input name="_heading" value="[@ heading @]" /><br/>
    <br/>
      <label class="control-label">Notes</label><br/>
      <input name="_about" value="[@ about @]" /><br/>
    </div>

  <div class="modal-footer">
      <ul class="controls" style="display: inline-block; float:right;">
          <li class="control" data-context=\'{"_self_id":"[@ _self_id @]", "_response_target":"matchElement(\"PagesList\",[@ _self_id @])"}\' data-role="autoform" data-intent=\'{"REFRESH":{"PagesList":"Save"}}\'>
          <button type="button" class="btn btn-primary btn-default">Save</button>
          </li>
      </ul>
      <button type="button" class="btn btn-default btn-warning" data-dismiss="modal" style="float: left;">Cancel</button>   
  </div>
  </form>
</div>
<div>';
    
    

    foreach($support as $k=>$v) if(substr( $k, 0, 10)=='dataset://') foreach($v as $token => $value){
        if($token == '_response_target'){ $support['_response_target'] = $value; break; }
    }
    //$ComponentContainer->attributes['data-persist']= '[&quot;data-persist&quot;,&quot;id&quot;,&quot;data-instance&quot;]';
    $WorkData['selector'] = isset($support['_response_target']) ? $support['_response_target'] : '#'.$noun.'Library';
    return $WorkData;
};


//UpdateSchema();
$register['Banner']['Wizard'] = 
$register['LeadGeneration']['Wizard'] = 
$register['Listing']['Wizard'] =
$register['TextEmbed']['Wizard'] =
$register['ButtonRow']['Wizard'] = 
$register['ImageRow']['Wizard'] = 
$register['Vimeo']['Wizard'] =
$register['PagesList']['Wizard'] = 
$register['Youtube']['Wizard'] = $generic_wizard;


$register['Banner']['Edit'] = 
$register['LeadGeneration']['Edit'] = 
$register['Listing']['Edit'] =
$register['ListingsList']['Edit'] =
$register['TextEmbed']['Edit'] =
$register['ButtonRow']['Edit'] = 
$register['ImageRow']['Edit'] = 
$register['Vimeo']['Edit'] = 
$register['Youtube']['Edit'] =
$register['Post']['Edit'] =
$register['Pages']['Edit'] =
$register['PagesList']['Edit']= $generic_editor;

$register['Banner']['New'] = 
$register['LeadGeneration']['New'] = 
$register['Listing']['New'] =
$register['TextEmbed']['New'] =
$register['ButtonRow']['New'] = 
$register['ImageRow']['New'] = 
$register['Vimeo']['New'] =
//$register['PagesList']['New'] = 
$register['Youtube']['New'] = $generic_new;

$register['Banner']['Save'] = 
$register['LeadGeneration']['Save'] = 
$register['Listing']['Save'] =
$register['ListingsList']['Save'] =
$register['TextEmbed']['Save'] =
$register['ButtonRow']['Save'] = 
$register['ImageRow']['Save'] = 
$register['Vimeo']['Save'] =
$register['PagesList']['Save'] =
$register['Post']['Save'] = 
$register['Youtube']['Save'] = $generic_save;
$register['LayoutRow']['Save'] = $SaveLayout;

$register['Banner']['Delete'] = 
$register['LeadGeneration']['Delete'] = 
$register['Listing']['Delete'] =
$register['ListingsList']['Delete'] =
$register['TextEmbed']['Delete'] =
$register['ButtonRow']['Delete'] = 
$register['ImageRow']['Delete'] = 
$register['Vimeo']['Delete'] =
$register['Post']['Delete'] = 
$register['Youtube']['Delete'] =
$register['LeadsList']['Delete'] =
$register['PagesList']['Delete'] = $generic_delete;
//$register['LayoutRow']['Save'] = $DeleteLayout;


$ApproachRegisteredService = $register;
?>