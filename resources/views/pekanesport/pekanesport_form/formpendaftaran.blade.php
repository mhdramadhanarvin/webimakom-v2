<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    <div class="max-w-2xl mx-auto my-20 bg-white p-10 rounded-3xl drop-shadow-md">
        <form id="formPendaftaran" class="max-w-4xl mx-auto" action="{{ route('submit.form.pendaftaran') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class=" mb-5">
                <h1 class="text-center text-4xl font-black text-zinc-800">Form Pendaftaran Pekan Esport</h1>
                <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">
                <label for="nama_tim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Tim</label>
                <input type="text" id="nama_tim" name="nama_tim" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama tim">
            </div>
            <div class="mb-5">
                <label for="nomor_wa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor WA Leader</label>
                <input type="text" id="nomor_wa" name="nomor_wa" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nomor WA leader" required>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Leader</label>
                <input type="email" id="email" name="email" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan email leader" required>
            </div>

            {{-- PLAYER 1 (LEADER) --}}
            <div class="mb-5">
                <label for="nama_player_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Leader</label>
                <input type="text" id="nama_player_1" name="nama_player_1" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama leader" required>
            </div>
            <div class="mb-5">
                <label for="nickname_player_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Game Leader</label>
                <input type="text" id="nickname_player_1" name="nickname_player_1" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nickname game leader" required>
            </div>
            <div class="mb-5">
                <label for="id_player_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Game Leader</label>
                <input type="text" id="id_player_1" name="id_player_1" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan id game leader" required>
            </div>

            {{-- PLAYER 2 --}}
            <div x-data="addRemove()">
                <template x-for="(field, index) in fields" :key="field.id">
                    <div>

                        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">
                        <div class="mb-5">
                            <label for="nama_player[]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nama Pemain <span x-text="index+2"></span>
                            </label>
                            <input type="text" id="nama_player[]" name="nama_player[]" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama pemain 2">
                        </div>
                        <div class="mb-5">
                            <label for="nickname_player[]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nickname Game Pemain <span x-text="index+2"></span>
                            </label>
                            <input type="text" id="nickname_player[]" name="nickname_player[]" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nickname game pemain 2">
                        </div>
                        <div class="mb-5">
                            <label for="id_player[]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Game Pemain <span x-text="index+2"></span></label>
                            <input type="text" id="id_player[]" name="id_player[]" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan id game pemain 2">
                        </div>
                    </div>
                </template>
                <button type="button" @click="addNewField()" class="text-white bg-purple-700 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-700 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">+ Tambah Pemain</button>
            </div>
            <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

            {{-- FILE PDF --}}
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">
                    Kartu Tanda Penduduk / Kartu Tanda Pelajar / Raport Sekolah Seluruh Tim (PDF)
                </label>
                <input name="pdf_file" class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            </div>
            <button type="submit" class="mx-auto w-1/2 text-white bg-purple-700 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-700 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>

    <script>
        function addRemove() {
            return {
                fields: [],
                addNewField() {
                    this.fields.push({
                        id: new Date().getTime() + this.fields.length
                    });
                },
                removeField(field) {
                    this.fields.splice(this.fields.indexOf(field), 1);
                }
            }
        }
    </script>

</x-new-app-layout>
