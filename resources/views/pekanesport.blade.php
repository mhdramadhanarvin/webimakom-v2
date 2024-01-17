<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    {{-- KONTEN --}}
    <div class="max-w-7xl mx-auto my-20">
        <h1 class="text-center text-4xl font-black" >CABANG OLAHRAGA</h1>
    </div>
{{-- ROW1 --}}
    <div class="max-w-7xl mx-auto my-10 flex justify-center">
        {{-- CARD TEMPLATE --}}
        <div class="mx-5 relative grid h-[20rem] w-full max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images5.alphacoders.com/131/1317015.jpeg')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
            </div>
            <div class="relative p-2 px-2 py-8 md:px-6">
                <h2 class="block font-sans text-xl font-medium leading-[1.5] tracking-normal text-white antialiased">
                    VALORANT
                </h2>
                <a href="{{ route('pekanesport.game', ['game' => 'valorant']) }}" type="button" class="mx-auto focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 my-5 mx-auto font-black">Daftar</a>
            </div>
        </div>
        {{-- END CARD TEMPLATE --}}

        {{-- CARD TEMPLATE --}}
        <div class="mx-5 relative grid h-[20rem] w-full max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images7.alphacoders.com/854/854918.jpg')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
            </div>
            <div class="relative p-2 px-2 py-8 md:px-6">
                <h2 class="block font-sans text-xl font-medium leading-[1.5] tracking-normal text-white antialiased">
                    PUBGM
                </h2>
                <a href="{{ route('pekanesport.game', ['game' => 'pubgm']) }}" type="button" class="mx-auto focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 my-5 mx-auto font-black">Daftar</a>
            </div>
        </div>
        {{-- END CARD TEMPLATE --}}

        {{-- CARD TEMPLATE --}}
        <div class="mx-5 relative grid h-[20rem] w-full max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images5.alphacoders.com/129/1293090.jpg')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
            </div>
            <div class="relative p-2 px-2 py-8 md:px-6">
                <h2 class="block font-sans text-xl font-medium leading-[1.5] tracking-normal text-white antialiased">
                    MOBILE LEGENDS
                </h2>
                <a href="{{ route('pekanesport.game', ['game' => 'mobilelegends']) }}" type="button" class="mx-auto focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 my-5 mx-auto font-black">Daftar</a>
            </div>
        </div>
        {{-- END CARD TEMPLATE --}}
    </div>

{{-- ROW2 --}}
    <div class="max-w-7xl mx-auto my-5 mb-10 flex justify-center">
        {{-- CARD TEMPLATE --}}
        <div class="mx-5 relative grid h-[20rem] w-full max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images5.alphacoders.com/111/1118682.jpg')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
            </div>
            <div class="relative p-2 px-2 py-8 md:px-6">
                <h2 class="block font-sans text-xl font-medium leading-[1.5] tracking-normal text-white antialiased">
                    FREE FIRE
                </h2>
                <a href="{{ route('pekanesport.game', ['game' => 'freefire']) }}" type="button" class="mx-auto focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 my-5 mx-auto font-black">Daftar</a>
            </div>
        </div>
        {{-- END CARD TEMPLATE --}}

        {{-- CARD TEMPLATE --}}
        <div class="mx-5 relative grid h-[20rem] w-full max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images8.alphacoders.com/523/523303.jpg')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
            </div>
            <div class="relative p-2 px-2 py-8 md:px-6">
                <h2 class="block font-sans text-xl font-medium leading-[1.5] tracking-normal text-white antialiased">
                    PS FOOTBALL
                </h2>
                <a href="{{ route('pekanesport.game', ['game' => 'psfootball']) }}" type="button" class="mx-auto focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 my-5 mx-auto font-black">Daftar</a>
            </div>
        </div>
        {{-- END CARD TEMPLATE --}}

        {{-- CARD TEMPLATE --}}
        <div class="mx-5 relative grid h-[20rem] w-full max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://sakata.id/wp-content/uploads/2023/11/Commander-Vale-di-Magic-Chess-Bagus-atau-Malah-Flop.jpg')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
            </div>
            <div class="relative p-2 px-2 py-8 md:px-6">
                <h2 class="block font-sans text-xl font-medium leading-[1.5] tracking-normal text-white antialiased">
                    MAGIC CHESS MOBILE LEGENDS
                </h2>
                <a href="{{ route('pekanesport.game', ['game' => 'magicchess']) }}" type="button" class="mx-auto focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 my-5 mx-auto font-black">Daftar</a>
            </div>
        </div>
        {{-- END CARD TEMPLATE --}}
    </div>

    {{-- ROW3 --}}
    <div class="max-w-7xl mx-auto my-5 mb-20 flex justify-center">
        {{-- CARD TEMPLATE --}}
        <div class="mx-5 relative grid h-[20rem] w-full max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/96/2023/07/14/DynaStones-game-yang-memadukan-MOBA-dan-Battle-Royale-membuka-akses-open-beta-mulai-hari-ini-Majamojo5-3015908797.jpg')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
            </div>
            <div class="relative p-2 px-2 py-8 md:px-6">
                <h2 class="block font-sans text-xl font-medium leading-[1.5] tracking-normal text-white antialiased">
                    DYNASTONES
                </h2>
                <a href="{{ route('pekanesport.game', ['game' => 'dynastones']) }}" type="button" class="mx-auto focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 my-5 mx-auto font-black">Daftar</a>
            </div>
        </div>
        {{-- END CARD TEMPLATE --}}
    </div>
</x-new-app-layout>
