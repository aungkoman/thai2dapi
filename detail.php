<?php
include('simple_html_dom.php');

$url = (string) isset($_GET['url']) ? $_GET['url'] : die("provide url in request");

$detailhtml = file_get_html($url); 



    $moviedata = array();
    $moviedata['title'] = $detailhtml->find('h1[itemprop=name]',0)->plaintext;
    $moviedata['description'] =  $detailhtml->find('div[itemprop=description]',0)->plaintext;
    $moviedata['image'] =  $detailhtml->find('img[itemprop=image]',0)->src;
    $moviedata['link'] = 'https://channelmyanmar.org/mercy-black-2019/';

    echo json_encode($moviedata);
?>