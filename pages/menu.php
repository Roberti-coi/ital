<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Актуальное меню ресторана. Блюда от шефа, сезонные предложения, виннная карта. Цены и фото. Бронирование столиков онлайн.">
  <meta name="keywords" content="меню ресторана, блюда, цены, заказ еды, доставка, ресторан">
  <title>Il Gusto Italiano</title>
  <link rel="stylesheet" href="../style/style.css" />
</head>

<body>
  <header class="container">
    <?php include '../modules/nav.php'; ?>
    <div class="header__container">
      <div class="text__content">
        <div class="header-logo">
          <img src="../image/logo.svg" alt="" />
        </div>
        <h3>
          Разнообразное<br />
          <span class="accent-text">Итальянское</span> меню
        </h3>
        <p>
          Почувствуйте себя как в Италии!<br />
          Насладитесь неповторимыми вкусами пасты, пиццы, ризотто и
          десертов, приготовленными с душой и вдохновением.
        </p>

        <div class="content__button">
          <button class="btn">забронировать</button>
        </div>
      </div>
    </div>
    <div class="header__container-image">
      <img class="rot" src="../image/header-pizza.png" alt="" />
    </div>
  </header>
  <main>
    <h2 class="title">меню</h2>
    <section class="container">
      <?php include '../modules/cards.php'; ?>
    </section>


    <div class="ticker">
      <div class="ticker__in">
        <span class="ticker__item">Акция -10% студентам!</span>
        <span class="ticker__item">Акция -10% студентам!</span>
        <span class="ticker__item">Акция -10% студентам!</span>
        <span class="ticker__item">Акция -10% студентам!</span>
        <span class="ticker__item">Акция -10% студентам!</span>
        <span class="ticker__item">Акция -10% студентам!</span>
      </div>
    </div>
  </main>
  <?php include '../modules/footer.php'; ?>
  <script src="../script/product.js"></script>
</body>

</html>