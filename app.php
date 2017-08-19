<?php
//require ('get.class.php');
require_once ('get.class.php');
//include ('geta.class.php');
//include_once ('get.class.php');

$html = getHtml('http://rp5.ua/Weather_in_Dnipro_(Dnipropetrovsk)');

$block = getBlock(
    '/id\=\"forecastTable\".+?\/table/s',

    $html);
print_r(getTemperatureArray($block[0]));
