<?php
function  isCurrentUrl($url) // функция сравнения текущего path с тем что в массиве возвращает либо true or false
{
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == $url; // левая часть равна с правой то вернется true

}