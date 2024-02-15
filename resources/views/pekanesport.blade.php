@section('title', 'Pekan Esport Vol. 2 - Imakom Unpab')
@section('description', 'Pekan Esport Vol.2 is an annual event organized by imakom unpab, which provides a place to compete by players of esport games such as mobile legends, pubg mobile, valorant, and others.')
<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    <div class="block w-screen pt-20 pb-8">
        <h1 class="text-center text-4xl font-black">PEKAN ESPORT Vol. 2</h1>
    </div>
    <div class="max-w-4xl mx-auto p-7 custom-style">
        {!! $content->content !!}
    </div>
    <div class="block w-screen pt-20 pb-8">
        <h3 class="text-center text-2xl font-black">CABANG OLAHRAGA</h3>
    </div>
    <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-3 p-7">
        @foreach ($cabor as $value)
        {{-- CARD TEMPLATE --}}
        <div class="my-3 lg:m-5 mx-auto relative grid h-72 lg:h-80 w-60 lg:w-full lg:max-w-[15rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
            <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
            <img class="absolute h-full w-full" src="{{ $value->thumbnail == null ? url('/images/default.webp') : asset('storage' . $value->thumbnail) }}" alt="" />
                <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
            </div>
            <div class="relative p-2 px-2 py-8 lg:py-0 md:px-6">
                <h2 class="block font-sans text-xl font-medium leading-[1.5] tracking-normal text-white antialiased">
                    {{ $value->game_name }}
                </h2>
                <a href="{{ route('pekanesport.game', ['game' => $value->slug]) }}" type="button" class="mx-auto focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 my-5 mx-auto font-black" aria-label="Button Daftar {{ $value->game_name }}">Daftar</a>
            </div>
        </div>
        {{-- END CARD TEMPLATE --}}

        @endforeach
    </div>
</x-new-app-layout>
