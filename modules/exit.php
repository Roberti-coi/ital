<?php
setcookie('id', $user['id'], time() - 3600, '/');
setcookie('role', $name['role'], time() - 3600, '/');
header('Location: /');
?>