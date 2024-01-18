<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    <div class="max-w-6xl mx-auto my-20 bg-white p-10 rounded-3xl drop-shadow-md">
    <form class="max-w-4xl mx-auto">
        <div class="mb-5">
            <h1 class="text-center text-4xl font-black text-zinc-800" >Form Pendaftaran Magic Chess</h1>
                <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">
        </div>
        <div class="mb-5">
            <label for="nomorWa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor WA Player 1</label>
            <input type="text" id="nomorWa" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nomor WA leader" required>
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Player 1</label>
            <input type="email" id="email" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nomor WA leader" required>
        </div>

        {{-- PLAYER 1 --}}
        <div class="mb-5">
            <label for="namaPlayer1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Player1</label>
            <input type="text" id="namaPlayer1" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama Player1" required>
        </div>
        <div class="mb-5">
            <label for="nicknamePlayer1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Player1</label>
            <input type="text" id="nicknamePlayer1" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nickname Player1" required>
        </div>
        <div class="mb-5">
            <label for="idPlayer1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Player1</label>
            <input type="text" id="idPlayer1" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="id leader" required>
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