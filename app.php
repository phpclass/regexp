<?php
//require ('get_class.php');
require_once ('get_class.php');
//include ('get_class.php');
//include_once ('get_class.php');
function getHtml($url){
    $html = file_get_contents($url);
    return $html;
}

function getBlock($regex , $subject){
    $array = [];
    preg_match($regex,$subject,$array);
    return $array;

}

function getTemperatureArr($regex , $subject){
    $array = [];
    preg_match_all($regex,$subject,$array);
    return $array;
}

$html = getHtml("http://rp5.ua/Weather_in_Dnipro_(Dnipropetrovsk)");
$block = getBlock('/id\=\"forecastTable\".+?\<\/table\>/s',$html);
//print_r($block);
//print("<br/><br/><br/><br/><br/><br/>");
$temp = getTemperatureArr('/t_0.+?(\d+)\<\/b\>/',$block[0]);
//<div class="t_0"><b>+<span class="otstup"></span>36</b>
//print_r($temp);
for($i=0;$i<22;$i++){
    print($temp[1][$i] . '<br/>');
}