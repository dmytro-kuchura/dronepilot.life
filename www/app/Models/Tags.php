<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $alias
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Tags extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'alias', 'title', 'keywords', 'description', 'status', 'created_at', 'updated_at'];

}
