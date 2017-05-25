<?php

global $ActiveComposition;
require_once(__DIR__.'/../core.php');

if(!isset($ActiveComposition))    $ActiveComposition = new Composition();
require_once __DIR__.'/../composition/layout.php';

$Skin= &$ActiveComposition;
$StaticMarkupPath = $RuntimePath.'/support/templates/static/';

$feed=simplexml_load_string(curl('http://feeds.ign.com/ign/games-all'));
$DataBrowser=simplexml_load_string(GetFile($RuntimePath .'/service/xmlstore/ign-games-all.rss'));

//var_dump($DataBrowser);

foreach( $DataBrowser->channel as $datafeed )
{
    $new = &$feed->addChild( 'channel' , $datafeed );
    foreach( $datafeed->attributes() as $key => $value )
        $new->addAttribute( $key, $value );
}

$handler = fopen($RuntimePath .'/service/xmlstore/ign-all.rss');
fwrite($handler, var_export($DataBrowser,true));
fclose($handler);
    
//$feed = GetFile($RuntimePath .'/service/xmlstore/ign-games-all.rss');
//$DataBrowser=simplexml_load_string($feed);

foreach($DataBrowser->channel->item as $item)
{
    $Card = new renderable('ul');
    $Card->children[]=$CardTitle = new renderable(['tag'=>'li','content'=>'<a href="'.$item->title.'" >'.$item->title.'</a>']);
    $Card->children[]=$CardDescript = new renderable(['tag'=>'li','content'=>$item->description]);
    $Card->children[]=$CardDate = new renderable(['tag'=>'li','content'=>$item->pubDate]);

    if(isset($item->enclosure))
    {
//        if($item->enclosure['type'] == 'video/mp4')
        $Card->children[]=$CardDate = new renderable(['tag'=>'li',
'content'=>'<center><video width="480" height="320" controls="controls" preload="none">
<source src="'.$item->enclosure['url'].'" type="'.$item->enclosure['type'].'"><p>Your browser does not support H.264/MP4.</p></video></center>']);
    }
    $Screen->children[]=$Card;
}


$Content->attributes['style']='display: none;';
$Skin->publish();

/*
ob_start(); var_dump($item); 
$Card->children[]=$CardDate = new renderable(['tag'=>'li','content'=>ob_get_clean()]);
$feed=curl('http://feeds.ign.com/ign/games-all');
fileSave($RuntimePath .'/service/xmlstore/ign-games-all.rss',$feed);
$feedstore = array();
$today = date('U');
foreach (glob(__DIR__.'/xmlstore/*.rss') as $file)
{
    $last_modified=filemtime($file);
    if($today - $last_modified >= 43200)
        $feedstore[$filename]=filemtime($file);
}
*/

/*
foreach($DataBrowser as $Named => $Node)
{
    if($Named == 'Filters') break;
    print_r('<li>'.$Named.' <ul>');
    foreach($Node as $Category => $Branch)
    {
        print_r('<li>'.$Category.' </li><ul>');
        foreach($Branch as $App => $Details)
        {
            print_r('<li>'.$App.' </li><ul>');
            foreach($Details as $Key => $Value)
            {
                $App = new MobileApps('MobileApps');
                print_r('<li>'.$Key.': '.$Value.' </li>');
                $App->data[$Key]=$Value;
            }
            print_r('</ul></li>');        
        }
        print_r('</ul></li>');        
    }
    print_r('</ul></li>');
}


/*
 *
 *GENERATION BELOW
 *
 */
/*
$Tree=array();
$app=array();

//UpdateSchema();

function GetURI($uri)
{
    $handler = curl_init();
    curl_setopt_array($handler, array(CURLOPT_URL => $uri,CURLOPT_HEADER => false, CURLOPT_RETURNTRANSFER => true));
    $result = curl_exec($handler);
    curl_close($handler);
    return $result;
}

$SourceRSS=array();
$SourceRSS[]='https://itunes.apple.com/us/rss/toppaidapplications/limit=300/xml';
$SourceRSS[]='https://itunes.apple.com/us/rss/topgrossingapplications/limit=300/xml';
$SourceRSS[]='https://itunes.apple.com/us/rss/topfreeipadapplications/limit=300/xml';
$SourceRSS[]='https://itunes.apple.com/us/rss/toppaidipadapplications/limit=300/xml';
$SourceRSS[]='https://itunes.apple.com/us/rss/topgrossingipadapplications/limit=300/xml';
$SourceRSS[]='https://itunes.apple.com/us/rss/newapplications/limit=300/xml';
$SourceRSS[]='https://itunes.apple.com/us/rss/newfreeapplications/limit=300/xml';
$SourceRSS[]='https://itunes.apple.com/us/rss/newpaidapplications/limit=300/xml';

$SourceJSON=array();
$SourceJSON[]='https://itunes.apple.com/us/rss/toppaidapplications/limit=300/json';
$SourceJSON[]='https://itunes.apple.com/us/rss/topgrossingapplications/limit=300/json';
$SourceJSON[]='https://itunes.apple.com/us/rss/topfreeipadapplications/limit=300/json';
$SourceJSON[]='https://itunes.apple.com/us/rss/toppaidipadapplications/limit=300/json';
$SourceJSON[]='https://itunes.apple.com/us/rss/topgrossingipadapplications/limit=300/json';
$SourceJSON[]='https://itunes.apple.com/us/rss/newapplications/limit=300/json';
$SourceJSON[]='https://itunes.apple.com/us/rss/newfreeapplications/limit=300/json';
$SourceJSON[]='https://itunes.apple.com/us/rss/newpaidapplications/limit=300/json';


$AppStore=array(); //json_decode(GetURI($SourceRSS[0]),true);

foreach($SourceJSON as $source)
{
    $i=0;
    $json = json_decode( GetURI($source) ,true);
    $xml=json_decode( json_encode( simplexml_load_file($SourceRSS[$i])),true);
    foreach($xml['entry'] as $entry)
    {
        $json['feed']['entry'][$i]['content']=$entry['content'];
       // print_r($entry['content']);
        $i++;
    }
    $AppStore[]=$json;
}


foreach($AppStore as $store)
{
    foreach($store['feed']['entry'] as $entry)
    {
        print_r('a');
        $app=array();
        if(!isset($entry['im:name'])){ var_dump($entry); break;}
        $app['Name']=$entry['im:name']['label'];
        $app['Title']=$entry['title']['label'];
        
        $app['Thumb_large']=$entry['im:image'][2]['label'];
        $app['Thumb_med']=$entry['im:image'][1]['label'];
        $app['Thumb_small']=$entry['im:image'][0]['label'];
        
        $app['Summary']=$entry['content'];//['label'];
        $app['Price']=$entry['im:price']['attributes']['amount'];
        $app['Paid']=((int)$app['Price'] > 0.0)? true : false;
        $app['Currency']=$entry['im:price']['attributes']['currency'];
        $app['Copyright']=$entry['rights']['label'];
        
        $app['Permalink']=$entry['link']['attributes']['href'];
        $app['SourceID']=$entry['id']['attributes']['im:id'];
        $app['ExternAccessor']=$entry['id']['attributes']['im:bundleId'];
        $app['Publisher']=$entry['im:artist']['label'];
        $app['SourceCategory']=$entry['category']['attributes']['term'];
        $app['SourceCategoryID']=$entry['category']['attributes']['im:id'];
        $app['ReleaseDate']=$entry['im:releaseDate']['label'];
        
        //Constant Values (per context, not per runtime)
        $app['Platform']='iOS';
        $app['ContentType']='Application';
        
        $Tree[$app['SourceCategory']][$app['Publisher']][$app['SourceID']]=$app;
        $Tree['Filters']['Cost'][$app['Price']] = $app['SourceID'];
        $Tree['Filters']['Free'][$app['Paid']] = $app['SourceID'];
        $Tree['Filters']['Publisher'] = $app['SourceID'];        
    }
}

file_put_contents('/var/www/php/apptism.com/support/data.json',json_encode($Tree));
/**/



/*
 *  Quick Browser
 *
 
$DataBrowser=json_decode(file_get_contents('/var/www/php/apptism.com/support/data.json'),true);

foreach($DataBrowser as $Named => $Node)
{
    if($Named == 'Filters') break;
    print_r('<li>'.$Named.' <ul>');
    foreach($Node as $Category => $Branch)
    {
        print_r('<li>'.$Category.' </li><ul>');
        foreach($Branch as $App => $Details)
        {
            print_r('<li>'.$App.' </li>');
        }
        print_r('</ul></li>');        
    }
    print_r('</ul></li>');
} 
 
 *
 *
 *
 */

?>