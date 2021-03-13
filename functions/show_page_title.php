<?php

require $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php'; // основное меню массив

function  isCurrentUrl($url) // функция сравнения текущего path с тем что в массиве возвращает либо true or false
{
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == $url; // левая часть равна с правой то вернется true

}

foreach ($mainMenu as $menuItem) {

    $currentUrl = isCurrentUrl($menuItem['path']); // true либо false

    if ($currentUrl) { // как только условие станет true то в $titlePage запишется текущий title

        $titlePage = $menuItem['title'];
    }
}

?>

<h1><?php echo $titlePage; ?></h1>