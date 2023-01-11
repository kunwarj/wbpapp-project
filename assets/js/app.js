// Hamburger
const body = document.querySelector("body");
const hamburger = document.querySelector("#hamburger");
const hammenu = document.querySelector("#hammenu");
const span1 = document.querySelector("#span1");
const span2 = document.querySelector("#span2");
const span3 = document.querySelector("#span3");
const span4 = document.querySelector("#span4");
hamburger.addEventListener("click", () => {
  if (hamburger.classList.contains("active")) {
    hamburger.classList.remove("active");
    hammenu.style.display = "none";
    hammenu.style.opacity = "0";
  } else {
    hamburger.classList.add("active");
    hammenu.style.display = "block";
    hammenu.style.opacity = "1";
  }
});

// Home hero slider
var swiper = new Swiper(".heroSwiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// Project slider
var swiper = new Swiper(".projectSwiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  grabCursor: true,
  breakpoints: {
    1100: {
      slidesPerView: 4,
    },
    800: {
      slidesPerView: 3,
    },
    500: {
      slidesPerView: 2,
    },
  },
});

// Popup
const openPopup = document.querySelector(".applyNowButton");
const closePopup = document.querySelector("#close-pop-up");
const popup = document.querySelector("#apply-pop-up-bg");
openPopup.addEventListener("click", () => {
  popup.style.display = "flex";
  body.style.overflow = "hidden";
});
closePopup.addEventListener("click", () => {
  popup.style.display = "none";
  body.style.overflow = "auto";
});
