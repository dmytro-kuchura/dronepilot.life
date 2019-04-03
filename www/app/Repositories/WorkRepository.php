<?php

namespace App\Repositories;

use App\Models\Projects;

class WorkRepository extends Repository
{
    public function all()
    {
        $records = Projects::where('status', 1)->get();

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
        return Projects::where('status', 1)->where('alias', $alias)->first();
    }
}
