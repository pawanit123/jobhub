// change navbar color
window.addEventListener("scroll", function () {
  let navbar = this.document.querySelector("nav");
  if (this.window.pageYOffset > 0) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
});

//navbar mobile vearsion
const mobile = document.querySelector(".menu-toggle");
const mobileLink = document.querySelector(".navbar-menu");

mobile.addEventListener("click", function () {
  mobile.classList.toggle("is-active");
  mobileLink.classList.toggle("active");
});

mobileLink.addEventListener("click", function () {
  const menuBars = document.querySelector(".is-active");
  if (window.innerWidth <= 768 && menuBars) {
    mobile.classList.toggle("is-active");
    mobileLink.classList.toggle("active");
  }
});

//swiper
var swiper = new Swiper(".mySwiper", {
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  slidePerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-page",
    clickable: true,
  },
  breakpoints: {
    640: {
      slidePerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidePerView: 3,
      spaceBetween: 40,
    },
    1024: {
      slidePerView: 1,
      spaceBetween: 50,
    },
  },
});

// form detail
let formBtn = document.querySelector(".loginbtn");
let loginForm = document.querySelector("#login-form");
let formClose = document.querySelector("#form-close");

formBtn.addEventListener("click", () => {
  loginForm.classList.add("active");
});
formClose.addEventListener("click", () => {
  loginForm.classList.remove("active");
});
