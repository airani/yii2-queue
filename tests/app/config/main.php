<?php
return [
    'id' => 'yii2-queue-app',
    'basePath' => dirname(__DIR__),
    'vendorPath' => dirname(dirname(dirname(__DIR__))) . '/vendor',
    'bootstrap' => [
        'dbQueue',
        'redisQueue',
        'amqpQueue',
    ],
    'components' => [
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host=localhost;dbname=yii2_queue_test',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'attributes' => [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET sql_mode = "STRICT_ALL_TABLES"',
            ],
        ],
        'redis' => [
            'class' => \yii\redis\Connection::class,
            'database' => 2,
        ],
        'syncQueue' => [
            'class' => \yii\queue\Queue::class,
            'driver' => \yii\queue\sync\Driver::class,
        ],
        'dbQueue' => [
            'class' => \yii\queue\Queue::class,
            'driver' => [
                'class' => \yii\queue\db\Driver::class,
                'mutex' => \yii\mutex\MysqlMutex::class,
            ],
        ],
        'redisQueue' => [
            'class' => \yii\queue\Queue::class,
            'driver' => \yii\queue\redis\Driver::class,
        ],
        'amqpQueue' => [
            'class' => \yii\queue\Queue::class,
            'driver' => \yii\queue\amqp\Driver::class,
        ],
    ],
];