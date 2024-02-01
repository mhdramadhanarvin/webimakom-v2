<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    <div class="max-w-2xl mx-auto my-20 bg-white p-10 rounded-3xl drop-shadow-md">
        <form id="formPendaftaran" class="max-w-4xl mx-auto" action="{{ route('pekanesport.form.submit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class=" mb-5">
                <h1 class="text-center text-4xl font-black text-zinc-800">Form Pendaftaran Pekan Esport</h1>
                <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">
                @if ($errors->any())
                    {{ var_dump(old('name_player.0')) }}
                    <div class="relative leading-normal py-4 px-5 text-red-700 bg-red-100 rounded-lg" role="alert">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <label for="nama_tim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Tim</label>
                <input type="text" id="nama_tim" name="team_name" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama tim" value="{{ old('team_name') }}" >
            </div>
            <div class="mb-5">
                <label for="nomor_wa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor WA Pemain 1</label>
                <input type="text" id="nomor_wa" name="whatsapp_leader" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nomor WA pemain 1" value="{{ old('whatsapp_leader') }}" required>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Pemain 1</label>
                <input type="email" id="email" name="email" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan email pemain 1" value="{{ old('email') }}" required>
            </div>

            {{-- PLAYER 1 (LEADER) --}}
            <div class="mb-5">
                <label for="name_player[]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemain 1</label>
                <input type="text" id="name_player[]" name="name_player[0]" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama pemain 1" value="{{ old('name_player.0') }}" required>
            </div>
            <div class="mb-5">
                <label for="nickname_player[]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Game Pemain 1</label>
                <input type="text" id="nickname_player[]" name="nickname_player[0]" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nickname game pemain 1" value="{{ old('nickname_player.0') }}" required>
            </div>
            <div class="mb-5">
                <label for="id_player[]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Game Pemain 1</label>
                <input type="text" id="id_player[]" name="id_player[0]" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan id game pemain 1" value="{{ old('id_player.0') }}" required>
            </div>

            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="ss_game">
                    Screenshot Profile Game Pemain 1
                </label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-zinc-200 dark:text-zinc-400 focus:outline-none dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 p-0.5" id="ss_game" name="ss_game[0]" type="file" accept="image/png, image/jpeg" required>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="ktp">
                    Kartu Tanda Penduduk / Kartu Pelajar / Raport Sekolah Pemain 1
                </label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-zinc-200 dark:text-zinc-400 focus:outline-none dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 p-0.5" id="ktp" name="identity_card[0]" type="file" accept="image/png, image/jpeg" required>
            </div>


            {{-- PLAYER 2 --}}
            <div x-data="addRemove()">
                <template x-for="(field, index) in fields" :key="field.id">
                    <div>
                        <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">
                        <button type="button" @click="removeField(field)" class="align-right text-white bg-red-700 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-700 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mb-5"><i class="fa-solid fa-trash"></i> Hapus Pemain</button>
                        <div class="mb-5">
                            <label :for="index+'name_player'" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nama Pemain <span x-text="index+2"></span>
                            </label>
                            <input type="text" :id="index+'name_player'" name="name_player[]" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama pemain 2" required>
                        </div>
                        <div class="mb-5">
                            <label :for="index+'nickname_player'" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nickname Game Pemain <span x-text="index+2"></span>
                            </label>
                            <input type="text" :id="index+'nickname_player'" name="nickname_player[]" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nickname game pemain 2" required>
                        </div>
                        <div class="mb-5">
                            <label :for="index+'id_player'" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Game Pemain <span x-text="index+2"></span></label>
                            <input type="text" :id="index+'id_player'" name="id_player[]" class="bg-slate-100 text-gray-900 text-sm rounded-lg focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan id game pemain 2" required>
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" :for="index+'ss_game'">
                                Screenshot Profile Game Pemain <span x-text="index+2"></span></label>
                            </label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-zinc-200 dark:text-zinc-400 focus:outline-none dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 p-0.5" :id="index+'ss_game'" name="ss_game[]" type="file" accept="image/png, image/jpeg" required>
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" :for="index+'ktp'">
                                Kartu Tanda Penduduk / Kartu Pelajar / Raport Sekolah Pemain <span x-text="index+2"></span></label>
                            </label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-zinc-200 dark:text-zinc-400 focus:outline-none dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 p-0.5" :id="index+'ktp'" type="file" name="identity_card[]" accept="image/png, image/jpeg" required>
                        </div>
                    </div>
                </template>
                <button type="button" @click="addNewField()" class="text-white bg-purple-700 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-700 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">+ Tambah Pemain</button>
            </div>
            <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

            {{-- FILE PDF --}}
            <button type="submit" class="w-full text-white bg-purple-700 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">DAFTAR</button>
        </form>
    </div>

    <script>
        const addRemove = () => {
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
