<?php
class Post extends Component
{
	public static $ComponentName='Post';
	public $RenderType = 'Smart';
	public $ChildTag = 'div';
	public $ChildClasses=array('layoutTextBlob');

	public $ContainerClasses = array();
    public $sources = ['text_embeds'];
}

?>