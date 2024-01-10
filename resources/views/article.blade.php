<x-new-app-layout>
    <div class="fullscreen full-image max-h-[7em]">
        {{-- <div class="image">
            <img src="{{ url('./images/foto_imakom2.jpeg') }}" />
        </div> --}}
        <div class="overlay content-center first-content tertienary">
        </div>
    </div>
    <div class="grid grid-cols-4 px-20 py-10">
        <div class="col-span-3">
            <div class="block w-screen p-5">
                <h2 class="text-2xl font-extrabold"> Artikel Terbaru </h2>
            </div>
            @foreach ($all_article as $all)
                {{-- <div class="cols-2"> --}}
                <article class="flex max-w-md flex-col rounded-2xl px-4 md:max-w-5xl md:flex-row md:items-center">
                    <div class="shrink-0 my-4 md:mr-8 md:max-w-sm">
                        <img class="rounded-2xl object-cover h-60 w-60" src="{{ asset('storage/' . $all->thumbnail) }}"
                            alt="" />
                    </div>
                    <div class="py-4 sm:py-8">
                        <div class="mb-4 text-slate-600">
                            <span class="">{{ \Carbon\Carbon::parse($all->created_at)->format('d M Y') }}</span>
                            <a href=""
                                class="inline-flex items-center ml-5 py-1 px-3 rounded-full text-md font-medium text-gray-800 bg-slate-200 dark:bg-white/10 dark:text-white">{{ $all->article_category->name }}</a>
                        </div>
                        <a href="{{ route('article.detail', ['slug' => $all->slug]) }}"
                            class="block text-2xl font-medium text-gray-700">
                            {{ $all->title }}
                        </a>
                        <p class="mb-5 text-gray-500">{!! Illuminate\Support\Str::words($all->content, 25, '...') !!}</p>
                        <div class="flex items-center">
                            <img class="h-10 w-10 rounded-full object-cover"
                                src="{{ asset('storage/' . $all->user->photo) }}" alt="Simon Lewis" />
                            <p class="ml-4 w-56">
                                <strong class="block font-medium text-gray-700">{{ $all->user->name }}</strong>
                                <span class="text-sm text-gray-400">{{ $all->user->roles()->first()->name }}</span>
                            </p>
                        </div>
                    </div>
                </article>
            @endforeach
            <div class="flex justify-center mb-10 pb-10">
                {{ $all_article->links('custom.pagination-article') }}
            </div>
            @if ($all_article->count() == 0)
                <div class="p-5">
                    BELUM ADA ARTIKEL
                </div>
            @endif
        </div>
        <div class="">
            <div class="block w-screen px-2 py-10">
                <h2 class="text-2xl font-extrabold"> Artikel Populer </h2>
            </div>
            @foreach ($article_popular as $popular)
                <article class="flex max-w-md flex-col rounded-2xl px-1 md:max-w-5xl md:flex-row md:items-center">
                    <div class="shrink-0 my-4 md:mr-8 md:max-w-sm">
                        <img class="rounded-2xl object-cover h-28 w-28"
                            src="{{ asset('storage/' . $popular->thumbnail) }}"
                            alt="" />
                    </div>
                    <div class="">
                        <div class="mb-px text-slate-600">
                            <span class="">{{ \Carbon\Carbon::parse($popular->created_at)->format('d M Y') }}</span>
                        </div>
                        <a href="#"
                            class="mb-1 block text-lg font-medium text-gray-700">
                            {{ Illuminate\Support\Str::words($popular->title, 7, '...') }}
                        </a>
                        <div class="">
                            {{-- <img class="h-6 w-6 rounded-full object-cover"
                                src="https://media.licdn.com/dms/image/D5603AQG8ylXBmFRqoA/profile-displayphoto-shrink_200_200/0/1693843323807?e=1710374400&v=beta&t=opdzJTjwy-_uUfIqZH2ee7iBh1lRgdj1zyANkx_cB4w"
                                alt="Simon Lewis" /> --}}
                            <p class="w-56">
                                <strong class="block font-medium text-gray-700">{{ $popular->user->name }}</strong>
                            </p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-new-app-layout>
