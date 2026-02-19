@extends('layouts.app')

@section('content')
<!-- =========================
Hero section
===========================-->
<section data-ns-animate data-delay="0.1" data-instant
    class="mx-[8px] mt-[8px] h-auto min-h-[500px] pb-20 overflow-hidden rounded-2xl bg-gradient-to-b from-[#142e6e] to-[#edf2ff] md:rounded-3xl lg:rounded-4xl xl:rounded-[56px]">
    <div class="main-container">
        <div class="relative pt-[160px] lg:pt-[206px]">
            <div class="flex items-center justify-center gap-x-14">
                <div class="space-y-13 lg:space-y-16 xl:space-y-19">
                    <div class="space-y-8">
                        <!-- text -->
                        <div class="space-y-3 text-center">
                            <h1 data-ns-animate data-delay="0.5" data-instant
                                class="mx-auto max-w-[780px] font-medium text-white">
                                Buku Parfum Indonesia
                            </h1>
                            <p data-ns-animate data-delay="0.6" data-instant
                                class="text-accent/80 mx-auto max-w-[620px] text-lg leading-[150%] font-normal lg:max-w-[682px]">
                                Materi komprehensif dari buku parfum terbaik dunia — disajikan dalam Bahasa Indonesia
                                untuk para pecinta wewangian.
                            </p>
                        </div>
                    </div>

                    <!-- btns -->
                    <div class="flex flex-col items-center justify-center gap-y-4 md:flex-row md:gap-x-4 md:gap-y-0">
                        <div data-ns-animate data-delay="0.7" data-direction="left" data-offset="50" data-instant
                            class="w-[80%] text-center sm:w-auto md:mx-0 md:w-auto">
                            <div class="btn-v3-lg btn-v3-white w-full sm:w-auto w-fit cursor-pointer rounded-2xl px-1 py-1"
                                data-button-v3>
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
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================
Chapters (Services) section
===========================-->
<!-- =========================
Chapters (Services) section -> Rekomendasi Buku
===========================-->
<section class="py-18 md:py-20 lg:py-24 xl:py-39">
    <div class="main-container">
        <div class="space-y-8">
            <div data-ns-animate data-delay="0.1" class="text-center space-y-3 mb-10">
                <h2 class="text-heading-3 text-secondary font-normal">Rekomendasi Buku Parfum</h2>
                <p class="mx-auto max-w-[600px] text-secondary/60">
                    Koleksi materi parfum terbaik yang telah kami kurasi dan terjemahkan untuk Anda.
                </p>
            </div>

            <!-- tab item  -->
            <div data-ns-animate="" data-delay="0.1" data-tab-items-container="" role="tablist"
                aria-label="Financial services tabs"
                class="md:bg-background-3 relative grid w-full items-center justify-center gap-3 p-1 max-sm:!grid-cols-12 md:flex-nowrap md:gap-1 md:rounded-full"
                style="grid-template-columns: repeat(15, 1fr);">
                <button id="tab-scent" data-tab-content="scent" data-selected="" role="tab"
                    aria-controls="tab-panel-scent" aria-selected="true" aria-label="Scent & Soul tab" tabindex="0"
                    class="font-inter-tight text-tagline-1 bg-background-4 col-span-6 cursor-pointer rounded-2xl px-6 py-[14px] font-medium sm:col-span-3 md:rounded-[80px] md:bg-white text-white">
                    <span class="relative z-20">Scent & Soul</span>
                </button>
                <button id="tab-history" data-tab-content="history" role="tab" aria-controls="tab-panel-history"
                    aria-selected="false" aria-label="History tab" tabindex="-1"
                    class="font-inter-tight text-tagline-1 text-secondary/60 bg-background-4 col-span-6 cursor-pointer rounded-2xl px-6 py-[14px] font-medium transition-colors duration-300 ease-in-out sm:col-span-3 md:rounded-[80px] md:bg-white">
                    <span class="relative z-20">Dasar Kimia Parfum <br>(Coming Soon)</span>
                </button>
                <button id="tab-chemistry" data-tab-content="chemistry" role="tab" aria-controls="tab-panel-chemistry"
                    aria-selected="false" aria-label="Chemistry tab" tabindex="-1"
                    class="font-inter-tight text-tagline-1 text-secondary/60 bg-background-4 col-span-6 cursor-pointer rounded-2xl px-6 py-[14px] font-medium transition-colors duration-300 ease-in-out sm:col-span-3 md:rounded-[80px] md:bg-white">
                    <span class="relative z-20"> Coming Soon</span>
                </button>
                <button id="tab-culture" data-tab-content="culture" role="tab" aria-controls="tab-panel-culture"
                    aria-selected="false" aria-label="Culture tab" tabindex="-1"
                    class="font-inter-tight text-tagline-1 text-secondary/60 bg-background-4 col-span-6 cursor-pointer rounded-2xl px-6 py-[14px] font-medium transition-colors duration-300 ease-in-out sm:col-span-3 md:rounded-[80px] md:bg-white">
                    <span class="relative z-20"> Coming Soon</span>
                </button>
                <button id="tab-business" data-tab-content="business" role="tab" aria-controls="tab-panel-business"
                    aria-selected="false" aria-label="Business tab" tabindex="-1"
                    class="font-inter-tight text-tagline-1 text-secondary/60 bg-background-4 col-span-12 cursor-pointer rounded-2xl px-6 py-[14px] font-medium transition-colors duration-300 ease-in-out sm:col-span-3 md:rounded-[80px] md:bg-white">
                    <span class="relative z-20"> Coming Soon</span>
                </button>

                <!-- active tab indicator -->
                <div data-active-tab-indicator=""
                    class="bg-secondary absolute left-0 z-10 rounded-2xl transition-all duration-500 ease-out md:rounded-[80px]"
                    style="left: 4px; top: 4px; width: 186.391px; height: 52px;">
                </div>
            </div>


            <!-- tab content  -->
            <div data-tab-contents-container="" data-ns-animate="" data-delay="0.2" role="tabpanel" aria-live="polite"
                aria-atomic="true">
                <!-- Scent & Soul Content -->
                <div data-tab-content="scent" id="tab-panel-scent" role="tabpanel" aria-labelledby="tab-scent"
                    aria-hidden="false"
                    class="pointer-events-none flex h-auto flex-col items-center justify-center md:flex-row xl:h-[624px] text-secondary/60"
                    aria-selected="false" tabindex="-1">
                    <figure
                        class="h-[380px] w-full max-w-[450px] overflow-hidden rounded-t-[28px] md:rounded-t-none md:rounded-l-[28px] lg:h-[480px] lg:max-w-[500px] xl:h-[624px] xl:max-w-[645px]">
                        <img src="/images/scent-and-soul-cover.svg"
                             alt="Buku Panduan Lengkap Seni & Sains Parfum" 
                             class="size-full object-cover object-center"
                             width="450" height="640"
                             loading="eager">
                    </figure>

                    <div
                        class="bg-background-2 flex h-[380px] max-w-[450px] items-center justify-center rounded-b-[28px] pr-4 pl-4 md:w-auto md:rounded-r-[28px] md:rounded-b-none md:pr-14 md:pl-[42px] lg:h-[480px] lg:rounded-br-[28px] xl:h-[624px] xl:max-w-[645px]">
                        <div class="space-y-12 xl:space-y-39">
                            <div class="max-w-[547px] space-y-2 text-center md:text-left">
                                <h3 id="heading-scent" class="text-heading-4 text-secondary font-normal">
                                    Panduan Lengkap Seni & Sains Parfum
                                </h3>
                                <p class="line-clamp-4 lg:line-clamp-none">
                                    Jelajahi 12 bab materi lengkap tentang dunia parfum — dari sains penciuman, sejarah
                                    wewangian, hingga seni meracik dan masa depan industri. Panduan ini mencakup segala
                                    hal yang perlu Anda ketahui untuk memahami dan mengapresiasi parfum secara mendalam.
                                </p>
                            </div>

                            <div class="pointer-events-auto flex flex-col sm:flex-row items-center gap-3">
                                <!-- button v3: Mulai Baca -->
                                <div class="btn-v3-secondary btn-v3-lg mx-auto sm:mx-0 w-fit cursor-pointer rounded-2xl px-1 py-1"
                                    aria-label="Mulai Baca" data-button-v3="" data-v3-bound="true">
                                    <a href="{{ route('book.chapters') }}" class="block">
                                        <div class="flex items-center gap-x-4">
                                            <span
                                                class="relative z-20 flex shrink-0 items-center justify-center overflow-hidden rounded-[13px] p-2.5 transition-all duration-700 ease-[cubic-bezier(0.4,0,0.2,1)]"
                                                data-button-v3-icon="" aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="size-6">
                                                    <path d="M11 5H13V7H11V5Z"></path>
                                                    <path d="M5 5H7V7H5V5Z"></path>
                                                    <path d="M14 8H16V10H14V8Z"></path>
                                                    <path d="M8 8H10V10H8V8Z"></path>
                                                    <path d="M17 11H19V13H17V11Z"></path>
                                                    <path d="M11 11H13V13H11V11Z"></path>
                                                    <path d="M14 14H16V16H14V14Z"></path>
                                                    <path d="M8 14H10V16H8V14Z"></path>
                                                    <path d="M11 17H13V19H11V17Z"></path>
                                                    <path d="M5 17H7V19H5V17Z"></path>
                                                </svg>
                                            </span>
                                            <span
                                                class="shrink-0 pr-4 transition-all duration-700 ease-[cubic-bezier(0.4,0,0.2,1)] first-letter:uppercase"
                                                data-button-v3-text="" aria-hidden="true">
                                                Mulai Baca
                                            </span>
                                        </div>
                                    </a>
                                </div>

                                <!-- button v3: Download PDF -->
                                <div class="btn-v3-secondary btn-v3-lg mx-auto sm:mx-0 w-fit cursor-pointer rounded-2xl px-1 py-1"
                                    aria-label="Download PDF" data-button-v3>
                                    <a href="/downloads/Scent_and_Soul_eBook.pdf" download class="block">
                                        <div class="flex items-center gap-x-4">
                                            <span
                                                class="relative z-20 flex shrink-0 items-center justify-center overflow-hidden rounded-[13px] p-2.5 transition-all duration-700 ease-[cubic-bezier(0.4,0,0.2,1)]"
                                                data-button-v3-icon aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-6">
                                                    <path d="M12 16L7 11H10V4H14V11H17L12 16Z" />
                                                    <path d="M20 18H4V20H20V18Z" />
                                                </svg>
                                            </span>
                                            <span
                                                class="shrink-0 pr-4 transition-all duration-700 ease-[cubic-bezier(0.4,0,0.2,1)] first-letter:uppercase"
                                                data-button-v3-text aria-hidden="true">
                                                Download PDF
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- History Content -->
                <div data-tab-content="history" id="tab-panel-history" role="tabpanel" aria-labelledby="tab-history"
                    aria-hidden="true"
                    class="pointer-events-none hidden h-auto flex-col items-center justify-center md:flex-row xl:h-[624px] text-secondary/60"
                    aria-selected="false" tabindex="-1">
                    <figure
                        class="h-[380px] w-full max-w-[450px] overflow-hidden rounded-t-[28px] md:rounded-t-none md:rounded-l-[28px] lg:h-[480px] lg:max-w-[500px] xl:h-auto xl:max-w-[645px]">
                        <img src="/images/ns-img-576.png"
                            alt="Sejarah Parfum" class="size-full object-cover"
                            loading="lazy">
                    </figure>

                    <div
                        class="bg-background-2 flex h-[380px] max-w-[450px] items-center justify-center rounded-b-[28px] pr-4 pl-4 md:w-auto md:rounded-r-[28px] md:rounded-b-none md:pr-14 md:pl-[42px] lg:h-[480px] lg:rounded-br-[28px] xl:h-[624px] xl:max-w-[645px]">
                        <div class="space-y-12 xl:space-y-39">
                            <div class="max-w-[547px] space-y-2 text-center md:text-left">
                                <h3 id="heading-history" class="text-heading-4 text-secondary font-normal">
                                    Sejarah Lengkap Parfum
                                </h3>
                                <p class="line-clamp-4 lg:line-clamp-none">
                                    Dari ritual Mesir Kuno hingga revolusi sintetik modern, telusuri jejak wewangian
                                    yang membentuk peradaban manusia. Buku ini akan membawa Anda melintasi waktu dan
                                    budaya melalui lensa aroma. (Segera Hadir)
                                </p>
                            </div>
                            <div class="pointer-events-auto">
                                <div class="btn-v3-secondary btn-v3-lg mx-auto sm:mx-0 w-fit cursor-not-allowed opacity-50 rounded-2xl px-1 py-1">
                                    <div class="block">
                                        <div class="flex items-center gap-x-4">
                                            <span class="relative z-20 flex shrink-0 items-center justify-center overflow-hidden rounded-[13px] bg-secondary/10 p-2.5">
                                                ⏳
                                            </span>
                                            <span class="shrink-0 pr-4 first-letter:uppercase">
                                                Coming Soon
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chemistry Content -->
                <div data-tab-content="chemistry" id="tab-panel-chemistry" role="tabpanel" aria-labelledby="tab-chemistry"
                    aria-hidden="true"
                    class="pointer-events-none hidden h-auto flex-col items-center justify-center md:flex-row xl:h-[624px] text-secondary/60"
                    aria-selected="false" tabindex="-1">
                    <figure
                        class="h-[380px] w-full max-w-[450px] overflow-hidden rounded-t-[28px] md:rounded-t-none md:rounded-l-[28px] lg:h-[480px] lg:max-w-[500px] xl:h-auto xl:max-w-[645px]">
                        <img src="/images/ns-img-576.png"
                            alt="Kimia Parfum" class="size-full object-cover"
                            loading="lazy">
                    </figure>

                    <div
                        class="bg-background-2 flex h-[380px] max-w-[450px] items-center justify-center rounded-b-[28px] pr-4 pl-4 md:w-auto md:rounded-r-[28px] md:rounded-b-none md:pr-14 md:pl-[42px] lg:h-[480px] lg:rounded-br-[28px] xl:h-[624px] xl:max-w-[645px]">
                        <div class="space-y-12 xl:space-y-39">
                            <div class="max-w-[547px] space-y-2 text-center md:text-left">
                                <h3 id="heading-chemistry" class="text-heading-4 text-secondary font-normal">
                                    Molekul & Kimia Parfum
                                </h3>
                                <p class="line-clamp-4 lg:line-clamp-none">
                                    Memahami struktur molekul aroma dan bagaimana mereka berinteraksi. Panduan teknis
                                    namun mudah dipahami bagi mereka yang ingin menyelami sains di balik wewangian
                                    secara lebih mendalam. (Segera Hadir)
                                </p>
                            </div>
                            <div class="pointer-events-auto">
                                <div class="btn-v3-secondary btn-v3-lg mx-auto sm:mx-0 w-fit cursor-not-allowed opacity-50 rounded-2xl px-1 py-1">
                                    <div class="block">
                                        <div class="flex items-center gap-x-4">
                                            <span class="relative z-20 flex shrink-0 items-center justify-center overflow-hidden rounded-[13px] bg-secondary/10 p-2.5">
                                                ⏳
                                            </span>
                                            <span class="shrink-0 pr-4 first-letter:uppercase">
                                                Coming Soon
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Culture Content -->
                <div data-tab-content="culture" id="tab-panel-culture" role="tabpanel" aria-labelledby="tab-culture"
                    aria-hidden="true"
                    class="pointer-events-none hidden h-auto flex-col items-center justify-center md:flex-row xl:h-[624px] text-secondary/60"
                    aria-selected="false" tabindex="-1">
                    <figure
                        class="h-[380px] w-full max-w-[450px] overflow-hidden rounded-t-[28px] md:rounded-t-none md:rounded-l-[28px] lg:h-[480px] lg:max-w-[500px] xl:h-auto xl:max-w-[645px]">
                        <img src="/images/ns-img-575.png"
                            alt="Budaya Parfum" class="size-full object-cover"
                            loading="lazy">
                    </figure>

                    <div
                        class="bg-background-2 flex h-[380px] max-w-[450px] items-center justify-center rounded-b-[28px] pr-4 pl-4 md:w-auto md:rounded-r-[28px] md:rounded-b-none md:pr-14 md:pl-[42px] lg:h-[480px] lg:rounded-br-[28px] xl:h-[624px] xl:max-w-[645px]">
                        <div class="space-y-12 xl:space-y-39">
                            <div class="max-w-[547px] space-y-2 text-center md:text-left">
                                <h3 id="heading-culture" class="text-heading-4 text-secondary font-normal">
                                    Parfum dalam Budaya Populer
                                </h3>
                                <p class="line-clamp-4 lg:line-clamp-none">
                                    Bagaimana parfum menjadi simbol status, identitas, dan gaya hidup dalam budaya
                                    global. (Segera Hadir)
                                </p>
                            </div>
                            <div class="pointer-events-auto">
                                <div class="btn-v3-secondary btn-v3-lg mx-auto sm:mx-0 w-fit cursor-not-allowed opacity-50 rounded-2xl px-1 py-1">
                                    <div class="block">
                                        <div class="flex items-center gap-x-4">
                                            <span class="relative z-20 flex shrink-0 items-center justify-center overflow-hidden rounded-[13px] bg-secondary/10 p-2.5">
                                                ⏳
                                            </span>
                                            <span class="shrink-0 pr-4 first-letter:uppercase">
                                                Coming Soon
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Content -->
                <div data-tab-content="business" id="tab-panel-business" role="tabpanel"
                    aria-labelledby="tab-business" aria-hidden="true"
                    class="pointer-events-none hidden h-auto flex-col items-center justify-center md:flex-row xl:h-[624px] text-secondary/60"
                    aria-selected="false" tabindex="-1">
                    <figure
                        class="h-[380px] w-full max-w-[450px] overflow-hidden rounded-t-[28px] md:rounded-t-none md:rounded-l-[28px] lg:h-[480px] lg:max-w-[500px] xl:h-auto xl:max-w-[645px]">
                        <img src="/images/ns-img-575.png"
                            alt="Bisnis Parfum" class="size-full object-cover"
                            loading="lazy">
                    </figure>

                    <div
                        class="bg-background-2 flex h-[380px] max-w-[450px] items-center justify-center rounded-b-[28px] pr-4 pl-4 md:w-auto md:rounded-r-[28px] md:rounded-b-none md:pr-14 md:pl-[42px] lg:h-[480px] lg:rounded-br-[28px] xl:h-[624px] xl:max-w-[645px]">
                        <div class="space-y-12 xl:space-y-39">
                            <div class="max-w-[547px] space-y-2 text-center md:text-left">
                                <h3 id="heading-business" class="text-heading-4 text-secondary font-normal">
                                    Bisnis & Pemasaran Parfum
                                </h3>
                                <p class="line-clamp-4 lg:line-clamp-none">
                                    Strategi branding, tren pasar, dan dinamika industri parfum global.
                                    (Segera Hadir)
                                </p>
                            </div>
                            <div class="pointer-events-auto">
                                <div class="btn-v3-secondary btn-v3-lg mx-auto sm:mx-0 w-fit cursor-not-allowed opacity-50 rounded-2xl px-1 py-1">
                                    <div class="block">
                                        <div class="flex items-center gap-x-4">
                                            <span class="relative z-20 flex shrink-0 items-center justify-center overflow-hidden rounded-[13px] bg-secondary/10 p-2.5">
                                                ⏳
                                            </span>
                                            <span class="shrink-0 pr-4 first-letter:uppercase">
                                                Coming Soon
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================
Why Choose Us / Kenapa BPI section
===========================-->
<section id="tentang" data-ns-animate data-delay="0.1"
    class="lx:rounded-[56px] mx-5 rounded-4xl bg-gradient-to-b from-[#142e6e] to-[#edf2ff] py-18 md:py-20 lg:py-24 xl:py-39">
    <div class="main-container">
        <div class="space-y-14 md:space-y-[70px]">
            <!-- text content -->
            <div class="flex flex-col items-center justify-between gap-y-5 lg:flex-row">
                <div class="max-w-[700px] space-y-4 text-center lg:text-left xl:max-w-[905px]">
                    <h2 data-ns-animate data-delay="0.1" class="text-accent font-normal">
                        Kenapa memilih BPI?
                    </h2>
                    <p data-ns-animate data-delay="0.2" class="text-accent/80 font-normal">
                        BPI (Buku Parfum Indonesia) menyajikan materi lengkap tentang dunia parfum dari sumber
                        terpercaya, disajikan dalam Bahasa Indonesia yang mudah dipahami.
                    </p>
                </div>

                <div data-ns-animate data-delay="0.4"
                    class="mt-auto mb-0 flex w-full items-center justify-center md:w-auto">
                    <div class="mx-auto w-[80%] text-center sm:w-auto md:mx-0 md:text-right">
                        <div class="btn-v3-white btn-v3-lg w-full sm:w-auto w-fit cursor-pointer rounded-2xl px-1 py-1"
                            data-button-v3>
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
                </div>
            </div>

            <!-- Features grid -->
            <div class="grid grid-cols-12 gap-6">
                <div data-ns-animate data-delay="0.3"
                    class="col-span-12 md:col-span-6 lg:col-span-3 rounded-3xl bg-white/10 backdrop-blur-sm p-6 text-center">
                    <div class="text-4xl mb-4">📚</div>
                    <h3 class="text-accent font-semibold mb-2">Materi Lengkap</h3>
                    <p class="text-accent/70 text-sm">Materi mendalam dari seluruh aspek dunia parfum</p>
                </div>
                <div data-ns-animate data-delay="0.4"
                    class="col-span-12 md:col-span-6 lg:col-span-3 rounded-3xl bg-white/10 backdrop-blur-sm p-6 text-center">
                    <div class="flex items-center justify-center mb-4 h-10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" class="h-8 w-auto shadow-sm rounded-sm">
                            <path fill="#e60012" d="M0 0h640v240H0z"/>
                            <path fill="#fff" d="M0 240h640v240H0z"/>
                        </svg>
                    </div>
                    <h3 class="text-accent font-semibold mb-2">Bahasa Indonesia</h3>
                    <p class="text-accent/70 text-sm">Disajikan dalam bahasa yang mudah dipahami</p>
                </div>
                <div data-ns-animate data-delay="0.5"
                    class="col-span-12 md:col-span-6 lg:col-span-3 rounded-3xl bg-white/10 backdrop-blur-sm p-6 text-center">
                    <div class="text-4xl mb-4">🔬</div>
                    <h3 class="text-accent font-semibold mb-2">Berbasis Sains</h3>
                    <p class="text-accent/70 text-sm">Dari neuroscience hingga kimia parfum</p>
                </div>
                <div data-ns-animate data-delay="0.6"
                    class="col-span-12 md:col-span-6 lg:col-span-3 rounded-3xl bg-white/10 backdrop-blur-sm p-6 text-center">
                    <div class="text-4xl mb-4">🌸</div>
                    <h3 class="text-accent font-semibold mb-2">Gratis & Terbuka</h3>
                    <p class="text-accent/70 text-sm">Akses penuh tanpa biaya untuk semua orang</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================
CTA Section
===========================-->
<section class="py-18 md:py-20 lg:py-24 xl:py-39">
    <div class="main-container">
        <div data-ns-animate data-delay="0.1" class="text-center space-y-6">
            <h2 class="text-heading-3 text-secondary font-normal">Siap Menjelajahi Dunia Parfum?</h2>
            <p class="mx-auto max-w-[500px] text-secondary/60">
                Baca materi lengkap tentang seni dan sains parfum — sepenuhnya gratis.
            </p>
            <div data-ns-animate data-delay="0.4">
                <div class="btn-v3-secondary btn-v3-lg w-fit mx-auto cursor-pointer rounded-2xl px-1 py-1"
                    data-button-v3>
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
                                Mulai Baca Sekarang
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
