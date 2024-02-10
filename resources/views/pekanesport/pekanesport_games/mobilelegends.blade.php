<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    <div class="max-w-4xl mx-auto my-20">
        <h1 class="text-center text-6xl font-bold">MOBILE LEGENDS</h1>
        <img class="h-auto max-w-lg rounded-lg mx-auto my-5" src="{{ url('./images/ML-min.webp') }}" alt="">
        <p class="text-center">Selamat datang, para pecinta Mobile Legends! Persiapkan diri Anda untuk pertarungan epik
            yang akan memukau di Land of Dawn, di mana para pemain akan
            bersaing untuk memenangkan gelar juara. Mari daftarkan tim pilihan mu yang siap menunjukkan kehebatannya
            dalam pertempuran Mobile Legends yang seru.</p>
        <div class="mt-4">
            <h1 class="text-center text-3xl font-bold">PERSYARATAN PENDAFTARAN</h1>
        </div>
        <ul style="list-style-type:square; margin-bottom:10px; list-style-position:outside">
            <li>
                <div class="mt-5">Nama Team: <strong>[Nama Tim MLBB]</strong></div>
            </li>
            <li>
                Player
                <ul style="margin-top: 5px; list-style-position:inside">
                    <li>Nama Player 1-5 <strong>[Nama Lengkap]</strong></li>
                    <li>Nickname Player 1-5 <strong>[Nama Game]</strong></li>
                    <li>ID ML Player 1-5</li>
                    <li>Kertu Tanda Pelajar/Kartu Tanda Penduduk/Raport Sekolah Player 1-5 <strong>[Wajib]</strong></li>
                </ul>
            </li>
            <li>
                Pemain Cadangan <strong>[Hanya Boleh Bawa 1]</strong>
            </li>
            <li>
                No Whatsapp Perwakilan <strong>[Kapten]</strong>
            </li>
        </ul>
        <div class="text-center mt-10">Kami mengundang Anda semua untuk mengikuti pertandingan sengit ini dan
            merasakan ketegangan di setiap serangan dan pertahanan. Bersama-sama kita akan melawan kehebatan tim-tim
            Mobile Legends dalam menciptakan kisah-kisah heroik yang tak terlupakan di Land of Dawn!</div>
        <div class="flex justify-center">
            <a href="{{ route('pekanesport.form') }}"
                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 my-5 mx-auto font-black">Daftar
            </a>
        </div>
    </div>
</x-new-app-layout>
