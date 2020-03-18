<?php

namespace App\Services;

use Exception;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailService
{
    public function send($template, $params, $to, $subject)
    {
        if (!config('mail.sender_email') || !config('mail.sender_name')) {
            return false;
        }

        if (!$subject) {
            return false;
        }

        try {
            $params = is_array($params) ? $params : ['text' => $params];

            $to = is_array($to) ? $to : ['email' => $to];

            Mail::send($template, $params, function (Message $mail) use ($subject, $to) {
                $mail->subject($subject);
                $mail->from(config('mail.sender_email'), config('mail.sender_name'));
                $mail->to($to['email'], isset($to['name']) ? $to['name'] : null);
            });
        } catch (Exception $exception) {
            Log::error($exception->getMessage(), ['file' => $exception->getFile(), 'line' => $exception->getLine()]);

            return false;
        }

        return true;
    }
}
