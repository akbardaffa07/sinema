<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <title>{{config('app.name', 'SINEMA')}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Informasi Ekstrakurikuler Mahasiswa Universitas Tadulako">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-png" href="{{ asset('favicon.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        /* Style untuk slider */
        .hero-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .hero-slider .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.6);
            /* Gelapkan gambar agar teks terbaca */
        }

        .typed-cursor {
            font-size: inherit;
            color: inherit;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Header / Navbar -->
    <header id="header" class="bg-white/80 backdrop-blur-md sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            {{-- <a href="#" class="flex items-center gap-3">
                <img src="{{asset('favicon.png')}}" alt="Logo Untad" class="h-10 w-auto">
                <span class="text-3xl font-bold text-gray-800">
                    SINEMA<span class="text-amber-500">.</span>
                </span>
            </a> --}}
            <img src="{{asset('images/sinema.png')}}" alt="Logo Sinema" class="h-12 w-auto">
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#fitur" class="text-gray-600 hover:text-amber-500 transition-colors">Fitur</a>
                <a href="#tentang" class="text-gray-600 hover:text-amber-500 transition-colors">Tentang</a>
                <a href="#faq" class="text-gray-600 hover:text-amber-500 transition-colors">FAQ</a>
            </nav>
            <a href="{{ route('filament.admin.auth.login') }}"
                class="bg-amber-500 text-white font-semibold px-5 py-2 rounded-lg hover:bg-amber-600 transition-all shadow-md">
                Masuk
            </a>
        </div>
    </header>

    <!-- Hero Section dengan Slider -->
    <main class="relative overflow-hidden">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('images/graduation.jpeg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/students.jpeg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/medals.jpeg')}}" alt="">
                </div>
            </div>
        </div>

        <!-- Konten Teks di Atas Slider -->
        <section class="container mx-auto px-6 py-24 md:py-32 text-center relative z-10">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-6 shadow-text">
                    <span id="hero-text"></span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-10 shadow-text">
                    SINEMA adalah platform digital resmi Universitas Tadulako untuk mencatat, memvalidasi, dan merekap
                    semua kegiatan ekstrakurikuler Anda menjadi transkrip nilai yang berharga.
                </p>
                <div class="flex justify-center gap-4">
                    <a href="{{ route('filament.admin.auth.register') }}"
                        class="bg-amber-500 text-white font-bold px-8 py-4 rounded-lg hover:bg-amber-600 transition-all shadow-lg text-lg">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </section>
    </main>

    <section id="fitur" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Semua dalam Satu Platform</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Dari pengajuan hingga menjadi transkrip, SINEMA
                    menyederhanakan seluruh proses pencatatan prestasi non-akademik Anda.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Fitur 1 -->
                <div
                    class="bg-gray-50 p-8 rounded-xl shadow-sm border border-gray-100 transition-all duration-300 feature-card">
                    <div
                        class="bg-amber-100 text-amber-600 rounded-full h-12 w-12 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Pengajuan Mudah & Cepat</h3>
                    <p class="text-gray-600">Lupakan formulir kertas. Ajukan kegiatan dan unggah bukti prestasi Anda
                        kapan saja, di mana saja, hanya dengan beberapa klik.</p>
                </div>
                <!-- Fitur 2 -->
                <div
                    class="bg-gray-50 p-8 rounded-xl shadow-sm border border-gray-100 transition-all duration-300 feature-card">
                    <div
                        class="bg-amber-100 text-amber-600 rounded-full h-12 w-12 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Pantau Poin Real-time</h3>
                    <p class="text-gray-600">Lihat total poin ekstrakurikuler dan nilai mutu Anda secara langsung
                        di dashboard pribadi
                        setiap kali pengajuan diverifikasi oleh admin.</p>
                </div>
                <!-- Fitur 3 -->
                <div
                    class="bg-gray-50 p-8 rounded-xl shadow-sm border border-gray-100 transition-all duration-300 feature-card">
                    <div
                        class="bg-amber-100 text-amber-600 rounded-full h-12 w-12 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Transkrip Otomatis</h3>
                    <p class="text-gray-600">Butuh transkrip untuk syarat tugas akhir atau melamar kerja? Unduh TEM
                        (Transkrip Ekstrakurikuler Mahasiswa) resmi kapanpun Anda butuhkan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Section -->
    <section id="tentang" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="md:flex items-center justify-between">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <img src="{{asset('images/students1.jpeg')}}" alt="Mahasiswa Berdiskusi"
                        class="rounded-2xl shadow-2xl w-full">
                </div>
                <div class="md:w-1/2 md:pl-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Lebih dari Sekadar Angka</h2>
                    <p class="text-gray-600 text-lg mb-4">SINEMA dikembangkan berdasarkan Panduan Pelaksanaan
                        Ekstrakurikuler Mahasiswa Universitas Tadulako untuk memberikan apresiasi dan pengakuan formal
                        atas setiap usaha, kreativitas, dan kontribusi Anda di luar ruang kelas.</p>
                    <p class="text-gray-600 text-lg">Setiap poin yang Anda kumpulkan adalah bukti nyata dari
                        pengembangan soft skill, kepemimpinan, dan karakter yang akan menjadi nilai tambah tak ternilai
                        setelah lulus.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Pertanyaan yang Sering Diajukan</h2>
            </div>
            <div class="max-w-3xl mx-auto" x-data="{ openFaq: 1 }">
                <!-- FAQ 1 -->
                <div class="border-b border-gray-200 py-6">
                    <button @click="openFaq = (openFaq === 1 ? 0 : 1)"
                        class="w-full text-left flex justify-between items-center">
                        <span class="text-lg font-semibold">Apa itu SINEMA?</span>
                        <svg class="w-6 h-6 transition-transform" :class="{ 'rotate-180': openFaq === 1 }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="openFaq === 1" x-collapse class="mt-4 text-gray-600">
                        SINEMA adalah <span class="font-semibold">Sistem Informasi Ekstrakurikuler
                            Mahasiswa</span> yang dirancang untuk
                        memfasilitasi pengajuan dan pengelolaan kegiatan ekstrakurikuler mahasiswa di Universitas
                        Tadulako. Dengan SINEMA, mahasiswa dapat
                        mengajukan kegiatan, mengumpulkan poin, dan mendapatkan pengakuan atas kontribusi mereka di
                        luar ruang kelas.
                    </div>
                </div>
                <!-- FAQ 2 -->
                <div class="border-b border-gray-200 py-6">
                    <button @click="openFaq = (openFaq === 2 ? 0 : 2)"
                        class="w-full text-left flex justify-between items-center">
                        <span class="text-lg font-semibold">Apa syarat menggunakan layanan ini?</span>
                        <svg class="w-6 h-6 transition-transform" :class="{ 'rotate-180': openFaq === 2 }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="openFaq === 2" x-collapse class="mt-4 text-gray-600">
                        Syarat utama adalah Anda harus sudah mengikuti kegiatan <span class="font-semibold">Pengenalan
                            Kehidupan Kampus bagi Mahasiswa Baru (PKKMB)</span>. Setelah mendaftar, Anda akan diminta
                        untuk mengunggah sertifikat PKKMB sebelum bisa
                        mengajukan kegiatan lainnya.
                    </div>
                </div>
                <!-- FAQ 3 -->
                <div class="border-b border-gray-200 py-6">
                    <button @click="openFaq = (openFaq === 3 ? 0 : 3)"
                        class="w-full text-left flex justify-between items-center">
                        <span class="text-lg font-semibold">Kegiatan apa saja yang bisa saya ajukan?</span>
                        <svg class="w-6 h-6 transition-transform" :class="{ 'rotate-180': openFaq === 3 }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="openFaq === 3" x-collapse class="mt-4 text-gray-600">
                        Semua kegiatan yang tercantum dalam buku panduan resmi, mulai dari lomba, seminar, kepanitiaan,
                        hingga pengabdian masyarakat. Sistem kami sudah menyediakan daftar lengkapnya, Anda hanya perlu
                        memilih.
                    </div>
                </div>
                <!-- FAQ 4 -->
                <div class="border-b border-gray-200 py-6">
                    <button @click="openFaq = (openFaq === 4 ? 0 : 4)"
                        class="w-full text-left flex justify-between items-center">
                        <span class="text-lg font-semibold">Berapa lama proses verifikasi pengajuan?</span>
                        <svg class="w-6 h-6 transition-transform" :class="{ 'rotate-180': openFaq === 4 }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="openFaq === 4" x-collapse class="mt-4 text-gray-600">
                        Proses verifikasi dilakukan oleh admin dari bagian kemahasiswaan. Waktunya bervariasi, namun
                        Anda akan melihat status pengajuan Anda berubah di dashboard (Submitted, Verified, atau
                        Rejected) setelah diperiksa.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold">Mulai Kumpulkan Poin Ekstrakurikuler Anda Hari Ini!</h3>
            <a href="{{ route('filament.admin.auth.register') }}"
                class="mt-8 inline-block bg-amber-500 text-white font-bold px-8 py-4 rounded-lg hover:bg-amber-600 transition-all shadow-lg text-lg">
                Daftar Sekarang
            </a>
            <div class="mt-12 border-t border-gray-700 pt-8">
                <p>&copy; 2025 SINEMA - Universitas Tadulako. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var typed = new Typed('#hero-text', {
                strings: ['Catat Prestasimu,<br>Raih Masa Depanmu.'],
                typeSpeed: 50, // Kecepatan mengetik
                backSpeed: 25, // Kecepatan menghapus
                backDelay: 5000, // Waktu jeda sebelum menghapus
                loop: true, // <-- Tambahkan ini untuk loop
                showCursor: true,
                cursorChar: '_',
                autoInsertCss: true,
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        const swiper = new Swiper('.hero-slider', {
            loop: true,
            effect: 'fade', // Efek transisi fade
            autoplay: {
                delay: 5000, // Ganti gambar setiap 5 detik
                disableOnInteraction: false,
            },
        });
    </script>
</body>

</html>