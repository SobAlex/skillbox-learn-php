<?php

// сортировка меню
function arraySort($array, $key = 'sort', $sort = SORT_ASC): array
{
}

// обрезка строки
function cutString($array, $length = 12, $appends = '...'): string
{
}

// вывод гтьовового меню
function showMenu($classMenu)
{

    include $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php'; // подключаем массив меню
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/menu.php';     // подключаем разметку меню

}
