<?php

require_once( __DIR__.'/core.php');

function Authorized()
{
    global $db;
    global $RemoteBase;
    $CompToAuth = end( Composition::$Active->Context['traversed'] );
    //if(isset($_COOKIE['PHPSESSID'])) session_id($_COOKIE['PHPSESSID']);
    //else session_id();
    $sesname = session_name('ctdash');
    session_start();
    
    $didAuthenticate = false;
    if(isset($_POST['password']) && isset($_POST['email']) )
    {
        $user=LoadObject('users',[
            'target'=>'users',
            'method'=> 'WHERE `email` = \''.mysqli_real_escape_string($db, $_POST['email']) .'\''] );
        if(empty($user)) $user = new users('users');
        $active_user = new ApproachUser();
        $didAuthenticate = $active_user->Authenticate($_POST['password'],$user);
        if( $didAuthenticate )
        {
            Composition::$Active->Context['authenticated_account'] = $user;
            $_SESSION['user']['id']=$user->data['id'];
            
            foreach($user->data as $key => $value)
            {
                if( !in_array($key, ['key_auth','snark','logpath','authority','case','profile_type','type','admin','join_date','datapath']))
                    $_SESSION['user'][$key] = $value;
            }
        }
    }
    if($CompToAuth['auth_needed'] == 0)
    {
        if( isset($_SESSION['user']) && isset($_SESSION['user']['id']) )
        {
            Composition::$Active->Context['authenticated_account']=
                LoadObject('users',['method'=>'WHERE `id` = '.$_SESSION['user']['id']] );
            return true;
        }
        Composition::$Active->Context['authenticated_account'] = NULL;
        return true;
    }
    else if($CompToAuth['auth_needed'] == 1)
    {
        if($didAuthenticate) return true;
        else if( isset($_SESSION['user']) && isset($_SESSION['user']['id']) )
        {
            Composition::$Active->Context['authenticated_account']=
                LoadObject('users',['method'=>'WHERE `id` = '.$_SESSION['user']['id']] );
            return true;
        }
    }

    return false;
}

function RouteFromURL($url, $silent=false, $RootComposition=0, $DoPublish=true)
{
    global $RuntimePath;
    //var_dump($url);

    $RootSearch=new compositions('compositions');
    $RootSearch->data['id']=$RootComposition;

    if(!isset($url)) $url = $_SERVER['REQUEST_URI'];
    $url= strtok($url,'?&');
    $qs = strtok('?&');

    $uriCursor = ArrayFromURI($url);
    $uriStart = 0;
    $domain = explode('.',$_SERVER['HTTP_HOST']);
    $AppPath=[] ;
    switch($domain[0]){
        case 'myrealestatesite':
        case 'suitespace':
        case 'www':
        case 'static':
        case 'service':
        case 'system':
        case 'dynamic':
        case 'portal':
        case 'dashboard':
        case '': $AppPath=array_merge(array('home' =>[]), $uriCursor );      $uriStart = 1; break;
        default: $AppPath=array_merge(array('home'=>[], $domain[0] =>[]), $uriCursor ); $uriStart = 2; break;
    }

    
    /*  Root Level & Type Detection */

    
  
    Composition::$Active = new Composition();
    $keys = array_keys($uriCursor);
    
    if(is_int(end($keys)))    Composition::$Active->Context['path']=ResolveCompositionByID(end($keys));
    else    Composition::$Active->Context['path']=ResolveComposition($RootSearch,array_keys($AppPath));
    
    Composition::$Active->Context['data']=Composition::$Active->Context['traversed'][count(Composition::$Active->Context['traversed'])-1];
    array_shift(Composition::$Active->Context['traversed']);
    Composition::$Active->Context['entry'] = $AppPath;
    Composition::$Active->Context['path'] .= '/compose.php';
    Composition::$Active->Context['self'] = $RootSearch;  //Database Values for this node
    
    if(!Authorized($RootSearch->data)) exit('L'.__LINE__.' = Authentication failed, halting execution.');

    require_once($RuntimePath . '/'.Composition::$Active->Context['path']);

	if($DoPublish)	Composition::$Active->publish($silent);
	else 	Composition::$Active->prepublish($silent);
    Composition::$Active->Context['self'] = &Composition::$Active;  //Application instantiated by running node values throw chained scopes

    return Composition::$Active;
}

function ResolveComposition($RootSearch,$PathList)
{
    $options['method']= 'WHERE `alias` LIKE \'' . $PathList[0] . '\' AND `parent` = '.$RootSearch->data['id'].' ';
    $options['condition']= 'ORDER BY self LIMIT 1';
    
    $parent=$RootSearch->data['id'];
    $RootSearch = LoadObject('compositions', $options);
    
    if(!isset($RootSearch->data['type']) )
    {
        $options['method']= 'WHERE `title` LIKE \'' . $PathList[0].'\' AND `parent` = '.$parent.' ';
        $options['condition']= 'LIMIT 1';
        
        $RootSearch = LoadObject('compositions', $options);

        if(!isset($RootSearch->data['type']) ) exit('Failed To Route Composition: TYPECAST FAILURE. '.PHP_EOL.'<br />'.PHP_EOL.var_export($PathList,true));
    }
    
    $options['method']= 'WHERE id='.$RootSearch->data['type'];
    $options['condition']= 'ORDER BY id LIMIT 1';
    $Type = LoadObject('types', $options);
    
    /*
    if($RootSearch->data['restricted']==true)
    {
        $options = array();
        $options['method']= 'WHERE [owner_id]='.Composition::$Active->Context['authenticated_account'];
        $options['condition']= 'ORDER BY id';
        $permissions = LoadObjects('permissions',$options);
        $active_perms = GetUserPermissions( Composition::$Active->Context['authenticated_account'] );
        if ( !isPermitted( $active_perms, $permissions, $traversed ) ) exit(0);
    }
    */
    Composition::$Active->Context['id'][]=$RootSearch->data['id'];
    Composition::$Active->Context['type'][]=$Type->data['name'];
    Composition::$Active->Context['typeid'][]= $Type->data['id'];
    Composition::$Active->Context['traversed'][]=$RootSearch->data;
    
    if(count($PathList)<=1) return $Type->data['name'];
    else return $Type->data['name'] .'/'.ResolveComposition($RootSearch,array_slice($PathList, 1));
}

function ResolveCompositionByID($cID){
    
    $toCompose = LoadObject('compositions',['target'=>'compositions','condition'=>'`id` = '.$cID,'new_query'=>true]);
    $toComposeType = LoadObject('types',['target'=>'types','condition'=>'`id` = '.$toCompose->data['type'],'new_query'=>true]);
    if(!isset(Composition::$Active->Context)) Composition::$Active->Context = array();
    $PathList = $toComposeType->data['name'];
    
    //build parent nodes first
    if($toCompose->data['parent'] !== null && $toCompose->data['parent'] !== $toCompose->data['id']){
        $PathList = ResolveCompositionByID($toCompose->data['parent']) .'/'.$PathList = $toComposeType->data['name'];
    }
    
    Composition::$Active->Context['id'][]=$toCompose->data['id'];
    Composition::$Active->Context['type'][]=$toComposeType->data['name'];
    Composition::$Active->Context['typeid'][]= $toComposeType->data['id'];
    Composition::$Active->Context['traversed'][]=$toCompose->data;
    
    return $PathList;
}

global $APROACH_SERVICE_CALL;
if(!$APROACH_SERVICE_CALL)       RouteFromURL($_SERVER['REQUEST_URI']);

?>
