<?php

require_once __DIR__.'/../core.php';

class LoginService extends Service
{
    public function ProcessJSON($activity)
    {
        var_export($activity);
        exit(0);
    }
}


$s=new LoginService();
$s->Receive();
$s->Process();
$s->Respond();

?>
