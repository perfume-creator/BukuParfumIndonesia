<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Extension\Table\TableExtension;
use League\CommonMark\Environment\Environment;
use League\CommonMark\MarkdownConverter;

class BookController extends Controller
{
    /**
     * Chapter data: id, title, subtitle, markdown file
     */
    private function getChapters(): array
    {
        return [
            ['id' => 1, 'title' => 'Mekanisme Penciuman', 'subtitle' => 'Biologi, Neuroscience, & Psikologi Indera Penciuman', 'file' => 'Chapter_01_Summary.md', 'icon' => '👃'],
            ['id' => 2, 'title' => 'Sejarah Parfum', 'subtitle' => 'Evolusi Wewangian dari Ritual Sakral ke Industri Global', 'file' => 'Chapter_02_Summary.md', 'icon' => '📜'],
            ['id' => 3, 'title' => 'Bahan Baku Parfum', 'subtitle' => 'Palet Sang Perfumer: Bahan Alami & Sintetik', 'file' => 'Chapter_03_Summary.md', 'icon' => '🌿'],
            ['id' => 4, 'title' => 'Seni Meracik Parfum', 'subtitle' => 'Kehidupan, Pendidikan, & Realitas Kerja Sang Perfumer', 'file' => 'Chapter_04_Summary.md', 'icon' => '🎨'],
            ['id' => 5, 'title' => 'Keluarga Wangi', 'subtitle' => 'Dari Brief Pemasaran hingga Rak Toko: Seni Melawan Bisnis', 'file' => 'Chapter_05_Summary.md', 'icon' => '🌺'],
            ['id' => 6, 'title' => 'Parfum & Budaya', 'subtitle' => 'Dari Lab ke Pabrik: Proses Manufaktur Parfum', 'file' => 'Chapter_06_Summary.md', 'icon' => '🌍'],
            ['id' => 7, 'title' => 'Industri Parfum', 'subtitle' => 'Perjalanan dari Pabrik ke Tangan Pelanggan', 'file' => 'Chapter_07_Summary.md', 'icon' => '🏭'],
            ['id' => 8, 'title' => 'Parfum & Pemasaran', 'subtitle' => 'Mesin Uang Paling Wangi di Dunia: Blockbusters & Best-Sellers', 'file' => 'Chapter_08_Summary.md', 'icon' => '📈'],
            ['id' => 9, 'title' => 'Cara Memakai Parfum', 'subtitle' => 'Pemberontakan Melawan Kebosanan Mainstream', 'file' => 'Chapter_09_Summary.md', 'icon' => '✨'],
            ['id' => 10, 'title' => 'Koleksi & Apresiasi', 'subtitle' => 'Reformulasi, Penuaan, dan Kematian Sebuah Aroma', 'file' => 'Chapter_10_Summary.md', 'icon' => '💎'],
            ['id' => 11, 'title' => 'Parfum & Sains Modern', 'subtitle' => 'Cara Mencium, Membeli, dan Memakai Seperti Pro', 'file' => 'Chapter_11_Summary.md', 'icon' => '🔬'],
            ['id' => 12, 'title' => 'Masa Depan Parfum', 'subtitle' => 'Menjawab Mitos & Kamus Besar Bahasa Parfum', 'file' => 'Chapter_12_13_Summary.md', 'icon' => '🚀'],
        ];
    }

    /**
     * Book metadata
     */
    private function getBook(): array
    {
        return [
            'title' => 'Panduan Lengkap Seni & Sains Parfum',
            'slug' => 'scent-and-soul',
            'description' => 'Materi komprehensif dari buku parfum terbaik dunia dalam Bahasa Indonesia.',
        ];
    }

    /**
     * Show the homepage
     */
    public function home()
    {
        return view('home', [
            'book' => $this->getBook(),
            'chapters' => $this->getChapters(),
            'pageTitle' => 'BPI (Buku Parfum Indonesia)',
        ]);
    }

    /**
     * Show the chapter listing page
     */
    public function chapters()
    {
        return view('book.chapters', [
            'book' => $this->getBook(),
            'chapters' => $this->getChapters(),
            'pageTitle' => 'BPI - Scent and Soul',
        ]);
    }

    /**
     * Show a single chapter
     */
    public function show(int $id)
    {
        $chapters = $this->getChapters();
        $chapter = collect($chapters)->firstWhere('id', $id);

        if (!$chapter) {
            abort(404);
        }

        // Read and parse the markdown file
        $markdownPath = resource_path('markdown/' . $chapter['file']);
        if (!file_exists($markdownPath)) {
            abort(404);
        }

        $markdown = file_get_contents($markdownPath);

        // Configure CommonMark with Table extension
        $config = [];
        $environment = new Environment($config);
        $environment->addExtension(new \League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension());
        $environment->addExtension(new TableExtension());
        $converter = new MarkdownConverter($environment);

        $htmlContent = $converter->convert($markdown)->getContent();

        return view('book.chapter', [
            'book' => $this->getBook(),
            'chapter' => $chapter,
            'chapters' => $chapters,
            'content' => $htmlContent,
            'pageTitle' => 'Scent and Soul - Bab ' . $chapter['id'] . ' ' . $chapter['title'],
        ]);
    }
}
