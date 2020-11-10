<?php

include $_SERVER['DOCUMENT_ROOT'] . '/functions/parse_url.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';

?>
<h1><?= $mainMenu[3]['title'] ?></h1>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';

?>