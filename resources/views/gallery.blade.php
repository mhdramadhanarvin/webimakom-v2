<x-new-app-layout>
    <div class="fullscreen full-image">
        <div class="image">
            <img src="{{ url('./images/foto_imakom2.jpeg') }}" />
        </div>
        <div class="overlay content-center first-content tertienary">
            <div class="content">
                <div class="row">
                    <div class="col-6">
                        <!-- <img class="responsive-img logo-stempel" src="images/logo imakom.png" /> -->
                    </div>
                    <div class="col-6">
                        <h3 class="fw-black" style=" color:tomato;">GALERY KEGIATAN IMAKOM </h3>
                        <p>Dokumentasi dari setiap kegiatan yang dilakukan oleh imakom.</p>
                        <button class="scroll-for-more"></button>
                    </div>
                </div>
            </div>
        </div>


        <!-- ARTIKEL -->
    </div>
    <div class="row p-4">
        <div class="row mx-auto">
            <div class="container mx-auto">
                @foreach ($category as $row => $cat)
                    <div id="accordion{{ $row }}" class="w-screen">
                        <div
                            class="rounded-t-lg border border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800">
                            <h2 class="mb-0" id="heading{{ $row }}">
                                <button
                                    class="group relative flex w-full items-center rounded-t-[15px] border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                                    type="button" data-te-collapse-init data-te-target="#collapse{{ $row }}"
                                    aria-expanded="true" aria-controls="collapse{{ $row }}">
                                    {{ $cat->name }}
                                    <span
                                        class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </button>
                            </h2>
                            @foreach ($cat->galleries as $gallery)
                                <div id="collapse{{ $row }}" class="!visible {{ $row > 0 ? 'hidden' : '' }}"
                                    data-te-collapse-item data-te-collapse-show
                                    aria-labelledby="heading{{ $row }}"
                                    data-te-parent="#accordion{{ $row }}">
                                    <div class="px-5 py-4">
                                        <div class="-m-1 flex flex-wrap md:-m-2">
                                            <div class="flex w-1/3 flex-wrap">
                                                <div class="relative w-full p-1 md:p-2">
                                                    <img alt="gallery"
                                                        class="block h-full w-full rounded-lg object-cover object-center"
                                                        src="{{ asset('storage/' . $gallery->photo) }}" />
                                                    <div
                                                        class="absolute top-0 left-0 w-full h-full flex justify-center items-center opacity-0 hover:opacity-60 hover:bg-black text-white rounded-lg object-cover object-center">
                                                        <div class="flex-row text-center">
                                                            <h3 class="text-gray-50 font-bold text-lg">
                                                                {{ $gallery->caption }}
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-new-app-layout>
