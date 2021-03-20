<?php

function getHeader($mainMenu)

{

    foreach ($mainMenu as $menuItem) {

        if (isCurrentUrl($menuItem['path'])) {

            return $menuItem['title'];

        }

    }

    return "Страница не найдена";

}

?>

<h1><?= getHeader($mainMenu) ?></h1>
