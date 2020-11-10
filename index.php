<?php
// подключение массива с данными
include $_SERVER['DOCUMENT_ROOT'] . 'includes/users.php';

$isAuth = false;

if (isset($_POST['submit'])) {
    $login = (!empty($_POST['login'])) ? $_POST['login'] : null;
    $password = (!empty($_POST['password'])) ? $_POST['password'] : null;
    $index = array_search($login, $logins, true);
    $isAuth = $index !== false && $password == $passwords[$index];
}
?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td class="left-collum-index">
            <h1>Возможности проекта —</h1>
            <p>Вести свои личные списки, например покупки в магазине, цели,
                задачи и многое другое. Делится списками с друзьями и
                просматривать списки друзей.</p>
        </td>

        <td class="right-collum-index">
            <div class="project-folders-menu">
                <ul class="project-folders-v">
                    <li class="project-folders-v-active"><a href="/?login=yes">Авторизация</a></li>
                    <li><a href="#">Регистрация</a></li>
                    <li><a href="#">Забыли пароль?</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="index-auth">

                <?php
                if (isset($_POST['submit'])) {

                    if ($isAuth) {
                        include $_SERVER['DOCUMENT_ROOT'] . '/include/success_auth.php';
                    } else {
                        include $_SERVER['DOCUMENT_ROOT'] . '/include/error_auth.php';
                    }
                }

                // условие вывода формы
                if (isset($_GET['login']) && $_GET['login'] == 'yes') :
                ?>

                    <form action="/?login=yes" method="POST">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="iat"><label for="login_id">Ведите логин</label>
                                    <input id="login_id" size="30" name="login" type="text" value="<?= $login = $_POST['login'] ?? null ?>">
                                </td>
                            </tr>

                            <tr>
                                <td class="iat"><label for="password_id">Ваш пароль:</label>
                                    <input id="password_id" size="30" name="password" type="password" value="<?= $password = $_POST['password'] ?? null ?>">
                                </td>
                            </tr>

                            <tr>
                                <td><input type="submit" value="Войти" name="submit"></td>
                            </tr>
                        </table>
                    </form>

                <?php endif; ?>

            </div>
        </td>
    </tr>
</table>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
?>