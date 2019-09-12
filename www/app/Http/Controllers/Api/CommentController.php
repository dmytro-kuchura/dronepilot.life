<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\CommentsRequest;
use App\Repositories\CommentsRepository;
use App\Services\EmailService;

class CommentController extends Controller
{
    protected $service;

    public function __construct(EmailService $service)
    {
        $this->service = $service;
    }

    public function comment(CommentsRequest $request)
    {
        $repository = new CommentsRepository();

        try {
            $repository->create($request->all());

            Log::info("Save comment!", $request->all());
        } catch (Exception $exception) {
            Log::warning("Save comment failed!", [
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
        ]);
    }
}