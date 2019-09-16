<?php

namespace App\Helpers;

use App\Repositories\TagsSelectedRepository;

class Tags
{
    public static function update($record, $request)
    {
        $repository = new TagsSelectedRepository();
        $repository->update($record, $request);
    }
}
