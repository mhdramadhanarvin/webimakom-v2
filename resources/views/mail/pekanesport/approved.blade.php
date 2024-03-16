<x-mail::message>
# Hai, {{ $notifiable->team_name }}

Terima kasih sudah mendaftar pada **Pekan E-Sport Vol. 2**\
Dapat kami sampaikan bahwa tim dengan detail informasi dibawah ini dinyatakan
**Lolos Verifikasi** sebagai peserta pada **Pekan E-Sport Vol. 2**

<x-mail::table>
|                 |                                    |
| --------------- |:----------------------------------:|
| Cabor Game      | {{ $notifiable->game->game_name }}       |
| Nama Tim        | {{ $notifiable->team_name }}       |
| Nomor Whatsapp  | {{ $notifiable->whatsapp_number }} |
@foreach ($notifiable->player_name as $key => $player_name)
    @if ($key === 'player1')
    | Nama Pemain | {{ $player_name }} |
    @else
    | | {{ $player_name }} |
    @endif
@endforeach
@foreach ($notifiable->nickname_player as $key => $nickname_player)
    @if ($key === 'player1')
    | Nickname Pemain | {{ $nickname_player }} |
    @else
    | | {{ $nickname_player }} |
    @endif
@endforeach
@foreach ($notifiable->id_player as $key => $id_player)
    @if ($key === 'player1')
    | ID Pemain | {{ $id_player }} |
    @else
    | | {{ $id_player }} |
    @endif
@endforeach
</x-mail::table>

<x-mail::subcopy>
</x-mail::subcopy>

Mohon simpan pesan ini sebagai bukti bahwa pendaftaran telah **Lolos Verifikasi**
dan selanjutnya tim kami akan menghubungi melalui kontak whatsapp yang diberikan.

Salam,<br>
{{ config('app.name') }}
</x-mail::message>
