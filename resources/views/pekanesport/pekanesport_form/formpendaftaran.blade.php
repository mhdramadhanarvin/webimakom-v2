<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    <div class="max-w-6xl mx-auto my-20 bg-white p-10 rounded-3xl drop-shadow-md">
    <form id="formPendaftaran" class="max-w-4xl mx-auto" action="{{ route('submit.form.pendaftaran') }}" method="post" enctype="multipart/form-data>
        @csrf
        <div class="mb-5">
            <h1 class="text-center text-4xl font-black text-zinc-800" >Form Pendaftaran Pekan Esport</h1>
                <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">
                    <label for="nama_tim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Tim</label>
                    <input type="text" id="nama_tim" name="nama_tim" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama tim">
        </div>
        <div class="mb-5">
            <label for="nomor_wa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor WA Leader</label>
            <input type="text" id="nomor_wa" name="nomor_wa" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nomor WA leader" required>
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Leader</label>
            <input type="email" id="email" name="email" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nomor WA leader" required>
        </div>
            <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- PLAYER 1 (LEADER) --}}
        <div class="mb-5">
            <label for="nama_player_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Player 1</label>
            <input type="text" id="nama_player_1" name="nama_player_1" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama player 1" required>
        </div>
        <div class="mb-5">
            <label for="nickname_player_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Player 1</label>
            <input type="text" id="nickname_player_1" name="nickname_player_1" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname player 1" required>
        </div>
        <div class="mb-5">
            <label for="id_player_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Player 1</label>
            <input type="text" id="id_player_1" name="id_player_1" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="id player 1" required>
        </div>
        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- PLAYER 2 --}}
        <div class="mb-5">
            <label for="nama_player_2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Player 2</label>
            <input type="text" id="nama_player_2" name="nama_player_2" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama player 2">
        </div>
        <div class="mb-5">
            <label for="nickname_player_2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Player 2</label>
            <input type="text" id="nickname_player_2" name="nickname_player_2" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname player 2">
        </div>
        <div class="mb-5">
            <label for="id_player_2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Player 2</label>
            <input type="text" id="id_player_2" name="id_player_2" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="id player 2">
        </div>
        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- PLAYER 3 --}}
        <div class="mb-5">
            <label for="nama_player_3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Player 3</label>
            <input type="text" id="nama_player_3" name="nama_player_3" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama Player 3">
        </div>
        <div class="mb-5">
            <label for="nickname_player_3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Player 3</label>
            <input type="text" id="nickname_player_3" name="nickname_player_3" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname Player 3">
        </div>
        <div class="mb-5">
            <label for="id_player_3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Player 3</label>
            <input type="text" id="id_player_3" name="id_player_3" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="id Player 3">
        </div>
        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- PLAYER 4 --}}
        <div class="mb-5">
            <label for="nama_player_4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Player 4</label>
            <input type="text" id="nama_player_4" name="nama_player_4" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama Player 4">
        </div>
        <div class="mb-5">
            <label for="nickname_player_4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Player 4</label>
            <input type="text" id="nickname_player_4" name="nickname_player_4" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname Player 4">
        </div>
        <div class="mb-5">
            <label for="id_player_4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Player 4</label>
            <input type="text" id="id_player_4" name="id_player_4" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="id Player 4">
        </div>
        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- PLAYER 5 --}}
        <div class="mb-5">
            <label for="nama_player_5" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Player 5</label>
            <input type="text" id="nama_player_5" name="nama_player_5" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama Player 5">
        </div>
        <div class="mb-5">
            <label for="nickname_player_5" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Player 5</label>
            <input type="text" id="nickname_player_5" name="nickname_player_5" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname Player 5">
        </div>
        <div class="mb-5">
            <label for="id_player_5" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Player 5</label>
            <input type="text" id="id_player_5"  name="id_player_5" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="id Player 5">
        </div>
        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- PLAYER 6 --}}
        <div class="mb-5">
            <label for="nama_player_6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Player 6 (Cadangan)</label>
            <input type="text" id="nama_player_6" name="nama_player_6" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama Player 6">
        </div>
        <div class="mb-5">
            <label for="nickname_player_6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Player 6 (Cadangan)</label>
            <input type="text" id="nickname_player_6" name="nickname_player_6" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname Player 6">
        </div>
        <div class="mb-5">
            <label for="id_player_6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Player 6 (Cadangan)</label>
            <input type="text" id="id_player_6" name="id_player_6" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="id Player 6">
        </div>
        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- FILE PDF --}}
        <div class="mb-5" >
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Kartu Tanda Penduduk / Kartu Tanda Pelajar / Raport Sekolah Seluruh Tim (PDF)</label>
            <input name="pdf_file" class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
        </div>
        <button type="submit" class="mx-auto w-1/2 text-white bg-purple-700 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-700 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Ambil referensi formulir
            var formPendaftaran = document.getElementById('formPendaftaran');

            // Tambahkan event listener untuk menangani pengiriman formulir
            formPendaftaran.addEventListener('submit', function (event) {
                event.preventDefault(); // Mencegah formulir dikirim dengan cara default

                // Tampilkan alert berhasil
                alert('Formulir berhasil dikirim!');

                // Kembali ke menu utama (gunakan fungsi route untuk menghasilkan URL berdasarkan nama route)
                window.location.href = '{{ route("home") }}';
            });
        });
    </script>

</x-new-app-layout>
