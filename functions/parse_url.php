<?php

function  isCurrentUrl($path)
{
    return  parse_url($path, PHP_URL_PATH);
}

$currentUrl = isCurrentUrl($_SERVER['REQUEST_URI']);
