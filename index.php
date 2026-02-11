<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Il Gusto Italiano</title>
  <link rel="stylesheet" href="style/style.css" />
</head>

<body>
  <header class="container">
    <?php include './modules/nav.php'; ?>
    <div class="header__container">
      <div class="text__content">
        <div class="header-logo"><img src="image/logo.svg" alt="Il Gusto Italiano" /></div>
        <h3>Окунитесь в атмосферу<br><span class="accent-text">итальянской</span><br>кухни</h3>
        <p>Почувствуйте себя как в Италии! Насладитесь неповторимыми вкусами пасты, пиццы, ризотто и десертов, приготовленными с душой и вдохновением.</p>
        <div class="content__button"><button class="btn"><a href="bron.php">меню ресторана</a></button></div>
      </div>
    </div>
    <div class="header__container-image"><img class="rot" src="image/header-eat.png" alt="Итальянские блюда" /></div>
  </header>

  <main>
    <div class="ticker">
      <div class="ticker__in">
        <span class="ticker__item">Акция -10% студентам!</span><span class="ticker__item">Акция -10% студентам!</span><span class="ticker__item">Акция -10% студентам!</span><span class="ticker__item">Акция -10% студентам!</span><span class="ticker__item">Акция -10% студентам!</span><span class="ticker__item">Акция -10% студентам!</span>
      </div>
    </div>

    <h2 class="title">SALVE!</h2>

    <section class="container">
      <div class="container-about">
        <div class="section-stat">
          <div class="stat-item">
            <div class="stat-number" data-target="3000">0</div>
            <div class="stat-text">обслужено<br>клиентов</div>
          </div>
          <div class="stat-item">
            <div class="stat-number" data-target="32">0</div>
            <div class="stat-text">повара и<br>официанта</div>
          </div>
          <div class="stat-item">
            <div class="stat-number" data-target="64">0</div>
            <div class="stat-text">блюда в меню</div>
          </div>
        </div>
        <div class="section-aboutus">
          <div class="about-content">
            <p class="about-description">Здесь царит дух настоящей Италии: ароматы свежей пиццы из дровяной печи, чеснока и базилика. Приглушенный свет, стены цвета терракоты и бутылки с оливковым маслом на полках создают уютную и теплую атмосферу. Гул оживленных бесед, смех и итальянская музыка сливаются в один жизнерадостный хор. Это место, где можно расслабиться и почувствовать себя где-то на солнечной улице Рима или Неаполя. Ждем вас в гости!</p>
            <div class="section-about-info">
              <p class="info-adress"><span class="working-hours">Пн-Пт: 8:00 - 23:00</span><br><span class="address">
                  ул. Стромынка, 25 строение 2, Москва</span></p>
              <div class="content__button"><button class="btn">забронировать</button></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section container">
      <div class="section__header">
        <h2 class="section__title">Популярные блюда</h2>
        <div class="section__description">
          <p>Откройте для себя вкусы настоящей Италии: от классических рецептов до современных интерпретаций.</p>
        </div>
      </div>
      <div class="section__body">
        <div class="services">
          <ul class="services__list grid grid--2">
            <li class="services__item">
              <article class="service-card">
                <div class="service-card__body">
                  <h3 class="service-card__title"><span class="puddle-bg">Неаполитанская</span><span class="puddle-bg">пицца</span></h3>
                  <a class="service-card__link" href="#"><span class="service-card__link-icon-wrapper"><svg width="21" height="20">
                        <path d="M1.25 13.701C0.532561 14.1152 0.286748 15.0326 0.700962 15.75C1.11518 16.4674 2.03256 16.7133 2.75 16.299L1.25 13.701ZM20.7694 5.38823C20.9838 4.58803 20.5089 3.76552 19.7087 3.55111L6.66874 0.0570541C5.86854 -0.157359 5.04603 0.317515 4.83162 1.11771C4.61721 1.91791 5.09208 2.74042 5.89228 2.95483L17.4834 6.06066L14.3776 17.6518C14.1631 18.452 14.638 19.2745 15.4382 19.4889C16.2384 19.7033 17.0609 19.2284 17.2753 18.4282L20.7694 5.38823ZM2.75 16.299L20.0705 6.29904L18.5705 3.70096L1.25 13.701L2.75 16.299Z" fill="#F03B20" />
                      </svg></span><span class="service-card__link-label">Подробнее</span></a>
                </div>
                <img class="service-card__image" src="./image/p.png" alt="Неаполитанская пицца" loading="lazy" />
              </article>
            </li>
            <li class="services__item">
              <article class="service-card service-card--accent-bg">
                <div class="service-card__body">
                  <h3 class="service-card__title"><span class="puddle-bg puddle-bg--light">Пицца</span><span class="puddle-bg puddle-bg--light">маргарита</span></h3>
                  <a class="service-card__link" href="#"><span class="service-card__link-icon-wrapper"><svg width="21" height="20">
                        <path d="M1.25 13.701C0.532561 14.1152 0.286748 15.0326 0.700962 15.75C1.11518 16.4674 2.03256 16.7133 2.75 16.299L1.25 13.701ZM20.7694 5.38823C20.9838 4.58803 20.5089 3.76552 19.7087 3.55111L6.66874 0.0570541C5.86854 -0.157359 5.04603 0.317515 4.83162 1.11771C4.61721 1.91791 5.09208 2.74042 5.89228 2.95483L17.4834 6.06066L14.3776 17.6518C14.1631 18.452 14.638 19.2745 15.4382 19.4889C16.2384 19.7033 17.0609 19.2284 17.2753 18.4282L20.7694 5.38823ZM2.75 16.299L20.0705 6.29904L18.5705 3.70096L1.25 13.701L2.75 16.299Z" fill="#FBFBFB" />
                      </svg></span><span class="service-card__link-label">Подробнее</span></a>
                </div>
                <img class="service-card__image" src="./image/p.png" alt="Неаполитанская пицца" loading="lazy" />
              </article>
            </li>
            <li class="services__item">
              <article class="service-card service-card--dark-bg">
                <div class="service-card__body">
                  <h3 class="service-card__title"><span class="puddle-bg puddle-bg--light">Пицца</span><span class="puddle-bg puddle-bg--light">пепеФа</span></h3>
                  <a class="service-card__link service-card__link--light" href="#"><span class="service-card__link-icon-wrapper"><svg width="21" height="20">
                        <path d="M1.25 13.701C0.532561 14.1152 0.286748 15.0326 0.700962 15.75C1.11518 16.4674 2.03256 16.7133 2.75 16.299L1.25 13.701ZM20.7694 5.38823C20.9838 4.58803 20.5089 3.76552 19.7087 3.55111L6.66874 0.0570541C5.86854 -0.157359 5.04603 0.317515 4.83162 1.11771C4.61721 1.91791 5.09208 2.74042 5.89228 2.95483L17.4834 6.06066L14.3776 17.6518C14.1631 18.452 14.638 19.2745 15.4382 19.4889C16.2384 19.7033 17.0609 19.2284 17.2753 18.4282L20.7694 5.38823ZM2.75 16.299L20.0705 6.29904L18.5705 3.70096L1.25 13.701L2.75 16.299Z" fill="#FBFBFB" />
                      </svg></span><span class="service-card__link-label">Подробнее</span></a>
                </div>
                <img class="service-card__image" src="./image/p.png" alt="Неаполитанская пицца" loading="lazy" />
              </article>
            </li>
            <li class="services__item">
              <article class="service-card">
                <div class="service-card__body">
                  <h3 class="service-card__title"><span class="puddle-bg">Тирамису</span><span class="puddle-bg">классический</span></h3>
                  <a class="service-card__link" href="#"><span class="service-card__link-icon-wrapper"><svg width="21" height="20">
                        <path d="M1.25 13.701C0.532561 14.1152 0.286748 15.0326 0.700962 15.75C1.11518 16.4674 2.03256 16.7133 2.75 16.299L1.25 13.701ZM20.7694 5.38823C20.9838 4.58803 20.5089 3.76552 19.7087 3.55111L6.66874 0.0570541C5.86854 -0.157359 5.04603 0.317515 4.83162 1.11771C4.61721 1.91791 5.09208 2.74042 5.89228 2.95483L17.4834 6.06066L14.3776 17.6518C14.1631 18.452 14.638 19.2745 15.4382 19.4889C16.2384 19.7033 17.0609 19.2284 17.2753 18.4282L20.7694 5.38823ZM2.75 16.299L20.0705 6.29904L18.5705 3.70096L1.25 13.701L2.75 16.299Z" fill="#F03B20" />
                      </svg></span><span class="service-card__link-label">Подробнее</span></a>
                </div>
                <img class="service-card__image" src="./image/tir.png" alt="Тирамису классический" loading="lazy" />
              </article>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="section container">
      <div class="section__header">
        <h2 class="section__title">Наша команда</h2>
        <div class="section__description">
          <p>Познакомьтесь с талантливыми поварами и обслуживающим персоналом, которые создают атмосферу настоящей Италии</p>
        </div>
      </div>
      <div class="section__body">
        <div class="team-slider-wrapper">
          <div class="team-slider">
            <div class="team-slider__track">
              <article class="team-card">
                <div class="team-card__header">
                  <img class="team-card__image" src="./image/chef1.jpg" alt="Антонио Росси" width="100" height="100" loading="lazy" />
                  <div class="team-card__info">
                    <h3 class="team-card__name h4">Антонио Росси</h3>
                    <p class="team-card__post">Шеф-повар</p>
                  </div>
                </div>
                <div class="team-card__body">
                  <p>15+ лет опыта в итальянской кухне. Специализируется на региональных блюдах Сицилии. Работал в ресторанах Милана и Рима.</p>
                </div>
              </article>

              <article class="team-card">
                <div class="team-card__header">
                  <img class="team-card__image" src="./image/chef1.jpg" alt="Мария Феррари" width="100" height="100" loading="lazy" />
                  <div class="team-card__info">
                    <h3 class="team-card__name h4">Мария Феррари</h3>
                    <p class="team-card__post">Кондитер</p>
                  </div>
                </div>
                <div class="team-card__body">
                  <p>Эксперт по итальянским десертам. Создает авторские версии классических сладостей. Ее тирамису стал легендой среди постоянных гостей.</p>
                </div>
              </article>

              <article class="team-card">
                <div class="team-card__header">
                  <img class="team-card__image" src="./image/chef1.jpg" alt="Лука Бьянки" width="100" height="100" loading="lazy" />
                  <div class="team-card__info">
                    <h3 class="team-card__name h4">Лука Бьянки</h3>
                    <p class="team-card__post">Сомелье</p>
                  </div>
                </div>
                <div class="team-card__body">
                  <p>Сертифицированный итальянский сомелье. Поможет выбрать идеальное вино к любому блюду. Знает историю каждого винодельческого региона Италии.</p>
                </div>
              </article>

              <!-- Дополнительные карточки для демонстрации слайдера -->
              <article class="team-card">
                <div class="team-card__header">
                  <img class="team-card__image" src="./image/chef1.jpg" alt="София Конти" width="100" height="100" loading="lazy" />
                  <div class="team-card__info">
                    <h3 class="team-card__name h4">София Конти</h3>
                    <p class="team-card__post">Повар-пастайоло</p>
                  </div>
                </div>
                <div class="team-card__body">
                  <p>Мастер по приготовлению свежей пасты. Владеет искусством создания 20+ видов пасты вручную. Призер конкурса Pasta World Championship.</p>
                </div>
              </article>

              <article class="team-card">
                <div class="team-card__header">
                  <img class="team-card__image" src="./image/chef1.jpg" alt="Марко Де Люка" width="100" height="100" loading="lazy" />
                  <div class="team-card__info">
                    <h3 class="team-card__name h4">Марко Де Люка</h3>
                    <p class="team-card__post">Пиццайоло</p>
                  </div>
                </div>
                <div class="team-card__body">
                  <p>Специалист по неаполитанской пицце. Прошел обучение в Неаполе. Его пицца имеет традиционный сертификат VPN (Vera Pizza Napoletana).</p>
                </div>
              </article>
            </div>
          </div>

          <div class="slider-controls">
            <button class="slider-btn slider-btn--prev" aria-label="Предыдущий слайд">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>

            <div class="slider-dots">
              <!-- Точки будут генерироваться JavaScript -->
            </div>

            <button class="slider-btn slider-btn--next" aria-label="Следующий слайд">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="reviews-section container">
      <div class="section__header">
        <h2 class="section__title">Что о нас говорят?</h2>
        <div class="section__description">
          <p>Отзывы наших постоянных клиентов</p>
        </div>
      </div>
      <div class="reviews-grid">
        <div class="left-column">
          <div>
            <div class="review-header">
              <h3 class="review-author">Ирина Промина</h3>
              <p class="review-date">18.07.25</p>
            </div>
            <div class="review-content">
              <p class="review-text">Это место — не просто ресторан, это настоящая находка для всех ценителей высокой кухни! Мы пришли с мужем на годовщину, и это был лучший вечер за долгое время. С первой же минуты тебя окутывает невероятная атмосфера: приглушенный свет, элегантный интерьер в стиле лофт с итальянскими акцентами и тихая, приятная музыка. Но главное, конечно, — это ЕДА!</p>
            </div>
          </div>
          <div class="review-image"><img class="img-n" src="./image/fork.png" alt="Итальянская пицца" /></div>
          <div>
            <div class="review-header">
              <h3 class="review-author">Филип Тихонов</h3>
              <p class="review-date">18.07.25</p>
            </div>
            <div class="review-content">
              <p class="review-text">Мы начали с тартара из тунца с авокадо и манго. Это просто песня! Настолько нежная текстура, идеально сбалансированный соус и хрустящие гренки. Показалось, что мы на берегу Средиземного моря. На основное взяли ризотто с трюфелем и черными папараделле с оленьей щекой. Ризотто — кремовое, с насыщенным ароматом трюфеля, который чувствуется еще на подходе к столу. А паста… Такая паста можно пробовать только в самом Милане! Домашняя, идеальной al dente текстуры.</p>
            </div>
          </div>
        </div>
        <div class="right-column">
          <div class="review-image"><img class="img-n" src="./image/vine.png" alt="Итальянская паста" /></div>
          <div>
            <div class="review-header">
              <h3 class="review-author">Алена Сучкова</h3>
              <p class="review-date">18.07.25</p>
            </div>
            <div class="review-content">
              <p class="review-text">Обслуживание безупречное: внимательные, но ненавязчивые официанты, которые знают меню наизусть. В конце вечера нам принесли комплимент от шефа — воздушный тирамису в стиле деконструкции. Это был восхитительный финал!</p>
            </div>
          </div>
          <div class="review-image"><img class="img-n" src="./image/pizza.png" alt="Десерт тирамису" /></div>
        </div>
      </div>
    </section>

    <section class="section container">
      <div class="section__header">
        <h2 class="section__title">Наш процесс</h2>
        <div class="section__description">
          <p>Как мы создаем кулинарные шедевры от выбора ингредиентов до подачи на стол</p>
        </div>
      </div>
      <div class="section__body">
        <div class="process">
          <ul class="process__list">
            <li class="process__item">
              <details class="process__accordion" open>
                <summary class="process__accordion-header">
                  <h3 class="process__accordion-title">Отбор ингредиентов</h3><span class="process__accordion-indicator"></span>
                </summary>
                <div class="process__accordion-body">
                  <p>Используем только свежие, качественные ингредиенты от проверенных поставщиков. Овощи и зелень — с фермерских хозяйств, мясо и сыры — от местных производителей.</p>
                </div>
              </details>
            </li>
            <li class="process__item">
              <details class="process__accordion">
                <summary class="process__accordion-header">
                  <h3 class="process__accordion-title">Приготовление по традициям</h3><span class="process__accordion-indicator"></span>
                </summary>
                <div class="process__accordion-body">
                  <p>Каждое блюдо готовится по аутентичным итальянским рецептам. Пицца — в дровяной печи, паста — строго al dente, соусы — по семейным рецептам наших шеф-поваров.</p>
                </div>
              </details>
            </li>
            <li class="process__item">
              <details class="process__accordion">
                <summary class="process__accordion-header">
                  <h3 class="process__accordion-title">Контроль качества</h3><span class="process__accordion-indicator"></span>
                </summary>
                <div class="process__accordion-body">
                  <p>Каждое блюдо проходит строгий контроль качества перед подачей. Шеф-повар лично проверяет вкус, текстуру и температуру каждого блюда.</p>
                </div>
              </details>
            </li>
            <li class="process__item">
              <details class="process__accordion">
                <summary class="process__accordion-header">
                  <h3 class="process__accordion-title">Искусство подачи</h3><span class="process__accordion-indicator"></span>
                </summary>
                <div class="process__accordion-body">
                  <p>Красивая подача — часть итальянской культуры. Мы уделяем особое внимание эстетике блюда, использованию свежих трав и созданию гармоничной композиции.</p>
                </div>
              </details>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="section container">
      <div class="banner">
        <div class="banner__inner">
          <div class="banner__body">
            <h3 class="banner__title">Попробуйте настоящую Италию!</h3>
            <div class="banner__description">
              <p>Забронируйте столик сегодня и получите бокал Просекко в подарок! Погрузитесь в атмосферу итальянского уюта и насладитесь неповторимыми вкусами Тосканы, Сицилии и других регионов Италии.</p>
            </div>
            <button class="btn" type="button">Забронировать столик</button>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35893.273753246285!2d37.66504199178874!3d55.7875142801081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b5352d89ae94b9%3A0xb75931308cbe0734!2sForneria%20by%20Casa%20di%20famiglia!5e0!3m2!1sru!2sru!4v1770647503760!5m2!1sru!2sru" width="600" height="450" style="border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
  </main>

  <div class="ticker">
    <div class="ticker__in">
      <span class="ticker__item">Акция -10% студентам!</span><span class="ticker__item">Акция -10% студентам!</span><span class="ticker__item">Акция -10% студентам!</span><span class="ticker__item">Акция -10% студентам!</span><span class="ticker__item">Акция -10% студентам!</span><span class="ticker__item">Акция -10% студентам!</span>
    </div>
  </div>

  <?php include './modules/footer.php'; ?>
  <script src="./script/script.js"></script>
  <script src="/script/number.js"></script>
</body>

</html>