<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    <div class="max-w-4xl mx-auto my-20">
        <h1 class="text-center text-6xl font-bold">MAGIC CHEES</h1>
        <img class="h-auto max-w-lg rounded-lg mx-auto my-5" src="{{ url('./images/MC-min.png') }}" alt="">
        <p class="text-center">Selamat datang, para pemain berjiwa strategis dan penuh keajaiban! Kami dengan bangga
            menghadirkan ajang pertarungan yang penuh intrik dan kecerdasan taktis - Turnamen Magic Chess MLBB! Suasana
            ajaib dan keajaiban tak terbatas akan menyertai setiap langkah para pemain dalam pertarungan yang epik ini.
        </p>
        <div class="mt-4">
            <h1 class="text-center text-3xl font-bold">PERSYARATAN PENDAFTARAN</h1>
        </div>
        <ul style="list-style-type:square; margin-bottom:10px; list-style-position:outside">
            <li>
                Player
                <ul style="margin-top: 5px; list-style-position:inside">
                    <li>Nama Player <strong>[Nama Lengkap]</strong></li>
                    <li>Nickname Player <strong>[Nama Game]</strong></li>
                    <li>ID MLBB Player</li>
                    <li>Kertu Tanda Pelajar/Kartu Tanda Penduduk/Raport Sekolah Player <strong>[Wajib]</strong></li>
                </ul>
            </li>
            <li>
                Pemain Cadangan <strong>[Hanya Boleh Bawa 1]</strong>
            </li>
            <li>
                No Whatsapp Perwakilan <strong>[Kapten]</strong>
            </li>
        </ul>
        <div class="text-center mt-10">Kami mengajak seluruh pemain yang bersemangat dan berkeinginan untuk merasakan
            keajaiban dalam pertarungan Magic Chess MLBB untuk bergabung dan menjadi bagian dari pertarungan seru ini.
            Ayo tunjukkan kepiawaian kalian dalam mengendalikan pasukan ajaib dan meraih gelar juara dalam turnamen ini.
        </div>
        <div class="flex justify-center">
            <a href="{{ route('pekanesport.form') }}"
                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 my-5 mx-auto font-black">Daftar
            </a>
        </div>
    </div>
</x-new-app-layout>
