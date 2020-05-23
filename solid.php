


<?php
header('Content-Type: application/json');
$url = (string) isset($_GET['url']) ? sanitize_str($_GET['url']) : "http://www.solidfiles.com/v/Gv63aV8v5pyeX";
$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
$url = str_replace('https://', 'http://', $url ); 
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_URL,$url);
$result=curl_exec($ch);

$return_data = array();
$return_data['status'] = false;
$return_data['orgUrl'] = $url;

//echo "<h2>Stream Url</h2>";
$streamUrl = array();
preg_match( '/"streamUrl":"([^"]*)"/i', $result, $streamUrl ) ;
// print_r( $streamUrl[1] ) ;
if(count($streamUrl) > 0 ) {
    $return_data['status'] = true;
    $return_data['streamUrl'] = $streamUrl[1];
}

 
//echo "<h2>Download Url</h2>";
$downloadUrl = array();
preg_match( '/"downloadUrl":"([^"]*)"/i', $result, $downloadUrl ) ;
//print_r( $downloadUrl[1] ) ;
if(count($downloadUrl) > 0 ){
    $return_data['status'] = true;
    $return_data['downloadUrl'] = $downloadUrl[1];
} 

echo json_encode($return_data);

function sanitize_str($data,$msg = "message"){
    $data = filter_var($data, FILTER_SANITIZE_STRING);
    if($data == "" ) return_fail("bad string!",$msg);
    return $data;
}
function return_fail($msg,$data=array()){
    $return_obj['status'] = false;
    $return_obj['msg'] = $msg;
    $return_obj['data'] = $data;
    //return $return_obj;
    echo json_encode($return_obj);
    exit;
}
?>