<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $ip
 * @property string $country
 * @property string $url
 * @property string $city
 * @property string $referer
 * @property string $user_agent
 * @property string $created_at
 * @property string $updated_at
 */
class Settings extends Model
{
    const STATUS_AVAILABLE = 1;

    const STATUS_DISABLE = 0;

    /**
     * @var array
     */
    protected $fillable = ['ip', 'country', 'url', 'city', 'referer', 'user_agent', 'created_at', 'updated_at'];

}
