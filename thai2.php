<?php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');
 

    // get DOM from URL or file
    // https://channelmyanmar.org/category/adult/
    // http://channelmyanmar.org/

    /* sample 
    $html = file_get_html('https://channelmyanmar.org/category/adult/');

    // get movie name list 
    $titles = array();
    $descs= array();
    $images= array();
    $postlink = array();

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
        echo "<h4>".$titles[$i]."</h4>";
        echo "<img src='".$images[$i]."' />";
        echo "<p>".$descs[$i]."</p>";
        echo "<code>".$postlink[$i]."</code>";
    }
    */


    // https://channelmyanmar.org/mercy-black-2019/
    // https://channelmyanmar.org/tvshows/house-m-d/
    $detailhtml = file_get_html('https://channelmyanmar.org/mercy-black-2019/'); // https://channelmyanmar.org/tvshows/house-m-d/
    // title, image, description, downloadlink
    
    // foreach($detailhtml->find('h1[itemprop=name]') as $detailTitle){
    //     echo $detailTitle->plaintext."<br";
    // }

    $moviedata = array();
    $moviedata['title'] = $detailhtml->find('h1[itemprop=name]',0)->plaintext;
    $moviedata['description'] =  $detailhtml->find('div[itemprop=description]',0)->plaintext;
    $moviedata['image'] =  $detailhtml->find('img[itemprop=image]',0)->src;
    $moviedata['link'] = 'https://channelmyanmar.org/mercy-black-2019/';

    echo json_encode($moviedata);




/*

    // get DOM from URL or file
    $html = file_get_html('http://channelmyanmar.org/');

    // find all link
    foreach($html->find('a') as $e) 
        echo $e->href . '<br>';

    // find all image
    foreach($html->find('img') as $e)
        echo $e->src . '<br>';

    // find all image with full tag
    foreach($html->find('img') as $e)
        echo $e->outertext . '<br>';

    // find all div tags with id=gbar
    foreach($html->find('div#gbar') as $e)
        echo $e->innertext . '<br>';

    // find all span tags with class=gb1
    foreach($html->find('span.gb1') as $e)
        echo $e->outertext . '<br>';

    // find all td tags with attribite align=center
    foreach($html->find('td[align=center]') as $e)
        echo $e->innertext . '<br>';
        
    // extract text from table
    echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';

    // extract text from HTML
    echo $html->plaintext;
*/
?>