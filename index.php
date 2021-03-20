<?php

// подключение массива с данными
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/users.php'; // база пользователей

$isAuth = false; // по умолчанию авторизации нет

if (isset($_POST['submit'])) { // если нажали кнопку сабмит то выполняется код в теле
    $login = $_POST['login']; // записываем в переменную значение
    $password = $_POST['password']; // записываем в переменную значение
    $index = array_search($login, $logins, true); // осуществляет поиск значения в массиве $login-то что ищем. $logins-где ищем. true-идентичный поиск. вернется индекс элемента
    $isAuth = $index !== false && $password == $passwords[$index]; // будет true если все условия выполнятся => авторизация.
}

?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; // шапка сайта

require $_SERVER['DOCUMENT_ROOT'] . '/functions/get_header.php';

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
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/success_auth.php'; // если $isAuth true
                        } else {
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/error_auth.php'; // если $isAuth false
                        }
                    }

                    // условие вывода формы
                    if (isset($_GET['login']) && $_GET['login'] == 'yes') : // форма выводится при условии get параметров

                        ?>

                        <form action="/?login=yes" method="POST">
                            <!-- те самые get параметры -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="iat"><label for="login_id">Ведите логин</label>
                                        <input id="login_id" size="30" name="login" type="text"
                                               value="<?= $login = $_POST['login'] ?? null ?>">
                                        <!-- первично заведенные данные или null-->
                                    </td>
                                </tr>

                                <tr>
                                    <td class="iat"><label for="password_id">Ваш пароль:</label>
                                        <input id="password_id" size="30" name="password" type="password"
                                               value="<?= $password = $_POST['password'] ?? null ?>">
                                        <!-- первично заведенные данные или null-->
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