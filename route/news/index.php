<?php

include $_SERVER['DOCUMENT_ROOT'] . '/functions/parse_url.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';

foreach ($mainMenu as $menuItem) {

    if ($menuItem['path'] == $currentUrl) {
        $menuItem['title'];

?>
        <h1><?= $menuItem['title'] ?></h1>
<?php

    }
}

include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';

?>