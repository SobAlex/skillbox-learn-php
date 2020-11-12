<ul class="<?= $classMenu ?>">

    <?php
    for ($i = 0; $i < count($mainMenu); $i++) {
    ?>

        <li><a class="active" href="<?= $mainMenu[$i]['path'] ?>"><?= $mainMenu[$i]['title'] ?></a></li> <!-- потом сделать вывод через cutString -->

    <?php
    }
    ?>

</ul>

<br>