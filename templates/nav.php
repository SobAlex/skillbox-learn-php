<ul class="<?= $classMenu ?>">

    <?php

    foreach ($mainMenu as $menuItem) {

        $classLink = isCurrentUrl($menuItem['path']) !== false ? 'active' : '';

        ?>

        <li>
            <a class="<?= $classLink; ?>"
               href="<?= $menuItem['path']; ?>"><?= cutString($menuItem['title']); ?></a>
        </li>

        <?php
    }
    ?>

</ul>
<br>