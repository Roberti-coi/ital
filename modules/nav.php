<div class="menu">
    <input type="checkbox" id="burger-checkbox" class="burger-checkbox" />
    <label for="burger-checkbox" class="burger"></label>
    <ul class="menu-list">
        <li><a href="../index.php" class="menu-item">Главная</a></li>
        <li><a href="./pages/menu.php" class="menu-item">Меню</a></li>

        <?php if ($_COOKIE['id'] == ''): ?>
            <div>
                <li><a href="/pages/reg.php" class="menu-item">Регистрация</a></li>
                <li><a href="/pages/auth.php" class="menu-item">Авторизация</a></li>
            </div>
        <?php else: ?>
            <li><a href="/pages/bron.php" class="menu-item">Забронировать</a></li>
            <?php if (isset($_COOKIE['role']) && $_COOKIE['role'] == '2'): ?>
                <li><a href="/admin/admin_page.php" class="menu-item">Админ-панель</a></li>
            <?php endif; ?>

            <li><a href="/modules/exit.php" class="menu-item">Выход</a></li>
        <?php endif; ?>

        <div class="container-nav">
            <h2 class="text-t">7(777) 541-77-77</h2>
            <p class="text-d">Есть вопросы? Звоните нам!</p>
        </div>
    </ul>
</div>