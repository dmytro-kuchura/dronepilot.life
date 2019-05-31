<?php


namespace App\Services;


use Exception;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class EmailService
{
    public static function send($template, array $params, array $to, $subject)
    {
        if (!$subject) {
            return false;
        }

        $params = is_array($params) ? $params : ['text' => $params];

        try {
            Mail::send($template, $params, function (Message $mail) use ($subject, $to) {
                $mail->subject($subject);
                $mail->from(config('mail.sender_email'), config('mail.sender_name'));
                $mail->to($to['email'], isset($to['name']) ? $to['name'] : null);
            });
        } catch (Exception $exception) {
            return false;
        }

        return true;
    }
}
