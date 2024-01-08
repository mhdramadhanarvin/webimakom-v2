<x-new-app-layout>
    <div class="fullscreen full-image max-h-[40em]">
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
                        <h3 class="text-3xl" style=" color:tomato;">ARTIKEL TERBARU</h3>
                        {{-- <p>Dokumentasi dari setiap kegiatan yang dilakukan oleh imakom.</p> --}}
                        <button class="scroll-for-more"></button>
                    </div>
                </div>
            </div>
        </div>


        <!-- ARTIKEL -->
    </div>
    <div class="grid grid-cols-4 px-20 py-10">
        <div class="col-span-3">
            <div class="block w-screen p-5">
                <h2 class="text-2xl font-extrabold"> Artikel Terbaru </h2>
            </div>
            @for ($i = 0; $i < 5; $i++)
                {{-- <div class="cols-2"> --}}
                <article class="flex max-w-md flex-col rounded-2xl px-4 md:max-w-5xl md:flex-row md:items-center">
                    <div class="shrink-0 my-4 md:mr-8 md:max-w-sm">
                        <img class="rounded-2xl object-cover h-60 w-60"
                            src="https://images.unsplash.com/photo-1663287695452-bf59337d8746?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60"
                            alt="" />
                    </div>
                    <div class="py-4 sm:py-8">
                        <div class="mb-4 text-slate-600">
                            <span class=""> {{ $i + 1 }} Maret 2020 </span>
                            <a href=""
                                class="inline-flex items-center ml-5 py-1 px-3 rounded-full text-md font-medium text-gray-800 bg-slate-200 dark:bg-white/10 dark:text-white">Kategori</a>
                        </div>
                        <a href="{{ route('article.detail', ['slug' => $i + 1]) }}"
                            class="mb-6 block text-2xl font-medium text-gray-700">
                            Long walks are helpful in
                            decreasing stress levels
                        </a>
                        <p class="mb-6 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Reprehenderit
                            illum consequatur quia doloremque! Similique eius enim nostrum totam.</p>
                        <div class="flex items-center">
                            <img class="h-10 w-10 rounded-full object-cover"
                                src="https://media.licdn.com/dms/image/D5603AQG8ylXBmFRqoA/profile-displayphoto-shrink_200_200/0/1693843323807?e=1710374400&v=beta&t=opdzJTjwy-_uUfIqZH2ee7iBh1lRgdj1zyANkx_cB4w"
                                alt="Simon Lewis" />
                            <p class="ml-4 w-56">
                                <strong class="block font-medium text-gray-700">Johanson Levinsiki</strong>
                                <span class="text-sm text-gray-400">Content Writer</span>
                            </p>
                        </div>
                    </div>
                </article>
                {{-- </div> --}}
            @endfor
        </div>
        <div class="">
            <div class="block w-screen px-2 py-10">
                <h2 class="text-2xl font-extrabold"> Artikel Populer </h2>
            </div>
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg"
                        src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832_640.jpg" alt="" />
                </a>
                <div class="p-5">
                    <div class="mb-1 text-slate-600">
                        <span class=""> 20 Maret 2020 </span>
                        <a href=""
                            class="inline-flex items-center ml-5 py-1 px-3 rounded-full text-md font-medium text-gray-800 bg-slate-200 dark:bg-white/10 dark:text-white">Kategori</a>
                    </div>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology acquisitions of 2021 so far...</p>
                    <div class="flex items-center">
                        <img class="h-10 w-10 rounded-full object-cover"
                            src="https://media.licdn.com/dms/image/D5603AQG8ylXBmFRqoA/profile-displayphoto-shrink_200_200/0/1693843323807?e=1710374400&v=beta&t=opdzJTjwy-_uUfIqZH2ee7iBh1lRgdj1zyANkx_cB4w"
                            alt="Simon Lewis" />
                        <p class="ml-4 w-56">
                            <strong class="block font-medium text-gray-700">Johanson Levinsiki</strong>
                            <span class="text-sm text-gray-400">Content Write</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-new-app-layout>
