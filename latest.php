<?php 

    include('simple_html_dom.php');
 

    // get DOM from URL or file
    // https://channelmyanmar.org/category/adult/
    // http://channelmyanmar.org/


    $url = "https://channelmyanmar.org/";

    // category/adult/
    $category = (string) isset($_GET['category']) ? $_GET['category'] : "";
    if($category != "" ) $url = $url."category/".$category."/";

    // page no
    $page_no = (int) isset($_GET['page_no']) ? $_GET['page_no'] : 0;
    if($page_no > 0 ) $url = $url."page/".$page_no."/";


    $html = file_get_html($url);
    
    

    // get movie name list 
    $titles = array();
    $descs= array();
    $images= array();
    $postlink = array();
    $returndata = array();

    foreach($html->find('div.fixyear') as $title){
        $titles[] =  $title->plaintext;
    }
    foreach($html->find('span.ttx') as $desc){
        $descs[] = $desc->plaintext;
    }
    foreach($html->find('div.image img') as $img){
        $images[] = $img->src;
    }
    foreach($html->find('div.boxinfo a') as $link){
        $postlink[] =  $link->href;
    }

    for($i = 0 ; $i < count($titles); $i++){
        $moviedata = array(
            "title"=>$titles[$i],
            "image"=>$images[$i],
            "description"=>$descs[$i],
            "link"=>$postlink[$i]
        );
        $returndata[] = $moviedata;
        // echo "<h4>".$titles[$i]."</h4>";
        // echo "<img src='".$images[$i]."' />";
        // echo "<p>".$descs[$i]."</p>";
        // echo "<code>".$postlink[$i]."</code>";
    }

    echo json_encode($returndata)
    
?>