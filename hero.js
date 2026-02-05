document.addEventListener('DOMContentLoaded', () => {
  const slides = document.querySelectorAll('.hero-slide');
  const prev = document.querySelector('.hero-btn.prev');
  const next = document.querySelector('.hero-btn.next');

  let current = 0;
  let timer;

  function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    slides[index].classList.add('active');
  }

  function nextSlide() {
    current = (current + 1) % slides.length;
    showSlide(current);
  }

  function prevSlide() {
    current = (current - 1 + slides.length) % slides.length;
    showSlide(current);
  }

  next.addEventListener('click', () => {
    nextSlide();
    resetAuto();
  });

  prev.addEventListener('click', () => {
    prevSlide();
    resetAuto();
  });

  function resetAuto() {
    clearInterval(timer);
    timer = setInterval(nextSlide, 6000);
  }

  showSlide(current);
  timer = setInterval(nextSlide, 6000);
});

