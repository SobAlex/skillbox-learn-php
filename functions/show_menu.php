<?php

error_reporting(-1);

require $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php'; // подключили меню

// сортировка меню
function arraySort($x, $y, $key = 'sort') // вспомогательная функция для сортировки меню
{
    return $x[$key] <=> $y[$key];
}

// вывод готового меню
function showMenu($classMenu)
{
    require $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php'; // подключили меню
    usort($mainMenu, 'arraySort');
    require $_SERVER['DOCUMENT_ROOT'] . '/templates/menu.php';     // подключаем разметку меню
}

//обрезка строки
function cutString($array, $length = 3) // вспомогательная функция для обрезки строк
{
    foreach ($array as $key) {
        $strTitle = $key['title']; // перебираем массив ищем значение title
        mb_substr($strTitle, $length); // передаем этот title в функцию, которая возвращает готовый title
    }
}

echo cutString($mainMenu); // не выводит ничего
