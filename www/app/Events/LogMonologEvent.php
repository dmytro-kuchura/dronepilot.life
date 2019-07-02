<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class LogMonologEvent
{
    use SerializesModels;
    /**
     * @var
     */
    public $records;

    public function __construct(array $records)
    {
        $this->records = $records;
    }
}
