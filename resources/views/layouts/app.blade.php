<!doctype html>
<html lang="id" data-force-theme="light" class="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $pageTitle ?? 'BPI (Buku Parfum Indonesia)' }}</title>
    <meta name="description"
        content="BPI (Buku Parfum Indonesia) — Materi komprehensif dari buku parfum terbaik dunia dalam Bahasa Indonesia." />
    <meta name="author" content="Buku Parfum Indonesia" />

    <!-- Favicon and Icons -->
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="/assets/main.css">

    @stack('styles')
    <style>
        /* Header Z-Index Boost */
        .financial-management-platform-header {
            z-index: 99999 !important;
        }

        /* Dropdown Fix - Bridge Gap */
        .book-nav-item:hover .book-dropdown-menu {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }

        .book-dropdown-menu {
            width: 350px !important;
            z-index: 99999 !important;
            /* Create invisible bridge to prevent closing */
            padding-top: 10px; 
            margin-top: -10px; 
        }
        
        .book-dropdown-menu::before {
            content: '';
            position: absolute;
            top: -20px;
            left: 0;
            width: 100%;
            height: 20px; /* Bridge size */
            background: transparent;
        }
    </style>
</head>

<body>
    <!-- =========================
Header
===========================-->
    <header>
        <div data-ns-animate data-direction="up" data-offset="20"
            class="financial-management-platform-header lp:!max-w-[1290px] fixed top-0 left-1/2 z-50 mx-auto flex w-full max-w-[335px] -translate-x-1/2 items-center justify-between rounded-b-[20px] bg-white px-1.5 py-2.5 backdrop-blur-[25px] min-[425px]:max-w-[380px] min-[500px]:max-w-[450px] sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] xl:py-0"
            style="top: 0 !important; overflow: visible !important; z-index: 999999 !important;">
            <div>
                <a href="{{ route('home') }}">
                    <span class="sr-only">Home</span>
                    <span class="text-heading-5 font-bold text-secondary">🌸 Buku Parfum Indonesia</span>
                </a>
            </div>
            <nav class="hidden items-center xl:flex">
                <ul class="flex items-center gap-6">
                    <li class="py-5">
                        <a href="{{ route('home') }}" class="nav-item-link-white">
                            <span
                                class="text-secondary/60 hover:text-secondary transition-colors duration-300 ease-in-out">Home</span>
                        </a>
                    </li>
                    <li class="book-nav-item relative py-5 h-full flex items-center">
                        <a href="#" class="nav-item-link-white flex items-center gap-1 cursor-default" onclick="return false;">
                            <span class="text-secondary/60 transition-colors duration-300 ease-in-out">Buku</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-secondary/60 transition-colors duration-300"><path d="m6 9 6 6 6-6"/></svg>
                        </a>
                        <!-- Dropdown -->
                        <div class="book-dropdown-menu hidden absolute top-full left-1/2 -translate-x-1/2 mt-2 bg-white rounded-2xl shadow-2xl border border-secondary/10 overflow-hidden text-center">
                            <div class="p-2">
                                <a href="{{ route('book.chapters') }}" class="block px-4 py-4 hover:bg-secondary/5 rounded-xl transition-colors">
                                    <div class="text-base font-semibold text-secondary">Scent & Soul</div>
                                </a>
                                <div class="block px-4 py-4 rounded-xl opacity-60 cursor-not-allowed">
                                    <div class="text-base font-semibold text-secondary">Dasar Kimia Parfum (Coming Soon)</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="py-5">
                        <a href="{{ route('home') }}#tentang" class="nav-item-link-white">
                            <span
                                class="text-secondary/60 hover:text-secondary transition-colors duration-300 ease-in-out">Tentang</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="flex items-center gap-2">
                <div class="hidden items-center sm:flex">
                    <div class="btn-v3-secondary btn-v3-lg w-fit cursor-pointer rounded-2xl px-1 py-1" data-button-v3>
                        <a href="{{ route('book.chapters') }}" class="block">
                            <div class="flex items-center gap-x-4">
                                <span
                                    class="relative z-20 flex shrink-0 items-center justify-center overflow-hidden rounded-[13px] p-2.5 transition-all duration-700 ease-[cubic-bezier(0.4,0,0.2,1)]"
                                    data-button-v3-icon aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-6">
                                        <path d="M11 5H13V7H11V5Z" />
                                        <path d="M5 5H7V7H5V5Z" />
                                        <path d="M14 8H16V10H14V8Z" />
                                        <path d="M8 8H10V10H8V8Z" />
                                        <path d="M17 11H19V13H17V11Z" />
                                        <path d="M11 11H13V13H11V11Z" />
                                        <path d="M14 14H16V16H14V14Z" />
                                        <path d="M8 14H10V16H8V14Z" />
                                        <path d="M11 17H13V19H11V17Z" />
                                        <path d="M5 17H7V19H5V17Z" />
                                    </svg>
                                </span>
                                <span
                                    class="shrink-0 pr-4 transition-all duration-700 ease-[cubic-bezier(0.4,0,0.2,1)] first-letter:uppercase"
                                    data-button-v3-text aria-hidden="true">
                                    Mulai Baca
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <button id="mobile-menu-btn"
                    class="xl:hidden flex flex-col items-center justify-center gap-1.5 p-2 cursor-pointer"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <span class="block w-6 h-0.5 bg-secondary"></span>
                    <span class="block w-6 h-0.5 bg-secondary"></span>
                    <span class="block w-6 h-0.5 bg-secondary"></span>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu"
            class="hidden fixed top-[60px] left-0 right-0 z-40 bg-white shadow-lg rounded-b-2xl p-6 xl:hidden">
            <ul class="space-y-4">
                <li><a href="{{ route('home') }}" class="text-secondary block py-2">Home</a></li>
                <li>
                    <span class="text-secondary/60 block py-2 font-semibold">Buku</span>
                    <ul class="pl-4 space-y-2 border-l-2 border-secondary/10 ml-2">
                        <li><a href="{{ route('book.chapters') }}" class="text-secondary block py-1 font-medium">Scent & Soul</a></li>
                        <li><span class="text-secondary/50 block py-1 text-sm">Dasar Kimia Parfum (Soon)</span></li>
                    </ul>
                </li>
                <li><a href="{{ route('home') }}#tentang" class="text-secondary block py-2">Tentang</a></li>
            </ul>
        </div>
    </header>

    <main class="bg-white">
        @yield('content')
    </main>

    <!-- =========================
Footer
===========================-->
    <footer class="relative overflow-hidden pb-10 pt-20 text-white" style="background-color: #0B1B3F;">
        <div class="main-container relative z-10">
            <div class="grid grid-cols-12 gap-8 pb-16 border-b" style="border-color: rgba(255, 255, 255, 0.1);">
                <!-- Brand -->
                <div class="col-span-12 md:col-span-8">
                    <span class="text-heading-5 font-bold text-white">🌸 Buku Parfum Indonesia</span>
                    <p class="mt-4 leading-relaxed" style="color: rgba(255, 255, 255, 0.6);">
                        Materi komprehensif dari buku parfum terbaik dunia dalam Bahasa Indonesia.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="col-span-6 md:col-span-4">
                    <h4 class="text-white font-semibold mb-4">Navigasi</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors duration-300" style="color: rgba(255, 255, 255, 0.6);">Home</a></li>
                        <li><a href="{{ route('book.chapters') }}" class="hover:text-white transition-colors duration-300" style="color: rgba(255, 255, 255, 0.6);">Buku</a></li>
                        <li><a href="{{ route('home') }}#tentang" class="hover:text-white transition-colors duration-300" style="color: rgba(255, 255, 255, 0.6);">Tentang</a></li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="pt-6 text-center">
                <p class="text-sm" style="color: rgba(255, 255, 255, 0.4);">
                    © {{ date('Y') }} Buku Parfum Indonesia. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Vendor Scripts -->
    <script src="/vendor/swiper.min.js"></script>
    <script src="/vendor/leaflet.min.js"></script>
    <script src="/vendor/vanilla-infinite-marquee.min.js"></script>
    <script src="/vendor/split-text.min.js"></script>
    <script src="/vendor/gsap.min.js"></script>
    <script src="/vendor/scroll-trigger.min.js"></script>
    <script src="/vendor/draw-svg.min.js"></script>
    <script src="/vendor/motionpathplugin.min.js"></script>
    <script src="/vendor/lenis.min.js"></script>
    <script src="/vendor/springer.min.js"></script>
    <script src="/vendor/number-counter.js"></script>
    <script src="/vendor/stack-card.min.js"></script>

    <!-- Main JS -->
    <script src="/assets/main.js"></script>

    @stack('scripts')
</body>

</html>
