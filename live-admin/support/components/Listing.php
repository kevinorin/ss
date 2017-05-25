<?php
class Listing extends Component
{
	public static $ComponentName='Listing';
	public $RenderType = 'Smart';
	public $ChildTag = 'ul';
	public $ChildClasses=array();

	public $ContainerClasses = array();
	public $sources = ['listings'];//,'aggregationIDX'];
}

?>