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
    const sortButton = document.getElementById("sortButton");
  const sortMenu = document.getElementById("sort-menu");
  const closeSort = document.getElementById("close-sort");

  // buka
  sortButton.addEventListener("click", () => {
    sortMenu.classList.remove("translate-x-full");
    sortMenu.classList.add("translate-x-0");
  });

  // tutup
  closeSort.addEventListener("click", () => {
    sortMenu.classList.remove("translate-x-0");
    sortMenu.classList.add("translate-x-full");
  });

  const tabsElement = document.getElementById('myTab'); // The UL element with id="myTab"
        const tabContentElement = document.getElementById('myTabContent'); // The container div with id="myTabContent"

        // Check if both elements exist before proceeding
        if (tabsElement && tabContentElement) {
            // Initialize the Tabs component from Flowbite
            // The 'Tabs' constructor is available after Flowbite JS is loaded
            const tabs = new Tabs(tabsElement, tabContentElement, {
                defaultTabId: 'main-content', // Optional: Specify which tab to show by default
                activeClasses: 'text-primary-600 hover:text-primary-600 dark:text-primary-500 dark:hover:text-primary-400 border-primary-600 dark:border-primary-500',
                inactiveClasses: 'text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:border-gray-600',
                onShow: () => {
                    // Optional: You can add callbacks here if you need to do something when a tab is shown
                    console.log('A tab was shown!');
                }
            });

            // You can also programmatically switch tabs if needed:
            // tabs.show('sidebar-content'); // To show the 'Proses' tab
        } else {
            console.error('Flowbite Tabs: Could not find the required tab elements.');
        }

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

   const magangSwiper = new Swiper(".magangSwiper", {
    modules: [Navigation],
    slidesPerView: 4,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 4 },
    },
  });

 const upperBar = document.getElementById("upper-bar");
  const lowerBar = document.getElementById("lower-bar");

  window.addEventListener("scroll", function () {
    let currentScroll = window.scrollY;

    if (currentScroll > 50) {
      // Kalau sudah turun > 50px → sembunyikan upper-bar + naikkan lower-bar
      upperBar.style.transform = "translateY(-100%)";
      lowerBar.style.transform = "translateY(-48px)";
      lowerBar.classList.remove("lg:py-0"); // ganti sesuai tinggi upper-bar// ganti sesuai tinggi upper-bar
      lowerBar.classList.add("lg:py-4"); // ganti sesuai tinggi upper-bar// ganti sesuai tinggi upper-bar
    } else {
      // Kalau di posisi paling atas → tampilkan lagi
      upperBar.style.transform = "translateY(0)";
      lowerBar.style.transform = "translateY(0)";
      lowerBar.classList.remove("lg:py-4"); 
      lowerBar.classList.add("lg:py-0"); // ganti sesuai tinggi upper-bar// ganti sesuai tinggi upper-bar
    }
  });

    document.getElementById("phoneInput").addEventListener("input", function(e) {
      // Ambil angka aja (hapus semua selain 0-9)
      let value = e.target.value.replace(/\D/g, "");
      
      // Bikin format dengan "-" tiap 4 digit
      let formatted = value.match(/.{1,4}/g)?.join("-") || "";
      
      // Update input
      e.target.value = formatted;
  });
};
// Init swiper
}

