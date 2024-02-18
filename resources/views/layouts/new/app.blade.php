<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title', 'Ikatan Mahasiswa Komputer | Universitas Pembangunan Pancabudi')</title>
    <meta name="description" content="Ikatan Mahasiswa Komputer IMAKOM merupakan organisasi resmi kemahasiswaan pada tingkat program studi sebagai eksekutor di Universitas Pembangunan Panca Budi.">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="IMAKOM, IMAKOM UNPAB, Ikatan Mahasiswa Komputer, Universitas Pembangunan Pancabudi Budi, organisasi Pancabudi Budi">
    <meta name="author" content="Ikatan Mahasiswa Komputer" />
    <meta image="{{ url('/images/logo_imakom.webp') }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{ url('/images/logo_imakom.webp') }}">
    <meta property="og:title" content="Ikatan Mahasiswa Komputer | Universitas Pembangunan Pancabudi">
    <meta property="og:site_name" content="Imakom Unpab">
    <meta property="og:url" content="https://imakomunpab.com/">
    <meta property="og:description" content="Ikatan Mahasiswa Komputer IMAKOM merupakan organisasi resmi kemahasiswaan pada tingkat program studi sebagai eksekutor di Universitas Pembangunan Panca Budi.">
    <link rel="icon" type="image/png" href="{{ url('/images/favicon.ico') }}" />
    <link rel="apple-touch-icon" href="{{ url('/images/favicon.ico') }}">
    <link rel="canonical" href="https://imakomunpab.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9WRVPWRHSN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9WRVPWRHSN');
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<html>

<body>
    <!-- Header -->
    <nav class="nav-dark" x-data="{ open: false }">
        <div class="logo light">
            <a href="{{ route('home') }}" aria-label="Light Logo Imakom"><img src="{{ url('./images/kata_imakom.webp') }}" alt="Logo Kata Imakom" height="50"></a>
        </div>
        <div class="logo dark">
            <a href="{{ route('home') }}" aria-label="Dark Logo Imakom"><img src="{{ url('./images/logo_imakom.webp') }}" style="height: 50px; width: 90px;" alt="Logo Header Imakom" /></a>
        </div>
        <div class="menu bg-black lg:bg-inherit" :class="open ? 'open' : ''">
            <a class="menu-item" href="{{ route('home') }}" aria-label="Anchor to Beranda">BERANDA</a>
            <a class="menu-item" href="{{ route('pekanesport') }}">
                <span class="inline-flex items-center py-1 px-3 rounded-full text-md font-medium text-gray-800 bg-red-500 dark:bg-white/10 dark:text-white">
                    NEW
                </span>
                PEKAN ESPORT VOL. 2
            </a>
            <a class="menu-item" href="{{ route('structure') }}" aria-label="Anchor to Pengurus">PENGURUS</a>
            <a class="menu-item" href="{{ route('workplan') }}" aria-label="Anchor to Program Kerja">PROGRAM KERJA</a>
            <a class="menu-item" href="{{ route('article') }}" aria-label="Anchor to Artikel">ARTIKEL</a>
            <a class="menu-item" href="{{ route('gallery') }}" aria-label="Anchor to Dokumentasi">DOKUMENTASI</a>
        </div>

        <div class="nav-icon4" id="mobile-nav" x-on:click="open = ! open">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    {{ $slot }}
    <!-- finish struktur -->
    <div class="fullscreen full-image max-h-[40em]">
        <div class="image">
            <img src="{{ url('./images/footer.webp') }}" alt="Background Footer" />
        </div>
        <div class="overlay content-center first-content tertienary">
            <div class="content">
                <div class="row">
                    <div class="col-6">
                        <h2 class="block-title text-2xl">Berkarya Bersama Ikatan Mahasiswa Komputer</h2>
                        <p class="text-lg mb-3">
                            Ikuti selalu berita terbaru dari IMAKOM melalui sosial media
                        <div class="social-box">
                            <a href="https://www.facebook.com/imakom.unpab" class="text-lg block" aria-label="Facebook Imakom">
                                <i class="fa-brands fa-facebook"></i>
                                <span>Imakom UNPAB</span>
                            </a>
                            <a href="https://www.instagram.com/imakom_unpab" class="text-lg block" aria-label="Instagram Imakom">
                                <i class="fa-brands fa-instagram"></i>
                                <span>imakom_unpab</span>
                            </a>
                            <a href="mailto:imakom@pancabudi.co.id" class="text-lg block" aria-label="Email Imakom">
                                <i class="fa-solid fa-envelope"></i>
                                <span>imakom@pancabudi.co.id</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center text-slate-300 p-3 bg-[#332e4dd1]">
        <span>Copyright &copy; {{ date('Y') }} All Right Reserved. Ikatan Mahasiswa Komputer. Version {{ env('VERSION', '1.0.0') }}.</span>
    </div>
</body>

</html>
