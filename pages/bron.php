<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Il Gusto Italiano</title>
  <link rel="stylesheet" href="../style/style.css" />
  <link rel="stylesheet" href="../style/bron.css" />
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
          Забронируйте<br />
          <span class="accent-text">столик</span> в нашем<br /> ресторане
        </h3>
      </div>
    </div>
    <div class="header__container-image">
      <img class="rot" src="../image/table.png" alt="" />
    </div>
  </header>

  <main>
    <section class="container">
      <div class="login-container">
        <form class="login-form" method="post">
          <div class="form-group">
            <label>ИМЯ:</label>
            <input type="text" name="name" placeholder="Введите ваше имя" required>
          </div>

          <div class="row-fields">
            <div class="form-group">
              <label>ДАТА:</label>
              <input type="date" name="date" min="2026-01-01" max="2026-12-31" required>
            </div>
            <div class="form-group">
              <label>ВРЕМЯ:</label>
              <input type="time" name="time" min="12:00" max="18:00" required>
            </div>
          </div>

          <div class="row-fields">
            <div class="form-group">
              <label>КОЛИЧЕСТВО ВЗРОСЛЫХ:</label>
              <input type="number" name="adults" min="1" max="20" value="1" required>
            </div>
            <div class="form-group">
              <label>КОЛИЧЕСТВО ДЕТЕЙ:</label>
              <input type="number" name="children" min="0" max="10" value="0">
            </div>
          </div>

          <div class="form-group">
            <label>ПРЕДПОЧТИТЕЛЬНОЕ МЕСТО:</label>
            <select name="location" required>
              <option value="window">У ОКНА</option>
              <option value="terrace">НА ТЕРРАСЕ</option>
              <option value="center">В ЦЕНТРЕ ЗАЛА</option>
              <option value="corner">В УГЛУ</option>
              <option value="no-preference" selected>БЕЗ ПРЕДПОЧТЕНИЙ</option>
            </select>
          </div>

          <div class="form-group">
            <label>ТИП МЕРОПРИЯТИЯ:</label>
            <select name="occasion" required>
              <option value="birthday">ДЕНЬ РОЖДЕНИЯ</option>
              <option value="anniversary">ГОДОВЩИНА</option>
              <option value="business">ДЕЛОВОЙ ОБЕД</option>
              <option value="romantic">РОМАНТИЧЕСКИЙ УЖИН</option>
              <option value="other" selected>ДРУГОЕ</option>
            </select>
          </div>

          <div class="form-group">
            <label>ОСОБЫЕ ЗАПРОСЫ:</label>
            <textarea name="specialRequests" placeholder="Например, аллергии или предпочтения для детей"></textarea>
          </div>

          <div class="form-buttons">
            <button type="submit" class="submit-btn">ЗАБРОНИРОВАТЬ</button>
            <button type="reset" class="reset-btn">СБРОСИТЬ</button>
          </div>
        </form>
      </div>
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

  <style>

  </style>
</body>

</html>