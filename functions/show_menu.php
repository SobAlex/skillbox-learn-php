<?php

function cutString($array, $length = 12, $appends = '...'): string  // функция с 3-мя аргументами. {
{
    for ($i = 0; $i <= count($array); $i++) {
        $linkTitle = $array[$i]['title']; // прогоняем каждый title

        if (strlen($linkTitle) > $length) { // если какойто title больше 12 символов
            $linkTitle = substr($linkTitle, 0, $length); // то создаем новую переменную с обрезанной строкой до 12 символов
            $cutTitle = $linkTitle . $appends; // затем конкатенируем с окончанием '...'
        }

        echo $cutTitle; // проверка вывода нового title
    }

    echo $cutTitle;
};

function showMenu($mainMenu)

{
    include $_SERVER['DOCUMENT_ROOT'] . '/include/main_menu.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/menu.php';
    cutString($mainMenu);
}
