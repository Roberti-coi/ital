class TeamSlider {
  constructor() {
    this.slider = document.querySelector(".team-slider");
    if (!this.slider) return;

    this.track = this.slider.querySelector(".team-slider__track");
    this.cards = Array.from(this.track.querySelectorAll(".team-card"));
    this.prevBtn = document.querySelector(".slider-btn--prev");
    this.nextBtn = document.querySelector(".slider-btn--next");
    this.dotsContainer = document.querySelector(".slider-dots");

    this.currentSlide = 0;
    this.slidesPerView = this.getSlidesPerView();
    this.totalSlides = this.cards.length;
    this.slideGap = 40;

    this.init();
  }

  getSlidesPerView() {
    const width = window.innerWidth;
    if (width <= 767) return 1;
    if (width <= 1280) return 2;
    return 3;
  }

  getCardWidth() {
    const sliderWidth = this.slider.offsetWidth;
    const gapTotal = (this.slidesPerView - 1) * this.slideGap;
    return (sliderWidth - gapTotal) / this.slidesPerView;
  }

  updateSlidePosition() {
    const cardWidth = this.getCardWidth();
    const translateX = -(this.currentSlide * (cardWidth + this.slideGap));
    this.track.style.transform = `translateX(${translateX}px)`;
  }

  updateControls() {
    // Обновляем состояние кнопок
    this.prevBtn.disabled = this.currentSlide === 0;
    this.nextBtn.disabled =
      this.currentSlide >= this.totalSlides - this.slidesPerView;

    // Обновляем активную точку
    const dots = this.dotsContainer.querySelectorAll(".slider-dot");
    dots.forEach((dot, index) => {
      dot.classList.toggle("active", index === this.currentSlide);
    });
  }

  createDots() {
    const dotsCount = this.totalSlides - this.slidesPerView + 1;

    for (let i = 0; i < dotsCount; i++) {
      const dot = document.createElement("button");
      dot.className = `slider-dot ${i === 0 ? "active" : ""}`;
      dot.setAttribute("aria-label", `Перейти к слайду ${i + 1}`);
      dot.addEventListener("click", () => {
        this.goToSlide(i);
      });
      this.dotsContainer.appendChild(dot);
    }
  }

  goToSlide(index) {
    this.currentSlide = Math.max(
      0,
      Math.min(index, this.totalSlides - this.slidesPerView),
    );
    this.updateSlidePosition();
    this.updateControls();
  }

  nextSlide() {
    if (this.currentSlide < this.totalSlides - this.slidesPerView) {
      this.currentSlide++;
      this.updateSlidePosition();
      this.updateControls();
    }
  }

  prevSlide() {
    if (this.currentSlide > 0) {
      this.currentSlide--;
      this.updateSlidePosition();
      this.updateControls();
    }
  }

  handleResize() {
    const newSlidesPerView = this.getSlidesPerView();

    if (newSlidesPerView !== this.slidesPerView) {
      this.slidesPerView = newSlidesPerView;

      // Удаляем старые точки и создаем новые
      this.dotsContainer.innerHTML = "";
      this.createDots();

      // Корректируем текущий слайд
      this.currentSlide = Math.min(
        this.currentSlide,
        this.totalSlides - this.slidesPerView,
      );
      this.updateSlidePosition();
      this.updateControls();
    } else {
      this.updateSlidePosition();
    }
  }

  init() {
    // Создаем точки навигации
    this.createDots();

    // Назначаем обработчики событий
    this.prevBtn.addEventListener("click", () => this.prevSlide());
    this.nextBtn.addEventListener("click", () => this.nextSlide());

    // Обработчик изменения размера окна
    let resizeTimeout;
    window.addEventListener("resize", () => {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(() => this.handleResize(), 100);
    });

    // Инициализируем позицию
    this.updateSlidePosition();
    this.updateControls();

    // Автопрокрутка (опционально)
    this.startAutoSlide();
  }

  startAutoSlide() {
    // Автоматическая прокрутка каждые 5 секунд
    setInterval(() => {
      if (this.currentSlide >= this.totalSlides - this.slidesPerView) {
        this.goToSlide(0);
      } else {
        this.nextSlide();
      }
    }, 5000);
  }
}

// Инициализация слайдера при загрузке страницы
document.addEventListener("DOMContentLoaded", () => {
  new TeamSlider();
});
