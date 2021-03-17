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
function arraySort($key = 'sort') // вспомогательная функция для сортировки меню
{
    $sortBy = SORT_ASC;
    return function ($a, $b) use ($key, $sortBy) {
        return $sortBy == SORT_ASC ? $a[$key] <=> $b[$key]: $b[$key] <=> $a[$key];
    };
}

// обрезка строки
// mb_strimwidth ( string $linkTitle , int $start = 0 , int $length , string $appends , string|null $encoding = null ) : string
function cutString($linkTitle, $length = 12, $appends = '...'): string  // функция с 3-мя аргументами
{
        if (mb_strlen($linkTitle) > $length) { // если какойто title больше 12 символов
            $cutLinkTitle = mb_substr($linkTitle, 0, $length); // то создаем новую переменную с обрезанной строкой до 12 символов
            $newLinkTitle = $cutLinkTitle . $appends; // затем конкатенируем с окончанием '...'
        } else {
            $newLinkTitle = $linkTitle;
        }

    return $newLinkTitle; // возврат новой строки

};

//debug($mainMenu);

// вывод отсортированного меню
function showMenu($classMenu)
{
    require $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php'; // массив меню
    usort($mainMenu, arraySort());
    require $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.php';  // разметка навигации (nav)
}
