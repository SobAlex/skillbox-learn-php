<?php

include $_SERVER['DOCUMENT_ROOT'] . '/functions/show_menu.php'; // 2. чтобы меню заработало подключаем функцию

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/styles/styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
</head>

<body>

    <div class="header">
        <div class="logo"><img src="/img/logo.png" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
    </div>

    <div class="clear">
        <?php

        include $_SERVER['DOCUMENT_ROOT'] . '/templates/menu_header.php';  // 1. подключаем преобразованное меню в разметку (в файле вызов функции)

        ?>
    </div>