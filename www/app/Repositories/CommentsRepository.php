<?php

namespace App\Repositories;

use App\Models\Comments;

class CommentsRepository
{
    public function getCommentsByRecordId($id)
    {
        $query = Comments::where('status', 1)->where('record_id', $id)->get();

        $result = [];

        foreach ($query as $obj) {
            $result[$obj->reply_comment_id][] = $obj;
        }

        return $result;
    }

    public function getCommentsCountByRecordId($id)
    {
        return Comments::where('status', 1)->where('record_id', $id)->count();
    }
}
