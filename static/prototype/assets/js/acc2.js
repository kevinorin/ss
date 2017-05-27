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

var baseAppURL='croptender.com';

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
  var attribs = $(target)[0].attributes;
  var IntentJSON = {};
  IntentJSON.support = {};
  IntentJSON.support.target={};
  IntentJSON.support.target.attributes={};
  
  for(var i=0;i<attribs.length;i++)
    IntentJSON.support.target.attributes[attribs[i].nodeName]= attribs[i].value;
  
  IntentJSON.support.target.tag = $(target).prop("tagName").toLowerCase();
  if(typeof(RunOnce)==='undefined')  IntentJSON.support.target.parent = profile(target.parentNode, true);
  return IntentJSON.support.target;
}

  function classSplit(incoming){return incoming.className.split(/\s+/);}
  function split_on_space(incoming){return incoming.split(/\s+/);}
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
    this.Reflection='http://service.croptender.com:8080/Reflect.php';
    this.Utility='//croptender.com:8080/__Utility';
	this.Controls= {};

	this.call=
	{
		init:function(Markup)
		{
			$elf.Interface = Markup;
            if ($(Markup).hasClass('controls') ) { $elf.Controls = $(Markup); $elf.Controls.add( $elf.Controls.find('.controls')); }
            else $elf.Controls = $(Markup).find('.controls');

            $elf.Controls.on('click mouseenter mouseleave', function(event){  $elf.call.events(event); });
			return $elf;
		},
		Ajax:function(json,status,xhr)
		{
		  if (typeof json != 'string')
		  $.each(json, function(Activity, IntentJSON)
		  {
			console.log('Detecting AJAX Callback...');
			switch(Activity)
			{
				case 'APPEND': $elf.call.Append(IntentJSON); break;
				case 'REFRESH': $elf.call.Refresh(IntentJSON); break;
				case 'REMOVE': $elf.call.Remove(IntentJSON); break;
				case 'TRIGGER': $elf.call.Trigger(IntentJSON); break;
		
				default: console.log('..none detected.'); break;
			}
		  });
		  else{ console.log('Unhandled Response Code',json); $elf.call.Append({'#ApproachDebugConsole':'<li>Invalid AJAX Response: <br />\n<pre>'+json+'</pre></li>'}); }
		},
		Append: function(Info)
		{
		  $.each(Info, function(Selector, Markup)
		  {
			var DynamicElement=$(Markup).appendTo(Selector);
			$(Selector)[0].scrollTop = $(Selector)[0].scrollHeight;   //Scroll to bottom. Improve by, scroll to appended element
		
		    var classes = split_on_space(DynamicElement[0].className);
			$.each(classes, function(i,_class)
			{
			  if(_class == 'Interface')
			  {
				  DynamicElement.Interface = new Interface();
				  DynamicElement.Interface.call.init(DynamicElement);
		
                                  //t= $.ActiveInterface;
				  $.ActiveInterface=DynamicElement.Interface;
				  DynamicElement.Interface.active = true;
				  DynamicElement.find('.controls').bind('click mouseenter mouseleave', function(event){ InterfaceEvents(event); });
                                  //$.ActiveInterface = t ? t : $.ActiveInterface;
			  }
			});
		  });
		},
		Refresh: function(Info)
		{
		  console.log('Refreshing Page Element from AJAX Callback...');
          console.log(Info);
		  $.each(Info, function(Selector, Markup)
		  {
            var DynamicElement = $(Markup);
			$(Selector).replaceWith(DynamicElement);
            
			//Bind Events for Dynamic Elements if they support Interface
            
			var classes = split_on_space(DynamicElement[0].className);
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
			});
		  });
		},
		Remove: function(Info)
		{
		  $.each(Info, function(Selector)
		  {
			var DynamicElement=$(Selector).remove();
		  });
		},
		Trigger: function(Info)
		{
		  $.each(Info, function(Selector, Trigger)
		  {
			$(Selector).trigger(Trigger['event'],Trigger['data']);
		  });
		},
		Service:function(target, IntentJSON)
		{
            var RequestType = '';
            var RequestNoun = '';
            var RequestVerb = '';
            
            IntentJSON.support = (typeof IntentJSON.support === "undefined") ? {} : IntentJSON.support;
            IntentJSON.command = (typeof IntentJSON.command === "undefined") ? {} : IntentJSON.command;
            
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
            console.log($control_role);
            //console.log(IntentJSON.command);    //if (RequestNoun == 'Instance') console.log('Instance');
            if($control_role == 'autoform')
            {
                $($.ActiveInterface.Interface).find('.Content').find('form').each(function(i,obj)
                {
                    // attach any data for ajax calls after verb
                    var formAction=obj['action'];
                    
                    IntentJSON.support[formAction]={};  //action is the web service
                    $(obj).find('input, textarea, select, checkbox,radio').each(function(i2,input)
                    {   //get all form values
                        IntentJSON.support[formAction][$(input).attr('name')]=$(input).val();
                    });
                });
            }
            
            IntentJSON.support.target = profile(target);
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
                console.log('clicked');
				IntentJSON = {};
                CurrentControl = $(e.target).closest('.control')
                IntentJSON.support = CurrentControl.data('context');
				IntentJSON.command = CurrentControl.data('intent');
				this.Service(e.target, IntentJSON);
			}
		},
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
            console.log('inside presentation',e);
        }
    };
    
    var funcStore = services.call.events;
    services.call.events = function(e){ if(e.type=='click') $elf.call.click(e); funcStore(e); }
    
    services.call.getPresentation=function(){ return $elf; },
    services.call.test=function()
    {
        console.log($elf);
    };
    return services;
};

$( document ).ready( function()
{
	$('.Interface').each(function(instance, Markup)
	{
		Markup.Interface=new Interface(Markup);//.call.init(Markup);
	});
} );