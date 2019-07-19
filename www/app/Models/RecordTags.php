<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $record_id
 * @property int $tag_id
 * @property string $created_at
 * @property string $updated_at
 */
class RecordTags extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['record_id', 'tag_id', 'created_at', 'updated_at'];

}
