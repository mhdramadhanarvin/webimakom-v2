<x-new-app-layout>
    <!-- HEADER -->
    <div class="fullscreen full-image">
        <div class="image">
            <img src="{{ url('./images/pancabudi.jpg') }}" style="" />
        </div>
        <div class="overlay content-center first-content tertienary">
            <div class="content">
                <div class="row">
                    <div class="col-6">
                        <img class="responsive-img logo-stempel" src="{{ url('./images/logo_imakom.png') }}">
                        {{-- style="width: 300px; height: 300px; border:1px solid tomato; box-shadow: 0 0 5px 5px rgb(165, 84, 70);" /> --}}
                    </div>
                    <div class="col-6">
                        {{-- <span class="text-4xl">Hai...🖐</span> --}}
                        <span class="text-4xl">Selamat datang di</span>
                        <span class="text-4xl text-violet-500 inline-block">IMAKOM</span>
                        {{-- <span class="text-3xl text-red-500 inline-block">Ikatan Mahasiswa Komputer</span> --}}
                        <p class="text-xl">
                            <span class="text-red-500"> Mahasiswa Komputer (IMAKOM) </span> merupakan organisasi resmi
                            kemahasiswaan pada tingkat
                            program studi sebagai eksekutor di Universitas Pembangunan Panca Budi.
                        </p>
                        {{-- <a href=""><button
                                style="background:orange ; padding:15px; border-radius:15px; color:white; font-size:15px;">
                                sobat imakom</button></a> --}}
                        {{-- <br> --}}
                        {{-- <a href="#first-content">
                        </a> --}}
                        <button class="scroll-for-more"></button>
                    </div>
                </div>
                <div class="responsive-gap"></div>
            </div>
        </div>
    </div>

    <!-- ARTIKEL -->
    <div class="fullscreen tertienary" id="first-content">
        <div class="header-clear"></div>
        <div class="content">
            <div class="row">
                <div class="col-6">
                    <h5>Tentang IMAKOM</h5>
                    <p style="text-indent: 40px; text-align: justify;">
                        Ikatan Mahasiswa Imakom Universitas Pembangunan Panca Budi (IMAKOM-UNPAB) bersifat mandiri,
                        kekeluargaan, adil, aspiratif, artisipatif, representatif, efektif, efisien, beserta transparan.
                        IMAKOM-UNPAB diselenggarakan berdasarkan prinsip dari, oleh, dan untuk mahasiswa Komputer dengan
                        memberi peranan serta keleluasaan lebih kepada mahasiswa. IMAKOM-UNPAB disahkan pada Tahun 2000,
                        dan sekarang sudah memasuki usia yang ke 21 dengan tagline “kreatif dan bersahabat”.
                    </p>
                    {{-- <br /> --}}

                    <hr class="split tertienary" />

                    {{-- <br /><br /> --}}
                </div>
                <div class="col-6">
                    <h5>Visi</h5>
                    <p>1. Ikatan Mahasiswa Imakom Universitas Pembangunan Panca Budi diharapkan dapat menjadi suatu
                        kesatuan
                        yang utuh dalam mewujudkan solidaritas dan sinergi.</p>
                    <hr class="split tertienary" />

                    <p>2. Selain itu Ikatan Mahasiswa Imakom Universitas Pembangunan Panca Budi (IMAKOM-UNPAB) bisa
                        menjadi
                        pribadi yang lebih aktif, berkompeten, kreatif,inovatif, dan mandiri.</p>
                    <hr class="split tertienary" />
                    <br /><br />
                    <h5>Misi</h5>

                    <p>1. Menaungi mahasiswa Komputer UNPAB agar dapat menjadi pribadi yang bermafaat bagi masyarakat.
                    </p>
                    <hr class="split tertienary" />

                    <p>2. Mempererat relasi antara mahasiswa dengan dosen dan staff untuk mencapai kesejahteraan
                        sekaligus
                        dapat membangun keharmonisan sebagai satu keluarga.</p>
                    <hr class="split tertienary" />

                    <p>3. Mengoptimalkan himpunan sebagai wadah aspirasi mahasiswa Komputer Unpab.</p>
                    <hr class="split tertienary" />


                </div>
            </div>
        </div>
    </div>

    <!-- FOTO-FOTO -->
    {{-- <div class="content-shadow" style="">
        <div class="row no-padding">
            <div class="col-3">
                <a class="ukm-box full-image">
                    <div class="image">
                        <img src="images/sasude (2).jpeg" />
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a class="ukm-box full-image">
                    <div class="image">
                        <img src="images/sasude (5).jpeg" />
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a class="ukm-box full-image">
                    <div class="image">
                        <img src="images/sasude (10).jpeg" />
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a class="ukm-box full-image">
                    <div class="image">
                        <img src="images/sasude (7).jpeg" />
                    </div>
                </a>
            </div>

        </div>
        <div class="row no-padding">
            <div class="col-3">
                <a class="ukm-box full-image">
                    <div class="image">
                        <img src="images/ibb/3.jpeg" />
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a class="ukm-box full-image">
                    <div class="image">
                        <img src="images/ibb/ibb1 (1).jpg" />
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a class="ukm-box full-image">
                    <div class="image">
                        <img src="images/ibb/ibb1 (3).jpg" />
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a class="ukm-box full-image">
                    <div class="image">
                        <img src="images/ibb/ibb2.jpg" />
                    </div>
                </a>
            </div>
        </div>
    </div> --}}

    <!-- vidio singkat -->
    {{-- <div class="fullscreen tertienary" id="first-content">
        <div class="header-clear"></div>
        <div class="content">
            <div class="row">
                <div class="col-6" style="margin-top:-60px; ">
                    <video style="border:5px solid orange; border-radius:15px; box-shadow:0 0 5px 5px;" width="430vh"
                        height="400px" controls>
                        <source src="images/VS.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-6">
                    <h1>IMAKOM <span style="background:tomato;">MENGABDI</span> </h1>
                    <h5 style="font-family:cursive;"> TEMA : "meningkatkan potensi anak dalam bidang IT di era Digital"
                    </h5>
                    <h4># SASUDE 🖐</h4>
                    <p style="margin-top:-10px;">Kegiatan ini berlangsung di salah satu sanggar yang bernama sanggar
                        anak
                        sungai deli tepat nya di <u style="color:orange;">Tapian sungai deli Jln.Brigjen katamso
                            kelurahan
                            sei mati kecamatan medan maimun</u> </p>
                    <hr class="split tertienary" />
                </div>
            </div>
        </div>
    </div> --}}


    <!-- vidio singkat end-->
    <!-- Struktur Kepengurusan -->
    <div class="text-center mt-20">
        <h3 class="fw-black">
            STRUKTUR KEPENGURUSAN IMAKOM
        </h3>
        <span class="text-3xl font-semibold block mb-3">
            TA 2023/2024
        </span>
        <div class="inline-flex">
            <img src="{{ url('./images/logo_imakom.png') }}" width="70" height="70" alt="">
            <img src="{{ url('./images/logo_pancabudi.png') }}" width="70" height="70" alt="">
        </div>
        {{-- <p></p><br /> --}}
    </div>

    <div class="grid justify-center">
        <div class="container">
            @foreach ($lead as $l)
                <div class="card">
                    <div class="content">
                        <div class="imgBx">
                            <img src="{{ $l->photo == null ? url('./images/default.jpg') : asset('storage/' . $l->photo) }}"
                                alt="">
                        </div>
                        <div class="contentBx">
                            <h2>{{ $l->name }}<br><span>{{ str()->ucwords(Illuminate\Support\Str::of(str()->snake($l->position->name))->replace('_', ' ')) . ' Umum' }}</span>
                            </h2>
                        </div>
                    </div>

                    <ul class="sci">
                        <li style="--i:1">
                            <a href="{{ $l->facebook ?? '#' }}">
                                <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li style="--i:2">
                            <a href="{{ $l->instagram ?? '#' }}">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li style="--i:3">
                            <a href="{{ $l->linkedin ?? '#' }}">
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
                            <img src="{{ $secr->photo == null ? url('./images/default.jpg') : asset('storage/' . $secr->photo) }}"
                                alt="">
                        </div>
                        <div class="contentBx">
                            <h2>{{ $secr->name }}<br><span>{{ str()->ucwords(Illuminate\Support\Str::of(str()->snake($secr->position->name))->replace('_', ' ')) . ' Umum' }}</span>
                            </h2>
                        </div>
                    </div>

                    <ul class="sci">
                        <li style="--i:1">
                            <a href="{{ $secr->facebook ?? '#' }}">
                                <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li style="--i:2">
                            <a href="{{ $secr->instagram ?? '#' }}">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li style="--i:3">
                            <a href="{{ $secr->linkedin ?? '#' }}">
                                <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</x-new-app-layout>
