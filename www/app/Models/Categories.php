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
class Categories extends Model
{
    const STATUS_AVAILABLE = 1;

    const STATUS_DISABLE = 0;

    /**
     * @var array
     */
    protected $fillable = ['name', 'alias', 'title', 'keywords', 'description', 'status', 'created_at', 'updated_at'];

}
