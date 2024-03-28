@section('title', 'Pendaftaran Pekan Esport Vol.2 | Ikatan Mahasiswa Komputer Universitas Pembangunan Panca Budi')
<x-new-app-layout>
    <div x-data="{ payment: false , buttonDisabled: false }" x-on:submit="buttonDisabled= true}">
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
                    <select id="game_id" name="game_id" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" required>
                        <option value="" selected>Pilih</option>
                        @foreach ($optionCabor as $cabor)
                        @php
                        $slotEmpty =$cabor->registered_count >= $cabor->max_registered
                        @endphp
                        <option value="{{ $cabor->id }}" {{ $slotEmpty ? "disabled":""}}>{{ $cabor->game_name }}{{$slotEmpty ? " (PENUH)":""}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label for="nama_tim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Tim</label>
                    <input type="text" id="nama_tim" name="team_name" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan nama tim" value="{{ old('team_name') }}" required>
                </div>
                <div class="mb-5">
                    <label for="nomor_wa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor WA Pemain 1</label>
                    <input type="text" id="nomor_wa" name="whatsapp_leader" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan nomor WA pemain 1" value="{{ old('whatsapp_leader') }}" required>
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Pemain 1</label>
                    <input type="email" id="email" name="email" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan email pemain 1" value="{{ old('email') }}" required>
                </div>

                {{-- PLAYER 1 (LEADER) --}}
                <div class="mb-5">
                    <label for="name_player[]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemain 1</label>
                    <input type="text" id="name_player[]" name="name_player[player1]" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan nama pemain 1" value="{{ old('name_player.0') }}" required>
                </div>
                <div class="mb-5">
                    <label for="nickname_player[]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nickname Game Pemain 1</label>
                    <input type="text" id="nickname_player[]" name="nickname_player[player1]" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan nickname game pemain 1" value="{{ old('nickname_player.0') }}" required>
                </div>
                <div class="mb-5">
                    <label for="id_player[]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Game Pemain 1</label>
                    <input type="text" id="id_player[]" name="id_player[player1]" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan id game pemain 1" value="{{ old('id_player.0') }}" required>
                </div>

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="ss_game">
                        Screenshot Profile Game Pemain 1
                    </label>
                    <input class="bg-slate-100 text-gray-900 text-sm rounded-lg border border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" id="ss_game" name="ss_game[player1]" type="file" accept="image/png, image/jpeg, image/jpg" required>
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="ktp">
                        Kartu Tanda Penduduk / Kartu Pelajar / Raport Sekolah Pemain 1
                    </label>
                    <input class="bg-slate-100 text-gray-900 text-sm rounded-lg border border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" id="ktp" name="identity_card[player1]" type="file" accept="image/png, image/jpeg, image/jpg" required>
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Bukti Pembayaran Pendaftaran
                        <span class="underline underline-offset-2 text-blue-800" @click="payment= true">(Lihat Petunjuk)</span>
                    </label>
                    <input class="bg-slate-100 text-gray-900 text-sm rounded-lg border border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" id="proof_of_payment" name="proof_of_payment" type="file" accept="image/png, image/jpeg, image/jpg" required>
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
                                <input type="text" :id="index+'name_player'" :name="'name_player[player'+ increment(index) +']'" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan nama pemain 2" required>
                            </div>
                            <div class="mb-5">
                                <label :for="index+'nickname_player'" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Nickname Game Pemain <span x-text="index+2"></span>
                                </label>
                                <input type="text" :id="index+'nickname_player'" :name="'nickname_player[player'+ increment(index) +']'" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan nickname game pemain 2" required>
                            </div>
                            <div class="mb-5">
                                <label :for="index+'id_player'" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Game Pemain <span x-text="index+2"></span></label>
                                <input type="text" :id="index+'id_player'" :name="'id_player[player'+ increment(index) +']'" class="bg-slate-100 text-gray-900 text-sm rounded-lg border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" placeholder="Masukkan id game pemain 2" required>
                            </div>

                            <div class="mb-5">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" :for="index+'ss_game'">
                                    Screenshot Profile Game Pemain <span x-text="index+2"></span></label>
                                </label>
                                <input class="bg-slate-100 text-gray-900 text-sm rounded-lg border border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" :id="index+'ss_game'" :name="'ss_game[player'+ increment(index) +']'" type="file" accept="image/png, image/jpeg, image/jpg" required>
                            </div>
                            <div class="mb-5">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" :for="index+'ktp'">
                                    Kartu Tanda Penduduk / Kartu Pelajar / Raport Sekolah Pemain <span x-text="index+2"></span></label>
                                </label>
                                <input class="bg-slate-100 text-gray-900 text-sm rounded-lg border border-slate-300 focus:ring-purple-700 focus:border-blue-500 block w-full p-2.5 placeholder-zinc-400" :id="index+'ktp'" type="file" :name="'identity_card[player'+ increment(index) +']'" accept="image/png, image/jpeg, image/jpg" required>
                            </div>
                        </div>
                    </template>
                    <button type="button" @click="addNewField()" class="text-white bg-purple-700 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-700 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">+ Tambah Pemain</button>
                </div>
                <hr class=" h-1 mx-auto my-4 bg-purple-500 border-0 rounded md:my-10 dark:bg-white">

                {{-- FILE PDF --}}
                <button type="submit" class="w-full text-white bg-purple-700 focus:bg-purple-950 hover:bg-purple-950 focus:ring-4 focus:outline-none focus:ring-purple-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center" x-bind:disabled="buttonDisabled">
                    <span x-show="!buttonDisabled">DAFTAR</span>
                    <span x-show="buttonDisabled">Loading...</span>
                </button>
            </form>
        </div>
        <!----MODAL SUCCESS DAFTAR--->
        @session('status')
        <div x-data="{ open: true }">
            <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="open">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-100 transition-opacity"></div>

                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div class="relative transform rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-96">
                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="text-center">
                                    <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100">
                                        @if (session('status') == true)
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="text-green-600 w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                        @else
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM15.36 14.3C15.65 14.59 15.65 15.07 15.36 15.36C15.21 15.51 15.02 15.58 14.83 15.58C14.64 15.58 14.45 15.51 14.3 15.36L12 13.06L9.7 15.36C9.55 15.51 9.36 15.58 9.17 15.58C8.98 15.58 8.79 15.51 8.64 15.36C8.35 15.07 8.35 14.59 8.64 14.3L10.94 12L8.64 9.7C8.35 9.41 8.35 8.93 8.64 8.64C8.93 8.35 9.41 8.35 9.7 8.64L12 10.94L14.3 8.64C14.59 8.35 15.07 8.35 15.36 8.64C15.65 8.93 15.65 9.41 15.36 9.7L13.06 12L15.36 14.3Z" fill="#ff2e43"></path>
                                            </g>
                                        </svg>
                                        @endif
                                    </div>
                                    <div class="mt-5 text-center">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Pendaftaran {{ session('status') == true ? "Berhasil" : "Gagal" }}</h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">{{ session('message') }}</p>
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
        @endsession
        <!----END MODAL SUCCESS DAFTAR--->
        <!----MODAL GUIDE PAYMENT--->
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="payment">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-100 transition-opacity"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div class="relative transform rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-96">
                        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                            <div class="text-center">
                                <div class="mt-5 text-center">
                                    <h3 class="text-lg font-semibold leading-6 text-gray-900" id="modal-title">Petunjuk Pembayaran Pendaftaran</h3>
                                    <div class="mt-2 text-left">
                                        Silahkan lakukan pembayaran sesuai dengan biaya pendaftaran masing masing cabang olahraga (Cabor) ke rekening dibawah ini
                                        <ul class="mt-2 font-bold">
                                            <li>DANA 0858 3148 8786 a/n Desti Amanda.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 mb-2">
                            <button @click="payment = false" type="button" class="inline-flex w-full justify-center rounded-md bg-purple-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-purple-500">TUTUP</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----END MODAL GUIDE PAYMENT--->
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
    </div>
</x-new-app-layout>
