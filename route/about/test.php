<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php';


foreach ($mainMenu as $key1 => $value1) {

    foreach ($value1 as $key2 => $value2) {

        $id = 3;

        if ($value1['id'] === $id) {
            echo $value1['title'];
        }
        break;
    }
}
