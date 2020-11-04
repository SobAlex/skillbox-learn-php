<?php

// производим какие-то действия над контентом. в данном случае преобразуем меню

function cutString($array, $length = 12, $appends = '...'): string
{
}

function arraySort(array $array, $key = 'sort', $sort = SORT_ASC): array
{
}

function showMenu($classMenu)
{
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php';    // подключаем само меню
}
