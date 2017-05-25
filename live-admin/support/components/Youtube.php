<?php
class Youtube extends Component
{
	public static $ComponentName='Youtube';
	public $RenderType = 'Smart';
	public $ChildTag = 'div';
//    public $ContainerTag = 'div';
	public $ChildClasses=array();

	public $ContainerClasses = array();
    public $sources = ['simple_embeds'];
}

?>