<?php

namespace App\Services;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class InterventionImage
{
    protected $file;
    protected $pathDestination;
    protected $manager;

    public function __construct($file, $pathDestination, $existingFile = false)
    {
        $this->file = $file;
        $this->pathDestination = $pathDestination;
        $this->manager = Image::make($existingFile == false ? $this->file->getRealPath() : $this->file);
    }

    public function compress($quality)
    {
        $this->manager->resize(1000, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('data-url', $quality);
        $encoded = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->manager));
        $tmpFilePath = sys_get_temp_dir() . '/' . Str::uuid()->toString();
        file_put_contents($tmpFilePath, $encoded);
        $tmpFile = new File($tmpFilePath);
        $fullUrl = (string) Storage::putFileAs(
            $this->pathDestination,
            $tmpFile,
            md5(uniqid(rand(), true)) . "." . $this->file->getClientOriginalExtension()
        );

        return Str::remove('public/', $fullUrl);
    }
}
