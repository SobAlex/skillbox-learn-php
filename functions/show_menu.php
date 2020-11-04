<?php

// производим какие-то действия над контентом. в данном случае преобразуем меню

include $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php'; // подключаем массив меню

// сортировка меню
function arraySort($array, $key = 'sort', $sort = SORT_ASC): array
{
}

// обрезка строки
function cutString($array, $length = 12, $appends = '...'): string
{
}

function showMenu($mainMenu)
{
    arraySort($mainMenu); // вызов сортировки
    cutString($mainMenu); // вызов обрезки

    include $_SERVER['DOCUMENT_ROOT'] . '/templates/menu.php';     // подключаем разметку меню

}

showMenu($mainMenu); // вывод готового меню гдето в разметке
