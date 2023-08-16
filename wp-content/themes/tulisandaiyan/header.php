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
<link rel="icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" />
<link href="<?php bloginfo('stylesheet_directory') ;?>/style.css" rel="stylesheet" type="text/css">
<?php wp_head();?>
</head>

<body class="bg-[#FBF6F0]">

<nav class="bg-[#FBF6F0] fixed w-full z-20 top-0 left-0 nav">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="/" class="flex items-center">
      <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" class="h-8 mr-3" alt="Logo">
  </a>
  <div class="flex lg:order-2">
      <a href="#preorder" class="text-sm font-semibold text-white bg-[#8E2424] rounded-full px-6 me-3 py-2.5 tracking-widest">Pre-order now</a>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
    <ul class="lg:bg-[#FBF6F0] bg-[#282828] flex flex-col p-4 w-full lg:p-0 mt-4 font-medium border border-gray-100 rounded-lg lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0">
      <li>
        <a href="#synopsis" class="block py-2 pr-4 uppercase text-white lg:text-[#111]">synopsis</a>
      </li>
      <li>
        <a href="#package" class="block py-2 pr-4 uppercase text-white lg:text-[#111]">Package</a>
      </li>
      <li>
        <a href="#timeline" class="block py-2 pr-4 uppercase text-white lg:text-[#111]">Timeline</a>
      </li>
      <li>
        <a href="#faq" class="block py-2 pr-4 uppercase text-white lg:text-[#111]">Faq</a>
      </li>
      <li>
        <a href="#contact" class="block py-2 pr-4 uppercase text-white lg:text-[#111]">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
<script>
 
</script>
<main>