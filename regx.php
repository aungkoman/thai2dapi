


<?php
$url="http://www.solidfiles.com/v/Gv63aV8v5pyeX";
$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_URL,$url);
 // $result=curl_exec($ch);

// echo file_put_contents("test.txt",$result);



echo "<h2>Stream Url</h2>";
$sampleText = '<script>angular.module("sf.viewer").constant("viewerOptions", {"mimetype":"video/mp4","splashUrl":"https://i.solidfiles.com/Gv63aV8v5pyeX/LwYaRMyAL7GNr.jpg","streamUrl":"https://s05-stream.solidfilesusercontent.com/stream/YTFmYzhmY2U1ZWNlOTI5ZjM4OGQ1NzY4ZTY5OWZiOTk5NzJlNDg4YzoxamFOalM6Vk9hbHU1bDVrMUEzTFJhOTRvLU1xT2JZZG84/Gv63aV8v5pyeX.mp4","nodeName":"a270.mp4","filetype":"video","shareUrl":"http://www.solidfiles.com/v/Gv63aV8v5pyeX","nodeId":"1684777912395132551","downloadUrl":"https://s05.solidfilesusercontent.com/YTFmYzhmY2U1ZWNlOTI5ZjM4OGQ1NzY4ZTY5OWZiOTk5NzJlNDg4YzoxamFOalM6Vk9hbHU1bDVrMUEzTFJhOTRvLU1xT2JZZG84/Gv63aV8v5pyeX/a270.mp4","ticket":"YTFmYzhmY2U1ZWNlOTI5ZjM4OGQ1NzY4ZTY5OWZiOTk5NzJlNDg4YzoxamFOalM6Vk9hbHU1bDVrMUEzTFJhOTRvLU1xT2JZZG84","embedUrl":"http://www.solidfiles.com/e/Gv63aV8v5pyeX","subtitles":[]});</script>';
var_dump($sampleText);
$streamUrl = array();
preg_match( '/"streamUrl":"([^"]*)"/i', $sampleText, $streamUrl ) ;
print_r( $streamUrl[1] ) ;

echo "<h2>Download Url</h2>";
$downloadUrl = array();
preg_match( '/"downloadUrl":"([^"]*)"/i', $sampleText, $downloadUrl ) ;
print_r( $downloadUrl[1] ) ;

/*


// echo $result;
// var_dump($result);
// print_r($result);
 
// Declare a variable and initialize it 
$geeks = 'GeeksforGeeks'; 

$sampleText = '<video  src="https://s02-stream.solidfilesusercontent.com/stream/ZmJmY2M3NzA4YTVmZGZhMTY0ODhhNzMwODhmM2FjYzM3NGE4M2YyYzoxamFPTUM6OWJzT084alNYeGh4U2tBbWtmb0hJRnNHb2k4/Gv63aV8v5pyeX.mp4"><source src="https://s02-stream.solidfilesusercontent.com/stream/ZmJmY2M3NzA4YTVmZGZhMTY0ODhhNzMwODhmM2FjYzM3NGE4M2YyYzoxamFPTUM6OWJzT084alNYeGh4U2tBbWtmb0hJRnNHb2k4/Gv63aV8v5pyeX.mp4" type="video/mp4"></video>';
  
// Use preg_match() function to check match 
preg_match('/(Geeks)(for)(Geeks)/', $geeks, $matches, PREG_OFFSET_CAPTURE); 
  
// Display matches result 
print_r($matches); 

echo "<br><br><br>";
preg_match('/src/',$result,$videoMatch,PREG_OFFSET_CAPTURE);
print_r($videoMatch);

echo "<h2>Video </h2>";
$video = array();
preg_match( '/video/', $sampleText, $video ) ;
print_r( $video ) ;


echo "<h2>src list </h2>";
$doc = new DOMDocument();
    @$doc->loadHTML($result);
    $imageTags = $doc->getElementsByTagName('p');
    print_r($imageTags);

    foreach($imageTags as $tag) {
        echo $tag->getAttribute('src');
    }






echo "<h2>Img Src</h2>";
$foo = '<img class="foo bar test" title="test image" src="http://example.com/img/image.jpg" alt="test image" width="100" height="100" />';
    $array = array();
    preg_match( '/src="([^"]*)"/i', $foo, $array ) ;
    print_r( $array[1] ) ;


*/

/*
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

    */

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