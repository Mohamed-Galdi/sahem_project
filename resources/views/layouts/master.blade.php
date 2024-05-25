<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sahem') }}</title>

    {{-- tailwind --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')


    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="/assets/logos/1.png">

</head>

<body class="font-almaria">
    <div>
        <nav class="bg-white w-full z-50 top-0 start-0 border-b border-gray-200 relative ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="/assets/logos/logo.png" class="w-32" alt="sahem  Logo">
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse gap-3 ">
                    @if (Auth::check())
                        @if (Auth::user()->role === 'admin')
                            <a href="/admin"
                                class="text-light_1 bg-dark_1 font-almaria focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center">حسابي</a>
                        @elseif (Auth::user()->role === 'donor')
                            <a href="/donor"
                                class="text-light_1 bg-dark_1 font-almaria focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center">حسابي</a>
                        @elseif (Auth::user()->role === 'charity')
                            <a href="/charity"
                                class="text-light_1 bg-dark_1 font-almaria focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center">حسابي</a>
                        @endif
                    @else
                        <div class="hidden md:flex gap-2  ">
                            <button type="button" data-modal-target="popup-modal-login"
                                data-modal-toggle="popup-modal-login"
                                class="text-white bg-sahem_pr-500 font-almaria hover:bg-sahem_pr-600 focus:ring-4 focus:outline-none focus:ring-primary_light font-medium rounded-lg text-sm px-4 py-2 text-center">
                                تسجيل الدخول</button>
                            <button type="button" data-modal-target="popup-modal-register"
                                data-modal-toggle="popup-modal-register"
                                class="text-dark_1  bg-light_2 hover:bg-light_1 border-2 border-sahem_pr-500 font-almaria focus:ring-4 focus:outline-none focus:ring-primary_light font-medium rounded-lg text-sm px-4 py-2 text-center">
                                إنشاء حساب</button>
                        </div>
                    @endif
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="#f16d5b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-bold border border-red-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <a href="{{ url('/') }}"
                                class="block py-2 px-3 text-gray-900  rounded md:bg-transparent md:bg-white md:p-0 {{ Request::is('/') ? 'md:text-sahem_pr-500 bg-sahem_pr-700' : '' }}"
                                aria-current="page">الرئيسية</a>
                        </li>
                        <li>
                            <a href="{{ url('/donations') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:bg-white md:hover:text-sahem_pr-700 md:p-0 {{ Request::is('donations') ? 'md:text-sahem_pr-500 bg-sahem_pr-700' : '' }}">تبرعات</a>
                        </li>
                        <li>
                            <a href="{{ url('/articles') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:bg-white md:hover:text-sahem_pr-700 md:p-0 {{ Request::is('articles') ? 'md:text-sahem_pr-500 bg-sahem_pr-700' : '' }}">مقالات</a>
                        </li>
                        <li>
                            <a href="{{ url('/about-us') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:bg-white md:hover:text-sahem_pr-700 md:p-0 {{ Request::is('about-us') ? 'md:text-sahem_pr-500 bg-sahem_pr-700' : '' }}">من
                                نحن</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact-us') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:bg-white md:hover:text-sahem_pr-700 md:p-0 {{ Request::is('contact-us') ? 'md:text-sahem_pr-500 bg-sahem_pr-700' : '' }}">تواصل
                                معنا</a>
                        </li>
                        <div class="block md:hidden">
                            <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                class="text-white bg-sahem_pr-500 font-almaria hover:bg-sahem_pr-600 focus:ring-4 focus:outline-none focus:ring-primary_light font-medium rounded-lg text-sm px-4 py-2 text-center">
                                تسجيل الدخول</button>
                            <button {{-- type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" --}}
                                class="text-dark_1  bg-light_2 hover:bg-light_1 border-2 border-sahem_pr-500 font-almaria focus:ring-4 focus:outline-none focus:ring-primary_light font-medium rounded-lg text-sm px-4 py-2 text-center">
                                إنشاء حساب</button>
                        </div>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
    {{-- ################################################################################################################## --}}
    {{-- login modal  --}}
    <div id="popup-modal-login" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full bg-black/60 md:inset-0 h-[100%] max-h-full">
        <div class="relative bg-gray-100 w-1/2 rounded-lg shadow dark:bg-gray-700 py-24 px-8">
            <button type="button"
                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="popup-modal-login">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#f16d5b"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <h2 class="text-center text-2xl text-dark_2 mb-4"> مرحبا في<span class="text-sahem_pr-500 font-madani"> ساهم
                    ، </span> إختر نوع الحساب لتسجيل الدخول</h2>
            <div class="flex justify-center items-center p-4 gap-4 ">
                <a href="/charity/login"
                    class="flex flex-col p-4 border-2 text-dark_2 border-gray-300 rounded-xl bg-white items-center justify-center w-1/2 h-48 shadow-2xl hover:shadow-sm hover:border-sahem_pr-500 hover:text-sahem_pr-500">
                    <img src="/assets/graphics/charity_account.png" alt="" class="w-24">
                    <p class=" font-madani text-xl ">الدخول كجهة خيرية</p>
                </a>
                <a href="/donor/login"
                    class="flex flex-col p-4 border-2 text-dark_2 border-gray-300 rounded-xl bg-white items-center justify-center w-1/2 h-48 shadow-2xl hover:shadow-sm hover:border-sahem_pr-500 hover:text-sahem_pr-500">
                    <img src="/assets/graphics/donor_account.png" alt="" class="w-24">
                    <p class=" font-madani text-xl ">الدخول كمتبرع
                    </p>
                </a>
            </div>
        </div>
    </div>
    {{-- ################################################################################################################## --}}
    {{-- ################################################################################################################## --}}
    {{-- Register modal  --}}
    <div id="popup-modal-register" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full bg-black/60 md:inset-0 h-[100%] max-h-full">
        <div class="relative bg-gray-100 w-1/2 rounded-lg shadow dark:bg-gray-700 py-24 px-8">
            <button type="button"
                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="popup-modal-register">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#f16d5b"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <h2 class="text-center text-2xl text-dark_2 mb-4"> مرحبا في<span class="text-sahem_pr-500 font-madani">
                    ساهم
                    ، </span> ما نوع الحساب الذي تريد إنشائه</h2>
            <div class="flex justify-center items-center p-4 gap-4 ">
                <a href="/charity-register"
                    class="flex flex-col p-4 border-2 text-dark_2 border-gray-300 rounded-xl bg-white items-center justify-center w-1/2 h-48 shadow-2xl hover:shadow-sm hover:border-sahem_pr-500 hover:text-sahem_pr-500">
                    <img src="/assets/graphics/charity_account.png" alt="" class="w-24">
                    <p class=" font-madani text-xl ">حساب جهة خيرية  </p>
                </a>
                <a href="/donor-register"
                    class="flex flex-col p-4 border-2 text-dark_2 border-gray-300 rounded-xl bg-white items-center justify-center w-1/2 h-48 shadow-2xl hover:shadow-sm hover:border-sahem_pr-500 hover:text-sahem_pr-500">
                    <img src="/assets/graphics/donor_account.png" alt="" class="w-24">
                    <p class=" font-madani text-xl ">حساب متبرع
                    </p>
                </a>
            </div>
        </div>
    </div>
    {{-- ################################################################################################################## --}}
    <main>
        @yield('content')
    </main>

    <footer class="bg-dark_1   w-full z-20 bottom-0 start-0 border-t border-gray-200 ">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="flex sm:flex-row flex-col  items-center justify-between">
                <a href="" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="/assets/logos/5.png" class="w-32" alt="sahem light Logo" />

                </a>
                <ul class="flex flex-wrap items-center mb-6  font-medium text-light_2 sm:mb-0 ">
                    <li>
                        <a href="{{ url('/') }}"
                            class="hover:underline me-4 md:me-6 {{ Request::is('/') ? 'text-sahem_pr-500 ' : '' }}">الرئيسية
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/donations') }}"
                            class="hover:underline me-4 md:me-6 {{ Request::is('donations') ? 'text-sahem_pr-500 ' : '' }}">
                            تبرعات</a>
                    </li>
                    <li>
                        <a href="{{ url('/articles') }}"
                            class="hover:underline me-4 md:me-6 {{ Request::is('articles') ? 'text-sahem_pr-500 ' : '' }}">
                            مقالات</a>
                    </li>
                    <li>
                        <a href="{{ url('/about-us') }}"
                            class="hover:underline me-4 md:me-6 {{ Request::is('about-us') ? 'text-sahem_pr-500 ' : '' }}">من
                            نحن
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact-us') }}"
                            class="hover:underline {{ Request::is('contact-us') ? 'text-sahem_pr-500 ' : '' }}">تواصل
                            معنا
                        </a>
                    </li>
                </ul>
                <div class="flex gap-3 mb-2 sm:justify-center sm:mt-0">
                    <a href="https://youtube.com" target='_blank' class="text-gray-500 hover:text-white">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512">
                            <path
                                d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                        </svg>
                    </a>
                    <a href="https://twitter.com" target='_blank' class="text-gray-500 hover:text-white">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>

                    <a href="https://www.instagram.com" target='_blank' class="text-gray-500  hover:text-white">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>


                </div>
            </div>
            <hr class="sm:my-6 my-2 border-gray-200 sm:mx-auto lg:my-8" />
            <span class="block text-sm text-light_1 sm:text-center text-center">© 2023 ساهم، جميع
                الحقوق محفوضة</span>
        </div>
    </footer>

    @include('sweetalert::alert')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>
