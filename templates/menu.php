<ul class="<?= $classMenu ?>">

    <?php
    for ($i = 0; $i < count($mainMenu); $i++) {
    ?>

        <li><a class="active" href="<?= $mainMenu[$i]['path'] ?>"><?= cutString() ?></a></li>

    <?php
    }
    ?>

</ul>

<br>