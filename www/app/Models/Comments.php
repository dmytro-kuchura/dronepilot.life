<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $record_id
 * @property int $reply_comment_id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property string $ip
 * @property string $user_agent
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Comments extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['record_id', 'reply_comment_id', 'name', 'email', 'message', 'ip', 'user_agent', 'status', 'created_at', 'updated_at'];

}
