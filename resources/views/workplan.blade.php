@section('title', 'Program Kerja - Imakom Unpab')
@section('description', 'List of workplan organization in current structural including already done, ongoing, and on coming')
<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        {{-- <div class="image">
            <img src="{{ url('./images/foto_imakom2.jpeg') }}" />
        </div> --}}
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    <!-- component -->
    <section class="dark:bg-gray-800 dark:text-gray-100">
        <div class="container max-w-6xl px-4 py-12 sm:px-0 sm:py-0 mx-auto">
            <div class="grid gap-4 mx-4 sm:grid-cols-12">
                <div class="col-span-12 sm:col-span-3">
                    <div
                        class="text-center sm:text-left mb-14 before:block before:w-24 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:dark:bg-violet-400">
                        <h3 class="text-3xl font-semibold">Program Kerja</h3>
                        <span class="text-sm font-bold tracki uppercase dark:text-gray-400">Kepengurusan Tahun
                            2023/2024</span>
                    </div>
                </div>
                <div class="relative col-span-12 space-y-6 sm:col-span-9">
                    <div
                        class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3 before:dark:bg-gray-700">
                        @foreach ($workplan as $plan)
                            <div
                                class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-violet-400">
                                <a href="{{ $plan->link ?? "#" }}">
                                    <h3 class="text-xl font-semibold tracki">{{ $plan->title }}</h3>
                                </a>
                                <time
                                    class="text-xs tracki uppercase dark:text-gray-400">{{ \Carbon\Carbon::parse($plan->start_date)->format('d M Y') }}
                                    - {{ \Carbon\Carbon::parse($plan->end_date)->format('d M Y') }}</time>
                                <p class="mt-3 text-justify">{{ $plan->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-new-app-layout>
