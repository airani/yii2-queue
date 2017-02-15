<?php

namespace yii\queue\gearman;

use yii\queue\Command as BaseCommand;

/**
 * Manages application gearman-queue.
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
class Command extends BaseCommand
{
    /**
     * @var Driver
     */
    public $driver;

    /**
     * Listens gearman-queue and runs new jobs.
     * It can be used as demon process.
     */
    public function actionListen()
    {
        $this->driver->listen();
    }
}