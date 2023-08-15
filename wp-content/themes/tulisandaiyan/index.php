<?php 

/**

 * Template Name: Home
 *

 */

get_header();?>
<section>
    <div class="h-screen">
      <div class="flex h-full items-center">
        <img class="m-auto " src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="">
      </div>
    </div>
  </section>

<section>
  <div class="py-[100px]">
    <img class="m-auto" src="<?php bloginfo('stylesheet_directory');?>/assets/img/section-book.png" alt="">
    <img class="m-auto" src="<?php bloginfo('stylesheet_directory');?>/assets/img/ttd-section-book.png" alt="">
  </div>
</section>

<section class="bg-[#282828]">
  <div>
    <div class="text-center py-[100px]">
      <h2 class="text-[48px] font-light text-white font-butler">Ready To Launch In...</h2>
      <div class="flex gap-[30px] items-top justify-center">
        <div class="days flex items-center flex-col">
          <span class="capitalize py-[45px] block text-white font-medium text-[14px]">days</span>
          <span class="number font-medium text-[72px] text-white"></span>
        </div>
        <div class="hours">
          <span class="capitalize py-[45px] block text-white font-medium text-[14px]">hours</span>
          <span class="number font-medium text-[72px] text-white"></span>
        </div>
        <div class="minutes">
          <span class="capitalize py-[45px] block text-white font-medium text-[14px]">minutes</span>
          <span class="number font-medium text-[72px] text-white"></span>
        </div>
        <div class="seconds">
          <span class="capitalize py-[45px] block text-white font-medium text-[14px]">seconds</span>
          <span class="number font-medium text-[72px] text-white"></span>
        </div>
      </div>
      <div class="pt-[50px]">
        <b class="text-center text-white font-bold text-[16px]">PRE ORDER ON 26 AUG (10:00)</b>
      </div>      
    </div>
  </div>
</section>

<section>
  <div class="h-full delimiter">
    <div class="flex h-full items-center">
      <img class="m-auto h-screen object-contain" src="<?php bloginfo('stylesheet_directory');?>/assets/img/slider-book.png" alt="">
    </div>
  </div>
</section>

<section class="bg-[#EDEBE4]">
  <div class="h-full delimiter">
    <div class="flex h-full items-center">
      <img class="m-auto h-screen object-contain" src="<?php bloginfo('stylesheet_directory');?>/assets/img/synopsis.png" alt="">
    </div>
  </div>
</section>

<section class="py-[50px]">
  <div class="h-full delimiter">
    <h2 class="font-medium text-[48px] font-butler text-center">Book Specification</h2>
    <div class="flex h-full items-center">
      <img class="m-auto h-screen object-contain" src="<?php bloginfo('stylesheet_directory');?>/assets/img/book-spek.png" alt="">
    </div>
  </div>
</section>

<section class="delimiter py-[100px]">
  <div class="grid grid-cols-2 gap-x-32 h-screen">
    <div>
      <h2 class="font-butler text-[42px] font-medium">Full Moon Package</h2>
      <p class="pt-3">
        <ul class="list-disc ps-4">
          <li>Tulisan Hard Cover</li>
          <li>Daiyan’s Autograph</li>
          <li>Tulisan Gift Box</li>
          <li>Daiyan’s Special Letter</li>
          <li>8 pcs Exclusive Photo Cards</li>
        </ul>
      </p>
      <div class="py-8">
        <b class="uppercase font-[750] tracking-widest">limited To 1000 copies</b>
      </div>
      <div>
        <h3 class="font-[400] text-[64px]">RM 80.000</h3>
      </div>
      <div class="mt-5">
        <a href="#" class="bg-[#8E2424] rounded-full w-fit px-6 text-white py-2.5 font-semibold">Pre-order now</a>
      </div>
    </div>
    <div class="demo">
      <ul id="lightSlider">
          <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/1.png">
              <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/1.png" />
          </li>
          <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/2.png">
              <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/2.png" />
          </li>
          <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/3.png">
              <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/3.png" />
          </li>
          <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/4.png">
            <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/4.png" />
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="delimiter py-[100px]">
  <div class="grid grid-cols-2 gap-x-32 h-screen">
    <div class="demo">
      <ul id="lightSlider2">
          <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/1.png">
              <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/1.png" />
          </li>
          <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/2.png">
              <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/2.png" />
          </li>
          <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/3.png">
              <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/3.png" />
          </li>
          <li data-thumb="<?php bloginfo('stylesheet_directory');?>/assets/img/4.png">
            <img class="w-full h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/4.png" />
        </li>
      </ul>
    </div>
    <div>
      <h2 class="font-butler text-[42px] font-medium">Full Moon Package</h2>
      <p class="pt-3">
        <ul class="list-disc ps-4">
          <li>Tulisan Hard Cover</li>
          <li>Daiyan’s Autograph</li>
          <li>Tulisan Gift Box</li>
          <li>Daiyan’s Special Letter</li>
          <li>8 pcs Exclusive Photo Cards</li>
        </ul>
      </p>
      <div class="py-8">
        <b class="uppercase font-[750] tracking-widest">limited To 1000 copies</b>
      </div>
      <div>
        <h3 class="font-[400] text-[64px]">RM 80.000</h3>
      </div>
      <div class="mt-5">
        <a href="#" class="bg-[#8E2424] rounded-full w-fit px-6 text-white py-2.5 font-semibold">Pre-order now</a>
      </div>
    </div>
  </div>
</section>
<section class="delimiter py-[100px]">
  <div class="grid grid-cols-2 gap-x-32 h-screen">
    <div>
      <h2 class="font-butler text-[42px] font-medium">Full Moon Package</h2>
      <p class="pt-3">
        <ul class="list-disc ps-4">
          <li>Tulisan Hard Cover</li>
          <li>Daiyan’s Autograph</li>
          <li>Tulisan Gift Box</li>
          <li>Daiyan’s Special Letter</li>
          <li>8 pcs Exclusive Photo Cards</li>
        </ul>
      </p>
      <div class="py-8">
        <b class="uppercase font-[750] tracking-widest">limited To 1000 copies</b>
      </div>
      <div>
        <h3 class="font-[400] text-[64px]">RM 80.000</h3>
      </div>
      <div class="mt-5">
        <a href="#" class="bg-[#8E2424] rounded-full w-fit px-6 text-white py-2.5 font-semibold">Pre-order now</a>
      </div>
    </div>
    <div>
      <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/eclipse-packages.png" alt="">
    </div>
  </div>
</section>
<section class="py-[100px] bg-white w-full">
  <h2 class="font-butler text-[42px] font-medium text-center pb-[100px]">Full Moon Package</h2>
  <div class="max-w-screen-lg w-full mx-auto px-10">
      <div class="flex items-center justify-center w-full">
          <div class="w-full max-w-[20rem] text-right">
              <p class="text-sm">Launch</p>
          </div>
          <div class="min-h-[3rem] min-w-[3rem] rounded-full inline-flex items-center justify-center mx-4 bg-black">
              <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.1438 1.12988L1.1438 13.1299H10.1438L9.1438 21.1299L19.1438 9.12988H10.1438L11.1438 1.12988Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
          </div>
          <div class="w-full max-w-[20rem] text-left">
              <p class="text-sm">26 Aug 10 AM</p>
          </div>
      </div>
      <div class="h-[6rem] w-[2px] bg-black my-4 mx-auto"></div>
      <div class="flex items-center justify-center w-full">
          <div class="w-full max-w-[20rem] text-right">
              <p class="text-sm">Book Signing Period</p>
          </div>
          <div class="min-h-[3rem] min-w-[3rem] rounded-full inline-flex items-center justify-center mx-4 bg-black">
              <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.1438 1.12988L1.1438 13.1299H10.1438L9.1438 21.1299L19.1438 9.12988H10.1438L11.1438 1.12988Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
          </div>
          <div class="w-full max-w-[20rem] text-left">
              <p class="text-sm">9 - 12 Sept</p>
          </div>
      </div>
      <div class="h-[6rem] w-[2px] bg-black my-4 mx-auto"></div>
      <div class="flex items-center justify-center w-full">
          <div class="w-full max-w-[20rem] text-right">
              <p class="text-sm">Fulfilment Period</p>
          </div>
          <div class="min-h-[3rem] min-w-[3rem] rounded-full inline-flex items-center justify-center mx-4 bg-black">
              <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.1438 1.12988L1.1438 13.1299H10.1438L9.1438 21.1299L19.1438 9.12988H10.1438L11.1438 1.12988Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
          </div>
          <div class="w-full max-w-[20rem] text-left">
              <p class="text-sm">13 - 20 Sept</p>
          </div>
      </div>
  </div>
</section>

<section class="delimiter py-[100px]">
  <h2 class="font-butler text-[42px] font-medium text-center pb-[100px]">Full Moon Package</h2>
  <div class="grid grid-cols-2 gap-x-32">
   <div class="px-24 text-center">
      <h3 class="font-butler text-[48px] font-normal text-center">Shoppe</h3>
      <p class="text-[#74642F] text-[24px] py-6 font-normal leading-[28.8px]">For customers residing in Malaysia.</p>
      <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/shoppe.png" alt="">
   </div> 
   <div class="px-24 text-center">
    <h3 class="font-butler text-[48px] font-normal text-center">Website</h3>
    <p class="text-[#74642F] text-[24px] py-6 font-normal leading-[28.8px]">For customers residing in Malaysia & Overseas.</p>
    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/n-logo.png" alt="">
  </div> 
  </div>
</section>

<section class="bg-[#EDEBE4]">
  <div class="h-screen">
    <div class="flex h-full items-center">
      <img class="m-auto h-full" src="<?php bloginfo('stylesheet_directory');?>/assets/img/profile.png" alt="">
    </div>
  </div>
</section>


<div itemscope itemtype="https://schema.org/FAQPage">

  <div class="py-10 px-4 delimiter mx-auto">
    <h1 class="font-butler text-[42px] font-medium text-center pb-[100px]">FAQ items stay open (Checkbox)</h1>
    <ul class="grid gap-6" data-list="faq">
      <li class="group" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <input class="peer/option-1 hidden" type="checkbox" id="checkbox-option-1" name="checkbox-options">
        <label class="border-b-2 border-[#DADADA] peer-checked/option-1:bg-slate-900 peer-checked/option-1:text-white peer-checked/option-1:[&>svg]:rotate-45 block cursor-pointer p-4 pr-12 font-bold transition-all duration-150 ease-in-out relative" for="checkbox-option-1" itemprop="name">
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
        <label class="border-b-2 border-[#DADADA] peer-checked/option-2:bg-slate-900 peer-checked/option-2:text-white peer-checked/option-2:[&>svg]:rotate-45 block cursor-pointer p-4 pr-12 font-bold transition-all duration-150 ease-in-out relative" for="checkbox-option-2" itemprop="name">
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
        <label class="border-b-2 border-[#DADADA] peer-checked/option-3:bg-slate-900 peer-checked/option-3:text-white peer-checked/option-3:[&>svg]:rotate-45 block cursor-pointer p-4 pr-12 font-bold transition-all duration-150 ease-in-out relative" for="checkbox-option-3" itemprop="name">
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

<section>
  <div class="text-center py-[100px]">
    <h2 class="font-butler text-[42px] font-medium text-center">Still have Question?</h2>
    <p class="py-[25px]">We're here for you! How can we help?</p>
    <div class="pt-3"><a href="" class="bg-[#10A37F] rounded-full px-6 py-3 w-fit text-white text-[16px]">Chat Us <img class="inline-block w-4 mb-[5px] ml-[2px]" src="<?php bloginfo('stylesheet_directory');?>/assets/img/send-icon.png" alt=""></a></div>
  </div>
</section>
<?php get_footer();?>

