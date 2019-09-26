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
 * @property string $content
 * @property integer $status
 * @property int $views
 * @property string $created_at
 * @property string $updated_at
 */
class Map extends Model
{
    const STATUS_AVAILABLE = 1;

    const STATUS_DISABLE = 0;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'map';

    /**
     * @var array
     */
    protected $fillable = ['name', 'alias', 'title', 'keywords', 'description', 'content', 'status', 'views', 'created_at', 'updated_at'];

}
