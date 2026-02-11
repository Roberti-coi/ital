<?php
@include 'admin_functions.php';

$id = $_GET['edit'] ?? null;

if (!$id) {
   header('Location: admin_page.php');
   exit();
}

$product = getProductById($conn, $id);
if (!$product) {
   header('Location: admin_page.php');
   exit();
}

$current_category_id = $product['category_id'];
$message = [];
$result = updateProduct($conn, $id);
if ($result) {
   $message[] = $result['error'];
}

$categories = getCategories($conn);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="../style/admin.css" />
   <title>Редактировать товар</title>
</head>

<body>
   <?php displayMessages($message); ?>

   <div class="container">
      <div class="admin-product-form-container centered">
         <form action="" method="post" enctype="multipart/form-data">
            <h3 class="title">Обновить товар</h3>
            <input type="text" class="box" name="product_name" value="<?= $product['name'] ?>" placeholder="Введите название товара" required />
            <input type="number" min="0" class="box" name="product_price" value="<?= $product['price'] ?>" placeholder="Введите цену" required />
            <textarea name="product_description" class="box" placeholder="Описание товара" required><?= $product['description'] ?></textarea>

            <label>Выберите категорию:</label>
            <select name="category_id" class="box" required>
               <?php displayCategories($categories, $current_category_id); ?>
            </select>

            <input type="file" class="box" name="product_image" accept="image/png, image/jpeg, image/jpg" />
            <input type="submit" value="Обновить товар" name="update_product" class="btn" />
            <a href="admin_page.php" class="btn delete">Вернуться назад</a>
         </form>
      </div>
   </div>
</body>

</html>