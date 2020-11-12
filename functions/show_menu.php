<?php

// сортировка меню
// function arraySort($array, $key = 'sort', $sort = SORT_ASC): array
// {
//     foreach ($mainMenu as $key1 => $value1) {

//         foreach ($value1 as $key2 => $value2) {
//         }
//     }
// }

// arraySort($mainMenu);

// // обрезка строки
// function cutString($array, $length = 12, $appends = '...'): string
// {
// }

// вывод готовового меню
function showMenu($classMenu)
{
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php'; // подключаем массив меню
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/menu.php';     // подключаем разметку меню
}
