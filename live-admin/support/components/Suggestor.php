<?php

class Suggestor extends Component
{
	public static $ComponentName='Suggestor';
	public $ChildTag='ul';
	public $RenderType = 'Smart';
	public $ContainerClasses = array('Suggestors');
	public $ChildClasses = array( array('Suggestor') );	//One set of classes per <Render:Markup> in the template
	public $ChildAttributes = array( array('data-custom'=>'any value') );
	
}
?>
