import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Import core Swiper JS
import Swiper from 'swiper';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';

// Import modul navigasi
import { Navigation } from 'swiper/modules';

window.onload = () => {
const swiper = new Swiper('.mySwiper', {
  modules: [Navigation],
  slidesPerView: 5,
  spaceBetween: 20,
  navigation: {
    nextEl: ".custom-next",
    prevEl: ".custom-prev",
  },
  breakpoints: {
    320: { slidesPerView: 2 },
    640: { slidesPerView: 3 },
    1024: { slidesPerView: 5 },
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const upperBar = document.getElementById("upper-bar");
  const lowerBar = document.getElementById("lower-bar");

  let lastScroll = 0;

  window.addEventListener("scroll", function () {
    let currentScroll = window.scrollY;

    if (currentScroll > lastScroll && currentScroll > 50) {
      // Scroll down → hide upper-bar
      upperBar.style.transform = "translateY(-100%)";
      lowerBar.style.transform = "translateY(-48px)"; // ganti sesuai tinggi upper-bar
    } else {
      // Scroll up → show upper-bar
      upperBar.style.transform = "translateY(0)";
      lowerBar.style.transform = "translateY(0)";
    }

    lastScroll = currentScroll;
  });
});


};
// Init swiper


