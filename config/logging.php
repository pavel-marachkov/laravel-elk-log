<?php

use Monolog\Handler\ElasticsearchHandler ;
use Elklog\Formatter\KibanaFormatter;

return [
    'default' => env('LOG_CHANNEL', 'elastic'),

    'channels' => [
        'elastic' => [
            [ 'driver', 'monolog' ],
            [ 'handler', ElasticsearchHandler::class ],
            [ 'level',  'debug' ],
            [ 'formatter',  KibanaFormatter::class ]
        ],
    ],
];
