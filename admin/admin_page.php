<?php
@include 'admin_functions.php';



$message = [];
$result = addProduct($conn);
if ($result) {
   $message[] = isset($result['error']) ? $result['error'] : $result['success'];
}

deleteProduct($conn);

$select = getAllProducts($conn);
$categories = getCategories($conn);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Административная страница</title>
   <link rel="stylesheet" href="../style/admin.css" />
</head>

<body>
   <!-- Панель администратора -->
   <div class="admin-header">
      <div class="admin-info">
         <span>Администратор: <?= htmlspecialchars($_COOKIE['login']) ?> </span>
         <p class="admin-info">НЕ ЗАБУДЬ ВЫЙТИ ИЗ СИСТЕМЫ ПОСЛЕ ОКОНЧАНИЯ РАБОТЫ</p>
         <a href="../modules/exit.php" class="logout-btn">Выйти</a>
      </div>
   </div>

   <?php displayMessages($message); ?>

   <div class="container">
      <div class="admin-product-form-container">
         <form action="" method="post" enctype="multipart/form-data">
            <h3>Добавить новый товар</h3>
            <input type="text" placeholder="Введите название товара" name="product_name" class="box" required />
            <input type="number" placeholder="Введите цену" name="product_price" class="box" required />
            <textarea name="product_description" placeholder="Описание товара" class="box" required></textarea>

            <label>Выберите категорию:</label>
            <select name="category_id" class="box" required>
               <?php displayCategories($categories); ?>
            </select>

            <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box" required />
            <input type="submit" class="btn" name="add_product" value="Добавить товар" />
         </form>
      </div>

      <div class="product-display">
         <table class="product-display-table">
            <thead>
               <tr>
                  <th>Изображение</th>
                  <th>Название</th>
                  <th>Описание</th>
                  <th>Категория</th>
                  <th>Цена</th>
                  <th>Действия</th>
               </tr>
            </thead>
            <tbody>
               <?php while ($row = mysqli_fetch_assoc($select)): ?>
                  <tr>
                     <td><img src="uploaded_img/<?= $row['image'] ?>" height="100" alt="" /></td>
                     <td><?= htmlspecialchars($row['name']) ?></td>
                     <td><?= htmlspecialchars($row['description']) ?></td>
                     <td><?= htmlspecialchars($row['category_name']) ?></td>
                     <td><?= $row['price'] ?>₽</td>
                     <td>
                        <a href="./admin_update.php?edit=<?= $row['id'] ?>" class="btn">Изменить</a>
                        <a href="?delete=<?= $row['id'] ?>" class="btn delete" onclick="return confirm('Удалить товар?')">Удалить</a>
                     </td>
                  </tr>
               <?php endwhile; ?>
            </tbody>
         </table>
      </div>
   </div>
</body>

</html>