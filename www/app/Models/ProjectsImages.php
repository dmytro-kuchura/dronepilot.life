<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $record_id
 * @property string $image
 * @property int $like
 * @property string $created_at
 * @property string $updated_at
 */
class ProjectsImages extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['record_id', 'image', 'like', 'created_at', 'updated_at'];

}
