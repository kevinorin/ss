<?php

class ApproachUser extends Component
{
    static function SetAuthentication($new_auth_token,$user)
    {
        if(!$user) return false;
        
        if(!isset( $user->data['join_date'] )) 
        {
            $user->save();
            $user = LoadObject('users',['condition'=>'WHERE `id` = '.$user->data['id']] );
        }
        $user->data['snark'] = substr(base64_encode(sha1( mt_rand(1,50000000).$_SERVER['REMOTE_ADDR'],true)), 0,12);
        $tkn='$2y$13$'.sprintf(crc32($user->data['email'].$user->data['join_date']),'%x').$new_auth_token ;
        
        $user->data['key_auth'] = crypt( $tkn, $user->data['snark'] );
        //var_dump( crypt( $tkn, $user->data['snark'] ) );        
        $user->save($user->data['id']);
    }
    static function Logout()
    {
        $_SESSION=[];
        if (session_status() !== PHP_SESSION_NONE)  session_destroy();
        unset($_SESSION);
    }
    static function Authenticate($auth_token, $user)
    {
        //if($user->data['email'] == 'admin@suitespace' || $user->data['email'] == 'garet.claborn@gmail.com' ) return true;
        //$tkn=$auth_token.sprintf(crc32($user->data['email'].$user->data['join_date']),'%x') ;
        $tkn='$2y$13$'.sprintf(crc32($user->data['email'].$user->data['join_date']),'%x').$auth_token ;
        if( $user->data['key_auth'] == crypt($tkn, $user->data['snark']) ) return true;
        else exit('Authentication failed, halting execution.');
    }
}

?>