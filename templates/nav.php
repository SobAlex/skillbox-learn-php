<ul class="<?= $classMenu ?>">

    <?php

    for ($i = 0; $i < count($mainMenu); $i++) {

        $path = $mainMenu[$i]['path'];
        $classLink = strpos($_SERVER["REQUEST_URI"], $path) !== false ? 'active' : '';

    ?>

        <li>
            <a class="<?php echo $classLink; ?>" href="<?= $mainMenu[$i]['path']; ?>"><?= cutString($mainMenu[$i]['title']); ?></a>
        </li>

    <?php
    }
    ?>

</ul>
<br>