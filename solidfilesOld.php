


<?php

$url="http://www.solidfiles.com/v/Gv63aV8v5pyeX";
$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_URL,$url);
$result=curl_exec($ch);
//echo "<script> console.log('".$result."'); </script>";
// echo $result;
var_dump($result);
// print_r($result);
$dom = new domDocument();
    @$dom->loadHTML($result);
    $dom->preserveWhiteSpace = false;
    //$tables = $dom->getElementsByTagName('table'); 
    $videos = $dom->getElementsByTagName('video');
    print_r($videos);

    

/*
    include('simple_html_dom.php');
 

    // get DOM from URL or file
    // https://channelmyanmar.org/category/adult/
    // http://channelmyanmar.org/

    $inputUrl = "https://www.solidfiles.com/v/Gv63aV8v5pyeX";

    // outputUrl => #vjs_video_3_html5_api . src attribute

    $data = file_get_contents($inputUrl); 
    $dom = new domDocument();
    @$dom->loadHTML($data);
    $dom->preserveWhiteSpace = false;
    //$tables = $dom->getElementsByTagName('table'); 
    $videos = $dom->getElementsByTagName('video');
    print_r($videos);




    $html = file_get_html($inputUrl);


    //to fetch all images from a webpage
    $images = array();
    foreach($html->find('p') as $img) {
    $images[] = $img->plaintext;
    }
    print_r($images);

    */

    /*


    echo "<h2>Hello CM</h2>";
    echo $html->plaintext;


    //$outputUrl = $html->find('#vjs_video_3_html5_api',0)->src;
    $h1PlainText = $html->find('h1',0)->plaintext;
    //$video = $html->find('video',0)->src;
    $videos = [];
    foreach($html->find('video') as $video){
        $videos[] =  $video->src;
    }

    echo "videos => ".json_encode($videos);


    echo "<p>Input Url : ".$inputUrl."</p>";
    echo "<p>h1PlainText Url : ".$h1PlainText."</p>";
    //echo "<p>video Url : ".$video."</p>";

    */
?>