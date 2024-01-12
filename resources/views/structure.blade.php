<x-new-app-layout>
    <div class="fullscreen full-image max-h-[40em]">
        <div class="image">
            <img src="{{ url('./images/agenda.jpeg') }}" />
        </div>
        <div class="overlay content-center first-content tertienary">
            <div class="content">
                <div class="row">
                    <div class="col-6">
                        <!-- <img class="responsive-img logo-stempel" src="images/logo imakom.png" /> -->
                    </div>
                    <div class="col-6">
                        <h1 class="text-3xl text-red-600">PENGURUS & ANGGOTA KEORGANISASIAN 2023/2024</h1>
                        <button class="scroll-for-more"></button>
                    </div>
                </div>
                <div class="responsive-gap"></div>
            </div>
        </div>
    </div>

    <!-- ARTIKEL -->
    <div class="tertienary bg-white">
        <div class="text-center pt-20">
            <h2 class="text-3xl font-bold">STRUKTUR KEPENGURUSAN IMAKOM</h2>
        </div>
        <div class="grid justify-center mb-10">
            <div class="container">
                @foreach ($lead as $l)
                    <div class="card"
                        style=" border: 2px solid rgba(51, 46, 77, 0.82); border-radius: 15px;">
                        <div class="content">
                            <div class="imgBx">
                                <img src="{{ $l->photo == null ? url('./images/default.jpg') : asset('storage/' . $l->photo) }}"
                                    alt="">
                            </div>
                            <div class="contentBx ">
                                <h2 class="text-xl text-white font-bold">{{ $l->name }}<br><span class="text-lg">{{ str()->ucwords(Illuminate\Support\Str::of(str()->snake($l->position->name))->replace('_', ' ')) . ' Umum' }}</span>
                                </h2>
                            </div>
                        </div>

                        <ul class="sci">
                            <li style="--i:1">
                                <a href="{{ $l->facebook ?? '#' }}">
                                    <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="{{ $l->instagram ?? '#' }}">
                                    <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="{{ $l->linkedin ?? '#' }}">
                                    <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="container">
                @foreach ($secretary as $secr)
                    <div class="card"
                        style="border: 2px solid rgba(51, 46, 77, 0.82); border-radius: 15px;">
                        <div class="content">
                            <div class="imgBx">
                                <img src="{{ $secr->photo == null ? url('./images/default.jpg') : asset('storage/' . $secr->photo) }}"
                                    alt="">
                            </div>
                            <div class="contentBx">
                                <h2 class="text-xl text-white font-bold">{{ $secr->name }}<br><span class="text-lg">{{ str()->ucwords(Illuminate\Support\Str::of(str()->snake($secr->position->name))->replace('_', ' ')) . ' Umum' }}</span>
                                </h2>
                            </div>
                        </div>

                        <ul class="sci">
                            <li style="--i:1">
                                <a href="{{ $secr->facebook ?? '#' }}">
                                    <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="{{ $secr->instagram ?? '#' }}">
                                    <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="{{ $secr->linkedin ?? '#' }}">
                                    <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        <div style="text-align: center; ">
            <h3 class="fw-black text-3xl"> DIVISI IMAKOM </h3>
            <p style="font-size:20px; color: orange;"></p><br />
        </div>

        <section>
            <!-- START DIVISI IMAKOM -->
            @foreach ($division as $div)
                <div class="container">
                    <div class="card" style="height:70px; border-radius: 15px; background: orange;">
                        <a href="" style="text-decoration:none;">
                            <h4 style="margin:0 auto; color: white; font-size: 30px;">{{ $div->name }}</h4>
                        </a>
                    </div>

                    @php
                        $members = $div->members;
                    @endphp

                    @foreach ($members as $member)
                        <div class="card max-w-52 max-h-64">
                            <div class="content">
                                <div class="imgBx max-h-32 max-w-32">
                                    <img src="{{ $member->photo == null ? url('./images/default.jpg') : asset('storage/' . $member->photo) }}"
                                        alt="">
                                </div>
                                <div class="contentBx">
                                    <h2 class="xl">{{ $member->name }}<br>
                                        <span class="text-lg">{{ $member->position->value == '1' ? 'Ketua Divisi' : 'Anggota Divisi' }}</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr style="background:rgba(51, 46, 77, 0.82); padding:2px ; margin: 0 100px;">
            @endforeach
            <!-- END DIVISI IMAKOM -->


        </section>

    </div>
</x-new-app-layout>
