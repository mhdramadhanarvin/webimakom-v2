@section('title', 'Pendaftaran Pekan Esport Vol.2 - Imakom Unpab')
@section('description', 'Form registration to be participant in event Pekan Esport Vol. 2')
<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    <div class="max-w-full lg:max-w-2xl mx-auto my-20 bg-white p-8 rounded-3xl drop-shadow-md">
        <form id="formPendaftaran" class="mx-auto" action="{{ route('pekanesport.form.submit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center text-4xl font-black text-zinc-800">Pendaftaran <br>Pekan Esport Vol. 2</h1>
            <hr class="h-1 mx-auto bg-purple-500 border-0 rounded my-6 dark:bg-white">
            @if ($errors->any())
            <div class="relative leading-normal py-4 px-5 text-red-700 bg-red-100 rounded-lg" role="alert">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="mb-5">
                <label for="game_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Cabang Olahraga</label>
                <select id="game_id" name="game_id" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-400 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" required>
                    <option value="" selected>Pilih</option>
                    @foreach ($optionCabor as $cabor)
                    <option value="{{ $cabor->id }}">{{ $cabor->game_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-5">
                <label for="nama_tim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Tim</label>
                <input type="text" id="nama_tim" name="team_name" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-400 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan nama tim" value="{{ old('team_name') }}">
            </div>
            <div class="mb-5">
                <label for="nomor_wa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor WA Pemain 1</label>
                <input type="text" id="nomor_wa" name="whatsapp_leader" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-400 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan nomor WA pemain 1" value="{{ old('whatsapp_leader') }}" required>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Pemain 1</label>
                <input type="email" id="email" name="email" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-400 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan email pemain 1" value="{{ old('email') }}" required>
            </div>

            {{-- PLAYER 1 (LEADER) --}}
            <div class="mb-5">
                <label for="name_player[]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemain 1</label>
                <input type="text" id="name_player[]" name="name_player[player1]" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-400 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan nama pemain 1" value="{{ old('name_player.0') }}" required>
            </div>
            <div class="mb-5">
                <label for="nickname_player[]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Game Pemain 1</label>
                <input type="text" id="nickname_player[]" name="nickname_player[player1]" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-400 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan nickname game pemain 1" value="{{ old('nickname_player.0') }}" required>
            </div>
            <div class="mb-5">
                <label for="id_player[]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Game Pemain 1</label>
                <input type="text" id="id_player[]" name="id_player[player1]" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-400 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan id game pemain 1" value="{{ old('id_player.0') }}" required>
            </div>

            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="ss_game">
                    Screenshot Profile Game Pemain 1
                </label>
                <input class="bg-slate-100 text-gray-900 text-sm rounded-lg border border-slate-500 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" id="ss_game" name="ss_game[player1]" type="file" accept="image/png, image/jpeg" required>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="ktp">
                    Kartu Tanda Penduduk / Kartu Pelajar / Raport Sekolah Pemain 1
                </label>
                <input class="bg-slate-100 text-gray-900 text-sm rounded-lg border border-slate-400 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" id="ktp" name="identity_card[player1]" type="file" accept="image/png, image/jpeg" required>
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
                            <input type="text" :id="index+'name_player'" :name="'name_player[player'+ increment(index) +']'" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-400 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan nama pemain 2" required>
                        </div>
                        <div class="mb-5">
                            <label :for="index+'nickname_player'" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nickname Game Pemain <span x-text="index+2"></span>
                            </label>
                            <input type="text" :id="index+'nickname_player'" :name="'nickname_player[player'+ increment(index) +']'" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-400 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan nickname game pemain 2" required>
                        </div>
                        <div class="mb-5">
                            <label :for="index+'id_player'" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Game Pemain <span x-text="index+2"></span></label>
                            <input type="text" :id="index+'id_player'" :name="'id_player[player'+ increment(index) +']'" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-400 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan id game pemain 2" required>
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" :for="index+'ss_game'">
                                Screenshot Profile Game Pemain <span x-text="index+2"></span></label>
                            </label>
                            <input class="bg-slate-100 text-gray-900 text-sm rounded-lg border border-slate-400 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" :id="index+'ss_game'" :name="'ss_game[player'+ increment(index) +']'" type="file" accept="image/png, image/jpeg" required>
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" :for="index+'ktp'">
                                Kartu Tanda Penduduk / Kartu Pelajar / Raport Sekolah Pemain <span x-text="index+2"></span></label>
                            </label>
                            <input class="bg-slate-100 text-gray-900 text-sm rounded-lg border border-slate-400 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" :id="index+'ktp'" type="file" :name="'identity_card[player'+ increment(index) +']'" accept="image/png, image/jpeg" required>
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
    @if (session('status'))
    <div x-data="{ open: true }">
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="open">
            <!--
            Background backdrop, show/hide based on modal state.

            Entering: "ease-out duration-300"
              From: "opacity-0"
              To: "opacity-100"
            Leaving: "ease-in duration-200"
              From: "opacity-100"
              To: "opacity-0"
        -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-100 transition-opacity"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <!--
                Modal panel, show/hide based on modal state.

                Entering: "ease-out duration-300"
                  From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                  To: "opacity-100 translate-y-0 sm:scale-100"
                Leaving: "ease-in duration-200"
                  From: "opacity-100 translate-y-0 sm:scale-100"
                  To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
              -->
                    <div class="relative transform rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-96">
                        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                            <div class="text-center">
                                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="text-green-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                    </svg>
                                </div>
                                <div class="mt-5 text-center">
                                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Pendaftaran Berhasil</h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">Terima kasih telah melakukan perdaftaran, selanjutnya menunggu validasi oleh tim IMAKOM - UNPAB dan akan diinformasikan melalui email yang didaftarkan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 mb-2">
                            <button @click="open = false" type="button" class="inline-flex w-full justify-center rounded-md bg-purple-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-purple-500">TUTUP</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

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
                },
                increment(int) {
                    return int + 2
                }
            }
        }
    </script>
</x-new-app-layout>
