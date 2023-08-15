<?php 

/**

 * Template Name: Home
 *

 */

get_header();?>
<section class="pt-[100px] md:pt-0">
    <div class="md:h-screen py-[100px] md:py-0">
      <div class="flex h-full items-center">
        <img class="m-auto " src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="">
      </div>
    </div>
  </section>

<section>
  <div class="py-[50px] md:py-[100px]">
    <img class="m-auto" src="<?php bloginfo('stylesheet_directory');?>/assets/img/section-book.png" alt="">
    <img class="m-auto" src="<?php bloginfo('stylesheet_directory');?>/assets/img/ttd-section-book.png" alt="">
  </div>
</section>

<section class="bg-[#282828]">
  <div>
    <div class="text-center py-[50px] md:py-[100px]">
      <h2 class="text-[32px] md:text-[48px] font-light text-white font-butler">Ready To Launch In...</h2>
      <div class="flex gap-[10px] md:gap-[30px] items-top justify-center pt-[25px] md:pt-[50px]">
        <div class="days">
          <span class="capitalize w-fit mx-auto relative right-[10px] pb-[15px] md:pb-[30px] block text-white font-medium text-[14px]">days</span>
          <div class="font-medium text-[42px] md:text-[72px] text-white"><span class="number"></span> <span>:</span></div>
        </div>
        <div class="hours">
          <span class="capitalize w-fit mx-auto relative right-[10px] pb-[15px] md:pb-[30px] block text-white font-medium text-[14px]">hours</span>
          <div class="font-medium text-[42px] md:text-[72px] text-white"><span class="number"></span> <span>:</span></div>
        </div>
        <div class="minutes">
          <span class="capitalize w-fit mx-auto relative right-[10px] pb-[15px] md:pb-[30px] block text-white font-medium text-[14px]">minutes</span>
          <div class="font-medium text-[42px] md:text-[72px] text-white"><span class="number"></span> <span>:</span></div>
        </div>
        <div class="seconds">
          <span class="capitalize w-fit mx-auto relative right-[10px] pb-[15px] md:pb-[30px] block text-white font-medium text-[14px]">seconds</span>
          <div class="font-medium text-[42px] md:text-[72px] text-white"><span class="number"></span></div>
        </div>
      </div>
      <div class="pt-[25px] md:pt-[50px]">
        <b class="text-center text-white font-bold text-[16px]">PRE ORDER ON 26 AUG (10:00)</b>
      </div>      
    </div>
  </div>
</section>

<section>
  <div class="h-full py-[50px] md:py-[100px] md:py-[0] delimiter">
    <div class="flex h-full items-center">
      <img class="m-auto md:h-screen object-contain" src="<?php bloginfo('stylesheet_directory');?>/assets/img/slider-book.png" alt="">
    </div>
  </div>
</section>

<section id="synopsis" class="bg-[#EDEBE4]">
  <div class="h-full py-[50px] md:py-[100px] md:py-[0] delimiter">
    <div class="flex h-full items-center">
      <img class="m-auto md:h-screen object-contain" src="<?php bloginfo('stylesheet_directory');?>/assets/img/synopsis.png" alt="">
    </div>
  </div>
</section>

<section class="py-[50px]">
  <div class="h-full delimiter">
    <h2 class="font-medium text-[32px] md:text-[48px] font-butler text-center">Book Specification</h2>
    <div class="flex h-full py-2 items-center">
      <img class="m-auto md:h-screen object-contain" src="<?php bloginfo('stylesheet_directory');?>/assets/img/book-spek.png" alt="">
    </div>
  </div>
</section>

<section id="package" class="bg-[#EDEBE4]">
  <div class="delimiter py-[50px] md:py-[100px]">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-32 md:h-screen">
      <div>
        <h2 class="font-butler text-[32px] md:text-[48px] font-medium">Full Moon Package</h2>
        <svg width="43" height="7" viewBox="0 0 43 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.5 1C1.5 1 4.46348 5.40529 7.28981 5.40529C10.1161 5.40529 10.2533 1 13.0796 1C15.9059 1 16.0431 5.40529 18.8694 5.40529C21.6957 5.40529 21.8329 1 24.6592 1C27.4855 1 27.6227 5.40529 30.449 5.40529C33.2753 5.40529 33.4125 1 36.2388 1C39.0652 1 42.0286 5.40529 42.0286 5.40529" stroke="#74642F" stroke-width="1.76211"/>
        </svg>
          <ul class="list-disc ps-4 text-[#555] py-[50px]">
            <li class="leading-10">Tulisan Hard Cover</li>
            <li class="leading-10">Daiyan’s Autograph</li>
            <li class="leading-10">Tulisan Gift Box</li>
            <li class="leading-10">Daiyan’s Special Letter</li>
            <li class="leading-10">8 pcs Exclusive Photo Cards</li>
          </ul>
        <div id="counter" class="pb-[30px]">
          <b class="uppercase  text-[15px] font-[750] tracking-widest">limited To <span class="count percent" data-count="1000"> 0 </span> copies</b>
        </div>
        <div>
          <h3 class="font-[400] text-[36px] md:text-[64px] font-butler bg-gradient-to-r from-[#ECBD45] to-[#B1881D] bg-clip-text text-transparent">RM 80.000</h3>
        </div>
        <div class="mt-5">
          <a href="#" class="bg-[#8E2424] rounded-full w-fit px-6 text-white py-2.5 font-semibold">Pre-order now</a>
        </div>
      </div>
      <div class="demo pt-[50px] md:pt-[0px]">
        <ul id="lightSlider">
            <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/package-c/1.png">
                <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/package-c/1.png" />
            </li>
            <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/package-c/2.png">
                <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/package-c/2.png" />
            </li>
            <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/package-c/3.png">
                <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/package-c/3.png" />
            </li>
            <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/package-c/4.png">
              <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/package-c/4.png" />
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="delimiter py-[50px] md:py-[100px]">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-x-32 md:h-screen">
    <div class="demo pt-[50px] md:pt-[0px] order-last md:order-first">
      <ul id="lightSlider2">
          <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/package-b/1.png">
              <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/package-b/1.png" />
          </li>
          <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/package-b/2.png">
              <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/package-b/2.png" />
          </li>
      </ul>
    </div>
    <div>
      <h2 class="font-butler text-[32px] md:text-[48px] font-medium">Crescent Package</h2>
      <svg width="43" height="7" viewBox="0 0 43 7" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.5 1C1.5 1 4.46348 5.40529 7.28981 5.40529C10.1161 5.40529 10.2533 1 13.0796 1C15.9059 1 16.0431 5.40529 18.8694 5.40529C21.6957 5.40529 21.8329 1 24.6592 1C27.4855 1 27.6227 5.40529 30.449 5.40529C33.2753 5.40529 33.4125 1 36.2388 1C39.0652 1 42.0286 5.40529 42.0286 5.40529" stroke="#74642F" stroke-width="1.76211"/>
      </svg>
        <ul class="list-disc ps-4 text-[#555] py-[50px]">
          <li class="leading-10">Tulisan Hard Cover</li>
          <li class="leading-10">Daiyan’s Autograph</li>
          <li class="leading-10">Tulisan Gift Box</li>
          <li class="leading-10">Daiyan’s Special Letter</li>
          <li class="leading-10">8 pcs Exclusive Photo Cards</li>
        </ul>
      <div id="counter" class="pb-[30px]">
        <b class="uppercase  text-[15px] font-[750] tracking-widest">limited To <span class="count percent" data-count="1000"> 0 </span> copies</b>
      </div>
      <div>
        <h3 class="font-[400] text-[36px] md:text-[64px] font-butler bg-gradient-to-r from-[#ECBD45] to-[#B1881D] bg-clip-text text-transparent">RM 65.000</h3>
      </div>
      <div class="mt-5">
        <a href="#" class="bg-[#8E2424] rounded-full w-fit px-6 text-white py-2.5 font-semibold">Pre-order now</a>
      </div>
    </div>
  </div>
</section>
<section class="bg-[#EDEBE4]">
  <div class="delimiter py-[50px] md:py-[100px]">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-32 md:h-screen">
    <div>
        <h2 class="font-butler text-[32px] md:text-[48px] font-medium">Eclipse Package</h2>
        <svg width="43" height="7" viewBox="0 0 43 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.5 1C1.5 1 4.46348 5.40529 7.28981 5.40529C10.1161 5.40529 10.2533 1 13.0796 1C15.9059 1 16.0431 5.40529 18.8694 5.40529C21.6957 5.40529 21.8329 1 24.6592 1C27.4855 1 27.6227 5.40529 30.449 5.40529C33.2753 5.40529 33.4125 1 36.2388 1C39.0652 1 42.0286 5.40529 42.0286 5.40529" stroke="#74642F" stroke-width="1.76211"/>
        </svg>
          <ul class="list-disc ps-4 text-[#555] py-[50px]">
            <li class="leading-10">Tulisan Hard Cover</li>
            <li class="leading-10">Daiyan’s Autograph</li>
            <li class="leading-10">Tulisan Gift Box</li>
            <li class="leading-10">Daiyan’s Special Letter</li>
            <li class="leading-10">8 pcs Exclusive Photo Cards</li>
          </ul>
        <div id="counter" class="pb-[30px]">
          <b class="uppercase  text-[15px] font-[750] tracking-widest">limited To <span class="count percent" data-count="1000"> 0 </span> copies</b>
        </div>
        <div>
          <h3 class="font-[400] text-[36px] md:text-[64px] font-butler bg-gradient-to-r from-[#ECBD45] to-[#B1881D] bg-clip-text text-transparent">RM 80.000</h3>
        </div>
        <div class="mt-5">
          <a href="#" class="bg-[#8E2424] rounded-full w-fit px-6 text-white py-2.5 font-semibold">Pre-order now</a>
        </div>
      </div>
      <div class="pt-[50px] md:pt-[0px]">
        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/package-a/1.png" alt="">
      </div>
    </div>
  </div>
</section>
<section id="timeline" class="bg-[#F3F2EC]">
  <div class="delimiter py-[50px] md:py-[100px]">
    <h2 class="font-butler text-[32px] md:text-[48px] font-medium text-center pb-[100px]">Pre Order Timeline</h2>
    <div class="max-w-screen-lg w-full mx-auto">
        <div class="flex items-center justify-center w-full">
            <div class="w-full max-w-[20rem] text-right">
                <p class="font-butler text-[18px] md:text-[24px] font-[500]">Launch</p>
            </div>
            <div class="min-h-[40px] md:min-h-[80px] min-w-[40px] md:min-w-[80px] rounded-full inline-flex items-center justify-center mx-5 md:mx-10 bg-black">
                <svg class="h-[25px] md:h-[50px] w-[25px] md:w-[50px]" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M44.1733 11.6242L44.0565 10.821C43.8583 9.57135 43.5275 8.17148 42.6658 7.30966C41.804 6.44801 40.4042 6.11716 39.1546 5.91899L38.3513 5.80216C36.4552 5.54008 33.9707 5.47153 31.2127 5.91883C25.7689 6.80195 19.2737 9.69987 14.2445 16.978C13.8759 17.0143 13.5019 17.0189 13.1257 17.0119L11.9937 16.9761C11.2387 16.9559 10.4874 16.9695 9.76472 17.1776C8.38906 17.5737 7.48352 18.9824 6.83308 20.3004L6.52813 20.9468L6.16038 21.78L5.92955 22.3507C5.36705 23.8231 4.97533 25.5984 6.13931 26.7626C6.66734 27.2906 7.38395 27.5341 8.10073 27.73L8.45827 27.8251C9.72223 28.1565 10.9774 28.5359 12.1968 29.0067C12.0401 29.1355 11.8885 29.2731 11.742 29.4194C10.6081 30.5534 10.0369 32.0932 9.59467 33.6341L9.31416 34.6571L9.042 35.6784L8.79495 36.6721L8.5875 37.5722L8.35799 38.6493L8.22598 39.3226C8.11389 39.9234 8.25993 40.6491 8.80556 41.1948C9.35118 41.7405 10.077 41.8864 10.6778 41.7744L11.8251 41.5439L13.0296 41.2759L14.0901 41.0178L15.8531 40.5489C17.56 40.0833 19.3209 39.5182 20.581 38.2582L20.7793 38.0508L21.3511 39.6403L21.8999 41.2378C22.2085 42.1722 22.5337 43.1569 23.2131 43.8362C24.4546 45.0779 26.3918 44.5494 27.9149 43.9316L28.7208 43.5857L29.3481 43.2998C30.7512 42.6396 32.3687 41.7012 32.798 40.2107C33.0061 39.4881 33.0197 38.7368 32.9994 37.9818L32.9636 36.8498C32.9566 36.4736 32.9612 36.0996 32.9975 35.731C40.2757 30.7019 43.1736 24.2067 44.0566 18.7628C44.504 16.0049 44.4355 13.5203 44.1733 11.6242ZM39.9437 18.0957C39.2008 22.6757 36.7476 28.2395 30.2175 32.5819C29.4265 33.1079 29.047 33.9979 28.9037 34.9052C28.8229 35.4172 28.8009 35.9337 28.8 36.4519L28.823 38.0083C28.8248 38.2675 28.8225 38.5264 28.8114 38.7847C27.9691 39.4178 26.9687 39.8601 25.9745 40.1922L24.8404 37.067L24.3545 35.7811C23.4336 33.4323 22.3194 31.1574 20.5687 29.4068C17.6206 26.4586 13.7643 24.9599 9.82576 23.8765C10.1578 22.9276 10.5835 21.9722 11.1908 21.1642L11.9676 21.1526L13.5211 21.176C14.0385 21.1752 14.5552 21.1531 15.0703 21.0717C15.9776 20.9286 16.8676 20.549 17.3937 19.758C21.7362 13.228 27.2999 10.7747 31.8799 10.0317C34.1921 9.65675 36.2576 9.71904 37.7806 9.92966C38.6061 10.0438 39.2568 10.2026 39.645 10.3305C39.7729 10.7186 39.9318 11.3695 40.0459 12.1949C40.2565 13.718 40.3187 15.7834 39.9437 18.0957ZM17.6347 35.312C16.7552 36.0408 15.5978 36.3818 14.4514 36.655L13.4782 36.88C13.3186 36.9173 13.161 36.955 13.0062 36.9941L13.3453 35.5485C13.6185 34.4017 13.9596 33.2439 14.6893 32.3648C15.5028 31.5512 16.821 31.5521 17.6347 32.3657C18.4483 33.1793 18.4483 34.4984 17.6347 35.312ZM32.366 23.5267C33.9931 21.8997 33.9931 19.2613 32.366 17.6342C30.7388 16.007 28.1006 16.007 26.4735 17.6342C24.8462 19.2613 24.8462 21.8997 26.4735 23.5267C28.1006 25.154 30.7388 25.154 32.366 23.5267Z" fill="white"/>
                </svg> 
            </div>
            <div class="w-full max-w-[20rem] text-left">
                <p class="font-butler text-[18px] md:text-[24px] font-[500]">26 Aug 10 AM</p>
            </div>
        </div>
        <div class="my-4">
          <svg class="relative mx-auto" width="24" height="184" viewBox="0 0 24 184" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.5 2C10.5 1.17157 11.1716 0.5 12 0.5C12.8284 0.5 13.5 1.17157 13.5 2H10.5ZM13.0607 183.061C12.4749 183.646 11.5251 183.646 10.9393 183.061L1.3934 173.515C0.807611 172.929 0.807611 171.979 1.3934 171.393C1.97919 170.808 2.92893 170.808 3.51472 171.393L12 179.879L20.4853 171.393C21.0711 170.808 22.0208 170.808 22.6066 171.393C23.1924 171.979 23.1924 172.929 22.6066 173.515L13.0607 183.061ZM13.5 2L13.5 86.375H10.5L10.5 2H13.5ZM13.5 86.375L13.5 182H10.5L10.5 86.375H13.5Z" fill="#282828"/>
          </svg>
        </div>
        <div class="flex items-center justify-center w-full">
            <div class="w-full max-w-[20rem] text-right">
                <p class="font-butler text-[18px] md:text-[24px] font-[500]">Book Signing Period</p>
            </div>
            <div class="min-h-[40px] md:min-h-[80px] min-w-[40px] md:min-w-[80px] rounded-full inline-flex items-center justify-center mx-5 md:mx-10 bg-black">
              <svg class="h-[25px] md:h-[50px] w-[25px] md:w-[50px]" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.25 43.75L4.22002 43.2814C4.0585 43.9814 4.26894 44.7152 4.77685 45.2231C5.28479 45.731 6.01854 45.9414 6.71846 45.78L6.25 43.75ZM19.0551 33.8908C19.8687 33.0773 19.8687 31.7581 19.0551 30.9446C18.2415 30.131 16.9224 30.131 16.1088 30.9446L19.0551 33.8908ZM20.8333 30.2083C20.8333 30.7835 20.367 31.25 19.7917 31.25V35.4166C22.6681 35.4166 25 33.0848 25 30.2083H20.8333ZM19.7917 31.25C19.2164 31.25 18.75 30.7835 18.75 30.2083H14.5833C14.5833 33.0848 16.9152 35.4166 19.7917 35.4166V31.25ZM18.75 30.2083C18.75 29.6329 19.2164 29.1666 19.7917 29.1666V25C16.9152 25 14.5833 27.3319 14.5833 30.2083H18.75ZM19.7917 29.1666C20.367 29.1666 20.8333 29.6329 20.8333 30.2083H25C25 27.3319 22.6681 25 19.7917 25V29.1666ZM29.5031 7.1338L25.6102 11.0268L28.5565 13.9731L32.4494 10.0801L29.5031 7.1338ZM26.511 10.4968L15.7081 13.5833L16.8527 17.5897L27.6556 14.5031L26.511 10.4968ZM9.58594 20.0291L4.22002 43.2814L8.27998 44.2183L13.6459 20.966L9.58594 20.0291ZM6.71846 45.78L29.9708 40.4139L29.034 36.3539L5.78154 41.72L6.71846 45.78ZM36.4167 34.2919L39.5031 23.4889L35.4969 22.3441L32.4102 33.1473L36.4167 34.2919ZM38.9731 24.3898L42.866 20.4968L39.9198 17.5505L36.0269 21.4435L38.9731 24.3898ZM42.866 12.8364L37.1635 7.1338L34.2173 10.0801L39.9198 15.7827L42.866 12.8364ZM42.866 20.4968C43.2544 20.1085 43.6352 19.7299 43.9287 19.3843C44.2379 19.02 44.5704 18.5577 44.7665 17.9542L40.8037 16.6666C40.8452 16.5387 40.8942 16.5205 40.7523 16.6877C40.5946 16.8735 40.3567 17.1137 39.9198 17.5505L42.866 20.4968ZM39.9198 15.7827C40.3567 16.2195 40.5946 16.4597 40.7523 16.6455C40.8942 16.8126 40.8452 16.7945 40.8037 16.6666L44.7665 15.379C44.5704 14.7754 44.2379 14.3132 43.9287 13.9489C43.6352 13.6033 43.2544 13.2246 42.866 12.8364L39.9198 15.7827ZM44.7665 17.9542C45.0383 17.1173 45.0383 16.2159 44.7665 15.379L40.8037 16.6666L44.7665 17.9542ZM29.9708 40.4139C31.225 40.1246 32.321 39.8973 33.2502 39.3321L31.0848 35.7725C30.866 35.9054 30.5681 36 29.034 36.3539L29.9708 40.4139ZM32.4102 33.1473C31.9777 34.661 31.8679 34.9537 31.7237 35.1654L35.1675 37.5112C35.7798 36.6125 36.0631 35.5294 36.4167 34.2919L32.4102 33.1473ZM33.2502 39.3321C34.0119 38.8689 34.6656 38.2479 35.1675 37.5112L31.7237 35.1654C31.5565 35.411 31.3387 35.6179 31.0848 35.7725L33.2502 39.3321ZM15.7081 13.5833C14.4705 13.9369 13.3875 14.2202 12.4887 14.8325L14.8345 18.2761C15.0461 18.1319 15.3388 18.0222 16.8527 17.5897L15.7081 13.5833ZM13.6459 20.966C14 19.4318 14.0945 19.1339 14.2275 18.9151L10.6678 16.7497C10.1025 17.6789 9.87535 18.775 9.58594 20.0291L13.6459 20.966ZM12.4887 14.8325C11.7519 15.3344 11.1311 15.9881 10.6678 16.7497L14.2275 18.9151C14.382 18.6613 14.5889 18.4434 14.8345 18.2761L12.4887 14.8325ZM32.4494 10.0801C32.8862 9.64328 33.1265 9.40538 33.3123 9.24767C33.4794 9.10573 33.4612 9.15465 33.3333 9.19619L32.0458 5.23346C31.4421 5.42959 30.98 5.76203 30.6156 6.07125C30.27 6.36469 29.8915 6.74561 29.5031 7.1338L32.4494 10.0801ZM37.1635 7.1338C36.7752 6.74559 36.3967 6.36469 36.051 6.07125C35.6867 5.76203 35.2246 5.42959 34.6208 5.23346L33.3333 9.19619C33.2054 9.15465 33.1873 9.10575 33.3544 9.24767C33.5402 9.40538 33.7804 9.64325 34.2173 10.0801L37.1635 7.1338ZM33.3333 9.19619L34.6208 5.23346C33.784 4.96157 32.8827 4.96157 32.0458 5.23346L33.3333 9.19619ZM25.6102 13.9731L36.0269 24.3898L38.9731 21.4435L28.5565 11.0268L25.6102 13.9731ZM16.1088 30.9446L4.77685 42.2769L7.72314 45.2231L19.0551 33.8908L16.1088 30.9446Z" fill="white"/>
              </svg>
            </div>
            <div class="w-full max-w-[20rem] text-left">
                <p class="font-butler text-[18px] md:text-[24px] font-[500]">9 - 12 Sept</p>
            </div>
        </div>
        <div class="my-4">
          <svg class="relative mx-auto" width="24" height="184" viewBox="0 0 24 184" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.5 2C10.5 1.17157 11.1716 0.5 12 0.5C12.8284 0.5 13.5 1.17157 13.5 2H10.5ZM13.0607 183.061C12.4749 183.646 11.5251 183.646 10.9393 183.061L1.3934 173.515C0.807611 172.929 0.807611 171.979 1.3934 171.393C1.97919 170.808 2.92893 170.808 3.51472 171.393L12 179.879L20.4853 171.393C21.0711 170.808 22.0208 170.808 22.6066 171.393C23.1924 171.979 23.1924 172.929 22.6066 173.515L13.0607 183.061ZM13.5 2L13.5 86.375H10.5L10.5 2H13.5ZM13.5 86.375L13.5 182H10.5L10.5 86.375H13.5Z" fill="#282828"/>
          </svg>
        </div>
        <div class="flex items-center justify-center w-full">
            <div class="w-full max-w-[20rem] text-right">
                <p class="font-butler text-[18px] md:text-[24px] font-[500]">Fulfilment Period</p>
            </div>
            <div class="min-h-[40px] md:min-h-[80px] min-w-[40px] md:min-w-[80px] rounded-full inline-flex items-center justify-center mx-5 md:mx-10 bg-black">
              <svg class="h-[25px] md:h-[50px] w-[25px] md:w-[50px]" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.25 25C6.25 35.3553 14.6447 43.75 25 43.75C35.3553 43.75 43.75 35.3553 43.75 25C43.75 14.6447 35.3553 6.25 25 6.25C14.6447 6.25 6.25 14.6447 6.25 25Z" fill="#282828"/>
                <path d="M12.1875 12.1875L37.8125 37.8125M43.75 25C43.75 21.2916 42.6503 17.6665 40.5901 14.5831C38.5298 11.4996 35.6014 9.09641 32.1753 7.67727C28.7492 6.25812 24.9792 5.88681 21.3421 6.61028C17.7049 7.33376 14.364 9.11952 11.7417 11.7418C9.11951 14.364 7.33374 17.7049 6.61027 21.3421C5.8868 24.9792 6.25811 28.7492 7.67725 32.1753C9.0964 35.6014 11.4996 38.5298 14.5831 40.5901C17.6665 42.6503 21.2916 43.75 25 43.75C29.9728 43.75 34.7419 41.7746 38.2583 38.2583C41.7746 34.742 43.75 29.9728 43.75 25Z" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="w-full max-w-[20rem] text-left">
                <p class="font-butler text-[18px] md:text-[24px] font-[500]">13 - 20 Sept</p>
            </div>
        </div>
        <div class="my-4">
          <svg class="relative mx-auto" width="24" height="184" viewBox="0 0 24 184" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.5 2C10.5 1.17157 11.1716 0.5 12 0.5C12.8284 0.5 13.5 1.17157 13.5 2H10.5ZM13.0607 183.061C12.4749 183.646 11.5251 183.646 10.9393 183.061L1.3934 173.515C0.807611 172.929 0.807611 171.979 1.3934 171.393C1.97919 170.808 2.92893 170.808 3.51472 171.393L12 179.879L20.4853 171.393C21.0711 170.808 22.0208 170.808 22.6066 171.393C23.1924 171.979 23.1924 172.929 22.6066 173.515L13.0607 183.061ZM13.5 2L13.5 86.375H10.5L10.5 2H13.5ZM13.5 86.375L13.5 182H10.5L10.5 86.375H13.5Z" fill="#282828"/>
          </svg>
        </div>
        <div class="flex items-center justify-center w-full">
            <div class="w-full max-w-[20rem] text-right">
                <p class="font-butler text-[18px] md:text-[24px] font-[500]">Received by</p>
            </div>
            <div class="min-h-[40px] md:min-h-[80px] min-w-[40px] md:min-w-[80px] rounded-full inline-flex items-center justify-center mx-5 md:mx-10 bg-black">
            <svg class="h-[25px] md:h-[50px] w-[25px] md:w-[50px]" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.33282 32.9785V32.8131V16.6673C8.33282 16.0238 8.67989 15.4304 9.24072 15.1149L9.27305 15.0968L24.2041 6.69802L24.3176 6.63419C24.7409 6.39602 25.258 6.39602 25.6814 6.63419L40.8547 15.1692C41.3559 15.4511 41.6662 15.9815 41.6662 16.5566V16.6673V32.8131V32.9785C41.6662 33.5671 41.3549 34.1117 40.848 34.4104L25.7891 43.2852C25.3018 43.5723 24.6972 43.5723 24.2099 43.2852L9.15089 34.4104C8.64397 34.1117 8.33282 33.5671 8.33282 32.9785Z" stroke="white" stroke-width="4.16667"/>
              <path d="M24.9999 43.75V25" stroke="white" stroke-width="4.16667"/>
              <path d="M24.9995 25L8.33282 15.625" stroke="white" stroke-width="4.16667"/>
              <path d="M41.6666 15.625L24.9999 25" stroke="white" stroke-width="4.16667"/>
            </svg>
            </div>
            <div class="w-full max-w-[20rem] text-left">
                <p class="font-butler text-[18px] md:text-[24px] font-[500]">18 Sept onwards</p>
            </div>
        </div>
    </div>
  </div>
</section>

<section id="preorder" class="delimiter py-[50px] md:py-[100px]">
  <h2 class="font-butler text-[32px] md:text-[48px] font-medium text-center pb-[50px] md:pb-[100px]">Full Moon Package</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-32">
   <div class="md:px-24 text-center">
      <h3 class="font-butler text-[32px] md:text-[48px] font-normal text-center">Shoppe</h3>
      <p class="text-[#74642F] text-[16px] md:text-[24px] py-6 font-normal leading-[28.8px]">For customers residing in Malaysia.</p>
      <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/shoppe.png" class="w-[50%] md:w-auto m-auto" alt="">
   </div> 
   <div class="md:px-24 text-center pt-[50px]">
    <h3 class="font-butler text-[32px] md:text-[48px] font-normal text-center">Website</h3>
    <p class="text-[#74642F] text-[16px] md:text-[24px] py-6 font-normal leading-[28.8px]">For customers residing in Malaysia & Overseas.</p>
    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/n-logo.png" class="w-[50%] md:w-auto m-auto" alt="">
  </div> 
  </div>
</section>

<section>
  <div class="h-full pt-[50px] md:pt-0">
    <div class="flex h-full items-center">
      <img class="m-auto md:h-screen" src="<?php bloginfo('stylesheet_directory');?>/assets/img/profile.png" alt="">
    </div>
  </div>
</section>

<section id="faq">
  <div itemscope itemtype="https://schema.org/FAQPage">
    <div class="py-[50px] md:py-[100px] delimiter mx-auto">
      <h1 class="font-butler text-[32px] md:text-[48px] font-medium text-center pb-[50px] md:pb-[100px]">Frequently Ask Question </h1>
      <ul class="grid gap-6" data-list="faq">
        <li class="group" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <input class="peer/option-1 hidden" type="checkbox" id="checkbox-option-1" name="checkbox-options">
          <label class="border-b-2 border-[#DADADA] peer-checked/option-1:bg-[#282828] peer-checked/option-1:text-white peer-checked/option-1:[&>svg]:rotate-45 block cursor-pointer p-4 pr-12 font-bold transition-all duration-150 ease-in-out relative" for="checkbox-option-1" itemprop="name">
            PRE-ORDER & PRODUCT SPECIFICATION
            <svg class="block absolute top-1/2 right-4 -mt-[11.5px] transition-all duration-150 ease-in-out" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 11.5L21 11.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M11 1.5L11 21.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </label>
          <div class="grid grid-rows-[0fr] transition-all duration-150 ease-in-out peer-checked/option-1:grid-rows-[1fr]" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div class="min-h-[0px] overflow-hidden">
              <div class="mt-2 p-4 border-slate-900 rounded" itemprop="text">Description 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, laudantium.</div>
            </div>
          </div>
        </li>
        <li class="group" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <input class="peer/option-2 hidden" type="checkbox" id="checkbox-option-2" name="checkbox-options">
          <label class="border-b-2 border-[#DADADA] peer-checked/option-2:bg-[#282828] peer-checked/option-2:text-white peer-checked/option-2:[&>svg]:rotate-45 block cursor-pointer p-4 pr-12 font-bold transition-all duration-150 ease-in-out relative" for="checkbox-option-2" itemprop="name">
            PAYMENT
            <svg class="block absolute top-1/2 right-4 -mt-[11.5px] transition-all duration-150 ease-in-out" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 11.5L21 11.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M11 1.5L11 21.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </label>
          <div class="grid grid-rows-[0fr] transition-all duration-150 ease-in-out peer-checked/option-2:grid-rows-[1fr]" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div class="min-h-[0px] overflow-hidden">
              <div class="mt-2 p-4 border-slate-900 rounded" itemprop="text">Description 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, laudantium.</div>
            </div>
          </div>
        </li>
        <li class="group" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <input class="peer/option-3 hidden" type="checkbox" id="checkbox-option-3" name="checkbox-options">
          <label class="border-b-2 border-[#DADADA] peer-checked/option-3:bg-[#282828] peer-checked/option-3:text-white peer-checked/option-3:[&>svg]:rotate-45 block cursor-pointer p-4 pr-12 font-bold transition-all duration-150 ease-in-out relative" for="checkbox-option-3" itemprop="name">
            SHIPPING & REFUND
            <svg class="block absolute top-1/2 right-4 -mt-[11.5px] transition-all duration-150 ease-in-out" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 11.5L21 11.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M11 1.5L11 21.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </label>
          <div class="grid grid-rows-[0fr] transition-all duration-150 ease-in-out peer-checked/option-3:grid-rows-[1fr]" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div class="min-h-[0px] overflow-hidden">
              <div class="mt-2 p-4 border-slate-900 rounded" itemprop="text">Description 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, laudantium.</div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<section id="contact">
  <div class="text-center py-[50px] md:py-[100px]">
    <h2 class="font-butler text-[32px] md:text-[48px] font-medium text-center">Still have Question?</h2>
    <p class="py-[25px]">We're here for you! How can we help?</p>
    <div class="pt-3"><a href="" class="bg-[#10A37F] rounded-full px-6 py-3 w-fit text-white text-[16px]">Chat Us <img class="inline-block w-4 mb-[5px] ml-[2px]" src="<?php bloginfo('stylesheet_directory');?>/assets/img/send-icon.png" alt=""></a></div>
  </div>
</section>
<?php get_footer();?>

