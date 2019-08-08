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
 * @property int $views
 * @property string $image
 * @property integer $status
 * @property integer $category_id
 * @property string $created_at
 * @property string $updated_at
 */
class Records extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id', 'name', 'alias', 'title', 'keywords', 'description', 'content', 'views', 'image', 'status',  'category_id', 'created_at', 'updated_at'];
}
