<?php
function getHtml($url)
{
    $html = file_get_contents($url);
    return $html;
}

function getBlock($regex, $subject)
{
    $array = [];
    preg_match($regex, $subject, $array);
    return $array;

}

function getTemperatureArray($block)
{
    $array = [];
    $regex = '/\+\<span.+class\=\"otstup\"\>\<\/span\>.+?\<\/b\>/s';
    preg_match_all($regex, $block, $array);
    return $array;
}