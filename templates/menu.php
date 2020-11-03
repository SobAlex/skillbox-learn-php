<ul class="<?= $classMenu ?>">

    <?php
    for ($i = 0; $i < count($mainMenu); $i++) {
    ?>

        <li><a href="<?= $mainMenu[$i]['path']; ?>"><?= $mainMenu[$i]['title']; ?></a></li>

    <?php
    }
    ?>

</ul>

<br>