@section('description', 'Homepage of imakom unpab website describe about what the Imakom organization, vision and mision, and what is the current structural organization')
<x-new-app-layout>
    <!-- HEADER -->
    <div class="fullscreen full-image lg:max-h-[40em] max-h-full">
        <div class="image">
            <img src="{{ url('./images/pancabudi.webp') }}" alt="" />
        </div>
        <div class="overlay content-center first-content tertienary">
            <div class="content">
                <div class="row">
                    <div class="col-6 flex justify-center lg:justify-normal mb-10 lg:mb-0">
                        <img class="responsive-img logo-stempel lg:max-h-full max-h-52 lg:max-w-full max-w-52" src="{{ url('./images/logo_imakom.webp') }}" alt="">
                    </div>
                    <div class="col-6">
                        <span class="text-4xl">Selamat datang di</span>
                        <span class="text-4xl text-violet-500 inline-block">IMAKOM</span>
                        <p class="text-xl">
                            <span class="text-red-500">Ikatan Mahasiswa Komputer (IMAKOM) </span>
                            merupakan organisasi resmi kemahasiswaan pada tingkat program studi sebagai eksekutor di
                            Universitas Pembangunan Panca Budi.
                        </p>
                    </div>
                </div>
                <div class="responsive-gap"></div>
            </div>
        </div>
    </div>

    <!-- ARTIKEL -->
    <div class="tertienary py-16" id="first-content">
        <div class="content">
            <div class="row">
                <div class="col-6">
                    <h3 class="font-bold mb-2 text-2xl">Tentang IMAKOM</h3>
                    <p class="text-lg">
                        Ikatan Mahasiswa Imakom Universitas Pembangunan Panca Budi (IMAKOM-UNPAB) bersifat mandiri,
                        kekeluargaan, adil, aspiratif, artisipatif, representatif, efektif, efisien, beserta transparan.
                        IMAKOM-UNPAB diselenggarakan berdasarkan prinsip dari, oleh, dan untuk mahasiswa Komputer dengan
                        memberi peranan serta keleluasaan lebih kepada mahasiswa. IMAKOM-UNPAB disahkan pada Tahun 2000,
                        dan sekarang sudah memasuki usia yang ke 21 dengan tagline “kreatif dan bersahabat”.
                    </p>
                    <hr class="split tertienary" />
                </div>
                <div class="col-6">
                    <h3 class="font-bold mb-2 text-2xl">Visi</h3>
                    <ol class="list-decimal list-outside text-lg">
                        <li>
                            Ikatan Mahasiswa Imakom Universitas Pembangunan Panca Budi diharapkan dapat menjadi suatu
                            kesatuan
                            yang utuh dalam mewujudkan solidaritas dan sinergi
                        </li>
                        <li>
                            Selain itu Ikatan Mahasiswa Imakom Universitas Pembangunan Panca Budi (IMAKOM-UNPAB) bisa
                            menjadi
                            pribadi yang lebih aktif, berkompeten, kreatif,inovatif, dan mandiri.
                        </li>
                    </ol>
                    <hr class="split tertienary" />

                    <h3 class="font-bold mb-2 text-2xl">Misi</h3>
                    <ol class="list-decimal list-outside text-lg">
                        <li>
                            Menaungi mahasiswa Komputer UNPAB agar dapat menjadi pribadi yang bermafaat bagi masyarakat.
                        </li>
                        <li>
                            Mempererat relasi antara mahasiswa dengan dosen dan staff untuk mencapai kesejahteraan
                            sekaligus dapat membangun keharmonisan sebagai satu keluarga.
                        </li>
                        <li>
                            Mengoptimalkan himpunan sebagai wadah aspirasi mahasiswa Komputer Unpab.
                        </li>
                    </ol>
                    <hr class="split tertienary" />
                </div>
            </div>
        </div>
    </div>

    <!-- Struktur Kepengurusan -->
    <div class="text-center mt-20">
        <h3 class="text-3xl font-bold">
            STRUKTUR KEPENGURUSAN IMAKOM
        </h3>
        <span class="text-3xl font-semibold block mb-3">
            TA 2023/2024
        </span>
        <div class="inline-flex">
            <img src="{{ url('./images/logo_imakom.webp') }}" width="70" height="70" alt="">
            <img src="{{ url('./images/logo_pancabudi.webp') }}" width="70" height="70" alt="">
        </div>
    </div>

    <div class="grid justify-center">
        <div class="container">
            @foreach ($lead as $l)
                <div class="card">
                    <div class="content">
                        <div class="imgBx">
                            <img src="{{ $l->photo == null ? url('./images/default.webp') : asset('storage/' . $l->photo) }}"
                                alt="">
                        </div>
                        <div class="contentBx">
                            <h2 class="text-xl">{{ $l->name }}<br><span class="text-yellow-300 text-lg">{{ str()->ucwords(Illuminate\Support\Str::of(str()->snake($l->position->name))->replace('_', ' ')) . ' Umum' }}</span>
                            </h2>
                        </div>
                    </div>

                    <ul class="sci">
                        <li style="--i:1">
                            <a href="{{ $l->facebook ?? '#' }}" aria-label="Facebook of {{ $l->name }}">
                                <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li style="--i:2">
                            <a href="{{ $l->instagram ?? '#' }}" aria-label="Instagram of {{ $l->name }}">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li style="--i:3">
                            <a href="{{ $l->linkedin ?? '#' }}" aria-label="LinkedIn of {{ $l->name }}">
                                <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
        <div class="container">
            @foreach ($secretary as $secr)
                <div class="card">
                    <div class="content">
                        <div class="imgBx">
                            <img src="{{ $secr->photo == null ? url('./images/default.webp') : asset('storage/' . $secr->photo) }}"
                                alt="">
                        </div>
                        <div class="contentBx">
                            <h2 class="text-xl">{{ $secr->name }}<br><span class="text-yellow-300 text-lg">{{ str()->ucwords(Illuminate\Support\Str::of(str()->snake($secr->position->name))->replace('_', ' ')) . ' Umum' }}</span>
                            </h2>
                        </div>
                    </div>

                    <ul class="sci">
                        <li style="--i:1">
                            <a href="{{ $secr->facebook ?? '#' }}" aria-label="Facebook of {{ $l->name }}">
                                <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li style="--i:2">
                            <a href="{{ $secr->instagram ?? '#' }}" aria-label="Instagram of {{ $l->name }}">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li style="--i:3">
                            <a href="{{ $secr->linkedin ?? '#' }}" aria-label="LinkedIn of {{ $l->name }}">
                                <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</x-new-app-layout>
