<?php
class LeadsList extends Component
{
	public static $ComponentName='LeadsList';
	public $RenderType = 'Smart';
	public $ChildTag = 'tr';
	public $ChildClasses=array('col-sm-12');
	public $ContainerClasses = array('col-sm-12');
    
    public $sources=['leads'];
}

?>