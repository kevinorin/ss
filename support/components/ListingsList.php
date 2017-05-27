<?php
class ListingsList extends Component
{
	public static $ComponentName='ListingsList';
	public $RenderType = 'Smart';
	public $ChildTag = 'tr';
	public $ChildClasses=array('col-sm-12');
	public $ContainerClasses = array('col-sm-12');
    public $ContainerTag = 'table';
    
    public $sources = ['listings'];
}

?>