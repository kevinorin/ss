<?php

require_once __DIR__.'/../form_layout.php';

global $RuntimePath;
global $DeployPath;
global $SupportPath;
global $StaticFiles;

$StaticMarkupPath = $RuntimePath.'/support/templates/static/';
$TemplatePath = $RuntimePath.'/support/templates/';

$items = LoadObjects( 'compositions',array( 'method' => ' WHERE parent = '.Composition::$Active->Context['data']['id'] ));
$UserID = Composition::$Active->Context['authenticated_account']->data['id'];

$AdminMain->children[]=new renderable(['tag'=>'li','classes'=>['col-sm-2']]);
$AdminMain->children[]=$ContentArea=new renderable(['tag'=>'li','classes'=>['col-sm-8']]);
$ContentArea->children[]=
$AdminContent = new renderable('ul');
$AdminContent->classes=['col-sm-8', 'row'];
//$AdminContent->attributes['style']='height: 90%; position: relative; top: 0px; left: 0px;';
$AdminContent->content='
<div class="modal-body col-sm-12">
<form method="post">
  <div class="form-group form-inline">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">

    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>
<div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <input type="text" class="form-control" name="account" placeholder="Yourwebsite">
      <div class="input-group-addon">.suitespace.co</div>
    </div>
    <br/> A custom domain may be added once your account is created (e.g.: www.yoursitename.com)
  </div>

  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
</div>
';
$AdminMain->children[]=new renderable(['classes'=>['col-sm-2']]);


//$ContainerContent->children[] = (new BootstrapPanel('hello','mr','tseng'))->panel;

?>