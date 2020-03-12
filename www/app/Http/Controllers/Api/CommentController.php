<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Services\EmailService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentsRequest;
use App\Repositories\CommentsRepository;
use Illuminate\Support\Facades\Log;

class CommentController extends Controller
{
    protected $service;

    protected $commentsRepository;

    public function __construct(
        CommentsRepository $commentsRepository,
        EmailService $service
    )
    {
        $this->service = $service;
        $this->commentsRepository = $commentsRepository;
    }

    public function comment(CommentsRequest $request)
    {
        try {
            $this->commentsRepository->create($request->all());

            Log::info('Save comment!', $request->all());
        } catch (Exception $exception) {
            Log::warning('Save comment failed!', [
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
        ]);
    }
}
