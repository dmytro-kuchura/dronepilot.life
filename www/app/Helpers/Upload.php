<?php

namespace App\Helpers;

use Image;
use Exception;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class Upload
{
    /**
     * Upload image
     *
     * @param $request
     * @return string
     */
    public static function save($request)
    {
        if (isset($request['file'])) {
            $image = Input::file('file');

            $params = config('images.blog');
            $filename = str_random(25) . '.' . $image->getClientOriginalExtension();

            foreach ($params as $key => $value) {
                if (isset($value['width'])) {
                    $img = Image::make($image)->fit($value['width'], $value['height'])->encode('jpg');
                } else {
                    $img = Image::make($image)->encode('jpg');
                }
                try {
                    Storage::disk('public')->put($value['path'] . '/' . $filename, (string)$img);
                } catch (Exception $exception) {
                    throw new BadRequestHttpException($exception->getMessage());
                }
            }

            return $filename;
        }
    }
}
