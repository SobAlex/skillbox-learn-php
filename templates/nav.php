<ul class="<?= $classMenu ?>">

    <?php

    foreach ($menuItems as $menuItem) {

        ?>

        <li>
            <a class="<?= isCurrentUrl($menuItem['path']) ? 'active' : '' ?>"
               href="<?= $menuItem['path']; ?>"><?= cutString($menuItem['title']); ?></a>
        </li>

        <?php
    }
    ?>

</ul>
<br>