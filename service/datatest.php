<?php

require_once __DIR__.'/../core.php';
$StaticMarkupPath = $RuntimePath.'/support/templates/static/';

$s=new ComponentEditor();
$s->Receive();
$s->Process();
$s->Respond();
?>