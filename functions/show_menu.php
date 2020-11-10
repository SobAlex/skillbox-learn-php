<?php

// сортировка меню
function arraySort($array, $key = 'sort', $sort = SORT_ASC): array
{
    foreach ($array as $key => $value) {
    }
    sort($array);
}

arraySort($mainMenu);

// обрезка строки
function cutString($array, $length = 12, $appends = '...'): string
{
}

// вывод готовового меню
function showMenu($classMenu)
{
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php'; // подключаем массив меню
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/menu.php';     // подключаем разметку меню
}
