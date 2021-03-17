<?php

function getHeader()
{
    foreach ($mainMenu as $menuItem) {

        $currentUrl = isCurrentUrl($menuItem['path']); // true либо false

        if ($currentUrl) { // как только условие станет true то в $titlePage запишется текущий title

            $titlePage = $menuItem['title'];

        }
    }
}
