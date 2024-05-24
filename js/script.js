function copyHeader() {
  var allCategory = document.querySelector(".a-cat");
  var mobCatagory = document.querySelector(".categories");
  mobCatagory.innerHTML = allCategory.innerHTML;

  var topNav = document.querySelector(".header-top .wrapper");
  var topPlace = document.querySelector(".off-canvas .thetop-nav");
  topPlace.innerHTML = topNav.innerHTML;
}

//show all catagory

const aButton = document.querySelector(".a-cat .a-trigger"),
  aClass = document.querySelector(".site");
aButton.addEventListener("click", () => {
  aClass.classList.toggle("showCat");
});

copyHeader();

const menuButton = document.querySelector('.trigger'),
    closeButton = document.querySelector('.t-close'),
    addClass = document.querySelector('.site');

menuButton.addEventListener('click', () => {
    addClass.classList.toggle('show-menu');
    console.log("sdsds");
})

closeButton.addEventListener('click', () => {
    addClass.classList.remove('show-menu')
})

//show all category for mobile

const submenu = document.querySelectorAll(".has-child .icon-small");
submenu.forEach((menu) => menu.addEventListener("click", toggle));

function toggle(e) {
  e.preventDefault();
  submenu.forEach(item => item != this ? item.closest('.has-child').classList.remove('expand') : null);
  this.closest('.has-child').classList.toggle('expand')
}

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

var productThumb = new Swiper (
  '.small-image', {
    loop: true,
    spaceBetween: 10,
    slidePerView: 3,
    freeMode: true,
    watchSlideProgress: true,
    breakpoints: {
      481: {
        spaceBetween: 32,
      }
    }
  }
);

var productBig = new Swiper ('.big-Image', {
  loop: true,
  autoWeight: true,
  navigation: {
    nexEl: 'swiper-button-next',
    preEl: 'swiper-button-prev',
  },
  thumbs: {
    swiper: productThumb,
  }
})

console.log("you herrrrrrrrrrrrrrrrrreeeeeeeeeeeee")