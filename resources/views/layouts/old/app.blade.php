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
    <nav class="nav-dark">
        <div class="logo light">
            <a href="#"><img src="{{ url('./images/kata_imakom.png') }}" alt="" height="50"></a>
        </div>
        <div class="logo dark">
            <a href="#"><img src="{{ url('./images/logo_imakom.png') }}" style="height: 50px; width: 90px;" /></a>

        </div>
        <div class="menu">
            <a class="menu-item" href="{{ route('home') }}"> BERANDA</a>
            <a class="menu-item" href="{{ route('structure') }}">PENGURUS</a>
            <a class="menu-item" href="{{ route('workplan') }}">PROGRAM KERJA</a>
            <a class="menu-item" href="{{ route('article') }}">ARTIKEL</a>
            <a class="menu-item" href="{{ route('gallery') }}">DOKUMENTASI</a>
        </div>

        <div class="nav-icon4" id="mobile-nav">
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

                            <br />
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

    {{-- <footer>
        <div style="background-color:rgba(51, 46, 77, 0.82); display: flex; justify-content: center; align-items: center; height: 100px;">
            <h3 style="font-size:15px;">&copy;Ikatan Mahasiswa Komputer</h3>
        </div>
    </footer> --}}


    {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    {{-- <script src="js/lib/jquery-3.2.1.min.js"></script>
    <script src="js/lib/a-library.js"></script> --}}

    {{-- <script type="text/javascript">
        (function() {
            window['__CF$cv$params'] = {
                r: '6c1f637b39194a02',
                m: 'fS07O9W_NK1.uDQ.ovkBn9VpAiaMGqVD4cyYCsQFCfo-1640239425-0-AdfMdx7TnZUxSqAwr4NaXt8ktZgYapkAI5t4lBYPzsWyZ9xS6Vi4/LtJw9ghf3kTXg/VDqZgzquLz5OKq6EdtspXnpChc9dJBRBKViaR76kBCZxWTDCfbmk0njXhUCNJzuUHJxZYXLm3HtnVUxkqRZM=',
                s: [0x293c9eafd3, 0xd5b655de11],
            }
        })();
    </script> --}}
</body>

</html>
