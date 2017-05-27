<?php

class Product extends Component
{
	public static $ComponentName='Product';
	public $ChildTag='div';
	public $RenderType = 'Smart';
	public $ContainerClasses = array('Product','Interface');
	public $ChildClasses = [ [] ]; //One set of classes[] per <Render:Markup> in the template
	public $ChildAttributes = [['data-custom'=>'any value'], [],[]];    
}
?>
