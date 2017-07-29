<?php
class PagesList extends Component
{
	public static $ComponentName='PagesList';
    public $sources=['compositions'];
	public $RenderType = 'Smart';
	public $ChildTag = 'tr';
	public $ChildClasses=array('col-sm-12');
	public $ContainerClasses = array('col-sm-12');
}

?>