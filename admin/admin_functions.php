<?php
@include 'config.php';

function getCategories($conn) {
    $categories_result = mysqli_query($conn, "SELECT * FROM categories");
    $categories = [];
    while ($category = mysqli_fetch_assoc($categories_result)) {
        $categories[] = $category;
    }
    return $categories;
}

function displayCategories($categories, $selected_id = null) {
    echo '<option value="" disabled selected>Выберите категорию</option>';
    foreach ($categories as $category) {
        $selected = ($selected_id == $category['id']) ? 'selected' : '';
        echo "<option value='{$category['id']}' {$selected}>{$category['name']}</option>";
    }
}

function displayMessages($message) {
    if (isset($message)) {
        foreach ($message as $msg) {
            echo '<span class="message">' . $msg . '</span>';
        }
    }
}

function addProduct($conn) {
    if (isset($_POST['add_product'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_description = $_POST['product_description'];
        $category_id = $_POST['category_id'];
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = 'uploaded_img/' . $product_image;

        if (empty($product_name) || empty($product_price) || empty($product_description) || empty($product_image)) {
            return ['error' => 'Пожалуйста, заполните все поля'];
        } else {
            $insert = "INSERT INTO products (name, price, description, image, category_id) VALUES ('$product_name', '$product_price', '$product_description', '$product_image', '$category_id')";
            $upload = mysqli_query($conn, $insert);
            if ($upload) {
                move_uploaded_file($product_image_tmp_name, $product_image_folder);
                return ['success' => 'Новый товар успешно добавлен'];
            } else {
                return ['error' => 'Не удалось добавить товар'];
            }
        }
    }
    return null;
}

function updateProduct($conn, $id) {
    if (isset($_POST['update_product'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_description = $_POST['product_description'];
        $category_id = $_POST['category_id'];
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = 'uploaded_img/' . $product_image;

        if (empty($product_name) || empty($product_price) || empty($product_description)) {
            return ['error' => 'Пожалуйста, заполните все поля!'];
        } else {
            if (!empty($product_image)) {
                $update_data = "UPDATE products SET name='$product_name', price='$product_price', description='$product_description', image='$product_image', category_id='$category_id' WHERE id='$id'";
            } else {
                $update_data = "UPDATE products SET name='$product_name', price='$product_price', description='$product_description', category_id='$category_id' WHERE id='$id'";
            }

            $upload = mysqli_query($conn, $update_data);

            if ($upload) {
                if (!empty($product_image)) {
                    move_uploaded_file($product_image_tmp_name, $product_image_folder);
                }
                header('Location: admin_page.php');
                exit();
            } else {
                return ['error' => 'Произошла ошибка при обновлении!'];
            }
        }
    }
    return null;
}

function deleteProduct($conn) {
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM products WHERE id = $id");
        header('location:admin_page.php');
        exit();
    }
}

function getAllProducts($conn) {
    return mysqli_query($conn, "SELECT p.*, c.name AS category_name FROM products p LEFT JOIN categories c ON p.category_id=c.id");
}

function getProductById($conn, $id) {
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id='$id'");
    return mysqli_fetch_assoc($result);
}
?>