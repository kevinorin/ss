<?php
class LeadGeneration extends Component
{
	public static $ComponentName='LeadGeneration';
	public $RenderType = 'Smart';
	public $ChildTag = 'div';
	public $ChildClasses=array('lead_generation');

	public $ContainerClasses = array();
    	public $sources = ['users'];
}

?>