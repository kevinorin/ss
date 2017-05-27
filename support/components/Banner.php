<?php
class Banner extends Component
{
	public static $ComponentName='Banner';
	public $RenderType = 'Smart';
	public $ChildTag = 'div';
	public $ChildClasses=array('site_banner');
    public $ContainerClasses=array('ComponentLayout');

   	public $sources = ['banners'];
    
    function PostProcess(&$BuildData){
        foreach($this->context['root']->children as $child)
            if(isset($child->data))
                $child->classes[]='Banner'.$child->data['Banner']['banners']['type'];
    }
}

?>