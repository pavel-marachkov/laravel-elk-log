# Laravel with ElasticSearch Implementation


This package is fork from [ahmedofali/laravel-elk-log](https://github.com/ahmedofali/laravel-elk-log).
That package is simple initializer of elasticsearch logs for kibana with laravel. 

## Installation

Add repository to your composer.json file:
```json
{
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/pavel-marachkov/laravel-elk-log"
        }
    ]
}
```
and install the package via composer:

``` bash
composer require pavel-marachkov/laravel-elk-log
```

## Usage

Run the below command to get installation tips. 

``` bash
php artisan elk:installTips
```

Merge this with logging.php config file 
```php

return [

    'channels' => [
        'elastic' => [
            'driver' => 'monolog',
            'handler' => ElasticsearchHandler::class,
            'level' => 'debug',
            'formatter' => KibanaFormatter::class
        ],
    ],

];

```

After you publish config file you will find new config file called elk.php add your environment configuration and you are ready to go with elasticsearch.   

## Credits

- [pavel-marachkov](https://github.com/pavel-marachkov)
