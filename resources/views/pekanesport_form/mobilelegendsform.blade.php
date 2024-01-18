<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    <div class="max-w-6xl mx-auto my-20 bg-white p-10 rounded-3xl drop-shadow-md">
    <form class="max-w-4xl mx-auto">
        <div class="mb-5">
            <h1 class="text-center text-4xl font-black text-zinc-800" >Form Pendaftaran Mobile Legends</h1>
                <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">
                    <label for="namaTim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Tim</label>
                    <input type="text" id="namaTim" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama tim" required>
        </div>
        <div class="mb-5">
            <label for="nomorWa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor WA Leader</label>
            <input type="text" id="nomorWa" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nomor WA leader" required>
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Leader</label>
            <input type="email" id="email" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nomor WA leader" required>
        </div>
            <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- PLAYER 1 (LEADER) --}}
        <div class="mb-5">
            <label for="namaLeader" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Leader</label>
            <input type="text" id="namaLeader" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama leader" required>
        </div>
        <div class="mb-5">
            <label for="nicknameLeader" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Leader</label>
            <input type="text" id="nicknameLeader" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname leader" required>
        </div>
        <div class="mb-5">
            <label for="idLeader" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Leader</label>
            <input type="text" id="idLeader" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="id leader" required>
        </div>
        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- PLAYER 2 --}}
        <div class="mb-5">
            <label for="namaPlayer2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Player 2</label>
            <input type="text" id="namaPlayer2" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama player 2" required>
        </div>
        <div class="mb-5">
            <label for="nicknamePlayer2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Player 2</label>
            <input type="text" id="nicknamePlayer2" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname player 2" required>
        </div>
        <div class="mb-5">
            <label for="idPlayer2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Player 2</label>
            <input type="text" id="idPlayer2" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="id player 2" required>
        </div>
        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- PLAYER 3 --}}
        <div class="mb-5">
            <label for="namaPlayer3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Player 3</label>
            <input type="text" id="namaPlayer3" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama Player 3" required>
        </div>
        <div class="mb-5">
            <label for="nicknamePlayer3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Player 3</label>
            <input type="text" id="nicknamePlayer3" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname Player 3" required>
        </div>
        <div class="mb-5">
            <label for="idPlayer3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Player 3</label>
            <input type="text" id="idPlayer3" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="id Player 3" required>
        </div>
        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- PLAYER 4 --}}
        <div class="mb-5">
            <label for="namaPlayer4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Player 4</label>
            <input type="text" id="namaPlayer4" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama Player 4" required>
        </div>
        <div class="mb-5">
            <label for="nicknamePlayer4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Player 4</label>
            <input type="text" id="nicknamePlayer4" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname Player 4" required>
        </div>
        <div class="mb-5">
            <label for="idPlayer4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Player 4</label>
            <input type="text" id="idPlayer4" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="id Player 4" required>
        </div>
        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- PLAYER 5 --}}
        <div class="mb-5">
            <label for="namaPlayer5" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Player 5</label>
            <input type="text" id="namaPlayer5" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama Player 5" required>
        </div>
        <div class="mb-5">
            <label for="nicknamePlayer5" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Player 5</label>
            <input type="text" id="nicknamePlayer5" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname Player 5" required>
        </div>
        <div class="mb-5">
            <label for="idPlayer5" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Player 5</label>
            <input type="text" id="idPlayer5" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="id Player 5" required>
        </div>
        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- PLAYER 6 --}}
        <div class="mb-5">
            <label for="namaPlayer6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Player 6 (Cadangan)</label>
            <input type="text" id="namaPlayer6" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama Player 6" required>
        </div>
        <div class="mb-5">
            <label for="nicknamePlayer6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Player 6 (Cadangan)</label>
            <input type="text" id="nicknamePlayer6" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname Player 6" required>
        </div>
        <div class="mb-5">
            <label for="idPlayer6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Player 6 (Cadangan)</label>
            <input type="text" id="idPlayer6" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="id Player 6" required>
        </div>
        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

        {{-- FILE PDF --}}
        <div class="mb-5" >
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Kartu Tanda Penduduk / Kartu Tanda Pelajar / Raport Sekolah Seluruh Tim (PDF)</label>
<input class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
        </div>
        <button type="submit" class="mx-auto w-1/2 text-white bg-purple-700 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-700 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
    </div>
</x-new-app-layout>