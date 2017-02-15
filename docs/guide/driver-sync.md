Syncronous Driver
=================

Runs tasks syncronously in the same process if `handle` property is turned on. Could be used when developing and debugging
application.

Configuration example:

```php
return [
    'components' => [
        'queue' => [
            'class' => \yii\queue\Queue::class,
            'driver' => [
                'class' => \yii\queue\sync\Driver::class,
                'handle' => false, // if tasks should be executed immediately
            ],
        ],
    ],
];
```
