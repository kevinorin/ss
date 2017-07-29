<?php

require_once __DIR__.'/../form_layout.php';

global $RuntimePath;
global $DeployPath;
global $SupportPath;
global $StaticFiles;

$StaticMarkupPath = $RuntimePath.'/support/templates/static/';
$TemplatePath = $RuntimePath.'/support/templates/';

$items = LoadObjects( 'compositions',array( 'method' => ' WHERE parent = '.Composition::$Active->Context['data']['id'] ));
//$UserID = !empty(Composition::$Active->Context['authenticated_account']) ? Composition::$Active->Context['authenticated_account']->data['id'] : 0;

$AdminMain->children[]=new renderable(['tag'=>'li','classes'=>['col-sm-2']]);
$AdminMain->children[]=$ContentArea=new renderable(['tag'=>'li','classes'=>['col-sm-8']]);
$ContentArea->children[]=
$AdminContent = new renderable('ul');
$AdminContent->classes=['col-sm-8', 'row'];
//$AdminContent->attributes['style']='height: 90%; position: relative; top: 0px; left: 0px;';
$AdminContent->content='
<form method="post">
<div id="FModal" class="modal-body col-sm-12">
    <div class="form-group">
      <label class="sr-only" for="exampleInputEmail2">Email address</label>
      <input type="email" name="email" class="form-control" placeholder="Enter email"><br><br>
    </div>
    <div class="form-group">
      <label class="sr-only" for="exampleInputPassword2">Password</label>
      <input type="authen_key" name="password" class="form-control" placeholder="Password"><br><br>
    </div>
    <div id="RememberMe" class="checkbox"><label>
        <input type="checkbox"> Remember me
    </label></div>
    <span class="pull-right"><a>Forgot your password?</a></span>
</div>
<div class="modal-footer col-sm-12">
    <a href="signup"><button type="button" id="ModalRegisterButton" class="btn pull-left">Signup</button></a>
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    <input id="ModalLoginButton" class="btn btn-primary" data-loading-text="Loading..." type="submit" value="Login">

</div>
</form>
';



//$ContainerContent->children[] = (new BootstrapPanel('hello','mr','tseng'))->panel;

?>