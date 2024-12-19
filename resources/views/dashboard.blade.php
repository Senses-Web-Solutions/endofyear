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
                        <img class="h-8 w-auto" src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logo.svg" alt="">
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


                    <div class="relative py-7 pl-6" @mouseover="menu = 'features'" @mouseleave="menu = null">
                        <button type="button"
                            class="flex items-center gap-x-1 text-sm font-normal leading-6 text-gray-900"
                            aria-expanded="false">
                            Features
                            <svg class="h-4 w-4 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="relative py-7" @mouseover="menu = 'case_studies'" @mouseleave="menu = null">
                        <a href="/app/features" class="text-sm font-normal leading-6 text-gray-900">
                            <button type="button"
                                class="flex items-center gap-x-1 text-sm font-normal leading-6 text-gray-900"
                                aria-expanded="false">
                                The App
                            </button>
                        </a>
                    </div>


                    <div class="relative py-7" @mouseover="menu = 'about_us'" @mouseleave="menu = null">
                        <button type="button"
                            class="flex items-center gap-x-1 text-sm font-normal leading-6 text-gray-900"
                            aria-expanded="false">
                            About Us
                            <svg class="h-4 w-4 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <div class="absolute top-full z-50 -mt-2 w-96 rounded-3xl bg-white p-4 shadow-lg ring-1 ring-gray-900/5"
                            x-show="menu == 'about_us'" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1" style="display: none;">
                            <div class="relative rounded-lg p-4 hover:bg-gray-50">
                                <a href="#" class="block text-sm font-semibold leading-6 text-gray-900">
                                    About us
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Learn more about our company values and
                                    mission to empower others</p>
                            </div>
                            <div class="relative rounded-lg p-4 hover:bg-gray-50">
                                <a href="#" class="block text-sm font-semibold leading-6 text-gray-900">
                                    Careers
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Looking for you next career opportunity?
                                    See all of our open positions</p>
                            </div>
                            <div class="relative rounded-lg p-4 hover:bg-gray-50">
                                <a href="#" class="block text-sm font-semibold leading-6 text-gray-900">
                                    Support
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Get in touch with our dedicated support
                                    team or reach out on our community forums</p>
                            </div>
                            <div class="relative rounded-lg p-4 hover:bg-gray-50">
                                <a href="#" class="block text-sm font-semibold leading-6 text-gray-900">
                                    Blog
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Read our latest announcements and get
                                    perspectives from our team</p>
                            </div>
                        </div>
                    </div>


                    <div class="relative py-7" @mouseover="menu = 'case_studies'" @mouseleave="menu = null">
                        <a href="/testimonials" class="text-sm font-normal leading-6 text-gray-900">
                            <button type="button"
                                class="flex items-center gap-x-1 text-sm font-normal leading-6 text-gray-900"
                                aria-expanded="false">
                                Case Studies

                            </button>
                        </a>
                    </div>

                    <div class="relative py-7" @mouseover="menu = 'case_studies'" @mouseleave="menu = null">
                        <a href="/news" class="text-sm font-normal leading-6 text-gray-900">
                            <button type="button"
                                class="flex items-center gap-x-1 text-sm font-normal leading-6 text-gray-900"
                                aria-expanded="false">
                                News
                            </button>
                        </a>
                    </div>

                    <div class="relative py-7" @mouseover="menu = 'case_studies'" @mouseleave="menu = null">
                        <a href="/prices" class="text-sm font-normal leading-6 text-gray-900">
                            <button type="button"
                                class="flex items-center gap-x-1 text-sm font-normal leading-6 text-gray-900"
                                aria-expanded="false">
                                Price Guide
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

                    <div class="relative py-7" @mouseover="menu = 'case_studies'" @mouseleave="menu = null">
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



        <div class="absolute h-full w-full background-gradient-one">
        </div>

        <div class="relative isolate pt-14">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-15 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="py-24 sm:py-24 lg:pb-16">
                <div class="mx-auto max-w-6xl px-6 lg:px-8">
                    <div class="mx-auto text-center">
                        <h1
                            class="text-4xl leading-none tracking-tight sm:text-6xl md:text-7xl/[1.07] bg-gradient-to-br from-zinc-800 to-fuchsia-950 bg-clip-text text-5xl/[1.07] font-semibold  text-transparent pb-4">
                            The future of <br>works management</h1>

                        <p
                            class="mt-2 pb-2 text-lg font-medium leading-snug bg-gradient-to-br from-slate-950 to-slate-600 bg-clip-text text-transparent">
                            Teamleaf sits at a piniciple of works management as a <br>complete solution for your
                            business.</p>

                        <div class="justify-center mt-6 flex items-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-gradient-to-br from-slate-950 to-slate-800 px-3.5 py-2.5 text-sm font-normal text-white shadow-sm ">Get
                                started</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-slate-950">Learn more <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>
                    <div class="mt-16 flow-root sm:mt-16">
                        <div
                            class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
                            <img src="https://teamleafwebsite.sensescloud.co.uk/assets/images/screenshots/temp-task-show.png"
                                alt="App screenshot" width="2432" height="1442"
                                class="rounded-md shadow-2xl ring-1 ring-gray-900/10">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="bg-white pb-24 sm:pb-32">
            <div class="mx-auto max-w-5xl px-6 lg:px-8">
                <section class="">
                    <div
                        class="logos group relative overflow-hidden whitespace-nowrap py-10 [mask-image:_linear-gradient(to_right,_transparent_0,_white_128px,white_calc(100%-128px),_transparent_100%)]">
                        <div class="group-hover:animation-pause inline-block w-max animate-slide-left-infinite">
                            <!-- Ensure that the images cover entire screen width for a smooth transition -->
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/biomarsh.png"
                                alt="Biomarsh Environmental" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/enviroclean.png"
                                alt="Enviro Clean" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/lanes_group_plc.png"
                                alt="Lanes Group PLC" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/sweeptech.png"
                                alt="Sweeptech" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/go_plant.png"
                                alt="Go Plant" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/hydrotech.png"
                                alt="Hydrotech" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/ukdn.png"
                                alt="UKDN Rail" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/beachenlea.png"
                                alt="Beachenlea" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/ipsum_group.png"
                                alt="IPSUM Group" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/wilkinson.png"
                                alt="Wilkinson Environmental" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/iwjs.png"
                                alt="IWJS" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/severn_trent_water.png"
                                alt="Severn Trent Water" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/transport_for_london.png"
                                alt="Transport for London" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/wales.png"
                                alt="Wales Environmental" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/yy.png"
                                alt="YY Security" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/wst.png"
                                alt="Water Saving Techniques" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/drainpower.png"
                                alt="Drainpower" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/south_west_water.png"
                                alt="South West Water" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/hot_tubs.png"
                                alt="Hot Tub Superstore" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/grizzy_bear.png"
                                alt="Grizzly Bear" width="158" height="48">
                        </div>

                        <!-- Duplicate of the above for infinite effect (you can use javascript to duplicate this too) -->
                        <div class="group-hover:animation-pause inline-block w-max animate-slide-left-infinite">
                            <!-- Ensure that the images cover entire screen width for a smooth transition -->
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/biomarsh.png"
                                alt="Biomarsh Environmental" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/enviroclean.png"
                                alt="Enviro Clean" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/lanes_group_plc.png"
                                alt="Lanes Group PLC" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/sweeptech.png"
                                alt="Sweeptech" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/go_plant.png"
                                alt="Go Plant" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/hydrotech.png"
                                alt="Hydrotech" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/ukdn.png"
                                alt="UKDN Rail" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/beachenlea.png"
                                alt="Beachenlea" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/ipsum_group.png"
                                alt="IPSUM Group" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/wilkinson.png"
                                alt="Wilkinson Environmental" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/iwjs.png"
                                alt="IWJS" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/severn_trent_water.png"
                                alt="Severn Trent Water" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/transport_for_london.png"
                                alt="Transport for London" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/wales.png"
                                alt="Wales Environmental" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/yy.png"
                                alt="YY Security" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/wst.png"
                                alt="Water Saving Techniques" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/drainpower.png"
                                alt="Drainpower" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/south_west_water.png"
                                alt="South West Water" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/hot_tubs.png"
                                alt="Hot Tub Superstore" width="158" height="48">
                            <img class="mx-4 inline "
                                src="https://teamleafwebsite.sensescloud.co.uk/assets/images/logos/black_and_white/grizzy_bear.png"
                                alt="Grizzly Bear" width="158" height="48">
                        </div>
                    </div>
                </section>

                <div class="mt-6 flex justify-center">
                    <a href="/testimonials" class="font-normal text-blue-950">
                        <p
                            class="relative rounded-full bg-gray-50 px-4 py-1.5 text-sm leading-6 text-gray-600 ring-1 ring-inset transition duration-800 ring-gray-900/5 hover:bg-gray-100 hover:text-gray-700 hover:ring-gray-900/40">
                            <span class="hidden md:inline">Over 50,000 users use Teamleaf everday to better their
                                business.</span>
                            <span class="absolute inset-0" aria-hidden="true"></span> &nbsp; Read our customer stories
                            <span aria-hidden="true">→</span>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white pb-24 sm:pb-24">
            <div class="mx-auto max-w-6xl px-6 lg:px-8">
                <div class="mx-auto max-w-5xl lg:mx-0">
                    <h2
                        class="text-5xl/[1.07] leading-none tracking-tight sm:text-4xl md:text-5xl/[1.07] bg-gradient-to-br from-zinc-800 to-fuchsia-950 bg-clip-text  font-semibold  text-transparent pb-2">
                        All-in-one platform</h2>
                    <p
                        class="mt-2 text-lg leading-snug font-medium bg-gradient-to-br from-slate-950 to-slate-600 bg-clip-text">
                        Teamleaf is the complete solution for utility contractors, integrating works management,
                        workforce oversight, fleet control, and financial operations into a single, powerful platform.
                        Our comprehensive system streamlines your entire operation, from field work to back-office
                        processes, ensuring maximum efficiency and compliance across all departments."
                    </p>
                </div>
                <dl
                    class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <div class="group">
                        <dt class="text-xl sm:text-xl font-semibold text-gray-900">Works Management.</dt>
                        <dd class="mt-1 text-gray-600">Comprehensive oversight and management of your operations from
                            inception to completion. Teamleaf provides the necessary framework, processes, and
                            supervision to guarantee that your workforce operates with maximum efficiency and
                            effectiveness.</dd>
                        <p class="mt-2 text-left">
                            <a href="/works-management/features"
                                class="group relative inline-flex items-center justify-center overflow-hidden rounded-lg py-2.5 pr-7 text-left text-base font-semibold leading-6 text-blue-900 hover:text-indigo-700">
                                <span class="z-40">Learn More</span>
                                <svg class="z-40 -mr-1 ml-2 h-3 w-3 transition-all duration-300 group-hover:translate-x-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </p>
                    </div>
                    <div class="group">
                        <dt class="text-xl sm:text-xl font-semibold text-gray-900">Your Workforce.</dt>
                        <dd class="mt-1 text-gray-600">Effective oversight of your personnel encompasses the
                            administration of timesheets, payroll processing, and ensuring a safe and productive work
                            environment for all employees.</dd>
                        <p class="mt-2 text-left">
                            <a href="/worksforce-management/features"
                                class="group relative inline-flex items-center justify-center overflow-hidden rounded-lg py-2.5 pr-7 text-left text-base font-semibold leading-6 text-blue-900 hover:text-indigo-700">
                                <span class="z-40">Learn More</span>
                                <svg class="z-40 -mr-1 ml-2 h-3 w-3 transition-all duration-300 group-hover:translate-x-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </p>
                    </div>
                    <div class="group">
                        <dt class="text-xl sm:text-xl font-semibold text-gray-900">Fleet Management.</dt>
                        <dd class="mt-1 text-gray-600">Enhance the efficiency and effectiveness of your fleet by
                            exercising control. Monitor and mitigate Vehicle Off Road (VOR) incidents, and utilize DVLA
                            data directly to improve automated cost management. By leveraging the extensive information
                            available, you can, for the first time, gain insights not only into a vehicle's current
                            location but also where its intended to be.</dd>
                        <p class="mt-2 text-left">
                            <a href="/fleet-management/features"
                                class="group relative inline-flex items-center justify-center overflow-hidden rounded-lg py-2.5 pr-7 text-left text-base font-semibold leading-6 text-blue-900 hover:text-indigo-700">
                                <span class="z-40">Learn More</span>
                                <svg class="z-40 -mr-1 ml-2 h-3 w-3 transition-all duration-300 group-hover:translate-x-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </p>
                    </div>
                    <div class="group">
                        <dt class="text-xl sm:text-xl font-semibold text-gray-900">Finance Control.</dt>
                        <dd class="mt-1 text-gray-600">Leverage our direct connections to all major accounting software
                            to optimize your financial management. Gain immediate access to your Work in Progress (WIP),
                            integrate your customer rate schedules, set objectives, generate payment applications,
                            monitor productivity, and export payroll effortlessly—all with a single click.</dd>
                        <p class="mt-2 text-left">
                            <a href="/finance/features"
                                class="group relative inline-flex items-center justify-center overflow-hidden rounded-lg py-2.5 pr-7 text-left text-base font-semibold leading-6 text-blue-900 hover:text-indigo-700">
                                <span class="z-40">Learn More</span>
                                <svg class="z-40 -mr-1 ml-2 h-3 w-3 transition-all duration-300 group-hover:translate-x-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </p>
                    </div>

                    <div class="group">
                        <dt class="text-xl sm:text-xl font-semibold text-gray-900">Human Rsources.</dt>
                        <dd class="mt-1 text-gray-600">Teamleaf offers a comprehensive HR system designed to meet all
                            your human resources requirements. The application features complete management of
                            timesheets and payroll, as well as tracking of holidays, absences, and qualifications, all
                            seamlessly integrated. It ensures that your employees are fit for work and progressing
                            effectively.</dd>
                        <p class="mt-2 text-left">
                            <a href="/human-resources/features"
                                class="group relative inline-flex items-center justify-center overflow-hidden rounded-lg py-2.5 pr-7 text-left text-base font-semibold leading-6 text-blue-900 hover:text-indigo-700">
                                <span class="z-40">Learn More</span>
                                <svg class="z-40 -mr-1 ml-2 h-3 w-3 transition-all duration-300 group-hover:translate-x-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </p>
                    </div>

                    <div class="group">
                        <dt class="text-xl sm:text-xl font-semibold text-gray-900">Asset Management.</dt>
                        <dd class="mt-1 text-gray-600">Our asset management system digitizes the monitoring of all your
                            equipment, guaranteeing it is consistently located in the appropriate place at the
                            appropriate time.

                            Teamleaf serves as a comprehensive GIS system for infrastructure projects, enabling you to
                            manage, modify, and plot new assets directly from the site, with the capability to export to
                            your customers' GIS systems.</dd>
                        <p class="mt-2 text-left">
                            <a href="/asset-management/features"
                                class="group relative inline-flex items-center justify-center overflow-hidden rounded-lg py-2.5 pr-7 text-left text-base font-semibold leading-6 text-blue-900 hover:text-indigo-700">
                                <span class="z-40">Learn More</span>
                                <svg class="z-40 -mr-1 ml-2 h-3 w-3 transition-all duration-300 group-hover:translate-x-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </p>
                    </div>

                    <div class="group">
                        <dt class="text-xl sm:text-xl font-semibold text-gray-900">HSEQ.</dt>
                        <dd class="mt-1 text-gray-600">Safety remains our foremost priority, which is why it is
                            inherently integrated into Teamleaf's operations. We guarantee that all procedures are
                            meticulously regulated, with certain elements being mandatory and non-negotiable. Our
                            centralized management system for all controlled documents, on-site processes, and safety
                            inspections ensures compliance, providing assurance that every individual can return home
                            safely.</dd>
                        <p class="mt-2 text-left">
                            <a href="/hseq/features"
                                class="group relative inline-flex items-center justify-center overflow-hidden rounded-lg py-2.5 pr-7 text-left text-base font-semibold leading-6 text-blue-900 hover:text-indigo-700">
                                <span class="z-40">Learn More</span>
                                <svg class="z-40 -mr-1 ml-2 h-3 w-3 transition-all duration-300 group-hover:translate-x-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </p>
                    </div>

                    <div class="group">
                        <dt class="text-xl sm:text-xl font-semibold text-gray-900">Stock &amp; Purchasing.</dt>
                        <dd class="mt-1 text-gray-600">We offer comprehensive systems designed to oversee your ordering
                            and inventory management procedures. You will have real-time visibility into the contents of
                            every depot, stockroom, and vehicle at all times. Additionally, you can monitor PPE requests
                            and distributions, ensuring that nothing is overlooked.</dd>

                    </div>


                </dl>
            </div>
        </div>


        <div class="overflow-hidden bg-white pb-24 sm:pb-32 ">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 overflow-hidden">
                <div
                    class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:grid-cols-2 bg-white border border-grey-200 p-16 overflow-hidden rounded-2xl">
                    <div class="lg:pr-8 lg:pt-4">
                        <div class="lg:max-w-lg">
                            <h3 class="text-base font-semibold leading-7 text-fuchsia-800 mb-2">Working Smarter</h3>
                            <h2
                                class="text-5xl/[1.07] leading-none tracking-tight sm:text-4xl md:text-5xl/[1.07] bg-gradient-to-br from-zinc-800 to-fuchsia-950 bg-clip-text  font-semibold  text-transparent pb-2">
                                Solid Process Flows</h2>
                            <p
                                class="mt-2 text-lg leading-snug font-medium bg-gradient-to-br from-slate-950 to-slate-600 bg-clip-text">
                                Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum
                                cupiditate veritatis in accusamus quisquam.</p>


                            <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Push to deploy.
                                    </dt>
                                    <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis
                                        ratione.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        SSL certificates.
                                    </dt>
                                    <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui
                                        lorem cupidatat commodo.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Database backups.
                                    </dt>
                                    <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus.
                                        Et magna sit morbi lobortis.</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png"
                        alt="Product screenshot"
                        class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0 "
                        width="2432" height="1442">
                </div>
            </div>
        </div>



        <section class="relative py-12 overflow-hidden bg-black sm:py-16 lg:py-20 xl:py-24 mb-14 ">
            <div class="absolute bottom-0 transform -translate-x-1/2 translate-y-96 lg:translate-y-80 left-1/2">
                <svg class="blur-3xl filter" style="filter: blur(64px)" width="643" height="408"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M183.151 216.787C86.498 123.868-62.309 137.493 30.03 41.445c92.337-96.049 494.126-6.876 590.779 86.043 96.652 92.919-148.432 154.396-240.769 250.445-92.338 96.048-100.237-68.228-196.889-161.146Z"
                        fill="url(#a)"></path>
                    <defs>
                        <linearGradient id="a" x1="663.766" y1="168.785" x2="303.65" y2="469.667"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0%" style="stop-color: var(--color-cyan-500)"></stop>
                            <stop offset="100%" style="stop-color: var(--color-purple-500)"></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <div class="absolute inset-0">
                <img class="object-cover w-full h-full opacity-50"
                    src="https://landingfoliocom.imgix.net/store/collection/dusk/images/noise.png" alt="">
            </div>

            <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-5xl mx-auto text-center">
                    <h2
                        class="md:text-7xl/[1.07] bg-gradient-to-br from-white to-zinc-500 bg-clip-text text-5xl/[1.07] font-bold tracking-tight text-transparent">
                        Level up with <br> <span class="relative inline-flex sm:inline">
                            <span
                                class="bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] blur-2xl filter opacity-40 w-full h-full absolute inset-0"></span>
                            <span
                                class="md:text-7xl/[1.07] bg-gradient-to-br from-white to-zinc-500 bg-clip-text text-5xl/[1.07] font-bold tracking-tight text-transparent relative">&nbsp;&nbsp;Teamleaf
                                AI&nbsp;&nbsp;</span>
                        </span></h2>

                    <div
                        class="grid grid-cols-1 px-12 mt-12 md:px-0 gap-y-8 md:grid-cols-3 sm:mt-16 lg:mt-20 xl:mt-24">
                        <div class="md:pr-8 lg:pr-12">
                            <h3
                                class="text-2xl/[1.07] md:text-3xl/[1.07] bg-gradient-to-br from-white to-zinc-500 bg-clip-text font-bold tracking-tight text-transparent">
                                Schedule your fleet optimially via AI</h3>
                            <p
                                class="mt-4 text-xl/[1.07] md:text-xl/[1.07] bg-gradient-to-br from-white to-zinc-500 bg-clip-text font-semibold tracking-tight text-transparent">
                                Time on the road is wasted time, get your jobs done faster and more effectively.</p>
                        </div>

                        <div class="w-48 h-px mx-auto bg-gray-900 md:hidden"></div>

                        <div class="md:border-gray-900 md:border-l lg:px-12 md:px-8">
                            <h3
                                class="text-2xl/[1.07] md:text-3xl/[1.07] bg-gradient-to-br from-white to-zinc-500 bg-clip-text font-bold tracking-tight text-transparent">
                                Save the planet &amp; your wallet</h3>
                            <p
                                class="mt-4 text-xl/[1.07] md:text-xl/[1.07] bg-gradient-to-br from-white to-zinc-500 bg-clip-text font-semibold tracking-tight text-transparent">
                                Less feul is good for you and the environment. It's a win win.</p>
                        </div>

                        <div class="w-48 h-px mx-auto bg-gray-900 md:hidden"></div>

                        <div class="md:border-gray-900 md:border-l lg:pl-12 md:pl-8">
                            <h3
                                class="text-2xl/[1.07] md:text-3xl/[1.07] bg-gradient-to-br from-white to-zinc-500 bg-clip-text font-bold tracking-tight text-transparent">
                                Automate your scheduling, while maintaining control</h3>
                            <p
                                class="mt-4 text-xl/[1.07] md:text-xl/[1.07] bg-gradient-to-br from-white to-zinc-500 bg-clip-text font-semibold tracking-tight text-transparent">
                                AI + Your knowledge = Control &amp; Success</p>
                        </div>
                    </div>

                    <div class="w-full h-px mt-8 bg-gradient-to-r from-cyan-500 to-purple-500 sm:mt-12"></div>

                    <div class="max-w-3xl mx-auto mt-8 sm:mt-12">
                        <p
                            class="max-w-xl mx-auto text-xl mt-4 text-2xl/[1.07] md:text-2xl/[1.07] bg-gradient-to-br from-white to-zinc-500 bg-clip-text font-semibold tracking-tight text-transparent">
                            Teamleaf AI joins all the dots, and gives you the power to schedule your fleet optiminal
                            without taking away the control you need.</p>
                        <div class="mt-12">
                            <a href="/ai" title=""
                                class="mt-4 text-xl/[1.07] md:text-xl/[1.07]  tracking-tight text-transparent inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white transition-all duration-200 rounded-full bg-gradient-to-r from-cyan-700 to-purple-700 hover:contrast-150"
                                role="button"> Learn More </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-white px-6 pb-24 pt-24 lg:px-8 relative mt-24">

            <div class="mx-auto max-w-2xl sm:text-center">
                <span
                    class="relative z-40 inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-700/10">What
                    others say</span>
                <p class="relative z-40 mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">Speak to
                    our customers</p>
                <p class="relative z-40 mt-6 text-lg leading-8 text-gray-600">Taking on a works management system means
                    beliving in a system which has your company in safe hands. That's not something to do lightly, so
                    read what our clients say.</p>
            </div>



            <figure class="mx-auto max-w-5xl background-gradient-four mt-14">
                <p class="sr-only">5 out of 5 stars</p>
                <div class="flex gap-x-1 text-slate-600">
                    <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <blockquote
                    class="max-w-3xl  mt-10 text-xl font-medium leading-8 tracking-tight text-gray-900 sm:text-2xl sm:leading-9">
                    <p>“Qui dolor enim consectetur do et non ex amet culpa sint in ea non dolore. Enim minim magna anim
                        id minim eu cillum sunt dolore aliquip. Amet elit laborum culpa irure incididunt adipisicing
                        culpa amet officia exercitation. Eu
                        non aute velit id velit Lorem elit anim pariatur.”</p>
                </blockquote>
                <figcaption class="mt-10 flex items-center gap-x-6 pb-24">
                    <div class="text-sm leading-6">
                        <div class="font-bold text-gray-900 text-xl">Judith Black</div>
                        <div class="mt-0.5 text-gray-600 text-lg">CEO of Workcation</div>
                    </div>
                </figcaption>
            </figure>
        </section>





        <div
            class="py-24 sm:py-32 max-w-7xl mx-auto rounded-2xl background-gradient-five border-1 border-blue-100 shadow-2xl mb-24 mt-24 ">
            <div class="mx-auto max-w-5xl px-6 lg:px-8 z-40">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl text-left">Ready to
                        start your journey?</h2>
                    <p class="mt-4 text-lg leading-8 text-gray-600 text-left">Teamleaf will take your company to a
                        better place and allow you to grow. If your ready for your next step then its time to get
                        started.</p>
                    <div class="justify-left mt-6 flex items-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-blue-950 px-3.5 py-2.5 text-sm font-normal text-white shadow-sm hover:bg-blue-950/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Let's Talk</a>
                        <a href="#" class="text-sm font-normal leading-6 text-blue-950">Or we can call you <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-16 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                        <div class="flex flex-col">
                            <dt class="text-base font-semibold leading-7 text-gray-800 text-left">

                                Clear and Transparent Pricing
                            </dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                                <p class="flex-auto text-left">Simple, clear and honest pricing. <br>No crazy
                                    implimentation fees or surprises.<br>Check our pricing page for more information</p>
                                <p class="mt-6 text-left">
                                    <a href="#"
                                        class="text-sm font-semibold leading-6 text-blue-950 text-left">See Prices
                                        <span aria-hidden="true">→</span></a>
                                </p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="text-base font-semibold leading-7 text-gray-800 text-left">

                                No Sales Teams
                            </dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600 text-left">
                                <p class="flex-auto text-left">We don't have any sales teams. <br>Just experienced
                                    people who have been the industry (as company owners). <br>We know exactly the
                                    challenges you are facing as we have faced them.</p>
                                <p class="mt-6 text-left">
                                    <a href="#"
                                        class="text-sm font-semibold leading-6 text-blue-950 text-left">See Our Team
                                        <span aria-hidden="true">→</span></a>
                                </p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="text-base font-semibold leading-7 text-gray-800 text-left">

                                Superior Support
                            </dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                                <p class="flex-auto text-left">We support you and your teams by putting you in touch
                                    with real people who develop the platform. You get the answers you need from people
                                    who understand the questions you have.</p>
                                <p class="mt-6 text-left">
                                    <a href="#"
                                        class="text-sm font-semibold leading-6 text-blue-950 text-left">How We Support
                                        You <span aria-hidden="true">→</span></a>
                                </p>
                            </dd>
                        </div>
                    </dl>
                </div>




            </div>
        </div>

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
        test

    </div>




</body>

</html>
