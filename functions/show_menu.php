<?php
error_reporting(-1);

// отладочная функция
function debug($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

// сортировка массива
function arraySort($key='sort', $sortBy = SORT_ASC) // вспомогательная функция для сортировки меню
{

    return function ($a, $b) use ($key, $sortBy) {
        return $sortBy == SORT_ASC ? $a[$key] <=> $b[$key]: $b[$key] <=> $a[$key];
    };

    return $mainMenu;
}

// обрезка строки
function cutString($linkTitle, $length = 12, $appends = '...'): string  // функция с 3-мя аргументами
{
    return mb_strimwidth($linkTitle, 0, $length, $appends);

};

//debug($mainMenu);

// вывод отсортированного меню
function showMenu($menuItems, $classMenu, $key, $sortBy)
{
    usort($menuItems, arraySort($key, $sortBy));
    require $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.php';  // разметка навигации (nav)
}
