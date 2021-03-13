<?php

error_reporting(-1);

// вывод готового меню
function showMenu($classMenu)
{
    require $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php'; // массив меню
    require $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.php';     // разметка меню
}
