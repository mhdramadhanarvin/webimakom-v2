@section('title', $detail_cabor->game_name . ' - Imakom Unpab')
@section('description', $detail_cabor->game_name . ' is one of the games that will be competed in the Pekan Esport Vol. 2 Esport.')
<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    <div class="max-w-4xl mx-auto my-20">
        <h1 class="text-center text-6xl font-bold">{{ $detail_cabor->game_name }}</h1>
        <div class="bg-cover">
            <img class="relative h-auto max-w-lg max-h-60 rounded-lg mx-auto my-5" src="{{ $detail_cabor->thumbnail == null ? url('/images/default.webp') : asset('storage' . $detail_cabor->thumbnail) }}" alt="">
        </div>
        <div class="custom-style">
            {!! $detail_cabor->description !!}
        </div>
        <div class="flex justify-center">
            <a href="{{ route('pekanesport.form') }}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 my-5 mx-auto font-black">Daftar
            </a>
        </div>
    </div>
</x-new-app-layout>
