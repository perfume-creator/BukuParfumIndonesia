@extends('layouts.app')

@push('styles')
<style>
    /* Markdown content styling */
    .chapter-content h1 {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 1rem;
        margin-top: 2rem;
        color: #0B1B3F;
    }
    .chapter-content h2 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
        margin-top: 1.75rem;
        color: #0B1B3F;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #e5e7eb;
    }
    .chapter-content h3 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        margin-top: 1.5rem;
        color: #142e6e;
    }
    .chapter-content h4 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        margin-top: 1.25rem;
        color: #1e3a8a;
    }
    .chapter-content p {
        margin-bottom: 1rem;
        line-height: 1.8;
        color: #374151;
    }
    .chapter-content ul, .chapter-content ol {
        margin-bottom: 1rem;
        padding-left: 1.5rem;
    }
    .chapter-content ul {
        list-style-type: disc;
    }
    .chapter-content ol {
        list-style-type: decimal;
    }
    .chapter-content li {
        margin-bottom: 0.5rem;
        line-height: 1.7;
        color: #374151;
    }
    .chapter-content li ul, .chapter-content li ol {
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .chapter-content blockquote {
        border-left: 4px solid #142e6e;
        padding-left: 1.5rem;
        margin: 1.5rem 0;
        color: #4b5563;
        font-style: italic;
        background: #f8fafc;
        padding: 1rem 1.5rem;
        border-radius: 0 12px 12px 0;
    }
    .chapter-content strong {
        font-weight: 700;
        color: #1f2937;
    }
    .chapter-content em {
        font-style: italic;
    }
    .chapter-content hr {
        margin: 2rem 0;
        border: 0;
        border-top: 1px solid #e5e7eb;
    }
    .chapter-content table {
        width: 100%;
        border-collapse: collapse;
        margin: 1.5rem 0;
        font-size: 0.875rem;
    }
    .chapter-content th {
        background: #f1f5f9;
        border: 1px solid #e2e8f0;
        padding: 0.75rem;
        text-align: left;
        font-weight: 600;
    }
    .chapter-content td {
        border: 1px solid #e2e8f0;
        padding: 0.75rem;
    }
    .chapter-content code {
        background: #f1f5f9;
        padding: 0.15rem 0.4rem;
        border-radius: 4px;
        font-size: 0.875rem;
    }

    /* Sidebar active link */
    .sidebar-link.active {
        background: #142e6e;
        color: white !important;
    }
</style>
@endpush

@section('content')
<!-- =========================
Breadcrumb
===========================-->
<section class="pt-32 pb-6 lg:pt-44">
    <div class="main-container">
        <nav data-ns-animate data-delay="0.1" class="flex items-center gap-2 text-sm text-secondary/60">
            <a href="{{ route('home') }}" class="hover:text-secondary transition-colors">Home</a>
            <span>/</span>
            <a href="{{ route('book.chapters') }}" class="hover:text-secondary transition-colors">Daftar Materi</a>
            <span>/</span>
            <span class="text-secondary">Bab {{ $chapter['id'] }}</span>
        </nav>
    </div>
</section>

<!-- =========================
Chapter content with sidebar
===========================-->
<section class="pb-18 md:pb-20 lg:pb-24 xl:pb-39">
    <div class="main-container">
        <div class="grid grid-cols-12 gap-8">
            <!-- Main content -->
            <div class="col-span-12 lg:col-span-8 xl:col-span-9">
                <!-- Chapter header -->
                <div data-ns-animate data-delay="0.2"
                    class="mb-8 rounded-3xl bg-gradient-to-r from-[#142e6e] to-[#1e40af] p-8 md:p-12">
                    <span class="text-white/60 text-sm uppercase tracking-wider">Bab {{ $chapter['id'] }}</span>
                    <h1 class="text-white mt-2 mb-3 font-medium">{{ $chapter['title'] }}</h1>
                    <p class="italic text-lg" style="color: #ffd700;">{{ $chapter['subtitle'] }}</p>
                </div>

                <!-- Rendered markdown content -->
                <div data-ns-animate data-delay="0.3" class="chapter-content">
                    {!! $content !!}
                </div>

                <!-- Prev/Next navigation -->
                <div data-ns-animate data-delay="0.2"
                    class="mt-12 flex flex-col gap-4 border-t border-secondary/10 pt-8 sm:flex-row sm:justify-between">
                    @php
                        $prevChapter = collect($chapters)->firstWhere('id', $chapter['id'] - 1);
                        $nextChapter = collect($chapters)->firstWhere('id', $chapter['id'] + 1);
                    @endphp

                    @if($prevChapter)
                    <a href="{{ route('book.chapter', $prevChapter['id']) }}"
                        class="group flex items-center gap-3 rounded-2xl border border-secondary/10 p-4 transition-all hover:border-primary/30 hover:shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-secondary/40 group-hover:text-primary transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                        <div>
                            <span class="text-xs text-secondary/40">Sebelumnya</span>
                            <p class="text-sm text-secondary font-medium">{{ $prevChapter['title'] }}</p>
                        </div>
                    </a>
                    @else
                    <div></div>
                    @endif

                    @if($nextChapter)
                    <a href="{{ route('book.chapter', $nextChapter['id']) }}"
                        class="group flex items-center gap-3 rounded-2xl border border-secondary/10 p-4 transition-all hover:border-primary/30 hover:shadow-md text-right">
                        <div>
                            <span class="text-xs text-secondary/40">Selanjutnya</span>
                            <p class="text-sm text-secondary font-medium">{{ $nextChapter['title'] }}</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-secondary/40 group-hover:text-primary transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="col-span-12 lg:col-span-4 xl:col-span-3">
                <div data-ns-animate data-delay="0.4"
                    class="sticky top-28 rounded-3xl border border-secondary/10 bg-white p-6">
                    <h3 class="text-heading-6 text-secondary font-medium mb-4">Daftar Materi</h3>
                    <ul class="space-y-1">
                        @foreach($chapters as $ch)
                        <li>
                            <a href="{{ route('book.chapter', $ch['id']) }}"
                                class="sidebar-link flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm transition-all duration-200 {{ $ch['id'] === $chapter['id'] ? 'active' : 'text-secondary/60 hover:bg-secondary/5 hover:text-secondary' }}">
                                <span class="flex size-7 shrink-0 items-center justify-center rounded-lg {{ $ch['id'] === $chapter['id'] ? 'bg-white/20' : 'bg-secondary/5' }} text-xs font-medium">
                                    {{ $ch['id'] }}
                                </span>
                                <span class="truncate">{{ $ch['title'] }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
