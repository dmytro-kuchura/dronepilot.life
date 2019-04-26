<?php

namespace App\Repositories;

use App\Models\Records;

class BlogRepository
{
    public function all()
    {
        $records = Records::where('status', 1)->get();

        $result = [];

        foreach ($records as $key => $obj) {
            if ($key & 1) {
                $result['left'] = $obj;
            } else {
                $result['right'] = $obj;
            }
        }

        return $result;
    }

    public function getByAlias($alias)
    {
        return Records::where('status', 1)->where('alias', $alias)->first();
    }

    public function list()
    {
        $records = Records::all();

        return $records;
    }
}
