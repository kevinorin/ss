/*************************************************************************

	APPROACH
	Organic, human driven software.


	COPYRIGHT NOTICE
	__________________

	Copyright 2002-2013, 2014 - Approach Foundation LLC, Garet Claborn
	All Rights Reserved.

	Title: ACC (Approach Command Client/Console), a system of accessing systems.

	Licensed under the Apache License, Version 2.0 (the "License");
	you may not use this file except in compliance with the License.
	You may obtain a copy of the License at

	apache.org/licenses/LICENSE-2.0

	Unless required by applicable law or agreed to in writing, software
	distributed under the License is distributed on an "AS IS" BASIS,
	WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	See the License for the specific language governing permissions and
	limitations under the License.

*/

var baseAppURL='myrealestatesite.co';

// endsWith polyfill a la mozilla.org
if (!String.prototype.endsWith) {
  String.prototype.endsWith = function(searchString, position) {
      var subjectString = this.toString();
      if (typeof position !== 'number' || !isFinite(position) || Math.floor(position) !== position || position > subjectString.length) {
        position = subjectString.length;
      }
      position -= searchString.length;
      var lastIndex = subjectString.indexOf(searchString, position);
      return lastIndex !== -1 && lastIndex === position;
  };
}


function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

function slidesLoadedHandler(list)
{
	var activeElement = $(list).find('.active')[0];
	
	if(list.requester == 'Next' && $(list).children().last()[0] != $(activeElement)[0]) //&&   check extreme
	{
		$(activeElement).removeClass('active');
		activeElement = $(activeElement).next();
		$(activeElement)[0].className+=' active';
	}
	if(list.requester=='Back' && $(list).children().first()[0] != $(activeElement)[0]) //&& check extreme
	{
		 $(activeElement).removeClass('active');
		 activeElement = $(activeElement).prev();
		 $(activeElement)[0].className+=' active';
	}
}
function profile(target,RunOnce)
{
  try{
  target=$(target);
  var attribs;
  if(  typeof(target.attributes) != 'undefined' ){
    attribs = target.attributes;
    target = $(target);
  }
  else if(  typeof(target.context.attributes) != 'undefined' ){
    attribs = target.context.attributes;
    target=$(target.context);
  }
  else if(  typeof(target[0]) != 'undefined')
  {
    if(  typeof(target[0].attributes) != 'undefined'){
      attribs = target[0].attributes;
      target=$(target[0]);
    }
    else if(  typeof(target[0].context.attributes) != 'undefined' ){
      attribs = target[0].context.attributes;
      target=$(target[0].context);
    }
  }}
  catch(e){console.log(target);console.log(arguments.callee.caller); }

  var IntentJSON = {};
  
  IntentJSON.support = {};
  IntentJSON.support.target={};
  IntentJSON.support.target.attributes={};
  
  for(var i=0;i<attribs.length;i++)
    IntentJSON.support.target.attributes[attribs[i].nodeName]= attribs[i].value;
  
  IntentJSON.support.target.tag = $(target).prop("tagName").toLowerCase();
  if(typeof(RunOnce)==='undefined')  IntentJSON.support.target.parent = profile($(target[0].parentNode), true);
  return IntentJSON.support.target;
}

  function classSplit(incoming){return incoming.className.split(/\s+/);}
  function split_on_space(incoming){if(typeof incoming !== 'string') return []; else return incoming.split(/\s+/);}
  function debug(reason, loggable){ console.log(reason);    console.log(loggable);  }
  function dragger(){   $(this).bind('mousedown',function(event){});    };

  var topChange=0, fullscreenModeActive = false, controlsHidden = false, html5=false,ApproachTotalRequestsAJAX=0
  hideControls= false,AnimatingControls = false, ob2 =null;
  ActiveTimeStream=0, ActiveFadePhase=0, FadeTimer=1, projectorClass='up';


var Interface=function()
{
    var $elf=this;
    this.active= true;
    this.Instance=0;
    this.Reflection='//service.myrealestatesite.co/console.php';
    this.Utility='//service.myrealestatesite.co/Utility.php';
	this.Controls= {};
    
	this.call=
	{
		init:function(Markup,user_init=function(e){return true;})
		{
			$elf.Interface = Markup;
            if ($(Markup).hasClass('controls') ) { $elf.Controls = $(Markup); $elf.Controls.add( $elf.Controls.find('.controls')); }
            else $elf.Controls = $(Markup).find('.controls');

            $elf.Controls.on('click mouseenter mouseleave', function(event){  $elf.call.events(event); });
            $elf.call.userinit=user_init;
			return $elf;
		},
        userinit:function(e){return true;},
        reinit:function(DynamicElement,user_init)
        {
          	classes = split_on_space(DynamicElement[0].className);
			$.each(classes, function(i,_class)
			{
			  if(_class == 'Interface')
			  {
				  DynamicElement[0].Interface = new Interface();
				  DynamicElement[0].Interface.call.init(DynamicElement[0],user_init);
		
				  $.ActiveInterface=DynamicElement[0].Interface;
				  DynamicElement[0].Interface.active = true;
				  //DynamicElement.find('.controls').bind('click mouseenter mouseleave', function(event){ InterfaceEvents(event); });
              }			  
			});
        },
        rebind:function(el,seeking='controls')
        {
            if( el.hasClass('controls').length > 0 ){
              var TargetInterface = el.closest('.Interface')
              if (TargetInterface.length < 1) {
                TargetInterface=$elf.Markup.Interface;
                console.log('Controls added with no interface, bootstrapping to caller interface.', el,$elf.Markup);
              }
              TargetInterface.Controls.push(el);
              TargetInterface.Controls[TargetInterface.Controls.length-1].on('click mouseenter mouseleave', function(event){  TargetInterface.call.events(event); });

              el.find('Interface').each(function(i,child){
                child[0].Interface = new Interface();
                child[0].Interface.call.init(child[0],user_init);
                $.ActiveInterface=child[0].Interface;
                child[0].Interface.active = true;
              });
            }
            else if ( el.hasClass('Interface')) {
                el[0].Interface = new Interface();
                el[0].Interface.call.init(el[0],user_init);
                $.ActiveInterface=el[0].Interface;
                el[0].Interface.active = true;
                
                el.find('Interface').each(function(i,child){
                  child[0].Interface = new Interface();
                  child[0].Interface.call.init(child[0],user_init);
                  $.ActiveInterface=child[0].Interface;
                  child[0].Interface.active = true;
                });
            }
            else el.children().each(function(i,child){
              $elf.call.rebind(child);
            });
        },
		Ajax:function(json,status,xhr)
		{
		  if (typeof json != 'string')
		  $.each(json, function(Activity, IntentJSON)
		  {
			switch(Activity)
			{
                case 'success' : 
                case 'origin' : break;
				case 'APPEND': console.log('Appending selector..'); $elf.call.Append(IntentJSON); break;
				case 'PREFIX': console.log('Prefixing selector..'); $elf.call.InsertBefore(IntentJSON); break;
				case 'REFRESH': $elf.call.Refresh(IntentJSON); break;
				case 'REMOVE': console.log('Removing selector..'); $elf.call.Remove(IntentJSON); break;
				case 'TRIGGER': console.log('Triggering interface call: ',IntentJSON); $elf.call.Trigger(IntentJSON); break;
				default: console.log(Activity+' handler not detected: ', json); break;
			}
		  });
		  else{ console.log('Unhandled Response Code',json); $elf.call.Append({'#ApproachDebugConsole':'<li>Invalid AJAX Response: <br />\n<pre>'+json+'</pre></li>'}); }
          $elf.call.afterAjax(json,status,xhr);
		},
        afterAjax: function(json,status,xhr){},
		Append: function(Info)
		{
		  $.each(Info, function(Selector, Markup)
		  {
            var selFuncArgStart = Selector.lastIndexOf('(');
            var userFnName ='';
            var userFnArgs ={};
            
            if (Selector.endsWith(')') && selFuncArgStart != -1 ) {
                userFnName = Selector.substring( 0, selFuncArgStart )+'';
                if (Selector.length - selFuncArgStart > 2)
                   userFnArgs = $.parseJSON( Selector.substring( selFuncArgStart+1, Selector.length-2) );
                //console.log($elf);
                Selector = $elf[userFnName](userFnArgs);
            }
			var DynamicElement=$(Markup).appendTo(Selector);
			$(Selector)[0].scrollTop = $(Selector)[0].scrollHeight;   //Scroll to bottom. Improve by, scroll to appended element
          
            $elf.call.reinit(DynamicElement,$elf.call.userinit);
		  });
		},
		InsertBefore: function(Info)
		{
		  $.each(Info, function(Selector, Markup)
		  {
            var selFuncArgStart = Selector.lastIndexOf('(');
            var userFnName ='';
            var userFnArgs ={};

            if (Selector.endsWith(')') && selFuncArgStart != -1 ) {
                userFnName = Selector.substring( 0, selFuncArgStart )+'';
                if (Selector.length - selFuncArgStart > 2)
                   userFnArgs = $.parseJSON( Selector.substring( selFuncArgStart+1, Selector.length-2) );
                Selector = $elf[userFnName](userFnArgs);
                console.log(Selector, 'returned from call to '+userFnName + '( ', userFnArgs ,' )')
                console.log( 'Caller: ', $elf );
            }
			var DynamicElement=$(Markup).insertBefore(Selector);
			$(Selector)[0].scrollTop = $(Selector)[0].scrollHeight;

            $elf.call.reinit(DynamicElement,$elf.call.userinit);
		  });
		},
		Refresh: function(Info)
		{
		  console.log('Refreshing Page Element from AJAX Callback...');
          //console.log(Info);
          
		  $.each(Info, function(Selector, Markup)
		  {
            var selFuncArgStart = Selector.lastIndexOf('(');
            var userFnName ='';
            var userFnArgs ={};
            var DynamicElement = $(Markup);
            var classes = split_on_space(DynamicElement[0].className);
            var isCallback=false;
            var persistant = [];
            var persistCount=0;
            
            if (Selector.endsWith(')') && selFuncArgStart != -1 ) {
                userFnName = Selector.substring( 0, selFuncArgStart )+'';
                if (Selector.length - selFuncArgStart > 2)
                   userFnArgs = $.parseJSON( Selector.substring( selFuncArgStart+1, Selector.length-2) );
                Selector = $elf[userFnName](userFnArgs);
                console.log(Selector, 'returned from call to '+userFnName + '( ', userFnArgs ,' )')
                console.log( 'Caller: ', $elf );
                isCallback=true;
            }

            if (isCallback==false)
            if(typeof $(Selector).data("persist") != "undefined")
                $($(Selector).data("persist")).each(function(i,attribute){
                    persistant[attribute]=$(Selector).attr(attribute);
                    persistCount++;
                });
            
            console.log('Refreshing: ', Selector,' with ',DynamicElement[0]);
            $(Selector).off();
            //$(Selector).replaceWith(DynamicElement);
            var DynamicElements = $(DynamicElement).replaceAll(Selector);
            
            if (isCallback==false) if(persistCount > 0 ){
                    for(var key in persistant){
                       console.log(key,persistant[key]);
                       $(DynamicElements).each(function(i,el){      $(el).attr(key,persistant[key]);        });
                    }
                }
            else console.log(persistCount);

			//Bind Events for Dynamic Elements if they support Interface

            /*
			$.each(classes, function(i,_class)
			{
			  if(_class == 'Interface')
			  {
				  DynamicElement[0].Interface = new Interface();
				  DynamicElement[0].Interface.call.init(DynamicElement[0]);
		
				  $.ActiveInterface=DynamicElement[0].Interface;
				  DynamicElement[0].Interface.active = true;
				  //DynamicElement.find('.controls').bind('click mouseenter mouseleave', function(event){ InterfaceEvents(event); });
			  }
			});*/
            $elf.call.reinit(DynamicElement,$elf.call.userinit);
            
            if ('RefreshComplete' in $elf)
                $elf.RefreshComplete(DynamicElement,Selector,Markup);
		  });
		},
		Remove: function(Info)
		{
            console.log(Info);
		  $.each(Info, function(Selector)
		  {
            var selFuncArgStart = Selector.lastIndexOf('(');
            var userFnName ='';
            var userFnArgs ={};
            
            console.log(Selector);

            if (Selector.endsWith(')') && selFuncArgStart != -1 ) {
                userFnName = Selector.substring( 0, selFuncArgStart )+'';
                if (Selector.length - selFuncArgStart > 2)
                   userFnArgs = $.parseJSON( Selector.substring( selFuncArgStart+1, Selector.length-2) );
                Selector = $elf[userFnName](userFnArgs);
                console.log(Selector, 'returned from call to '+userFnName + '( ', userFnArgs ,' )')
                console.log( 'Caller: ', $elf );
            }

			var DynamicElement=$(Selector).remove();
		  });
		},
		Trigger: function(Info)
		{
		  $.each(Info, function(Selector, Trigger)
		  {
            var selFuncArgStart = Selector.lastIndexOf('(');
            var userFnName ='';
            var userFnArgs ={};

            if (Selector.endsWith(')') && selFuncArgStart != -1 ) {
                userFnName = Selector.substring( 0, selFuncArgStart )+'';
                if (Selector.length - selFuncArgStart > 2)
                   userFnArgs = $.parseJSON( Selector.substring( selFuncArgStart+1, Selector.length-2) );
                Selector = $elf[userFnName](userFnArgs);
                console.log(Selector, 'returned from call to '+userFnName + '( ', userFnArgs ,' )')
                console.log( 'Caller: ', $elf );
            }

			$(Selector).trigger(Trigger['event'],Trigger['data']);
            console.log('Triggering ', Trigger['event'], ' with payload ', Trigger['data']);
		  });
		},
		Service:function(target, IntentJSON)
		{
            var RequestType = '';
            var RequestNoun = '';
            var RequestVerb = '';
            
            if ( IntentJSON['support'] == undefined)    IntentJSON.support={};
            if ( IntentJSON.command == undefined)    IntentJSON.command={};
            
            for(var key in IntentJSON.command)  //hacky, do not submit multiple commands e_e
            {
                RequestType = key;
                for(var k in IntentJSON.command[key])
                {
                    RequestNoun = k;
                    RequestVerb = IntentJSON.command[key][k];
                    break;
                }
                break;
            }

            $control_role=$(target).closest('.control').data('role');
            //console.log($control_role);
            //console.log(IntentJSON.command);    //if (RequestNoun == 'Instance') console.log('Instance');
            if($control_role == 'autoform')
            {
                var forms = $($elf.Interface).hasClass("InterfaceContent") ? $($elf.Interface).find('form') : $($elf.Interface).find('.InterfaceContent').find('form');
                console.log(forms);
                forms.each(function(i,obj)
                {
                    // attach any data for ajax calls after verb
                    var formAction=($(obj).attr('data-action')) ? $(obj).data("action") : obj['action'];

                    IntentJSON.support[formAction]={};
                    console.log(IntentJSON.support);
                    $(obj).find('input, textarea, select, checkbox, radio').each(function(i2,input)
                    {   //get all form values
                        if ($(input).attr("type")=="radio") {
                            if ($(input).is(":checked"))
                                IntentJSON.support[formAction][$(input).attr('name')]=$(input).val();
                        }
                        else IntentJSON.support[formAction][$(input).attr('name')]=$(input).val();
                    });
                });
				//console.log('Interface: ', $elf.Interface,' Intent: ', IntentJSON);
            }
            
            IntentJSON.support.target = profile($(target).closest('.control'));
            IntentJSON.support.page_query = getUrlVars();
            //console.log('Support: ',IntentJSON.support.target);
            //console.log('Command: ',IntentJSON.command);
            
            var ReqData ={json: JSON.stringify(IntentJSON)};    //Switch to JSON3 ?
            
            ApproachTotalRequestsAJAX++;
            
            $.ajax({
              url: $elf.Utility,
              type: "post",
              data: ReqData,
              dataType: 'json',
            xhrFields: {
               withCredentials: true
            },
            crossDomain: true,
            success: $elf.call.Ajax
            });

		},
        getInterface:function(){ return $elf; },
		events:function(e)
		{
			var classlist = e.target.className.split(/\s+/), c=0, L=0;
			var role = $(e.target).data('role');

			if(e.type == 'click')
			{
				var IntentJSON = {};
                var CurrentControl = $(e.target).closest('.control');
                console.log(CurrentControl);
                IntentJSON.support = CurrentControl.data('context');
				IntentJSON.command = CurrentControl.data('intent');
				this.Service(e.target, IntentJSON);
			}
            //console.log(e.target);
		}
	};
	//end $elf.call
    //end Interface Base
    
    $elf.call.init(arguments);
	return $elf;
};

var Presentation = function(Markup)
{
    var $elf = this;
    var services = new Interface(Markup);
    $elf.call = {
        init:function(Markup)
        {
            services.Controls.find('li').each(function(i,obj)  //binding control buttons to .control li's
            {
                var roles = split_on_space($(obj).data('role'));
                $.each(roles, function(i,_role)
                {
                    switch(_role)
                    {
                        case 'upload': $elf.Buttons.upload.push(obj); break;
                        case 'mediabrowse': $elf.Buttons.mediabrowse.push(obj); break;
                        case 'blocktext': $elf.Buttons.blocktext.push(obj); break;
                        case 'linetext': $elf.Buttons.linetext.push(obj); break;
                        case 'preview': $elf.Buttons.push(obj); break;
                        case 'save': $elf.Buttons.push(obj); break;
                        case 'nestedcontrol': $elf.Buttons.nestedcontrols.push(obj); break;
                        case 'social': $elf.Buttons.social.push(obj); break;
                        case 'dragger': $elf.Buttons.dragger.push(obj); break;          //
                        case 'dashboard': $elf.Buttons.trackable.push(obj); break;      //This means they can add the component, renderable or smart object to their personal dashboard. They can also organize their dashboard.   The dashboard is a FILE in a USER DIRECTORY o_O; other files should be there as we go. like message logs.
                        case 'sort': $elf.Buttons.sort.push(obj); break;                      //Multipurpose Sort for something like Hurry Curry sorter ........... >_>;    Arrange by 'property' or other things.. Function overloadable.
                        case 'revert': $elf.Buttons.revert.push(obj); break;                //Go back to database version of the edited stuff (Big Undo / Refetch the objects)
        
                        case 'cancel': $elf.Buttons.cancel.push(obj); break;
                        case 'next': $elf.Buttons.next.push(obj); break;
                        case 'back': $elf.Buttons.back.push(obj); break;
                        case 'finish': $elf.Buttons.finish.push(obj); break;
        
                        default: break;
                    }
                });
                return $elf;
            });
        },
        click : function(e)
        {
            //console.log('inside presentation',e);
        }
    };
    
    var funcStore = services.call.events;
    services.call.events = function(e){ if(e.type=='click') $elf.call.click(e); funcStore(e); }
    services.call.getPresentation=function(){ return $elf; };
    services.call.test=function()
    {
        //console.log($elf);
    };
    return services;
};
/*
$( document ).ready( function()
{
	$('.Interface').each(function(instance, Markup)
	{
		Markup.Interface=new Interface(Markup);//.call.init(Markup);
	});
} );*/