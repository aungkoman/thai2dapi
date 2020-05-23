<?php 
    include('simple_html_dom.php');
    $inputUrl = "https://marketdata.set.or.th/mkt/marketsummary.do";
    $html = file_get_html($inputUrl);
    $i = 0;
    $numArr = array();
    foreach($html->find('td') as $e){
        $i++;
        if($i > 8 ) break;
        $numArr[] = $e->innertext;
    }
    $result = array();

    $first = str_split($numArr[1]);
    $second = str_split($numArr[7]);
    $firstNum = $first[count($first)-1];
    $pointPos = strpos($numArr[7],'.');
    $secondNum = $second[$pointPos-1];

    
    $result["SET"] = $numArr[1];
    $result["VAL"] = $numArr[7];
    $result["NUM"] = $firstNum.$secondNum;

    // update the number per minutes 
    echo json_encode($result);
?>