<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    {{-- KONTEN --}}
    <div class="block w-screen pt-20 pb-8">
        <h1 class="text-center text-4xl font-black">PEKAN ESPORT Vol. 2</h1>
        <h3 class="text-center text-2xl font-black">CABANG OLAHRAGA</h3>
    </div>
    {{-- ROW1 --}}
    <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-3 p-7">
        {{-- CARD TEMPLATE --}}
        <div class="my-3 lg:m-5 relative grid h-[25rem] lg:h-80 w-full lg:w-full lg:max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('../../public/images/valorant-min.jpeg')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
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
        <div class="my-3 lg:m-5 relative grid h-[25rem] lg:h-80 w-full lg:w-full lg:max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('../../public/images/pubg-min.jpg')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
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
        <div class="my-3 lg:m-5 relative grid h-[25rem] lg:h-80 w-full lg:w-full lg:max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('../../public/images/ML-min.jpg')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
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

        {{-- CARD TEMPLATE --}}
        <div class="my-3 lg:m-5 relative grid h-[25rem] lg:h-80 w-full lg:w-full lg:max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('../../public/images/ff-min.jpg')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
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
        <div class="my-3 lg:m-5 relative grid h-[25rem] lg:h-80 w-full lg:w-full lg:max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('../../public/images/football-min.jpg')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
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
        <div class="my-3 lg:m-5 relative grid h-[25rem] lg:h-80 w-full lg:w-full lg:max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('../../public/images/MC-min.png')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
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

        {{-- CARD TEMPLATE --}}
        <div class="my-3 lg:m-5 relative grid h-[25rem] lg:h-80 w-full lg:w-full lg:max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('../../public/images/DynaStones-min.png')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
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
