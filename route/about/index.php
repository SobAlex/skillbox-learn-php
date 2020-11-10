<?php

include $_SERVER['DOCUMENT_ROOT'] . '/functions/parse_url.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/main_menu.php';
//include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';

for ($i = 0; $i < count($mainMenu); $i++) {

?>

    <h1><?= $mainMenu[$i]['title'] ?></h1>

<?php

}

//include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';

?>