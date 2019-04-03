<?php

namespace App\Repositories;

use App\Models\Records;

class CommentsRepository
{
    public function getCommentsByRecordId($id)
    {
        $query = Records::where('status', 1)->where('record_id', $id)->get();

        $result = [];

        foreach ($query as $obj) {
            $result[$obj->rebly_comment_id] = $obj;
        }

        return $result;
    }
}
