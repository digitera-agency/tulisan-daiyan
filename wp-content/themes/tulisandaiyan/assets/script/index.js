AOS.init();

const timeFunction = setInterval(() => {
  const seconds = document.querySelector(".seconds .number"),
    minutes = document.querySelector(".minutes .number"),
    hours = document.querySelector(".hours .number"),
    days = document.querySelector(".days .number");
  const dateLaunched = document.getElementById('dateLaunch');
  const dateLaunch = new Date(Number(dateLaunched.value));
  const dateNow = new Date();
  const differenceInMilliseconds = dateLaunch > dateNow ? dateLaunch - dateNow : 0;
  const calcseconds = Math.floor(differenceInMilliseconds / 1000) % 60;
  const calcminutes = Math.floor(differenceInMilliseconds / (1000 * 60)) % 60;
  const calchours = Math.floor(differenceInMilliseconds / (1000 * 60 * 60)) % 24;
  const calcdays = Math.floor(differenceInMilliseconds / (1000 * 60 * 60 * 24));
  let secValue = calcseconds > 0 ? calcseconds : 0,
    minValue = calcminutes > 0 ? calcminutes : 0,
    hourValue = calchours > 0 ? calchours : 0,
    dayValue = calcdays > 0 ? calcdays : 0;

  seconds.textContent = secValue < 10 ? `0${secValue}` : secValue;
  minutes.textContent = minValue < 10 ? `0${minValue}` : minValue;
  hours.textContent = hourValue < 10 ? `0${hourValue}` : hourValue;
  days.textContent = dayValue < 10 ? `0${dayValue}` : dayValue;
}, 1000); //1000ms = 1s


$('.lightSlider').lightSlider({
  gallery: true,
  controls: false,
  item: 1,
  loop: true,
  slideMargin: 0,
  thumbItem: 4
});

$('.lightSlider2').lightSlider({
  gallery: true,
  controls: false,
  item: 1,
  loop: true,
  slideMargin: 0,
  thumbItem: 4
});

const faqs = document.querySelectorAll('[data-list="faq"]');
if (faqs.length != 0) {
  faqs.forEach(function (faq, index) {
    // Check if a FAQ is changed
    faq.addEventListener('change', function (e) {
      const input = e.target;
      const item = e.target.parentNode;
      const label = e.target.nextElementSibling;
      const type = e.target.getAttribute('type');
      // Check if type is checkbox
      if (type == 'checkbox') {
        // console.log(label);
        if (input.checked) {
          // console.log('checked');
          label.setAttribute('aria-expanded', 'true');
        } else {
          // console.log('not checked');
          label.setAttribute('aria-expanded', 'false');
        }
      }
      if (type == 'radio') {
        console.log(type);
      }
    });
  });
}


document.addEventListener("DOMContentLoaded", function () {
  const collapseButton = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
  const navbarMenu = document.getElementById('navbar-sticky');
  collapseButton.addEventListener('click', function () {
    navbarMenu.classList.toggle('hidden');
    navbarMenu.classList.toggle('md:flex');
  });
});

const output = document.getElementById('navbar');

output.style.visibility = "hidden";
document.addEventListener("scroll", event => {
  const scroll = window.scrollY;
  if (scroll === 0) {
    output.classList.remove("fade-in");
    output.style.visibility = "hidden";
  } else {
    output.style.visibility = "visible";
    output.classList.add("fade-in");

  }
}, { passive: true });

const typeOne = document.getElementById('typeOne');
const typeTwo = document.getElementById('typeTwo');
const star = document.getElementById('star');
const moon = document.getElementById('bulan');

const typewriterOne = new Typewriter(typeOne, {
  loop: true,
  delay: 300,
  deleteSpeed: 300,
});

const typewriterTwo = new Typewriter(typeTwo, {
  loop: true,
  delay: 130,
  deleteSpeed: 130,
});

typewriterOne
  .pauseFor(500)
  .typeString('tulisan')
  .callFunction(() => {
    star.style.opacity = 1;
    star.style.transition = "all 1s"
  })
  .pauseFor(300)
  .callFunction(() => {
    moon.style.opacity = 1;
    moon.style.transition = "all 1s"
  })
  .pauseFor(4800)
  .callFunction(() => {
    star.style.opacity = 0;
  })
  .pauseFor(300)
  .callFunction(() => {
    moon.style.opacity = 0;
  })
  .start();

typewriterTwo
  .pauseFor(970)
  .typeString('by daiyan trisha')
  .pauseFor(6000)
  .start();

$(document).ready(function () {
  var sections = $('.counter');
  var windowHeight = $(window).height();

  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();

    sections.each(function () {
      var section = $(this);
      var sectionTop = section.offset().top;
      var sectionHeight = section.height();
      var countElement = section.find('.count');
      var countTo = parseInt(countElement.attr('data-count'));

      if (scrollTop >= sectionTop - windowHeight + sectionHeight && !countElement.hasClass('counted')) {
        $({ countNum: 0 }).animate({
          countNum: countTo
        }, {
          duration: 2000,
          easing: 'swing',
          step: function () {
            countElement.text(Math.floor(this.countNum));
          },
          complete: function () {
            countElement.text(this.countNum);
            countElement.addClass('counted');
          }
        });
      }
    });
  });
});

var elements = document.getElementsByClassName('single-image');
for (let item of elements) {
  lightGallery(item, {
    thumbnail: true,
    showZoomInOutIcons: true,
    actualSize: false,
    plugins: [lgZoom],
    share: false,
    mobileSettings: { controls: true, showCloseIcon: true, download: false }
  })
}