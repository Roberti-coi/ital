<?php
session_start();
include '../admin/config.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $raw_login = trim($_POST['login'] ?? '');
    $raw_email = trim($_POST['email'] ?? '');
    $raw_tel = trim($_POST['tel'] ?? '');
    $raw_pass = trim($_POST['pass'] ?? '');

    $stmt = $conn->prepare("SELECT * FROM `users` WHERE `login` = ?");
    $stmt->bind_param("s", $raw_login);
    $stmt->execute();
    $check = $stmt->get_result();

    if (mysqli_num_rows($check) > 0) {
        $error = "Логин уже занят";
    } else {
        $hashed_pass = password_hash($raw_pass, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO `users` (`login`, `pass`, `email`, `tel`, `role`) VALUES(?, ?, ?, ?, 1)");
        $stmt->bind_param("ssss", $raw_login, $hashed_pass, $raw_email, $raw_tel);

        if ($stmt->execute()) {
            $user_id = mysqli_insert_id($conn);
            setcookie('id', $user_id, time() + 3600, '/');
            setcookie('login', $raw_login, time() + 3600, '/');
            setcookie('role', 1, time() + 3600, '/');

            header("Location: /");
            exit();
        } else {
            $error = "Ошибка при регистрации";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../style/style.css" />
</head>

<body>
    <header class="container">
        <?php include "../modules/nav.php" ?>
    </header>

    <main>
        <div class="login-container">
            <h1 class="form-title">Регистрация</h1>

            <?php if ($error): ?>
                <div class="error-message"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form class="login-form" method="POST" action="">
                <div class="form-group">
                    <label for="login">Логин</label>
                    <input type="text" id="login" name="login"
                        value="<?= htmlspecialchars($raw_login ?? '') ?>"
                        placeholder="Введите ваш логин" required>
                </div>

                <div class="form-group">
                    <label for="email">Электронная почта</label>
                    <input type="email" id="email" name="email"
                        value="<?= htmlspecialchars($raw_email ?? '') ?>"
                        placeholder="example@mail.ru" required>
                </div>

                <div class="form-group">
                    <label for="tel">Телефон</label>
                    <input type="tel" id="tel" name="tel"
                        value="<?= htmlspecialchars($raw_tel ?? '') ?>"
                        placeholder="+7 (777) 541-77-77" required>
                </div>

                <div class="form-group">
                    <label for="pass">Пароль</label>
                    <input type="password" id="pass" name="pass"
                        placeholder="Придумайте пароль" required>
                </div>

                <button type="submit" class="submit-btn">Зарегистрироваться</button>

                <div class="register-link">
                    Уже есть аккаунт? <a href="/pages/login.php">Войти</a>
                </div>
            </form>
        </div>
    </main>

    <script>
        document.getElementById('tel').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');

            if (value.length > 0) {
                let formatted = '+7';
                if (value.length > 1) formatted += ' (' + value.substring(1, 4);
                if (value.length > 4) formatted += ') ' + value.substring(4, 7);
                if (value.length > 7) formatted += '-' + value.substring(7, 9);
                if (value.length > 9) formatted += '-' + value.substring(9, 11);
                e.target.value = formatted;
            }
        });
    </script>
</body>

</html>