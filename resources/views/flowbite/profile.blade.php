
<!doctype html>
<html lang="en" class="dark">
  <head><script src="/livereload.js?mindelay=10&amp;v=2&amp;port=8813&amp;path=livereload" data-no-instant defer></script>
    <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="Get started with a premium admin dashboard interface built with Tailwind CSS and Flowbite featuring over 50 example pages of charts, calendars, kanban boards, dashboards, CRUD pages, mailing systems, and more." />
<meta name="author" content="Themesberg" />
<meta name="generator" content="Hugo 0.123.7" />

<title>Tailwind CSS User Profile - Flowbite</title>

<link rel="canonical" href="http://krizzma.com:8813/users/profile/" />



<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
  rel="stylesheet"
/>


<link rel="stylesheet" href="http://krizzma.com:8813/app.css" />

<link rel="apple-touch-icon" sizes="180x180" href="http://krizzma.com:8813/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="http://krizzma.com:8813/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="http://krizzma.com:8813/favicon-16x16.png" />
<link rel="icon" type="image/png" href="http://krizzma.com:8813/favicon.ico" />
<link rel="manifest" href="http://krizzma.com:8813/site.webmanifest" />
<link rel="mask-icon" href="http://krizzma.com:8813/safari-pinned-tab.svg" color="#5bbad5" />
<meta name="msapplication-TileColor" content="#ffffff" />
<meta name="theme-color" content="#ffffff" />

<!-- Twitter -->
<meta
  name="twitter:card"
  content="summary"
/>
<meta name="twitter:site" content="@" />
<meta name="twitter:creator" content="@" />
<meta name="twitter:title" content="Tailwind CSS User Profile - Flowbite" />
<meta
  name="twitter:description"
  content="Get started with a premium admin dashboard interface built with Tailwind CSS and Flowbite featuring over 50 example pages of charts, calendars, kanban boards, dashboards, CRUD pages, mailing systems, and more."
/>
<meta
  name="twitter:image"
  content="http://krizzma.com:8813/application-ui/demo/images/og-image.jpg"
/>

<!-- Facebook -->
<meta property="og:url" content="http://krizzma.com:8813/users/profile/" />
<meta property="og:title" content="Tailwind CSS User Profile - Flowbite" />
<meta
  property="og:description"
  content="Get started with a premium admin dashboard interface built with Tailwind CSS and Flowbite featuring over 50 example pages of charts, calendars, kanban boards, dashboards, CRUD pages, mailing systems, and more."
/>
<meta
  property="og:type"
  content="article"
/>
<meta
  property="og:image"
  content="http://krizzma.com:8813/application-ui/demo/images/og-image.jpg"
/>
<meta property="og:image:type" content="image/png" />



<script>
  
  if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
    document.documentElement.classList.add("dark");
  } else {
    document.documentElement.classList.remove("dark");
  }
</script>

  </head>
  
    <body class="bg-gray-50 dark:bg-gray-900 antialiased">
      

      
  <nav class="fixed z-10 flex h-16 w-full items-center border-b border-gray-200 bg-white px-4 dark:border-gray-700 dark:bg-gray-800">
  <div class="flex w-full items-center justify-between">
    <div class="flex items-center justify-start">
      <button
        id="togglSidebarButton"
        aria-expanded="true"
        aria-controls="sidebar"
        class="me-2 hidden cursor-pointer rounded-sm p-1.5 text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white sm:-ms-1 lg:inline"
      >
        <svg class="h-7 w-7" data-sidebar-toggle-collapse-icon aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10" />
        </svg>
        <svg class="hidden h-7 w-7" data-sidebar-toggle-expand-icon aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
        </svg>
      </button>
      <button
        data-drawer-target="sidebar"
        data-drawer-toggle="sidebar"
        aria-expanded="false"
        aria-controls="sidebar"
        class="me-2 inline cursor-pointer rounded-sm p-1.5 text-gray-600 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white sm:-ms-1 lg:hidden"
      >
        <svg class="h-7 w-7" data-sidebar-toggle-collapse-icon aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10" />
        </svg>
      </button>
      <a href="http://krizzma.com:8813/" class="mr-4 flex">
        <img src="http://krizzma.com:8813/images/logo.svg" class="mr-3 h-8" alt="Flowbite Logo" />
        <span class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">Flowbite</span>
      </a>
      <form action="#" method="GET" class="hidden lg:block lg:pl-14">
        <label for="topbar-search" class="sr-only">Search</label>
        <div class="relative lg:w-96">
          <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
          </div>
          <input
            type="text"
            name="email"
            id="topbar-search"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-9 text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500 sm:text-sm"
            placeholder="Search"
          />
        </div>
      </form>
    </div>
    <div class="flex items-center lg:order-2">
      <div class="flex items-center space-x-1 sm:pe-3">
        <button
          id="toggleSidebarMobileSearch"
          type="button"
          class="rounded-lg p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-600 lg:hidden"
        >
          <span class="sr-only">Search</span>
          
          <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
          </svg>
        </button>
        
        <button
          type="button"
          data-dropdown-toggle="notification-dropdown"
          class="rounded-lg p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-600"
        >
          <span class="sr-only">View notifications</span>
          
          <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z"
            />
          </svg>
        </button>
        
        <div class="z-50 my-4 block hidden max-w-sm divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow-md dark:divide-gray-600 dark:bg-gray-700" id="notification-dropdown" data-popper-placement="bottom">
          <div class="flex items-center justify-between bg-gray-100 px-4 py-2 text-center font-medium text-gray-900 dark:bg-gray-700 dark:text-white">
            <h3>Notifications</h3>
            <button
              type="button"
              data-tooltip-target="tooltip-options-notification"
              class="flex cursor-pointer items-center justify-center rounded-lg p-1.5 text-gray-500 hover:bg-gray-200 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
            >
              <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-width="2"
                  d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4"
                />
              </svg>

              <span class="sr-only">Options</span>
            </button>
            <div
              id="tooltip-options-notification"
              role="tooltip"
              class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
            >
              Options
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
          <div class="relative max-h-96 overflow-y-scroll dark:bg-gray-800">
            <a href="#" class="flex border-b px-4 py-3 hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700">
              <div class="shrink-0">
                <img class="h-11 w-11 rounded-full" src="http://krizzma.com:8813/images/users/lana-byrd.png" alt="Lana avatar" />
                <div class="absolute -mt-5 ml-6 flex h-5 w-5 items-center justify-center rounded-full border border-white bg-primary-700 text-white dark:border-gray-700">
                  <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      fill-rule="evenodd"
                      d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Zm5-7a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 2a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H8Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </div>
              </div>
              <div class="w-full pl-3">
                <div class="mb-1.5 text-sm font-normal text-gray-500 dark:text-gray-400">New message from <span class="font-semibold text-gray-900 dark:text-white">Lana Byrd</span>: "Hey, what's up? All set for the presentation?"</div>
                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">a few moments ago</div>
              </div>
            </a>
            <a href="#" class="flex border-b px-4 py-3 hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700">
              <div class="shrink-0">
                <img class="h-11 w-11 rounded-full" src="http://krizzma.com:8813/images/users/jese-leos.png" alt="Jese Leos avatar" />
                <div class="absolute -mt-5 ml-6 flex h-5 w-5 items-center justify-center rounded-full border border-white bg-gray-900 dark:border-gray-700">
                  <svg class="h-2 w-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path
                      d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="w-full pl-3">
                <div class="mb-1.5 text-sm font-normal text-gray-500 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Jese leos</span> started following you.</div>
                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">10 minutes ago</div>
              </div>
            </a>
            <a href="#" class="flex border-b px-4 py-3 hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700">
              <div class="shrink-0">
                <img class="h-11 w-11 rounded-full" src="http://krizzma.com:8813/images/users/bonnie-green.png" alt="Bonnie avatar" />
                <div class="absolute -mt-5 ml-6 flex h-5 w-5 items-center justify-center rounded-full border border-white bg-orange-400 dark:border-gray-700">
                  <svg class="h-3 w-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      fill-rule="evenodd"
                      d="M20.337 3.664c.213.212.354.486.404.782.294 1.711.657 5.195-.906 6.76-1.77 1.768-8.485 5.517-10.611 6.683a.987.987 0 0 1-1.176-.173l-.882-.88-.877-.884a.988.988 0 0 1-.173-1.177c1.165-2.126 4.913-8.841 6.682-10.611 1.562-1.563 5.046-1.198 6.757-.904.296.05.57.191.782.404ZM5.407 7.576l4-.341-2.69 4.48-2.857-.334a.996.996 0 0 1-.565-1.694l2.112-2.111Zm11.357 7.02-.34 4-2.111 2.113a.996.996 0 0 1-1.69-.565l-.422-2.807 4.563-2.74Zm.84-6.21a1.99 1.99 0 1 1-3.98 0 1.99 1.99 0 0 1 3.98 0Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </div>
              </div>
              <div class="w-full pl-3">
                <div class="mb-1.5 text-sm font-normal text-gray-500 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span> is requesting to upgrade the Flowbite Plan.</div>
                <div class="mb-2 flex items-center space-x-2">
                  <button
                    type="button"
                    class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-3 py-2 text-xs font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto"
                  >
                    Accept
                  </button>
                  <button
                    type="button"
                    class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-xs font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto"
                  >
                    Decline
                  </button>
                </div>
                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">32 minutes ago</div>
              </div>
            </a>
            <a href="#" class="flex border-b px-4 py-3 hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700">
              <div class="shrink-0">
                <img class="h-11 w-11 rounded-full" src="http://krizzma.com:8813/images/users/joseph-mcfall.png" alt="Joseph McFall avatar" />
                <div class="absolute -mt-5 ml-6 flex h-5 w-5 items-center justify-center rounded-full border border-white bg-red-600 dark:border-gray-700">
                  <svg class="h-2 w-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path
                      d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="w-full pl-3">
                <div class="mb-1.5 text-sm font-normal text-gray-500 dark:text-gray-400">
                  <span class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span> and <span class="font-medium text-gray-900 dark:text-white">141 others</span> love your story. See it and view more stories.
                </div>
                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">44 minutes ago</div>
              </div>
            </a>
            <a href="#" class="flex border-b px-4 py-3 hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700">
              <div class="shrink-0">
                <img class="h-11 w-11 rounded-full" src="http://krizzma.com:8813/images/users/roberta-casas.png" alt="Roberta Casas image" />
                <div class="absolute -mt-5 ml-6 flex h-5 w-5 items-center justify-center rounded-full border border-white bg-green-400 dark:border-gray-700">
                  <svg class="h-2 w-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path
                      d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="w-full pl-3">
                <div class="mb-1.5 text-sm font-normal text-gray-500 dark:text-gray-400">
                  <span class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span> mentioned you in a comment: <span class="font-medium text-primary-700 dark:text-primary-500">@bonnie.green</span> what do you say?
                </div>
                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">1 hour ago</div>
              </div>
            </a>
            <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600">
              <div class="shrink-0">
                <img class="h-11 w-11 rounded-full" src="http://krizzma.com:8813/images/users/robert-brown.png" alt="Robert image" />
                <div class="absolute -mt-5 ml-6 flex h-5 w-5 items-center justify-center rounded-full border border-white bg-purple-500 dark:border-gray-700">
                  <svg class="h-2 w-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path
                      d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="w-full pl-3">
                <div class="mb-1.5 text-sm font-normal text-gray-500 dark:text-gray-400">
                  <span class="font-semibold text-gray-900 dark:text-white">Robert Brown</span> posted a new video: Glassmorphism - learn how to implement the new design trend.
                </div>
                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">3 hours ago</div>
              </div>
            </a>
          </div>
          <a href="#" class="block bg-gray-100 py-2 text-center text-base font-medium text-gray-900 hover:bg-gray-200 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:hover:underline">
            <div class="inline-flex items-center ">
              <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                  fill-rule="evenodd"
                  d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                  clip-rule="evenodd"
                />
              </svg>

              View all
            </div>
          </a>
        </div>
        
        <button
          type="button"
          data-dropdown-toggle="apps-dropdown"
          class="hidden rounded-lg p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-600 sm:flex"
        >
          <span class="sr-only">View notifications</span>
          
          <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
              fill-rule="evenodd"
              d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z"
              clip-rule="evenodd"
            />
          </svg>
        </button>
        
        <div class="z-50 my-4 hidden max-w-sm list-none overflow-hidden rounded-lg bg-white text-base shadow-md dark:bg-gray-700" id="apps-dropdown">
          <div class="flex items-center justify-between border-b border-gray-200 bg-gray-100 px-4 py-2 text-center font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
            <h3>Applications</h3>
            <button
              type="button"
              data-tooltip-target="tooltip-options-apps"
              class="flex cursor-pointer items-center justify-center rounded-lg p-1.5 text-gray-500 hover:bg-gray-200 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
            >
              <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-width="2"
                  d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4"
                ></path>
              </svg>

              <span class="sr-only">Options</span>
            </button>
            <div
              id="tooltip-options-apps"
              role="tooltip"
              class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
              data-popper-reference-hidden=""
              data-popper-escaped=""
              data-popper-placement="bottom"
              style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(264px, 48px, 0px);"
            >
              Options
              <div class="tooltip-arrow" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate3d(68px, 0px, 0px);"></div>
            </div>
          </div>
          <div class="grid grid-cols-3 gap-4 p-4 dark:bg-gray-800">
            <a href="http://krizzma.com:8813/calendar/" class="group block rounded-md bg-gray-50 p-4 text-center hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600">
              <svg
                class="mx-auto mb-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  fill-rule="evenodd"
                  d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                  clip-rule="evenodd"
                />
              </svg>

              <div class="text-sm font-medium text-gray-900 dark:text-white">Calendar</div>
            </a>
            <a href="http://krizzma.com:8813/video/meeting-room/" class="group block rounded-md bg-gray-50 p-4 text-center hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600">
              <svg
                class="mx-auto mb-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path fill-rule="evenodd" d="M14 7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7Zm2 9.387 4.684 1.562A1 1 0 0 0 22 17V7a1 1 0 0 0-1.316-.949L16 7.613v8.774Z" clip-rule="evenodd" />
              </svg>

              <div class="text-sm font-medium text-gray-900 dark:text-white">Meeting</div>
            </a>
            <a href="http://krizzma.com:8813/pages/text-editor/" class="group block rounded-md bg-gray-50 p-4 text-center hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600">
              <svg
                class="mx-auto mb-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  fill-rule="evenodd"
                  d="M2 7a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7Zm5.01 1H5v2.01h2.01V8Zm3 0H8v2.01h2.01V8Zm3 0H11v2.01h2.01V8Zm3 0H14v2.01h2.01V8Zm3 0H17v2.01h2.01V8Zm-12 3H5v2.01h2.01V11Zm3 0H8v2.01h2.01V11Zm3 0H11v2.01h2.01V11Zm3 0H14v2.01h2.01V11Zm3 0H17v2.01h2.01V11Zm-12 3H5v2.01h2.01V14ZM8 14l-.001 2 8.011.01V14H8Zm11.01 0H17v2.01h2.01V14Z"
                  clip-rule="evenodd"
                />
              </svg>
              <div class="text-sm font-medium text-gray-900 dark:text-white">Text Editor</div>
            </a>
            <a href="http://krizzma.com:8813/chat/" class="group block rounded-md bg-gray-50 p-4 text-center hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600">
              <svg
                class="mx-auto mb-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd" />
              </svg>

              <div class="text-sm font-medium text-gray-900 dark:text-white">Chat Room</div>
            </a>
            <a href="http://krizzma.com:8813/pages/datatables/" class="group block rounded-md bg-gray-50 p-4 text-center hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600">
              <svg
                class="mx-auto mb-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path fill-rule="evenodd" d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Zm2 8v-2h7v2H4Zm0 2v2h7v-2H4Zm9 2h7v-2h-7v2Zm7-4v-2h-7v2h7Z" clip-rule="evenodd" />
              </svg>

              <div class="text-sm font-medium text-gray-900 dark:text-white">Datatables</div>
            </a>
            <a href="http://krizzma.com:8813/kanban/" class="group block rounded-md bg-gray-50 p-4 text-center hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600">
              <svg
                class="mx-auto mb-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  fill-rule="evenodd"
                  d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z"
                  clip-rule="evenodd"
                />
              </svg>

              <div class="text-sm font-medium text-gray-900 dark:text-white">Tasks</div>
            </a>
            <a href="http://krizzma.com:8813/mailing/inbox/" class="group block rounded-md bg-gray-50 p-4 text-center hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600">
              <svg
                class="mx-auto mb-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  fill-rule="evenodd"
                  d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Zm5-7a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 2a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H8Z"
                  clip-rule="evenodd"
                />
              </svg>

              <div class="text-sm font-medium text-gray-900 dark:text-white">Inbox</div>
            </a>
            <a href="http://krizzma.com:8813/support/tickets/" class="group block rounded-md bg-gray-50 p-4 text-center hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600">
              <svg
                class="mx-auto mb-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  fill-rule="evenodd"
                  d="M12 2a7 7 0 0 0-7 7 3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V9a5 5 0 1 1 10 0v7.083A2.919 2.919 0 0 1 14.083 19H14a2 2 0 0 0-2-2h-1a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a2 2 0 0 0 1.732-1h.351a4.917 4.917 0 0 0 4.83-4H19a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3 7 7 0 0 0-7-7Zm1.45 3.275a4 4 0 0 0-4.352.976 1 1 0 0 0 1.452 1.376 2.001 2.001 0 0 1 2.836-.067 1 1 0 1 0 1.386-1.442 4 4 0 0 0-1.321-.843Z"
                  clip-rule="evenodd"
                />
              </svg>

              <div class="text-sm font-medium text-gray-900 dark:text-white">Support</div>
            </a>
            <a href="http://krizzma.com:8813/pages/api/" class="group block rounded-md bg-gray-50 p-4 text-center hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600">
              <svg
                class="mx-auto mb-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  fill="currentColor"
                  d="M6.94318 11h-.85227l.96023-2.90909h1.07954L9.09091 11h-.85227l-.63637-2.10795h-.02272L6.94318 11Zm-.15909-1.14773h1.60227v.59093H6.78409v-.59093ZM9.37109 11V8.09091h1.25571c.2159 0 .4048.04261.5667.12784.162.08523.2879.20502.3779.35937.0899.15436.1349.33476.1349.5412 0 .20833-.0464.38873-.1392.54119-.0918.15246-.2211.26989-.3878.35229-.1657.0824-.3593.1236-.5809.1236h-.75003v-.61367h.59093c.0928 0 .1719-.0161.2372-.0483.0663-.03314.1169-.08002.152-.14062.036-.06061.054-.13211.054-.21449 0-.08334-.018-.15436-.054-.21307-.0351-.05966-.0857-.10511-.152-.13636-.0653-.0322-.1444-.0483-.2372-.0483h-.2784V11h-.78981Zm3.41481-2.90909V11h-.7898V8.09091h.7898Z"
                />
                <path
                  stroke="currentColor"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M8.31818 2c-.55228 0-1 .44772-1 1v.72878c-.06079.0236-.12113.04809-.18098.07346l-.55228-.53789c-.38828-.37817-1.00715-.37817-1.39543 0L3.30923 5.09564c-.19327.18824-.30229.44659-.30229.71638 0 .26979.10902.52813.30229.71637l.52844.51468c-.01982.04526-.03911.0908-.05785.13662H3c-.55228 0-1 .44771-1 1v2.58981c0 .5523.44772 1 1 1h.77982c.01873.0458.03802.0914.05783.1366l-.52847.5147c-.19327.1883-.30228.4466-.30228.7164 0 .2698.10901.5281.30228.7164l1.88026 1.8313c.38828.3781 1.00715.3781 1.39544 0l.55228-.5379c.05987.0253.12021.0498.18102.0734v.7288c0 .5523.44772 1 1 1h2.65912c.5523 0 1-.4477 1-1v-.7288c.1316-.0511.2612-.1064.3883-.1657l.5435.2614v.4339c0 .5523.4477 1 1 1H14v.0625c0 .5523.4477 1 1 1h.0909v.0625c0 .5523.4477 1 1 1h.6844l.4952.4823c1.1648 1.1345 3.0214 1.1345 4.1863 0l.2409-.2347c.1961-.191.3053-.454.3022-.7277-.0031-.2737-.1183-.5342-.3187-.7207l-6.2162-5.7847c.0173-.0398.0342-.0798.0506-.12h.7799c.5522 0 1-.4477 1-1V8.17969c0-.55229-.4478-1-1-1h-.7799c-.0187-.04583-.038-.09139-.0578-.13666l.5284-.51464c.1933-.18824.3023-.44659.3023-.71638 0-.26979-.109-.52813-.3023-.71637l-1.8803-1.8313c-.3883-.37816-1.0071-.37816-1.3954 0l-.5523.53788c-.0598-.02536-.1201-.04985-.1809-.07344V3c0-.55228-.4477-1-1-1H8.31818Z"
                />
              </svg>

              <div class="text-sm font-medium text-gray-900 dark:text-white">API</div>
            </a>
            <button
              type="button"
              class="col-span-3 flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
            >
              <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                  fill-rule="evenodd"
                  d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                  clip-rule="evenodd"
                />
              </svg>
              View all
            </button>
          </div>
        </div>
        <button
          id="theme-toggle"
          data-tooltip-target="tooltip-toggle"
          type="button"
          class="rounded-lg p-1.5 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
        >
          <svg id="theme-toggle-dark-icon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M12.3224 5.68708c.2935-.31028.3575-.77266.1594-1.15098-.1981-.37832-.6146-.5891-1.0368-.52467-1.50847.2302-2.93175.83665-4.12869 1.76276-1.19717.92628-2.12732 2.1411-2.69465 3.52702-.56744 1.38619-.75115 2.89299-.53164 4.37079.2195 1.4776.83393 2.8711 1.77895 4.0436.9448 1.1722 2.18683 2.0826 3.60103 2.6449 1.414.5623 2.9539.7584 4.4683.57 1.5145-.1884 2.9549-.7551 4.1784-1.6475 1.2237-.8924 2.1892-2.0806 2.7972-3.4499.1723-.3879.0809-.8423-.2279-1.1335-.3089-.2911-.7679-.3556-1.145-.1608-.8631.4459-1.8291.6799-2.8118.6791h-.0018c-1.1598.0013-2.2925-.3234-3.2596-.931-.9667-.6074-1.7244-1.4697-2.1856-2.4779-.4611-1.0078-.6079-2.1209-.4243-3.20511.1835-1.08442.6905-2.09837 1.4645-2.91681Z"
            />
          </svg>

          <svg id="theme-toggle-light-icon" class="hidden h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
              fill-rule="evenodd"
              d="M13 3a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0V3ZM6.343 4.929A1 1 0 0 0 4.93 6.343l1.414 1.414a1 1 0 0 0 1.414-1.414L6.343 4.929Zm12.728 1.414a1 1 0 0 0-1.414-1.414l-1.414 1.414a1 1 0 0 0 1.414 1.414l1.414-1.414ZM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-9 4a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H3Zm16 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2ZM7.757 17.657a1 1 0 1 0-1.414-1.414l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414Zm9.9-1.414a1 1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM13 19a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Z"
              clip-rule="evenodd"
            />
          </svg>
        </button>
        <div id="tooltip-toggle" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300">
          Toggle dark mode
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
      </div>
      <div class="hidden h-5 w-px bg-gray-100 dark:bg-gray-700 sm:block"></div>
      <button type="button" class="ms-1.5 flex shrink-0 rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 sm:ms-4" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="accountDropdown">
        <span class="sr-only">Open user menu</span>
        <img class="h-8 w-8 shrink-0 rounded-full" src="http://krizzma.com:8813/images/users/roberta-casas.png" alt="user photo" />
      </button>
      
      <div id="accountDropdown" class="hidden w-60 divide-y divide-gray-100 overflow-hidden overflow-y-auto rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700" data-popper-placement="bottom">
        <ul class="p-2 text-start text-sm font-medium text-gray-900 dark:text-white">
          <li>
            <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
              <svg class="h-4 w-4 text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                  fill-rule="evenodd"
                  d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z"
                  clip-rule="evenodd"
                />
              </svg>
              Account
            </a>
          </li>
          <li>
            <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
              <svg class="h-4 w-4 text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                  fill-rule="evenodd"
                  d="M9.586 2.586A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2v.089l.473.196.063-.063a2.002 2.002 0 0 1 2.828 0l1.414 1.414a2 2 0 0 1 0 2.827l-.063.064.196.473H20a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-.089l-.196.473.063.063a2.002 2.002 0 0 1 0 2.828l-1.414 1.414a2 2 0 0 1-2.828 0l-.063-.063-.473.196V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.089l-.473-.196-.063.063a2.002 2.002 0 0 1-2.828 0l-1.414-1.414a2 2 0 0 1 0-2.827l.063-.064L4.089 15H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h.09l.195-.473-.063-.063a2 2 0 0 1 0-2.828l1.414-1.414a2 2 0 0 1 2.827 0l.064.063L9 4.089V4a2 2 0 0 1 .586-1.414ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z"
                  clip-rule="evenodd"
                />
              </svg>
              Settings
            </a>
          </li>
          <li>
            <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
              <svg class="h-4 w-4 text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
              </svg>
              Privacy
            </a>
          </li>
          <li>
            <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
              <svg class="h-4 w-4 text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M17.133 12.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.955.955 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175ZM6 6a1 1 0 0 1-.707-.293l-1-1a1 1 0 0 1 1.414-1.414l1 1A1 1 0 0 1 6 6Zm-2 4H3a1 1 0 0 1 0-2h1a1 1 0 1 1 0 2Zm14-4a1 1 0 0 1-.707-1.707l1-1a1 1 0 1 1 1.414 1.414l-1 1A1 1 0 0 1 18 6Zm3 4h-1a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z"
                />
              </svg>
              Notifications
            </a>
          </li>
        </ul>

        <ul class="p-2 text-start text-sm font-medium text-gray-900 dark:text-white">
          <li>
            <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
              <svg class="h-4 w-4 text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                  fill-rule="evenodd"
                  d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z"
                  clip-rule="evenodd"
                />
              </svg>
              Help Guide
            </a>
          </li>
          <li>
            <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
              <svg class="h-4 w-4 text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                  fill-rule="evenodd"
                  d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                  clip-rule="evenodd"
                />
              </svg>
              Help Center
            </a>
          </li>
        </ul>

        <ul class="p-2 text-start text-sm font-medium text-gray-900 dark:text-white">
          <li>
            <span class="group flex items-center justify-between gap-2 rounded-md px-3 py-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
              <svg class="h-4 w-4 text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd" />
              </svg>

              Limited Access

              <label class="ml-auto inline-flex cursor-pointer items-center">
                <input type="checkbox" value="" class="peer sr-only" name="time-limit-mode" />
                <div
                  class="peer relative h-5 w-9 rounded-full bg-gray-200 after:absolute after:start-[2px] after:top-[2px] after:h-4 after:w-4 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-primary-600 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:border-gray-500 dark:bg-gray-600 dark:peer-focus:ring-primary-800 rtl:peer-checked:after:-translate-x-full"
                ></div>
                <span class="sr-only">Toggle time-limited access on</span>
              </label>
            </span>
          </li>
        </ul>

        <ul class="p-2 text-start text-sm font-medium text-gray-900 dark:text-white">
          <li>
            <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-sm text-red-600 hover:bg-red-50 dark:text-red-500 dark:hover:bg-gray-600">
              <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"></path>
              </svg>
              Sign Out
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

  <div class="flex overflow-hidden bg-gray-50 pt-[62px] dark:bg-gray-900">
    <aside id="sidebar" class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full transition-transform duration-75 lg:z-0 lg:translate-x-0 lg:pt-16 lg:transition-width" aria-label="Sidebar">
  <div class="h-full overflow-y-auto border-r border-gray-200 bg-white px-3 py-4 dark:border-gray-700 dark:bg-gray-800">
    <ul class="space-y-2">
      <li>
        <button
          type="button"
          class="group flex h-10 w-full items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-dashboards"
          data-collapse-toggle="dropdown-dashboards"
          data-sidebar-collapse-item
        >
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z" />
            <path d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z" />
          </svg>

          <span class="ml-3 flex-1 whitespace-nowrap text-left" data-sidebar-collapse-hide>Dashboards</span>
          <svg class="h-5 w-5" data-sidebar-collapse-hide aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
          </svg>
        </button>
        <div data-sidebar-collapse-hide>
          <ul id="dropdown-dashboards" class="hidden space-y-2 py-2">
            <li>
              <a
                href="http://krizzma.com:8813/homepages/saas/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >SaaS</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/homepages/e-commerce/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >E-commerce</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/homepages/marketing/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Marketing</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/homepages/car-service/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Car Service</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/homepages/logistics/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Logistics</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/homepages/bank/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Bank</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/homepages/crypto/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Crypto</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/homepages/music/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Music</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/homepages/project-management/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Project Management</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/homepages/customer-service/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Customer Service</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li>
        <button
          type="button"
          class="group flex h-10 w-full items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-pages"
          data-collapse-toggle="dropdown-pages"
          data-sidebar-collapse-item
        >
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              fill-rule="evenodd"
              d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm2-2a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2h-3Zm0 3a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2h-3Zm-6 4a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-6Zm8 1v1h-2v-1h2Zm0 3h-2v1h2v-1Zm-4-3v1H9v-1h2Zm0 3H9v1h2v-1Z"
              clip-rule="evenodd"
            />
          </svg>
          <span class="ml-3 flex-1 whitespace-nowrap text-left" data-sidebar-collapse-hide>Pages</span>
          <svg class="h-5 w-5" data-sidebar-collapse-hide aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
          </svg>
        </button>
        <div data-sidebar-collapse-hide>
          <ul id="dropdown-pages" class="hidden space-y-2 py-2">
            <li>
              <a
                href="http://krizzma.com:8813/pages/kanban/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Kanban</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/pages/calendar/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Calendar</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/pages/chat-room/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Chat Room</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/pages/text-editor/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Text Editor</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/pages/ai-chat/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >AI Chat</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/pages/datatables/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Data Tables</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/pages/notifications/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Notifications</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/pages/events/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Events</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/pages/integrations/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Integrations</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/pages/api/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >API Keys</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/pages/pricing/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Pricing</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li>
        <button
          type="button"
          class="group flex h-10 w-full items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-sales"
          data-collapse-toggle="dropdown-sales"
          data-sidebar-collapse-item
        >
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              fill-rule="evenodd"
              d="M14 7h-4v3a1 1 0 0 1-2 0V7H6a1 1 0 0 0-.997.923l-.917 11.924A2 2 0 0 0 6.08 22h11.84a2 2 0 0 0 1.994-2.153l-.917-11.924A1 1 0 0 0 18 7h-2v3a1 1 0 1 1-2 0V7Zm-2-3a2 2 0 0 0-2 2v1H8V6a4 4 0 0 1 8 0v1h-2V6a2 2 0 0 0-2-2Z"
              clip-rule="evenodd"
            />
          </svg>
          <span class="ml-3 flex-1 whitespace-nowrap text-left" data-sidebar-collapse-hide>E-commerce</span>
          <svg class="h-5 w-5" data-sidebar-collapse-hide aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
          </svg>
        </button>
        <div data-sidebar-collapse-hide>
          <ul id="dropdown-sales" class="hidden space-y-2 py-2">
            <li>
              <a
                href="http://krizzma.com:8813/e-commerce/products/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Products</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/e-commerce/billing/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Billing</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/e-commerce/invoices/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Invoices</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/e-commerce/invoice/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Single Invoice</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/e-commerce/create-invoice/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Create Invoice</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/e-commerce/transactions/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Transactions</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/e-commerce/transaction/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Single Transaction</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li>
        <button
          type="button"
          class="group flex h-10 w-full items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-users"
          data-collapse-toggle="dropdown-users"
          data-sidebar-collapse-item
        >
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              fill-rule="evenodd"
              d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
              clip-rule="evenodd"
            />
          </svg>

          <span class="ml-3 flex-1 whitespace-nowrap text-left" data-sidebar-collapse-hide>Users</span>
          <svg class="h-5 w-5" data-sidebar-collapse-hide aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
          </svg>
        </button>
        <div data-sidebar-collapse-hide>
          <ul id="dropdown-users" class=" space-y-2 py-2">
            <li>
              <a
                href="http://krizzma.com:8813/users/list/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >All Users</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/users/settings/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Settings</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/users/profile/"
                class="  hover:bg-gray-100 dark:hover:bg-gray-700 bg-gray-100 dark:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Profile</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/users/feed/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Activity</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li>
        <button
          type="button"
          class="group flex h-10 w-full items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-support"
          data-collapse-toggle="dropdown-support"
          data-sidebar-collapse-item
        >
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              fill-rule="evenodd"
              d="M12 2a7 7 0 0 0-7 7 3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V9a5 5 0 1 1 10 0v7.083A2.919 2.919 0 0 1 14.083 19H14a2 2 0 0 0-2-2h-1a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a2 2 0 0 0 1.732-1h.351a4.917 4.917 0 0 0 4.83-4H19a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3 7 7 0 0 0-7-7Zm1.45 3.275a4 4 0 0 0-4.352.976 1 1 0 0 0 1.452 1.376 2.001 2.001 0 0 1 2.836-.067 1 1 0 1 0 1.386-1.442 4 4 0 0 0-1.321-.843Z"
              clip-rule="evenodd"
            />
          </svg>

          <span class="ml-3 flex-1 whitespace-nowrap text-left" data-sidebar-collapse-hide>Support</span>
          <svg class="h-5 w-5" data-sidebar-collapse-hide aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
          </svg>
        </button>
        <div data-sidebar-collapse-hide>
          <ul id="dropdown-support" class="hidden space-y-2 py-2">
            <li>
              <a
                href="http://krizzma.com:8813/support/tickets/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Tickets Overview</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/support/ticket/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Ticket Reply</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li>
        <button
          type="button"
          class="group flex h-10 w-full items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-project-management"
          data-collapse-toggle="dropdown-project-management"
          data-sidebar-collapse-item
        >
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              fill-rule="evenodd"
              d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2a1 1 0 0 0-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.707 8.707a1 1 0 0 0-1.414-1.414L11 14.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4Z"
              clip-rule="evenodd"
            />
          </svg>

          <span class="ml-3 flex-1 whitespace-nowrap text-left" data-sidebar-collapse-hide>Projects</span>
          <svg class="h-5 w-5" data-sidebar-collapse-hide aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
          </svg>
        </button>
        <div data-sidebar-collapse-hide>
          <ul id="dropdown-project-management" class="hidden space-y-2 py-2">
            <li>
              <a
                href="http://krizzma.com:8813/project-management/to-do/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >To Do</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/project-management/all-projects/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >All Projects</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/project-management/my-projects/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >My Projects</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/project-management/project-summary/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Project Summary</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/project-management/to-do-upcoming/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >My Tasks</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/project-management/all-files/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >All Files</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li>
        <button
          type="button"
          class="group flex h-10 w-full items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-mailing"
          data-collapse-toggle="dropdown-mailing"
          data-sidebar-collapse-item
        >
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              d="M17 6h-2V5h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2h-.541A5.965 5.965 0 0 1 14 10v4a1 1 0 1 1-2 0v-4c0-2.206-1.794-4-4-4-.075 0-.148.012-.22.028C7.686 6.022 7.596 6 7.5 6A4.505 4.505 0 0 0 3 10.5V16a1 1 0 0 0 1 1h7v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3h5a1 1 0 0 0 1-1v-6c0-2.206-1.794-4-4-4Zm-9 8.5H7a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2Z"
            />
          </svg>
          <span class="ml-3 flex-1 whitespace-nowrap text-left" data-sidebar-collapse-hide>Mailing</span>
          <svg class="h-5 w-5" data-sidebar-collapse-hide aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
          </svg>
        </button>
        <div data-sidebar-collapse-hide>
          <ul id="dropdown-mailing" class="hidden space-y-2 py-2">
            <li>
              <a
                href="http://krizzma.com:8813/mailing/inbox/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Inbox</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/mailing/read/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Read</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/mailing/reply/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Reply</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li>
        <button
          type="button"
          class="group flex h-10 w-full items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-video-call"
          data-collapse-toggle="dropdown-video-call"
          data-sidebar-collapse-item
        >
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path fill-rule="evenodd" d="M14 7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7Zm2 9.387 4.684 1.562A1 1 0 0 0 22 17V7a1 1 0 0 0-1.316-.949L16 7.613v8.774Z" clip-rule="evenodd" />
          </svg>
          <span class="ml-3 flex-1 whitespace-nowrap text-left" data-sidebar-collapse-hide>Video Call</span>
          <svg class="h-5 w-5" data-sidebar-collapse-hide aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
          </svg>
        </button>
        <div data-sidebar-collapse-hide>
          <ul id="dropdown-video-call" class="hidden space-y-2 py-2">
            <li>
              <a
                href="http://krizzma.com:8813/video/create-meeting/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Create Meeting</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/video/join-call/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Join Call</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/video/meeting-room/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Meeting Room</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/video/rate-conversation/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Rate Conversation</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li>
        <button
          type="button"
          class="group flex h-10 w-full items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-audio-call"
          data-collapse-toggle="dropdown-audio-call"
          data-sidebar-collapse-item
        >
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"
            />
          </svg>
          <span class="ml-3 flex-1 whitespace-nowrap text-left" data-sidebar-collapse-hide>Audio Call</span>
          <svg class="h-5 w-5" data-sidebar-collapse-hide aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
          </svg>
        </button>
        <div data-sidebar-collapse-hide>
          <ul id="dropdown-audio-call" class="hidden space-y-2 py-2">
            <li>
              <a
                href="http://krizzma.com:8813/audio/outgoing-call/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Outgoing Call</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/audio/incoming-call/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Incoming Call</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/audio/in-call/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >In Call</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/audio/call-ended/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Call Ended</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li>
        <button
          type="button"
          class="group flex h-10 w-full items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-authentication"
          data-collapse-toggle="dropdown-authentication"
          data-sidebar-collapse-item
        >
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
          </svg>

          <span class="ml-3 flex-1 whitespace-nowrap text-left" data-sidebar-collapse-hide>Authentication</span>
          <svg class="h-5 w-5" data-sidebar-collapse-hide aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
          </svg>
        </button>
        <div data-sidebar-collapse-hide>
          <ul id="dropdown-authentication" class="hidden space-y-2 py-2">
            <li>
              <a
                href="http://krizzma.com:8813/authentication/sign-in/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Sign In</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/authentication/sign-up/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Sign Up</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/authentication/forgot-password/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Forgot Password</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/authentication/reset-password/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Reset Password</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/authentication/two-factor/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Two Factor</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/authentication/profile-lock/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Profile Lock</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li>
        <button
          type="button"
          class="group flex h-10 w-full items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-status"
          data-collapse-toggle="dropdown-status"
          data-sidebar-collapse-item
        >
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z" clip-rule="evenodd" />
          </svg>

          <span class="ml-3 flex-1 whitespace-nowrap text-left" data-sidebar-collapse-hide>Status Pages</span>
          <svg class="h-5 w-5" data-sidebar-collapse-hide aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
          </svg>
        </button>
        <div data-sidebar-collapse-hide>
          <ul id="dropdown-status" class="hidden space-y-2 py-2">
            <li>
              <a
                href="http://krizzma.com:8813/status/404/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >404 Not Found</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/status/500/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >500 Server Error</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/status/maintenance/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Maintenance</a
              >
            </li>
            <li>
              <a
                href="http://krizzma.com:8813/status/server-status/"
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
                data-sidebar-collapse-subitem
                >Server Status</a
              >
            </li>
          </ul>
        </div>
      </li>
    </ul>
    <ul class="my-5 space-y-2 border-t border-gray-200 pt-5 dark:border-gray-700">
      <li>
        <a data-sidebar-collapse-item href="https://flowbite.com/pro/#pricing" target="_blank" class="group flex h-10 w-full items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
          <svg class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd"/>
          </svg>
          <span class="ml-3 flex-1" data-sidebar-collapse-hide>Unlock Code</span>
          <svg data-sidebar-collapse-hide class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
          </svg>
          
        </a>
      </li>
      <li>
        <a data-sidebar-collapse-item href="https://flowbite.com/docs/getting-started/introduction/" target="_blank" class="group flex h-10 items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
          </svg>
          <span class="ml-3" data-sidebar-collapse-hide>Docs</span>
        </a>
      </li>
      <li>
        <a data-sidebar-collapse-item href="https://flowbite.com/blocks/" target="_blank" class="group flex h-10 items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              d="M5 3a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5Zm14 18a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4ZM5 11a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H5Zm14 2a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4Z"
            />
          </svg>
          <span class="ml-3" data-sidebar-collapse-hide>Components</span>
        </a>
      </li>
      <li>
        <a data-sidebar-collapse-item href="https://flowbite.com/contact/" target="_blank" class="group flex h-10 items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
          <svg
            class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              d="m7.4 3.736 3.43 3.429A5.046 5.046 0 0 1 12.133 7c.356.01.71.06 1.056.147l3.41-3.412a2.32 2.32 0 0 1 .451-.344A9.89 9.89 0 0 0 12.268 2a10.022 10.022 0 0 0-5.322 1.392c.165.095.318.211.454.344Zm11.451 1.54-.127-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.03.023.05.054.078.077.237.194.454.41.651.645.033.038.077.067.11.107l2.926-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.025.03-.058.052-.082.082a4.97 4.97 0 0 1-.633.639c-.04.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.443-4.763a3.037 3.037 0 0 0-1.383-1.1l-.012-.007a2.956 2.956 0 0 0-1-.213H12a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.009.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .488 1.716l.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.319.129.657.2 1 .213.393.015.784-.05 1.15-.192.012-.005.021-.013.033-.018a3.01 3.01 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.349.447l-3.426 3.426c.112.428.166.869.161 1.311a4.954 4.954 0 0 1-.148 1.054l3.413 3.412c.133.134.249.283.347.444A9.88 9.88 0 0 0 22 12.269a9.913 9.913 0 0 0-1.386-5.319ZM16.6 20.264l-3.42-3.421c-.386.1-.782.152-1.18.157h-.135c-.356-.01-.71-.06-1.056-.147L7.4 20.265a2.503 2.503 0 0 1-.444.347A9.884 9.884 0 0 0 11.732 22H12a9.9 9.9 0 0 0 5.044-1.388 2.515 2.515 0 0 1-.444-.348ZM3.735 16.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L3.735 7.4a2.508 2.508 0 0 1-.349-.447 9.889 9.889 0 0 0 0 10.1 2.48 2.48 0 0 1 .35-.453Zm5.101-.758a4.959 4.959 0 0 1-.65-.645c-.034-.038-.078-.067-.11-.107L5.15 18.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.029-.018-.049-.053-.078-.076Zm-.755-6.928c.03-.037.07-.063.1-.1.183-.22.383-.423.6-.609.046-.04.081-.092.128-.13L5.983 5.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707l2.932 2.931Z"
            />
          </svg>
          <span class="ml-3" data-sidebar-collapse-hide>Help</span>
        </a>
      </li>
    </ul>
  </div>
</aside>

    <div id="main-content" class="relative h-full w-full overflow-x-scroll bg-gray-50 dark:bg-gray-900 lg:ms-64">
      <main>
        
<div class="px-4 pt-4">
  <nav class="mb-4 flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
      <li class="inline-flex items-center">
        <a href="http://krizzma.com:8813/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-700 dark:text-gray-400 dark:hover:text-white">
          <svg class="me-2.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M11.3 3.3a1 1 0 0 1 1.4 0l6 6 2 2a1 1 0 0 1-1.4 1.4l-.3-.3V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3c0 .6-.4 1-1 1H7a2 2 0 0 1-2-2v-6.6l-.3.3a1 1 0 0 1-1.4-1.4l2-2 6-6Z" clip-rule="evenodd" />
          </svg>
          Home
        </a>
      </li>
      <li>
        <div class="flex items-center">
          <svg class="mx-1 h-4 w-4 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
          </svg>
          <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-primary-700 dark:text-gray-400 dark:hover:text-white md:ms-2">User</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="mx-1 h-4 w-4 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400 md:ms-2">Settings</span>
        </div>
      </li>
    </ol>
  </nav>
  <h1 class="text-xl font-bold text-gray-900 dark:text-white">Settings</h1>
</div>
<div class="gap-4 p-4 xl:grid xl:grid-cols-2">
  <div class="col-span-2 mb-4 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 xl:mb-0">
    <div class="sm:hidden">
      <label for="tabs" class="sr-only">Menu</label>
      <select
        id="tabs"
        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
      >
        <option>Overview</option>
        <option>Notification</option>
        <option>Projects</option>
        <option>Invoice</option>
        <option>Account</option>
      </select>
    </div>
    <ul class="hidden text-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:flex sm:space-x-4">
      <li>
        <a href="#" class="active inline-block rounded-lg bg-primary-700 px-4 py-3 text-white dark:bg-primary-600" aria-current="page">Overview</a>
      </li>
      <li>
        <a href="#" class="inline-block rounded-lg px-4 py-3 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-800 dark:hover:text-white">Notification</a>
      </li>
      <li>
        <a href="#" class="inline-block rounded-lg px-4 py-3 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-800 dark:hover:text-white">Projects</a>
      </li>
      <li>
        <a href="#" class="inline-block rounded-lg px-4 py-3 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-800 dark:hover:text-white">Invoice</a>
      </li>
      <li>
        <a href="#" class="inline-block rounded-lg px-4 py-3 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-800 dark:hover:text-white">Account</a>
      </li>
    </ul>
  </div>
  <div class="mb-4 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:p-6 xl:mb-0">
    <h2 class="flex items-center text-xl font-bold text-gray-900 dark:text-white">
      Profile picture<button data-popover-target="popover-image-description" type="button" class="ms-1 text-gray-400 hover:text-gray-900 dark:hover:text-white">
        <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
            clip-rule="evenodd"
          />
        </svg>

        <span class="sr-only">Show information</span>
      </button>
    </h2>
    <div
      id="popover-image-description"
      role="tooltip"
      class="tooltip invisible absolute z-10 inline-block w-72 rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600"
    >
      You can change your profile photo here, you can upload a new photo from your computer.
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <div class="mt-4 flex w-full items-center border-b border-gray-200 pb-4 dark:border-gray-700 sm:mt-6 sm:pb-6">
      <img class="me-4 h-24 w-24 rounded-lg sm:mb-0" src="http://krizzma.com:8813/images/users/joseph-mcfall.png" alt="Helene avatar" />
      <div class="w-full space-y-2">
        <span class="me-2 rounded-sm bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">PRO</span>
        <h4 class="text-2xl font-bold text-gray-900 dark:text-white">Joseph McFall</h4>
        <span class="text-xl font-normal text-gray-500 dark:text-gray-400">Web Developer</span>
      </div>
    </div>
    <button
      id="profilePictureButton"
      data-modal-target="profilePictureModal"
      data-modal-toggle="profilePictureModal"
      type="button"
      class="mt-4 inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:mt-6 sm:w-auto"
    >
      <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path
          fill-rule="evenodd"
          d="M5 8a4 4 0 1 1 7.8 1.3l-2.5 2.5A4 4 0 0 1 5 8Zm4 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h2.2a3 3 0 0 1-.1-1.6l.6-3.4a3 3 0 0 1 .9-1.5L9 13Zm9-5a3 3 0 0 0-2 .9l-6 6a1 1 0 0 0-.3.5L9 18.8a1 1 0 0 0 1.2 1.2l3.4-.7c.2 0 .3-.1.5-.3l6-6a3 3 0 0 0-2-5Z"
          clip-rule="evenodd"
        />
      </svg>
      Edit
    </button>
  </div>
  <div class="mb-4 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:p-6 xl:mb-0">
    <form action="#">
      <div class="grid gap-4 border-b border-gray-200 pb-4 dark:border-gray-700 sm:grid-cols-2 sm:pb-6">
        <div>
          <label for="countries" class="mb-2 flex items-center text-sm font-medium text-gray-900 dark:text-white"
            >Timezone<button data-popover-target="popover-timezone-description" type="button" class="ms-1 text-gray-400 hover:text-gray-900 dark:hover:text-white">
              <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                  fill-rule="evenodd"
                  d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">Show information</span>
            </button></label
          >
          <select
            id="countries"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
          >
            <option selected>UTC-08:00 - Pacific Standard Time (PST)</option>
            <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
            <option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
            <option value="-10:00">(GMT -10:00) Hawaii</option>
            <option value="-09:50">(GMT -9:30) Taiohae</option>
            <option value="-09:00">(GMT -9:00) Alaska</option>
            <option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
            <option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
            <option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
            <option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
            <option value="-04:50">(GMT -4:30) Caracas</option>
            <option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
            <option value="-03:50">(GMT -3:30) Newfoundland</option>
            <option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
            <option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
            <option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
            <option value="+00:00">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
            <option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
            <option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
            <option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
            <option value="+03:50">(GMT +3:30) Tehran</option>
            <option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
            <option value="+04:50">(GMT +4:30) Kabul</option>
            <option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
            <option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
            <option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
            <option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
            <option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
            <option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
            <option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
            <option value="+08:75">(GMT +8:45) Eucla</option>
            <option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
            <option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
            <option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
            <option value="+10:50">(GMT +10:30) Lord Howe Island</option>
            <option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
            <option value="+11:50">(GMT +11:30) Norfolk Island</option>
            <option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
            <option value="+12:75">(GMT +12:45) Chatham Islands</option>
            <option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
            <option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
          </select>
          <div
            id="popover-timezone-description"
            role="tooltip"
            class="tooltip invisible absolute z-10 inline-block w-72 rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600"
          >
            A timezone is a region of the Earth that has the same standard time.
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
        </div>
        <div>
          <label for="language" class="mb-2 flex items-center text-sm font-medium text-gray-900 dark:text-white">Language</label>
          <select
            id="language"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
          >
            <option selected>Choose your account type</option>
            <option value="EN">English (US)</option>
            <option value="EN">English (UK)</option>
            <option value="SP">Spanish</option>
            <option value="FR">French</option>
            <option value="DE">German</option>
            <option value="CH">Chinese (Mandarin)</option>
          </select>
        </div>
        <div>
          <label for="date-of-birth" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Date of birth</label>
          <div class="relative">
            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3.5">
              <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path
                  fill-rule="evenodd"
                  d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <input
              datepicker
              type="text"
              id="date-of-birth"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
              placeholder="Select date"
            />
          </div>
        </div>
        <div>
          <label for="gender" class="mb-2 flex items-center text-sm font-medium text-gray-900 dark:text-white">Gender</label>
          <select
            id="gender"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
          >
            <option selected>Choose your gender</option>
            <option value="personal">Male</option>
            <option value="business">Female</option>
            <option value="education">Other</option>
          </select>
        </div>
      </div>
      <button
        type="submit"
        class="mt-4 w-full justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:mt-6 sm:w-auto"
      >
        Save
      </button>
    </form>
  </div>
  <div class="col-span-2 mb-4 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:p-6 xl:mb-0">
    <h2 class="mb-4 md:mb-6 text-xl font-bold text-gray-900 dark:text-white border-b border-gray-200 dark:border-gray-700 pb-4">
      Personal information<button data-popover-target="popover-info-description" type="button" class="ms-1 text-gray-400 hover:text-gray-900 dark:hover:text-white">
        <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
            clip-rule="evenodd"
          />
        </svg>

        <span class="sr-only">Show information</span>
      </button>
    </h2>
    <div
      id="popover-info-description"
      role="tooltip"
      class="tooltip invisible absolute z-10 inline-block w-72 rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600"
    >
      This information is presented on your public profile, please specify carefully what you want to display.
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <div class="mb-4 mt-4 grid gap-4 border-b border-gray-200 pb-4 dark:border-gray-700 sm:mb-6 sm:mt-6 sm:grid-cols-2 sm:gap-24 sm:pb-6">
      <!-- Column -->
      <div>
        <dl>
          <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Full name</dt>
          <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">Joseph McFall</dd>
          <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Biography</dt>
          <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">
            I am Joseph McFall, a fervent explorer navigating the intricate landscapes of web design, driven by an unyielding passion for Web 3 and Artificial Intelligence. From the early days of tinkering with computers to my current
            standing as a web designer, my journey has been a dynamic evolution marked by a relentless pursuit of innovation.
          </dd>
          <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Social</dt>
          <dd class="mb-4 inline-flex items-center space-x-1 sm:mb-5">
            <a href="#" data-tooltip-target="tooltip-facebook" class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">Facebook</span>
            </a>
            <div id="tooltip-facebook" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
              Facebook profile
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-instagram" class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">Instagram</span>
            </a>
            <div
              id="tooltip-instagram"
              role="tooltip"
              class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
            >
              Instagram profile
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-github" class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">GitHub</span>
            </a>
            <div id="tooltip-github" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
              GitHub profile
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-dribbble" class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">Dribbble</span>
            </a>
            <div id="tooltip-dribbble" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
              Dribbble profile
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </dd>
          <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Location</dt>
          <dd class="mb-4 flex items-center text-gray-900 dark:text-white sm:mb-5">
            <svg class="mr-1.5 h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M12 2a8 8 0 0 1 6.6 12.6l-.1.1-.6.7-5.1 6.2a1 1 0 0 1-1.6 0L6 15.3l-.3-.4-.2-.2v-.2A8 8 0 0 1 11.8 2Zm3 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" clip-rule="evenodd" />
            </svg>
            <span class="text-gray-500 dark:text-gray-400">California, United States of America</span>
          </dd>
          <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Job Title</dt>
          <dd class="flex items-center text-gray-900 dark:text-white">
            <svg class="mr-1.5 h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path
                fill-rule="evenodd"
                d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.4l1.4.7a7.7 7.7 0 0 0 .7.3 21 21 0 0 0 16.4-.3l1.5-.7V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5c0-.6-.4-1-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.4 7.9.6-.3V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.4l.6.3a10 10 0 0 0 .7.3 23 23 0 0 0 18-.3h.1L21 13l.4.9ZM12 10a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z"
                clip-rule="evenodd"
              />
            </svg>
            <span class="text-gray-500 dark:text-gray-400">Frontend Developer</span>
          </dd>
        </dl>
      </div>
      <!-- Column -->
      <dl>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Email Adress</dt>
        <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">helene@company.com</dd>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Home Adress</dt>
        <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">92 Miles Drive, Newark, NJ 07103, California, United States of America</dd>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Phone Number</dt>
        <dd class="mb-4 text-gray-500 dark:text-gray-400 sm:mb-5">+1234 567 890 / +12 345 678</dd>
        <dt class="mb-2.5 font-semibold leading-none text-gray-900 dark:text-white">Software Skills</dt>
        <dd class="mb-4 flex items-center space-x-1 sm:mb-5">
          <button type="button" data-tooltip-target="tooltip-indesign" class="rounded-lg p-2 hover:bg-gray-100 dark:hover:bg-gray-700">
            <svg class="h-4 w-4" aria-hidden="true" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M15.1558 0.238281H1.51087C0.676432 0.238281 0 0.916011 0 1.75205V15.4231C0 16.2592 0.676432 16.9369 1.51087 16.9369H15.1558C15.9902 16.9369 16.6667 16.2592 16.6667 15.4231V1.75205C16.6667 0.916011 15.9902 0.238281 15.1558 0.238281Z"
                fill="#DC395F"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M6.5851 4.48532C6.5851 5.05555 6.12098 5.49063 5.56694 5.49063C5.0129 5.49063 4.5489 5.05549 4.5489 4.48532C4.5489 3.91548 5.0129 3.48047 5.56694 3.48047C6.12098 3.48047 6.5851 3.91548 6.5851 4.48532ZM3.36647 11.6283C3.36647 11.4037 3.39648 11.1283 3.45632 10.8732H3.45638L4.21986 7.74784H3.03711L3.39648 6.41952H6.24128L5.11823 10.8828C5.04336 11.168 5.01341 11.4046 5.01341 11.5693C5.01341 11.8547 5.15365 11.9382 5.37292 11.9877C5.50645 12.0177 6.57045 11.9967 7.14968 10.7066L7.88731 7.74784H6.68946L7.04883 6.41952H9.60899L9.27969 7.92762C9.72878 7.0874 10.6272 6.28906 11.5106 6.28906C12.4538 6.28906 13.2324 6.96236 13.2324 8.25246C13.2324 8.58238 13.1874 8.94147 13.0677 9.34641L12.5885 11.0709C12.5437 11.2514 12.5136 11.4012 12.5136 11.5362C12.5136 11.8361 12.6334 11.986 12.858 11.986C13.0826 11.986 13.3671 11.8206 13.6966 10.906L14.3553 11.1608C13.966 12.526 13.2623 13.0958 12.3789 13.0958C11.3458 13.0958 10.8518 12.4811 10.8518 11.6408C10.8518 11.4009 10.8816 11.1458 10.9565 10.8907L11.4507 9.12059C11.5106 8.92549 11.5255 8.74565 11.5255 8.58056C11.5255 8.01072 11.1812 7.66552 10.6272 7.66552C9.92344 7.66552 9.45932 8.17164 9.21973 9.14668L8.2614 12.9977H6.58464L6.88562 11.7875C6.39271 12.5988 5.70814 13.1012 4.86374 13.1012C3.84557 13.1012 3.36647 12.5135 3.36647 11.6283Z"
                fill="white"
              />
            </svg>
            <span class="sr-only">inDesign</span>
          </button>
          <div id="tooltip-indesign" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
            inDesign
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
          <button type="button" data-tooltip-target="tooltip-sketch" class="rounded-lg p-2 hover:bg-gray-100 dark:hover:bg-gray-700">
            <svg class="h-4 w-4" aria-hidden="true" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.29749 1.44122L8.98499 0.9375L13.6725 1.44122L17.3015 6.39306L8.98499 16.237L0.668457 6.39306L4.29749 1.44122Z" fill="#FDB300" />
              <path d="M4.03512 6.39453L8.98304 16.2384L0.666504 6.39453H4.03512Z" fill="#EA6C00" />
              <path d="M13.9288 6.39453L8.98082 16.2384L17.2974 6.39453H13.9288Z" fill="#EA6C00" />
              <path d="M4.03369 6.39453H13.9295L8.98162 16.2384L4.03369 6.39453Z" fill="#FDAD00" />
              <path d="M8.98357 0.9375L4.29605 1.44121L4.03564 6.39305L8.98357 0.9375Z" fill="#FDD231" />
              <path d="M8.98225 0.9375L13.6698 1.44121L13.9302 6.39305L8.98225 0.9375Z" fill="#FDD231" />
              <path d="M17.2993 6.39324L13.6703 1.44141L13.9307 6.39324H17.2993Z" fill="#FDAD00" />
              <path d="M0.666504 6.39324L4.29552 1.44141L4.03512 6.39324H0.666504Z" fill="#FDAD00" />
              <path d="M8.98357 0.9375L4.03564 6.39305H13.9315L8.98357 0.9375Z" fill="#FEEEB7" />
            </svg>
            <span class="sr-only">Sketch</span>
          </button>
          <div id="tooltip-sketch" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
            Sketch
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
          <button type="button" data-tooltip-target="tooltip-figma" class="rounded-lg p-2 hover:bg-gray-100 dark:hover:bg-gray-700">
            <svg class="h-4 w-4" aria-hidden="true" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.07953 16.9342C4.61287 16.9342 5.85731 15.6877 5.85731 14.1517V11.3691H3.07953C1.5462 11.3691 0.301758 12.6157 0.301758 14.1517C0.301758 15.6877 1.5462 16.9342 3.07953 16.9342Z" fill="#0ACF83" />
              <path d="M0.301758 8.58723C0.301758 7.05127 1.5462 5.80469 3.07953 5.80469H5.85731V11.3698H3.07953C1.5462 11.3698 0.301758 10.1232 0.301758 8.58723Z" fill="#A259FF" />
              <path d="M0.301758 3.02278C0.301758 1.48682 1.5462 0.240234 3.07953 0.240234H5.85731V5.80533H3.07953C1.5462 5.80533 0.301758 4.55875 0.301758 3.02278Z" fill="#F24E1E" />
              <path d="M5.8584 0.240234H8.63618C10.1695 0.240234 11.414 1.48681 11.414 3.02278C11.414 4.55874 10.1695 5.80532 8.63618 5.80532H5.8584V0.240234Z" fill="#FF7262" />
              <path
                d="M11.414 8.58723C11.414 10.1232 10.1695 11.3698 8.63618 11.3698C7.10284 11.3698 5.8584 10.1232 5.8584 8.58723C5.8584 7.05127 7.10284 5.80469 8.63618 5.80469C10.1695 5.80469 11.414 7.05127 11.414 8.58723Z"
                fill="#1ABCFE"
              />
            </svg>
            <span class="sr-only">Figma</span>
          </button>
          <div id="tooltip-figma" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
            Figma
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
          <button type="button" data-tooltip-target="tooltip-html" class="rounded-lg p-2 hover:bg-gray-100 dark:hover:bg-gray-700">
            <svg class="h-4 w-4" aria-hidden="true" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M4.12301 0.771564H4.80021V2.31469H5.56748V0.771564H6.24801V0H4.12301V0.771564ZM2.31024 2.81701e-05H1.54297V2.31473H2.31691V1.54316H3.01746V2.31473H3.78473V2.81701e-05H3.01746V0.764886H2.31024V2.81701e-05ZM6.58398 2.81701e-05H7.38795L7.88167 0.815203L8.37539 2.81701e-05H9.17935V2.31472H8.41208V1.16744L7.875 1.99939L7.33791 1.16744V2.31472H6.58398V2.81701e-05ZM10.3278 2.81701e-05H9.56055V2.31472H11.4153V1.54987H10.3278V2.81701e-05Z"
                fill="black"
              />
              <path d="M1.51493 15.8006L0.414062 3.375H12.5169L11.416 15.7939L6.45547 17.176" fill="#E44D26" />
              <path d="M6.46484 16.119V4.39453H11.4121L10.468 14.9952" fill="#F16529" />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M6.46706 5.91406H2.66406L3.07772 10.5166H6.46706V8.99697H4.46548L4.32537 7.43707H6.46706V5.91406ZM4.66377 11.2822H3.14258L3.35608 13.6741L6.46518 14.5463V12.9562L4.77052 12.5L4.66377 11.2822Z"
                fill="#EBEBEB"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M6.45898 5.91406H10.2553L10.1152 7.43707H6.45898V5.91406ZM6.45703 8.99756H9.97646L9.55946 13.6739L6.45703 14.5394V12.956L8.14836 12.4998L8.32516 10.5206H6.45703V8.99756Z"
                fill="white"
              />
            </svg>
            <span class="sr-only">HTML</span>
          </button>
          <div id="tooltip-html" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
            HTML
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
          <button type="button" data-tooltip-target="tooltip-adobexd" class="rounded-lg p-2 hover:bg-gray-100 dark:hover:bg-gray-700">
            <svg class="h-4 w-4" aria-hidden="true" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M13.2735 14.9046H3.03744C1.64855 14.9046 0.516602 13.7899 0.516602 12.4221V2.75202C0.516602 1.38426 1.64855 0.269531 3.03744 0.269531H13.2666C14.6624 0.269531 15.7874 1.38426 15.7874 2.75202V12.4153C15.7944 13.7899 14.6624 14.9046 13.2735 14.9046Z"
                fill="#2E001F"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M6.41134 7.07379L8.35579 10.7531C8.39051 10.8078 8.36968 10.8625 8.31412 10.8625H7.10579C7.0294 10.8625 6.99468 10.842 6.95995 10.7736C6.8451 10.5403 6.72979 10.307 6.61389 10.0726L6.61373 10.0723C6.28119 9.39953 5.94383 8.71708 5.59884 7.99703H5.58495C5.16829 8.91343 4.70995 9.8777 4.26551 10.7804C4.23079 10.8351 4.19606 10.8557 4.14051 10.8557H2.99467C2.92523 10.8557 2.91829 10.8009 2.95301 10.7599L4.85579 7.19005L3.01551 3.57914C2.97384 3.52443 3.01551 3.4834 3.05717 3.4834H4.25162C4.32106 3.4834 4.34884 3.49708 4.37662 3.55863C4.81412 4.46135 5.25856 5.39143 5.67523 6.301H5.68912C6.0919 5.39827 6.53634 4.46135 6.9669 3.56547L6.96817 3.56347C7.00214 3.50992 7.02331 3.47656 7.0919 3.47656H8.20996C8.26551 3.47656 8.28635 3.5176 8.25162 3.57231L6.41134 7.07379ZM8.69629 8.18851C8.69629 6.59506 9.77268 5.3504 11.481 5.3504C11.6268 5.3504 11.7032 5.3504 11.8421 5.36408V3.55179C11.8421 3.51075 11.8768 3.4834 11.9116 3.4834H13.0088C13.0643 3.4834 13.0782 3.50391 13.0782 3.53811V9.81615C13.0782 10.0008 13.0782 10.2333 13.113 10.4864C13.113 10.5274 13.0991 10.5411 13.0574 10.5616C12.4741 10.8351 11.863 10.9582 11.2796 10.9582C9.77268 10.9651 8.69629 10.0487 8.69629 8.18851ZM11.4402 6.36914C11.6069 6.36914 11.7458 6.3965 11.843 6.43753V9.82275C11.711 9.87746 11.5305 9.89798 11.3638 9.89798C10.5791 9.89798 9.9541 9.3919 9.9541 8.13356C9.9541 7.03251 10.5652 6.36914 11.4402 6.36914Z"
                fill="#FFD9F2"
              />
            </svg>
            <span class="sr-only">Adobe XD</span>
          </button>
          <div id="tooltip-adobexd" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
            Adobe XD
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
        </dd>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Languages</dt>
        <dd class="text-gray-500 dark:text-gray-400">English, French, Spanish</dd>
      </dl>
    </div>
    <button
      id="updateUserButton"
      data-modal-target="updateUserModal"
      data-modal-toggle="updateUserModal"
      class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto"
      type="button"
    >
      <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path
          fill-rule="evenodd"
          d="M5 8a4 4 0 1 1 7.8 1.3l-2.5 2.5A4 4 0 0 1 5 8Zm4 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h2.2a3 3 0 0 1-.1-1.6l.6-3.4a3 3 0 0 1 .9-1.5L9 13Zm9-5a3 3 0 0 0-2 .9l-6 6a1 1 0 0 0-.3.5L9 18.8a1 1 0 0 0 1.2 1.2l3.4-.7c.2 0 .3-.1.5-.3l6-6a3 3 0 0 0-2-5Z"
          clip-rule="evenodd"
        />
      </svg>
      Edit
    </button>
  </div>
  <div class="col-span-2 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:p-6">
    <h2 class="mb-4 md:mb-6 text-xl font-bold text-gray-900 dark:text-white border-b border-gray-200 dark:border-gray-700 pb-4">
      Education & experience<button data-popover-target="popover-education-description" type="button" class="ms-1 text-gray-400 hover:text-gray-900 dark:hover:text-white">
        <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
            clip-rule="evenodd"
          />
        </svg>
        <span class="sr-only">Show information</span>
      </button>
    </h2>
    <div
      id="popover-education-description"
      role="tooltip"
      class="tooltip invisible absolute z-10 inline-block w-72 rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600"
    >
      This information is presented on your public profile, please specify carefully what you want to display.
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <div class="mb-4 mt-4 grid gap-6 border-b border-gray-200 pb-4 dark:border-gray-700 sm:mb-6 sm:mt-6 sm:pb-6 md:grid-cols-2 md:gap-24">
      <ul>
        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white sm:mb-6">Experience</h3>
        <li class="border-b border-gray-200 pb-4 dark:border-gray-700">
          <div class="items-center space-y-3 sm:flex sm:space-x-4 sm:space-y-0">
            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-700">
              <svg class="h-6" aria-hidden="true" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1323_15537)">
                  <path
                    d="M12 12.6754C12 11.8798 12.3161 11.1167 12.8787 10.5541C13.4413 9.99149 14.2044 9.67542 15 9.67542C15.7956 9.67542 16.5587 9.99149 17.1213 10.5541C17.6839 11.1167 18 11.8798 18 12.6754C18 13.4711 17.6839 14.2341 17.1213 14.7967C16.5587 15.3593 15.7956 15.6754 15 15.6754C14.2044 15.6754 13.4413 15.3593 12.8787 14.7967C12.3161 14.2341 12 13.4711 12 12.6754Z"
                    fill="#1ABCFE"
                  />
                  <path
                    d="M6 18.6754C6 17.8798 6.31607 17.1167 6.87868 16.5541C7.44129 15.9915 8.20435 15.6754 9 15.6754H12V18.6754C12 19.4711 11.6839 20.2341 11.1213 20.7967C10.5587 21.3593 9.79565 21.6754 9 21.6754C8.20435 21.6754 7.44129 21.3593 6.87868 20.7967C6.31607 20.2341 6 19.4711 6 18.6754V18.6754Z"
                    fill="#0ACF83"
                  />
                  <path
                    d="M12 3.67542V9.67542H15C15.7956 9.67542 16.5587 9.35934 17.1213 8.79674C17.6839 8.23413 18 7.47106 18 6.67542C18 5.87977 17.6839 5.1167 17.1213 4.55409C16.5587 3.99149 15.7956 3.67542 15 3.67542H12Z"
                    fill="#FF7262"
                  />
                  <path
                    d="M6 6.67542C6 7.47106 6.31607 8.23413 6.87868 8.79674C7.44129 9.35934 8.20435 9.67541 9 9.67542H12V3.67542H9C8.20435 3.67542 7.44129 3.99149 6.87868 4.55409C6.31607 5.1167 6 5.87977 6 6.67542V6.67542Z"
                    fill="#F24E1E"
                  />
                  <path
                    d="M6 12.6754C6 13.4711 6.31607 14.2341 6.87868 14.7967C7.44129 15.3593 8.20435 15.6754 9 15.6754H12V9.67542H9C8.20435 9.67542 7.44129 9.99149 6.87868 10.5541C6.31607 11.1167 6 11.8798 6 12.6754V12.6754Z"
                    fill="#A259FF"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_1323_15537"><rect width="12" height="18" fill="white" transform="translate(6 3.67542)" /></clipPath>
                </defs>
              </svg>
            </div>
            <div class="min-w-0 flex-1">
              <p class="truncate text-base font-semibold text-gray-900 dark:text-white">Figma</p>
              <p class="truncate text-sm font-normal text-gray-500 dark:text-gray-400">Web Developer, New York, USA</p>
            </div>
            <div class="inline-flex items-center">
              <span class="me-2 flex items-center rounded-sm bg-gray-100 px-2.5 py-0.5 text-sm font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                <svg class="me-1 h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z"
                    clip-rule="evenodd"
                  />
                </svg>
                2015 - Present
              </span>
            </div>
          </div>
        </li>
        <li class="border-b border-gray-200 py-4 dark:border-gray-700">
          <div class="items-center space-y-3 sm:flex sm:space-x-4 sm:space-y-0">
            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-700">
              <svg class="h-6" aria-hidden="true" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M20.3629 14.1744C20.3572 14.206 20.3532 14.238 20.3472 14.2696L20.3164 14.0883C20.3332 14.1165 20.3472 14.1459 20.3629 14.1744C20.4558 13.6687 20.5046 13.151 20.5046 12.6337C20.5046 11.4863 20.2799 10.3731 19.8361 9.32527C19.4079 8.31303 18.7954 7.40398 18.0143 6.62349C17.2344 5.843 16.3248 5.23041 15.3131 4.80225C14.2655 4.35899 13.1523 4.13436 12.005 4.13436C11.4642 4.13436 10.9226 4.1851 10.3955 4.2863C10.3944 4.28658 10.393 4.28658 10.3916 4.28687C10.4212 4.30255 10.4511 4.31651 10.4802 4.33276L10.3015 4.30483C10.3314 4.29913 10.3616 4.29285 10.3916 4.28687C9.66837 3.90232 8.8551 3.69708 8.03185 3.69708C6.6878 3.69708 5.42413 4.22045 4.47375 5.17112C3.52365 6.1215 3 7.38517 3 8.72922C3 9.58468 3.22006 10.4256 3.63311 11.1687C3.63853 11.138 3.64224 11.1069 3.64822 11.0761L3.67901 11.2543C3.66305 11.2263 3.64908 11.1972 3.63311 11.1687C3.54931 11.6502 3.50512 12.1422 3.50512 12.6337C3.50512 13.7813 3.72975 14.8942 4.17358 15.9423C4.60117 16.9549 5.21405 17.8633 5.99425 18.6438C6.77531 19.4243 7.68379 20.0378 8.6966 20.4648C9.74419 20.9089 10.8576 21.1338 12.005 21.1338C12.5044 21.1338 13.005 21.0882 13.4936 21.0015C13.4651 20.9856 13.436 20.971 13.4069 20.9542L13.5885 20.9861C13.5571 20.9921 13.5255 20.9958 13.4936 21.0015C14.2464 21.4274 15.0987 21.6538 15.969 21.6538C17.3128 21.6538 18.5759 21.1312 19.5262 20.1803C20.4769 19.2305 21 17.9665 21 16.6225C21 15.7642 20.7788 14.9204 20.3629 14.1744ZM12.0389 17.8391C9.01929 17.8391 7.6684 16.3545 7.6684 15.2419C7.6684 14.6713 8.08971 14.2713 8.67038 14.2713C9.96255 14.2713 9.62789 16.1268 12.0389 16.1268C13.2732 16.1268 13.9548 15.4566 13.9548 14.7707C13.9548 14.3583 13.7513 13.901 12.9386 13.7006L10.2527 13.0302C8.08971 12.4877 7.69719 11.3184 7.69719 10.2192C7.69719 7.93704 9.84596 7.08015 11.8639 7.08015C13.7227 7.08015 15.914 8.1075 15.914 9.47664C15.914 10.0633 15.406 10.4045 14.8256 10.4045C13.7227 10.4045 13.9257 8.87802 11.7043 8.87802C10.6019 8.87802 9.99134 9.37715 9.99134 10.0915C9.99134 10.8044 10.8619 11.0322 11.6179 11.2044L13.6059 11.6456C15.7834 12.1308 16.3356 13.4022 16.3356 14.5997C16.3356 16.4543 14.912 17.8391 12.0389 17.8391ZM13.4069 20.9542C13.436 20.971 13.4651 20.9856 13.4936 21.0015C13.5255 20.9958 13.5571 20.9921 13.5885 20.9861L13.4069 20.9542ZM20.3472 14.2696C20.3532 14.238 20.3572 14.206 20.3629 14.1744C20.3472 14.1459 20.3332 14.1165 20.3164 14.0883L20.3472 14.2696ZM3.64822 11.0761C3.64224 11.1069 3.63853 11.138 3.63311 11.1687C3.64908 11.1972 3.66305 11.2263 3.67901 11.2543L3.64822 11.0761ZM10.4802 4.33276C10.4511 4.31651 10.4212 4.30255 10.3916 4.28687C10.3616 4.29285 10.3314 4.29913 10.3015 4.30483L10.4802 4.33276Z"
                  fill="#00AFF0"
                />
              </svg>
            </div>
            <div class="min-w-0 flex-1">
              <p class="truncate text-base font-semibold text-gray-900 dark:text-white">Skype</p>
              <p class="truncate text-sm font-normal text-gray-500 dark:text-gray-400">Web Designer, Palo Alto, USA</p>
            </div>
            <div class="inline-flex items-center">
              <span class="me-2 flex items-center rounded-sm bg-gray-100 px-2.5 py-0.5 text-sm font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                <svg class="me-1 h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z"
                    clip-rule="evenodd"
                  />
                </svg>
                2011 - 2015
              </span>
            </div>
          </div>
        </li>
        <li class="pt-4">
          <div class="items-center space-y-3 sm:flex sm:space-x-4 sm:space-y-0">
            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-700">
              <svg class="h-6" aria-hidden="true" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.6362 11.0391C7.6362 11.2852 7.66281 11.4847 7.70937 11.6311C7.76258 11.7774 7.8291 11.9371 7.92223 12.11C7.95549 12.1632 7.96879 12.2164 7.96879 12.263C7.96879 12.3295 7.92888 12.396 7.84241 12.4626L7.42334 12.7419C7.36348 12.7818 7.30361 12.8018 7.2504 12.8018C7.18388 12.8018 7.11736 12.7685 7.05084 12.7087C6.95772 12.6089 6.8779 12.5025 6.81138 12.396C6.74486 12.283 6.67834 12.1566 6.60517 12.0036C6.08633 12.6155 5.43446 12.9215 4.64955 12.9215C4.0908 12.9215 3.64513 12.7619 3.31919 12.4426C2.99325 12.1233 2.82696 11.6976 2.82696 11.1655C2.82696 10.6001 3.02651 10.1411 3.43227 9.79518C3.83803 9.44929 4.37682 9.27634 5.06196 9.27634C5.28812 9.27634 5.52093 9.2963 5.76705 9.32956C6.01316 9.36282 6.26593 9.41603 6.532 9.4759V8.99032C6.532 8.48478 6.42557 8.13224 6.21937 7.92603C6.00651 7.71983 5.64732 7.62005 5.13513 7.62005C4.90231 7.62005 4.66285 7.64666 4.41673 7.70652C4.17062 7.76639 3.93115 7.83956 3.69834 7.93268C3.59191 7.97925 3.51209 8.00585 3.46553 8.01916C3.41897 8.03246 3.38571 8.03911 3.3591 8.03911C3.26597 8.03911 3.21941 7.97259 3.21941 7.83291V7.50697C3.21941 7.40054 3.23272 7.32072 3.26597 7.27416C3.29923 7.22759 3.3591 7.18103 3.45222 7.13447C3.68504 7.01474 3.96441 6.91496 4.29035 6.83514C4.61629 6.74866 4.96218 6.70875 5.32803 6.70875C6.11959 6.70875 6.6983 6.88835 7.0708 7.24755C7.43665 7.60675 7.6229 8.15219 7.6229 8.88389V11.0391H7.6362ZM4.93557 12.0501C5.15508 12.0501 5.38124 12.0102 5.62071 11.9304C5.86017 11.8506 6.07303 11.7042 6.25263 11.5047C6.35906 11.3783 6.43888 11.2386 6.47879 11.079C6.5187 10.9193 6.54531 10.7264 6.54531 10.5003V10.2209C6.3524 10.1743 6.1462 10.1344 5.93334 10.1078C5.72048 10.0812 5.51428 10.0679 5.30807 10.0679C4.8624 10.0679 4.53647 10.1544 4.31696 10.334C4.09745 10.5136 3.99102 10.7663 3.99102 11.0989C3.99102 11.4116 4.07084 11.6444 4.23714 11.804C4.39678 11.9703 4.62959 12.0501 4.93557 12.0501ZM10.277 12.7685C10.1572 12.7685 10.0774 12.7486 10.0242 12.702C9.97098 12.6621 9.92442 12.569 9.8845 12.4426L8.32133 7.30076C8.28142 7.16773 8.26147 7.08125 8.26147 7.03469C8.26147 6.92826 8.31468 6.8684 8.42111 6.8684H9.07299C9.19937 6.8684 9.28584 6.88835 9.33241 6.93491C9.38562 6.97482 9.42553 7.06795 9.46544 7.19433L10.5829 11.5978L11.6206 7.19433C11.6539 7.0613 11.6938 6.97482 11.747 6.93491C11.8002 6.895 11.8933 6.8684 12.0131 6.8684H12.5452C12.6716 6.8684 12.7581 6.88835 12.8113 6.93491C12.8645 6.97482 12.9111 7.06795 12.9377 7.19433L13.9887 11.651L15.1394 7.19433C15.1793 7.0613 15.2259 6.97482 15.2725 6.93491C15.3257 6.895 15.4121 6.8684 15.5319 6.8684H16.1505C16.2569 6.8684 16.3168 6.92161 16.3168 7.03469C16.3168 7.06795 16.3101 7.10121 16.3035 7.14112C16.2968 7.18103 16.2835 7.23424 16.2569 7.30741L14.6538 12.4492C14.6139 12.5823 14.5674 12.6688 14.5142 12.7087C14.4609 12.7486 14.3745 12.7752 14.2614 12.7752H13.6893C13.5629 12.7752 13.4765 12.7552 13.4233 12.7087C13.37 12.6621 13.3235 12.5756 13.2969 12.4426L12.2658 8.15219L11.2415 12.4359C11.2082 12.569 11.1683 12.6555 11.1151 12.702C11.0619 12.7486 10.9687 12.7685 10.849 12.7685H10.277ZM18.8245 12.9481C18.4786 12.9481 18.1327 12.9082 17.8001 12.8284C17.4675 12.7486 17.2081 12.6621 17.0352 12.5623C16.9288 12.5025 16.8556 12.4359 16.829 12.3761C16.8024 12.3162 16.7891 12.2497 16.7891 12.1898V11.8506C16.7891 11.7109 16.8423 11.6444 16.9421 11.6444C16.982 11.6444 17.0219 11.651 17.0618 11.6643C17.1017 11.6776 17.1616 11.7042 17.2281 11.7309C17.4542 11.8306 17.7004 11.9105 17.9598 11.9637C18.2259 12.0169 18.4853 12.0435 18.7513 12.0435C19.1704 12.0435 19.4963 11.9703 19.7225 11.824C19.9487 11.6776 20.0684 11.4648 20.0684 11.1921C20.0684 11.0058 20.0085 10.8528 19.8888 10.7264C19.7691 10.6001 19.5429 10.487 19.217 10.3805L18.2525 10.0812C17.7669 9.92822 17.4077 9.70206 17.1882 9.40273C16.9687 9.11005 16.8556 8.78411 16.8556 8.43822C16.8556 8.15884 16.9154 7.91273 17.0352 7.69987C17.1549 7.48701 17.3146 7.30076 17.5141 7.15442C17.7137 7.00143 17.9398 6.88835 18.2059 6.80853C18.472 6.72871 18.7513 6.69545 19.044 6.69545C19.1904 6.69545 19.3434 6.7021 19.4897 6.72206C19.6427 6.74201 19.7824 6.76862 19.9221 6.79523C20.0551 6.82849 20.1815 6.86174 20.3012 6.90166C20.4209 6.94157 20.5141 6.98148 20.5806 7.02139C20.6737 7.0746 20.7402 7.12782 20.7801 7.18768C20.82 7.2409 20.84 7.31407 20.84 7.40719V7.71983C20.84 7.85951 20.7868 7.93268 20.687 7.93268C20.6338 7.93268 20.5473 7.90608 20.4342 7.85286C20.0551 7.67991 19.6294 7.59344 19.1571 7.59344C18.7779 7.59344 18.4786 7.65331 18.2724 7.77969C18.0662 7.90608 17.9598 8.09898 17.9598 8.3717C17.9598 8.55795 18.0263 8.71759 18.1593 8.84398C18.2924 8.97036 18.5385 9.09675 18.891 9.20983L19.8356 9.50916C20.3145 9.66215 20.6604 9.87501 20.8666 10.1477C21.0728 10.4205 21.1726 10.7331 21.1726 11.079C21.1726 11.365 21.1127 11.6244 20.9996 11.8506C20.8799 12.0767 20.7203 12.2763 20.5141 12.4359C20.3079 12.6022 20.0617 12.722 19.7757 12.8084C19.4764 12.9016 19.1638 12.9481 18.8245 12.9481Z"
                  fill="#252F3E"
                />
                <path
                  d="M20.0817 16.1809C17.8933 17.7973 14.7137 18.6554 11.9798 18.6554C8.14838 18.6554 4.6961 17.2385 2.0886 14.8838C1.8824 14.6976 2.06865 14.4448 2.31476 14.5911C5.13512 16.2275 8.61401 17.2186 12.2126 17.2186C14.6405 17.2186 17.3079 16.713 19.7624 15.6754C20.1283 15.5091 20.4409 15.9148 20.0817 16.1809ZM20.993 15.1432C20.7136 14.784 19.1438 14.9703 18.4321 15.0568C18.2192 15.0834 18.1859 14.8971 18.3788 14.7574C19.6294 13.8794 21.6848 14.1322 21.9242 14.4248C22.1637 14.7242 21.8577 16.7796 20.687 17.764C20.5074 17.917 20.3345 17.8372 20.4143 17.6376C20.6804 16.9791 21.2724 15.4958 20.993 15.1432Z"
                  fill="#FF9900"
                />
              </svg>
            </div>
            <div class="min-w-0 flex-1">
              <p class="truncate text-base font-semibold text-gray-900 dark:text-white">Amazon</p>
              <p class="truncate text-sm font-normal text-gray-500 dark:text-gray-400">Web Designer, Palo Alto, USA</p>
            </div>
            <div class="inline-flex items-center">
              <span class="me-2 flex items-center rounded-sm bg-gray-100 px-2.5 py-0.5 text-sm font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                <svg class="me-1 h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z"
                    clip-rule="evenodd"
                  />
                </svg>
                2009 - 2011
              </span>
            </div>
          </div>
        </li>
      </ul>
      <ul>
        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white sm:mb-6">Education</h3>
        <li class="border-b border-gray-200 pb-4 dark:border-gray-700">
          <div class="items-center space-y-3 sm:flex sm:space-x-4 sm:space-y-0">
            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-gray-100 text-sm font-bold uppercase text-gray-900 dark:bg-gray-700 dark:text-white">SU</div>
            <div class="min-w-0 flex-1">
              <p class="truncate text-base font-semibold text-gray-900 dark:text-white">Stanford University</p>
              <p class="truncate text-sm font-normal text-gray-500 dark:text-gray-400">Computer Science and Engineering</p>
            </div>
            <div class="inline-flex items-center">
              <span class="me-2 flex items-center rounded-sm bg-gray-100 px-2.5 py-0.5 text-sm font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                <svg class="me-1 h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z"
                    clip-rule="evenodd"
                  />
                </svg>
                2009 - 2014
              </span>
            </div>
          </div>
        </li>
        <li class="border-gray-200 py-4 dark:border-gray-700 md:border-b">
          <div class="items-center space-y-3 sm:flex sm:space-x-4 sm:space-y-0">
            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-gray-100 text-sm font-bold uppercase text-gray-900 dark:bg-gray-700 dark:text-white">TJ</div>
            <div class="min-w-0 flex-1">
              <p class="truncate text-base font-semibold text-gray-900 dark:text-white">Thomas Jeff High School</p>
              <p class="truncate text-sm font-normal text-gray-500 dark:text-gray-400">Secondary School Certificate</p>
            </div>
            <div class="inline-flex items-center">
              <span class="me-2 flex items-center rounded-sm bg-gray-100 px-2.5 py-0.5 text-sm font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                <svg class="me-1 h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z"
                    clip-rule="evenodd"
                  />
                </svg>
                2005 - 2009
              </span>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <button
      id="updateUserButton"
      data-modal-target="updateUserModal"
      data-modal-toggle="updateUserModal"
      class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto"
      type="button"
    >
      <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path
          fill-rule="evenodd"
          d="M5 8a4 4 0 1 1 7.8 1.3l-2.5 2.5A4 4 0 0 1 5 8Zm4 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h2.2a3 3 0 0 1-.1-1.6l.6-3.4a3 3 0 0 1 .9-1.5L9 13Zm9-5a3 3 0 0 0-2 .9l-6 6a1 1 0 0 0-.3.5L9 18.8a1 1 0 0 0 1.2 1.2l3.4-.7c.2 0 .3-.1.5-.3l6-6a3 3 0 0 0-2-5Z"
          clip-rule="evenodd"
        />
      </svg>
      Edit
    </button>
  </div>
</div>

<!-- Edit personal info modal -->
<div id="updateUserModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
  <div class="relative max-h-full w-full max-w-2xl p-4">
    <!-- Modal content -->
    <form action="#" class="relative rounded-lg bg-white shadow-sm dark:bg-gray-800">
      <!-- Modal header -->
      <div class="flex items-center justify-between rounded-t px-4 py-4 sm:px-5">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Update user</h3>
        <button
          type="button"
          class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-toggle="updateUserModal"
        >
          <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
              fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"
            />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <div id="accordion-collapse-update-user" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-1">
          <button
            type="button"
            class="flex w-full items-center justify-between bg-gray-50 px-4 py-4 text-left font-medium leading-none text-gray-900 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:border-gray-700 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800 sm:px-5"
            data-accordion-target="#accordion-collapse-body-1"
            aria-expanded="true"
            aria-controls="accordion-collapse-body-1"
          >
            <span>General Information</span>
            <svg data-accordion-icon="" class="h-5 w-5 shrink-0 rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7" />
            </svg>
          </button>
        </h2>
        <div id="accordion-collapse-body-1" class="" aria-labelledby="accordion-collapse-heading-1">
          <div class="border-gray-200 p-4 dark:border-gray-700 sm:p-5">
            <!-- Inputs -->
            <div class="grid gap-4 sm:grid-cols-2">
              <div class="sm:col-span-2">
                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload avatar</label>
                <div class="w-full items-center sm:flex">
                  <img class="mb-4 h-20 w-20 rounded-full sm:mb-0 sm:mr-4" src="http://krizzma.com:8813/images/users/helene-engels.png" alt="Helene avatar" />
                  <div class="w-full">
                    <input
                      class="w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                      aria-describedby="file_input_help"
                      id="file_input"
                      type="file"
                    />
                    <p class="mb-3 mt-1 text-xs font-normal text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                    <div class="flex items-center space-x-2.5">
                      <button
                        type="button"
                        class="inline-flex items-center rounded-lg bg-primary-700 px-3 py-2 text-center text-xs font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                      >
                        <svg class="-ml-0.5 mr-1.5 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path
                            fill-rule="evenodd"
                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        Upload new picture
                      </button>
                      <button
                        type="button"
                        class="rounded-lg border border-gray-200 bg-white px-3 py-2 text-xs font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
                      >
                        Delete
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <label for="first-name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input
                  type="text"
                  name="first-name"
                  id="first-name"
                  value="Bonnie"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="John"
                  required=""
                />
              </div>
              <div>
                <label for="last-name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                <input
                  type="text"
                  name="last-name"
                  id="last-name"
                  value="Green"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="Doe"
                  required=""
                />
              </div>
              <div>
                <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  value="bonnie.green@company.com"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="john@company.com"
                  required=""
                />
              </div>
              <div>
                <label for="user-permissions" class="mb-2 inline-flex items-center text-sm font-medium text-gray-900 dark:text-white">
                  User Permissions
                  <button type="button" data-tooltip-target="tooltip-dark" data-tooltip-style="dark" class="ml-1 text-gray-400 hover:text-gray-900 dark:text-gray-500 dark:hover:text-white">
                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="sr-only">User permission details</span>
                  </button>
                  <div id="tooltip-dark" role="tooltip" class="tooltip invisible absolute z-10 inline-block max-w-sm rounded-lg bg-gray-900 px-3 py-2 text-sm font-normal text-white opacity-0 shadow-xs dark:bg-gray-600">
                    User permissions, part of the overall user management process, are access granted to users to specific resources such as files, applications, networks, or devices.
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                </label>
                <select
                  id="user-permissions"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                >
                  <option selected="">Operational</option>
                  <option value="NO">Non Operational</option>
                </select>
              </div>
              <div>
                <label for="job-title" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Job Title</label>
                <input
                  type="text"
                  name="job-title"
                  id="job-title"
                  value="Back-end software engineer"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="Ex. React Developer"
                  required=""
                />
              </div>
              <div>
                <label for="languages" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Languages</label>
                <input
                  type="text"
                  name="languages"
                  id="languages"
                  value="English, German"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="Ex. English, Spanish"
                  required=""
                />
              </div>
              <div>
                <label for="account" class="mb-2 inline-flex items-center text-sm font-medium text-gray-900 dark:text-white">
                  Account
                  <button type="button" data-tooltip-target="tooltip-account" data-tooltip-style="dark" class="ml-1 text-gray-400 hover:text-gray-900 dark:text-gray-500 dark:hover:text-white">
                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="sr-only">Account details</span>
                  </button>
                  <div id="tooltip-account" role="tooltip" class="tooltip invisible absolute z-10 inline-block max-w-sm rounded-lg bg-gray-900 px-3 py-2 text-sm font-normal text-white opacity-0 shadow-xs dark:bg-gray-600">
                    Choose here your account type.
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                </label>
                <select
                  id="account"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                >
                  <option selected="">PRO Account</option>
                  <option value="DF">Default Account</option>
                </select>
              </div>
              <div>
                <label for="user-role" class="mb-2 inline-flex items-center text-sm font-medium text-gray-900 dark:text-white">
                  User Role
                  <button type="button" data-tooltip-target="tooltip-user-role" data-tooltip-style="dark" class="ml-1 text-gray-400 hover:text-gray-900 dark:text-gray-500 dark:hover:text-white">
                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="sr-only">User role details</span>
                  </button>
                  <div id="tooltip-user-role" role="tooltip" class="tooltip invisible absolute z-10 inline-block max-w-sm rounded-lg bg-gray-900 px-3 py-2 text-sm font-normal text-white opacity-0 shadow-xs dark:bg-gray-600">
                    Flowbite provides 7 predefined roles: Owner, Admin, Editor, Contributor and Viewer. Assign the most suitable role to each user, giving them the most appropriate level of control.
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                </label>
                <select
                  id="user-role"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                >
                  <option selected="">Owner</option>
                  <option value="AD">Admin</option>
                  <option value="ED">Editor</option>
                  <option value="CO">Contributor</option>
                  <option value="VI">Viewer</option>
                </select>
              </div>
              <div class="sm:col-span-2">
                <label for="email-status" class="mb-2 inline-flex items-center text-sm font-medium text-gray-900 dark:text-white">
                  Email Status
                  <button type="button" data-tooltip-target="tooltip-email-status" data-tooltip-style="dark" class="ml-1 h-4 w-4 text-gray-400 hover:text-gray-900 dark:text-gray-500 dark:hover:text-white">
                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="sr-only">Email status details</span>
                  </button>
                  <div id="tooltip-email-status" role="tooltip" class="tooltip invisible absolute z-10 inline-block max-w-sm rounded-lg bg-gray-900 px-3 py-2 text-sm font-normal text-white opacity-0 shadow-xs dark:bg-gray-600">
                    As an administrator, you can view the status of a user's email. The status indicates whether a user's email is verified or not.
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                </label>
                <select
                  id="email-status"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                >
                  <option selected="">Verified</option>
                  <option value="NV">Not verified</option>
                </select>
              </div>
              <div>
                <label for="password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="•••••••••"
                  required=""
                />
              </div>
              <div>
                <label for="confirm-password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                <input
                  type="password"
                  name="confirm-password"
                  id="confirm-password"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="•••••••••"
                  required=""
                />
              </div>
              <div class="sm:col-span-2">
                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="role">Assign Role</label>
                <div class="flex space-x-4">
                  <div class="flex items-center">
                    <input
                      id="inline-checkbox"
                      type="checkbox"
                      value=""
                      name="role"
                      class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                    />
                    <label for="inline-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Administrator</label>
                  </div>
                  <div class="flex items-center">
                    <input
                      id="inline-2-checkbox"
                      type="checkbox"
                      value=""
                      name="role"
                      class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                    />
                    <label for="inline-2-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Member</label>
                  </div>
                  <div class="flex items-center">
                    <input
                      checked=""
                      id="inline-checked-checkbox"
                      type="checkbox"
                      value=""
                      name="role"
                      class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                    />
                    <label for="inline-checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Viewer</label>
                  </div>
                </div>
              </div>
              <div>
                <div class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</div>
                <label for="status" class="relative inline-flex cursor-pointer items-center">
                  <input type="checkbox" value="" id="status" class="peer sr-only" />
                  <div
                    class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:left-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-primary-600 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:peer-focus:ring-primary-800"
                  ></div>
                  <span class="ml-3 text-sm font-medium text-gray-500 dark:text-gray-300">Inactive</span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <h2 id="accordion-collapse-heading-2">
          <button
            type="button"
            class="flex w-full items-center justify-between border-t border-gray-200 bg-gray-50 px-4 py-4 text-left font-medium leading-none text-gray-900 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:border-gray-700 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800 sm:px-5"
            data-accordion-target="#accordion-collapse-body-2"
            aria-expanded="false"
            aria-controls="accordion-collapse-body-2"
          >
            <span>Additional Information</span>
            <svg data-accordion-icon="" class="h-5 w-5 shrink-0 rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7" />
            </svg>
          </button>
        </h2>
        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
          <div class="border-gray-200 px-4 pt-4 dark:border-gray-700 sm:px-5 sm:pt-5">
            <!-- Inputs -->
            <div class="grid gap-4 sm:grid-cols-2">
              <div class="col-span-2">
                <label for="skills" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Skills</label>
                <input
                  type="text"
                  name="skills"
                  id="skills"
                  value="Tailwind CSS, Flowbite, React"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="Ex. Figma, HTML, Javascript"
                  required=""
                />
              </div>
              <div class="col-span-2">
                <label for="phone-number" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                <input
                  type="text"
                  name="phone-number"
                  id="phone-number"
                  value="+1631 442 978"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="Ex. +1234 567 890"
                  required=""
                />
              </div>
              <div class="col-span-2 sm:col-span-1">
                <label for="linkedin" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Linkedin URL</label>
                <input
                  type="url"
                  name="linkedin"
                  id="linkedin"
                  value="https://www.linkedin.com/in/bonniegreen/"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="Ex. https://www.linkedin.com/in/example/"
                  required=""
                />
              </div>
              <div class="col-span-2 sm:col-span-1">
                <label for="facebook" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Facebook</label>
                <input
                  type="url"
                  name="facebook"
                  id="facebook"
                  value="https://www.facebook.com/bonniegreen"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="Ex. https://www.facebook.com/example"
                  required=""
                />
              </div>
              <div class="col-span-2 sm:col-span-1">
                <label for="twitter" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Twitter</label>
                <input
                  type="url"
                  name="twitter"
                  id="twitter"
                  value="https://twitter.com/bonniegreen"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="Ex. https://twitter.com/example"
                  required=""
                />
              </div>
              <div class="col-span-2 sm:col-span-1">
                <label for="personal-website" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Personal Website</label>
                <input
                  type="url"
                  name="personal-website"
                  id="personal-website"
                  value="https://flowbite.com"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="Ex. https://website.com"
                  required=""
                />
              </div>
              <div class="col-span-2">
                <label for="country" class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                <select
                  id="country"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                >
                  <option selected="">United States</option>
                  <option value="NO">Australia</option>
                  <option value="NO">United Kingdom</option>
                  <option value="NO">Italy</option>
                  <option value="NO">Germany</option>
                  <option value="NO">Spain</option>
                  <option value="NO">France</option>
                  <option value="NO">Canada</option>
                </select>
              </div>
              <div class="col-span-2 sm:col-span-1">
                <label for="address" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <input
                  type="text"
                  name="address"
                  id="address"
                  value="92 Milles Drive, Newark, NJ 07123"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="Ex. 92 Milles Drive, Newark, NJ 07123"
                  required=""
                />
              </div>
              <div class="col-span-2 sm:col-span-1">
                <label for="timezone" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Timezone</label>
                <input
                  type="text"
                  name="timezone"
                  id="timezone"
                  value="GMT+3"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="Ex. GMT+2"
                  required=""
                />
              </div>
              <div class="col-span-2">
                <label for="biography" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Biography</label>
                <textarea
                  id="biography"
                  rows="4"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 placeholder:text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                  placeholder="Write your biography..."
                >
Hello, I'm Helene Engels, USA Designer, Creating things that stand out, Featured by Adobe, Figma, Webflow and others, Daily design tips & resources, Exploring Web3.</textarea
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex items-center space-x-4 px-4 py-4 sm:px-5 sm:py-5">
        <button
          type="submit"
          class="rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
        >
          Update user
        </button>
        <button
          type="button"
          class="focus:outline-non inline-flex items-center rounded-lg bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
        >
          <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
              fill-rule="evenodd"
              d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
              clip-rule="evenodd"
            />
          </svg>
          Delete
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Edit profile picture modal -->
<div id="profilePictureModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
  <div class="relative max-h-full w-full max-w-lg p-4">
    <!-- Modal content -->
    <div class="relative rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:p-5">
      <!-- Modal header -->
      <div class="mb-4 flex items-center justify-between rounded-t sm:mb-5">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Update profile picture</h3>
        <button
          type="button"
          class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-toggle="profilePictureModal"
        >
          <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
          </svg>

          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <form action="#">
        <div class="mb-4 sm:mb-5">
          <label class="sr-only" for="file_input">Upload avatar</label>
          <div class="w-full items-center sm:flex">
            <img class="mb-4 h-24 w-24 rounded-lg sm:mb-0 sm:mr-4" src="http://krizzma.com:8813/images/users/joseph-mcfall.png" alt="Helene avatar" />
            <div class="w-full">
              <input
                class="w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                aria-describedby="file_input_help"
                id="file_input"
                type="file"
              />
              <p class="mb-3 mt-1 text-xs font-normal text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
              <div class="flex items-center space-x-2.5">
                <button
                  type="button"
                  class="inline-flex items-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-xs font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
                >
                  <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      fill-rule="evenodd"
                      d="M12 3a1 1 0 0 1 .78.375l4 5a1 1 0 1 1-1.56 1.25L13 6.85V14a1 1 0 1 1-2 0V6.85L8.78 9.626a1 1 0 1 1-1.56-1.25l4-5A1 1 0 0 1 12 3ZM9 14v-1H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-4v1a3 3 0 1 1-6 0Zm8 2a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z"
                      clip-rule="evenodd"
                    />
                  </svg>

                  Upload new picture
                </button>
                <button
                  type="button"
                  class="rounded-lg border border-gray-200 bg-white px-3 py-2 text-xs font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
                >
                  Delete
                </button>
              </div>
            </div>
          </div>
        </div>
        <button
          type="submit"
          class="rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
        >
          Save
        </button>
      </form>
    </div>
  </div>
</div>

      </main>
      <footer class="border-t border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800 md:flex md:items-center md:justify-between">
  <div class="mb-4 md:mb-0 xl:flex xl:items-center xl:space-x-3">
    <p class="mb-4 text-center text-sm text-gray-500 dark:text-gray-400 xl:mb-0">&copy; 2025 <a href="https://flowbite.com/" class="hover:underline" target="_blank">Flowbite</a>. All rights reserved.</p>
    <ul class="flex items-center justify-center">
      <li>
        <a href="#" class="me-6 text-gray-900 underline hover:no-underline dark:text-white">Privacy Policy</a>
      </li>
      <li>
        <a href="#" class="me-6 text-gray-900 underline hover:no-underline dark:text-white">API</a>
      </li>
      <li>
        <a href="#" class="text-gray-900 underline hover:no-underline dark:text-white">Contact</a>
      </li>
    </ul>
  </div>
  <div class="flex items-center justify-center space-x-3">
    <button
      id="dropdownLanguageButton"
      data-dropdown-toggle="dropdownLanguage"
      class="flex items-center rounded-full p-1.5 text-sm font-medium text-gray-900 hover:text-primary-600 focus:ring-4 focus:ring-gray-100 dark:text-white dark:hover:text-primary-500 dark:focus:ring-gray-700 md:me-0"
      type="button"
    >
      <span class="sr-only">Open user menu</span>
      <svg aria-hidden="true" class="me-2 ms-1.5 h-3 w-4" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
        <g fill-rule="evenodd">
          <g stroke-width="1pt">
            <path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)" />
            <path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)" />
          </g>
          <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
          <path
            fill="#fff"
            d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
            transform="scale(3.9385)"
          />
        </g>
      </svg>
      English (US)
      <svg class="mx-1.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" /></svg>
    </button>
    
    <div id="dropdownLanguage" class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
      <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" role="none">
        <li>
          <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
            <div class="inline-flex items-center">
              <svg aria-hidden="true" class="me-2 h-3.5 w-3.5 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
                <g fill-rule="evenodd">
                  <g stroke-width="1pt">
                    <path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)" />
                    <path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)" />
                  </g>
                  <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
                  <path
                    fill="#fff"
                    d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                    transform="scale(3.9385)"
                  />
                </g>
              </svg>
              English (US)
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
            <div class="inline-flex items-center">
              <svg aria-hidden="true" class="me-2 h-3.5 w-3.5 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512">
                <path fill="#ffce00" d="M0 341.3h512V512H0z" />
                <path d="M0 0h512v170.7H0z" />
                <path fill="#d00" d="M0 170.7h512v170.6H0z" />
              </svg>
              Deutsch
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
            <div class="inline-flex items-center">
              <svg aria-hidden="true" class="me-2 h-3.5 w-3.5 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512">
                <g fill-rule="evenodd" stroke-width="1pt">
                  <path fill="#fff" d="M0 0h512v512H0z" />
                  <path fill="#009246" d="M0 0h170.7v512H0z" />
                  <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
                </g>
              </svg>
              Italiano
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
            <div class="inline-flex items-center">
              <svg aria-hidden="true" class="me-2 h-3.5 w-3.5 rounded-full" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512">
                <defs>
                  <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z" />
                </defs>
                <path fill="#de2910" d="M0 0h512v512H0z" />
                <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a" />
                <use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a" />
                <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a" />
                <use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a" />
                <use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a" />
              </svg>
              中文 (繁體)
            </div>
          </a>
        </li>
      </ul>
    </div>
    <button
      type="button"
      data-tooltip-target="tooltip-settings"
      class="inline-flex cursor-pointer justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-200 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
    >
      <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
        <path
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2"
        />
      </svg>
      <span class="sr-only">Settings</span>
    </button>
    <div id="tooltip-settings" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
      Settings
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <button
      type="button"
      data-tooltip-target="tooltip-options"
      class="inline-flex cursor-pointer justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-200 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
    >
      <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path
            d="M19 11V9a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L12 2.757V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L2.929 4.343a1 1 0 0 0 0 1.414l.536.536L2.757 8H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535L8 17.243V18a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H18a1 1 0 0 0 1-1Z"
          />
          <path d="M10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
        </g>
      </svg>
      <span class="sr-only">Options</span>
    </button>
    <div id="tooltip-options" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
      Options
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
  </div>
</footer>

    </div>
  </div>

      <script src="http://krizzma.com:8813/app.bundle.js"></script>

    </body>
  
</html>
