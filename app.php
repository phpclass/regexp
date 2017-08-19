<?php
function getHtml($url){
$html = file_get_contents($url);
return $html;
}

function getBlock($regex, $subject){

    $array = [];
    preg_match_all($regex, $subject, $array);
    return $array;

}

function getTemperatureArray($temp){
    $array = [];
    $regex = '/class\=\"t_0\"*class\=\"otstup\".+?\/tr/s';
    preg_match_all()


}

//print getHtml('http://rp5.ua/Weather_in_Dnipro_(Dnipropetrovsk)');

$html = getHtml('http://rp5.ua/Weather_in_Dnipro_(Dnipropetrovsk)');
//print_r(getBlock(
//    '/id\=\"forecastTable\".+?\/table/s',
//    $html)
//);
$temp = getBlock(
    '/id\=\"forecastTable\".+?\/table/s',
    $html);
print_r(
    getTemperatureArray($temp[0])
);





?>