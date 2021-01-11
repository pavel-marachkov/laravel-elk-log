<?php

use Elklog\ElkHandler;
use Elklog\Formatter\KibanaFormatter;

return [
    'default' => env('LOG_CHANNEL', 'elastic'),

    'channels' => [
        'elastic' => [
            [ 'driver', 'monolog' ],
            [ 'handler', ElkHandler::class ],
            [ 'level',  'notice' ],
            [ 'formatter',  KibanaFormatter::class ]
        ],
    ],
];
