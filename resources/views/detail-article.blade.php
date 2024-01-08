<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        {{-- <div class="image">
            <img src="{{ url('./images/foto_imakom2.jpeg') }}" />
        </div> --}}
        <div class="overlay content-center first-content tertienary">
            {{-- <div class="content">
                <div class="row"> --}}
            {{-- <div class="col-6"> --}}
            <!-- <img class="responsive-img logo-stempel" src="images/logo imakom.png" /> -->
            {{-- </div> --}}
            {{-- <div class="col-6"> --}}
            {{-- <h3 class="text-3xl" style=" color:tomato;">ARTIKEL TERBARU</h3> --}}
            {{-- <p>Dokumentasi dari setiap kegiatan yang dilakukan oleh imakom.</p> --}}
            {{-- <button class="scroll-for-more"></button> --}}
            {{-- </div> --}}
            {{-- </div>
            </div> --}}
        </div>
    </div>
    <div class="grid grid-cols-6 px-20 py-10">
        <div class="col-span-4">
            <main class="lg:pt-16 lg:pb-24 antialiased">
                <div class="px-4 max-w-screen-xl ">
                    <article
                        class="w-full max-w-5xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                        <header class="mb-4 lg:mb-6 not-format">
                            <address class="flex items-center mb-6 not-italic">
                                <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                    <img class="mr-4 w-16 h-16 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                        alt="Jese Leos">
                                    <div>
                                        <a href="#" rel="author"
                                            class="text-xl font-bold text-gray-900 dark:text-white">Jese Leos</a>
                                        <p class="text-base text-gray-500 dark:text-gray-400">Content Writer</p>
                                        <p class="text-base text-gray-500 dark:text-gray-400">
                                            <time pubdate datetime="2022-02-08" title="February 8th, 2022">9 Januari 2024</time>
                                        </p>
                                    </div>
                                </div>
                            </address>
                            <h1
                                class="mb-0 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-3 lg:text-4xl dark:text-white">
                                Best practices for successful prototypes
                            </h1>
                            <a href="#"
                                class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Kategori</a>
                        </header>
                        <div>
                            <p class="">
                                The Art of Mindful Breathing
                                Mindfulness often begins with a simple yet profound act: paying attention to your
                                breath.
                                Take a
                                moment each day to sit in a comfortable position, close your eyes, and focus on the
                                sensation of
                                your breath as it goes in and out. Allow your thoughts to come and go, gently guiding
                                your
                                attention
                                back to your breath. This practice not only calms the mind but also helps cultivate a
                                heightened
                                awareness of the present moment.
                            </p>
                            <p class="">
                                Embracing the Power of Presence
                                In a world filled with distractions, being fully present in the moment is a rare gift.
                                Mindfulness
                                encourages us to engage in each task with undivided attention, whether it's savoring the
                                flavors of
                                a meal, appreciating the beauty of nature, or fully participating in a conversation. By
                                embracing
                                the power of presence, we can enrich our experiences and create lasting memories.
                            </p>
                            <p class="">
                                Cultivating a Non-Judgmental Mindset
                                Mindfulness invites us to observe our thoughts without judgment. Instead of categorizing
                                thoughts as
                                good or bad, right or wrong, simply acknowledge them and let them pass. This
                                non-judgmental
                                mindset
                                promotes self-compassion and reduces the impact of negative self-talk, fostering a more
                                positive and
                                accepting outlook on life.
                            </p>
                            <p class="">
                                Finding Stillness in Movement
                                Contrary to common belief, mindfulness doesn't always require complete stillness.
                                Activities
                                such as
                                walking, yoga, or tai chi can be transformed into moving meditations. By bringing
                                awareness
                                to each
                                step or movement, we can turn routine exercises into opportunities for mindfulness,
                                connecting the
                                mind and body in a harmonious dance.
                            </p>
                            <p class="">
                                Creating a Mindful Environment
                                Your surroundings play a significant role in cultivating mindfulness. Create a space
                                that
                                encourages
                                tranquility, whether it's a dedicated meditation corner or simply decluttering your
                                living
                                space.
                                Incorporate elements like soothing colors, plants, or calming scents to enhance the
                                overall
                                atmosphere and promote a sense of peace.
                            </p>
                        </div>
                        <div class="row mt-10">
                            <span class="align-text-bottom mr-2"> KATA KUNCI : </span>
                            @for ($i = 0; $i < 5; $i++)
                                <a href="#"
                                    class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10 m-1">
                                    Kata
                                    Kunci {{ $i + 1 }}
                                </a>
                            @endfor
                        </div>
                        <div class="pt-5 justify-center">
                            <hr class="h-px my-8 bg-zinc-400 border-0 dark:bg-gray-700">
                            <a href="{{ $l->facebook ?? '#' }}">
                                <i class="text-3xl mr-5 fa-brands fa-facebook hover:text-blue-700" aria-hidden="true"></i>
                            </a>
                            <a href="{{ $l->instagram ?? '#' }}">
                                <i class="text-3xl mr-5 fa-brands fa-twitter hover:text-blue-700" aria-hidden="true"></i>
                            </a>
                            <a href="{{ $l->linkedin ?? '#' }}">
                                <i class="text-2xl mr-5 fa-solid fa-link hover:text-blue-700" aria-hidden="true"></i>
                            </a>
                            {{-- <i class="text-xs mx-3 fa-solid fa-circle hover:text-blue-700" aria-hidden="true"></i> --}}
                            <span class="justify-start">54x dilihat</span>
                            <hr class="h-px my-8 bg-zinc-400 border-0 dark:bg-gray-700">
                        </div>
                    </article>
                </div>
            </main>
        </div>
        <div class="col-span-2 py-16">
            <div class="block w-screen px-2 mb-3">
                <h2 class="text-2xl font-extrabold"> Artikel Terkait </h2>
            </div>
            @for ($i = 0; $i < 4; $i++)
                <article class="flex max-w-md flex-col rounded-2xl px-1 md:max-w-5xl md:flex-row md:items-center">
                    <div class="shrink-0 my-4 md:mr-8 md:max-w-sm">
                        <img class="rounded-2xl object-cover h-28 w-28"
                            src="https://images.unsplash.com/photo-1663287695452-bf59337d8746?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60"
                            alt="" />
                    </div>
                    <div class="">
                        <div class="mb-px text-slate-600">
                            <span class=""> {{ $i + 1 }} Maret 2020 </span>
                        </div>
                        <a href="{{ route('article.detail', ['slug' => $i + 1]) }}"
                            class="mb-1 block text-lg font-medium text-gray-700">
                            Long walks are helpful in
                            decreasing stress levels
                        </a>
                        {{-- <p class="mb-6 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Reprehenderit
                            illum consequatur quia doloremque! Similique eius enim nostrum totam.</p> --}}
                        <div class="">
                            {{-- <img class="h-6 w-6 rounded-full object-cover"
                                src="https://media.licdn.com/dms/image/D5603AQG8ylXBmFRqoA/profile-displayphoto-shrink_200_200/0/1693843323807?e=1710374400&v=beta&t=opdzJTjwy-_uUfIqZH2ee7iBh1lRgdj1zyANkx_cB4w"
                                alt="Simon Lewis" /> --}}
                            <p class="w-56">
                                <strong class="block font-medium text-gray-700">Johanson Levinsiki</strong>
                                {{-- <span class="text-sm text-gray-400">Content Writer</span> --}}
                            </p>
                        </div>
                    </div>
                </article>
            @endfor
        </div>
    </div>
</x-new-app-layout>
