<?php

namespace App\Repositories;

use App\Models\Comments;
use Illuminate\Support\Carbon;

class CommentsRepository
{
    protected $model = Comments::class;

    public function create($request)
    {
        if (self::checkByIP(geoip()->getLocation()->ip)) {
            $model = new Comments();

            $model->record_id = $request['record_id'];
            $model->name = $request['name'];
            $model->email = $request['email'];
            $model->message = $request['message'];
            $model->status = Comments::STATUS_NOT_APPROVED;
            $model->ip = geoip()->getLocation()->ip;
            $model->user_agent = request()->header('User-Agent');

            return $model->save();
        } else {
            return false;
        }
    }

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

    public function last()
    {
        return Comments::limit(3)->orderBy('created_at', 'desc')->get();
    }

    public function checkByIP($ip)
    {
        $model = Comments::where('ip', $ip)->orderby('id', 'desc')->first();

        return is_null($model) || Carbon::now()->diffInMinutes(Carbon::parse($model->created_at)) > 15;
    }
}
