<?php

namespace App\Services\Logs;

use App\Events\LogMonologEvent;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;

class LogHandler extends AbstractProcessingHandler
{
    public function __construct($level = Logger::DEBUG)
    {
        parent::__construct($level);
    }

    protected function write(array $record)
    {
        event(new LogMonologEvent($record));
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new LogFormatter();
    }
}
