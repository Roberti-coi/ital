<?php
session_start();
include '../admin/config.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login'] ?? '');
    $raw_pass = trim($_POST['pass'] ?? '');

    $stmt = $conn->prepare("SELECT * FROM `users` WHERE `login` = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($raw_pass, $user['pass'])) {
            setcookie('id', $user['id'], time() + 3600, '/');
            setcookie('login', $user['login'], time() + 3600, '/');
            setcookie('role', $user['role'], time() + 3600, '/');

            header('Location: /');
            exit();
        } else {
            $error = 'Неверный логин или пароль';
        }
    } else {
        $error = 'Неверный логин или пароль';
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <header class="container">
        <?php include "../modules/nav.php" ?>
    </header>

    <main class="container">
        <div class="login-container">
            <h1 class="form-title">Авторизация</h1>

            <?php if ($error): ?>
                <div class="error-message"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form class="login-form" method="POST">
                <div class="form-group">
                    <label for="login">Логин</label>
                    <input type="text" id="login" name="login"
                        value="<?= htmlspecialchars($_POST['login'] ?? '') ?>"
                        placeholder="Введите ваш логин" required>
                </div>

                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="pass"
                        placeholder="Введите пароль" required>
                </div>

                <button type="submit" class="submit-btn">Войти</button>

                <div class="register-link">
                    Нет аккаунта? <a href="/pages/register.php">Зарегистрироваться</a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>