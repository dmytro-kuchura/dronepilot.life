<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class UploadService
{
    public function upload($request)
    {
        $path = Storage::disk('s3')->put('images/originals', $request->file);

        $request->merge([
            'size' => $request->file->getClientSize(),
            'path' => $path
        ]);

        return $path;
    }
}
