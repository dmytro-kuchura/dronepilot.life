<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'logs';
    /**
     * @var array $guarded
     */
    protected $guarded = ['id'];
}
