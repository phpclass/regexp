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
/*
 * http://php.net/manual/ru/ref.pcre.php
 * https://ru.wikipedia.org/wiki/%D0%A0%D0%B5%D0%B3%D1%83%D0%BB%D1%8F%D1%80%D0%BD%D1%8B%D0%B5_%D0%B2%D1%8B%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F
 *
 * получить массив только с числами
 * http://php.net/manual/ru/ref.array.php
 */