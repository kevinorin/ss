<?php

class AuthUser extends Component
{
    function SetAuthentication($new_auth_token,$user)
    {
        if(!$user) return false;
        
        if(!isset( $user->data['join_date'] )) $user->data['join_date'] = new DateTime();
        $user->data['snark'] = '$2y$13$'.substr(base64_encode(sha1( mt_rand(1,50000000).$_SERVER['REMOTE_ADDR'],true)), 0,12);
        $tkn=$new_auth_token.sprintf(crc32($user->data['email'].$user->data['join_date']),'%x') ;

        $user->data['key_auth'] = crypt( $tkn, $user->data['snark'] );
        //var_dump( crypt( $tkn, $user->data['snark'] ) );
        $user->save();
    }
    function Logout($user)
    {
        $_SESSION=[];
        session_destroy();
        unset($_SESSION);
    }
    function Authenticate($auth_token, $user)
    {
        //if($user->data['email'] == 'admin@suitespace' || $user->data['email'] == 'garet.claborn@gmail.com' ) return true;
        $tkn=$auth_token.sprintf(crc32($user->data['email'].$user->data['join_date']),'%x');
        if( $user->data['key_auth'] == crypt($tkn, $user->data['snark']) ) return true;
        else exit('Authentication failed, halting execution.');
    }
}

?>