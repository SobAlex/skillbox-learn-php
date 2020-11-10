<?php

function  isCurrentUrl($path)
{
    var_dump(parse_url($path, PHP_URL_PATH));
}

isCurrentUrl($_SERVER['REQUEST_URI']);
