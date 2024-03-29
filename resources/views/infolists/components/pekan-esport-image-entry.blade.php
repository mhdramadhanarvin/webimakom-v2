<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    @php $totalData = count(\Illuminate\Support\Arr::wrap($getState()));@endphp
    @foreach (\Illuminate\Support\Arr::wrap($getState()) as $key => $state)
    <x-filament::modal width="4xl">
        <x-slot name="trigger">
            <x-filament::button>
                {{ $totalData == 1 ? "Lihat" : ucwords($key) }}
            </x-filament::button>
        </x-slot>

        {{-- Modal content --}}
        <x-slot name="heading">
            {{ $totalData == 1 ? "Bukti Pembayaran Pendaftaran" : ucwords($key) }}
        </x-slot>
        <x-slot name="footer">
            <img src="{{ \Illuminate\Support\Str::remove('public/', asset('storage/' . $state)) }}" />
        </x-slot>
    </x-filament::modal>
    @endforeach
</x-dynamic-component>
