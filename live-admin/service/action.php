<html>
<body>
<pre>
<?php
/*
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once __DIR__.'/../core.php';
require_once 'ctdb.php';

global $CTDB_Backup;
global $ActiveComposition;
global $RemoteBase;

//UpdateSchema();
/*
$StaticMarkupPath = $RuntimePath.'support/templates/static/';
if(!isset($ActiveComposition))    $ActiveComposition = $Portal = new Composition();  
else $Portal = $ActiveComposition;
$user=array();


/*
$LocationPatch = array ( 1 => array ( 'location' => array ( 2756 => array ( 'name' => 'Penrose', 'zip' => '81240', 'content' => '', ), 2757 => array ( 'name' => 'Pueblo', 'zip' => '81008', 
'content' => '', ), 2764 => array ( 'name' => 'Colorado Springs', 'zip' => '80840', 'content' => '', ), 2771 => array ( 'name' => 'Denver', 'zip' => '80218', 'content' => 'Under Construction', ), 
2780 => array ( 'name' => 'Baltimore', 'zip' => '21093', 'content' => 'Test 06.03.2015 JC', ), ), ), 6 => array ( 'location' => array ( 3051 => array ( 'name' => '6th Street', 'zip' => '81240', 
'content' => '', ), 3052 => array ( 'name' => 'Pig Farm', 'zip' => '81240', 'content' => '', ), 3054 => array ( 'name' => 'Double 210 Ranch', 'zip' => '81240', 'content' => '', ), ), ),
8 => array ( 'location' => array ( 4576 => array ( 'name' => 'Pueblo (Development)', 'zip' => '81004', 'content' => 'its a town', ), ), ), 12 => array ( 'location' => array ( 4694 => 
array ( 'name' => 'Penrose', 'zip' => '80218', 'content' => 'House', ), 4695 => array ( 'name' => 'Denver', 'zip' => '80218', 'content' => 'Condo', ), 4697 => array ( 'name' => 'Magic Shop', 
'zip' => '80218', 'content' => 'JC New', ), ), ), ); 

foreach($LocationPatch as $index => $record)    $CTDB_Backup[$index]['location']=$record['location'];
/*





$tree = new renderable('ul');
$product_collection = $recipe_collection=[];
$k='2';
$v=$CTDB_Backup['2'];

    $tree->children[]=$UserLabel = new renderable(['tag'=>'li','content'=>'User ID: '.$k]);
    $UserLabel->children[]=$SubLabel = new renderable('ul');
    foreach($v as $key => $record)
    {
        $link = '<a href="?user='.$k.'&set='.$key.'">'.$key.'</a>';
        $SubLabel->children[]= new renderable(['tag'=>'li','content'=>'Data set '.$link.' has '.count($record).' properties.']);
        
        if($key=='user') $UserLabel->content.=', '.$record['nickname'];
        if($key=='plant' && count($record) > 0)
        {
            $arr=[];
            foreach((array)$record as $pid => $plant)  $arr[]=$pid;
            foreach($arr as $pid)
                if(isset($record[$pid]['strain-id']))
                {
                    $record[$pid]['strain'] = $record[$pid]['strain-id'];
                    unset($record[$pid]['strain-id']);
                }
        }
        if($key=='recipe' && count($record) > 0)
        {
            $arr=[];
            foreach((array)$record as $cid => $crop)  $arr[]=$cid;
            foreach($arr as $cid)
            {
                $products=[];
                foreach((array)$record[$cid]['products'] as $pid=>$prod)    $products[]=$pid;
                $record[$cid]['products']=$products;
                unset($record[$cid]['content_html']);
            }
        }
        if($key=='crop' && count($record) > 0)
        {
            $arr=[];
            foreach((array)$record as $cid => $crop)  $arr[]=$cid;
              foreach($arr as $cid)
              {
                $products=[];
                $plants=[];
                foreach((array)$record[$cid]['products'] as $pid=>$prod)    $products[]=$pid;
                foreach((array)$record[$cid]['plants'] as $pid=>$plant)    $plants[]=$pid;
                
                $record[$cid]['products']=$products;
                $record[$cid]['plants']=$plants;
                
                if(isset($record[$cid]['calendar'])) unset($record[$cid]['calendar']);
              }
        }        
        if(isset($_GET['user']) && $_GET['user'] != $k ) continue;
        if(isset($_GET['set']) && $_GET['set'] == $key )
            $SubLabel->children[ count($SubLabel->children)-1 ] ->content .= '<div><pre>'.approach_dump($record).'</div></pre>';//'<div><pre>'.var_export($record,true).'</pre></div>';

        if($key=='recipe' )
            foreach($record as $rid => $recipe)
                $recipe_collection[$rid]=$recipe;

        if($key=='product' )
            foreach($record as $pid => $prod)
                {
                    if(count($prod['tags']) > 0 && is_array($prod['tags']) ) $prod['tags']=implode(',',$prod['tags']);
                    else $prod['tags']=''; 
                    $product_collection[$pid]=$prod;
                }
    }

//echo $tree->render();

/*
foreach($product_collection as $pid => $data)
{
    if( !isset($data['image']) || empty($data['image']))  break;
    $prod = LoadObject('products', ['method'=>'WHERE `id` = '.$pid,'debug'=>true]);
    
    $prod->data['image'] = $data['image'];
    //$prod->save( $prod->data['id'] );
}

/*
foreach($recipe_collection as $rid => $recipe)
{
    $r = new recipes('recipes');
    
    $a=[];
    $a['id'] = $recipe['id'];
    $a['title'] = $recipe['title'];
    $a['markup'] = $recipe['content'];
    $a['cycle'] = ($recipe['type'] == 'gr')? 1 : 2 ;    //veg or bloom ?
    $a['rating'] = $recipe['rating'] != 0 ? $recipe['rating'] : 3;
    $a['image'] = $recipe['image'];
    $a['week_count'] = $recipe['weeks']+0;
    $a['display'] = $recipe['showCalendar'];
    
    $p=[];
    $tmp = $recipe['calendar'];
    foreach($tmp as $pid => $cal)
    {
        $p[] = $pid+0;
        
        unset($recipe['calendar'][$pid]['week']);
        $recipe['calendar'][$pid]['amount']=[];
        $recipe['calendar'][$pid]['unit']=$cal['mu'];
        unset($recipe['calendar'][$pid]['mu']);        
        
        foreach($cal['week'] as $w) $recipe['calendar'][$pid]['amount'][]= $w['qty']+0;
    }
    
    $a['products'] = json_encode($p);
    $a['calendar'] = json_encode($recipe['calendar']);
    
    $r = new recipes('recipes');
    $r->data=$a;
    $r->options['debug']=true;
    $r->save();
    echo $MultiEOL.PHP_EOL;
//    var_dump($r);
}


/*


$CurProd = new products('products');
$product_keys = array_keys( products::$profile['header'] );

$DiffBinding = [
 'markup'=>'content_html',
 'series'=>'line_series',
 'series_info'=>'line_series_descr',
 'type' => ['type', 'category', 'subcategory', 'subcategory_descr'],
 'nitro'=> true,
 'potass'=> true,
 'phosphor'=> true,
 'sulfur'=> true
 ];

$cloud = ['id', 'type', 'title', 'markup', 'manufacturer', 'series', 'series_info', 'nitro', 'phosphor', 'potass', 'sulfur', 'tags'];
$word = ['id', 'title', 'content_html', 'manufacturer', 'line_series', 'line_series_descr', 'npk-ratio', 'tags'];
$MultiEOL.=PHP_EOL;
$ProductCollection=[];

foreach($product_collection as $product)
{
    $p = [];
    foreach($cloud as $property)
    {
        if( !in_array($property, array_keys($DiffBinding)) )
            $p[$property] = $product[$property];
        else if( $DiffBinding[ $property ] !== true && !is_array( $DiffBinding[$property] ) )
            $p[$property] = $product[ $DiffBinding[$property] ];
    }
    
    $npk=explode('-',$product['npk-ratio']);
    
    $c=count($npk);
    switch(true)
    {
        case ($c>0) : $p['nitro']=@$npk[0]+0.0;
        case ($c>1) : $p['potass']=@$npk[1]+0.0;
        case ($c>2) : $p['phosphor']=@$npk[2]+0.0;
        case ($c>3) : $p['sulfur']=@$npk[3]+0.0;
        case ($c<4) : $p['sulphur']=0.0;
        case ($c<3) : $p['phosphor']=0.0;
        case ($c<2) : $p['potass']=0.0;
        case ($c<1) : $p['nitro']=0.0;
        default: break;
    }
    
    
    if( $product['category'] != 'Pesticide' && $product['subcategory_descr'] != '' && !empty($product['subcategory_descr']) )
    {
        $ProdTree[ $product['category'] ][ $product['subcategory_descr'] ][] = $product['id'];
        $p['id'] = $product['id']+0;
        $ProductCollection[ $product['id']+'' ] = $p;
    }
}

$NewTree=[];
$TypeTree=[];
//unset($product_collection);
$ProductTypes=[];

/*  Populate Product Types as below 
foreach($ProdTree as $Top => $Cat)
{
    $tmpType = new types('types');
    $tmpType->data['name']=$Top;
    $tmpType->data['pointer']=9;
    $tmpType->data['parent'] = 104;  //HARDCODE: Perhaps define(PRODUCT_TYPE_ID,27) and prefetch this value in config, core or map from db

    switch($Top)
    {
        case 'Additive' : $tmpType->data['id'] = 2162; break;
        case 'Pesticide': $tmpType->data['id'] = 2163; break;
        case 'Nutrient': $tmpType->data['id'] = 2202; break;
    }
    
    $d = $tmpType->save();
    $id = $d['id'];

    
    foreach($Cat as $Name => $ProductList)
    {
        $subType = new types('types');
        $subType->data['name']=$Name;
        $subType->data['parent'] = $id+0;  //HARDCODE: Perhaps define(PRODUCT_TYPE_ID,27) and prefetch this value in config, core or map from db
        $subType->data['pointer'] = 104;
        $d = $subType->save();
        $sub_id = $d['id'];
        
        foreach($ProductList as $pid)
        {
            //$p = new products('products');
            $ProductTypes[$pid] = $sub_id;
        }
    }
}

/*
$ProductTypes=array (
  2679 => 2165,2329 => 2165,2630 => 2165,2604 => 2165,3017 => 2165,2538 => 2165,2677 => 2166,2394 => 2166,2266 => 2166,2352 => 2166,3260 => 2167,3779 => 2167,
  2673 => 2167,3252 => 2167,4076 => 2167,2667 => 2167,2610 => 2167,3514 => 2167,4139 => 2167,4121 => 2167,4870 => 2167,2191 => 2167,2187 => 2167,2189 => 2167,
  4136 => 2167,3636 => 2167,3172 => 2167,2615 => 2167,2212 => 2167,2210 => 2167,2559 => 2167,3019 => 2167,3948 => 2167,2218 => 2167,3228 => 2167,3226 => 2167,
  4157 => 2168,3133 => 2168,3168 => 2168,3021 => 2168,2138 => 2168,3411 => 2168,2335 => 2169,2675 => 2169,2398 => 2170,2331 => 2170,2161 => 2170,2163 => 2170,
  3189 => 2170,2382 => 2170,4151 => 2170,4252 => 2170,4255 => 2170,4261 => 2170,3218 => 2170,4258 => 2170,2275 => 2170,4154 => 2170,4264 => 2170,3180 => 2170,
  2440 => 2170,3178 => 2170,2333 => 2171,3127 => 2171,3007 => 2171,3307 => 2171,3230 => 2171,2665 => 2171,2632 => 2171,2602 => 2171,3094 => 2171,3622 => 2171,
  3625 => 2171,2106 => 2171,2321 => 2171,3040 => 2171,3628 => 2171,4166 => 2171,3232 => 2171,4216 => 2171,4880 => 2171,2536 => 2171,3415 => 2171,2438 => 2171,
  2206 => 2171,2557 => 2171,3043 => 2171,4030 => 2171,3193 => 2171,3138 => 2171,3585 => 2172,4058 => 2172,3182 => 2172,3254 => 2172,2358 => 2172,3256 => 2172,
  3224 => 2172,4127 => 2173,3103 => 2173,3101 => 2173,3773 => 2173,3633 => 2173,3266 => 2173,3535 => 2173,2396 => 2173,2323 => 2173,3642 => 2173,3639 => 2173,
  3576 => 2173,2375 => 2173,3806 => 2173,2786 => 2173,3461 => 2173,4234 => 2173,4163 => 2173,4160 => 2173,2377 => 2173,3942 => 2173,3270 => 2173,3140 => 2173,
  3287 => 2173,3264 => 2173,3761 => 2173,2392 => 2173,4213 => 2173,4928 => 2173,3770 => 2173,3616 => 2173,3526 => 2173,3262 => 2173,2384 => 2173,2663 => 2173,
  3517 => 2173,3389 => 2173,2436 => 2173,2434 => 2173,3718 => 2173,4067 => 2173,3523 => 2173,3935 => 2173,3939 => 2173,2256 => 2173,3273 => 2173,4082 => 2174,
  3311 => 2174,4618 => 2174,2622 => 2174,2612 => 2174,2618 => 2174,4055 => 2174,3803 => 2174,2183 => 2174,3594 => 2174,3591 => 2174,3443 => 2174,4210 => 2174,
  4931 => 2174,4109 => 2174,2185 => 2174,2540 => 2174,3407 => 2174,2264 => 2174,3123 => 2174,3009 => 2174,3277 => 2174,3538 => 2174,2208 => 2174,4112 => 2174,
  3489 => 2174,2260 => 2174,2258 => 2174,3086 => 2174,3960 => 2174,3532 => 2174,3191 => 2174,3418 => 2174,3508 => 2175,3982 => 2175,3979 => 2175,3985 => 2175,
  3105 => 2175,3812 => 2175,3630 => 2175,3809 => 2175,4180 => 2175,4183 => 2175,4186 => 2175,2544 => 2175,3728 => 2175,3529 => 2176,3767 => 2176,3951 => 2176,
  3090 => 2176,2371 => 2176,4142 => 2176,2273 => 2176,3498 => 2176,4145 => 2176,4237 => 2176,2181 => 2176,2216 => 2176,3501 => 2177,2224 => 2177,3607 => 2178,
  3604 => 2178,3601 => 2178,3597 => 2178,3099 => 2178,2173 => 2178,3214 => 2178,2671 => 2178,2167 => 2178,4115 => 2178,4118 => 2178,3945 => 2178,2171 => 2178,
  2165 => 2178,2178 => 2178,2176 => 2178,4344 => 2178,3520 => 2178,2169 => 2178,3449 => 2179,3148 => 2179,3164 => 2179,3162 => 2179,3144 => 2179,3142 => 2179,
  3166 => 2179,3158 => 2179,3146 => 2179,3152 => 2179,3458 => 2179,3067 => 2179,3455 => 2179,3065 => 2179,3072 => 2179,3452 => 2179,3070 => 2179,3074 => 2179,
  3440 => 2179,2482 => 2179,3131 => 2180,4124 => 2180,2268 => 2180,4043 => 2180,3613 => 2180,2681 => 2181,4148 => 2182,3610 => 2182,2669 => 2182,2325 => 2182,
  4363 => 2182,3216 => 2182,4883 => 2182,3957 => 2182,3005 => 2182,4219 => 2182,3818 => 2182,2159 => 2182,3764 => 2183,3296 => 2183,4534 => 2183,2627 => 2183,
  3184 => 2183,4073 => 2183,3483 => 2183,2338 => 2183,4659 => 2184,3258 => 2184,2542 => 2184,3011 => 2184,3492 => 2184,4877 => 2184,2784 => 2184,3015 => 2184,
  4249 => 2184,4662 => 2184,3097 => 2185,3619 => 2185,3298 => 2185,3318 => 2185,3320 => 2185,3314 => 2185,2400 => 2185,2356 => 2185,4635 => 2185,2354 => 2185,
  3505 => 2185,2420 => 2185,3088 => 2185,2608 => 2185,3929 => 2185,4668 => 2186,4671 => 2186,2366 => 2186,3316 => 2186,4874 => 2186,3036 => 2186,3275 => 2186,
  3480 => 2186,2600 => 2186,2327 => 2187,3013 => 2187,4656 => 2187,3092 => 2187,4133 => 2187,3446 => 2187,3279 => 2187,2214 => 2187,4130 => 2187,2379 => 2187,
  2156 => 2187,4070 => 2187,3588 => 2187,3932 => 2187,3222 => 2187,3776 => 2188,3047 => 2188,2373 => 2188,3107 => 2189,3579 => 2189,2635 => 2189,3109 => 2189,
  3582 => 2189,3815 => 2189,3294 => 2189,3240 => 2189,3976 => 2189,3973 => 2189,3283 => 2189,4240 => 2189,4246 => 2189,4243 => 2189,3970 => 2189,3967 => 2189,
  3206 => 2189,3236 => 2189,3234 => 2189,3238 => 2189,2279 => 2190,2277 => 2191,4867 => 2191,4864 => 2191,4040 => 2191,3782 => 2192,4169 => 2193,4665 => 2193,
  2684 => 2194,3129 => 2194,4935 => 2194,4460 => 2194,2442 => 2194,3285 => 2195,2480 => 2195,2271 => 2196,3495 => 2196,3220 => 2196,3136 => 2197,2624 => 2198,
  2526 => 2199,2422 => 2200,2661 => 2201,3300 => 2203,3731 => 2203,2930 => 2203,3292 => 2203,3289 => 2203,3281 => 2203,2936 => 2203,3794 => 2203,3268 => 2203,
  3309 => 2203,2432 => 2203,3724 => 2203,3920 => 2204,3886 => 2204,3465 => 2204,3471 => 2204,2428 => 2204,2504 => 2204,3115 => 2204,3840 => 2204,2532 => 2204,
  4061 => 2204,3895 => 2204,3910 => 2204,3573 => 2204,3558 => 2204,3555 => 2204,3917 => 2204,2120 => 2204,3789 => 2204,4195 => 2204,4189 => 2204,4204 => 2204,
  4046 => 2204,4861 => 2204,3212 => 2204,2110 => 2204,4650 => 2204,4653 => 2204,4632 => 2204,2524 => 2204,2522 => 2204,3561 => 2204,3567 => 2204,3424 => 2204,
  4036 => 2204,3746 => 2204,3749 => 2204,3743 => 2204,3187 => 2204,4033 => 2204,3824 => 2204,3113 => 2204,4094 => 2204,3898 => 2204,4103 => 2204,3477 => 2204,
  2555 => 2204,3830 => 2204,3001 => 2204,3250 => 2204,2512 => 2204,2510 => 2204,3210 => 2204,3121 => 2204,3904 => 2204,3208 => 2204,3882 => 2205,3468 => 2205,
  2486 => 2205,3427 => 2205,2530 => 2205,2528 => 2205,2534 => 2205,4064 => 2205,3889 => 2205,3901 => 2205,3570 => 2205,3552 => 2205,4594 => 2205,4597 => 2205,
  4079 => 2205,2117 => 2205,4052 => 2205,4049 => 2205,3785 => 2205,4201 => 2205,4192 => 2205,4207 => 2205,3800 => 2205,2450 => 2205,3542 => 2205,4091 => 2205,
  2426 => 2205,2424 => 2205,4097 => 2205,3474 => 2205,2999 => 2205,3111 => 2205,4858 => 2205,2115 => 2205,3433 => 2205,4638 => 2205,4641 => 2205,4647 => 2205,
  4644 => 2205,2520 => 2205,2518 => 2205,3564 => 2205,3421 => 2205,2549 => 2205,3913 => 2205,2508 => 2205,2506 => 2205,3907 => 2205,3821 => 2205,3734 => 2206,
  3084 => 2206,2319 => 2206,2317 => 2206,2311 => 2206,2309 => 2206,2289 => 2206,2287 => 2206,2297 => 2206,2295 => 2206,3849 => 2206,3197 => 2206,2731 => 2206,
  2729 => 2206,2654 => 2206,4836 => 2206,2638 => 2206,4833 => 2206,3117 => 2206,4228 => 2206,4231 => 2206,2131 => 2206,2124 => 2206,3174 => 2206,4849 => 2206,
  4846 => 2206,3430 => 2207,3003 => 2207,2995 => 2207,4327 => 2207,3834 => 2207,3837 => 2207,3843 => 2207,3846 => 2207,3923 => 2207,3246 => 2207,3954 => 2207,
  3892 => 2207,4106 => 2207,4100 => 2207,3827 => 2207,4198 => 2207,3486 => 2207,2466 => 2207,2470 => 2207,2476 => 2207,2478 => 2207,2468 => 2207,2474 => 2207,
  2464 => 2207,2472 => 2207,3244 => 2207,3875 => 2207,2516 => 2207,2514 => 2207,2404 => 2207,3721 => 2207,4600 => 2207,2561 => 2207,3170 => 2207,3033 => 2207,
  3436 => 2207,3797 => 2207,3926 => 2207,3872 => 2207,3854 => 2208,2301 => 2208,2299 => 2208,2303 => 2208,3545 => 2208,4412 => 2208,3029 => 2208,3031 => 2208,
  3027 => 2208,3863 => 2209,3860 => 2209,3125 => 2209,3550 => 2209,2097 => 2209,3869 => 2209,3758 => 2209,4409 => 2209,3150 => 2210,3156 => 2210,2598 => 2210,
  2596 => 2210,4174 => 2210,4177 => 2210,4088 => 2210,4085 => 2210,2103 => 2210,2100 => 2210,2592 => 2210,2589 => 2210,3305 => 2210,2587 => 2210,2584 => 2210,
  3202 => 2210,3204 => 2210,2938 => 2211,4418 => 2212,2315 => 2212,2313 => 2212,2293 => 2212,2291 => 2212,2285 => 2212,2283 => 2212,3851 => 2212,4842 => 2212,
  4839 => 2212,4222 => 2212,4225 => 2212,2135 => 2212,2133 => 2212,2928 => 2212,2926 => 2212,2658 => 2212,3119 => 2212,3739 => 2212,2656 => 2212,3176 => 2212,
  4855 => 2212,4852 => 2212,3195 => 2212,2997 => 2213,3752 => 2214,3548 => 2214,3755 => 2214,2094 => 2214,2088 => 2214,3866 => 2214,3082 => 2214,3857 => 2214,
  2940 => 2215,
);
/**/

/*
echo 'ALMOST...';
foreach($ProductCollection as $pid => $prod)
{
    $prod['type']=$ProductTypes[$pid+0];
    $prod['tags']=implode(',',$ProductTypes[$pid+0]['tags']);
    
    $p = new products('products');
    $p->data = $prod;
    $p->save();
}

echo 'CLEAR';

//var_dump($ProdTree);
//$class = new ReflectionClass('products');
//var_dump($class->getStaticProperties());

/*



*/
/*
require_once __DIR__.'/../composition/layout.php';

$Navigation->content = GetFile($StaticMarkupPath.'service_nav.htm');
$SigninModal->content = GetFile($StaticMarkupPath.'service_signin.htm');

if(
 $_SERVER['HTTP_REFERER'] == $RemoteBase || 
 $_SERVER['HTTP_REFERER'] == $RemoteBase . '/' ||
 strpos($_SERVER['HTTP_REFERER'], $RemoteBase . '/portal') !== false ||	//strong bool check in case position is at char 0
 strpos($_SERVER['HTTP_REFERER'], 'portal'.$RemoteBase) !== false 	
)
{
        //{( Tsoammmwieell97 != $kainJump7 )
        $user=LoadObject('operator',['target'=>'operator','method'=>'WHERE keyauth = \''. hash('SHA512',$_POST['authen-key'].'HF+!(+!(HJCN*#(Y@&').'\'' ]);
        
        if(count($user) == 0) $Content->content = '<li><h2 style="color:red"> Login failure! You may or may not be stabbed repeatedly for this.</h2></li>';
        else $Content->content = '<li><h2>Welcome, site operator '.$user->data['operator'].'! You have logged in successfully.</h2></li>';

}



$Portal->publish();
*/
?>
</pre>
</body>
</html>