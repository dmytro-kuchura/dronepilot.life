<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class UploadService
{
    public function upload($request)
    {
        $path = Storage::disk('s3')->put('/photos', $request->upload);

        return 'https://dronepilot.s3-eu-west-1.amazonaws.com/' . $path;
    }
}
