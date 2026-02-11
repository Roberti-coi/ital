<?php
include '../admin/config.php';

$categoryIcons = [
  'Пицца' => '../image/icons/pizza.png',
  'Супы' => '../image/icons/soup.png',
  'Гамбургеры' => '../image/icons/burger.png',
  'Десерты' => '../image/icons/dessert.png',
  'Основные' => '../image/icons/main-dish.png',
  'Салаты' => '../image/icons/salad.png',
  'Паста' => '../image/icons/pasta.png',
];

$sql = "SELECT p.name AS productName, p.description, p.price, p.image, c.name AS category
        FROM products p
        LEFT JOIN categories c ON p.category_id = c.id
        ORDER BY p.id DESC";

$result = mysqli_query($conn, $sql);
$products = [];

if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
    $products[] = [
      'productName' => $row['productName'],
      'description' => $row['description'],
      'category' => $row['category'],
      'price' => $row['price'],
      'image' => '../admin/uploaded_img/' . $row['image']
    ];
  }
}

// Получение категорий
$category_sql = "SELECT DISTINCT c.name AS category
                 FROM categories c
                 LEFT JOIN products p ON p.category_id = c.id
                 WHERE p.id IS NOT NULL
                 ORDER BY c.name";

$category_result = mysqli_query($conn, $category_sql);
$categories = [];

if ($category_result) {
  while ($row = mysqli_fetch_assoc($category_result)) {
    $categories[] = $row['category'];
  }
}

mysqli_close($conn);
?>

<!-- Фильтры по категориям с иконками-изображениями -->
<div id="category-filters">
  <button class="button-filter active" data-category="Все">
    <img src="../image/icons/all.png" alt="Все" class="filter-icon">
    <span>Все</span>
  </button>

  <?php foreach ($categories as $category):
    // Определяем путь к иконке
    $iconPath = isset($categoryIcons[$category]) ? $categoryIcons[$category] : '../image/icons/main-dish.png';
  ?>
    <button class="button-filter" data-category="<?php echo htmlspecialchars($category); ?>">
      <img src="<?php echo $iconPath; ?>" alt="<?php echo htmlspecialchars($category); ?>" class="filter-icon">
      <span><?php echo htmlspecialchars($category); ?></span>
    </button>
  <?php endforeach; ?>
</div>

<!-- Поиск -->
<div id="search-container">
  <form class="search-box" onsubmit="return false;">
    <input type="text" id="search-input" placeholder="Поиск..." />
    <button type="submit" id="search-btn" aria-label="Поиск">
      <img src="../image/search.png" alt="Поиск" />
    </button>
  </form>
</div>
<!-- Контейнер для товаров -->
<div id="products"></div>

<script>
  const products = <?php echo json_encode($products); ?>;
  const categoryIcons = <?php echo json_encode($categoryIcons); ?>;
</script>
<script src="../script/product.js"></script>