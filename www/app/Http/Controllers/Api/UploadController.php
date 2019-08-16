<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Log;
use App\Services\UploadService;
use App\Http\Requests\ImageUploadRequest;

class UploadController extends Controller
{
    public function upload(ImageUploadRequest $request)
    {
        try {
            $service = new UploadService();

            $path = $service->upload($request);

            Log::info("File upload successful!", ["file" => $path]);
        } catch (Exception $exception) {
            Log::error("File upload failed!", [
                "exception" => $exception->getMessage(),
                "file" => $exception->getFile(),
                "line" => $exception->getLine(),
            ]);

            return $this->returnResponse([
                "success" => false,
            ], 400);
        }

        return $this->returnResponse([
            "success" => true,
            "uploaded" => true,
            "url" => $path,
        ]);
    }
}
