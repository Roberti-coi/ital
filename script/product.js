// Создаем и отображаем карточки
function displayProducts(products) {
  const container = document.getElementById("products");
  container.innerHTML = "";
  products.forEach((product) => {
    const categoryClass =
      "category-" + product.category.replace(/\s+/g, "-").toLowerCase();
    const productDiv = document.createElement("div");
    productDiv.className = "product-item " + categoryClass;

    productDiv.innerHTML = `
<img src="${product.image}" alt="${product.productName}" class="product-image" />
<h3 class="product-name">${product.productName}</h3>
<p class="product-description">${product.description}</p>
<p class="product-price">Цена: ${product.price} руб.</p>
<button class="btn-buy">Купить</button>

    `;
    container.appendChild(productDiv);
  });
}

// Инициализация при загрузке
window.onload = () => {
  displayProducts(products);

  // Обработчик фильтрации
  document.querySelectorAll(".button-filter").forEach((btn) => {
    btn.addEventListener("click", () => {
      const category = btn.getAttribute("data-category");
      filterProduct(category);
      // Обновляем активность кнопок
      document
        .querySelectorAll(".button-filter")
        .forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");
    });
  });

  // Обработчик поиска
  document.getElementById("search-btn").addEventListener("click", () => {
    const query = document.getElementById("search-input").value.trim();
    searchProducts(query);
  });
};

// Функция фильтрации по категории
function filterProduct(category) {
  const items = document.querySelectorAll(".product-item");
  if (category.toLowerCase() === "все") {
    items.forEach((item) => (item.style.display = ""));
  } else {
    items.forEach((item) => {
      if (
        item.classList.contains(
          "category-" + category.replace(/\s+/g, "-").toLowerCase(),
        )
      ) {
        item.style.display = "";
      } else {
        item.style.display = "none";
      }
    });
  }
}

// Функция поиска по названию
function searchProducts(query) {
  const items = document.querySelectorAll(".product-item");
  if (query === "") {
    items.forEach((item) => (item.style.display = ""));
    return;
  }
  items.forEach((item) => {
    const title = item.querySelector("h3").innerText.toUpperCase();
    if (title.includes(query.toUpperCase())) {
      item.style.display = "";
    } else {
      item.style.display = "none";
    }
  });
}
