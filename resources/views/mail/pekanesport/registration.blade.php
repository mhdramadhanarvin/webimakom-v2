<x-mail::message>
# Hai, {{ $notifiable->player_name[0] }}

Terima kasih sudah mendaftar pada **Pekan E-Sport Vol. 2**
Berikut rangkuman data yang kami terima.

@php
    switch ($notifiable->game_id) {
        case 1:
            # code...
            $game = "VALORANT";
            break;

        case 2:
            # code...
            $game = "PUBGM";
            break;

        case 3:
            # code...
            $game = "MOBILE LEGEND";
            break;

        case 4:
            # code...
            $game = "FREE FIRE";
            break;

        case 5:
            # code...
            $game = "PS FOOTBALL";
            break;

        case 6:
            # code...
            $game = "MAGIC CHESS - MOBILE LEGENDS";
            break;

        case 7:
            # code...
            $game = "DYNASTONES";
            break;

        default:
            # code...
            $game = "";
            break;
    }
@endphp
<x-mail::table>
|                 |                                    |
| --------------- |:----------------------------------:|
| Cabor Game      | {{ $game }}                        |
| Nama Tim        | {{ $notifiable->team_name }}       |
| Nomor Whatsapp  | {{ $notifiable->whatsapp_number }} |
@foreach ($notifiable->player_name as $key => $player_name)
    @if ($key === 0)
    | Nama Pemain | {{ $player_name }} |
    @else
    | | {{ $player_name }} |
    @endif
@endforeach
@foreach ($notifiable->nickname_player as $key => $nickname_player)
    @if ($key === 0)
    | Nickname Pemain | {{ $nickname_player }} |
    @else
    | | {{ $nickname_player }} |
    @endif
@endforeach
@foreach ($notifiable->id_player as $key => $id_player)
    @if ($key === 0)
    | ID Pemain | {{ $id_player }} |
    @else
    | | {{ $id_player }} |
    @endif
@endforeach
</x-mail::table>

<x-mail::subcopy>
</x-mail::subcopy>

Mohon simpan pesan ini sebagai bukti bahwa telah melakukan pendaftaran.
Silahkan tunggu maks. 2x24 jam untuk dilakukan verifikasi data. Dan akan diinformasikan melalui email.

Salam,<br>
{{ config('app.name') }}
</x-mail::message>
