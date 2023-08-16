const seconds = document.querySelector(".seconds .number"),
  minutes = document.querySelector(".minutes .number"),
  hours = document.querySelector(".hours .number"),
  days = document.querySelector(".days .number");

const dateLaunch = new Date("2023-08-26");
const dateNow = new Date();
const differenceInMilliseconds = dateLaunch - dateNow;
const calcseconds = Math.floor(differenceInMilliseconds / 1000) % 60;
const calcminutes = Math.floor(differenceInMilliseconds / (1000 * 60)) % 60;
const calchours = Math.floor(differenceInMilliseconds / (1000 * 60 * 60)) % 24;
const calcdays = Math.floor(differenceInMilliseconds / (1000 * 60 * 60 * 24));
let secValue = calcseconds,
    minValue = calcminutes,
    hourValue = calchours,
    dayValue = calcdays;

const timeFunction = setInterval(() => {
  secValue--;

  if (secValue === 0) {
    minValue--;
    secValue = 60;
  }
  if (minValue === 0) {
    hourValue--;
    minValue = 60;
  }
  if (hourValue === 0) {
    dayValue--;
    hourValue = 24;
  }
  if (dayValue === 0) {
    clearInterval(timeFunction);
  }
  seconds.textContent = secValue < 10 ? `0${secValue}` : secValue;
  minutes.textContent = minValue < 10 ? `0${minValue}` : minValue;
  hours.textContent = hourValue < 10 ? `0${hourValue}` : hourValue;
  days.textContent = dayValue < 10 ? `0${dayValue}` : dayValue;
}, 1000); //1000ms = 1s


$('#lightSlider').lightSlider({
    gallery: true,
    controls: false,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 4
});

$('#lightSlider2').lightSlider({
    gallery: true,
    controls: false,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 4
});

console.clear();
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

var counted = 0;
$(window).scroll(function() {
  var oTop = $('#counter').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $('.count').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    counted = 1;
  }
});

document.addEventListener("DOMContentLoaded", function() {
  const collapseButton = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
  const navbarMenu = document.getElementById('navbar-sticky');
  collapseButton.addEventListener('click', function() {
    navbarMenu.classList.toggle('hidden');
    navbarMenu.classList.toggle('md:flex');
  });
});

$(document).ready(function () {
  $(".nav ul a").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");
    $("html, body").animate({ scrollTop: $(href).offset().top }, 800);
  });
});


const typeOne = document.getElementById('typeOne');
const typeTwo = document.getElementById('typeTwo');

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
  .pauseFor(4800)
  .start();

typewriterTwo
  .pauseFor(670)
  .typeString('by daiyan trisha')
  .pauseFor(5000)
  .start();


  // 7 * 300
  // 16 * 150