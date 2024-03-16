<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    @foreach (\Illuminate\Support\Arr::wrap($getState()) as $key => $state)
    <x-filament::modal>
        <x-slot name="trigger">
            <x-filament::button>
                {{ $key == 0 ? "Lihat" : ucwords($key) }}
            </x-filament::button>
        </x-slot>

        {{-- Modal content --}}
        <x-slot name="heading">
            {{ $key == 0 ? "Bukti Pembayaran Pendaftaran" : ucwords($key) }}
        </x-slot>
        <x-slot name="footer">
            <img src="{{ \Illuminate\Support\Str::remove('public/', asset('storage/' . $state)) }}" />
        </x-slot>
    </x-filament::modal>
    @endforeach
</x-dynamic-component>
