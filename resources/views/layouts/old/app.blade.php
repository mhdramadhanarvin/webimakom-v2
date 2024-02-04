<!DOCTYPE html>
<html lang="en" ng-app="uscope">

<head>
    <title>Imakom - UNPAB</title>
    <link rel="shortcut icon" href="{{ url('./images/logo_imakom.png') }}" type="image/x-icon" />
    <link rel="icon" href="{{ url('./images/logo_imakom.png') }}" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<html>

<body>
    {{-- <div class="loading-screen loader-visible" id="loader">
        <img src="{{ url('./images/logo_imakom.png') }}" />
    </div> --}}

    <!-- Header -->
    <nav class="nav-dark" x-data="{ open: false }">
        <div class="logo light">
            <a href="#"><img src="{{ url('./images/kata_imakom.png') }}" alt="" height="50"></a>
        </div>
        <div class="logo dark">
            <a href="#"><img src="{{ url('./images/logo_imakom.png') }}" style="height: 50px; width: 90px;" /></a>

        </div>
        <div class="menu bg-black lg:bg-inherit" :class="open ? 'open' : ''">
            <a class="menu-item" href="{{ route('home') }}"> BERANDA</a>
            <a class="menu-item" href="{{ route('pekanesport') }}">
                <span class="inline-flex items-center py-1 px-3 rounded-full text-md font-medium text-gray-800 bg-red-500 dark:bg-white/10 dark:text-white">
                    NEW
                </span>
                PEKAN ESPORT VOL. 2
            </a>
            <a class="menu-item" href="{{ route('structure') }}">PENGURUS</a>
            <a class="menu-item" href="{{ route('workplan') }}">PROGRAM KERJA</a>
            <a class="menu-item" href="{{ route('article') }}">ARTIKEL</a>
            <a class="menu-item" href="{{ route('gallery') }}">DOKUMENTASI</a>
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
            <img src="{{ url('./images/footer.jpeg') }}" />
        </div>
        <div class="overlay content-center first-content tertienary">
            <div class="content">
                <div class="row">
                    <div class="col-6">
                        <h2 class="block-title text-2xl">Berkarya Bersama Ikatan Mahasiswa Komputer</h2>
                        <p class="text-lg mb-3">
                            Ikuti selalu berita terbaru dari IMAKOM melalui sosial media
                        <div class="social-box">
                            <a href="https://www.facebook.com/imakom.unpab" class="text-lg block">
                                <i class="fa-brands fa-facebook"></i>
                                <span>Imakom UNPAB</span>
                            </a>
                            <a href="https://www.instagram.com/imakom_unpab" class="text-lg block">
                                <i class="fa-brands fa-instagram"></i>
                                <span>imakom_unpab</span>
                            </a>
                            <a href="mailto:imakom@pancabudi.co.id" class="text-lg block">
                                <i class="fa-solid fa-envelope"></i>
                                <span>imakom@pancabudi.co.id</span>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div class="responsive-gap"></div> --}}

            </div>
        </div>
    </div>
    <div class="text-center text-slate-300 p-3" style="background-color:rgba(51, 46, 77, 0.82);">
        <span>Copyright &copy; 2023 All Right Reserved. Ikatan Mahasiswa Komputer.</span>
    </div>
</body>

</html>
