<?php

namespace App\Console\Commands;

use App\Models\PekanEsport;
use App\Services\InterventionImage;
use Illuminate\Console\Command;
use Illuminate\Http\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ReduceCurrentImageSize extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reduce-current-image-size';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $pekanEsport = PekanEsport::all();

        foreach ($pekanEsport as $pe) {
            foreach ($pe->screenshot_profile_player as $ss) {
                $url = Str::remove('public/', asset('storage/' . $ss));
                $file = Storage::get($ss);
                dd(new File($file));
                $path = (new InterventionImage($url, 'public/proof_of_payment', true))->compress(60);
                $this->info($path);
                break;
            }
        }
    }
}
