<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DatingTextBot | AI Powered Dating</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
<link rel="apple-touch-icon" sizes="180x180" href="">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="icon" type="image/png" href="/favicon.ico">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@">
<meta name="twitter:creator" content="@">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">

<!-- Facebook -->
<meta property="og:url" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:type" content="page">
<meta property="og:image" content="">
<meta property="og:image:type" content="image/png">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<!-- Styles -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
</head>
</head>
<body class="bg-gray-50 dark:bg-gray-800">
<header>
<nav id="mainNavbar" data-sticky="true" class="group dark:bg-transparent bg-transparent border-gray-200 py-2.5 fixed w-full z-40 top-0 start-0 data-[sticky=true]:bg-white data-[sticky=true]:border-b dark:data-[sticky=true]:bg-gray-800 dark:data-[sticky=true]:border-gray-700">
<div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4">
<a href="/" class="flex items-center">
<img src=i src="chR_BUBBLES.SVG" class="h-8 mr-3" alt="Flowbite Logo" />
<span class="self-center text-2xl font-semibold whitespace-nowrap text-white group-data-[sticky=true]:text-gray-900 dark:group-data-[sticky=true]:text-white">Flowbite</span>
</a>
<div class="flex items-center g:order-2">
<flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle" aria-label="Toggle dark mode" />    
<div id="tooltip-toggle" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip">
Toggle dark mode
<div class="tooltip-arrow" data-popper-arrow></div>
</div>
<button data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
<svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
<path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
</svg>
View pages
</button>
<button id="mobile-menu-button" data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-300 group-data-[sticky=true]:text-gray-500 group-data-[sticky=true]:dark:text-gray-400 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none dark:text-gray-300 dark:hover:bg-gray-700 focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
<span class="sr-only">Open main menu</span>
<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
<svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</button>
</div>

</ul>
</div>
</div>
</nav>
</header>



<div id="drawer-navigation" class="fixed top-0 left-0 z-50 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
<h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">All pages</h5>
<button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
</svg>
<span class="sr-only">Close menu</span>
</button>
<div class="py-4 overflow-y-auto">
<ul class="space-y-2 font-medium">
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-landings" data-collapse-toggle="dropdown-landings">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ml-4">Landings</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-landings" class="hidden py-2 space-y-2">
<li>
<a href="/landing/agency/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Agency</a>
</li>
<li>
<a href="/landing/mobile-application/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Mobile app</a>
</li>
<li>
<a href="/landing/digital-product/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Digital product</a>
</li>
<li>
<a href="/landing/saas/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">SaaS product</a>
</li>
<li>
<a href="/landing/open-source/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Open-source</a>
</li>
<li>
<a href="/landing/pre-launch/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pre-launch page</a>
</li>
<li>
<a href="/landing/physical-product/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Physical product</a>
</li>
<li>
<a href="/landing/crypto/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Crypto exchange</a>
</li>
<li>
<a href="/landing/event/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Event schedule</a>
</li>
<li>
<a href="/landing/ngo/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">NGO presentation</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-about" data-collapse-toggle="dropdown-about">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ml-4">About</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-about" class="hidden py-2 space-y-2">
<li>
<a href="/about/about-1/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">About feature list</a>
</li>
<li>
<a href="/about/about-2/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">About with video</a>
</li>
<li>
<a href="/about/about-3/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">About with statistics</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-services" data-collapse-toggle="dropdown-services">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M19.728 10.686c-2.38 2.256-6.153 3.381-9.875 3.381-3.722 0-7.4-1.126-9.571-3.371L0 10.437V18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-7.6l-.272.286Z"/>
<path d="m.135 7.847 1.542 1.417c3.6 3.712 12.747 3.7 16.635.01L19.605 7.9A.98.98 0 0 1 20 7.652V6a2 2 0 0 0-2-2h-3V3a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v1H2a2 2 0 0 0-2 2v1.765c.047.024.092.051.135.082ZM10 10.25a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5ZM7 3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1H7V3Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ml-4">Services</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-services" class="hidden py-2 space-y-2">
<li>
<a href="/services/services-1/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Services feature icons</a>
</li>
<li>
<a href="/services/services-2/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Services with images</a>
</li>
<li>
<a href="/services/services-3/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Services image cards</a>
</li>
<li>
<a href="/services/services-4/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Services statistics</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-team" data-collapse-toggle="dropdown-team">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
<path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
</svg> 
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ml-4">Team</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-team" class="hidden py-2 space-y-2">
<li>
<a href="/team/team-1/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Team hover cards</a>
</li>
<li>
<a href="/team/team-2/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Team profile cards</a>
</li>
<li>
<a href="/team/team-3/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Team masonry grid</a>
</li>
<li>
<a href="/team/team-4/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Team outline cards</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-pricing" data-collapse-toggle="dropdown-pricing">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
<path d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM2 12V6h16v6H2Z"/>
<path d="M6 8H4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm8 0H9a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ml-4">Pricing</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-pricing" class="hidden py-2 space-y-2">
<li>
<a href="/pricing/pricing-1/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pricing single plan</a>
</li>
<li>
<a href="/pricing/pricing-2/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pricing three plans</a>
</li>
<li>
<a href="/pricing/pricing-3/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pricing price toggle</a>
</li>
<li>
<a href="/pricing/pricing-4/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pricing comparison</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-contact" data-collapse-toggle="dropdown-contact">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
<path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
<path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ml-4">Contact</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-contact" class="hidden py-2 space-y-2">
<li>
<a href="/contact/contact-1/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Contact with search</a>
</li>
<li>
<a href="/contact/contact-2/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Contact with FAQ</a>
</li>
<li>
<a href="/contact/contact-3/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Contact with image</a>
</li>
<li>
<a href="/contact/contact-4/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Contact with options</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-blog" data-collapse-toggle="dropdown-blog">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 20">
<path d="M20.168 6.136 14.325.293a1 1 0 0 0-1.414 0l-1.445 1.444a1 1 0 0 0 0 1.414l5.844 5.843a1 1 0 0 0 1.414 0l1.444-1.444a1 1 0 0 0 0-1.414Zm-4.205 2.927L11.4 4.5a1 1 0 0 0-1-.25L4.944 5.9a1 1 0 0 0-.652.624L.518 17.206a1 1 0 0 0 .236 1.04l.023.023 6.606-6.606a2.616 2.616 0 1 1 3.65 1.304 2.615 2.615 0 0 1-2.233.108l-6.61 6.609.024.023a1 1 0 0 0 1.04.236l10.682-3.773a1 1 0 0 0 .624-.653l1.653-5.457a.999.999 0 0 0-.25-.997Z"/>
<path d="M10.233 11.1a.613.613 0 1 0-.867-.868.613.613 0 0 0 .867.868Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ml-4">Blog</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-blog" class="hidden py-2 space-y-2">
<li>
<a href="/blog/homepage/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Main page</a>
</li>
<li>
<a href="/blog/article/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Article page</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-testimonials" data-collapse-toggle="dropdown-testimonials">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
<path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ml-4">Testimonials</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-testimonials" class="hidden py-2 space-y-2">
<li>
<a href="/testimonials/testimonials-1/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Testimonial statistics</a>
</li>
<li>
<a href="/testimonials/testimonials-2/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Testimonial cards</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-portfolio" data-collapse-toggle="dropdown-portfolio">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
<path d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ml-4">Portfolio</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>

</button>
<ul id="dropdown-portfolio" class="hidden py-2 space-y-2">
<li>
<a href="/portfolio/project-showcase/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Project Showcase</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-auth" data-collapse-toggle="dropdown-auth">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 18">
<path d="M8 18A18.55 18.55 0 0 1 0 3l8-3 8 3a18.549 18.549 0 0 1-8 15Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ms-3">Authentication</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-auth" class="hidden py-2 space-y-2">
<li>
<a href="/authentication/login-1/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Login feature list</a>
</li>
<li>
<a href="/authentication/login-2/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Login illustration</a>
</li>
<li>
<a href="/authentication/login-3/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Login background</a>
</li>
<li>
<a href="/authentication/register-1/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Register feature list</a>
</li>
<li>
<a href="/authentication/register-2/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Register illustration</a>
</li>
<li>
<a href="/authentication/register-3/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Register background</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-forgot" data-collapse-toggle="dropdown-forgot">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ms-3">Forgot password</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-forgot" class="hidden py-2 space-y-2">
<li>
<a href="/authentication/forgot-password-1/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Feature list</a>
</li>
<li>
<a href="/authentication/forgot-password-2/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Illustration</a>
</li>
<li>
<a href="/authentication/forgot-password-3/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Background image</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-reset" data-collapse-toggle="dropdown-reset">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
<path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
<path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ms-3">Reset password</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-reset" class="hidden py-2 space-y-2">
<li>
<a href="/authentication/reset-password-1/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Feature list</a>
</li>
<li>
<a href="/authentication/reset-password-2/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Illustration</a>
</li>
<li>
<a href="/authentication/reset-password-3/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Background image</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-status" data-collapse-toggle="dropdown-status">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ml-4">Status</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-status" class="hidden py-2 space-y-2">
<li>
<a href="/status/404-1/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">404 with search</a>
</li>
<li>
<a href="/status/404-2/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">404 with illustration</a>
</li>
<li>
<a href="/status/404-3/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">404 with home button</a>
</li>
<li>
<a href="/status/500-1/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">500 with illustration</a>
</li>
<li>
<a href="/status/500-2/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">500 with background</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-legal" data-collapse-toggle="dropdown-legal">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 20">
<path d="M20.168 6.136 14.325.293a1 1 0 0 0-1.414 0l-1.445 1.444a1 1 0 0 0 0 1.414l5.844 5.843a1 1 0 0 0 1.414 0l1.444-1.444a1 1 0 0 0 0-1.414Zm-4.205 2.927L11.4 4.5a1 1 0 0 0-1-.25L4.944 5.9a1 1 0 0 0-.652.624L.518 17.206a1 1 0 0 0 .236 1.04l.023.023 6.606-6.606a2.616 2.616 0 1 1 3.65 1.304 2.615 2.615 0 0 1-2.233.108l-6.61 6.609.024.023a1 1 0 0 0 1.04.236l10.682-3.773a1 1 0 0 0 .624-.653l1.653-5.457a.999.999 0 0 0-.25-.997Z"/>
<path d="M10.233 11.1a.613.613 0 1 0-.867-.868.613.613 0 0 0 .867.868Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ml-4">Legal</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-legal" class="hidden py-2 space-y-2">
<li>
<a href="/legal/terms-1/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Page with sidebar</a>
</li>
<li>
<a href="/legal/terms-2/" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Page with contact</a>
</li>
</ul>
</li>
<li>
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-resources" data-collapse-toggle="dropdown-resources">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
<path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
</svg>
<span class="flex-1 text-left rtl:text-right whitespace-nowrap ml-4">Resources</span>
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>
<ul id="dropdown-resources" class="hidden py-2 space-y-2">
<li>
<a href="https://flowbite.com/docs/getting-started/introduction/" target="_blank" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Flowbite Library</a>
</li>
<li>
<a href="https://flowbite.com/blocks/" target="_blank" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Flowbite Blocks</a>
</li>
<li>
<a href="https://flowbite.com/figma/" target="_blank" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Flowbite Figma</a>
</li>
<li>
<a href="https://flowbite.com/icons/" target="_blank" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Flowbite Icons</a>
</li>
<li>
<a href="https://chat.openai.com/g/g-y7yC35HB9-flowbite-gpt" target="_blank" class="flex items-center w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Flowbite GPT</a>
</li>
</ul>
</li>
</ul>
</div>
</div>


<main class="w-full antialiased">

<section class="relative overflow-hidden bg-gray-900">
<div class="absolute inset-0">

</div>

<div class="absolute inset-0 from-gray-700 bg-gradient-to-b to-gray-900 opacity-95"></div>

<div class="relative max-w-screen-xl px-4 py-8 mx-auto text-white sm:py-16 lg:py-24 pt-20 sm:pt-24 lg:pt-32 z-1">
<div class="max-w-4xl mb-6 lg:mb-0">
<h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight md:text-4xl lg:text-5xl">
We're more than an agency of record, we're an agency of progress
</h1>
<p class="mb-6 text-gray-400 lg:mb-8 md:text-lg lg:text-xl">
Here at flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and
drive
economic growth.
</p>
<a href="#"
class="inline-flex items-center px-5 py-3 font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-900 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
Let's talk
<svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
</a>
</div>

<div class="grid gap-8 pt-8 mt-8 border-t border-gray-600 lg:pt-12 lg:mt-12 sm:grid-cols-2 lg:grid-cols-4">
<div>
<svg class="w-6 h-6 text-white mb-1.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
stroke="currentColor" stroke-width="2">
<path stroke-linecap="round" stroke-linejoin="round"
d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
</svg>
<h2 class="mb-1 text-lg font-bold">
Website Design
</h2>
<p class="mb-1 text-sm text-gray-400">
Design and develop professional websites
</p>
<a href="#" class="inline-flex items-center text-sm font-semibold text-primary-500 hover:underline">
Read more
<svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
</a>
</div>

<div>
<svg class="w-6 h-6 text-white mb-1.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
stroke="currentColor" stroke-width="2">
<path stroke-linecap="round" stroke-linejoin="round"
d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
</svg>
<h2 class="mb-1 text-lg font-bold">
Digital Marketing
</h2>
<p class="mb-1 text-sm text-gray-400">
Digital marketing services such as SEO, PPC
</p>
<a href="#" class="inline-flex items-center text-sm font-semibold text-primary-500 hover:underline">
Read more
<svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
</a>
</div>

<div>
<svg class="w-6 h-6 text-white mb-1.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
stroke="currentColor" stroke-width="2">
<path stroke-linecap="round" stroke-linejoin="round"
d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
</svg>
<h2 class="mb-1 text-lg font-bold">
E-commerce Solutions
</h2>
<p class="mb-1 text-sm text-gray-400">
Build and manage e-commerce websites
</p>
<a href="#" class="inline-flex items-center text-sm font-semibold text-primary-500 hover:underline">
Read more
<svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
</a>
</div>

<div>
<svg class="w-6 h-6 text-white mb-1.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
stroke="currentColor" stroke-width="2">
<path stroke-linecap="round" stroke-linejoin="round"
d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
<h2 class="mb-1 text-lg font-bold">
Website Maintenance
</h2>
<p class="mb-1 text-sm text-gray-400">
Ongoing maintenance and support
</p>
<a href="#" class="inline-flex items-center text-sm font-semibold text-primary-500 hover:underline">
Read more
<svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
</a>
</div>
</div>
</div>
</section>

<section class="bg-white dark:bg-gray-900">
<div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:py-24">
<div class="items-center gap-16 lg:grid lg:grid-cols-2">
<div class="text-gray-500 sm:text-lg dark:text-gray-400">
<h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
Powering innovation at 200,000+ companies worldwide
</h2>
<p class="mb-4">
Empower Developers, IT Ops, and business teams to collaborate at high velocity. Respond to changes and deliver
great
customer and employee service experiences fast.
</p>
<a href="#"
class="inline-flex items-center font-medium text-primary-700 hover:underline dark:text-primary-500">
Learn more
<svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
clip-rule="evenodd"></path>
</svg>
</a>
</div>

<div class="mt-4 text-gray-500 sm:text-lg lg:mt-0 dark:text-gray-400">
<p class="mb-4">
Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest
data from
other software development tools, so your IT support and operations teams have richer contextual information
to
rapidly
respond to requests, incidents, and changes.
</p>
<p>
Deliver great service experiences fast - without the complexity of traditional ITSM solutions.Accelerate
critical
development work, eliminate toil, and deploy changes with ease, with a complete audit trail for every change.
</p>
</div>
</div>
</div>
</section>

<section class="bg-white dark:bg-gray-900">
<div class="max-w-screen-xl px-4 pb-8 mx-auto sm:pb-16 lg:pb-24">
<div class="gap-4 sm:grid sm:grid-cols-4">
<img class="col-span-2 mb-4 rounded-lg sm:mb-0"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-1.png"
alt="content gallery 1">
<img class="hidden col-span-1 rounded-lg sm:block"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-2.png"
alt="content gallery 2">
<img class="hidden col-span-1 rounded-lg sm:block"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
alt="content gallery 3">
<img class="hidden col-span-1 rounded-lg sm:block"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-4.png"
alt="content gallery 4">
<img class="col-span-2 rounded-lg"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-5.png"
alt="content gallery 5">
<img class="hidden col-span-1 rounded-lg sm:block"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-6.png"
alt="content gallery 6">
</div>
</div>
</section>

<section class="bg-white dark:bg-gray-900">
<div class="max-w-screen-xl px-4 pb-8 mx-auto sm:pb-16 lg:pb-24">
<dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">
<div class="flex flex-col items-center justify-center">
<dt class="mb-2 text-3xl font-extrabold sm:text-4xl">73M+</dt>
<dd class="text-gray-500 dark:text-gray-400">developers</dd>
</div>
<div class="flex flex-col items-center justify-center">
<dt class="mb-2 text-3xl font-extrabold sm:text-4xl">1B+</dt>
<dd class="text-gray-500 dark:text-gray-400">contributors</dd>
</div>
<div class="flex flex-col items-center justify-center">
<dt class="mb-2 text-3xl font-extrabold sm:text-4xl">4M+</dt>
<dd class="text-gray-500 dark:text-gray-400">organizations</dd>
</div>
</dl>
</div>
</section>

<section class="bg-white dark:bg-gray-900">
<div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:py-24">
<div class="grid gap-8 sm:gap-16 lg:gap-20 md:grid-cols-2">
<div class="text-gray-500 sm:text-lg dark:text-gray-400">
<h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-white">Over 300+
happy
clients</h2>
<p class="lg:text-xl">Let's take most of the money we would've spent on paid advertising and paid
marketing and instead of spending it on
that, invest it in the customer experience/customer service and then let our customers do the marketing for
us.
</p>
</div>

<div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 sm:grid-cols-3 dark:text-gray-400">
<a href="#" class="flex items-center justify-center">
<a href="#" class="flex items-center justify-center">
<svg class="h-6 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 124 21" fill="currentColor"
xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M16.813 0.069519L12.5605 11.1781L8.28275 0.069519H0.96875V20.2025H6.23233V6.89245L11.4008 20.2025H13.7233L18.8634 6.89245V20.2025H24.127V0.069519H16.813Z"
fill="currentColor" />
<path fill-rule="evenodd" clip-rule="evenodd"
d="M34.8015 16.461V15.1601C34.3138 14.4663 33.2105 14.1334 32.1756 14.1334C30.9504 14.1334 29.8174 14.679 29.8174 15.8245C29.8174 16.9699 30.9504 17.5155 32.1756 17.5155C33.2105 17.5155 34.3138 17.1533 34.8015 16.4595V16.461ZM34.8015 20.201V18.7519C33.8841 19.8358 32.1117 20.5633 30.213 20.5633C27.9484 20.5633 25.1367 19.0218 25.1367 15.7614C25.1367 12.2326 27.9469 11.0578 30.213 11.0578C32.1756 11.0578 33.9183 11.6885 34.8015 12.7767V11.3277C34.8015 10.0605 33.7042 9.18487 31.8039 9.18487C30.3349 9.18487 28.8658 9.75687 27.6748 10.7542L25.9322 7.52314C27.831 5.92447 30.3691 5.26007 32.6291 5.26007C36.1783 5.26007 39.5179 6.561 39.5179 11.0871V20.2025H34.8015V20.201Z"
fill="currentColor" />
<path fill-rule="evenodd" clip-rule="evenodd"
d="M40.1562 18.3002L42.1145 14.9826C43.2178 15.9447 45.57 16.9421 47.3186 16.9421C48.7237 16.9421 49.3051 16.5461 49.3051 15.9154C49.3051 14.1055 40.7094 15.9741 40.7094 10.0605C40.7094 7.4938 42.9739 5.26007 47.0391 5.26007C49.5489 5.26007 51.6276 6.04474 53.22 7.1902L51.4194 10.4858C50.5303 9.6366 48.8471 8.88127 47.0747 8.88127C45.9715 8.88127 45.2384 9.30514 45.2384 9.8786C45.2384 11.4773 53.7999 9.81994 53.7999 15.7966C53.7999 18.5686 51.3257 20.5633 47.103 20.5633C44.4429 20.5633 41.7205 19.6862 40.1562 18.3002Z"
fill="currentColor" />
<path fill-rule="evenodd" clip-rule="evenodd"
d="M64.7231 20.2025V11.7149C64.7231 9.94019 63.7759 9.36672 62.2712 9.36672C60.8958 9.36672 59.9784 10.1177 59.4313 10.7821V20.201H54.7148V0.069519H59.4313V7.40285C60.3145 6.37619 62.063 5.26152 64.5372 5.26152C67.9065 5.26152 69.4335 7.13299 69.4335 9.81992V20.2025H64.7231Z"
fill="currentColor" />
<path fill-rule="evenodd" clip-rule="evenodd"
d="M80.0535 16.461V15.1601C79.5643 14.4663 78.4626 14.1334 77.4217 14.1334C76.1965 14.1334 75.0635 14.679 75.0635 15.8245C75.0635 16.9699 76.1965 17.5155 77.4217 17.5155C78.4626 17.5155 79.5643 17.1533 80.0535 16.4595V16.461ZM80.0535 20.201V18.7519C79.1346 19.8358 77.3578 20.5633 75.465 20.5633C73.199 20.5633 70.3828 19.0218 70.3828 15.7614C70.3828 12.2326 73.199 11.0578 75.465 11.0578C77.4217 11.0578 79.1644 11.6885 80.0535 12.7767V11.3277C80.0535 10.0605 78.9488 9.18487 77.056 9.18487C75.5869 9.18487 74.1164 9.75687 72.9209 10.7542L71.1783 7.52314C73.0771 5.92447 75.6152 5.26007 77.8812 5.26007C81.4289 5.26007 84.7625 6.561 84.7625 11.0871V20.2025H80.0535V20.201Z"
fill="currentColor" />
<path fill-rule="evenodd" clip-rule="evenodd"
d="M93.8157 16.461C95.6802 16.461 97.0913 15.097 97.0913 12.897C97.0913 10.7263 95.6802 9.36232 93.8157 9.36232C92.8046 9.36232 91.5854 9.90645 90.9995 10.6911V15.1601C91.5854 15.9447 92.8061 16.461 93.8157 16.461ZM86.2891 20.201V0.069519H90.9995V7.34419C92.0485 6.01247 93.6688 5.2418 95.3784 5.26152C99.0778 5.26152 101.895 8.13032 101.895 12.897C101.895 17.847 99.0198 20.5633 95.3784 20.5633C93.7235 20.5633 92.2247 19.8989 90.9995 18.5114V20.2025H86.2891V20.201Z"
fill="currentColor" />
<path fill-rule="evenodd" clip-rule="evenodd" d="M102.844 0.069519H107.554V20.2025H102.844V0.069519Z"
fill="currentColor" />
<path fill-rule="evenodd" clip-rule="evenodd"
d="M116.336 9.00154C114.284 9.00154 113.49 10.2101 113.303 11.2646H119.396C119.27 10.2379 118.508 9.00154 116.336 9.00154ZM108.5 12.897C108.5 8.67447 111.712 5.26007 116.336 5.26007C120.709 5.26007 123.892 8.42807 123.892 13.3781V14.4385H113.368C113.704 15.7335 114.929 16.8218 117.067 16.8218C118.108 16.8218 119.821 16.3686 120.681 15.5839L122.725 18.6317C121.26 19.9267 118.81 20.5633 116.55 20.5633C111.991 20.5633 108.5 17.6358 108.5 12.897Z"
fill="currentColor" />
</svg>
</a>
<a href="#" class="flex items-center justify-center">
<svg class="h-9 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 137 37" fill="currentColor"
xmlns="http://www.w3.org/2000/svg">
<path
d="M53.3228 13.9636C51.5883 13.9636 50.7303 15.3285 50.3366 16.209C50.1166 16.7006 50.0551 17.0893 49.8767 17.0893C49.6253 17.0893 49.8054 16.7514 49.5997 16.0022C49.329 15.0165 48.5133 13.9636 46.78 13.9636C44.9577 13.9636 44.1775 15.5032 43.8075 16.3493C43.5545 16.9276 43.5542 17.0893 43.3597 17.0893C43.0778 17.0893 43.3113 16.6298 43.4381 16.0897C43.688 15.0263 43.498 14.2136 43.498 14.2136H40.6094V25.0758H44.5523C44.5523 25.0758 44.5523 20.5363 44.5523 19.6714C44.5523 18.6054 44.9982 17.2528 45.7625 17.2528C46.6456 17.2528 46.8224 17.931 46.8224 19.1869C46.8224 20.3255 46.8224 25.0781 46.8224 25.0781H50.7812C50.7812 25.0781 50.7812 20.511 50.7812 19.6714C50.7812 18.7226 51.1684 17.2528 51.9972 17.2528C52.8926 17.2528 53.0511 18.2056 53.0511 19.1869C53.0511 20.1682 53.0511 25.0758 53.0511 25.0758H56.9387C56.9387 25.0758 56.9387 20.7719 56.9387 18.6882C56.9387 15.8535 55.9395 13.9636 53.3228 13.9636Z"
fill="currentColor" />
<path
d="M120.249 13.9636C118.514 13.9636 117.656 15.3285 117.262 16.209C117.042 16.7006 116.981 17.0893 116.802 17.0893C116.551 17.0893 116.719 16.6601 116.526 16.0022C116.237 15.0217 115.518 13.9636 113.706 13.9636C111.884 13.9636 111.103 15.5032 110.733 16.3493C110.48 16.9276 110.48 17.0893 110.286 17.0893C110.004 17.0893 110.237 16.6298 110.364 16.0897C110.614 15.0263 110.424 14.2136 110.424 14.2136H107.535V25.0758H111.478C111.478 25.0758 111.478 20.5363 111.478 19.6714C111.478 18.6054 111.924 17.2528 112.688 17.2528C113.571 17.2528 113.748 17.931 113.748 19.1869C113.748 20.3255 113.748 25.0781 113.748 25.0781H117.707C117.707 25.0781 117.707 20.511 117.707 19.6714C117.707 18.7226 118.094 17.2528 118.923 17.2528C119.819 17.2528 119.977 18.2056 119.977 19.1869C119.977 20.1682 119.977 25.0758 119.977 25.0758H123.865C123.865 25.0758 123.865 20.7719 123.865 18.6882C123.865 15.8535 122.865 13.9636 120.249 13.9636Z"
fill="currentColor" />
<path
d="M62.7138 22.5371C61.7709 22.7549 61.2821 22.4645 61.2821 21.8395C61.2821 20.9834 62.1676 20.6406 63.4315 20.6406C63.9887 20.6406 64.5126 20.6888 64.5126 20.6888C64.5126 21.0552 63.7172 22.3056 62.7138 22.5371ZM63.6737 13.9661C60.6534 13.9661 58.4862 15.0765 58.4862 15.0765V18.3405C58.4862 18.3405 60.8795 16.9645 62.821 16.9645C64.3707 16.9645 64.5611 17.8003 64.4905 18.494C64.4905 18.494 64.0437 18.3757 62.6797 18.3757C59.4661 18.3757 57.8438 19.8362 57.8438 22.1782C57.8438 24.3997 59.667 25.3284 61.2031 25.3284C63.4446 25.3284 64.4299 23.8221 64.7327 23.1075C64.9428 22.6117 64.9811 22.2776 65.1699 22.2776C65.3849 22.2776 65.3125 22.5172 65.3021 23.0107C65.2839 23.8748 65.3246 24.528 65.4616 25.0782H68.4334V19.7326C68.4334 16.395 67.2525 13.9661 63.6737 13.9661Z"
fill="currentColor" />
<path d="M74.9258 25.0783H78.8688V10.9255H74.9258V25.0783Z" fill="currentColor" />
<path
d="M83.2111 19.6471C83.2111 18.6705 84.1184 17.7819 85.7842 17.7819C87.5992 17.7819 89.059 18.6558 89.3864 18.8542V15.0765C89.3864 15.0765 88.2331 13.9661 85.3984 13.9661C82.4103 13.9661 79.9219 15.7146 79.9219 19.4781C79.9219 23.2415 82.1801 25.3284 85.3904 25.3284C87.898 25.3284 89.3928 23.9506 89.3928 23.9506V20.3624C88.9199 20.6271 87.6021 21.5415 85.8023 21.5415C83.8964 21.5415 83.2111 20.6648 83.2111 19.6471Z"
fill="currentColor" />
<path
d="M97.373 13.9662C95.0905 13.9662 94.2223 16.1293 94.047 16.5049C93.8716 16.8804 93.785 17.0964 93.6415 17.0918C93.3923 17.0837 93.566 16.6308 93.6631 16.3375C93.8467 15.7834 94.2357 14.3297 94.2357 12.543C94.2357 11.3311 94.0718 10.9255 94.0718 10.9255H90.668V25.0783H94.611C94.611 25.0783 94.611 20.5543 94.611 19.6741C94.611 18.7937 94.9623 17.2554 95.9556 17.2554C96.7784 17.2554 97.036 17.8651 97.036 19.0927C97.036 20.3201 97.036 25.0783 97.036 25.0783H100.979C100.979 25.0783 100.979 21.7679 100.979 19.3289C100.979 16.5406 100.517 13.9662 97.373 13.9662Z"
fill="currentColor" />
<path
d="M102.258 14.2285V25.0782H106.201V14.2285C106.201 14.2285 105.538 14.6162 104.233 14.6162C102.929 14.6162 102.258 14.2285 102.258 14.2285Z"
fill="currentColor" />
<path
d="M104.218 10.8157C102.885 10.8157 101.805 11.521 101.805 12.391C101.805 13.2609 102.885 13.9662 104.218 13.9662C105.551 13.9662 106.632 13.2609 106.632 12.391C106.632 11.521 105.551 10.8157 104.218 10.8157Z"
fill="currentColor" />
<path
d="M69.707 14.2285V25.0782H73.6499V14.2285C73.6499 14.2285 72.9872 14.6162 71.6825 14.6162C70.3779 14.6162 69.707 14.2285 69.707 14.2285Z"
fill="currentColor" />
<path
d="M71.6674 10.8157C70.3345 10.8157 69.2539 11.521 69.2539 12.391C69.2539 13.2609 70.3345 13.9662 71.6674 13.9662C73.0005 13.9662 74.0811 13.2609 74.0811 12.391C74.0811 11.521 73.0005 10.8157 71.6674 10.8157Z"
fill="currentColor" />
<path
d="M130.616 22.744C129.712 22.744 129.047 21.5972 129.047 19.9993C129.047 18.4475 129.73 17.2552 130.585 17.2552C131.682 17.2552 132.15 18.2614 132.15 19.9993C132.15 21.8071 131.719 22.744 130.616 22.744ZM131.699 13.9636C129.672 13.9636 128.743 15.4835 128.339 16.3493C128.072 16.9214 128.086 17.0893 127.891 17.0893C127.609 17.0893 127.843 16.6298 127.97 16.0897C128.219 15.0263 128.029 14.2136 128.029 14.2136H125.141V28.0756H129.084C129.084 28.0756 129.084 25.8073 129.084 23.6807C129.55 24.4722 130.414 25.3179 131.747 25.3179C134.598 25.3179 136.033 22.9056 136.033 19.6462C136.033 15.952 134.315 13.9636 131.699 13.9636Z"
fill="currentColor" />
<path
d="M26.682 17.2446C26.9471 17.213 27.2012 17.2115 27.4346 17.2446C27.5697 16.9348 27.593 16.4007 27.4714 15.819C27.2907 14.9545 27.0463 14.4313 26.5411 14.5127C26.036 14.5941 26.0173 15.2205 26.1979 16.0851C26.2995 16.5714 26.4804 16.987 26.682 17.2446Z"
fill="currentColor" />
<path
d="M22.3442 17.9286C22.7056 18.0873 22.9278 18.1924 23.0147 18.1005C23.0706 18.0433 23.054 17.934 22.9677 17.7929C22.7893 17.5017 22.4222 17.2064 22.033 17.0405C21.2368 16.6978 20.2872 16.8118 19.5546 17.3381C19.3129 17.5153 19.0836 17.7608 19.1164 17.9098C19.1271 17.958 19.1633 17.9943 19.2481 18.0062C19.4476 18.029 20.1443 17.6767 20.9468 17.6276C21.5133 17.5929 21.9827 17.7701 22.3442 17.9286Z"
fill="currentColor" />
<path
d="M21.6149 18.3436C21.1441 18.4179 20.8844 18.5732 20.7177 18.7175C20.5755 18.8417 20.4875 18.9792 20.4883 19.0759C20.4886 19.1219 20.5086 19.1484 20.5243 19.1618C20.5458 19.1806 20.5712 19.1911 20.6017 19.1911C20.7081 19.1911 20.9462 19.0955 20.9462 19.0955C21.6014 18.861 22.0335 18.8895 22.4618 18.9383C22.6985 18.9648 22.8103 18.9795 22.8622 18.8984C22.8776 18.8751 22.8962 18.8247 22.8488 18.7479C22.7385 18.569 22.2632 18.2666 21.6149 18.3436"
fill="currentColor" />
<path
d="M25.2163 19.8666C25.5358 20.0237 25.8877 19.962 26.0024 19.7289C26.1169 19.4959 25.9506 19.1796 25.6309 19.0224C25.3113 18.8655 24.9594 18.927 24.8448 19.1601C24.7303 19.3933 24.8965 19.7094 25.2163 19.8666Z"
fill="currentColor" />
<path
d="M27.2703 18.0709C27.0106 18.0664 26.7953 18.3516 26.7892 18.7076C26.7831 19.0638 26.9888 19.356 27.2485 19.3604C27.5081 19.3649 27.7236 19.0797 27.7295 18.7237C27.7356 18.3674 27.5299 18.0752 27.2703 18.0709Z"
fill="currentColor" />
<path
d="M9.83004 24.4919C9.76544 24.411 9.65932 24.4356 9.55655 24.4596C9.48477 24.4764 9.40345 24.4952 9.31429 24.4937C9.1233 24.4899 8.96157 24.4085 8.87074 24.2689C8.75244 24.0872 8.75928 23.8163 8.88991 23.5064C8.90748 23.4644 8.92824 23.418 8.95084 23.3674C9.15903 22.9001 9.50765 22.118 9.11629 21.3728C8.82172 20.812 8.34133 20.4626 7.76373 20.3893C7.20923 20.319 6.63835 20.5246 6.27421 20.9263C5.69973 21.5601 5.60995 22.4226 5.72105 22.7274C5.76179 22.8389 5.82544 22.8698 5.87174 22.8761C5.96945 22.8892 6.11398 22.8181 6.20453 22.5745C6.211 22.557 6.21962 22.5298 6.23042 22.4953C6.27082 22.3666 6.34593 22.1268 6.46897 21.9346C6.61733 21.7028 6.8484 21.5432 7.11962 21.4851C7.39594 21.4259 7.67834 21.4787 7.91474 21.6335C8.31723 21.8967 8.47219 22.3898 8.30037 22.8604C8.21157 23.1037 8.06727 23.569 8.09913 23.9514C8.16344 24.7251 8.63936 25.0359 9.06699 25.069C9.48275 25.0845 9.77331 24.8513 9.84682 24.6806C9.89021 24.5797 9.85359 24.5183 9.83005 24.4919"
fill="currentColor" />
<path
d="M13.781 10.2801C15.137 8.71317 16.8063 7.35092 18.3016 6.58601C18.3533 6.55944 18.4082 6.61569 18.3802 6.66639C18.2614 6.88141 18.0329 7.34188 17.9604 7.69111C17.9491 7.74554 18.0083 7.78647 18.0542 7.75518C18.9845 7.12106 20.6029 6.44157 22.0223 6.35422C22.0833 6.35044 22.1128 6.42867 22.0643 6.46589C21.8484 6.63154 21.6123 6.86065 21.4398 7.09244C21.4104 7.13187 21.4381 7.18868 21.4873 7.18898C22.484 7.19608 23.8891 7.54489 24.805 8.05859C24.8669 8.09327 24.8227 8.21326 24.7535 8.19739C23.3678 7.87989 21.0996 7.63891 18.7435 8.21358C16.6401 8.72668 15.0346 9.51873 13.8634 10.3705C13.8042 10.4137 13.7331 10.3355 13.781 10.2801L13.781 10.2801ZM20.5345 25.4617C20.5346 25.462 20.5348 25.4626 20.5349 25.4626C20.5352 25.463 20.5353 25.4638 20.5357 25.4642C20.5353 25.4634 20.5349 25.4626 20.5345 25.4617ZM26.1264 26.1218C26.1666 26.1049 26.1944 26.0591 26.1896 26.0136C26.184 25.9575 26.134 25.9167 26.0779 25.9225C26.0779 25.9225 23.1841 26.3507 20.4504 25.3501C20.7482 24.3823 21.5399 24.7317 22.7367 24.8283C24.8938 24.9569 26.827 24.6418 28.2558 24.2316C29.494 23.8765 31.12 23.1759 32.3831 22.1789C32.8091 23.1148 32.9595 24.1446 32.9595 24.1446C32.9595 24.1446 33.2893 24.0857 33.5648 24.2552C33.8252 24.4155 34.0162 24.7486 33.8857 25.6099C33.6201 27.219 32.9362 28.525 31.7868 29.7265C31.087 30.4796 30.2375 31.1345 29.2656 31.6107C28.7494 31.8818 28.1998 32.1164 27.6192 32.3059C23.2857 33.7212 18.85 32.1653 17.4201 28.8239C17.3061 28.5727 17.2095 28.3098 17.1335 28.0347C16.5241 25.8328 17.0414 23.1911 18.6584 21.5282C18.6585 21.528 18.6582 21.5273 18.6584 21.5273C18.758 21.4215 18.8598 21.2967 18.8598 21.1398C18.8598 21.0086 18.7764 20.8701 18.7041 20.7719C18.1383 19.9514 16.1787 18.5531 16.572 15.8472C16.8545 13.9031 18.5546 12.5341 20.1397 12.6152C20.2736 12.6222 20.4078 12.6303 20.5415 12.6382C21.2284 12.679 21.8276 12.7671 22.3931 12.7906C23.3395 12.8316 24.1906 12.6939 25.1986 11.8541C25.5386 11.5707 25.8112 11.3252 26.2725 11.247C26.321 11.2387 26.4416 11.1954 26.6827 11.2068C26.9287 11.2199 27.163 11.2875 27.3735 11.4276C28.1817 11.9654 28.2962 13.2677 28.3381 14.2205C28.362 14.7643 28.4279 16.0801 28.4502 16.4579C28.5017 17.3215 28.7287 17.4433 29.188 17.5945C29.4463 17.6797 29.6861 17.743 30.0395 17.8422C31.1092 18.1425 31.7435 18.4472 32.1431 18.8386C32.3816 19.0831 32.4925 19.3431 32.5268 19.5909C32.6528 20.5111 31.8123 21.6478 29.5872 22.6807C27.1549 23.8095 24.2041 24.0954 22.1653 23.8684C22.009 23.851 21.4529 23.788 21.451 23.7877C19.8201 23.5681 18.8899 25.6757 19.8686 27.1196C20.4995 28.0501 22.2176 28.6558 23.9367 28.6561C27.8783 28.6565 30.9078 26.9734 32.0347 25.5198C32.0685 25.4763 32.0718 25.4716 32.1249 25.3912C32.1803 25.3077 32.1347 25.2616 32.0656 25.3089C31.1448 25.9389 27.0552 28.4401 22.6808 27.6876C22.6808 27.6876 22.1493 27.6002 21.6641 27.4115C21.2785 27.2615 20.4715 26.8902 20.3734 26.0623C23.9036 27.154 26.1264 26.1219 26.1264 26.1219V26.1218ZM6.73637 17.7322C5.50864 17.971 4.42653 18.6668 3.76488 19.6279C3.36935 19.2981 2.63255 18.6595 2.50245 18.4107C1.44601 16.4049 3.65533 12.5048 5.19871 10.3023C9.01295 4.85925 14.9868 0.739281 17.7523 1.48684C18.2019 1.61408 19.6908 3.3404 19.6908 3.3404C19.6908 3.3404 16.9266 4.87423 14.363 7.01221C10.9088 9.6719 8.2995 13.5375 6.73637 17.7322ZM8.79942 26.937C8.61359 26.9687 8.42406 26.9814 8.23288 26.9767C6.38562 26.9272 4.39022 25.2641 4.19193 23.2919C3.97278 21.1119 5.08663 19.4342 7.05879 19.0364C7.29457 18.9889 7.57951 18.9615 7.88676 18.9775C8.99175 19.038 10.6201 19.8864 10.9921 22.2937C11.3216 24.4256 10.7983 26.5961 8.79942 26.937V26.937ZM33.8233 23.0768C33.8075 23.0209 33.7044 22.6441 33.5628 22.1901C33.4211 21.7358 33.2745 21.4162 33.2745 21.4162C33.8426 20.5656 33.8527 19.805 33.7772 19.374C33.6965 18.84 33.4742 18.3849 33.0261 17.9145C32.5779 17.4441 31.6614 16.9623 30.3733 16.6006C30.2261 16.5592 29.7403 16.4259 29.6976 16.413C29.6942 16.3851 29.662 14.8197 29.6328 14.1478C29.6114 13.662 29.5697 12.9036 29.3344 12.1566C29.054 11.1455 28.5653 10.2608 27.9555 9.69474C29.6385 7.95018 30.6892 6.02826 30.6867 4.37951C30.6818 1.20879 26.7878 0.24946 21.9891 2.23648C21.9841 2.23854 20.9797 2.66446 20.9724 2.66802C20.9678 2.66372 19.1343 0.864594 19.1067 0.84057C13.6355 -3.9316 -3.4707 15.0823 1.99847 19.7003L3.19371 20.7129C2.88368 21.516 2.76185 22.4362 2.86137 23.4258C2.9891 24.6967 3.64467 25.915 4.70726 26.8562C5.71596 27.75 7.04217 28.3156 8.32916 28.3145C10.4574 33.2191 15.3203 36.2279 21.0221 36.3972C27.1383 36.5789 32.2724 33.709 34.4238 28.5537C34.5645 28.1919 35.1617 26.5617 35.1617 25.1226C35.1617 23.6763 34.344 23.0768 33.8233 23.0768Z"
fill="currentColor" />
</svg>
</a>
<a href="#" class="flex items-center justify-center">
<svg class="h-8 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 123 32" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M39.1055 24.8372L40.6293 21.298C42.2761 22.5269 44.4635 23.1659 46.6264 23.1659C48.224 23.1659 49.2317 22.5514 49.2317 21.6175C49.2071 19.0122 39.6708 21.0522 39.597 14.5143C39.5725 11.1963 42.5218 8.64014 46.7002 8.64014C49.1826 8.64014 51.665 9.2546 53.4346 10.6556L52.0091 14.2686C50.3869 13.2363 48.3715 12.4989 46.4544 12.4989C45.1517 12.4989 44.2915 13.1134 44.2915 13.8999C44.3161 16.456 53.9262 15.0551 54.0245 21.298C54.0245 24.6898 51.1488 27.0739 47.0197 27.0739C43.9965 27.0739 41.2192 26.3611 39.1055 24.8372Z"
fill="currentColor" />
<path
d="M97.5979 20.0199C96.836 21.3471 95.4105 22.2565 93.7637 22.2565C91.3305 22.2565 89.3642 20.2902 89.3642 17.857C89.3642 15.4237 91.3305 13.4575 93.7637 13.4575C95.4105 13.4575 96.836 14.3669 97.5979 15.6941L101.801 13.3592C100.228 10.5572 97.2047 8.64014 93.7637 8.64014C88.676 8.64014 84.5469 12.7693 84.5469 17.857C84.5469 22.9447 88.676 27.0739 93.7637 27.0739C97.2293 27.0739 100.228 25.1813 101.801 22.3548L97.5979 20.0199Z"
fill="currentColor" />
<path d="M61.3809 0.996094H56.1211V26.7296H61.3809V0.996094Z" fill="currentColor" />
<path
d="M103.836 0.996094V26.7296H109.096V19.012L115.339 26.7296H122.073L114.134 17.5619L121.483 9.00861H115.044L109.096 16.1117V0.996094H103.836Z"
fill="currentColor" />
<path
d="M77.0482 20.069C76.2862 21.3225 74.7132 22.2565 72.9436 22.2565C70.5103 22.2565 68.5441 20.2902 68.5441 17.857C68.5441 15.4237 70.5103 13.4575 72.9436 13.4575C74.7132 13.4575 76.2862 14.4406 77.0482 15.7187V20.069ZM77.0482 9.00881V11.098C76.1879 9.64785 74.0496 8.64014 71.813 8.64014C67.1923 8.64014 63.5547 12.7201 63.5547 17.8324C63.5547 22.9447 67.1923 27.0739 71.813 27.0739C74.0496 27.0739 76.1879 26.0661 77.0482 24.616V26.7052H82.3079V9.00881H77.0482Z"
fill="currentColor" />
<path
d="M6.59023 20.0432C6.59023 21.8374 5.14011 23.2875 3.3459 23.2875C1.55168 23.2875 0.101562 21.8374 0.101562 20.0432C0.101562 18.2489 1.55168 16.7988 3.3459 16.7988H6.59023V20.0432Z"
fill="currentColor" />
<path
d="M8.21484 20.0434C8.21484 18.2492 9.66496 16.7991 11.4592 16.7991C13.2534 16.7991 14.7035 18.2492 14.7035 20.0434V28.1542C14.7035 29.9485 13.2534 31.3986 11.4592 31.3986C9.66496 31.3986 8.21484 29.9485 8.21484 28.1542V20.0434Z"
fill="currentColor" />
<path
d="M11.4553 7.01674C9.66106 7.01674 8.21094 5.56663 8.21094 3.77241C8.21094 1.9782 9.66106 0.528076 11.4553 0.528076C13.2495 0.528076 14.6996 1.9782 14.6996 3.77241V7.01674H11.4553Z"
fill="currentColor" />
<path
d="M11.4501 8.66406C13.2443 8.66406 14.6944 10.1142 14.6944 11.9084C14.6944 13.7026 13.2443 15.1527 11.4501 15.1527H3.31465C1.52043 15.1527 0.0703125 13.7026 0.0703125 11.9084C0.0703125 10.1142 1.52043 8.66406 3.31465 8.66406H11.4501Z"
fill="currentColor" />
<path
d="M24.4609 11.9082C24.4609 10.1139 25.9111 8.66382 27.7053 8.66382C29.4995 8.66382 30.9496 10.1139 30.9496 11.9082C30.9496 13.7024 29.4995 15.1525 27.7053 15.1525H24.4609V11.9082Z"
fill="currentColor" />
<path
d="M22.8363 11.9078C22.8363 13.702 21.3862 15.1522 19.592 15.1522C17.7978 15.1522 16.3477 13.702 16.3477 11.9078V3.77241C16.3477 1.9782 17.7978 0.528076 19.592 0.528076C21.3862 0.528076 22.8363 1.9782 22.8363 3.77241V11.9078Z"
fill="currentColor" />
<path
d="M19.592 24.9102C21.3862 24.9102 22.8363 26.3603 22.8363 28.1545C22.8363 29.9487 21.3862 31.3988 19.592 31.3988C17.7978 31.3988 16.3477 29.9487 16.3477 28.1545V24.9102H19.592Z"
fill="currentColor" />
<path
d="M19.592 23.2877C17.7978 23.2877 16.3477 21.8376 16.3477 20.0434C16.3477 18.2492 17.7978 16.7991 19.592 16.7991H27.7274C29.5216 16.7991 30.9717 18.2492 30.9717 20.0434C30.9717 21.8376 29.5216 23.2877 27.7274 23.2877H19.592Z"
fill="currentColor" />
</svg>
</a>
<a href="#" class="flex items-center justify-center">
<svg class="h-7 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 83 31" fill="currentColor"
xmlns="http://www.w3.org/2000/svg">
<path
d="M0.566406 0.625366V8.22062H8.86891V30.2547H17.9914V8.2172H26.2939V0.628783L0.566406 0.625366ZM27.7118 0.625366V30.2547H52.6877V22.6595H36.8412V18.9695H52.6842V11.9106H36.8412V8.22062H52.6842V0.625366H27.7118ZM54.2217 0.625366V30.2547H67.4203C77.7523 30.2547 82.5664 24.4874 82.5664 15.3956C82.5664 7.9302 79.078 0.625366 69.2004 0.625366H54.2217ZM63.3511 8.22062H66.2552C72.8528 8.22062 73.4371 13.4071 73.4371 15.2692C73.4371 18.0538 72.6068 22.6595 66.9215 22.6595H63.3511V8.22062Z"
fill="currentColor" />
</svg>
</a>
</div>
</div>
</div>
</section>

<section class="bg-white dark:bg-gray-900">
<div class="max-w-screen-xl px-4 pb-8 mx-auto sm:pb-16 lg:pb-24">
<div class="grid gap-6 lg:grid-cols-3">
<div class="space-y-6">
<figure class="p-6 rounded-sm bg-gray-50 dark:bg-gray-800">
<blockquote class="text-sm text-gray-500 dark:text-gray-400">
<h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
<p class="my-4">"This is a very complex and beautiful set of elements. Under the hood it comes with the best
things from 2 different worlds: Figma and Tailwind.”</p>
</blockquote>
<figcaption class="flex items-center space-x-3">
<img class="rounded-full w-9 h-9"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
alt="profile picture">
<div class="space-y-0.5 font-medium dark:text-white">
<div>Bonnie Green</div>
<div class="text-sm text-gray-500 dark:text-gray-400">CTO at Open AI</div>
</div>
</figcaption>
</figure>
<figure class="p-6 rounded-sm bg-gray-50 dark:bg-gray-800">
<blockquote class="text-sm text-gray-500 dark:text-gray-400">
<h3 class="text-lg font-semibold text-gray-900 dark:text-white">A must-have for designers</h3>
<p class="my-4">"This is a very complex and beautiful set of elements. Under the hood it comes with the best
things from 2 different worlds: Figma and Tailwind.”</p>
</blockquote>
<figcaption class="flex items-center space-x-3">
<img class="rounded-full w-9 h-9"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
alt="profile picture">
<div class="space-y-0.5 font-medium dark:text-white">
<div>Lana Byrd</div>
<div class="text-sm text-gray-500 dark:text-gray-400">Software Engineer at Tesla</div>
</div>
</figcaption>
</figure>
<figure class="p-6 rounded-sm bg-gray-50 dark:bg-gray-800">
<blockquote class="text-sm text-gray-500 dark:text-gray-400">
<h3 class="text-lg font-semibold text-gray-900 dark:text-white">Speechless with how easy this was to
integrate</h3>
<p class="my-4">"I recently got my hands on Flowbite Pro, and holy crap, I'm speechless with how easy this
was to integrate within my application. Most templates are a pain, code is scattered, and near impossible
to theme."</p>
</blockquote>
<figcaption class="flex items-center space-x-3">
<img class="rounded-full w-9 h-9"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
<div class="space-y-0.5 font-medium dark:text-white">
<div>Jese Leos</div>
<div class="text-sm text-gray-500 dark:text-gray-400">CEO at Oracle</div>
</div>
</figcaption>
</figure>
</div>
<div class="space-y-6">
<figure class="p-6 rounded-sm bg-gray-50 dark:bg-gray-800">
<blockquote class="text-sm text-gray-500 dark:text-gray-400">
<h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
<p class="my-4">"Flowbite is just awesome. It contains tons of predesigned components and pages starting
from login screen to complex dashboard. Perfect choice for your next SaaS application.”</p>
</blockquote>
<figcaption class="flex items-center space-x-3">
<img class="rounded-full w-9 h-9"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
alt="profile picture">
<div class="space-y-0.5 font-medium dark:text-white">
<div>Joseph McFall</div>
<div class="text-sm text-gray-500 dark:text-gray-400">Junior Designer at Adobe</div>
</div>
</figcaption>
</figure>
<figure class="p-6 rounded-sm bg-gray-50 dark:bg-gray-800">
<blockquote class="text-sm text-gray-500 dark:text-gray-400">
<h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow and variants</h3>
<p class="my-4">"Flowbite provides a robust set of design tokens and components based on the popular
Tailwind CSS framework.</p>
<p class="my-4">From the most used UI components like forms and navigation bars to the whole app screens
designed both for desktop and mobile, this UI kit provides a solid foundation for any project.”</p>
</blockquote>
<figcaption class="flex items-center space-x-3">
<img class="rounded-full w-9 h-9"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/helene-engels.png"
alt="profile picture">
<div class="space-y-0.5 font-medium dark:text-white">
<div>Helene Engels</div>
<div class="text-sm text-gray-500 dark:text-gray-400">CFO at Microsoft</div>
</div>
</figcaption>
</figure>
<figure class="p-6 rounded-sm bg-gray-50 dark:bg-gray-800">
<blockquote class="text-sm text-gray-500 dark:text-gray-400">
<h3 class="text-lg font-semibold text-gray-900 dark:text-white">Perfect choice for a SaaS application</h3>
<p class="my-4">"Flowbite provides a robust set of design tokens and components based on the popular
Tailwind CSS framework.</p>
<p class="my-4">From the most used UI components like forms and navigation bars to the whole app screens
designed both for desktop and mobile, this UI kit provides a solid foundation for any project.”</p>
</blockquote>
<figcaption class="flex items-center space-x-3">
<img class="rounded-full w-9 h-9"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png"
alt="profile picture">
<div class="space-y-0.5 font-medium dark:text-white">
<div>Leslie Livingston</div>
<div class="text-sm text-gray-500 dark:text-gray-400">Creative Director at Apple</div>
</div>
</figcaption>
</figure>
</div>
<div class="space-y-6">
<figure class="p-6 rounded-sm bg-gray-50 dark:bg-gray-800">
<blockquote class="text-sm text-gray-500 dark:text-gray-400">
<h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
<p class="my-4">"I recently got my hands on Flowbite Pro, and holy crap, I'm speechless with how easy this
was to integrate within my application. Most templates are a pain, code is scattered, and near impossible
to theme."</p>
</blockquote>
<figcaption class="flex items-center space-x-3">
<img class="rounded-full w-9 h-9"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
alt="profile picture">
<div class="space-y-0.5 font-medium dark:text-white">
<div>Michael Gough</div>
<div class="text-sm text-gray-500 dark:text-gray-400">Front-end engineer at Meta</div>
</div>
</figcaption>
</figure>
<figure class="p-6 rounded-sm bg-gray-50 dark:bg-gray-800">
<blockquote class="text-sm text-gray-500 dark:text-gray-400">
<h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow and variants</h3>
<p class="my-4">"Flowbite is just awesome. It contains tons of predesigned components and pages starting
from login screen to complex dashboard. Perfect choice for your next SaaS application.”</p>
</blockquote>
<figcaption class="flex items-center space-x-3">
<img class="rounded-full w-9 h-9"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/neil-sims.png" alt="profile picture">
<div class="space-y-0.5 font-medium dark:text-white">
<div>Neil Sims</div>
<div class="text-sm text-gray-500 dark:text-gray-400">Software architect at Amazon</div>
</div>
</figcaption>
</figure>
<figure class="p-6 rounded-sm bg-gray-50 dark:bg-gray-800">
<blockquote class="text-sm text-gray-500 dark:text-gray-400">
<h3 class="text-lg font-semibold text-gray-900 dark:text-white">Speechless with how easy this was to
integrate</h3>
<p class="my-4">"This is a very complex and beautiful set of elements. Under the hood it comes with the best
things from 2 different worlds: Figma and Tailwind.”</p>
</blockquote>
<figcaption class="flex items-center space-x-3">
<img class="rounded-full w-9 h-9"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/robert-brown.png"
alt="profile picture">
<div class="space-y-0.5 font-medium dark:text-white">
<div>Robert Brown</div>
<div class="text-sm text-gray-500 dark:text-gray-400">Junior developer at SAP</div>
</div>
</figcaption>
</figure>
</div>
</div>

<div class="mt-8 text-center sm:mt-12 lg:mt-16">
<a href="#" title="" class="text-gray-900 border border-gray-200 hover:bg-gray-100 focus:ring-gray-100 hover:text-primary-700 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:bg-gray-800 dark:hover:text-white dark:focus:ring-gray-800 justify-center inline-flex items-center focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center" role="button">
View more
</a>
</div>
</div>
</section>

<section class="border-t border-b border-gray-100 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
<div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:py-24">
<div class="max-w-2xl mx-auto text-center">
<h2 class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
Our work
</h2>
<p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
Flowbite helps you connect with friends, family and communities of people who share your interests.
</p>
</div>

<div class="mt-12 space-y-16">
<div class="flex flex-col lg:items-center lg:flex-row gap-y-8 sm:gap-y-12 lg:gap-x-16 xl:gap-x-24">
<div>
<img class="object-cover w-full border border-gray-200 rounded-lg shadow-lg dark:hidden"
src="//images/case-study/dashboard-mockup.jpg" alt="project image">
<img class="hidden object-cover w-full rounded-lg shadow-lg dark:block dark:border dark:border-gray-700"
src="//images/case-study/dashboard-mockup-dark.jpg" alt="project mockup dark">
</div>

<div class="w-full space-y-6 lg:max-w-lg shrink-0 xl:max-w-2xl">
<div class="space-y-3">
<h3 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl dark:text-white">
Flowbite's dashboard
</h3>
<a href="#" title=""
class="inline-flex items-center text-lg font-medium text-primary-700 hover:underline dark:text-primary-500">
<svg aria-hidden="true" class="w-5 h-5 mr-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
fill="currentColor">
<path
d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
<path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
</svg>
https://flowbite.com/
</a>
<p class="text-base font-normal text-gray-500 sm:text-lg dark:text-gray-400">
Flowbite helps you connect with friends, family and communities of people who share your interests.
Connecting with your
friends and family as well as discovering new ones is easy with features like Groups.
</p>
</div>

<div class="flex items-center gap-2.5">
<img data-tooltip-target="tooltip-logo-html5" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/html5.svg" alt="">
<div id="tooltip-logo-html5" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
HTML5
<div class="tooltip-arrow" data-popper-arrow></div>
</div>

<img data-tooltip-target="tooltip-logo-css3" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/css-3.svg" alt="">
<div id="tooltip-logo-css3" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
CSS3
<div class="tooltip-arrow" data-popper-arrow></div>
</div>

<img data-tooltip-target="tooltip-logo-javascript" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/javascript.svg" alt="">
<div id="tooltip-logo-javascript" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
JavaScript
<div class="tooltip-arrow" data-popper-arrow></div>
</div>

<img data-tooltip-target="tooltip-logo-tailwind-css" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/tailwind-css.svg" alt="">
<div id="tooltip-logo-tailwind-css" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
Tailwind CSS
<div class="tooltip-arrow" data-popper-arrow></div>
</div>

<img data-tooltip-target="tooltip-logo-typescript" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/typescript.svg" alt="">
<div id="tooltip-logo-typescript" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
TypeScript
<div class="tooltip-arrow" data-popper-arrow></div>
</div>
</div>

<a href="#" title=""
class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
role="button">
View case study
<svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
fill="currentColor">
<path fill-rule="evenodd"
d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
clip-rule="evenodd" />
</svg>
</a>
</div>
</div>

<div class="flex flex-col lg:items-center lg:flex-row gap-y-8 sm:gap-y-12 lg:gap-x-16 xl:gap-x-24">
<div class="lg:order-2">
<img class="object-cover w-full border border-gray-200 rounded-lg shadow-lg  dark:hidden"
src="//images/case-study/agency-landing-page.jpg" alt="project image">
<img class="hidden object-cover w-full rounded-lg shadow-lg dark:block dark:border dark:border-gray-700"
src="//images/case-study/agency-landing-page-dark.jpg" alt="project mockup dark">
</div>

<div class="w-full space-y-6 lg:max-w-lg shrink-0 xl:max-w-2xl lg:order-1">
<div class="space-y-3">
<h3 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl dark:text-white">
Agency Landing Page
</h3>
<a href="#" title=""
class="inline-flex items-center text-lg font-medium text-primary-700 hover:underline dark:text-primary-500">
<svg aria-hidden="true" class="w-5 h-5 mr-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
fill="currentColor">
<path
d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
<path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
</svg>
https://flowbite.com/
</a>
<p class="text-base font-normal text-gray-500 sm:text-lg dark:text-gray-400">
Flowbite helps you connect with friends, family and communities of people who share your interests.
Connecting with your
friends and family as well as discovering new ones is easy with features like Groups.
</p>
</div>

<div class="flex items-center gap-2.5">
<img data-tooltip-target="tooltip-logo-wordpress" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/wordpress.svg" alt="">
<div id="tooltip-logo-wordpress" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
WordPress
<div class="tooltip-arrow" data-popper-arrow></div>
</div>

<img data-tooltip-target="tooltip-logo-html5" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/html5.svg" alt="">
<div id="tooltip-logo-html5" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
HTML5
<div class="tooltip-arrow" data-popper-arrow></div>
</div>

<img data-tooltip-target="tooltip-logo-css3" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/css-3.svg" alt="">
<div id="tooltip-logo-css3" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
CSS3
<div class="tooltip-arrow" data-popper-arrow></div>
</div>

<img data-tooltip-target="tooltip-logo-woocommerce" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/woocommerce.svg" alt="">
<div id="tooltip-logo-woocommerce" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
WooCommerce
<div class="tooltip-arrow" data-popper-arrow></div>
</div>
</div>

<a href="#" title=""
class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
role="button">
View case study
<svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
fill="currentColor">
<path fill-rule="evenodd"
d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
clip-rule="evenodd" />
</svg>
</a>
</div>
</div>

<div class="flex flex-col lg:items-center lg:flex-row gap-y-8 sm:gap-y-12 lg:gap-x-16 xl:gap-x-24">
<div>
<img class="object-cover w-full border border-gray-200 rounded-lg shadow-lg  dark:hidden"
src="//images/case-study/mail-management-system.jpg" alt="project image">
<img class="hidden object-cover w-full rounded-lg shadow-lg dark:block dark:border dark:border-gray-700"
src="//images/case-study/mail-management-system-dark.jpg" alt="project mockup dark">
</div>

<div class="w-full space-y-6 lg:max-w-lg shrink-0 xl:max-w-2xl">
<div class="space-y-3">
<h3 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl dark:text-white">
Mail management system
</h3>
<a href="#" title=""
class="inline-flex items-center text-lg font-medium text-primary-700 hover:underline dark:text-primary-500">
<svg aria-hidden="true" class="w-5 h-5 mr-2.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
fill="currentColor">
<path
d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
<path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
</svg>
https://flowbite.com/
</a>
<p class="text-base font-normal text-gray-500 sm:text-lg dark:text-gray-400">
Flowbite helps you connect with friends, family and communities of people who share your interests.
Connecting with your
friends and family as well as discovering new ones is easy with features like Groups.
</p>
</div>

<div class="flex items-center gap-2.5">
<img data-tooltip-target="tooltip-logo-typescript" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/typescript.svg" alt="">
<div id="tooltip-logo-typescript" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
TypeScript
<div class="tooltip-arrow" data-popper-arrow></div>
</div>

<img data-tooltip-target="tooltip-logo-java" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/java.svg" alt="">
<div id="tooltip-logo-java" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
Java
<div class="tooltip-arrow" data-popper-arrow></div>
</div>

<img data-tooltip-target="tooltip-logo-tailwind-css" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/tailwind-css.svg" alt="">
<div id="tooltip-logo-tailwind-css" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
Tailwind CSS
<div class="tooltip-arrow" data-popper-arrow></div>
</div>

<img data-tooltip-target="tooltip-logo-react" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/react.svg" alt="">
<div id="tooltip-logo-react" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
React
<div class="tooltip-arrow" data-popper-arrow></div>
</div>

<img data-tooltip-target="tooltip-logo-html5" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/html5.svg" alt="">
<div id="tooltip-logo-html5" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
HTML5
<div class="tooltip-arrow" data-popper-arrow></div>
</div>

<img data-tooltip-target="tooltip-logo-amazon-web-services" class="object-contain w-auto h-8"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/technologies/amazon-web-services.svg" alt="">
<div id="tooltip-logo-amazon-web-services" role="tooltip"
class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
Amazon Web Services
<div class="tooltip-arrow" data-popper-arrow></div>
</div>
</div>

<a href="#" title=""
class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
role="button">
View case study
<svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
fill="currentColor">
<path fill-rule="evenodd"
d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
clip-rule="evenodd" />
</svg>
</a>
</div>
</div>
</div>
</div>
</section>

<section class="bg-white dark:bg-gray-900">
<div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:py-24">
<div class="max-w-5xl mx-auto text-center">
<h2 class="text-3xl font-extrabold leading-tight text-gray-900 sm:text-4xl dark:text-white">
Our team
</h2>
<p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
Empower Developers, Designers, IT Ops, and business teams to collaborate at high velocity. Respond to changes
and deliver great customer and employee service experiences fast.
</p>
</div>

<div class="grid grid-cols-1 mt-12 gap-y-12 gap-x-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
<div>
<img class="object-cover object-top w-full h-48 rounded-lg"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/team/member-6.png" alt="">
<div class="mt-4 space-y-2">
<div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">
Bonnie Green
</h3>
<p class="text-base font-medium text-gray-500 dark:text-gray-400">
CEO & Co-Founder
</p>
</div>
<p class="text-base font-normal text-gray-500 dark:text-gray-400">
Bonnie drives the technical strategy of the themesberg platform and brand.
</p>
<ul class="flex items-center gap-3">
<li>
<a href="#" title="" class="">
<span class="sr-only">
Facebook
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Twitter
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Dribbble
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
GitHub
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
</path>
</svg>
</a>
</li>
</ul>
</div>
</div>

<div>
<img class="object-cover object-top w-full h-48 rounded-lg"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="">
<div class="mt-4 space-y-2">
<div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">
Roberta Casas
</h3>
<p class="text-base font-medium text-gray-500 dark:text-gray-400">
CTO & Co-Founder
</p>
</div>
<p class="text-base font-normal text-gray-500 dark:text-gray-400">
Bonnie drives the technical strategy of the themesberg platform and brand.
</p>
<ul class="flex items-center gap-3">
<li>
<a href="#" title="" class="">
<span class="sr-only">
Facebook
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Twitter
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Dribbble
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
GitHub
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
</path>
</svg>
</a>
</li>
</ul>
</div>
</div>

<div>
<img class="object-cover object-top w-full h-48 rounded-lg"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/team/member-1.png" alt="">
<div class="mt-4 space-y-2">
<div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">
Robert Brown
</h3>
<p class="text-base font-medium text-gray-500 dark:text-gray-400">
Senior Front-end Developer
</p>
</div>
<p class="text-base font-normal text-gray-500 dark:text-gray-400">
Bonnie drives the technical strategy of the themesberg platform and brand.
</p>
<ul class="flex items-center gap-3">
<li>
<a href="#" title="" class="">
<span class="sr-only">
Facebook
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Twitter
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Dribbble
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
GitHub
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
</path>
</svg>
</a>
</li>
</ul>
</div>
</div>

<div>
<img class="object-cover object-top w-full h-48 rounded-lg"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/team/member-3.png" alt="">
<div class="mt-4 space-y-2">
<div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">
Joseph McFallen
</h3>
<p class="text-base font-medium text-gray-500 dark:text-gray-400">
Senior Front-end Developer
</p>
</div>
<p class="text-base font-normal text-gray-500 dark:text-gray-400">
Bonnie drives the technical strategy of the themesberg platform and brand.
</p>
<ul class="flex items-center gap-3">
<li>
<a href="#" title="" class="">
<span class="sr-only">
Facebook
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Twitter
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Dribbble
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
GitHub
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
</path>
</svg>
</a>
</li>
</ul>
</div>
</div>

<div>
<img class="object-cover object-top w-full h-48 rounded-lg"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/team/member-2.png" alt="">
<div class="mt-4 space-y-2">
<div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">
Leslie Livingston
</h3>
<p class="text-base font-medium text-gray-500 dark:text-gray-400">
React Developer
</p>
</div>
<p class="text-base font-normal text-gray-500 dark:text-gray-400">
Bonnie drives the technical strategy of the themesberg platform and brand.
</p>
<ul class="flex items-center gap-3">
<li>
<a href="#" title="" class="">
<span class="sr-only">
Facebook
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Twitter
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Dribbble
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
GitHub
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
</path>
</svg>
</a>
</li>
</ul>
</div>
</div>

<div>
<img class="object-cover object-top w-full h-48 rounded-lg"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/neil-sims.png" alt="">
<div class="mt-4 space-y-2">
<div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">
Neil Sims
</h3>
<p class="text-base font-medium text-gray-500 dark:text-gray-400">
Graphic Designer
</p>
</div>
<p class="text-base font-normal text-gray-500 dark:text-gray-400">
Bonnie drives the technical strategy of the themesberg platform and brand.
</p>
<ul class="flex items-center gap-3">
<li>
<a href="#" title="" class="">
<span class="sr-only">
Facebook
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Twitter
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Dribbble
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
GitHub
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
</path>
</svg>
</a>
</li>
</ul>
</div>
</div>

<div>
<img class="object-cover object-top w-full h-48 rounded-lg"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/thomas-lean.png" alt="">
<div class="mt-4 space-y-2">
<div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">
Thomas Lean
</h3>
<p class="text-base font-medium text-gray-500 dark:text-gray-400">
Accountant
</p>
</div>
<p class="text-base font-normal text-gray-500 dark:text-gray-400">
Bonnie drives the technical strategy of the themesberg platform and brand.
</p>
<ul class="flex items-center gap-3">
<li>
<a href="#" title="" class="">
<span class="sr-only">
Facebook
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Twitter
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Dribbble
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
GitHub
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
</path>
</svg>
</a>
</li>
</ul>
</div>
</div>

<div>
<img class="object-cover object-top w-full h-48 rounded-lg"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="">
<div class="mt-4 space-y-2">
<div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">
Jese Leos
</h3>
<p class="text-base font-medium text-gray-500 dark:text-gray-400">
SEO Specialist
</p>
</div>
<p class="text-base font-normal text-gray-500 dark:text-gray-400">
Bonnie drives the technical strategy of the themesberg platform and brand.
</p>
<ul class="flex items-center gap-3">
<li>
<a href="#" title="" class="">
<span class="sr-only">
Facebook
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Twitter
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Dribbble
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
GitHub
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
</path>
</svg>
</a>
</li>
</ul>
</div>
</div>

<div>
<img class="object-cover object-top w-full h-48 rounded-lg"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/lana-byrd.png" alt="">
<div class="mt-4 space-y-2">
<div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">
Karen Nelson
</h3>
<p class="text-base font-medium text-gray-500 dark:text-gray-400">
Marketing
</p>
</div>
<p class="text-base font-normal text-gray-500 dark:text-gray-400">
Bonnie drives the technical strategy of the themesberg platform and brand.
</p>
<ul class="flex items-center gap-3">
<li>
<a href="#" title="" class="">
<span class="sr-only">
Facebook
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Twitter
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Dribbble
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
GitHub
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
</path>
</svg>
</a>
</li>
</ul>
</div>
</div>

<div>
<img class="object-cover object-top w-full h-48 rounded-lg"
src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/helene-engels.png" alt="">
<div class="mt-4 space-y-2">
<div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">
Helene Engels
</h3>
<p class="text-base font-medium text-gray-500 dark:text-gray-400">
Support
</p>
</div>
<p class="text-base font-normal text-gray-500 dark:text-gray-400">
Bonnie drives the technical strategy of the themesberg platform and brand.
</p>
<ul class="flex items-center gap-3">
<li>
<a href="#" title="" class="">
<span class="sr-only">
Facebook
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Twitter
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
Dribbble
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path
d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z">
</path>
</svg>
</a>
</li>

<li>
<a href="#" title="" class="">
<span class="sr-only">
GitHub
</span>
<svg aria-hidden="true" class="w-5 h-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
</path>
</svg>
</a>
</li>
</ul>
</div>
</div>
</div>

<div class="max-w-3xl p-4 mx-auto mt-8 rounded-md lg:mt-12 bg-gray-50 dark:bg-gray-800">
<div class="flex flex-col justify-between gap-3 md:gap-6 md:items-center md:flex-row">
<div class="flex items-center gap-1.5">
<svg class="hidden w-5 h-5 text-gray-800 dark:text-gray-400 md:block shrink-0"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
<path
d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
</svg>
<span class="text-base font-normal text-gray-900 dark:text-white">
<span class="font-semibold">
Want to join Flowbite team?
</span>
We are growing our team.
</span>
</div>

<a href="#" title=""
class="inline-flex items-center text-base font-medium text-primary-600 hover:underline dark:text-primary-500">
Join our team
<svg aria-hidden="true" class="w-4 h-4 ml-1.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
fill="currentColor">
<path fill-rule="evenodd"
d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
clip-rule="evenodd" />
</svg>
</a>
</div>
</div>
</div>
</section>

<section class="border-t border-b border-gray-100 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
<div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:py-24">
<div class="grid grid-cols-1 gap-6 text-center sm:gap-16 sm:grid-cols-2 lg:grid-cols-3">
<div>
<div
class="inline-flex items-center justify-center w-16 h-16 mx-auto text-gray-500 bg-gray-100 rounded-lg dark:bg-gray-800 dark:text-white">
<svg aria-hidden="true" class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
fill="currentColor">
<path fill-rule="evenodd"
d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
clip-rule="evenodd" />
</svg>
</div>
<div class="mt-4">
<h3 class="text-xl font-bold text-gray-900 dark:text-white">
Company information:
</h3>
<p class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">
Flowbite LLC<br>Tax id: USXXXXXX
</p>
</div>
</div>

<div>
<div
class="inline-flex items-center justify-center w-16 h-16 mx-auto text-gray-500 bg-gray-100 rounded-lg dark:bg-gray-800 dark:text-white">
<svg aria-hidden="true" class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
fill="currentColor">
<path fill-rule="evenodd"
d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
clip-rule="evenodd" />
</svg>
</div>
<div class="mt-4">
<h3 class="text-xl font-bold text-gray-900 dark:text-white">
Address:
</h3>
<p class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">
SILVER LAKE, United States<br>1941 Late Avenue<br>Zip Code/Postal code: 03875
</p>
</div>
</div>

<div class="hidden lg:block">
<div
class="inline-flex items-center justify-center w-16 h-16 mx-auto text-gray-500 bg-gray-100 rounded-lg dark:bg-gray-800 dark:text-white">
<svg aria-hidden="true" class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
fill="currentColor">
<path
d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
</svg>
</div>
<div class="mt-4">
<h3 class="text-xl font-bold text-gray-900 dark:text-white">
Contact us:
</h3>
<p class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">
Email us for general queries, including marketing and partnership opportunities.
</p>
<a href="#" title="" class="block mt-1 text-base font-semibold text-gray-900 dark:text-white hover:underline">
hello@company.com
</a>
</div>
</div>
</div>

<div class="max-w-3xl mx-auto mt-12 lg:mt-24">
<form action="#" class="grid max-w-screen-md grid-cols-1 mx-auto gap-x-8 gap-y-6 sm:grid-cols-2">
<div>
<label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
First name
</label>
<input type="text" id="first-name"
class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
placeholder="Bonnie" required>
</div>

<div>
<label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
Last name
</label>
<input type="text" id="last-name"
class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
placeholder="Green" required>
</div>

<div>
<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
Your email
</label>
<input type="email" id="email"
class="shadow-xs bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
placeholder="name@flowbite.com" required>
</div>

<div>
<label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
Phone number
</label>
<input type="number" id="phone-number"
class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
placeholder="+(12) 345 6789" required>
</div>

<div>
<div class="flex items-center gap-1.5 mb-2">
<label for="country" class="block text-sm font-medium text-gray-900 dark:text-white">
Country
</label>
<button type="button" data-popover-target="country-description" class="w-4 h-4">
<svg aria-hidden="true" class="text-gray-400 hover:text-gray-900 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
<path fill-rule="evenodd"
d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
clip-rule="evenodd" />
</svg>
<span class="sr-only">Show information</span>
</button>
<div data-popover id="country-description" role="tooltip"
class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
<div class="p-3 space-y-2">
<h3 class="font-semibold text-gray-900 dark:text-white">Country based on fiscal
residency</h3>
<p>Report helps navigate cumulative growth of community activities. Ideally, the chart
should have a growing trend, as stagnating chart signifies a significant decrease of
community activity.</p>
<h3 class="font-semibold text-gray-900 dark:text-white">Double citizenship</h3>
<p>For each date bucket, the all-time volume of activities is calculated. This means
that activities in period n contain all activities up to period n, plus the
activities generated by your community in period.</p>
<a href="#"
class="flex items-center font-medium text-primary-600 dark:text-primary-500 dark:hover:text-primary-600 hover:text-primary-700">Read
more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd"></path>
</svg></a>
</div>
<div data-popper-arrow></div>
</div>
</div>
<select id="country"
class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
<option>Select a country</option>
<option value="US" selected>United States</option>
</select>
</div>

<div>
<div class="flex items-center gap-1.5 mb-2">
<label for="language" class="block text-sm font-medium text-gray-900 dark:text-white">
Language
</label>
<button type="button" data-popover-target="language-description" class="w-4 h-4">
<svg aria-hidden="true" class="text-gray-400 hover:text-gray-900 dark:hover:text-white"
xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
<path fill-rule="evenodd"
d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
clip-rule="evenodd" />
</svg>
<span class="sr-only">Show information</span>
</button>
<div data-popover id="language-description" role="tooltip"
class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
<div class="p-3 space-y-2">
<h3 class="font-semibold text-gray-900 dark:text-white">Choosing an international
language</h3>
<p>Report helps navigate cumulative growth of community activities. Ideally, the chart
should have a growing trend, as stagnating chart signifies a significant decrease of
community activity.</p>
<a href="#"
class="flex items-center font-medium text-primary-600 dark:text-primary-500 dark:hover:text-primary-600 hover:text-primary-700">Read
more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd"></path>
</svg></a>
</div>
<div data-popper-arrow></div>
</div>
</div>
<select id="language"
class="bg-white border border-gray-300 text-gray-900 text-sm shadow-xs rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
<option>Select a language</option>
<option value="US" selected>English (US)</option>
</select>
</div>

<div class="sm:col-span-2">
<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
Your message
</label>
<textarea id="message" rows="6"
class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg shadow-xs border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
placeholder=""></textarea>
</div>

<div class="sm:col-span-2">
<div class="flex md:items-center">
<input type="checkbox" id="terms" value=""
class="w-4 h-4 bg-white border-gray-300 rounded-sm text-primary-600 focus:ring-ay-100 -500 dark:focus:ring-ay-100 -600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="terms" class="ml-2 text-sm font-normal text-gray-500 dark:text-gray-400">
By submitting this form, you confirm that you have read and agree to
<a href="#" title="" class="font-medium text-gray-900 underline hover:no-underline dark:text-white">
Terms of Service
</a>
and
<a href="#" title="" class="font-medium text-gray-900 underline hover:no-underline dark:text-white">
Privacy Statement
</a>
</label>
</div>
</div>

<button type="submit"
class="px-5 py-3 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send
message</button>
</form>
</div>
</div>
</section>

<section class="bg-white dark:bg-gray-900">
<div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:py-24">
<div class="max-w-screen-sm mx-auto text-center">
<h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
Our Blog
</h2>
</div>

<div class="grid gap-8 mt-12 lg:divide-x lg:divide-gray-200 dark:lg:divide-gray-800 lg:grid-cols-3">
<article>
<a href="#">
<img class="mb-5 rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/google-hq.png"
alt="blog image">
</a>
<h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
<a href="#">SEO Basics: Beginner's Guide to SEO Success</a>
</h2>
<p class="mb-4 text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many
changes! After months of preparation and some hard work, we moved to our new office.</p>
<a href="#" class="inline-flex items-center font-medium text-primary-700 hover:underline dark:text-primary-500">
Read more
<svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
</a>
</article>
<div class="space-y-8 lg:pl-8">
<article>
<h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
<a href="#">How to quickly deploy a static website</a>
</h2>
<p class="mb-4 text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many
changes! After months of preparation and some hard work, we moved to our new office.</p>
<a href="#"
class="inline-flex items-center font-medium text-primary-700 hover:underline dark:text-primary-500">
Read more
<svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
</a>
</article>
<article>
<h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
<a href="#">What is SEO? Search Engine Optimization Explained</a>
</h2>
<p class="mb-4 text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many
changes! After months of preparation and some hard work, we moved to our new office.</p>
<a href="#"
class="inline-flex items-center font-medium text-primary-700 hover:underline dark:text-primary-500">
Read more
<svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
</a>
</article>
<article>
<h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
<a href="#">Spotify's Car Thing available to all premium users</a>
</h2>
<p class="mb-4 text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many
changes! After months of preparation and some hard work, we moved to our new office.</p>
<a href="#"
class="inline-flex items-center font-medium text-primary-700 hover:underline dark:text-primary-500">
Read more
<svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
</a>
</article>
</div>
<div class="space-y-8 lg:pl-8">
<article>
<h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
<a href="#">How to Rank Higher on Google (6 Easy Steps)</a>
</h2>
<p class="mb-4 text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many
changes! After months of preparation and some hard work, we moved to our new office.</p>
<a href="#"
class="inline-flex items-center font-medium text-primary-700 hover:underline dark:text-primary-500">
Read more
<svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
</a>
</article>
<article>
<h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
<a href="#">12 SEO Best Practices That Everyone Should Follow</a>
</h2>
<p class="mb-4 text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many
changes! After months of preparation and some hard work, we moved to our new office.</p>
<a href="#"
class="inline-flex items-center font-medium text-primary-700 hover:underline dark:text-primary-500">
Read more
<svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
</a>
</article>
<article>
<h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
<a href="#">How to schedule your Tweets to send later</a>
</h2>
<p class="mb-4 text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many
changes! After months of preparation and some hard work, we moved to our new office.</p>
<a href="#"
class="inline-flex items-center font-medium text-primary-700 hover:underline dark:text-primary-500">
Read more
<svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
</a>
</article>
</div>
</div>
</div>
</section>

<footer class="border-t border-b border-gray-100 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
<div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:py-24">
<div class="grid grid-cols-2 gap-8 lg:grid-cols-6">
<div class="col-span-2">
<a href="#" class="flex items-center mb-2 text-2xl font-semibold text-gray-900 sm:mb-0 dark:text-white">
<svg class="h-8 mr-2" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<path
d="M25.2696 13.126C25.1955 13.6364 24.8589 14.3299 24.4728 14.9328C23.9856 15.6936 23.2125 16.2264 22.3276 16.4114L18.43 17.2265C17.8035 17.3575 17.2355 17.6853 16.8089 18.1621L14.2533 21.0188C13.773 21.5556 13.4373 21.4276 13.4373 20.7075C13.4315 20.7342 12.1689 23.9903 15.5149 25.9202C16.8005 26.6618 18.6511 26.3953 19.9367 25.6538L26.7486 21.7247C29.2961 20.2553 31.0948 17.7695 31.6926 14.892C31.7163 14.7781 31.7345 14.6639 31.7542 14.5498L25.2696 13.126Z"
fill="url(#paint0_linear_11430_22515)" />
<path
d="M23.5028 9.20133C24.7884 9.94288 25.3137 11.0469 25.3137 12.53C25.3137 12.7313 25.2979 12.9302 25.2694 13.1261L28.0141 14.3051L31.754 14.5499C32.2329 11.7784 31.2944 8.92561 29.612 6.65804C28.3459 4.9516 26.7167 3.47073 24.7581 2.34097C23.167 1.42325 21.5136 0.818599 19.8525 0.486816L17.9861 2.90382L17.3965 5.67918L23.5028 9.20133Z"
fill="url(#paint1_linear_11430_22515)" />
<path
d="M1.5336 11.2352C1.5329 11.2373 1.53483 11.238 1.53556 11.2358C1.67958 10.8038 1.86018 10.3219 2.08564 9.80704C3.26334 7.11765 5.53286 5.32397 8.32492 4.40943C11.117 3.49491 14.1655 3.81547 16.7101 5.28323L17.3965 5.67913L19.8525 0.486761C12.041 -1.07341 4.05728 3.51588 1.54353 11.2051C1.54233 11.2087 1.53796 11.2216 1.5336 11.2352Z"
fill="url(#paint2_linear_11430_22515)" />
<path
d="M19.6699 25.6538C18.3843 26.3953 16.8003 26.3953 15.5147 25.6538C15.3402 25.5531 15.1757 25.4399 15.0201 25.3174L12.7591 26.8719L10.8103 30.0209C12.9733 31.821 15.7821 32.3997 18.589 32.0779C20.7013 31.8357 22.7995 31.1665 24.7582 30.0368C26.3492 29.1191 27.7 27.9909 28.8182 26.7195L27.6563 23.8962L25.7762 22.1316L19.6699 25.6538Z"
fill="url(#paint3_linear_11430_22515)" />
<path
d="M15.0201 25.3175C14.0296 24.5373 13.4371 23.3406 13.4371 22.0588V21.931V11.2558C13.4371 10.6521 13.615 10.5494 14.1384 10.8513C13.3323 10.3864 11.4703 8.79036 9.17118 10.1165C7.88557 10.858 6.8269 12.4949 6.8269 13.978V21.8362C6.8269 24.775 8.34906 27.8406 10.5445 29.7966C10.6313 29.874 10.7212 29.9469 10.8103 30.0211L15.0201 25.3175Z"
fill="url(#paint4_linear_11430_22515)" />
<path
d="M28.6604 5.49565C28.6589 5.49395 28.6573 5.49532 28.6589 5.49703C28.9613 5.83763 29.2888 6.23485 29.6223 6.68734C31.3648 9.05099 32.0158 12.0447 31.4126 14.9176C30.8093 17.7906 29.0071 20.2679 26.4625 21.7357L25.7761 22.1316L28.8181 26.7195C34.0764 20.741 34.09 11.5388 28.6815 5.51929C28.6789 5.51641 28.67 5.50622 28.6604 5.49565Z"
fill="url(#paint5_linear_11430_22515)" />
<path
d="M7.09355 13.978C7.09354 12.4949 7.88551 11.1244 9.17113 10.3829C9.34564 10.2822 9.52601 10.1965 9.71002 10.1231L9.49304 7.38962L7.96861 4.26221C5.32671 5.23364 3.1897 7.24125 2.06528 9.83067C1.2191 11.7793 0.75001 13.9294 0.75 16.1888C0.75 18.0243 1.05255 19.7571 1.59553 21.3603L4.62391 21.7666L7.09355 21.0223V13.978Z"
fill="url(#paint6_linear_11430_22515)" />
<path
d="M9.71016 10.1231C10.8817 9.65623 12.2153 9.74199 13.3264 10.3829L13.4372 10.4468L22.3326 15.5777C22.9566 15.9376 22.8999 16.2918 22.1946 16.4392L22.7078 16.332C23.383 16.1908 23.9999 15.8457 24.4717 15.3428C25.2828 14.4782 25.5806 13.4351 25.5806 12.5299C25.5806 11.0468 24.7886 9.67634 23.503 8.93479L16.6911 5.00568C14.1436 3.53627 11.0895 3.22294 8.29622 4.14442C8.18572 4.18087 8.07756 4.2222 7.96875 4.26221L9.71016 10.1231Z"
fill="url(#paint7_linear_11430_22515)" />
<path
d="M20.0721 31.8357C20.0744 31.8352 20.0739 31.8332 20.0717 31.8337C19.6252 31.925 19.1172 32.0097 18.5581 32.0721C15.638 32.3978 12.7174 31.4643 10.5286 29.5059C8.33986 27.5474 7.09347 24.7495 7.09348 21.814L7.09347 21.0222L1.59546 21.3602C4.1488 28.8989 12.1189 33.5118 20.0411 31.8421C20.0449 31.8413 20.0582 31.8387 20.0721 31.8357Z"
fill="url(#paint8_linear_11430_22515)" />
<defs>
<linearGradient id="paint0_linear_11430_22515" x1="20.8102" y1="23.9532" x2="23.9577" y2="12.9901"
gradientUnits="userSpaceOnUse">
<stop stop-color="#1724C9" />
<stop offset="1" stop-color="#1C64F2" />
</linearGradient>
<linearGradient id="paint1_linear_11430_22515" x1="28.0593" y1="10.5837" x2="19.7797" y2="2.33321"
gradientUnits="userSpaceOnUse">
<stop stop-color="#1C64F2" />
<stop offset="1" stop-color="#0092FF" />
</linearGradient>
<linearGradient id="paint2_linear_11430_22515" x1="16.9145" y1="5.2045" x2="4.42432" y2="5.99375"
gradientUnits="userSpaceOnUse">
<stop stop-color="#0092FF" />
<stop offset="1" stop-color="#45B2FF" />
</linearGradient>
<linearGradient id="paint3_linear_11430_22515" x1="16.0698" y1="28.846" x2="27.2866" y2="25.8192"
gradientUnits="userSpaceOnUse">
<stop stop-color="#1C64F2" />
<stop offset="1" stop-color="#0092FF" />
</linearGradient>
<linearGradient id="paint4_linear_11430_22515" x1="8.01881" y1="15.8661" x2="15.9825" y2="24.1181"
gradientUnits="userSpaceOnUse">
<stop stop-color="#1724C9" />
<stop offset="1" stop-color="#1C64F2" />
</linearGradient>
<linearGradient id="paint5_linear_11430_22515" x1="26.2004" y1="21.8189" x2="31.7569" y2="10.6178"
gradientUnits="userSpaceOnUse">
<stop stop-color="#0092FF" />
<stop offset="1" stop-color="#45B2FF" />
</linearGradient>
<linearGradient id="paint6_linear_11430_22515" x1="6.11387" y1="9.31427" x2="3.14054" y2="20.4898"
gradientUnits="userSpaceOnUse">
<stop stop-color="#1C64F2" />
<stop offset="1" stop-color="#0092FF" />
</linearGradient>
<linearGradient id="paint7_linear_11430_22515" x1="21.2932" y1="8.78271" x2="10.4278" y2="11.488"
gradientUnits="userSpaceOnUse">
<stop stop-color="#1724C9" />
<stop offset="1" stop-color="#1C64F2" />
</linearGradient>
<linearGradient id="paint8_linear_11430_22515" x1="7.15667" y1="21.5399" x2="14.0824" y2="31.9579"
gradientUnits="userSpaceOnUse">
<stop stop-color="#0092FF" />
<stop offset="1" stop-color="#45B2FF" />
</linearGradient>
</defs>
</svg>
Flowbite
</a>
<p class="my-4 text-gray-500 dark:text-gray-400">
We are an open-source library of over 400+ web components and interactive elements built with the utility
classes from
Tailwind CSS.
</p>
<ul class="flex mt-5 space-x-6">
<li>
<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
<path fill-rule="evenodd"
d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
clip-rule="evenodd" />
</svg>
</a>
</li>
<li>
<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
<path fill-rule="evenodd"
d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
clip-rule="evenodd" />
</svg>
</a>
</li>
<li>
<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
<path
d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
</svg>
</a>
</li>
<li>
<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
<path fill-rule="evenodd"
d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
clip-rule="evenodd" />
</svg>
</a>
</li>
<li>
<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
<path fill-rule="evenodd"
d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
clip-rule="evenodd" />
</svg>
</a>
</li>
</ul>
</div>
<div class="lg:mx-auto">
<h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
<ul class="text-gray-500 dark:text-gray-400">
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">About</a>
</li>
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">Careers</a>
</li>
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">Brand Center</a>
</li>
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">Blog</a>
</li>
</ul>
</div>
<div class="lg:mx-auto">
<h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
<ul class="text-gray-500 dark:text-gray-400">
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">Discord Server</a>
</li>
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">Twitter</a>
</li>
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">Facebook
</li>
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">Contact Us</a>
</li>
</ul>
</div>
<div class="lg:mx-auto">
<h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
<ul class="text-gray-500 dark:text-gray-400">
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">Privacy Policy</a>
</li>
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">Licensing</a>
</li>
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">Terms</a>
</li>
</ul>
</div>
<div class="lg:mx-auto">
<h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
<ul class="text-gray-500 dark:text-gray-400">
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">iOS</a>
</li>
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">Android</a>
</li>
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">Windows</a>
</li>
<li class="mb-4">
<a href="#" class="hover:underline hover:text-gray-900 dark:hover:text-white">MacOS</a>
</li>
</ul>
</div>
</div>

<hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">

<span class="block text-sm text-center text-gray-500 dark:text-gray-400">© 2021-<span id="currentYear">2023</span> <a href="#"
class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
</div>
</footer>
</main>


@fluxScripts


<script src="//app.bundle.js"></script>
</body>

</html>