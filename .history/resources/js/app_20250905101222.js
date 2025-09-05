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

let lastScroll = 0;
const navbarTop = document.getElementById("upper-bar");

window.addEventListener("scroll", () => {
    let currentScroll = window.pageYOffset;

    if (currentScroll > lastScroll) {
        // Scroll ke bawah → sembunyiin part atas
        navbarTop.style.transform = "translateY(-100%)";
    } else {
        // Scroll ke atas → munculin lagi
        navbarTop.style.transform = "translateY(0)";
    }

    lastScroll = currentScroll <= 0 ? 0 : currentScroll;
});

};
// Init swiper


