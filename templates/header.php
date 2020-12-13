<?php

require $_SERVER['DOCUMENT_ROOT'] . '/functions/show_menu.php'; // функция для работы с меню

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

        showMenu('main-menu'); // вызов функции с аргументом для стилизации в header

        ?>
    </div>