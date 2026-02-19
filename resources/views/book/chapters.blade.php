@extends('layouts.app')

@section('content')
<!-- =========================
Breadcrumb / Page header
===========================-->
<section class="pt-32 pb-10 lg:pt-44">
    <div class="main-container">
        <div data-ns-animate data-delay="0.1" class="space-y-4 text-center">
            <nav class="flex items-center justify-center gap-2 text-sm text-secondary/60">
                <a href="{{ route('home') }}" class="hover:text-secondary transition-colors">Home</a>
                <span>/</span>
                <span class="text-secondary">Daftar Materi</span>
            </nav>
            <h1 class="text-secondary font-normal">{{ $book['title'] }}</h1>
            <p class="mx-auto max-w-[600px] text-secondary/60">
                Jelajahi 12 bab materi lengkap tentang dunia parfum — dari sains penciuman hingga masa depan industri wewangian.
            </p>
        </div>
    </div>
</section>

<!-- =========================
Full Chapter listing
===========================-->
<section class="pb-18 md:pb-20 lg:pb-24 xl:pb-39">
    <div class="main-container">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
            @foreach($chapters as $chapter)
            <div data-ns-animate data-delay="{{ 0.1 + ($loop->index * 0.05) }}">
                <div
                    class="group relative flex h-full flex-col overflow-hidden rounded-3xl border border-secondary/10 bg-white p-8 transition-all duration-300 hover:border-primary/30 hover:shadow-xl">
                    <!-- Icon + Number -->
                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex size-14 items-center justify-center rounded-2xl bg-primary/10 text-3xl">
                            {{ $chapter['icon'] }}
                        </div>
                        <div>
                            <span class="text-xs uppercase tracking-wider text-secondary/40 font-medium">Bab {{ $chapter['id'] }}</span>
                            <h3 class="text-heading-6 text-secondary font-medium leading-tight">{{ $chapter['title'] }}</h3>
                        </div>
                    </div>

                    <!-- Subtitle -->
                    <p class="text-sm text-secondary/50 italic mb-6">{{ $chapter['subtitle'] }}</p>

                    <!-- Spacer to push button to the bottom -->
                    <div class="mt-auto">
                        <div class="btn-v3-lg btn-v3-white border-secondary/20 border w-full cursor-pointer rounded-2xl px-1 py-1"
                            data-button-v3>
                            <a href="{{ route('book.chapter', $chapter['id']) }}" class="block">
                                <div class="flex items-center gap-x-4">
                                    <span
                                        class="relative z-20 flex shrink-0 items-center justify-center overflow-hidden rounded-[13px] p-2.5 transition-all duration-700 ease-[cubic-bezier(0.4,0,0.2,1)]"
                                        data-button-v3-icon aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-6">
                                            <path d="M11 5H13V7H11V5Z" />
                                            <path d="M14 8H16V10H14V8Z" />
                                            <path d="M8 8H10V10H8V8Z" />
                                            <path d="M17 11H19V13H17V11Z" />
                                            <path d="M11 11H13V13H11V11Z" />
                                            <path d="M14 14H16V16H14V14Z" />
                                            <path d="M8 14H10V16H8V14Z" />
                                            <path d="M11 17H13V19H11V17Z" />
                                        </svg>
                                    </span>
                                    <span
                                        class="shrink-0 pr-4 transition-all duration-700 ease-[cubic-bezier(0.4,0,0.2,1)] first-letter:uppercase"
                                        data-button-v3-text aria-hidden="true">
                                        Baca Materi
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
