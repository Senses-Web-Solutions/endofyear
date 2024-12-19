<!DOCTYPE html>
<html class="h-full bg-white" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teamleaf Website</title>

    <script src="//unpkg.com/alpinejs" defer=""></script>

    <link href="/production/assets/css/app.css" rel="stylesheet">
    <script type="text/javascript" src="/production/assets/js/app2.js"></script>

    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #18181b;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #71717a;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #71717a;
        }
    </style>

    @vite('resources/css/app.css')

    <script src="https://unpkg.com/@rive-app/canvas@2.9.1"></script>
</head>


<body class="h-full" style="background-image: linear-gradient(rgb(237, 242, 247) 0%, rgba(237, 242, 247, 0) 100%);">

    <div class="">

        <header class="absolute top-0 z-50 w-full " x-data="{ menu: null }">
            <nav class="items-left z-50 mx-auto flex max-w-7xl px-6 lg:px-8" aria-label="Global">
                <div class="flex py-6 pr-2 lg:flex">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span class="sr-only">Teamleaf</span>
                        <img class="h-8 w-auto" src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logo.svg"
                            alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg>
                    </button>
                </div>
                <div class="z-50 hidden lg:flex lg:gap-x-8">
                    <div class="relative py-7">
                        <a href="/" class="">
                            <button type="button"
                                class="flex items-center gap-x-1 align-middle text-sm font-semibold leading-6 text-gray-900"
                                aria-expanded="false">
                                Teamleaf
                            </button>
                        </a>
                    </div>

                    <div class="relative py-7"  @mouseleave="menu = null">
                        <a href="/contact" class="text-sm font-normal leading-6 text-gray-900">
                            <button type="button"
                                class="flex items-center gap-x-1 text-sm font-normal leading-6 text-gray-900"
                                aria-expanded="false">
                                Contact Us
                            </button>
                        </a>
                    </div>

                    <div class="relative py-7"  @mouseleave="menu = null">
                        <a href="/scheduler" class="text-sm font-normal leading-6 text-gray-900">
                            <button type="button"
                                class="flex items-center gap-x-1 text-sm font-normal leading-6 text-gray-900"
                                aria-expanded="false">
                                Scheduler
                            </button>
                        </a>
                    </div>

                    <div class="relative py-7"  @mouseleave="menu = null">
                        <a href="/map-scheduler" class="text-sm font-normal leading-6 text-gray-900">
                            <button type="button"
                                class="flex items-center gap-x-1 text-sm font-normal leading-6 text-gray-900"
                                aria-expanded="false">
                                Map Scheduler
                            </button>
                        </a>
                    </div>
                </div>

                <div class="absolute inset-x-0 top-0 z-50 mx-4 mt-[4.5rem] rounded-3xl bg-white shadow-lg ring-1 ring-gray-200/50"
                    x-show="menu == 'features'" @mouseover="menu = 'features'" @mouseleave="menu = null"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-1" style="display: none;">
                    <div
                        class="mx-auto grid max-w-7xl grid-cols-1 gap-2 px-6 py-6 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-0 sm:py-10 lg:grid-cols-4 lg:gap-2 lg:px-8 xl:gap-4">
                        <div
                            class="group relative -mx-3 flex gap-6 rounded-lg p-3 text-sm leading-6 hover:bg-gray-50 sm:flex-col sm:p-6">

                            <div>
                                <a href="/works-management/features" class="font-semibold text-gray-900">
                                    Works Management
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Get a better understanding of where your traffic is
                                    coming from</p>
                            </div>
                        </div>
                        <div
                            class="group relative -mx-3 flex gap-6 rounded-lg p-3 text-sm leading-6 hover:bg-gray-50 sm:flex-col sm:p-6">

                            <div>
                                <a href="/workforce-management/features" class="font-semibold text-gray-900">
                                    Workforce Management
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Speak directly to your customers with our engagement tool
                                </p>
                            </div>
                        </div>
                        <div
                            class="group relative -mx-3 flex gap-6 rounded-lg p-3 text-sm leading-6 hover:bg-gray-50 sm:flex-col sm:p-6">

                            <div>
                                <a href="/fleet-management/features" class="font-semibold text-gray-900">
                                    Fleet Management
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Your customers' data will be safe and secure</p>
                            </div>
                        </div>
                        <div
                            class="group relative -mx-3 flex gap-6 rounded-lg p-3 text-sm leading-6 hover:bg-gray-50 sm:flex-col sm:p-6">

                            <div>
                                <a href="/human-resources/features" class="font-semibold text-gray-900">
                                    Human Resources
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Connect with third-party tools that you're already using
                                </p>
                            </div>
                        </div>
                        <div
                            class="group relative -mx-3 flex gap-6 rounded-lg p-3 text-sm leading-6 hover:bg-gray-50 sm:flex-col sm:p-6">

                            <div>
                                <a href="/asset-management/features" class="font-semibold text-gray-900">
                                    Asset Management
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Get a better understanding of where your traffic is
                                    coming from</p>
                            </div>
                        </div>
                        <div
                            class="group relative -mx-3 flex gap-6 rounded-lg p-3 text-sm leading-6 hover:bg-gray-50 sm:flex-col sm:p-6">

                            <div>
                                <a href="/hseq/features" class="font-semibold text-gray-900">
                                    HSEQ
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Speak directly to your customers with our engagement tool
                                </p>
                            </div>
                        </div>
                        <div
                            class="group relative -mx-3 flex gap-6 rounded-lg p-3 text-sm leading-6 hover:bg-gray-50 sm:flex-col sm:p-6">

                            <div>
                                <a href="/finance/features" class="font-semibold text-gray-900">
                                    Finance &amp; Timesheets
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Your customers' data will be safe and secure</p>
                            </div>
                        </div>
                        <div
                            class="group relative -mx-3 flex gap-6 rounded-lg p-3 text-sm leading-6 hover:bg-gray-50 sm:flex-col sm:p-6">

                            <div>
                                <a href="#" class="font-semibold text-gray-900">
                                    Stock and Purchasing
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">A full suite of tools for managing your stock and
                                    purchasing<br> (Page coming soon)</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-bl-3xl rounded-br-3xl bg-gray-100">
                        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <div
                                class="grid grid-cols-1 divide-y divide-gray-900/5 sm:grid-cols-3 sm:divide-x sm:divide-y-0 sm:border-x sm:border-gray-900/5">


                            </div>
                        </div>
                    </div>
                </div>





                <div class="z-50 hidden lg:flex lg:flex-1 lg:justify-end lg:gap-x-8">

                    <div class="relative py-7"  @mouseleave="menu = null">
                        <a href="/ai" class="text-sm font-normal leading-6 text-gray-900">
                            <button type="button"
                                class="font-semiboldal flex items-center gap-x-1 bg-gradient-to-br from-indigo-900 to-purple-500 bg-clip-text text-sm font-bold leading-6 tracking-tight text-gray-900 text-transparent"
                                aria-expanded="false">
                                Teamleaf AI
                            </button>
                        </a>
                    </div>


                    <div class="relative z-50 py-7" @mouseover="menu = 'dev'" @mouseleave="menu = null">
                        <button type="button"
                            class="flex items-center gap-x-1 text-sm font-normal leading-6 text-gray-900"
                            aria-expanded="false">
                            Developers
                            <svg class="h-4 w-4 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <div class="absolute top-full z-50 -mt-2 w-96 rounded-3xl bg-white p-4 shadow-lg ring-1 ring-gray-900/5"
                            x-show="menu == 'dev'" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1" style="display: none;">

                            <div class="relative rounded-lg p-2 hover:bg-gray-50">
                                <a href="/" class="block text-sm font-normal leading-6 text-gray-900">
                                    Home
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                            <div class="relative rounded-lg p-2 hover:bg-gray-50">
                                <a href="/category" class="block text-sm font-normal leading-6 text-gray-900">
                                    Category
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                            <div class="relative rounded-lg p-2 hover:bg-gray-50">
                                <a href="/alternative" class="block text-sm font-normal leading-6 text-gray-900">
                                    Alternative
                                    <span class="absolute inset-0"></span>
                                </a>

                            </div>

                            <div class="relative rounded-lg p-2 hover:bg-gray-50">
                                <a href="/ai" class="block text-sm font-normal leading-6 text-gray-900">
                                    AI
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                            <div class="relative rounded-lg p-2 hover:bg-gray-50">
                                <a href="/kitchensink" class="block text-sm font-normal leading-6 text-gray-900">
                                    Kitchen Sink
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>



                            <div class="relative rounded-lg p-4 hover:bg-gray-50">
                                <a href="/" class="block text-sm font-semibold leading-6 text-gray-900">
                                    API
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Learn more about our company values and
                                    mission to empower others</p>
                            </div>
                            <div class="relative rounded-lg p-4 hover:bg-gray-50">
                                <a href="/category" class="block text-sm font-semibold leading-6 text-gray-900">
                                    Integrations
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Looking for you next career
                                    opportunity? See all of our open positions</p>
                            </div>
                            <div class="relative rounded-lg p-4 hover:bg-gray-50">
                                <a href="/alternative" class="block text-sm font-semibold leading-6 text-gray-900">
                                    Tracking
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Get in touch with our dedicated support
                                    team or reach out on our community forums</p>
                            </div>
                            <div class="relative rounded-lg p-4 hover:bg-gray-50">
                                <a href="#" class="block text-sm font-semibold leading-6 text-gray-900">
                                    Change Log
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Read our latest announcements and get
                                    perspectives from our team</p>
                            </div>
                        </div>
                    </div>


                </div>
            </nav>







            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 flex w-full flex-col justify-between overflow-y-auto bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your Company</span>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600"
                                    alt="">
                            </a>
                            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10">
                                <div class="space-y-2 py-6">
                                    <a href="#"
                                        class="group -mx-3 flex items-center gap-x-6 rounded-lg p-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                        <div
                                            class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                                            </svg>
                                        </div>
                                        Analytics
                                    </a>
                                    <a href="#"
                                        class="group -mx-3 flex items-center gap-x-6 rounded-lg p-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                        <div
                                            class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59">
                                                </path>
                                            </svg>
                                        </div>
                                        Engagement
                                    </a>
                                    <a href="#"
                                        class="group -mx-3 flex items-center gap-x-6 rounded-lg p-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                        <div
                                            class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33">
                                                </path>
                                            </svg>
                                        </div>
                                        Security
                                    </a>
                                    <a href="#"
                                        class="group -mx-3 flex items-center gap-x-6 rounded-lg p-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                        <div
                                            class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z">
                                                </path>
                                            </svg>
                                        </div>
                                        Integrations
                                    </a>
                                    <a href="#"
                                        class="group -mx-3 flex items-center gap-x-6 rounded-lg p-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                        <div
                                            class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99">
                                                </path>
                                            </svg>
                                        </div>
                                        Automations
                                    </a>
                                </div>
                                <div class="space-y-2 py-6">
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>

                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">About
                                        us</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Careers</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Support</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Blog</a>
                                </div>
                                <div class="py-6">
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                        in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sticky bottom-0 grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50 text-center">
                        <a href="#"
                            class="p-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-100">Watch
                            demo</a>
                        <a href="#"
                            class="p-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-100">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <footer class="bg-white">
            <div class="mx-auto max-w-5xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
                <nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
                    <div class="pb-6">
                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">About</a>
                    </div>
                    <div class="pb-6">
                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Blog</a>
                    </div>
                    <div class="pb-6">
                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Jobs</a>
                    </div>
                    <div class="pb-6">
                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Press</a>
                    </div>
                    <div class="pb-6">
                        <a href="#"
                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Accessibility</a>
                    </div>
                    <div class="pb-6">
                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Partners</a>
                    </div>
                </nav>
                <div class="mt-10 flex justify-center space-x-10">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">X</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z">
                            </path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">YouTube</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <p class="mt-10 text-center text-xs leading-5 text-gray-500">© 2020 Your Company, Inc. All rights
                    reserved.</p>
            </div>
        </footer>
    </div>
</body>

</html>
