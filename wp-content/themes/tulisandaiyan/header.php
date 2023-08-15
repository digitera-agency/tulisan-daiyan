<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
<?php if(is_front_page() || is_home()){
    echo get_bloginfo('name'); echo " - "; bloginfo('description');
    } else{
        echo wp_title(''); echo " - "; bloginfo('description');
    }?>
</title>

<meta name="description" content="<?php if ( is_single() ) {
    single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    
?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" />
<link href="<?php bloginfo('stylesheet_directory') ;?>/style.css" rel="stylesheet" type="text/css">
<?php wp_head();?>
</head>

<body class="bg-[#FBF6F0]">

<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-12 w-auto" src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="">
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="#" class="text-sm font-normal leading-6 text-gray-900 uppercase tracking-widest">synopsis</a>
        <a href="#" class="text-sm font-normal leading-6 text-gray-900 uppercase tracking-widest">PACKAGE</a>
        <a href="#" class="text-sm font-normal leading-6 text-gray-900 uppercase tracking-widest">timeline</a>
        <a href="#" class="text-sm font-normal leading-6 text-gray-900 uppercase tracking-widest">faq</a>
        <a href="#" class="text-sm font-normal leading-6 text-gray-900 uppercase tracking-widest">Contact</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#" class="text-sm font-semibold text-white bg-[#8E2424] rounded-full px-6 py-2.5 tracking-widest">Pre-order now</a>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="./logo.png" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 uppercase">sYnopsis</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 uppercase">PACKAGE</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 uppercase">timeline</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 uppercase">faq</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 uppercase">Contact</a>
            </div>
            <div class="py-6">
              <a href="#" class="-mx-3 block bg-[#8E2424] rounded-lg px-3 py-2.5 text-base font-semibold leading-7">Pre-order now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
<main>