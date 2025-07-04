
<!doctype html>
<html lang="en" class="dark">
  <head><script src="/livereload.js?mindelay=10&amp;v=2&amp;port=8813&amp;path=livereload" data-no-instant defer></script>
    <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="Get started with a premium admin dashboard interface built with Tailwind CSS and Flowbite featuring over 50 example pages of charts, calendars, kanban boards, dashboards, CRUD pages, mailing systems, and more." />
<meta name="author" content="Themesberg" />
<meta name="generator" content="Hugo 0.123.7" />

<title>Tailwind CSS Mailing Inbox Page - Flowbite</title>

<link rel="canonical" href="http://krizzma.com:8813/mailing/inbox/" />



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
<meta name="twitter:title" content="Tailwind CSS Mailing Inbox Page - Flowbite" />
<meta
  name="twitter:description"
  content="Get started with a premium admin dashboard interface built with Tailwind CSS and Flowbite featuring over 50 example pages of charts, calendars, kanban boards, dashboards, CRUD pages, mailing systems, and more."
/>
<meta
  name="twitter:image"
  content="http://krizzma.com:8813/application-ui/demo/images/og-image.jpg"
/>

<!-- Facebook -->
<meta property="og:url" content="http://krizzma.com:8813/mailing/inbox/" />
<meta property="og:title" content="Tailwind CSS Mailing Inbox Page - Flowbite" />
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
          <ul id="dropdown-users" class="hidden space-y-2 py-2">
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
                class=" hover:bg-gray-100 dark:hover:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
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
          <ul id="dropdown-mailing" class=" space-y-2 py-2">
            <li>
              <a
                href="http://krizzma.com:8813/mailing/inbox/"
                class="  hover:bg-gray-100 dark:hover:bg-gray-700 bg-gray-100 dark:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
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
        
<div class="flex items-center justify-between border-b border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
  <div class="flex items-center">
    <div class="pe-4">
      <input
        id="checkbox-all"
        aria-describedby="checkbox-1"
        type="checkbox"
        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
      />
      <label for="checkbox-all" class="sr-only">checkbox</label>
    </div>
    <div class="h-5 w-px bg-gray-100 dark:bg-gray-700"></div>
    <div class="flex space-x-1 px-2">
      <a href="#" data-tooltip-target="tooltip-archive" class="inline-flex cursor-pointer justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M4 4a2 2 0 1 0 0 4h16a2 2 0 1 0 0-4H4Zm0 6h16v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8Zm10.7 5.7a1 1 0 0 0-1.4-1.4l-.3.3V12a1 1 0 1 0-2 0v2.6l-.3-.3a1 1 0 0 0-1.4 1.4l2 2a1 1 0 0 0 1.4 0l2-2Z"
            clip-rule="evenodd"
          />
        </svg>
        <span class="sr-only">Archive</span>
      </a>
      <div id="tooltip-archive" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
        Archive
        <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
      <a href="#" data-tooltip-target="tooltip-spam" class="inline-flex cursor-pointer justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd" />
        </svg>
        <span class="sr-only">Report Spam</span>
      </a>
      <div id="tooltip-spam" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
        Report Spam
        <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
      <a href="#" data-tooltip-target="tooltip-delete" class="inline-flex cursor-pointer justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
            clip-rule="evenodd"
          />
        </svg>
        <span class="sr-only">Delete</span>
      </a>
      <div id="tooltip-delete" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
        Delete
        <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
    </div>
    <div class="h-5 w-px bg-gray-100 dark:bg-gray-700"></div>
    <div class="flex space-x-1 sm:px-2">
      <a
        href="#"
        data-tooltip-target="tooltip-unread"
        class="hidden cursor-pointer justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white sm:inline-flex"
      >
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M2 5.6V18c0 1.1.9 2 2 2h16a2 2 0 0 0 2-2V5.6l-.9.7-7.9 6a2 2 0 0 1-2.4 0l-8-6-.8-.7Z" />
          <path d="M20.7 4.1A2 2 0 0 0 20 4H4a2 2 0 0 0-.6.1l.7.6 7.9 6 7.9-6 .8-.6Z" />
        </svg>
        <span class="sr-only">Mark as unread</span>
      </a>
      <div id="tooltip-unread" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
        Mark as unread
        <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
      <a
        href="#"
        data-tooltip-target="tooltip-snooze"
        class="hidden cursor-pointer justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white sm:inline-flex"
      >
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm11-4a1 1 0 1 0-2 0v4c0 .3.1.5.3.7l3 3a1 1 0 0 0 1.4-1.4L13 11.6V8Z" clip-rule="evenodd" />
        </svg>
        <span class="sr-only">Snooze</span>
      </a>
      <div id="tooltip-snooze" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
        Snooze
        <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
      <a
        href="#"
        data-tooltip-target="tooltip-add-to-tasks"
        class="hidden cursor-pointer justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white sm:inline-flex"
      >
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M18 14a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0-2h-2v-2Z" clip-rule="evenodd" />
          <path
            fill-rule="evenodd"
            d="M15 21.5a10 10 0 1 1 3.6-17L10.9 12 7.7 8.9a1 1 0 0 0-1.4 1.4l4 4a1 1 0 0 0 1.3 0L20 5.8a10 10 0 0 1 1.6 9.1c-.4-.3-1-.5-1.5-.5h-.5V14a2.5 2.5 0 0 0-5 0v.5H14a2.5 2.5 0 0 0 0 5h.5v.5c0 .6.2 1.1.5 1.5Z"
            clip-rule="evenodd"
          />
        </svg>
        <span class="sr-only">Add to tasks</span>
      </a>
      <div id="tooltip-add-to-tasks" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
        Add to tasks
        <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
      <a
        href="#"
        data-tooltip-target="tooltip-move"
        class="hidden cursor-pointer justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white sm:inline-flex"
      >
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M5 4a2 2 0 0 0-2 2v1h11l-2-2.3a2 2 0 0 0-1.5-.7H5ZM3 19V9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm11.7-7.7a1 1 0 0 0-1.4 1.4l.3.3H8a1 1 0 1 0 0 2h5.6l-.3.3a1 1 0 0 0 1.4 1.4l2-2c.4-.4.4-1 0-1.4l-2-2Z"
            clip-rule="evenodd"
          />
        </svg>
        <span class="sr-only">Move to</span>
      </a>
      <div id="tooltip-move" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
        Move to
        <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
      <a
        href="#"
        data-tooltip-target="tooltip-labels"
        class="hidden cursor-pointer justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white md:inline-flex"
      >
        <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M3 4a1 1 0 0 0-.822 1.57L6.632 12l-4.454 6.43A1 1 0 0 0 3 20h13.153a1 1 0 0 0 .822-.43l4.847-7a1 1 0 0 0 0-1.14l-4.847-7a1 1 0 0 0-.822-.43H3Z" clip-rule="evenodd" />
        </svg>
        <span class="sr-only">Labels</span>
      </a>
      <div id="tooltip-labels" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
        Labels
        <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
      <button
        id="mail-dropdown-button"
        type="button"
        data-dropdown-toggle="mail-dropdown"
        class="inline-flex items-center rounded-lg p-2 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
      >
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M12 6h0m0 6h0m0 6h0" />
        </svg>
      </button>
      <div id="mail-dropdown" class="z-10 hidden w-60 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
        <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="mail-dropdown-button">
          <li>
            <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
              <svg class="me-1.5 h-4 w-4" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M3 4a1 1 0 0 0-.822 1.57L6.632 12l-4.454 6.43A1 1 0 0 0 3 20h13.153a1 1 0 0 0 .822-.43l4.847-7a1 1 0 0 0 0-1.14l-4.847-7a1 1 0 0 0-.822-.43H3Z" clip-rule="evenodd" />
              </svg>
              Mark as Important
            </a>
          </li>
          <li>
            <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
              <svg class="me-1.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path
                  stroke="currentColor"
                  stroke-width="2"
                  d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                />
              </svg>
              Add star
            </a>
          </li>
          <li>
            <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
              <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path d="M5 3a2 2 0 0 0-1.5 3.3l5.4 6v5c0 .4.3.9.6 1.1l3.1 2.3c1 .7 2.5 0 2.5-1.2v-7.1l5.4-6C21.6 5 20.7 3 19 3H5Z" />
              </svg>
              Filter messages like these
            </a>
          </li>
          <li>
            <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
              <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8v8a5 5 0 1 0 10 0V6.5a3.5 3.5 0 1 0-7 0V15a2 2 0 0 0 4 0V8" />
              </svg>
              Forward as attachment
            </a>
          </li>
        </ul>
      </div>
      <button
        type="button"
        id="composeButton"
        data-modal-target="composeModal"
        data-modal-toggle="composeModal"
        class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-3 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto"
      >
        <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"></path>
        </svg>
        Compose
      </button>
    </div>
  </div>
  <div class="hidden items-center space-x-1 sm:flex sm:space-y-0">
    <span class="me-4 hidden text-sm text-gray-500 dark:text-gray-400 md:flex"
      >Show <span class="mx-1  font-semibold text-gray-900 dark:text-white">1-25</span> of <span class="ms-1 font-semibold text-gray-900 dark:text-white">2290</span></span
    >
    <button
      tyoe="button"
      data-tooltip-target="tooltip-prev-page"
      class="inline-flex cursor-pointer justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
    >
      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
      </svg>
      <span class="sr-only">Prev page</span>
    </button>
    <div id="tooltip-prev-page" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
      Prev page
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <button
      type="button"
      data-tooltip-target="tooltip-next-page"
      class="inline-flex cursor-pointer justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
    >
      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
      </svg>
      <span class="sr-only">Next page</span>
    </button>
    <div id="tooltip-next-page" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
      Next page
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
  </div>
</div>
<div class="flex flex-col">
  <div class="overflow-x-auto">
    <div class="inline-block min-w-full align-middle">
      <div class="overflow-hidden shadow-sm">
        <table class="min-w-full table-fixed divide-y divide-gray-200">
          <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-800">
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-1"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-1" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-semibold text-gray-900 dark:text-white text-base">Neil Sims</div>
                </td>
                <td
                  class=" font-semibold text-gray-900 dark:text-white  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Am no an listening depending up believing. Enough around remove to barton agreed regret in or it. Advantage mr estimable be commanded provision. Year well shot deny shew come now had. Shall downs stand marry taken his for out. Do related mr account brandon an up. Wrong for never ready ham these witty him. Our compass see age uncivil matters weather forbade her minutes. Ready how but truth son new under.
                </td>
                <td class="font-medium text-gray-900 dark:text-white whitespace-nowrap p-4 text-sm">17 April at 09.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-2"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-2" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-semibold text-gray-900 dark:text-white text-base">Bonnie Green</div>
                </td>
                <td
                  class=" font-semibold text-gray-900 dark:text-white  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  For norland produce age wishing. To figure on it spring season up. Her provision acuteness had excellent two why intention. As called mr needed praise at. Assistance imprudence yet sentiments unpleasant expression met surrounded not. Be at talked ye though secure nearer.
                </td>
                <td class="font-medium text-gray-900 dark:text-white whitespace-nowrap p-4 text-sm">16 April at 10.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-3"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-3" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-semibold text-gray-900 dark:text-white text-base">Roberta Casas</div>
                </td>
                <td
                  class=" font-semibold text-gray-900 dark:text-white  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Silent sir say desire fat him letter. Whatever settling goodness too and honoured she building answered her. Strongly thoughts remember mr to do consider debating. Spirits musical behaved on we he farther letters. Repulsive he he as deficient newspaper dashwoods we. Discovered her his pianoforte insipidity entreaties. Began he at terms meant as fancy. Breakfast arranging he if furniture we described on. Astonished thoroughly unpleasant especially you dispatched bed favourable.
                </td>
                <td class="font-medium text-gray-900 dark:text-white whitespace-nowrap p-4 text-sm">16 April at 14.28 AM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-4"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-4" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Michael Gough</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Smallest directly families surprise honoured am an. Speaking replying mistress him numerous she returned feelings may day. Evening way luckily son exposed get general greatly. Zealously prevailed be arranging do. Set arranging too dejection september happiness. Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry plate you share. My resolve arrived is we chamber be removal.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">15 April at 10.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-5"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-5" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Jese Leos</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Sing long her way size. Waited end mutual missed myself the little sister one. So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect. Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an. If their woman could do wound on. You folly taste hoped their above are and but.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">14 April at 07.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-6"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-6" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Thomas Lean</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Advanced extended doubtful he he blessing together. Introduced far law gay considered frequently entreaties difficulty. Eat him four are rich nor calm. By an packages rejoiced exercise. To ought on am marry rooms doubt music. Mention entered an through company as. Up arrived no painful between. It declared is prospect an insisted pleasure.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">16 April at 05.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-7"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-7" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Helene Engels</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Ladyship it daughter securing procured or am moreover mr. Put sir she exercise vicinity cheerful wondered. Continual say suspicion provision you neglected sir curiosity unwilling. Simplicity end themselves increasing led day sympathize yet. General windows effects not are drawing man garrets. Common indeed garden you his ladies out yet. Preference imprudence contrasted to remarkably in on. Taken now you him trees tears any. Her object giving end sister except oppose.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">13 April at 12.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-8"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-8" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Lana Byrd</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  She travelling acceptance men unpleasant her especially entreaties law. Law forth but end any arise chief arose. Old her say learn these large. Joy fond many ham high seen this. Few preferred continual sir led incommode neglected. Discovered too old insensible collecting unpleasant but invitation.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">12 April at 15.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-9"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-9" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Leslie Livingston</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Name were we at hope. Remainder household direction zealously the unwilling bed sex. Lose and gay ham sake met that. Stood her place one ten spoke yet. Head case knew ever set why over. Marianne returned of peculiar replying in moderate. Roused get enable garret estate old county. Entreaties you devonshire law dissimilar terminated.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">11 April at 15.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-10"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-10" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Robert Brown</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Preserved defective offending he daughters on or. Rejoiced prospect yet material servants out answered men admitted. Sportsmen certainty prevailed suspected am as. Add stairs admire all answer the nearer yet length. Advantages prosperous remarkably my inhabiting so reasonably be if. Too any appearance announcing impossible one. Out mrs means heart ham tears shall power every.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">10 April at 15.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-11"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-11" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Neil Sims</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Am no an listening depending up believing. Enough around remove to barton agreed regret in or it. Advantage mr estimable be commanded provision. Year well shot deny shew come now had. Shall downs stand marry taken his for out. Do related mr account brandon an up. Wrong for never ready ham these witty him. Our compass see age uncivil matters weather forbade her minutes. Ready how but truth son new under.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">17 April at 09.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-12"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-12" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Bonnie Green</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  For norland produce age wishing. To figure on it spring season up. Her provision acuteness had excellent two why intention. As called mr needed praise at. Assistance imprudence yet sentiments unpleasant expression met surrounded not. Be at talked ye though secure nearer.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">16 April at 10.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-13"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-13" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Roberta Casas</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Silent sir say desire fat him letter. Whatever settling goodness too and honoured she building answered her. Strongly thoughts remember mr to do consider debating. Spirits musical behaved on we he farther letters. Repulsive he he as deficient newspaper dashwoods we. Discovered her his pianoforte insipidity entreaties. Began he at terms meant as fancy. Breakfast arranging he if furniture we described on. Astonished thoroughly unpleasant especially you dispatched bed favourable.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">16 April at 14.28 AM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-14"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-14" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Michael Gough</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Smallest directly families surprise honoured am an. Speaking replying mistress him numerous she returned feelings may day. Evening way luckily son exposed get general greatly. Zealously prevailed be arranging do. Set arranging too dejection september happiness. Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry plate you share. My resolve arrived is we chamber be removal.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">15 April at 10.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-15"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-15" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Jese Leos</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Sing long her way size. Waited end mutual missed myself the little sister one. So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect. Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an. If their woman could do wound on. You folly taste hoped their above are and but.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">14 April at 07.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-16"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-16" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Thomas Lean</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Advanced extended doubtful he he blessing together. Introduced far law gay considered frequently entreaties difficulty. Eat him four are rich nor calm. By an packages rejoiced exercise. To ought on am marry rooms doubt music. Mention entered an through company as. Up arrived no painful between. It declared is prospect an insisted pleasure.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">16 April at 05.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-17"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-17" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Helene Engels</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Ladyship it daughter securing procured or am moreover mr. Put sir she exercise vicinity cheerful wondered. Continual say suspicion provision you neglected sir curiosity unwilling. Simplicity end themselves increasing led day sympathize yet. General windows effects not are drawing man garrets. Common indeed garden you his ladies out yet. Preference imprudence contrasted to remarkably in on. Taken now you him trees tears any. Her object giving end sister except oppose.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">13 April at 12.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-18"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-18" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Lana Byrd</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  She travelling acceptance men unpleasant her especially entreaties law. Law forth but end any arise chief arose. Old her say learn these large. Joy fond many ham high seen this. Few preferred continual sir led incommode neglected. Discovered too old insensible collecting unpleasant but invitation.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">12 April at 15.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-19"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-19" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Leslie Livingston</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Name were we at hope. Remainder household direction zealously the unwilling bed sex. Lose and gay ham sake met that. Stood her place one ten spoke yet. Head case knew ever set why over. Marianne returned of peculiar replying in moderate. Roused get enable garret estate old county. Entreaties you devonshire law dissimilar terminated.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">11 April at 15.28 PM</td>
              </tr>
              <!-- Unread -->
            
              <tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700" onClick="location.href='http://krizzma.com:8813/mailing/read/';">
                <td class="w-4 p-4">
                  <div class="inline-flex items-center space-x-4">
                    <div>
                      <input
                        id="checkbox-20"
                        aria-describedby="checkbox-1"
                        type="checkbox"
                        class="focus:ring-3 h-4 w-4 rounded-sm border-gray-300 bg-gray-50 focus:ring-primary-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        onClick="event.stopPropagation();"
                      />
                      <label for="checkbox-20" class="sr-only">checkbox</label>
                    </div>
                    <svg
                      onClick="event.stopPropagation();"
                      data-tooltip-target="tooltip-starred"
                      class="h-5 w-5 text-gray-500 hover:text-yellow-400 dark:text-gray-400 dark:hover:text-yellow-400"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-width="2"
                        d="M11.083 4.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.557 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.029 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 19.8c-.764.446-1.688-.248-1.473-1.106l1.029-4.119a1 1 0 0 0-.337-1.016l-3.33-2.723c-.699-.571-.343-1.702.556-1.771l4.463-.342a1 1 0 0 0 .84-.597l1.752-4.022Z"
                      />
                    </svg>
                    <div
                      id="tooltip-starred"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Not starred
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <svg onClick="event.stopPropagation();" class="h-5 w-5 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.2 19 4.8-7-4.8-7H3l4.8 7L3 19h13.2Z" />
                    </svg>
                  </div>
                </td>
                <td class="flex items-center space-x-4 whitespace-nowrap p-4">
                  <div class="font-normal text-gray-700 dark:text-gray-400 text-base">Robert Brown</div>
                </td>
                <td
                  class=" font-normal text-gray-500 dark:text-gray-400  max-w-sm overflow-hidden truncate p-4 text-base xl:max-w-screen-md 2xl:max-w-screen-lg">
                  Preserved defective offending he daughters on or. Rejoiced prospect yet material servants out answered men admitted. Sportsmen certainty prevailed suspected am as. Add stairs admire all answer the nearer yet length. Advantages prosperous remarkably my inhabiting so reasonably be if. Too any appearance announcing impossible one. Out mrs means heart ham tears shall power every.
                </td>
                <td class="font-normal text-gray-500 dark:text-gray-400 whitespace-nowrap p-4 text-sm">10 April at 15.28 PM</td>
              </tr>
              <!-- Unread -->
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="border-t border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
  <div class="flex flex-col justify-between lg:flex-row lg:items-center xl:mb-0">
    <div class="order-1 mb-4 w-full sm:w-96 lg:mb-0">
      <div class="mb-1 h-1.5 w-full rounded-full bg-gray-200 dark:bg-gray-700">
        <div class="h-1.5 rounded-full bg-primary-600 dark:bg-primary-500" style="width: 45%"></div>
      </div>
      <div class="text-xs font-medium text-gray-500 dark:text-white">7.2 GB of 15 GB used</div>
    </div>
    <p class="order-3 text-sm text-gray-500 dark:text-gray-400 lg:order-2 xl:flex">Copyright &copy; 2025 <a href="https://flowbite.com/" class="ml-1 hover:underline" target="_blank">Flowbite</a>. All rights reserved.</p>
    <div class="order-2 mb-4 text-sm text-gray-500 dark:text-gray-400 lg:order-3 lg:mb-0 lg:text-right">
      <p>Last account activity: 12 hours ago</p>
      <a href="#" class="font-medium text-gray-900 underline hover:no-underline dark:text-white">Details</a>
    </div>
  </div>
</div>

<!-- Compose Modal -->
<div id="composeModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
  <div class="relative max-h-full w-full max-w-3xl p-4">
    <!-- Modal content -->
    <div class="relative rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:p-5">
      <!-- Modal header -->
      <div class="mb-4 flex items-center justify-between dark:border-gray-600 sm:mb-5">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Compose an email</h3>
        <button
          type="button"
          class="inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-toggle="composeModal"
        >
          <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
          </svg>

          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <form action="#">
        <div class="mb-4 space-y-4">
          <div>
            <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">To</label>
            <input
              type="email"
              name="name"
              id="name"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
              placeholder="Add recipients"
              required=""
            />
          </div>
          <div>
            <label for="subject" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Subject</label>
            <input
              type="text"
              name="subject"
              id="subject"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
              placeholder="Type your subject here"
              required=""
            />
          </div>
          <div>
            <label for="message" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Message</label>
            <div class="w-full rounded-lg border border-gray-200 bg-gray-50 dark:border-gray-600 dark:bg-gray-700">
              <div class="border-b px-3 py-2 dark:border-gray-600 border-gray-200">
                <div class="flex flex-wrap items-center">
                  <div class="flex flex-wrap items-center space-x-1 rtl:space-x-reverse">
                    <button
                      id="toggleBoldButton"
                      data-tooltip-target="tooltip-bold"
                      type="button"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5h4.5a3.5 3.5 0 1 1 0 7H8m0-7v7m0-7H6m2 7h6.5a3.5 3.5 0 1 1 0 7H8m0-7v7m0 0H6" />
                      </svg>
                      <span class="sr-only">Bold</span>
                    </button>
                    <div
                      id="tooltip-bold"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Toggle bold
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button
                      id="toggleItalicButton"
                      data-tooltip-target="tooltip-italic"
                      type="button"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8.874 19 6.143-14M6 19h6.33m-.66-14H18" />
                      </svg>
                      <span class="sr-only">Italic</span>
                    </button>
                    <div
                      id="tooltip-italic"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Toggle italic
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button
                      id="toggleUnderlineButton"
                      data-tooltip-target="tooltip-underline"
                      type="button"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 19h12M8 5v9a4 4 0 0 0 8 0V5M6 5h4m4 0h4" />
                      </svg>
                      <span class="sr-only">Underline</span>
                    </button>
                    <div
                      id="tooltip-underline"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Toggle underline
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button
                      id="toggleStrikeButton"
                      data-tooltip-target="tooltip-strike"
                      type="button"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 6.2V5h12v1.2M7 19h6m.2-14-1.677 6.523M9.6 19l1.029-4M5 5l6.523 6.523M19 19l-7.477-7.477" />
                      </svg>
                      <span class="sr-only">Strike</span>
                    </button>
                    <div
                      id="tooltip-strike"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Toggle strike
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button
                      id="toggleHighlightButton"
                      data-tooltip-target="tooltip-highlight"
                      type="button"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-width="2"
                          d="M9 19.2H5.5c-.3 0-.5-.2-.5-.5V16c0-.2.2-.4.5-.4h13c.3 0 .5.2.5.4v2.7c0 .3-.2.5-.5.5H18m-6-1 1.4 1.8h.2l1.4-1.7m-7-5.4L12 4c0-.1 0-.1 0 0l4 8.8m-6-2.7h4m-7 2.7h2.5m5 0H17"
                        />
                      </svg>
                      <span class="sr-only">Highlight</span>
                    </button>
                    <div
                      id="tooltip-highlight"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Toggle highlight
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button
                      id="toggleCodeButton"
                      type="button"
                      data-tooltip-target="tooltip-code"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 8-4 4 4 4m8 0 4-4-4-4m-2-3-4 14" />
                      </svg>
                      <span class="sr-only">Code</span>
                    </button>
                    <div
                      id="tooltip-code"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Format code
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button
                      id="toggleLinkButton"
                      data-tooltip-target="tooltip-link"
                      type="button"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961"
                        />
                      </svg>
                      <span class="sr-only">Link</span>
                    </button>
                    <div
                      id="tooltip-link"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Add link
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button
                      id="removeLinkButton"
                      data-tooltip-target="tooltip-remove-link"
                      type="button"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-width="2"
                          d="M13.2 9.8a3.4 3.4 0 0 0-4.8 0L5 13.2A3.4 3.4 0 0 0 9.8 18l.3-.3m-.3-4.5a3.4 3.4 0 0 0 4.8 0L18 9.8A3.4 3.4 0 0 0 13.2 5l-1 1m7.4 14-1.8-1.8m0 0L16 16.4m1.8 1.8 1.8-1.8m-1.8 1.8L16 20"
                        />
                      </svg>
                      <span class="sr-only">Remove link</span>
                    </button>
                    <div
                      id="tooltip-remove-link"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Remove link
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button
                      id="toggleTextSizeButton"
                      data-dropdown-toggle="textSizeDropdown"
                      type="button"
                      data-tooltip-target="tooltip-text-size"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6.2V5h11v1.2M8 5v14m-3 0h6m2-6.8V11h8v1.2M17 11v8m-1.5 0h3" />
                      </svg>
                      <span class="sr-only">Text size</span>
                    </button>
                    <div
                      id="tooltip-text-size"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Text size
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <div id="textSizeDropdown" class="z-10 hidden w-72 rounded-sm bg-white p-2 shadow-sm dark:bg-gray-700">
                      <ul class="space-y-1 text-sm font-medium" aria-labelledby="toggleTextSizeButton">
                        <li>
                          <button data-text-size="16px" type="button" class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-base text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
                            16px (Default)
                          </button>
                        </li>
                        <li>
                          <button data-text-size="12px" type="button" class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-xs text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">12px (Tiny)</button>
                        </li>
                        <li>
                          <button data-text-size="14px" type="button" class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-sm text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">14px (Small)</button>
                        </li>
                        <li>
                          <button data-text-size="18px" type="button" class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-lg text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">18px (Lead)</button>
                        </li>
                        <li>
                          <button data-text-size="24px" type="button" class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-2xl text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">24px (Large)</button>
                        </li>
                        <li>
                          <button data-text-size="36px" type="button" class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-4xl text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">36px (Huge)</button>
                        </li>
                      </ul>
                    </div>
                    <button
                      id="toggleTextColorButton"
                      data-dropdown-toggle="textColorDropdown"
                      type="button"
                      data-tooltip-target="tooltip-text-color"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="none" viewBox="0 0 25 24">
                        <path
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-width="2"
                          d="m6.532 15.982 1.573-4m-1.573 4h-1.1m1.1 0h1.65m-.077-4 2.725-6.93a.11.11 0 0 1 .204 0l2.725 6.93m-5.654 0H8.1m.006 0h5.654m0 0 .617 1.569m5.11 4.453c0 1.102-.854 1.996-1.908 1.996-1.053 0-1.907-.894-1.907-1.996 0-1.103 1.907-4.128 1.907-4.128s1.909 3.025 1.909 4.128Z"
                        />
                      </svg>
                      <span class="sr-only">Text color</span>
                    </button>
                    <div
                      id="tooltip-text-color"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Text color
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <div id="textColorDropdown" class="z-10 hidden w-48 rounded-sm bg-white p-2 shadow-sm dark:bg-gray-700">
                      <div class="group mb-3 grid grid-cols-6 items-center gap-2 rounded-lg p-1.5 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input
                          type="color"
                          id="color"
                          value="#e66465"
                          class="col-span-3 h-8 w-full rounded-md border border-gray-200 bg-gray-50 p-px px-1 hover:bg-gray-50 group-hover:bg-gray-50 dark:border-gray-600 dark:bg-gray-700 dark:group-hover:bg-gray-700"
                        />
                        <label for="color" class="col-span-3 text-sm font-medium text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">Pick a color</label>
                      </div>
                      <div class="mb-3 grid grid-cols-6 gap-1">
                        <button type="button" data-hex-color="#1A56DB" style="background-color: #1A56DB" class="h-6 w-6 rounded-md"><span class="sr-only">Blue</span></button>
                        <button type="button" data-hex-color="#0E9F6E" style="background-color: #0E9F6E" class="h-6 w-6 rounded-md"><span class="sr-only">Green</span></button>
                        <button type="button" data-hex-color="#FACA15" style="background-color: #FACA15" class="h-6 w-6 rounded-md"><span class="sr-only">Yellow</span></button>
                        <button type="button" data-hex-color="#F05252" style="background-color: #F05252" class="h-6 w-6 rounded-md"><span class="sr-only">Red</span></button>
                        <button type="button" data-hex-color="#FF8A4C" style="background-color: #FF8A4C" class="h-6 w-6 rounded-md"><span class="sr-only">Orange</span></button>
                        <button type="button" data-hex-color="#0694A2" style="background-color: #0694A2" class="h-6 w-6 rounded-md"><span class="sr-only">Teal</span></button>
                        <button type="button" data-hex-color="#B4C6FC" style="background-color: #B4C6FC" class="h-6 w-6 rounded-md"><span class="sr-only">Light indigo</span></button>
                        <button type="button" data-hex-color="#8DA2FB" style="background-color: #8DA2FB" class="h-6 w-6 rounded-md"><span class="sr-only">Indigo</span></button>
                        <button type="button" data-hex-color="#5145CD" style="background-color: #5145CD" class="h-6 w-6 rounded-md"><span class="sr-only">Purple</span></button>
                        <button type="button" data-hex-color="#771D1D" style="background-color: #771D1D" class="h-6 w-6 rounded-md"><span class="sr-only">Brown</span></button>
                        <button type="button" data-hex-color="#FCD9BD" style="background-color: #FCD9BD" class="h-6 w-6 rounded-md"><span class="sr-only">Light orange</span></button>
                        <button type="button" data-hex-color="#99154B" style="background-color: #99154B" class="h-6 w-6 rounded-md"><span class="sr-only">Bordo</span></button>
                        <button type="button" data-hex-color="#7E3AF2" style="background-color: #7E3AF2" class="h-6 w-6 rounded-md"><span class="sr-only">Dark Purple</span></button>
                        <button type="button" data-hex-color="#CABFFD" style="background-color: #CABFFD" class="h-6 w-6 rounded-md"><span class="sr-only">Light</span></button>
                        <button type="button" data-hex-color="#D61F69" style="background-color: #D61F69" class="h-6 w-6 rounded-md"><span class="sr-only">Dark Pink</span></button>
                        <button type="button" data-hex-color="#F8B4D9" style="background-color: #F8B4D9" class="h-6 w-6 rounded-md"><span class="sr-only">Pink</span></button>
                        <button type="button" data-hex-color="#F6C196" style="background-color: #F6C196" class="h-6 w-6 rounded-md"><span class="sr-only">Cream</span></button>
                        <button type="button" data-hex-color="#A4CAFE" style="background-color: #A4CAFE" class="h-6 w-6 rounded-md"><span class="sr-only">Light Blue</span></button>
                        <button type="button" data-hex-color="#5145CD" style="background-color: #5145CD" class="h-6 w-6 rounded-md"><span class="sr-only">Dark Blue</span></button>
                        <button type="button" data-hex-color="#B43403" style="background-color: #B43403" class="h-6 w-6 rounded-md"><span class="sr-only">Orange Brown</span></button>
                        <button type="button" data-hex-color="#FCE96A" style="background-color: #FCE96A" class="h-6 w-6 rounded-md"><span class="sr-only">Light Yellow</span></button>
                        <button type="button" data-hex-color="#1E429F" style="background-color: #1E429F" class="h-6 w-6 rounded-md"><span class="sr-only">Navy Blue</span></button>
                        <button type="button" data-hex-color="#768FFD" style="background-color: #768FFD" class="h-6 w-6 rounded-md"><span class="sr-only">Light Purple</span></button>
                        <button type="button" data-hex-color="#BCF0DA" style="background-color: #BCF0DA" class="h-6 w-6 rounded-md"><span class="sr-only">Light Green</span></button>
                        <button type="button" data-hex-color="#EBF5FF" style="background-color: #EBF5FF" class="h-6 w-6 rounded-md"><span class="sr-only">Sky Blue</span></button>
                        <button type="button" data-hex-color="#16BDCA" style="background-color: #16BDCA" class="h-6 w-6 rounded-md"><span class="sr-only">Cyan</span></button>
                        <button type="button" data-hex-color="#E74694" style="background-color: #E74694" class="h-6 w-6 rounded-md"><span class="sr-only">Pink</span></button>
                        <button type="button" data-hex-color="#83B0ED" style="background-color: #83B0ED" class="h-6 w-6 rounded-md"><span class="sr-only">Darker Sky Blue</span></button>
                        <button type="button" data-hex-color="#03543F" style="background-color: #03543F" class="h-6 w-6 rounded-md"><span class="sr-only">Forest Green</span></button>
                        <button type="button" data-hex-color="#111928" style="background-color: #111928" class="h-6 w-6 rounded-md"><span class="sr-only">Black</span></button>
                        <button type="button" data-hex-color="#4B5563" style="background-color: #4B5563" class="h-6 w-6 rounded-md"><span class="sr-only">Stone</span></button>
                        <button type="button" data-hex-color="#6B7280" style="background-color: #6B7280" class="h-6 w-6 rounded-md"><span class="sr-only">Gray</span></button>
                        <button type="button" data-hex-color="#D1D5DB" style="background-color: #D1D5DB" class="h-6 w-6 rounded-md"><span class="sr-only">Light Gray</span></button>
                        <button type="button" data-hex-color="#F3F4F6" style="background-color: #F3F4F6" class="h-6 w-6 rounded-md"><span class="sr-only">Cloud Gray</span></button>
                        <button type="button" data-hex-color="#F3F4F6" style="background-color: #F3F4F6" class="h-6 w-6 rounded-md"><span class="sr-only">Cloud Gray</span></button>
                        <button type="button" data-hex-color="#F9FAFB" style="background-color: #F9FAFB" class="h-6 w-6 rounded-md"><span class="sr-only">Heaven Gray</span></button>
                      </div>
                      <button
                        type="button"
                        id="reset-color"
                        class="w-full rounded-lg bg-white py-1.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-700"
                      >
                        Reset color
                      </button>
                    </div>
                    <button
                      id="toggleFontFamilyButton"
                      data-dropdown-toggle="fontFamilyDropdown"
                      type="button"
                      data-tooltip-target="tooltip-font-family"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="m10.6 19 4.298-10.93a.11.11 0 0 1 .204 0L19.4 19m-8.8 0H9.5m1.1 0h1.65m7.15 0h-1.65m1.65 0h1.1m-7.7-3.985h4.4M3.021 16l1.567-3.985m0 0L7.32 5.07a.11.11 0 0 1 .205 0l2.503 6.945h-5.44Z"
                        />
                      </svg>
                      <span class="sr-only">Font family</span>
                    </button>
                    <div
                      id="tooltip-font-family"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Font Family
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <div id="fontFamilyDropdown" class="z-10 hidden w-48 rounded-sm bg-white p-2 shadow-sm dark:bg-gray-700">
                      <ul class="space-y-1 text-sm font-medium" aria-labelledby="toggleFontFamilyButton">
                        <li>
                          <button
                            data-font-family="Inter, ui-sans-serif"
                            type="button"
                            class="flex w-full items-center justify-between rounded-sm px-3 py-2 font-sans text-sm text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600"
                          >
                            Default
                          </button>
                        </li>
                        <li>
                          <button
                            data-font-family="Arial, sans-serif"
                            type="button"
                            class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-sm text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600"
                            style="font-family: Arial, sans-serif;"
                          >
                            Arial
                          </button>
                        </li>
                        <li>
                          <button
                            data-font-family="'Courier New', monospace"
                            type="button"
                            class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-sm text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600"
                            style="font-family: 'Courier New', monospace;"
                          >
                            Courier New
                          </button>
                        </li>
                        <li>
                          <button
                            data-font-family="Georgia, serif"
                            type="button"
                            class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-sm text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600"
                            style="font-family: Georgia, serif;"
                          >
                            Georgia
                          </button>
                        </li>
                        <li>
                          <button
                            data-font-family="'Lucida Sans Unicode', sans-serif"
                            type="button"
                            class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-sm text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600"
                            style="font-family: 'Lucida Sans Unicode', sans-serif;"
                          >
                            Lucida Sans Unicode
                          </button>
                        </li>
                        <li>
                          <button
                            data-font-family="Tahoma, sans-serif"
                            type="button"
                            class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-sm text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600"
                            style="font-family: Tahoma, sans-serif;"
                          >
                            Tahoma
                          </button>
                        </li>
                        <li>
                          <button
                            data-font-family="'Times New Roman', serif;"
                            type="button"
                            class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-sm text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600"
                            style="font-family: 'Times New Roman', serif;"
                          >
                            Times New Roman
                          </button>
                        </li>
                        <li>
                          <button
                            data-font-family="'Trebuchet MS', sans-serif"
                            type="button"
                            class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-sm text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600"
                            style="font-family: 'Trebuchet MS', sans-serif;"
                          >
                            Trebuchet MS
                          </button>
                        </li>
                        <li>
                          <button
                            data-font-family="Verdana, sans-serif"
                            type="button"
                            class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-sm text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600"
                            style="font-family: Verdana, sans-serif;"
                          >
                            Verdana
                          </button>
                        </li>
                      </ul>
                    </div>
                    <div class="px-1">
                      <span class="block h-4 w-px bg-gray-300 dark:bg-gray-600"></span>
                    </div>
                    <button
                      id="toggleLeftAlignButton"
                      type="button"
                      data-tooltip-target="tooltip-left-align"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 6h8m-8 4h12M6 14h8m-8 4h12" />
                      </svg>
                      <span class="sr-only">Align left</span>
                    </button>
                    <div
                      id="tooltip-left-align"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Align left
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button
                      id="toggleCenterAlignButton"
                      type="button"
                      data-tooltip-target="tooltip-center-align"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 6h8M6 10h12M8 14h8M6 18h12" />
                      </svg>
                      <span class="sr-only">Align center</span>
                    </button>
                    <div
                      id="tooltip-center-align"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Align center
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button
                      id="toggleRightAlignButton"
                      type="button"
                      data-tooltip-target="tooltip-right-align"
                      class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6h-8m8 4H6m12 4h-8m8 4H6" />
                      </svg>
                      <span class="sr-only">Align right</span>
                    </button>
                    <div
                      id="tooltip-right-align"
                      role="tooltip"
                      class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                    >
                      Align right
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap items-center gap-2 pt-2">
                  <button
                    id="typographyDropdownButton"
                    data-dropdown-toggle="typographyDropdown"
                    class="flex items-center justify-center rounded-lg bg-gray-100 px-3 py-1.5 text-sm font-medium text-gray-500 hover:bg-gray-200 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-50 dark:bg-gray-600 dark:text-gray-400 dark:hover:bg-gray-500 dark:hover:text-white dark:focus:ring-gray-600"
                    type="button"
                  >
                    Format
                    <svg class="-me-0.5 ms-1.5 h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                    </svg>
                  </button>
                  <div class="ps-1.5">
                    <span class="block h-4 w-px bg-gray-300 dark:bg-gray-600"></span>
                  </div>
                  <!-- Heading Dropdown -->
                  <div id="typographyDropdown" class="z-10 hidden w-72 rounded-sm bg-white p-2 shadow-sm dark:bg-gray-700">
                    <ul class="space-y-1 text-sm font-medium" aria-labelledby="typographyDropdownButton">
                      <li>
                        <button id="toggleParagraphButton" type="button" class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-base text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
                          Paragraph
                          <div class="space-x-1.5">
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Cmd</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Alt</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">0</kbd>
                          </div>
                        </button>
                      </li>
                      <li>
                        <button data-heading-level="1" type="button" class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-base text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
                          Heading 1
                          <div class="space-x-1.5">
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Cmd</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Alt</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">1</kbd>
                          </div>
                        </button>
                      </li>
                      <li>
                        <button data-heading-level="2" type="button" class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-base text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
                          Heading 2
                          <div class="space-x-1.5">
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Cmd</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Alt</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">2</kbd>
                          </div>
                        </button>
                      </li>
                      <li>
                        <button data-heading-level="3" type="button" class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-base text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
                          Heading 3
                          <div class="space-x-1.5">
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Cmd</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Alt</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">3</kbd>
                          </div>
                        </button>
                      </li>
                      <li>
                        <button data-heading-level="4" type="button" class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-base text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
                          Heading 4
                          <div class="space-x-1.5">
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Cmd</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Alt</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">4</kbd>
                          </div>
                        </button>
                      </li>
                      <li>
                        <button data-heading-level="5" type="button" class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-base text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
                          Heading 5
                          <div class="space-x-1.5">
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Cmd</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Alt</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">5</kbd>
                          </div>
                        </button>
                      </li>
                      <li>
                        <button data-heading-level="6" type="button" class="flex w-full items-center justify-between rounded-sm px-3 py-2 text-base text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-600">
                          Heading 6
                          <div class="space-x-1.5">
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Cmd</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">Alt</kbd>
                            <kbd class="rounded-lg border border-gray-200 bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-500 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400">6</kbd>
                          </div>
                        </button>
                      </li>
                    </ul>
                  </div>
                  <button
                    id="addImageButton"
                    type="button"
                    data-tooltip-target="tooltip-image"
                    class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                  >
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                      <path
                        fill-rule="evenodd"
                        d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="sr-only">Add image</span>
                  </button>
                  <div
                    id="tooltip-image"
                    role="tooltip"
                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                  >
                    Add image
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <button
                    id="addVideoButton"
                    type="button"
                    data-tooltip-target="tooltip-video"
                    class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                  >
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm-2 4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H9Zm0 2h2v2H9v-2Zm7.965-.557a1 1 0 0 0-1.692-.72l-1.268 1.218a1 1 0 0 0-.308.721v.733a1 1 0 0 0 .37.776l1.267 1.032a1 1 0 0 0 1.631-.776v-2.984Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="sr-only">Add video</span>
                  </button>
                  <div
                    id="tooltip-video"
                    role="tooltip"
                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                  >
                    Add video
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <button
                    id="toggleListButton"
                    type="button"
                    data-tooltip-target="tooltip-list"
                    class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                  >
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5" />
                    </svg>
                    <span class="sr-only">Toggle list</span>
                  </button>
                  <div
                    id="tooltip-list"
                    role="tooltip"
                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                  >
                    Toggle list
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <button
                    id="toggleOrderedListButton"
                    type="button"
                    data-tooltip-target="tooltip-ordered-list"
                    class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                  >
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h8m-8 6h8m-8 6h8M4 16a2 2 0 1 1 3.321 1.5L4 20h5M4 5l2-1v6m-2 0h4" />
                    </svg>
                    <span class="sr-only">Toggle ordered list</span>
                  </button>
                  <div
                    id="tooltip-ordered-list"
                    role="tooltip"
                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                  >
                    Toggle ordered list
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <button
                    id="toggleBlockquoteButton"
                    type="button"
                    data-tooltip-target="tooltip-blockquote-list"
                    class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                  >
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M6 6a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a3 3 0 0 1-3 3H5a1 1 0 1 0 0 2h1a5 5 0 0 0 5-5V8a2 2 0 0 0-2-2H6Zm9 0a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a3 3 0 0 1-3 3h-1a1 1 0 1 0 0 2h1a5 5 0 0 0 5-5V8a2 2 0 0 0-2-2h-3Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="sr-only">Toggle blockquote</span>
                  </button>
                  <div
                    id="tooltip-blockquote-list"
                    role="tooltip"
                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                  >
                    Toggle blockquote
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <button
                    id="toggleHRButton"
                    type="button"
                    data-tooltip-target="tooltip-hr-list"
                    class="cursor-pointer rounded-sm p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                  >
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 12h14" />
                      <path stroke="currentColor" stroke-linecap="round" d="M6 9.5h12m-12 9h12M6 7.5h12m-12 9h12M6 5.5h12m-12 9h12" />
                    </svg>
                    <span class="sr-only">Toggle Horizontal Rule</span>
                  </button>
                  <div
                    id="tooltip-hr-list"
                    role="tooltip"
                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
                  >
                    Toggle Horizontal Rule
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                </div>
              </div>
              <div class="rounded-b-lg bg-white px-4 py-2 dark:bg-gray-800">
                <label for="wysiwyg-example" class="sr-only">Publish post</label>
                <div id="wysiwyg-example" class="block w-full border-0 bg-white px-0 text-sm text-gray-800 focus:ring-0 dark:bg-gray-800 dark:text-white dark:placeholder-gray-400"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex items-center space-x-4">
          <button
            type="submit"
            class="inline-flex items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
          >
            Send message
            <span class="sr-only">Add event</span>
          </button>
          <button
            data-modal-toggle="composeModal"
            type="button"
            class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
          >
            Cancel
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

      </main>
      
    </div>
  </div>

      <script src="http://krizzma.com:8813/app.bundle.js"></script>

    </body>
  
</html>
