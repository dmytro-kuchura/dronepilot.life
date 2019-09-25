<?php

namespace App\Models;

use App\Traits\ShortDescription;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $alias
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $content
 * @property string $short
 * @property int $views
 * @property string $image
 * @property integer $status
 * @property integer $category_id
 * @property string $created_at
 * @property string $updated_at
 */
class Records extends Model
{
    use ShortDescription;

    const STATUS_AVAILABLE = 1;

    const STATUS_DISABLE = 0;

    /**
     * @var array
     */
    protected $fillable = ['id', 'name', 'alias', 'title', 'keywords', 'description', 'short', 'content', 'views', 'image', 'status',  'category_id', 'created_at', 'updated_at'];

    public function getShortAttribute()
    {
        return $this->getShortContent($this->content);
    }
}
