<?php

return [
    'live' => [
        'enabled' => true,
        'schema' => 'http',
        'domain' => 'you_elasticsearch_1',
        'port' => '9200',
        'index' => 'laravel_live',
        'type' => '_doc'
    ],
    'local' => [
        'enabled' => false,
        'schema' => 'http',
        'domain' => 'you_elasticsearch_1',
        'port' => '9200',
        'index' => 'laravel_local',
        'type' => '_doc'
    ]
];
