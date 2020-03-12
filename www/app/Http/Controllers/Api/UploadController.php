<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Services\UploadService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImageUploadRequest;
use Illuminate\Support\Facades\Log;

class UploadController extends Controller
{
    protected $service;

    public function __construct(UploadService $uploadService)
    {
        $this->service = $uploadService;
    }

    public function upload(ImageUploadRequest $request)
    {
        try {
            $path = $this->service->upload($request);

            Log::info('File upload successful!', ['file' => $path]);
        } catch (Exception $exception) {
            Log::error('File upload failed!', [
                'exception' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine(),
            ]);

            return $this->returnResponse([
                'success' => false,
            ], 400);
        }

        return $this->returnResponse([
            'success' => true,
            'uploaded' => true,
            'url' => $path,
        ]);
    }
}
