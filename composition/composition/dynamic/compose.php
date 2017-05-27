<?php
if(isset($_REQUEST['interface'])) require_once 'LayoutBuilder.php';
else{

require_once __DIR__.'/../../dynamic_layout.php';

global $RuntimePath;
global $DeployPath;
global $SupportPath;
global $StaticFiles;

$StaticMarkupPath = $RuntimePath.'/support/templates/static/';
$TemplatePath = $RuntimePath.'/support/templates/';

$ComposerData = Composition::$Active->Context['data'];
$LayoutStructure = json_decode($ComposerData['layout_structure'],true);
$UserID = Composition::$Active->Context['authenticated_account'] ? Composition::$Active->Context['authenticated_account']->data['id'] : null;

if(is_array($LayoutStructure))
foreach($LayoutStructure as $layoutrow){
    $row = $layoutrow['self'];
    $row['col-schema'] = explode(',' , $row['col-schema']); //convert comma-delimited to array
    $colIndex=0;
    
    if(!empty($layoutrow['children'][0]['children']))
        $Main->children[]=
            $FrontEndRow = new renderable(['tag'=>'li','classes'=>['col-sm-12','layoutRow']]);
    foreach($layoutrow['children'] as $col){
        $ColWidth = $row['col-schema'][$colIndex].'';
        if(!empty($col['children']))
            $FrontEndRow->children[]=$FrontEndCol=new renderable(['tag'=>'div','classes'=>['col-sm-'.$ColWidth,'layoutColumn']]);
        foreach($col['children'] as $ComponentList){
            
            $ComponentName = $ComponentList['self']['type'];
            $cinstance = $ComponentList['self']['instance'];
            $cid = isset($ComponentList['self'])? (isset($ComponentList['self']['self']) ? $ComponentList['self']['self'] : null) : null;
            
            $options=[];

            global $SupportPath;
            $Component = new $ComponentName();
            $datasources = !empty($Component->sources) ? $Component->sources : [ str_to_lower(getPlural($ComponentName))];
        
            $options['template']=$SupportPath .'/templates/'.$ComponentName.'.xml';
            $PrimaryID = $i=0;
            
            $containerTag = isset($Component->ContainerTag) ? $Component->ContainerTag : 'div';
            
            if(empty($cid) && $cid !== 0 )
            {                
                $Component = new $ComponentName();
                //$options['pageID']=$ComponentName.'Editor';
                $options['classes']=[$ComponentName,'Component'];
                $options['template']=$SupportPath .'/templates/'.$ComponentName.'.xml';
                $options['tag']=$containerTag;
                $options['attributes']=[//'data-self'=>'',
                                        'data-instance'=>$cinstance,
                                        'data-role'=>'Service',
                                        'data-component'=>$ComponentName,
                                        'data-persist'=>'[&quot;data-persist&quot;,&quot;id&quot;,&quot;,&quot;data-instance&quot;,&quot;data-layoutnid&quot;]',
                                        //'data-context'=>'{&quot;_self_id&quot;:null, &quot;_response_target&quot;:&quot;getSelectedStage()&quot;}',
                                        //'data-intent'=>'{&quot;REFRESH&quot;:{&quot;'.$ComponentName.'&quot;:&quot;Save&quot;}}',
                                        'onclick'=>'setActiveComponent(this);'
                                        ];
                if(!isset($Component->sources))
                    $options[$ComponentName][strtolower( getPlural($ComponentName) )] = ['condition'=>'LIMIT 0, 1' ];
                else foreach($Component->sources as $src)
                    $options[$ComponentName][$src] = ['condition'=>'LIMIT 0, 1' ];
            
                $FrontEndCol->children[]= $tmp=new Smart($options);
                foreach($tmp->TemplateBinding[$ComponentName] as $dataset => $row2)  foreach($row2 as $key => $value){
                    $tmp->data[$ComponentName][$dataset][$key]=$value;
                }
            }
            else{
                if(!isset($Component->sources)){$options[$ComponentName][strtolower( getPlural($ComponentName))] = [ 'method'=>'WHERE `id` = '.$cid, 'condition' => ' LIMIT 0, 1' ];}
                else foreach($Component->sources as $src)
                {
                    if(is_array($cid) && count($cid) == count($Component->sources)){
                        $options[$ComponentName][$src] = [ 'target'=>$src, 'new_query'=>true, 'method'=>'WHERE `id` = '.$cid[$i] .' LIMIT 1'];
                        $PrimaryID = $cid[0];
                        ++$i;
                       }
                    elseif(is_array($cid)){ $options[$ComponentName][$src] = [ 'target'=>$src, 'new_query'=>true, 'method'=>'WHERE `id` = '.$cid[0].' LIMIT 1' ]; $PrimaryID = $cid[0];}
                    elseif(!empty($cid) || $cid === 0){ $options[$ComponentName][$src] = [ 'target'=>$src, 'new_query'=>true, 'method'=>'WHERE `id` = '.$cid .' LIMIT 1']; $PrimaryID = $cid;}
                    else{ $options[$ComponentName][$src] = [ 'target'=>$src, 'new_query'=>true, 'method'=>'WHERE `id` = NULL LIMIT 1']; $PrimaryID = null; }
                }
    
                $FrontEndCol->children[]= $tmp = new Smart($options);
                $tump->classes[]='Component';
                $tmp->classes[]=$ComponentName;
                $tmp->attributes['data-instance']=$cinstance;
            }
        }
        $colIndex++;
    }
}

//$ContentArea->content='<div class="col-sm-12"><pre>'.var_export(,true).'</pre></div>';

/*
$Main->children[]=new renderable(['tag'=>'li','classes'=>['col-sm-4']]);
$Main->children[]=$ContentArea=new renderable(['tag'=>'li','classes'=>['col-sm-8']]);
$ContentArea->content='<div class="col-sm-12"><pre>'.var_export(,true).'</pre></div>';
*/

}
?>