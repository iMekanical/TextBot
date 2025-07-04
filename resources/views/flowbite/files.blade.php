
<!doctype html>
<html lang="en" class="dark">
  <head><script src="/livereload.js?mindelay=10&amp;v=2&amp;port=8813&amp;path=livereload" data-no-instant defer></script>
    <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="Get started with a premium admin dashboard interface built with Tailwind CSS and Flowbite featuring over 50 example pages of charts, calendars, kanban boards, dashboards, CRUD pages, mailing systems, and more." />
<meta name="author" content="Themesberg" />
<meta name="generator" content="Hugo 0.123.7" />

<title>Tailwind CSS Project Files - Flowbite</title>

<link rel="canonical" href="http://krizzma.com:8813/project-management/all-files/" />



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
<meta name="twitter:title" content="Tailwind CSS Project Files - Flowbite" />
<meta
  name="twitter:description"
  content="Get started with a premium admin dashboard interface built with Tailwind CSS and Flowbite featuring over 50 example pages of charts, calendars, kanban boards, dashboards, CRUD pages, mailing systems, and more."
/>
<meta
  name="twitter:image"
  content="http://krizzma.com:8813/application-ui/demo/images/og-image.jpg"
/>

<!-- Facebook -->
<meta property="og:url" content="http://krizzma.com:8813/project-management/all-files/" />
<meta property="og:title" content="Tailwind CSS Project Files - Flowbite" />
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
          <ul id="dropdown-project-management" class=" space-y-2 py-2">
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
                class="  hover:bg-gray-100 dark:hover:bg-gray-700 bg-gray-100 dark:bg-gray-700  group flex w-full items-center rounded-lg p-2 pl-10 text-base font-medium text-gray-900 dark:text-white"
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
        
<div class="my-4 px-4">
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
          <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-primary-700 dark:text-gray-400 dark:hover:text-white md:ms-2">Projects</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="mx-1 h-4 w-4 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400 md:ms-2">Project files</span>
        </div>
      </li>
    </ol>
  </nav>
  <h1 class="text-xl font-bold text-gray-900 dark:text-white">Project files</h1>
</div>

<div class="mb-4 grid gap-4 px-4">
  <div class="mb-4 grid grid-cols-2 gap-4 xl:grid-cols-4">
    <div class="items-center space-x-0 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:flex sm:space-x-4 md:p-6">
      <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-teal-100 text-teal-700 dark:bg-teal-900 dark:text-teal-400 sm:mb-0">
        <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm.394 9.553a1 1 0 0 0-1.817.062l-2.5 6A1 1 0 0 0 8 19h8a1 1 0 0 0 .894-1.447l-2-4A1 1 0 0 0 13.2 13.4l-.53.706-1.276-2.553ZM13 9.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
            clip-rule="evenodd"
          />
        </svg>
      </div>
      <div>
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Images</h2>
        <p class="text-gray-500 dark:text-gray-400">6,043 files</p>
      </div>
    </div>
    <div class="items-center space-x-0 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:flex sm:space-x-4 md:p-6">
      <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-purple-100 text-purple-700 dark:bg-purple-900 dark:text-purple-400 sm:mb-0">
        <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm-2 4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H9Zm0 2h2v2H9v-2Zm7.965-.557a1 1 0 0 0-1.692-.72l-1.268 1.218a1 1 0 0 0-.308.721v.733a1 1 0 0 0 .37.776l1.267 1.032a1 1 0 0 0 1.631-.776v-2.984Z"
            clip-rule="evenodd"
          />
        </svg>
      </div>
      <div>
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Video files</h2>
        <p class="text-gray-500 dark:text-gray-400">204 files</p>
      </div>
    </div>
    <div class="items-center space-x-0 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:flex sm:space-x-4 md:p-6">
      <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-400 sm:mb-0">
        <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm2.318.052h-.002A1 1 0 0 0 12 8v5.293A4.033 4.033 0 0 0 10.5 13C8.787 13 7 14.146 7 16s1.787 3 3.5 3 3.5-1.146 3.5-3c0-.107-.006-.211-.017-.313A1.04 1.04 0 0 0 14 15.5V9.766c.538.493 1 1.204 1 2.234a1 1 0 1 0 2 0c0-1.881-.956-3.14-1.86-3.893a6.4 6.4 0 0 0-1.636-.985 4.009 4.009 0 0 0-.165-.063l-.014-.005-.005-.001-.002-.001ZM9 16c0-.356.452-1 1.5-1s1.5.644 1.5 1-.452 1-1.5 1S9 16.356 9 16Z"
            clip-rule="evenodd"
          />
        </svg>
      </div>
      <div>
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Audio files</h2>
        <p class="text-gray-500 dark:text-gray-400">52 files</p>
      </div>
    </div>
    <div class="items-center space-x-0 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:flex sm:space-x-4 md:p-6">
      <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-100 text-primary-700 dark:bg-primary-900 dark:text-primary-400 sm:mb-0">
        <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm-6 9a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H5Zm1.5 3H6v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h1.376A2.626 2.626 0 0 0 15 15.375v-1.75A2.626 2.626 0 0 0 12.375 11H11Zm1 5v-3h.375a.626.626 0 0 1 .625.626v1.748a.625.625 0 0 1-.626.626H12Zm5-5a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1v-1h1a1 1 0 1 0 0-2h-2Z"
            clip-rule="evenodd"
          />
        </svg>
      </div>
      <div>
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Documents</h2>
        <p class="text-gray-500 dark:text-gray-400">1,657 files</p>
      </div>
    </div>
    <div class="items-center space-x-0 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:flex sm:space-x-4 md:p-6">
      <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-100 text-indigo-700 dark:bg-indigo-900 dark:text-indigo-400 sm:mb-0">
        <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M3 4a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H3Zm4.293 5.707a1 1 0 0 1 1.414-1.414l3 3a1 1 0 0 1 0 1.414l-3 3a1 1 0 0 1-1.414-1.414L9.586 12 7.293 9.707ZM13 14a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2h-3Z"
            clip-rule="evenodd"
          />
        </svg>
      </div>
      <div>
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Executable</h2>
        <p class="text-gray-500 dark:text-gray-400">105 files</p>
      </div>
    </div>
    <div class="items-center space-x-0 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:flex sm:space-x-4 md:p-6">
      <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-400 sm:mb-0">
        <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v5.703l-4.311-1.58a2 2 0 0 0-1.377 0l-5 1.832A2 2 0 0 0 8 11.861c.03 2.134.582 4.228 1.607 6.106.848 1.555 2 2.924 3.382 4.033H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z"
            clip-rule="evenodd"
          />
          <path
            fill-rule="evenodd"
            d="M15.345 9.061a1 1 0 0 0-.689 0l-5 1.833a1 1 0 0 0-.656.953c.028 1.97.538 3.905 1.485 5.641a12.425 12.425 0 0 0 3.956 4.34 1 1 0 0 0 1.12 0 12.426 12.426 0 0 0 3.954-4.34A12.14 12.14 0 0 0 21 11.848a1 1 0 0 0-.656-.954l-5-1.833ZM15 19.765a10.401 10.401 0 0 0 2.76-3.235 10.15 10.15 0 0 0 1.206-4.011L15 11.065v8.7Z"
            clip-rule="evenodd"
          />
        </svg>
      </div>
      <div>
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Security</h2>
        <p class="text-gray-500 dark:text-gray-400">11 files</p>
      </div>
    </div>
    <div class="items-center space-x-0 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:flex sm:space-x-4 md:p-6">
      <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-400 sm:mb-0">
        <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm3 2h2.01v2.01h-2V8h2v2.01h-2V12h2v2.01h-2V16h2v2.01h-2v2H12V18h2v-1.99h-2V14h2v-1.99h-2V10h2V8.01h-2V6h2V4Z"
            clip-rule="evenodd"
          />
        </svg>
      </div>
      <div>
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Compressed</h2>
        <p class="text-gray-500 dark:text-gray-400">2,485 files</p>
      </div>
    </div>
    <div class="items-center space-x-0 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:flex sm:space-x-4 md:p-6">
      <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-pink-100 text-pink-700 dark:bg-pink-900 dark:text-pink-400 sm:mb-0">
        <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Z" clip-rule="evenodd" />
        </svg>
      </div>
      <div>
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Others</h2>
        <p class="text-gray-500 dark:text-gray-400">356 files</p>
      </div>
    </div>
  </div>
  <h2 class="text-xl font-bold text-gray-900 dark:text-white">Recent uploads</h2>
  <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
    <div class="flex items-start justify-between rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 md:p-6">
      <div class="me-2">
        <span class="flex items-center gap-1 pb-2 text-sm font-medium text-gray-900 dark:text-white">
          <svg class="h-5 w-5 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
              fill-rule="evenodd"
              d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7c0 1.1.9 2 2 2 0 1.1.9 2 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm-6 9a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H5Zm1.5 3H6v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 0 0-1 1v5c0 .6.4 1 1 1h1.4a2.6 2.6 0 0 0 2.6-2.6v-1.8a2.6 2.6 0 0 0-2.6-2.6H11Zm1 5v-3h.4a.6.6 0 0 1 .6.6v1.8a.6.6 0 0 1-.6.6H12Zm5-5a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1v-1h1a1 1 0 1 0 0-2h-2Z"
              clip-rule="evenodd"
            ></path>
          </svg>
          Flowbite License
        </span>
        <span class="flex gap-2 text-xs font-normal text-gray-500 dark:text-gray-400">
          12 Pages
          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="3" height="4" viewBox="0 0 3 4" fill="none">
            <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"></circle>
          </svg>
          18 MB
          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="3" height="4" viewBox="0 0 3 4" fill="none">
            <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"></circle>
          </svg>
          PDF
        </span>
      </div>
      <div class="inline-flex items-center self-center">
        <button
          data-tooltip-target="tooltip-download-descr-1"
          class="inline-flex items-center self-center rounded-lg bg-white p-2 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-50 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          type="button"
        >
          <svg class="h-4 w-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"></path>
            <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
          </svg>
        </button>
        <div
          id="tooltip-download-descr-1"
          role="tooltip"
          class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
        >
          Download
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
      </div>
    </div>
    <div class="flex items-start justify-between rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 md:p-6">
      <div class="me-2">
        <span class="flex items-center gap-1 pb-2 text-sm font-medium text-gray-900 dark:text-white">
          <svg class="h-5 w-5 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
              fill-rule="evenodd"
              d="M9 7V2.2a2 2 0 0 0-.5.4l-4 3.9a2 2 0 0 0-.3.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm-2 4a2 2 0 0 0-2 2v2c0 1.1.9 2 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H9Zm0 2h2v2H9v-2Zm8-.6a1 1 0 0 0-1.7-.7L14 13a1 1 0 0 0-.3.8v.7c0 .3.1.6.4.8l1.2 1a1 1 0 0 0 1.7-.8v-3Z"
              clip-rule="evenodd"
            ></path>
          </svg>
          HomepageVideo.mp4
        </span>
        <span class="flex gap-2 text-xs font-normal text-gray-500 dark:text-gray-400">
          56 MB
          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="4" height="4" viewBox="0 0 3 4" fill="none">
            <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"></circle>
          </svg>
          MP4
        </span>
      </div>
      <div class="inline-flex items-center self-center">
        <button
          data-tooltip-target="tooltip-download-descr-4"
          class="inline-flex items-center self-center rounded-lg bg-white p-2 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-50 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          type="button"
        >
          <svg class="h-4 w-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"></path>
            <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
          </svg>
        </button>
        <div
          id="tooltip-download-descr-4"
          role="tooltip"
          class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
        >
          Download
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
      </div>
    </div>
    <div class="flex items-start justify-between rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 md:p-6">
      <div class="me-2">
        <span class="flex items-center gap-1 pb-2 text-sm font-medium text-gray-900 dark:text-white">
          <svg class="h-5 w-5 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
              fill-rule="evenodd"
              d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7c0 1.1.9 2 2 2 0 1.1.9 2 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm1 8.8A2.3 2.3 0 0 0 9.6 13a2.3 2.3 0 0 0 2.1 2.5h.7a.3.3 0 0 1 .2.4l-.4.1h-1a1 1 0 1 0 0 2h1c.5 0 1 0 1.4-.3a2 2 0 0 0 1-1.1 2.3 2.3 0 0 0-2.2-3l-.5-.1a.3.3 0 0 1-.3-.4.3.3 0 0 1 .4-.3h1a1 1 0 1 0 0-2h-1Zm8 1.5a1 1 0 1 0-2-.6l-.5 1.7-.5-1.7a1 1 0 0 0-2 .6l1.5 4.8a1 1 0 0 0 1.9 0l1.6-4.8Zm-13.8.9.4-.2h1a1 1 0 1 0 0-2h-1A2.6 2.6 0 0 0 4 13.6v1.8A2.6 2.6 0 0 0 6.6 18h1a1 1 0 1 0 0-2h-1a.6.6 0 0 1-.6-.6v-1.8c0-.1 0-.3.2-.4Z"
              clip-rule="evenodd"
            ></path>
          </svg>
          ProjectData.csv
        </span>
        <span class="flex gap-2 text-xs font-normal text-gray-500 dark:text-gray-400">
          6 Pages
          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="4" height="4" viewBox="0 0 3 4" fill="none">
            <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"></circle>
          </svg>
          9 MB
          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="4" height="4" viewBox="0 0 3 4" fill="none">
            <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"></circle>
          </svg>
          CSV
        </span>
      </div>
      <div class="inline-flex items-center self-center">
        <button
          data-tooltip-target="tooltip-download-descr-5"
          class="inline-flex items-center self-center rounded-lg bg-white p-2 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-50 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          type="button"
        >
          <svg class="h-4 w-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"></path>
            <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
          </svg>
        </button>
        <div
          id="tooltip-download-descr-5"
          role="tooltip"
          class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
        >
          Download
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
      </div>
    </div>
    <div class="flex items-start justify-between rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 md:p-6">
      <div class="me-2">
        <span class="flex items-center gap-1 pb-2 text-sm font-medium text-gray-900 dark:text-white">
          <svg class="h-5 w-5 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
              fill-rule="evenodd"
              d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7c0 1.1.9 2 2 2 0 1.1.9 2 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm-6 9a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H5Zm1.5 3H6v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 0 0-1 1v5c0 .6.4 1 1 1h1.4a2.6 2.6 0 0 0 2.6-2.6v-1.8a2.6 2.6 0 0 0-2.6-2.6H11Zm1 5v-3h.4a.6.6 0 0 1 .6.6v1.8a.6.6 0 0 1-.6.6H12Zm5-5a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1v-1h1a1 1 0 1 0 0-2h-2Z"
              clip-rule="evenodd"
            ></path>
          </svg>
          Flowbite Dev Plan
        </span>
        <span class="flex gap-2 text-xs font-normal text-gray-500 dark:text-gray-400">
          5 Pages
          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="3" height="4" viewBox="0 0 3 4" fill="none">
            <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"></circle>
          </svg>
          12 MB
          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="3" height="4" viewBox="0 0 3 4" fill="none">
            <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"></circle>
          </svg>
          PDF
        </span>
      </div>
      <div class="inline-flex items-center self-center">
        <button
          data-tooltip-target="tooltip-download-descr-6"
          class="inline-flex items-center self-center rounded-lg bg-white p-2 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-50 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          type="button"
        >
          <svg class="h-4 w-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"></path>
            <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
          </svg>
        </button>
        <div
          id="tooltip-download-descr-6"
          role="tooltip"
          class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700"
        >
          Download
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
      </div>
    </div>
  </div>
  <div class="relative overflow-hidden rounded-lg bg-white shadow-sm dark:bg-gray-800">
    <div>
      <div class="divide-y px-4 dark:divide-gray-700 divide-gray-200">
        <div class="flex flex-col space-y-3 py-3 md:flex-row md:items-center md:justify-between md:space-x-4 md:space-y-0">
          <div class="flex flex-1 items-center space-x-2">
            <h5 class="text-lg font-semibold">
              <span class="dark:text-white">Files and assets</span>
              <span class="ml-1 text-base font-normal text-gray-500 dark:text-gray-400">1-10 (436)</span>
            </h5>

            <button type="button" data-tooltip-target="results-tooltip" class="ms-1 text-gray-400 hover:text-gray-900 dark:hover:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">More info</span>
            </button>

            <div id="results-tooltip" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
              Showing 1-100 of 436 results
              <div class="tooltip-arrow" data-popper-arrow=""></div>
            </div>
          </div>
          <div class="flex shrink-0 flex-col items-start space-y-3 md:flex-row md:items-center md:space-x-3 md:space-y-0 lg:justify-end">
            <button
              type="button"
              class="inline-flex shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-xs font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
            >
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="mr-2 h-4 w-4" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M11.828 2.25c-.916 0-1.699.663-1.85 1.567l-.091.549a.798.798 0 01-.517.608 7.45 7.45 0 00-.478.198.798.798 0 01-.796-.064l-.453-.324a1.875 1.875 0 00-2.416.2l-.243.243a1.875 1.875 0 00-.2 2.416l.324.453a.798.798 0 01.064.796 7.448 7.448 0 00-.198.478.798.798 0 01-.608.517l-.55.092a1.875 1.875 0 00-1.566 1.849v.344c0 .916.663 1.699 1.567 1.85l.549.091c.281.047.508.25.608.517.06.162.127.321.198.478a.798.798 0 01-.064.796l-.324.453a1.875 1.875 0 00.2 2.416l.243.243c.648.648 1.67.733 2.416.2l.453-.324a.798.798 0 01.796-.064c.157.071.316.137.478.198.267.1.47.327.517.608l.092.55c.15.903.932 1.566 1.849 1.566h.344c.916 0 1.699-.663 1.85-1.567l.091-.549a.798.798 0 01.517-.608 7.52 7.52 0 00.478-.198.798.798 0 01.796.064l.453.324a1.875 1.875 0 002.416-.2l.243-.243c.648-.648.733-1.67.2-2.416l-.324-.453a.798.798 0 01-.064-.796c.071-.157.137-.316.198-.478.1-.267.327-.47.608-.517l.55-.091a1.875 1.875 0 001.566-1.85v-.344c0-.916-.663-1.699-1.567-1.85l-.549-.091a.798.798 0 01-.608-.517 7.507 7.507 0 00-.198-.478.798.798 0 01.064-.796l.324-.453a1.875 1.875 0 00-.2-2.416l-.243-.243a1.875 1.875 0 00-2.416-.2l-.453.324a.798.798 0 01-.796.064 7.462 7.462 0 00-.478-.198.798.798 0 01-.517-.608l-.091-.55a1.875 1.875 0 00-1.85-1.566h-.344zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                />
              </svg>
              Table settings
            </button>
          </div>
        </div>
        <div class="flex flex-col items-stretch justify-between space-y-3 py-4 md:flex-row md:items-center md:space-x-3 md:space-y-0">
          <div class="w-full md:w-1/2">
            <form class="flex items-center">
              <label for="simple-search" class="sr-only">Search</label>
              <div class="relative w-full">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                  <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                  </svg>
                </div>
                <input
                  type="text"
                  id="simple-search"
                  placeholder="Search for files"
                  required=""
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                />
              </div>
            </form>
          </div>
          <div class="flex w-full shrink-0 flex-col items-stretch justify-end space-y-2 md:w-auto md:flex-row md:items-center md:space-x-3 md:space-y-0">
            <button
              type="button"
              id="uploadFileButton"
              data-modal-target="uploadFileModal"
              data-modal-toggle="uploadFileModal"
              class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-3 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto"
            >
              <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M9 7V2.2a2 2 0 0 0-.5.4l-4 3.9a2 2 0 0 0-.3.5H9Zm2 0V2h7a2 2 0 0 1 2 2v6.4A7.5 7.5 0 1 0 10.5 22H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M9 16a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm6-3c.6 0 1 .4 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1v-1c0-.6.4-1 1-1Z" clip-rule="evenodd" />
              </svg>
              Add new file
            </button>
            <button
              id="dropdownFilter"
              data-dropdown-toggle="dropdown-filter"
              class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 md:w-auto"
              type="button"
            >
              <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path d="M5.05 3C3.291 3 2.352 5.024 3.51 6.317l5.422 6.059v4.874c0 .472.227.917.613 1.2l3.069 2.25c1.01.742 2.454.036 2.454-1.2v-7.124l5.422-6.059C21.647 5.024 20.708 3 18.95 3H5.05Z" />
              </svg>

              Filter options
              <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
              </svg>
            </button>
            <!-- Filter dropdown menu -->
            <div action="#" method="get" id="dropdown-filter" class="z-10 hidden w-60 rounded-lg bg-white p-3 shadow-sm dark:bg-gray-700" aria-labelledby="dropdownFilter">
              <h5 class="text-sm font-semibold text-gray-900 dark:text-white">Filter</h5>
              <div class="my-4">
                <h6 class="mb-2 text-sm font-semibold text-gray-900 dark:text-white">User</h6>
                <div class="flex flex-wrap gap-1.5">
                  <a href="#" data-tooltip-target="user-1" class="shrink-0"><img class="h-6 w-6 rounded-full" src="http://krizzma.com:8813/images/users/bonnie-green.png" alt="Bonnie avatar" /></a>
                  <div id="user-1" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600">
                    Bonnie Green
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <a href="#" data-tooltip-target="user-2" class="shrink-0"><img class="h-6 w-6 rounded-full" src="http://krizzma.com:8813/images/users/helene-engels.png" alt="Helene avatar" /></a>
                  <div id="user-2" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600">
                    Helene Engels
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <a href="#" data-tooltip-target="user-3" class="shrink-0"><img class="h-6 w-6 rounded-full" src="http://krizzma.com:8813/images/users/jese-leos.png" alt="Jese avatar" /></a>
                  <div id="user-3" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600">
                    Jese Leos
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <a href="#" data-tooltip-target="user-4" class="shrink-0"><img class="h-6 w-6 rounded-full" src="http://krizzma.com:8813/images/users/joseph-mcfall.png" alt="Joseph avatar" /></a>
                  <div id="user-4" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600">
                    Joseph McFall
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <a href="#" data-tooltip-target="user-5" class="shrink-0"><img class="h-6 w-6 rounded-full" src="http://krizzma.com:8813/images/users/sofia-mcguire.png" alt="Sofia avatar" /></a>
                  <div id="user-5" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600">
                    Sofia Mcguire
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <a href="#" data-tooltip-target="user-6" class="shrink-0"><img class="h-6 w-6 rounded-full" src="http://krizzma.com:8813/images/users/thomas-lean.png" alt="Thomas avatar" /></a>
                  <div id="user-6" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600">
                    Thomas Lean
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <a href="#" data-tooltip-target="user-7" class="shrink-0"><img class="h-6 w-6 rounded-full" src="http://krizzma.com:8813/images/users/michael-gough.png" alt="Micheal avatar" /></a>
                  <div id="user-7" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600">
                    Micheal Gough
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <a href="#" data-tooltip-target="user-8" class="shrink-0"><img class="h-6 w-6 rounded-full" src="http://krizzma.com:8813/images/users/neil-sims.png" alt="Neil avatar" /></a>
                  <div id="user-8" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600">
                    Neil Sims
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <a href="#" data-tooltip-target="user-9" class="shrink-0"><img class="h-6 w-6 rounded-full" src="http://krizzma.com:8813/images/users/roberta-casas.png" alt="Roberta avatar" /></a>
                  <div id="user-9" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600">
                    Roberta Casas
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <a href="#" data-tooltip-target="user-10" class="shrink-0"><img class="h-6 w-6 rounded-full" src="http://krizzma.com:8813/images/users/karen-nelson.png" alt="Karen avatar" /></a>
                  <div id="user-10" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600">
                    Karen Nelson
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <a href="#" data-tooltip-target="user-11" class="shrink-0"><img class="h-6 w-6 rounded-full" src="http://krizzma.com:8813/images/users/thomas-lean.png" alt="Thomas avatar" /></a>
                  <div id="user-11" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600">
                    Thomas
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <a href="#" data-tooltip-target="user-12" class="shrink-0"><img class="h-6 w-6 rounded-full" src="http://krizzma.com:8813/images/users/neil-sims.png" alt="Neil avatar" /></a>
                  <div id="user-12" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600">
                    Neil Sims
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                  <a
                    href="#"
                    data-tooltip-target="user-13"
                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full border border-gray-200 bg-gray-100 text-gray-500 hover:bg-gray-200 hover:text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-gray-400 dark:hover:bg-gray-500 dark:hover:text-white"
                  >
                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                    </svg>
                    <span class="sr-only">Add new user</span>
                  </a>
                  <div id="user-13" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-600">
                    Add new user
                    <div class="tooltip-arrow" data-popper-arrow></div>
                  </div>
                </div>
              </div>
              <div class="mb-4">
                <h6 class="mb-2 text-sm font-semibold text-gray-900 dark:text-white">Type</h6>
                <ul class="space-y-2 text-sm" aria-labelledby="dropdownFilter">
                  <li>
                    <label class="flex w-full items-center rounded-md px-1.5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600">
                      <input
                        type="checkbox"
                        value=""
                        class="mr-2 h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
                      />
                      All
                    </label>
                  </li>

                  <li>
                    <label class="flex w-full items-center rounded-md px-1.5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600">
                      <input
                        type="checkbox"
                        value=""
                        class="mr-2 h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
                      />
                      Images
                    </label>
                  </li>

                  <li>
                    <label class="flex w-full items-center rounded-md px-1.5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600">
                      <input
                        type="checkbox"
                        value=""
                        class="mr-2 h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
                      />
                      Video files
                    </label>
                  </li>

                  <li>
                    <label class="flex w-full items-center rounded-md px-1.5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600">
                      <input
                        type="checkbox"
                        value=""
                        class="mr-2 h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
                      />
                      Audio files
                    </label>
                  </li>

                  <li>
                    <label class="flex w-full items-center rounded-md px-1.5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600">
                      <input
                        type="checkbox"
                        value=""
                        checked
                        class="mr-2 h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
                      />
                      Documents
                    </label>
                  </li>

                  <li>
                    <label class="flex w-full items-center rounded-md px-1.5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600">
                      <input
                        type="checkbox"
                        value=""
                        class="mr-2 h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
                      />
                      Executable files
                    </label>
                  </li>

                  <li>
                    <label class="flex w-full items-center rounded-md px-1.5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600">
                      <input
                        type="checkbox"
                        value=""
                        class="mr-2 h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
                      />
                      Security files
                    </label>
                  </li>

                  <li>
                    <label class="flex w-full items-center rounded-md px-1.5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600">
                      <input
                        type="checkbox"
                        value=""
                        class="mr-2 h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
                      />
                      Compressed files
                    </label>
                  </li>
                </ul>
              </div>
              <button
                type="button"
                class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-3 py-2 text-center text-xs font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
              >
                Apply
              </button>
            </div>
            <div class="flex w-full items-center space-x-3 md:w-auto">
              <button
                id="actionsDropdownButton"
                data-dropdown-toggle="actionsDropdown"
                class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 md:w-auto"
                type="button"
              >
                Actions
                <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                </svg>
              </button>
              <div id="actionsDropdown" class="z-10 hidden w-40 rounded-lg bg-white shadow-sm dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="actionsDropdownButton">
                  <li>
                    <a
                      id="editProductButton"
                      data-modal-target="editProductModal"
                      data-modal-toggle="editProductModal"
                      href="#editProductModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13 11.15V4a1 1 0 1 0-2 0v7.15L8.78 8.374a1 1 0 1 0-1.56 1.25l4 5a1 1 0 0 0 1.56 0l4-5a1 1 0 1 0-1.56-1.25L13 11.15Z" clip-rule="evenodd" />
                        <path
                          fill-rule="evenodd"
                          d="M9.657 15.874 7.358 13H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.358l-2.3 2.874a3 3 0 0 1-4.685 0ZM17 16a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Download all
                    </a>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="deleteAllFilesModalButton"
                      data-modal-target="deleteAllFilesModal"
                      data-modal-toggle="deleteAllFilesModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                    >
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Delete all
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
        <thead class="bg-gray-50 text-xs uppercase text-gray-500 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-4 py-3 font-semibold sm:px-6 whitespace-nowrap">File name</th>
            <th scope="col" class="px-4 py-3 font-semibold sm:px-6 whitespace-nowrap">Details</th>
            <th scope="col" class="px-4 py-3 font-semibold sm:px-6 whitespace-nowrap">User</th>
            <th scope="col" class="px-4 py-3 font-semibold sm:px-6 whitespace-nowrap">Date added</th>
            <th scope="col" class="px-4 py-3 font-semibold sm:px-6">
              <span class="sr-only">Actions</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">
              <div class="flex items-center">
                <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7c0 1.1.9 2 2 2 0 1.1.9 2 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm-6 9a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H5Zm1.5 3H6v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 0 0-1 1v5c0 .6.4 1 1 1h1.4a2.6 2.6 0 0 0 2.6-2.6v-1.8a2.6 2.6 0 0 0-2.6-2.6H11Zm1 5v-3h.4a.6.6 0 0 1 .6.6v1.8a.6.6 0 0 1-.6.6H12Zm5-5a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1v-1h1a1 1 0 1 0 0-2h-2Z"
                    clip-rule="evenodd"
                  />
                </svg>
                Flowbite Pro Terms & Conditions
              </div>
            </th>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <span>12 pages</span>
              <span>&#x2025;</span>
              <span>18 MB</span>
              <span>&#x2025;</span>
              <span>PDF</span>
            </td>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <div class="mr-3 flex items-center font-medium text-gray-900 dark:text-white">
                <img src="http://krizzma.com:8813/images/users/avatar-8.png" alt="User avatar" class="mr-3 h-8 w-auto rounded-full" />
                Roberta Casas
              </div>
            </td>
            <td class="max-w-48 whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">Today</td>
            <td class="flex items-center justify-end px-4 py-3 sm:px-6">
              <button
                id="file-1-dropdown-button"
                type="button"
                data-dropdown-toggle="file-1-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="file-1-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="file-1-dropdown-button">
                  <li>
                    <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13 11.1V4a1 1 0 1 0-2 0v7.1L8.8 8.4a1 1 0 1 0-1.6 1.2l4 5a1 1 0 0 0 1.6 0l4-5a1 1 0 1 0-1.6-1.2L13 11Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M9.7 15.9 7.4 13H5a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.4l-2.3 2.9a3 3 0 0 1-4.6 0Zm7.3.1a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd" />
                      </svg>
                      Download
                    </button>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="archiveFileModalButton"
                      data-modal-target="archiveFileModal"
                      data-modal-toggle="archiveFileModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        <path d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                      </svg>
                      Archive
                    </button>
                  </li>
                </ul>
                <div class="p-2">
                  <button
                    type="button"
                    id="deleteFileButton1"
                    data-modal-target="deleteFileModal"
                    data-modal-toggle="deleteFileModal"
                    class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                  >
                    <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
            </td>
          </tr>
          <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">
              <div class="flex items-center">
                <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm.4 9.6a1 1 0 0 0-1.8 0l-2.5 6A1 1 0 0 0 8 19h8a1 1 0 0 0 .9-1.4l-2-4a1 1 0 0 0-1.7-.2l-.5.7-1.3-2.5ZM13 9.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                    clip-rule="evenodd"
                  />
                </svg>
                HeroImage.jpg
              </div>
            </th>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <span>5.6 MB</span>
              <span>&#x2025;</span>
              <span>JPG</span>
            </td>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <div class="mr-3 flex items-center font-medium text-gray-900 dark:text-white">
                <img src="http://krizzma.com:8813/images/users/avatar-1.png" alt="User avatar" class="mr-3 h-8 w-auto rounded-full" />
                Bonnie Green
              </div>
            </td>
            <td class="max-w-48 whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">1 day ago</td>
            <td class="flex items-center justify-end px-4 py-3 sm:px-6">
              <button
                id="file-2-dropdown-button"
                type="button"
                data-dropdown-toggle="file-2-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="file-2-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="file-2-dropdown-button">
                  <li>
                    <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13 11.1V4a1 1 0 1 0-2 0v7.1L8.8 8.4a1 1 0 1 0-1.6 1.2l4 5a1 1 0 0 0 1.6 0l4-5a1 1 0 1 0-1.6-1.2L13 11Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M9.7 15.9 7.4 13H5a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.4l-2.3 2.9a3 3 0 0 1-4.6 0Zm7.3.1a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd" />
                      </svg>
                      Download
                    </button>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="archiveFileModalButton"
                      data-modal-target="archiveFileModal"
                      data-modal-toggle="archiveFileModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        <path d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                      </svg>
                      Archive
                    </button>
                  </li>
                </ul>
                <div class="p-2">
                  <button
                    type="button"
                    id="deleteFileButton2"
                    data-modal-target="deleteFileModal"
                    data-modal-toggle="deleteFileModal"
                    class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                  >
                    <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
            </td>
          </tr>
          <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">
              <div class="flex items-center">
                <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M9 7V2.2a2 2 0 0 0-.5.4l-4 3.9a2 2 0 0 0-.3.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm2.3 0A1 1 0 0 0 12 8v5.3a4 4 0 0 0-1.5-.3C8.8 13 7 14.1 7 16s1.8 3 3.5 3 3.5-1.1 3.5-3V9.8a3 3 0 0 1 1 2.2 1 1 0 1 0 2 0 5 5 0 0 0-1.9-3.9 6.4 6.4 0 0 0-1.8-1ZM9 16c0-.4.5-1 1.5-1s1.5.6 1.5 1-.5 1-1.5 1S9 16.4 9 16Z"
                    clip-rule="evenodd"
                  />
                </svg>
                FlowbiteMusic.mp3
              </div>
            </th>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <span>4.7 MB</span>
              <span>&#x2025;</span>
              <span>MP3</span>
            </td>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <div class="mr-3 flex items-center font-medium text-gray-900 dark:text-white">
                <img src="http://krizzma.com:8813/images/users/avatar-2.png" alt="User avatar" class="mr-3 h-8 w-auto rounded-full" />
                Leslie Livingston
              </div>
            </td>
            <td class="max-w-48 whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">1 day ago</td>
            <td class="flex items-center justify-end px-4 py-3 sm:px-6">
              <button
                id="file-3-dropdown-button"
                type="button"
                data-dropdown-toggle="file-3-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="file-3-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="file-3-dropdown-button">
                  <li>
                    <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13 11.1V4a1 1 0 1 0-2 0v7.1L8.8 8.4a1 1 0 1 0-1.6 1.2l4 5a1 1 0 0 0 1.6 0l4-5a1 1 0 1 0-1.6-1.2L13 11Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M9.7 15.9 7.4 13H5a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.4l-2.3 2.9a3 3 0 0 1-4.6 0Zm7.3.1a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd" />
                      </svg>
                      Download
                    </button>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="archiveFileModalButton"
                      data-modal-target="archiveFileModal"
                      data-modal-toggle="archiveFileModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        <path d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                      </svg>
                      Archive
                    </button>
                  </li>
                </ul>
                <div class="p-2">
                  <button
                    type="button"
                    id="deleteFileButton3"
                    data-modal-target="deleteFileModal"
                    data-modal-toggle="deleteFileModal"
                    class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                  >
                    <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
            </td>
          </tr>
          <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">
              <div class="flex items-center">
                <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7c0 1.1.9 2 2 2 0 1.1.9 2 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm-6 9a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H5Zm1.5 3H6v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H11Zm1.5 3H12v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 1 0 0 2v4a1 1 0 1 0 2 0v-4a1 1 0 1 0 0-2h-2Z"
                    clip-rule="evenodd"
                  />
                </svg>
                ProjectPresentation.ppt
              </div>
            </th>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <span>47 Pages</span>
              <span>&#x2025;</span>
              <span>5 MB</span>
              <span>&#x2025;</span>
              <span>PPT</span>
            </td>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <div class="mr-3 flex items-center font-medium text-gray-900 dark:text-white">
                <img src="http://krizzma.com:8813/images/users/avatar-3.png" alt="User avatar" class="mr-3 h-8 w-auto rounded-full" />
                Micheal Gough
              </div>
            </td>
            <td class="max-w-48 whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">3 days ago</td>
            <td class="flex items-center justify-end px-4 py-3 sm:px-6">
              <button
                id="file-4-dropdown-button"
                type="button"
                data-dropdown-toggle="file-4-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="file-4-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="file-4-dropdown-button">
                  <li>
                    <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13 11.1V4a1 1 0 1 0-2 0v7.1L8.8 8.4a1 1 0 1 0-1.6 1.2l4 5a1 1 0 0 0 1.6 0l4-5a1 1 0 1 0-1.6-1.2L13 11Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M9.7 15.9 7.4 13H5a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.4l-2.3 2.9a3 3 0 0 1-4.6 0Zm7.3.1a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd" />
                      </svg>
                      Download
                    </button>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="archiveFileModalButton"
                      data-modal-target="archiveFileModal"
                      data-modal-toggle="archiveFileModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        <path d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                      </svg>
                      Archive
                    </button>
                  </li>
                </ul>
                <div class="p-2">
                  <button
                    type="button"
                    id="deleteFileButton4"
                    data-modal-target="deleteFileModal"
                    data-modal-toggle="deleteFileModal"
                    class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                  >
                    <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
            </td>
          </tr>
          <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">
              <div class="flex items-center">
                <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M9 7V2.2a2 2 0 0 0-.5.4l-4 3.9a2 2 0 0 0-.3.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm-2 4a2 2 0 0 0-2 2v2c0 1.1.9 2 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H9Zm0 2h2v2H9v-2Zm8-.6a1 1 0 0 0-1.7-.7L14 13a1 1 0 0 0-.3.8v.7c0 .3.1.6.4.8l1.2 1a1 1 0 0 0 1.7-.8v-3Z"
                    clip-rule="evenodd"
                  />
                </svg>
                HomepageVideo.mp4
              </div>
            </th>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <span>123 MB</span>
              <span>&#x2025;</span>
              <span>MP4</span>
            </td>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <div class="mr-3 flex items-center font-medium text-gray-900 dark:text-white">
                <img src="http://krizzma.com:8813/images/users/avatar-4.png" alt="User avatar" class="mr-3 h-8 w-auto rounded-full" />
                Joseph McFall
              </div>
            </td>
            <td class="max-w-48 whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">3 days ago</td>
            <td class="flex items-center justify-end px-4 py-3 sm:px-6">
              <button
                id="file-5-dropdown-button"
                type="button"
                data-dropdown-toggle="file-5-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="file-5-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="file-5-dropdown-button">
                  <li>
                    <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13 11.1V4a1 1 0 1 0-2 0v7.1L8.8 8.4a1 1 0 1 0-1.6 1.2l4 5a1 1 0 0 0 1.6 0l4-5a1 1 0 1 0-1.6-1.2L13 11Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M9.7 15.9 7.4 13H5a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.4l-2.3 2.9a3 3 0 0 1-4.6 0Zm7.3.1a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd" />
                      </svg>
                      Download
                    </button>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="archiveFileModalButton"
                      data-modal-target="archiveFileModal"
                      data-modal-toggle="archiveFileModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        <path d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                      </svg>
                      Archive
                    </button>
                  </li>
                </ul>
                <div class="p-2">
                  <button
                    type="button"
                    id="deleteFileButton5"
                    data-modal-target="deleteFileModal"
                    data-modal-toggle="deleteFileModal"
                    class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                  >
                    <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
            </td>
          </tr>
          <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">
              <div class="flex items-center">
                <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7c0 1.1.9 2 2 2 0 1.1.9 2 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm1 8.8A2.3 2.3 0 0 0 9.6 13a2.3 2.3 0 0 0 2.1 2.5h.7a.3.3 0 0 1 .2.4l-.4.1h-1a1 1 0 1 0 0 2h1c.5 0 1 0 1.4-.3a2 2 0 0 0 1-1.1 2.3 2.3 0 0 0-2.2-3l-.5-.1a.3.3 0 0 1-.3-.4.3.3 0 0 1 .4-.3h1a1 1 0 1 0 0-2h-1Zm8 1.5a1 1 0 1 0-2-.6l-.5 1.7-.5-1.7a1 1 0 0 0-2 .6l1.5 4.8a1 1 0 0 0 1.9 0l1.6-4.8Zm-13.8.9.4-.2h1a1 1 0 1 0 0-2h-1A2.6 2.6 0 0 0 4 13.6v1.8A2.6 2.6 0 0 0 6.6 18h1a1 1 0 1 0 0-2h-1a.6.6 0 0 1-.6-.6v-1.8c0-.1 0-.3.2-.4Z"
                    clip-rule="evenodd"
                  />
                </svg>
                ProjectData.csv
              </div>
            </th>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <span>1 MB</span>
              <span>&#x2025;</span>
              <span>CSV</span>
            </td>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <div class="mr-3 flex items-center font-medium text-gray-900 dark:text-white">
                <img src="http://krizzma.com:8813/images/users/avatar-5.png" alt="User avatar" class="mr-3 h-8 w-auto rounded-full" />
                Robert Brown
              </div>
            </td>
            <td class="max-w-48 whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">3 days ago</td>
            <td class="flex items-center justify-end px-4 py-3 sm:px-6">
              <button
                id="file-6-dropdown-button"
                type="button"
                data-dropdown-toggle="file-6-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="file-6-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="file-6-dropdown-button">
                  <li>
                    <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13 11.1V4a1 1 0 1 0-2 0v7.1L8.8 8.4a1 1 0 1 0-1.6 1.2l4 5a1 1 0 0 0 1.6 0l4-5a1 1 0 1 0-1.6-1.2L13 11Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M9.7 15.9 7.4 13H5a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.4l-2.3 2.9a3 3 0 0 1-4.6 0Zm7.3.1a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd" />
                      </svg>
                      Download
                    </button>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="archiveFileModalButton"
                      data-modal-target="archiveFileModal"
                      data-modal-toggle="archiveFileModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        <path d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                      </svg>
                      Archive
                    </button>
                  </li>
                </ul>
                <div class="p-2">
                  <button
                    type="button"
                    id="deleteFileButton6"
                    data-modal-target="deleteFileModal"
                    data-modal-toggle="deleteFileModal"
                    class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                  >
                    <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
            </td>
          </tr>
          <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">
              <div class="flex items-center">
                <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M9 7V2.2a2 2 0 0 0-.5.4l-4 3.9a2 2 0 0 0-.3.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm2.3 0A1 1 0 0 0 12 8v5.3a4 4 0 0 0-1.5-.3C8.8 13 7 14.1 7 16s1.8 3 3.5 3 3.5-1.1 3.5-3V9.8a3 3 0 0 1 1 2.2 1 1 0 1 0 2 0 5 5 0 0 0-1.9-3.9 6.4 6.4 0 0 0-1.8-1ZM9 16c0-.4.5-1 1.5-1s1.5.6 1.5 1-.5 1-1.5 1S9 16.4 9 16Z"
                    clip-rule="evenodd"
                  />
                </svg>
                FlowbiteMusic.mp4
              </div>
            </th>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <span>18 MB</span>
              <span>&#x2025;</span>
              <span>MP4</span>
            </td>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <div class="mr-3 flex items-center font-medium text-gray-900 dark:text-white">
                <img src="http://krizzma.com:8813/images/users/avatar-6.png" alt="User avatar" class="mr-3 h-8 w-auto rounded-full" />
                Karen Nelson
              </div>
            </td>
            <td class="max-w-48 whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">6 days ago</td>
            <td class="flex items-center justify-end px-4 py-3 sm:px-6">
              <button
                id="file-7-dropdown-button"
                type="button"
                data-dropdown-toggle="file-7-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="file-7-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="file-7-dropdown-button">
                  <li>
                    <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13 11.1V4a1 1 0 1 0-2 0v7.1L8.8 8.4a1 1 0 1 0-1.6 1.2l4 5a1 1 0 0 0 1.6 0l4-5a1 1 0 1 0-1.6-1.2L13 11Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M9.7 15.9 7.4 13H5a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.4l-2.3 2.9a3 3 0 0 1-4.6 0Zm7.3.1a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd" />
                      </svg>
                      Download
                    </button>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="archiveFileModalButton"
                      data-modal-target="archiveFileModal"
                      data-modal-toggle="archiveFileModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        <path d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                      </svg>
                      Archive
                    </button>
                  </li>
                </ul>
                <div class="p-2">
                  <button
                    type="button"
                    id="deleteFileButton7"
                    data-modal-target="deleteFileModal"
                    data-modal-toggle="deleteFileModal"
                    class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                  >
                    <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
            </td>
          </tr>
          <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">
              <div class="flex items-center">
                <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm3 2h2v2h-2v2h2v2h-2v2h2v2h-2v2h2v2h-2v2h-2v-2h2v-2h-2v-2h2v-2h-2v-2h2V8h-2V6h2V4Z"
                    clip-rule="evenodd"
                  />
                </svg>
                PortfolioImages.zip
              </div>
            </th>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <span>50 Files</span>
              <span>&#x2025;</span>
              <span>37 MB</span>
              <span>&#x2025;</span>
              <span>ZIP</span>
            </td>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <div class="mr-3 flex items-center font-medium text-gray-900 dark:text-white">
                <img src="http://krizzma.com:8813/images/users/avatar-7.png" alt="User avatar" class="mr-3 h-8 w-auto rounded-full" />
                Helene Engels
              </div>
            </td>
            <td class="max-w-48 whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">1 week ago</td>
            <td class="flex items-center justify-end px-4 py-3 sm:px-6">
              <button
                id="file-8-dropdown-button"
                type="button"
                data-dropdown-toggle="file-8-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="file-8-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="file-8-dropdown-button">
                  <li>
                    <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13 11.1V4a1 1 0 1 0-2 0v7.1L8.8 8.4a1 1 0 1 0-1.6 1.2l4 5a1 1 0 0 0 1.6 0l4-5a1 1 0 1 0-1.6-1.2L13 11Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M9.7 15.9 7.4 13H5a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.4l-2.3 2.9a3 3 0 0 1-4.6 0Zm7.3.1a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd" />
                      </svg>
                      Download
                    </button>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="archiveFileModalButton"
                      data-modal-target="archiveFileModal"
                      data-modal-toggle="archiveFileModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        <path d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                      </svg>
                      Archive
                    </button>
                  </li>
                </ul>
                <div class="p-2">
                  <button
                    type="button"
                    id="deleteFileButton8"
                    data-modal-target="deleteFileModal"
                    data-modal-toggle="deleteFileModal"
                    class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                  >
                    <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
            </td>
          </tr>
          <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">
              <div class="flex items-center">
                <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7c0 1.1.9 2 2 2 0 1.1.9 2 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm-6 9a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H5Zm1.5 3H6v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 0 0-1 1v5c0 .6.4 1 1 1h1.4a2.6 2.6 0 0 0 2.6-2.6v-1.8a2.6 2.6 0 0 0-2.6-2.6H11Zm1 5v-3h.4a.6.6 0 0 1 .6.6v1.8a.6.6 0 0 1-.6.6H12Zm5-5a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1v-1h1a1 1 0 1 0 0-2h-2Z"
                    clip-rule="evenodd"
                  />
                </svg>
                Flowbite Pro Terms & Conditions
              </div>
            </th>
            <td class="px-4 py-3 sm:px-6">
              <span>12 pages</span>
              <span>&#x2025;</span>
              <span>18 MB</span>
              <span>&#x2025;</span>
              <span>PDF</span>
            </td>
            <td class="px-4 py-3 sm:px-6">
              <div class="mr-3 flex items-center font-medium text-gray-900 dark:text-white">
                <img src="http://krizzma.com:8813/images/users/avatar-9.png" alt="User avatar" class="mr-3 h-8 w-auto rounded-full" />
                Neils Sims
              </div>
            </td>
            <td class="max-w-48 whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">1 week ago</td>
            <td class="flex items-center justify-end px-4 py-3 sm:px-6">
              <button
                id="file-9-dropdown-button"
                type="button"
                data-dropdown-toggle="file-9-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="file-9-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="file-9-dropdown-button">
                  <li>
                    <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13 11.1V4a1 1 0 1 0-2 0v7.1L8.8 8.4a1 1 0 1 0-1.6 1.2l4 5a1 1 0 0 0 1.6 0l4-5a1 1 0 1 0-1.6-1.2L13 11Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M9.7 15.9 7.4 13H5a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.4l-2.3 2.9a3 3 0 0 1-4.6 0Zm7.3.1a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd" />
                      </svg>
                      Download
                    </button>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="archiveFileModalButton"
                      data-modal-target="archiveFileModal"
                      data-modal-toggle="archiveFileModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        <path d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                      </svg>
                      Archive
                    </button>
                  </li>
                </ul>
                <div class="p-2">
                  <button
                    type="button"
                    id="deleteFileButton9"
                    data-modal-target="deleteFileModal"
                    data-modal-toggle="deleteFileModal"
                    class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                  >
                    <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
            </td>
          </tr>
          <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">
              <div class="flex items-center">
                <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm.4 9.6a1 1 0 0 0-1.8 0l-2.5 6A1 1 0 0 0 8 19h8a1 1 0 0 0 .9-1.4l-2-4a1 1 0 0 0-1.7-.2l-.5.7-1.3-2.5ZM13 9.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                    clip-rule="evenodd"
                  />
                </svg>
                HeroImage.jpg
              </div>
            </th>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <span>5.6 MB</span>
              <span>&#x2025;</span>
              <span>JPG</span>
            </td>
            <td class="text-nowrap px-4 py-3 sm:px-6">
              <div class="mr-3 flex items-center font-medium text-gray-900 dark:text-white">
                <img src="http://krizzma.com:8813/images/users/avatar-1.png" alt="User avatar" class="mr-3 h-8 w-auto rounded-full" />
                Bonnie Green
              </div>
            </td>
            <td class="max-w-48 whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white sm:px-6">1 week ago</td>
            <td class="flex items-center justify-end px-4 py-3 sm:px-6">
              <button
                id="file-10-dropdown-button"
                type="button"
                data-dropdown-toggle="file-10-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="file-10-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="file-10-dropdown-button">
                  <li>
                    <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13 11.1V4a1 1 0 1 0-2 0v7.1L8.8 8.4a1 1 0 1 0-1.6 1.2l4 5a1 1 0 0 0 1.6 0l4-5a1 1 0 1 0-1.6-1.2L13 11Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M9.7 15.9 7.4 13H5a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.4l-2.3 2.9a3 3 0 0 1-4.6 0Zm7.3.1a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd" />
                      </svg>
                      Download
                    </button>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="archiveFileModalButton"
                      data-modal-target="archiveFileModal"
                      data-modal-toggle="archiveFileModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        <path d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                      </svg>
                      Archive
                    </button>
                  </li>
                </ul>
                <div class="p-2">
                  <button
                    type="button"
                    id="deleteFileButton10"
                    data-modal-target="deleteFileModal"
                    data-modal-toggle="deleteFileModal"
                    class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                  >
                    <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        fill-rule="evenodd"
                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <nav class="flex flex-col items-start justify-between space-y-3 p-4 sm:p-6 md:flex-row md:items-center md:space-y-0" aria-label="Table navigation">
      <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
        Showing
        <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
        of
        <span class="font-semibold text-gray-900 dark:text-white">78</span>
      </span>
      <ul class="inline-flex items-stretch -space-x-px">
        <li>
          <a
            href="#"
            class="ml-0 flex h-full items-center justify-center rounded-l-lg border border-gray-300 bg-white px-3 py-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
          >
            <span class="sr-only">Previous</span>
            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
            </svg>
          </a>
        </li>
        <li>
          <a
            href="#"
            class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
            >1</a
          >
        </li>
        <li>
          <a
            href="#"
            class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
            >2</a
          >
        </li>
        <li>
          <a
            href="#"
            aria-current="page"
            class="z-10 flex items-center justify-center border border-primary-300 bg-primary-50 px-3 py-2 text-sm leading-tight text-primary-600 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"
            >3</a
          >
        </li>
        <li>
          <a
            href="#"
            class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
            >...</a
          >
        </li>
        <li>
          <a
            href="#"
            class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
            >7</a
          >
        </li>
        <li>
          <a
            href="#"
            class="flex h-full items-center justify-center rounded-r-lg border border-gray-300 bg-white px-3 py-1.5 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
          >
            <span class="sr-only">Next</span>
            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
            </svg>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>

<!-- Add file modal -->
<div id="uploadFileModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
  <div class="relative max-h-full w-full max-w-md p-4">
    <!-- Modal content -->
    <div class="relative rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:p-5">
      <h3 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">File upload</h3>
      <label for="dropzone-file" class="sr-only">Product Images</label>
      <div class="flex w-full items-center justify-center">
        <label
          for="dropzone-file"
          class="flex h-48 w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:border-gray-500 dark:hover:bg-gray-600"
        >
          <div class="flex flex-col items-center justify-center pb-6 pt-5">
            <svg class="mb-3 h-10 w-10 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4c0 .6.4 1 1 1h14c.6 0 1-.4 1-1v-4c0-.6-.4-1-1-1h-2M8 9l4-5 4 5m1 8h0" />
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
          </div>
          <input id="dropzone-file" type="file" class="hidden" />
        </label>
      </div>
      <div class="mt-4 flex items-center justify-between sm:mt-6">
        <div class="flex items-center space-x-3">
          <svg class="h-6 w-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
              fill-rule="evenodd"
              d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm3 2h2v2h-2v2h2v2h-2v2h2v2h-2v2h2v2h-2v2h-2v-2h2v-2h-2v-2h2v-2h-2v-2h2V8h-2V6h2V4Z"
              clip-rule="evenodd"
            />
          </svg>
          <div>
            <h4 class="text-sm font-medium text-gray-900 dark:text-white">flowbite-pro-v.2.2.0.zip</h4>
            <p class="text-sm text-gray-500 dark:text-gray-400">32 MB</p>
          </div>
        </div>
        <svg class="h-5 w-5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm13.7-1.3a1 1 0 0 0-1.4-1.4L11 12.6l-1.8-1.8a1 1 0 0 0-1.4 1.4l2.5 2.5c.4.4 1 .4 1.4 0l4-4Z" clip-rule="evenodd" />
        </svg>
      </div>
      <div class="mt-4 flex items-center justify-between">
        <div class="flex items-center space-x-3">
          <svg class="h-6 w-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Z" clip-rule="evenodd" />
          </svg>
          <div>
            <h4 class="text-sm font-medium text-gray-900 dark:text-white">General Information.txt</h4>
            <p class="text-sm text-gray-500 dark:text-gray-400">41,5 MB</p>
          </div>
        </div>
        <div class="flex items-center space-x-4">
          <span class="text-sm font-medium text-gray-500 dark:text-gray-400">75%</span>
          <a href="#" data-tooltip-target="tooltip-cancel-1" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path
                fill-rule="evenodd"
                d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
          <div id="tooltip-cancel-1" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
            Cancel
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
        </div>
      </div>
      <div class="mt-2 h-2 w-full rounded-full bg-gray-200 dark:bg-gray-700">
        <div class="h-2 rounded-full bg-primary-700 dark:bg-primary-600" style="width: 75%"></div>
      </div>
      <div class="mt-4 flex items-center justify-between">
        <div class="flex items-center space-x-3">
          <svg class="h-6 w-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path
              fill-rule="evenodd"
              d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm.4 9.6a1 1 0 0 0-1.8 0l-2.5 6A1 1 0 0 0 8 19h8a1 1 0 0 0 .9-1.4l-2-4a1 1 0 0 0-1.7-.2l-.5.7-1.3-2.5ZM13 9.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
              clip-rule="evenodd"
            />
          </svg>
          <div>
            <h4 class="text-sm font-medium text-gray-900 dark:text-white">peoples-at-office.jpg</h4>
            <p class="text-sm text-gray-500 dark:text-gray-400">2 MB</p>
          </div>
        </div>
        <div class="flex items-center space-x-4">
          <span class="text-sm font-medium text-gray-500 dark:text-gray-400">36%</span>
          <a href="#" data-tooltip-target="tooltip-cancel-2" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path
                fill-rule="evenodd"
                d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
          <div id="tooltip-cancel-2" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-xs transition-opacity duration-300 dark:bg-gray-700">
            Cancel
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
        </div>
      </div>
      <div class="mt-2 h-2 w-full rounded-full bg-gray-200 dark:bg-gray-700">
        <div class="h-2 rounded-full bg-primary-700 dark:bg-primary-600" style="width: 36%"></div>
      </div>
      <div class="mt-4 flex items-center space-x-4 sm:mt-6">
        <button
          data-modal-toggle="uploadFileModal"
          type="button"
          class="w-full rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto"
        >
          Cancel
        </button>
        <button
          type="submit"
          class="w-full rounded-lg bg-primary-700 px-3 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto"
        >
          Upload files
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Delete modal -->
<div id="deleteFileModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
  <div class="relative max-h-full w-full max-w-md p-4">
    <!-- Modal content -->
    <div class="relative rounded-lg bg-white p-4 text-center shadow-sm dark:bg-gray-800 sm:p-5">
      <button
        type="button"
        class="absolute right-2.5 top-2.5 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
        data-modal-toggle="deleteFileModal"
      >
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6m0 12L6 6" />
        </svg>
        <span class="sr-only">Close modal</span>
      </button>
      <svg class="mx-auto mb-3.5 h-10 w-10 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path
          fill-rule="evenodd"
          d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
          clip-rule="evenodd"
        />
      </svg>
      <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this file?</p>
      <div class="flex items-center justify-center space-x-4">
        <button
          data-modal-toggle="deleteFileModal"
          type="button"
          class="rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
        >
          No, cancel
        </button>
        <button type="submit" class="rounded-lg bg-red-700 px-3 py-2 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
          Yes, I'm sure
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Delete all projects modal -->
<div id="deleteAllFilesModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
  <div class="relative max-h-full w-full max-w-md p-4">
    <!-- Modal content -->
    <div class="relative rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:p-5">
      <button
        type="button"
        class="absolute right-2.5 top-2.5 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
        data-modal-toggle="deleteAllFilesModal"
      >
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
        </svg>
        <span class="sr-only">Close modal</span>
      </button>
      <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Are you sure?</h3>
      <p class="mb-4 font-light text-gray-500 dark:text-gray-400">You are about to delete the following 3 files, this cannot be undone:</p>
      <ul role="list" class="mb-4 space-y-2 text-left text-gray-500 dark:text-gray-400 sm:mb-5">
        <li class="flex items-center space-x-1">
          <svg class="h-4 w-4 shrink-0 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z" clip-rule="evenodd" />
          </svg>
          <span>HeroImage.jpg</span>
        </li>
        <li class="flex items-center space-x-1">
          <svg class="h-4 w-4 shrink-0 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z" clip-rule="evenodd" />
          </svg>
          <span>Flowbite-Terms-&-Conditions.pdf</span>
        </li>
        <li class="flex items-center space-x-1">
          <svg class="h-4 w-4 shrink-0 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z" clip-rule="evenodd" />
          </svg>
          <span>FlowbiteMusic.mp3</span>
        </li>
      </ul>
      <div class="flex items-center space-x-4">
        <button
          data-modal-toggle="deleteAllFilesModal"
          type="button"
          class="rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
        >
          No, cancel
        </button>
        <button
          type="submit"
          class="inline-flex items-center rounded-lg bg-red-600 px-3 py-2 text-center text-sm font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900"
        >
          <svg aria-hidden="true" class="-ml-0.5 mr-1.5 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
              fill-rule="evenodd"
              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
          Yes, delete
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Archive file modal -->
<div id="archiveFileModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
  <div class="relative max-h-full w-full max-w-md p-4">
    <!-- Modal content -->
    <div class="relative rounded-lg bg-white p-4 text-center shadow-sm dark:bg-gray-800 sm:p-5">
      <button
        type="button"
        class="absolute right-2.5 top-2.5 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
        data-modal-toggle="archiveFileModal"
      >
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
        </svg>
        <span class="sr-only">Close modal</span>
      </button>
      <svg class="mx-auto mb-3.5 h-10 w-10 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
        <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
      </svg>
      <p class="mb-4 text-gray-500 dark:text-gray-400">Do you want to archive this file?</p>
      <div class="flex items-center justify-center space-x-4">
        <button
          data-modal-toggle="archiveFileModal"
          type="button"
          class="rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
        >
          No, cancel
        </button>
        <button
          type="button"
          class="flex items-center rounded-lg bg-primary-700 px-3 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
        >
          <svg class="-ml-0.5 mr-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
          </svg>
          Archive this file
        </button>
      </div>
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
