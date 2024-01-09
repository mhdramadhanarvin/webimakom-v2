<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        <div class="overlay content-center first-content tertienary">
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
                                        src="{{ asset('storage/' . $article->user->photo) }}"
                                        alt="{{ $article->user->name }}">
                                    <div>
                                        <a href="#" rel="author"
                                            class="text-xl font-bold text-gray-900 dark:text-white">{{ $article->user->name }}</a>
                                        <p class="text-base text-gray-500 dark:text-gray-400">{{ $article->user->roles()->first()->name }}</p>
                                        <p class="text-base text-gray-500 dark:text-gray-400">
                                            <time>{{ \Carbon\Carbon::parse($article->created_at)->format('d M Y') }}</time>
                                        </p>
                                    </div>
                                </div>
                            </address>
                            <h1
                                class="mb-0 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-3 lg:text-4xl dark:text-white">
                                {{ $article->title }}
                                @if ($article->status === 0)
                                  <span class="inline-block align-middle rounded-md bg-zinc-400 px-2 py-1 text-lg font-medium text-white ring-1 ring-inset ring-blue-700/10">
                                      DRAFT 
                                  </span>
                                @endif
                            </h1>
                            <a href="#"
                                class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">{{ $article->article_category->name }}</a>
                        </header>
                        <div>{!! $article->content !!}</div>
                        <div class="row mt-10">
                            <span class="align-text-bottom mr-2"> KATA KUNCI : </span>
                                @foreach ($article->keyword as $keyword)
                                <a href="#"
                                    class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10 m-1">{{ $keyword }}</a>
                                @endforeach
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
                            <span class="justify-start">{{ $article->visit_count_total }}x dilihat</span>
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
