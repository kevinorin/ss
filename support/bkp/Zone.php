<?php

class Zone extends Component
{
	public static $ComponentName='Zone';
	public $ChildTag='div';
	public $RenderType = 'Smart';
	public $ContainerClasses = array('Zone');
	public $ChildClasses = [ ['Zones', 'Interface'],['collapse'],[] ]; //One set of classes per <Render:Markup> in the template
	public $ChildAttributes = [['data-custom'=>'any value'], [],[]];
}
?>
