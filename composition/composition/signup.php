<?php

require_once __DIR__.'/../form_layout.php';

global $RuntimePath;
global $DeployPath;
global $SupportPath;
global $StaticFiles;

$StaticMarkupPath = $RuntimePath.'/support/templates/static/';
$TemplatePath = $RuntimePath.'/support/templates/';

$items = LoadObjects( 'compositions',array( 'method' => ' WHERE parent = '.Composition::$Active->Context['data']['id'] ));
$UserID = isset(Composition::$Active->Context['authenticated_account']) ? Composition::$Active->Context['authenticated_account']->data['id'] : NULL;

$AdminMain->children[]=new renderable(['tag'=>'li','classes'=>['col-sm-1']]);
$AdminMain->children[]=$ContentArea=new renderable(['tag'=>'li','classes'=>['col-sm-10']]);
$AdminMain->children[]=new renderable(['tag'=>'li','classes'=>['col-sm-1']]);


$head->content.='
<script src="https://js.stripe.com/v3/"></script>
<script>
var stripe = Stripe("pk_test_T0WLn7KnQ7tbTflF8zHbjqeL");
var elements = stripe.elements();
var ActiveStripeCardForm = elements.create("card");

$().ready(function(){
    ActiveStripeCardForm.mount("#card-element");
    $("#paymentSubmit").on("click",createToken);
    $(".Interface").each(function(instance, Markup){ Markup.Interface=new Interface(Markup);	});
    
    
    $("input[name=subscriptionType]").change( function(){
        switch($("input[name=subscriptionType]:checked").val()){
            case "1" : $("#totalUnit").html("$420"); break;
            case "2" : $("#totalUnit").html("$45"); break;
            default : $("#totalUnit").html("ERROR"); break;
            
        }
    });    
});


function stripeTokenHandler(token,e) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById("payment-form");
  var hiddenInput = document.createElement("input");
  hiddenInput.setAttribute("type", "hidden");
  hiddenInput.setAttribute("name", "stripeToken");
  hiddenInput.setAttribute("value", token.id);
  form.appendChild(hiddenInput);

  //console.log(form);
  // Submit the form
  //form.submit();
  console.log(e);
  $("#payment-form").closest(".Interface")[0].Interface.call.events(e);
}

function createToken(e) {
  stripe.createToken(ActiveStripeCardForm).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error
      var errorElement = document.getElementById("card-errors");
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server
      stripeTokenHandler(result.token, e);
    }
  });
  return false;
};


</script>
';


$ContentArea->children[]=
$AdminContent = new renderable('ul');
$AdminContent->classes=['col-sm-12', 'row'];
$AdminContent->content='
<div class="modal-body col-sm-12 Interface InterfaceContent">
<form id="payment-form" method="post" action="" data-action="CHECKOUT">
  <div class="form-group form-inline">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input name="authcode" type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>
  <div class="input-group">
      <input type="text" class="form-control" name="account" placeholder="Yourwebsite">
      <div class="input-group-addon">.suitespace.co</div>
  </div>
    <br/> A custom domain may be added once your account is created (e.g.: www.yoursitename.com)
    <br/>
    <!-- button type="button" data-intent=\'{"SERVICE":{"Slider":"Next"} }\' class="btn btn-primary">Sign Up</button -->

  <div class="form-group form-inline">
    <input  type="text" class="form-control" name="fname" placeholder="First Name">
    <input type="text" class="form-control" name="lname" placeholder="Last Name">
  </div>
  <fieldset class="form-group">
    <input type="text" class="form-control" name="organization" placeholder="What company do you work for?">
    <input type="text" class="form-control" name="office_addr" placeholder="What is your office address?">
    <input type="email" class="form-control" name="office_email" placeholder="What is your work email?">
 </fieldset>
  <div class="form-group form-inline">
    <input type="text" class="form-control" name="office_num" placeholder="What is your office number?">
    <input type="text" class="form-control" name="mobile_num" placeholder="What is your mobile number?">
  </div>
  <fieldset class="form-group">
    <textarea class="form-control" name="bio" rows="8">Agent Bio</textarea>
  </fieldset>
  <a name="Appearance"></a>
  <fieldset class="form-group">
  <h2> Appearance</h2>
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
    <input type="text" class="form-control" name="logoname" placeholder="">
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
    <textarea class="form-control" name="mainText" rows="3"></textarea>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleTextarea">Secondary text</label>
    <textarea class="form-control" name="secondText" rows="3">Martin is a top realtor/investor with over 15 years of experience. Martin is a Miami native and SELLING HOMES FAST is his specialty.</textarea>
  </fieldset>
  
  <a name="Body"></a>
  <h2>Body Text</h2>
  <fieldset class="form-group">
    <label for="exampleTextarea">Give the title text for your experience <a>Example</a></label>
    <textarea class="form-control" name="titleExp" rows="3"></textarea>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleTextarea">Give your clients more detail about your experience <a>Example</a></label>
    <textarea class="form-control" name="infoExp" rows="3"></textarea>
  </fieldset>


  <a name="MLS"></a>
  <h2>MLS/IDX (Free with annual plan)</h2>
  Only the IDX for Miami Realtor Association is currently available.
  <label>
      <input name="idxon" type="checkbox"> Enable MLS?
  </label>
    Agent License #
  <fieldset class="form-group">
    <input type="text" class="form-control" name="agent_license" placeholder="">
 </fieldset>
    Broker Name
  <div class="form-group form-inline">
    <input type="text" class="form-control" name="broker_fname" placeholder="First Name">
    <input type="text" class="form-control" name="broker_lname" placeholder="Last Name">
  </div>
    Broker License #
  <fieldset class="form-group">
    <input type="text" class="form-control" name="broker_license" placeholder="">
 </fieldset>

<div class="row">
  
    <div class="col-sm-6" style="background-color: #ccd;">
      <fieldset>
      <legend>Website</legend>
        <div class="radio">
          <input type="radio" name="subscriptionType" value="1" /> $35/mo billed annually
          <br />Includes free domain and MLS for 1 year
        </div>
        <div class="radio">
          <input type="radio" name="subscriptionType" value="2" />$45/mo billed month-to-month
        </div>
      </fieldset>
      <fieldset>Total: <h2 id="totalUnit" style="float:right">$420</h2></fieldset>
    </div>

    <div class="col-sm-6" style="background-color: #ccd;">
      <div id="card-element"></div>
      <div id="card-errors"></div>
      <button type="button" class="control" data-role="autoform" id="paymentSubmit" style="width: 100%;"
       data-context="{}" data-intent=\'{"REFRESH":{"Checkout":"Stripe"}}\' >Purchase and Setup my website</button>
      
    </div>
  
</div>

</form>

</div>
';

?>