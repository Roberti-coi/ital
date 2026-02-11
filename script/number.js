document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll('.stat-number');

  counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');
    const duration = 4000; // продолжительность анимации в мс
    const startTime = performance.now();

    function animate(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      counter.innerText = Math.floor(progress * target);
      if (progress < 1) {
        requestAnimationFrame(animate);
      } else {
        counter.innerText = target;
      }
    }

    requestAnimationFrame(animate);
  });
});