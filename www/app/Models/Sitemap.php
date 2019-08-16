<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $slug
 * @property string $change_freq
 * @property string $priority
 * @property string $created_at
 * @property string $updated_at
 */
class Sitemap extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sitemap';

    /**
     * @var array
     */
    protected $fillable = ['slug', 'change_freq', 'priority', 'created_at', 'updated_at'];

}
