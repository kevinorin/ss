if (!Array.prototype.end){	Array.prototype.end = function(){        return this[this.length - 1];	};	};
var LayoutID=0;
var PageID=0;
var ActiveRowIndex=0;
var ActiveStage={};
var ActiveComp={};
var RowCount=0;
var InstanceCount={};
var LayoutSelectedRow = {};
var LayoutSelectedContainer = [];
var ActiveLayoutComponent = {};
var ActiveLayoutComponentController = {};
function setActiveComponent(t) {
    ActiveLayoutComponent = $(t);
    ActiveLayoutComponentController = ActiveLayoutComponent.find('.layoutComponentController');
}

function ProfileLayout()
{
    InstanceCount = {};
	var Layout=[];
	var NodeCount=0;
	//$(Selector).children("[data-component]")
	
	$('.layoutRow').each(function(iter, RowElem){
		var row={};
		var activeRow={};
		row["children"]=[];
		row["nid"] = NodeCount; 
		activeRow["type"]="row";
		activeRow["col-schema"]=$(RowElem).data('colschema');
		activeRow["options"]=$(RowElem).data('options');

		row["self"]=activeRow;
		NodeCount++;
		
		$(RowElem).children(".layoutRowStage").each(function(iterCol, colElem){
			var col={}
            col["children"]=[];
			var activecol={};
			activecol["type"]="col";
			activecol["options"]=$(colElem).data('options');
			col["colindex"]=$(colElem).data('colindex');
			col["self"]=activecol;
			col["nid"] = NodeCount;
			NodeCount++;
			
			$(colElem).children(".layoutComponent").each(function(iterComp, ComponentElem){
				var Component={};
				Component["children"]=[];
				var activeComponent={};
				activeComponent["type"]="Component";
				activeComponent["options"]=$(ComponentElem).data('options');
				Component["nid"] = NodeCount;
                $(ComponentElem)[0].setAttribute('data-layoutnid',NodeCount);
                $(ComponentElem).data('layoutnid',NodeCount);
				console.log($(ComponentElem)[0]);
				Component["isComponent"] = $(ComponentElem)[0].hasAttribute('data-component');
				if(Component["isComponent"]){
                    var t = $(ComponentElem).data('component');
					activeComponent["type"] = t;
                    if (InstanceCount.hasOwnProperty(t)) {
                        activeComponent["instance"] =  InstanceCount[t] ;
                        $(ComponentElem)[0].setAttribute('data-instance',InstanceCount[t]);
                        InstanceCount[t]++;
                    }
                    else{
                        activeComponent["instance"] = 0;
                        $(ComponentElem)[0].setAttribute('data-instance',0);
                        InstanceCount[t]=1;
                    }
					activeComponent["self"] = $(ComponentElem).data('self');
				}
				Component["self"]=activeComponent;
				NodeCount++;			
				col["children"].push(Component);
			});
			row["children"].push(col);
		});
		Layout.push(row);
	});

	//console.log(Layout);
	return Layout;
}

/*
var bscols = [
 '.col-xs-1', '.col-xs-2', '.col-xs-3', '.col-xs-4', '.col-xs-5', '.col-xs-6', '.col-xs-7', '.col-xs-8', '.col-xs-9', '.col-xs-10', '.col-xs-11', '.col-xs-12',
 '.col-sm-1', '.col-sm-2', '.col-sm-3', '.col-sm-4', '.col-sm-5', '.col-sm-6', '.col-sm-7', '.col-sm-8', '.col-sm-9', '.col-sm-10', '.col-sm-11', '.col-sm-12',
 '.col-md-1', '.col-md-2', '.col-md-3', '.col-md-4', '.col-md-5', '.col-md-6', '.col-md-7', '.col-md-8', '.col-md-9', '.col-md-10', '.col-md-11', '.col-md-12',
 '.col-lg-1', '.col-lg-2', '.col-lg-3', '.col-lg-4', '.col-lg-5', '.col-lg-6', '.col-lg-7', '.col-lg-8', '.col-lg-9', '.col-lg-10', '.col-lg-11', '.col-lg-12'
];
*/
var bscols = 'col-xs-1 col-xs-2 col-xs-3 col-xs-4 col-xs-5 col-xs-6 col-xs-7 col-xs-8 col-xs-9 col-xs-10 col-xs-11 col-xs-12 col-sm-1 col-sm-2 col-sm-3 col-sm-4 col-sm-5 col-sm-6 col-sm-7 col-sm-8 col-sm-9 col-sm-10 col-sm-11 col-sm-12 col-md-1 col-md-2 col-md-3 col-md-4 col-md-5 col-md-6 col-md-7 col-md-8 col-md-9 col-md-10 col-md-11 col-md-12 col-lg-1 col-lg-2 col-lg-3 col-lg-4 col-lg-5 col-lg-6 col-lg-7 col-lg-8 col-lg-9 col-lg-10 col-lg-11 col-lg-12';

function saveLayoutSuccess(a,b,c) {
	console.log('save successful');
	console.log(a);
	console.log(b);
	console.log(c);
}
function EditRow(e,target) {
	var arow=$(e.target).closest('.layoutRow');
	ActiveRowIndex = arow.index();
	$('#rowSettingsModal form').each(function(i,obj){
		var formAction=obj['action'];
		if (formAction=='dataset://Layouts') {
            $(obj).prepend('<input type="hidden" name="_placement" class="transitoryField" value="'+ActiveRowIndex+'" />');
            $(obj).prepend('<input type="hidden" name="__self_id" class="transitoryField" value="'+arow.data('self')+'" />');
		}
	});
}
function RowSettings(e,target) {
	$('#rowSettingsModal').modal('hide');
    var arow = $($('#layoutCanvas .layoutRow').get( ActiveRowIndex ));
	var support={};
	var colschema='';
	var bgcolor='';
	var doUpdate=false;
	$('#rowSettingsModal form').each(function(i,obj){
		// attach any data for ajax calls after verb
		var formAction=obj['action'];
		support[formAction]={};  //action is the web service
		$(obj).find('input, textarea, select, checkbox, radio').each(function(i2,input){   //get all form values
			doUpdate = false;
			if( $(input).prop('tagName').toLowerCase() != 'input' )	{ doUpdate=true; console.log($(input).prop('tagName').toLowerCase()); }
			else{
				if($(input).attr('type').toLowerCase() =='radio' || $(input).attr('type').toLowerCase() =='checkbox'){
					if( $(input).prop('checked') )	doUpdate=true;
				}
            }
			if (doUpdate) support[formAction][$(input).attr('name')]=$(input).val();
			if ($(input).attr('name')=='_colopts' && doUpdate) colschema=$(input).val();
		});
	});

	if (arow.data('colschema')!=colschema)
	{
		var instanceID = arow.data('instance');
		var cols=colschema.split(',');
		var trow='';
		
//		$('#layoutCanvas').sortable("destroy");
//		$('#layoutCanvas').sortable({stop:onSort, handle: '.moveRow'});
		
		console.log(cols, cols.length);
		for (var i=0, L=cols.length; i < L; i++) {
			trow +='<div class="layoutRowStage '+
				'col-xs-'+cols[i]+' '+
				'col-sm-'+cols[i]+' '+
				'col-md-'+cols[i]+' '+
				'col-lg-'+cols[i]+' '+
				'" data-colindex="'+i+'"> <a href="#" class="addComponentBtn btn layoutBtn" data-toggle="modal" data-target="#ComponentLibrary" > <i class="fa fa-plus"></i> </a> </div>'
		}
		trow = trow + '<div class="layoutRowController controls selectable instance" data-self="" data-instance=""> <span class="moveRow"><i class="fa fa-arrows"></i></span><span class="editRow" data-toggle="modal" data-target="#rowSettingsModal"><i class="fa fa-pencil"></i></span><span class="deleteRow"><i class="fa fa-trash"></i></span> </div>';
		
		arow.html(trow);
		arow.data('ColumnSize',colschema);
		arow.data('colschema',colschema);
		arow.find('.layoutRowController').data('instance',instanceID);
		arow.find('.editRow').click(EditRow);
		arow.find('.addComponentBtn').click(addComponent);
		arow.find('.deleteRow').click(remRow);
		//console.log(arow);
		//console.log(trow);
	}
	arow.data('support',support);
	arow.data('colschema',colschema);
	$('#rowSettingsModal form .transitoryField').remove();
}
function CleanLayout(){
    var layout=[];
	$(LayoutNodes.children).each(function(rowi, row){
		if(typeof layout[rowi] == 'undefined') layout[rowi]={row:{}, cols:[]};
		var crow = layout[rowi];
		$(row.children).each(function(coli, col){
			if(typeof crow.cols[coli] == 'undefined') crow.cols[coli]=[];
			var ccol = crow.cols[coli];
			$(col.children).each(function(compi, comp){
				var el=$(comp.node[0]);
				if (compi==0){ crow.row=el.closest('.layoutRow').data('support'); }
				ccol[compi] = {	component:el.data('component'), self:el.data('self') } ;
	});	});	});
	return layout;
}
function PreviewLayout(e, target) {
	LayoutNodes={'node':$('#layoutCanvas'),'children':[]};
	GetLayout();
	var layout=CleanLayout();	
	console.log(layout);	
}

function SaveLayout(e, target) {
	var LayoutProfile=ProfileLayout();
	var IntentJSON={'command':{'REFRESH':{'LayoutRow':'Save'}},'support':{'LayoutTree':LayoutProfile}};
    //console.log(LayoutProfile);
    console.log(IntentJSON.support.LayoutTree);
	IntentJSON.support.page_query = getUrlVars();
	var ReqData ={json: JSON.stringify(IntentJSON)};    //Switch to JSON3 ?	
	ApproachTotalRequestsAJAX++;	
	$.ajax({
			url:'//service.myrealestatesite.co/Utility.php',
			type: "post",
			data: ReqData,
			dataType: 'json',
			xhrFields: {	withCredentials: true	},
			crossDomain: true,
			success: saveLayoutSuccess
	});
	//console.log('Intent JSON: ', IntentJSON);
}
function GetLayout(root,parent=0,branch=LayoutNodes) {
	root   = typeof root !== 'undefined' ? root : '#layoutCanvas';
	parent = typeof parent !== 'undefined' ? parent : 0;
	branch = typeof branch !== 'undefined' ? branch : LayoutNodes;
	
	$(root).children().each(function(i,el){
		var n = {'node':$(el),'children':[]};
		if($(el).data('layoutnid') !== undefined){
			var dex=branch.children.push(n);
			GetLayout(el,$(el).data('layoutnid')+0,branch.children.end());
		}
		else GetLayout(el,parent,branch);
	});
}

function ComponentAdded() {
    var trigger = function(){
		ActiveComp = $(ActiveStage).find('.layoutComponent').last();
		var crow = $(ActiveStage).closest('.layoutRow');
		if(crow.data('hasComponent') != true && $('#layoutCanvas').children().last()[0] == crow[0]) addRow({},[12]);
		else{
			console.log($('#layoutCanvas').children().last()[0]);
			console.log(crow[0]);
		}
		crow.data('hasComponent',true);
		var cname = ActiveComp.data('component');
        if(!InstanceCount.hasOwnProperty(cname)) InstanceCount[cname]=0;
		ActiveComp.attr('id',cname+'_'+InstanceCount[cname]);
        InstanceCount[cname]++;
		
		$(document).off('ajaxSuccess', trigger);
    };
	
	$(document).ajaxSuccess(trigger);
}
function updateLayoutTreeLinks(parent,target,scan=LayoutTreeLinks){
	for(var i=0,L=scan.length;i<L;i++)
		if (scan[i].nid == parent.nid)	return scan[i].children.push(target);
		else return updateLayoutTreeLinks(parent,target,scan[i]);
}

function addComponent(e) {
    ActiveStage = $(e.currentTarget).closest('.layoutRowStage');	
    LayoutSelectedRow=ActiveStage;// LayoutTreeNodeCursor=getLayoutNode(row);
    //console.log(LayoutSelectedRow);
}

function getLayoutNode(NID,c) {
    var branch = c || LayoutTree;   //intentional || style default
    for(var i=0,L=branch.length; i<L; i++){
        if(branch[i].nid == NID) return branch[i];
        else{
            var n = getLayoutNode(NID,branch[i].children);
            if (n != -1) return n;
        }
    }
    return -1;
}

function removeLayoutNode(NID,c) {
    var branch = c || LayoutTree;   //intentional || style default
    for(var i=0,L=branch.length; i<L; i++){
        if(branch[i].nid == NID) { branch.splice(i,1); return true; }
        else{
            var n = removeLayoutNode(NID,branch[i].children);
            if (n != -1) return n;
        }
    }
    return false;
}

function onSort(e, sort_context) {
    var activeRow = $(sort_context.item[0]);
    var tmpArr=[LayoutTree[0]];
}

function rowColumns(e){
    $('#rowSettingsModal').modal('hide');
    var colOpts = $(e.currentTarget).data('colopts');
    addRow(e,colOpts);
}

function setActiveLayoutNode(e){
	setActiveContainer(e);
}

function setActiveContainer(e){    LayoutSelectedContainer = e.currentTarget;  }

function addRow(e, cols, replace=false){
	var row;
    var trow ='<li class="panel panel-default col-sm-12 layoutRow" '+/*data-self="" data-instance=""*/  '>';
    var colschema='';
    
    $('#layoutCanvas').sortable("destroy");
    $('#layoutCanvas').sortable({stop:onSort, handle: '.moveRow'});
    
    //console.log(cols, cols.length);
    for (var i=0, L=cols.length; i < L; i++) {
        trow +='<div class="layoutRowStage '+
            'col-xs-'+cols[i]+' '+
            'col-sm-'+cols[i]+' '+
            'col-md-'+cols[i]+' '+
            'col-lg-'+cols[i]+' '+
            '" data-colindex="'+i+'" > <a href="#" class="addComponentBtn btn layoutBtn" data-toggle="modal" data-target="#ComponentLibrary" > <i class="fa fa-plus"></i> </a> </div>'
			//lnid++;
			colschema+=cols[i]+(i==cols.length-1?'':',');
    }
    trow = trow + '<div class="layoutRowController controls selectable instance" data-self="" data-instance=""> <span class="moveRow"><i class="fa fa-arrows"></i></span><span class="editRow" data-toggle="modal" data-target="#rowSettingsModal"><i class="fa fa-pencil"></i></span><span class="deleteRow"><i class="fa fa-trash"></i></span> </div></li>';
    row = $(trow);
	
	if (replace != false) row = $(replace).replaceWith(row);
    else{
		$('#layoutCanvas').append( row );// $('#layoutCanvas').children().last();
		row = $('#layoutCanvas').children().last();
	}

	row.data('ColumnSize','[12]');
	row.data('colschema',colschema);
    row.attr('id','layoutRow_'+RowCount);
    RowCount++;
 	row.find('.editRow').click(EditRow);
    row.find('.addComponentBtn').click(addComponent);
 	row.find('.deleteRow').click(remRow);
    return row;
}

function remRow(e) {
    $( e.currentTarget ).closest('.layoutRow').remove();
    LayoutSelectedContainer=row = $('#layoutCanvas').children().first();
}
function remSelected(e) { $(LayoutSelectedContainer).remove(); }
