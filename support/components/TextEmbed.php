<?php
class TextEmbed extends Component
{
	public static $ComponentName='TextEmbed';
	public $RenderType = 'Smart';
	public $ChildTag = 'div';
	public $ChildClasses=array('layoutTextBlob');

	public $ContainerClasses = array();
    	public $sources = ['text_embeds'];
}

?>