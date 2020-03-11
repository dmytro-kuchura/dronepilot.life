<?php

namespace App\Helpers;

use Image;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class Upload
{
    /**
     * Upload image
     *
     * @param $request
     * @param $params
     * @return string
     */
    public static function save($request, $params)
    {
        if (isset($request['file'])) {
            $image = Request::file('file');

            $filename = Str::random(25) . '.' . $image->getClientOriginalExtension();

            foreach ($params as $key => $value) {
                if (isset($value['width'])) {
                    $img = Image::make($image)->fit($value['width'], $value['height'])->encode('jpg');

                    // paste another image
                    // $img->insert(public_path('images/bar.png'));

                    // create a new Image instance for inserting
                    // $watermark = Image::make(public_path('watermark.png'));
                    // $img->insert($watermark, 'center');

                    // insert watermark at bottom-right corner with 10px offset
                    // $img->insert(public_path('images/bar.png'), 'bottom-right', 10, 10);
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
