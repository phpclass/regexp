<?php

require_once ('get.class.php');

$html = getHtml('http://rp5.ua/Weather_in_Dnipro_(Dnipropetrovsk)');
//getBlock('/id\=\"forecastTable".+?\/table/s', $html);
$block = getBlock('/id\=\"t_temperature".+?\/tr/s', $html);
print_r(getTemperatureArray($block[0]));