<?php

declare(strict_types=1);

namespace App\Factories;

use Monolog\Formatter\JsonFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\LogRecord;

use function is_array;
use function request;
use function uniqid;

final class LoggerFactory extends StreamHandler
{
    public function __construct()
    {
        parent::__construct('php://stdout', Level::Info);
        $this->setFormatter(new JsonFormatter());
    }

    public function handle(LogRecord $record): bool
    {
        if (is_array($record['extra'])) {
            $record['extra']['trace_id'] = $this->getTraceId();
        }

        return parent::handle($record);
    }

    private function getTraceId(): string
    {
        return request()->header('X-Trace-ID', uniqid());
    }
}
