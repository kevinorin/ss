<?php
class ImageRow extends Component
{
	public static $ComponentName='ImageRow';
	public $RenderType = 'Smart';
	public $ChildTag = 'img';
	public $ChildClasses=array('layoutImg');

	public $ContainerClasses = array();
    	public $sources = ['media_embeds'];
}

?>