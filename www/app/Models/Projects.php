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
 * @property string $created_at
 * @property string $updated_at
 */
class Projects extends Model
{
    const STATUS_ACTIVE = 1;

    const STATUS_DISABLE = 0;

    const WORK_TYPE_PHOTO = 'type_photo';

    const WORK_TYPE_PANORAMA = 'type_panorama';

    const WORK_TYPE_VIDEO = 'type_video';

    /**
     * @var array
     */
    protected $fillable = ['name', 'alias', 'title', 'keywords', 'description', 'content', 'views', 'image', 'status', 'created_at', 'updated_at'];

}
